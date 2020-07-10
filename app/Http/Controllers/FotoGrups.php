<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FotoGrup;

class FotoGrups extends Controller
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

	public function fotogrupedit()
    {
    	$fotogrup = FotoGrup::paginate(10);
    	return view('fotogrup.fotogrupedit', ['fotogrup' => $fotogrup]);
	}

	public function fotogrup_edit($id)
	{
   		$fotogrup = fotogrup::find($id);
   		return view('fotogrup.fotogrup_edit', ['fotogrup' => $fotogrup]);
	}
	
    public function fotogrup_store(Request $request)
    {
    	$this->validate($request,[
    		'foto_id' => 'required',
    		'grup_id' => 'required'
    	]);
 
        FotoGrup::create([
    		'foto_id' => $request->foto_id,
			'grup_id' => $request->grup_id
    	]);
 
    	return redirect('/id/fotoedit');
	}

    public function fotogrup_update($id, Request $request)
	{
    	$this->validate($request,[
    		'foto_id' => 'required',
    		'grup_id' => 'required'
    ]);
 
    	$fotogrup = FotoGrup::find($id);
    	$fotogrup->foto_id = $request->foto_id;
		$fotogrup->grup_id = $request->grup_id;
		$fotogrup->save();
    	return redirect('/id/fotoedit');
	}

	public function fotogrup_hapus($id)
	{
		$fotogrup = FotoGrup::find($id);
		$fotogrup->delete();
		return redirect('/id/fotoedit');
	}
}