@extends('layouts.base')

@section('pageContent')
<h1>Inserisci un nuovo Comic</h1>
<div>
    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">Ritorna alla Lista</button></a>  
</div>
<form action="{{route("comics.store")}}" method="POST">
  @csrf
  <div class="form-group mt-5">
    <label for="title">Insert here new Comic</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Insert here">
  </div>
  <div class="form-group">
    <label for="type">Comic Type</label>
    <select class="form-control form-control-md" id="type" name="type">
  <option value="comic-book">Comic Book</option>
  <option value="graphic-novel">Graphic Novel</option>
</select>
  </div>
  <div class="form-group">
  <label for="description">Description</label>
  <textarea class="form-control" placeholder="Leave the description here" id="description" name="description" rows="7"></textarea>
  
</div>
<div class="form-group">
  <label for="thumb">Image</label>
  <textarea class="form-control" placeholder="Enter the url of the image here" id="thumb" name="thumb"></textarea>
  
</div>

  <button type="submit" class="btn btn-primary">Create New Comic</button>
</form>
@endsection