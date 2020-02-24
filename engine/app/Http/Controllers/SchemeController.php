<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// model
use App\Department;
use App\Cluster;

class SchemeController extends Controller
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
            // mengambil data department dan klaster
            $data['department'] = Department::orderBy('nama_jurusan', 'ASC')->get();
            $data['cluster']    = Cluster::orderBy('id_jurusan', 'ASC')
                                    ->with('department')
                                    ->get();

            return view('admin.scheme.index', compact('data'));
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
            return view('admin.scheme.create');
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
        $no_cluster     = $request->no_cluster;
        $judul_cluster  = $request->judul_cluster;
        $id_jurusan     = $request->id_jurusan;

        // tambah data ke database
        Cluster::insert([
            'no_cluster' => $no_cluster,
            'judul_cluster' => $judul_cluster,
            'id_jurusan' => $id_jurusan
        ]);

        return redirect()->route('admin.scheme.index')->with('success', true);
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
        // mencari data klaster berdasarkan id
        $data = Cluster::find($id);
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
        // mengambil data yang diinputkan user
        $no_cluster     = $request->no_cluster;
        $judul_cluster  = $request->judul_cluster;
        $id_jurusan     = $request->id_jurusan;

        // update data klaster di database
        Cluster::where('id', $id)->update([
            'no_cluster' => $no_cluster,
            'judul_cluster' => $judul_cluster,
            'id_jurusan' => $id_jurusan
        ]);

        return response()->json([
            'message' => 'Data Klaster berhasil di ubah!'
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
        // mencari data klaster berdasarkan id
        $cluster = Cluster::find($id);
        // hapus data klaster
        $cluster->delete();

        return redirect()->route('admin.scheme.index')->with('delete', true);
    }
}
