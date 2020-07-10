<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Grup;
use App\Member;

class Fotos extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /* Foto Kolom Edit Bahasa Indonesia*/

    public function fotoedit()
    {
        $foto = Foto::paginate(10);
    	return view('foto.fotoedit', ['foto' => $foto]);
	}
   
    public function cari(Request $request)
    
    {
    // menangkap data pencarian
    $cari = $request->cari;
     // mengambil data dari table foto sesuai pencarian data
    $foto = Foto::where('judul','like',"%".$cari."%")->paginate(10);
     // mengirim data foto ke view index
    return view('foto.fotoedit',['foto' => $foto]);
    }

    public function foto_edit($id)
	{
   		$foto = Foto::find($id);
   		return view('foto.foto_edit', ['foto' => $foto]);
	}

    public function foto_store(Request $request)
    {
    	$this->validate($request,[
    		'gambar' => 'required',
    		'judul' => 'required',
    		'jenis' => 'required',
			'selengkapnya' => 'required'
    	]);
 
        Foto::create([
    		'gambar' => $request->gambar,
			'judul' => $request->judul,
			'jenis' => $request->jenis,
			'selengkapnya' => $request->selengkapnya
    	]);
 
    	return redirect('/fotoedit');
	}

    public function foto_update($id, Request $request)
	{
    	$this->validate($request,[
    		'gambar' => 'required',
    		'judul' => 'required',
    		'jenis' => 'required',
            'selengkapnya' => 'required'
    ]);
 
    	$foto = Foto::find($id);
    	$foto->gambar = $request->gambar;
		$foto->jenis = $request->jenis;
		$foto->judul = $request->judul;
		$foto->selengkapnya = $request->selengkapnya;
    	$foto->save();
    	return redirect('/fotoedit');
	}

	public function foto_hapus($id)
	{
		$foto = Foto::find($id);
		$foto->delete();
		return redirect('/fotoedit');
	}
}