@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
@section('judul_halaman', 'Info Covid-19 in the World')

<title>Info Covid-19 In the World</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<body style="background-color:#f0f8ff">
@section ('konten')
<div class="text-right">
<h5>Pilih Bahasa/言語を選択 : </h5>
<a href="/id/corona/dunia">ID</a>
<a href="/en/corona/dunia">EN</a>
<a href="/jp/corona/dunia">JP</a>
</div>
<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Number</th>
                        <th scope="col">Country</th>
                        <th scope="col">Total Cases</th>
                        <th scope="col">Total Recovered</th>
                        <th scope="col">Total Deaths</th>
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
    <footer class="footer">
<nav class="navbar navbar-expand-md navbar-white" style="background-color:red">            
<div class="container-fluid">
                <div class="nav navbar-nav navbar-left">
                  <a class="nav-link btn btn-danger" href="/id/corona/indonesia">Show Indonesia?</a>
                </div>
                <div class="nav navbar-nav navbar-right">
                  <a class="nav-link btn btn-primary" href="/id/corona/provinsi">Show Province in Indonesia?</a>
                </div>
            </div>         
        </nav>
    </footer>

@endsection
</body>
</html>