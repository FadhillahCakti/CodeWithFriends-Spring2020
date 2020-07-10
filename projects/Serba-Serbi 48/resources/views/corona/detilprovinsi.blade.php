@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<div class="text-right">
<h5>@lang('detilprovinsi.pilihbahasa') : </h5>
<a href="/id/corona/detilprovinsi">ID</a>
<a href="/en/corona/detilprovinsi">EN</a>
<a href="/jp/corona/detilprovinsi">JP</a>
</div>
<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">@lang('detilprovinsi.judul')</h1>
          <p class="lead text-muted">@lang('detilprovinsi.penjelasan')</p>
            <a href="https://corona.jakarta.go.id/" class="btn btn-danger my-1">@lang('detilprovinsi.tempat.1')</a>
            <a href="https://pikobar.jabarprov.go.id/" class="btn btn-primary my-1">@lang('detilprovinsi.tempat.2')</a>
            <a href="http://checkupcovid19.jatimprov.go.id/" class="btn btn-warning my-1">@lang('detilprovinsi.tempat.3')</a>
            <a href="https://corona.jatengprov.go.id/" class="btn btn-info my-1">@lang('detilprovinsi.tempat.4')</a>
            <br>
            <a href="https://covid19.sulselprov.go.id/" class="btn btn-danger my-1">@lang('detilprovinsi.tempat.5')</a>
            <a href="https://infocorona.bantenprov.go.id/" class="btn btn-primary my-1">@lang('detilprovinsi.tempat.6')</a>
            <a href="https://infocorona.baliprov.go.id/" class="btn btn-warning my-1">@lang('detilprovinsi.tempat.7')</a>
            <a href="https://corona.ntbprov.go.id/" class="btn btn-info my-1">@lang('detilprovinsi.tempat.8')</a>
            <br>
            <a href="http://corona.kalselprov.go.id/" class="btn btn-danger my-1">@lang('detilprovinsi.tempat.9')</a>
            <a href="http://corona.sumselprov.go.id/" class="btn btn-primary my-1">@lang('detilprovinsi.tempat.10')</a>
            <a href="https://corona.sumbarprov.go.id/" class="btn btn-warning my-1">@lang('detilprovinsi.tempat.11')</a>
            <a href="http://corona.kalteng.go.id/" class="btn btn-info my-1">@lang('detilprovinsi.tempat.12')</a>
            <br>
            <a href="http://covid19.kaltimprov.go.id/" class="btn btn-danger my-1">@lang('detilprovinsi.tempat.13')</a>
            <a href="http://corona.kepriprov.go.id/" class="btn btn-primary my-1">@lang('detilprovinsi.tempat.14')</a>
            <a href="http://humas.kaltaraprov.go.id/" class="btn btn-warning my-1">@lang('detilprovinsi.tempat.15')</a>
            <a href="http://covid19.kalbarprov.go.id/" class="btn btn-info my-1">@lang('detilprovinsi.tempat.16')</a>
            <br>
            <a href="http://dinkes.sultraprov.go.id/" class="btn btn-danger my-1">@lang('detilprovinsi.tempat.17')</a>
            <a href="http://dinkes.lampungprov.go.id/covid19" class="btn btn-primary my-1">@lang('detilprovinsi.tempat.18')</a>
            <a href="https://corona.riau.go.id/" class="btn btn-warning my-1">@lang('detilprovinsi.tempat.19')</a>
            <a href="http://corona.sulutprov.go.id/" class="btn btn-info my-1">@lang('detilprovinsi.tempat.20')</a>
            <br>
            <a href="http://dinkes.sulbarprov.go.id/" class="btn btn-danger my-1">@lang('detilprovinsi.tempat.21')</a>
            <a href="http://dinkes.sultengprov.go.id/category/covid-19" class="btn btn-primary my-1">@lang('detilprovinsi.tempat.22')</a>
            <a href="http://covid19.jambikota.go.id//" class="btn btn-warning my-1">@lang('detilprovinsi.tempat.23')</a>
            <a href="http://corona.malukuprov.go.id/" class="btn btn-info my-1">@lang('detilprovinsi.tempat.24')</a>
            <br>
            <a href="https://malutprov.go.id/tag/satgas-covid" class="btn btn-danger my-1">@lang('detilprovinsi.tempat.25')</a>
            <a href="http://dinkes.gorontaloprov.go.id/" class="btn btn-primary my-1">@lang('detilprovinsi.tempat.26')</a>
            <a href="http://covid19.babelprov.go.id/" class="btn btn-warning my-1">@lang('detilprovinsi.tempat.27')</a>
            <a href="https://covid19.acehprov.go.id/" class="btn btn-info my-1">@lang('detilprovinsi.tempat.28')</a>
            <br>
          </p>
        </div>
      </section>
@endsection 
</body>
</html>