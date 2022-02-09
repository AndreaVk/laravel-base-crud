@extends('layouts.base')

@section('pageContent')
    <ul>
        @foreach ($comics as $item)
            <li>{{$item["title"]}}</li>
        @endforeach
    </ul>
@endsection