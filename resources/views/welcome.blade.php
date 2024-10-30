@extends('layouts.app')

@section('title', 'Гланая страница')

@section('content')
    <div class="px-4 py-5 text-center mainContent">
        <svg fill="none" height="100" viewBox="0 0 24 24" width="100" xmlns="http://www.w3.org/2000/svg"><path class="mainicon" d="M15.4695 11.2929C15.0789 10.9024 14.4458 10.9024 14.0553 11.2929C13.6647 11.6834 13.6647 12.3166 14.0553 12.7071C14.4458 13.0976 15.0789 13.0976 15.4695 12.7071C15.86 12.3166 15.86 11.6834 15.4695 11.2929Z" fill="currentColor"/><path class="mainicon" d="M16.1766 9.17156C16.5671 8.78103 17.2003 8.78103 17.5908 9.17156C17.9813 9.56208 17.9813 10.1952 17.5908 10.5858C17.2003 10.9763 16.5671 10.9763 16.1766 10.5858C15.7861 10.1952 15.7861 9.56208 16.1766 9.17156Z" fill="currentColor"/><path class="mainicon" d="M19.7121 11.2929C19.3216 10.9024 18.6885 10.9024 18.2979 11.2929C17.9074 11.6834 17.9074 12.3166 18.2979 12.7071C18.6885 13.0976 19.3216 13.0976 19.7121 12.7071C20.1027 12.3166 20.1027 11.6834 19.7121 11.2929Z" /><path d="M16.1766 13.4142C16.5671 13.0237 17.2003 13.0237 17.5908 13.4142C17.9813 13.8048 17.9813 14.4379 17.5908 14.8284C17.2003 15.219 16.5671 15.219 16.1766 14.8284C15.7861 14.4379 15.7861 13.8048 16.1766 13.4142Z" class="mainicon" /><path class="mainicon" d="M6 13H4V11H6V9H8V11H10V13H8V15H6V13Z" fill="currentColor"/><path clip-rule="evenodd" d="M7 5C3.13401 5 0 8.13401 0 12C0 15.866 3.13401 19 7 19H17C20.866 19 24 15.866 24 12C24 8.13401 20.866 5 17 5H7ZM17 7H7C4.23858 7 2 9.23858 2 12C2 14.7614 4.23858 17 7 17H17C19.7614 17 22 14.7614 22 12C22 9.23858 19.7614 7 17 7Z" fill="currentColor" class='mainicon' fill-rule="evenodd"/>
        </svg>
        <h1 class="display-5 fw-bold text-white ">WTGames</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 text-white">Откройте мир игр с нашим онлайн-магазином, где вас ждут лучшие новинки и классика. Удобный интерфейс, широкий выбор жанров и регулярные акции – все для вашего игрового опыта. Погружайтесь в увлекательные приключения прямо сейчас!</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="@auth
                {{route('catalog-page')}}
                @else
                {{route('login')}}
                @endif
                " class="btn btn-success btn-lg px-4 gap-3">Вперед за покупками!</a>
            </div>
        </div>
    </div>

    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom text-white">Игровые платформы</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            <!-- Карточка EA Play -->
            <div class="col">
                <div
                    class="card card-cover overflow-hidden text-bg-dark shadow-lg"
                    style="background-image: url('{{ asset('images/ealogo.jpeg') }}');">
                    <div class="d-flex flex-column h-100 p-3 pb-2 text-white text-shadow-1">
                        <div class="mt-auto d-flex justify-content-end align-items-center">
                            <small>EA Play</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Карточка Steam -->
            <div class="col">
                <div
                    class="card card-cover overflow-hidden text-bg-dark shadow-lg"
                    style="background-image: url('{{ asset('images/steamlogo.jpg') }}');">
                    <div class="d-flex flex-column h-100 p-3 pb-2 text-white text-shadow-1">
                        <div class="mt-auto d-flex justify-content-end align-items-center">
                            <small>Steam</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Карточка Epic Games -->
            <div class="col">
                <div
                    class="card card-cover overflow-hidden text-bg-dark shadow-lg"
                    style="background-image: url('{{ asset('images/epicgameslogo.jpg') }}');">
                    <div class="d-flex flex-column h-100 p-3 pb-2 text-white text-shadow-1">
                        <div class="mt-auto d-flex justify-content-end align-items-center">
                            <small>Epic Games Launcher</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="p-5 text-center mainContent">
        <div class="container py-5">
            <h1 class="text-white">Играй выгодно — всегда и везде!</h1>
            <p class="col-lg-9 mx-auto lead text-white">
                Станьте частью сообщества WTGames и получайте доступ к уникальным предложениям.
                Специальные скидки на предзаказы, эксклюзивные наборы и бонусы для постоянных клиентов.
                Наш магазин создан для тех, кто ценит качество и хочет
                всегда оставаться в центре игровых событий. <br>
                Получайте бонусы за покупки и не упустите горячие скидки!
            </p>
        </div>
    </div>


    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom text-white">Наши примущества</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3" style="width: 48px; height: 48px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="fs-3 text-white">Доступные цены</h3>
                    <p class="text-white">Мы предлагаем выгодные цены на все игры. Постоянные скидки, акции и эксклюзивные предложения — играйте больше, платите меньше! У нас всегда найдется что-то по вашему вкусу и бюджету.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3" style="width: 48px; height: 48px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="fs-3 text-white">Гарантия безопасности</h3>
                    <p class="text-white">В WTGames каждая покупка защищена. Мы используем современные технологии шифрования и безопасные платежные системы, чтобы ваши данные оставались в полной безопасности.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3" style="width: 48px; height: 48px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-chat-right-dots-fill" viewBox="0 0 16 16">
                        <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="fs-3 text-white">Быстрота и поддержка</h3>
                    <p class="text-white">Ключи от игр поступают мгновенно после покупки. Если возникнут вопросы, наша служба поддержки всегда готова помочь. Ваш комфорт и удобство для нас в приоритете!</p>
                </div>
            </div>
        </div>
    </div>
@endsection

