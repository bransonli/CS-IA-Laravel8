@extends('layouts/layout')
@section('title')
@stop

@section('content')

    <div style="padding-bottom: 8%;">
        <h1 style="text-align: center;">Discussion</h1>
        <div style="color:grey; text-align:center;">This is where you can post, read, and reply to questions</div>
        <div class="grid grid-rows-3 grid-flow-col gap-4">
            <div class="row-span-3">
                @foreach ($subjects as $subject)
                    <a href="/subjects/{{$subject->name}}/discussion"><button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" style="width: 15%;">{{ $subject->name }}</button></a>
                @endforeach
            </div>
        </div>
    </div>

    <div style="padding-bottom: 8%;">
        <h1 style="text-align: center;">Notes</h1>
        <div style="color:grey;">You can find notes of past cohorts here</div>
        <div style="color:grey;">You can also donate notes here</div>
        <div class="grid grid-rows-3 grid-flow-col gap-4">
            <div class="row-span-3">
                @foreach ($subjects as $subject)
                    <a href="/subjects/{{$subject->name}}/note"><button type="button" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" style="width: 15%;">{{ $subject->name }}</button></a>
                @endforeach
            </div>
        </div>
    </div>


    <div style="padding-bottom: 8%;">
        <h1 style="text-align: center;">Resources</h1>
        <div style="color:grey;">You can find useful oneline resources used by past cohorts here</div>
        <div style="color:grey;">You can share useful source you've find online here</div>
        <div class="grid grid-rows-3 grid-flow-col gap-4">
            <div class="row-span-3">
                @foreach ($subjects as $subject)
                    <a href="/subjects/{{$subject->name}}/resource"><button type="button" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" style="width: 15%;">{{ $subject->name }}</button></a>
                @endforeach
            </div>
        </div>
    </div>

@stop