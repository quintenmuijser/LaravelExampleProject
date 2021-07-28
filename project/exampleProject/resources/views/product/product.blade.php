@extends('templates.master')

@section('content')
    <div class="row">
        <div class='col-sm-12 col-md-12 col-lg-12'>
            <h4>{{ $product->product_name }}</h4>
        </div>
        <div class='col-sm-12 col-md-7 col-lg-7'>
            <div style="padding: 90px 0; background-color: #f8f8f9;" class="product-imitation text-center"> [ PlaceHolder ]</div>
        </div>
        <div class='col-sm-12 col-md-5 col-lg-5'>
            <form action="{{ route('shoppingCart.store') }}" method="post">
                @csrf
                <div class='col-sm-12 col-md-12 col-lg-12'>
                    <h4>$ {{ $product->price }}</h4>
                </div>
                <div class='col-sm-4 col-md-4 col-lg-4'>
                    <input name="amount" type="number" min="1" max="10" value="1" style="width: 100%;">
                </div>
                <div class='col-sm-8 col-md-8 col-lg-8'>
                    <input name ="product_id" type="number" value="{{$product->id}}" hidden>
                    <input type="submit" value="Add to Cart" style="width:100%;">
                </div>
            </form>
            
            <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 5%;">
                <p>{{ $product->product_description }}</p>
            </div>    
        </div>
    </div>


    {{-- <h4>{{ $product->product_name }}</h4>
    <p>{{ $product->product_description }}</p>

    <h3>products from the same category</h3>
    <ul>
        @for ($i = 0; $i < count($similar_products); $i++)
            <li>
                <a href="/product/{{$similar_products[$i]->id}}">
                    {{$similar_products[$i]->product_name}}
                </a>
            </li>
        @endfor
    </ul> --}}
@endsection