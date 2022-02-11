@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop
@section('content')

<h1>Notes for {{$subject->name}}</h1>
<a href="/subjects/{{$subject->name}}/note/upload"><button class="btn btn-dark">Donate Notes</button></a>

<br>

<table class="table-auto w-full">
    <thead class="bg-gray-50">
      <tr>
        <td scope="col">Name</td>
        <td scope="col">Action</td>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-300">
        @foreach ($notes as $note)
          <tr>
            <td>
              <a href="/subjects/{{$subject->name}}/note/{{$note->id}}"><b>{{$note->name}}</b></a>
              <p>{{$note->description}}</p>
            </td>
            <td>
              <a href='/subjects/{{$subject->name}}/note/{{$note->id}}/download'><button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                download
              </button></a>              
              <a href='/subjects/{{$subject->name}}/note/{{$note->id}}/delete'><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-0.1 px-4 rounded">           
                delete
              </button></a>

            </td>
          </tr>  
        @endforeach
    
    </tbody>
  </table>
  
@stop