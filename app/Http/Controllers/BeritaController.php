<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Berita;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('berita.index', [
            'berita'=>Berita::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('berita.create');

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
                'judul'=>'required',
                'tanggal'=>'required|date',
                'deskripsi'=>'required',
                'author'=>'required'
            ]);


        $deskripsi = $request->deskripsi;
        $pattern = '/<img.*?src="(data:image\/[a-zA-Z]+;base64,[^"]+)"/i';
        preg_match_all($pattern, $deskripsi, $matches);

        $gambarBase64 = $matches[1];

        foreach ($gambarBase64 as $gambar) {
            $data = explode(',', $gambar);
            $gambarData = $data[1];
            $mime = $data[0];

            $finfo = finfo_open();
            $ext = finfo_buffer($finfo, base64_decode($gambarData), FILEINFO_MIME_TYPE);
            finfo_close($finfo);
            $ext = explode('/',$ext)[1];

            $namaFile = "berita/" . uniqid() . '.' . $ext;

            // Menyimpan gambar ke disk publik
            Storage::disk('public')->put($namaFile, base64_decode($gambarData));
        
            // Membuat URL gambar yang dapat diakses
             $namaFile= "/storage/$namaFile";
        
            // Mengganti base64 dengan URL gambar
            $deskripsi = str_replace($gambar, $namaFile, $deskripsi);
        }
        
        Berita::create(
            [
                'judul'=>$request->judul,
                'tanggal'=>$request->tanggal,
                'deskripsi'=>$deskripsi,
                'author'=>$request->author
             ]);
        return redirect('berita')->with('message', 'Tambah data berhasil...');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $berita = Berita::findOrFail($id);
        return view('berita.show', compact('berita'));

    }
 
    public function edit($id)
    {

        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'judul' => 'required',
                'tanggal' => 'required|date',
                'deskripsi' => 'required',
                'author' => 'required',
            ]
        );

        $berita = Berita::findOrFail($id);

        $deskripsiLama = $berita->deskripsi;

 
        $deskripsiBaru = $request->deskripsi;
        $pattern = '/<img.*?src="(data:image\/[a-zA-Z]+;base64,[^"]+)"/i';
        preg_match_all($pattern, $deskripsiBaru, $matches);

        $gambarBase64Baru = $matches[1];

        foreach ($gambarBase64Baru as $gambar) {
            $data = explode(',', $gambar);
            $gambarData = $data[1];
            $mime = $data[0];

            $finfo = finfo_open();
            $ext = finfo_buffer($finfo, base64_decode($gambarData), FILEINFO_MIME_TYPE);
            finfo_close($finfo);
            $ext = explode('/', $ext)[1];

            $namaFile = "berita/" . uniqid() . '.' . $ext;


            Storage::disk('public')->put($namaFile, base64_decode($gambarData));


            $urlGambar = "/storage/$namaFile";

            $deskripsiBaru = str_replace($gambar, $urlGambar, $deskripsiBaru);
        }

        $patternLama = '/<img.*?src="(\/storage\/berita\/[^"]+)"/i';
        preg_match_all($patternLama, $deskripsiLama, $matchesLama);
        $gambarLama = $matchesLama[1];

        foreach ($gambarLama as $gambar) {
            $filePath = str_replace('/storage/', '', $gambar);
            if (Storage::disk('public')->exists($filePath)) {
                Storage::disk('public')->delete($filePath);
            }
        }

        // Perbarui data di database
        $berita->update([
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'deskripsi' => $deskripsiBaru,
            'author' => $request->author,
        ]);

        return redirect('berita')->with('message', 'Data berhasil diperbarui...');

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
}
