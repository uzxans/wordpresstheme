<?php
/*
Template Name: Home
*/

get_header();
?>
<header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" poster="<?php echo get_template_directory_uri(); ?>/assets/images/azbukatrudaBg.jpg">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/images/0510.mp4" type="video/mp4">
    </video>
    <!-- The header content -->
    <div class="container pt-5 h-100">
        <div class="d-flex flex-column justify-content-between h-100">
            <div class="col-md-12 disabled-3 text-white mt-5">
                <div class="my_nav_flex">
                    <img class="pt-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/logoNav.png" alt="logo"></h1>
                    <h1 class="pt-4 display-1  text-uppercase"  data-aos="fade-right"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">Азбука труда</h1>
                </div>
                <h4 class="text-uppercase">Аутсорсинг линейного персонала для вашего бизнеса</h4>
            </div>
            <div class="col-md-12 mb-2">
                <div class="row p-lg-4 p-md-2 rounded-3 text-white bg_header text-center my_row_mixin" data-aos="fade-up">
                    <div class="col-4">
                        <div class="mb-3">
                            <img class="svg_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ekonom.svg" alt="">
                        </div>
                        <h4 class="text-uppercase">Экономия времени</h4>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <img class="svg_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/legalnost.svg" alt="">
                        </div>
                        <h4 class="text-uppercase">Легальность</h4>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <img class="svg_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/resurs.svg" alt="">
                        </div>
                        <h4 class="text-uppercase">Экономия ресурсов</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="mb-5">
    <div class="container mt-5">
        <h1 class="text-center">Что такое аутсорсинг<br> и зачем он нужен бизнесу?</h1>
        <div class="row mt-5">
            <div class="col-12 col-md-6">
                <div class="img_box" data-aos="fade-right" >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6 px-lg-5" data-aos="fade-left">
                <p class="lead mb-4">Аутсорсинг рабочего персонала — это увеличение конкурентоспособности вашей компании на рынке за счет снижения финансовых издержек и налоговой нагрузки на содержание собственного штата предприятия.</p>
                <p class="lead">Крупные производственные процессы состоят из множества более мелких операций, делятся на специфические этапы. Чтобы не тратить время, ресурсы, средства на их обеспечение, головная компания сосредотачивается на основном производстве.</p>
            </div>
        </div>
    </div>
</section>

<!-- col-mee -->
<section class="bg-primary text-light pt-3 pb-4">
    <div class="container">
        <h1 class="text-center text-white" data-aos="fade-down">Получить комплесное предложение</h1>
        <div class="row w-75 mx-auto mt-3">
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="имя">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <button class="btn btn-light w-100">Заказать</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Endcol-mee -->

<section class="mb-5 bg-light pt-5 pb-4">
    <div class="container">
        <div class="row pt-5 pb-4">
            <div class="col-md-6">
                <h1 class="display-3 font" data-aos="fade-up-right">В чём преимущества</h1>
            </div>
            <div class="col-md-4 border-start border-primary border-3" data-aos="fade-down-left">
                <p class="lead fs-4">Мы перечислили основные плюсы аутсорсинга. Только честные факты и польза вашему бизнесу</p>
            </div>
        </div>

        <div class="row_bow mt-5 mb-5">

            <div class="item" data-aos="flip-left" data-aos-duration="1000">
                <div class="bg_img_etap">1</div>
                <div class="item_body">
                    <h4 class="text-primary">Решение конкретных задач</h4>
                    <p>За один заказ вы платите один раз. Всю «бумажную» работу мы берем на себя. Вам больше не придётся закапываться в отчетности</p>
                </div>
            </div>

            <div class="item" data-aos="flip-left" data-aos-duration="1500">
                <div class="bg_img_etap">2</div>
                <div class="item_body">
                    <h4 class="text-primary">Гибкое штатное расписание</h4>
                    <p>Мы можем варьировать количество людей по дням и даже по часам. С нами вы выйдите на новый уровень эффективности!</p>
                </div>
            </div>

            <div class="item" data-aos="flip-left" data-aos-duration="2100">
                <div class="bg_img_etap">3</div>
                <div class="item_body">
                    <h4 class="text-primary">Собственная CRM система</h4>
                    <p>О вакансии мгновенно узнают сотни потенциально заинтересованных в работе с вами людей. Нам остаётся лишь отобрать из них лучших для вас.</p>
                </div>
            </div>

            <div class="item" data-aos="flip-left" data-aos-duration="2600">
                <div class="bg_img_etap">4</div>
                <div class="item_body">
                    <h4 class="text-primary">Система контроля качества</h4>
                    <p>Мы нацелены на длительную работу, поэтому для нас важно ваше мнение. По итогу работы вы сможете оставить пожелания, которые мы применим в дальнейшей работе.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Servises -->
<section class="mb-5">
    <div class="container">
        <div data-aos="fade-up">
            <h1 class="text-center mb-2">Услуги и рабочие</h1>
            <p class="text-center fs-5 lead mb-5">Поможем быстро и качественно решить почти любую вашу задачу</p>
        </div>
        <div class="box_services">

            <div class="item_services" data-aos="fade-up" data-aos-duration="500">
                <div class="img_services">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gruzchik.jpg" alt="">
                </div>
                <div class="body_services">
                    <h3>Грузчики</h3>
                    <h4>от 200 руб/час</h4>
                    <p>
                        Разгружаем фуры супермаркетов, поднимаем материал на стройке, переносим тяжелое оборудование, помогаем с переездом и везде, где нужна физическая сила.
                    </p>
                </div>
                <button data-title="Грузчики" type="button" class="btn btn-primary t_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Заказать грузчиков</button>
            </div>

            <div class="item_services" data-aos="fade-up" data-aos-duration="1000">
                <div class="img_services">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/raznarabochiy.jpg" alt="">
                </div>
                <div class="body_services">
                    <h3>Разнорабочие</h3>
                    <h4>от 200 руб/час</h4>
                    <p>
                        Поможем упаковать, отсортировать, перенести, поднять, опустить товар. Работаем на стройках, складах, магазинах и везде, где потребуется наша помощь.
                    </p>
                </div>
                <button data-title="Разнорабочие" type="button" class="btn btn-primary t_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Заказать рабочих</button>
            </div>

            <div class="item_services" data-aos="fade-up" data-aos-duration="1500">
                <div class="img_services">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/podsobiy.png" alt="">
                </div>
                <div class="body_services">
                    <h3>Подсобные рабочие</h3>
                    <h4>от 200 руб/час</h4>
                    <p>
                        Пригодимся при срочном ремонте, строительстве, для земельных работ и уборки снега. Выполняем демонтажные и отделочные работы в сжатые сроки.
                    </p>
                </div>
                <button data-title="Подсобные рабочие" type="button" class="btn btn-primary t_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Заказать подсобников</button>
            </div>

        </div>
    </div>
</section>


<!-- etapi raboti -->
<section class="bt-5 bg-light pt-5 pb-4">
    <div class="container">
        <h1 class="text-center mb-5">Этапы работы</h1>

        <div class="row bg-primary p-5 text-white rounded-1 mb-5 border_my">
            <div class="col-md-4" data-aos="fade-right">
                <h3>Вы оставляете заявку</h3>
                <p class="lead">Заполните форму или позвоните нам: <a style="color: white;" href="tel:+79312208619">+7 (931) 220-86-19</a>. Наш менеджер свяжется с вами, чтобы обсудить все детали задачи, стоимость и сроки выполнения.</p>
            </div>
            <div class="col-md-4" data-aos="fade-right" data-aos-duration="600">
                <h3>Мы формируем бригаду</h3>
                <p class="lead">Каждый работник подбирается исходя из особенностей вашей задачи. За контроль рабочего процесса и результат отвечает опытный бригадир.</p>
            </div>
            <div class="col-md-4" data-aos="fade-right" data-aos-duration="900">
                <h3>И сдаем работу в срок</h3>
                <p class="lead">Мы проверяем результаты работы. Затем подписываем акт выполненных работ, чтобы закрыть все возможные юридические вопросы.</p>
            </div>
        </div>
    </div>
</section>

<!-- рекомендуют -->
<section class="mb-5 bg-primary pt-5 pb-4 text-white">
    <div class="container">
        <h1 class="text-center mb-5 text-white">Компанию Azbuka-Truda рекомендуют</h1>
        <div class="d_my_flex">
            <img data-aos="flip-left" data-aos-duration="600" class="img-fluid" src="https://thumb.tildacdn.com/tild6435-3866-4364-b832-316134623366/-/format/webp/Untitled-1.jpg" alt="">
            <img data-aos="flip-left" data-aos-duration="800" class="img-fluid" src="https://thumb.tildacdn.com/tild6435-3866-4364-b832-316134623366/-/format/webp/Untitled-1.jpg" alt="">
            <img data-aos="flip-left" data-aos-duration="1000" class="img-fluid" src="https://thumb.tildacdn.com/tild6435-3866-4364-b832-316134623366/-/format/webp/Untitled-1.jpg" alt="">
        </div>
    </div>
</section>

<!-- Наши клиенты -->
<section class="pt-5 pb-4">
    <div class="container">
        <h1 class="text-center mb-3">Наши клиенты</h1>
        <p class="text-center lead mb-5">Мы поможем сэкономить ваши деньги, время и человеческие ресурсы</p>
        <div class="row mp-5">
            <div class="col-md-3 mb-3" data-aos="zoom-in">
                <div class="card text-bg-dark table-hover">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-cart.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h4 class="card-title">Промышленные<br> предприятия</h4>
                        <p class="card-text">Уберем мусор с территории, поможем на производственной линии или разгрузим материалы</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3" data-aos="zoom-in" data-aos-duration="600">
                <div class="card text-bg-dark table-hover">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg_cart2.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h4 class="card-title">Производства, заводы и склады</h4>
                        <p class="card-text">Подготовим бригаду для упаковки, фасовки и перемещения товара по складу и другим объектам</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3" data-aos="zoom-in" data-aos-duration="800">
                <div class="card text-bg-dark table-hover">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg_cart3.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h4 class="card-title">Строительные<br> организации</h4>
                        <p class="card-text">Разгрузим мешки, поднимем на этаж окна, очистим территорию объекта, вывезем землю с участка</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3" data-aos="zoom-in" data-aos-duration="1000">
                <div class="card text-bg-dark table-hover">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg_cart4.webp" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h4 class="card-title">Торговые комплексы<br> и магазины</h4>
                        <p class="card-text">Разгрузим фуру с продуктами, расставим товар на полки, проследим за чистотой супермаркета</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- accardion -->
<section class="pt-5 pb-4 mt-5">
    <div class="container">
        <h1 class="text-center mb-3" data-aos="fade-up" data-aos-duration="500">Часто задаваемые вопросы</h1>
        <p class="text-center lead mb-5">Если вы хотите задать вопрос, позвоните нам по номеру телефона
            <a class="text-decoration-none" href="tel:903-08-28">903-08-28</a> и мы постараемся вам помочь!</p>

        <div class="accordion mb-5" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Как быстро смогут приехать ваши рабочие?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <p>Мы не занимаемся «срочным предоставлением двух грузчиков для подъема пианино». Наш профиль — длительное сотрудничество с корпоративными клиентами (компаниями). При этом по запросу наших клиентов мы можем оперативно предоставлять большое количество персонала. Наш рекорд — 60 человек через 4 часа после звонка клиента. Такая скорость подбора обеспечивается IT-системой собственной разработки.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Кто отвечает за работников?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p>Фактическим работодателем является наша компания, мы отвечаем за наших сотрудников, в том числе делаем отчисления за сотрудников согласно трудовому законодательству РФ.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Вы материально ответственны?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p>Да согласно договору наши работники несут полную материальную ответственность.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Как производится расчет при работе с вами?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p>Мы работаем как по наличной, так и по безналичной оплате.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
