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

        <?php // esc_html_e( 'Skip to content', 'transportex' ); 
        ?>
        <div class="wrapper">
            <header class="transportex-trhead">
                <!--==================== Header ====================-->
                <div class="transportex-main-nav" style="display: none;">
                    <nav class="navbar navbar-default navbar-wp">
                        <div class="container">
                            <div class="navbar-header">
                                <!-- Logo -->
                                <?php
                                if (has_custom_logo()) {
                                    // Display the Custom Logo
                                    the_custom_logo();
                                } else { ?>
                                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?>
                                        <br>
                                        <span class="site-description"><?php echo  get_bloginfo('description', 'display'); ?></span>
                                    </a>
                                <?php } ?>
                                <!-- Logo -->
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#wp-navbar"> <span class="sr-only">
                                        <?php echo _e('Toggle Navigation', 'transportex'); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            </div>
                            <!-- /navbar-toggle -->

                            <!-- Navigation -->
                            <div class="collapse navbar-collapse" id="wp-navbar">
                                <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right', 'fallback_cb' => 'transportex_custom_navwalker::fallback', 'walker' => new transportex_custom_navwalker())); ?>
                            </div>
                            <!-- /Navigation -->
                        </div>
                    </nav>
                </div>
            </header>
            <!-- #masthead -->


            <header class="transportex-headwidget">
                <!--==================== TOP BAR ====================-->
                <div class="transportex-head-detail hidden-xs hidden-sm" style="display: none;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 col-sm-6">
                                <ul class="info-left">
                                    <?php
                                    $transportex_head_info_one = get_theme_mod('transportex_head_info_one', '<a><i class="fa fa-clock-o "></i>Open-Hours:10 am to 7pm</a>', 'transportex');
                                    $transportex_head_info_two = get_theme_mod('transportex_head_info_two', '<a href="mailto:info@themeicy.com" title="Mail Me"><i class="fa fa-envelope"></i> info@themeicy.com</a>', 'transportex');
                                    ?>
                                    <li><?php echo $transportex_head_info_one; ?></li>
                                    <li><?php echo $transportex_head_info_two; ?></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <?php if (has_nav_menu('social')) : ?>
                                    <nav class="transportex-social-navigation" role="navigation" aria-label="<?php _e('Footer Social Links Menu', 'transportex'); ?>">
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'social',
                                            'menu_class'     => 'social-links-menu info-right',
                                            'depth'          => 1,
                                            'link_before'    => '<span class="screen-reader-text">',
                                            'link_after'     => '</span>' . transportex_include_svg_icons(array('icon' => 'chain')),
                                        ));
                                        ?>
                                    </nav><!-- .social-navigation -->
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="transportex-nav-widget-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-4 text-center-xs">
                                <div class="navbar-header">
                                    <!-- Logo -->
                                    <?php
                                    if (has_custom_logo()) {
                                        // Display the Custom Logo
                                        the_custom_logo();
                                    } else { ?>
                                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?>
                                            <br>
                                            <span class="site-description"><?php echo  get_bloginfo('description', 'display'); ?></span>
                                        </a>
                                    <?php } ?>
                                    <!-- Logo -->
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-8">
                                <div class="header-widget">

                                    <!-- Строительная компания полного цикла в Чувашии -->
                                    <div class="col-md-2 col-sm-3 col-xs-6 hidden-sm hidden-xs">
                                        <div class="transportex-header-box wow animated flipInX">
                                            <div class="transportex-header-box-info">
                                                <p>Строительная компания полного цикла в Чувашии</p>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- DOM TECHNONIKOL - официальный партнер / ДОМ.РФ аккредитованный подрядчик -->
                                    <div class="col-md-2 col-sm-3 col-xs-6 hidden-sm hidden-xs">
                                        <div class="transportex-header-box wow animated flipInX">
                                            <div class="transportex-header-box-info">
                                                <p>DOM TECHNONIKOL - официальный партнер</p>
                                                <p>ДОМ.РФ аккредитованный подрядчик</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Отправить проект на расчет -->
                                    <div class="col-md-2 col-sm-3 col-xs-6 hidden-sm hidden-xs">
                                        <div class="transportex-header-box">
                                            <div class="transportex-header-box-info">
                                                <p class="calculation">
                                                    <a href="#contact_form_pop" class="fancybox" target='_blank'>
                                                        Отправить проект на расчет <i class="fa fa-calculator"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- animation dot -->
                                    <style>
                                        .jc-dot {
                                            background-color: #1c87c9;
                                            -webkit-border-radius: 50%;
                                            border-radius: 50%;
                                            color: #eeeeee;
                                            display: inline-block;
                                            padding: 5px;
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
                                    </style>



                                    <!-- Отправить проект на расчет -->
                                    <div class="col-md-2 col-sm-3 col-xs-6 hidden-sm hidden-xs">
                                        <div class="transportex-header-box">
                                            <div class="transportex-header-box-info">
                                                <p>Задайте вопрос ONLINE <i class="jc-dot"></i></p>
                                                <p>
                                                    <i class="fa fa-telegram" aria-hidden="true"></i>
                                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                                    <i class="fa fa-vk" aria-hidden="true"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>












                                    <!-- Аккредитованы ДОМ.РФ - ипотека стала доступной -->
                                    <div class="col-md-2 col-sm-3 col-xs-6 hidden-sm hidden-xs">
                                        <div class="transportex-header-box wow animated flipInX">
                                            <div class="transportex-header-box-icon">
                                                <?php $transportex_header_widget_one_icon = get_theme_mod('transportex_header_widget_one_icon', __('fa-phone', 'transportex'));
                                                if (!empty($transportex_header_widget_one_icon)) :
                                                    echo '<i class="fa ' . $transportex_header_widget_one_icon . '">' . '</i>';
                                                endif; ?>
                                            </div>
                                            <div class="transportex-header-box-info">
                                                <?php $transportex_header_widget_one_title = get_theme_mod('transportex_header_widget_one_title', __('Call Us:', 'transportex'));
                                                if (!empty($transportex_header_widget_one_title)) :
                                                    echo '<h4>' . $transportex_header_widget_one_title . '</h4>';
                                                endif; ?>
                                                <?php $transportex_header_widget_one_description = get_theme_mod('transportex_header_widget_one_description', __('1800-6666-8888', 'transportex'));
                                                if (!empty($transportex_header_widget_one_description)) :
                                                    echo '<p>' . $transportex_header_widget_one_description . '</p>';
                                                endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- DOM TECHNONIKOL - официальный партнер -->
                                    <div class="col-md-2 col-sm-3 col-xs-6 hidden-sm hidden-xs">
                                        <div class="transportex-header-box">
                                            <div class="transportex-header-box-icon">
                                                <?php $transportex_header_widget_two_icon = get_theme_mod('transportex_header_widget_two_icon', __('fa-envelope-o', 'transportex'));
                                                if (!empty($transportex_header_widget_two_icon)) :
                                                    echo '<i class="fa ' . $transportex_header_widget_two_icon . '">' . '</i>';
                                                endif; ?>
                                            </div>
                                            <div class="transportex-header-box-info">
                                                <?php $transportex_header_widget_two_title = get_theme_mod('transportex_header_widget_two_title', __('Email Us:', 'transportex'));
                                                if (!empty($transportex_header_widget_two_title)) :
                                                    echo '<h4>' . $transportex_header_widget_two_title . '</h4>';
                                                endif; ?>
                                                <?php $transportex_header_widget_two_description = get_theme_mod('transportex_header_widget_two_description', __('info@company.com', 'transportex'));
                                                if (!empty($transportex_header_widget_two_description)) :
                                                    echo '<p>' . $transportex_header_widget_two_description . '</p>';
                                                endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- телефон 8 (8352) 38-31-08 -->
                                    <div class="col-md-2 col-sm-6 col-xs-6 hidden-sm hidden-xs">
                                        <div class="transportex-header-box">
                                            <div class="transportex-header-box-icon">
                                                <?php $transportex_header_widget_three_icon = get_theme_mod('transportex_header_widget_three_icon', __('fa-clock-o', 'transportex'));
                                                if (!empty($transportex_header_widget_three_icon)) :
                                                    echo '<i class="fa ' . $transportex_header_widget_three_icon . '">' . '</i>';
                                                endif; ?>
                                            </div>
                                            <div class="transportex-header-box-info">
                                                <?php $transportex_header_widget_three_title = get_theme_mod('transportex_header_widget_three_title', __('Opening Time:', 'transportex'));
                                                if (!empty($transportex_header_widget_three_title)) :
                                                    echo '<h4>' . $transportex_header_widget_three_title . '</h4>';
                                                endif; ?>
                                                <?php $transportex_header_widget_three_description = get_theme_mod('transportex_header_widget_three_description', __('08:00 - 18:00', 'transportex'));
                                                if (!empty($transportex_header_widget_three_description)) :
                                                    echo '<p>' . $transportex_header_widget_three_description . '</p>';
                                                endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ЗАКАЗАТЬ ЗВОНОК -->
                                    <div class="col-md-2 col-sm-6 col-xs-12 hidden-sm hidden-xs">
                                        <div class="transportex-header-box wow animated flipInX text-right">
                                            <?php $transportex_header_widget_four_label = get_theme_mod('transportex_header_widget_four_label', __('Get a Quote', 'transportex'));
                                            $transportex_header_widget_four_link = get_theme_mod('transportex_header_widget_four_link', __('#contact_form_pop', 'transportex'));
                                            $transportex_header_widget_four_target = get_theme_mod('transportex_header_widget_four_target', __('true', 'transportex'));

                                            if (!empty($transportex_header_widget_four_label)) : ?>
                                                <a href="<?php echo $transportex_header_widget_four_link; ?>" <?php if ($transportex_header_widget_four_target == true) {
                                                                                                                    echo "target='_blank'";
                                                                                                                } ?> class="btn btn-theme fancybox"><?php echo $transportex_header_widget_four_label; ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
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