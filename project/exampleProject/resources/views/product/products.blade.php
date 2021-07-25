@extends('templates.master')

@section('content')

    @foreach($categories as $category)
    <h4>{{ $category->category_name }}</h4>
    <div class="row">
        @foreach($category->products as $product)

        <div class="col-lg-3 col-sm-6 text-center" style="padding: 15px;">
            <div style="border: 1px solid; padding: 2%;">
                <h4><a href="{{$product->id}}">{{ $product->product_name }}</a></h4>
                <div style="padding: 90px 0; background-color: #f8f8f9;" class="product-imitation"> [ PlaceHolder ]</div>
                <p>{{ $product->product_description }}</p>
                <div class="row">
                    <form>
                        <div class='col-sm-12 col-md-12 col-lg-12'>
                            <h4>$ {{ $product->price }}</h4>
                        </div>
                        <div class='col-sm-4 col-md-4 col-lg-4'>
                            <input type="number" min="1" max="10" value="1" style="width: 100%;">
                        </div>
                        <div class='col-sm-8 col-md-8 col-lg-8'>
                            <input type="submit" value="Add to Cart" style="width:100%;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
@endsection