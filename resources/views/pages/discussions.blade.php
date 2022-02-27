@extends('layouts/layout')

@section('title')
@endsection

@section('content')

  <h1 class="font-medium leading-tight text-5xl mt-0 mb-2 text-blue-600">
    Discussions on {{$subject->name}}</h1>



  <a href="/subjects/{{$subject->name}}/discussion/create">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
      Create new discussion
    </button>
  </a>
  <br><br>

  <table class="table-fixed w-full">
    <thead class="bg-gray-50">
      <tr>
        <td scope="col">Topic</td>
        <td scope="col">Action</td>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-300">
        @foreach ($discussions as $discussion)
          <tr class="whitespace-nowrap">
            <td class="px-6 py-4 text-sm text-gray-500 break-all">{{$discussion->name}}</td>
            <td>
              <a href="/subjects/{{$subject->name}}/discussion/{{$discussion->id}}">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-0.1 px-4  rounded">
                  view
                </button>
              </a>
              <a href='/subjects/{{$subject->name}}/discussion/{{$discussion->id}}/delete'>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-0.1 px-4 rounded">            
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