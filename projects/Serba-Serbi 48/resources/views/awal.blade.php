@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <title>Serba-Serbi 48</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<body style="background-color:#f0f8ff">
@section('konten')

<!----Carousel Content--->
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-color:green">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="http://stage48.net/wiki/images/2/22/AKBLogo.png" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>@lang('awal.member.1')</h1>
                <p>@lang('awal.member.2')</p>
                <p><a class="btn btn-lg btn-primary" href="/id/member" role="button">@lang('awal.member.3')</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="http://stage48.net/wiki/images/2/22/AKBLogo.png" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>@lang('awal.lirik.1')</h1>
                <p>@lang('awal.lirik.2')</p>
                <p><a class="btn btn-lg btn-primary" href="/id/lirik" role="button">@lang('awal.lirik.3')</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="http://stage48.net/wiki/images/2/22/AKBLogo.png" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>@lang('awal.foto.1')</h1>
                <p>@lang('awal.foto.2')</p>
                <p><a class="btn btn-lg btn-primary" href="/id/foto" role="button">@lang('awal.foto.3')</a></p>
              </div>
            </div>
          </div>
        <div class="carousel-item">
            <img class="forth-slide" src="http://stage48.net/wiki/images/2/22/AKBLogo.png" alt="Forth slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>@lang('awal.info.1')</h1>
                <p>@lang('awal.info.2')</p>
                <p><a class="btn btn-lg btn-primary" href="/info" role="button">@lang('awal.info.3')</a></p>
              </div>
            </div>
          </div>
        <div class="carousel-item">
            <img class="fifth-slide" src="http://stage48.net/wiki/images/2/22/AKBLogo.png" alt="Fifth slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>@lang('awal.corona.1')</h1>
                <p>@lang('awal.corona.2')</p>
                <p><a class="btn btn-lg btn-primary" href="/id/corona" role="button">@lang('awal.corona.3')</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</br></br></br>
<!---Gambar 48 Group--->
<div class="text-right">
<h5>@lang('awal.pilihbahasa') : </h5>
<a href="/awal/id">ID</a>
<a href="/awal/en">EN</a>
<a href="/awal/jp">JP</a>
</div>

<h2 class="text-center">@lang('awal.penjelasan')</h2></br>
<div class="row">
<div class="col-lg-3">
<a href="/id/akb48">
  <img src="http://stage48.net/wiki/images/2/22/AKBLogo.png" alt="AKB48" style="width:75px;height:100px;border:0;">
  <p>AKB48</p></a></div>

<div class="col-lg-3">
<a href="/id/jkt48">
  <img src="http://stage48.net/wiki/images/2/22/JKTLogo.png" alt="JKT48" style="width:75px;height:100px;border:0;">
  <p>JKT48</p></a></div>

<div class="col-lg-3">
<a href="/id/mnl48">
  <img src="http://stage48.net/wiki/images/thumb/b/b9/MNLLogo.png/391px-MNLLogo.png" alt="MNL48" style="width:75px;height:100px;border:0;">
  <p>MNL48</p></a></div>

<div class="col-lg-3">
<a href="/id/ske48">
  <img src="http://stage48.net/wiki/images/thumb/6/6a/SKELogo.png/427px-SKELogo.png" alt="SKE48" style="width:75px;height:100px;border:0;">
  <p>SKE48</p></a></div>

<div class="col-lg-3">
<a href="/id/hkt48">
  <img src="http://stage48.net/wiki/images/a/a0/HKTLogo.png" alt="HKT48" style="width:75px;height:100px;border:0;">
  <p>HKT48</p></a></div>

<div class="col-lg-3">
<a href="/id/bnk48">
  <img src="http://stage48.net/wiki/images/thumb/d/d5/BNKLogo.jpg/428px-BNKLogo.jpg" alt="BNK48" style="width:75px;height:100px;border:0;">
  <p>BNK48</p></a></div>

<div class="col-lg-3">
<a href="/id/cgm48">
  <img src="http://stage48.net/wiki/images/thumb/f/fb/CGMLogo.jpg/210px-CGMLogo.jpg" alt="CGM48" style="width:75px;height:100px;border:0;">
  <p>CGM48</p></a></div>

<div class="col-lg-3">
<a href="/id/nmb48">
  <img src="http://stage48.net/wiki/images/3/35/NMBLogo.png" alt="NMB48" style="width:75px;height:100px;border:0;">
  <p>NMB48</p></a></div>

<div class="col-lg-3">
<a href="/id/stu48">
  <img src="http://stage48.net/wiki/images/4/49/STULogo.jpg" alt="STU48" style="width:75px;height:100px;border:0;">
  <p>STU48</p></a></div>
  
<div class="col-lg-3">
<a href="/id/sgo48">
  <img src="http://stage48.net/wiki/images/5/51/SGO48Logo.jpg" alt="SGO48" style="width:75px;height:100px;border:0;">
  <p>SGO48</p></a></div>

<div class="col-lg-3">
<a href="/id/izone">
  <img src="http://stage48.net/wiki/images/thumb/1/11/IZONE.png/800px-IZONE.png" alt="Izone" style="width:75px;height:100px;border:0;">
  <p>Izone</p></a></div>

 <div class="col-lg-3">
<a href="/id/ngt48">
  <img src="http://stage48.net/wiki/images/e/ed/NGTLogo.png" alt="NGT48" style="width:75px;height:100px;border:0;">
  <p>NGT48</p></a></div>

<div class="col-lg-3">
<a href="/id/akb48sh">
  <img src="http://stage48.net/wiki/images/2/2e/TeamSHLogo.JPG" alt="AKB48 Tim SH" style="width:75px;height:100px;border:0;">
  <p>AKB48 Tim SH</p></a></div>

<div class="col-lg-3">
<a href="/id/nogizaka46">
  <img src="http://stage48.net/wiki/images/8/85/NogiLogo.png" alt="Nogizaka 46" style="width:75px;height:100px;border:0;">
  <p>Nogizaka46</p></a></div>

<div class="col-lg-3">
<a href="/id/keyakizaka46">
  <img src="http://stage48.net/wiki/images/7/77/Keyakizaka46OfficialLogo2015.png" alt="Keyakizaka46" style="width:75px;height:100px;border:0;">
  <p>Keyakizaka46</p></a></div>

<div class="col-lg-3">
<a href="/id/akb48tp">
  <img src="http://stage48.net/wiki/images/1/19/AKB48TeamTP.jpg" alt="AKB48 TIm TP" style="width:75px;height:100px;border:0;">
  <p>AKB48 Tim TP</p></a></div>

@endsection 
</body>
</html>