@extends('template')

@section('main')
<div id="guru">
<h2 align="center">Kecamatan</h2>
    @if (!empty($kecamatan_list))
    <a href="{{ url('tambahkec') }}" class="btn btn-primary" style="padding='40px';">Tambah Kecamatan</a>
        <table class="table">
        <thead>
            <tr>
                <th>ID Kecamatan</th>
                <th>Nama Kecamatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $k=0;?>
        @foreach ($kecamatan_list as $kecamatan)
            <tr>
                <td> {{ $kecamatan->id }}</td>
                <td> {{ $kecamatan->nama_kecamatan }}</td>
                <td><a class="btn btn-success btn-sm" href="{{ url('kecamatan/' . $kecamatan->id) }}">Detail</a>
                <a class="btn btn-warning btn-sm" href="{{ url('kecamatan/' . $kecamatan->id . '/editkls') }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="{{ url('kecamatan/' . $kecamatan->id . '/deletekls') }}" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</a></td>
                <?php $k++;?>
            </tr>
        @endforeach
        </tbody>
        </table>
        <center><h5>Jumlah Kecamatan : {{$k}} </h5></center>
    @else
        <p>Tidak Ada Data kecamatan.</p>
    @endif
</div>
@stop
