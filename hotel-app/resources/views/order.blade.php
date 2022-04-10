@extends('layouts.main')
@section('order')
    

<div class="card container" style="margin-top: 130px; margin-bottom: 130px;">
        <div class="card" style="margin-top:50px">  
            <div class="container bg-dark text-white">
                <h2 class="">Receipt Order</h2>
                <h5 class=""> No. 1 </h5>
            </div> 
        </div>  

    <div class="card container " style="border-color: black; "> 
        <table class="table table-hover table-responsive form-brown text-dark">
        <thead>
            <tr>
                <th scope="col">Customer Name</th>
                <th scope="col">Number Phone</th>
                <th scope="col">Check-In Date</th>
                <th scope="col">Check-Out date</th>
                <th scope="col">Total Rooms</th>
                <th scope="col">Type Rooms</th>
                <th scope="col">Total Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="align-middle" scope="row">Apa Gurilem</th>
                <td class="align-middle">085862495361</td>
                <td class="align-middle">22/2/2022</td>
                <td class="align-middle">23/3/3033</td>
                <td class="align-middle">1</td>
                <td class="align-middle">Economy</td>
                <td class="align-middle">RP 100.000,00</td>
            </tr>
        </tbody>
    </table>
    </div>

    <div class="mt-5">
        <a href="" class="btn btn-primary rounded-10">Confirmation</a>
        <a href="" class="btn btn-secondary rounded-20">Cancel</a>
    </div>    
</div>    
@endsection