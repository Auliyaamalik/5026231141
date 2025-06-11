@extends('template')
@section('content')

	<h3>Data Karyawan</h3>

	<p>Cari Data Karyawan :</p>
	<form class="form-inline" action="/karyawan/cari" method="GET">
    <input type="text" class="form-control mr-2 mb-2" name="cari" placeholder="Cari Pegawai ..">
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
		@foreach($karyawan as $p)
		<tr>
            <td>{{ $p->kodepegawai }}</td>
			<td>{{ strtoupper($p->namalengkap) }}</td>
			<td>{{ $p->divisi }}</td>
			<td>{{ strtolower($p->departemen) }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $p->kodepegawai}}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br/>
    <div class="d-flex justify-content-center">
        <a href="/karyawan/tambah" class="btn" style="background-color: #FFB6C1; color:white"> + Tambah Karyawan Baru</a>
    </div>
    {{ $karyawan->links()}}

@endsection
