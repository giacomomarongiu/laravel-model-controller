    <header>
        <nav class="navbar navbar-expand-lg  bg-danger">
            <div class="container  bg-danger">
                <a class="navbar-brand fw-bold" href="#">MoviesDB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}" aria-current="page">
                            <a class="nav-link "  href="{{ route('welcome') }}">Home</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() === 'americans' ? 'active' : '' }}">
                            <a class="nav-link"  href="{{ route('americans') }}">Americans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">British</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>