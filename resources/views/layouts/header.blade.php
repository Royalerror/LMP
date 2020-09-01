<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white px-3 justify-content-between"
    style="display: none;">
    <a class="navbar-brand" href="#">
        <img src="{{asset('img/logos/logo-vertical.svg')}}" alt="" loading="lazy">
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
                <a class="nav-link text-uppercase dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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