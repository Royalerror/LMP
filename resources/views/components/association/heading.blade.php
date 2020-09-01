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
                l'association
            </h3>
            <p>
                L’association, créée en 2007, a pour objectif le développement et la promotion de la construction
                passive en France. A l’échelle européenne, les bâtiments représentent 40% de l’énergie consommée et
                environ un tiers des émissions de CO2.Ainsi, le secteur de la construction-rénovation est un
                gisement majeur d’économies d’énergie. En ce sens, la directive européenne de performance
                énergétique des bâtiments (EPBD) fixe la nécessité, pour tous les bâtiments neufs, d’atteindre un
                niveau nZEB « nearly-zero energy building » à partir de 2021. Cette exigence, dont l’interprétation
                peut différer selon les pays, implique un effort accru sur l’efficacité énergétique. Le rapport du
                projet européen Passreg identifie clairement le standard Passif comme le plus adapté dans la
                poursuite de cet objectif.
            </p>
            <div class="my-n2">
                <div class="py-2">
                    <img src="{{asset('img/imgs/association/icon-1.svg')}}" alt="" loading="lazy" class="mr-3">
                    Fédérer la communauté passive
                </div>
                <div class="py-2">
                    <img src="{{asset('img/imgs/association/icon-2.svg')}}" alt="" loading="lazy" class="mr-3">
                    Former des professionnels
                </div>
                <div class="py-2">
                    <img src="{{asset('img/imgs/association/icon-3.svg')}}" alt="" loading="lazy" class="mr-3">
                    Garantir l’efficacité
                </div>
                <div class="py-2">
                    <img src="{{asset('img/imgs/association/icon-4.svg')}}" alt="" loading="lazy" class="mr-3">
                    Développer l’innovation
                </div>
                <div class="py-2">
                    <img src="{{asset('img/imgs/association/icon-5.svg')}}" alt="" loading="lazy" class="mr-3">
                    Diffuser de l’information
                </div>
            </div>
        </div>
    </div>
</div>