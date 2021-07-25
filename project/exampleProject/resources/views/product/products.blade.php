@extends('templates.master')

@section('content') 
    @foreach($categories as $category)
        <a href="/category/{{$category->id}}">{{ $category->category_name }}</a>
        <ul>
            @foreach($category->products as $product)
            <li>
                <a href="/product/{{$product->id}}">{{ $product->product_name }}</a>
            </li>
            @endforeach
        </ul>
        <br>
    @endforeach
@endsection