<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <style>
        table {
            margin-left: 50px;
        }
        .sign {
            float: right;
        }
        p, tr td {
            font-size : 14px;
        }
        .header {
            width: 100%;
        }
        .e-sign {
            width : 150px;
        }
    </style>
</head>
<body>
        <img class="header" src="{{asset('public_html/__images/surat_tugas/header1.png')}}">
        <div class="content">
            <br><br>
            <p>Nomor        : No. 48 /SKK/LSP SMKN 26 JKT/2019 <br>
            Lampiran        : - <br>
            Perihal         : Permohonan Asesor Kompetensi</p>
            <br>
            <p>Kepada <br>
            Yth. Kepala SMKN 26 Jakarta <br>
            di. Tempat</p>

            <br>
            <p>Bersama ini kami mengajukan nama Asesor untuk kegiatan Sertifikasi Kompetensi Keahlian {{$data['participant']->cluster->department->nama_jurusan}} di LSP P1 SMK Negeri 26 Jakarta, maka ketua LSP P1 SMK Negeri 26 Jakarta menugaskan kepada :</p>
            <table style="margin-left: 50px">
                <tr>
                    <td>Nama</td>
                    <td style="width: 30px; text-align: center">:</td>
                    <td>{{$data['assessor']->nama_lengkap}}</td>
                </tr>
                <tr>
                    <td>No Reg</td>
                    <td style="width: 30px; text-align: center">:</td>
                    <td>{{$data['assessor']->no_reg}}</td>
                </tr>
            </table>

            <br>
            <p>Dapat diberikan ijin untuk melakukan Uji Kompetensi yang akan dilaksanakan pada :</p>
            <table style="margin-left: 50px">
                <tr>
                    <td>Hari / Tanggal</td>
                    <td style="width: 30px; text-align: center">:</td>
                    @if(($data['bulan_mulai'] == $data['bulan_selesai']) && ($data['tahun_mulai'] == $data['tahun_selesai']))
                    <td>{{$data['hari_mulai']}} - {{$data['hari_selesai']}}, {{$data['tanggal_mulai']}} - {{$data['tanggal_selesai']}} {{$data['bulan_selesai']}} {{$data['tahun_selesai']}}</td>
                    @else
                    <td>{{$data['hari_mulai']}} - {{$data['hari_selesai']}}, {{$data['tanggal_mulai']}} {{$data['bulan_mulai']}} {{$data['tahun_mulai']}} - {{$data['tanggal_selesai']}} {{$data['bulan_selesai']}} {{$data['tahun_selesai']}}</td>
                    @endif
                </tr>
                <tr>
                    <td>Pukul</td>
                    <td style="width: 30px; text-align: center">:</td>
                    <td>07:30 - Selesai</td>
                </tr>
                <tr>
                    <td>Tempat</td>
                    <td style="width: 30px; text-align: center">:</td>
                    <td>TUK LSP P1 {{$data['tempat_asesi']}}</td>
                </tr>
            </table>
            
            <br>
            <p>Demikian kami sampaikan, atas perhatianya kami ucapkan terimakasih</p>
            <br>
            <br>
            <div class="sign">
                <p>
                Jakarta, {{$data['tanggal_sign']}} {{$data['bulan_sign']}} {{$data['tahun_sign']}}<br>
                Ketua LSP P1 SMK Negeri 26 Jakarta
                </p>
                <img class="e-sign" src="{{asset('public_html/__images/surat_tugas/sign1.png')}}">
                <p>Drs. Undang Ahmad</p>
            </div>
        </div>
</body>
</html>