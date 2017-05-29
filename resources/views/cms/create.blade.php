@extends('layouts.master')
 
@section('title','BIMA+') 

@section('content')
<div class="card mb-9">
<h1>Create Menu</h1>
    <form action="/cms" method="post" enctype="multipart/form-data">
        <input type="text" name="title"> <br>
        <textarea name= "description" rows="8" cols="40"></textarea>  <br>       
    	<input type="file" name="image"><br>
    	<input type="submit" name="name" value="Create">
    	{{ csrf_field() }}
    </form>
</div>
@endsection
