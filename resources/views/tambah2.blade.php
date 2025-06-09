@extends('template')
@section('content')
    <h3>Data Processor</h3>

    <a href="/processor" class="btn" style="background-color: #efb7c0; color:white; border-radius: 10px"> Kembali</a>

    <br />
    <br />

    <form action="/processor/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="merk">
                Merk
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merk" placeholder="Masukkan Merk Processor" name="merk"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="harga">
                Harga
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="harga" placeholder="Masukkan Harga Processor" name="harga"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="tersedia">
                Tersedia
            </label>
            <div class="col-sm-6">
                <input class="form-check" type="checkbox" id="tersedia" placeholder="Apakah Processor Tersedia?" name="tersedia"
                    >
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="alamat">
                Berat
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" step="any" id="berat" placeholder="Masukkan Berat Processor" name="berat"
                    required="required"></input>
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn" style="background-color: #fffde6; color: #ff96a6; border-color: #ff96a6; border-radius: 10px">
    </form>
@endsection
