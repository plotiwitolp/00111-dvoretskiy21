<?php

/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package transportex
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-72745416-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-72745416-1');
    </script>
    <meta name="google-site-verification" content="v-T_TA96WK78SEkeE6oXhVph1NC28D769C6Cg_hNY_c" />
    <meta name="yandex-verification" content="a92246923df35144" />
    <meta name='wmail-verification' content='558ba2bd5d9eef8a190f6aa63a0b23ba' />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>

    <link rel="icon" href="https://xn--21-dlchgshg8au1e.xn--p1ai/wp-content/uploads/2021/06/favicon.jpg" type="image/x-icon">
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <div class="wrapper">
            <!-- header styles  -->
            <style>
                .jc-dot {
                    background-color: #1c87c9;
                    -webkit-border-radius: 50%;
                    border-radius: 50%;
                    color: #eeeeee;
                    display: inline-block;
                    padding: 3px;
                    text-align: center;
                    text-decoration: none;
                }

                @keyframes glowing {
                    0% {
                        background-color: #66be00;
                        box-shadow: 0 0 5px #66be00;
                    }

                    50% {
                        background-color: #49e819;
                        box-shadow: 0 0 20px #49e819;
                    }

                    100% {
                        background-color: #66be00;
                        box-shadow: 0 0 5px #66be00;
                    }
                }

                .jc-dot {
                    animation: glowing 1300ms infinite;
                }

                .fa-calculator:before {
                    content: "\f1ec";
                    color: #74c242;
                }

                p.phone {
                    font-size: 18px !important;
                    margin-top: 12px;
                    font-weight: 600;
                }

                p.socials {
                    display: flex;
                    justify-content: space-around;
                }

                p.socials i {
                    font-size: 30px;
                    margin: 3px 5px;
                }

                .jc-dot_pos1,
                .jc-dot_pos2 {
                    position: absolute;
                }

                .jc-dot_pos1 {
                    top: 6px;
                    left: -12px;
                }

                .jc-dot_pos2 {
                    top: 5px;
                    left: 6px;
                }

                p.socials a {
                    color: #000;
                }

                p.calculation a {
                    color: #66be00;
                }

                p.calculation a:hover {
                    color: #66be00;
                }

                .container-wide {
                    width: 1380px;
                    margin: 0 auto;
                }

                .navbar-wp {
                    background: #5baa00;
                }

                .header {
                    display: flex;
                    font-size: 15px;
                    line-height: 16px;
                    margin-bottom: 15px;
                }

                .header-right {
                    display: flex;
                    justify-content: space-between;
                    width: 100%;
                    padding-top: 40px;
                }

                .header-right__item {
                    margin-left: 50px;
                }

                .header-left {
                    display: flex;
                    flex-direction: column;
                    max-width: 185px;
                }

                .fa-telegram {
                    color: #00a2f2;
                }

                .fa-whatsapp {
                    color: #25d231;
                }

                .fa-vk {
                    color: #0077fe;
                }

                .navbar-brand .custom-logo {
                    padding: 5px 0 10px;
                }

                .technonikol_1 {
                    color: #c02235;
                }

                .technonikol_2 {
                    color: #54555a;
                }

                .domrf_1 {
                    color: #67a511;
                }

                .domrf_2 {
                    color: #2f444e;
                }

                .phone_time {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }

                .online_q,
                .phone_time {
                    position: relative;
                }

                .navbar-wp .navbar-nav>li>a {
                    color: #fff;
                    padding: 16px 20px;
                }

                nav.navbar.navbar-default.navbar-static-top.navbar-wp {
                    border-radius: 3px;
                }

                @media (max-width: 1024px) {
                    .header {
                        display: none;
                    }

                    .container-wide {
                        width: 100%;
                        margin: 0;
                    }
                }
            </style>

            <header>

                <div class="container-wide">
                    <div class="header">
                        <div class="header-left">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="https://xn--21-dlchgshg8au1e.xn--p1ai/" class="navbar-brand" rel="home" aria-current="page">
                                    <img width="153" height="73" src="https://xn--21-dlchgshg8au1e.xn--p1ai/wp-content/uploads/2018/01/logo.png" class="custom-logo" alt="логотип" decoding="async" title="Главная" />
                                </a>
                            </div>
                            <div class="descript">Строительная компания полного цикла в Чувашии</div>
                        </div>

                        <div class="header-right">

                            <div class="header-right__item">
                                <div class="wow animated flipInX">
                                    <p><span class="technonikol_1">DOM</span><span class="technonikol_2">TECHNONIKOL</span> - официальный партнер</p>
                                    <p><span class="domrf_1">ДОМ.РФ</span> аккредитованный подрядчик</p>
                                </div>
                            </div>

                            <div class="header-right__item">
                                <p class="calculation">
                                    <i class="fa fa-calculator"></i>
                                    <a href="#contact_form_pop" class="fancybox" target='_blank'>
                                        Отправить проект на расчет
                                    </a>
                                </p>
                            </div>

                            <div class="header-right__item online_q">
                                <i class="jc-dot jc-dot_pos1"></i>
                                <p>Задайте вопрос ONLINE</p>
                                <p class="socials">
                                    <a href="https://telegram.me/+79276683108" target="_blank">
                                        <i class="fa fa-telegram"></i>
                                    </a>
                                    <a href="https://wa.me/+79276683108" target="_blank">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                    <a href="https://vk.com/dvoretskiy21" target="_blank">
                                        <i class="fa fa-vk"></i>
                                    </a>
                                </p>
                            </div>

                            <div class="header-right__item phone_time">
                                <i class="jc-dot jc-dot_pos2"></i>
                                <p>ПН-ПТ 9:00 - 18:00 </p>
                                <p>СБ-ВС по записи</p>
                                <p class="phone">
                                    <i class="fa fa-phone"></i>
                                    8 (8352) 38-31-08
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="container-wide">
                    <div class="transportex-menu-full">
                        <nav class="navbar navbar-default navbar-static-top navbar-wp">
                            <!-- navbar-toggle -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-wp"> <span class="sr-only"><?php _e('Toggle Navigation', 'transportex'); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <!-- /navbar-toggle -->
                            <!-- Navigation -->

                            <div class="collapse navbar-collapse" id="navbar-wp">
                                <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'transportex_custom_navwalker::fallback', 'walker' => new transportex_custom_navwalker())); ?>
                                <!-- Right nav -->

                                <!-- /Right nav -->
                            </div>

                            <!-- /Navigation -->
                        </nav>
                    </div>
                </div>
            </header>
            <!-- #masthead -->