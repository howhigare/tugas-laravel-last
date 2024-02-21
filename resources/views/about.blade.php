@extends('layout.main')

@section('content')
<h1>Ini adalah halaman about</h1>
<p><?= $nama ?></p>
<p><?= $kelas ?></p>
<img src="{{ asset('images/foto.jpg') }}" alt="{{ $nama }}" width="100">
@endsection

