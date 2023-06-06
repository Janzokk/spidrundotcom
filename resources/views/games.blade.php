@extends('layout')

<head><link href="{{ asset('css/app.css') }}" rel="stylesheet"><head>

@section('content')
    
    <div class="d-flex flex-column  h-100" style="width 100%">
        <h1 id="title">GAMES</h1>
        <div class="d-flex flex-column justify-content-around align-items-center h-100">
            @foreach($games as $game)
                <button class="border rounded text-light w-50 h-25" id="game" onclick="redirectToRun($(this).find('h3').text());"><h3>{{ $game }}<h3></button>
            @endforeach
        </div>
    </div>
    
    <script>
        function redirectToRun(gameTitle){
            let route = "{{ route('runs', ['title' => 'gameTitle']) }}";
            route = route.replace('gameTitle', gameTitle);
            window.location.replace(route);
            console.log(headingContent); // Output the content in the browser console
        }
    </script>

@endsection