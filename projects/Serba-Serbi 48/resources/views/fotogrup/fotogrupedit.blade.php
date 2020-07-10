@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')

<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Daftar foto-grup</h3>
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Id foto Kesehatan</th>
                        <th scope="col">Id grup</th>
                        <th scope="col">Lanjutan</th>
                      </tr>
                    </thead>
                    <tbody> 
                    @foreach ($fotogrup as $it) 
                      <tr>
                        <td>{{ $it->id}}</td>
                        <td>{{ $it->foto_id}}</td>
                        <td>{{ $it->grup_id}}</td>
                        <td>
						<a href="/fotogrup/edit/{{ $it->id }}">Edit</a>
						|
						<a href="/fotogrup/hapus/{{ $it->id }}">Hapus</a>
						</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
    </div>
</div>
</div>
</div>
Halaman : {{ $fotogrup->currentPage() }} <br/>
Jumlah Data : {{ $fotogrup->total() }} <br/>
Data Per Halaman : {{ $fotogrup->perPage() }} <br/>
 
 
{{ $fotogrup->links() }}

@endsection 
</body>
</html>