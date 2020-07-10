<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FotoMember;

class FotoMembers extends Controller
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

	public function fotomemberedit()
    {
    	$fotomember = FotoMember::paginate(10);
    	return view('fotomember.fotomemberedit', ['fotomember' => $fotomember]);
	}

	public function fotomember_tambah()
    {
    	return view('fotomember.fotomember_tambah');
    }

    public function fotomember_store(Request $request)
    {
    	$this->validate($request,[
    		'foto_id' => 'required',
    		'member_id' => 'required'
    	]);
 
        FotoMember::create([
    		'foto_id' => $request->foto_id,
			'member_id' => $request->member_id
    	]);
 
    	return redirect('/id/fotoedit');
	}

    public function fotomember_edit($id)
	{
   		$fotomember = FotoMember::find($id);
   		return view('fotomember.fotomember_edit', ['fotomember' => $fotomember]);
	}

	public function fotomember_update($id, Request $request)
	{
    	$this->validate($request,[
    		'foto_id' => 'required',
    		'member_id' => 'required'
    ]);
 
    	$fotomember = FotoMember::find($id);
    	$fotomember->foto_id = $request->foto_id;
		$fotomember->member_id = $request->member_id;
		$fotomember->save();
    	return redirect('/id/fotoedit');
	}

	public function fotomember_hapus($id)
	{
		$fotomember = FotoMember::find($id);
		$fotomember->delete();
		return redirect('/id/fotoedit');
	}
}