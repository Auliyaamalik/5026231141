@extends('template')
@section('content')

	<h3>Data karyawan</h3>

	<br/>
        @if ($mykaryawan)
            <table class="table table-stripped">
                <tr>
                    <th>Kode Pegawai</th>
                    <td>{{ $mykaryawan->kodepegawai }}</td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ ucwords(strtolower($mykaryawan->namalengkap)) }}</td>
                </tr>
                <tr>
                    <th>Divisi</th>
                    <td>{{ $mykaryawan->divisi }}</td>
                </tr>
                <tr>
                    <th>Departemen</th>
                    <td>{{ $mykaryawan->departemen }}</td>
                </tr>
            </table>
        @else
            <div class="alert alert-warning" role="alert">
                Data karyawan tidak ditemukan.
            </div>
        @endif

        <br>
        <a href="/mykaryawan" class="btn" style="background-color: #fffde6; color: #ff96a6; border-color: #ff96a6; border-radius: 10px">Kembali ke Data Karyawan</a>

@endsection
