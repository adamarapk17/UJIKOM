@extends('layouts.main_admin')
@section('facilities_admin')
<div class="card container card-judul" >
    <div>
        <h1 class="text-white text-1 mb-4">Facilities</h1>
    </div>
</div>    
<div>
    <form method="GET">
        <div class="container" style="margin-top: 50px">
            <label for="cari" class="form-label text-white">Search</label>
            <div class="d-flex flex-row">
                <div class="d-flex flex-row">
                    <input type="text" class="form-control rounded-10 form-brown btn-putih me-1" id="cari"
                        aria-describedby="button-addon2">
                    <button class="btn btn-putih me-1" type="button" id="button-addon2">Search</button>
                </div>
                <a  href="/addfacilities" class="btn btn-putih" id="button-addon2">+ add data</a>
            </div>
        </div>
    </form>
    <div class="card container card-1 rounded-20 mt-4">
        <div class="card-body">
            <table class="table table-hover table-responsive form-brown text-white">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Facilities Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="align-middle" scope="row">1</th>
                        <td class="align-middle">Swimming Pool</td>
                        <td class="align-middle">Luxury Swimming Pool</td>
                        <td class="align-middle">
                            <img src="image/kolamrenang.jpg" class="img-fluid" style="max-width: 150px" alt="">
                        </td>
                        <td class="align-middle">
                            <a href="" class="btn btn-putih rounded-10">Edit</a>
                            <a href="" class="btn btn-putih rounded-10">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection