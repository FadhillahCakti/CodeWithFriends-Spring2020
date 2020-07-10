@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
@section ('judul_halaman', 'Daftar Foto 48')

<title>Daftar Foto 48(Utama)</title>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:#f0f8ff">
@section('konten')
<div class="text-right">
<h5>Pilih Bahasa/Choose Language/言語を選択 : </h5>
<a href="/id/foto">ID</a>
<a href="/en/foto">EN</a>
<a href="/jp/foto">JP</a>
</div>
<p>Cari Foto Member :</p>
<form action="/id/foto/cari" method="GET">
	<input type="text" name="cari" placeholder="Cari Grup/Nama Member Disini" value="{{ old('cari') }}">
	<input type="submit" value="CARI">
</form>
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <p>Untuk Mencari Foto Member Keinginan Anda Cari di Kotak Pencarian Disamping Kiri</p>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <tbody>
                            @foreach($foto as $datas)
                            <tr>
                                <td><img src="{{ $datas->gambar}}" style="width:75x;height:100px;"></td>
                                <td> Judul : <strong>{{ $datas->judul }}</strong> </br> 
                                Jenis : {{ $datas->jenis}}</br>
                                Member :
                                @foreach($datas->member as $members) 
                                    {{ $members->nama }},
                                @endforeach </br>
                                Grup : 
                                @foreach($datas->grup as $grups)
                                    {{ $grups->nama }},
                                @endforeach</td>
                                <td><a href ="{{$datas->selengkapnya}}" class ="btn btn-primary">Selengkapnya</a></td></tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
Halaman : {{ $foto->currentPage() }} <br/>
Jumlah Data : {{ $foto->total() }} <br/>
Data Per Halaman : {{ $foto->perPage() }} <br/>
 
 
{{ $foto->links() }}

@endsection
</body>
</html>