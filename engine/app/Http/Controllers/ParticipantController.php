<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PrintController;

// model
use App\Participant;
use App\Registration;
use App\Token;
use App\Answer;
use App\Competence;
use App\AssessorAnswer;
use App\ValidAnswer;

class ParticipantController extends Controller
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
            // mengambil data participant dan mengambil data relasi registrasi dan relasi jawaban
            $data['participant'] = Participant::where('id_asesor', Session::get('userId'))->with('registration', 'answer')->get();

            return view('admin.participant.index', compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $id_registrasi = $request->id_registrasi;
        $id_asesor     = $request->id_asesor;
        $id_cluster    = $request->id_cluster;
        $tempat_asesi  = $request->tempat_asesi;
        $tanggal_mulai_asesi     = $request->tanggal_mulai_asesi;
        $tanggal_selesai_asesi   = $request->tanggal_selesai_asesi;
        $ket_bukti_kelengkapan_1 = $request->ket_bukti_kelengkapan_1;
        $ket_bukti_kelengkapan_2 = $request->ket_bukti_kelengkapan_2;
        $ket_bukti_kelengkapan_3 = $request->ket_bukti_kelengkapan_3;
        $ket_bukti_kompetensi_1  = $request->ket_bukti_kompetensi_1;
        $ket_bukti_kompetensi_2  = $request->ket_bukti_kompetensi_2;
        $ket_bukti_kompetensi_3  = $request->ket_bukti_kompetensi_3;
        $keterangan    = $request->keterangan;

        // tambah data ke database
        Participant::insert([
            'id_registrasi' => $id_registrasi,
            'id_asesor' => $id_asesor,
            'id_klaster' => $id_cluster,
            'tempat_asesi' => $tempat_asesi,
            'tanggal_mulai_asesi' => $tanggal_mulai_asesi,
            'tanggal_selesai_asesi' => $tanggal_selesai_asesi,
            'ket_bukti_kelengkapan_persyaratan_1' => $ket_bukti_kelengkapan_1,
            'ket_bukti_kelengkapan_persyaratan_2' => $ket_bukti_kelengkapan_2,
            'ket_bukti_kelengkapan_persyaratan_3' => $ket_bukti_kelengkapan_3,
            'ket_bukti_kompetensi_1' => $ket_bukti_kompetensi_1,
            'ket_bukti_kompetensi_2' => $ket_bukti_kompetensi_2,
            'ket_bukti_kompetensi_3' => $ket_bukti_kompetensi_3,
            'status' => 'pending',
            'keterangan' => $keterangan
        ]);

        // mencari data registrasi
        $registration = Registration::where('id', $id_registrasi);
        // update data status registrasi
        $registration->update([
            'status' => 'in progress'
        ]);
        // mengambil nama pendaftar
        $name = $registration->select('nama_lengkap')->first();

        // mengambil id participant
        $id_participant  = Participant::select('id')->where('id_registrasi', $id_registrasi)->first();

        // mengambil input email
        $email = $request->email;
        // mengoper data ke view email
        $data = [
            'name' => $name,
            'link' => route('user.register02', ['token' => $this->token($id_participant->id), 'id_cluster' => $id_cluster])
        ];
        // kirim email ke pendaftar
        $this->sendEmail($data, $email);

        return redirect()->route('admin.registant.index')->with('success', true);
    }

    // fungsi kirim email ke pendaftar
    public function sendEmail($data, $email)
    {
        \Mail::send('email.email', $data, function($mail) use($email) {
            $mail->to($email, 'no-reply')
                    ->subject('Formulir APL-02');
            $mail->from('teampengembang26@gmail.com', 'LSP SMK Negeri 26');
        });
    }

    // fungsi membuat random token
    public function token($id_participant)
    {
        $token = \Str::random(30);
        Token::insert([
            'id_participant' => $id_participant,
            'token' => $token,
        ]);

        return $token;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // mengambil data participant berdasarkan id
        // dan mengambil data relasi registrasi, asesor, klaster, dan jawaban asesor
        $data = Participant::where('id', $id)
                            ->with('registration', 'asesor', 'cluster', 'assessorAnswer')
                            ->first();
        
        return response()->json([
            'data' => $data
        ]);
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

    public function detailApl02($id_participant, $id_cluster)
    {
        // validasi session login
        if(!Session::get('user')) {
            return redirect()->route('user.login');
        } else {
            // mengambil data untuk detail form APL 02
            $data['competence']     = Competence::where('id_klaster', $id_cluster)->with('element')->get();
            $data['answer']         = Answer::where('id_participant', $id_participant)->get();
            $data['asesor_answer']  = AssessorAnswer::where('id_participant', $id_participant)->get();
            $data['valid_answer']   = ValidAnswer::orderBy('id', 'ASC')->get();
            $data['status']         = Participant::select('status')->where('id', $id_participant)->first();
            $data['id_participant'] = $id_participant;
            $data['id_cluster']     = $id_cluster;
            $data['id_asesor']      = Session::get('userId');

            return view('admin.participant.apl02', compact('data'));
        }
    }

    public function detailApl02store(Request $request, $id_participant, $id_asesor)
    {
        // tambah data jawaban asesor ke database
        foreach($request->penilaian as $penilaian) {
            $explode = explode("-", $penilaian);
            AssessorAnswer::insert([
                'id_participant' => $id_participant,
                'id_asesor' => $id_asesor,
                'id_pertanyaan' => $explode[1],
                'id_jawaban' => $explode[0]
            ]);
        }

        return redirect()->route('admin.participant.index')->with('success', 'true');
    }

    public function finish(Request $request)
    {
        // mengambil data participant berdasarkan id participant
        $singleRecord  = Participant::where('id', $request->id_participant);
        $participant   = $singleRecord->first();
        
        // update data status participant
        $singleRecord->update([
            'status' => 'complete'
        ]);

        // update data status registrasi
        Registration::where('id', $participant->id_registrasi)->update([
            'status' => 'complete'
        ]);

        return redirect()->route('admin.participant.index')->with('success', 'true');
    }
}
