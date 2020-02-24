<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// model
use App\Element;
use App\Competence;

class ElementController extends Controller
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
            // mengambil data elemen kompetensi dan kompetensi
            $data['element'] = Element::orderBy('id_kompetensi', 'ASC')->get();
            $data['competence'] = Competence::orderBy('id_klaster', 'ASC')->get();

            return view('admin.elementCompetency.index', compact('data'));
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
        $id_kompetensi      = $request->id_kompetensi;
        $elemen_kompetensi  = $request->elemen_kompetensi;

        // tambah data ke database
        Element::insert([
            'id_kompetensi' => $id_kompetensi,
            'elemen_kompetensi' => $elemen_kompetensi
        ]);

        return redirect()->route('admin.element.index')->with('success', 'true');
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
        // mengambil data element kompetensi berdasarkan id elemen kompetensi
        $data = Element::where('id', $id)->first();

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
        $id_kompetensi      = $request->id_kompetensi;
        $elemen_kompetensi  = $request->elemen_kompetensi;

        // update data elemen kompetensi di database
        Element::where('id', $id)->update([
            'id_kompetensi' => $id_kompetensi,
            'elemen_kompetensi' => $elemen_kompetensi
        ]);

        return response()->json([
            'message' => 'Elemen Kompetensi berhasil diubah'
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
        // mencari data elemen kompetensi berdasarkan id elemen kompetensi
        $element = Element::find($id);
        // menghapus data elemen kompetensi
        $element->delete();

        return redirect()->route('admin.element.index')->with('delete', 'true');
    }
}
