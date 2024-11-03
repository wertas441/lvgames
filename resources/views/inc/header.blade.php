<header>
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start m-3">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <!-- Навигационные ссылки -->
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 gap-2">
                <li><a href="{{route('welcome')}}" class="nav-link px-3 text-white nav_panel">Главная</a></li>
                <li><a href="{{route('catalog-page')}}" class="nav-link px-2 text-white nav_panel">Каталог</a></li>
                <li><a href="{{route('reviews-page')}}" class="nav-link px-2 text-white nav_panel">Отзывы</a></li>
                <li><a href="{{route('guarantee-page')}}" class="nav-link px-2 text-white nav_panel">Гарантии</a></li>
            </ul>

            <!-- Поисковая форма -->
            <form action="" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" method="get">
                <input name="name" id="name" type="search" class="form-control form-control-dark text-bg-dark inputPanel" placeholder="Search..." aria-label="Search">
            </form>

            <!-- Блок авторизации -->
            <div class="text-end">
                @auth
                    <div class="position-relative">
                        <button class="btn btn-dark rounded-circle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-chevron-down"></i>
                        </button>

                        <!-- Выпадающее меню -->
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item rounded-2" href="{{route('profile-page')}}">Профиль</a></li>
                            <li><a class="dropdown-item rounded-2" href="{{route('support-index')}}">Поддержка</a></li>
                            <li><a class="dropdown-item rounded-2" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><form method="POST" action="{{ route('logout') }}">
                                    {{ csrf_field() }}
                                    <button type="submit" class="dropdown-item rounded-2">Выйти</button>
                                </form></li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-success">Войти</a>
                @endif
            </div>
        </div>
    </div>
</header>
