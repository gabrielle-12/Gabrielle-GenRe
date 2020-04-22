@extends('template')

@section('main')
    <div id="kecamatan">
        <h2>Edit Kelas</h2>

        <form action="{{ url('kecamatan/' . $kecamatan->id. '/updatekecamatan') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field () }} 
            <div class="form-group">
                <label for="id" class="control-label">ID Kelas</label>
                <input name="id" type="text" class="form-control" value="{{ $kecamatan->id }}">
            </div>

            <div class="form-group">
                <label for="nama_kecamatan" class="control-label">Nama Kecamatan</label>
                <input name="nama_kecamatan" type="text" class="form-control" value="{{ $kecamatan->nama_kecamatan }}">
            </div>
           
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/penyuluh'">Kembali</button>
    </form>
</div>
@stop
        