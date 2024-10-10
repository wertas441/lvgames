<header>
<div class="container">
<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start m-3">
    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 gap-2">
        <li><a href="/" class="nav-link px-3 text-white nav_panel">Главная</a></li>
        <li><a href="{{route('catalog-page')}}" class="nav-link px-2 text-white nav_panel" >Каталог</a></li>
        <li><a href="{{route('reviews-page')}}" class="nav-link px-2 text-white nav_panel">Отзывы</a></li>
        <li><a href="{{route('guarantee-page')}}" class="nav-link px-2 text-white nav_panel">Гарантии</a></li>
    </ul>

    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark text-bg-dark inputPanel" placeholder="Search..." aria-label="Search">
    </form>

    <div class="text-end">
        <a href="{{route('login-page')}}" class="btn btn-success">Войти</a>
    </div>
</div>
</div>
</header>
