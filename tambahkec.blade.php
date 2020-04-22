@extends('template')

@section('main')
    <div id="kecamatan">
        <h2 align="center">Tambah Kecamatan</h2>

        <form action="{{ url('simpankls') }}" method="post">
        {{ csrf_field () }}
        <div class="form-group"> 
 <label for="id" class="control-label">ID Kecamatan</label>
            <input name="id" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama_kecamatan" class="control-label">Nama Kecamatan</label>
            <input name="nama_kecamatan" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="jml_penyuluh" class="control-label">Jumlah Penyuluh</label>
            <input name="jml_penyuluh" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/kecamatan'">Kembali</button>
        </form>
        </div>
    @stop