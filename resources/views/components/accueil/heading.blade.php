<div class="row flex-column justify-content-between m-0 vh-100" id="heading">
    <nav class="navbar navbar-expand-lg navbar-dark p-3 justify-content-between">
        <a class="navbar-brand" href="#">
            <img src="{{asset('img/logos/logo-vertical-white.svg')}}" alt="" loading="lazy">
        </a>
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
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link text-uppercase dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow rounded-0 border-0"
                        aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-uppercase" href="#">Évènements</a>
                        <a class="dropdown-item text-uppercase" href="#">Documentation</a>
                        <a class="dropdown-item text-uppercase" href="#">Forum</a>
                    </div>
                </li> --}}
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-8">
                <div class="row py-3">
                    <div class="col">
                        <div class="card px-5 py-4 rounded-0 border-0 shadow">
                            <div class="card-text">
                                <h5>NEWS 1</h5>
                                <p class="body placeholder">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor
                                    incididunt ut labore
                                </p>
                                <a href="#" class="text-dark text-right d-block">
                                    En savoir plus <i class="ml-2 fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card px-5 py-4 rounded-0 border-0 shadow">
                            <div class="card-text">
                                <h5>NEWS 2</h5>
                                <p class="body placeholder">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor
                                    incididunt ut labore
                                </p>
                                <a href="#" class="text-dark text-right d-block">
                                    En savoir plus <i class="ml-2 fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col">
                        <div class="card p-5 rounded-0 border-0 shadow">
                            <div class="card-text">
                                <h3>EFFICACES ENSEMBLE</h3>
                                <p class="body text-black-50 mb-0">
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-3 justify-content-end">
                    <div class="col-auto mx-n2">
                        <a name="" id="" class="btn btn-orange px-5 mx-2" href="#" role="button">
                            NOUS CONTACTER
                        </a>
                        <a name="" id="" class="btn btn-red px-5 mx-2" href="#" role="button">DEVENIR MEMBRE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div></div>
</div>