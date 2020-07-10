@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3 class="text-center" style="color:green">Foto (Kolom Edit) | Photo(Edit Column) | 写真 (列編集)</h3>
<a href="/fotoedit"> Kembali/Back/バック</a>
<br/>
<br/>
<form method="post" action="/foto/update/{{ $foto ->id }}">
{{ csrf_field() }}
{{ method_field('PUT') }}

							<div class="form-group">
                            <label>Gambar/Photo/画像</label>
                            <textarea name="gambar" class="form-control" placeholder="Gambar">{{$foto->gambar}}</textarea>

                            @if($errors->has('gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Judul/Title/題名</label>
                            <textarea name="judul" class="form-control" placeholder="Judul">{{$foto->judul}}</textarea>

                             @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jenis Foto/Information/情報</label>
                            <textarea name="jenis" class="form-control" placeholder="jenis">{{$foto->jenis}}</textarea>

                            @if($errors->has('jenis'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Selengkapnya/Link Read More/続きを読む</label>
                            <textarea name="selengkapnya" class="form-control" placeholder="Selengkapnya">{{$foto->selengkapnya}}</textarea>

                             @if($errors->has('selengkapnya'))
                                <div class="text-danger">
                                    {{ $errors->first('selengkapnya')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan/Save/保存する">
                        </div>
 
                    </form>

 @endsection 
</body>
</html>
