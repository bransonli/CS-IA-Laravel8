<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('title')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>OneMind</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')


            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="hidden sm:-my-px sm:ml-10 sm:flex" >
                    <form method ='POST' action ='/search' style="margin-bottom: 1%; margin-left: 75%;">
                        @csrf
                        <div> 
                            <div class="control">
                                <br>
                                <input class = "whitespace-nowrap shadow appearance-none border py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" name="search" id ="search" placeholder="search"/>
                            </div>
                        </div>
                    </form>
                <br>
            </header>

            <!-- Page Content -->
            <main style="margin: 5%; text-align:center;">
                @yield('content')
            </main>
        </div>
    </body>
</html>
