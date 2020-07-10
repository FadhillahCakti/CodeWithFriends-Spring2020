<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Info;
use App\Foto;
 
class Utama extends Controller
{
   
    /* Info Home */

    public function info()
    {
        $info = Info::paginate(10);
    	return view('info.info', ['info' => $info]);
	}
   
    public function cariinfo(Request $request)
    
    {
    // menangkap data pencarian
    $cari = $request->cari;
     // mengambil data dari table info sesuai pencarian data
    $info = Info::where('judul','like',"%".$cari."%")->paginate(10);
     // mengirim data info ke view index
    return view('info.info',['info' => $info]);
    }

/*----------------------------------------------------*/

    /* Foto Home Bahasa Indonesia*/

    public function fotoid()
    {
        $foto = Foto::paginate(10);
    	return view('foto.fotoid', ['foto' => $foto]);
	}
   
    public function carifotoid(Request $request)
    
    {
    // menangkap data pencarian
    $cari = $request->cari;
     // mengambil data dari table foto sesuai pencarian data
    $foto = Foto::where('judul','like',"%".$cari."%")->paginate(10);
     // mengirim data foto ke view index
    return view('foto.fotoid',['foto' => $foto]);
    }

   /* Foto Home Bahasa Inggris*/

   public function fotoen()
   {
       $foto = Foto::paginate(10);
       return view('foto.fotoen', ['foto' => $foto]);
   }
  
   public function carifotoen(Request $request)
   
   {
   // menangkap data pencarian
   $cari = $request->cari;
    // mengambil data dari table foto sesuai pencarian data
   $foto = Foto::where('judul','like',"%".$cari."%")->paginate(10);
    // mengirim data foto ke view index
   return view('foto.fotoen',['foto' => $foto]);
   }    
   
      /* Foto Home Bahasa Jepang*/

      public function fotojp()
      {
          $foto = Foto::paginate(10);
          return view('foto.fotojp', ['foto' => $foto]);
      }
     
      public function carifotojp(Request $request)
      
      {
      // mjpangkap data pjpcarian
      $cari = $request->cari;
       // mjpgambil data dari table foto sesuai pjpcarian data
      $foto = Foto::where('judul','like',"%".$cari."%")->paginate(10);
       // mjpgirim data foto ke view index
      return view('foto.fotojp',['foto' => $foto]);
      }
}