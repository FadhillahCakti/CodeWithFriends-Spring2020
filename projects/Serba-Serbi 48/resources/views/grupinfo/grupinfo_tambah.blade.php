@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')


<h2 class="jumbotron-heading text-center">Tambah grup-info</h2>
<form method="post" action="/grupinfo/store">
{{ csrf_field() }}
						<div class="form-group">
                            <label>Id grup Kesehatan</label>
                            <input type="text" name="grup_id" class="form-control" placeholder="grup_id">

                            @if($errors->has('grup_id'))
                                <div class="text-danger">
                                    {{ $errors->first('grup_id')}}
                                </div>
                            @endif

                        </div>

                        <b>Untuk Isi Id grup Kesehatan, <a href="/grupedit"> Klik Disini</a></b>

                        <div class="form-group">
                            <label>Id info</label>
                            <input type="text" name="info_id" class="form-control" placeholder="info_id">

                             @if($errors->has('info_id'))
                                <div class="text-danger">
                                    {{ $errors->first('info_id')}}
                                </div>
                            @endif

                        </div>

                        <b>Untuk Isi Id info, <a href="/infoedit"> Klik Disini</a></b>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

</form>

@endsection 
</body>
</html>
