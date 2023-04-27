<?php

header("Content-type: text/css; charset: UTF-8");

$configFilePath = "../../bp_config/site-info.php";

if (file_exists($configFilePath )) {
   require_once $configFilePath;
}else{
echo 'General configuration error';
}

$bannerBackgroundImage='../../img/'.$pageConfig['hero_section_bg_image'];
$aboutSectionBackgroundImage='../../img/'.$pageConfig['about_section_bg_image'];
$contactSectionBackgroundImage='../../img/'.$pageConfig['contact_section_bg_image'];
$productSectionBackgroundImage='../../img/'.$pageConfig['product_section_bg_image'];
$ctaSectionBackgroundImage='../../img/'.$pageConfig['cta_section_bg_image'];
?>

:root {
  --banner-background-image : url(<?php echo $bannerBackgroundImage ?>);
  --about-section-background-image : url(<?php echo $aboutSectionBackgroundImage ?>);
  --contact-section-background-image : url(<?php echo $contactSectionBackgroundImage ?>);
  --product-section-background-image : url(<?php echo $productSectionBackgroundImage ?>);
  --cta-section-background-image : url(<?php echo $ctaSectionBackgroundImage ?>);
}

/* @
        Table Of Contents
            
            Common CSS
              a Common CSS Classes
              b Theme Common CSS
            
            1 Header Section
            2 Hero Section
            3 Product Section
            4 About Section
            5 Contact Section
            6 Popular Products Section
            7 CTA Section
            8 Features Section
            9 Footer Section
            10 Product Page
            11 Related Products Section


 @*/

/* ===================================== */
/*         a Common CSS Classes          */
/* ===================================== */

.logo-bg-color {
  background-color: unset !important;
  color: #065193 !important;
}
.nav-active-color {
  color: var(--secondary_text_color) !important;
  background-color: var(--secondary) !important;
  backdrop-filter: brightness(80%);
}
.nav-color-bottom {
  background-color: var(--primary) !important;
}
.nav-txt-color-bottom {
  color: #fff !important;
}
.header_brand {
  font-size: 1.25rem !important;
}
.banner-bg-box-color::before {
  background-color: var(--primary) !important;
  opacity: 0.3 !important;
}
.banner-btn-color2 {
  background-color: var(--primary) !important;
  color: var(--primary_text_color) !important;
  border: 2px solid var(--primary) !important;
}
.banner-btn-color2:hover {
  background-color: var(--secondary) !important;
  color: var(--secondary_text_color) !important;
  border: 2px solid var(--secondary) !important;
}
.pdt-page-btn-color {
  color: #fff !important;
  background-color: var(--primary) !important;
  border: unset !important;
}
.pdt-page-btn-color:hover {
  color: #fff !important;
  background-color: var(--secondary) !important;
  border: unset !important;
}

/* Slider Buttons */
.about-btn-color {
  color: #fff !important;
  background-color: #222 !important;
}
.about-btn-color:hover {
  color: #fff !important;
  background-color: #065193 !important;
}
.product-block .shop-btn-color {
  background-color: var(--primary) !important;
  color: #222 !important;
  /* border-bottom: solid 1px transparent !important; */
  /* border: solid 1px var(--primary) !important; */
}
.product-block .shop-btn-color:hover {
  background-color: var(--secondary) !important;
  color: #fff !important;
  /* border-bottom: solid 1px transparent !important; */
  /* border: solid 1px var(--primary) !important; */
}
/* Overlays */
.left-overly:before {
  background-color: #000 !important;
  opacity: 0.9 !important;
}
.about-overlay:before {
  background-color: #000 !important;
  opacity: 0.6 !important;
}
.cta-overlay:before {
  background-color: var(--primary) !important;
  opacity: 0.7 !important;
}
.shop-overlay:before {
  background-color: #000 !important;
  opacity: 0.6 !important;
}
.pdt-overlay {
  background-color: #62626200 !important;
}
/* Overlays */
.about_section-color {
  color: #222 !important;
  background-color: #fff !important;
}
.about_section-color1 {
  color: var(--primary_text_color) !important;
  background-color: var(--primary) !important;
}
.about_section-color2 {
  color: #222 !important;
  background-color: #fff !important;
}
.about_section-color3 {
  color: var(--secondary_text_color) !important;
  background-color: var(--secondary) !important;
}
.about_section-icon-color {
  color: var(--primary) !important;
}
.about_section-icon-color1 {
  color: var(--primary_text_color) !important;
}
.about_section-icon-color2 {
  color: #222 !important;
}
.about_section-icon-color3 {
  color: var(--secondary_text_color) !important;
}
.about-bg-color {
  background-color: #f6f8fa !important;
}
.about-text-color {
  color: #fff !important;
}
.about-text-color-alt {
  color: #000 !important;
}
.about-btn-color {
  background-color: var(--primary) !important;
  color: #fff !important;
}
.cta-text {
  background-color: #222 !important;
  color: #fff !important;
}
.cta-text-alt {
  background-color: transparent !important;
  color: #fff !important;
}
.cta-btn-color {
  background-color: #f3283d !important;
  color: #fff !important;
}
/* Shop Colors */
.shop-section-color {
  color: #222 !important;
  background-color: #f9f9f9 !important;
}
.shop-subheading-color {
  color: #fff !important;
}
.shop-heading-color {
  color: #fff !important;
}
.shop-heading-color-alt {
  color: #1c1c24 !important;
}
.spacer.primary-background-color:before,
.footer-background-color h5:before {
  background-color: #ffffff !important;
}
.cart_bag {
  top: 60px !important;
  border: 1px solid #222 !important;
}
.cart_bag:before {
  border-bottom: 10px solid #222 !important;
}
.product-block .product-image::before {
  background: var(--primary) !important;
}

/* ===================================== */
/*          b Theme Common CSS           */
/* ===================================== */

/* Loader CSS */
#loadingMask {
  display: flex;
  justify-content: center;
  align-items: center;
}
#loadingMask img {
  max-width: 100px;
}
.my50 {
  margin-top: 50px !important;
  margin-bottom: 50px !important;
}
.mx50 {
  margin-left: 50px !important;
  margin-right: 50px !important;
}
.py50 {
  padding-top: 50px !important;
  padding-bottom: 50px !important;
}
.px50 {
  padding-left: 50px !important;
  padding-right: 50px !important;
}
html {
  scroll-behavior: smooth;
}
ul {
  list-style-type: none;
}
.navbar-toggler {
  box-shadow: none !important;
}
.spacer {
  margin: 0 0 1.563rem 0;
  width: 2.813rem;
  height: 2px;
}
a {
  text-decoration: none !important;
}

/* Banners Overly */
.banner {
  position: relative;
}
.banner:before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}

/* Footer Common CSS */
footer {
  padding: 4rem 0;
  font-weight: 300;
  font-size: 0.85rem;
}
footer .company-info .footer-logo {
  font-size: 1.5rem;
}
footer .company-info p {
  padding: 1rem 6rem 0 0;
  font-weight: 300;
}
footer ul {
  padding: 0;
  margin: 0;
  list-style: none;
}
footer ul li {
  padding-top: 0.5rem;
}
footer a {
  color: rgba(255, 255, 255, 0.8);
  text-decoration: none;
}
footer a:hover {
  color: #fff;
}
footer .copyright {
  border-top: solid 1px rgba(255, 255, 255, 0.1);
  border-bottom: solid 1px rgba(255, 255, 255, 0.1);
  padding: 1rem 0;
  margin-top: 5rem;
}

footer.footer5 {
  background-color: #086c99;
}
.footer-cc img {
  width: 50px;
}

/* =================================================== */
/* =================================================== */
/* ******           1 Header Section            ****** */
/* =================================================== */
/* =================================================== */

/* ===================================== */
/*         1.1 Header Section 1          */
/* ===================================== */

.header_section1 a.header_brand {
  padding: 1rem 0;
  display: inline-block;
  color: #111;
  font-weight: 700;
}
.header_section1 .topbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0.825rem 0;
  font-size: 0.75rem;
  background-color: #262626;
  color: #fff;
  text-transform: uppercase;
}
.header_section1 header {
  box-shadow: 0 0 5px 5px rgb(0 0 0 / 10%);
  position: relative;
}
.header_section1 header .navbar .navbar-nav .nav-link {
  color: #444;
  font-weight: 600;
  position: relative;
  padding: 1rem;
  transition: all 0.3s ease;
}
.header_section1 .topbar .nav-link:first-child {
  padding-left: 0;
}
.header_section1 .navbar-nav1 {
  padding-left: 1rem;
  border-left: solid 2px #eee;
}
.header_section1 .cart_amt {
  margin-left: 5px;
  margin-right: 0;
  position: relative;
  top: -3px;
  font-weight: 600;
}
.header_section1 .call-us .pht {
  color: #444;
  font-weight: 700;
  font-size: 1.25rem;
}
@media (max-width: 1200px) {
  .navbar-nav1 {
    padding-left: 1rem;
    font-size: 1rem;
  }
  .cart_bag:before {
    position: absolute;
    content: "";
    width: 0;
    height: 0;
    border-bottom: 10px solid #ffffff;
    border-top: 10px solid transparent;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    right: 45px;
    top: -20px;
    left: auto;
  }
  .header_section1 .cart_bag {
    right: 0;
    top: 80px;
  }
}
@media (max-width: 991px) {
  .header_section1 .menu-icon {
    width: 24px;
    position: relative;
    height: 18px;
    top: 2px;
    display: block;
  }
  .header_section1 .menu-icon::before {
    position: absolute;
    height: 2px;
    background-color: #000;
    content: "";
    left: 0;
    top: 0px;
    width: 100%;
  }
  .header_section1 .menu-icon span {
    background-color: #000;
    height: 2px;
    display: block;
    position: absolute;
    width: 100%;
    top: 50%;
    margin-top: -1px;
    left: 0;
  }
  .header_section1 .menu-icon::after {
    position: absolute;
    height: 2px;
    background-color: #000;
    content: "";
    left: 0;
    bottom: 0px;
    width: 100%;
  }
  .header_section1 .navbar-toggler:focus {
    box-shadow: unset;
  }
  .header_section1 header a.header_brand {
    width: 280px;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 1.1rem !important;
    font-weight: 700;
    margin-left: 0;
  }
}
@media (max-width: 767px) {
  .header_section1 a.header_brand {
    margin: 0;
  }
  .header_section1 .cart_link {
    display: none !important;
  }
}
.header_section1 .cart_link {
  font-weight: 600;
  position: relative;
}
.header_section1 .cart_link a {
  color: #444;
  font-size: 1rem;
}
.header_section1 .cart_link .btn.btn-update {
  color: #fff;
  background-color: #065193;
  border: 0;
}
.header_section1 .cart_bag {
  top: 30px;
  border: 1px solid #000000;
}

/* ===================================== */
/*        1.2 Header Section 2           */
/* ===================================== */

.header_section2 .topbar {
  padding: 0.825rem 0;
  font-size: 0.9rem;
  background-color: #262626;
}
.header_section2 header .header-top-bar {
  padding: 0.5rem 0;
  font-size: 0.85rem;
  background-color: #fff;
  color: #333;
  border-bottom: solid 1px #eee;
}
.header_section2 header .header-top-bar ul.top-bar-right li {
  position: relative;
}
.header_section2 header .header-top-bar ul.top-bar-right li::after {
  content: "|";
  color: #fff;
  margin: 0 14px;
  position: absolute;
  right: -15px;
  top: 7px;
}
.header_section2 header .header-top-bar ul.top-bar-right li:last-child::after {
  display: none;
}
.header_section2 header .header-top-bar a {
  color: #222;
}
.header_section2 header .header-top-bar a:hover {
  color: #111;
  opacity: 0.7;
}
.header_section2 header .logo {
  position: absolute;
  top: -5rem;
}
.header_section2 header a.header_brand {
  font-size: 1.5rem;
  font-weight: 700;
  color: #000;
}
.header_section2 header a.header_brand span {
  color: #222222;
}
.header_section2 header .navbar {
  padding: 1.25rem 0;
}
.header_section2 header .logo-icon {
  font-size: 1.563rem;
  width: 3.438rem;
  height: 3.438rem;
  padding: 0.5rem 0 0 0;
  margin: -0.675rem 0.875rem 0 0;
  display: block;
  color: #fff;
  text-align: center;
  -webkit-border-radius: 99%;
  -moz-border-radius: 99%;
  -o-border-radius: 99%;
  border-radius: 99%;
  position: relative;
  top: 4px;
}
.header_section2 header .header-content .header-icon {
  padding: 0.625rem 1.25rem;
}
.header_section2 header .header-content .header-icon strong {
  font-weight: 500;
  font-size: 0.85rem;
}
.header_section2 header .header-content .header-icon p {
  line-height: 1;
  font-size: 15px;
}
.header_section2 .primary-navigation .navbar {
  position: relative;
}
.header_section2 .primary-navigation .navbar-nav .nav-link.active,
.header_section2 .primary-navigation .navbar-nav .nav-link {
  color: #fff;
  padding: 1.25rem 2rem;
  font-size: 1.1rem;
  font-weight: 500;
}
.header_section2 .primary-navigation .navbar-nav.ms-auto .nav-link:last-child {
  padding-right: 0;
}
.header_section2 .primary-navigation .navbar-nav.ms-auto .nav-link {
  text-transform: none;
  font-weight: 400;
  font-size: 14px;
}
.header_section2 .nav-icon {
  display: none;
}
.header_section2 .primary-navigation {
  position: relative;
  z-index: 9;
}
.header_section2 .header-icon .far {
  color: #cc4452;
  position: relative;
  top: 1px;
}
.header_section2 .cart_link .btn.btn-update {
  color: #fff;
  background-color: #065193;
  border: 0;
}
.header_section2 .cart_bag {
  top: 38px;
}
.header_section2 .cart_amt {
  margin-left: 5px;
  margin-right: 0;
}
.header_section2 .icuser {
  position: relative;
  top: -1px;
}
@media (max-width: 991px) {
  .navbar-nav2 .cart-nav {
    padding: 1rem 0;
    width: 100%;
    text-align: center;
    display: none;
  }
  .header_section2 .menu-icon {
    width: 24px;
    position: relative;
    height: 18px;
    top: 2px;
    display: block;
  }
  .header_section2 .menu-icon::before {
    position: absolute;
    height: 2px;
    background-color: #000;
    content: "";
    left: 0;
    top: 0px;
    width: 100%;
  }
  .header_section2 .menu-icon span {
    background-color: #000;
    height: 2px;
    display: block;
    position: absolute;
    width: 100%;
    top: 50%;
    margin-top: -1px;
    left: 0;
  }
  .header_section2 .menu-icon::after {
    position: absolute;
    height: 2px;
    background-color: #000;
    content: "";
    left: 0;
    bottom: 0px;
    width: 100%;
  }
  .header_section2 .menu-icon {
    box-shadow: unset;
  }
}
/* ===================================== */
/*        1.3 Header Section 3           */
/* ===================================== */

.header_section3 .topbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0.4rem 0;
  font-size: 0.75rem;
  background-color: #262626;
  color: #fff;
}
.header_section3 .lang-right {
  font-size: 0.85rem;
}
.header_section3 a.header_brand {
  padding: 0.5rem 0 0.75rem 0;
  display: inline-block;
  color: #fff;
  font-weight: 600;
  font-size: 1rem;
  transition: all 0.3s ease;
}
.header_section3 header .navbar {
  transition: all 0.3s ease;
  padding: 8px 14px !important;
  padding-left: 0 !important;
}
.header_section3 header .navbar .navbar-nav .nav-item {
  padding-right: 1rem;
  padding-left: 1rem;
}
.header_section3 header .navbar .navbar-nav .nav-item:first-child {
  padding-left: 0;
}
.header_section3 header .navbar .navbar-nav .nav-link {
  color: #fff;
  font-weight: 500;
  position: relative;
  transition: all 0.1s ease;
  font-size: 1rem;
  padding: 10px 30px;
}
.header_section3 header .navbar .navbar-nav .nav-link:before {
  position: absolute;
  content: "";
  width: 100%;
  height: 0;
  background-color: #fff;
  left: 0;
  bottom: -6px;
  transition: all 0.1s ease;
}
.header_section3 header .navbar .navbar-nav .nav-link:hover:before,
.header_section3 header .navbar .navbar-nav .nav-link.active:before {
  height: 3px;
  bottom: -3px;
}
.header_section3 header .navbar.fixed-nav {
  box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);
}
.header_section3 .cart_link {
  font-weight: 400;
  position: relative;
  font-size: 1rem;
}
.header_section3 .cart_link .btn.btn-update {
  color: #fff;
  background-color: #065193;
  border: 0;
}
.header_section3 .cart_bag {
  right: 0;
  top: 40px;
}
.header_section3 .navbar-toggler-icon {
  display: flex;
  height: unset;
  width: unset;
}
.header_section3 .navbar-toggler {
  box-shadow: unset !important;
}

@media (max-width: 991px) {
  .header_section3 header .navbar .navbar-nav .nav-item {
    padding-left: 0;
  }
  .header_section3 header .navbar .navbar-nav .nav-link {
    padding: 1rem;
  }
  .header_section3 header .navbar {
    padding: 0 !important;
    margin: 0 !important;
  }
}
@media (max-width: 767px) {
  .header_section3 .navbar-nav.cart-nav {
    display: none !important;
  }
  .header_section3 .primary-navigation > .container > div {
    justify-content: space-between;
  }
}
/* ===================================== */
/*         1.4 Header Section 4           */
/* ===================================== */

.header_section4 header .header-top-bar {
  padding: 0.6rem 0;
  font-size: 0.9rem;
}
.header_section4 header a.header_brand {
  font-size: 1.15rem;
  font-weight: 800;
  color: #414141;
  text-transform: uppercase;
}
.header_section4 header .navbar {
  padding: 1.2rem 0;
}
.header_section4 header .header-content .header-icon {
  padding: 0.625rem 1.25rem;
}
.header_section4 header .header-content .header-icon p {
  line-height: 1;
  font-size: 15px;
}
.header_section4 .primary-navigation .navbar {
  position: relative;
}
.header_section4 .primary-navigation .navbar-nav .nav-link.active,
.header_section4 .primary-navigation .navbar-nav .nav-link {
  color: #fff;
  padding: 1.25rem 2rem;
  font-size: 1.063rem;
}
.header_section4 .primary-navigation {
  border-radius: 5px;
  overflow: hidden;
  position: relative;
  z-index: 9;
}
.nav-home .header_section4 .primary-navigation {
  margin-bottom: -2rem;
}
.header_section4 .header-icon .far {
  color: #065193;
  position: relative;
  top: 1px;
}
.header_section4 .fa-shopping-bag {
  font-size: 1.5rem !important;
}
.header_section4 .cart_link {
  font-weight: 600;
  position: relative;
}
.header_section4 .cart_link a {
  color: #444;
  font-size: 1rem;
}
.header_section4 .cart_link .btn.btn-update {
  color: #fff;
  background-color: #065193;
  border: 0;
}
.header_section4 .cart_bag {
  top: 55px;
  border: 1px solid #000;
}
@media (min-width: 991px) {
  .header_section4 button#toggle {
    display: none;
  }
}
/* ===================================== */
/*         1.5 Header Section 5           */
/* ===================================== */

.header_section5 .header-top-bar {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding: 0.8rem 0;
  font-size: 0.938rem;
  background-color: #333;
  color: #fff;
}
.header_section5 .header-top-bar ul.top-bar-right li {
  position: relative;
}
.header_section5 .header-top-bar a {
  color: #fff;
}
.header_section5 .header-top-bar ul.top-bar-right li::after {
  content: "/";
  color: #ccc;
  margin: 0 4px;
}
.header_section5 .header-top-bar ul.top-bar-right li:last-child::after {
  display: none;
}
.header_section5 header .logo {
  position: absolute;
  top: -5rem;
}
.header_section5 .top-text {
  font-size: 11px !important;
  line-height: 15px;
  letter-spacing: -0.025px;
  font-weight: 300;
}
.header_section5 .bottom-text {
  font-size: 14px !important;
  line-height: 15px;
  letter-spacing: -1.1px;
  font-weight: 600;
}
.header_section5 .cart_amt {
  margin: 0;
}
.header_section5 header a.header_brand {
  font-size: 0.8rem !important;
  font-weight: 700;
  color: inherit;
  padding: 36px;
  margin: 0;
}

.header_section5 header a.header_brand span {
  color: #424242;
}
.header_section5 header .navbar {
  padding: 0;
}
.header_section5 header .navbar > .row {
  height: 96px;
  margin: 0;
  padding: 0;
}
.header_section5 header .navbar > .row div.h-100 {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  padding: 0;
}
.header_section5 header .logo-icon {
  font-size: 1.563rem;
  width: 3.438rem;
  height: 3.438rem;
  padding: 0.5rem 0 0 0;
  margin: -0.675rem 0.875rem 0 0;
  display: block;
  color: #fff;
  text-align: center;
  -webkit-border-radius: 99%;
  -moz-border-radius: 99%;
  -o-border-radius: 99%;
  border-radius: 99%;
  position: relative;
  top: 4px;
}
.header_section5 .header-content {
  padding: 36px !important;
}
.header_section5 header .header-content .header-icon {
  padding: 0.625rem 1.25rem;
  border-right: 1px solid rgba(255, 255, 255, 0.298);
}
.header_section5 header .header-content .header-icon i {
  color: #065193;
}
.header_section5 header .header-content .header-icon strong {
  font-weight: 600;
  font-size: 1rem;
}
.header_section5 header .header-content .header-icon p {
  line-height: 1;
  font-size: 15px;
}
.header_section5 .primary-navigation .navbar {
  position: relative;
  background: unset;
  background-color: unset !important;
  border-top: unset;
  border-bottom: unset;
}
.header_section5 .primary-navigation .navbar-nav .nav-link.active,
.header_section5 .primary-navigation .navbar-nav .nav-link {
  color: #222;
  padding: 0.75rem 2rem;
  font-size: 14px;
  font-weight: 600 !important;
}

.header_section5 .nav-icon {
  display: none;
}
.header_section5 .primary-navigation {
  position: relative;
  z-index: 9;
}
.header_section5 .header-icon .far {
  color: #ff7906;
  position: relative;
  top: 1px;
}
.header_section5 .cart_text i {
  color: #999;
}
.header_section5 .cart_amt {
  color: #333;
  font-size: 1.25rem;
}
.header_section5 .cart_bag {
  top: 50px;
}
.header_section5 .cart_link .btn.btn-continue {
  color: #065193;
  border-color: #065193;
}
.header_section5 .cart_link .btn.btn-update {
  color: #fff;
  background-color: #065193;
  border: 0;
}
@media (max-width: 992px) {
  .header_section5 .primary-navigation {
    /* background: black !important; */
    left: 0 !important;
    position: absolute !important;
    top: 96px !important;
    right: 0 !important;
    text-align: center !important;
    z-index: 99 !important;
  }
}
@media (min-width: 991px) {
  .header_section5 button#toggle {
    display: none;
  }
}

/* ===================================== */
/*         1.6 Header Section 6           */
/* ===================================== */

.header_section6 {
  box-shadow: 0 0 12px 1px rgba(0, 0, 0, 0.2);
}
.header_section6 .container-fluid {
  padding-left: 15px;
  padding-right: 15px;
  max-width: 1720px;
}
.header_section6 .header-top-bar {
  height: 65px;
  font-size: 14px;
  line-height: 21px;
  font-weight: 400;
  display: flex !important;
  align-items: center !important;
}

.header_section6 .header-top-bar .topbar-box {
  display: flex;
  background: white;
  color: #065193;
  width: fit-content;
  padding: 7px 15px;
  border-radius: 5px;
  font-size: 14px;
  font-weight: 400;
}

.header_section6 .shop-btn {
  display: inline-block;
  color: #fff;
  padding: 8px 18px;
  border-radius: 5px;
  border: 1px solid var(--secondary);
}

.header_section6 .navbar {
  padding: 0;
  margin: 0;
}

.header_section6 .top-head {
  height: 91px;
  display: flex;
  justify-content: center;
  flex-direction: column;
}

.header_section6 .max-wid {
  border-top: 1px solid #f5f5f5;
  height: 91px;
  display: flex;
  align-items: center;
}

.header_section6 .primary-navigation .navbar-nav a.nav-link:before {
  position: absolute;
  content: "";
  width: 0;
  height: 1px;
  left: 0;
  right: 0;
  margin: auto;
  bottom: 23px;
  background-color: var(--secondary_text_color);
  -webkit-transition: 0.5s;
  transition: 0.5s;
}

.header_section6
  .primary-navigation
  .navbar-nav
  a.nav-link.nav-active-color:before {
  width: 35px;
}
.header_section6 .primary-navigation .navbar-nav a.nav-link:hover:before {
  width: 35px;
}

.header_section6 .header-top-bar ul.top-bar-right li {
  position: relative;
}

.header_section6 header .logo {
  position: absolute;
  top: -5rem;
}
.header_section6 header a.header_brand {
  font-size: 36px !important;
  line-height: 36px;
  font-weight: 500;
  padding: 0;
  margin: 0;
}
.header_section6 header a.header_brand span {
  color: #424242;
}
.header_section6 header .logo-icon {
  font-size: 1.563rem;
  width: 3.438rem;
  height: 3.438rem;
  padding: 0.5rem 0 0 0;
  margin: -0.675rem 0.875rem 0 0;
  display: block;
  color: #fff;
  text-align: center;
  -webkit-border-radius: 99%;
  -moz-border-radius: 99%;
  -o-border-radius: 99%;
  border-radius: 99%;
  position: relative;
  top: 4px;
}
.header_section6 header .header-content .header-icon {
  padding: 0.625rem 1.25rem;
  border-left: solid 1px rgba(0, 0, 0, 0.1);
}
.header_section6 header .header-content .header-icon i {
  color: #065193;
}
.header_section6 header .header-content .header-icon strong {
  font-weight: 600;
  font-size: 1rem;
}
.header_section6 header .header-content .header-icon p {
  line-height: 1;
  font-size: 15px;
}
.header_section6 .primary-navigation .navbar-nav .nav-link {
  color: #363636;
  padding: 25px;
  border-radius: 100px;
  font-size: 16px;
  line-height: 24px;
  font-weight: 600;
  transition: all 0.3s;
  text-transform: capitalize;
  margin: 0 0.25rem;
  position: relative;
}
.header_section6 .primary-navigation .navbar-nav .nav-link.active {
  background-color: #065193;
  border-radius: 2rem;
}
.header_section6 .nav-icon {
  display: none;
}
.header_section6 .primary-navigation {
  position: relative;
  z-index: 9;
}
.header_section6 .header-icon .far {
  color: #ff7906;
  position: relative;
  top: 1px;
}
.header_section6 .cart_amt {
  color: #333;
}
.header_section6 .cart_bag {
  top: 50px;
}
.header_section6 .cart_link .btn.btn-update {
  color: #fff;
  background-color: #065193;
  border: 0;
}
.nav-home .header_section6 header a.header_brand {
  color: #fff;
  font-weight: 700;
}
.nav-home .header_section6 .primary-navigation .navbar-nav .nav-link {
  color: #fff;
}
.nav-home .header_section6 .primary-navigation .navbar-nav .nav-link.active {
  background-color: #065193;
  border-radius: 2rem;
}
.header_section6 .cart_bag {
  border: 1px solid #000;
}
@media (max-width: 991px) {
  .header_section6 .header-top-bar .top-left {
    display: none !important;
  }
  .header_section6 .top-head {
    display: none !important;
  }
  .header_section6 .primary-navigation {
    position: absolute;
    top: 155px;
    left: 0;
    background: var(--primary);
    width: 100%;
  }
  .header_section6 .nav-text-color {
    color: var(--primary_text_color) !important;
  }
  .header_section6 #toggle i {
    color: var(--primary_text_color) !important;
  }
}
@media (min-width: 991px) {
  .header_section6 .alooo {
    display: none !important;
  }
  .header_section6 .alooo2 {
    width: 100% !important;
  }
  .header_section6 button#toggle {
    display: none;
  }
}

/* ===================================== */
/*         1.7 Header Section 7           */
/* ===================================== */

.header_section7 .navbar {
  height: 88px;
  background-color: #fff;
  color: black;
  padding: 0;
  position: relative;
  z-index: 100;
}

.header_section7 .navbar > div {
  height: 100%;
  padding: 0;
  display: flex;
  align-items: center;
}

.header_section7 .brand-name-box {
  min-width: 300px;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.header_section7 .brand-name-box.brand-name {
  background-color: var(--primary);
  color: var(--primary_text_color);
}
.header_section7 .brand-name-box.contact {
  background-color: var(--secondary);
  color: var(--secondary_text_color);
}

.header_section7 .navbar-nav a {
  color: #4a4c59;
}

.header_section7 .nav-menu {
  height: 100%;
  font-size: 1.2rem;
  font-weight: 500;
  line-height: 2.7rem;
}

.header_section7 .brand-name-box.cart {
  min-width: 150px;
  background-color: var(--primary);
  color: var(--primary_text_color);
}

.header_section7 .cart_amt {
  margin: 0 15px;
}

.minicart_buttons .btn-continue,
.minicart_buttons .btn-continue:hover {
  color: #333 !important;
}

/* Menu */

.header_section7 .nav-link.active {
  color: var(--primary);
}

.header_section7 #navbarSupportedContent .navbar-nav {
  text-align: center;
}

.header_section7 .cart ul {
  list-style: none;
  margin: auto;
  text-align: center;
}

.header_section7 .cart a {
  text-decoration: none;
}

.header_section7 .btn.btn-update {
  background-color: #065193 !important;
  border-color: #065193 !important;
  color: #fff !important;
}

.header_section7 .cart_link a.btn:nth-child(1) {
  color: #222 !important;
}

@media (max-width: 991px) {
  .header_section7 ul.navbar-nav {
    background-color: var(--primary) !important;
  }
  .header_section7 .nav-text-color {
    color: var(--primary_text_color) !important;
  }
  .header_section7 .nav-icon-color {
    color: var(--primary_text_color) !important;
  }
}
@media (max-width: 767px) {
  .header_section7 .brand-name-box {
    min-width: unset;
    width: 70%;
  }
  .header_section7 .navbar-nav a {
    margin: 0 !important;
  }
  .header_section7 .brand-name-box.cart {
    min-width: 100%;
    display: none !important;
  }
  .header_section7 .cart ul {
    padding-left: 0;
  }
  .header_section7 .brand-name-box.contact {
    width: 100%;
  }
}

/* ===================================== */
/*         1.8 Header Section 8           */
/* ===================================== */

.header_section8 .header-top-bar {
  height: 65px;
  font-size: 14px;
  line-height: 21px;
  font-weight: 400;
  display: flex !important;
  align-items: center !important;
}

.header_section8 .header-top-bar .topbar-box {
  display: flex;
  background: transparent;
  color: #c3c3c3;
  width: fit-content;
  padding: 7px 15px;
  border-radius: 5px;
  font-size: 14px;
  font-weight: 600;
}

.header_section8 header .logo {
  position: absolute;
  top: -5rem;
}
.header_section8 header a.header_brand {
  font-size: 1.75rem;
  font-weight: 700;
  color: #065193;
}
.header_section8 header a.header_brand span {
  color: #222222;
}
.header_section8 header .navbar {
  padding: 1.25rem 0;
}
.header_section8 header .logo-icon {
  font-size: 1.563rem;
  width: 3.438rem;
  height: 3.438rem;
  padding: 0.5rem 0 0 0;
  margin: -0.675rem 0.875rem 0 0;
  display: block;
  color: #fff;
  text-align: center;
  -webkit-border-radius: 99%;
  -moz-border-radius: 99%;
  -o-border-radius: 99%;
  border-radius: 99%;
  position: relative;
  top: 4px;
}
.header_section8 header .header-content .header-icon {
  padding: 0.625rem 1.25rem;
}
.header_section8 header .header-content .header-icon strong {
  font-weight: 500;
  font-size: 0.85rem;
}
.header_section8 header .header-content .header-icon p {
  line-height: 1;
  font-size: 15px;
}
.header_section8 .primary-navigation .navbar {
  position: relative;
}
.header_section8 .primary-navigation .navbar-nav .nav-item {
  border-right: solid 1px rgba(255, 255, 255, 0.2);
}
.header_section8 .primary-navigation .navbar-nav .nav-link.active,
.header_section8 .primary-navigation .navbar-nav .nav-link {
  color: #fff;
  padding: 1.25rem 2rem;
  font-size: 1rem;
  text-transform: uppercase;
  font-weight: 700;
}
.header_section8 .primary-navigation .navbar-nav.ms-auto .nav-link:last-child {
  padding-right: 0;
}
.header_section8 .primary-navigation .navbar-nav.ms-auto .nav-link {
  text-transform: none;
  font-weight: 400;
  font-size: 14px;
}
.header_section8 .nav-icon {
  display: none;
}
.header_section8 .primary-navigation {
  position: relative;
  z-index: 9;
}
.header_section8 .header-icon i {
  color: #065193;
  position: relative;
  top: 1px;
}
.header_section8 .navbar .header-icon .far {
  color: #065193;
}
.header_section8 h5 {
  margin: 0;
  font-weight: 400;
  font-size: 12px;
}

.header_section8 .cwp-contact-info-title {
  font-size: 20px;
  line-height: 32px;
  font-weight: 600;
}
.header_section8 .btn-primary,
.features_section4 .btn-primary {
  color: #fff;
  font-size: 1rem;
  -webkit-border-radius: 1.875rem;
  -moz-border-radius: 1.875rem;
  -o-border-radius: 1.875rem;
  border-radius: 1.875rem;
  padding: 0.875rem 2rem;
  display: inline-table;
  border: 2px solid transparent;
  line-height: 1;
  height: max-content;
  background-color: #065193;
}
.header_section8 .cart_link {
  font-weight: 700;
  position: relative;
}
.header_section8 .cart_link .btn.btn-update {
  color: #fff;
  background-color: #065193;
  border: 0;
}
.header_section8 .cart-nav {
  padding: 1.25rem;
  text-align: center;
}
.header_section8 .cart_amt {
  margin-right: 0;
}
.header_section8 .cart_bag {
  top: 38px;
}
@media (min-width: 991px) {
  .header_section8 button#toggle {
    display: none;
  }
}
@media (max-width: 991px) {
  .header_section8 .primary-navigation .navbar-nav .nav-item {
    border: unset !important;
    text-align: center;
  }
}

/* ===================================== */
/*         1.9 Header Section 9           */
/* ===================================== */

.header_section9 {
  box-shadow: 0 0 12px 1px rgba(0, 0, 0, 0.2);
}

.header_section9 .header-top-bar {
  height: 45px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  font-size: 12px;
  font-weight: 400;
  display: flex !important;
  align-items: center !important;
}

.header_section9 .top-head {
  height: 135px;
  display: flex;
  justify-content: center;
  flex-direction: column;
}

.header_section9 .max-wid {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  height: 60px;
  display: flex;
  align-items: center;
  width: 100% !important;
}

.header_section9 .primary-navigation .navbar-nav a.nav-link:before {
  position: absolute;
  content: "";
  width: 0;
  height: 1px;
  left: 0;
  right: 0;
  margin: auto;
  bottom: 10px;
  background-color: #fff;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}

.header_section9
  .primary-navigation
  .navbar-nav
  a.nav-link.nav-active-color:before {
  width: 35px;
}
.header_section9 .primary-navigation .navbar-nav a.nav-link:hover:before {
  width: 35px;
}

.header_section9 .header-top-bar ul.top-bar-right li {
  position: relative;
}

.header_section9 header a.header_brand {
  font-size: 36px !important;
  line-height: 36px;
  font-weight: 500;
  padding: 0;
  margin: 0;
}
.header_section9 .primary-navigation .navbar-nav .nav-link {
  padding: 10px 25px !important;
  font-size: 14px;
  line-height: 24px;
  font-weight: 600;
  transition: all 0.3s;
  text-transform: uppercase;
  margin: 0 0.25rem;
  position: relative;
}

.header_section9 .primary-navigation {
  position: relative;
  z-index: 9;
}
.header_section9 .cart_link {
  padding: 10px;
  border: 2px solid rgba(255, 255, 255, 0.1);
  border-radius: 3px;
}
.header_section9 .cart_link i.bucket {
  border-right: 1px solid rgba(255, 255, 255, 0.1);
  padding-right: 12px;
  margin-right: 12px;
}
.header_section9 .cart_link i.arrow {
  padding: 0 8px;
}
.header_section9 .cart_amt {
  font-size: 14px;
  line-height: 21px;
  font-weight: 500;
}
.header_section9 .cart_link .btn.btn-update {
  color: #fff;
  background-color: var(--primary);
  border: 0;
}
.header_section9 .right-header-btn {
  display: flex !important;
}
.header_section9 #toggle {
  display: none !important;
}

@media (max-width: 991px) {
  .header_section9 .top-head {
    height: 90px;
  }
  .header_section9 .alooo2 {
    justify-content: end !important;
  }
  .header_section9 #toggle div {
    background-color: #000 !important;
  }
  .header_section9 .mob-men {
    width: 100%;
    position: absolute;
    background: var(--primary);
    left: 0;
    right: 0;
    top: 90px;
    z-index: 100;
    padding: 30px 10px;
  }
  .header_section9 .nav-item {
    padding: 10px 0 !important;
  }
  .header_section9 #toggle[aria-expanded="false"] + .mob-men {
    display: none;
  }
  .header_section9 .bottom-header-container {
    display: flex;
    position: relative;
  }
  .header_section9 .right-header-btn {
    display: none !important;
  }
  .header_section9 .max-wid {
    background-color: unset !important;
  }
  .header_section9 #toggle {
    display: block !important;
  }
}
@media (min-width: 991px) {
  .header_section9 button#toggle {
    display: none;
  }
}

/* ===================================== */
/*       1.10 Header Section 10           */
/* ===================================== */

.header_section10 header {
  box-shadow: 0 0 5px 5px rgb(0 0 0 / 10%);
  position: relative;
}

/* Top Bar */
.header_section10 .topbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 42.5px;
  text-transform: capitalize;
  font-size: 14px;
  line-height: 19px;
  font-weight: 400;
  border-top: 3px solid var(--primary);
}
.header_section10 .list-inline-item {
  height: 100%;
  padding: 10px 25px;
  transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
}
.header_section10 .list-inline-item:hover {
  background-color: var(--primary) !important;
}
.header_section10 .list-inline-item:hover a {
  color: var(--primary_text_color) !important;
}
.header_section10 .topbar-cart {
  background-color: var(--primary);
  height: 100%;
  display: flex;
  align-items: center;
  padding: 10px 20px;
}
.header_section10 .cart_amt {
  margin-left: 5px;
  margin-right: 0;
  position: relative;
  font-weight: 400;
}
.header_section10 .btn.btn-update {
  background-color: var(--primary) !important;
  color: #fff !important;
  border: unset !important;
}

/* Main Nav */
.header_section10 nav.navbar {
  height: 129px;
  display: flex;
  align-items: center;
}
.header_section10 a.header_brand {
  padding: 1rem 0;
  display: inline-block;
  color: #111;
  font-weight: 700;
}

.header_section10 header .navbar .navbar-nav .nav-link {
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 1.3px;
  line-height: auto;
  text-transform: uppercase;
  position: relative;
  padding: 28px;
  transition: all 0.3s ease;
}

@media (max-width: 991px) {
  .header_section10 .list-inline-item {
    padding: 10px !important;
  }
  .header_section10 .contact-head {
    padding: 0px !important;
  }
  .header_section10 nav.navbar {
    height: 100px;
  }
  .header_section10 #navbarsExample03 {
    background: var(--primary);
    position: absolute;
    width: 100%;
    text-align: center;
    left: 0;
    right: 0;
    margin: auto;
    top: 100px;
    z-index: 99999999;
  }
  .header_section10 .nav-text-color {
    color: #fff !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.039);
  }
}

/* ===================================== */
/*       1.10 Header Section 11           */
/* ===================================== */

.header_section11 {
  z-index: 100;
  width: 100%;
  background: transparent !important;
  left: 0;
  right: 0;
  margin: auto;
}

.header_section11 .header-top-bar {
  height: 43px;
  font-size: 12px;
  line-height: 1.6;
  font-weight: 400;
  display: flex;
  align-items: center !important;
  padding: 0 40px;
}

.header_section11 .header-top-bar .row > div {
  padding: 0;
}

.header_section11 .top-head {
  height: 125px;
  display: flex;
  justify-content: center;
  flex-direction: column;
  padding: 20px 40px;
}

.header_section11 .top-head a.header_brand {
  font-size: 36px !important;
  line-height: 36px;
  font-weight: 500;
  padding: 0;
  margin: 0;
}

.header_section11 .top-head .shop-btn {
  display: flex;
  padding: 8px 18px;
  border-radius: 1px;
  border: 1px solid rgba(255, 255, 255, 0.1);
  align-items: center;
  transition: all 0.3s ease;
}

.header_section11 .top-head .navRight {
  font-size: 14px;
}
.header_section11 .top-head .navRight i {
  font-size: 16px;
}
.header_section11 .top-head .shop-btn:hover {
  color: var(--primary);
}
.header_section11 .top-head .header-cart {
  border: 1px solid rgba(255, 255, 255, 0.1);
  padding: 8px 18px;
  background-color: transparent;
}
.header_section11 .top-head .header-cart a {
  color: var(--primary) !important;
}

.header_section11 .top-head .header-cart .cart-icon {
  transition: all 0.3s ease;
}

.header_section11 .minicart_buttons a:last-child {
  background-color: var(--primary) !important;
  color: #fff !important;
  border-color: var(--primary);
}

.header_section11 .bottom-head {
  height: 61px;
  display: flex;
  align-items: center;
  background-color: var(--primary) !important;
}

.header_section11 .bottom-head .container-fluid {
  display: flex;
  height: 100%;
  width: 100%;
  align-items: center;
  padding: 0;
  margin: 0;
}

.header_section11 .bottom-head .row {
  display: flex;
  height: 100%;
  width: 100%;
  align-items: center;
  padding: 0;
  margin: 0;
}

.header_section11 .bottom-head .row > div {
  height: 100%;
  padding: 0;
  margin: 0;
}

.header_section11 .bottom-head .left-col {
  background-color: var(--secondary) !important;
}

.header_section11 .primary-navigation .navbar-nav .nav-link {
  color: #363636;
  padding: 18px;
  font-size: 16px;
  font-weight: 400;
  transition: all 0.3s;
  text-transform: capitalize;
  margin: 0 0.25rem;
  position: relative;
}

.header_section11 .bottom-head .right-col {
  display: flex;
  align-items: center;
  justify-content: center;
}

.header_section11 .bottom-head .right-col a {
  backdrop-filter: brightness(90%);
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
}
.header_section11 .bottom-head .right-col .left {
  color: var(--primary);
}

@media screen and (max-width: 991px) {
  .header_section11 {
    max-width: unset !important;
    padding: unset !important;
  }
  .header_section11 .primary-navigation {
    position: absolute;
    top: 61px;
    left: 0;
    right: 0;
    z-index: 100;
    background-color: var(--primary);
  }
  .header_section11 .primary-navigation li {
    padding: 10px 0;
  }
  .header_section11 .nav-text-color {
    color: var(--primary_text_color) !important;
  }
  .header_section11 #toggle i {
    color: var(--primary_text_color) !important;
  }
}
@media (min-width: 991px) {
  .header_section11 button#toggle {
    display: none;
  }
}

/* ===================================== */
/*       1.12 Header Section 12           */
/* ===================================== */

.header_section12 {
  height: 80px;
  max-width: 1920px;
  margin: auto;
  display: flex;
  align-items: center;
  width: 100%;
}
.header_section12 .navbar-nav12 {
  width: 100%;
  height: 100%;
  align-items: center;
}
.header_section12 .primary-navigation {
  position: relative;
  z-index: 9;
  height: 100%;
  width: 100%;
}
.header_section12 .primary-navigation .navbar {
  padding: 1.25rem 0;
  position: relative;
  height: 100%;
  font-size: 16px;
  line-height: 17.6px;
  font-weight: 400;
  text-transform: uppercase;
}
.header_section12 header a.header_brand {
  font-weight: 700;
}
.header_section12 .primary-navigation .navbar-nav .nav-link.active,
.header_section12 .primary-navigation .navbar-nav .nav-link {
  color: #fff;
  padding: 22px 30px;
}
.header_section12 .primary-navigation .navbar-nav.ms-auto .nav-link:last-child {
  padding-right: 0;
}
.header_section12 .primary-navigation .navbar-nav.ms-auto .nav-link {
  text-transform: none;
  font-weight: 400;
  font-size: 14px;
}
.header_section12 .minicart_buttons .btn-continue {
  border: 1px solid var(--primary);
}
.header_section12 .minicart_buttons .btn-update {
  border: 1px solid var(--primary);
  background-color: var(--primary);
  color: #fff;
}

@media screen and (max-width: 991px) {
  .header_section12 .primary-navigation {
    background-color: var(--primary);
    top: 0;
    margin: auto;
  }
  .header_section12 .header_brand {
    color: #222 !important;
  }
  .header_section12 ul.navbar-nav:nth-child(2) {
    margin-left: 15px;
  }
  .header_section12 #navbarsExample03 {
    position: absolute;
    background: var(--primary);
    width: 100%;
    margin: auto;
    left: 0;
    right: 0;
    top: 60px;
    text-align: center;
    padding: 25px 0;
    color: #fff !important;
  }
  .header_section12 .text-center {
    justify-content: start !important;
  }
  .header_section12 .w-100 {
    margin: unset !important;
  }
  .header_section12 .navbar-toggler-icon {
    display: flex !important;
    width: unset !important;
    height: unset !important;
  }
  .header_section12 .navbar-nav .nav-text-color {
    color: var(--primary_text_color) !important;
  }
}

/* ===================================== */
/*       1.13 Header Section 13           */
/* ===================================== */

.header_section13 {
  z-index: 100;
  width: 100%;
  background: transparent !important;
  left: 0;
  right: 0;
  margin: auto;
}
.header_section13 .header-top-bar {
  height: 41px;
  /* font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif; */
  font-size: 11px;
  line-height: 24px;
  font-weight: 600;
  text-transform: uppercase;
  display: flex;
  align-items: center !important;
  padding: 0;
  border-top: 3px solid var(--primary);
  border-bottom: 1px solid #e7e7e7;
}
.header_section13 .header-top-bar .row > div {
  padding: 0;
}
.header_section13 .top-head {
  height: 98px;
  display: flex;
  justify-content: center;
  flex-direction: column;
  padding: 20px 40px;
}

.header_section13 .top-head a.header_brand {
  font-size: 36px !important;
  line-height: 36px;
  font-weight: 500;
  padding: 0;
  margin: 0;
}

.header_section13 .top-head .header-icon {
  display: flex;
  justify-content: center;
  align-items: center;
}

.header_section13 .top-head .navRight {
  font-size: 14px;
}
.header_section13 .top-head .navRight i {
  font-size: 34px;
}
.header_section13 .top-head .top-text {
  font-weight: 600;
  font-size: 11px;
  line-height: 1.2;
  margin: 0 0 3px;
  opacity: 0.7;
}
.header_section13 .top-head .bottom-text {
  font-weight: 700;
  font-size: 18px;
  line-height: 0.9;
}
.header_section13 .top-head .header-cart .cart-icon {
  transition: all 0.3s ease;
}
.header_section13 .minicart_buttons a:last-child {
  background-color: var(--primary) !important;
  color: #fff !important;
  border-color: var(--primary);
}
.header_section13 .minicart_buttons a:last-child:hover {
  background-color: #fff !important;
  color: var(--primary) !important;
  border-color: var(--primary);
}
.header_section13 .minicart_buttons a:first-child {
  color: #000 !important;
}
.header_section13 .minicart_buttons a:first-child:hover {
  background-color: var(--primary) !important;
  color: #fff !important;
  border-color: var(--primary);
}

.header_section13 .bottom-head {
  height: 50px;
  display: flex;
  align-items: center;
}

.header_section13 .primary-navigation .navbar-nav .nav-link {
  /* font-family: "Poppins", sans-serif; */
  font-size: 12px;
  line-height: 20px;
  font-weight: 600;
  letter-spacing: -0.12px;
  text-transform: uppercase;
  transition: all 0.3s;
  margin: 0 0.25rem;
  position: relative;
  padding: 15px 20px 15px 20px;
}

.header_section13 #toggle {
  display: none !important;
}

@media screen and (max-width: 991px) {
  .header_section13 .primary-navigation {
    position: absolute;
    top: 39px;
    left: 0;
    right: 0;
    z-index: 99999999999;
    background-color: var(--primary);
  }
  .header_section13 .container {
    padding: 0 !important;
  }
  .header_section13 .row,
  .header_section13 .bottom-head {
    padding: 0 10px !important;
  }
  .header_section13 .primary-navigation li {
    padding: 10px 0 !important;
  }

  .header_section13 #toggle {
    display: unset !important;
  }
  .header_section13 .nav-text-color {
    color: var(--primary_text_color) !important;
  }
  .header_section13 #toggle i {
    color: var(--primary_text_color) !important;
  }
}

/* ===================================== */
/*       1.14 Header Section 14           */
/* ===================================== */

.header_section14 .topbar {
  height: 60px;
  font-size: 13px;
  background-color: #f5f5f5;
  display: flex;
  align-items: center;
}
.header_section14 .topbar .icons > span:first-child {
  border-right: 1px solid #d7d7d7;
}
.header_section14 .primary-navigation {
  position: relative;
  z-index: 99;
}
.header_section14 header a.header_brand {
  font-size: 1.5rem;
  font-weight: 700;
  color: #000;
  margin-right: 0;
}
.header_section14 .primary-navigation .navbar {
  position: relative;
  height: 100px;
}
.header_section14 .primary-navigation .navbar-nav .nav-link.active,
.header_section14 .primary-navigation .navbar-nav .nav-link {
  color: #222;
  padding: 1.25rem 2rem;
  font-size: 14px;
  line-height: 21px;
  font-weight: 500;
}
.header_section14 .menu-icon {
  top: unset !important;
}
.header_section14 .cart_link .btn.btn-update {
  color: #fff;
  background-color: #065193;
  border: 0;
}
.header_section14 .cart_bag {
  top: 38px;
}
.header_section14 .cart_amt {
  margin-left: 5px;
  margin-right: 0;
}
.header_section14 .icuser {
  position: relative;
  top: -1px;
}
.header_section14 .navbar-toggler-icon {
  display: flex !important;
  width: unset !important;
  height: unset !important;
}

/* Nav Bar Responsiveness */
@media (max-width: 991px) {
  #navbarsExample14 {
    background-color: #fff;
    position: absolute;
    top: 100px;
    left: 0;
    right: 0;
    width: 100%;
    z-index: 999999999;
    text-align: center;
  }
}

/* ===================================== */
/*       1.15 Header Section 15           */
/* ===================================== */

.header_section15 .header-top-bar {
  height: 50px;
  font-size: 0.9rem;
  display: flex;
  align-items: center;
}
.header_section15 .top-header a.header_brand {
  font-size: 1.15rem;
  font-weight: 800;
  color: #414141;
  text-transform: uppercase;
}
.header_section15 .top-header .navbar {
  height: 130px;
  align-items: center;
}
.header_section15 .top-header .icon_text {
  font-size: 14px;
  letter-spacing: 0.4px;
  font-weight: 600;
}
.header_section15 .top-header .icon_text i {
  font-size: 20px;
}
.header_section15 .bottom-header .icon_text span {
  margin-left: 10px;
}
.header_section15 .primary-navigation .navbar-nav .nav-link.active,
.header_section15 .primary-navigation .navbar-nav .nav-link {
  padding: 1.25rem 2rem;
  font-size: 17px;
  font-weight: 400;
}
.header_section15 .primary-navigation .navbar-nav .nav-link.active {
  border-radius: 100px;
}
.header_section15 .nav-item:last-child .nav-link {
  padding-right: 0;
}
@media (min-width: 991px) {
  .header_section15 button#toggle {
    display: none;
  }
}
@media (max-width: 991px) {
  .header_section15 .header-top-bar .row > div:first-child {
    display: none;
  }
  .header_section15 .header-top-bar .row > div:last-child {
    display: flex;
    justify-content: flex-end;
    margin-left: auto;
  }
  .header_section15 .menu-wrapper {
    position: relative;
  }
  .header_section15 .primary-navigation {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    z-index: 9999999999;
  }
  .header_section15 .navbar-nav {
    padding: 20px 5px;
  }
}

/* =================================================== */
/* =================================================== */
/* ******             2 Hero Section            ****** */
/* =================================================== */
/* =================================================== */

/* ===================================== */
/*         2.1 Hero Section 1            */
/* ===================================== */



.banner-section1 .banner {
  overflow: hidden;
  background-repeat: repeat;
  background-color: #999;
  background-image: var(--banner-background-image);
  padding: 20px 5px;
  height: 555px;
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
}
.banner-section1 .banner .head-title {
  max-width: 800px;
  position: relative;
  z-index: 5;
}
.banner-section1 .banner .head-title h1 {
  font-size: 4rem;
  font-weight: 700;
  line-height: 1.1;
  margin: 0;
}
.banner-section1 .banner .head-title p {
  padding: 0 7rem 0 0;
  font-size: 1.25rem;
  color: #666;
}
.banner-section1 .banner .btn.btn-primary {
  padding: 1rem 2rem;
  font-size: 1rem;
  text-transform: uppercase;
  background-color: transparent;
  border: 0;
  font-weight: 500;
  box-shadow: none;
  transition: 0.3s all ease-in;
  border: solid 2px #333333;
  color: #333;
  border-radius: 0.25rem !important;
}
.banner-section1 .banner .head-title .sub-title {
  text-transform: uppercase;
  font-weight: 600;
}
.banner-section1 .banner .btn.btn-primary:hover {
  background-color: #333;
  color: #fff;
}
.banner-section1 .banner #right-pic img {
  position: relative;
  z-index: 5;
}
.banner-section1 .btn.btn-primary:hover {
  background-color: #b02937;
}

@media (max-width: 991px) {
  .banner-section1 .banner .head-title {
    padding: 2rem 0;
    text-align: center;
    max-width: none;
    float: none;
  }
  .banner-section1 .banner .head-title p {
    padding: 0.5rem 1rem 1rem 1rem;
    font-size: 1rem;
  }
  .banner-section1 .banner {
    height: auto;
  }
}

/* ===================================== */
/*         2.2 Hero Section 2           */
/* ===================================== */
.banner-section2 {
  font-size: 1.25rem;
}
.banner-section2 .banner {
  background-position: center 50%;
  background-repeat: repeat-x;
  overflow: hidden;
  padding: 3rem 0 3rem 0;
  background-size: cover;
  background-image: var(--banner-background-image);
  min-height: 600px;
}
.banner-section2 .banner .hero-pic {
  max-width: 730px;
  margin: 0 auto;
}
.banner-section2 .banner .head-title {
  color: #fff;
  padding: 100px 100px;
  min-height: 500px;
  width: 900px;
  margin: auto;
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  position: relative;
  z-index: 2;
}
.banner-section2 .banner .head-title:before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border-radius: 60px;
  z-index: 1;
}
.banner-section2 .banner .head-title .text-wrapper {
  position: relative;
  z-index: 5;
}
.banner-section2 .banner .head-title h1 {
  font-size: 3rem;
  font-weight: 700;
  line-height: 1.1;
  margin: 0;
  color: #fff;
}
.banner-section2 .banner .head-title h1 small {
  font-size: 1.5rem;
  letter-spacing: 0.6rem;
  display: block;
}
.banner-section2 .banner .head-title p {
  font-size: 1.25rem;
  font-weight: 400;
}
.banner-section2 .banner .btn.btn-primary {
  padding: 1.25rem 2rem;
}
.banner-section2 .about_section {
  text-align: center;
  padding: 5rem 0;
}
.banner-section2 .about_section-block {
  padding: 4rem 2rem 2rem 2rem;
  border-radius: 0.5rem;
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
}
.banner-section2 .about_section h2 {
  font-size: 2.5rem;
  font-weight: 700;
  padding-bottom: 0.5rem;
}
.banner-section2 .about_section h3 {
  font-size: 2.5rem;
  font-weight: 700;
  padding-bottom: 2rem;
}
.banner-section2 .about_section h5 {
  font-size: 1.25rem;
  font-weight: 500;
  padding-top: 2rem;
}
.banner-section2 h3.title {
  position: relative;
  display: inline-block;
  margin: 0 0 3rem 0;
  font-size: 2rem;
  color: #cc4452;
}
.banner-section2 .about_section .about-icon {
  max-width: 88px;
  margin: 0 auto;
}
.banner-section2 .arrow {
  position: relative;
}
.banner-section2 .about_section .block {
  border: solid 1px #e9e9e9;
  padding: 2rem;
  max-width: 350px;
  margin: 0 auto;
}
.banner-section2 .about_section .block h3 {
  font-size: 1.25rem;
  padding-bottom: 0;
}
@media (max-width: 991px) {
  .banner-section2 .banner .head-title {
    min-width: unset;
    width: auto;
  }
}
@media (max-width: 767px) {
  .banner-section2 .banner .head-title p {
    font-size: 14px;
  }
}

/* ===================================== */
/*         2.3 Hero Section 3           */
/* ===================================== */

.banner-section3 .header-bottom {
  background-color: #292929;
  margin-bottom: 30px;
}

.banner-section3 .border_mid {
  border-left: solid 1px rgba(255, 255, 255, 0.25);
  border-right: solid 1px rgba(255, 255, 255, 0.25);
  text-align: center;
}

.banner-section3 .header-bottom p {
  color: #ffffff;
  font-size: 13px;
  font-weight: 300;
  margin-bottom: 0;
  padding: 14px 0;
}
.banner-section3 .header-bottom p span {
  font-weight: 500;
}
.banner-section3 .banner {
  overflow: hidden;
  color: #fff;
  background-image: var(--banner-background-image);
  padding: 4rem 0 4rem 0;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 700px;
  margin: 0 auto;
  max-width: 1566px;
}
.banner-section3 .banner .head-title {
  position: relative;
  z-index: 5;
}
.banner-section3 .banner .subheading {
  font-size: 1.5rem;
  position: relative;
  margin-bottom: 1rem;
  border-bottom: solid 1px rgba(255, 255, 255, 0.5);
  display: inline-block;
  padding: 0.25rem 1rem;
}
.banner-section3 .banner .head-title h1 {
  font-size: 5rem;
  font-weight: 500;
  line-height: 1;
  margin: 0 0;
  position: relative;
  padding: 1rem 0;
}
.banner-section3 .banner .head-title .sub-title {
  font-size: 0.75rem;
  display: block;
  font-weight: 400;
  display: inline-block;
  padding: 0.2rem 1rem;
  color: #fff;
  background-color: #222;
  border-radius: 0.5rem;
  text-transform: uppercase;
}

.banner-section3 .banner .head-title p {
  padding: 1rem 0 0 0;
  font-size: 1.5rem;
  font-weight: 400;
}
.banner-section3 .btn {
  padding: 8px;
  font-size: 1.5rem;
  box-shadow: none;
  outline: 0;
}

.banner-section3 .btn i {
  position: relative;
  top: -3px;
}
.banner-section3 .sticky-purchase-panel {
  position: fixed;
  right: 10px;
  bottom: -webkit-calc(50% - 130px);
  bottom: -moz-calc(50% - 130px);
  bottom: calc(50% - 130px);
  color: #fff;
  background: #ef7805;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;
  -webkit-animation: et-rtl 0.7s ease;
  -moz-animation: et-rtl 0.7s ease;
  -o-animation: et-rtl 0.7s ease;
  animation: et-rtl 0.7s ease;
  z-index: 3;
}
.banner-section3 .sticky-purchase-panel ul {
  padding: 15px;
  margin: 0;
  list-style: none;
}
.banner-section3 .sticky-purchase-panel ul li {
  margin: 1rem 0;
}
.banner-section3 .sticky-purchase-panel ul li a {
  color: #fff;
}
.banner-section3 .sticky-purchase-panel ul .bi,
.sticky-purchase-panel ul.bi {
  width: 1em;
  height: 1em;
}
.banner-section3 .bi {
  display: inline-block;
  vertical-align: -0.125em;
}
.banner-section3 header .material-icons {
  font-size: 18px;
  line-height: 1.2;
}
@media (max-width: 1599px) {
  .banner-section3 .banner {
    margin-left: 60px;
    margin-right: 60px;
  }
  .banner-section3 .banner .head-title {
    padding-left: 4rem;
  }
}
@media (max-width: 991px) {
  .banner-section3 .header-bottom {
    text-align: center;
    padding: 1rem 0;
  }
  .banner-section3 .header-bottom p {
    padding: 5px;
  }
  .banner-section3 .header-bottom {
    margin-bottom: 0;
  }
  .banner-section3 .banner .head-title {
    padding-left: 1rem;
  }
  .banner-section3 .banner {
    margin: 0;
    min-height: 400px;
  }
  .banner-section3 .banner .head-title h1 {
    font-size: 2rem;
  }
}

/* ===================================== */
/*         2.4 Hero Section 4           */
/* ===================================== */

.banner-section4 .banner {
  background-color: #065193;
  background-position: center 50%;
  background-repeat: repeat-x;
  overflow: hidden;
  padding: 5rem 0;
  min-height: 750px;
  background-size: cover;
  background-image: var(--banner-background-image);
}
.banner-section4 .banner .head-title {
  color: #fff;
  text-shadow: 1px 1px 1px #000;
  position: relative;
  z-index: 5;
}
.banner-section4 .banner .head-title h1 {
  font-size: 4rem;
  font-weight: 800;
  line-height: 1.1;
  margin: 2rem 0 1rem 0;
  color: #fff;
  text-shadow: 1px 1px 1px #000;
  text-transform: capitalize;
}
.banner-section4 .banner .head-title .tline {
  font-size: 24px;
  font-weight: 600;
  display: block;
}
.banner-section4 .banner .head-title p {
  padding: 1rem 0rem 1rem 0;
  font-size: 1.2rem;
  font-weight: 400;
}
.banner-section4 .banner .btn.btn-primary {
  padding: 17px 36px;
  text-shadow: unset !important;
}
.banner-section4 .banner .btn.btn-primary {
  border-radius: 0;
  border: 0;
}
@media (max-width: 991px) {
  .banner-section4 .banner {
    margin-top: 0;
  }
  .banner-section4 .banner .head-title .tline {
    font-size: 16px;
  }
  .banner-section4 .banner .head-title h1 {
    font-size: 2rem;
  }
}

/* ===================================== */
/*         2.5 Hero Section 5           */
/* ===================================== */

.banner-section5 .banner {
  overflow: hidden;
  color: #fff;
  background-image: var(--banner-background-image);
  padding: 5rem 0 5rem 0;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 835px;
}
.banner-section5 .banner .head-title {
  position: relative;
  z-index: 5;
}
.banner-section5 .banner .head-title h1 {
  font-size: 44px;
  font-weight: 700;
  line-height: 1;
  text-transform: uppercase;
  position: relative;
  letter-spacing: -1.2px;
  margin: 0;
  margin-bottom: 50px;
}
.banner-section5 .banner .head-title h1::after {
  content: " ";
  position: absolute;
  left: 0;
  height: 5px;
  width: 80px;
  bottom: -27px;
  background: var(--primary);
}
.banner-section5 .banner .head-title .sub-title {
  font-size: 1rem;
  letter-spacing: 0.4rem;
  display: block;
  text-transform: uppercase;
  font-weight: 500;
  display: inline-block;
  padding: 0.2rem 1rem;
  color: #fff;
  border: solid 1px rgba(255, 255, 255, 0.7);
}
.banner-section5 .banner .head-title p.slogan {
  font-size: 22px;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 400;
  line-height: 2;
  margin: 0px;
  margin-bottom: 10px;
}
.banner-section5 .banner .head-title p.tagline {
  font-size: 16px;
  text-transform: capitalize;
  letter-spacing: -0.09px !important;
  font-weight: 400;
  line-height: 1.8;
  margin: 0px;
  margin-bottom: 25px;
}
.banner-section5 .btn.btn-primary {
  font-size: 14px;
  font-weight: 700;
  line-height: 1.2;
  letter-spacing: 0;
  text-transform: uppercase;
  background-color: #086c99;
  padding: 21px 50px;
  border: unset;
  box-shadow: none;
  border-radius: unset;
  position: relative;
  overflow: hidden;
  transition: 0.3s all ease-in;
}
.banner-section5 .btn.btn-primary:hover {
  background-color: #086c99;
}
.banner-section5 .icon_arrow,
.banner-section5 .icon_arrow::before,
.banner-section5 .icon_arrow::after {
  width: 22px;
  height: 2px;
  background-color: #fff;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.banner-section5 .icon_arrow {
  position: absolute;
  display: inline-block;
  top: 50%;
  right: 20px;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.banner-section5 .btn-primary:hover .icon_arrow {
  width: 16px;
  right: 16px;
}
@media (max-width: 767px) {
  .banner-section5 .banner {
    height: auto;
  }
  .banner-section5 .banner .head-title p.slogan {
    font-size: 16px;
  }
  .banner-section5 .banner .head-title h1 {
    font-size: 32px;
  }
}

/* ===================================== */
/*         2.6 Hero Section 6           */
/* ===================================== */

.banner-section6 {
  background-color: #f5f5f5 !important;
  padding: 40px;
  padding-bottom: 150px;
}
.banner-section6 .banner {
  overflow: hidden;
  color: #fff;
  background-image: var(--banner-background-image);
  padding: 5rem 0 5rem 0;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 600px !important;
  max-width: 1690px !important;
  text-align: left;
  margin: auto;
  border-radius: 30px;
}
.banner-section6 .banner > .container {
  max-width: 1160px !important;
}

.banner-section6 .banner .banner-wrapper {
  max-width: 790px !important;
}

.banner-section6 .banner .head-title {
  position: relative;
  padding-left: 50px;
}
.banner-section6 .banner .head-title h1 {
  font-size: 70px;
  line-height: 1.2;
  font-weight: 700;
  margin: 0 0 1rem 0;
  position: relative;
  text-transform: capitalize;
}

.banner-section6 .banner .head-title p {
  font-size: 18px;
  line-height: 1.7;
  font-weight: 400;
}

.banner-section6 .btn-primary {
  display: inline-block;
  padding: 12px 30px;
  font-size: 16px;
  line-height: 24px;
  font-weight: 600;
  border: 0;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  opacity: 1 !important;
  z-index: 1;
  position: relative;
  border-radius: 5px;
  overflow: hidden;
}

.banner-section6 .btn-primary img:nth-child(1) {
  bottom: -15px;
  left: -15px;
  position: absolute;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  z-index: -1;
  width: 100%;
}
.banner-section6 .btn-primary img:nth-child(2) {
  top: -15px;
  right: -15px;
  position: absolute;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  z-index: -1;
  width: 100%;
}

.banner-section6 .btn-primary:hover img:nth-child(1) {
  bottom: 0;
  left: 0;
  opacity: 0.2;
  visibility: visible;
  max-width: 30px;
}
.banner-section6 .btn-primary:hover img:nth-child(2) {
  top: 0;
  right: 0;
  opacity: 0.2;
  visibility: visible;
  max-width: 30px;
}
@media (max-width: 767px) {
  .banner-section6 {
    padding: 40px 20px;
  }
  .banner-section6 .banner {
    height: auto !important;
  }
  .banner-section6 .head-title {
    text-align: center;
    padding-left: unset !important ;
  }
  .banner-section6 .head-title h1 {
    font-size: 24px !important;
  }
  .banner-section6 .head-title p {
    font-size: 16px !important;
  }
}

/* ===================================== */
/*         2.7 Hero Section 7           */
/* ===================================== */

.banner-section7 .banner {
  overflow: hidden;
  background-repeat: repeat;
  color: #fff;
  background-color: #000;
  background-image: var(--banner-background-image);
  position: relative;
  padding: 8rem 0;
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
  justify-content: center;
}
.banner-section7 .banner .head-title {
  max-width: 800px;
  float: right;
  position: relative;
  z-index: 5;
  text-transform: uppercase;
}
.banner-section7 .banner .head-title h1 {
  font-size: 4rem !important;
  font-weight: 700 !important;
  line-height: 1.1 !important;
  margin: 0 !important;
}
.banner-section7 .banner .head-title h1 small {
  font-size: 2rem !important;
  letter-spacing: 0.6rem !important;
  display: block !important;
}
.banner-section7 .banner .head-title p {
  padding: 1rem 7rem 1rem 0;
  font-size: 1.5rem;
}
.banner-section7 .banner .btn.btn-primary {
  padding: 1rem 3rem;
  font-size: 1.25rem;
  text-transform: uppercase;
  background-color: #065193;
  border: 0;
  font-weight: 700;
  box-shadow: none;
  transition: 0.3s all ease-in;
}
.banner-section7 .banner .banner-pic {
  margin-right: -2rem;
}
.banner-section7 .btn.btn-primary:hover {
  background-color: #b02937;
}

.banner-section7 .prod-img-wrapper img {
  border-radius: 100%;
  z-index: 1;
  position: relative;
}
@media (max-width: 767px) {
  .banner-section7 .banner .head-title {
    float: unset;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .banner-section7 .banner .head-title h1 {
    font-size: 26px !important;
  }
  .banner-section7 .banner .head-title p {
    padding: 0;
    font-size: 18px;
  }
  .banner-section7 .prod-img-wrapper {
    margin-top: 30px;
    text-align: center;
  }
  .banner-section7 .prod-img-wrapper img {
    max-width: 350px;
    width: 80%;
    text-align: center;
  }
}

/* ===================================== */
/*         2.8 Hero Section 8           */
/* ===================================== */

.banner-section8 .banner {
  background-image: var(--banner-background-image);
  background-position: center 50%;
  background-repeat: repeat-x;
  overflow: hidden;
  padding: 0 0 4rem 0;
  background-size: cover;
  min-height: 700px;
}
.banner-section8 .banner .head-title {
  color: #fff;
  position: relative;
  z-index: 5;
}
.banner-section8 .banner .head-title h1 {
  font-size: 48px;
  text-transform: uppercase;
  font-weight: 700;
  line-height: 1.1;
  margin: 0;
  color: #fff;
  letter-spacing: 3px;
}
.banner-section8 .banner .head-title h1 small {
  font-size: 1.5rem;
  letter-spacing: 0.6rem;
  display: block;
}
.banner-section8 .banner .head-title p {
  padding: 1rem 0rem 1rem 0;
  font-size: 36px;
  font-weight: 300;
  letter-spacing: 2px;
}
.banner-section8 .banner .btn.btn-primary {
  padding: 1.5rem 5rem;
  font-size: 14px;
  text-transform: uppercase;
  background-color: #065193;
  border: 0;
  font-weight: 700;
  box-shadow: none;
  border-radius: 4px;
}

.banner-section8 .prod-img-wrapper > img {
  z-index: 1 !important;
  position: relative !important;
}

@media (max-width: 767px) {
  .banner-section8 .banner {
    padding: 40px 5px;
  }
  .banner-section8 .banner .head-title {
    margin-bottom: 20px;
  }
  .banner-section8 .banner .head-title h1 {
    font-size: 24px;
  }
  .banner-section8 .banner .head-title p {
    font-size: 16px;
  }
}

/* ===================================== */
/*         2.9 Hero Section 9           */
/* ===================================== */

.banner-section9 .banner {
  overflow: hidden;
  background-repeat: repeat;
  background-color: #999;
  background-image: var(--banner-background-image);
  position: relative;
  padding: 0;
  height: 530px;
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
}
.banner-section9 .banner .head-title {
  max-width: 800px;
  float: left;
  position: relative;
  z-index: 5;
}
.banner-section9 .banner .head-title h1 {
  font-size: 4rem;
  font-weight: 700;
  line-height: 1.1;
  margin: 0;
}
.banner-section9 .banner .head-title p {
  padding: 0 7rem 0 0;
  font-size: 18px;
  font-weight: 400;
  color: #666;
  margin-top: 11px;
}
.banner-section9 .banner .btn.btn-primary {
  font-size: 13px;
  font-weight: 500;
  text-transform: uppercase;
  border-radius: 3px !important;
  padding: 12px 35px;
  box-shadow: none;
  border: solid 2px #333333;
  transition: 0.3s all ease-in;
}

.banner-section9 #right-pic2 {
  position: relative;
}

.banner-section9 .rimg {
  width: 577px;
  height: 430px;
  object-fit: cover;
}

@media (max-width: 991px) {
  .banner-section9 .banner .head-title h1 {
    font-size: 2rem;
  }
  .banner-section9 #right-pic2 {
    text-align: center;
    margin-top: 20px;
  }
  .banner-section9 .rimg {
    width: 90%;
    max-height: 250px;
  }
}

/* ===================================== */
/*       2.10 Hero Section 10           */
/* ===================================== */

.banner-section10 {
  min-height: 80vh;
}
.banner-section10 .bg-slider {
  z-index: 5;
  position: relative;
  width: 100%;
  min-height: 80vh;
}
.banner-section10 .bg-slider .swiper-slide {
  position: relative;
  width: 100%;
  height: 80vh;
}
.banner-section10 .bg-slider .swiper-slide::before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.158);
}
.banner-section10 .bg-slider .swiper-slide img {
  width: 100%;
  height: 80vh;
  object-fit: cover;
  background-position: center;
  background-size: cover;
  pointer-events: none;
}
.banner-section10 .swiper-slide .text-content {
  position: absolute;
  top: 25%;
  left: 10%;
  right: 10%;
  transition: 0.3s ease;
}
.banner-section10 .title {
  font-size: 65px;
  line-height: 68px;
  font-weight: 700;
  margin-bottom: 44px;
  transform: translateY(-50px);
  opacity: 0;
  text-transform: uppercase;
}
.banner-section10 .swiper-slide-active .text-content .title {
  transform: translateY(0);
  opacity: 1;
  transition: 1s ease;
  transition-delay: 0.3s;
  transition-property: transform, opacity;
}
.banner-section10 p.slogan {
  font-size: 27px;
  letter-spacing: 0.81px;
  font-weight: 400;
  transform: translateX(-80px);
  opacity: 0;
  margin-bottom: 26px;
}
.banner-section10 p.tagline {
  font-size: 16px;
  line-height: 16px;
  letter-spacing: 1.6px;
  font-weight: 400;
  transform: translateX(-80px);
  opacity: 0;
}
.banner-section10 .swiper-slide-active .text-content p {
  transform: translateX(0);
  opacity: 1;
  transition: 1s ease;
  transition-delay: 0.3s;
  transition-property: transform, opacity;
}

.banner-section10 .btn-group div {
  padding: 13px 30px;
  margin-top: 39px;
  font-size: 12px;
  line-height: 1;
  letter-spacing: 0.96px;
  font-weight: 700;
  text-transform: uppercase;
}
.banner-section10 .btn1 {
  border: 2px solid #141a23;
  background-color: #253344;
  opacity: 0;
  transform: translateY(80px);
}
.banner-section10 .btn2 {
  border: 2px solid #fff;
  margin-left: 16px;
  opacity: 0;
  transform: translateY(80px);
}
.banner-section10 .swiper-slide-active .btn1 {
  transform: translateY(0);
  opacity: 1;
  transition: 1s ease;
  transition-delay: 0.3s;
  transition-property: transform, opacity;
}
.banner-section10 .swiper-slide-active .btn2 {
  transform: translateY(0);
  opacity: 1;
  transition: 1s ease;
  transition-delay: 0.5s;
  transition-property: transform, opacity;
}

.banner-section10 .dark-layer:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 80vh;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.1);
}

.banner-section10 .bg-slider-thumbs {
  z-index: 777;
  position: absolute;
  bottom: 7em;
  left: 50%;
  transform: translateX(-50%);
  transition: 0.3s ease;
}

.banner-section10 .thumbs-container {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  padding: 10px 3px;
  border-radius: 10px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  border-right: 1px solid rgba(255, 255, 255, 0.1);
}
.banner-section10 .thumbs-container img {
  width: 50px;
  height: 35px;
  margin: 0 5px;
  border-radius: 5px;
  cursor: pointer;
}
.banner-section10 .navigation-btn {
  border: 2px solid #fff;
  padding: 12px 24px;
  color: #fff;
  transition: all 0.3s ease;
}
.banner-section10 .navigation-btn::after {
  font-size: 10px;
  font-weight: 900;
  line-height: 1;
  padding: 0;
  margin: 0;
}
.banner-section10 .navigation-btn:hover {
  background-color: var(--primary);
  border-color: var(--primary);
}

/*======= Media queries (max-width: 1100px) =======*/
@media screen and (max-width: 1100px) {
  .banner-section10 .bg-slider-thumbs {
    bottom: 3em;
  }
}

/*======= Media queries (max-width: 785px) =======*/
@media screen and (max-width: 785px) {
  .banner-section10 .swiper-slide .text-content {
    right: 0;
    margin: 0 30px;
  }
  .banner-section10 .swiper-slide .text-content .title {
    font-size: 18px;
    line-height: 1.2;
    margin-bottom: 15px;
  }
  .banner-section10 .swiper-slide .text-content p.slogan {
    font-size: 14px;
    margin-bottom: 15px;
  }
  .banner-section10 .swiper-slide .text-content p.tagline {
    font-size: 12px;
  }
  .banner-section10 .btn-group div {
    margin-top: 100px;
    padding: 8px 15px;
  }
  .banner-section10 .navigation-btn {
    padding: 8px 15px;
  }
  .banner-section10 .navigation-btn::after {
    font-size: 7px;
  }
}

/* ===================================== */
/*       2.11 Hero Section 11           */
/* ===================================== */

.banner-section11 .banner {
  overflow: hidden;
  background-repeat: repeat;
  background-image: var(--banner-background-image);
  position: relative;
  padding: 0;
  height: 650px;
  background-size: cover;
  background-position: center;
  width: 100%;
  left: 0;
  right: 0;
  margin: auto;
  display: flex;
  align-items: center;
}
.banner-section11 .row > div.pe-5 {
  padding-right: unset !important ;
}
.banner-section11 .banner .head-title {
  max-width: 800px;
  float: right;
  position: relative;
  z-index: 5;
}
.banner-section11 .banner .head-title h1 {
  font-size: 4rem;
  font-weight: 700;
  line-height: 1.1;
  margin: 0;
}
.banner-section11 .banner .head-title p {
  padding: 0 7rem 0 0;
  font-size: 1.25rem;
  color: #666;
}
.banner-section11 .banner .btn.btn-primary {
  padding: 1rem 2rem;
  font-size: 1rem;
  text-transform: uppercase;
  background-color: transparent;
  border: 0;
  font-weight: 500;
  box-shadow: none;
  transition: 0.3s all ease-in;
  border: solid 2px #333333;
  color: #333;
  border-radius: 0.25rem !important;
}
.banner-section11 .banner .head-title .sub-title {
  text-transform: uppercase;
  font-weight: 600;
}
.banner-section11 .banner #left-pic {
  position: relative;
  width: 350px;
  height: 350px;
  object-fit: cover;
  display: flex;
  justify-content: center;
  align-items: center;
}
/* Responsiveness */
@media (max-width: 767px) {
  .banner-section11 .banner {
    height: 500px;
  }
  .banner-section11 .banner #left-pic {
    width: 250px;
    height: 250px;
  }
  .banner-section11 .banner .head-title {
    text-align: center;
  }
  .banner-section11 .banner .head-title h1 {
    font-size: 2rem;
  }
  .banner-section11 .banner .head-title p {
    padding: 0;
  }
  .banner-section11 .banner .head-title {
    float: unset;
  }
}

/* ===================================== */
/*       2.12 Hero Section 12           */
/* ===================================== */
.banner-section12 {
  position: relative;
  z-index: unset;
  max-width: unset;
  margin: auto;
  height: 80vh;
  background-color: unset;
  overflow: hidden;
}
.banner-section12 div {
  height: 100%;
  transition: all 0.3s ease;
}
.banner-section12 .container-fluid {
  margin: 0;
  padding: 0;
}
.banner-section12 .slogan {
  font-size: 18px;
  line-height: 23px;
  text-transform: uppercase;
  margin-bottom: 30px;
}
.banner-section12 .heading {
  /* font-family: "Source Serif Pro", sans-serif; */
  font-size: 44px;
  line-height: 1.2;
  font-weight: 500;
  margin-bottom: 21px;
}
.banner-section12 .tagline {
  font-size: 18px;
  line-height: 23px;
  margin-bottom: 50px;
}
.banner-section12 a.btn {
  font-size: 16px;
  line-height: 20px;
  padding: 20px 50px;
  text-transform: uppercase;
  border-radius: 8px;
  transition: all 0.3s ease;
}
.banner-section12 .col {
  transition: all 0.3s ease;
  position: relative;
  margin: 0;
  padding: 0;
}
.banner-section12 .left-col {
  position: relative;
  z-index: 4;
}
.banner-section12 .alo {
  position: relative;
  z-index: 2;
}
.banner-section12 .ab-img {
  object-fit: cover;
  width: 50vw;
  height: 100%;
}

.banner-section12 .r-img {
  z-index: -1;
  overflow: hidden;
  transition: all 1s ease;
  transform: scale3d(1, 1, 1);
}

.banner-section12 .alo:hover .r-img {
  /* z-index: -1; */
  position: relative;
  object-fit: cover;
  overflow: hidden;
  transform: scale3d(1.1, 1.1, 1);
}
.banner-section12 .col::before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
  transition: all 0.3s ease;
}
.banner-section12 .col.alo::before {
  z-index: 1;
  transition: all 1s ease !important;
}

.banner-section12 .left-wrapper {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: auto;
  text-align: center;
  width: 500px;
  overflow: hidden;
  color: #fff;
  position: relative;
}

@media (max-width: 991px) {
  .banner-section12 .col:first-child::before {
    width: 100%;
  }

  .banner-section12 .about-left-wrapper {
    width: auto;
  }

  .banner-section12 .ab-img {
    width: 100%;
  }

  .banner-section12 .alo {
    height: 600px !important;
  }
  .banner-section12 .tagline {
    font-size: 12px;
  }
  .banner-section12 .slogan {
    font-size: 12px;
  }
  .banner-section12 .heading {
    font-size: 24px;
  }
  .banner-section12 .left-wrapper {
    width: auto;
  }
  .banner-section12 {
    height: auto;
  }
  .banner-section12 .row > div {
    height: 80vh;
  }
}

/* ===================================== */
/*       2.13 Hero Section 13           */
/* ===================================== */

.banner-section13 {
  min-height: 510px;
}
.banner-section13 .bg-slider {
  z-index: 5;
  position: relative;
  width: 100%;
  min-height: 510px;
}
.banner-section13 .bg-slider .swiper-slide {
  position: relative;
  width: 100%;
  height: 510px;
}
.banner-section13 .bg-slider .swiper-slide::before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.158);
}
.banner-section13 .bg-slider .swiper-slide img {
  width: 100%;
  height: 510px;
  object-fit: cover;
  background-position: center;
  background-size: cover;
  pointer-events: none;
}
.banner-section13 .swiper-slide .text-content {
  position: absolute;
  top: 25%;
  left: 140px;
  right: 140px;
  text-align: center;
  transition: 0.3s ease;
}
.banner-section13 .title {
  font-size: 62px;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 3.1px;
  margin-bottom: 16px;
  transform: translateY(-50px);
  opacity: 0;
  text-transform: uppercase;
}
.banner-section13 .swiper-slide-active .text-content .title {
  transform: translateY(0);
  opacity: 1;
  transition: 1s ease;
  transition-delay: 0.3s;
  transition-property: transform, opacity;
}
.banner-section13 p.slogan {
  font-size: 19px;
  line-height: 1;
  letter-spacing: 1.52px;
  font-weight: 500;
  transform: translateX(-80px);
  opacity: 0;
  margin-bottom: 16px;
}
.banner-section13 p.tagline {
  font-size: 14px;
  line-height: 1;
  letter-spacing: -0.28px;
  font-weight: 700;
  text-transform: uppercase;
  transform: translateX(-80px);
  opacity: 0;
}
.banner-section13 .swiper-slide-active .text-content p {
  transform: translateX(0);
  opacity: 1;
  transition: 1s ease;
  transition-delay: 0.3s;
  transition-property: transform, opacity;
}

.banner-section13 .btn-group div {
  padding: 16px 40px;
  margin-top: 16px;
  font-size: 14px;
  line-height: 1.3333;
  letter-spacing: 0.14px;
  font-weight: 700;
  text-transform: uppercase;
}
.banner-section13 .btn1 {
  border: 2px solid #141a23;
  background-color: #253344;
  opacity: 0;
  transform: translateY(80px);
}
.banner-section13 .btn2 {
  border: 2px solid #fff;
  background-color: transparent;
  margin-left: 16px;
  opacity: 0;
  transform: translateY(80px);
}
.banner-section13 .btn-group a {
  color: #fff;
}
.banner-section13 .swiper-slide-active .btn1 {
  transform: translateY(0);
  opacity: 1;
  transition: 1s ease;
  transition-delay: 0.3s;
  transition-property: transform, opacity;
}
.banner-section13 .swiper-slide-active .btn2 {
  transform: translateY(0);
  opacity: 1;
  transition: 1s ease;
  transition-delay: 0.5s;
  transition-property: transform, opacity;
}

.banner-section13 .dark-layer:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 80vh;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.1);
}

.banner-section13 .bg-slider-thumbs {
  z-index: 777;
  position: absolute;
  bottom: 2em;
  left: 50%;
  transform: translateX(-50%);
  transition: 0.3s ease;
}

.banner-section13 .thumbs-container {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  padding: 10px 3px;
  border-radius: 10px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  border-right: 1px solid rgba(255, 255, 255, 0.1);
}
.banner-section13 .thumbs-container img {
  width: 50px;
  height: 35px;
  margin: 0 5px;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
  transform: scale(1);
  border: unset;
}
.banner-section13 .thumbs-container img.swiper-slide-thumb-active {
  transform: scale(1.2);
  border: 1px solid #4646462b;
}
.banner-section13 .navigation-btn {
  border: 2px solid #fff;
  padding: 12px 24px;
  color: #fff;
  transition: all 0.3s ease;
}
.banner-section13 .navigation-btn::after {
  font-size: 10px;
  font-weight: 900;
  line-height: 1;
  padding: 0;
  margin: 0;
}
.banner-section13 .navigation-btn:hover {
  background-color: var(--primary);
  border-color: var(--primary);
}

/*======= Media queries (max-width: 1100px) =======*/
@media screen and (max-width: 1100px) {
  .banner-section13 .bg-slider-thumbs {
    bottom: 3em;
  }
}

/*======= Media queries (max-width: 785px) =======*/
@media screen and (max-width: 991px) {
  .banner-section13 .container {
    padding: 0 !important;
  }
  .banner-section13 .swiper-slide .text-content {
    left: 80px;
    right: 80px;
  }
  .banner-section13 .swiper-slide .text-content .title {
    font-size: 18px;
    line-height: 1.2;
    margin-bottom: 15px;
  }
  .banner-section13 .swiper-slide .text-content p.slogan {
    font-size: 14px;
    margin-bottom: 15px;
  }
  .banner-section13 .swiper-slide .text-content p.tagline {
    font-size: 12px;
  }
  .banner-section13 .btn-group div {
    margin-top: 50px;
    padding: 8px 15px;
  }
  .banner-section13 .navigation-btn {
    padding: 8px 15px;
  }
  .banner-section13 .navigation-btn::after {
    font-size: 7px;
  }
}

/* ===================================== */
/*       2.14 Hero Section 14           */
/* ===================================== */

.banner-section14 .banner {
  background-color: #065193;
  background-position: center 50%;
  background-repeat: repeat-x;
  overflow: hidden;
  padding: 5rem 0;
  min-height: 700px;
  background-size: cover;
  background-image: var(--banner-background-image);
}
.banner-section14 .banner .head-title {
  z-index: 20;
}
.banner-section14 .banner .head-title .slogan {
  font-size: 28px;
  line-height: 34px;
  font-weight: 300;
  letter-spacing: -0.3px;
  display: block;
  text-transform: capitalize;
  margin-bottom: 20px;
}
.banner-section14 .banner .head-title .heading {
  font-size: 4rem;
  font-weight: 700;
  line-height: 1.2;
  letter-spacing: -2px;
  text-transform: uppercase;
  margin-bottom: 20px;
}
.banner-section14 .banner .head-title .tagline {
  font-size: 1.2rem;
  font-weight: 400;
  margin-bottom: 50px;
}
.banner-section14 .wow.animated {
  opacity: 0;
}
.banner-section14 .banner img {
  position: absolute;
  width: 350px;
  height: auto;
  object-fit: contain;
  z-index: 5;
  top: 0;
  bottom: 0;
  margin: auto;
}
.banner-section14 .banner .img1 {
  left: 0;
}
.banner-section14 .banner .img2 {
  right: 0;
}
.banner-section14 .banner .btn.btn-primary {
  padding: 17px 36px;
  text-shadow: unset !important;
  border-radius: 5px;
  border: 0;
  font-size: 12px;
  line-height: 1.5;
  letter-spacing: 0.3px;
  font-weight: 500;
}

/* Banner Responsiveness */
@media (max-width: 991px) {
  .banner-section14 .banner img {
    width: 250px;
  }
  .banner-section14 .banner .head-title .slogan {
    font-size: 18px;
  }
  .banner-section14 .banner .head-title .heading {
    font-size: 2rem;
  }
  .banner-section14 .banner .head-title .tagline {
    font-size: 1rem;
  }
}
@media (max-width: 576px) {
  .banner-section14 .banner img {
    display: none !important;
  }
  .banner-section14 .banner .head-title .slogan {
    font-size: 14px;
  }
  .banner-section14 .banner .head-title .heading {
    font-size: 1.5rem;
  }
  .banner-section14 .banner .head-title .tagline {
    font-size: 0.8rem;
  }
}

/* ===================================== */
/*       2.15 Hero Section 15           */
/* ===================================== */

.banner-section15 {
  margin: 50px;
}
.banner-section15 .banner {
  overflow: hidden;
  color: #fff;
  background-image: var(--banner-background-image);
  padding: 4rem 0 4rem 0;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 600px;
  margin: 0 auto;
  max-width: 1566px;
  border-radius: 8px;
}
.banner-section15 .banner .head-title {
  position: relative;
  z-index: 10;
  display: flex;
  flex-direction: column;
}
.banner-section15 .banner .head-title h1 {
  font-size: 48px;
  line-height: 58px;
  letter-spacing: 0.4px;
  font-weight: 700;
  text-transform: capitalize;
  margin-bottom: 25px;
}
.banner-section15 .banner .head-title .sub-title {
  font-size: 18px;
  line-height: 26px;
  letter-spacing: 0.4px;
  font-weight: 600;
  text-transform: capitalize;
  margin-bottom: 25px;
}
.banner-section15 .btn {
  font-size: 14px;
  line-height: 18px;
  letter-spacing: 0.4px;
  font-weight: 400;
  padding: 10px 26px;
  text-transform: capitalize;
  border-radius: 100px;
  width: max-content;
  margin: auto;
}
.banner-section15 .mid-bar {
  width: 100px;
  height: 4px;
  color: #fff;
  border-radius: 100px;
  text-align: center;
  margin: auto;
  opacity: 1;
  margin-bottom: 20px;
}

/* Banner Responsiveness */
@media (max-width: 991px) {
  .banner-section15 .col2 {
    display: none;
  }
}
@media (max-width: 767px) {
  .banner-section15 {
    margin: 20px;
  }
  .banner-section15 .banner .head-title h1 {
    font-size: 32px;
  }
}

/* =================================================== */
/* =================================================== */
/* ******          3 Product Section            ****** */
/* =================================================== */
/* =================================================== */

/* ===================================== */
/*       3.1 Product Section 1           */
/* ===================================== */

.pdt-section1 {
  margin: 50px 0;
  padding: 0;
}
.pdt-section1 .product-block {
  position: relative;
  overflow: hidden;
  transition: all 0.4s;
  text-align: center;
  padding-bottom: 2rem;
}
.pdt-section1 .prod_img1 {
  border: solid 1px #ddd;
}
.pdt-section1 .product-title {
  margin: 0;
  font-weight: 400;
}
.pdt-section1 h3 {
  font-size: 25px;
}
@media (max-width: 1399px) {
  .pdt-section1 .prod_img1 {
    width: 204px;
  }
}
@media (max-width: 1200px) {
  .pdt-section1 .prod_img1 {
    width: 168px;
  }
}
@media (max-width: 991px) {
  .pdt-section1 .prod_img1 {
    width: auto;
  }
}

/* ===================================== */
/*       3.2 Product Section 2           */
/* ===================================== */

.pdt-section2 .btn-primary {
  color: #fff;
  font-size: 1.15rem;
  display: inline-table;
  border: 2px solid transparent;
  line-height: 1;
  height: max-content;
  position: absolute;
  right: 1.5rem;
  top: 50%;
  margin-top: -25px;
  width: 45px;
  height: 45px;
  border-radius: 50%;
  padding: 0;
}
.pdt-section2 {
  padding-top: 0;
}
.pdt-section2 .product-block {
  position: relative;
  overflow: hidden;
  margin-bottom: 1.5rem;
  background-color: #fff;
  box-shadow: 0 0 36px rgb(0 0 0 / 16%);
  transition: all 0.3s ease;
  top: 0;
}
.pdt-section2 .product-block:hover {
  box-shadow: 0px 20px 40px rgb(126 141 162 / 30%);
  z-index: 5;
  top: -1rem;
}
.pdt-section2 h2 {
  font-size: 2.5rem;
  font-weight: 700;
}
.pdt-section2 .product-block .product-image {
  position: relative;
  overflow: hidden;
}
.pdt-section2 .product-block .product-image::before {
  position: absolute;
  content: "";
  left: 1rem;
  right: 1rem;
  top: 1rem;
  bottom: 1rem;
  opacity: 0;
  z-index: 5;
  transition: all 0.3s ease;
}
.pdt-section2 .product-block:hover .product-image::before {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  opacity: 0.15;
  z-index: 5;
}
.pdt-section2 .product-title.product-name2 {
  font-size: 1.25rem;
  margin-bottom: 0;
}
.pdt-section2 .product-block .product-image img {
  -webkit-transform: scale(1);
  transform: scale(1);
  transition: all 0.3s ease;
}
.pdt-section2 .product-block:hover .product-image img {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
.pdt-section2 .product-details {
  padding: 0.5rem 5.5rem 1.5rem 1.5rem;
  text-align: left;
  border-top: solid 1px #e9e9e9;
  position: relative;
}
.pdt-section2 .prod_price2 {
  font-size: 1rem;
  font-weight: 400;
  margin: 0;
  color: var(--primary);
}

/* ===================================== */
/*       3.3 Product Section 3           */
/* ===================================== */
.pdt-section3 .product-title-bar h2 {
  font-size: 22px;
}
.pdt-section3 .product-title-bar h2 i {
  font-size: 22px;
}

.pdt-section3 .product-block {
  position: relative;
  overflow: hidden;
  margin-bottom: 0.5rem;
  padding-bottom: 1.5rem;
  font-size: 0.9rem;
}
.pdt-section3 .btn_shop {
  padding-top: 5px;
  padding-bottom: 5px;
  position: absolute;
  left: 0;
  top: 19px;
  width: 100%;
  background-color: #fff;
}
.pdt-section3 .btn_shop .btn {
  padding: 0;
}
.pdt-section3 .product-block .btn_shop {
  transition: all 0.5s;
}
.pdt-section3 .product-block:hover .btn_shop {
  opacity: 1;
  top: -6px;
}
.pdt-section3 .price-cell {
  height: 22px;
  position: relative;
  overflow: hidden;
}
.pdt-section3 .product-details {
  margin: 0 auto;
  -webkit-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
  overflow: hidden;
  padding: 1rem 1rem 1rem 0;
}
.pdt-section3 .prod_price {
  font-size: 15px;
}
@media (max-width: 991px) {
  .pdt-section3 .product-details {
    padding: 1rem;
  }
}

/* ===================================== */
/*       3.4 Product Section 4           */
/* ===================================== */

.pdt-section4 .prod_img4 {
  transition: all 0.4s ease 0s;
}
.pdt-section4 .pdtImageWrapper:hover .prod_img4 {
  transform: scale(1.1) rotate(3deg);
}
.pdt-section4 .pdtImageWrapper:hover .pdt-overlay {
  background-color: unset !important;
}
.pdt-section4 .btn_shop4 {
  border: 0px none;
  width: 80%;
  z-index: 11;
  text-align: center;
  margin: 10px auto 20px;
  transition: all 0.4s ease 0s;
  border-radius: 3px;
  font-weight: 600;
  left: 0px;
  right: 0px;
  opacity: 0;
  bottom: 0px;
  height: 45px;
  display: block;
  line-height: 45px;
  position: absolute;
  visibility: hidden;
  transform: translateY(20px);
  color: rgb(47, 51, 58);
  font-size: 14px;
}
.pdt-section4 .pdtImageWrapper:hover .btn_shop4 {
  opacity: 1;
  visibility: visible;
  bottom: 20px;
  transform: translateY(20px);
}
.pdt-section4 .prod_price4 {
  font-size: 1.5rem;
}

.pdt-section4 {
  border-top: unset;
}
.pdt-section4 h3 {
  font-size: 36px;
  line-height: 54px;
  font-weight: 700;
}
.pdt-section4 .product-block {
  position: relative;
  overflow: hidden;
  background-color: #fff;
  padding: 0 0 1rem 0;
  text-align: center;
  transition: all 0.4s;
  /* border: solid 1px #e9e9e9; */
  margin-bottom: 1rem;
}
.pdt-section4 .product-details {
  background: #fff;
  padding-top: 0.5rem;
}

.pdt-section4 .pdt-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  transition: all 0.4s ease 0s;
}

.pdt-section4 .product-title {
  /* font-family: "Montserrat", sans-serif; */
  font-size: 16px;
  line-height: 24px;
  font-weight: 600;
  text-transform: capitalize;
  padding: 1rem 0 0;
}
.pdt-section4 .prod_price4 {
  font-size: 16px;
  line-height: 16px;
  font-weight: 500;
}
.pdt-section4 .prod_desc4 {
  font-size: 0.95rem;
  color: #777;
  margin: 0;
}
.pdt-section4 .product-name4 {
  font-weight: 1rem;
  color: #777;
}
.pdt-section4 .prod_desc4,
.pdt-section4 .product-name4 {
  padding: 0 1rem;
}

/* ===================================== */
/*       3.5 Product Section 5           */
/* ===================================== */
.pdt-section5 .prod_img5 {
  transition: all 0.4s ease 0s;
}
.pdt-section5 .pdtImageWrapper:hover .prod_img5 {
  /* transform: scale(1.1); */
}
.pdt-section5 .pdtImageWrapper:hover .pdt-overlay {
  background-color: unset !important;
}
.pdt-section5 .btn_shop5 {
  border: 0px none;
  width: 100%;
  z-index: 11;
  text-align: center;
  margin: 0;
  border-radius: 0px;
  font-weight: 600;
  left: 0px;
  right: 0px;
  opacity: 0;
  bottom: 20px;
  height: 48px;
  display: block;
  line-height: 45px;
  position: absolute;
  visibility: hidden;
  transform: translateY(20px);
  color: rgb(47, 51, 58);
  font-size: 14px;
  transition: all 0.2s ease 0s;
}
.pdt-section5 .pdtImageWrapper:hover .btn_shop5 {
  opacity: 1;
  visibility: visible;
}
.pdt-section5 .prod_price5 {
  font-size: 1.5rem;
}
.pdt-section5 {
  border-top: unset;
  margin-top: 100px;
}
.pdt-section5 h3 {
  font-size: 30px;
  line-height: 30px;
  font-weight: 700;
  letter-spacing: 700;
  color: #000;
  margin-bottom: 8px !important;
}

.pdt-section5 p {
  font-size: 16px;
  line-height: 1;
  letter-spacing: -0.03px;
  font-weight: 400;
  color: #999999;
  margin-bottom: 8px !important;
}
.pdt-section5 .product-block {
  position: relative;
  overflow: hidden;
  background-color: #fff;
  padding: 0 0 1rem 0;
  text-align: center;
  transition: all 0.4s;
  margin-bottom: 1rem;
}
.pdt-section5 .product-details {
  background: #fff;
  padding-top: 14px;
}

.pdt-section5 .pdt-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  transition: all 0.4s ease 0s;
}

.pdt-section5 .prod_category5 {
  font-size: 10px;
  line-height: 15px;
  text-transform: uppercase;
  color: #868686;
  letter-spacing: 0.08em;
  margin: 0 !important;
  padding: 0 !important;
}

.pdt-section5 .product-title {
  font-size: 14px;
  line-height: 20px;
  font-weight: 500;
  letter-spacing: -0.14px;
  text-transform: capitalize;
  color: #404040;
  margin: 0;
  padding: 0;
}
.pdt-section5 .prod_price5 {
  font-size: 16px;
  line-height: 30px;
  font-weight: 600;
  color: #000;
}
.pdt-section5 .prod_desc5 {
  font-size: 0.95rem;
  color: #777;
  margin: 0;
}
.pdt-section5 .product-name5 {
  font-weight: 1rem;
  color: #777;
}
.pdt-section5 .prod_desc5,
.pdt-section5 .product-name5 {
  padding: 0 1rem;
}
.pdt-section5 .popular-products5 {
  background-color: #f4f5f7;
  position: relative;
}

/* ===================================== */
/*       3.6 Product Section 6           */
/* ===================================== */
.pdt-section6 {
  background-color: #f5f5f5 !important;
  transition: all 0.4s ease 0s;
  padding-top: 150px;
}
.pdt-section6 .product-block:hover {
  -webkit-transform: translate(0, -5px);
  transform: translate(0, -5px);
}

.pdt-section6 .prod_img6 {
  transition: all 0.4s ease 0s;
}
.pdt-section6 .product-block:hover .prod_img6 {
  transform: scale(1.1) rotate(3deg);
}

.pdt-section6 .bottom-btn {
  text-align: right;
  position: absolute;
  right: -8px;
  bottom: -8px;
}

.pdt-section6 .bottom-btn i {
  display: inline-block;
  width: 60px;
  height: 60px;
  line-height: 42px;
  color: #065193;
  background-color: #fff;
  font-size: 25px;
  border: 10px solid #f5f5f5;
  border-radius: 50%;
  text-align: center;
  cursor: pointer;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}

.pdt-section6 .bottom-btn:hover i {
  color: #fff;
  background-color: #065193;
  -webkit-transform: rotate(-360deg);
  transform: rotate(-360deg);
}

.pdt-section6 .bottom-btn a {
  display: inline-block;
  color: #065193;
  font-weight: 600;
  position: relative;
  top: -5px;
  right: 0;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  text-decoration: none;
}

.pdt-section6 .bottom-btn:hover a {
  opacity: 1 !important;
  visibility: visible !important;
  right: 15px !important;
}

.pdt-section6 .prod_price6 {
  font-size: 1.5rem;
}

.pdt-section6 .product-block {
  position: relative;
  overflow: hidden;
  background-color: #fff;
  padding: 0 0 1rem 0;
  text-align: left;
  transition: all 0.4s;
  margin-bottom: 1rem;
  border-radius: 10px;
}
.pdt-section6 .product-details {
  background: #fff;
  padding-top: 0.5rem;
  padding-bottom: 1rem;
  padding-left: 15px;
}

.pdt-section6 .pdt-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  transition: all 0.4s ease 0s;
}

.pdt-section6 .product-title {
  font-size: 16px;
  line-height: 20px;
  font-weight: 700;
  text-transform: capitalize;
  padding: 1rem 0 0;
  color: #363636;
}
.pdt-section6 .prod_price6 {
  font-size: 16px;
  line-height: 16px;
  font-weight: 500;
}
.pdt-section6 .prod_desc6 {
  font-size: 0.95rem;
  color: #777;
  margin: 0;
}

/* ===================================== */
/*       3.7 Product Section 7           */
/* ===================================== */
.pdt-section7 {
  margin: unset;
  padding: unset;
  margin-top: 6rem;
  margin-bottom: 4rem;
}
.pdt-section7 .product-block {
  position: relative;
  overflow: hidden;
  background-color: #fff;
  margin-bottom: 3rem;
  text-align: left;
  transition: all 0.4s;
  text-align: center;
  background-color: #f1f1f1;
  box-shadow: 0px 0px 50px -38px rgb(0, 0, 0);
  border: unset;
}

.pdt-section7 .product-block:hover {
  box-shadow: 0px 20px 40px rgb(126 141 162 / 60%);
}

.pdt-section7 .product-details {
  padding: 2rem;
  text-align: center;
  background-color: #fff;
  border: 1px solid #00000014;
}

.pdt-section7 .prod_category7 {
  color: var(--primary);
  font-size: 17px;
  line-height: 26px;
  font-weight: 400;
  margin: 0;
  padding: 0;
  margin-bottom: 3px;
}

.pdt-section7 .product-title {
  color: #000;
  font-size: 22px;
  line-height: 30px;
  font-weight: 700;
  margin: 0;
  padding: 0;
  margin-bottom: 5px;
  text-transform: capitalize;
}

.pdt-section7 .prod_price7 {
  color: var(--primary);
  font-size: 20px;
  line-height: 26px;
  font-weight: 500;
  margin: 0;
  padding: 0;
  margin-bottom: 1.3rem;
}

.pdt-section7 .btn-shop {
  font-size: 20px;
  letter-spacing: 0.2px;
  font-weight: 400;
  padding: 0.875rem 2rem;
  border: unset;
}

/* ===================================== */
/*       3.8 Product Section 8           */
/* ===================================== */
.pdt-section8 .btn-shop {
  padding: 1rem 1rem;
  font-size: 14px;
  text-transform: uppercase;
  background-color: #065193;
  border: 0;
  font-weight: 600;
  box-shadow: none;
  border-radius: 0;
  width: 100%;
}
.pdt-section8 {
  background-color: transparent;
}
.pdt-section8 .section8-heading {
  padding: 0 24px;
  margin-bottom: 26px;
  width: fit-content;
  border-bottom: 3px solid #065193;
}
.pdt-section8 .section8-heading h1 {
  font-size: 14px;
  font-weight: 600;
  color: #444;
  text-transform: uppercase;
}
.pdt-section8 .product-block {
  position: relative;
  overflow: hidden;
  background-color: #fff;
  border: solid 1px #eee;
  /* box-shadow: 20px 20px 5px rgb(126 141 162 / 10%); */
  transition: 0.2s all ease;
}
.pdt-section8 .product-details {
  padding: 15px;
  text-align: left;
}
.pdt-section8 .product-name8 {
  font-size: 18px;
  font-weight: 600;
  text-transform: capitalize;
}
.pdt-section8 .prod_price8 {
  font-size: 16px;
  font-weight: 600;
  color: #222;
  text-align: right;
}
.pdt-section8 .prod_category8 {
  color: #a2a2a2;
  margin-bottom: 0;
  text-transform: capitalize;
  font-size: 14px;
  margin-bottom: 4px;
  font-weight: 300;
}
.pdt-section8 .prod_desc8 {
  color: #222;
}

/* ===================================== */
/*       3.9 Product Section 9           */
/* ===================================== */
.pdt-section9 {
  margin-top: 60px;
}

.pdt-section9 .heading-wrapper {
  text-align: center;
  display: flex;
  justify-content: center;
  margin-bottom: 60px;
  position: relative;
  z-index: 1;
}

.pdt-section9 .heading-container {
  background-color: #fff;
  padding: 0 20px;
}

.pdt-section9 .heading-wrapper:before {
  border-bottom: 1px solid #ebebeb;
  content: "";
  top: 50%;
  left: 0;
  right: 0;
  position: absolute;
  z-index: -1;
}

.pdt-section9 h3 {
  font-size: 18px;
  font-weight: 500;
  line-height: 46px;
  width: fit-content;
  padding: 0 34px !important;
  color: #242424 !important;
  border: 2px solid #ebebeb !important;
  border-radius: 3px !important;
}

.pdt-section9 .product-details {
  padding: 15px;
  text-align: center;
  background: #fff;
  width: 100%;
  position: absolute;
  z-index: 10;
  transition: all 0.4s ease-out;
  -webkit-transition: all 0.4s ease-out;
  -moz-transition: all 0.4s ease-out;
  -ms-transition: all 0.4s ease-out;
  -o-transition: all 0.4s ease-out;
}

.pdt-section9 .product-block:hover .product-details {
  box-shadow: 0 18px 26px rgba(0, 0, 0, 0.28);
}

.pdt-section9 .prod_category9 {
  font-size: 12px;
  font-weight: 400;
  line-height: 18px;
  color: #a4a4a4;
  margin-bottom: 10px;
}
.pdt-section9 .product-name9 {
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 19px;
  font-weight: 400;
  text-transform: capitalize;
  color: #000;
}

.pdt-section9 .prod_price9 {
  font-size: 14px;
  line-height: 22px;
  font-weight: 400;
  color: #a4a4a4;
}

.pdt-section9 .product-block {
  transition: all 0.4s ease-out;
  -webkit-transition: all 0.4s ease-out;
  -moz-transition: all 0.4s ease-out;
  -ms-transition: all 0.4s ease-out;
  -o-transition: all 0.4s ease-out;
  background: #fff;
  position: relative;
  z-index: 1;
  margin-bottom: 150px;
}
.pdt-section9 .product-block:hover {
  box-shadow: 0 18px 26px rgba(0, 0, 0, 0.28);
  z-index: 100;
}

.pdt-section9 .btn-wrapper a {
  font-size: 12px;
  font-weight: 500;
  line-height: 35px;
  text-shadow: none;
  text-transform: uppercase;
  text-align: center;
  height: 35px;
  border: 0;
  border-radius: 3px;
  box-shadow: none;
  color: #363f4d;
  display: inline-block;
  padding: 0 20px;
  -webkit-transition: all 0.4s ease-out;
  -moz-transition: all 0.4s ease-out;
  -ms-transition: all 0.4s ease-out;
  -o-transition: all 0.4s ease-out;
}

.pdt-section9 .shop-btn {
  padding: 15px 10px;
  margin: -70px -15px -15px;
  height: 70px;
  opacity: 0;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
}

.pdt-section9 .product-block:hover .shop-btn {
  margin: -15px;
  opacity: 1;
  -webkit-opacity: 1;
  -moz-opacity: 1;
}

/* ===================================== */
/*       3.10 Product Section 10         */
/* ===================================== */
.pdt-section10 {
  margin-top: 70px;
  padding: 0;
}
.pdt-section10 h3 {
  font-size: 23px;
  line-height: normal;
  font-weight: 400;
  letter-spacing: 1.15px;
  color: #3c3c3c;
  margin-bottom: 8px !important;
}
.pdt-section10 h3:before {
  margin-right: 2.1rem;
  content: "/";
  color: #e1e1e1;
  font-weight: 300;
}
.pdt-section10 h3:after {
  margin-left: 2.1rem;
  content: "/";
  color: #e1e1e1;
  font-weight: 300;
}

.pdt-section10 .product-block {
  position: relative;
  overflow: hidden;
  background-color: #fff;
  padding: 0 0 1rem 0;
  text-align: left;
  transition: all 0.4s;
  margin-bottom: 1rem;
}
.pdt-section10 .product-details {
  background: #fff;
  padding-top: 24px;
}
.pdt-section10 .pdt-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  transition: all 0.4s ease 0s;
}
.pdt-section10 .prod_img10 {
  transition: all 0.4s ease 0s;
}
.pdt-section10 .pdtImageWrapper:hover .pdt-overlay {
  background-color: unset !important;
}
.pdt-section10 .btn_shop10 {
  z-index: 11;
  bottom: 20px;
  top: 0;
  margin: auto;
  margin-left: 10px;
  width: 36px;
  height: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  visibility: hidden;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.4s ease;
}
.pdt-section10 .product-block:hover .btn_shop10 {
  opacity: 1;
  visibility: visible;
  margin-left: 20px;
}
.pdt-section10 .btn_shop10 i {
  font-size: 15px;
}
.pdt-section10 .prod_category10 {
  font-size: 12px;
  line-height: normal;
  text-transform: uppercase;
  color: #acacac;
  letter-spacing: 2.052px;
  font-weight: 700;
  margin: 0;
  padding: 0;
  margin-bottom: 12px;
}
.pdt-section10 .product-title {
  font-size: 14px;
  line-height: 18px;
  font-weight: 400;
  letter-spacing: normal;
  text-transform: capitalize;
  color: #444;
  margin: 0;
  padding: 0;
  margin-bottom: 9px;
}
.pdt-section10 .prod_price10 {
  font-size: 14px;
  line-height: normal;
  letter-spacing: normal;
  font-weight: 700;
  color: var(--primary);
}
@media (max-width: 768px) {
  .pdt-section10 h3 {
    font-size: 18px;
  }
  .pdt-section10 h3::before {
    margin-right: 5px;
  }
  .pdt-section10 h3::after {
    margin-left: 5px;
  }
}

/* ===================================== */
/*       3.11 Product Section 11         */
/* ===================================== */
.pdt-section11 {
  max-width: 1140px;
  width: 100%;
  left: 0;
  right: 0;
  margin: auto;
}
.pdt-section11 h3 {
  font-size: 23px;
  line-height: normal;
  font-weight: 400;
  letter-spacing: 1.15px;
  color: #3c3c3c;
  margin-bottom: 8px !important;
  border-bottom: 2px solid var(--primary);
  width: max-content;
  padding-bottom: 8px;
  margin-bottom: 0px !important;
}
.pdt-section11 .product-section11 {
  border: 1px solid #00000017;
}
.pdt-section11 .product-block {
  position: relative;
  overflow: hidden;
  background-color: #fff;
  padding: 5px 10px;
  text-align: center;
  transition: all 0.4s;
  margin-bottom: 1rem;
  transition: all 0.3 ease;
}
.pdt-section11 .product-block:hover {
  outline: 1px solid var(--primary);
}
.pdt-section11 .product-details {
  background: #fff;
  padding-top: 24px;
  transition: all 0.3 ease;
  opacity: 1;
  position: relative;
}
.pdt-section11 .product-block .product-details-inner {
  opacity: 1;
}
.pdt-section11 .product-block:hover .product-details-inner {
  opacity: 0;
}
.pdt-section11 .pdt-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  transition: all 0.4s ease 0s;
}
.pdt-section11 .prod_img11 {
  transition: all 0.4s ease 0s;
}
.pdt-section11 .pdtImageWrapper:hover .pdt-overlay {
  background-color: unset !important;
}
.pdt-section11 .btn_shop11 {
  z-index: 11;
  margin: auto;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  width: 35px;
  height: 35px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  visibility: hidden;
  opacity: 0;
  transition: all 0.4s ease;
}
.pdt-section11 .product-block:hover .btn_shop11 {
  opacity: 1;
  width: 65px;
  height: 55px;
  visibility: visible;
}
.pdt-section11 .btn_shop11 i {
  font-size: 15px;
  transition: all 0.4s ease;
}
.pdt-section11 .product-block:hover .btn_shop11 i {
  font-size: 25px;
}
.pdt-section11 .prod_category11 {
  font-size: 12px;
  line-height: normal;
  text-transform: uppercase;
  color: #acacac;
  letter-spacing: 2.052px;
  font-weight: 700;
  margin: 0;
  padding: 0;
  margin-bottom: 12px;
}
.pdt-section11 .product-title {
  font-size: 14px;
  line-height: 18px;
  font-weight: 400;
  letter-spacing: normal;
  text-transform: capitalize;
  color: #444;
  margin: 0;
  padding: 0;
  margin-bottom: 9px;
}
.pdt-section11 .prod_price11 {
  font-size: 14px;
  line-height: normal;
  letter-spacing: normal;
  font-weight: 700;
  color: var(--primary);
}
@media (max-width: 768px) {
  .pdt-section11 h3 {
    font-size: 18px;
  }
  .pdt-section11 h3::before {
    margin-right: 5px;
  }
  .pdt-section11 h3::after {
    margin-left: 5px;
  }
}

/* ===================================== */
/*       3.12 Product Section 12         */
/* ===================================== */
.pdt-section12 {
  margin: unset;
  padding: unset;
  margin-top: 60px;
  margin-bottom: unset;
  border: unset;
}
.pdt-section12 .pdt-title {
  font-size: 48px;
  line-height: 57px;
  font-weight: 400;
  text-transform: capitalize;
  /* font-family: "Source Serif Pro", serif; */
}
.pdt-section12 .pdt-slogan {
  font-size: 18px;
  line-height: 22px;
  font-weight: 400;
  text-transform: capitalize;
  /* font-family: "Source Sans Pro", sans-serif; */
  margin-bottom: 30px;
}
.pdt-section12 .product-block {
  position: relative;
  overflow: hidden;
  background-color: #fff;
  margin-bottom: 3rem;
  text-align: left;
  transition: all 0.4s;
  text-align: center;
  background-color: #f1f1f1;
  border: unset;
}
.pdt-section12 .product-details {
  padding: 2rem;
  text-align: center;
  background-color: #fff;
}
.pdt-section12 .prod_category12 {
  color: var(--primary);
  font-size: 17px;
  line-height: 26px;
  font-weight: 400;
  margin: 0;
  padding: 0;
  margin-bottom: 3px;
}

.pdt-section12 .product-title {
  color: #000;
  font-size: 18px;
  line-height: 23px;
  font-weight: 400;
  margin: 0;
  padding: 0;
  margin-bottom: 5px;
  text-transform: capitalize;
}

.pdt-section12 .prod_price12 {
  color: var(--primary);
  font-size: 20px;
  line-height: 30px;
  font-weight: 400;
  margin: 0;
  padding: 0;
  margin-bottom: 1.3rem;
}

.pdt-section12 .btn.btn-primary.btn-shop {
  font-size: 16px;
  font-weight: 400;
  line-height: 1;
  padding: 18px 37px;
  border-radius: 8px;
  text-transform: uppercase;
}

/* ===================================== */
/*       3.13 Product Section 13         */
/* ===================================== */
.pdt-section13 .btn_shop13 {
  opacity: 0;
  transition: all 0.2s ease;
  position: absolute;
  width: 100%;
  bottom: 0;
  height: 50px;
  align-items: center;
  display: flex;
  justify-content: center;
  transform: translate3d(0, 30%, 0);
}
.pdt-section13 .product-block:hover .btn_shop13 {
  opacity: 0.8;
  transform: translate3d(0, 0, 0);
}
.pdt-section13 .btn_shop13:hover {
  opacity: 1 !important;
}
.pdt-section13 .prod_img13 {
  width: 350px !important;
  height: 350px !important;
  object-fit: contain;
}
.pdt-section13 .product-block {
  padding: 15px !important;
  background-color: #f6f7f9;
  /* font-family: "Open Sans", "Poppins", sans-serif; */
  margin-bottom: 15px;
}
.pdt-section13 .prod_category13 {
  font-size: 10px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #00000078;
  margin: 10px 0 10px 0;
}
.pdt-section13 .product-name13 {
  font-size: 15px;
  line-height: 1.35;
  letter-spacing: -0.15px;
  color: #222529;
  text-transform: capitalize;
  margin-bottom: 10px;
  font-weight: 500;
  cursor: pointer;
  white-space: nowrap;
  overflow: hidden;
}
.pdt-section13 .product-name13:hover {
  color: var(--primary);
}
.pdt-section13 .prod_price13 {
  font-size: 18px;
  line-height: 1;
  font-weight: 800;
  color: #444;
}

/* ===================================== */
/*       3.14 Product Section 14         */
/* ===================================== */
.pdt-section14 {
  padding: 70px 0;
  background-color: #f9f9f9;
}
.pdt-section14 .left {
  background-color: #fff;
  background-position: center;
  overflow: hidden;
  background-size: cover;
  background-image: var(--product-section-background-image);
  padding: 40px;
  width: 300px;
  flex-shrink: 0;
  max-height: 700px;
  position: relative;
  z-index: 2;
}
.pdt-section14 .left:before {
  content: "";
  width: 100%;
  height: 100%;
  background-color: #2222229c;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 4;
}
.pdt-section14 .product-left-text {
  position: relative;
  z-index: 10;
}
.pdt-section14 .product-left-text .subheading {
  font-size: 1rem;
  font-weight: 400;
  color: #fff;
  margin-bottom: 10px;
}
.pdt-section14 .product-left-text .heading {
  font-size: 2rem;
  font-weight: 700;
  color: #fff;
  margin-bottom: 20px;
}
.pdt-section14 .right {
  padding: 40px;
  padding-top: 0px;
}
.pdt-section14 h3 {
  font-size: 22px;
  line-height: 1;
  font-weight: 400;
  color: #1c1c24;
  text-transform: capitalize;
  margin-bottom: 30px;
  padding-bottom: 10px;
  border-bottom: 1px solid #efefef;
}
.pdt-section14 .product-section14 {
  border: 1px solid #00000017;
}
.pdt-section14 .product-block {
  position: relative;
  overflow: hidden;
  background-color: #fff;
  padding: 5px 10px;
  text-align: center;
  transition: all 0.4s;
  transition: all 0.3 ease;
}
.pdt-section14 .product-block:hover {
  box-shadow: 0 3px 25px 0 rgba(144, 144, 144, 0.2);
  z-index: 5;
}
.pdt-section14 .product-details {
  background: #fff;
  padding-top: 24px;
  transition: all 0.3 ease;
  opacity: 1;
}
.pdt-section14 .prod_img14 {
  transition: all 0.4s ease 0s;
}
.pdt-section14 .btn_shop14 {
  z-index: 14;
  left: 0;
  right: 0;
  top: 0;
  width: 100%;
  height: 0px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  visibility: hidden;
  opacity: 0;
  transition: all 0.4s ease;
}
.pdt-section14 .product-block:hover .btn_shop14 {
  opacity: 1;
  height: 55px;
  visibility: visible;
}
.pdt-section14 .btn_shop14 i {
  font-size: 15px;
  transition: all 0.4s ease;
}
.pdt-section14 .product-block:hover .btn_shop14 i {
  font-size: 25px;
}
.pdt-section14 .prod_category14 {
  font-size: 12px;
  line-height: normal;
  text-transform: uppercase;
  color: #acacac;
  letter-spacing: 2.052px;
  font-weight: 700;
  margin: 0;
  padding: 0;
  margin-bottom: 12px;
}
.pdt-section14 .product-title {
  font-size: 16px;
  line-height: 1.6;
  font-weight: 500;
  letter-spacing: normal;
  text-transform: capitalize;
  color: #444;
  margin: 0;
  padding: 0;
}
.pdt-section14 .prod_price14 {
  font-size: 18px;
  line-height: 27px;
  letter-spacing: normal;
  font-weight: 400;
  color: var(--primary);
}
.pdt-section14 .pdt-overlay:before {
  content: "";
  width: 100%;
  height: 100%;
  background-color: transparent;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 4;
  transition: all 0.2s ease-in-out;
  opacity: 0.1;
}
.pdt-section14 .product-section14:hover .pdt-overlay:before {
  background-color: var(--primary);
}

@media (max-width: 740px) {
  .pdt-section14 .pdt-wrapper {
    flex-direction: column;
  }
  .pdt-section14 .left {
    width: 100%;
    margin-bottom: 50px;
  }
}

/* ===================================== */
/*       3.15 Product Section 15         */
/* ===================================== */
.pdt-section15 {
  margin: 50px 0;
  padding: 0;
}
.pdt-section15 h3 {
  font-size: 22px;
  letter-spacing: 0.6px;
  font-weight: 700;
  margin-bottom: 8px !important;
  padding: 12px 0;
  position: relative;
}
.pdt-section15 h3:before {
  content: "";
  width: 100%;
  height: 2px;
  background-color: #f5f5f5;
  position: absolute;
  bottom: 0px;
  left: 0;
}
.pdt-section15 h3:after {
  content: "";
  width: 100px;
  height: 5px;
  background-color: var(--primary);
  position: absolute;
  bottom: -2px;
  left: 0;
}
.pdt-section15 .product-section15 {
  margin-bottom: 40px;
}
.pdt-section15 .product-block {
  border: 1px solid #e5e5e5;
  border-radius: 8px;
  padding: 10px;
  transition: all 0.3s ease 0s;
  position: relative;
  overflow: hidden;
  text-align: left;
  background-color: #fff;
}
.pdt-section15 .product-block:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
}
.pdt-section15 .product-details {
  padding: 15px;
  width: 50%;
}
.pdt-section15 .pdt-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  transition: all 0.4s ease 0s;
}
.pdt-section15 .prod_img15 {
  transition: all 0.4s ease 0s;
  width: 100% !important;
  height: 100% !important;
  object-fit: contain !important;
  padding: 0 10px;
  border-right: 4px double #e5e5e5;
}
.pdt-section15 .pdtImageWrapper {
  width: 50% !important;
}
.pdt-section15 .btn_shop15 {
  z-index: 11;
  top: 10px;
  left: 0;
  width: 36px;
  height: 36px;
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  visibility: hidden;
  opacity: 0;
  transform: translateY(5px);
  transition: all 0.4s ease;
}
.pdt-section15 .product-block:hover .btn_shop15 {
  opacity: 1;
  visibility: visible;
  transform: translateY(20px);
}
.pdt-section15 .btn_shop15 i {
  font-size: 15px;
}
.pdt-section15 .prod_category15 {
  font-size: 10px;
  text-transform: uppercase;
  color: #acacac;
  letter-spacing: 4px;
  font-weight: 300;
  margin: 0;
  padding: 0;
  margin-bottom: 12px;
}
.pdt-section15 .product-title {
  font-size: 14px;
  line-height: 18px;
  letter-spacing: 0.4px;
  font-weight: 400;
  text-transform: capitalize;
  color: #444;
  margin: 0;
  padding: 0;
  margin-bottom: 8px;
}
.pdt-section15 .prod_price15 {
  font-size: 16px;
  line-height: 18px;
  letter-spacing: 0.4px;
  font-weight: 600;
  color: var(--secondary);
}

@media (max-width: 767px) {
  .pdt-section15 .product-title {
    font-size: 10px;
    line-height: 14px;
  }
  .pdt-section15 .prod_price15 {
    font-size: 12px;
  }
}

/* =================================================== */
/* =================================================== */
/* ******           4 About Section             ****** */
/* =================================================== */
/* =================================================== */

/* ===================================== */
/*        4.1 About Section 1            */
/* ===================================== */
.about_section1 {
  position: relative;
  z-index: unset;
  max-width: unset;
  margin: auto;
  height: 320px;
  background-color: unset;
  margin: 50px 0;
  overflow: hidden;
}
.about_section1 .about-overlay {
  transition: all 0.3s ease;
  position: relative;
}
.about_section1 .about-overlay::before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
}
.about_section1 .text-wrapper {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 0;
  padding: 20px 50px;
  text-align: left;
  position: relative;
  background-color: #065193;
  background-position: center 50%;
  overflow: hidden;
  background-size: cover;
  width: 49%;
  height: 320px;
  border-radius: 8px;
}
.about_section1 .left {
  background-image: var(--about-section-background-image)
}
.about_section1 .right {
  background-image: var(--about-section-background-image)
}
.about_section1 .about-wrapper {
  position: relative;
  z-index: 5;
  text-align: center;
}
.about_section1 .about-brand {
  font-size: 18px !important;
  line-height: 20px;
  letter-spacing: 0.4px;
  font-weight: 400;
  color: #fff;
  margin-bottom: 20px;
}
.about_section1 .about-title {
  font-size: 32px;
  line-height: 34px;
  letter-spacing: 0.4px;
  font-weight: 700;
  color: #fff;
  text-transform: capitalize;
  margin-bottom: 24px;
}
.about_section1 .about-btn-color {
  padding: 13px 25px;
  transition: all 0.3s ease;
  font-size: 14px;
  line-height: 16px;
  letter-spacing: 0.4px;
  font-weight: 700;
  text-transform: capitalize;
  border-radius: 100px;
  border: unset;
  outline: unset;
}
.about_section1 .about-btn-color:hover {
  background-color: #fff !important;
  color: #222 !important;
}
@media (max-width: 740px) {
  .about_section1 {
    height: auto;
  }
  .about_section1 > .container {
    flex-direction: column;
  }
  .about_section1 .text-wrapper {
    width: 100%;
    height: auto;
    margin-bottom: 40px;
  }
  .about_section1 .about-brand {
    font-size: 14px;
  }
  .about_section1 .about-title {
    font-size: 18px;
    line-height: 24px;
  }
}

/* ===================================== */
/*        4.2 About Section 2            */
/* ===================================== */

@media (max-width: 991px) {
  .about_section2 .about_section {
    padding-bottom: 0;
  }
  .about_section2 .banner .head-title h1 {
    font-size: 2.5rem;
    text-transform: uppercase;
    font-weight: 700;
    line-height: 1.1;
    margin: 0;
    color: #fff;
  }
  .about_section2 .banner {
    min-height: 450px;
  }
  .about_section2 .about_section-block {
    padding: 0rem 2rem 0 2rem;
  }
  .about_section2 .about_section h3 {
    font-size: 1rem;
  }
}

/* ===================================== */
/*        4.3 About Section 3            */
/* ===================================== */
.about_section3 .about_section {
  padding: 0 0 6rem 0;
}
.about_section3 .about_section-block {
  color: #fff;
}
.about_section3 .about_section h2 {
  font-size: 2.5rem;
  font-weight: 700;
  padding-bottom: 2rem;
}
.about_section3 .about_section h5 {
  font-size: 1.25rem;
  font-weight: 500;
  padding-top: 2rem;
}
.about_section3 h3.title {
  position: relative;
  display: inline-block;
  margin: 0 0 3rem 0;
  font-size: 2rem;
  color: #2f97c3;
}
.about_section3 h3.title span {
  background-color: #f7f7f7;
  position: relative;
  z-index: 5;
  padding-left: 10px;
  padding-right: 10px;
}
.about_section3 .about_section .about-icon {
  max-width: 88px;
  margin: 0 auto;
}
.about_section3 .about_section .block {
  padding: 0 2rem;
  max-width: 350px;
  margin: 0 auto;
}
.about_section3 .arrow {
  position: relative;
}
.about_section3 {
  background-image: url(../../img/about.jpg);
  background-size: cover;
  background-position: center;
  height: 500px;
  display: flex;
  align-items: center;
  position: relative;
  z-index: 1;
}
.about_section3::before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}
.about_section3 .about-data {
  margin: 0 150px;
}
.about_section3 h2 {
  font-size: 48px;
  line-height: 1;
  font-weight: 300;
  text-transform: capitalize;
  margin-bottom: 30px;
  color: #fff;
}

.about_section3 p {
  max-width: 600px;
  font-size: 18px;
  line-height: 24px;
  font-weight: 300;
  margin-bottom: 16px;
  color: #fff;
}

.about_section3 .btn-primary {
  font-size: 18px;
  line-height: 50px;
  font-weight: 500;
  height: 50px;
  padding: 0 30px;
  text-transform: uppercase;
}

@media (min-width: 768px) {
  .about_section3 .w-md-100 {
    width: 100% !important;
  }
}
@media (max-width: 991px) {
  .about_section3 .about-data {
    margin: unset;
  }
}

/* ===================================== */
/*        4.4 About Section 4            */
/* ===================================== */
.about_section4 .about_section {
  padding: 0 0 0 0;
  text-align: center;
}
.about_section4 .about-images img {
  width: 930px;
  height: 473px;
  object-fit: cover;
}
.about_section4 .about_section-block {
  padding: 3rem 2rem 2.5rem 2rem;
  /* max-width: 60%; */
  margin: 0 auto;
  background-color: #fff;
  border: unset;
}
.about_section4 .about_section p {
  font-size: 1.5rem;
  font-weight: 300;
}
.about_section4 h3.title {
  position: relative;
  display: inline-block;
  margin: 0 0 4rem 0;
  font-size: 2rem;
  color: #414141;
  font-weight: 600;
}
.about_section4 h3.title:after {
  position: absolute;
  content: "";
  left: 50%;
  bottom: -15px;
  width: 60px;
  margin-left: -30px;
  background-color: #065193;
  height: 4px;
}
.about_section4 .arrow {
  position: relative;
}

/* ===================================== */
/*        4.5 About Section 5            */
/* ===================================== */
.about_section5.ab-5 .row {
  justify-content: space-between;
  margin: auto;
}

.about_section5.ab-5 {
  position: relative;
  z-index: unset;
  max-width: unset;
  margin: auto;
  height: 566px;
  background-color: unset;
  margin-top: 100px;
  overflow: hidden;
}
.about_section5.ab-5 div {
  height: 100%;
}
.about_section5.ab-5 .container-fluid {
  margin: 0;
  padding: 0;
}
.about_section5.ab-5 .col.about-overlay {
  transition: all 0.3s ease;
  position: relative;
}

.about_section5.ab-5 .col {
  margin: 0;
  padding: 0;
}

.about_section5.ab-5 .ab-img {
  object-fit: cover;
  width: 50vw;
  height: 100%;
}

.about_section5.ab-5 .l-img {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  transition: all 0.3s ease;
}

.about_section5.ab-5 .about-overlay:hover .l-img {
  object-fit: cover;
  overflow: hidden;
  transform: scale(1.1);
}
.about_section5.ab-5 .col:first-child::before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
}

.about_section5.ab-5 .about-left-wrapper {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: auto;
  text-align: center;
  width: 500px;
  overflow: hidden;
  color: #fff;
  position: relative;
}

@media (max-width: 991px) {
  .about_section5.ab-5 .col:first-child::before {
    width: 100%;
  }

  .about_section5.ab-5 .about-left-wrapper {
    width: auto;
  }

  .about_section5.ab-5 .ab-img {
    width: 100vw;
  }

  .about_section5.ab-5 .alo {
    height: 600px !important;
  }
}

.about_section5.ab-5 .about-brand {
  font-size: 18px;
}
.about_section5.ab-5 .about-title {
  font-size: 50px;
  line-height: 0.961;
  letter-spacing: -0.2px;
  font-weight: 600;
  text-transform: capitalize;
  margin-bottom: 20px;
}
.about_section5.ab-5 .about-content {
  font-size: 16px;
  line-height: 1.5;
  font-weight: 400;
  margin-bottom: 20px;
}

.about_section5.ab-5 .about-btn-color {
  background-color: transparent !important;
  color: #fff !important;
  border: 2px solid white !important;
  padding: 17px 38px;
  margin-top: 20px;
  transition: all 0.3s ease;
  font-size: 14px;
  line-height: 1.2;
  font-weight: 700;
  text-transform: uppercase;
}

.about_section5.ab-5 .about-btn-color i {
  transition: all 0.3s ease;
  margin-left: 5px !important;
}

.about_section5.ab-5 .about-btn-color:hover i {
  margin-left: 20px !important;
}

.about_section5.ab-5 .about-btn-color:hover {
  background-color: var(--primary_text_color) !important;
  color: var(--primary) !important;
}

/* ===================================== */
/*        4.6 About Section 6            */
/* ===================================== */
.about_section6 {
  height: 580px;
  background-color: #fff !important;
  overflow: hidden;
}

.about_section6 .container-fluid {
  padding: 0;
  margin: 0;
  height: 100%;
  width: 100%;
}

.about_section6 .left-col {
  overflow: hidden;
  color: #fff;
  background-image: url(../../img/about.jpg);
  position: relative;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  margin: auto;
}

.about_section6 .about-data {
  max-width: 470px;
  padding-left: 30px;
}

.about_section6 h2 {
  font-size: 50px;
  margin-bottom: 10px;
  line-height: 1.3;
  margin-top: -10px;
  font-weight: 700;
  color: var(--primary);
}

.about_section6 p {
  font-size: 16px;
  line-height: 1.7;
  font-weight: 500;
}

.about_section6 .btn-primary {
  display: inline-block;
  padding: 12px 30px;
  font-size: 16px;
  line-height: 24px;
  font-weight: 600;
  border: 0;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  opacity: 1 !important;
  z-index: 1;
  position: relative;
  border-radius: 5px;
  overflow: hidden;
}

.about_section6 .btn-primary img:nth-child(1) {
  bottom: -15px;
  left: -15px;
  position: absolute;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  z-index: -1;
  width: 100%;
}
.about_section6 .btn-primary img:nth-child(2) {
  top: -15px;
  right: -15px;
  position: absolute;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  z-index: -1;
  width: 100%;
}

.about_section6 .btn-primary:hover img:nth-child(1) {
  bottom: 0;
  left: 0;
  opacity: 0.2;
  visibility: visible;
  max-width: 30px;
}
.about_section6 .btn-primary:hover img:nth-child(2) {
  top: 0;
  right: 0;
  opacity: 0.2;
  visibility: visible;
  max-width: 30px;
}
@media (max-width: 991px) {
  .about_section6 .height-auto {
    height: auto !important;
    text-align: center;
  }

  .about_section6 h2 {
    font-size: 18px;
  }
  .about_section6 p {
    font-size: 14px;
  }

  .about_section6 .about-data {
    padding: 50px 30px !important;
  }

  .about_section6 .left-col {
    height: 200px !important;
  }
}

/* ===================================== */
/*        4.7 About Section 7            */
/* ===================================== */
.about_section7 {
  margin: 100px 0;
}

.about_section7 .left {
  background-color: var(--primary);
  height: 80vh;
}

.about_section7 .right {
  background-color: #f4f7f4;
}

.about_section7 .about-row .data-right {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.about_section7 .about-row .data-left img {
  width: 636px;
  height: 636px;
  object-fit: cover;
}

.about_section7 .data-container {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  display: flex;
  justify-content: center;
  align-items: center;
}

.about_section7 .about-title {
  font-weight: 800;
  font-size: 3rem;
  margin-bottom: 2rem;
  margin-top: 2rem;
}

.about_section7 .about-text {
  font-weight: 200;
  font-size: 1.2rem;
  margin-bottom: 2rem;
}

.about_section7 .about-button {
  padding: 1rem 3rem;
  font-size: 1.25rem;
  text-transform: uppercase;
  background-color: var(--primary);
  border: 0;
  border-radius: 5px;
  font-weight: 700;
  box-shadow: none;
  width: fit-content;
  text-align: center;
  transition: 0.3s all ease-in;
}

.about_section7 .about-button a {
  color: #fff;
  text-decoration: none;
}

@media (max-width: 576px) {
  .about_section7 .left {
    height: 100vh;
  }

  .about_section7 .about-title {
    color: #fff !important;
  }

  .about_section7 .about-text {
    color: #fff !important;
  }

  .about_section7 .about-button {
    background-color: #fff !important;
  }

  .about_section7 .about-button a {
    color: var(--primary) !important;
  }

  .about_section7 .about-row .data-left img {
    width: 300px;
    height: 300px;
  }
}

/* ===================================== */
/*        4.8 About Section 8            */
/* ===================================== */
.about_section8 {
  position: relative;
  z-index: unset;
  max-width: unset;
  margin: auto;
  height: 320px;
  background-color: unset;
  margin-top: 100px;
  overflow: hidden;
}
.about_section8 .about-overlay {
  transition: all 0.3s ease;
  position: relative;
}
.about_section8 .about-overlay::before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
}
.about_section8 .text-wrapper {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  margin: auto;
  padding: 20px 50px;
  text-align: left;
  position: relative;
  background-color: #065193;
  background-position: center 50%;
  overflow: hidden;
  background-size: cover;
  width: 45%;
  height: 320px;
}
.about_section8 .left {
  background-image: url(../../img/about1.jpg);
}
.about_section8 .right {
  background-image: url(../../img/about2.jpg);
}
.about_section8 .about-wrapper {
  position: relative;
  z-index: 5;
}
.about_section8 .about-brand {
  font-size: 18px;
  color: #fff;
}
.about_section8 .about-title {
  font-size: 26px;
  color: #fff;
  line-height: 0.961;
  letter-spacing: -0.2px;
  font-weight: 600;
  text-transform: capitalize;
  margin-bottom: 20px;
}
.about_section8 .about-btn-color {
  background-color: transparent !important;
  color: #fff !important;
  border: 2px solid white !important;
  padding: 17px 38px;
  margin-top: 20px;
  transition: all 0.3s ease;
  font-size: 14px;
  line-height: 1.2;
  font-weight: 700;
  text-transform: uppercase;
}
.about_section8 .about-btn-color-alt {
  background-color: var(--primary) !important;
  color: #fff !important;
  border: 2px solid var(--primary) !important;
  padding: 17px 38px;
  margin-top: 20px;
  transition: all 0.3s ease;
  font-size: 14px;
  line-height: 1.2;
  font-weight: 700;
  text-transform: uppercase;
}
.about_section8 .about-btn-color:hover {
  background-color: #fff !important;
  color: var(--primary) !important;
}
.about_section8 .about-btn-color-alt:hover {
  background-color: transparent !important;
  color: #fff !important;
  border: 2px solid #fff !important;
}

@media (max-width: 740px) {
  .about_section8 {
    height: auto;
  }
  .about_section8 > .container {
    flex-direction: column;
  }
  .about_section8 .text-wrapper {
    width: 100%;
    height: auto;
    margin-bottom: 40px;
  }
  .about_section8 .about-brand {
    font-size: 14px;
  }
  .about_section8 .about-title {
    font-size: 20px;
  }
}

/* ===================================== */
/*        4.9 About Section 9            */
/* ===================================== */

.about_section9 {
  background-image: url(../../img/about.jpg);
  background-size: cover;
  background-position: center;
  height: 500px;
  display: flex;
  align-items: center;
  position: relative;
  z-index: 1;
}

.about_section9::before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.about_section9 h2 {
  font-size: 48px;
  line-height: 1;
  font-weight: 300;
  text-transform: capitalize;
  margin-bottom: 30px;
}

.about_section9 p {
  max-width: 600px;
  font-size: 18px;
  line-height: 24px;
  font-weight: 300;
  margin-bottom: 16px;
}

.about_section9 .btn-primary {
  font-size: 18px;
  line-height: 50px;
  font-weight: 500;
  height: 50px;
  padding: 0 30px;
  text-transform: uppercase;
}

/* ===================================== */
/*       4.10 About Section 10           */
/* ===================================== */
.about_section10 {
  margin-top: 70px;
}
.about_section10 .about-wrapper {
  border: 3px solid #e0e0e0;
  padding: 40px 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  flex-direction: column;
}
.about_section10 .about-heading {
  font-size: 30px;
  line-height: 1.2;
  font-weight: 700;
  color: var(--primary_text_color);
  background-color: var(--primary);
  padding: 8px 21px;
}
.about_section10 .about-text {
  font-size: 18px;
  font-weight: 400;
  color: #333538;
  max-width: 900px;
}

/* ===================================== */
/*       4.11 About Section 11           */
/* ===================================== */
.about_section11 {
  height: 359px;
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 1200px;
  width: 100%;
  margin: auto;
}

.about_section11 h6 {
  color: var(--primary);
}

.about_section11 h2 {
  font-size: 48px;
  line-height: 60px;
}

.about_section11 p {
  font-size: 18px;
  line-height: 24px;
}

.about_section11 .about-slogan {
  padding-bottom: 30px;
  font-size: 18px;
  line-height: 23px;
  text-transform: uppercase;
}
@media (max-width: 991px) {
  .about_section11 p {
    font-size: 15px;
  }
}

/* ===================================== */
/*       4.12 About Section 12           */
/* ===================================== */
.about_section12.images img {
  width: 100%;
  height: 300px;
  object-fit: cover;
}

@media (max-width: 991px) {
  .about_section12 .rimg {
    margin-top: 30px;
    width: 100%;
    height: auto;
  }
}

/* =================================================== */
/* =================================================== */
/* ******          5 Contact Section            ****** */
/* =================================================== */
/* =================================================== */

/* ===================================== */
/*        5.1 Contact Section 1          */
/* ===================================== */

.contact-section1 {
  min-height: 200px;
  background-color: #f9f9f9;
  display: flex;
  align-items: center;
}

.contact-section1 .contact-heading {
  font-weight: 700;
  color: var(--primary);
}

.contact-section1 .contact-text {
  font-weight: 400;
  font-size: 17px;
  line-height: 26px;
  color: #222;
  margin-left: auto;
}

.contact-section1 .contact-email {
  font-weight: 700;
}

/* ===================================== */
/*        5.2 Contact Section 2          */
/* ===================================== */
.contact-section2 {
  max-width: 1140px;
  margin: auto;
}
.contact-section2 .container-fluid {
  padding: 0;
  margin: 0;
}
.contact-section2 h5 {
  font-size: 17px;
  line-height: 1.5;
  font-weight: 400;
}
.contact-section2 p {
  font-size: 14px;
  line-height: 14px;
  font-weight: 400;
  color: #2e363d;
}
.contact-section2 a {
  padding: 15px 35px;
  font-size: 18px;
  font-weight: 500;
  margin: auto;
}

@media (max-width: 767px) {
  .contact-section2 .row > div > div {
    justify-content: start;
  }
  .contact-section2 a {
    margin: 0;
  }
}

/* ===================================== */
/*        5.3 Contact Section 3          */
/* ===================================== */

.contact-section3 {
  max-width: 100%;
  margin: auto;
  background-color: var(--primary);
  padding: 100px 0;
}
.contact-section3 .contact-heading {
  text-align: center;
  color: var(--primary_text_color);
  font-size: 48px;
  font-weight: 400;
  margin-bottom: 40px;
}
.contact-section3 .contact-text-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}
.contact-section3 .contact-text {
  color: var(--primary_text_color);
  font-size: 18px;
  font-weight: 400;
  display: flex;
  justify-content: center;
  align-items: center;
}
.contact-section3 .contact-text i {
  font-size: 24px;
}
.contact-section3 .contact-text p {
  line-height: 1;
}
.contact-section3 .contact-text .phone-num {
  font-size: 30px;
  line-height: 1;
  font-weight: 600;
}
.contact-section3 .contact-btn {
  color: var(--primary_text_color);
  background-color: transparent;
  font-size: 20px;
  margin-left: 40px;
  padding: 15px 35px;
  border: 1px solid var(--primary_text_color);
  transition: all 0.3s ease-in-out;
}
.contact-section3 .contact-btn:hover {
  color: var(--primary);
  background-color: var(--primary_text_color);
  border: 1px solid var(--primary);
}
@media (max-width: 991px) {
  .contact-section3 .contact-heading {
    font-size: 32px;
  }
}
@media (max-width: 767px) {
  .contact-section3 .contact-heading {
    font-size: 22px;
    padding: 0 10px;
    margin-bottom: 30px;
  }
  .contact-section3 .contact-text-wrapper {
    flex-direction: column;
  }
  .contact-section3 .contact-text i {
    font-size: 20px;
  }
  .contact-section3 .contact-text {
    font-size: 16px;
  }
  .contact-section3 .contact-text .phone-num {
    font-size: 24px;
  }
  .contact-section3 .contact-btn {
    margin-top: 20px;
    margin-left: 0;
  }
}

/* ===================================== */
/*        5.4 Contact Section 4          */
/* ===================================== */

.contact-section4 {
  max-width: 100%;
  margin: auto;
  padding: 100px 0;
  position: relative;
  background-image: url("../../img/contact.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  z-index: 5;
}
.contact-section4.overlay:before {
  position: absolute;
  content: "";
  background-color: var(--primary);
  opacity: 0.3;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 1;
}
.contact-section4 .contact-section-wrapper {
  position: relative;
  z-index: 5;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.contact-section4 .contact-subheading {
  text-align: center;
  background-color: var(--primary);
  border-radius: 5px;
  color: var(--primary_text_color);
  font-size: 15px;
  letter-spacing: 4px;
  text-transform: uppercase;
  font-weight: 600;
  margin-bottom: 20px;
  width: max-content;
  padding: 3px 15px;
}
.contact-section4 .contact-heading {
  text-align: center;
  color: var(--primary_text_color);
  font-size: 48px;
  font-weight: 400;
  margin-bottom: 40px;
}
.contact-section4 .contact-text-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}
.contact-section4 .contact-btn {
  color: var(--primary_text_color);
  background-color: transparent;
  font-size: 20px;
  padding: 15px 35px;
  border: 1px solid var(--primary_text_color);
  transition: all 0.3s ease-in-out;
}
.contact-section4 .contact-btn:hover {
  color: var(--primary);
  background-color: var(--primary_text_color);
  border: 1px solid var(--primary);
}
@media (max-width: 991px) {
  .contact-section4 .contact-heading {
    font-size: 32px;
  }
}
@media (max-width: 767px) {
  .contact-section4 .contact-subheading {
    font-size: 9px;
  }
  .contact-section4 .contact-heading {
    font-size: 22px;
    padding: 0 10px;
    margin-bottom: 30px;
  }
  .contact-section4 .contact-btn {
    margin-top: 20px;
    margin-left: 0;
  }
}

/* ===================================== */
/*        5.5 Contact Section 5          */
/* ===================================== */

.contact-section5 {
  max-width: 100%;
  margin: auto;
  padding: 100px 0;
  position: relative;
  background-image: var(--contact-section-background-image);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  z-index: 5;
}
.contact-section5.overlay:before {
  position: absolute;
  content: "";
  background-color: var(--primary);
  opacity: 0.3;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 1;
}
.contact-section5 .contact-section-wrapper {
  position: relative;
  z-index: 5;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.contact-section5 .contact-heading {
  text-align: center;
  color: var(--primary_text_color);
  font-size: 48px;
  font-weight: 400;
  margin-bottom: 60px;
}
.contact-section5 .contact-cards-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 60px;
}
.contact-section5 .contact-card {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin: 0 100px;
}
.contact-section5 .contact-card i {
  background-color: var(--primary);
  font-size: 32px;
  color: var(--primary_text_color);
  padding: 16px;
}
.contact-section5 .contact-card p {
  font-size: 16px;
  line-height: 24px;
  font-weight: 600;
  color: var(--primary);
  text-align: center;
}
.contact-section5 .contact-card span {
  font-size: 22px;
  line-height: 32px;
  font-weight: 400;
  color: var(--primary_text_color);
  text-align: center;
}

.contact-section5 .contact-text-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}
.contact-section5 .contact-btn {
  color: var(--primary);
  background-color: transparent;
  font-size: 20px;
  padding: 15px 35px;
  border: 1px solid var(--primary);
  transition: all 0.3s ease-in-out;
}
.contact-section5 .contact-btn:hover {
  color: var(--primary_text_color);
  background-color: var(--primary);
  border: 1px solid var(--primary);
}
@media (max-width: 991px) {
  .contact-section5 .contact-heading {
    font-size: 32px;
  }
}
@media (max-width: 767px) {
  .contact-section5 .contact-heading {
    font-size: 22px;
    padding: 0 10px;
  }
  .contact-section5 .contact-card {
    margin: 0 40px;
  }
  .contact-section5 .contact-btn {
    margin-top: 20px;
    margin-left: 0;
  }
}

/* ===================================== */
/*        5.6 Contact Section 6          */
/* ===================================== */

.contact-section6 {
  max-width: 100%;
  margin: auto;
  padding: 100px 0;
  position: relative;
  background-image: var(--contact-section-background-image);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  z-index: 5;
}
.contact-section6.overlay:before {
  position: absolute;
  content: "";
  background-color: var(--primary);
  opacity: 0.3;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 1;
}
.contact-section6 .contact-section-wrapper {
  position: relative;
  z-index: 5;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-direction: row;
  margin: auto;
}
.contact-section6 .contact-subheading {
  text-align: left;
  color: var(--primary);
  font-size: 14px;
  line-height: 22px;
  font-weight: 500;
  max-width: 500px;
}
.contact-section6 .contact-heading {
  text-align: left;
  color: var(--primary_text_color);
  font-size: 36px;
  line-height: 47px;
  font-weight: 500;
  max-width: 500px;
}
.contact-section6 .contact-btn-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}
.contact-section6 .contact-btn {
  color: var(--primary);
  background-color: #fff;
  font-size: 20px;
  width: 130px;
  height: 130px;
  border: 1px solid #e2dbd5;
  border-radius: 999px;
  transition: all 0.3s ease-in-out;
  display: flex;
  justify-content: center;
  align-items: center;
  transform: scale(1);
}
.contact-section6 .contact-btn:hover {
  color: var(--primary_text_color);
  background-color: var(--primary);
  border: 1px solid var(--primary);
  transform: scale(1.1);
}
@media (max-width: 991px) {
  .contact-section6 .contact-heading {
    font-size: 32px;
  }
}
@media (max-width: 767px) {
  .contact-section6 .contact-section-wrapper {
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  .contact-section6 .contact-heading {
    font-size: 22px;
    line-height: 30px;
    padding: 0 10px;
    max-width: 100%;
    text-align: center;
  }
  .contact-section6 .contact-subheading {
    max-width: 100%;
    text-align: center;
  }
  .contact-section6 .contact-btn {
    margin-top: 20px;
    margin-left: 0;
    width: 100px;
    height: 100px;
  }
}

/* ===================================== */
/*        5.7 Contact Section 7          */
/* ===================================== */

.contact-section7 {
  max-width: 100%;
  margin: auto;
  background-color: transparent;
  padding: 100px 0;
}
.contact-section7 .contact-section-wrapper {
  display: flex;
  justify-content: flex-start;
  flex-direction: column;
}
.contact-section7 .contact-heading {
  text-align: left;
  color: var(--secondary);
  font-size: 40px;
  line-height: 45px;
  font-weight: 200;
  margin-bottom: 30px;
  max-width: 615px;
}
.contact-section7 .phone-num {
  color: var(--primary);
  font-size: 60px;
  line-height: 64px;
  font-weight: 200;
  margin-bottom: 30px;
}
.contact-section7 .contact-btn {
  color: #222;
  background-color: #fff;
  font-size: 16px;
  padding: 17px 46px;
  border: 1px solid #ededed;
  transition: all 0.1s ease-in-out;
  border-radius: 999px;
  width: fit-content;
  box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.04);
}
.contact-section7 .contact-btn:hover {
  background-color: var(--primary);
  color: var(--primary_text_color);
}
@media (max-width: 991px) {
  .contact-section7 .contact-heading {
    font-size: 32px;
  }
}
@media (max-width: 767px) {
  .contact-section7 .contact-heading {
    font-size: 22px;
    padding: 0 10px;
    margin-bottom: 30px;
  }
  .contact-section7 .contact-btn {
    margin-top: 20px;
  }
}

/* ===================================== */
/*        5.8 Contact Section 8          */
/* ===================================== */

.contact-section8 {
  max-width: 100%;
  margin: auto;
  background-color: transparent;
  padding: 100px 0;
  position: relative;
  z-index: 1;
}
.contact-section8 .background-div {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 0;
  display: flex;
}
.contact-section8 .background-div div {
  width: 100%;
  height: 100%;
}
.contact-section8 .background-div .left {
  background-color: #fff;
  z-index: -1;
  position: relative;
}
.contact-section8 .background-div .right {
  background-color: var(--primary);
  z-index: -1;
  position: relative;
}
.contact-section8 .contact-heading {
  text-align: left;
  color: #262322;
  font-size: 75px;
  line-height: 1;
  font-weight: 500;
  width: fit-content;
  position: relative;
}
.contact-section8 .contact-heading:after {
  content: "";
  width: 30%;
  min-width: 150px;
  height: 2px;
  background-color: var(--primary);
  position: absolute;
  bottom: -10px;
  left: 0;
}
.contact-section8 .contact-section-wrapper {
  display: flex;
  flex-direction: row;
  position: relative;
  z-index: 2;
  align-items: center;
}
.contact-section8 .contact-section-wrapper .left {
  flex: 1;
}
.contact-section8 .contact-section-wrapper .right {
  flex: 1;
  margin-left: 200px;
  display: flex;
  flex-direction: column;
}
.contact-section8 .phone-num {
  color: #fff;
  font-size: 36px;
  line-height: 46px;
  font-weight: 500;
  margin-bottom: 20px;
}
.contact-section8 .email-address {
  color: #fff;
  font-size: 24px;
  line-height: 34px;
  text-transform: lowercase;
  font-weight: 300;
  margin-bottom: 80px;
}
.contact-section8 .address {
  color: #fff;
  font-size: 17px;
  line-height: 28px;
  text-transform: capitalize;
  font-weight: 400;
}
@media (max-width: 991px) {
  .contact-section8 .contact-heading {
    font-size: 32px;
  }
}
@media (max-width: 767px) {
  .contact-section8 .contact-heading {
    font-size: 38px;
    padding: 0 10px;
    margin-bottom: 30px;
  }
  .contact-section8 .contact-section-wrapper {
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 500px;
    text-align: center;
  }
  .contact-section8 .contact-section-wrapper .right {
    margin-left: 0;
  }
  .contact-section8 .background-div {
    flex-direction: column;
    top: 0;
    left: 0;
  }
  .contact-section8 .contact-heading:after {
    left: 0;
    right: 0;
    margin: auto;
  }
  .contact-section8 .background-div .left {
    height: 300px;
  }
  .contact-section8 .background-div .right {
    height: 100%;
  }
}

/* ===================================== */
/*        5.9 Contact Section 9          */
/* ===================================== */

.contact-section9 {
  max-width: 100%;
  margin: auto;
  background-color: transparent;
  margin: 0;
}
.contact-section9 .contact-section-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  background-color: var(--primary);
  padding: 100px 50px;
  border-radius: 30px;
}
.contact-section9 .contact-subheading {
  text-align: left;
  background-color: var(--secondary);
  color: var(--secondary_text_color);
  width: fit-content;
  border-radius: 500px;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: -1px;
  text-transform: initial;
  padding: 9px 20px;
  margin-bottom: 30px;
}
.contact-section9 .phone-num {
  color: var(--primary_text_color);
  font-size: 78px;
  line-height: 78px;
  font-weight: 700;
  margin-bottom: 30px;
}
.contact-section9 .address {
  color: var(--primary_text_color);
  font-size: 24px;
  line-height: 30px;
  letter-spacing: -1px;
  font-weight: 700;
  margin-bottom: 30px;
  text-align: center;
  max-width: 300px;
}
.contact-section9 .contact-bottom {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.contact-section9 .contact-bottom .left {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin-top: -51px;
}
.contact-section9 .contact-bottom i {
  background-color: #fff;
  color: var(--secondary);
  font-size: 24px;
  width: 102px;
  height: 102px;
  border-radius: 999px;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0px 4px 8px 0 rgba(0, 0, 0, 0.08);
  margin-bottom: 30px;
}
.contact-section9 .contact-bottom span {
  font-size: 20px;
  line-height: 26px;
  letter-spacing: -1px;
  font-weight: 700;
  color: var(--secondary);
}
@media (max-width: 991px) {
  .contact-section9 {
    padding-left: 20px;
    padding-right: 20px;
  }
  .contact-section9 .contact-subheading {
    font-size: 14px;
  }
}
@media (max-width: 767px) {
  .contact-section9 .contact-subheading {
    font-size: 12px;
  }
  .contact-section9 .phone-num {
    font-size: 40px;
  }
}

/* ===================================== */
/*       5.10 Contact Section 10         */
/* ===================================== */

.contact-section10 {
  max-width: 100%;
  height: 700px;
  margin: auto;
  padding: 100px 0;
  position: relative;
  background-image: var(--contact-section-background-image);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  z-index: 5;
  display: flex;
  justify-content: center;
  align-items: center;
}
.contact-section10.overlay:before {
  position: absolute;
  content: "";
  background-color: var(--primary);
  opacity: 0.3;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 1;
}
.contact-section10 .contact-section-wrapper {
  position: relative;
  z-index: 5;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background-color: #f5ede7;
  width: 720px;
  padding: 80px;
  border-radius: 50px;
}
.contact-section10 .contact-heading {
  text-align: center;
  color: #31361d;
  font-size: 42px;
  font-weight: 700;
  margin-bottom: 40px;
}
.contact-section10 .contact-text-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}
.contact-section10 .contact-btn {
  color: var(--primary_text_color);
  background-color: var(--primary);
  border-radius: 900px;
  font-size: 19px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 3px;
  padding: 18px 60px;
  border: 1px solid var(--primary_text_color);
  transition: all 0.3s ease-in-out;
}
.contact-section10 .contact-btn:hover {
  color: var(--primary);
  background-color: var(--primary_text_color);
  border: 1px solid var(--primary);
}
@media (max-width: 991px) {
  .contact-section10 .contact-heading {
    font-size: 28px;
  }
}
@media (max-width: 767px) {
  .contact-section10 {
    padding-left: 20px;
    padding-right: 20px;
  }
  .contact-section10 .contact-section-wrapper {
    width: unset;
    padding: 50px 30px;
  }
  .contact-section10 .contact-heading {
    font-size: 22px;
  }
  .contact-section10 .contact-btn {
    font-size: 14px;
  }
}

/* =================================================== */
/* =================================================== */
/* ******      6 Popular Products Section       ****** */
/* =================================================== */
/* =================================================== */

/* ===================================== */
/*    6.1 Popular Products Section 1     */
/* ===================================== */
.popular_section1 .pdt-section-popular .product-block {
  position: relative;
  overflow: hidden;
  background-color: #fff;
  margin-bottom: 2rem;
  text-align: left;
  transition: all 0.1s;
  border: solid 1px #e8e8e8;
  text-align: center;
  padding-bottom: 2rem;
}
.popular_section1 .pdt-section-popular .product-block:hover {
  box-shadow: 0 0 5px 5px rgb(126 141 162 / 10%);
}
.popular_section1 .pdt-section-popular .product-details {
  padding: 1rem 2rem 1rem;
  text-align: center;
  background-color: #ffffff;
  border-top: solid 1px #ddd;
}
.popular_section1 .pdt-section-popular .prod_category {
  margin-bottom: 0;
}
.popular_section1 .pdt-section-popular .prod_price {
  color: #0d6efd;
  font-size: 1.25rem;
  padding-top: 1.5rem;
  font-weight: 700;
}

/* ===================================== */
/*    6.2 Popular Products Section 2     */
/* ===================================== */
.popular_section2 {
  padding-top: 60px;
}
.popular_section2 .product-block {
  padding: 15px !important;
  background-color: #f6f7f9;
  /* font-family: "Open Sans", "Poppins", sans-serif; */
}
.popular_section2 a.btn_shop {
  color: unset;
}
.popular_section2 a.btn_shop:hover {
  color: unset;
}
.popular_section2 .prod_img13 {
  width: 350px !important;
  height: 350px !important;
  object-fit: contain;
}
.popular_section2 .product-name13 {
  font-size: 15px;
  line-height: 1.35;
  letter-spacing: -0.15px;
  color: #222529;
  text-transform: capitalize;
  margin-bottom: 10px;
  white-space: nowrap;
  overflow: hidden;
}
.popular_section2 .product-name13:hover {
  color: var(--primary);
}
.popular_section2 .prod_price13 {
  font-size: 18px;
  line-height: 1;
  font-weight: 800;
  color: #444;
}
.popular_section2 .prod_category13 {
  font-size: 10px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #00000078;
  margin: 10px 0 10px 0;
}
.popular_section2 .ft-nav {
  border: 2px solid #e6e6e6;
  margin: 0;
  padding: 2px 12px;
  color: #999999;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 20px;
  font-weight: 500;
  margin-top: 10px;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 55;
}
.popular_section2 .ft-nav.ft-prev {
  left: 20px;
}
.popular_section2 .ft-nav.ft-next {
  right: 20px;
}
.popular_section2 .ft-nav:hover {
  border-color: var(--primary);
  color: #fff;
  background-color: var(--primary);
}
@media (max-width: 991px) {
  .popular_section2 h3 {
    font-size: 18px;
  }
  .popular_section2 h3::before {
    margin-right: 5px;
  }
  .popular_section2 h3::after {
    margin-left: 5px;
  }
  .popular_section2 .pdtImageWrapper {
    text-align: center !important;
  }
}

/* ===================================== */
/*    6.3 Popular Products Section 3     */
/* ===================================== */
.popular_section3 {
  margin: 50px 0;
  padding: 0;
}
.popular_section3 h3 {
  font-size: 22px;
  letter-spacing: 0.6px;
  font-weight: 700;
  margin-bottom: 8px !important;
  padding: 12px 0;
  position: relative;
}
.popular_section3 h3:before {
  content: "";
  width: 100%;
  height: 2px;
  background-color: #f5f5f5;
  position: absolute;
  bottom: 0px;
  left: 0;
}
.popular_section3 h3:after {
  content: "";
  width: 100px;
  height: 5px;
  background-color: var(--primary);
  position: absolute;
  bottom: -2px;
  left: 0;
}
.popular_section3 .product-section15 {
  margin-bottom: 40px;
}
.popular_section3 .product-block {
  border: 1px solid #e5e5e5;
  border-radius: 8px;
  padding: 10px;
  transition: all 0.3s ease 0s;
  position: relative;
  overflow: hidden;
  text-align: left;
  background-color: #fff;
}
.popular_section3 .product-block:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
}
.popular_section3 .product-details {
  padding: 15px;
  width: 55%;
}
.popular_section3 .pdt-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  transition: all 0.4s ease 0s;
}
.popular_section3 .prod_img15 {
  transition: all 0.4s ease 0s;
  width: 100% !important;
  height: 100% !important;
  object-fit: contain !important;
  padding: 0 10px;
  border-right: 4px double #e5e5e5;
}
.popular_section3 .pdtImageWrapper {
  width: 45% !important;
}
.popular_section3 .btn_shop15 i {
  font-size: 15px;
}
.popular_section3 .product-title {
  font-size: 14px;
  line-height: 18px;
  letter-spacing: 0.4px;
  font-weight: 400;
  text-transform: capitalize;
  color: #444;
  margin: 0;
  margin-bottom: 15px;
  padding: 10px 0;
  margin-bottom: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.popular_section3 .prod_category15 {
  font-size: 10px;
  text-transform: uppercase;
  color: #acacac;
  letter-spacing: 4px;
  font-weight: 300;
  margin: 0;
  padding: 0;
  margin-bottom: 5px;
}
.popular_section3 .product-desc15 {
  display: block;
  text-overflow: ellipsis;
  /* word-break: break-all; */
  overflow: hidden;
  max-height: 50px;
  font-size: 14px;
  line-height: 1.7;
  letter-spacing: 0.4px;
  color: #777;
  position: relative;
  padding-right: 10px;
  margin-bottom: 8px;
}
.popular_section3 .product-desc-wrapper:after {
  content: "...";
  position: absolute;
  right: 1px;
  bottom: 4px;
  color: #777;
}
.popular_section3 .prod_price15 {
  font-size: 16px;
  line-height: 18px;
  letter-spacing: 0.4px;
  font-weight: 600;
  color: var(--secondary);
  margin-bottom: 25px;
}
.popular_section3 .btn_shop15 {
  border-radius: 100px;
  padding: 8px 15px;
  font-size: 14px;
  line-height: 1.42;
  letter-spacing: 1px;
  font-weight: 400;
  transition: all 0.4s ease;
}
@media (max-width: 767px) {
  .popular_section3 .product-title {
    font-size: 12px;
    line-height: 14px;
  }
  .popular_section3 .prod_category15 {
    font-size: 8px;
  }
  .popular_section3 .product-desc15 {
    font-size: 10px;
    line-height: 1.3;
    max-height: 28px;
  }
  .popular_section3 .product-desc-wrapper::after {
    right: 0px;
    bottom: -2px;
  }
  .popular_section3 .prod_price15 {
    font-size: 12px;
  }
}

/* ===================================== */
/*    6.4 Popular Products Section 4     */
/* ===================================== */

/* ===================================== */
/*    6.5 Popular Products Section 5     */
/* ===================================== */

/* ===================================== */
/*    6.6 Popular Products Section 6     */
/* ===================================== */

/* ===================================== */
/*    6.7 Popular Products Section 7     */
/* ===================================== */
.popular_section7 #related_prods {
  border-top: unset;
  margin-bottom: 4rem;
  padding-top: 4rem;
}

.popular_section7 .popular-heading {
  font-weight: 700;
  color: var(--primary);
  margin-bottom: 0.5;
}

.popular_section7 .popular-text {
  font-weight: 400;
  font-size: 17px;
  line-height: 26px;
  color: #222;
  margin-bottom: 3rem;
}

.popular_section7 .product-block {
  box-shadow: 0px 0px 50px -38px rgb(0, 0, 0);
  border: solid 1px #e8e8e8;
}

.popular_section7 .product-block:hover {
  box-shadow: 0px 20px 40px rgb(126 141 162 / 60%);
}

.popular_section7 .product-info {
  background-color: #f2f2f2;
  text-align: center;
}

.popular_section7 .prod_category {
  color: var(--primary);
  font-size: 17px;
  line-height: 26px;
  font-weight: 400;
  margin: auto;
  margin-bottom: 0px;
  margin-top: -7%;
  padding: 1rem;
  width: fit-content;
  background-color: #f2f2f2;
  margin-bottom: 3px;
  position: relative;
  z-index: 100;
  border-radius: 5px;
}

.popular_section7 .product-title {
  color: #000;
  font-size: 22px;
  line-height: 30px;
  font-weight: 700;
  margin: 0;
  margin-bottom: 0px;
  padding: 0;
  margin-bottom: 5px;
  text-transform: capitalize;
  margin-bottom: 1.1rem;
}

.popular_section7 .btn-shop {
  font-size: 20px;
  font-weight: 400;
  padding: 0.5rem 2rem;
  border: unset;
  background-color: var(--primary) !important;
  color: #fff !important;
  margin-bottom: 1.5rem;
  border-radius: 5px;
}

/* ===================================== */
/*    6.8 Popular Products Section 8     */
/* ===================================== */
.popular_section8 {
  background-color: transparent;
  margin-top: 100px;
}

.popular_section8 .section8-heading {
  padding: 0 24px;
  margin-bottom: 26px;
  width: fit-content;
  border-bottom: 3px solid #065193;
}
.popular_section8 .section8-heading h1 {
  font-size: 14px;
  font-weight: 600;
  color: #444;
  text-transform: uppercase;
}
.popular_section8 .product-block {
  position: relative;
  overflow: hidden;
  background-color: #fff;
  border: solid 1px #eee;
  box-shadow: 20px 20px 5px rgb(126 141 162 / 10%);
  transition: 0.2s all ease;
}
.popular_section8 .product-block:hover {
  border: solid 1px #0e5dae;
  position: relative;
  z-index: 5;
}
.popular_section8 .product-details {
  padding: 15px;
  text-align: left;
}
.popular_section8 .product-name8 {
  font-size: 18px;
  font-weight: 600;
  text-transform: capitalize;
}
.popular_section8 .prod_price8 {
  font-size: 16px;
  font-weight: 600;
  color: #222;
}
.popular_section8 .prod_category8 {
  color: #a2a2a2;
  margin-bottom: 0;
  text-transform: capitalize;
  font-size: 14px;
  margin-bottom: 4px;
  font-weight: 300;
}
.popular_section8 .prod_desc8 {
  color: #222;
}

.popular_section8 .btn-shop {
  padding: 1rem 1rem;
  font-size: 14px;
  text-transform: uppercase;
  background-color: #065193;
  border: 0;
  font-weight: 600;
  box-shadow: none;
  border-radius: 0;
  width: 100%;
}

/* ===================================== */
/*    6.9 Popular Products Section 9     */
/* ===================================== */

/* ===================================== */
/*   6.10 Popular Products Section 10    */
/* ===================================== */
.popular_section10 {
  height: 600px;
}
.popular_section10 .product-block {
  border: 1px solid #ececec;
  padding: 15px !important;
}
.popular_section10 .btn_shop10 {
  z-index: unset;
  bottom: unset;
  top: unset;
  margin: unset;
  margin-left: unset;
  margin-left: unset;
  width: unset;
  height: unset;
  display: unset;
  justify-content: unset;
  align-items: unset;
  position: unset;
  visibility: unset;
  opacity: unset;
  transform: unset;
  transition: unset;
}
.popular_section10 .popular-btn-grp span {
  padding: 0 5px;
  border: 2px solid #263446;
  text-align: center;
  flex: 0 0 47.845%;
  height: 34px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}
.popular_section10 .popular-btn-grp a {
  font-size: 12px;
  line-height: 12px;
  letter-spacing: 0.96px;
  font-weight: 700;
  color: #263446;
  text-transform: uppercase;
  transition: all 0.3s ease;
}
.popular_section10 .ft-btn1 {
  background-color: var(--primary) !important;
  border-color: var(--primary) !important;
}
.popular_section10 .ft-btn1 a {
  color: #fff !important;
  background-color: transparent !important;
}
.popular_section10 .product-block:hover .btn_shop10 {
  margin: 0 !important;
}
.popular_section10 .ft-btn2:hover {
  background-color: var(--primary) !important;
  border-color: var(--primary) !important;
}
.popular_section10 .ft-btn2:hover a {
  color: #fff !important;
  background-color: transparent !important;
}
.popular_section10 .product-block,
.popular_section10 .product-block .product-details {
  transition: all 0.3s ease;
}
.popular_section10 .product-block:hover,
.popular_section10 .product-block:hover .product-details {
  background-color: #f7f7f7;
}
.popular_section10 .product-block:hover {
  box-shadow: 0 0 0.6rem rgba(0, 0, 0, 0.1);
}
.popular_section10 .popular-btn-grp {
  position: relative;
  max-height: 0;
  transition: max-height 0.3s, opacity 0.3s;
  overflow: hidden;
  opacity: 0;
  visibility: hidden;
  will-change: transform;
}
.popular_section10 .product-block:hover .popular-btn-grp {
  max-height: 100%;
  opacity: 1;
  visibility: visible;
  transition: all 0.35s;
}
.popular_section10 .ft-nav {
  border: 2px solid #e6e6e6;
  margin: 0;
  padding: 2px 12px;
  color: #999999;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 16px;
  font-weight: 500;
  margin-top: 10px;
}
.popular_section10 .ft-button-next {
  margin-left: -2px;
}
.popular_section10 .ft-nav:hover {
  border-color: var(--primary);
  color: #fff;
  background-color: var(--primary);
}

/* ===================================== */
/*   6.11 Popular Products Section 11    */
/* ===================================== */
.popular_section11 .popular-btn-grp span {
  padding: 0 5px;
  border: 2px solid #263446;
  text-align: center;
  flex: 0 0 47.845%;
  height: 34px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}
.popular_section11 .popular-btn-grp a {
  font-size: 12px;
  line-height: 12px;
  letter-spacing: 0.96px;
  font-weight: 700;
  color: #263446;
  text-transform: uppercase;
  transition: all 0.3s ease;
}
.popular_section11 .popular-btn-grp {
  position: relative;
  max-height: 0;
  transition: max-height 0.3s, opacity 0.3s;
  overflow: hidden;
  opacity: 0;
  visibility: hidden;
  will-change: transform;
}
.popular_section11 .product-block:hover .popular-btn-grp {
  max-height: 100%;
  opacity: 1;
  visibility: visible;
  transition: all 0.35s;
}
.popular_section11 .ft-nav {
  border: 2px solid var(--primary);
  color: #fff;
  background-color: var(--primary);
  margin: 0;
  margin-top: 0px;
  margin-left: 0px;
  padding: 7px 25px;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 25px;
  font-weight: 500;
  margin-top: -30px;
  position: relative;
  z-index: 5;
}
.popular_section11 .ft-button-next {
  margin-left: 2px;
}
.popular_section11 .ft-nav:hover {
  border-color: #222;
  color: #fff;
  background-color: #222;
}
@media (max-width: 768px) {
  .popular_section11 {
    height: auto;
    margin-bottom: 40px;
  }
}

/* ===================================== */
/*   6.12 Popular Products Section 12    */
/* ===================================== */
.popular_section12 #related_prods {
  border-top: unset;
  margin-bottom: 4rem;
  padding-top: 60px;
  padding-bottom: 60px;
}

.popular_section12 .fdt-title {
  font-size: 48px;
  line-height: 57px;
  font-weight: 400;
  text-transform: capitalize;
  /* font-family: "Source Serif Pro", serif; */
}
.popular_section12 .fdt-slogan {
  font-size: 18px;
  line-height: 22px;
  font-weight: 400;
  text-transform: capitalize;
  /* font-family: "Source Sans Pro", sans-serif; */
  margin-bottom: 30px;
}
.popular_section12 .pdt-section-popular .product-block {
  border: unset;
  background-color: unset;
}
.popular_section12 .pdt-section-popular .product-block:hover {
  box-shadow: unset;
}
.popular_section12 .product-info {
  background-color: transparent;
  text-align: center;
}
.popular_section12 .prod_category {
  color: var(--primary);
  font-size: 17px;
  line-height: 26px;
  font-weight: 400;
  margin: auto;
  margin-bottom: 0px;
  padding: 10px 0 5px 0;
  width: fit-content;
  margin-bottom: 3px;
  position: relative;
  z-index: 100;
  border-radius: 5px;
}
.popular_section12 .product-title {
  color: #000;
  font-size: 18px;
  line-height: 23px;
  font-weight: 400;
  margin: 0;
  padding: 0;
  margin-bottom: 5px;
  text-transform: capitalize;
}
.popular_section12 .btn-shop {
  font-size: 16px;
  font-weight: 400;
  line-height: 1;
  padding: 18px 37px;
  border-radius: 8px;
  text-transform: uppercase;
  margin-top: 15px;
}

/* ===================================== */
/*   6.13 Popular Products Section 13    */
/* ===================================== */
.popular_section13 .popular-text {
  font-size: 18px;
  line-height: 1.2;
  font-weight: 400;
  text-transform: capitalize;
  margin-bottom: 10px;
  color: var(--primary);
}
.popular_section13 .popular-heading {
  font-size: 42px;
  line-height: 1.2;
  font-weight: 700;
  text-transform: capitalize;
  color: #1c1c24;
}
.popular_section13 .popular-text-wrapper {
  margin-bottom: 30px;
}
.popular_section13 .product-section {
  padding: 0 15px;
}
.popular_section13 .product-block {
  position: relative;
  display: flex;
  margin: auto;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
  margin-bottom: 30px;
}
.popular_section13 .product-block:hover {
  cursor: pointer;
}
.popular_section13 .popular_pdt_overly {
  position: relative;
}
.popular_section13 .popular_pdt_overly:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: "";
  background-color: #f7f7f7;
  opacity: 0;
  z-index: 1;
}
.popular_section13 .pdtImageWrapper {
  width: 100%;
  height: 100%;
  /* min-width: 410px;
      min-height: 410px; */
  display: flex;
  align-items: flex-end;
  justify-content: flex-end;
}
.popular_section13 .prod_img14 {
  width: 100%;
  height: 100%;
  object-fit: contain;
}
.popular_section13 .product-details {
  display: flex;
  justify-content: flex-end;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  margin: auto;
  padding: 40px 60px;
  text-align: right;
  z-index: 5;
  width: 0%;
  height: 100%;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease-in-out;
}
.popular_section13 .product-section:hover .product-details {
  width: 100%;
  opacity: 1;
  visibility: visible;
}
.popular_section13 .product-details:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: "";
  background-color: rgba(255, 255, 255, 0.4);
  backdrop-filter: blur(0px);
  z-index: 2;
  transition: all 0.6s ease-in-out;
}
.popular_section13 .product-section:hover .product-details:before {
  backdrop-filter: blur(10px);
}
.popular_section13 .product-details-inner {
  position: relative;
  z-index: 5;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.popular_section13 .prod_category14 {
  font-size: 18px;
  line-height: 1.2;
  font-weight: 400;
  text-transform: capitalize;
  color: var(--primary);
  margin-bottom: 6px;
}
.popular_section13 .product-name14 {
  font-size: 26px;
  line-height: 1.2;
  font-weight: 700;
  text-transform: capitalize;
  color: #222;
}
@media (max-width: 991px) {
  .popular_section13 .popular-text-wrapper {
    padding: 0 15px !important;
  }
}
@media (max-width: 500px) {
  .popular_section13 .popular-heading {
    font-size: 26px;
  }
}

/* =================================================== */
/* =================================================== */
/* ******            7 CTA Section              ****** */
/* =================================================== */
/* =================================================== */

/* ===================================== */
/*           7.1 CTA Section 1           */
/* ===================================== */

.cta-section1 {
  min-height: 92px;
  display: flex;
  align-items: center;
}
.cta-section1 .outer-wrapper:before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -10;
}
.cta-section1 .outer-wrapper {
  height: 100%;
  width: 100%;
  position: relative;
  background-image: var(--cta-section-background-image);
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: 0;
}
.cta-section1 h4 {
  font-size: 21px;
  line-height: 21px;
  padding: 16px 10px;
  margin: 0;
  margin-left: 20px;
  font-weight: 700;
  text-transform: uppercase;
  position: relative;
  width: max-content;
}
.cta-section1 h6 {
  font-size: 14px;
  line-height: 1;
  font-weight: 500;
  margin: 0;
  text-transform: capitalize;
  color: rgba(255, 255, 255, 0.7);
}
.cta-section1 h4:first-child:before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  transform: rotateZ(-2deg) skew(1deg);
  background-color: #000;
  z-index: -1;
}
.cta-section1 a {
  color: #222529;
  background-color: #fff;
  font-size: 14px;
  line-height: 1.3;
  letter-spacing: 0.14px;
  font-weight: 700;
  padding: 16px 36px;
  margin-right: 20px;
  text-transform: uppercase;
}
.cta-section1 div {
  height: 92px;
  display: flex;
  align-items: center;
}

@media (max-width: 991px) {
  .cta-section1 div {
    height: auto;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    width: 100%;
  }
  .cta-section1 .outer-wrapper {
    padding: 20px 10px;
  }
  .cta-section1 h4 {
    margin-left: 0px;
    font-size: 18px;
    width: auto;
  }
  .cta-section1 h6 {
    margin-left: 0px;
    font-size: 14px;
    padding: 16px 10px;
  }
  .cta-section1 a {
    margin-left: 16px;
  }
}

/* ===================================== */
/*           7.2 CTA Section 2           */
/* ===================================== */
.cta-section2 {
  background-image: var(--cta-section-background-image);
  background-size: cover;
  background-position: center;
  height: 320px;
  display: flex;
  align-items: center;
  position: relative;
  z-index: 1;
  border-radius: 8px;
  margin: 50px auto;
}
.cta-section2::before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  border-radius: 8px;
}
.cta-section2 .cta-data {
  margin: 0 150px;
}
.cta-section2 h2 {
  font-size: 32px;
  line-height: 34px;
  letter-spacing: 0.4px;
  font-weight: 700;
  text-transform: capitalize;
  margin-bottom: 20px;
}
.cta-section2 p {
  font-size: 20px;
  line-height: 22px;
  letter-spacing: 0.4px;
  font-weight: 600;
  margin-bottom: 22px;
}
.cta-section2 .btn-primary {
  font-size: 14px;
  line-height: 20px;
  letter-spacing: 0.4px;
  font-weight: 600;
  padding: 13px 25px;
  text-transform: capitalize;
  border-radius: 100px;
  border: unset;
}
@media (min-width: 768px) {
  .cta-section2 .w-md-100 {
    width: 100% !important;
  }
  .cta-section2 h2 {
    font-size: 26px;
    line-height: 28px;
  }
}
@media (max-width: 991px) {
  .cta-section2 .cta-data {
    margin: 0 50px;
  }
  .cta-section2 p {
    font-size: 14px;
  }
}
@media (max-width: 767px) {
  .cta-section2 {
    width: 90%;
  }
}

/* =================================================== */
/* =================================================== */
/* ******          8 Features Section           ****** */
/* =================================================== */
/* =================================================== */

/* ===================================== */
/*        8.1 Features Section 1         */
/* ===================================== */
.features_section1 {
  margin-top: 70px;
}
.features_section1 .row > div {
  padding: 15px;
}
.features_section1 .card-wrapper {
  background-color: #f7f8f8;
  padding: 15px 30px;
  height: 100%;
}
.features_section1 .icon-wrap {
  border-radius: 100%;
  background-color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 60px;
  height: 60px;
  margin-bottom: 7px;
}
.features_section1 i {
  font-size: 25px;
  color: var(--primary);
}
.features_section1 h3 {
  font-size: 20px;
  letter-spacing: 0.4px;
  font-weight: 400;
  color: #333333;
  margin-left: 15px;
}
.features_section1 p {
  font-size: 14px;
  line-height: 19px;
  letter-spacing: 0.35px;
  font-weight: 400;
  color: #777777;
  font-style: italic;
  margin-top: 10px;
  margin-left: 15px;
}

/* ===================================== */
/*        8.2 Features Section 2         */
/* ===================================== */
.features_section2 .about_section {
  padding: 5rem 0 6rem 0;
  text-align: center;
}
.features_section2 .about_section h2 {
  font-size: 2.5rem;
  font-weight: 700;
  padding-bottom: 3rem;
  margin: 0;
}
.features_section2 .about_section h3 {
  padding: 3.5rem 0 0.5rem 0;
  font-size: 1.7rem;
  font-weight: 700;
}
.features_section2 .about_section h5.title {
  position: relative;
  display: inline-block;
}
.features_section2 .about_section h5.title span {
  background-color: #fff;
  position: relative;
  z-index: 5;
  padding-left: 10px;
  padding-right: 10px;
}
.features_section2 .about_section h5.title:before {
  position: absolute;
  left: 50%;
  height: 2px;
  width: 300px;
  background-color: #fb302e;
  content: "";
  top: 50%;
  margin-bottom: 2rem;
  margin-left: -150px;
}
.features_section2 .about_section .block {
  padding: 2rem;
  margin: 0 auto;
  box-shadow: 2px 0px 17px 10px rgba(0, 20, 10, 0.05);
  margin-top: 4rem;
}
.features_section2 .about_section .block .circle-icon {
  padding: 1rem;
  background-color: #a71928;
  width: 100px;
  height: 100px;
  margin: 0 auto;
  transform: rotate(-45deg);
  border-radius: 6px;
  margin-top: -5.2rem;
}
.features_section2 .about_section .block .circle-icon img {
  transform: rotate(45deg);
  margin: 0 auto;
}

/* ===================================== */
/*        8.3 Features Section 3         */
/* ===================================== */
.features_section3 {
  position: relative;
  z-index: 1;
  margin: auto;
  height: 359px;
  display: flex;
  align-items: center;
  margin: auto;
}
.features_section3 .row {
  justify-content: space-between;
  margin: auto;
  max-width: 1200px;
}
.features_section3 .row .col-a .features-col-wrap {
  height: 235px;
  background-color: inherit;
  padding: 45px;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin-bottom: 25px;
}

.features_section3 .row .col-a i {
  font-size: 40px;
  margin-bottom: 10px;
}
.features_section3 .row .col-a h3 {
  font-size: 26px;
  line-height: 45px;
  font-weight: 400;
  /* font-family: "Source Serif Pro", serif; */
}
.features_section3 .row .col-a p {
  /* font-family: "Source Sans Pro", sans-serif; */
  font-size: 16px;
  line-height: 22px;
  font-weight: 400;
}

.features_section3.ab-5 {
  position: relative;
  z-index: unset;
  max-width: unset;
  margin: auto;
  height: 566px;
  background-color: unset;
  margin-top: 100px;
  overflow: hidden;
}
.features_section3.ab-5 div {
  height: 100%;
}
.features_section3.ab-5 .container-fluid {
  margin: 0;
  padding: 0;
}
.features_section3.ab-5 .col.about-overlay {
  transition: all 0.3s ease;
  position: relative;
}

.features_section3.ab-5 .col {
  margin: 0;
  padding: 0;
}

.features_section3.ab-5 .ab-img {
  object-fit: cover;
  width: 50vw;
  height: 100%;
}

.features_section3.ab-5 .l-img {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  transition: all 0.3s ease;
}

.features_section3.ab-5 .about-overlay:hover .l-img {
  object-fit: cover;
  overflow: hidden;
  transform: scale(1.1);
}
.features_section3.ab-5 .col:first-child::before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
}

.features_section3.ab-5 .about-left-wrapper {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: auto;
  text-align: center;
  width: 500px;
  overflow: hidden;
  color: #fff;
  position: relative;
}

.features_section3.ab-5 .about-brand {
  font-size: 18px;
}
.features_section3.ab-5 .about-title {
  font-size: 50px;
  line-height: 0.961;
  letter-spacing: -0.2px;
  font-weight: 600;
  text-transform: capitalize;
  margin-bottom: 20px;
}
.features_section3.ab-5 .about-content {
  font-size: 16px;
  line-height: 1.5;
  font-weight: 400;
  margin-bottom: 20px;
}

.features_section3.ab-5 .about-btn-color {
  background-color: transparent !important;
  color: #fff !important;
  border: 2px solid white !important;
  padding: 17px 38px;
  margin-top: 20px;
  transition: all 0.3s ease;
  font-size: 14px;
  line-height: 1.2;
  font-weight: 700;
  text-transform: uppercase;
}

.features_section3.ab-5 .about-btn-color i {
  transition: all 0.3s ease;
  margin-left: 5px !important;
}

.features_section3.ab-5 .about-btn-color:hover i {
  margin-left: 20px !important;
}

.features_section3.ab-5 .about-btn-color:hover {
  background-color: #fff !important;
  color: #065193 !important;
}

@media (max-width: 991px) {
  .features_section3 {
    height: auto !important;
  }

  .features_section3.ab-5 .col:first-child::before {
    width: 100%;
  }

  .features_section3.ab-5 .about-left-wrapper {
    width: auto;
  }

  .features_section3.ab-5 .ab-img {
    width: 100vw;
  }

  .features_section3.ab-5 .alo {
    height: 600px !important;
  }

  .features_section3 .row .col-a h3 {
    font-size: 16px;
  }

  .features_section3 .row .col-a p {
    font-size: 14px;
  }
}

/* ===================================== */
/*        8.4 Features Section 4         */
/* ===================================== */

.features_section4 .banner {
  background-position: center 50%;
  background-repeat: repeat-x;
  overflow: hidden;
  padding: 2rem 0 4rem 0;
  background-size: cover;
  min-height: 700px;
  height: calc(100vh - 190px);
  background-image: var(--banner-background-image);
}
.features_section4 .banner .head-title {
  color: #fff;
}
.features_section4 .banner .head-title h1 {
  font-size: 4.5rem;
  text-transform: uppercase;
  font-weight: 700;
  line-height: 1.1;
  margin: 0;
  color: #fff;
}
.features_section4 .banner .head-title h1 small {
  font-size: 1.5rem;
  letter-spacing: 0.6rem;
  display: block;
}
.features_section4 .banner .head-title p {
  padding: 1rem 0rem 1rem 0;
  font-size: 1.5rem;
  font-weight: 400;
}
.features_section4 .banner .btn.btn-primary {
  padding-left: 3rem;
  padding-right: 3rem;
}

.features_section4 .prod-img-wrapper img {
  z-index: 10000;
  position: relative;
}

.features_section4 .about_section {
  padding: 5rem 0 6rem 0;
  text-align: center;
}
.features_section4 .about_section h2 {
  font-size: 2.5rem;
  font-weight: 700;
  padding-bottom: 3rem;
  margin: 0;
}
.features_section4 .about_section h3 {
  padding: 3.5rem 0 0.5rem 0;
  font-size: 1.7rem;
  font-weight: 700;
}
.features_section4 .about_section h5.title {
  position: relative;
  display: inline-block;
}
.features_section4 .about_section h5.title span {
  background-color: #fff;
  position: relative;
  z-index: 5;
  padding-left: 10px;
  padding-right: 10px;
}
.features_section4 .about_section h5.title:before {
  position: absolute;
  left: 50%;
  height: 2px;
  width: 300px;
  background-color: #fb302e;
  content: "";
  top: 50%;
  margin-bottom: 2rem;
  margin-left: -150px;
}
.features_section4 .about_section .block {
  padding: 2rem;
  margin: 0 auto;
  box-shadow: 2px 0px 17px 10px rgba(0, 20, 10, 0.05);
  margin-top: 4rem;
}
.features_section4 .about_section .block .circle-icon {
  padding: 1rem;
  background-color: #a71928;
  width: 100px;
  height: 100px;
  margin: 0 auto;
  transform: rotate(-45deg);
  border-radius: 6px;
  margin-top: -5.2rem;
}
.features_section4 .about_section .block .circle-icon img {
  transform: rotate(45deg);
  margin: 0 auto;
}

.features_section4 .about_section {
  background-color: #e9e9e9;
  padding: 5rem 0;
}
.features_section4 .about_section .abin {
  position: relative;
}
.features_section4 .about_section .block {
  position: relative;
  background-color: #fff;
  max-width: 74%;
  margin: 0 auto;
}
.features_section4 .about_section .block .info {
  padding: 0 2rem;
  font-size: 1.5rem;
}
.features_section4 .about_section h3 {
  padding-bottom: 0;
  font-size: 2.5rem;
}

.features_section4 .border-right {
  border-right: 1px solid #e5e5e5;
}
@media (max-width: 991px) {
  .features_section4 .about_section .block .info {
    padding: 2rem;
  }
}

/* ===================================== */
/*        8.5 Features Section 5         */
/* ===================================== */
.features_section5 {
  position: relative;
  z-index: 1;
  max-width: 1140px;
  margin: auto;
  margin-top: 50px;
}

.features_section5 .row {
  justify-content: space-between;
  margin: auto;
}
.features_section5 .row .col-a .features-col-wrap {
  height: 200px;
  padding: 45px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin-bottom: 24px;
}

.features_section5 .row .col-a i {
  font-size: 40px;
  margin-bottom: 10px;
}
.features_section5 .row .col-a h3 {
  font-size: 18px;
  line-height: 1.6;
  font-weight: 600;
  letter-spacing: -0.045px;
}
.features_section5 .row .col-a p {
  font-size: 14px;
  line-height: 1.72;
  font-weight: 400;
}

/* Responsiveness */
@media (max-width: 767px) {
  .features_section5 {
    position: relative;
    z-index: 1;
    max-width: 1140px;
    margin: auto;
    margin-top: -130px;
  }
  .features_section5 .row .col-a .features-col-wrap {
    outline: 1px solid var(--primary);
  }
}

/* ===================================== */
/*        8.6 Features Section 6         */
/* ===================================== */
.features_section6 {
  background-color: #fff;
  display: flex;
  align-items: center;
}

.features_section6 .box-col-wrap {
  position: relative;
  background-color: var(--primary);
  border-radius: 10px;
  padding: 30px 15px 30px 60px;
  margin-left: 45px;
  z-index: 1;
}

.features_section6 i {
  display: inline-block;
  width: 90px;
  height: 90px;
  text-align: center;
  line-height: 70px;
  font-size: 30px;
  color: #fff;
  background-color: var(--primary);
  border: 10px solid #fff;
  border-radius: 50%;
  position: absolute;
  top: 30px;
  left: -45px;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}

.features_section6 .box-col-wrap:hover i {
  border: 10px solid var(--primary);
  color: var(--primary);
  background-color: #fff;
}

.features_section6 h3 {
  font-size: 20px;
  line-height: 1.2;
  font-weight: 700;
  color: #fff;
}
.features_section6 p {
  font-size: 16px;
  line-height: 1.7;
  font-weight: 400;
  color: #fff;
}
@media (max-width: 991px) {
  .features_section6 h3 {
    font-size: 18px;
  }
  .features_section6 p {
    font-size: 14px;
  }
  .features_section6 .box-col-wrap {
    margin-bottom: 30px;
  }
  .features_section6 .container .row > div:last-child .box-col-wrap {
    margin-bottom: 0px;
  }
}

/* ===================================== */
/*        8.7 Features Section 7         */
/* ===================================== */

.features_section7 {
  position: relative;
  margin: auto;
  margin-bottom: 50px;
}
.features_section7 .row {
  justify-content: space-between;
  margin: auto;
}
.features_section7 .row .col-a .features-col-wrap {
  padding: 45px;
  padding-bottom: 10px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.features_section7 .row .col-a i {
  font-size: 35px;
  color: #fff;
}
.features_section7 .row .col-a .icon-wrapper {
  width: 80px !important;
  height: 80px !important;
  background-color: #000;
  border-radius: 1000px;
  display: flex;
  position: relative;
  align-items: center;
  justify-content: center;
  padding: 0;
  margin: 0;
  margin-bottom: 15px;
}
.features_section7 .row .col-a h3 {
  font-size: 16px;
  line-height: 19px;
  font-weight: 700;
  margin-bottom: 3px;
}
.features_section7 .row .col-a h5 {
  /* font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif; */
  font-size: 14px;
  line-height: 1.2;
  font-weight: 600;
  color: #777777;
  margin-bottom: 16px;
}
.features_section7 .row .col-a p {
  /* font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif; */
  color: #687176;
  font-size: 13px;
  line-height: 24px;
  font-weight: 400;
}

/* ===================================== */
/*        8.8 Features Section 8         */
/* ===================================== */
.features_section8 {
  height: 80px;
}
.features_section8 .fsecton8 {
  width: 100%;
}
@media (max-width: 991px) {
  .features_section8 {
    height: auto;
  }
}

/* ===================================== */
/*        8.9 Features Section 9         */
/* ===================================== */
.features_section9 {
  position: relative;
  z-index: 5000;
  max-width: 1500px;
  margin: auto;
}

.features_section9 .row {
  justify-content: space-between;
  margin: auto;
}
.features_section9 .row .col-a .features-col-wrap {
  height: 235px;
  background-color: inherit;
  padding: 45px;
  border-radius: 10px;
  box-shadow: 5px 5px 30px 0 rgba(0, 0, 0, 0.05);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin-bottom: 25px;
}

.features_section9 .row .col-a i {
  font-size: 40px;
  margin-bottom: 10px;
}
.features_section9 .row .col-a h3 {
  font-size: 18px;
  line-height: 1.6;
  font-weight: 600;
  letter-spacing: -0.045px;
}
.features_section9 .row .col-a p {
  font-size: 14px;
  line-height: 1.72;
  font-weight: 400;
}

/* =================================================== */
/* =================================================== */
/* ******           9 Footer Section            ****** */
/* =================================================== */
/* =================================================== */

/* ===================================== */
/*         9.1 Footer Section 1          */
/* ===================================== */
.footer1 {
  padding-bottom: 0;
}

/* ===================================== */
/*         9.2 Footer Section 2          */
/* ===================================== */
.footer2 .fblock {
  /* background-color: rgba(255, 255, 255, 0.1); */
  padding: 1rem;
  border-radius: 0.5rem;
  min-height: 180px;
}

/* ===================================== */
/*         9.3 Footer Section 3          */
/* ===================================== */
footer.footer3 .footer-nav ul li {
  float: left;
  width: 48%;
}
footer.footer3 .spacer {
  height: 2px;
  width: 80%;
  background-color: var(--primary);
  margin-bottom: 2rem;
  position: relative;
  margin-top: 1rem;
}
footer.footer3 .spacer:before {
  height: 10px;
  width: 10px;
  background-color: var(--primary);
  border-radius: 50%;
  position: absolute;
  left: 0;
  top: -4px;
  content: "";
}

/* ===================================== */
/*         9.4 Footer Section 4          */
/* ===================================== */
.footer4 h5 {
  background-color: rgba(0, 0, 0, 0.6);
  border-radius: 0.5rem;
  padding: 1rem 1.5rem;
}
.footer4 ul,
.footer4 p {
  margin: 1rem 1.5rem;
}
.footer4 ul li {
  border-bottom: dashed 1px #999;
  padding: 1rem 0;
}
.footer4 .copyright {
  background-color: rgba(0, 0, 0, 0.6);
  border-radius: 0.5rem;
}

/* ===================================== */
/*         9.5 Footer Section 5          */
/* ===================================== */
.footer5 {
  padding-bottom: 0;
  font-size: 1rem;
}
.footer5 .copyright {
  background-color: rgba(0, 0, 0, 0.7);
}
.footer5 .copyright p {
  margin: 0;
}
.footer5 .quick-links li {
  padding: 0.5rem;
  float: left;
  width: 44%;
  margin-right: 5%;
  background-color: rgba(255, 255, 255, 0.4);
  margin-bottom: 1rem;
}
.footer5 h5 {
  border-bottom: dashed 1px #fff;
  padding-bottom: 0.75rem;
}

/* ===================================== */
/*         9.6 Footer Section 6          */
/* ===================================== */

.footer6 {
  padding-bottom: 0;
  font-size: 1rem;
  background-color: #0e0e0e;
}
.footer6 .copyright p {
  margin: 0;
}
.footer6 .quick-links li {
  padding: 0.25rem 0;
  float: left;
  width: 44%;
  margin-right: 5%;
  position: relative;
  margin-bottom: 0.8rem;
}
.footer6 h5 {
  padding-bottom: 0.75rem;
  max-width: 300px;
  position: relative;
}
.footer6 .spacer {
  height: 2px;
  width: 80%;
  background-color: var(--primary);
  margin-bottom: 2rem;
  position: relative;
  margin-top: 1rem;
}
.footer6 .spacer:before {
  height: 10px;
  width: 10px;
  background-color: var(--primary);
  border-radius: 50%;
  position: absolute;
  left: 0;
  top: -4px;
  content: "";
}

/* ===================================== */
/*         9.7 Footer Section 7          */
/* ===================================== */
.footer7 {
  padding-bottom: 0;
  font-size: 1rem;
  background-color: #0e0e0e;
}
.footer7 .copyright p {
  margin: 0;
}
.footer7 h5 {
  padding-bottom: 0.75rem;
  position: relative;
}
.footer7 .quick-links ul li {
  position: relative;
  padding-left: 25px;
  padding-top: 0;
  margin-bottom: 1rem;
}
.footer7 .quick-links ul li:before {
  position: absolute;
  content: "";
  left: 0;
  top: 7px;
  border: solid white;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

/* ===================================== */
/*         9.8 Footer Section 8          */
/* ===================================== */

.footer8 .fblock {
  background-color: rgba(0, 0, 0, 0.2);
  padding: 2rem 2rem;
  border-radius: 2rem;
}
.footer8 {
  padding-bottom: 0;
  font-size: 1rem;
}
.footer8 .copyright p {
  margin: 0;
}
.footer8 .quick-links li {
  padding: 0.25rem 0;
  float: left;
  width: 44%;
  margin-right: 5%;
  position: relative;
  margin-bottom: 0.8rem;
}
.footer8 h5 {
  border-bottom: solid 1px #fff;
  padding-bottom: 0.75rem;
  position: relative;
  margin-bottom: 1.5rem;
}
.footer8 h5:before {
  position: absolute;
  bottom: -2px;
  width: 100px;
  height: 3px;
  content: "";
  background-color: #065193;
}
.footer8 .quick-links li {
  background-color: rgba(255, 255, 255, 0.5);
  padding: 0.2rem 1rem;
  border-radius: 0.25rem;
}

/* =================================================== */
/* =================================================== */
/* ******           10 Product Page             ****** */
/* =================================================== */
/* =================================================== */
@media (min-width: 576px) {
  #img-lightbox .modal-dialog {
    max-width: 700px;
  }
}
/* ===================================== */
/*          10.1 Product Page 1          */
/* ===================================== */

.product-page1 .title {
  font-size: 24px;
  font-weight: 600;
  border-top: 3px solid var(--primary) !important;
}
.product-page1 .pdt-img-wrapper {
  position: relative;
}
.product-page1 .pdt-img-wrapper i {
  position: absolute;
  bottom: 15px;
  right: 15px;
  color: #999;
  font-size: 20px;
}

/* ===================================== */
/*          10.2 Product Page 2          */
/* ===================================== */
.product-page2 .breadcrumb-col p {
  margin: 11px 0px !important;
}
.product-page2 .breadcrumb-col .home {
  color: #999;
}
.product-page2 .breadcrumb-col .pdt-name {
  color: #000;
}
.product-page2 .pdt-img-wrapper {
  position: relative;
}
.product-page2 .pdt-image {
  border: unset;
}
.product-page2 .pdt-img-wrapper i {
  position: absolute;
  bottom: 15px;
  right: 15px;
  color: #999;
  font-size: 20px;
}
.product-page2 .pdt-desc-wrapper {
  padding-bottom: 20px;
  margin-bottom: 20px;
  border-bottom: 1px solid #eee;
}
.product-page2 .pdt-desc {
  padding: 0;
  margin: 0;
}
.product-page2 .price-col p {
  font-size: 22px;
}
.product-page2 .pdt-price-wrapper {
  color: var(--secondary);
}
.product-page2 .btn-qty-wrapper {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}
.product-page2 .pdt-button button {
  margin: 0;
  border-radius: 5px;
  max-width: 100%;
  padding-top: 15px;
  padding-bottom: 15px;
  font-size: 14px;
  line-height: 1.2;
  font-weight: 600;
}
.product-page2 .pdt-button {
  width: 300px;
}
.product-page2 .qty-select select.select-qty {
  width: 120px;
  margin-right: 20px;
  border-radius: 5px;
  height: auto;
  padding-top: 15px;
  padding-bottom: 15px;
  font-size: 14px;
  line-height: 1.2;
  font-weight: 600;
  text-align: center !important;
}
.product-page2 .qty-select select.select-qty option {
  padding-left: 20px;
}
.product-page2 .secure-checkout {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  background-color: #f8f7f7;
  border: 1px dashed #c4c4c4;
  border-radius: 5px;
  padding-top: 25px;
  padding-bottom: 25px;
}
.product-page2 .secure-checkout p {
  color: #6f6f6f;
}
.product-page2 .secure-checkout img {
  width: 50px;
  height: auto;
  padding: unset;
  border: unset;
}
.product-page2 #products_desc {
  margin-top: 50px;
}
.product-page2 #products_desc .nav-tabs {
  border: unset !important;
  border-bottom: 2px solid #ebebeb !important;
}
.product-page2 #products_desc .nav_tabs li.active {
  border: unset !important;
  border-bottom: 3px solid var(--primary) !important;
}
.product-page2 #products_desc .title {
  font-size: 20px;
  line-height: 1;
  font-weight: 700;
  padding: 16px 30px;
}
/* Manual Quantity Select */
.product-page2 .span_counter {
  border: unset;
  background: unset;
  height: unset;
  font-size: 14px;
  line-height: 1;
  padding: 0 4px;
  cursor: pointer;
  font-weight: 200;
  color: #686868;
}
.product-page2 .form-control {
  border: unset;
  background: unset;
  height: unset;
  text-align: unset;
  font-size: 14px;
  line-height: 1;
  padding: 0;
  margin: 0;
}
.product-page2 .qty-col {
  border: 1px solid #ccc;
  border-radius: 5px;
  margin: 0px;
  margin-right: 20px;
  width: 120px;
  height: auto;
  padding-top: 10px;
  padding-bottom: 10px;
  font-size: 14px;
  line-height: 1.2;
  font-weight: 600;
  text-align: center !important;
}

@media (max-width: 991px) {
  .product-page2 {
    padding: 20px 0;
  }
  .product-page2 .pdt-data {
    margin: 20px 0;
  }
}

/* =================================================== */
/* =================================================== */
/* ******     11 Related Products Section       ****** */
/* =================================================== */
/* =================================================== */

/* ===================================== */
/*    11.1 Related Products Section 1    */
/* ===================================== */
@media (max-width: 992px) {
  #related_prods h2 {
    padding-left: 1rem;
    padding-right: 1rem;
  }
}
