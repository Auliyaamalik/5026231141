@extends('template')
@section('content')

	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn" style="background-color: #FFB6C1; color:white"> + Tambah Pegawai Baru</a>
    <br/><br/>

	<p>Cari Data Pegawai :</p>
	<form class="form-inline" action="/pegawai/cari" method="GET">
    <input type="text" class="form-control mr-2 mb-2" name="cari" placeholder="Cari Pegawai ..">
    <button type="submit" class="btn btn-info mb-2">CARI</button>
    </form>
	<br/>

	<table class="table table-stripped">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links()}}

@endsection
