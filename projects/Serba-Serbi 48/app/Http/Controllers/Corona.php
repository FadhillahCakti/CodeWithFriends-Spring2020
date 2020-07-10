<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class Corona extends Controller
{
   
    /* Data Corona Bahasa Indonesia */
    public function indonesiaid()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia');
        $data = $response->json();
//        dd($data);
        return view('corona.indonesiaid',compact('data'));
    }

    public function provinsiid()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->json();
//        dd($data);
        return view('corona.provinsiid',compact('data'));
    }

    public function duniaid()
    {
        $response = Http::get('https://api.kawalcorona.com');
        $data = $response->json();
//        dd($data);
        return view('corona.duniaid',compact('data'));
    }

    /* Data Corona Bahasa Inggris */
    public function indonesiaen()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia');
        $data = $response->json();
//        dd($data);
        return view('corona.indonesiaen',compact('data'));
    }

    public function provinsien()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->json();
//        dd($data);
        return view('corona.provinsien',compact('data'));
    }

    public function duniaen()
    {
        $response = Http::get('https://api.kawalcorona.com');
        $data = $response->json();
//        dd($data);
        return view('corona.duniaen',compact('data'));
    }

        /* Data Corona Bahasa Jepang */
        public function indonesiajp()
        {
            $response = Http::get('https://api.kawalcorona.com/indonesia');
            $data = $response->json();
    //        dd($data);
            return view('corona.indonesiajp',compact('data'));
        }
    
        public function provinsijp()
        {
            $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
            $data = $response->json();
    //        dd($data);
            return view('corona.provinsijp',compact('data'));
        }
    
        public function duniajp()
        {
            $response = Http::get('https://api.kawalcorona.com');
            $data = $response->json();
    //        dd($data);
            return view('corona.duniajp',compact('data'));
        }
    
}