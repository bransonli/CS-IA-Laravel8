@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop
@section('content')

<h5 class="font-medium leading-tight text-3xl mt-0 mb-2 text-blue-600">Results from discussions</h5>

<table class="table-fixed w-full">
    <thead class="bg-gray-50">
      <tr>
        <td scope="col"><b>Discussion name</b></td>
        <td scope="col"><b>Date created</b></td>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-300">
        @foreach ($discussions as $discussion)
          <tr class="whitespace-nowrap">
            <td><a href="/subjects/{{$discussion->subject->name}}/discussion/{{$discussion->id}}">{{$discussion->name}}</a></td>
            <td><b>{{$discussion->created_at}}</b></td>
          </tr>  
        @endforeach
    </tbody>
</table>

<br><br>

<h5 class="font-medium leading-tight text-3xl mt-0 mb-2 text-blue-600">Results from notes</h5>

<table class="table-fixed w-full">
    <thead class="bg-gray-50">
      <tr>
        <td scope="col"><b>Note name</b></td>
        <td scope="col"><b>Note description</b></td>
        <td scope="col"><b>Date created</b></td>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-300">
        @foreach ($notes as $note)
          <tr class="whitespace-nowrap">
            <td><a href="/subjects/{{$note->subject->name}}/note/{{$note->id}}">{{$note->name}}</a></td>
            <td>{{$note-description}}</td>
            <td>{{$note->created_at}}</td>
          </tr>  
        @endforeach
    </tbody>
</table>

<br><br>

<h5 class="font-medium leading-tight text-3xl mt-0 mb-2 text-blue-600">Results from resources</h5>

<table class="table-fixed w-full">
    <thead class="bg-gray-50">
      <tr>
        <td scope="col"><b>Resource name</b></td>
        <td scope="col"><b>Resource description</b></td>
        <td scope="col"><b>Date created</b></td>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-300">
        @foreach ($resources as $resource)
          <tr class="whitespace-nowrap">
            <td><a href="/subjects/{{$resource->subject->name}}/resource/{{$resource->id}}">{{$resource->name}}</a></td>
            <td>{{$resource->description}}</td>
            <td>{{$resource->created_at}}</td>
          </tr>  
        @endforeach
    </tbody>
</table>

@stop

