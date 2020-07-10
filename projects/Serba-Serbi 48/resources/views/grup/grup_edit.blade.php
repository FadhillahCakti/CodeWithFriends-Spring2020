@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>Grup (Edit)</h3>
<a href="/grupedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/grup/update/{{ $grup ->id }}">
{{ csrf_field() }}
{{ method_field('PUT') }}

							<div class="form-group">
                            <label>Nama Grup</label>
                            <textarea name="Grup" class="form-control" placeholder="Grup">{{$grup->nama}}</textarea>

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
