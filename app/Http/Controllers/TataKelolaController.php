<?php

namespace App\Http\Controllers;

use App\Models\TataKelola;
use Illuminate\Http\Request;

class TataKelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('spbe.index', [
            'spbe'=>TataKelola::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('spbe.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'domain'=>'required',
            'aspek'=>'required',
            'no_indikator'=>'required|numeric',
            'nama_indikator'=>'required',
            'deskripsi'=>'required'
        ]);
        TataKelola::create([
            'domain'=>$request->domain,
            'aspek'=>$request->aspek,
            'no_indikator'=>$request->no_indikator,
            'nama_indikator'=>$request->nama_indikator,
            'deskripsi'=>$request->deskripsi
        ]);
        return redirect('spbe')->with('message', 'Tambah Data berhasil..');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TataKelola  $tataKelola
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $spbe = TataKelola::findOrFail($id);
        return view('spbe.show', compact('spbe'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TataKelola  $tataKelola
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $spbe = TataKelola::findOrFail($id);
        return view('spbe.edit', compact('spbe'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
            'domain'=>'required',
            'aspek'=>'required',
            'no_indikator'=>'required|numeric',
            'nama_indikator'=>'required',
            'deskripsi'=>'required'
        ]);

        $dataEdit =([
            'domain'=>$request->domain,
            'aspek'=>$request->aspek,
            'no_indikator'=>$request->no_indikator,
            'nama_indikator'=>$request->nama_indikator,
            'deskripsi'=>$request->deskripsi
        ]);
        TataKelola::where('id', $id)->update($dataEdit);
        return redirect('spbe')->with('message', 'Edit Data berhasil..');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TataKelola  $tataKelola
     * @return \Illuminate\Http\Response
     */
    public function destroy(TataKelola $tataKelola)
    {
        //
    }
}
