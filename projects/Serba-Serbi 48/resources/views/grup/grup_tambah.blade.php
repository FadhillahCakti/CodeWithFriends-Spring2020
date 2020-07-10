@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>Grup (Tambah)</h3>
<a href="/grupedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/grup/store">
{{ csrf_field() }}
						<div class="form-group">
                            <label>Nama Grup</label>
                            <input type="text" name="nama grup" class="form-control" placeholder="nama grup">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

 @endsection 
</body>
</html>
