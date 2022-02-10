@extends('layouts.base')

@section('pageContent')
<h1>{{$item["title"]}}</h1>
<img src="{{$item['thumb']}}" alt="">
<p>{{$item["description"]}}</p>
@endsection