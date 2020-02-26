<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// model
use App\School;

class SchoolController extends Controller
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
            $data['school'] = School::orderBy('kode_sekolah', 'ASC')->get();

            return view('admin.school.index', compact('data'));
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
        $kode_sekolah = $request->kode_sekolah;
        $nama_sekolah = $request->nama_sekolah;

        School::insert([
            'kode_sekolah' => $kode_sekolah,
            'nama_sekolah' => $nama_sekolah
        ]);

        return redirect()->route('admin.school.index')->with('success', 'true');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = School::find($id);
        $data->first();

        return response()->json([
            'data' => $data
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
        $kode_sekolah = $request->kode_sekolah;
        $nama_sekolah = $request->nama_sekolah;

        School::where('id', $id)->update([
            'kode_sekolah' => $kode_sekolah,
            'nama_sekolah' => $nama_sekolah
        ]);

        return response()->json([
            'message' => 'Daftar Sekolah berhasil di ubah!'
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
        $school = School::find($id);
        $school->delete();

        return redirect()->route('admin.school.index')->with('delete', 'true');
    }
}
