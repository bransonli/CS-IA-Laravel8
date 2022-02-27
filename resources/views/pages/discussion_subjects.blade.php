@extends('layouts/layout')
@section('title')
@stop

@section('content')

<h1>Subjects</h1>

<a href="/">Go home</a>

<li>
  @foreach ($subjects as $subject)
      <ol><a href="/subjects/{{$subject->name}}/discussion">{{ $subject->name }}</a></ol>
  @endforeach
</li>


@stop