@extends('layouts.main_admin')
@section('dashboard')
    

<div style="background-color:rgba(255, 255, 255, 0.5)" class="card card-1 container ">
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <div style="background-color:rgba(255, 255, 255, 0.5)" class="card card-4 nav-item rounded-10 mt-5 me-3 mb-5" style="width: 16rem;">
            <div class="card-body text-brown">
                <h1 class="card-title">1</h1>
                <p class="card-text">Jumlah Kamar</p>
            </div>
        </div>
        <div style="background-color:rgba(255, 255, 255, 0.5)" class="card card-brown nav-item rounded-10 mt-5 me-3 mb-5" style="width: 16rem;">
            <div class="card-body text-brown">
                <h1 class="card-title">2</h1>
                <p class="card-text">Kamar Tersedia</p>
            </div>
        </div>
        <div style="background-color:rgba(255, 255, 255, 0.5)" class="card card-brown nav-item rounded-10 mt-5 me-3 mb-5" style="width: 16rem;">
            <div class="card-body text-brown">
                <h1 class="card-title">3</h1>
                <p class="card-text">Jumlah Fasilitas</p>
            </div>
        </div>
        <div style="background-color:rgba(255, 255, 255, 0.5)" class="card card-brown nav-item rounded-10 mt-5 me-3 mb-5" style="width: 16rem;">
            <div class="card-body text-brown">
                <h1 class="card-title">4</h1>
                <p class="card-text">Total Tamu yang Pernah Berkunjung</p>
            </div>
        </div>
        <div style="background-color:rgba(255, 255, 255, 0.5)" class="card card-brown nav-item rounded-10 mt-5 me-3 mb-5" style="width: 16rem;">
            <div class="card-body text-brown">
                <h1 class="card-title">5</h1>
                <p class="card-text">Jumlah Tamu yang Sedang Berkunjung</p>
            </div>
        </div>
    </ul>
</div>
@endsection