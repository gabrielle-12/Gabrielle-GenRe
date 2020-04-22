@extends('template')

@section('main')
<div id="kecamatan">
    <h2 align="center">Detail Kecamatan</h2>
<table class="table table-striped">
<tr>
      <th>ID Kecamatan</th>
      <td>{{ $kecamatan->id }}</td>
    </tr>
  <tr>
      <th>Nama Kecamatan</th>
      <td>{{ $kecamatan->nama_kecamatan }}</td>
    </tr>
    <tr>
      <th>Jumlah Penyuluh</th>
      <td>{{ $kecamatan->jml_penyuluh }}</td>
    </tr>
</table>
<button type="button" class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/kecamatan'">Kembali</button>
</div>
@stop