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
        <div class="accueilTitlePage">
            <h1 class="text-white">Créer sa boutique n'a jamais été aussi simple.</h1>
            <br>
            <a type="button" href="#accueilSectionGradiantID" class="btn btn-primary">Lancez-vous</a>
            
        </div>
    </div>  
    
    <section id="accueilSectionGradiantID" class="accueilSectionGradiant">
        <div class="accueilGradiant">
            {{-- mettre les cards --}}
            <div class="container-fluid accueilCardsAbonnement">
                <div class="row">
                    
                    <div class="col-sm-6">
                        <div class="card text-center">
                            <div class="card-header">
                                <h2>Formule d'Essais</h2>
                            </div>
                            <div class="card-body accueilCardBody">
                                <span>Création de sa boutique </span> 
                                <span>Visualisation du site </span> 
                                <span>Choix du nom de domaine</span> 
                                <span>Publication en ligne </span> 
                                <span>Theme couleur</span> 
                                <span>Support</span> 
                            </div>
                            <hr>
                            <div class="card-body">
                                <p class="card-text">La formule d'essais va vous permettre de créer votre boutique en ligne, 
                                    ainsi que de le prévisualiser localement sur votre ordinateur.
                                    <br> <br>
                                    La publication en ligne du site sera impossible.
                                </p>
                            </div>
                            <div class="card-footer accueilCardPrice text-muted">
                                <span class="accueilCardPriceLeft" style="color: rebeccapurple">Gratuit</span>
                                <span class="accueilCardPriceRight">
                                    <button type="button" class="btn btn-primary">J'essaye</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="card text-center">
                            <div class="card-header">
                                <h2>Formule Abonnement</h2>
                            </div>
                            <div class="card-body accueilCardBody" >
                                <span>Création de sa boutique </span> 
                                <span>Visualisation du site </span> 
                                <span>Choix du nom de domaine</span> 
                                <span>Publication en ligne </span> 
                                <span>Theme couleur</span> 
                                <span>Support</span> 
                            </div>
                            <hr>
                            <div class="card-body">
                                <p class="card-text">
                                    Cette formule vous permettra de publier votre boutique en ligne ainsi que de choisir 
                                    son nom de domaine pour avoir une url personnalisé. <br>
                                    Des thèmes sont aussi disponible pour avoir la boutique qui vous ressemble.
                                    
                                </p>
                            </div>
                            <div class="card-footer accueilCardPrice">
                                <span class="accueilCardPriceLeft" style="color: rebeccapurple">##€/Mois</span>
                                <span class="vertical-line"></span>
                                <span class="accueilCardPriceRight">##€/An <span style="color: red">-30%</span></span> 
                                <div style="float: right; width: 50%">
                                    <button type="button" class="btn btn-primary">J'essaye</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    @include('lookmaboutique.partials.footer')
</body>
</html>