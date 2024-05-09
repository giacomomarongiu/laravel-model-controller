@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/js/app.js')

    </head>


    <body>

        <main class="bg-light">
            <div class="container">
                <div class="row">
                    <h1>MOVIES</h1>
                    @foreach ($movies as $movie)
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $movie->title }}</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="#" class="btn btn-danger text-dark">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>

    </body>

    </html>
@endsection
