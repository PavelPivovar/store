@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-16">
                <div class="card">
                    <div class="card-header"><a  href="{{ url('home') }}">Главная</a> / О нас </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class="about_wrapper">
                                <h1>О компании</h1>
                                <p><span style="color: #0095ff;">Компьютеры из Европы</span> &mdash; торговая марка <span style="color: #0095ff;">EuroPC<sup>&reg;</sup>&trade;</span> - компания, работающая с 2004 года на украинском оптовом и розничном рынке компьютерной техники. Мы предлагаем компьютеры, мониторы, ноутбуки, принтеры отработавшие по договору лизинга в Европейских странах <span style="color: #0095ff;">от 3-х месяцев до 2-х лет</span></p>
                                <p>Вся техника ведущих брендов <span style="color: #0095ff;">HP, DELL, LENOVO, IBM, APPLE, Fujitsu, Xerox</span> поставляется в крупные Европейские компании напрямую производителем. Условия и срок єксплуатаци прописанные в договоре о лизинге четко соблюдаются. Т.е. замена техники происходит в плановом режиме, а не из за технического или "морального" износа. В итоге наш клиент получает компьютеры выполняющие все его задачи и в отличном техническом состоянии, как правило <span style="color: #0095ff;">на 30-50% дешевле</span> аналогичных "китайских самосборов" и <span style="color: #0095ff;">в разы дешевле</span>&nbsp; брендовых аналогов.</p>
                                <p>Работая <span style="color: #0095ff;">14 лет на рынке</span>, мы постоянно меняемся и развиваемся, стараемся улучшать сервис и качество нашей работы. Все начиналось с небольшого офиса в Киеве на Подоле, работа была направлена, по большей части, на розничную торговлю. Сегодня <span style="color: #0095ff;">Компьютеры из Европы</span>&nbsp;&mdash; крупная компания по продаже компьютерной б/у техники по всей Украине.</p>
                                <p>Качество сервиса и товаров &mdash; приоритет для нас. Мы предоставляем общую <span style="color: #0095ff;">гарантию на 6 месяцев</span> на любую позицию магазина и расширенную &mdash; <span style="color: #0095ff;">на 1 год</span>. 90% гарантийный случаев решаем в течение 1 рабочего дня.&nbsp;Для корпаративных клиентов &mdash; тестовые образцы предоставляем под гарантийное письмо.</p>
                                <p>Все позиции, представленные на сайте, &mdash; <span style="color: #0095ff;">всегда в наличии в нужном количестве</span>. Мы обеспечиваем полную комплектацию рабочих мест офисов, учебных классов, call-центров и торговых сетей. Доставка компьютерной техники и оборудования &mdash; по всей Украине. Киев, Запорожье и Днепр &mdash; с возможностью самовывоза из наших офисов. Доставку осуществляем <span style="color: #0095ff;">Новой Почтой, Delivery, ИнТайм, Гюнсел и Ночной Экспресс.</span></p>
                                <p>О нашей уровне и сервисе могут сказать отзывы о&nbsp;<span style="color: #0095ff;">EuroPC<sup>&reg;</sup>&trade;</span> наших клиентов. Репутация оправдана продуктивной и совестной работой всей команды. Как результат у нас почти <span style="color: #0095ff;">14000 FaceBook</span> клиентов-друзей и рейтинг <span style="color: #0095ff;">Google 4,7</span></p>
                                <p>Работа с <span style="color: #0095ff;">корпоративными клиентами</span> одно из приоритетных направлений компании&nbsp; <span style="color: #0095ff;">Компьютеры из Европы</span>&nbsp;. Мы предлагаем <span style="color: #0095ff;">специальные цены и условия</span>, сотрудничество по договору и коммуникацию с персональным менеджером. У нас огромный опыт в комплектации и обслуживани всех видов бизнес-клиентов. От небольших <span style="color: #0095ff;">офисов в 3-4 рабочих места</span> до торговых сетей, call центров, учебных классов охватывающих <span style="color: #0095ff;">множество филиалов по всей Украине.</span> Наша компания неоднократно участвовала и выигрывала <span style="color: #0095ff;">внутренние тендеры.</span> Также возможен вариант согласования плановых долгосрочных поставок <span style="color: #0095ff;">без предоплаты</span></p>
                                <p><span style="color: #0095ff;">С уважением, дружная команда EuroPC - Компьютеры из Европы !</span></p>
                                <p>&nbsp;</p>	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
