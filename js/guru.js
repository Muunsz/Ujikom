document.addEventListener('DOMContentLoaded', function() {
    const reportForm = document.getElementById('reportForm');
    const reportTable = document.getElementById('reportTable');
    const addReportBtn = document.getElementById('addReportBtn');
    let reports = JSON.parse(localStorage.getItem('reports')) || [];
    let ekskulCounter = 1;
    let editIndex = -1; // -1 means not in edit mode

    function renderReports() {
        const tbody = reportTable.querySelector('tbody');
        tbody.innerHTML = '';
        reports.forEach((report, index) => {
            const row = tbody.insertRow();
            row.innerHTML = `
                <td>${report.nama}</td>
                <td>${report.nis}</td>
                <td>${report.diterimaDiKelas}</td>
                <td>
                    <img src="${report.fotoURL || ''}" alt="Foto Siswa" style="width: 50px; height: auto; border-radius: 5px;">
                </td>
                <td>
                    <button class="editBtn" data-index="${index}">Edit</button>
                    <button class="deleteBtn" data-index="${index}">Hapus</button>
                </td>
            `;
        });
        console.log("Rendered Reports:", reports); // Debug
    }

    function saveReports() {
        localStorage.setItem('reports', JSON.stringify(reports));
    }

    reportForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(reportForm);
        const fotoFile = formData.get('fotoSiswa');
        let fotoURL = '';

        if (fotoFile && fotoFile.size > 0) {
            const reader = new FileReader();
            reader.onload = function(event) {
                fotoURL = event.target.result; // Base64 URL of the file
                saveReportData(fotoURL);
            };
            reader.readAsDataURL(fotoFile);
        } else {
            fotoURL = reportForm.dataset.fotoURL || ''; // Use old photo if no new file
            saveReportData(fotoURL);
        }
    });

    function saveReportData(fotoURL) {
        const formData = new FormData(reportForm);
        const reportData = Object.fromEntries(formData.entries());
        reportData.fotoURL = fotoURL;

        if (editIndex > -1) {
            // Update the report being edited
            reports[editIndex] = reportData;
            editIndex = -1; // Reset after editing
        } else {
            // Add new report
            reports.push(reportData);
        }

        saveReports();
        renderReports();
        reportForm.reset();
        delete reportForm.dataset.fotoURL; // Clear the stored photo URL
        alert('Raport berhasil disimpan!');
    }

    reportTable.addEventListener('click', function(e) {
        if (e.target.classList.contains('editBtn')) {
            console.log("Edit button clicked");
            editIndex = parseInt(e.target.dataset.index);
            const report = reports[editIndex];
            console.log("Report to Edit:", report); // Debug

            if (report) {
                Object.keys(report).forEach((key) => {
                    const field = reportForm.elements[key];
                    if (field) {
                        if (field.type === 'file') {
                            // For file input, we can't set its value directly
                            // Instead, we'll store the photo URL in the form's dataset
                            reportForm.dataset.fotoURL = report.fotoURL || '';
                        } else {
                            field.value = report[key];
                        }
                    }
                });

                // Handle ekstrakurikuler fields
                for (let i = 1; i <= 3; i++) {
                    const ekskulField = reportForm.elements[`ekskul${i}`];
                    const nilaiEkskulField = reportForm.elements[`nilaiEkskul${i}`];
                    if (ekskulField && nilaiEkskulField) {
                        ekskulField.value = report[`ekskul${i}`] || '';
                        nilaiEkskulField.value = report[`nilaiEkskul${i}`] || '';
                    }
                }

                window.scrollTo(0, reportForm.offsetTop); // Scroll to the top to see the form
            } else {
                console.error("Report not found!");
            }
        } else if (e.target.classList.contains('deleteBtn')) {
            const index = parseInt(e.target.dataset.index);
            if (confirm('Apakah Anda yakin ingin menghapus raport ini?')) {
                reports.splice(index, 1);
                saveReports();
                renderReports();
            }
        }
    });

    addReportBtn.addEventListener('click', function() {
        reportForm.reset();
        editIndex = -1; // Reset edit mode when adding a new report
        delete reportForm.dataset.fotoURL; // Clear the stored photo URL
        window.scrollTo(0, reportForm.offsetTop);
    });

    function tambahEkskul() {
        ekskulCounter++;
        const ekstrakurikulerDiv = document.getElementById('ekstrakurikuler');
        const newEkskulDiv = document.createElement('div');
        newEkskulDiv.innerHTML = `
            <label for="ekskul${ekskulCounter}">Ekstrakurikuler ${ekskulCounter}:</label>
            <input type="text" id="ekskul${ekskulCounter}" name="ekskul${ekskulCounter}">
            <select id="nilaiEkskul${ekskulCounter}" name="nilaiEkskul${ekskulCounter}">
                <option value="">Pilih</option>
                <option value="Baik">Baik</option>
                <option value="Cukup">Cukup</option>
                <option value="Kurang">Kurang</option>
            </select>
        `;
        ekstrakurikulerDiv.appendChild(newEkskulDiv);
    }

    function toggleMenu() {
        const navUl = document.querySelector('nav ul');
        navUl.classList.toggle('show');
    }

    // Close the mobile menu when a link is clicked
    document.querySelectorAll('nav a').forEach((link) => {
        link.addEventListener('click', () => {
            document.querySelector('nav ul').classList.remove('show');
        });
    });

    renderReports();
});

