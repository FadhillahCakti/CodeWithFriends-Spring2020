@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<div class="text-right">
<h5>@lang('corona.pilihbahasa') : </h5>
<a href="/id/corona">ID</a>
<a href="/en/corona">EN</a>
<a href="/jp/corona">JP</a>
</div>
<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">@lang('corona.judul')</h1>
          <p class="lead text-muted">@lang('corona.penjelasan')</p>
            <a href="/id/corona/indonesia" class="btn btn-danger my-1">@lang('corona.tempat.1')</a>
            <a href="/id/corona/provinsi" class="btn btn-primary my-1">@lang('corona.tempat.2')</a>
            <a href="/id/corona/dunia" class="btn btn-warning">@lang('corona.tempat.3')</a>
          </p>
        </div>
      </section>
@endsection 
</body>
</html>