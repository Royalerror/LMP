<div class="row m-0 vh-100" id="heading">
    <div class="col-6 p-3" id="heading-bg">
        <img src="{{asset('img/logos/logo-vertical-black.svg')}}" alt="" loading="lazy">
    </div>
    <div class="col-6 pl-5 row justify-content-between">
        <div class="col p-0">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        @foreach ($pages as $page)
                        <li class="nav-item">
                            <a class="nav-link text-uppercase {{ Request::is($page['link'])?'active':'' }}"
                                href="{{$page['link']}}">
                                {{ $page['name'] }}
                                @if (Request::is($page['link']))
                                <span class="sr-only">(current)</span>
                                @endif
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-10">
            <h3 class="mb-3">
                Les formations
            </h3>
            <p>
                La Maison Passive est la seule association en France qui forme et guide les professionnels de la
                construction passive qui souhaitent s’inscrire dans une démarche écologique et réduire l’impact de la
                construction sur l’environnement. Découvrez comment la Maison Passive délivre les compétences clés et
                accompagne les professionnels à travers nos formations pour construire un projet passif.
            </p>
        </div>
    </div>
</div>