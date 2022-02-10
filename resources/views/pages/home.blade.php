@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop

@section('content')

    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
      <!-- The Grid -->
      <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">
          <div class="w3-card w3-round w3-white w3-center">
            <div class="w3-container">
              <p>Ongoing Conversations:</p>
              <a href=""><p>Conversation 1</p></a>
              <a href=""><p>Conversation 2</p></a>
            </div>
          </div>
          <br>
          
          <div class="w3-card w3-round w3-white w3-center">
            <div class="w3-container">
              <p>Continue reading:</p>
              <a href=""><p>What makes IB hard</p></a>
            </div>
          </div>
          <br>
          
          
        <!-- End Left Column -->
        </div>
        
        <!-- Middle Column -->
        <div class="w3-col m9">
          
          <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <h4>You might be interested in</h4><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <!-- Left Column -->
            <div class="w3-col m3">
              <div class="w3-card w3-round w3-white w3-center">
                <div class="w3-container">
                  <p>Ongoing Conversations:</p>
                  <a href=""><p>Conversation 1</p></a>
                  <a href=""><p>Conversation 2</p></a>
                </div>
              </div>
              <br>
              
            <!-- End Left Column -->
            </div>
          </div>

          <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <h4>Want to send a chat request? </h4><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          


          
        <!-- End Middle Column -->
        </div>
      </div>
    </div>
  

@stop