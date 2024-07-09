<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProTelo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> data-bs-theme="light">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Title -->
    <title>Азбука труда &amp; Аутсорсинг</title>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(97437380, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/97437380" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- NAVBAR -->
<nav class="navbar bg-dark navbar-expand-lg  fixed-top" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo" width="60"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-bs-theme="dark">
            <span class="navbar-toggler-icon bi bi-list text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo esc_url( home_url( '/' ) ); ?>">Главное</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>about-us">О компании</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>servise">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>category/hr/">Вакансии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>category/news/">Новости</a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Отзывы</a>-->
<!--                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Контакты</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="tel:+79219030828" class="btn btn-outline-primary">+7 (921) 903-08-28</a>
                <a href="" class="btn btn-primary ms-2"><i class="bi bi-whatsapp"></i></a>
                <a href="" class="btn btn-primary ms-2"><i class="bi bi-telegram"></i></a>
                <a href="mailto:sales@avantaj.spb.ru" class="btn btn-primary ms-2"><i class="bi bi-envelope"></i></a>
<!--                <a href="" class="btn btn-primary ms-2"><i class="bi bi-moon-stars"></i></a>-->
            </div>
        </div>
    </div>
</nav>
