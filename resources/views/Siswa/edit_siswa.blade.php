@extends('layout')
@section('judul')
EDIT DATA SISWA
@endsection

@section('konten')
	<form method="POST" action="{{ url('siswa/'.$tampil->NIS)}}">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
		<label>NIS :</label>
		<input type="number" name="NIS" value="{{$tampil->NIS}}"> <br>
		<label>NAMA :</label>
		<input type="text" name="NAMA" value="{{$tampil->NAMA}}"> <br>
		<label>Alamat :</label>
		<textarea name="Alamat">{{$tampil->Alamat}}</textarea>
		<button type="submit">Ubah Data</button>
	</form>
@endsection