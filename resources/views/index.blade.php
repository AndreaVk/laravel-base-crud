@extends('layouts.base')

@section('pageContent')
<h1>Lista Comics</h1>
<a href="{{route("comics.create")}}"><button type="submit" class="btn btn-primary">Create New Comic</button></a>
<table class="table mt-5">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
            <th scope="col">Click</th>
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
            <td>
                <a href="{{route("comics.show", $item["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection