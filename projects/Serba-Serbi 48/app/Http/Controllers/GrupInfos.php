<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GrupInfo;

class GrupInfos extends Controller
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

	public function grupinfoedit()
    {
    	$grupinfo = GrupInfo::paginate(10);
    	return view('grupinfo.grupinfoedit', ['grupinfo' => $grupinfo]);
	}

    public function grupinfo_tambah()
    {
    	return view('grupinfo.grupinfo_tambah');
    }

    public function grupinfo_store(Request $request)
    {
    	$this->validate($request,[
    		'grup_id' => 'required',
    		'info_id' => 'required'
    	]);
 
        GrupInfo::create([
    		'grup_id' => $request->grup_id,
			'info_id' => $request->info_id
    	]);
 
    	return redirect('/infoedit');
	}

    public function grupinfo_edit($id)
	{
   		$grupinfo = GrupInfo::find($id);
   		return view('grupinfo.grupinfo_edit', ['grupinfo' => $grupinfo]);
	}

	public function grupinfo_update($id, Request $request)
	{
    	$this->validate($request,[
    		'grup_id' => 'required',
    		'info_id' => 'required'
    ]);
 
    	$grupinfo = GrupInfo::find($id);
    	$grupinfo->grup_id = $request->grup_id;
		$grupinfo->info_id = $request->info_id;
		$grupinfo->save();
    	return redirect('/infoedit');
	}

	public function grupinfo_hapus($id)
	{
		$grupinfo = GrupInfo::find($id);
		$grupinfo->delete();
		return redirect('/infoedit');
	}
}