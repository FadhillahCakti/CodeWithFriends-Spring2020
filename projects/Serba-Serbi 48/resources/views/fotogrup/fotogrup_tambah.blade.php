@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')


<h2 class="jumbotron-heading text-center">Tambah foto-grup</h2>
<form method="post" action="/fotogrup/store">
{{ csrf_field() }}
						<div class="form-group">
                            <label>Id foto Kesehatan</label>
                            <input type="text" name="foto_id" class="form-control" placeholder="foto_id">

                            @if($errors->has('foto_id'))
                                <div class="text-danger">
                                    {{ $errors->first('foto_id')}}
                                </div>
                            @endif

                        </div>

                        <b>Untuk Isi Id foto Kesehatan, <a href="/fotoedit"> Klik Disini</a></b>

                        <div class="form-group">
                            <label>Id grup</label>
                            <input type="text" name="grup_id" class="form-control" placeholder="grup_id">

                             @if($errors->has('grup_id'))
                                <div class="text-danger">
                                    {{ $errors->first('grup_id')}}
                                </div>
                            @endif

                        </div>

                        <b>Untuk Isi Id grup, <a href="/grupedit"> Klik Disini</a></b>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

</form>

@endsection 
</body>
</html>
