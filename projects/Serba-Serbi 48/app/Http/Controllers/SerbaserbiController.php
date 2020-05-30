<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

 
class SerbaserbiController extends Controller
{
   
    public function index ()
    {
        return view('index');
    }

    public function gantibahasa ()
    {
        return view('gantibahasa');
    }

    public function tentang ()
    {
        return view('tentang');
    }

    public function about ()
    {
        return view('en.about');
    }
    
    public function yaku()
    {
        return view('jp.yaku');
    }
    
    /* Data Corona */

    
    public function corona ()
    {
        return view('id.corona.corona');
    }

    
    public function detilprovinsi ()
    {
        return view('id.corona.detilprovinsi');
    }

    public function indonesia()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia');
        $data = $response->json();
//        dd($data);
        return view('id.corona.indonesia',compact('data'));
    }

    public function provinsi()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->json();
//        dd($data);
        return view('id.corona.provinsi',compact('data'));
    }

    public function dunia()
    {
        $response = Http::get('https://api.kawalcorona.com');
        $data = $response->json();
//        dd($data);
        return view('id.corona.dunia',compact('data'));
    }

}