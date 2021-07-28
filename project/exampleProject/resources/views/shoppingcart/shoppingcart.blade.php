@extends('templates.master')

@section('content')

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4" style="border: black solid 1px;">
            <h4>product name</h4>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2" style="border: black solid 1px;">
            <h4>Price</h4>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4" style="border: black solid 1px;">
            <h4>Amount</h4>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2" style="border: black solid 1px;">
            <h4>total price</h4>
        </div>
    </div>

    @foreach ($items as $item)
    <div class="row" style="margin-top: 10px; margin-bottom: 10px;">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <h5>{{$item->name}}</h5>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
            <h5>$ {{$item->price}}</h5>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
            <form action="{{ route('shoppingCart.update', ['shoppingCart'=>$item->product_id]) }}" method="post">
                @csrf
                @method("PUT")

                <input name="product_id" type="number" value="{{$item->product_id}}" hidden>
                <input name="amount" type="number" value="{{$item->amount}}" min="1" max="100">
                <input type="submit" value="Update Cart">
            </form>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
            <form action="{{ route('shoppingCart.destroy', ['shoppingCart'=>$item->product_id]) }}" method="post">
                @csrf
                @method("DELETE")
                <input type="number" value="1" hidden>
                <input type="submit" value="Remove From Cart">
            </form>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
            <h5>$ {{$item->price * $item->amount}}</h5>
        </div>
    </div>
    @endforeach
@endsection