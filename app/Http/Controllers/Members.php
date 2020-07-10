<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class Members extends Controller
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

    // Member Kolom Edit Bahasa Indonesia

    public function memberedit()
    {
        $member = Member::paginate(10);
    	return view('member.memberedit', ['member' => $member]);
	}
   
    public function cari(Request $request)
    
    {
    // menangkap data pencarian
    $cari = $request->cari;
     // mengambil data dari table member sesuai pencarian data
    $member = Member::where('nama','like',"%".$cari."%")->paginate(10);
     // mengirim data member ke view index
    return view('member.memberedit',['member' => $member]);
    }

    public function member_edit($id)
	{
   		$member = Member::find($id);
   		return view('member.member_edit', ['member' => $member]);
    }
    
    public function member_store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required'
    	]);
 
        Member::create([
    		'nama' => $request->nama
    	]);
 
    	return redirect('/id/memberedit');
	}

 	public function member_update($id, Request $request)
	{
    	$this->validate($request,[
    		'nama' => 'required'
    ]);
 
    	$member = Member::find($id);
    	$member->nama = $request->nama;
    	$member->save();
    	return redirect('/id/memberedit');
	}

	public function member_hapus($id)
	{
		$member = Member::find($id);
		$member->delete();
		return redirect('/id/memberedit');
	}
}