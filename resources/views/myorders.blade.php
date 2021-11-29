@extends('master')
@section("content")
<div class="container">
    <div class="row">
    <div class="trending-wrapper">
     <h4>My Orders</h4>
     @foreach($orders as $item)
     <div class=" row searched-item">
        <div class="col-sm-4">
            <a href="detail/{{$item->id}}">
            <img class="trending-img" src="{{$item->gallery}}">
            </a>
        </div>
        <div class="col-sm-4">
                <h2>Name : {{$item->name}}</h2>
                <h5>Delivery Status : {{$item->status}}</h5>
                <h5>Address : {{$item->address}}</h5>
                <h5>Payment Status : {{$item->payment_status}}</h5>
                <h5>Payment Method : {{$item->payment_method}}</h5>
        </div>
     </div>
     <br><hr><br><br>
     @endforeach
    </div>
    </div>

</div>
@endsection