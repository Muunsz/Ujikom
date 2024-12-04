document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('studentLogin');
    const loginMessage = document.getElementById('loginMessage');
    const reportCard = document.getElementById('reportCard');
    const reportContent = document.getElementById('reportContent');
    let reportSelector;

    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const nis = document.getElementById('nis').value;
        const password = document.getElementById('password').value;

        // Simulate login (replace with actual authentication logic)
        if (nis === '12345' && password === 'password') {
            loginMessage.textContent = 'Login berhasil!';
            loginForm.style.display = 'none';
            reportCard.style.display = 'block';
            loadStudentInfo();
            
            // Initialize the ReportSelector after successful login
            reportSelector = new ReportSelector('reportSelect');
        } else {
            loginMessage.textContent = 'Raport yang dicari tidak ditemukan. Silakan cek kembali NIS atau password Anda.';
        }
    });

    reportSelect.addEventListener('change', function() {
        if (this.value) {
            reportContent.style.display = 'block';
            loadReportData(this.value);
            updatePancasilaProfile();
        } else {
            reportContent.style.display = 'none';
        }
    });

    function loadStudentInfo() {
        // Simulate loading student info (replace with actual data fetching)
        document.getElementById('studentName').textContent = 'Nama Siswa: John Doe';
        document.getElementById('studentNISN').textContent = 'NISN: 1234567890';
        document.getElementById('studentPhoto').src = 'https://via.placeholder.com/150';

        // Fill in student details
        document.getElementById('fullName').textContent = 'John Doe';
        document.getElementById('nisn').textContent = '1234567890';
        document.getElementById('nis').textContent = '12345';
        document.getElementById('birthInfo').textContent = 'Jakarta, 1 Januari 2005';
        document.getElementById('gender').textContent = 'Laki-laki';
        document.getElementById('religion').textContent = 'Islam';
        document.getElementById('familyStatus').textContent = 'Anak Kandung';
        document.getElementById('childNumber').textContent = '2';
        document.getElementById('address').textContent = 'Jl. Contoh No. 123, Jakarta';
        document.getElementById('phoneNumber').textContent = '021-1234567';
        document.getElementById('previousSchool').textContent = 'SMP Negeri 1 Jakarta';
        document.getElementById('acceptedClass').textContent = 'X RPL 1';
        document.getElementById('acceptanceDate').textContent = '15 Juli 2020';

        // Fill in parent info
        document.getElementById('fatherName').textContent = 'Budi Santoso';
        document.getElementById('motherName').textContent = 'Siti Rahayu';
        document.getElementById('parentAddress').textContent = 'Jl. Contoh No. 123, Jakarta';
        document.getElementById('parentPhoneNumber').textContent = '021-1234567';
        document.getElementById('fatherOccupation').textContent = 'Wiraswasta';
        document.getElementById('motherOccupation').textContent = 'Ibu Rumah Tangga';

        // Fill in guardian info (if any)
        document.getElementById('guardianName').textContent = '-';
        document.getElementById('guardianAddress').textContent = '-';
        document.getElementById('guardianPhoneNumber').textContent = '-';
        document.getElementById('guardianOccupation').textContent = '-';
    }

    function loadReportData(reportId) {
        // Simulate loading report data (replace with actual data fetching)
        const grades = [
            { subject: 'Pendidikan Agama', grade: 85, notes: 'Baik' },
            { subject: 'PPKN', grade: 80, notes: 'Cukup baik' },
            { subject: 'Bahasa Indonesia', grade: 90, notes: 'Sangat baik' },
            { subject: 'Matematika', grade: 75, notes: 'Perlu peningkatan' },
            { subject: 'Sejarah', grade: 88, notes: 'Baik' },
            { subject: 'Bahasa Inggris', grade: 82, notes: 'Baik' },
            { subject: 'Seni Budaya', grade: 95, notes: 'Sangat baik' },
            { subject: 'Prakarya dan Kewirausahaan', grade: 87, notes: 'Baik' },
            { subject: 'Pendidikan Jasmani, Olahraga, dan Kesehatan', grade: 92, notes: 'Sangat baik' },
            { subject: 'Muatan Lokal Bahasa Daerah', grade: 85, notes: 'Baik' },
            { subject: 'Simulasi dan Komunikasi Digital', grade: 88, notes: 'Baik' },
            { subject: 'Fisika', grade: 78, notes: 'Cukup' },
            { subject: 'Kimia', grade: 76, notes: 'Cukup' },
            { subject: 'Sistem Komputer', grade: 89, notes: 'Baik' },
            { subject: 'Komputer dan Jaringan Dasar', grade: 91, notes: 'Sangat baik' }
        ];

        const gradesTableBody = document.getElementById('gradesTableBody');
        gradesTableBody.innerHTML = '';
        grades.forEach(grade => {
            const row = `<tr>
                <td>${grade.subject}</td>
                <td>${grade.grade}</td>
                <td>${grade.notes}</td>
            </tr>`;
            gradesTableBody.innerHTML += row;
        });

        const extracurricular = [
            { activity: 'Pramuka', notes: 'Sangat Baik' },
            { activity: 'Futsal', notes: 'Baik' }
        ];

        const extracurricularTableBody = document.getElementById('extracurricularTableBody');
        extracurricularTableBody.innerHTML = '';
        extracurricular.forEach(activity => {
            const row = `<tr>
                <td>${activity.activity}</td>
                <td>${activity.notes}</td>
            </tr>`;
            extracurricularTableBody.innerHTML += row;
        });

        document.getElementById('sickDays').textContent = '3';
        document.getElementById('permissionDays').textContent = '2';
        document.getElementById('absentDays').textContent = '0';


        document.getElementById('processNotesContent').textContent = 'Siswa menunjukkan perkembangan yang baik dalam aspek akademik dan non-akademik. Perlu peningkatan dalam mata pelajaran Matematika dan Kimia. Siswa aktif dalam kegiatan ekstrakurikuler dan menunjukkan sikap yang baik dalam bersosialisasi dengan teman-temannya.';
    }

    function updatePancasilaProfile() {
        const profiles = [
            'collaboration', 'criticalThinking', 'creativity', 'independence',
            'faithDevelopment', 'globalDiversity', 'criticalThinkingCharacter'
        ];
        const options = ['Mulai Berkembang', 'Sedang Berkembang', 'Berkembang Sesuai Harapan', 'Sangat Berkembang'];

        profiles.forEach(profile => {
            const randomOption = options[Math.floor(Math.random() * options.length)];
            document.getElementById(profile).textContent = randomOption;
        });
    }
});

