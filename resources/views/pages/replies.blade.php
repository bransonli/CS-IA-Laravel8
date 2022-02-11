@extends('layouts/layout')
@section('title')
  <head>
    <title> {{$discussion->name}} </title>
  </head>
@stop

@section('content')

<h2 class="font-medium leading-tight text-4xl mt-0 mb-2 text-blue-600">
  {{$discussion->name}}
</h2>

<hr>

<table class="table-auto w-full">
    <thead class="bg-gray-50">
      <tr>
        <td scope="col"><b>Identity</b></td>
        <td scope="col"><b>Reply</b></td>
        <td scope="col"><b>Date</b></td>
        <td scope="col"><b>Actions</b></td>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-300">
        @foreach ($replies as $reply)
          <tr class="whitespace-nowrap">
            <td>{{$user->role}}-{{$user->id}}</td>
            <td>{{$reply->content}}</td>
            <td>{{$reply->created_at}}</td>
            <td>
              <a href="/subjects/{{$subject->name}}/discussion/{{$reply->discussion_id}}/reply/{{$reply->id}}/delete">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-0.1 px-4 rounded">            
                  delete
                </button>
              </a>
              <a href="/subjects/{{$subject->name}}/discussion/{{$reply->discussion_id}}/reply/{{$reply->id}}/edit">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-0.1 px-4 rounded">
                  edit
                </button>
              </a>
            </td>
          </tr> 
    
        @endforeach
    </tbody> 
</table>

<br>
<br>

<form method ='POST' action ="/subjects/{{$subject->name}}/discussion/{{$discussion->id}}/reply/store" >
    @csrf
    <div> 
        <div class="control">
            <input class ="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
             type ="text" name="content" id = "content" placeholder="type your message here">
            <br>
        </div>
        <br>
        <div class="control">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">send</button>
        </div>
    </div>
</form>

@stop