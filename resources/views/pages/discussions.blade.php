@extends('layouts/layout')

@section('title')
@endsection

@section('content')

  <h1 style="background-color: white;">Discussions on {{$subject->name}}</h1>

  <a href="/subjects/{{$subject->name}}/discussion/create"><button class="btn btn-dark">Create new discussion</button></a>
  <br>

  <table class="table-auto w-full">
    <thead class="bg-gray-50">
      <tr>
        <td scope="col">Topic</td>
        <td scope="col">Action</td>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-300">
        @foreach ($discussions as $discussion)
          <tr class="whitespace-nowrap">
            <td><b>{{$discussion->name}}</b></td>
            <td>
              <a href="/subjects/{{$subject->name}}/discussion/{{$discussion->id}}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-0.1 px-4  rounded">
                  view
                </button>
              </a>
              <a href='/subjects/{{$subject->name}}/discussion/{{$discussion->id}}/delete'>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-0.1 px-4 rounded">            
                  delete
                </button>
              </a>
              <a href='/subjects/{{$subject->name}}/discussion/{{$discussion->id}}/edit'>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-0.1 px-4 rounded">
                  edit
                </button>
              </a>
            </td>
          </tr>  
        @endforeach

@endsection