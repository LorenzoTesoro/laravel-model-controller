<nav class="navbar navbar-expand-sm bg-dark text-white navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Lara_Movies</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}" aria-current="page">Home<span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() === 'contacts' ? 'active' : ''}}" href="{{route('contacts')}}">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>