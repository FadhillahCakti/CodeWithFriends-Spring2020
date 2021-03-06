@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
@section ('judul_halaman', 'Info Covid-19 di Indonesia')

<title>Info Covid-19 di Indonesia</title>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<body style="background-color:#f0f8ff">
@section('konten')
<div class="text-right">
<h5>Choose Language/言語を選択 : </h5>
<a href="/id/corona/indonesia">ID</a>
<a href="/en/corona/indonesia">EN</a>
<a href="/jp/corona/indonesia">JP</a>
</div>
<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $datas)  
                      <tr>
                        <td>{{ $datas['name'] }}</td>
                        <td>{{ $datas['positif'] }}</td>
                        <td>{{ $datas['sembuh'] }}</td>
                        <td>{{ $datas['meninggal'] }}</td>
                      </tr>
                    @endforeach 
                    </tbody>
                  </table>
    </div>
<!-- footer -->
<footer class="footer">
<nav class="navbar navbar-expand-md navbar-white" style="background-color:red">            <div class="container-fluid">
                <div class="nav navbar-nav navbar-left">
                  <a class="nav-link btn btn-primary" href="/id/corona/provinsi">Lihat Provinsi di Indonesia?</a>
                </div>
                <div class="nav navbar-nav navbar-right">
                  <a class="nav-link btn btn-warning" href="/id/corona/dunia">Lihat di Dunia?</a>
                </div>
            </div>         
        </nav>
    </footer>
@endsection
</body>
</html>