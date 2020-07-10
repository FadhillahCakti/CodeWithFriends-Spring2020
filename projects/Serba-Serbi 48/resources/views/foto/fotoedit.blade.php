@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

@section ('judul_halaman', 'Foto Member 48 (Kolom Edit) | Foto Member 48 (Kolom Edit) (En) | Foto Member 48 (Kolom Edit) (Jp)')

<title>Foto 48(Edit)</title>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:#f0f8ff">
@section('konten')

<div class="card-header text-center">
<a>Tambah Foto/Add Photo/写真を追加, </a>
<a href="/id/foto/tambah" class="btn btn-link">Disini/Disini(En)/Disini(Jp)</a>
</div>
<div class="card-header text-center">
<a>Menu Admin/Admin Menu/管理メニュー, </a>
<a href="/home" class="btn btn-link">Disini/Disini(En)/Disini(Jp)</a>
</div>

</br></br>
<p>Cari Foto Member/ Search Photo / メンバーの写真を検索 :</p>
<form action="/fotoedit/cari" method="GET">
	<input type="text" name="cari" placeholder="Disini/Disini(En)/Disini(Jp)" value="{{ old('cari') }}">
	<input type="submit" value="CARI">
</form>
<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Gambar/Photo/画像</th>
                        <th scope="col">Isi/Content/コンテンツ</th>
			              		<th scope="col">Lanjutan (ID)</th>
			              		<th scope="col">Lanjutan (EN)</th>
			              		<th scope="col">Lanjutan (JP)</th>
                      </tr>
                    </thead>
					<tbody>
@foreach($foto as $fotos)
<tr>
<td>{{ $fotos->id}}</td>
<td><img src="{{ $fotos->gambar}}" style="width:75x;height:100px;"></td>
<td><strong>{{ $fotos->judul }}</strong></br>
Jenis :</br> {{ $fotos->jenis}}</br>
Member :
@foreach($fotos->member as $members)
 {{ $members->nama }},
@endforeach </br>
Grup : 
@foreach($fotos->grup as $grups)
 {{ $grups->nama }},
@endforeach</td>
<td>
<a href="/foto/edit/{{ $fotos->id }}">Edit</a>
|
<a href="/foto/hapus/{{ $fotos->id }}">Hapus</a></br>
<a href="/fotomember/tambah">Tambah Foto-Member</a></br>
<a href="/fotomemberedit">Edit&Hapus Foto-Member</a></br>
<a href="/fotogrup/tambah">Tambah Foto-Grup</a></br>
<a href="/fotogrupedit">Edit&Hapus Foto-Grup</a></br>
</td>
<td>
<a href="/foto/edit/{{ $fotos->id }}">Edit</a>
|
<a href="/foto/hapus/{{ $fotos->id }}">Delete</a></br>
<a href="/fotomember/tambah">Add Photo-Member</a></br>
<a href="/fotomemberedit">Edit&Delete Photo-Member</a></br>
<a href="/fotogrup/tambah">Add Photo-Grup</a></br>
<a href="/fotogrupedit">Edit&Delete Photo-Grup</a></br>
</td>
<td>
<a href="/foto/edit/{{ $fotos->id }}">編集する</a>
|
<a href="/foto/hapus/{{ $fotos->id }}">削除する</a></br>
<a href="/fotomember/tambah">Tambah Foto-Member</a></br>
<a href="/fotomemberedit">Edit&Hapus Foto-Member</a></br>
<a href="/fotogrup/tambah">Add Foto-Grup</a></br>
<a href="/fotogrupedit">Edit&Hapus Foto-Grup</a></br>
</td>
</tr>
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