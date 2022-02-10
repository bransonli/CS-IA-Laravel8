@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop

@section('content')

<div class = "w3-text-teal w3-center">
    <form method ='PUT' action ='/subjects/{{$subject->name}}/discussion/{{$id}}/update' >
        @csrf
        <div> 
            <label class ="label" for="name" >Discussion</label>
            <div class="control">
                <input type="text" name="name" id = "name" value="{{$discussion->name}}">
                <br>
            </div>
        </div>
        <br>
    
        <div>
            <div class="control">
                <button class="button is-link" type="submit">submit</button>
                <br>
                <br>

            </div>
        </div>
    </form>
</div>


@stop

