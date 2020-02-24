<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Detail</title>
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        
        <h1 class="mt-4">FR-APL-01. PERMOHONAN SERTIFIKASI KOMPETENSI</h1>

        <h3>Bagian 1 : Rincian Data Pemohon Sertifikasi</h3>
        <h4>a. Data Pribadi</h4>
        <div class="form-group">
            <label for="">Nama Lengkap : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->nama_lengkap}}">
        </div>
        <div class="form-group">
            <label for="">NIK : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->nik}}">
        </div>
        <div class="form-group">
            <label for="">Tempat / Tanggal Lahir</label>
            @php $tanggal_lahir = date('d-m-Y', strtotime($data['registrasi']->tanggal_lahir)) @endphp
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->tempat_lahir}}, {{$tanggal_lahir}}">
        </div>
        <div class="form-group">
            <label for="">Jenis Kelamin : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->jenis_kelamin}}">
        </div>
        <div class="form-group">
            <label for="">Kebangsaan : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->kebangsaan}}">
        </div>
        <div class="form-group">
            <label for="">No. Telp Rumah : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->no_telp_rumah}}">
        </div>
        <div class="form-group">
            <label for="">No. HP : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->no_hp}}">
        </div>
        <div class="form-group">
            <label for="">No. Kantor : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->no_kantor}}">
        </div>
        <div class="form-group">
            <label for="">Alamat Email : </label>
            <input type="text" class="form-control" readonly id="email" value="{{$data['registrasi']->email}}">
        </div>
        <div class="form-group">
            <label for="">Pendidikan Terakhir : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->pendidikan_terakhir}}">
        </div>


        <h4>a. Data Pekerjaan Sekarang</h4>
        <div class="form-group">
            <label for="">Nama Lembaga / Perusahaan : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->nama_perusahaan}}">
        </div>
        <div class="form-group">
            <label for="">Jabatan : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->jabatan}}">
        </div>
        <div class="form-group">
            <label for="">Alamat : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->alamat_perusahaan}}">
        </div>
        <div class="form-group">
            <label for="">Kode Pos : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->kode_pos_perusahaan}}">
        </div>
        <div class="form-group">
            <label for="">No Telp : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->no_telp_perusahaan}}">
        </div>
        <div class="form-group">
            <label for="">Fax : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->no_fax_perusahaan}}">
        </div>
        <div class="form-group">
            <label for="">Alamat Email : </label>
            <input type="text" class="form-control" readonly value="{{$data['registrasi']->email_perusahaan}}">
        </div>




        <h3 class="mt-5">Bagian 2 : Data Sertifikasi</h3>
        <table class="table table-bordered">
                <tr>
                    <th rowspan="2">Skema Sertifikasi <br> (KKNI / <strike>Okupasi</strike> / <strike>Klaster</strike> )*</th>
                    <th>Judul</th>
                    <th>:</th>
                    <th colspan="2" style="text-transform: uppercase;">{{$data['registrasi']->cluster->judul_cluster}}</th>
                </tr>
                <tr>
                    
                    <th>Nomor</th>
                    <th>:</th>
                    <th colspan="2">KKNI LEVEL 2 TKJ/KLASTER {{$data['registrasi']->cluster->no_cluster}}</th>
                </tr>
                <tr>
                    <th colspan="2">Tujuan Asesmen</th>
                    <th>:</th>
                    @if($data['registrasi']->tujuan_asesmen == 'Sertifikasi')
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked disabled>
                            <label class="form-check-label" for="exampleRadios1">
                              Sertifikasi
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" disabled>
                            <label class="form-check-label" for="exampleRadios1">
                              Sertifikasi Ulang
                            </label>
                        </div>
                    </td>
                    @else
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" disabled>
                            <label class="form-check-label" for="exampleRadios1">
                              Sertifikasi
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked disabled>
                            <label class="form-check-label" for="exampleRadios1">
                              Sertifikasi Ulang
                            </label>
                        </div>
                    </td>
                    @endif
                </tr>
        </table>



        <h4>Data Unit Kompetensi : </h4>
        <table class="table table-bordered text-center">
            <thead>
                <tr class="thead-dark">
                    <th>No.</th>
                    <th>Kode Unit</th>
                    <th>Judul Unit</th>
                    <th>Jenis Standar (Standar <br> Khusus / Standar <br> Internasional / SKKNI)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data['kompetensi'] as $kompetensi)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$kompetensi->kode_unit}}</td>
                    <td>{{$kompetensi->judul_unit}}</td>
                    <td>{{$kompetensi->jenis_standar}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>




        <h3 class="mt-5">Bagian 3 : Bukti Kelengkapan Pemohon</h3>
        <h4>a. Bukti kelengkapan persyaratan dasar pemohon</h4>

        <table class="table table-bordered text-center">
            <thead>
                <tr >
                    <th>No</th>
                    <th>Bukti Persyaratan</th>
                    <th>Status</th>
                    <th>Bukti</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Bukti kelengkapan 1</td>
                    <td>
                        <div class="form-group">
                            @if($data['registrasi']->status == 'pending')
                            <select class="form-control" id="bukti_kelengkapan_1" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="Memenuhi Syarat">Memenuhi Syarat</option>
                                <option value="Tidak Memenuhi Syarat">Tidak Memenuhi Syarat</option>
                            </select>
                            @else
                            <input type="text" class="form-control" readonly value="{{$data['registrasi']->participant->ket_bukti_kelengkapan_persyaratan_1}}">
                            @endif
                        </div>
                    </td>
                    <td>
                        <a href="{{route('admin.registant.kelengkapan', ['index' => 1, 'id' => $data['registrasi']->id])}}" target="_blank" class="btn btn-primary">
                            Lihat Bukti
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bukti kelengkapan 2</td>
                    <td>
                        <div class="form-group">
                            @if($data['registrasi']->status == 'pending')
                            <select class="form-control" id="bukti_kelengkapan_2" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="Memenuhi Syarat">Memenuhi Syarat</option>
                                <option value="Tidak Memenuhi Syarat">Tidak Memenuhi Syarat</option>
                            </select>
                            @else
                            <input type="text" class="form-control" readonly value="{{$data['registrasi']->participant->ket_bukti_kelengkapan_persyaratan_2}}">
                            @endif
                        </div>
                    </td>
                    <td>
                        <a href="{{route('admin.registant.kelengkapan', ['index' => 2, 'id' => $data['registrasi']->id])}}" target="_blank" class="btn btn-primary">
                            Lihat Bukti
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bukti kelengkapan 3</td>
                    <td>
                        <div class="form-group">
                            @if($data['registrasi']->status == 'pending')
                            <select class="form-control" id="bukti_kelengkapan_3" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="Memenuhi Syarat">Memenuhi Syarat</option>
                                <option value="Tidak Memenuhi Syarat">Tidak Memenuhi Syarat</option>
                            </select>
                            @else
                            <input type="text" class="form-control" readonly value="{{$data['registrasi']->participant->ket_bukti_kelengkapan_persyaratan_3}}">
                            @endif
                        </div>
                    </td>
                    <td>
                        <a href="{{route('admin.registant.kelengkapan', ['index' => 3, 'id' => $data['registrasi']->id])}}" target="_blank" class="btn btn-primary">
                            Lihat Bukti
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>




        <h4>b. Bukti kompetensi yang relevan :</h4>
        <table class="table table-bordered text-center">
            <thead>
                <tr >
                    <th>No</th>
                    <th>Rincian Bukti Pendidikan/Pelatihan, Pengalaman Kerja, Pengalaman Hidup  </th>
                    <th>Status</th>
                    <th>Bukti</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Bukti kompetensi 1</td>
                    <td>
                        <div class="form-group">
                            @if($data['registrasi']->status == 'pending')
                            <select class="form-control" id="bukti_kompetensi_1" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                            @else
                            <input type="text" class="form-control" readonly value="{{$data['registrasi']->participant->ket_bukti_kompetensi_1}}">
                            @endif
                        </div>
                    </td>
                    <td>
                        <a href="{{route('admin.registant.kompetensi', ['index' => 1, 'id' => $data['registrasi']->id])}}" target="_blank" class="btn btn-primary">
                            Lihat Bukti
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bukti kelengkapan 2</td>
                    <td>
                        <div class="form-group">
                            @if($data['registrasi']->status == 'pending')
                            <select class="form-control" id="bukti_kompetensi_2" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                            @else
                            <input type="text" class="form-control" readonly value="{{$data['registrasi']->participant->ket_bukti_kompetensi_2}}">
                            @endif
                        </div>  
                    </td>
                    <td>
                        <a href="{{route('admin.registant.kompetensi', ['index' => 2, 'id' => $data['registrasi']->id])}}" target="_blank" class="btn btn-primary">
                            Lihat Bukti
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bukti kelengkapan 3</td>
                    <td>
                        <div class="form-group">
                            @if($data['registrasi']->status == 'pending')
                            <select class="form-control" id="bukti_kompetensi_3" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                            @else
                            <input type="text" class="form-control" readonly value="{{$data['registrasi']->participant->ket_bukti_kompetensi_3}}">
                            @endif
                        </div>  
                    </td>
                    <td>
                        <a href="{{route('admin.registant.kompetensi', ['index' => 3, 'id' => $data['registrasi']->id])}}}" target="_blank" class="btn btn-primary">
                            Lihat Bukti
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        @if($data['registrasi']->status == 'pending')
        <div class="row form-group">
            <div class="col col-md-9">
                <div class="form-check-inline form-check">
                    <label for="check" class="form-check-label ">
                        <input type="checkbox" id="check" name="check" value="on" class="form-check-input">Saya Sudah Memastikan Semua Data
                    </label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary">Close</button> -->
            <button type="button" id="submit" class="btn btn-primary" data-toggle="modal" data-target="#registant" disabled>Submit</button>
        </div>
        @else
        <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary">Close</button> -->
            <button type="button" id="submit" class="btn btn-primary" onclick="getData(this)" data-toggle="modal" data-target="#participant" data-id="{{$data['registrasi']->participant->id}}">Detail Asesi</button>
        </div>
        @endif



        <div class="modal fade" id="registant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tentukan Hari Asesi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.participant.store')}}">
                    @csrf
                    <input type="hidden" name="email">
                    <input type="hidden" name="id_registrasi" value="{{$data['registrasi']->id}}">
                    <input type="hidden" name="id_cluster" value="{{$data['registrasi']->cluster->id}}">
                    <div class="form-group">
                        <label>Tempat / Tgl. Asesi</label>
                        <input type="text" class="form-control" name="tempat_asesi" required placeholder="misal : SMK Negeri 26 Jakarta">
                        <input type="date" name="tanggal_mulai_asesi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tgl. Selesai Asesi</label>
                        <input type="date" name="tanggal_selesai_asesi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="asesor">Asesor</label>
                        <select class="form-control" id="asesor" name="id_asesor" required>
                            <option value="">-- Pilih Asesor --</option>
                            @foreach($data['asesor'] as $asesor)
                            <option value="{{$asesor->id}}">{{$asesor->nama_lengkap}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Keterangan Bukti Kelengkapan 1</label>
                        <input type="text" class="form-control" name="ket_bukti_kelengkapan_1" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>Keterangan Bukti Kelengkapan 2</label>
                        <input type="text" class="form-control" name="ket_bukti_kelengkapan_2" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>Keterangan Bukti Kelengkapan 3</label>
                        <input type="text" class="form-control" name="ket_bukti_kelengkapan_3" readonly="readonly">
                    </div>
                    <!-- <div class="form-group">
                        <label>Keterangan Bukti Kelengkapan 1</label>
                        <input type="text" class="form-control" name="ket_bukti_kelengkapan_1" disabled>
                    </div> -->
                    <div class="form-group">
                        <label>Keterangan Bukti Kompetensi 1</label>
                        <input type="text" class="form-control" name="ket_bukti_kompetensi_1" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>Keterangan Bukti Kompetensi 2</label>
                        <input type="text" class="form-control" name="ket_bukti_kompetensi_2" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>Keterangan Bukti Kompetensi 3</label>
                        <input type="text" class="form-control" name="ket_bukti_kompetensi_3" readonly="readonly">
                    </div>
                    <!-- <div class="form-group">
                        <label>Keterangan Bukti Kompetensi 1</label>
                        <input type="text" class="form-control" name="ket_bukti_kompetensi_1">
                    </div> -->
                    <div class="form-group">
                        <label for="textarea-input" class=" form-control-label">Keterangan</label>
                        <textarea name="keterangan" id="textarea-input" rows="5" placeholder="Keterangan..." class="form-control"></textarea>
                    </div>
                    <p style="color: red;" id="note"><i>Bukti-Bukti Kelengkapan Masih Kosong</i></p>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="storeSubmit" disabled>Save</button>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="participant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hari Asesi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.participant.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Nama Asesor</label>
                        <input type="text" class="form-control" id="nama_asesor" name="nama_asesor" required readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>Tempat / Tgl. Asesi</label>
                        <input type="text" class="form-control" id="tempat_asesi" name="tempat_asesi" required readonly="readonly">
                        <input type="date" name="tanggal_mulai_asesi" id="tanggal_mulai_asesi" class="form-control" required readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>Tgl. Selesai Asesi</label>
                        <input type="date" name="tanggal_selesai_asesi" id="tanggal_selesai_asesi" class="form-control" required readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>Nama Peserta</label>
                        <input type="text" class="form-control" id="nama_peserta" name="nama_peserta" required readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" required readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="emailParticipant" name="email" required readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" required readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>Tujuan Sertifikasi</label>
                        <input type="text" class="form-control" id="tujuan_sertifikasi" name="tujuan_sertifikasi" required readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label>Judul Klaster</label>
                        <input type="text" class="form-control" id="judul_cluster" name="judul_klaster" required readonly="readonly">
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $('#check').on('click', function() {
            if($(this).is(':checked')) {
                $('#submit').removeAttr('disabled')
            } else {
                $('#submit').attr('disabled', 'disabled')
            }
        })

        $('#submit').on('click', function() {
            $('#note').hide()
            var kelengkapan1 = $('#bukti_kelengkapan_1').val()
            var kelengkapan2 = $('#bukti_kelengkapan_2').val()
            var kelengkapan3 = $('#bukti_kelengkapan_3').val()
            var kompetensi1  = $('#bukti_kompetensi_1').val()
            var kompetensi2  = $('#bukti_kompetensi_2').val()
            var kompetensi3  = $('#bukti_kompetensi_3').val()
            var email        = $('#email').val()

            $("input[name='ket_bukti_kelengkapan_1']").val(kelengkapan1)
            $("input[name='ket_bukti_kelengkapan_2']").val(kelengkapan2)
            $("input[name='ket_bukti_kelengkapan_3']").val(kelengkapan3)
            $("input[name='ket_bukti_kompetensi_1']").val(kompetensi1)
            $("input[name='ket_bukti_kompetensi_2']").val(kompetensi2)
            $("input[name='ket_bukti_kompetensi_3']").val(kompetensi3)
            $("input[name='email']").val(email)
            
            if((kelengkapan1 == 'Memenuhi Syarat' && kelengkapan2 == 'Memenuhi Syarat' && kelengkapan3 == 'Memenuhi Syarat') && (kompetensi1 == 'Ada' && kompetensi2 == 'Ada' && kompetensi3 == 'Ada')) {
                $('#storeSubmit').removeAttr('disabled')
            } else {
                $('#note').show()
                $('#storeSubmit').attr('disabled', 'disabled')
            }
        })

        function getData(e) {
            var id = $(e).data('id')
            var url = '{{route("admin.participant.index")}}/' + id

            $.ajax({
                method : 'get',
                url : url,
                dataType : 'json',
                success : function(data) {
                    $.each(data, function(i, item) {
                        $('#nama_asesor').val(item.asesor.nama_lengkap)
                        $('#tempat_asesi').val(item.tempat_asesi)
                        $('#tanggal_mulai_asesi').val(item.tanggal_mulai_asesi)
                        $('#tanggal_selesai_asesi').val(item.tanggal_selesai_asesi)
                        $('#nama_peserta').val(item.registration.nama_lengkap)
                        $('#nik').val(item.registration.nik)
                        $('#emailParticpant').val(item.registration.email)
                        $('#no_telp').val(item.registration.no_hp)
                        $('#alamat').val(item.registration.alamat_rumah)
                        $('#tujuan_sertifikasi').val(item.registration.tujuan_asesmen)
                        $('#judul_cluster').val(item.cluster.no_cluster + ' - ' + item.cluster.judul_cluster)
                    })
                }
            })
        }
    </script>





  </body>
</html>