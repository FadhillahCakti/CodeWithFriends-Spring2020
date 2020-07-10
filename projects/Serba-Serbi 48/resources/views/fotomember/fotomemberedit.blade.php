@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')

<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Daftar foto-member</h3>
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Id foto Kesehatan</th>
                        <th scope="col">Id member</th>
                        <th scope="col">Lanjutan</th>
                      </tr>
                    </thead>
                    <tbody> 
                    @foreach ($fotomember as $it) 
                      <tr>
                        <td>{{ $it->id}}</td>
                        <td>{{ $it->foto_id}}</td>
                        <td>{{ $it->member_id}}</td>
                        <td>
						<a href="/fotomember/edit/{{ $it->id }}">Edit</a>
						|
						<a href="/fotomember/hapus/{{ $it->id }}">Hapus</a>
						</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
    </div>
</div>
</div>
</div>
Halaman : {{ $fotomember->currentPage() }} <br/>
Jumlah Data : {{ $fotomember->total() }} <br/>
Data Per Halaman : {{ $fotomember->perPage() }} <br/>
 
 
{{ $fotomember->links() }}

@endsection 
</body>
</html>