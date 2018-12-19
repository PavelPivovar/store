@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">Dashboard Главная</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="wrapper">
                            <div class="footer_links_block">
                                <div class="footer_links_title"><h2>Популярные категории</h2></div>
                                <a href="{{ route('laptops') }}" class="btn btn-danger">БУ Ноутбуки </a>
                                <a href="#" class="btn btn-warning">БУ Мониторы</a>
                                <a href="#" class="btn btn-primary">БУ Жесткие диски</a>
                                <a href="#" class="btn btn-primary">БУ Оперативная память</a>
                                <a href="#" class="btn btn-primary">Аксессуары</a>
                                <a href="#" class="btn btn-danger">БУ Игровые Ноутбуки</a>
                            </div>
                            <div class="catalog_text_block" style="padding-top: 0;margin-bottom: 60px">
                                <p><p style="text-align: justify;">БУ компьютеры &ndash; отличный вариант для решения многих рабочих и бытовых технических задач, так как ноутбуки, несмотря на стремительное развитие их технических характеристик, справляются не со всеми возложенными на них функциями.</p>
                                <h2>БУ компьютеры из Европы от EuroPC</h2>
                                <p style="text-align: justify;">Сегодня качественная, мощная и надёжная компьютерная техника стоит дорого. При этом, далеко не всегда магазины компьютерной техники гарантируют её качество. Если вы не желаете переплачивать за совсем неочевидные выгоды, предлагаем вашему вниманию БУ компьютеры из Европы.</p>
                                <p><strong>Фирменная компьютерная БУ техника из европейских стран заинтересует:</strong></p>
                                <ul>
                                    <li style="text-align: justify;">владельцев крупных предприятий и фирм средних размеров, которым нужно оборудовать офис компьютерами для решения стандартных задач;</li>
                                    <li style="text-align: justify;">фрилансеров, которым необходим мощный стационарный компьютер для работы (например, для лиц, которые зарабатывают видеомонтажом или фотосъёмками);</li>
                                    <li style="text-align: justify;">геймеров, что ищут игровые компьютеры по разумной цене;</li>
                                    <li style="text-align: justify;">обычных пользователей ПК, что хотят приобрести недорогую, но функциональную технику.</li>
                                </ul>
                                <p style="text-align: justify;">В нашем каталоге представлена современная компьютерная техника из европейских стран. Для многих не является секретом, что многие производители электронно-вычислительной техники напрямую сотрудничают с крупными компаниями Европы. Офисы таких компаний оборудуются новыми компьютерами по договору лизинга сроком до двух лет. По истечению срока договора происходит плановая замена всей техники. В нашем каталоге представлены фирменные БУ компьютеры популярных брендов, что недолгое время эксплуатировались европейскими компаниями.</p>
                                <p style="text-align: justify;"><strong>БУ компьютеры из Европы</strong>, которые продаёт наш интернет-магазин, находятся в отличном техническом состоянии. Для наших клиентов мы придирчиво отбираем лучшие экземпляры, чтобы вы могли не просто сэкономить денежные средства, но и решить любые свои задачи. У наших специалистов имеются строгие критерии для отбора компьютерной техники. В магазин EuroPC поступает продукция:</p>
                                <ul style="text-align: justify;">
                                    <li>максимально новая и актуальная;</li>
                                    <li>без внутренних дефектов;</li>
                                    <li>с минимальным количеством внешних повреждений и царапин.</li>
                                </ul>
                                <p style="text-align: justify;">Мы настолько уверены в качестве нашей продукции, что предоставляем общую гарантию сроком в 6 месяцев на любой БУ компьютер из этого каталога. При желании, вы можете приобрести расширенную гарантию на 1 год.</p>
                                <h2 style="text-align: justify;">Преимущества БУ компьютеров</h2>
                                <p style="text-align: justify;">Многие считают, что вторичный рынок предлагает только устаревшую технику с плохими техническими характеристиками и скрытыми дефектами. На деле, это далеко не так. В нашем интернет-магазине вы можете купить БУ компьютеры из Европы, что отличаются достаточной мощностью для установки любых программ, с хорошими звуковыми и видеокартами, и большим объёмом встроенной памяти. Наши БУ десктопы отлично справляются с задачами, которые ставят пользователи ПК. У нас вы можете подобрать устройство:</p>
                                <ul style="text-align: justify;">
                                    <li>для работы с большими массивами данных;</li>
                                    <li>для работы в любой современной бухгалтерской программе;</li>
                                    <li>для работы в графических и видеоредакторах;</li>
                                    <li>для прохождения новейших видеоигр;</li>
                                    <li>для просмотра online-TV и видеофильмов;</li>
                                    <li>для общения в социальных сетях, в том числе, для проведения online трансляций.</li>
                                </ul>
                                <p style="text-align: justify;">Интернет магазины предлагают большой выбор новой компьютерной техники. Но наши БУ компьютеры из Европы имеют ряд преимуществ, что привлекают клиентов. Среди них:</p>
                                <ul>
                                    <li style="text-align: justify;">выгодная цена, что в несколько раз меньше стоимости новой электроники;</li>
                                    <li style="text-align: justify;">все устройства прошли проверку временем на скрытые дефекты и заводской брак;</li>
                                    <li style="text-align: justify;">техника, которую использовали в европейских компаниях, отличается хорошими характеристиками и высокими параметрами мощности;</li>
                                    <li style="text-align: justify;">на всех устройствах установлено полное программное обеспечение;</li>
                                    <li style="text-align: justify;">благодаря бережному использованию в офисах, десктопы имеют отличный внешний вид и длительный срок эксплуатации.</li>
                                </ul>
                                <h2>Как оценивается БУ компьютерная техника</h2>
                                <p style="text-align: justify;">Если вы всерьёз задумываетесь о приобретении подержанного десктопа из заграницы, вас наверняка заинтересует следующая информация. Цены на БУ вычислительную технику из Европы формируются исходя из многих факторов. Среди них - техническое и физическое состояние ПК. Компьютеры, как и любое устройство, побывавшее в эксплуатации, разделяют на категории:</p>
                                <ul style="text-align: justify;">
                                    <li>A;</li>
                                    <li>B;</li>
                                    <li>C.</li>
                                </ul>
                                <p style="text-align: justify;">Десктопы первой категории никогда не разбирались, не бывали в ремонтных мастерских и не имеют никаких повреждений корпуса. Техника второй категории имеет небольшие дефекты в виде малозаметных царапин. На корпусе устройств, причисленных к третьей категории, имеются более глубокие царапины или потёртости. Чем выше категория БУ компьютерной техники, тем больше её стоимость.</p>
                                <p style="text-align: justify;">Стоит заметить, что внешний вид продукции, представленной в нашем каталоге, никак не сказывается на её функциональности. Мы тщательно проверяем начинку электроники, и гарантируем, что наши десктопы в отличном рабочем состоянии и полностью соответствуют заявленным в карточке товара характеристикам.</p>
                                <h2>Компьютеры БУ - купить в Киеве в один клик</h2>
                                <p style="text-align: justify;">Приобрести компьютерную технику из заграницы &ndash; это выгодное решение, а в нашем онлайн-магазине это можно сделать в один клик мышки. Чтобы оформить заказ, просто воспользуйтесь корзиной, или свяжитесь с нами по указанному на сайте номеру телефона.</p>
                                <p style="text-align: justify;">Интернет магазин EuroPC предлагает большой выбор компьютерной БУ техники из европейских стран. У нас вы найдёте:</p>
                                <ul style="text-align: justify;">
                                    <li>игровые компьютеры;</li>
                                    <li>устройства для оборудования офисов;</li>
                                    <li>домашние десктопы.</li>
                                </ul>
                                <p style="text-align: justify;">К каждой модели есть подробное описание, с указанием всех характеристик и особенностей. Дополнительное преимущество нашего магазина &ndash; мы предоставляем нашим клиентам 15 дней на тестирование приобретённого товара.</p>
                                <p style="text-align: justify;">Каждый клиент нашей компании получает максимум внимания, отличный сервис и индивидуальный подход. У нас действует гибкая система оплаты. С нами можно рассчитаться наличными (в городе Киев), или оформить рассрочку. Для оптовых покупателей БУ компьютеров действует система скидок, также мы нередко устраиваем акции для всех клиентов. Доставку заказа осуществляют лучшие компании &ndash; перевозчики Украины, среди которых Новая Почта, Delivery, ИнТайм.</p></p>
                            </div>
                        </div>

                        <!-- footer -->


                                <div class="footer_links_block">
                                    <div class="footer_links_title">Покупателям</div>
                                    <a href="#" class="footer_link">Акции</a>
                                    <a href="#" class="footer_link">Уценка</a>
                                    <a href="#" class="footer_link">О нас</a>
                                    <a href="#" class="footer_link">Контакты</a>
                                    <a href="#" class="footer_link">Прайс</a>

                                </div>


                            </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
