@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop

@section('content')

<div class = "w3-text-teal w3-center">
    <form method ='POST' action ='/subjects/{{$subject->name}}/discussion/{{$reply->discussion_id}}/reply/{{$reply->id}}/update'>
        @csrf
        <div> 
            <label class ="label" for="content"><h3 class="font-medium leading-tight text-3xl mt-0 mb-2 text-blue-600">Edit reply</h3></label>
            <div class="control">
                <input class = "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" name="content" id = "content" value="{{$reply->content}}">
                <br>
            </div>
        </div>
        <br>
    
        <div>
            <div class="control">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">confirm</button>
                <br>
                <br>

            </div>
        </div>
    
    </form>
</div>


@stop

