@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop

@section('content')

<div class = "w3-text-teal w3-center">
    <form method ='POST' action ='/subjects/{{$subject->name}}/note/store' enctype="multipart/form-data">
        @csrf
        <div> 
            <label class ="label" for="name">Name</label>
            <div class="control">
                <input type="text" name="name" id = "name">
                <br>
            </div>
        </div>
        <br>
        <div> 
            <label class ="label" for="name">Description</label>
            <div class="control">
                <input type="text" name="description" id = "description">
                <br>
            </div>
        </div>
        <br>
        <div> 
            <label class ="label" for="name">Upload note here</label>
            <div class="control">
                <input type="file" name="note" id="note">
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