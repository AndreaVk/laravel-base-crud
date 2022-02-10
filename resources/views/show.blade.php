@extends('layouts.base')

@section('pageContent')
<h1>{{$item["title"]}}</h1>
<img src="{{$item['thumb']}}" alt="">
<p>{{$item["description"]}}</p>
<h4>{{$item["series"]}}</h4>
<div>
    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">Ritorna alla Lista</button></a>  
</div>
@endsection