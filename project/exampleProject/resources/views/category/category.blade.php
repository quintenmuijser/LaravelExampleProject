@extends('templates.master')

@section('content')
    <h4>{{ $category->category_name }}</h4>
    <p>{{ $category->category_description }}</p>

    <h3>Products in this category</h3>

    <ul>
        @for ($i = 0; $i < count($products); $i++)
            <li>
                <a href="/product/{{$products[$i]->id}}">
                        {{$products[$i]->product_name}}
                </a>
            </li>
        @endfor
    </ul>
@endsection

