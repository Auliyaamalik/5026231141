@extends('template')
@section('content')

	<h3>Data Karyawan</h3>

	<a href="/karyawan/tambah" class="btn" style="background-color: #FFB6C1; color:white"> + Tambah Karyawan Baru</a>
    <br/><br/>

	<p>Cari Data Karyawan :</p>
	<form class="form-inline" action="/pegawai/cari" method="GET">
    <input type="text" class="form-control mr-2 mb-2" name="cari" placeholder="Cari Pegawai ..">
    <button type="submit" class="btn btn-info mb-2">CARI</button>
    </form>
	<br/>

	<table class="table table-stripped">
		<tr>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->namalengkap }}</td>
			<td>{{ $p->divisi }}</td>
			<td>{{ $p->departemen }}</td>
			<td>
				<a href="/karyawan/edit/{{ $p->kodepegawai }}" class="btn btn-success">Edit</a>
				|
				<a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $karyawan->links()}}

@endsection
