<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Form APL 02 {{$data['participant']->registration->nama_lengkap}}</title>
  </head>
  <body>
    

    
    <div class="container">
        <table class="table table-bordered text-left">
            <tr>
                <th rowspan="3">Skema Sertifikasi / Klaster Asesmen*</th>
            </tr>
            <tr>
                <th>Judul</th>
                <th>:</th>
                <th style="text-transform: uppercase;">{{$data['participant']->registration->cluster->judul_cluster}}</th>
            </tr>
            <tr>
                <th>Nomor</th>
                <th>:</th>
                <th>KKNI {{$data['participant']->registration->cluster->department->level_jurusan}} TKJ / KLASTER {{$data['participant']->registration->cluster->no_cluster}}</th>
            </tr>
            <tr>
                <th colspan="2">TUK</th>
                <th>:</th>
                <th>Sewaktu / Tempat Kerja / Mandiri*</th>
            </tr>
            <tr>
                <th colspan="2">Nama Asesor</th>
                <th>:</th>
                <th>{{$data['asesor']->nama_lengkap}}</th>
            </tr>
            <tr>
                <th colspan="2">Nama Peserta</th>
                <th>:</th>
                <th>{{$data['participant']->registration->nama_lengkap}}</th>
            </tr>
            <tr>
                <th colspan="2">Tanggal</th>
                <th>:</th>
                <td></td>
            </tr>
        </table>
        <span><p><i>* Coret yang tidak perlu</i></p></span>

        <p> <b>
        Peserta diminta untuk:  
            <br>
            1.	Mempelajari Kriteria Unjuk Kerja  (KUK), Batasan Variabel, Panduan Penilaian, dan Aspek Kritis seluruh Unit Kompetensi yang diminta untuk di Ases.
            <br>
            2.	Melaksanakan Penilaian Mandiri secara obyektif atas sejumlah pertanyaan yang diajukan, bilamana Anda menilai diri sudah kompeten atas pertanyaan tersebut, tuliskan tanda  pada kolom (K), dan bilamana Anda menilai diri belum kompeten tuliskan tanda  pada kolom (BK).
            <br>
            3.	Mengisi bukti-bukti kompetensi yang relevan atas sejumlah pertanyaan yang dinyatakan Kompeten (bila ada). 
            <br>
            4.	Menandatangani form Asesmen Mandiri.
            </b>
        </p>
        <br><br>
        <form action="" method="POST">
        @foreach($data['competence'] as $competence)
        @if(!$competence->element->isEmpty())
        <table class="table table-bordered mt-4 text-center">
            <thead>
                <tr>
                    <th rowspan="2" style="line-height: 100px;">Uji Kompetensi No. {{$loop->iteration}}</th>
                    <th>Kode Unit</th>
                    <th>:</th>
                    <th>{{$competence->kode_unit}}</th>
                </tr>
                <tr>
                    <th>Judul Unit</th>
                    <th>:</th>
                    <th>{{$competence->judul_unit}}</th>
                </tr>
            </thead>
        </table>
        @endif
        @foreach($competence->element as $element)
        <table class="table table-bordered mt-2 text-center">
            <thead>
                <tr>
                    <th>Elemen Kompetensi</th>
                    <th>:</th>
                    <th colspan="6">{{$loop->iteration}}. {{$element->elemen_kompetensi}}</th>
                </tr>
                <tr class="table-primary">
                    <th rowspan="2" style="line-height: 100px;">No. KUK</th>
                    <th rowspan="2" style="line-height: 100px;">Daftar Pertanyaan (Asesmen Mandiri/Self  Assessment)</th>
                    <th colspan="2">Penilaian</th>
                    <th colspan="4">Asesor</th>
                </tr>
                <tr class="table-primary">
                    <th>K</th>
                    <th>BK</th>
                    @foreach($data['valid_answer'] as $validAnswer)
                    <th>{{$validAnswer->jawaban}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($element->question as $question)
                <tr>
                    <th>{{$question->no_kuk}}</th>
                    <td width="80%">{{$question->daftar_pertanyaan}}</td>
                    @foreach($data['answer'] as $answer)
                        @if($answer->id_pertanyaan == $question->id)
                            @if($answer->jawaban == 'K')
                                <td><span class="check">&#x2713;</span></td>
                                <td></td>
                            @else
                                <td></td>
                                <td><span class="check">&#x2713;</span></td>
                            @endif
                        @endif
                    @endforeach
                    @foreach($data['valid_answer'] as $validAnswer)
                        <?php $answerStat = false ?>
                        @foreach($data['asesor_answer'] as $asesorAnswer)
                            @if($asesorAnswer->id_pertanyaan === $question->id && $asesorAnswer->id_jawaban === $validAnswer->id)
                                <?php $answerStat = true ?>
                                <td><span class="check">&#x2713;</span></td>
                            @endif
                        @endforeach
                        @if($answerStat == false)
                            <td></td>
                        @endif
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
        @endforeach
        @endforeach
        <table class="table table-bordered text-left">
            <tr>
                <th>Rekomendasi Asesor</th>
                <th colspan="2">Peserta   :</th>
            </tr>
            <tr>
                <td rowspan="3">
                    <p>1. Asesmen dapat / tidak dapat *) dilanjutkan</p>
                    <p>2. Proses Asesmen dapat dilanjutkan melalui</p>
                    &#20; Asesmen Portfolio
                    <br>
                    &#20; Uji Kompetensi
                </td>
            </tr>
            <tr>
                <td width="10%">Nama</td>
                <td width="30%">{{$data['participant']->registration->nama_lengkap}}</td>
            </tr>
            <tr>
                <td>Tanda Tangan / Tanggal</td>
                <td></td>
            </tr>
            <tr>
                <th>Catatan</th>
                <th colspan="2">Asesor :</th>
            </tr>
            <tr>
                <td rowspan="4"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{$data['asesor']->nama_lengkap}}</td>
            </tr>
            <tr>
                <td>No Reg</td>
                <td>{{$data['asesor']->no_reg}}</td>
            </tr>
            <tr>
                <td>Tanda Tangan / Tanggal</td>
                <td></td>
            </tr>
        </table>
        </form>
        <br><br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpatd.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            window.print()
        })
    </script>
  </body>
</html>