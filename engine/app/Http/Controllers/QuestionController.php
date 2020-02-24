<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// model
use App\Element;
use App\Question;

class QuestionController extends Controller
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
            // mengambil data pertanyaan dan elemen kompetensi
            $data['question'] = Question::orderBy('id_elemen_kompetensi', 'ASC')->get();
            $data['element']  = Element::orderBy('id_kompetensi', 'ASC')->get();

            return view('admin.question.index', compact('data'));
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
        $id_element_kompetensi = $request->id_element_kompetensi;
        $no_kuk                = $request->no_kuk;
        $daftar_pertanyaan     = $request->daftar_pertanyaan;

        // tambah data ke database
        Question::insert([
            'id_elemen_kompetensi' => $id_element_kompetensi,
            'no_kuk' => $no_kuk,
            'daftar_pertanyaan' => $daftar_pertanyaan
        ]);

        return redirect()->route('admin.question.index')->with('success', 'true');
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
        // mengambil data pertanyaan berdasarkan id pertanyaan
        $data = Question::where('id', $id)->first();

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
        $id_element_kompetensi = $request->id_element_kompetensi;
        $no_kuk                = $request->no_kuk;
        $daftar_pertanyaan     = $request->daftar_pertanyaan;

        // update data pertanyaan di database
        Question::where('id', $id)->update([
            'id_elemen_kompetensi' => $id_element_kompetensi,
            'no_kuk' => $no_kuk,
            'daftar_pertanyaan' => $daftar_pertanyaan
        ]);

        return response()->json([
            'message' => 'Daftar Pertanyaan berhasil di ubah!'
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
        // mencari data pertanyaan bersarkan id
        $question = Question::find($id);
        // menghapus data pertanyaan
        $question->delete();

        return redirect()->route('admin.question.index')->with('delete', 'true');
    }
}
