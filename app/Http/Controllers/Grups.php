<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grup;

class Grups extends Controller
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

    // grup Kolom Edit Bahasa Indonesia

    public function grupedit()
    {
        $grup = Grup::paginate(10);
    	return view('grup.grupedit', ['grup' => $grup]);
	}
   
    public function cari(Request $request)
    
    {
    // menangkap data pencarian
    $cari = $request->cari;
     // mengambil data dari table grup sesuai pencarian data
    $grup = Grup::where('nama','like',"%".$cari."%")->paginate(10);
     // mengirim data grup ke view index
    return view('grup.grupedit',['grup' => $grup]);
    }

    public function grup_edit($id)
	{
   		$grup = Grup::find($id);
   		return view('grup.grup_edit', ['grup' => $grup]);
    }
    
    public function grup_store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required'
    	]);
 
        Grup::create([
    		'nama' => $request->nama
    	]);
 
    	return redirect('/id/grupedit');
	}

	public function grup_update($id, Request $request)
	{
    	$this->validate($request,[
    		'nama' => 'required'
    ]);
 
    	$grup = Grup::find($id);
    	$grup->nama = $request->nama;
    	$grup->save();
    	return redirect('/id/grupedit');
	}

	public function grup_hapus($id)
	{
		$grup = Grup::find($id);
		$grup->delete();
		return redirect('/id/grupedit');
	}
}