@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>grup-info (Edit)</h3>
<a href="/grupedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/grupinfo/update/{{ $grupinfo ->id }}">
{{ csrf_field() }}
{{ method_field('PUT') }}

							<div class="form-group">
                            <label>Id grup Kesehatan</label>
                            <textarea name="grup_id" class="form-control" placeholder="grup_id">{{$grupinfo->grup_id}}</textarea>

                            @if($errors->has('grup_id'))
                                <div class="text-danger">
                                    {{ $errors->first('grup_id')}}
                                </div>
                            @endif

                        </div>

                        <b>Untuk Isi Id grup Kesehatan, <a href="/grupedit"> Klik Disini</a></b>
 
                        <div class="form-group">
                            <label>Id info</label>
                            <textarea name="info_id" class="form-control" placeholder="info_id">{{$grupinfo->info_id}}</textarea>

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
