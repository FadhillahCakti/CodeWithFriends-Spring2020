@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3 class="text-center" style="color:blue">Foto (Kolom Tambah) | Photo(Add Column) | 写真（列追加）</h3>
<div class="text-right">
<h5>Pilih Bahasa/Choose Language/言語を選択 : </h5>
<a href="/id/foto/tambah">ID</a>
<a href="/en/foto/tambah">EN</a>
<a href="/jp/foto/tambah">JP</a>
</div>
<a href="/fotoedit"> @lang('foto_tambah.kembali')</a>
<br/>
<br/>
<form method="post" action="/foto/store">
{{ csrf_field() }}
						<div class="form-group">
                            <label>@lang('foto_tambah.gambar.1')</label>
                            <input type="text" name="gambar" class="form-control" placeholder="@lang('foto_tambah.gambar.2')">

                            @if($errors->has('gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>@lang('foto_tambah.judul.1')</label>
                            <input type="text" name="judul" class="form-control" placeholder="@lang('foto_tambah.judul.2')">

                             @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>@lang('foto_tambah.jenis.1')</label>
                            <input type="text" name="jenis" class="form-control" placeholder="@lang('foto_tambah.jenis.2')">

                            @if($errors->has('jenis'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>@lang('foto_tambah.selengkapnya.1')</label>
                            <input type="text" name="selengkapnya" class="form-control" placeholder="@lang('foto_tambah.selengkapnya.2')">

                            @if($errors->has('selengkapnya'))
                                <div class="text-danger">
                                    {{ $errors->first('selengkapnya')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="@lang('foto_tambah.simpan')">
                        </div>

                    </form>

 @endsection 
</body>
</html>
