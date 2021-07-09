<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        
    </style>
    <title>Lookmaboutique</title>
</head>
<body>

    <div class="myHeader">
        <nav class="navbar  navbar-expand-lg navbar-light bg-primary " style="font-size: 30px; z-index: 1">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Lookmaboutique</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Créations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">A propos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
    {{-- <div id="headerAccueil" >
        @include('lookmaboutique.partials.header')  
        
    </div>

    @include('lookmaboutique.partials.footer') --}}
    
</body>
</html>