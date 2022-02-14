@extends('layouts.base')

@section('pageContent')
    
    <div class="container">
    <h1 class="text-center my-2">Create new Comic</h1>
    <form action="{{route("comics.store")}}" method="POST">
        @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name="title">
  </div>
    <div class="form-group">
    <label for="sale_date">Sale date</label>
    <input type="text" class="form-control" id="sale_date" placeholder="Sale date" name="sale_date">
  </div>
    <div class="form-group">
    <label for="thumb">Thumb</label>
    <input type="text" class="form-control" id="thumb" placeholder="Inserisci l'immagine" name="thumb">
  </div>
      <div class="form-group">
    <label for="description">description</label>
    <input type="text" class="form-control" id="description" placeholder="Inserisci la descrizione" name="description">
  </div>
      <div class="form-group">
    <label for="series">series</label>
    <input type="text" class="form-control" id="series" placeholder="Inserisci la serie" name="series">
  </div>
      <div class="form-group">
    <label for="type">type</label>
    <input type="text" class="form-control" id="type" placeholder="Inserisci il tipo" name="type">
  </div>
      <label for="price">price</label>
    <input type="number" class="form-control" id="price" placeholder="Inserisci il prezzo" name="price">
  </div>
  
  <button type="submit" class="btn btn-danger mx-2 mt-5">Create</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
@endsection