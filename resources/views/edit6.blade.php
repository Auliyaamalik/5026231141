<!DOCTYPE html>
<html>
<head>
	<title>MYKARYAWAN</title>
</head>
<body>

	<h3>Edit Karyawan</h3>

	<a href="/mykaryawan"> Kembali</a>

	<br/>
	<br/>

	@foreach($mykaryawan as $p)
	<form action="/mykaryawan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodepegawai }}"> <br/>
		Nama Lenglap <input type="text" required="required" name="nama" value="{{ $p->namalengkap }}"> <br/>
		Divisi <input type="text" required="required" name="divisi" value="{{ $p->divisi }}"> <br/>
		Departemen <input type="text" required="required" name="departemen" value="{{ $p->departemen }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
