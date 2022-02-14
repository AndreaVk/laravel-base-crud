@extends('layouts.base')

@section('pageContent')
    
    <div class="container">
    <h1 class="text-center my-2">Edit Comic: {{$comic->title}}</h1>
    <div class="mb-2">
    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">Ritorna alla Lista</button></a>  
    </div>
    <form action="{{route("comics.update", $comic->id)}}" method="POST">
        @csrf
        @method("PUT")
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" @error('title') is-invalid @enderror id="title" placeholder="Title" name="title" value="{{old("title") ? old("title") : $comic->title}}">
    @error ('title')
      <div class="alert alert-danger mt-2">{{$message}}</div>
    @enderror
  </div>
    <div class="form-group">
    <label for="sale_date">Sale date</label>
    <input type="text" class="form-control" @error('sale_date') is-invalid @enderror id="sale_date" id="sale_date" placeholder="Sale date" name="sale_date" value="{{old("sale_date") ? old("sale_date") : $comic->sale_date}}">
    @error ('sale_date')
      <div class="alert alert-danger mt-2">{{$message}}</div>
    @enderror
  </div>
    <div class="form-group">
    <label for="thumb">Thumb</label>
    <input type="text" class="form-control" @error('thumb') is-invalid @enderror id="thumb" placeholder="Inserisci l'immagine" name="thumb" value="{{old("thumb") ? old("thumb") : $comic->thumb}}">
    @error ('thumb')
      <div class="alert alert-danger mt-2">{{$message}}</div>
    @enderror
  </div>
      <div class="form-group">
    <label for="description">description</label>
    <input type="text" class="form-control" @error('description') is-invalid @enderror id="description" placeholder="Inserisci la descrizione" name="description" value="{{old("description") ? old("description") : $comic->description}}">
    @error ('description')
      <div class="alert alert-danger mt-2">{{$message}}</div>
    @enderror
  </div>
      <div class="form-group">
    <label for="series">series</label>
    <input type="text" class="form-control" id="series" @error('series') is-invalid @enderror placeholder="Inserisci la serie" name="series" value="{{old("series") ? old("series") : $comic->series}}">
    @error ('series')
      <div class="alert alert-danger mt-2">{{$message}}</div>
    @enderror
  </div>
      <div class="form-group">
    <label for="type">type</label>
    <input type="text" class="form-control" @error('type') is-invalid @enderror id="type"  placeholder="Inserisci il tipo" name="type" value="{{old("type") ? old("type") : $comic->type}}">
    @error ('type')
      <div class="alert alert-danger mt-2">{{$message}}</div>
    @enderror
  </div>
      <label for="price">price</label>
    <input type="number" class="form-control" @error('price') is-invalid @enderror id="price" placeholder="Inserisci il prezzo" name="price" value="{{old("price") ? old("price") : $comic->price}}">
    @error ('price')
      <div class="alert alert-danger mt-2">{{$message}}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-danger mx-2 mt-5">Edit</button>
</form>
</div>
@endsection