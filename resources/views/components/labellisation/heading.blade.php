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
                La Labellisation
            </h3>
            <p>
                En France, La Maison Passive est la seule structure à fonctionnement associatif et collaboratif
                habilitée à labelliser les bâtiments pour l’acquisition du label passif. La Labellisation est une étape
                clé pour s’assurer de la bonne mise en œuvre des critères passifs. Que se soit pour valoriser son bien
                ou répondre aux futures exigences européennes de la construction, les professionnels et particuliers ont
                tout intérêt à recourir à la labellisation.
            </p>
            <a href="#" class="btn btn-red px-5">TÉLÉCHARGER LES CRITÈRES</a>
        </div>
    </div>
</div>