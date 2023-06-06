<?php
    if (!isset($runs) || empty($runs)) {
        header("Location: ./");
        exit;
    }
?>
@extends('layout')

@section('content')

    <h1 class="p-5">{{$runs[0]['game']}}</h1>
    <div class="d-flex align-items-center justify-content-end">
        <input id="searcher" placeholder="User name"/>
        <button id="searchBtn" class="mx-3" onclick="research()"><box-icon name='search'></box-icon></button>
    </div>
    <div class="d-flex flex-wrap justify-content-between w-100">
    @foreach($runs as $run)
                <button class="text-light my-5" id="runs">
                    <h4>{{ $run['category'] }} in {{ $run['time'] }}</h4>   
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{substr($run['run'], 17)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <h5>{{ $run['user'] }}<h5>
                    <p>{{ date('d/m/Y', strtotime($run['date'])) }}</p>
                    <p></p>

                </button>
    @endforeach
    </div>

    <script>
        function research(){
            let toSearch = document.getElementById("searcher").value;
            var route = "";
            if(toSearch != ''){
                route = "{{ route('userRuns', ['title' => 'gameTitle','user' => 'userName']) }}";
                route = route.replace('gameTitle', "{{$runs[0]['game']}}");
                route = route.replace('userName', toSearch);
            }else{
                route = "{{ route('runs', ['title' => 'gameTitle']) }}";
                route = route.replace('gameTitle', "{{$runs[0]['game']}}");
            }
            console.log(route);
            window.location.replace(route);
            
        }
        
        var input = document.getElementById("searcher");

        // Execute a function when the user presses a key on the keyboard
        input.addEventListener("keypress", function(event) {
        // If the user presses the "Enter" key on the keyboard
        if (event.key === "Enter") {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element searchBtnwith a click
            document.getElementById("searchBtn").click();
        }
        });

    </script>


@endsection