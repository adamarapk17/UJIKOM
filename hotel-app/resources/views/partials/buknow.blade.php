@extends('layouts.main')
@section('buknow')
<div class="row">
<div class="col">
    <div class="card card-form shadow container float-start"  style="margin-top: 100px; width: 500px; margin-left: 50px; margin-bottom:100px" > 
        <h2 class="text-center mt-4 mb-4" >Book Now</h2>
        <form>
            <div class="row g-3 align-items-center">
                <div class="col mb-3 ">
                    <label for="tglcin" class="form-label text-brown text-center">Check In</label>
                    <input type="date" class="form-control rounded-10 form-brown text-form-brown" id="tglcin">
            </div>
                <div class="col mb-3">
                    <label for="tglcout" class="form-label text-brown">Check Out</label>
                    <input type="date" class="form-control rounded-10 form-brown text-form-brown center"
                  id="tglcout">
                </div>

                <div class="col mb-3">
                    <label for="jmlkamar" class="form-label text-brown">Total Rooms</label>
                    <input type="number" class="form-control rounded-10 form-brown text-form-brown" id="jmlkamar">
                </div>

                <div class="row g-3 align-items-center">
                    <div class="mb-3">
                        <label for="nama_pemesan" class="form-label text-brown">Customer Name</label>
                        <input type="text" class="form-control rounded-10 form-brown" id="nama_pemesan">
                    </div>
    
                    <div class="mb-3">
                        <label for="no_telp" class="form-label text-brown">Phone Number</label>
                        <input type="number" class="form-control rounded-10 form-brown" id="no_telp">
                    </div>
                </div>    

                <div class="mb-3">
                    <label for="tipe_kamar" class="form-label text-brown">Rooms</label>
                    <select class="form-select rounded-10 form-brown text-form-brown"
                        aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Economy</option>
                        <option value="2">Superior</option>
                        <option value="3">Suite</option>
                    </select>
                </div>
        </form>

        <a href="/order" style="border-radius: 5px;" type="button" class="btn btn-primary float-end mt-4 mb-3 p5">Book Now</a>
    </div>
</div>
<div class="card col card-rooms container shadow float-end" style="margin-top: 100px; width:650px; margin-right: 70px; margin-bottom:100px">
    <div class="card-body">
        <h2 class="text-center mt-3 mb-5 text-white">Rooms</h2>
    

        <div class="card card-image mb-3" >
            <div class="row g-0">
              <div class="col-5">
                <img class='gambar-rooms' src="{{asset('image/economy.jpg')}}" alt="eror mas">
              </div>
              <div class="col-7">
                <div class="card-body">
                  <h5 class="card-title text-center">Economy</h5>
                  <p class="card-text">Wifi: No</p>
                  <p>Breakfast: No</p>
                  <p>Avaible: 10</p>
                  <h3 class="text-end"> RP 100.000,00</h3>
                </div>
              </div>
            </div>
          </div>

          <div class="card card-image mb-3" >
            <div class="row g-0">
              <div class="col-5">
                <img class='gambar-rooms' src="{{asset('image/superior.jpg')}}" alt="eror mas">
              </div>
              <div class="col-7">
                <div class="card-body">
                  <h5 class="card-title text-center">Superior</h5>
                  <p class="card-text">Wifi: Yes</p>
                  <p>Breakfast: No</p>
                  <p>Avaible: 20</p>
                  <h3 class="text-end"> RP 200.000,00</h3>
                </div>
              </div>
            </div>
          </div>

          <div class="card card-image mb-3" >
            <div class="row g-0">
              <div class="col-5">
                <img class='gambar-rooms' src="{{asset('image/suite.jpg')}}" alt="eror mas">
              </div>
              <div class="col-7">
                <div class="card-body">
                  <h5 class="card-title text-center">Suite</h5>
                  <p class="card-text">Wifi: Yes</p>
                  <p>Breakfast: Yes</p>
                  <p>Avaible: 30</p>
                  <h3 class="text-end"> RP 500.000,00</h3>
                </div>
              </div>
            </div>
          </div>
    

    </div>

</div>
</div>

@endsection