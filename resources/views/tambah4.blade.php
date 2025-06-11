@extends('template')
@section('content')
    <h3>Data Karyawan</h3>

    <a href="/karyawan" class="btn" style="background-color: #efb7c0; color:white; border-radius: 10px"> Kembali</a>

    <br />
    <br />

    <form action="/karyawan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="kode">
                Kode Pegawai
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="kode" placeholder="Masukkan Kode Pegawai" name="kode"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="nama">
                Nama Lengkap
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="nama" placeholder="Masukkan Nama Lengkap" name="nama"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="divisi">
                Divisi
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="divisi" placeholder="Masukkan Divisi Anda" name="divisi"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="departemen">
                Departemen
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="departemen" placeholder="Masukkan Departemen Anda" name="departemen"
                    required="required">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn" style="background-color: #fffde6; color: #ff96a6; border-color: #ff96a6; border-radius: 10px">
    </form>
@endsection
