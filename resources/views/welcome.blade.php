@extends('layouts.app')

@section('title', 'Гланая страница')

@section('content')
    <div class="px-4 py-5 text-center mainContent">
        <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="display-5 fw-bold text-white ">WTGames</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 text-white">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
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
                            <small>Epic Games Store</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="p-5 text-center mainContent">
        <div class="container py-5">
            <h1 class="text-white">Full-width jumbotron</h1>
            <p class="col-lg-8 mx-auto lead text-white">
                This takes the basic jumbotron above and makes its background edge-to-edge with a inside to align content. Similar to above, it's been recreated with built-in grid and utility classes.
            </p>
        </div>
    </div>


    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom text-white">Наши примущества</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
                </div>
                <div>
                    <h3 class="fs-2 text-white">Featured title</h3>
                    <p class="text-white">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
                </div>
                <div>
                    <h3 class="fs-2 text-white">Featured title</h3>
                    <p class="text-white">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
                </div>
                <div>
                    <h3 class="fs-2 text-white">Featured title</h3>
                    <p class="text-white">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

