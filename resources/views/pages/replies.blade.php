@extends('layouts/layout')
@section('title')
  <head>
    <title> {{$discussion->name}} </title>
  </head>
@stop

@section('content')

<a href='/subjects/{{$subject->name}}/discussion'>Other questions and discussions related to {{$subject->name}}</a>

<h1>{{$discussion->name}}</h1>

@foreach ($replies as $reply)
    <p>
        {{$reply->content}}
        <a href="/subjects/{{$subject->name}}/discussion/{{$reply->discussion_id}}/reply/{{$reply->id}}/delete"><button>Delete message</button></a>


        <!-- Edit message modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{$reply->id}}">
          Launch demo modal
        </button>

        <!-- Modal to edit message -->
        <div class="modal fade" id="modal{{$reply->id}}" tabindex="-1" aria-labelledby="modal{{$reply->id}}" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method ='POST' action ='/subjects/{{$subject->name}}/discussion/{{$reply->discussion_id}}/reply/{{$reply->id}}/update' >
                  @csrf
                  <div> 
                      <label class ="label" for="name" >Discussion</label>
                      <div class="control">
                          <input type="text" name="content" id = "content" value="{{$reply->content}}">
                          <br>
                      </div>
                  </div>
                  <br>
              
                  <div>
                      <div class="control">
                          <button class="button is-link" type="submit">Save Changes</button>
                          <br>
                          <br>

                      </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>

    </p>
@endforeach




<br>
<br>

<form method ='POST' action ="/subjects/{{$subject->name}}/discussion/{{$discussion->id}}/reply/store" >
    @csrf
    <div> 
        <div class="control">
            <input type="text" name="content" id = "content">
            <br>
        </div>
    </div>
    <br>

    <div>
        <div class="control">
            <button class="button is-link" type="submit">send</button>
            <br>
            <br>

        </div>
    </div>
</form>


@stop