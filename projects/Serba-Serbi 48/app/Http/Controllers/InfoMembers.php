<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoMember;

class InfoMembers extends Controller
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

	public function infomemberedit()
    {
    	$infomember = InfoMember::paginate(10);
    	return view('infomember.infomemberedit', ['infomember' => $infomember]);
	}
	
    public function infomember_tambah()
    {
    	return view('infomember.infomember_tambah');
    }

    public function infomember_store(Request $request)
    {
    	$this->validate($request,[
    		'info_id' => 'required',
    		'member_id' => 'required'
    	]);
 
        InfoMember::create([
    		'info_id' => $request->info_id,
			'member_id' => $request->member_id
    	]);
 
    	return redirect('/infoedit');
	}

    public function infomember_edit($id)
	{
   		$infomember = InfoMember::find($id);
   		return view('infomember.infomember_edit', ['infomember' => $infomember]);
	}

	public function infomember_update($id, Request $request)
	{
    	$this->validate($request,[
    		'info_id' => 'required',
    		'member_id' => 'required'
    ]);
 
    	$infomember = InfoMember::find($id);
    	$infomember->info_id = $request->info_id;
		$infomember->member_id = $request->member_id;
		$infomember->save();
    	return redirect('/infoedit');
	}

	public function infomember_hapus($id)
	{
		$infomember = InfoMember::find($id);
		$infomember->delete();
		return redirect('/infoedit');
	}
}