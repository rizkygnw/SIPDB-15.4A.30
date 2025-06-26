<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bukti Pendaftaran Siswa Baru</title>
    <style>
        @page {
            margin: 1.5cm;
            size: A4;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 12px;
            line-height: 1.4;
            color: #333;
            background: #fff;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            border-bottom: 3px solid #2c5aa0;
            margin-bottom: 20px;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 10px;
            border-radius: 50%;
            background: #2c5aa0;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: bold;
        }

        h1 {
            font-size: 18px;
            color: #2c5aa0;
            margin: 0;
        }

        h2 {
            font-size: 14px;
            color: #666;
            margin: 5px 0;
        }

        .meta {
            font-size: 10px;
            color: #888;
        }

        .section {
            margin-bottom: 15px;
        }

        .section-title {
            background: #2c5aa0;
            color: white;
            padding: 6px 12px;
            font-weight: bold;
        }

        .section-body {
            border: 1px solid #ccc;
            border-top: none;
            padding: 10px;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }

        .grid .full {
            grid-column: 1 / -1;
        }

        .label {
            font-size: 10px;
            color: #555;
            font-weight: bold;
        }

        .value {
            font-size: 12px;
            margin-bottom: 6px;
        }

        .list {
            margin: 0;
            padding-left: 20px;
            font-size: 12px;
        }

        .badge {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            display: inline-block;
            font-weight: bold;
        }

        .approved {
            background: #28a745;
            color: white;
        }

        .pending {
            background: #ffc107;
            color: #856404;
        }

        .rejected {
            background: #dc3545;
            color: white;
        }

        .footer {
            margin-top: 25px;
            font-size: 10px;
            text-align: center;
            color: #888;
        }

        .label-top {
            font-weight: bold;
            margin-bottom: 60px;
            display: block;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="image/tut.png" alt="Logo Tut Wuri Handayani" style="width: 80px; height: 80px;" />
        <h1>SMK Lorem Ipsum Dolor</h1>
        <h2>Bukti Pendaftaran Siswa Baru</h2>
        <p class="meta">No. Dokumen: PPDB/2024/001234</p>
        <p class="meta">Diterbitkan pada: {{ date('d F Y') }}</p>
    </div>

    <div class="section">
        <div class="section-title">Informasi Siswa</div>
        <div class="section-body grid">
            <div>
                <div class="label">Nama Lengkap</div>
                <div class="value">{{ $student->name }}</div>
            </div>
            <div>
                <div class="label">Tanggal Lahir</div>
                <div class="value">{{ \Carbon\Carbon::parse($student->birth_date)->translatedFormat('d F Y') }}</div>
            </div>
            <div>
                <div class="label">NISN</div>
                <div class="value">{{ $student->nisn ?? '-' }}</div>
            </div>
            <div>
                <div class="label">No. Telepon</div>
                <div class="value">{{ $student->phone ?? '-' }}</div>
            </div>
            <div class="full">
                <div class="label">Alamat Lengkap</div>
                <div class="value">{{ $student->address }}</div>
            </div>
            <div class="full">
                <div class="label">Sekolah Asal</div>
                <div class="value">{{ $student->school_origin }}</div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Jurusan yang Dipilih</div>
        <div class="section-body">
            <ul class="list">
                @foreach($student->departments as $index => $department)
                    <li>Pilihan {{ $index + 1 }}: {{ $department->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Status Pendaftaran</div>
        <div class="section-body" style="text-align: center">
            <span class="badge {{ strtolower($student->status) }}">{{ $student->status }}</span>
            <p class="meta" style="margin-top: 6px;">Diperbarui: {{ $student->updated_at->translatedFormat('d F Y, H:i') }} WIB</p>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Informasi Tambahan</div>
        <div class="section-body">
            <ul class="list">
                <li>Simpan bukti pendaftaran ini dengan baik.</li>
                <li>Pantau status pendaftaran melalui website resmi sekolah.</li>
                <li>Hubungi panitia PPDB jika ada pertanyaan.</li>
                <li>Dokumen ini berlaku sebagai bukti sah pendaftaran.</li>
            </ul>
        </div>
    </div>

    <div class="footer">
        Dokumen ini dibuat secara elektronik dan sah tanpa tanda tangan basah.<br>
        SMK Negeri 1 Example | Jl. Pendidikan No. 123, Kota Example | Telp: (021) 1234567<br>
        Website: www.smkn1example.sch.id | Email: info@smkn1example.sch.id
    </div>
</div>
</body>
</html>
