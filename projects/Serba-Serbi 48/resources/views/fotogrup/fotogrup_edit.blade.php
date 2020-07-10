@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>foto-grup (Edit)</h3>
<a href="/fotoedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/fotogrup/update/{{ $fotogrup ->id }}">
{{ csrf_field() }}
{{ method_field('PUT') }}

							<div class="form-group">
                            <label>Id foto Kesehatan</label>
                            <textarea name="foto_id" class="form-control" placeholder="foto_id">{{$fotogrup->foto_id}}</textarea>

                            @if($errors->has('foto_id'))
                                <div class="text-danger">
                                    {{ $errors->first('foto_id')}}
                                </div>
                            @endif

                        </div>

                        <b>Untuk Isi Id foto Kesehatan, <a href="/fotoedit"> Klik Disini</a></b>
 
                        <div class="form-group">
                            <label>Id grup</label>
                            <textarea name="grup_id" class="form-control" placeholder="grup_id">{{$fotogrup->grup_id}}</textarea>

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
