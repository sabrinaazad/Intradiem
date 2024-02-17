<?php 
header("Content-type: text/css; charset: UTF-8");

//Global variables
$baseColor = get_field('base_color', 'options');
$lightGray = get_field('light_gray', 'options');
$darkGray = get_field('dark_gray', 'options');

$primary = get_field('primary', 'options');
$secondary = get_field('secondary', 'options');
$tetriary = get_field('tetriary', 'options');
$quaternary = get_field('quaternary', 'options');

$topbarBG = get_field("topbar_background_color", "option");
$topbarColor = get_field("topbar_color", "options"); 

$footerBg = get_field ("footer_bg", "options");
$footerColor = get_field ("footer_color", "options");
?>

body {
    color:  <? echo $baseColor ?>;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    color: <? echo $primary ?>;
}
a {
    color: <? echo $baseColor ?>;
}
.subheading {
    color: <? echo $secondary ?>;
}
.btn-primary {	
	background-color: <? echo $primary ?>;
}
.btn-secondary {
    background-color: <? echo $secondary ?>; 
}


.topbar {
    background-color: <?php echo $topbarBG ?>;
}
.topbar .content .top-nav__drawer .top-nav li a {
    color: <? echo $topbarColor ?>;
}
.topbar .content .top-nav__drawer .top-nav li.btn a {
    color: <? echo $secondary ?>;
}
.hamburger-button__bar--top,
.hamburger-button__bar--middle,
.hamburger-button__bar--bottom {
    color: <? echo $primary ?>;
    background-color: <? echo $primary ?>;
}
.main-nav__drawer .primary-nav > li a {
    color: <? echo $baseColor ?>;
}
.main-nav__drawer .primary-nav > li.current-menu-item > a,
.main-nav__drawer .primary-nav > li.current-menu-ancestor > a {
    color: <? echo $primary ?>;
    border-bottom: 2px solid <? echo $primary ?>;
}
@media only screen and (min-width: 768px) {
    .main-nav__drawer .primary-nav .sub-menu {
        background-color: <? echo $secondary ?>;
    }
    .main-nav__drawer .primary-nav .sub-menu .current-menu-item > a {
        color: <? echo $primary ?>;
    }
    .main-nav .main-nav__wrapper .main-nav__drawer .primary-nav > li.menu-item-has-children .sub-menu a:hover {
        color: <? echo $primary ?>;
    }
}


.footer {
    background-color: <? echo $footerBg ?>;
    color: <? echo $footerColor ?>;
}
.footer a {
    color: <? echo $footerColor ?>;
}


.slick-slider .slick-dots li button:before {
    color: <? echo $tetriary ?>;
}
.slick-slider .slick-dots li.slick-active button:before {
    color: <? echo $primary ?>;
}


.main--archive .category li a,
.main--single .category li a,
.main--single .btn-back {
    color: <? echo $primary ?>;
}

.section--hero_banner {
    background-color: <? echo $quaternary ?>;
}