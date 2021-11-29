@extends('master')
@section("content")
<div class="container">
    <div class="row">
    <div class="trending-wrapper">
     <h4>Result for Products</h4>
     <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
     @foreach($products as $item)
     <div class=" row searched-item">
        <div class="col-sm-4">
            <a href="detail/{{$item->id}}">
            <img class="trending-img" src="{{$item->gallery}}">
            </a>
        </div>
        <div class="col-sm-4">
            <h2>{{$item->name}}</h2>
            <h5>{{$item->description}}</h5> 
        </div>
        <div class="col-sm-4">
        <br><br>  
        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove to Cart</a>
        </div>
     </div>
     <br><hr><br><br>
     @endforeach
     <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
    </div>
    </div>

</div>
@endsection