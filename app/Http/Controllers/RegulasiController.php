<?php

namespace App\Http\Controllers;

use App\Models\Regulasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RegulasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('regulasi.index', [
            'regulasi'=>Regulasi::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regulasi.create');
    }

     public function store(Request $request) {
        $request->validate(
            [
            'jenis_regulasi'=>'required',
            'nama_regulasi'=>'required',
            'tahun'=>'required',
            'dokumen'=>'mimes:pdf|max:10240',
        ]);

        $data =[
            'jenis_regulasi'=>$request->jenis_regulasi,
            'nama_regulasi'=>$request->nama_regulasi,
            'tahun'=>$request->tahun,
        ];
        if ($request->hasFile('dokumen')){
            $dokumen_file  = $request->file('dokumen');
            $dokumen_nama  = $dokumen_file->hashName();
            $dokumen_file->move(public_path('dokumen'), $dokumen_nama);
            $data['dokumen'] = $dokumen_nama;
        }
        Regulasi::create($data);
        
        return redirect('regulasi')->with('message', 'Tambah Data berhasil..');
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
        $regulasi = Regulasi::findOrFail($id);
        return view('regulasi.edit', compact('regulasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
            'jenis_regulasi'=>'required',
            'nama_regulasi'=>'required',
            'tahun'=>'required',
            'dokumen'=>'mimes:pdf|max:10240',
        ]);

        $dataEdit =[
            'jenis_regulasi'=>$request->jenis_regulasi,
            'nama_regulasi'=>$request->nama_regulasi,
            'tahun'=>$request->tahun,
        ];

        if ($request->hasFile('dokumen')){
            $dokumen_file  = $request->file('dokumen');
            $dokumen_nama  = $dokumen_file->hashName();
            $dokumen_file->move(public_path('dokumen'), $dokumen_nama);
            
            $regulasi = Regulasi::where('id', $id)->first();
            File::delete(public_path('dokumen').'/'. $regulasi->dokumen);

            $dataEdit['dokumen'] = $dokumen_nama;
        }
        
        Regulasi::where('id', $id)->update($dataEdit);
        
        return redirect('regulasi')->with('message', 'Edit Data berhasil..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
