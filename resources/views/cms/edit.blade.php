@extends('layouts.master')
 
@section('title','BIMA+') 

@section('content')
<div class="card mb-9">
    <form action="/cms/{{ $menu->id }}" method="post">
        <input type="hidden" name="_method" value="PUT">

        {{ csrf_field() }}
        <input type="text" name="title" value="{{ $menu->title }}"> <br>
        <textarea name= "description" rows="8" cols="40">{{ $menu->description }}</textarea>  <br>      
        <img src="{{ asset('images/' . $menu->picture) }}" width="200px" height="200px" /> <br>
        <input type="file" name="image"><br>
    	<input type="submit" name="name" value="edit">
    </form>
</div>
@endsection
