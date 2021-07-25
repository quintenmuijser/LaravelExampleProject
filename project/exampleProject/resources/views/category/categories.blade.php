@extends('templates.master')

@section('content')
    <ul>
        @for ($i = 0; $i < count($categories); $i++)
            <li>
                <a href="/category/{{$categories[$i]->id}}">
                    {{$categories[$i]->category_name}}
                </a>
            </li>
        @endfor
    </ul>
@endsection