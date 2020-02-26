<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// model
use App\Registration;
use App\Competence;
use App\User;
use App\Cluster;

class RegistantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // validasi session login
        if(!Session::get('user')) {
            return redirect()->route('user.login');
        } else {
            // mengambil data registrasi dan mengambil relasi klaster
            $data = Registration::orderBy('created_at', 'ASC')
                                ->with('cluster')
                                ->get();
                                
            return view('admin.registant.index', compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Session::get('user')) {
            return redirect()->route('user.login');
        } else {
            return view('admin.registant.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // mengambil data yang diinputkan user
        $nama_lengkap        = $request->nama_lengkap;
        $nik                 = $request->nik;
        $tempat_lahir        = $request->tempat_lahir;
        $tanggal_lahir       = $request->tanggal_lahir;
        $gender              = $request->gender;
        $kebangsaan          = $request->kebangsaan;
        $alamat_rumah        = $request->alamat_rumah;
        $no_hp               = $request->no_hp;
        $kode_pos_rumah      = $request->kode_pos_rumah;
        $no_telp_rumah       = $request->no_telp_rumah;
        $no_kantor           = $request->no_kantor;
        $email               = $request->email;
        $pendidikan_terakhir = $request->pendidikan_terakhir;
        $kode_sekolah        = $request->kode_sekolah;

        $nama_perusahaan     = $request->nama_perusahaan;
        $jabatan             = $request->jabatan;
        $alamat_perusahaan   = $request->alamat_perusahaan;
        $kode_pos_perusahaan = $request->kode_pos_perusahaan;
        $no_telp_perusahaan  = $request->no_telp_perusahaan;
        $email_perusahaan    = $request->email_perusahaan;
        $no_fax_perusahaan   = $request->no_fax_perusahaan;

        $schema_sertifikasi  = $request->schema_sertifikasi;
        $tujuan_sertifikasi  = $request->tujuan_sertifikasi;
        $id_klaster          = $request->id_klaster;

        // mendaftarkan ekstensi gambar yang diizinkan
        $extAllow = ['png', 'jpg', 'jpeg', 'bmp'];

        // mengambil data bukti kelengkapan dan kompetensi
        $buktiKelengkapan1   = $request->file('buktiKelengkapan1');
        $extFileKelengkapan1 = $buktiKelengkapan1->getClientOriginalExtension();
        if (in_array($extFileKelengkapan1, $extAllow)) {
            $nameBuktiKelengkapan1 = time() . "." . $extFileKelengkapan1;
            // memindahkan data ke folder
            $buktiKelengkapan1->move('public_html/upload/kelengkapan1', $nameBuktiKelengkapan1);
        } else {
            return redirect()->route('user.register')->with('error', 'true')->withInput($request->all());
        }

        // mengambil data bukti kelengkapan dan kompetensi
        $buktiKelengkapan2   = $request->file('buktiKelengkapan2');
        $extFileKelengkapan2 = $buktiKelengkapan2->getClientOriginalExtension();
        if (in_array($extFileKelengkapan2, $extAllow)) {
            $nameBuktiKelengkapan2 =   time() . "." . $extFileKelengkapan2;
            // memindahkan data ke folder
            $buktiKelengkapan2->move('public_html/upload/kelengkapan2', $nameBuktiKelengkapan2);
        } else {
            return redirect()->route('user.register')->with('error', 'true')->withInput($request->all());
        }

        // mengambil data bukti kelengkapan dan kompetensi
        $buktiKelengkapan3   = $request->file('buktiKelengkapan3');
        $extFileKelengkapan3 = $buktiKelengkapan3->getClientOriginalExtension();
        if (in_array($extFileKelengkapan3, $extAllow)) {
            $nameBuktiKelengkapan3 = time() . "." . $extFileKelengkapan3;
            // memindahkan data ke folder
            $buktiKelengkapan3->move('public_html/upload/kelengkapan3', $nameBuktiKelengkapan3);
        } else {
            return redirect()->route('user.register')->with('error', 'true')->withInput($request->all());
        }

        // mengambil data bukti kelengkapan dan kompetensi
        $buktiKompetensi1   = $request->file('buktiKompetensi1');
        $extFileKompetensi1 = $buktiKompetensi1->getClientOriginalExtension();
        if (in_array($extFileKompetensi1, $extAllow)) {
            $nameBuktiKompetensi1 = time() . "." . $extFileKompetensi1;
            // memindahkan data ke folder
            $buktiKompetensi1->move('public_html/upload/kompetensi1', $nameBuktiKompetensi1);
        } else {
            return redirect()->route('user.register')->with('error', 'true')->withInput($request->all());
        }

        // mengambil data bukti kelengkapan dan kompetensi
        $buktiKompetensi2   = $request->file('buktiKompetensi2');
        $extFileKompetensi2 = $buktiKompetensi2->getClientOriginalExtension();
        if (in_array($extFileKompetensi2, $extAllow)) {
            $nameBuktiKompetensi2 = time() . "." . $extFileKompetensi2;
            // memindahkan data ke folder
            $buktiKompetensi2->move('public_html/upload/kompetensi2', $nameBuktiKompetensi2);
        } else {
            return redirect()->route('user.register')->with('error', 'true')->withInput($request->all());
        }

        // mengambil data bukti kelengkapan dan kompetensi
        $buktiKompetensi3   = $request->file('buktiKompetensi3');
        $extFileKompetensi3 = $buktiKompetensi3->getClientOriginalExtension();
        if (in_array($extFileKompetensi3, $extAllow)) {
            $nameBuktiKompetensi3 = time() . "." . $extFileKompetensi3;
            // memindahkan data ke folder
            $buktiKompetensi3->move('public_html/upload/kompetensi3', $nameBuktiKompetensi3);
        } else {
            return redirect()->route('user.register')->with('error', 'true')->withInput($request->all());
        }


        // tambah data ke database
        Registration::insert([
            'nama_lengkap' => $nama_lengkap,
            'nik' => $nik,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $gender,
            'kebangsaan' => $kebangsaan,
            'alamat_rumah' => $alamat_rumah,
            'kode_pos_rumah' => $kode_pos_rumah,
            'no_telp_rumah' => $no_telp_rumah,
            'no_hp' => $no_hp,
            'no_kantor' => $no_kantor,
            'email' => $email,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'kode_sekolah' => $kode_sekolah,
            'nama_perusahaan' => $nama_perusahaan,
            'jabatan' => $jabatan,
            'alamat_perusahaan' => $alamat_perusahaan,
            'kode_pos_perusahaan' => $kode_pos_perusahaan,
            'no_telp_perusahaan' => $no_telp_perusahaan,
            'email_perusahaan' => $email_perusahaan,
            'no_fax_perusahaan' => $no_fax_perusahaan,
            'skema_sertifikasi' => $schema_sertifikasi,
            'id_klaster' => $id_klaster,
            'tujuan_asesmen' => $tujuan_sertifikasi,
            'bukti_kelengkapan_persyaratan_1' => $nameBuktiKelengkapan1,
            'bukti_kelengkapan_persyaratan_2' => $nameBuktiKelengkapan2,
            'bukti_kelengkapan_persyaratan_3' => $nameBuktiKelengkapan3,
            'bukti_kelengkapan_persyaratan_4' => null,
            'bukti_kompetensi_1' => $nameBuktiKompetensi1,
            'bukti_kompetensi_2' => $nameBuktiKompetensi2,
            'bukti_kompetensi_3' => $nameBuktiKompetensi3,
            'bukti_kompetensi_4' => null,
            'status' => 'pending'
        ]);

        return redirect()->route('user.register')->with('success', true)->withInput($request->all());
    }

    // fungsi menampilkan daftar klaster
    public function showCluster($id)
    {
        // mengambil data klaster berdasartkan id jurusan
        $data = Cluster::where('id_jurusan', $id)->get();

        return view('user.cluster', compact('data'));
    }

    // fungsi menampilkan daftar kompetensi
    public function showCompetency($id)
    {
        // mengambil data komptensi berdasarkan id klaster
        $data = Competence::where('id_klaster', $id)->get();

        return view('user.competency', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // mengambil data registrasi, kompetensi dan asesor
        $data['registrasi'] = Registration::where('id', $id)->with('cluster', 'participant', 'school')->first();
        $data['kompetensi'] = Competence::where('id_klaster', $data['registrasi']->id_klaster)->get();
        $data['asesor']     = User::where([
                                    ['role' , 'asesor'],
                                    ['id_jurusan', $data['registrasi']->cluster->id_jurusan]
                                ])->get();

        return view('admin.registant.detail', compact('data'));
    }

    // fungsi menampilkan foto bukti kelengkapan
    public function showKelengkapan($index, $id)
    {
        // mengambil data registrasi berdasarkan id
        $kelengkapan = Registration::where('id', $id)->first();

        // cek folder yang ingin dipilih
        if($index == 1) {
            $data['photo'] = $kelengkapan->bukti_kelengkapan_persyaratan_1;
        } elseif($index == 2) {
            $data['photo'] = $kelengkapan->bukti_kelengkapan_persyaratan_2;
        } elseif($index == 3){
            $data['photo'] = $kelengkapan->bukti_kelengkapan_persyaratan_3;
        } else {
            $data['photo'] = $kelengkapan->bukti_kelengkapan_persyaratan_4;
        }
        $data['index'] = $index;
        
        return view('admin.registant.detail.kelengkapan', compact('data'));
    }
    
    // fungsi menampilkan foto bukti kompetensi
    public function showKompetensi($index, $id)
    {
        // mengambil data registrasi berdasarkan id
        $kompetensi = Registration::where('id', $id)->first();

        // cek folder yang ingin dipilih
        if($index == 1) {
            $data['photo'] = $kompetensi->bukti_kompetensi_1;
        } elseif($index == 2) {
            $data['photo'] = $kompetensi->bukti_kompetensi_2;
        } elseif($index == 3){
            $data['photo'] = $kompetensi->bukti_kompetensi_3;
        } else {
            $data['photo'] = $kompetensi->bukti_kompetensi_4;
        }
        $data['index'] = $index;
        
        return view('admin.registant.detail.kompetensi', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
