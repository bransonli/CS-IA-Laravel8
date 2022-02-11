@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop
@section('content')

<h1 class="font-medium leading-tight text-5xl mt-0 mb-2 text-blue-600">Resource links for {{$subject->name}}</h1>

<a href="/subjects/{{$subject->name}}/resource/create">
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
    Add new resource
  </button></a> 
<br><br>

<table class="table-auto w-full">
    <thead class="bg-gray-50">
      <tr>
        <td scope="col">Name</td>
        <td scope="col">Description</td>
        <td scope="col">Link</td>
        <td scope="col">Action</td>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-300">
        @foreach ($resources as $resource)
          <tr>
            <td>
              <a href="/subjects/{{$subject->name}}/resource/{{$resource->id}}"><b>{{$resource->name}}</b></a>
            </td>
            <td>
              <p>{{$resource->description}}</p>
            </td>
            <td>
              <div class = "underline decoration-sky-500">
                <a href="{{$resource->link}}">
                  {{$resource->link}}
                </a>
              </div>
              
            </td>
            <td>
              <a href='/subjects/{{$subject->name}}/resource/{{$resource->id}}/edit'><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-0.1 px-4 rounded">
                Edit
              </button></a>
              <a href='/subjects/{{$subject->name}}/resource/{{$resource->id}}/delete'><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-0.1 px-4 rounded">
                Delete
              </button></a>           
            </td>
          </tr>  
        @endforeach
    
    </tbody>
  </table>


@stop