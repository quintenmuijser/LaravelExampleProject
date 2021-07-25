@extends('templates.master')

@section('content')
    <h4>{{ $product->product_name }}</h4>
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
    </ul>
@endsection