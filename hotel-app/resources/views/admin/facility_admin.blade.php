@extends('layouts.main_admin')
@section('facility_admin')
<div>
    <form method="GET">
        <div class="mb-3">
            <label for="cari" class="form-label text-brown">Cari</label>
            <div class="d-flex flex-row">
                <div class="d-flex flex-row">
                    <input type="text" class="form-control rounded-10 form-brown me-1" id="cari"
                        aria-describedby="button-addon2">
                    <button class="btn btn-1 me-1" type="button" id="button-addon2">Cari</button>
                </div>
                <button class="btn btn-1" type="button" id="button-addon2">+ Tambah Data</button>
            </div>
        </div>
    </form>
    <div class="card bg-cream rounded-20 mt-4">
        <div class="card-body">
            <table class="table table-hover table-responsive form-brown text-form-brown">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Fasilitas</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="align-middle" scope="row">1</th>
                        <td class="align-middle">Kolam Lele</td>
                        <td class="align-middle">Menampilkan kolam berisi lele dengan kualitas internasional. </td>
                        <td class="align-middle">
                            <img src="images/deluxeraw.jpg" class="img-fluid" style="max-width: 150px" alt="">
                        </td>
                        <td class="align-middle">
                            <a href="" class="btn btn-1 text-white rounded-10">Edit</a>
                            <a href="" class="btn btn-2 text-brown rounded-10">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection