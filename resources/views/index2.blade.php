@extends('template')
@section('content')

	<h3>Data Processor</h3>

	<a href="/processor/tambah" class="btn" style="background-color: #FFB6C1; color:white"> + Tambah Processor Baru</a>
    <br/><br/>

	<p>Cari Data Processor :</p>
	<form class="form-inline" action="/processor/cari" method="GET">
    <input type="text" class="form-control mr-2 mb-2" name="cari" placeholder="Cari Processor ..">
    <button type="submit" class="btn btn-info mb-2">CARI</button>
    </form>
	<br/>

	<table class="table table-stripped">
		<tr>
			<th>Merk</th>
			<th>Harga</th>
			<th>Tersedia</th>
			<th>Berat</th>
            <th>Opsi</th>
		</tr>
		@foreach($processor as $p)
		<tr>
			<td>{{ $p->merk_processor }}</td>
			<td>Rp {{ number_format($p->harga_processor, 0, ',', '.') }}</td>
			<td>{{ $p->tersedia ? 'Tersedia' : 'Tidak Tersedia' }}</td>
			<td>{{ $p->berat }}</td>
			<td>
				<a href="/processor/edit/{{ $p->processor_ID }}" class="btn btn-success">Edit</a>
				|
				<a href="/processor/hapus/{{ $p->processor_ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $processor->links()}}

@endsection
