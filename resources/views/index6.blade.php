@extends('template')
@section('content')

	<h3>Data karyawan</h3>

	<p>Cari Data karyawan :</p>
	<form class="form-inline" action="/mykaryawan/cari" method="GET">
    <input type="text" class="form-control mr-2 mb-2" name="cari" placeholder="Cari Karyawan ...">
    <button type="submit" class="btn btn-info mb-2">CARI</button>
    </form>
	<br/>

	<table class="table table-stripped">
		<tr>
            <th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Action</th>
		</tr>
		@foreach($mykaryawan as $p)
		<tr>
            <td>{{ $p->kodepegawai }}</td>
			<td>{{ ucwords(strtolower($p->namalengkap)) }}</td>
			<td>{{ $p->divisi }}</td>
			<td>{{ $p->departemen }}</td>
			<td>
				<a href="/mykaryawan/edit/{{ $p->kodepegawai }}" class="btn btn-success">Edit</a>
				|
				<a href="/mykaryawan/view/{{ $p->kodepegawai }}" class="btn btn-danger">View</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br/>

@endsection
