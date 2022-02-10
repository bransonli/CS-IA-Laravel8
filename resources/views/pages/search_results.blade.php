@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop
@section('content')

<h1>Notes</h1>

<a href="/subjects/{{$subject->name}}/note/upload">Donate Notes</a>
<br>
<a href="/subjects/note">Here are your search results</a>
<br>

@foreach ($notes as $note)
    <ol><a href="/subjects/{{$subject->name}}/note/{{$note->id}}">{{$note->description}}</a>
    <a href='/subjects/{{$subject->name}}/note/{{$note->id}}/download'><button>download</button></a>
    <a href='/subjects/{{$subject->name}}/note/{{$note->id}}/delete'><button>delete</button></a></ol>
  
  </ol>
@endforeach


@stop