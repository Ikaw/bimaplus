@extends('layouts.master')
 
@section('title','BIMA+')
	

@section('content')
<div class="card mb-9">
    <form action="/cms/create" method="post">
       <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"> Insert Menu</i></button>
            {{ csrf_field() }}
        <input type="hidden" name="_method" value="get">
    </form>
    <br>
    <div class="card-header">
        <i class="fa fa-table"></i> Data Table
    </div>
   
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>Menu</th>
                        <th>Description</th>
                        <th colspan="2">Operation</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <td>{{ $menu->title }}</td>
                        <td>{{ $menu->description }}</td>
                       
                        <td>
                            <form action="/cms/{{ $menu->id }}" method="post">
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"> Delete</i></button>
                                 {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                        </td>
                        <td>
                            <form action="/cms/{{ $menu->id }}/edit" method="post">
                               <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"> Edit</i></button>
                                    {{ csrf_field() }}
                                <input type="hidden" name="_method" value="get">
                            </form>
                        </td>
                    </tr>
                @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
