@extends('layout')
@section('judul')
DATA SISWA
@endsection

@section('konten')
		<a href="{{ url('siswa/create') }}">Tambah Siswa</a>
	<table border="1">
		<thead>
			<th>NO.</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Tools</th>
		</thead>
		<tbody>
			@foreach($tampil as $tmp)
			<tr>
				<td></td>
				<td>{{$tmp->NIS}}</td>
				<td>{{$tmp->NAMA}}</td>
				<td>{{$tmp->Alamat}}</td>
				<td>
					<a href="{{url('siswa/'.$tmp->NIS.'/edit')}}">Edit</a>
					<form action="{{url('siswa/'.$tmp->NIS)}}" method="POST">
						{{csrf_field()}}
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit">Hapus</button>
					</form>

				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
@endsection