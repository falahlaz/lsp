<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// model
use App\User;
use App\Department;

class AssessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('user')) {
            return redirect()->route('user.login');
        } else {
            // mengambil data user dan relasi jurusan
            $data['user']       = User::orderBy('nama_lengkap', 'ASC')->with('department')->get();
            // mengambil data jurusan
            $data['department'] = Department::orderBy('nama_jurusan', 'ASC')->get();

            return view('admin.assessor.index', compact('data'));
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
            return view('admin.assessor.create');
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
        $fullname = $request->nama_lengkap;
        $password = $request->password;
        $role     = $request->role;
        $email    = $request->email;
        $jurusan  = $request->jurusan;
        $no_reg   = $request->no_reg;

        // tambah data ke database
        User::insert([
            'nama_lengkap' => $fullname,
            'no_reg' => $no_reg,
            'email' => $email,
            'password' => bcrypt($password),
            'role' => $role,
            'id_jurusan' => $jurusan
        ]);

        return redirect()->route('admin.assessor.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mencari data sesuai id user
        $data = User::find($id);
        $data->first();

        return response()->json([
            'data' => $data,
        ]);
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
        // mengambil data yang diinputkan user
        $fullname = $request->nama_lengkap;
        $no_reg   = $request->no_reg;
        $role     = $request->role;
        $email    = $request->email;
        $id_jurusan = $request->id_jurusan;

        // update data di database
        User::where('id', $id)->update([
            'nama_lengkap' => $fullname,
            'no_reg' => $no_reg,
            'role' => $role,
            'email' => $email,
            'id_jurusan' => $id_jurusan
        ]);

        return response()->json([
            'message' => 'Data assesor berhasil di ubah!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        // menghapus data user
        $user->delete();

        return redirect()->route('admin.assessor.index')->with('delete', true);
    }
}
