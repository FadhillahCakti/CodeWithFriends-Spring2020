@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
 @section('judul_halaman', 'Info Covid-19 di Provinsi')

<title>Info Covid-19 di Provinsi di Indonesia</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<body style="background-color:#f0f8ff">
@section ('konten')
<div class="text-right">
<h5>Pilih Bahasa/言語を選択 : </h5>
<a href="/id/corona/provinsi">ID</a>
<a href="/en/corona/provinsi">EN</a>
<a href="/jp/corona/provinsi">JP</a>
</div>
<br>
<p class = "text-center">For detailed information from several provinces, <a href="/id/corona/detilprovinsi">Click Here</a></p>
<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                      <th scope="col">Number</th>
                        <th scope="col">Province</th>
                        <th scope="col">Total Cases</th>
                        <th scope="col">Total Recovered</th>
                        <th scope="col">Total Deaths</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                    @foreach ($data as $datas)   
                        @php
                            $no++;
                        @endphp
                      <tr>
                        <th scope="row">{{ $no }}</th>
                        <td>{{ $datas['attributes']['Provinsi'] }}</td>
                        <td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
                        <td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
                        <td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
                      </tr>
                    @endforeach 
                    </tbody>
                  </table>
    </div>
    <footer class="footer">
<nav class="navbar navbar-expand-md navbar-white" style="background-color:red">            
<div class="container-fluid">
                <div class="nav navbar-nav navbar-left">
                  <a class="nav-link btn btn-danger" href="/id/corona/indonesia">Show in Indonesia?</a>
                </div>
                <div class="nav navbar-nav navbar-right">
                  <a class="nav-link btn btn-warning" href="/id/corona/dunia">Show in World?</a>
                </div>
            </div>         
        </nav>
    </footer>

@endsection
</body>
</html>