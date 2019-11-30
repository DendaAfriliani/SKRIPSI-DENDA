@extends('layout')

@section('judul')
TAMBAH DATA SISWA
@endsection

@section('konten')
	<form method="POST" action="{{ url('siswa')}}">
		{{ csrf_field() }}
		<label>NIS :</label>
		<input type="number" name="NIS"> <br>
		<label>NAMA :</label>
		<input type="text" name="NAMA"> <br>
		<label>Alamat :</label>
		<textarea name="Alamat"></textarea>
		<button type="submit">Tambah Data</button>
	</form>
@endsection()