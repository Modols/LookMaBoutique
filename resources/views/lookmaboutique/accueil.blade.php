<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Lookmaboutique</title>
</head>
<body>
    
    <div class="accueilHeader">
        @include('lookmaboutique.partials.header')  
    </div>
    
    @include('lookmaboutique.partials.footer')
</body>
</html>