<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1, maximum-scale=1, initial-scale=1" />
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta name="author" content="">
    <title>
        <?php bloginfo('name');?>
        <?php wp_title();?>
    </title>

    <script src="<?php bloginfo('template_url');?>"></script>
    <?php wp_head();?>
</head>

<body id="body-area">

    <nav>
        <div class="nav-area">
            <div class="nav-container">
                <div class="nav-logo">
                    <a href="<?php echo site_url('/'); ?>" class="link-logo">
                        <img src="<?php bloginfo('template_url');?>/assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li class="menu-list"><a class="menu-link" href="#expertise">Expertise</a></li>
                        <li class="menu-list"><a class="menu-link" href="#tecala">Why Tecala</a></li>
                        <li class="menu-list"><a class="menu-link" href="#outcomes">Business Outcomes</a></li>
                        <li class="menu-list"><a class="menu-call" href="tel:1300">Call 1300 TECALA</a></li>
                        <li class="menu-list"><a class="menu-contact" href="">CONTACT US</a></li>
                    </ul>
                </div>
                <div id="menu-icon" class="nav-menu-sp sp">
                    <div class="icon-set">
                        <a class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="slideout-menu">
        <ul>
            <li class="menu-list">
                <a class="menu-link" href="#expertise" onclick="closeNavSp()">Expertise</a>
            </li>
            <li class="menu-list">
                <a class="menu-link" href="#tecala" onclick="closeNavSp()">Why Tecala </a>
            </li>
            <li class="menu-list">
                <a class="menu-link" href="#outcomes" onclick="closeNavSp()">Business Outcomes</a>
            </li>
            <li>
                <a class="menu-call" href="tel:1300">Call 1300 TECALA</a>
            </li>
            <li>
                <a class="menu-contact" href="<?php echo site_url('/'); ?>">CONTACT US</a>
            </li>
        </ul>
    </div>