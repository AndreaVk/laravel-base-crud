@extends('layouts.base')

@section('pageContent')
<h1>Lista Comics</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($comics as $item)
        <tr>
            <td>{{$item["id"]}}</td>
            <td>{{$item["title"]}}</td>
            <td>{{$item["description"]}}</td>
            <td>{{$item["price"]}}</td>
            <td>{{$item["series"]}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection