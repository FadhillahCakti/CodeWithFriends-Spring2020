@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<div class="card-header text-center">
<a>Untuk Menambah Nama Grup Untuk Label Info dan Member, </a>
<a href="/grup/tambah" class="btn btn-link">Klik Disini</a>
</div>

<div class="card-header text-center">
<a>Untuk Hal yang Akan Di Tambah/Edit Lainnya,</a>
<a href="/home" class="btn btn-link">Klik Disini</a>
</div>

<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Nama Grup Untuk Label Info Kesehatan</h3>
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Lanjutan</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($grup as $grups)  
                      <tr>
                        <td>{{ $grups->id}}</td>
                        <td>{{ $grups->nama}}</td>
                        <td>
						<a href="/grup/edit/{{ $grups->id }}">Edit</a>
						|
						<a href="/grup/hapus/{{ $grups->id }}">Hapus</a>

						</td>
                      </tr>
                    @endforeach 
                    </tbody>
                  </table>
    </div>
</div>
</div>
</div>
Halaman : {{ $grup->currentPage() }} <br/>
Jumlah Data : {{ $grup->total() }} <br/>
Data Per Halaman : {{ $grup->perPage() }} <br/>
 
 
{{ $grup->links() }}
 @endsection 
</body>
</html>
