@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
@section('judul_halaman', 'Covid-19世界の情報')

<title>Covid-19世界の情報</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<body style="background-color:#f0f8ff">
@section ('konten')
<div class="text-right">
<h5>Pilih Bahasa/Choose Language : </h5>
<a href="/id/corona/dunia">ID</a>
<a href="/en/corona/dunia">EN</a>
<a href="/jp/corona/dunia">JP</a>
</div>
<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">数</th>
                        <th scope="col">国</th>
                        <th scope="col">総件数</th>
                        <th scope="col">総回収</th>
                        <th scope="col">総死亡</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $Number = 0;
                        @endphp
                    @foreach ($data as $datas)   
                        @php
                            $Number++;
                        @endphp
                      <tr>
                        <th scope="row">{{ $Number }}</th>
                        <td>{{ $datas['attributes']['Country_Region'] }}</td>
                        <td>{{ $datas['attributes']['Confirmed'] }}</td>
                        <td>{{ $datas['attributes']['Recovered'] }}</td>
                        <td>{{ $datas['attributes']['Deaths'] }}</td>
                      </tr>
                    @endforeach 
                    </tbody>
                  </table>
    </div>
    <nav class="navbar navbar-expand-md navbar-white" style="background-color:red">            
<div class="container-fluid">
                <div class="nav navbar-nav navbar-left">
                  <a class="nav-link btn btn-danger" href="/id/corona/indonesia">インドネシア</a>
                </div>
                <div class="nav navbar-nav navbar-right">
                  <a class="nav-link btn btn-primary" href="/id/corona/provinsi">インドネシアの州</a>
                </div>
            </div>         
        </nav>
    </footer>

@endsection
</body>
</html>