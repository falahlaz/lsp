<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// model
use App\Competence;
use App\Cluster;

class CompetencyController extends Controller
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
            // mengambil data komptensi
            $data['competency'] = Competence::orderBy('id_klaster', 'ASC')
                                    ->with('cluster')
                                    ->get();
            // mengambil data klaster
            $data['cluster']    = Cluster::orderBy('no_cluster', 'ASC')->get();

            return view('admin.competency.index', compact('data'));
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
        $kode_unit      = $request->kode_unit;
        $judul_unit     = $request->judul_unit;
        $jenis_standar  = $request->jenis_standar;
        $id_klaster     = $request->id_klaster;

        // menambah data ke database
        Competence::insert([
            'kode_unit' => $kode_unit,
            'judul_unit' => $judul_unit,
            'jenis_standar' => $jenis_standar,
            'id_klaster' => $id_klaster
        ]);

        return redirect()->route('admin.competency.index')->with('success', true);
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
        // mencari data kompetensi sesuai id kompetensi
        $data = Competence::find($id);
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
        $kode_unit      = $request->kode_unit;
        $judul_unit     = $request->judul_unit;
        $jenis_standar  = $request->jenis_standar;
        $id_klaster     = $request->id_klaster;

        // update data kompetensi di database
        Competence::where('id', $id)->update([
            'kode_unit' => $kode_unit,
            'judul_unit' => $judul_unit,
            'jenis_standar' => $jenis_standar,
            'id_klaster' => $id_klaster
        ]);

        return response()->json([
            'message' => 'Data Kompetensi berhasil di ubah!'
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
        // mencari data kompetensi sesuai id kompetensi
        $competency = Competence::find($id);
        // menghapus data kompetensi
        $competency->delete();

        return redirect()->route('admin.competency.index')->with('delete', true);
    }
}
