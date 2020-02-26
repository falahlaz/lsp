<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

// model
use App\User;
use App\Cluster;
use App\Competence;
use App\Registration;
use App\Department;
use App\Token;
use App\Answer;
use App\Participant;

class AuthController extends Controller
{

    public function login()
    {
        if(Session::has('user')) {
            return redirect()->route('admin.dashboard');
        } else {
            return view('user.login');
        }
    }

    public function loginPost(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        // validasi email dan password user
        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            // mengambil data user
            $user = User::where('email', $email)->first();
            
            // memberi session pada user
            Session::put('user', TRUE);
            Session::put('userId', $user->id);
            Session::put('role', $user->role);
            
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('user.login')->with('error', true);
        }
    }

   public function register()
   {
        // mengambil data jurusan
        $data = Department::orderBy('nama_jurusan', 'ASC')->get();

       return view('user.register', compact('data'));
   }

   public function registerConfirm()
   {
        return view('user.confirmRegister');
   }

   public function register02($id_cluster, $token)
   {
        // mengambil token dari url
        $getToken   = Token::where('token', $token);
        $validToken = $getToken->first();

        // validasi pada token
        if($validToken == null || $validToken->participant == null) {
            return redirect()->route('user.register')->with('error', 'true');
        }

        // mengambil data pertanyaan dari tiap kompetensi
        $data['competence'] = Competence::where('id_klaster', $id_cluster)->with('element')->get();
        $data['user']       = $validToken;
        $data['id_cluster'] = $id_cluster;

        return view('user.register2', compact('data'));
   }

   public function register02store(Request $request, $id_cluster, $token)
   {
        // mengambil data id_participant
        $id_participant = $request->id_participant;

        // input setiap pertanyaan ke database
        foreach($request->penilaian as $key=>$penilaian) {
            Answer::insert([
                'id_participant' => $id_participant,
                'id_pertanyaan' => $key,
                'jawaban' => $penilaian
            ]);
        }

        // menghapus token untuk registrasi
        Token::where('token', $token)->delete();
        // update status participant
        Participant::where('id', $id_participant)->update([
            'status' => 'in progress'
        ]);

        return redirect()->route('user.register02.confirm')->with('success', 'true');
   }

   public function logout()
   {
       // menghapus session
       Session::flush();
       return redirect()->route('user.login');
   }
}
