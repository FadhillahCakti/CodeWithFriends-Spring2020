@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
@section ('judul_halaman', 'Foto 48 List')

<title>Foto 48 List(Utama)</title>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:#f0f8ff">
@section('konten')
<div class="text-right">
<h5>Pilih Bahasa/言語を選択 : </h5>
<a href="/id/foto">ID</a>
<a href="/en/foto">EN</a>
<a href="/jp/foto">JP</a>
</div>
<p>Search Photo :</p>
<form action="/en/foto/cari" method="GET">
	<input type="text" name="cari" placeholder="Search Photo Title" value="{{ old('cari') }}">
	<input type="submit" value="CARI">
</form>
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <p>To Search for Photos of Your Desired Members Search in the Search Box on the Left </p>
                 </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <tbody>
                            @foreach($foto as $datas)
                            <tr>
                                <td><img src="{{ $datas->gambar}}" style="width:75x;height:100px;"></td>
                                <td> Title : <strong>{{ $datas->judul }}</strong> </br> 
                                Type : {{ $datas->jenis}}</br>
                                Member :
                                @foreach($datas->member as $members) 
                                    {{ $members->nama }},
                                @endforeach </br>
                                Group : 
                                @foreach($datas->grup as $grups)
                                    {{ $grups->nama }},
                                @endforeach</td>
                                <td><a href ="{{$datas->selengkapnya}}" class ="btn btn-primary">See More</a></td></tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
Page : {{ $foto->currentPage() }} <br/>
Total : {{ $foto->total() }} <br/>
Data Per Page : {{ $foto->perPage() }} <br/>
 
 
{{ $foto->links() }}

@endsection
</body>
</html>