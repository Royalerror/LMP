<div class="pt-5 position-relative">
    <div class="container mb-5">
        <h2 class="text-center mb-4">
            <img src="{{asset('img/logos/icon-2.svg')}}" alt="">
            LES FORMATIONS
        </h2>
        <div class="row justify-content-center">
            <div class="col-5">
                La Maison Passive est la seule association en France qui forme et guide les professionnels de la
                construction passive. Pour eux, le savoir-faire et les compétences clés passives s’acquiert avec des
                formations dédiées.
            </div>
            <div class="col-5">
                Ces formations sont conçues pour les accompagner dans l’acquisition des compétences passives. Découvrez
                l’ensemble des formations pour construire un projet passif.
            </div>
            <div class="col-10">
                <a href="#" class="text-dark text-right d-block">
                    En savoir plus <i class="ml-2 fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div id="formations-coverflow">
        @include('components.accueil.coverflow')
    </div>
    <div id="mask-wrap">
        <div id="diagonal-mask"></div>
    </div>
</div>