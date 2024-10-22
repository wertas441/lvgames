@extends('layouts.app')

@section('title', 'Гарантии')

@section('content')
    <div class="mainContent">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5 mt-1" style="height: 510px">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{asset('images/bf4icon.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Low Prices" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Выгодные Цены</h1>
                    <p class="lead text-white">
                        В нашем магазине вы найдете игры по конкурентоспособным ценам, благодаря сотрудничеству с официальными дистрибьюторами и издателями. Мы постоянно проводим акции и распродажи, чтобы каждый мог приобрести любимые игры дешевле. От блокбастеров до инди-проектов — каждый найдет что-то по душе.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5" style="height: 589px">
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Круглосуточная Поддержка</h1>
                <p class="lead text-white">
                    Мы понимаем, как важно быстро получить помощь в непредвиденных ситуациях, поэтому наша служба поддержки работает 24/7. В любое время суток вы можете связаться с нами через чат или электронную почту. Наши специалисты помогут решить любые проблемы: от вопросов по оплате и активации ключей до консультаций по ассортименту.
                </p>
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{asset('images/witchericon.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="24/7 Support" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>

    <div class="mainContent">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5" style="height: 589px">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{asset('images/watchicon.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Secure Payment" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Безопасные Платежи</h1>
                    <p class="lead text-white">
                        Мы заботимся о безопасности каждой вашей покупки. Наш магазин использует современные технологии шифрования для защиты персональных данных и гарантирует безопасность всех транзакций. Мы работаем только с проверенными платежными системами и банками, что исключает риск мошенничества. Вся информация о ваших платежах строго конфиденциальна.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5" style="height: 589px">
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Моментальная Доставка</h1>
                <p class="lead text-white">
                    Забудьте о длительном ожидании! Как только ваш платеж будет подтвержден, мы мгновенно отправим ключи активации на указанную электронную почту. Это позволит вам сразу же начать загрузку или установку игры без задержек. Независимо от времени суток или объема заказов, все процессы доставки автоматизированы, чтобы вы могли наслаждаться своими покупками максимально быстро.
                </p>
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{asset('images/asasinicon.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Instant Delivery" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>





@endsection
