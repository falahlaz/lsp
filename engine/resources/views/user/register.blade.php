@extends('user.app')

@section('title', 'Register')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form method="post" action="{{route('admin.registant.store')}}" enctype="multipart/form-data" id="msform">
            @csrf

            <fieldset>
                <h3>FR-APL-01</h3>
                <p>Permohonan Sertifikasi Kompetensi</p>
                
                <button type="button" class="next action-button float-right">
                    Selanjutnya
                </button>
            </fieldset>

            <fieldset>   
                <div class="text-left">
                    <h4>Bagian 1 : Rincian Data Permohonan Sertifikasi</h4>
                    <p>Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan anda pada saat ini.</p>
                </div>
                
                <button type="button" class="next action-button float-right">
                    Selanjutnya
                </button>   
                <button type="button" class="previous action-button float-right">
                    Sebelumnya
                </button>
            </fieldset>

            <fieldset>   
               
                    <h3>a. Data Pribadi</h3>
                    <div class="form-group">
                        <label for="fullname">Nama Lengkap</label>
                        <input type="text" class="form-control" id="fullname" required name="nama_lengkap" placeholder="misal: Ashandi Leonadi" value="{{old('nama_lengkap')}}">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" class="form-control" id="nik" name="nik" required placeholder="misal: 7281923719301" value="{{old('nik')}}">
                    </div>
                    <div class="form-group">
                        <label>Tempat / Tgl. Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" required placeholder="misal : Jakarta" value="{{old('tempat_lahir')}}">
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                    
                    <div class="form-check">
                        <label>Jenis Kelamin</label>    <br>

                        <input class="form-check-input" type="radio" id="1" name="gender" value="Laki-Laki">
                        <label class="form-check-label" for="1">
                          Laki - Laki
                        </label>

                        <input class="form-check-input" type="radio"  id="2" name="gender" value="Perempuan">
                        <label class="form-check-label" for="2">
                          Perempuan
                        </label>
                    </div>

                    <div class="form-group" style="margin-top: 1em;">
                        <label for="country">Kebangsaan</label>
                        <input type="text" id="country" name="kebangsaan" class="form-control" required placeholder="misal : Indonesia" value="{{old('kebangsaan')}}">
                    </div>

                    <div class="form-group">
                        <label for="address">Alamat Rumah</label>
                        <input type="text" id="address" name="alamat_rumah" class="form-control" required placeholder="misal : Jl. Balai Pustaka Baru I" value="{{old('alamat_rumah')}}">
                    </div>

                    <div class="form-group">
                        <label for="post_code">Kode Pos</label>
                        <input type="number" id="post_code" name="kode_pos_rumah" class="form-control" required placeholder="misal : 14043" value="{{old('kode_pos_rumah')}}">
                    </div>

                    <div class="form-group">
                        <label for="home_phone">No. Telp. Rumah</label>
                        <input type="number" id="home_phone" name="no_telp_rumah" class="form-control" required placeholder="misal : 08811882850" value="{{old('no_telp_rumah')}}">
                    </div>

                    <div class="form-group">
                        <label for="phone">No. HP</label>
                        <input type="number" id="phone" name="no_hp" class="form-control" required placeholder="misal : 08811882850" value="{{old('no_hp')}}">
                    </div>

                    <div class="form-group">
                        <label for="office_phone">No. Kantor</label>
                        <input type="number" id="office_phone" name="no_kantor" class="form-control" required placeholder="misal : 08811882850" value="{{old('no_kantor')}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email" required placeholder="misal : smkn26jkt@gmail.com" value="{{old('email')}}">
                    </div>

                    <div class="form-group">
                        <label for="education">Pendidikan Terakhir</label>
                        <select name="pendidikan_terakhir" id="education" required class="form-control">
                            <option value="">-- Pilih Jenjang Pendidikan --</option>
                            <option value="SD">SD / Sederajat</option>
                            <option value="SMP">SMP / Sederajat</option>
                            <option value="SMA">SMA / Sederajat</option>
                            <option value="SMK">SMK / Sederajat</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="school">Kode Sekolah</label>
                        <input type="password" id="school" name="kode_sekolah" class="form-control" required value="{{old('kode_sekolah')}}">
                    </div>

                    <button type="button" class="next action-button float-right">
                        Selanjutnya
                    </button>   
                    <button type="button" class="previous action-button float-right">
                        Sebelumnya
                    </button>  
            </fieldset>

            <fieldset>
                    <h3>b. Data Pekerjaan Sekarang</h3>
                    <div class="form-group">
                        <label for="company">Nama Lembaga / Perusahaan</label>
                        <input type="text" class="form-control" name="nama_perusahaan" required id="company" placeholder="misal: Bukalapak" value="{{old('nama_perusahaan')}}">
                    </div>
                    <div class="form-group">
                        <label for="position">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" required id="position" placeholder="misal: Manager" value="{{old('jabatan')}}">
                    </div>
                    <div class="form-group">
                        <label for="companyAddress">Alamat</label>
                        <input type="text" class="form-control" name="alamat_perusahaan" required id="companyAddress" placeholder="misal: Jl. Balai Pustaka Baru I" value="{{old('alamat_perusahaan')}}">
                    </div>
                    <div class="form-group">
                        <label for="companyPostCode">Kode Pos</label>
                        <input type="number" class="form-control" name="kode_pos_perusahaan" required id="companyPostCode" placeholder="misal: 14340" value="{{old('kode_pos_perusahaan')}}">
                    </div>
                    <div class="form-group">
                        <label for="companyTelp">Telp</label>
                        <input type="number" class="form-control" name="no_telp_perusahaan" required id="companyTelp" placeholder="misal: 08811882850" value="{{old('no_telp_perusahaan')}}">
                    </div>
                    <div class="form-group">
                        <label for="companyEmail">Email</label>
                        <input type="email" class="form-control" name="email_perusahaan" required id="companyEmail" placeholder="misal: smkn26jkt@gmail.com" value="{{old('email_perusahaan')}}">
                    </div>
                    <div class="form-group">
                        <label for="companyFax">Fax</label>
                        <input type="number" class="form-control" name="no_fax_perusahaan" required id="companyFax" placeholder="misal: 7281923719301" value="{{old('no_fax_perusahaan')}}">
                    </div>

                    <button type="button" class="next action-button float-right">
                        Selanjutnya
                    </button>   
                    <button type="button" class="previous action-button float-right">
                        Sebelumnya
                    </button> 

            </fieldset>

            <fieldset>   
                <div class="text-left">
                    <h4>Bagian 2 : Data Sertifikasi</h4>
                    <p>Tuliskan Judul dan Nomor Skema Sertifikasi, Tujuan Asesmen serta Daftar Unit Kompetensi sesuai kemasan pada skema sertifikasi yang anda ajukan untuk mendapatkan pengakuan sesuai dengan latar belakang pendidikan, pelatihan serta serta pengalaman kerja yang anda miliki</p>
                </div>
                
                <button type="button" class="next action-button float-right">
                    Selanjutnya
                </button>
                <button type="button" class="previous action-button float-right">
                    Sebelumnya
                </button>
            </fieldset>

            <fieldset>   
                <div class="form-check">
                    <label>Skema Sertifikasi</label>    <br>

                    <input class="form-check-input" type="radio" id="skema1" name="schema_sertifikasi" value="KKNI">
                    <label class="form-check-label" for="skema1">
                       KKNI
                    </label>

                    <input class="form-check-input" type="radio"  id="skema2" name="schema_sertifikasi" value="Okupasi">
                    <label class="form-check-label" for="skema2">
                      OKUPASI
                    </label>
                    
                    <input class="form-check-input" type="radio"  id="skema3" name="schema_sertifikasi" value="Klaster">
                    <label class="form-check-label" for="skema3">
                      KLASTER
                    </label>
                </div>
                
                <div class="form-check">
                    <label>Tujuan Asesmen</label>    <br>

                    <input class="form-check-input" type="radio" id="tujuan1" name="tujuan_sertifikasi" value="Sertifikasi">
                    <label class="form-check-label" for="tujuan1">
                       Sertifikasi
                    </label>

                    <input class="form-check-input" type="radio"  id="tujuan2" name="tujuan_sertifikasi" value="Sertifikasi Ulang">
                    <label class="form-check-label" for="tujuan2">
                      Sertifikasi Ulang
                    </label>
                </div>

                <div class="form-group">
                    <label for="no">Jurusan</label>
                    <select class="form-control" name="id_jurusan" required onchange="getDepartment(this)">
                        <option value="">-- Pilih Jurusan --</option>
                        @foreach($data as $jurusan)
                        <option value="{{$jurusan->id}}">KKNI {{$jurusan->level_jurusan}} ({{$jurusan->nama_jurusan}})</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" id="cluster">
                    
                </div>

                <div class="form-group" id="table_kompetensi">

                </div>
                
                <button type="button" class="next action-button float-right">
                    Selanjutnya
                </button>   
                <button type="button" class="previous action-button float-right">
                    Sebelumnya
                </button>
            </fieldset>

            <fieldset>   
                <div class="text-left">
                    <h4>Bagian 3 : Bukti Kelengkapan Pemohon</h4>
                </div>
                
                <button type="button" class="next action-button float-right">
                    Selanjutnya
                </button>   
                <button type="button" class="previous action-button float-right">
                    Sebelumnya
                </button>
            </fieldset>

            <fieldset>   
                <h3>a. Bukti kelengkapan persyaratan dasar pemohon :</h3>

                <div class="form-group">
                    <label for="bukti1">Bukti Persyaratan 1</label>
                    <input type="file" class="form-control-file" id="bukti1" required name="buktiKelengkapan1">
                </div>

                <div class="form-group">
                    <label for="bukti2">Bukti Persyaratan 2</label>
                    <input type="file" class="form-control-file" id="bukti2" required name="buktiKelengkapan2">
                </div>

                <div class="form-group">
                    <label for="bukti3">Bukti Persyaratan 3</label>
                    <input type="file" class="form-control-file" id="bukti3" required name="buktiKelengkapan3">
                </div>
                
                <button type="button" class="next action-button float-right">
                    Selanjutnya
                </button>
                <button type="button" class="previous action-button float-right">
                    Sebelumnya
                </button>
            </fieldset>

            <fieldset>   
                <h3>a. Bukti kompetensi yang relavan :</h3>

                <div class="form-group">
                    <label for="buktiKompetensi1">Bukti Kompetensi 1</label>
                    <input type="file" class="form-control-file" id="buktiKompetensi1" required name="buktiKompetensi1">
                </div>
                
                <div class="form-group">
                    <label for="buktiKompetensi2">Bukti Kompetensi 2</label>
                    <input type="file" class="form-control-file" id="buktiKompetensi2" required name="buktiKompetensi2">
                </div>

                <div class="form-group">
                    <label for="buktiKompetensi3">Bukti Kompetensi 3</label>
                    <input type="file" class="form-control-file" id="buktiKompetensi3" required name="buktiKompetensi3">
                </div>
                
                <!-- <button type="button" class="next action-button float-right">
                    Selanjutnya
                </button>    -->
                <div class="alert alert-danger" role="alert">
                    Pastikan Semua Input Form Telah <b>Terisi</b> !
                </div>
                <button onclick="validate()" type="submit" class="action-button float-right">
                    Submit
                </button>   
                <button type="button" class="previous action-button float-right">
                    Sebelumnya
                </button>
            </fieldset>

            <!-- <fieldset>   
                <h3>Rekomendasi</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alfalah Lazuardi</td>
                            <td>
                                <a href="#" class="btn btn-success">Diterima</a>
                                <a href="#" class="btn btn-danger">Tidak Diterima</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                
                <button type="button" class="next action-button float-right">
                    Selanjutnya
                </button>   
                <button type="button" class="previous action-button float-right">
                    Sebelumnya
                </button>
            </fieldset> -->
           
        </form>
       
    </div>
</div>
<br><br>
@endsection
@section('script')
<script>
    const spinner = '<div class="loader"></div>'
    $('.alert').hide()

    function getDepartment(e) {
        var id = $(e).val()
        var url = "{{ route('admin.registant.index') }}/cluster/" + id

        $('#cluster').html(spinner)
        $('#cluster').load(url)
    }

    function getCluster(e) {
        var id = $(e).val()
        var url = "{{ route('admin.registant.index') }}/competency/" + id

        $('#table_kompetensi').html(spinner)
        $('#table_kompetensi').load(url)
    }

    function validate() {
        $('.alert').show()
    }

    @if(Session::has('success')) {
        alert('Data Registrasi Berhasil Dikirim')
        alert('Tunggu Konfirmasi Dari LSP Melalui Email')
    }
    @endif

    $(document).ready(function() {
        $(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>
@endsection