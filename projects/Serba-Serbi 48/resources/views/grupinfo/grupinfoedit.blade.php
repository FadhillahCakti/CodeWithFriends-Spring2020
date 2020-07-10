@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')

<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Daftar grup-info</h3>
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Id grup Kesehatan</th>
                        <th scope="col">Id info</th>
                        <th scope="col">Lanjutan</th>
                      </tr>
                    </thead>
                    <tbody> 
                    @foreach ($grupinfo as $it) 
                      <tr>
                        <td>{{ $it->id}}</td>
                        <td>{{ $it->grup_id}}</td>
                        <td>{{ $it->info_id}}</td>
                        <td>
						<a href="/grupinfo/edit/{{ $it->id }}">Edit</a>
						|
						<a href="/grupinfo/hapus/{{ $it->id }}">Hapus</a>
						</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
    </div>
</div>
</div>
</div>
Halaman : {{ $grupinfo->currentPage() }} <br/>
Jumlah Data : {{ $grupinfo->total() }} <br/>
Data Per Halaman : {{ $grupinfo->perPage() }} <br/>
 
 
{{ $grupinfo->links() }}

@endsection 
</body>
</html>