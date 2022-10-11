<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laravel - Bikes</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="{{ url('') }}">dwes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{$activeHome ?? ''}}">
                        <a class="nav-link" href="{{ url('') }}">Home</a>
                    </li>
                    <li class="nav-item {{$activeBike ?? ''}}">
                        <a class="nav-link" href="{{ url('bike') }}">Bicicletas</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('modalContent')
        <main role="main">
            <div class="jumbotron">
                <div class="container">
                    <h4 class="display-4">{{ $title ?? 'Home' }}</h4>
                </div>
            </div>
            <div class="container">
                @if(session()->has('message'))
                    <div class="alert alert-primary" role="alert">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="row">
                    <h3>{{ $subTitle ?? 'Bicicletas' }}</h3>
                </div>
                @yield('content')
                <hr>
            </div>
        </main>
        <footer class="container">
            <p>&copy; IZV 2022</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        @yield('scripts')
    </body>
</html>