<style>


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
            12 Contact Page
            13 Cart Page
            14 Header Nav Carts


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

  .banner:before,
  .overlay-background:before {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
  }

  .left-overly:before {
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

    .header_section3 .primary-navigation>.container>div {
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

  .header_section5 header .navbar>.row {
    height: 96px;
    margin: 0;
    padding: 0;
  }

  .header_section5 header .navbar>.row div.h-100 {
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

  .header_section6 .primary-navigation .navbar-nav a.nav-link.nav-active-color:before {
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

  .header_section7 .navbar>div {
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

  .header_section9 .primary-navigation .navbar-nav a.nav-link.nav-active-color:before {
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

    .header_section9 #toggle[aria-expanded="false"]+.mob-men {
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

  .header_section11 .header-top-bar .row>div {
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

  .header_section11 .bottom-head .row>div {
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

  .header_section13 .header-top-bar .row>div {
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

  .header_section14 .topbar .icons>span:first-child {
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
    .header_section15 .header-top-bar .row>div:first-child {
      display: none;
    }

    .header_section15 .header-top-bar .row>div:last-child {
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

  /* ===================================== */
  /*         1.16 Header Section 16           */
  /* ===================================== */

  .header_section16 .header-top-bar {
    height: 65px;
    font-size: 14px;
    line-height: 21px;
    font-weight: 400;
    display: flex !important;
    align-items: center !important;
  }

  .header_section16 .header-top-bar .topbar-box {
    display: flex;
    background: transparent;
    color: #c3c3c3;
    width: fit-content;
    padding: 7px 15px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 600;
  }

  .header_section16 header .logo {
    position: absolute;
    top: -5rem;
  }

  .header_section16 header a.header_brand {
    font-size: 1.75rem;
    font-weight: 700;
    color: #065193;
  }

  .header_section16 header a.header_brand span {
    color: #222222;
  }

  .header_section16 header .navbar {
    padding: 1.25rem 0;
    justify-content: center;
  }

  .header_section16 header .logo-icon {
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

  .header_section16 header .header-content .header-icon {
    padding: 0.625rem 1.25rem;
  }

  .header_section16 header .header-content .header-icon strong {
    font-weight: 500;
    font-size: 0.85rem;
  }

  .header_section16 header .header-content .header-icon p {
    line-height: 1;
    font-size: 15px;
  }

  .header_section16 .primary-navigation .navbar {
    position: relative;
  }

  .header_section16 .primary-navigation .navbar-nav .nav-item {
    border-right: solid 1px rgba(255, 255, 255, 0.2);
  }

  .header_section16 .primary-navigation .navbar-nav .nav-link.active,
  .header_section16 .primary-navigation .navbar-nav .nav-link {
    color: #fff;
    padding: 5px 20px;
    font-size: 1rem;
    text-transform: uppercase;
    font-weight: 600;
  }

  .header_section16 .primary-navigation .navbar-nav.ms-auto .nav-link:last-child {
    padding-right: 0;
  }

  .header_section16 .primary-navigation .navbar-nav.ms-auto .nav-link {
    text-transform: none;
    font-weight: 400;
    font-size: 14px;
  }

  .header_section16 .nav-icon {
    display: none;
  }

  .header_section16 .primary-navigation {
    position: relative;
    z-index: 9;
  }

  .header_section16 .header-icon i {
    color: #065193;
    position: relative;
    top: 1px;
  }

  .header_section16 .navbar .header-icon .far {
    color: #065193;
  }

  .header_section16 h5 {
    margin: 0;
    font-weight: 400;
    font-size: 12px;
  }

  .header_section16 .cwp-contact-info-title {
    font-size: 20px;
    line-height: 32px;
    font-weight: 600;
  }

  .header_section16 .btn-primary,
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

  .header_section16 .cart_link {
    font-weight: 700;
    position: relative;
  }

  .header_section16 .cart_link .btn.btn-update {
    color: #fff;
    background-color: #065193;
    border: 0;
  }

  .header_section16 .cart-nav {
    padding: 1.25rem;
    text-align: center;
  }

  .header_section16 .cart_amt {
    margin-right: 0;
  }

  .header_section16 .cart_bag {
    top: 38px;
  }

  .header_section16 .header16-menu-1 {
    justify-content: center;
    width: 40%;
    border-top: 2px solid #000;
    border-bottom: 2px solid #000;
    padding: 10px 0px;
  }

  .header_section16 .header16-menu-1 ul {
    margin: 0px !important;
    justify-content: space-around;
    width: 100%;
  }

  .header_section16 .header16-menu-2 {
    justify-content: center;
    width: 40%;
    border-top: 2px solid #000;
    border-bottom: 2px solid #000;
    padding: 10px 0px;
  }

  .header_section16 .header16-menu-2 ul {
    margin: 0px !important;
    justify-content: space-around;
    width: 100%;
  }

  .header_section16 .header16-add-to-cart {
    width: 15%;
    display: flex;
    justify-content: center;
  }

  .header_section16 .header16-add-to-cart-icon {
    font-size: 20px;
    border: 2px solid;
    padding: 20px;
    border-radius: 100%;
  }

  @media (min-width: 991px) {
    .header_section16 button#toggle {
      display: none;
    }
  }

  @media (max-width: 991px) {
    .header_section16 .primary-navigation .navbar-nav .nav-item {
      border: unset !important;
      text-align: center;
    }

    .navbar {
      justify-content: space-between !important;
    }

    .header_section16 .header16-add-to-cart {
      width: 100%;
    }
  }

  @media (max-width: 576px) {
    .navbar {
      justify-content: center !important;
    }

    .cart_bag {
      right: -100px;
    }

    .cart_bag::before {
      right: 130px;
    }
  }

  /* ===================================== */
  /*       1.17 Header Section 17           */
  /* ===================================== */

  .header_section17 .topbar {
    height: auto;
    font-size: 13px;
    display: flex;
    align-items: center;
    padding: 20px 0px;
  }

  .header_section17 .topbar17-main {
    width: 100%;
  }

  .header_section17 .topbar .icons span:nth-child(1) {
    border-right: 1px solid #d7d7d7;
  }

  .header_section17 .topbar .icons span:nth-child(2) {
    border-right: 1px solid #d7d7d7;
  }

  .header_section17 .primary-navigation {
    position: relative;
    z-index: 99;
  }

  .header_section17 .topbar17-icon-contain {
    display: flex;
    justify-content: center;
  }

  .header_section17 .topbar17-icon-contain span {
    width: 33.33%;
    justify-content: center;
  }

  .header_section17 .topbar17-icon-contain .content {
    margin-left: 20px;
  }

  .header_section17 .icon i {
    font-size: 30px;
  }

  .header_section17 .topbar17-icon-contain .content>div:nth-child(1) {
    font-size: 20px;
    font-weight: 600;
  }

  .header_section17 .topbar17-icon-contain .content>div:nth-child(2) {
    font-size: 14px;
    font-weight: 400;
  }

  .header_section17 header a.header_brand {
    font-size: 1.5rem;
    font-weight: 700;
    color: #000;
    margin-right: 0;
  }

  .header_section17 .primary-navigation .navbar {
    position: relative;
    height: auto;
  }

  .header_section17 .primary-navigation .navbar-nav .nav-link.active,
  .header_section17 .primary-navigation .navbar-nav .nav-link {
    color: #222;
    padding: 1.25rem 2rem;
    font-size: 14px;
    line-height: 21px;
    font-weight: 500;
  }

  .header_section17 .header17-contain {
    display: flex;
    justify-content: space-between !important;
    align-items: center;
    width: 100%;
    padding: 0px 0px 0px 20px;
  }

  .header_section17 .header17-menu {
    justify-content: right;
  }

  .header_section17 .header17-menu ul {
    margin: 0px !important;
  }

  .header_section17 .cart_link a {
    padding: 20px;
    display: block;
  }

  .header_section17 .menu-icon {
    top: unset !important;
  }

  .header_section17 .cart_link .btn.btn-update {
    color: #fff;
    background-color: #065193;
    border: 0;
  }

  .header_section17 .cart_bag {
    top: 38px;
  }

  .header_section17 .cart_amt {
    margin-left: 5px;
    margin-right: 0;
  }

  .header_section17 .icuser {
    position: relative;
    top: -1px;
  }

  .header_section17 .navbar-toggler-icon {
    display: flex !important;
    width: unset !important;
    height: unset !important;
  }

  /* Nav Bar Responsiveness */
  @media (max-width: 991px) {
    #navbarsExample17 {
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

  @media (max-width: 991px) {
    .header_section17 .primary-navigation .navbar {
      height: 100px;
    }
  }

  @media (max-width: 576px) {
    .header_section17 .topbar {
      display: none;
    }

    .header_section17 .topbar17-icon-contain {
      flex-direction: column;
      align-items: center;
    }

    .header_section17 .primary-navigation .navbar {
      height: auto;
      padding: 35px 0px !important;
    }

    .header_section17 .topbar .icons span:nth-child(1) {
      border-right: none;
      border-bottom: 1px solid #d7d7d7;
      padding: 10px 0px;
    }

    .header_section17 .topbar .icons span:nth-child(2) {
      border-right: none;
      border-bottom: 1px solid #d7d7d7;
      padding: 10px 0px;
    }

    .header_section17 .topbar .icons span:nth-child(3) {
      border-right: none;
      padding: 10px 0px;
    }
  }

  /* ===================================== */
  /*       1.18 Header Section 18           */
  /* ===================================== */

  .header_section18 .primary-navigation .navbar {
    position: relative;
    height: 100px;
  }

  .header_section18 .header18-container {
    width: 100%;
    display: flex;
    align-items: center;
    padding: 0px 0px 0px 50px;
  }

  .header_section18 .header18-container>a {
    font-size: 25px;
    font-weight: 600;
  }

  .header_section18 .header18-menu-container>ul {
    margin: 0px !important;
    align-items: center;
    padding: 10px 20px 10px 50px;
    border-radius: 100px 0px 0px 100px;
  }

  .header_section18 .header18-menu-container {
    justify-content: right;
  }

  .header_section18 .primary-navigation .navbar-nav .nav-link.active,
  .header_section18 .primary-navigation .navbar-nav .nav-link {
    color: #222;
    padding: 10px 40px;
    font-size: 14px;
    line-height: 21px;
    font-weight: 500;
  }

  .header_section18 .menu-icon {
    top: unset !important;
  }

  .header_section18 .cart_link .btn.btn-update {
    color: #fff;
    background-color: #065193;
    border: 0;
  }

  .header_section18 .cart_bag {
    top: 38px;
  }

  .header_section18 .cart_amt {
    margin-left: 5px;
    margin-right: 0;
  }

  .header_section18 .icuser {
    position: relative;
    top: -1px;
  }

  .header_section18 .navbar-toggler-icon {
    display: flex !important;
    width: unset !important;
    height: unset !important;
  }

  /* Nav Bar Responsiveness */
  @media (max-width: 991px) {
    #navbarsExample18 {
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

  @media (max-width: 576px) {
    .header_section18 .header18-container {
      padding: 0px 0px 0px 10px;
    }

    .header_section18 .primary-navigation .navbar {
      height: auto;
      padding: 35px 0px !important;
    }
  }

  /* ===================================== */
  /*       1.19 Header Section 19           */
  /* ===================================== */

  .header_section19 .topbar {
    height: 45px;
    font-size: 14px;
    font-weight: 500;
    background-color: #f5f5f5;
    display: flex;
    align-items: center;
  }

  .header_section19 .primary-navigation {
    position: relative;
    z-index: 99;
    width: 100%;
  }

  .header_section19 header a.header_brand {
    font-size: 1.5rem;
    font-weight: 700;
    color: #000;
    margin-right: 0;
  }

  .header_section19 .topbar19-content span {
    margin-left: 10px;
  }

  .header_section19 {
    z-index: 100;
    width: 100%;
    background: transparent !important;
    left: 0;
    right: 0;
    margin: auto;
  }

  .header_section19 .top-head {
    height: 98px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 20px 20px;
  }

  .header_section19 .header19-navbar-brand {
    width: 40%;
  }

  .header_section19 .header19-content {
    width: 60%;
    justify-content: end;
  }

  .header_section19 .top-head a.header_brand {
    font-size: 26px !important;
    line-height: 36px;
    font-weight: 500;
    padding: 0;
    margin: 0;
  }

  .header_section19 .top-head .header-icon {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .header_section19 .top-head .navRight {
    font-size: 14px;
    width: 33.33%;
  }

  .header_section19 .top-head .navRight i {
    font-size: 20px;
    border: 1px solid var(--secondary);
    border-radius: 100%;
  }

  .header_section19 .top-head .navRight .header19-marker {
    padding: 12px 16px;
  }

  .header_section19 .top-head .navRight .header19-clock {
    padding: 12px;
  }

  .header_section19 .header19-contact-btn {
    font-size: 14px;
    letter-spacing: 1px;
    line-height: normal;
    font-weight: 400;
    padding: 14px 20px;
    border-radius: 3px;
  }

  .header_section19 .top-head .top-text {
    font-weight: 600;
    font-size: 11px;
    line-height: 1.2;
    margin: 0 0 3px;
    opacity: 0.7;
  }

  .header_section19 .top-head .bottom-text {
    font-weight: 700;
    font-size: 18px;
    line-height: 0.9;
  }

  .header_section19 .top-head .header-cart .cart-icon {
    transition: all 0.3s ease;
  }

  .header_section19 .minicart_buttons a:first-child {
    color: #000 !important;
  }

  .header_section19 .bottom-head {
    height: 50px;
    display: flex;
    align-items: center;
  }

  .header_section19 .primary-navigation .navbar-nav .nav-link {
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

  .header_section19 #toggle {
    display: none !important;
  }

  /* @media (max-width: 1400px) {
  .header_section19 .header19-content {
    width: 80%;
  }
  .header_section19 .header19-navbar-brand {
    width: 20%;
  }
  .header_section19 .header19-bottom-header {
    margin-top: 20px;
  }
} */

  @media (max-width: 1200px) {
    .header_section19 .top-head {
      height: 150px;
    }

    .header_section19 .header19-navbar-brand {
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .header_section19 .header19-content {
      width: 100%;
      justify-content: center;
      margin-top: 20px;
    }
  }

  @media screen and (max-width: 991px) {
    .header_section19 .primary-navigation {
      position: absolute;
      top: 90px;
      left: 0;
      right: 0;
      z-index: 99999999999;
    }

    .header_section19 .container {
      padding: 0 !important;
      margin-top: 0px !important;
    }

    .header_section19 .bottom-head {
      height: auto;
    }

    .header_section19 .row,
    .header_section19 .bottom-head {
      padding: 35px 10px !important;
    }

    .header_section19 .primary-navigation li {
      padding: 10px 0 !important;
    }

    .header_section19 #toggle {
      display: unset !important;
    }

    .header_section19 .header19-mobile-content-1 {
      width: 80% !important;
    }

    .header_section19 .header19-mobile-content-2 {
      width: 20% !important;
      display: flex;
      justify-content: right;
    }
  }

  /* ===================================== */
  /*       1.20 Header Section 20           */
  /* ===================================== */

  .header_section20 .topbar {
    height: auto;
    font-size: 14px;
    font-weight: 500;
    background-color: #f5f5f5;
    display: flex;
    align-items: center;
  }

  .header_section20 .primary-navigation {
    position: relative;
    z-index: 99;
    width: 100%;
  }

  .header_section20 header a.header_brand {
    font-size: 1.5rem;
    font-weight: 700;
    color: #000;
    margin-right: 0;
  }

  .header_section20 .topbar20-content span {
    margin-left: 10px;
  }

  .header_section20 .topbar-icons-content {
    width: 50% !important;
    display: flex;
    justify-content: end;
    align-items: center;
  }

  .header_section20 .topbar-contact-btn {
    width: 50% !important;
    display: flex;
    justify-content: start;
    align-items: center;
  }

  .header_section20 {
    z-index: 100;
    width: 100%;
    background: transparent !important;
    left: 0;
    right: 0;
    margin: auto;
  }

  .header_section20 .top-head {
    height: 120px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 20px 20px;
  }

  .header_section20 .header20-navbar-brand {
    width: 100%;
    display: flex;
    justify-content: center;
  }

  .header_section20 .header20-content {
    width: 60%;
    justify-content: end;
  }

  .header_section20 .top-head a.header_brand {
    font-size: 26px !important;
    line-height: 36px;
    font-weight: 500;
    padding: 0;
    margin: 0;
  }

  .header_section20 .top-head .header-icon {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .header_section20 .top-head .navRight {
    font-size: 14px;
  }

  .header_section20 .top-head .navRight i {
    font-size: 20px;
    border: 1px solid #e6e6e6;
    border-radius: 100%;
  }

  .header_section20 .top-head .navRight .header20-marker {
    padding: 12px 16px;
  }

  .header_section20 .top-head .navRight .header20-clock {
    padding: 12px;
  }

  .header_section20 .header20-contact-btn {
    font-size: 14px;
    letter-spacing: 1px;
    line-height: normal;
    font-weight: 400;
    padding: 14px 20px;
    display: block;
  }

  .header_section20 .top-head .top-text {
    font-weight: 600;
    font-size: 11px;
    line-height: 1.2;
    margin: 0 0 3px;
    opacity: 0.7;
  }

  .header_section20 .top-head .bottom-text {
    font-weight: 700;
    font-size: 18px;
    line-height: 0.9;
  }

  .header_section20 .top-head .header-cart .cart-icon {
    transition: all 0.3s ease;
  }

  .header_section20 .minicart_buttons a:first-child {
    color: #000 !important;
  }

  .header_section20 .bottom-head {
    height: 50px;
    display: flex;
    align-items: center;
  }

  .header_section20 .primary-navigation .navbar-nav .nav-link {
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

  .header_section20 #toggle {
    display: none !important;
  }

  .header_section20 .main-menu {
    margin: 0px !important;
    width: 72% !important;
    display: flex;
    justify-content: end;
  }

  .header_section20 .header-cart {
    width: 28% !important;
    display: flex;
    justify-content: end;
  }

  @media (max-width: 1200px) {
    .header_section20 .top-head {
      height: 150px;
    }

    .header_section20 .header20-navbar-brand {
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .header_section20 .header20-content {
      width: 100%;
      justify-content: center;
      margin-top: 20px;
    }
  }

  @media screen and (max-width: 991px) {
    .header_section20 .primary-navigation {
      position: absolute;
      top: 60px;
      left: 0;
      right: 0;
      z-index: 99999999999;
    }

    .header_section20 .container {
      padding: 0 !important;
    }

    .header_section20 .row,
    .header_section20 .bottom-head {
      padding: 0 10px !important;
    }

    .header_section20 .main-menu {
      width: 100% !important;
    }

    .header_section20 .primary-navigation li {
      padding: 10px 0 !important;
    }

    .header_section20 #toggle {
      display: unset !important;
    }

    .header_section20 .header20-mobile-content-1 {
      width: 80% !important;
    }

    .header_section20 .header20-mobile-content-2 {
      width: 20% !important;
      display: flex;
      justify-content: right;
    }
  }

  @media (max-width: 756px) {
    .header_section20 .topbar-icons-content {
      width: 100% !important;
    }

    .header_section20 .topbar-contact-btn {
      display: none;
    }

    .header_section20 .row,
    .header_section20 .bottom-head {
      padding: 20px 10px !important;
    }
  }

  @media (max-width: 576px) {
    .header_section20 .topbar {
      display: none;
    }

    .header_section20 .bottom-head {
      height: auto;
    }

    .header_section20 .primary-navigation {
      top: 90px;
    }
  }

  /* ===================================== */
  /*       1.21 Header Section 21           */
  /* ===================================== */

  .header_section21 .topbar {
    height: auto;
    font-size: 14px;
    font-weight: 500;
    background-color: #f5f5f5;
    display: flex;
    align-items: center;
  }

  .header_section21 .topbar-main-content {
    align-items: center;
  }

  .header_section21 .primary-navigation {
    position: relative;
    z-index: 99;
    width: 100%;
  }

  .header_section21 header a.header_brand {
    font-size: 1.5rem;
    font-weight: 700;
    color: #000;
    margin-right: 0;
  }

  .header_section21 .topbar21-content span {
    margin-left: 10px;
  }

  .header_section21 .topbar-icons-content {
    width: 70% !important;
  }

  .header_section21 .topbar-contact-btn {
    width: 30% !important;
    display: flex;
    justify-content: end;
  }

  .header_section21 {
    z-index: 100;
    width: 100%;
    background: transparent !important;
    left: 0;
    right: 0;
    margin: auto;
  }

  .header_section21 .top-head {
    height: 120px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 20px 20px;
  }

  .header_section21 .header21-navbar-brand {
    width: 40%;
  }

  .header_section21 .header21-content {
    width: 60%;
    justify-content: end;
  }

  .header_section21 .top-head a.header_brand {
    font-size: 26px !important;
    line-height: 36px;
    font-weight: 500;
    padding: 0;
    margin: 0;
  }

  .header_section21 .top-head .header-icon {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .header_section21 .top-head .navRight {
    font-size: 14px;
  }

  .header_section21 .top-head .navRight i {
    font-size: 20px;
    border: 1px solid #e6e6e6;
    border-radius: 100%;
  }

  .header_section21 .top-head .navRight .header21-marker {
    padding: 12px 16px;
  }

  .header_section21 .top-head .navRight .header21-clock {
    padding: 12px;
  }

  .header_section21 .header21-contact-btn {
    font-size: 14px;
    letter-spacing: 1px;
    line-height: normal;
    font-weight: 400;
    padding: 14px 20px;
    display: block;
  }

  .header_section21 .navbar-menu {
    border-right: 2px solid #f7f7f7;
  }

  .header_section21 .top-head .top-text {
    font-weight: 600;
    font-size: 11px;
    line-height: 1.2;
    margin: 0 0 3px;
    opacity: 0.7;
  }

  .header_section21 .top-head .bottom-text {
    font-weight: 700;
    font-size: 18px;
    line-height: 0.9;
  }

  .header_section21 .top-head .header-cart .cart-icon {
    transition: all 0.3s ease;
  }

  /* .header_section21 .minicart_buttons a:last-child {
  background-color: var(--primary) !important;
  color: #fff !important;
  border-color: var(--primary);
}
.header_section21 .minicart_buttons a:last-child:hover {
  background-color: #fff !important;
  color: var(--primary) !important;
  border-color: var(--primary);
} */
  .header_section21 .minicart_buttons a:first-child {
    color: #000 !important;
  }

  /* .header_section21 .minicart_buttons a:first-child:hover {
  background-color: var(--primary) !important;
  color: #fff !important;
  border-color: var(--primary);
} */

  .header_section21 .bottom-head {
    height: 50px;
    display: flex;
    align-items: center;
  }

  .header_section21 .primary-navigation .navbar-nav .nav-link {
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

  .header_section21 #toggle {
    display: none !important;
  }

  @media (max-width: 1200px) {
    .header_section21 .top-head {
      height: 150px;
    }

    .header_section21 .header21-navbar-brand {
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .header_section21 .header21-content {
      width: 100%;
      justify-content: center;
    }
  }

  @media screen and (max-width: 991px) {
    .header_section21 .primary-navigation {
      position: absolute;
      top: 39px;
      left: 0;
      right: 0;
      z-index: 99999999999;
    }

    .header_section21 .container {
      padding: 0 !important;
    }

    .header_section21 .row,
    .header_section21 .bottom-head {
      padding: 0 10px !important;
    }

    .header21-navbar-brand {
      display: none !important;
    }

    .header_section21 .bottom-head {
      width: 100%;
    }

    .header_section21 .primary-navigation li {
      padding: 10px 0 !important;
    }

    .header_section21 #toggle {
      display: unset !important;
    }

    .header_section21 .header21-mobile-content-1 {
      width: 80% !important;
    }

    .header_section21 .header21-mobile-content-2 {
      width: 20% !important;
      display: flex;
      justify-content: right;
    }
  }

  @media (max-width: 767px) {
    .header_section21 .topbar {
      padding: 15px 0px;
    }

    .header_section21 .topbar-icons-content {
      width: 100% !important;
    }

    .header_section21 .topbar-contact-btn {
      display: none;
    }
  }

  @media (max-width: 576px) {
    .header_section21 .topbar21-content {
      display: block;
    }
  }

  /* ===================================== */
  /*         1.22 Header Section 22           */
  /* ===================================== */

  .header_section22 {
    box-shadow: 0 0 12px 1px rgba(0, 0, 0, 0.2);
  }

  .header_section22 .container-fluid {
    padding-left: 15px;
    padding-right: 15px;
    max-width: 1720px;
  }

  .header_section22 .header-top-bar {
    height: 65px;
    font-size: 14px;
    line-height: 21px;
    font-weight: 400;
    display: flex !important;
    align-items: center !important;
  }

  .header_section22 .header-top-bar .topbar-box {
    display: flex;
    background: white;
    color: #065193;
    width: fit-content;
    padding: 7px 15px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 400;
  }

  .header_section22 .shop-btn {
    display: inline-block;
    color: #fff;
    padding: 8px 18px;
    border-radius: 5px;
    border: 1px solid var(--secondary);
  }

  .header_section22 .navbar {
    padding: 0;
    margin: 0;
    width: 100%;
  }

  .header_section22 .navbar-logo {
    display: flex;
    width: 100%;
  }

  .header_section22 .navbar-logo .navbar {
    width: 30%;
  }

  .header_section22 .navbar-logo .top-left {
    width: 70%;
    display: flex;
    justify-content: end;
  }

  .header_section22 .topbar-left {
    display: flex;
    justify-content: center;
  }

  .header_section22 .topbar-left-content {
    width: 80%;
  }

  .header_section22 .top-head {
    height: auto;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
  }

  .header_section22 .navbar-icons-content h6 {
    margin: 0px 0px 0px 10px;
    font-size: 16px;
    font-weight: 700;
  }

  .header_section22 .max-wid {
    border-top: 1px solid #f5f5f5;
    height: 91px;
    display: flex;
    align-items: center;
  }

  .header_section22 .primary-navigation .navbar-nav a.nav-link:before {
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
    top: 36px;
  }

  .header_section22 .primary-navigation .navbar-nav a.nav-link.nav-active-color:before {
    width: 35px;
  }

  .header_section22 .primary-navigation .navbar-nav a.nav-link:hover:before {
    width: 35px;
  }

  .header_section22 .header-top-bar ul.top-bar-right li {
    position: relative;
  }

  .header_section22 header .logo {
    position: absolute;
    top: -5rem;
  }

  .header_section22 header a.header_brand {
    font-size: 26px !important;
    line-height: 36px;
    font-weight: 500;
    padding: 0;
    margin: 0;
  }

  .header_section22 header a.header_brand span {
    color: #424242;
  }

  .header_section22 header .logo-icon {
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

  .header_section22 header .header-content .header-icon {
    padding: 0.625rem 1.25rem;
    border-left: solid 1px rgba(0, 0, 0, 0.1);
  }

  .header_section22 header .header-content .header-icon i {
    color: #065193;
  }

  .header_section22 header .header-content .header-icon strong {
    font-weight: 600;
    font-size: 1rem;
  }

  .header_section22 header .header-content .header-icon p {
    line-height: 1;
    font-size: 15px;
  }

  .header_section22 .primary-navigation .navbar-nav .nav-link {
    color: #363636;
    padding: 15px;
    border-radius: 100px;
    font-size: 16px;
    line-height: 24px;
    font-weight: 600;
    transition: all 0.3s;
    text-transform: capitalize;
    margin: 0 0.25rem;
    position: relative;
  }

  .header_section22 .primary-navigation .navbar-nav .nav-link.active {
    background-color: #065193;
    border-radius: 2rem;
  }

  .header_section22 .header-navbar {
    width: 100%;
  }

  .header_section22 .navbar-menu {
    display: flex;
    align-items: center;
  }

  .header_section22 .nav-icon {
    display: none;
  }

  .header_section22 .primary-navigation {
    position: relative;
    z-index: 9;
    width: 70%;
    display: flex;
    justify-content: end;
  }

  .header_section22 .header-icon .far {
    color: #ff7906;
    position: relative;
    top: 1px;
  }

  .header_section22 .cart_amt {
    color: #333;
  }

  .header_section22 .cart_bag {
    top: 50px;
  }

  .header_section22 .cart_link .btn.btn-update {
    color: #fff;
    background-color: #065193;
    border: 0;
  }

  .nav-home .header_section22 header a.header_brand {
    color: #fff;
    font-weight: 700;
  }

  .nav-home .header_section22 .primary-navigation .navbar-nav .nav-link {
    color: #fff;
  }

  .nav-home .header_section22 .primary-navigation .navbar-nav .nav-link.active {
    background-color: #065193;
    border-radius: 2rem;
  }

  .header_section22 .cart_bag {
    border: 1px solid #000;
  }

  @media (max-width: 991px) {
    .header_section22 .header-top-bar .top-left {
      display: none !important;
    }

    .header_section22 .top-head {
      display: none !important;
    }

    .header_section22 .primary-navigation {
      position: absolute;
      top: 90px;
      left: 0;
      background: var(--primary);
      width: 100%;
    }

    .header_section22 .max-wid {
      height: auto;
      padding: 35px 10px !important;
    }
  }

  @media (min-width: 991px) {
    .header_section22 .alooo {
      display: none !important;
    }

    .header_section22 .alooo2 {
      width: 100% !important;
    }

    .header_section22 button#toggle {
      display: none;
    }
  }

  @media (max-width: 576px) {
    .header_section22 .primary-navigation {
      top: 140px;
    }
  }

  /* ===================================== */
  /*         1.23 Header Section 23           */
  /* ===================================== */

  .header_section23 .topbar-contact-btn {
    width: 100% !important;
    display: flex;
    justify-content: end;
  }

  .header_section23 .topbar-contact-btn a {
    padding: 5px 30px;
    border-radius: 4px;
    font-size: 12px;
    line-height: 16.8px;
    font-weight: 700;
    display: block;
  }

  .header_section23 .navbar {
    height: 60px;
    background-color: #fff;
    color: black;
    padding: 0;
    position: relative;
    z-index: 100;
  }

  .header_section23 .navbar>div {
    height: 100%;
    padding: 0;
    display: flex;
    align-items: center;
  }

  .header_section23 .brand-name-box {
    min-width: 40%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .header_section23 .navbar-nav a {
    color: #4a4c59;
  }

  .header_section23 .nav-menu {
    height: 100%;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.4;
    max-width: 30%;
  }

  .header_section23 .brand-name-box.cart {
    min-width: 30%;
  }

  .header_section23 .cart_amt {
    margin-left: 15px;
  }

  .minicart_buttons .btn-continue,
  .minicart_buttons .btn-continue:hover {
    color: #333 !important;
  }

  /* Menu */

  .header_section23 .nav-link.active {
    color: var(--primary);
  }

  .header_section23 #navbarSupportedContent .navbar-nav {
    text-align: center;
  }

  .header_section23 .cart ul {
    list-style: none;
    margin: 0px;
    text-align: center;
  }

  .header_section23 .cart a {
    text-decoration: none;
  }

  .header_section23 .btn.btn-update {
    background-color: #065193 !important;
    border-color: #065193 !important;
    color: #fff !important;
  }

  .header_section23 .cart_link a.btn:nth-child(1) {
    color: #222 !important;
  }

  .header_section23 .mobile-menu {
    display: none !important;
  }

  @media (max-width: 991px) {
    .header_section23 .mobile-menu {
      display: block !important;
      width: 100%;
    }

    .header_section23 .brand-name-box.cart {
      min-width: 100%;
      display: none !important;
    }

    .header_section23 .desktop-menu {
      display: none !important;
    }

    .header_section23 .nav-menu {
      max-width: 100%;
    }
  }

  @media (max-width: 767px) {
    .header_section23 .brand-name-box {
      min-width: unset;
      width: 70%;
    }

    .header_section23 .navbar-nav a {
      margin: 0 !important;
    }

    .header_section23 .cart ul {
      padding-left: 0;
    }

    .header_section23 .brand-name-box.contact {
      width: 100%;
    }

    .header_section23 .navbar {
      height: auto;
      padding: 35px 10px !important;
    }
  }

  /* ===================================== */
  /*        1.24 Header Section 24           */
  /* ===================================== */

  .header_section24 .topbar {
    padding: 0.5rem 0;
    font-size: 0.9rem;
    background-color: #262626;
  }

  .header_section24 header .header-top-bar {
    padding: 0.5rem 0;
    font-size: 0.85rem;
    background-color: #fff;
    color: #333;
    border-bottom: solid 1px #eee;
  }

  .header_section24 header .header-top-bar ul.top-bar-right li {
    position: relative;
  }

  .header_section24 header .header-top-bar ul.top-bar-right li::after {
    content: "|";
    color: #fff;
    margin: 0 14px;
    position: absolute;
    right: -15px;
    top: 7px;
  }

  .header_section24 .topbar-customer-service {
    width: 25%;
  }

  .header_section24 .topbar-customer-service h5 {
    font-size: 14px;
    font-weight: 400;
  }

  .header_section24 .topbar-contact-details-main {
    width: 75%;
  }

  .header_section24 .contact-details i {
    font-size: 16px;
  }

  .header_section24 .contact-details a {
    font-size: 16px;
    margin-left: 10px !important;
  }

  .header_section24 header .header-top-bar ul.top-bar-right li:last-child::after {
    display: none;
  }

  .header_section24 header .header-top-bar a {
    color: #222;
  }

  .header_section24 header .header-top-bar a:hover {
    color: #111;
    opacity: 0.7;
  }

  .header_section24 header .logo {
    position: absolute;
    top: -5rem;
  }

  .header_section24 header a.header_brand {
    font-size: 1.5rem;
    font-weight: 700;
    color: #000;
  }

  .header_section24 header a.header_brand span {
    color: #222222;
  }

  .header_section24 header .navbar {
    padding: 1.25rem 0;
  }

  .header_section24 .nav-menu-main {
    display: flex;
  }

  .header_section24 .nav-brand-hamburger {
    width: 50%;
  }

  .header_section24 .navbar-brand-main {
    width: 100%;
  }

  .header_section24 .btn-hamburger {
    display: none !important;
  }

  .header_section24 .navbar-nav {
    justify-content: space-between;
  }

  .header_section24 header .logo-icon {
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

  .header_section24 header .header-content .header-icon {
    padding: 0.625rem 1.25rem;
  }

  .header_section24 header .header-content .header-icon strong {
    font-weight: 500;
    font-size: 0.85rem;
  }

  .header_section24 header .header-content .header-icon p {
    line-height: 1;
    font-size: 15px;
  }

  .header_section24 .primary-navigation .navbar {
    position: relative;
  }

  .header_section24 .primary-navigation .navbar-nav .nav-link.active,
  .header_section24 .primary-navigation .navbar-nav .nav-link {
    color: #fff;
    padding: 1.25rem 2rem;
    font-size: 1.1rem;
    font-weight: 500;
  }

  .header_section24 .primary-navigation .navbar-nav.ms-auto .nav-link:last-child {
    padding-right: 0;
  }

  .header_section24 .primary-navigation .navbar-nav.ms-auto .nav-link {
    text-transform: none;
    font-weight: 400;
    font-size: 14px;
  }

  .header_section24 .nav-icon {
    display: none;
  }

  .header_section24 .primary-navigation {
    position: relative;
    z-index: 9;
    border-radius: 50px;
    margin: 20px;
  }

  .header_section24 .header-icon .far {
    color: #cc4452;
    position: relative;
    top: 1px;
  }

  .header_section24 .cart_link .btn.btn-update {
    color: #fff;
    background-color: #065193;
    border: 0;
  }

  .header_section24 .cart_bag {
    top: 38px;
  }

  .header_section24 .cart_amt {
    margin-left: 5px;
    margin-right: 0;
  }

  .header_section24 .icuser {
    position: relative;
    top: -1px;
  }

  @media (max-width: 991px) {
    .header_section24 .nav-menu-main {
      display: block;
    }

    .header_section24 .nav-brand-hamburger {
      width: 100%;
    }

    .header_section24 .navbar-brand-main {
      width: 100%;
    }

    .header_section24 .btn-hamburger {
      display: flex !important;
    }

    .navbar-nav24 .cart-nav {
      padding: 1rem 0;
      width: 100%;
      text-align: center;
    }

    .header_section24 .menu-icon {
      width: 24px;
      position: relative;
      height: 18px;
      top: 2px;
      display: block;
    }

    .header_section24 .menu-icon::before {
      position: absolute;
      height: 2px;
      background-color: #000;
      content: "";
      left: 0;
      top: 0px;
      width: 100%;
    }

    .header_section24 .menu-icon span {
      background-color: #000;
      height: 2px;
      display: block;
      position: absolute;
      width: 100%;
      top: 50%;
      margin-top: -1px;
      left: 0;
    }

    .header_section24 .menu-icon::after {
      position: absolute;
      height: 2px;
      background-color: #000;
      content: "";
      left: 0;
      bottom: 0px;
      width: 100%;
    }

    .header_section24 .menu-icon {
      box-shadow: unset;
    }
  }

  @media (max-width: 767px) {
    .header_section24 .topbar-customer-service {
      width: 100%;
    }

    .header_section24 .topbar-contact-details-main {
      display: none;
    }

    .header_section24 .primary-navigation {
      border-radius: 50px;
      margin: 10px;
    }
  }

  /* ===================================== */
  /*         1.25 Header Section 25           */
  /* ===================================== */

  .header_section25 .topbar-contact-btn {
    display: flex;
    justify-content: center;
  }

  .header_section25 .topbar-contact-btn h4 {
    font-size: 0.9375rem;
    line-height: 25.5px;
    font-weight: 400;
    padding: 6px 0px;
  }

  .header_section25 .navbar {
    height: 80px;
    background-color: #fff;
    color: black;
    padding: 0;
    position: relative;
    z-index: 100;
  }

  .header_section25 .navbar>div {
    height: 100%;
    padding: 0;
    display: flex;
    align-items: center;
  }

  .header_section25 .brand-name-box {
    min-width: 33.33%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .header_section25 .brand-name-box.contact {
    background-color: var(--secondary);
    color: var(--secondary_text_color);
  }

  .header_section25 .navbar-nav a {
    color: #4a4c59;
  }

  .header_section25 .nav-menu {
    height: 100%;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.4;
    max-width: 33.33%;
  }

  .header_section25 .brand-name-box.cart {
    min-width: 33.33%;
  }

  .header_section25 .cart_amt {
    margin-left: 15px;
  }

  .minicart_buttons .btn-continue,
  .minicart_buttons .btn-continue:hover {
    color: #333 !important;
  }

  /* Menu */

  .header_section25 .nav-link.active {
    color: var(--primary);
  }

  .header_section25 #navbarSupportedContent .navbar-nav {
    text-align: center;
    font-size: 14px;
    font-weight: 400;
  }

  .header_section25 .cart ul {
    list-style: none;
    margin: 0px;
    text-align: center;
  }

  .header_section25 .cart a {
    text-decoration: none;
  }

  .header_section25 .btn.btn-update {
    background-color: #065193 !important;
    border-color: #065193 !important;
    color: #fff !important;
  }

  .header_section25 .cart_link a.btn:nth-child(1) {
    color: #222 !important;
  }

  .header_section25 .mobile-menu {
    display: none !important;
  }

  .header_section25 .bottom-navbar ul {
    justify-content: space-between;
  }

  @media (max-width: 991px) {
    .header_section25 .cart_bag {
      left: 0px;
    }

    .header_section25 .mobile-menu {
      display: block !important;
      width: 100%;
    }

    .header_section25 .brand-name-box.cart {
      min-width: 100%;
      display: none !important;
    }

    .header_section25 .desktop-menu {
      display: none !important;
    }

    .header_section25 .nav-menu {
      max-width: 100%;
    }
  }

  @media (max-width: 767px) {
    .header_section25 .brand-name-box {
      min-width: unset;
      width: 70%;
    }

    .header_section25 .navbar-nav a {
      margin: 0 !important;
    }

    .header_section25 .cart ul {
      padding-left: 0;
    }

    .header_section25 .brand-name-box.contact {
      width: 100%;
    }
  }

  @media (max-width: 567px) {
    .header_section25 .navbar {
      height: auto;
      padding: 35px 15px;
    }
  }

  /* ===================================== */
  /*         1.26 Header Section 26           */
  /* ===================================== */

  .header_section26 .topbar-contact-btn {
    display: flex;
    justify-content: space-between;
  }

  .header_section26 .topbar-contact-btn h4 {
    font-size: 0.9375rem;
    line-height: 25.5px;
    font-weight: 400;
    padding: 6px 0px;
    text-align: center;
  }

  .header_section26 .navbar {
    height: 80px;
    background-color: #fff;
    color: black;
    padding: 0;
    position: relative;
    z-index: 100;
  }

  .header_section26 .navbar>div {
    height: 100%;
    padding: 0;
    display: flex;
    align-items: center;
  }

  .header_section26 .brand-name-box {
    min-width: 33.33%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .header_section26 .brand-name-box.contact {
    background-color: var(--secondary);
    color: var(--secondary_text_color);
  }

  .header_section26 .navbar-nav a {
    color: #4a4c59;
  }

  .header_section26 .nav-menu {
    height: 100%;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.4;
    max-width: 33.33%;
  }

  .header_section26 .brand-name-box.cart {
    min-width: 33.33%;
  }

  .header_section26 .cart_amt {
    margin-left: 15px;
  }

  .minicart_buttons .btn-continue,
  .minicart_buttons .btn-continue:hover {
    color: #333 !important;
  }

  /* Menu */

  .header_section26 .nav-link.active {
    color: var(--primary);
  }

  .header_section26 #navbarSupportedContent .navbar-nav {
    text-align: center;
    font-weight: 400;
    font-size: 12.8px;
    line-height: 22px;
    letter-spacing: 1px;
  }

  .header_section26 .cart ul {
    list-style: none;
    margin: 0px;
    text-align: center;
  }

  .header_section26 .cart a {
    text-decoration: none;
  }

  .header_section26 .btn.btn-update {
    background-color: #065193 !important;
    border-color: #065193 !important;
    color: #fff !important;
  }

  .header_section26 .cart_link a.btn:nth-child(1) {
    color: #222 !important;
  }

  .header_section26 .mobile-menu {
    display: none !important;
  }

  .header_section26 .bottom-navbar ul {
    justify-content: space-between;
  }

  @media (max-width: 991px) {
    .header_section26 .mobile-menu {
      display: block !important;
      width: 100%;
    }

    .header_section26 .brand-name-box.cart {
      min-width: 100%;
      display: none !important;
    }

    .header_section26 .desktop-menu {
      display: none !important;
    }

    .header_section26 .nav-menu {
      max-width: 100%;
    }
  }

  @media (max-width: 767px) {
    .header_section26 .topbar-contact-btn {
      flex-direction: column;
      align-items: center;
    }

    .header_section26 .brand-name-box {
      min-width: unset;
      width: 70%;
    }

    .header_section26 .navbar-nav a {
      margin: 0 !important;
    }

    .header_section26 .cart ul {
      padding-left: 0;
    }

    .header_section26 .brand-name-box.contact {
      width: 100%;
    }
  }

  @media (max-width: 576px) {
    .header_section26 .navbar {
      height: auto;
      padding: 35px 10px;
    }
  }

  /* ===================================== */
  /*         1.27 Header Section 27           */
  /* ===================================== */

  .header_section27 .header-top-bar {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding: 0.8rem 0;
    font-size: 0.938rem;
    background-color: #333;
    color: #fff;
  }

  .header_section27 .header-top-bar ul.top-bar-right li {
    position: relative;
  }

  .header_section27 .header-top-bar a {
    color: #fff;
  }

  .header_section27 .header-top-bar ul.top-bar-right li::after {
    content: "/";
    color: #ccc;
    margin: 0 4px;
  }

  .header_section27 .header-top-bar ul.top-bar-right li:last-child::after {
    display: none;
  }

  .header_section27 header .logo {
    position: absolute;
    top: -5rem;
  }

  .header_section27 .top-text {
    font-size: 11px !important;
    line-height: 15px;
    letter-spacing: -0.025px;
    font-weight: 300;
  }

  .header_section27 .bottom-text {
    font-size: 18px !important;
    line-height: 28.8px;
    letter-spacing: normal;
    font-weight: 600;
    border-radius: 5px;
  }

  .header_section27 .cart_amt {
    margin: 0;
  }

  .header_section27 header a.header_brand {
    font-size: 1rem !important;
    font-weight: 700;
    color: inherit;
    margin: 0;
  }

  .header_section27 header a.header_brand span {
    color: #424242;
  }

  .header_section27 header .navbar {
    padding: 0;
  }

  .header_section27 header .navbar>.row {
    height: 96px;
    margin: 0;
    padding: 0;
  }

  .header_section27 header .navbar>.row div.h-100 {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 0;
  }

  .header_section27 header .logo-icon {
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

  .header_section27 header .header-content .header-icon {
    border-right: 1px solid rgba(255, 255, 255, 0.298);
    width: auto;
    display: flex;
    justify-content: end;
  }

  .header_section27 .navbar-nav {
    width: auto;
  }

  .header_section27 .shopping-cart-btn {
    border-radius: 5px;
  }

  .header_section27 header .header-content .header-icon i {
    margin-right: 10px;
  }

  .header_section27 header .header-content .header-icon strong {
    font-weight: 600;
    font-size: 1rem;
  }

  .header_section27 header .header-content .header-icon p {
    line-height: 1;
    font-size: 15px;
  }

  .header_section27 .primary-navigation .navbar {
    position: relative;
    background: unset;
    background-color: unset !important;
    border-top: unset;
    border-bottom: unset;
    margin-left: 20px;
  }

  .header_section27 .primary-navigation .navbar-nav .nav-link.active,
  .header_section27 .primary-navigation .navbar-nav .nav-link {
    color: #222;
    padding: 0.75rem 2rem;
    font-size: 14px;
    font-weight: 600 !important;
  }

  .header_section27 .nav-icon {
    display: none;
  }

  .header_section27 .primary-navigation {
    position: relative;
    z-index: 9;
  }

  .header_section27 .header-icon .far {
    color: #ff7906;
    position: relative;
    top: 1px;
  }

  .header_section27 .cart_text i {
    color: #999;
  }

  .header_section27 .cart_amt {
    color: #333;
    font-size: 1.25rem;
  }

  .header_section27 .cart_bag {
    top: 50px;
  }

  .header_section27 .cart_link .btn.btn-continue {
    color: #065193;
    border-color: #065193;
  }

  .header_section27 .cart_link .btn.btn-update {
    color: #fff;
    background-color: #065193;
    border: 0;
  }

  @media (max-width: 992px) {
    .header_section27 .primary-navigation {
      /* background: black !important; */
      left: 0 !important;
      position: absolute !important;
      top: 75px !important;
      right: 0 !important;
      text-align: center !important;
      z-index: 99 !important;
    }
  }

  @media (min-width: 991px) {
    .header_section27 button#toggle {
      display: none;
    }
  }

  @media (max-width: 991px) {
    .header_section27 .primary-navigation .navbar {
      margin-left: 0px;
    }
  }

  /* ===================================== */
  /*       1.28 Header Section 28           */
  /* ===================================== */

  .header_section28 {
    max-width: 1920px;
    margin: auto;
    align-items: center;
    width: 100%;
  }

  .header_section28 .topbar {
    border-radius: 50px;
  }

  .header_section28 .topbar-contact-btn {
    display: flex;
    justify-content: space-between;
  }

  .header_section28 .topbar-contact-btn h4 {
    font-size: 0.9375rem;
    line-height: 25.5px;
    font-weight: 400;
    padding: 6px 0px;
  }

  .header_section28 .navbar-nav12 {
    width: 100%;
    align-items: center;
    padding: 20px 0px;
  }

  .header_section28 .primary-navigation {
    position: relative;
    z-index: 9;
    width: 100%;
  }

  .header_section28 .primary-navigation .navbar {
    padding: 1.25rem 0;
    position: relative;
    font-size: 14px;
    line-height: 21px;
    font-weight: 700;
    text-transform: capitalize;
  }

  .header_section28 .cart_link {
    padding: 15px 35px;
    border-radius: 50px;
  }

  .header_section28 .desktop-cart {
    display: flex;
  }

  .header_section28 .mobile-cart {
    display: none;
  }

  .header_section28 header a.header_brand {
    font-weight: 700;
  }

  .header_section28 .primary-navigation .navbar-nav .nav-link.active,
  .header_section28 .primary-navigation .navbar-nav .nav-link {
    padding: 10px 30px;
  }

  .header_section28 .primary-navigation .navbar-nav.ms-auto .nav-link:last-child {
    padding-right: 0;
  }

  .header_section28 .primary-navigation .navbar-nav.ms-auto .nav-link {
    text-transform: none;
    font-weight: 400;
    font-size: 14px;
  }

  .header_section28 .minicart_buttons .btn-continue {
    border: 1px solid var(--primary);
  }

  @media screen and (max-width: 991px) {
    .header_section28 .navbar-logo {
      width: 80%;
    }

    .header_section28 .navbar-menu {
      width: 0%;
    }

    .header_section28 .navbar-cart {
      width: 10%;
    }

    .header_section28 .navbar-nav12 {
      padding: 35px 0px;
    }

    .header_section28 .primary-navigation {
      top: 0;
      margin: auto;
    }

    .header_section28 .header_brand {
      color: #222 !important;
    }

    .header_section28 ul.navbar-nav:nth-child(2) {
      margin-left: 15px;
    }

    .header_section28 #navbarsExample03 {
      position: absolute;
      width: 100%;
      margin: auto;
      left: 0;
      right: 0;
      top: 60px;
      text-align: center;
      padding: 25px 0;
      color: #fff !important;
    }

    .header_section28 .text-center {
      justify-content: start !important;
    }

    .header_section28 .w-100 {
      margin: unset !important;
    }

    .header_section28 .navbar-toggler-icon {
      display: flex !important;
      width: unset !important;
      height: unset !important;
    }

    .header_section28 .desktop-cart {
      display: none;
    }

    .header_section28 .mobile-cart {
      display: flex;
    }
  }

  @media (max-width: 767px) {
    .header_section28 .topbar-contact-btn {
      flex-direction: column;
      align-items: center;
    }
  }

  @media (max-width: 576px) {
    .header_section29 .navbar {
      height: auto !important;
      padding: 35px 10px !important;
    }
  }

  /* ===================================== */
  /*         1.29 Header Section 29           */
  /* ===================================== */

  .header_section29 .topbar-contact-btn {
    display: flex;
    justify-content: space-between;
  }

  .header_section29 .topbar-contact-btn h4 {
    font-size: 0.9375rem;
    line-height: 25.5px;
    font-weight: 400;
    padding: 6px 0px;
  }

  .header_section29 .navbar {
    height: 100px;
    background-color: #fff;
    color: black;
    padding: 0;
    position: relative;
    z-index: 100;
  }

  .header_section29 .navbar>div {
    height: 100%;
    padding: 0;
    display: flex;
    align-items: center;
  }

  .header_section29 .brand-name-box {
    min-width: 25%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
  }

  .header_section29 .brand-name-box.contact {
    background-color: var(--secondary);
    color: var(--secondary_text_color);
  }

  .header_section29 .navbar-nav a {
    color: #4a4c59;
  }

  .header_section29 .nav-menu {
    height: 100%;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.4;
    max-width: 45%;
    position: relative;
  }

  .header_section29 .brand-name-box.cart {
    min-width: 30%;
  }

  .header_section29 .cart_amt {
    margin-left: 15px;
  }

  .minicart_buttons .btn-continue,
  .minicart_buttons .btn-continue:hover {
    color: #333 !important;
  }

  /* Menu */

  .header_section29 .nav-link.active {
    color: var(--primary);
  }

  .header_section29 #navbarSupportedContent .navbar-nav {
    text-align: center;
    font-weight: 500;
    font-size: 14px;
    line-height: 32px;
    letter-spacing: normal;
  }

  .header_section29 .cart ul {
    list-style: none;
    margin: 0px;
    text-align: center;
  }

  .header_section29 .cart a {
    text-decoration: none;
  }

  .header_section29 .btn.btn-update {
    background-color: #065193 !important;
    border-color: #065193 !important;
    color: #fff !important;
  }

  .header_section29 .cart_link {
    padding: 15px 15px;
  }

  .header_section29 .cart_link a.btn:nth-child(1) {
    color: #222 !important;
  }

  .header_section29 .mobile-menu {
    display: none !important;
  }

  .header_section29 .bottom-navbar ul {
    justify-content: space-between;
  }

  .header_section29 .header-icon {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .header_section29 .header29-marker {
    padding: 12px;
    border-radius: 50px;
  }

  .header_section29 .top-text {
    font-weight: 600;
    font-size: 11px;
    line-height: 1.2;
    margin: 0 0 3px;
    opacity: 0.7;
  }

  .header_section29 .bottom-text {
    font-weight: 700;
    font-size: 18px;
    line-height: 0.9;
  }

  @media (max-width: 991px) {
    .header_section29 .navbar>div {
      justify-content: space-between;
    }

    .header_section29 .mobile-menu {
      display: block !important;
      width: 100%;
    }

    .header_section29 .brand-name-box.cart {
      min-width: 100%;
      display: none !important;
    }

    .header_section29 .desktop-menu {
      display: none !important;
    }

    .header_section29 .nav-menu {
      max-width: 100%;
    }

    .header_section29 .cart_bag {
      right: unset;
    }
  }

  @media (max-width: 767px) {
    .header_section29 .topbar-contact-btn {
      flex-direction: column;
      align-items: center;
    }

    .header_section29 .brand-name-box {
      min-width: unset;
      width: 70%;
    }

    .header_section29 .navbar-nav a {
      margin: 0 !important;
    }

    .header_section29 .cart ul {
      padding-left: 0;
    }

    .header_section29 .brand-name-box.contact {
      width: 100%;
    }
  }

  /* ===================================== */
  /*         1.30 Header Section 30           */
  /* ===================================== */

  .header_section30 .topbar {
    padding: 0.8rem 0;
    font-size: 0.9rem;
  }

  .header_section30 header .header-top-bar {
    padding: 0.5rem 0;
    font-size: 0.85rem;
    background-color: #fff;
    color: #333;
    border-bottom: solid 1px #eee;
  }

  .header_section30 header .header-top-bar ul.top-bar-right li {
    position: relative;
  }

  .header_section30 header .header-top-bar ul.top-bar-right li::after {
    content: "|";
    color: #fff;
    margin: 0 14px;
    position: absolute;
    right: -15px;
    top: 7px;
  }

  .header_section30 .topbar-contact-details-main {
    width: 100%;
  }

  .header_section30 .contact-details i {
    font-size: 16px;
  }

  .header_section30 .contact-details a {
    font-size: 16px;
    margin-left: 10px !important;
  }

  .header_section30 header .header-top-bar ul.top-bar-right li:last-child::after {
    display: none;
  }

  .header_section30 header .header-top-bar a {
    color: #222;
  }

  .header_section30 header .header-top-bar a:hover {
    color: #111;
    opacity: 0.7;
  }

  .header_section30 .topbar-contact-btn {
    display: flex;
    justify-content: space-between;
  }

  .header_section30 .topbar-contact-btn h4 {
    font-size: 0.9375rem;
    line-height: 25.5px;
    font-weight: 400;
    padding: 6px 0px;
  }

  .header_section30 .navbar {
    height: 100px;
    background-color: #fff;
    color: black;
    padding: 0;
    position: relative;
    z-index: 100;
  }

  .header_section30 .navbar>div {
    height: 100%;
    padding: 0;
    display: flex;
    align-items: center;
  }

  .header_section30 .brand-name-box {
    min-width: 25%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
  }

  .header_section30 .brand-name-box.contact {
    background-color: var(--secondary);
    color: var(--secondary_text_color);
  }

  .header_section30 .navbar-nav a {
    color: #4a4c59;
  }

  .header_section30 .nav-menu {
    height: 100%;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.4;
    max-width: 45%;
    position: relative;
  }

  .header_section30 .brand-name-box.cart {
    min-width: 30%;
  }

  .header_section30 .cart_amt {
    margin-left: 15px;
  }

  .minicart_buttons .btn-continue,
  .minicart_buttons .btn-continue:hover {
    color: #333 !important;
  }

  /* Menu */

  .header_section30 .nav-link.active {
    color: var(--primary);
  }

  .header_section30 #navbarSupportedContent .navbar-nav {
    text-align: center;
    font-weight: 500;
    font-size: 16px;
    line-height: 32px;
  }

  .header_section30 .cart ul {
    list-style: none;
    margin: 0px;
    text-align: center;
  }

  .header_section30 .cart a {
    text-decoration: none;
  }

  .header_section30 .btn.btn-update {
    background-color: #065193 !important;
    border-color: #065193 !important;
    color: #fff !important;
  }

  .header_section30 .cart_link {
    padding: 15px 15px;
  }

  .header_section30 .cart_link a.btn:nth-child(1) {
    color: #222 !important;
  }

  .header_section30 .mobile-menu {
    display: none !important;
  }

  .header_section30 .bottom-navbar ul {
    justify-content: space-between;
  }

  .header_section30 .header-icon {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .header_section30 .header30-marker {
    font-size: 2rem;
    line-height: 75px;
    padding: 12px;
    border-radius: 50px;
  }

  .header_section30 .top-text {
    font-weight: 400;
    font-size: 16px;
    line-height: 32px;
    margin: 0 0 3px;
    opacity: 0.7;
  }

  .header_section30 .bottom-text {
    font-weight: 600;
    font-size: 14px;
    line-height: 1.2;
  }

  @media (max-width: 991px) {
    .header_section30 .navbar>div {
      justify-content: space-between;
    }

    .header_section30 .mobile-menu {
      display: block !important;
      width: 100%;
    }

    .header_section30 .brand-name-box.cart {
      min-width: 100%;
      display: none !important;
    }

    .header_section30 .desktop-menu {
      display: none !important;
    }

    .header_section30 .nav-menu {
      max-width: 100%;
    }

    .header_section30 .cart_bag {
      right: unset;
    }
  }

  @media (max-width: 767px) {
    .header_section30 .topbar-contact-btn {
      flex-direction: column;
      align-items: center;
    }

    .header_section30 .brand-name-box {
      min-width: unset;
      width: 70%;
    }

    .header_section30 .navbar-nav a {
      margin: 0 !important;
    }

    .header_section30 .cart ul {
      padding-left: 0;
    }

    .header_section30 .brand-name-box.contact {
      width: 100%;
    }
  }

  @media (max-width: 576px) {
    .header_section30 .contact-details {
      display: block !important;
      margin: 10px 0px !important;
      text-align: center;
    }

    .header_section30 .navbar {
      height: auto;
      padding: 35px 10px;
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
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
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
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
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
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
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
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
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
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
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
    padding: 40px;
  }

  .banner-section6 .banner {
    overflow: hidden;
    color: #fff;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
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

  .banner-section6 .banner>.container {
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
      padding-left: unset !important;
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
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
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
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
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

  .banner-section8 .prod-img-wrapper>img {
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
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
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
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
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

  .banner-section11 .row>div.pe-5 {
    padding-right: unset !important;
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

    .banner-section12 .row>div {
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
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
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
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
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

  /* ===================================== */
  /*         2.16 Hero Section 16            */
  /* ===================================== */

  .banner-section16 .banner {
    overflow: hidden;
    background-repeat: repeat;
    background-color: #999;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
    padding: 0px 0px;
    height: 750px;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    border-radius: 50px;
  }

  .banner-section16 .wrapper {
    display: flex;
    width: 100%;
    height: 100%;
  }

  .banner-section16 .left {
    width: 50%;
    display: flex;
    align-items: center;
    border-radius: 50px;
  }

  .banner-section16 .left-overly:before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    border-radius: 50px;
  }

  .banner-section16 .banner .head-title {
    max-width: 800px;
    position: relative;
    z-index: 5;
    padding: 0px 100px;
  }

  .banner-section16 .banner .head-title h1 {
    font-size: 41px;
    font-weight: 600;
    line-height: 54px;
    margin-bottom: 40px;
  }

  .banner-section16 .banner .head-title p {
    padding: 0 7rem 0 0;
    font-size: 1.25rem;
    color: #666;
  }

  .banner-section16 .banner .btn.btn-primary {
    padding: 10px 30px;
    font-size: 14px;
    text-transform: capitalize;
    background-color: transparent;
    border: 0;
    font-weight: 500;
    box-shadow: none;
    transition: 0.3s all ease-in;
    border: solid 2px #333333;
    color: #333;
    border-radius: 100px !important;
  }

  .banner-section16 .banner .btn.btn-primary:hover {
    background-color: #333;
    color: #fff;
  }

  .banner-section16 .btn.btn-primary:hover {
    background-color: #b02937;
  }

  @media (max-width: 991px) {
    .banner-section16 .banner .head-title {
      padding: 2rem 0;
      text-align: center;
      max-width: none;
      float: none;
    }

    .banner-section16 .banner .head-title p {
      padding: 0.5rem 1rem 1rem 1rem;
      font-size: 15px;
      line-height: 24px;
      font-weight: 400;
    }

    .banner-section16 .banner {
      height: auto;
    }
  }

  @media (max-width: 767px) {
    .banner-section16 .banner {
      height: 500px;
    }

    .banner-section16 .wrapper {
      display: block;
    }

    .banner-section16 .left {
      width: 100%;
    }

    .banner-section16 .left-overly:before {
      width: 100%;
      height: 50%;
    }

    .banner-section16 .right {
      width: 100%;
    }
  }

  @media (max-width: 576px) {
    .banner-section16 .banner .head-title h1 {
      font-size: 30px;
      line-height: 35px;
      margin-bottom: 20px;
    }

    .banner-section16 .banner .head-title p {
      margin-bottom: 0px;
    }
  }

  /* ===================================== */
  /*         2.17 Hero Section 17           */
  /* ===================================== */

  .banner-section17 .banner {
    background-position: center 50%;
    background-repeat: repeat-x;
    overflow: hidden;
    padding: 3rem 0 3rem 0;
    background-size: cover;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
    min-height: 600px;
  }

  .banner-section17 .banner .hero-pic {
    max-width: 730px;
    margin: 0 auto;
  }

  .banner-section17 .banner .head-title {
    color: #fff;
    padding: 100px 100px;
    min-height: 800px;
    width: 100%;
    margin: auto;
    align-items: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    z-index: 2;
  }

  .banner-section17 .banner .head-title:before {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border-radius: 0px;
    z-index: 1;
  }

  .banner-section17 .banner .head-title .text-wrapper {
    position: relative;
    z-index: 5;
  }

  .banner-section17 .banner .head-title h1 {
    font-size: 100px;
    font-weight: 600;
    line-height: 1;
    margin: 0;
    color: #000;
    letter-spacing: -7px;
  }

  .banner-section17 .banner .head-title h1 small {
    font-size: 1.5rem;
    letter-spacing: 0.6rem;
    display: block;
  }

  .banner-section17 .banner .head-title p {
    font-size: 16px;
    font-weight: 400;
    line-height: 32px;
    color: #000;
  }

  .banner-section17 .banner .btn.btn-primary {
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 2.1px;
    line-height: 14px;
    padding: 1.5rem 6rem;
    border-radius: 30px;
    text-transform: uppercase;
    margin-top: 60px !important;
  }

  @media (max-width: 991px) {
    .banner-section17 .banner .head-title {
      min-width: unset;
      width: auto;
    }
  }

  @media (max-width: 767px) {
    .banner-section17 .banner .head-title {
      min-height: 400px;
      padding: 40px 40px;
    }

    .banner-section17 .banner .head-title h1 {
      font-size: 40px;
      letter-spacing: -0.5px;
    }

    .banner-section17 .banner .head-title p {
      font-size: 14px;
    }

    .banner-section17 .banner .btn.btn-primary {
      padding: 1.25rem 3rem;
    }
  }

  @media (max-width: 576px) {
    .banner-section17 .banner .head-title {
      padding: 40px 20px;
    }

    .banner-section17 .banner .head-title h1 {
      font-size: 30px;
    }
  }

  /* ===================================== */
  /*         2.18 Hero Section 18           */
  /* ===================================== */

  .banner-section18 {
    background-color: #f5f5f5 !important;
    padding: 0px;
    padding-bottom: 0px;
  }

  .banner-section18 .banner {
    overflow: hidden;
    color: #fff;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
    padding: 0rem 0 0rem 0;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 700px !important;
    text-align: left;
    margin: auto;
    border-radius: 0px;
  }

  .banner-section18 .banner .banner-wrapper {
    max-width: 790px !important;
  }

  .banner-section18 .banner .head-title {
    position: relative;
    padding-left: 50px;
  }

  .banner-section18 .banner .head-title h1 {
    font-size: 70px;
    line-height: 80px;
    font-weight: 600;
    letter-spacing: normal;
    margin: 0 0 1rem 0;
    position: relative;
    text-transform: capitalize;
  }

  .banner-section18 .btn-primary {
    display: inline-block;
    padding: 19px 61px;
    font-size: 16px;
    line-height: 25px;
    letter-spacing: 0px;
    text-transform: uppercase;
    font-weight: 600;
    border: 0;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    opacity: 1 !important;
    z-index: 1;
    position: relative;
    border-radius: 0px;
    overflow: hidden;
    margin-top: 50px !important;
  }

  .banner-section18 .btn-primary img:nth-child(1) {
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

  .banner-section18 .btn-primary img:nth-child(2) {
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

  .banner-section18 .btn-primary:hover img:nth-child(1) {
    bottom: 0;
    left: 0;
    opacity: 0.2;
    visibility: visible;
    max-width: 30px;
  }

  .banner-section18 .btn-primary:hover img:nth-child(2) {
    top: 0;
    right: 0;
    opacity: 0.2;
    visibility: visible;
    max-width: 30px;
  }

  @media (max-width: 767px) {
    .banner-section18 .banner {
      height: 400px !important;
    }

    .banner-section18 .head-title {
      text-align: center;
      padding-left: unset !important;
    }

    .banner-section18 .head-title h1 {
      font-size: 40px !important;
      line-height: 40px !important;
    }

    .banner-section18 .btn-primary {
      padding: 13px 34px;
      line-height: 17px;
    }
  }

  /* ===================================== */
  /*       2.19 Hero Section 19           */
  /* ===================================== */

  .banner-section19 .banner {
    background-color: #065193;
    background-position: center 50%;
    background-repeat: repeat-x;
    overflow: hidden;
    padding: 5rem 0;
    min-height: 95vh;
    background-size: cover;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
  }

  .banner-section19 .banner .head-title {
    z-index: 20;
  }

  .banner-section19 .head-contain {
    display: flex;
    justify-content: center;
  }

  .banner-section19 .banner .head-title .heading {
    font-size: 50px;
    font-weight: 700;
    line-height: 1.2;
    letter-spacing: normal;
    text-transform: uppercase;
  }

  .banner-section19 .banner .head-title .heading::after {
    content: "";
    border-bottom: 10px solid #fff;
    width: 200px;
    display: block;
    position: absolute;
    margin-top: 10px;
  }

  .banner-section19 .btn-buy-now {
    position: absolute;
    transform: rotate(-90deg);
    left: 0px;
    border: transparent !important;
    top: 200px;
  }

  .banner-section19 .btn-contact-us {
    position: absolute;
    transform: rotate(-90deg);
    left: -15px;
    border: transparent !important;
    top: 450px;
  }

  /* Banner Responsiveness */

  @media (max-width: 991px) {
    .banner-section19 .banner .head-title .heading {
      font-size: 34px;
    }
  }

  @media (max-width: 576px) {
    .banner-section19 .banner {
      min-height: 450px;
    }

    .banner-section19 .banner .head-title .heading {
      font-size: 30px;
      margin-left: 20px;
    }

    .banner-section19 .banner .head-title .heading::after {
      width: 150px;
    }

    .banner-section19 .btn-buy-now {
      transform: rotate(0deg);
      left: 15%;
      top: 350px;
    }

    .banner-section19 .btn-contact-us {
      transform: rotate(0deg);
      left: 50%;
      top: 350px;
    }
  }

  /* ===================================== */
  /*       2.20 Hero Section 20           */
  /* ===================================== */

  .banner-section20 {
    min-height: 510px;
  }

  .banner-section20 .bg-slider {
    z-index: 5;
    position: relative;
    width: 100%;
    min-height: 510px;
  }

  .banner-section20 .bg-slider .swiper-slide {
    position: relative;
    width: 100%;
  }

  .banner-section20 .bg-slider .swiper-slide::before {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.158);
  }

  .banner-section20 .bg-slider .swiper-slide img {
    width: 100%;
    object-fit: cover;
    background-position: center;
    background-size: cover;
    pointer-events: none;
  }

  .banner-section20 .swiper-slide .text-content {
    position: absolute;
    top: 25%;
    left: 140px;
    right: 140px;
    text-align: center;
    transition: 0.3s ease;
  }

  .banner-section20 .title {
    font-size: 55px;
    line-height: 60px;
    font-weight: 700;
    letter-spacing: 5px;
    margin-bottom: 16px;
    transform: translateY(-50px);
    opacity: 0;
    text-transform: uppercase;
    margin-top: 60px;
  }

  .banner-section20 .swiper-slide-active .text-content .title {
    transform: translateY(0);
    opacity: 1;
    transition: 1s ease;
    transition-delay: 0.3s;
    transition-property: transform, opacity;
  }

  .banner-section20 p.slogan {
    font-size: 16px;
    line-height: 23px;
    letter-spacing: 10px;
    font-weight: 600;
    transform: translateX(-80px);
    opacity: 0;
    margin-bottom: 16px;
    text-transform: uppercase;
  }

  .banner-section20 p.tagline {
    font-size: 14px;
    line-height: 1;
    letter-spacing: -0.28px;
    font-weight: 700;
    text-transform: uppercase;
    transform: translateX(-80px);
    opacity: 0;
  }

  .banner-section20 .swiper-slide-active .text-content p {
    transform: translateX(0);
    opacity: 1;
    transition: 1s ease;
    transition-delay: 0.3s;
    transition-property: transform, opacity;
  }

  .banner-section20 .btn-group div {
    padding: 7px 30px;
    margin-top: 50px;
    font-size: 13px;
    line-height: 25px;
    letter-spacing: 3px;
    font-weight: 700;
    text-transform: uppercase;
  }

  .banner-section20 .btn1 {
    background-color: #ffffff00 !important;
    opacity: 0;
    transform: translateY(80px);
  }

  .banner-section20 div.swiper-slide:nth-child(2)>div:nth-child(2)>div:nth-child(3)>div:nth-child(1) {
    border: 3px solid #fff !important;
  }

  .banner-section20 .btn1:hover .banner-section20 .btn-group a {
    color: #000 !important;
  }

  .banner-section20 .btn2 {
    border: 2px solid #fff;
    background-color: transparent;
    margin-left: 16px;
    opacity: 0;
    transform: translateY(80px);
  }

  .banner-section20 .btn-group a {
    color: #fff;
  }

  .banner-section20 .swiper-slide-active .btn1 {
    transform: translateY(0);
    opacity: 1;
    transition: 1s ease;
    transition-delay: 0.3s;
    transition-property: transform, opacity;
  }

  .banner-section20 .swiper-slide-active .btn2 {
    transform: translateY(0);
    opacity: 1;
    transition: 1s ease;
    transition-delay: 0.5s;
    transition-property: transform, opacity;
  }

  .banner-section20 .dark-layer:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 80vh;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.1);
  }

  .banner-section20 .bg-slider-thumbs {
    z-index: 777;
    position: absolute;
    bottom: 2em;
    left: 50%;
    transform: translateX(-50%);
    transition: 0.3s ease;
  }

  .banner-section20 .thumbs-container {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    padding: 10px 3px;
    border-radius: 10px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    border-right: 1px solid rgba(255, 255, 255, 0.1);
  }

  .banner-section20 .thumbs-container img {
    width: 50px;
    height: 35px;
    margin: 0 5px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    transform: scale(1);
    border: unset;
  }

  .banner-section20 .thumbs-container img.swiper-slide-thumb-active {
    transform: scale(1.2);
    border: 1px solid #4646462b;
  }

  .banner-section20 .navigation-btn {
    padding: 12px 24px;
    color: #fff;
    transition: all 0.3s ease;
  }

  .banner-section20 .navigation-btn::after {
    font-size: 40px;
    font-weight: 900;
    line-height: 1;
    padding: 0;
    margin: 0;
  }

  /* .banner-section20 .navigation-btn:hover {
  background-color: var(--primary);
  border-color: var(--primary);
} */

  /* .banner-section20 .contact-container-main {
  display: flex;
  justify-content: center;
  background-color: #00000030;
  padding: 20px 0px;
} */

  .banner-section20 .contact-details-main {
    display: flex;
  }

  .banner-section20 .contact-container {
    display: flex;
    width: 75%;
    padding: 15px;
  }

  .banner-section20 .contact-details {
    width: 33.33%;
    display: flex;
    flex-direction: row;
    align-content: center;
    justify-content: center;
  }

  .banner-section20 .contact-details h5 {
    font-size: 14px;
    line-height: 16px;
    font-weight: 700;
    text-transform: uppercase;
  }

  .banner-section20 .contact-details p {
    margin: 0px;
    font-size: 14px;
    line-height: 26px;
    font-weight: 400;
  }

  .banner-section20 .icons {
    display: flex;
    align-items: center;
    margin-right: 20px;
    font-size: 30px;
    color: #fff;
  }

  .banner-section20 .details {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  /*======= Media queries (max-width: 1380px) =======*/
  /* @media (max-width: 1380px) {
  .banner-section20 .contact-container-main {
    top: -145px;
  }
} */

  /*======= Media queries (max-width: 1100px) =======*/
  @media screen and (max-width: 1100px) {
    .banner-section20 .bg-slider-thumbs {
      bottom: 3em;
    }
  }

  /*======= Media queries (max-width: 785px) =======*/
  @media screen and (max-width: 991px) {
    .banner-section20 .swiper-slide .text-content {
      left: 80px;
      right: 80px;
    }

    .banner-section20 .swiper-slide .text-content .title {
      font-size: 44px;
      line-height: 1.2;
      margin-bottom: 15px;
    }

    .banner-section20 .swiper-slide .text-content p.slogan {
      font-size: 14px;
      margin-bottom: 15px;
      letter-spacing: 3px;
    }

    .banner-section20 .swiper-slide .text-content p.tagline {
      font-size: 12px;
    }

    .banner-section20 .btn-group div {
      margin-top: 50px;
      padding: 8px 15px;
    }

    .banner-section20 .navigation-btn {
      padding: 8px 15px;
    }

    .banner-section20 .navigation-btn::after {
      font-size: 20px;
    }

    .banner-section20 .contact-container {
      display: block;
    }

    .banner-section20 .contact-details {
      width: 100%;
      padding: 20px 0px;
      justify-content: left;
    }
  }

  @media screen and (max-width: 767px) {
    .banner-section20 .bg-slider .swiper-slide {
      height: 600px;
    }

    .banner-section20 .bg-slider .swiper-slide img {
      height: 600px;
    }

    .banner-section20 .swiper-slide .text-content .title {
      font-size: 35px;
      margin-top: 20px;
    }

    .banner-section20 .swiper-slide .text-content p.slogan {
      font-size: 10px;
    }

    .banner-section20 .contact-details-main {
      display: block;
    }
  }

  @media (max-width: 576px) {
    .banner-section20 .swiper-slide .text-content {
      left: 10px;
      right: 10px;
    }

    .banner-section20 .swiper-slide .text-content .title {
      font-size: 30px;
    }
  }

  /* ===================================== */
  /*       2.21 Hero Section 21           */
  /* ===================================== */
  .banner-section21 {
    position: relative;
    z-index: unset;
    max-width: unset;
    margin: auto;
    height: 700px;
    background-color: unset;
    overflow: hidden;
  }

  .banner-section21 div {
    height: 100%;
    transition: all 0.3s ease;
  }

  .banner-section21 .container-fluid {
    margin: 0;
    padding: 0;
  }

  .banner-section21 .left-col {
    width: 35%;
  }

  .banner-section21 .right-col {
    width: 65%;
  }

  .banner-section21 .heading {
    /* font-family: "Source Serif Pro", sans-serif; */
    font-size: 44px;
    line-height: 1;
    letter-spacing: 0px;
    font-weight: 500;
    margin-bottom: 21px;
    text-align: left;
  }

  .banner-section21 .tagline {
    font-size: 16px;
    line-height: 25.6px;
    letter-spacing: 0px;
    font-weight: 500;
    margin-top: 30px;
    margin-bottom: 50px;
  }

  .banner-section21 a.btn {
    font-size: 16px;
    line-height: 25.6px;
    padding: 8px 50px;
    text-transform: uppercase;
    border-radius: 0px;
    transition: all 0.3s ease;
  }

  .banner-section21 .col {
    transition: all 0.3s ease;
    position: relative;
    margin: 0;
    padding: 0;
  }

  .banner-section21 .left-col {
    position: relative;
    z-index: 4;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image1"] ?>);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .banner-section21 .ab-img {
    object-fit: cover;
    width: 100%;
    height: 100%;
    position: absolute;
  }

  .banner-section21 .r-img {
    z-index: -1;
    overflow: hidden;
    transition: all 1s ease;
    transform: scale3d(1, 1, 1);
  }

  .banner-section21 .col::before {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    transition: all 0.3s ease;
  }

  .banner-section21 .col.alo::before {
    z-index: 1;
    transition: all 1s ease !important;
  }

  .banner-section21 .left-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
    margin: auto;
    text-align: center;
    width: 800px;
    overflow: hidden;
    color: #fff;
    position: relative;
    left: 200px;
  }

  @media (max-width: 991px) {
    .banner-section21 .col:first-child::before {
      width: 100%;
    }

    .banner-section21 .about-left-wrapper {
      width: auto;
    }

    .banner-section21 .ab-img {
      width: 100%;
    }

    .banner-section21 .heading {
      font-size: 34px;
    }

    .banner-section21 .left-wrapper {
      width: 500px;
      left: 30px;
    }

    .banner-section21 {
      height: auto;
    }

    .banner-section21 .row>div {
      height: 80vh;
    }
  }

  @media (max-width: 576px) {
    .banner-section21 .left-col {
      width: 50%;
    }

    .banner-section21 .right-col {
      width: 50%;
    }

    .banner-section21 .left-wrapper {
      width: 300px;
      left: 30px;
    }

    .banner-section21 .heading {
      font-size: 22px;
    }
  }

  /* ===================================== */
  /*         2.22 Hero Section 22           */
  /* ===================================== */

  .banner-section22 .banner {
    background-position: center 50%;
    background-repeat: repeat-x;
    overflow: hidden;
    background-size: cover;
    display: flex;
  }

  .banner-section22 .banner-contain {
    width: 50%;
    height: 600px;
    display: flex;
    align-items: end;
    justify-content: left;
    padding-left: 60px;
    position: relative;
  }

  .banner-section22 .banner-contain-1 {
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image2"] ?>);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
  }

  .banner-section22 .banner-contain-2 {
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image1"] ?>);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
  }

  .banner-section22 .banner-contain.banner-contain-1 {
    margin-right: 5px;
  }

  .banner-section22 .banner-contain.banner-contain-2 {
    margin-left: 5px;
  }

  .banner-section22 .banner .head-title {
    width: 80%;
    color: #fff;
    position: relative;
    z-index: 5;
    margin-bottom: 80px;
  }

  .banner-section22 .banner .head-title h1 {
    font-size: 32px;
    text-transform: uppercase;
    font-weight: 700;
    margin: 0;
    color: #fff;
    letter-spacing: 3px;
  }

  .banner-section22 .banner .head-title p {
    padding: 1rem 0rem 1rem 0;
    font-size: 18px;
    font-weight: 300;
    letter-spacing: 0px;
    line-height: 32.4px;
  }

  .banner-section22 .banner .btn.btn-primary {
    padding: 14px 50px;
    font-size: 16px;
    text-transform: capitalize;
    border: 0;
    font-weight: 700;
    box-shadow: none;
    border-radius: 12px;
  }

  .banner-section22 .prod-img-wrapper>img {
    z-index: 1 !important;
    position: relative !important;
  }

  @media (max-width: 767px) {
    .banner-section22 .banner {
      display: block;
    }

    .banner-section22 .banner-contain {
      width: 100%;
    }

    .banner-section22 .banner .head-title {
      margin-bottom: 60px;
    }

    .banner-section22 .banner .head-title h1 {
      font-size: 24px;
    }

    .banner-section22 .banner .head-title p {
      font-size: 16px;
    }

    .banner-section22 .banner-contain.banner-contain-2 {
      margin-left: 0px;
      margin-top: 10px;
    }

    .banner-section22 .banner-contain.banner-contain-1 {
      margin-right: 0px;
    }
  }

  @media (max-width: 576px) {
    .banner-section22 .banner .head-title {
      width: 100%;
    }

    .banner-section22 .banner-contain {
      padding-left: unset;
      padding: 0px 10px;
    }
  }

  /* ===================================== */
  /*         2.23 Hero Section 23           */
  /* ===================================== */

  .banner-section23 {
    padding: 40px;
    padding-bottom: 150px;
  }

  .banner-section23 .banner {
    overflow: hidden;
    color: #fff;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
    padding: 5rem 0 5rem 50px;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 650px !important;
    text-align: left;
    margin: auto;
    border-radius: 15px;
  }

  .banner-section23 .banner>.container {
    max-width: 1160px !important;
  }

  .banner-section23 .banner .banner-wrapper {
    max-width: 790px !important;
  }

  .banner-section23 .slogan-wrapper {
    position: relative;
  }

  .banner-section23 .slogan-wrapper:before {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: var(--primary);
    border-radius: 50px;
    z-index: 5;
    opacity: 0.2;
  }

  .banner-section23 .banner-slogan {
    color: #fff;
    font-weight: 700 !important;
    padding: 10px 20px;
    z-index: 6;
    position: relative;
    margin: 0px;
  }

  .banner-section23 .banner .head-title {
    position: relative;
    border-radius: 20px;
    width: 425px;
    height: 500px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
    padding: 0 40px;
    background-color: #fff;
    box-shadow: 0px 0px 20px #44444480;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image1"] ?>);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
  }

  .banner-section23 .banner .head-title:before {
    border-radius: 20px;
  }

  .banner-section23 .banner .head-title h1 {
    font-size: 40px;
    line-height: 1.15;
    font-weight: 700;
    margin: 0 0 1rem 0;
    position: relative;
    text-transform: capitalize;
  }

  .banner-section23 .banner .head-title p {
    font-size: 18px;
    line-height: 1.7;
    font-weight: 400;
    position: relative;
  }

  .banner-section23 .banner-tagline {
    width: 100%;
  }

  .banner-section23 .btn-primary {
    display: inline-block;
    padding: 15px 30px;
    font-size: 16px;
    line-height: 24px;
    font-weight: 600;
    border: 0;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    opacity: 1 !important;
    z-index: 1;
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    width: 100%;
  }

  .banner-section23 .btn-primary img:nth-child(1) {
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

  .banner-section23 .btn-primary img:nth-child(2) {
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

  .banner-section23 .btn-primary:hover img:nth-child(1) {
    bottom: 0;
    left: 0;
    opacity: 0.2;
    visibility: visible;
    max-width: 30px;
  }

  .banner-section23 .btn-primary:hover img:nth-child(2) {
    top: 0;
    right: 0;
    opacity: 0.2;
    visibility: visible;
    max-width: 30px;
  }

  @media (max-width: 767px) {
    .banner-section23 {
      padding: 40px 20px;
    }

    .banner-section23 .banner {
      padding: 5rem 50px 5rem 50px;
      display: flex;
      align-items: end !important;
    }

    .banner-section23 .banner-section23-bg-container {
      display: flex;
      justify-content: center;
    }

    .banner-section23 .banner-section23-bg-contain {
      width: 100%;
    }

    .banner-section23 .banner .head-title {
      width: 100%;
    }

    .banner-section23 .head-title {
      text-align: center;
      padding-left: unset !important;
      width: 100%;
      height: auto !important;
      padding: 20px !important;
    }

    .banner-section23 .head-title h1 {
      font-size: 24px !important;
    }

    .banner-section23 .head-title p {
      font-size: 16px !important;
    }
  }

  @media (max-width: 576px) {
    .banner-section23 .banner-section23-bg-container {
      padding: 0px 0px 30px 0px;
    }
  }

  /* ===================================== */
  /*         2.24 Hero Section 24           */
  /* ===================================== */

  .banner-section24 {
    padding: 40px;
    padding-bottom: 150px;
  }

  .banner-section24 .banner {
    overflow: hidden;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
    padding: 5rem 0 5rem 50px;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 650px !important;
    text-align: left;
    margin: auto;
    border-radius: 15px;
  }

  .banner-section24 .banner>.container {
    max-width: 1160px !important;
  }

  .banner-section24 .banner .banner-wrapper {
    width: 100%;
    position: relative;
  }

  .banner-section24 .banner .banner-wrapper img {
    height: 100%;
  }

  .banner-section24 .banner-slogan {
    background-color: #b479d9;
    background-color: rgba(180, 121, 217, 0.15);
    color: #b479d9 !important;
    font-weight: 700 !important;
    padding: 10px 20px;
    border-radius: 50px;
    display: flex;
    justify-content: center;
  }

  .banner-section24 .banner .head-title {
    position: relative;
    border-radius: 20px;
    width: 100%;
    height: 500px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
    padding: 0 40px;
  }

  .banner-section24 .banner .head-title h1 {
    font-size: 40px;
    line-height: 1.15;
    font-weight: 700;
    margin: 0 0 1rem 0;
    position: relative;
    text-transform: capitalize;
  }

  .banner-section24 .banner .head-title p {
    font-size: 18px;
    line-height: 1.7;
    font-weight: 700;
    margin-top: 20px;
  }

  .banner-section24 .banner-tagline {
    width: 100%;
  }

  .banner-section24 .btn-primary {
    display: inline-block;
    padding: 15px 30px;
    font-size: 16px;
    line-height: 24px;
    font-weight: 600;
    border: 0;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    opacity: 1 !important;
    z-index: 1;
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    margin-top: 30px !important;
  }

  .banner-section24 .btn-primary img:nth-child(1) {
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

  .banner-section24 .btn-primary img:nth-child(2) {
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

  .banner-section24 .btn-primary:hover img:nth-child(1) {
    bottom: 0;
    left: 0;
    opacity: 0.2;
    visibility: visible;
    max-width: 30px;
  }

  .banner-section24 .btn-primary:hover img:nth-child(2) {
    top: 0;
    right: 0;
    opacity: 0.2;
    visibility: visible;
    max-width: 30px;
  }

  @media (max-width: 767px) {
    .banner-section24 {
      padding: 40px 20px;
    }

    .banner-section24 .banner {
      height: auto !important;
      padding: 5rem 50px 5rem 50px;
      display: flex;
      align-items: start !important;
    }

    .banner-section24 .banner-section23-bg-container {
      display: flex;
      justify-content: center;
    }

    .banner-section24 .banner-section23-bg-contain {
      width: 100%;
      display: block;
    }

    .banner-section24 .banner .banner-wrapper {
      height: auto;
    }

    .banner-section24 .banner .head-title {
      width: 100%;
    }

    .banner-section24 .head-title {
      text-align: left;
      padding-left: unset !important;
      width: 100%;
      height: auto !important;
      padding: 20px !important;
    }

    .banner-section24 .head-title h1 {
      font-size: 30px !important;
    }

    .banner-section24 .head-title p {
      font-size: 16px !important;
    }

    .banner-section24 .btn-primary {
      padding: 10px 30px;
    }
  }

  @media (max-width: 576px) {
    .banner-section24 .banner-section23-bg-container {
      padding: 30px 10px 30px 10px;
    }

    .banner-section24 .btn-primary {
      padding: 8px 25px;
    }
  }

  /* ===================================== */
  /*         2.25 Hero Section 25           */
  /* ===================================== */

  .banner-section25 .banner {
    overflow: hidden;
    background-repeat: repeat;
    position: relative;
    padding: 5rem 0 5rem 0;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
  }

  .banner-section25 .contain-row-25 {
    display: flex;
  }

  .banner-section25 .column-1 {
    width: 50%;
    position: relative;
  }

  .banner-section25 .column-2 {
    width: 50%;
    display: flex;
    align-items: center;
    margin-left: 60px;
    position: relative;
  }

  .banner-section25 .banner .head-title {
    max-width: 100%;
    position: relative;
    z-index: 5;
    text-transform: uppercase;
  }

  .banner-section25 .slogan-wrapper {
    position: relative;
    padding: 15px 20px !important;
    border-radius: 50px;
    display: flex;
    justify-content: center;
    width: 500px;
  }

  .banner-section25 .slogan-wrapper:before {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: var(--primary);
    border-radius: 50px;
    z-index: 5;
    opacity: 0.2;
  }

  .banner-section25 .banner-slogan {
    color: #fff;
    font-weight: 700 !important;
    z-index: 6;
    position: relative;
    margin: 0px;
  }

  .banner-section25 .banner .head-title h1 {
    font-size: 48px !important;
    font-weight: 600 !important;
    line-height: 1.25 !important;
    margin-top: 40px !important;
  }

  .banner-section25 .banner .head-title p {
    font-size: 18px;
    line-height: 1.8;
    font-weight: 500;
  }

  .banner-section25 .banner25-btn-contain {
    display: flex;
  }

  .banner-section25 .banner25-btn-icon-contain {
    display: flex;
    align-items: center;
  }

  .banner-section25 .banner .btn.btn-primary {
    padding: 14px 45px;
    font-size: 16px;
    text-transform: capitalize;
    background-color: #065193;
    border: 0;
    border-radius: 12px;
    letter-spacing: 1px;
    font-weight: 600;
    box-shadow: none;
    transition: 0.3s all ease-in;
  }

  .banner-section25 .banner25-contact-btn {
    margin: 0px 10px;
    background: transparent !important;
    padding: 14px 0px 14px 20px;
    font-size: 16px;
    text-transform: capitalize;
    border: 0;
    border-radius: 12px;
    letter-spacing: 1px;
    font-weight: 600;
    box-shadow: none;
    transition: 0.3s all ease-in;
  }

  .banner-section25 i.far:nth-child(2) {
    font-size: 25px;
  }

  .banner-section25 .btn.btn-primary:hover {
    background-color: #b02937;
  }

  .banner-section25 .prod-img-wrapper img {
    border-radius: 10px;
    z-index: 1;
    position: relative;
    width: 100%;
  }

  @media (max-width: 767px) {
    .banner-section25 .contain-row-25 {
      display: block;
      width: 100%;
    }

    .banner-section25 .column-1 {
      width: 100%;
    }

    .banner-section25 .column-2 {
      width: 100%;
      margin-left: 0px;
      margin-top: 30px;
    }

    .banner-section25 .banner .head-title {
      float: unset;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: start;
    }

    .banner-section25 .banner .head-title h1 {
      font-size: 26px !important;
    }

    .banner-section25 .banner .head-title p {
      padding: 0;
      font-size: 18px;
    }

    .banner-section25 .prod-img-wrapper {
      margin-top: 30px;
      text-align: center;
    }

    .banner-section25 .prod-img-wrapper img {
      max-width: 100%;
      width: 100%;
      text-align: center;
    }

    .banner-section25 .slogan-wrapper {
      width: 300px;
      margin: auto;
    }
  }

  /* ===================================== */
  /*         2.26 Hero Section 26           */
  /* ===================================== */

  .banner-section26 .banner {
    overflow: hidden;
    background-repeat: repeat;
    position: relative;
    padding: 8rem 0 8rem 0;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 500px;
  }

  .banner-section26 .contain-row-25 {
    display: flex;
    height: 450px;
  }

  .banner-section26 .column-1 {
    width: 35%;
    margin: 0px 10px 0px 0px;
    padding: 0px 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image1"] ?>);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
  }

  .banner-section26 .column-2 {
    width: 65%;
    display: flex;
    align-items: center;
    margin: 0px 0px 0px 10px;
    position: relative;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image2"] ?>);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
  }

  .banner-section26 .banner26-img-contain {
    width: 50%;
    display: flex;
    align-items: center;
    position: relative;
  }

  .banner-section26 .banner26-img-contain>img:nth-child(1) {
    height: 100%;
  }

  .banner-section26 .banner26-content-contain {
    width: 50%;
    padding: 0px 15px;
  }

  .banner-section26 .banner .head-title {
    max-width: 100%;
    position: relative;
    z-index: 5;
    text-transform: uppercase;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .banner-section26 .banner-slogan {
    font-weight: 400 !important;
    padding: 5px 20px !important;
    border-radius: 50px;
    display: flex;
    justify-content: center;
    width: 300px;
    letter-spacing: 0.3em;
  }

  .banner-section26 .banner .head-title h1 {
    font-size: 32px !important;
    font-weight: 400 !important;
    line-height: 1.25 !important;
    text-align: center;
    margin-top: 15px;
  }

  .banner-section26 .banner .head-title p {
    padding: 1rem 1rem 1rem 1rem;
    font-size: 11px;
    line-height: 1.8;
    font-weight: 500;
    margin: 0px;
  }

  .banner-section26 .banner .banner-tagline-color {
    font-size: 16px !important;
    font-weight: 300 !important;
    line-height: 1.588 !important;
  }

  .banner-section26 .banner25-btn-contain {
    display: flex;
  }

  .banner-section26 .banner25-btn-icon-contain {
    display: flex;
    align-items: center;
  }

  .banner-section26 .banner .btn.btn-primary {
    padding: 16px 40px;
    font-size: 12px;
    text-transform: capitalize;
    border-radius: 0px;
    letter-spacing: 0.3em;
    font-weight: 600;
    box-shadow: none;
    transition: 0.3s all ease-in;
    margin-top: 20px;
  }

  .banner-section26 .banner25-contact-btn {
    margin: 0px 10px;
    background: transparent !important;
    padding: 14px 0px 14px 20px;
    font-size: 16px;
    text-transform: capitalize;
    border: 0;
    border-radius: 12px;
    letter-spacing: 1px;
    font-weight: 600;
    box-shadow: none;
    transition: 0.3s all ease-in;
  }

  .banner-section26 .banner25-contact-btn:hover {
    color: #2ebb77 !important;
  }

  .banner-section26 .banner25-contact-btn:hover i.far:nth-child(2) {
    color: #2ebb77 !important;
  }

  .banner-section26 i.far:nth-child(2) {
    font-size: 25px;
  }

  .banner-section26 .btn.btn-primary:hover {
    background-color: #b02937;
  }

  .banner-section26 .prod-img-wrapper img {
    border-radius: 10px;
    z-index: 1;
    position: relative;
    width: 100%;
  }

  @media (max-width: 991px) {
    .banner-section26 .banner {
      height: auto;
      padding: 2rem 0 2rem 0;
    }

    .banner-section26 .contain-row-25 {
      display: block;
      width: 100%;
      height: auto;
    }

    .banner-section26 .column-1 {
      width: 100%;
      padding: 40px 30px;
    }

    .banner-section26 .column-2 {
      width: 100%;
      margin-left: 0px;
      margin-top: 30px;
    }

    .banner-section26 .banner .head-title {
      float: unset;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .banner-section26 .banner-slogan {
      width: 100%;
    }

    .banner-section26 .banner .head-title h1 {
      font-size: 26px !important;
      margin-top: 20px;
    }

    .banner-section26 .banner .head-title p {
      padding: 0;
      font-size: 12px;
    }

    .banner-section26 .prod-img-wrapper {
      margin-top: 0px;
      text-align: center;
    }

    .banner-section26 .prod-img-wrapper img {
      max-width: 100%;
      width: 100%;
      text-align: center;
    }
  }

  @media (max-width: 767px) {
    .banner-section26 .column-2 {
      display: block;
    }

    .banner-section26 .banner26-img-contain {
      width: 50%;
      width: 100%;
    }

    .banner-section26 .banner26-content-contain {
      width: 50%;
      width: 100%;
      padding: 40px 30px;
    }
  }

  /* ===================================== */
  /*         2.27 Hero Section 27           */
  /* ===================================== */

  .banner-section27 .banner {
    overflow: hidden;
    background-repeat: repeat;
    position: relative;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
  }

  .banner-section27 .contain-row-25 {
    display: flex;
    height: 500px;
    width: 100%;
  }

  .banner-section27 .column-1 {
    width: 60%;
    display: flex;
    align-items: center;
    justify-content: right;
  }

  .banner-section27 .column-2 {
    width: 40%;
    display: flex;
    align-items: center;
    position: relative;
  }

  .banner-section27 .column-2 img {
    width: 100%;
    height: 100%;
  }

  .banner-section27 .banner .head-title {
    max-width: 100%;
    position: relative;
    z-index: 5;
    text-transform: uppercase;
    width: 65%;
  }

  .banner-section27 .banner .head-title h1 {
    font-size: 50px !important;
    font-weight: 400 !important;
    line-height: 1.25 !important;
    margin-top: 40px !important;
  }

  .banner-section27 .banner .head-title p {
    padding: 1rem 1rem 1rem 0;
    font-size: 18px;
    line-height: 1.8;
    font-weight: 300;
  }

  .banner-section27 .banner25-btn-contain {
    display: flex;
  }

  .banner-section27 .banner25-btn-icon-contain {
    display: flex;
    align-items: center;
  }

  .banner-section27 .banner .btn.btn-primary {
    padding: 20px 50px;
    font-size: 12px;
    text-transform: capitalize;
    background-color: #065193;
    border: 0;
    border-radius: 0px;
    letter-spacing: 3.3px;
    font-weight: 500;
    box-shadow: none;
    transition: 0.3s all ease-in;
  }

  .banner-section27 .prod-img-wrapper img {
    border-radius: 10px;
    z-index: 1;
    position: relative;
    width: 100%;
  }

  @media (max-width: 767px) {
    .banner-section27 .contain-row-25 {
      display: block;
      width: 100%;
      height: auto;
    }

    .banner-section27 .column-1 {
      width: 100%;
      padding: 50px 0px;
    }

    .banner-section27 .column-2 {
      width: 100%;
      margin-left: 0px;
      margin-top: 0px;
    }

    .banner-section27 .column-2 img {
      height: auto;
    }

    .banner-section27 .banner .head-title {
      float: unset;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: start;
      width: 95%;
    }

    .banner-section27 .banner .head-title h1 {
      font-size: 26px !important;
    }

    .banner-section27 .banner .head-title p {
      padding: 0;
      font-size: 18px;
    }
  }

  /* ===================================== */
  /*         2.28 Hero Section 28           */
  /* ===================================== */

  .banner-section28 .banner {
    overflow: hidden;
    background-repeat: repeat;
    position: relative;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 50px 0px;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
  }

  .banner-section28 .contain-row-25 {
    display: flex;
    width: 100%;
    margin-bottom: 50px;
  }

  .banner-section28 .column-1 {
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: right;
    padding: 0px 20px;
  }

  .banner-section28 .column-2 {
    width: 50%;
    display: flex;
    align-items: center;
    padding: 0px 20px;
    position: relative;
  }

  .banner-section28 .column-2 img {
    width: 100%;
    height: 100%;
    border-radius: 320px 40px 40px 40px;
    border-bottom: 1px solid #c9c9c9;
    border-right: 1px solid #c9c9c9;
    padding: 20px;
  }

  .banner-section28 .banner .head-title {
    max-width: 100%;
    position: relative;
    z-index: 5;
    text-transform: uppercase;
  }

  .banner-section28 .banner .head-title h1 {
    font-size: 75px !important;
    font-weight: 600 !important;
    line-height: 90px !important;
    text-transform: capitalize;
  }

  .banner-section28 .banner .head-title p {
    padding: 1rem 1rem 1rem 0;
    font-size: 20px;
    line-height: 30px;
    font-weight: 400;
    margin: 0px;
    max-width: 533px;
  }

  .banner-section28 .banner .head-title .tagline {
    font-size: 18px;
  }

  .banner-section28 .banner25-btn-contain {
    display: flex;
  }

  .banner-section28 .banner25-btn-icon-contain {
    display: flex;
    align-items: center;
  }

  .banner-section28 .banner .btn.btn-primary {
    padding: 14px 40px;
    font-size: 20px;
    text-transform: capitalize;
    border: 0;
    border-radius: 8px;
    letter-spacing: normal;
    font-weight: 600;
    box-shadow: none;
    margin-top: 20px;
    transition: 0.3s all ease-in;
  }

  .banner-section28 .prod-img-wrapper img {
    border-radius: 10px;
    z-index: 1;
    position: relative;
    width: 100%;
  }

  @media (max-width: 992px) {
    .banner-section28 .banner .head-title h1 {
      font-size: 35px !important;
      line-height: 50px !important;
    }

    .banner-section28 .column-2 img {
      border-radius: 210px 40px 40px 40px;
    }
  }

  @media (max-width: 767px) {
    .banner-section28 .contain-row-25 {
      display: block;
      width: 100%;
      height: auto;
    }

    .banner-section28 .column-1 {
      width: 100%;
      padding: 50px 0px;
    }

    .banner-section28 .column-2 {
      width: 100%;
      margin-left: 0px;
      margin-top: 0px;
    }

    .banner-section28 .column-2 img {
      height: auto;
    }

    .banner-section28 .banner .head-title {
      float: unset;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: start;
      width: 95%;
    }

    .banner-section28 .banner .head-title h1 {
      font-size: 26px !important;
      line-height: 50px !important;
      margin-top: 20px;
    }

    .banner-section28 .banner .head-title p {
      padding: 0;
      font-size: 18px;
      margin-top: 20px;
    }

    .banner-section28 .banner .btn.btn-primary {
      margin-top: 40px;
    }
  }

  /* ===================================== */
  /*         2.29 Hero Section 29           */
  /* ===================================== */

  .banner-section29 .banner {
    overflow: hidden;
    background-repeat: repeat;
    position: relative;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 50px 0px;
    background-color: unset;
  }

  .banner-section29 .banner:before {
    position: unset !important;
    content: unset !important;
    background-color: unset;
  }

  .banner-section29 .overlay-background::before {
    border-radius: 16px;
  }

  .banner-section29 .contain-row-25 {
    display: flex;
    width: 100%;
  }

  .banner-section29 .column-1 {
    width: 65%;
    display: flex;
    align-items: center;
    justify-content: left;
    padding: 0px 0px 0px 60px;
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    border-radius: 20px;
    position: relative;
  }

  .banner-section29 .column-2 {
    width: 35%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 40px;
    position: relative;
  }

  .banner-section29 .column-2 img {
    width: 100%;
    height: 100%;
    border-radius: 320px 40px 40px 40px;
    border-bottom: 1px solid #c9c9c9;
    border-right: 1px solid #c9c9c9;
    padding: 20px;
  }

  .banner-section29 .banner .head-title {
    max-width: 100%;
    position: relative;
    z-index: 5;
    text-transform: uppercase;
    width: 100%;
  }

  .banner-section29 .column-1>div {
    width: 400px;
  }

  .banner-section29 .banner .head-title h1 {
    font-size: 50px;
    font-weight: 600 !important;
    line-height: 52.5px;
    text-transform: capitalize;
  }

  .banner-section29 .banner .head-title p {
    padding: 1rem 1rem 1rem 0;
    font-size: 16px;
    line-height: 30px;
    font-weight: 400;
    margin: 0px;
    max-width: 533px;
  }

  .banner-section29 .banner .head-title .tagline {
    font-size: 18px;
    font-weight: 600;
  }

  .banner-section29 .banner25-btn-contain {
    display: flex;
  }

  .banner-section29 .banner25-btn-icon-contain {
    display: flex;
    align-items: center;
  }

  .banner-section29 .banner .btn.btn-primary {
    padding: 14px 40px;
    font-size: 16px;
    text-transform: capitalize;
    border: none !important;
    border-radius: 8px;
    letter-spacing: normal;
    font-weight: 600;
    box-shadow: none;
    margin-top: 20px;
    transition: 0.3s all ease-in;
  }

  .banner-section29 .prod-img-wrapper img {
    border-radius: 10px;
    z-index: 1;
    position: relative;
    width: 100%;
  }

  .banner-section29 .column-2 .box-1 {
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image1"] ?>);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    padding: 40px;
    border-radius: 16px;
    width: 100%;
    position: relative;
  }

  .banner-section29 .column-2 .box-2 {
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image2"] ?>);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    padding: 40px;
    border-radius: 16px;
    margin-top: 30px;
    width: 100%;
    position: relative;
  }

  .banner-section29 .banner-slogan-box-1 {
    font-size: 12px !important;
    padding: 0px !important;
  }

  .banner-section29 .banner-slogan-box-2 {
    font-size: 12px !important;
    padding: 0px !important;
  }

  .banner-section29 .banner-heading-box-1 {
    font-size: 20px !important;
    line-height: 40px !important;
  }

  .banner-section29 .banner-heading-box-2 {
    font-size: 20px !important;
    line-height: 40px !important;
  }

  .banner-section29 .banner-button-box-1 {
    font-size: 14px !important;
    padding: 8px 25px !important;
    margin-top: 10px !important;
    border-radius: 8px;
    transition: 0.5s;
    text-transform: capitalize;
  }

  .banner-section29 .banner-button-box-2 {
    font-size: 14px !important;
    padding: 8px 25px !important;
    margin-top: 10px !important;
    border-radius: 8px;
    transition: 0.5s;
    text-transform: capitalize;
  }

  .banner-section29 .banner-button-box-1:hover {
    background-color: #252522;
    transition: 0.5s;
  }

  .banner-section29 .banner-button-box-2:hover {
    background-color: #252525;
    transition: 0.5s;
  }

  @media (max-width: 991px) {
    .banner-section29 .contain-row-25 {
      display: block;
    }

    .banner-section29 .column-1 {
      width: 100%;
      padding: 40px 60px 40px 60px;
    }

    .banner-section29 .column-2 {
      width: 100%;
      flex-direction: row;
      margin-left: 0px;
      margin-top: 40px;
    }

    .banner-section29 .column-2 .box-1 {
      margin-right: 10px;
    }

    .banner-section29 .column-2 .box-2 {
      margin-top: 0px;
      margin-left: 10px;
    }

    .banner-section29 .banner .head-title h1 {
      font-size: 35px !important;
      line-height: 50px !important;
    }

    .banner-section29 .column-2 img {
      border-radius: 210px 40px 40px 40px;
    }
  }

  @media (max-width: 767px) {
    .banner-section29 .contain-row-25 {
      display: block;
      width: 100%;
      height: auto;
    }

    .banner-section29 .column-1 {
      width: 100%;
      padding: 40px 30px 40px 30px;
    }

    .banner-section29 .column-2 {
      width: 100%;
      margin-left: 0px;
      margin-top: 40px;
    }

    .banner-section29 .column-2 img {
      height: auto;
    }

    .banner-section29 .banner .head-title {
      float: unset;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: start;
      width: 95%;
    }

    .banner-section29 .banner .head-title h1 {
      font-size: 26px !important;
      line-height: 50px !important;
      margin-top: 20px;
    }

    .banner-section29 .banner .head-title p {
      padding: 0;
      font-size: 18px;
      margin-top: 20px;
    }

    .banner-section29 .banner .btn.btn-primary {
      margin-top: 40px;
    }
  }

  @media (max-width: 567px) {
    .banner-section29 .column-2 {
      display: block;
      margin-top: 30px;
    }

    .banner-section29 .column-2 .box-1 {
      margin-right: 0px;
    }

    .banner-section29 .column-2 .box-2 {
      margin-top: 20px;
      margin-left: 0px;
    }
  }

  /* ===================================== */
  /*         2.30 Hero Section 30           */
  /* ===================================== */

  .banner-section30 .banner {
    background-position: center center;
    background-repeat: repeat-x;
    overflow: hidden;
    margin: 20px 0 80px 0;
    background-size: cover;
    display: flex;
  }

  .banner-section30 .banner-contain {
    width: 50%;
    height: 500px;
    display: flex;
    align-items: end;
    justify-content: center;
  }

  .banner-section30 .banner-contain-1 {
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image1"] ?>);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    position: relative;
  }

  .banner-section30 .banner-contain-2 {
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image2"] ?>);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    position: relative;
  }

  .banner-section30 .banner-contain.banner-contain-1 {
    margin-right: 5px;
    margin-left: 5px;
  }

  .banner-section30 .banner-contain.banner-contain-2 {
    margin-left: 5px;
    margin-right: 5px;
  }

  .banner-section30 .banner .head-title {
    width: 65%;
    padding: 20px;
    position: relative;
    z-index: 5;
    margin-bottom: 50px;
    background-color: rgba(255, 255, 255, 0.9);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .banner-section30 .banner .head-title::before {
    z-index: -1;
  }

  .banner-section30 .banner30-slogan-1 {
    padding: 2px 10px;
    border-radius: 5px;
  }

  .banner-section30 .banner30-slogan-2 {
    padding: 2px 10px;
    border-radius: 5px;
  }

  .banner-section30 .banner .head-title h1 {
    font-size: 19px;
    text-transform: uppercase;
    font-weight: 500;
    margin: 0;
    text-align: center;
    letter-spacing: 3px;
    margin-top: 15px;
  }

  .banner-section30 .banner .head-title p {
    font-size: 11px;
    font-weight: 300;
    letter-spacing: normal;
    line-height: 32.4px;
    margin: 0px;
    margin-top: 10px;
  }

  .banner-section30 .banner30-tagline {
    font-size: 12px !important;
    font-weight: 500 !important;
  }

  .banner-section30 .banner .btn.btn-primary {
    padding: 14px 50px;
    font-size: 16px;
    text-transform: capitalize;
    background-color: #fff !important;
    border: 0;
    font-weight: 700;
    box-shadow: none;
    border-radius: 12px;
  }

  .banner-section30 .prod-img-wrapper>img {
    z-index: 1 !important;
    position: relative !important;
  }

  @media (max-width: 991px) {
    .banner-section30 .banner .head-title {
      width: 80%;
    }
  }

  @media (max-width: 767px) {
    .banner-section30 .banner {
      padding: 40px 5px;
      display: block;
    }

    .banner-section30 .banner-contain {
      width: 100%;
    }

    .banner-section30 .banner .head-title {
      width: 90%;
      margin-bottom: 60px;
    }

    .banner-section30 .banner .head-title h1 {
      font-size: 24px;
    }

    .banner-section30 .banner .head-title p {
      font-size: 16px;
    }

    .banner-section30 .banner-contain.banner-contain-2 {
      margin-left: 0px;
      margin-top: 10px;
    }

    .banner-section30 .banner-contain.banner-contain-1 {
      margin-right: 0px;
      margin-left: 0px;
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
    -webkit-transition: 0.5s;
    transition: 0.5s;
    text-decoration: none;
    opacity: 1 !important;
    visibility: visible !important;
    right: 30px !important;
    top: -25px;
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
    background-image: url(./img/<?= $pageConfig["product_section_bg_image"] ?>);
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

  /* ===================================== */
  /*       3.16 Product Section 16         */
  /* ===================================== */
  .pdt-section16 {
    margin: 50px 0;
    padding: 0;
  }

  .pdt-section16 h3 {
    font-size: 22px;
    letter-spacing: 0.6px;
    font-weight: 700;
    margin-bottom: 8px !important;
    padding: 12px 0;
    position: relative;
  }

  .pdt-section16 h3:before {
    content: "";
    width: 100%;
    height: 2px;
    background-color: #f5f5f5;
    position: absolute;
    bottom: 0px;
    left: 0;
  }

  .pdt-section16 h3:after {
    content: "";
    width: 100px;
    height: 5px;
    background-color: var(--primary);
    position: absolute;
    bottom: -2px;
    left: 0;
  }

  .pdt-section16 .product-section16 {
    margin-bottom: 40px;
  }

  .pdt-section16 .product-block {
    padding: 30px 10px;
    transition: all 0.3s ease 0s;
    position: relative;
    overflow: hidden;
    text-align: left;
    background-color: #fff;
  }

  .pdt-section16 .product-block:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
  }

  .pdt-section16 .product-details {
    padding: 15px;
    width: 50%;
  }

  .pdt-section16 .pdt-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all 0.4s ease 0s;
  }

  .pdt-section16 .prod_img16 {
    transition: all 0.4s ease 0s;
    width: 100% !important;
    height: 100% !important;
    object-fit: contain !important;
    padding: 0 10px;
  }

  .pdt-section16 .pdtImageWrapper {
    width: 50% !important;
  }

  .pdt-section16 .btn_shop16 {
    transition: all 0.4s ease;
    padding: 10px;
    display: inline-block;
    margin-top: 20px;
  }

  .pdt-section16 .btn_shop16 i {
    font-size: 15px;
    margin-right: 10px;
  }

  .pdt-section16 .prod_category16 {
    font-size: 10px;
    text-transform: uppercase;
    color: #acacac;
    letter-spacing: 4px;
    font-weight: 300;
    margin: 0;
    padding: 0;
    margin-bottom: 12px;
  }

  .pdt-section16 .product-title {
    font-size: 16px;
    line-height: 18px;
    letter-spacing: 0.4px;
    font-weight: 700;
    text-transform: capitalize;
    color: #444;
    margin: 0;
    padding: 0;
    margin-bottom: 8px;
  }

  .pdt-section16 .prod_price16 {
    font-size: 16px;
    line-height: 18px;
    letter-spacing: 0.4px;
    font-weight: 600;
    color: var(--secondary);
  }

  @media (max-width: 767px) {
    .pdt-section16 .product-title {
      font-size: 10px;
      line-height: 14px;
    }

    .pdt-section16 .prod_price16 {
      font-size: 12px;
    }
  }

  /* ===================================== */
  /*       3.17 Product Section 17         */
  /* ===================================== */
  .pdt-section17 {
    margin: 50px 0;
    padding: 0;
  }

  .pdt-section17 h3 {
    font-size: 22px;
    letter-spacing: 0.6px;
    font-weight: 700;
    margin-bottom: 8px !important;
    padding: 12px 0;
    position: relative;
  }

  .pdt-section17 h3:before {
    content: "";
    width: 100%;
    height: 2px;
    background-color: #f5f5f5;
    position: absolute;
    bottom: 0px;
    left: 0;
  }

  .pdt-section17 h3:after {
    content: "";
    width: 100px;
    height: 5px;
    background-color: var(--primary);
    position: absolute;
    bottom: -2px;
    left: 0;
  }

  .pdt-section17 .product-section17 {
    margin-bottom: 40px;
  }

  .pdt-section17 .product-block {
    padding: 30px 10px;
    transition: all 0.3s ease 0s;
    position: relative;
    overflow: hidden;
    text-align: left;
    background-color: #fff;
  }

  .pdt-section17 .product-block:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
  }

  .pdt-section17 .product-details {
    padding: 15px;
    width: 100%;
  }

  .pdt-section17 .pdt-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all 0.4s ease 0s;
  }

  .pdt-section17 .prod_img17 {
    transition: all 0.4s ease 0s;
    width: 100% !important;
    height: 100% !important;
    object-fit: contain !important;
    padding: 0 10px;
  }

  .pdt-section17 .pdtImageWrapper {
    width: 100% !important;
  }

  .pdt-section17 .btn_shop17 {
    transition: all 0.4s ease;
    padding: 10px;
    margin-top: 20px;
    width: 100%;
    display: flex;
    justify-content: center;
    border-radius: 50px;
    align-items: center;
  }

  .pdt-section17 .btn_shop17 i {
    font-size: 15px;
    margin-right: 10px;
  }

  .pdt-section17 .prod_category17 {
    font-size: 10px;
    text-transform: uppercase;
    color: #acacac;
    letter-spacing: 4px;
    font-weight: 300;
    margin: 0;
    padding: 0;
    margin-bottom: 12px;
  }

  .pdt-section17 .product-title {
    font-size: 16px;
    line-height: 18px;
    letter-spacing: 0.4px;
    font-weight: 700;
    text-transform: capitalize;
    color: #444;
    margin: 0;
    padding: 0;
    margin-bottom: 8px;
    margin-top: 30px;
  }

  .pdt-section17 .border {
    border-top: 2px solid;
    margin: 20px 0px 20px 0px;
    position: relative;
  }

  .pdt-section17 .border::before {
    content: "";
    position: absolute;
    width: 10px;
    height: 10px;
    background-color: var(--secondary);
    border-radius: 50px;
    top: -5px;
  }

  .pdt-section17 .prod_price17 {
    font-size: 16px;
    line-height: 18px;
    letter-spacing: 0.4px;
    font-weight: 600;
    color: var(--secondary);
  }

  @media (max-width: 767px) {
    .pdt-section17 .product-title {
      font-size: 10px;
      line-height: 14px;
    }

    .pdt-section17 .prod_price17 {
      font-size: 12px;
    }
  }

  /* ===================================== */
  /*       3.18 Product Section 18           */
  /* ===================================== */

  .pdt-section18 {
    margin: 50px 0;
    padding: 0;
  }

  .pdt-section18 .product-block {
    position: relative;
    overflow: hidden;
    transition: all 0.4s;
    text-align: center;
    padding-bottom: 2rem;
  }

  .pdt-section18 .prod_img18 {
    border: solid 1px #ddd;
    transition: 0.5s;
  }

  .pdt-section18 .btn_shop18 {
    position: relative;
    display: flex;
    justify-content: center;
  }

  .pdt-section18 .product-title {
    font-weight: 600;
    font-size: 18px;
    position: absolute;
    background-color: #fff;
    bottom: 50px;
    padding: 20px 20px;
    display: flex;
    border-radius: 50px;
    margin: 0px 20px;
    color: #444;
    z-index: 9;
    box-shadow: 5px 5px 20px #76767680;
  }

  .pdt-section18 .prod_img18:hover {
    transform: rotate(10deg);
    transition: 0.5s;
  }

  .pdt-section18 h3 {
    font-size: 25px;
  }

  .pdt-section18 .prod_price18 {
    font-weight: 600;
    text-decoration: overline;
  }

  @media (max-width: 1399px) {
    .pdt-section18 .prod_img18 {
      width: 204px;
    }
  }

  @media (max-width: 1200px) {
    .pdt-section18 .prod_img18 {
      width: 168px;
    }
  }

  @media (max-width: 991px) {
    .pdt-section18 .prod_img18 {
      width: auto;
    }
  }

  /* ===================================== */
  /*       3.19 Product Section 19         */
  /* ===================================== */
  .pdt-section19 {
    padding: 70px 0;
    background-color: #f9f9f9;
  }

  .pdt-section19 .right {
    padding: 40px;
    padding-top: 0px;
  }

  .pdt-section19 h3 {
    font-size: 22px;
    line-height: 1;
    font-weight: 400;
    color: #1c1c24;
    text-transform: capitalize;
    margin-bottom: 30px;
    padding-bottom: 10px;
    border-bottom: 1px solid #efefef;
  }

  .pdt-section19 .product-block {
    position: relative;
    overflow: hidden;
    background-color: #fff;
    padding: 5px 10px;
    text-align: center;
    transition: all 0.4s;
    transition: all 0.3 ease;
  }

  .pdt-section19 .product-block:hover {
    box-shadow: 0 3px 25px 0 rgba(144, 144, 144, 0.2);
    z-index: 5;
  }

  .pdt-section19 .product-details {
    background: #fff;
    padding-top: 24px;
    transition: all 0.3 ease;
    opacity: 1;
  }

  .pdt-section19 .prod_img19 {
    transition: all 0.4s ease 0s;
  }

  .pdt-section19 .btn_shop19 {
    z-index: 14;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    visibility: hidden;
    opacity: 0;
    transition: all 0.4s ease;
    border-radius: 50px;
  }

  .pdt-section19 .product-block:hover .btn_shop19 {
    opacity: 1;
    height: 100px;
    visibility: visible;
  }

  .pdt-section19 .btn_shop19 i {
    font-size: 15px;
    transition: all 0.4s ease;
  }

  .pdt-section19 .product-block:hover .btn_shop19 i {
    font-size: 25px;
  }

  .pdt-section19 .prod_category19 {
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

  .pdt-section19 .product-title {
    font-size: 16px;
    line-height: 1.6;
    font-weight: 500;
    letter-spacing: normal;
    text-transform: capitalize;
    color: #444;
    margin: 0;
    padding: 0;
  }

  .pdt-section19 .prod_price19 {
    font-size: 16px;
    line-height: 32px;
    letter-spacing: normal;
    font-weight: 400;
    color: var(--primary);
    border: 1px solid;
    margin-top: 10px;
  }

  .pdt-section19 .pdt-overlay:before {
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

  .pdt-section19 .product-section19:hover .prod_img19 {
    transform: scale(1.1);
  }

  @media (max-width: 991px) {
    .pdt-section19 .btn_shop19 {
      position: unset;
      visibility: visible;
      opacity: 1;
      height: 100px;
    }
  }

  @media (max-width: 740px) {
    .pdt-section19 .pdt-wrapper {
      flex-direction: column;
    }
  }

  /* ===================================== */
  /*       3.20 Product Section 20           */
  /* ===================================== */
  .pdt-section20 .product-block:hover .product-details {
    box-shadow: 5px 5px 20px #c9c9c980;
    padding: 10px 0px;
    transition: 0.5s;
  }

  .pdt-section20 .prod_img20 {
    transition: all 0.4s ease 0s;
  }

  .pdt-section20 .pdtImageWrapper:hover .prod_img20 {
    transform: rotate(2deg);
  }

  .pdt-section20 .pdtImageWrapper:hover .pdt-overlay {
    background-color: unset !important;
  }

  .pdt-section20 .btn_shop20 {
    border: 0px none;
    width: 100%;
    z-index: 11;
    text-align: center;
    margin: 0;
    border-radius: 0px;
    font-weight: 600;
    left: -132px;
    bottom: 132px;
    right: 0px;
    opacity: 1;
    height: 48px;
    display: block;
    line-height: 45px;
    position: absolute;
    visibility: visible;
    transform: translateY(20px);
    color: rgb(47, 51, 58);
    font-size: 14px;
    transition: all 0.2s ease 0s;
    transform: rotate(270deg);
  }

  .pdt-section20 .prod_price20 {
    font-size: 1.5rem;
  }

  .pdt-section20 {
    border-top: unset;
    margin-top: 100px;
  }

  .pdt-section20 h3 {
    font-size: 30px;
    line-height: 30px;
    font-weight: 700;
    letter-spacing: 700;
    color: #000;
    margin-bottom: 8px !important;
  }

  .pdt-section20 p {
    font-size: 16px;
    line-height: 1;
    letter-spacing: -0.03px;
    font-weight: 400;
    color: #999999;
    margin-bottom: 8px !important;
  }

  .pdt-section20 .product-block {
    position: relative;
    overflow: hidden;
    background-color: #fff;
    padding: 0 0 1rem 0;
    text-align: center;
    transition: all 0.4s;
    margin-bottom: 1rem;
  }

  .pdt-section20 .product-details {
    background: #fff;
    padding-top: 14px;
    transition: 0.5s;
  }

  .pdt-section20 .pdt-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all 0.4s ease 0s;
  }

  .pdt-section20 .prod_category20 {
    font-size: 10px;
    line-height: 15px;
    text-transform: uppercase;
    color: #868686;
    letter-spacing: 0.08em;
    margin: 0 !important;
    padding: 0 !important;
  }

  .pdt-section20 .product-title {
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
    letter-spacing: -0.14px;
    text-transform: capitalize;
    color: #404040;
    margin: 0;
    padding: 0;
  }

  .pdt-section20 .prod_price20 {
    font-size: 16px;
    line-height: 30px;
    font-weight: 600;
    color: #000;
  }

  .pdt-section20 .product-name20 {
    font-weight: 1rem;
    color: #777;
  }

  .pdt-section20 .product-name20 {
    padding: 0 1rem;
  }

  @media (max-width: 1400px) {
    .pdt-section20 .btn_shop20 {
      left: -110px;
      bottom: 110px;
    }
  }

  @media (max-width: 1200px) {
    .pdt-section20 .btn_shop20 {
      left: -87px;
      bottom: 87px;
    }
  }

  @media (max-width: 990px) {
    .pdt-section20 .btn_shop20 {
      left: -320px;
      top: 280px;
    }
  }

  @media (max-width: 767px) {
    .pdt-section20 .btn_shop20 {
      left: -232px;
      top: 236px;
    }
  }

  @media (max-width: 576px) {
    .pdt-section20 .btn_shop20 {
      transform: unset;
      left: 0px;
      top: unset;
      bottom: 0px;
    }
  }

  /* ===================================== */
  /*       3.21 Product Section 21           */
  /* ===================================== */
  .pdt-section21 .prod_img21 {
    transition: all 0.4s ease 0s;
  }

  .pdt-section21 .pdtImageWrapper {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .pdt-section21 .pdtImageWrapper:hover .prod_img21 {
    /* transform: scale(1.1); */
    transform: scale(0.9);
  }

  .pdt-section21 .pdtImageWrapper:hover .pdt-overlay {
    background-color: unset !important;
  }

  .pdt-section21 .btn_shop21 {
    border: 0px none;
    z-index: 11;
    text-align: center;
    margin: 0;
    border-radius: 0px;
    font-weight: 600;
    opacity: 0;
    display: flex;
    position: absolute;
    visibility: hidden;
    transform: translateY(20px);
    color: rgb(47, 51, 58);
    font-size: 24px;
    transition: all 0.2s ease 0s;
    padding: 30px;
    border-radius: 50px;
  }

  .pdt-section21 .product-block:hover .btn_shop21 {
    opacity: 1;
    visibility: visible;
  }

  .pdt-section21 .prod_price21 {
    font-size: 1.5rem;
  }

  .pdt-section21 {
    border-top: unset;
    margin-top: 100px;
  }

  .pdt-section21 h3 {
    font-size: 30px;
    line-height: 30px;
    font-weight: 700;
    letter-spacing: 700;
    color: #000;
    margin-bottom: 8px !important;
  }

  .pdt-section21 p {
    font-size: 16px;
    line-height: 1;
    letter-spacing: -0.03px;
    font-weight: 400;
    color: #999999;
    margin-bottom: 8px !important;
  }

  .pdt-section21 .product-block {
    position: relative;
    overflow: hidden;
    background-color: #fff;
    padding: 0 0 1rem 0;
    text-align: center;
    transition: all 0.4s;
    margin-bottom: 1rem;
  }

  .pdt-section21 .product-details {
    padding-top: 14px;
    transition: 0.5s;
    visibility: hidden;
    opacity: 0;
  }

  .pdt-section21 .product-block:hover .product-details {
    padding: 10px 0px;
    transition: 0.5s;
    visibility: visible;
    opacity: 1;
  }

  .pdt-section21 .pdt-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all 0.4s ease 0s;
  }

  .pdt-section21 .prod_category21 {
    font-size: 10px;
    line-height: 15px;
    text-transform: uppercase;
    color: #868686;
    letter-spacing: 0.08em;
    margin: 0 !important;
    padding: 0 !important;
  }

  .pdt-section21 .product-title {
    font-size: 16px;
    line-height: 20px;
    font-weight: 700;
    text-transform: capitalize;
    color: #404040;
    margin: 0;
    padding: 0;
    text-decoration: underline;
    margin-top: 10px;
  }

  .pdt-section21 .prod_price21 {
    font-size: 16px;
    line-height: 30px;
    font-weight: 600;
    color: #000;
  }

  .pdt-section21 .product-name21 {
    font-weight: 1rem;
    color: #777;
  }

  .pdt-section21 .product-name21 {
    padding: 0 1rem;
  }

  @media (max-width: 991px) {
    .pdt-section21 .btn_shop21 {
      visibility: visible;
      opacity: 1;
      padding: 25px;
      font-size: 16px;
    }

    .pdt-section21 .product-details {
      visibility: visible;
      opacity: 1;
    }
  }

  /* ===================================== */
  /*       3.22 Product Section 22           */
  /* ===================================== */
  .pdt-section22 .prod_img22 {
    transition: all 0.4s ease 0s;
    padding: 10px;
    width: 80%;
    box-shadow: 0px 0px 15px #ddd;
    margin: 20px 0px;
  }

  .pdt-section22 .pdtImageWrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    border-top: 3px solid var(--primary);
  }

  .pdt-section22 .pdtImageWrapper:hover .prod_img22 {
    transform: scale(0.9);
  }

  .pdt-section22 .pdtImageWrapper:hover .pdt-overlay {
    background-color: unset !important;
  }

  .pdt-section22 .btn_shop22 {
    text-align: center;
    margin: 0;
    font-weight: 600;
    font-size: 16px;
    padding: 10px 20px;
    border-radius: 50px;
    justify-content: center;
    align-items: center;
    margin-bottom: 30px;
    display: flex;
  }

  .pdt-section22 .btn_shop22 i {
    margin-left: 20px;
  }

  .pdt-section22 .prod_price22 {
    font-size: 1.5rem;
  }

  .pdt-section22 {
    border-top: unset;
    margin-top: 100px;
  }

  .pdt-section22 h3 {
    font-size: 30px;
    line-height: 30px;
    font-weight: 700;
    letter-spacing: 700;
    color: #000;
    margin-bottom: 8px !important;
  }

  .pdt-section22 p {
    font-size: 16px;
    line-height: 1;
    letter-spacing: -0.03px;
    font-weight: 400;
    color: #999999;
    margin-bottom: 8px !important;
  }

  .pdt-section22 .product-block {
    position: relative;
    overflow: hidden;
    background-color: #fff;
    padding: 0 0 1rem 0;
    text-align: center;
    transition: all 0.4s;
    margin-bottom: 3rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #fff;
    box-shadow: 0px 0px 15px #ddd;
  }

  .pdt-section22 .product-details {
    padding-top: 14px;
    transition: 0.5s;
    width: 80%;
  }

  .pdt-section22 .pdt-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all 0.4s ease 0s;
  }

  .pdt-section22 .prod_category22 {
    font-size: 10px;
    line-height: 15px;
    text-transform: uppercase;
    color: #868686;
    letter-spacing: 0.08em;
    margin: 0 !important;
    padding: 0 !important;
  }

  .pdt-section22 .product-title {
    font-size: 16px;
    line-height: 20px;
    font-weight: 700;
    text-transform: capitalize;
    color: #404040;
    margin: 0;
    padding: 0;
    text-decoration: underline;
    margin-top: 10px;
  }

  .pdt-section22 .prod_price22 {
    font-size: 16px;
    line-height: 30px;
    font-weight: 600;
    color: #000;
  }

  .pdt-section22 .product-name22 {
    font-weight: 1rem;
    color: #777;
  }

  .pdt-section22 .product-name22 {
    padding: 0 1rem;
  }

  @media (max-width: 991px) {
    .pdt-section22 .btn_shop22 {
      position: unset;
      visibility: visible;
      opacity: 1;
    }
  }

  /* ===================================== */
  /*       3.23 Product Section 23           */
  /* ===================================== */
  .pdt-section23 {
    background-color: #f5f5f5 !important;
    transition: all 0.4s ease 0s;
    padding-top: 150px;
  }

  .pdt-section23 .product-block:hover {
    -webkit-transform: translate(0, -5px);
    transform: translate(0, -5px);
  }

  .pdt-section23 .prod_img23 {
    transition: all 0.4s ease 0s;
  }

  .pdt-section23 .product-block:hover .prod_img23 {
    transform: scale(0.8);
  }

  .pdt-section23 .bottom-btn {
    text-align: right;
    position: absolute;
    right: -8px;
    top: -8px;
  }

  .pdt-section23 .bottom-btn i {
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

  .pdt-section23 .bottom-btn:hover i {
    color: #fff;
    background-color: #065193;
    -webkit-transform: rotate(-360deg);
    transform: rotate(-360deg);
  }

  .pdt-section23 .bottom-btn a {
    -webkit-transition: 0.5s;
    transition: 0.5s;
    text-decoration: none;
  }

  .pdt-section23 .bottom-btn:hover a {
    opacity: 1 !important;
    visibility: visible !important;
    right: 15px !important;
  }

  .pdt-section23 .prod_price23 {
    font-size: 1.5rem;
  }

  .pdt-section23 .product-block {
    position: relative;
    overflow: hidden;
    padding: 0 0 1rem 0;
    text-align: left;
    transition: all 0.4s;
    margin-bottom: 1rem;
    border-radius: 10px;
  }

  .pdt-section23 .product-block:hover {
    background-color: #fff;
  }

  .pdt-section23 .product-details {
    padding-top: 0.5rem;
    padding-bottom: 1rem;
    padding-left: 15px;
    visibility: hidden;
    opacity: 0;
  }

  .pdt-section23 .product-block:hover .product-details {
    visibility: visible;
    opacity: 1;
    transition: 0.5s;
  }

  .pdt-section23 .pdt-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all 0.4s ease 0s;
  }

  .pdt-section23 .product-title {
    font-size: 16px;
    line-height: 20px;
    font-weight: 700;
    text-transform: capitalize;
    padding: 1rem 0 0;
    color: #363636;
  }

  .pdt-section23 .prod_price23 {
    font-size: 16px;
    line-height: 16px;
    font-weight: 500;
  }

  .pdt-section23 .prod_category23 {
    position: absolute;
    top: 15px;
    font-size: 12px;
    background-color: #fff;
    padding: 10px;
    border-radius: 50px;
    font-weight: 600;
  }

  /* ===================================== */
  /*       3.24 Product Section 24           */
  /* ===================================== */
  .pdt-section24 .pdtImageWrapper.position-relative {
    margin-bottom: 40px;
  }

  .pdt-section24 .prod_img24 {
    transition: all 0.4s ease 0s;
    border-radius: 20px;
  }

  .pdt-section24 .pdtImageWrapper::before {
    content: "";
    width: 1px;
    height: 25px;
    position: absolute;
    background-color: #000;
    bottom: -40px;
    left: 50%;
  }

  .pdt-section24 .pdtImageWrapper:hover .prod_img24 {
    /* transform: scale(1.1); */
  }

  .pdt-section24 .pdtImageWrapper:hover .pdt-overlay {
    background-color: unset !important;
  }

  .pdt-section24 .btn_shop24 {
    border: 0px none;
    width: 100%;
    z-index: 11;
    text-align: center;
    margin: 0;
    border-radius: 0px;
    font-weight: 600;
    display: block;
    line-height: 45px;
    transform: translateY(20px);
    color: rgb(47, 51, 58);
    font-size: 14px;
    transition: all 0.2s ease 0s;
    margin-bottom: 25px;
    border-radius: 0px 0px 12px 12px;
  }

  .pdt-section24 .prod_price24 {
    font-size: 1.5rem;
  }

  .pdt-section24 {
    border-top: unset;
    margin-top: 100px;
  }

  .pdt-section24 h3 {
    font-size: 30px;
    line-height: 30px;
    font-weight: 700;
    letter-spacing: 700;
    color: #000;
    margin-bottom: 8px !important;
  }

  .pdt-section24 p {
    font-size: 16px;
    line-height: 1;
    letter-spacing: -0.03px;
    font-weight: 400;
    color: #999999;
    margin-bottom: 8px !important;
  }

  .pdt-section24 .product-block {
    position: relative;
    overflow: hidden;
    background-color: #fff;
    text-align: center;
    transition: all 0.4s;
    margin-bottom: 1rem;
    border: 1px solid #d7d7d7;
    padding: 10px;
    border-radius: 20px;
  }

  .pdt-section24 .product-details {
    background: #fff;
    padding-top: 14px;
  }

  .pdt-section24 .pdt-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all 0.4s ease 0s;
  }

  .pdt-section24 .prod_category5 {
    font-size: 10px;
    line-height: 15px;
    text-transform: uppercase;
    color: #868686;
    letter-spacing: 0.08em;
    margin: 0 !important;
    padding: 0 !important;
  }

  .pdt-section24 .product-title {
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
    letter-spacing: -0.14px;
    text-transform: capitalize;
    color: #404040;
    margin: 0;
    padding: 0;
  }

  .pdt-section24 .prod_price24 {
    font-size: 16px;
    line-height: 30px;
    font-weight: 600;
    color: #000;
  }

  .pdt-section24 .product-name24 {
    padding: 0 1rem;
    font-weight: 600;
    color: #000;
    font-size: 14px;
    margin-top: 50px;
    margin-bottom: 20px;
  }

  .product-title.product-name24::before {
    content: "";
    width: 1px;
    height: 25px;
    position: absolute;
    background-color: #000;
    top: 20px;
    left: 50%;
  }

  /* ===================================== */
  /*       3.25 Product Section 25         */
  /* ===================================== */
  .pdt-section25 {
    margin: 50px 0;
    padding: 0;
  }

  .pdt-section25 h3 {
    font-size: 22px;
    letter-spacing: 0.6px;
    font-weight: 700;
    margin-bottom: 8px !important;
    padding: 12px 0;
    position: relative;
  }

  .pdt-section25 h3:before {
    content: "";
    width: 100%;
    height: 2px;
    background-color: #f5f5f5;
    position: absolute;
    bottom: 0px;
    left: 0;
  }

  .pdt-section25 h3:after {
    content: "";
    width: 100px;
    height: 5px;
    background-color: var(--primary);
    position: absolute;
    bottom: -2px;
    left: 0;
  }

  .pdt-section25 .product-section25 {
    margin-bottom: 40px;
  }

  .pdt-section25 .product-block {
    padding: 30px 10px;
    transition: all 0.3s ease 0s;
    position: relative;
    text-align: left;
    background-color: #fff;
    box-shadow: 10px 10px 30px #c9c9c980;
  }

  .pdt-section25 .product-details {
    padding: 15px;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    border-right: 1px solid;
  }

  .pdt-section25 .pdt-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all 0.4s ease 0s;
  }

  .pdt-section25 .prod_img25 {
    transition: all 0.4s ease 0s;
    width: 100% !important;
    height: 100% !important;
    object-fit: contain !important;
    padding: 0 10px;
  }

  .pdt-section25 .product-block:hover .prod_img25 {
    transform: rotate(5deg);
  }

  .pdt-section25 .pdtImageWrapper {
    width: 50% !important;
  }

  .pdt-section25 .btn_shop25 {
    transition: all 0.4s ease;
    padding: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    clip-path: polygon(0 0, 0% 100%, 100% 100%, 100% 10.28%);
  }

  .pdt-section25 .btn_shop25:hover {
    clip-path: polygon(0px 10px, 0% 100%, 100% 100%, 100% 0%);
  }

  .pdt-section25 .btn_shop25 i {
    font-size: 15px;
    margin-right: 10px;
  }

  .pdt-section25 .prod_category25 {
    font-size: 10px;
    text-transform: uppercase;
    color: #acacac;
    letter-spacing: 4px;
    font-weight: 300;
    margin: 0;
    padding: 0;
    margin-bottom: 12px;
  }

  .pdt-section25 .product-title {
    font-size: 16px;
    line-height: 18px;
    letter-spacing: 0.4px;
    font-weight: 700;
    text-transform: capitalize;
    color: #444;
    margin: 0;
    padding: 0;
    margin-bottom: 8px;
  }

  .pdt-section25 .prod_price25 {
    font-size: 16px;
    line-height: 18px;
    letter-spacing: 0.4px;
    font-weight: 600;
    color: var(--secondary);
  }

  @media (max-width: 767px) {
    .pdt-section25 .product-title {
      font-size: 10px;
      line-height: 14px;
    }

    .pdt-section25 .prod_price25 {
      font-size: 12px;
    }
  }

  /* ===================================== */
  /*       3.26 Product Section 26           */
  /* ===================================== */
  .pdt-section26 .prod_img26 {
    transition: all 0.4s ease 0s;
    border-radius: 20px 0px;
  }

  .pdt-section26 .pdtImageWrapper:hover .prod_img26 {
    transform: rotate(-5deg) scale(0.9);
    transition: 1s;
  }

  .pdt-section26 .pdtImageWrapper:hover .pdt-overlay {
    background-color: unset !important;
  }

  .pdt-section26 .btn_shop26 {
    margin: 0;
    font-weight: 600;
    display: block;
    font-size: 14px;
    border-radius: 20px 0;
    margin: 10px 0px;
    padding: 15px 0px;
    transition: 0.5s;
  }

  .pdt-section26 .btn_shop26:hover {
    border-radius: 0px 20px;
    transition: 1s;
  }

  .pdt-section26 .prod_price26 {
    font-size: 1.5rem;
  }

  .pdt-section26 {
    border-top: unset;
    margin-top: 100px;
  }

  .pdt-section26 h3 {
    font-size: 30px;
    line-height: 30px;
    font-weight: 700;
    letter-spacing: 700;
    color: #000;
    margin-bottom: 8px !important;
  }

  .pdt-section26 p {
    font-size: 16px;
    line-height: 1;
    letter-spacing: -0.03px;
    font-weight: 400;
    color: #999999;
    margin-bottom: 8px !important;
  }

  .pdt-section26 .product-block {
    position: relative;
    overflow: hidden;
    background-color: #fff;
    padding: 0 0 1rem 0;
    text-align: center;
    transition: all 0.4s;
    margin-bottom: 1rem;
  }

  .pdt-section26 .product-details {
    background: #fff;
    padding-top: 14px;
    transition: 0.5s;
  }

  .pdt-section26 .pdt-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all 0.4s ease 0s;
  }

  .pdt-section26 .prod_category26 {
    font-size: 10px;
    line-height: 15px;
    text-transform: uppercase;
    color: var(--primary_text_color);
    letter-spacing: 0.08em;
    margin: 0 !important;
    padding: 10px;
    position: absolute;
    top: 0px;
    background-color: var(--primary);
  }

  .pdt-section26 .product-title {
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
    letter-spacing: -0.14px;
    text-transform: capitalize;
    color: #404040;
    margin: 0;
    padding: 0;
  }

  .pdt-section26 .prod_price26 {
    font-size: 16px;
    line-height: 30px;
    font-weight: 600;
    color: #000;
  }

  .pdt-section26 .product-name26 {
    font-weight: 1rem;
    color: #777;
  }

  .pdt-section26 .product-name26 {
    padding: 0 1rem;
  }

  /* ===================================== */
  /*       3.27 Product Section 27           */
  /* ===================================== */
  .pdt-section27 {
    background-color: #f5f5f5 !important;
    transition: all 0.4s ease 0s;
    padding-top: 150px;
  }

  .pdt-section27 .product-section27 {
    perspective: 1000px;
    margin: 20px 0px;
  }

  .pdt-section27 .pdtImageWrapper {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }

  .pdt-section27 .prod_img27 {
    transition: all 0.4s ease 0s;
  }

  .pdt-section27 .bottom-btn {
    text-align: right;
    position: absolute;
    right: -8px;
    bottom: -8px;
  }

  .pdt-section27 .bottom-btn i {
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

  .pdt-section27 .bottom-btn:hover i {
    color: #fff;
    background-color: #065193;
    -webkit-transform: rotate(-360deg);
    transform: rotate(-360deg);
  }

  .pdt-section27 .bottom-btn a {
    display: inline-block;
    color: #065193;
    font-weight: 600;
    position: relative;
    top: -5px;
    right: 0;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    text-decoration: none;
  }

  .pdt-section27 .prod_price27 {
    font-size: 1.5rem;
  }

  .pdt-section27 .product-block {
    overflow: hidden;
    padding: 0 0 1rem 0;
    text-align: left;
    transition: all 0.4s;
    margin-bottom: 1rem;
    border-radius: 10px;
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
  }

  .pdt-section27 .product-section27:hover .product-block {
    transform: rotateY(180deg);
  }

  .pdt-section27 .product-details {
    background: #fff;
    position: absolute;
    top: 0;
    height: 100%;
    width: 100%;
    transform: rotateY(180deg);
    visibility: hidden;
    opacity: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0px 10px;
    transition: 0.3s;
  }

  .pdt-section27 .product-section27:hover .product-details {
    visibility: visible;
    opacity: 1;
    transition: 1s;
  }

  .pdt-section27 .pdt-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all 0.4s ease 0s;
  }

  .pdt-section27 .product-title {
    font-size: 16px;
    line-height: 20px;
    font-weight: 700;
    text-transform: capitalize;
    padding: 1rem 0 0;
    color: #363636;
  }

  .pdt-section27 .prod_price27 {
    font-size: 16px;
    line-height: 16px;
    font-weight: 500;
  }

  .pdt-section27 .prod_category27 {
    border: 1px solid;
    font-size: 12px;
    padding: 10px;
    border-radius: 50px;
  }

  @media (max-width: 991px) {
    .pdt-section27 .product-details {
      background: transparent;
      position: unset;
      height: unset;
      width: unset;
      transform: unset;
      visibility: visible;
      opacity: 1;
    }

    .pdt-section27 .pdtImageWrapper {
      height: unset;
    }
  }

  /* ===================================== */
  /*       3.28 Product Section 28           */
  /* ===================================== */
  .pdt-section28 {
    background-color: #f5f5f5 !important;
    transition: all 0.4s ease 0s;
    padding-top: 150px;
  }

  .pdt-section28 .product-block:hover {
    -webkit-transform: translate(0, -5px);
    transform: translate(0, -5px);
  }

  .pdt-section28 .pdtImageWrapper {
    display: flex;
    justify-content: center;
  }

  .pdt-section28 .prod_img28 {
    transition: all 0.4s ease 0s;
    width: 50%;
  }

  .pdt-section28 .bottom-btn {
    text-align: right;
    display: flex;
  }

  .pdt-section28 .bottom-btn a {
    font-weight: 600;
    padding: 15px;
    width: 100%;
    display: flex;
    justify-content: center;
    text-decoration: underline !important;
  }

  .pdt-section28 .prod_price28 {
    font-size: 1.5rem;
    font-size: 16px;
    font-weight: 700;
  }

  .pdt-section28 .product-block {
    position: relative;
    overflow: hidden;
    background-color: #fff;
    text-align: left;
    transition: all 0.4s;
    margin-bottom: 2rem;
    border-radius: 10px;
  }

  .pdt-section28 .product-details {
    background: #fff;
    margin-top: 10px;
    padding-top: 0.5rem;
    padding-bottom: 1rem;
    width: 100%;
    transition: 0.5s;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-shadow: 0px 0px 10px #c9c9c9;
  }

  .pdt-section28 .pdt-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all 0.4s ease 0s;
  }

  .pdt-section28 .product-title {
    font-size: 16px;
    font-weight: 700;
    text-transform: capitalize;
    padding: 14px;
    color: #363636;
    font-weight: bold;
    text-decoration: none;
    margin: 20px 20px;
    text-align: center;
    border: 2px solid var(--primary);
  }

  .pdt-section28 .prod_category28 {
    font-size: 14px;
  }

  /* ===================================== */
  /*       3.29 Product Section 29           */
  /* ===================================== */
  .pdt-section29 {
    margin: unset;
    padding: unset;
    margin-top: 6rem;
    margin-bottom: 4rem;
  }

  .pdt-section29 .product-block {
    position: relative;
    overflow: hidden;
    margin-bottom: 3rem;
    text-align: left;
    transition: all 0.4s;
    text-align: center;
    border: unset;
  }

  .pdt-section29 .product-image {
    position: relative;
  }

  .pdt-section29 .prod_img29 {
    width: 60%;
    border-radius: 20px;
  }

  .pdt-section29 .product-block .product-image::before {
    position: absolute;
    content: "";
    left: 1rem;
    right: 1rem;
    top: 1rem;
    bottom: 1rem;
    opacity: 0;
    z-index: 9;
    transition: all 0.3s ease;
    height: 100%;
  }

  .product-block .product-image::before {
    background: var(--primary) !important;
  }

  .pdt-section29 .product-block:hover .product-image::before {
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    opacity: 0.8;
    z-index: 5;
  }

  .pdt-section29 .product-details {
    padding: 20px;
  }

  .pdt-section29 .prod_category29 {
    font-size: 17px;
    line-height: 26px;
    font-weight: 400;
    margin: 0;
    padding: 0;
    margin-bottom: 3px;
    position: absolute;
    inset: 50px auto auto 30px;
    visibility: hidden;
    opacity: 0;
    z-index: 9;
    color: #fff;
  }

  .pdt-section29 .product-block:hover .prod_category29 {
    visibility: visible;
    opacity: 1;
    transition: 0.5s;
  }

  .pdt-section29 .product-title {
    color: #000;
    font-size: 18px;
    line-height: 30px;
    font-weight: 500;
    margin: 0;
    padding: 0;
    margin-bottom: 5px;
    text-transform: capitalize;
    transition: inset 0.4s;
    padding: 10px;
    transition: 0.3s;
  }

  .pdt-section29 .prod_price29 {
    font-size: 20px;
    line-height: 26px;
    font-weight: 500;
    margin: 0;
    padding: 0;
    position: absolute;
    inset: 80px auto auto 30px;
    visibility: hidden;
    opacity: 0;
    z-index: 9;
    color: #fff;
  }

  .pdt-section29 .product-block:hover .prod_price29 {
    visibility: visible;
    opacity: 1;
    transition: 0.5s;
  }

  .pdt-section29 .btn-shop {
    font-size: 16px;
    letter-spacing: 0.2px;
    font-weight: 400;
    padding: 10px 40px;
    border: unset;
    border-radius: 50px;
    width: auto;
  }

  .pdt-section29 .btn_shop29 {
    display: block;
    text-align: center;
  }

  @media (max-width: 991px) {
    .pdt-section29 .product-block .product-image::before {
      opacity: 0.5;
      left: 0;
      top: 0;
      bottom: 0;
      right: 0;
    }

    .pdt-section29 .prod_category29 {
      visibility: visible;
      opacity: 1;
    }

    .pdt-section29 .prod_price29 {
      visibility: visible;
      opacity: 1;
    }
  }

  /* ===================================== */
  /*       3.30 Product Section 30           */
  /* ===================================== */

  .pdt-section30 .prod_img30 {
    transition: all 0.4s ease 0s;
  }

  .pdt-section30 .product-block:hover .prod_img30 {
    transform: scale(1.1) rotate(3deg);
  }

  .pdt-section30 .pdtImageWrapper:hover .pdt-overlay {
    background-color: unset !important;
  }

  .pdt-section30 .btn_shop30 {
    border: 0px none;
    width: 100%;
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

  .pdt-section30 .product-block:hover .btn_shop30 {
    opacity: 1;
    visibility: visible;
    bottom: 20px;
    transform: translateY(20px);
  }

  .pdt-section30 .prod_price30 {
    font-size: 1.5rem;
  }

  .pdt-section30 {
    border-top: unset;
  }

  .pdt-section30 h3 {
    font-size: 36px;
    line-height: 54px;
    font-weight: 700;
  }

  .pdt-section30 .product-block {
    position: relative;
    overflow: hidden;
    background-color: #fff;
    padding: 0 0 1rem 0;
    text-align: center;
    transition: all 0.4s;
    /* border: solid 1px #e9e9e9; */
    margin-bottom: 1rem;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .pdt-section30 .product-details {
    color: var(--primary_text_color);
    padding: 20px;
    width: 100%;
    margin-top: -60px;
    position: relative;
    z-index: 9;
  }

  .pdt-section30 .product-details::before {
    content: "";
    background-color: var(--primary);
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0.6;
    z-index: 1;
  }

  .pdt-section30 .pdt-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all 0.4s ease 0s;
  }

  .pdt-section30 .product-title {
    color: var(--primary_text_color);
    font-size: 16px;
    line-height: 24px;
    font-weight: 600;
    text-transform: capitalize;
    position: relative;
    z-index: 9;
  }

  .pdt-section30 .prod_price30 {
    font-size: 16px;
    line-height: 16px;
    font-weight: 500;
    position: relative;
    z-index: 9;
  }

  .pdt-section30 .prod_desc30 {
    font-size: 0.95rem;
    color: #777;
    margin: 0;
  }

  .pdt-section30 .prod_category30 {
    margin-bottom: 10px;
    position: relative;
    z-index: 9;
  }

  @media (max-width: 991px) {
    /* style.css | https://localhost/bank-page-template/bp_config/css/style.css?v=1681766343 */

    .pdt-section30 .btn_shop30 {
      margin: 20px 0px;
      opacity: 1;
      visibility: visible;
      border-radius: 0px;
    }

    .pdt-section30 .product-details {
      margin-top: 0px;
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
    background-image: url(./img/<?= $pageConfig["about_section_bg_image1"] ?>);
  }

  .about_section1 .right {
    background-image: url(./img/<?= $pageConfig["about_section_bg_image2"] ?>);
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

    .about_section1>.container {
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
    background-image: url(./img/<?= $pageConfig["about_section_bg_image"] ?>);
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
    background-image: url(./img/<?= $pageConfig["about_section_bg_image"] ?>);
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
    background-image: url(./img/<?= $pageConfig["about_section_bg_image1"] ?>);
  }

  .about_section8 .right {
    background-image: url(./img/<?= $pageConfig["about_section_bg_image2"] ?>);
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

    .about_section8>.container {
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
    background-image: url(./img/<?= $pageConfig["about_section_bg_image"] ?>);
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
    .contact-section2 .row>div>div {
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
    background-image: url(./img/<?= $pageConfig["contact_section_bg_image"] ?>);
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
    background-image: url(./img/<?= $pageConfig["contact_section_bg_image"] ?>);
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
    background-image: url(./img/<?= $pageConfig["contact_section_bg_image"] ?>);
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
    background-image: url(./img/<?= $pageConfig["contact_section_bg_image"] ?>);
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
    width: 100% !important;
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
    display: none;
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
    background-image: url(./img/<?= $pageConfig["cta_section_bg_image"] ?>);
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
    background-image: url(./img/<?= $pageConfig["cta_section_bg_image"] ?>);
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

  .features_section1 .row>div {
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
    background-image: url(./img/<?= $pageConfig["hero_section_bg_image"] ?>);
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

    .features_section6 .container .row>div:last-child .box-col-wrap {
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

  /* ===================================== */
  /*         9.9 Footer Section 9          */
  /* ===================================== */
  .footer9 {
    padding-bottom: 0;
  }

  .footer9 .footer-heading {
    font-size: 18px;
    line-height: 1.2;
    font-weight: 600;
  }

  .footer9 li {
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
  }

  .footer9 li a {
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
  }

  .footer9 .footer-menu li {
    display: flex;
    align-items: center;
  }

  .footer9 .spacer {
    margin: 0 0 1rem 0;
    width: 100%;
    height: 1px;
    background-color: #fff;
  }

  .footer9 .spacer-dotted {
    border-bottom: dashed 1px #999;
    padding: 0.6rem 0;
  }

  /* ===================================== */
  /*         9.10 Footer Section 10        */
  /* ===================================== */

  .footer10 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer10 .copyright p {
    margin: 0;
  }

  .footer10 .quick-links li {
    padding: 0.25rem 0;
    float: left;
    width: 44%;
    margin-right: 5%;
    position: relative;
    margin-bottom: 0.8rem;
  }

  .footer10 .footer-site-map li {
    padding: 0.25rem 0;
    width: 44%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer10 .footer-return-shipment li {
    padding: 0.25rem 0;
    width: 44%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer10 h5 {
    padding-bottom: 0.75rem;
    max-width: 300px;
    position: relative;
    font-size: 20px;
    line-height: 24px;
    font-weight: 400;
    height: 70px;
  }

  .footer10 .spacer {
    height: 2px;
    width: 80%;
    background-color: var(--primary);
    margin-bottom: 2rem;
    position: relative;
    margin-top: 1rem;
  }

  .footer10 .spacer:before {
    height: 10px;
    width: 10px;
    background-color: var(--primary);
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: -4px;
    content: "";
  }

  .footer10 .bottom-footer {
    justify-content: space-between;
    flex-wrap: wrap;
  }

  @media (max-width: 567px) {
    .footer10 .copyright p {
      width: 100%;
    }

    .footer10 .corp {
      width: 100%;
    }
  }

  /* ===================================== */
  /*         9.11 Footer Section 11        */
  /* ===================================== */

  .footer11 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer11 .copyright p {
    margin: 0;
  }

  .footer11 .quick-links ul {
    display: flex;
  }

  .footer11 .quick-links li {
    width: 100%;
    text-align: center;
  }

  .footer11 .footer-site-map li {
    padding: 0.25rem 0;
    width: 44%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer11 .footer-return-shipment li {
    padding: 0.25rem 0;
    width: 44%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer11 h5 {
    position: relative;
    font-size: 20px;
    line-height: 24px;
    font-weight: 400;
  }

  .footer11 .spacer {
    height: 2px;
    width: 80%;
    background-color: var(--primary);
    margin-bottom: 2rem;
    position: relative;
    margin-top: 1rem;
  }

  .footer11 .spacer:before {
    height: 10px;
    width: 10px;
    background-color: var(--primary);
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: -4px;
    content: "";
  }

  .footer11 .bottom-footer {
    justify-content: space-between;
    flex-wrap: wrap;
  }

  @media (max-width: 567px) {
    .footer11 .quick-links ul {
      display: block;
    }

    .footer11 .quick-links li {
      text-align: left;
    }

    .footer11 .copyright p {
      width: 100%;
    }

    .footer11 .corp {
      width: 100%;
    }
  }

  /* ===================================== */
  /*         9.12 Footer Section 12        */
  /* ===================================== */

  .footer12 {
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer12 .copyright p {
    margin: 0;
  }

  .footer12 .quick-links li {
    padding: 0.25rem 0;
    float: left;
    width: 44%;
    margin-right: 5%;
    position: relative;
    margin-bottom: 0.8rem;
  }

  .footer12 .footer-site-map li {
    padding: 0.5rem 0;
    margin-bottom: 0.8rem;
  }

  .footer12 .footer-return-shipment li {
    padding: 0.25rem 0;
    width: 44%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer12 h5 {
    padding-bottom: 0.75rem;
    max-width: 300px;
    position: relative;
    font-size: 20px;
    line-height: 24px;
    font-weight: 400;
    height: 70px;
  }

  .footer12 .footer-brand-name h5 {
    max-width: 100%;
    text-align: center;
    width: 100%;
  }

  .footer12 .spacer {
    height: 2px;
    width: 80%;
    background-color: var(--primary);
    margin-bottom: 2rem;
    position: relative;
    margin-top: 1rem;
  }

  .footer12 .spacer:before {
    height: 10px;
    width: 10px;
    background-color: var(--primary);
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: -4px;
    content: "";
  }

  .footer12 .contact-widget {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .footer12 .return-shipment {
    display: flex;
    justify-content: center;
    margin: 2rem 0;
  }

  .footer12 .return-shipment-details {
    margin-top: 16px;
    margin-left: 16px;
  }

  .footer12 .bottom-footer {
    justify-content: center;
    flex-wrap: wrap;
  }

  .footer12 .bottom-footer p {
    text-align: center;
  }

  @media (max-width: 567px) {
    .footer12 .footer-site-map h5 {
      max-width: 100%;
      width: 100%;
      text-align: center;
    }

    .footer12 .footer-site-map ul {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .footer12 .copyright p {
      width: 100%;
    }

    .footer12 .corp {
      width: 100%;
    }
  }

  /* ===================================== */
  /*         9.13 Footer Section 13        */
  /* ===================================== */

  .footer13 {
    padding-top: 5rem;
    padding-bottom: 1rem;
    font-size: 1rem;
  }

  .footer13 .copyright p {
    margin: 0;
  }

  .footer13 .quick-links li {
    padding: 0.25rem 0;
    width: 44%;
    margin-right: 5%;
    position: relative;
    margin-bottom: 0.8rem;
  }

  .footer13 .footer-site-map li {
    padding: 0.25rem 0;
    width: 44%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer13 .footer-return-shipment li {
    padding: 0.25rem 0;
    width: 44%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer13 h5 {
    padding-bottom: 0.75rem;
    max-width: 300px;
    position: relative;
    font-size: 16px;
    line-height: 1.375;
    font-weight: 600;
    height: 50px;
  }

  .footer13 .spacer {
    height: 2px;
    width: 80%;
    background-color: var(--primary);
    margin-bottom: 2rem;
    position: relative;
    margin-top: 1rem;
  }

  .footer13 .spacer:before {
    height: 10px;
    width: 10px;
    background-color: var(--primary);
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: -4px;
    content: "";
  }

  .footer13 .bottom-footer {
    justify-content: space-between;
    flex-wrap: wrap;
  }

  @media (max-width: 567px) {
    .footer13 .copyright p {
      width: 100%;
    }

    .footer13 .corp {
      width: 100%;
    }
  }

  /* ===================================== */
  /*         9.14 Footer Section 14        */
  /* ===================================== */

  .footer14 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer14 .copyright p {
    margin: 0;
  }

  .footer14 .quick-links ul {
    display: flex;
  }

  .footer14 .quick-links li {
    width: 100%;
    text-align: center;
  }

  .footer14 .footer-site-map li {
    padding: 0.25rem 0;
    width: 44%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer14 .footer-return-shipment li {
    padding: 0.25rem 0;
    width: 100%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer14 h5 {
    position: relative;
    font-size: 20px;
    line-height: 24px;
    font-weight: 400;
  }

  .footer14 .spacer {
    height: 2px;
    width: 80%;
    background-color: var(--primary);
    margin-bottom: 2rem;
    position: relative;
    margin-top: 1rem;
  }

  .footer14 .spacer:before {
    height: 10px;
    width: 10px;
    background-color: var(--primary);
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: -4px;
    content: "";
  }

  .footer14 .footer-ingredient p {
    text-align: justify;
  }

  @media (max-width: 567px) {
    .footer14 .quick-links ul {
      display: block;
    }

    .footer14 .quick-links li {
      text-align: left;
    }

    .footer14 .copyright p {
      width: 100%;
    }

    .footer14 .corp {
      width: 100%;
    }
  }

  /* ===================================== */
  /*         9.15 Footer Section 15        */
  /* ===================================== */

  .footer15 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer15 .footer-brand-name {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .footer15 .copyright p {
    margin: 0;
  }

  .footer15 .quick-links ul {
    display: flex;
  }

  .footer15 .quick-links li {
    width: 100%;
    text-align: center;
  }

  .footer15 .footer-site-map li {
    padding: 0.25rem 0;
    width: 100%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer15 .footer-return-shipment li {
    padding: 0.25rem 0;
    width: 44%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer15 h5 {
    position: relative;
    font-size: 24px;
    line-height: 26px;
    font-weight: 700;
  }

  .footer15 .spacer {
    height: 2px;
    width: 80%;
    background-color: var(--primary);
    margin-bottom: 2rem;
    position: relative;
    margin-top: 1rem;
  }

  .footer15 .spacer:before {
    height: 10px;
    width: 10px;
    background-color: var(--primary);
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: -4px;
    content: "";
  }

  .footer15 .bottom-footer {
    justify-content: space-between;
    flex-wrap: wrap;
  }

  @media (max-width: 567px) {
    .footer15 .quick-links ul {
      display: block;
    }

    .footer15 .quick-links li {
      text-align: left;
    }

    .footer15 .copyright p {
      width: 100%;
    }

    .footer15 .corp {
      width: 100%;
    }
  }

  /* ===================================== */
  /*         9.16 Footer Section 16        */
  /* ===================================== */

  .footer16 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer16 .footer-brand-name {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .footer16 .copyright p {
    margin: 0;
  }

  .footer16 .quick-links ul {
    display: flex;
  }

  .footer16 .quick-links li {
    width: 100%;
    text-align: center;
  }

  .footer16 .footer-site-map li {
    padding: 0.25rem 0;
    margin-bottom: 0.8rem;
    margin: 0px 20px;
  }

  .footer16 .footer-return-shipment li {
    padding: 0.25rem 0;
    margin: 0px 20px;
    margin-bottom: 0.8rem;
  }

  .footer16 h5 {
    position: relative;
    font-size: 24px;
    line-height: 26px;
    font-weight: 700;
  }

  .footer16 .spacer {
    height: 2px;
    width: 80%;
    background-color: var(--primary);
    margin-bottom: 2rem;
    position: relative;
    margin-top: 1rem;
  }

  .footer16 .spacer:before {
    height: 10px;
    width: 10px;
    background-color: var(--primary);
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: -4px;
    content: "";
  }

  .footer16 .bottom-footer {
    justify-content: space-between;
    flex-wrap: wrap;
  }

  @media (max-width: 567px) {
    .footer16 .quick-links ul {
      display: block;
    }

    .footer16 .quick-links li {
      text-align: left;
    }

    .footer16 .copyright p {
      width: 100%;
    }

    .footer16 .corp {
      width: 100%;
    }
  }

  /* ===================================== */
  /*         9.17 Footer Section 17          */
  /* ===================================== */
  .footer17 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer17 .contain-links {
    margin: 20px;
    padding: 20px;
    border-radius: 50px;
  }

  .footer17 .copyright p {
    margin: 0;
  }

  .footer17 h5 {
    padding-bottom: 0.75rem;
    position: relative;
  }

  .footer17 .quick-links ul li {
    position: relative;
    padding-left: 25px;
    padding-top: 0;
    margin-bottom: 1rem;
  }

  .footer17 .quick-links ul li:before {
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

  .footer17 .date-copyright-main {
    display: flex;
    justify-content: end;
  }

  .footer17 .corp-main {
    display: flex;
    justify-content: end;
  }

  @media (max-width: 991px) {
    .footer17 .footer-about {
      display: flex;
      justify-content: center;
    }

    .footer17 .date-copyright-main {
      justify-content: center;
    }

    .footer17 .corp-main {
      justify-content: center;
    }
  }

  /* ===================================== */
  /*         9.18 Footer Section 18          */
  /* ===================================== */
  .footer18 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer18 .copyright p {
    margin: 0;
  }

  .footer18 .footer-brand {
    font-size: 40px;
  }

  .footer18 h5 {
    padding-bottom: 0.75rem;
    position: relative;
  }

  .footer18 .footer-links {
    border-radius: 20px;
    padding: 20px;
    margin: 20px;
  }

  .footer18 .footer-links h5::after {
    content: "";
    background-color: #fff;
    width: 100%;
    height: 2px;
    position: absolute;
    top: 35px;
    left: 0px;
  }

  .footer18 .quick-links ul li {
    position: relative;
    padding-left: 25px;
    padding-top: 0;
    margin-bottom: 1rem;
  }

  .footer18 .quick-links ul li:before {
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

  .footer18 .corp-main {
    text-align: end;
  }

  @media (max-width: 991px) {
    .footer18 .date-main {
      text-align: center;
    }

    .footer18 .corp-main {
      text-align: center;
    }
  }

  @media (max-width: 576px) {
    .footer18 .footer-brand {
      font-size: 30px;
    }

    .footer18 .footer-links {
      margin: 10px 0px;
    }
  }

  /* ===================================== */
  /*         9.19 Footer Section 19        */
  /* ===================================== */

  .footer19 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer19 .footer-brand-name {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .footer19 .copyright p {
    margin: 0;
  }

  .footer19 .quick-links ul {
    display: flex;
  }

  .footer19 .quick-links li {
    width: 100%;
    text-align: center;
  }

  .footer19 .footer-site-map li {
    padding: 0.25rem 0;
    margin-bottom: 0.8rem;
    margin: 0px 20px;
  }

  .footer19 .footer-return-shipment li {
    padding: 0.25rem 0;
    margin: 0px 20px;
    margin-bottom: 0.8rem;
  }

  .footer19 h5 {
    position: relative;
    font-size: 24px;
    line-height: 26px;
    font-weight: 700;
    margin: 0px;
  }

  .footer19 .footer-links h5 {
    border-right: 1px solid;
    padding: 0px 15px;
  }

  .footer19 .spacer {
    height: 2px;
    width: 80%;
    background-color: var(--primary);
    margin-bottom: 2rem;
    position: relative;
    margin-top: 1rem;
  }

  .footer19 .spacer:before {
    height: 10px;
    width: 10px;
    background-color: var(--primary);
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: -4px;
    content: "";
  }

  .footer19 .bottom-footer {
    justify-content: space-between;
    flex-wrap: wrap;
  }

  @media (max-width: 567px) {
    .footer19 .quick-links ul {
      display: block;
    }

    .footer19 .quick-links li {
      text-align: left;
    }

    .footer19 .copyright p {
      width: 100%;
    }

    .footer19 .corp {
      width: 100%;
    }
  }

  /* ===================================== */
  /*         9.20 Footer Section 20          */
  /* ===================================== */
  .footer20 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer20 .footer-contain {
    border-bottom: solid 1px rgba(255, 255, 255, 0.1);
    margin-bottom: 30px;
  }

  .footer20 .copyright p {
    margin: 0;
  }

  .footer20 .footer-brand {
    font-size: 25px;
    font-weight: 600;
  }

  .footer20 h5 {
    padding-bottom: 0.75rem;
    position: relative;
  }

  .footer20 .footer-menus {
    padding: 20px;
    margin: 20px 0px;
  }

  .footer20 .footer-links {
    background-color: rgb(0, 0, 0, 0.2);
    border-radius: 10px;
    padding: 20px;
    margin: 20px 0px;
  }

  .footer20 .footer-links h5::after {
    content: "";
    background-color: #fff;
    width: 100%;
    height: 2px;
    position: absolute;
    top: 35px;
    left: 0px;
  }

  .footer20 .quick-links ul li {
    position: relative;
    padding-top: 0;
  }

  .footer20 .corp-main {
    text-align: end;
  }

  @media (max-width: 991px) {
    .footer20 .date-main {
      text-align: center;
    }

    .footer20 .corp-main {
      text-align: center;
    }
  }

  @media (max-width: 576px) {
    .footer20 .footer-brand {
      font-size: 30px;
    }

    .footer20 .footer-links {
      margin: 10px 0px;
    }
  }

  /* ===================================== */
  /*         9.21 Footer Section 21          */
  /* ===================================== */
  .footer21 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer21 .footer-contain {
    border-bottom: solid 1px rgba(255, 255, 255, 0.1);
    margin-bottom: 30px;
  }

  .footer21 .copyright p {
    margin: 0;
  }

  .footer21 .footer-brand {
    font-size: 25px;
    font-weight: 600;
  }

  .footer21 h5 {
    padding-bottom: 0.75rem;
    position: relative;
  }

  .footer21 .footer-links {
    background-color: rgb(0, 0, 0, 0.2);
    border-radius: 10px;
  }

  .footer21 h5::after {
    content: "";
    background-color: #fff;
    width: 50%;
    height: 2px;
    position: absolute;
    top: 35px;
    left: 0px;
  }

  .footer21 .contact-widget {
    font-size: 22px;
  }

  .footer21 .quick-links ul li {
    position: relative;
    padding-top: 0;
  }

  .footer21 .corp-main {
    text-align: end;
  }

  @media (max-width: 991px) {
    .footer21 .date-main {
      text-align: center;
    }

    .footer21 .corp-main {
      text-align: center;
    }
  }

  @media (max-width: 576px) {
    .footer21 .footer-brand {
      font-size: 30px;
    }

    .footer21 .footer-links {
      margin: 10px 0px;
    }
  }

  /* ===================================== */
  /*         9.22 Footer Section 22        */
  /* ===================================== */

  .footer22 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer22 .footer-brand-name {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .footer22 .copyright p {
    margin: 0;
  }

  .footer22 .quick-links ul {
    display: flex;
  }

  .footer22 .quick-links li {
    width: 100%;
    text-align: center;
  }

  .footer22 .footer-site-map li {
    padding: 0.25rem 0;
    width: 100%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer22 .footer-return-shipment li {
    padding: 0.25rem 0;
    width: 44%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer22 h5 {
    position: relative;
    font-size: 24px;
    line-height: 26px;
    font-weight: 700;
    border: 1px solid;
    padding: 10px;
  }

  .footer22 .brand-name {
    border: none;
  }

  .footer22 .spacer {
    height: 2px;
    width: 80%;
    background-color: var(--primary);
    margin-bottom: 2rem;
    position: relative;
    margin-top: 1rem;
  }

  .footer22 .spacer:before {
    height: 10px;
    width: 10px;
    background-color: var(--primary);
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: -4px;
    content: "";
  }

  .footer22 .bottom-footer {
    justify-content: space-between;
    flex-wrap: wrap;
  }

  .footer22 .contact-widget li {
    border-left: 1px solid;
  }

  @media (max-width: 567px) {
    .footer22 .quick-links ul {
      display: block;
    }

    .footer22 .quick-links li {
      text-align: left;
    }

    .footer22 .copyright p {
      width: 100%;
    }

    .footer22 .corp {
      width: 100%;
    }
  }

  /* ===================================== */
  /*         9.23 Footer Section 23          */
  /* ===================================== */
  .footer23 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer23 .contain {
    display: flex;
    justify-content: center;
  }

  .footer23 .copyright p {
    margin: 0;
  }

  .footer23 .product-categories {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .footer23 .footer-brand {
    font-size: 40px;
  }

  .footer23 h5 {
    padding-bottom: 0.75rem;
    position: relative;
  }

  .footer23 .footer-links {
    border-radius: 20px;
    padding: 20px;
    margin: 20px;
    border: 1px solid rgba(255, 255, 255, 0.1);
  }

  .footer23 .footer-links h5::after {
    content: "";
    background-color: #fff;
    width: 100%;
    height: 2px;
    position: absolute;
    top: 35px;
    left: 0px;
  }

  .footer23 .quick-links ul li {
    position: relative;
    padding-left: 25px;
    padding-top: 0;
    margin-bottom: 1rem;
  }

  .footer23 .quick-links ul li:before {
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

  .footer23 .corp-main {
    text-align: center;
  }

  @media (max-width: 991px) {
    .footer23 .date-main {
      text-align: center;
    }

    .footer23 .corp-main {
      text-align: center;
    }
  }

  @media (max-width: 576px) {
    .footer23 .footer-brand {
      font-size: 30px;
    }

    .footer23 .footer-links {
      margin: 10px 0px;
    }
  }

  /* ===================================== */
  /*         9.24 Footer Section 24          */
  /* ===================================== */
  .footer24 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer24 .copyright p {
    margin: 0;
  }

  .footer24 .footer-brand {
    font-size: 40px;
    font-weight: 600;
  }

  .footer24 h5 {
    padding-bottom: 0.75rem;
    position: relative;
  }

  .footer24 .footer-links {
    border-radius: 30px 5px 30px 5px;
    padding: 20px;
    margin: 20px;
  }

  .footer24 .footer-links h5::after {
    content: "";
    background-color: #fff;
    width: 10%;
    height: 2px;
    position: absolute;
    top: 35px;
    left: 0px;
  }

  .footer24 .contact-details {
    display: flex;
    justify-content: end;
  }

  .footer24 .quick-links ul li {
    position: relative;
    padding-left: 25px;
    padding-top: 0;
    margin-bottom: 1rem;
  }

  .footer24 .quick-links ul li:before {
    position: absolute;
    content: "";
    left: 0;
    top: 7px;
    border: solid white;
    border-width: 3px 3px 3px 3px;
    display: inline-block;
    padding: 3px;
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
  }

  .footer24 .corp-main {
    text-align: end;
  }

  @media (max-width: 991px) {
    .footer24 .contact-details {
      display: unset;
      justify-content: unset;
    }

    .footer24 .date-main {
      text-align: center;
    }

    .footer24 .corp-main {
      text-align: center;
    }
  }

  @media (max-width: 576px) {
    .footer24 .footer-brand {
      font-size: 30px;
    }

    .footer24 .footer-links {
      margin: 10px 0px;
    }
  }

  /* ===================================== */
  /*         9.25 Footer Section 25          */
  /* ===================================== */
  .footer25 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer25 .copyright p {
    margin: 0;
  }

  .footer25 .footer-brand {
    font-size: 40px;
    font-weight: 600;
  }

  .footer25 h5 {
    padding-bottom: 0.75rem;
    position: relative;
  }

  .footer25 .footer-links {
    background-color: rgb(0, 0, 0, 0.2);
    border-radius: 30px 5px 30px 5px;
    padding: 20px;
    margin: 20px;
  }

  .footer25 .footer-links h5::after {
    content: "";
    background-color: #fff;
    width: 10%;
    height: 2px;
    position: absolute;
    top: 35px;
    left: 0px;
  }

  .footer25 .quick-links ul li {
    position: relative;
    padding-left: 25px;
    padding-top: 0;
    margin-bottom: 1rem;
  }

  .footer25 .quick-links ul li:before {
    position: absolute;
    content: "";
    left: 0;
    top: 7px;
    border: solid white;
    border-width: 3px 3px 3px 3px;
    display: inline-block;
    padding: 3px;
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
  }

  .footer25 .corp-contain {
    text-align: end;
  }

  @media (max-width: 991px) {
    .footer25 .date-contain {
      text-align: center;
    }

    .footer25 .corp-contain {
      text-align: center;
    }
  }

  @media (max-width: 576px) {
    .footer25 .footer-brand {
      font-size: 30px;
    }

    .footer25 .footer-links {
      margin: 10px 0px;
    }
  }

  /* ===================================== */
  /*         9.26 Footer Section 26          */
  /* ===================================== */
  .footer26 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
    clip-path: polygon(0 0, 0% 100%, 100% 100%, 100vw 6%);
  }

  .footer26 .brand-main {
    border-bottom: solid 1px rgba(255, 255, 255, 0.1);
  }

  .footer26 .copyright p {
    margin: 0;
  }

  .footer26 .footer-brand {
    font-size: 40px;
    font-weight: 600;
  }

  .footer26 h5 {
    padding-bottom: 0.75rem;
    position: relative;
  }

  .footer26 .footer-links {
    border-radius: 20px;
    padding: 20px;
    margin: 20px;
  }

  .footer26 .footer-links h5::after {
    content: "";
    background-color: #fff;
    width: 10%;
    height: 2px;
    position: absolute;
    top: 35px;
    left: 0px;
  }

  .footer26 .quick-links ul li {
    position: relative;
    padding-left: 25px;
    padding-top: 0;
    margin-bottom: 1rem;
  }

  .footer26 .quick-links ul li:before {
    position: absolute;
    content: "";
    left: 0;
    top: 7px;
    border: solid white;
    border-width: 3px 3px 3px 3px;
    display: inline-block;
    padding: 3px;
  }

  .footer26 .corp-contain {
    text-align: end;
  }

  @media (max-width: 991px) {
    .footer26 .date-contain {
      text-align: center;
    }

    .footer26 .corp-contain {
      text-align: center;
    }
  }

  @media (max-width: 576px) {
    .footer26 .footer-brand {
      font-size: 30px;
    }

    .footer26 .footer-links {
      margin: 10px 0px;
    }
  }

  /* ===================================== */
  /*         9.27 Footer Section 27          */
  /* ===================================== */
  .footer27 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer27 .column {
    border-right: 2px solid;
  }

  .footer27 .footer-contain {
    border-bottom: solid 1px rgba(255, 255, 255, 0.1);
  }

  .footer27 .copyright {
    margin-top: 1rem;
  }

  .footer27 .copyright p {
    margin: 0;
  }

  .footer27 .footer-brand {
    font-size: 25px;
    font-weight: 700;
    text-decoration: underline;
  }

  .footer27 h5 {
    padding-bottom: 0.75rem;
    position: relative;
    font-style: italic;
  }

  .footer27 .footer-links {
    background-color: rgb(0, 0, 0, 0.2);
    padding: 20px;
    margin-top: 20px;
  }

  .footer27 .footer-links h5::after {
    content: "";
    background-color: #fff;
    width: 100%;
    height: 2px;
    position: absolute;
    top: 35px;
    left: 0px;
  }

  .footer27 .quick-links ul li {
    position: relative;
    padding-top: 0;
  }

  .footer27 .quick-links ul li a {
    padding: 0px 20px;
  }

  .footer27 .corp-main {
    text-align: end;
  }

  @media (max-width: 991px) {
    .footer27 .column {
      border-right: unset;
    }

    .footer27 .date-main {
      text-align: center;
    }

    .footer27 .corp-main {
      text-align: center;
    }
  }

  @media (max-width: 576px) {
    .footer27 .footer-brand {
      font-size: 30px;
    }

    .footer27 .footer-links {
      margin: 10px 0px;
    }
  }

  /* ===================================== */
  /*         9.28 Footer Section 28          */
  /* ===================================== */
  .footer28 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer28 .row-contain {
    padding: 20px 0px;
  }

  .footer28 .column {
    border-right: 2px solid;
  }

  .footer28 .footer-contain {
    border-bottom: solid 1px rgba(255, 255, 255, 0.1);
  }

  .footer28 .copyright {
    margin-top: 1rem;
  }

  .footer28 .copyright p {
    margin: 0;
  }

  .footer28 .footer-brand {
    font-size: 25px;
    font-weight: 700;
    text-decoration: underline;
  }

  .footer28 h5 {
    position: relative;
    font-style: italic;
    border: 2px solid;
    border-radius: 50px;
    padding: 15px;
  }

  .footer28 .footer-links {
    background-color: rgb(0, 0, 0, 0.2);
    padding: 20px;
    margin-top: 20px;
  }

  .footer28 .footer-links h5::after {
    content: "";
    background-color: #fff;
    width: 100%;
    height: 2px;
    position: absolute;
    top: 35px;
    left: 0px;
  }

  .footer28 .quick-links ul li {
    position: relative;
    padding-top: 0;
  }

  @media (max-width: 991px) {
    .footer28 .column {
      border-right: unset;
    }
  }

  @media (max-width: 576px) {
    .footer28 .footer-brand {
      font-size: 30px;
    }

    .footer28 .footer-links {
      margin: 10px 0px;
    }
  }

  /* ===================================== */
  /*         9.29 Footer Section 29        */
  /* ===================================== */

  .footer29 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer29 .footer-brand-name {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    background-color: rgb(0, 0, 0, 0.2);
    height: 400px;
    border-radius: 0px 0px 30px 30px;
  }

  .footer29 .brand-name {
    font-size: 28px;
    font-weight: 600;
  }

  .footer29 .main-top-left,
  .footer29 .main-top-right {
    position: relative;
  }

  .footer29 .main-top-left::before {
    content: "copyright";
    position: absolute;
    top: -40px;
    border: 2px solid var(--primary);
    width: auto;
    padding: 5px 10px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 400;
  }

  .footer29 .main-top-left::after {
    content: "";
    position: absolute;
    top: -24px;
    width: 40%;
    height: 1px;
    left: 78px;
    background-color: var(--primary);
  }

  .footer29 .main-top-right::before {
    content: "About";
    position: absolute;
    top: -40px;
    border: 2px solid var(--primary);
    width: auto;
    padding: 5px 10px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 400;
  }

  .footer29 .main-top-right::after {
    content: "";
    position: absolute;
    top: -24px;
    width: 40%;
    height: 1px;
    left: 58px;
    background-color: var(--primary);
  }

  .footer29 .copyright {
    margin-top: 2rem;
  }

  .footer29 .copyright p {
    margin: 0;
  }

  .footer29 .quick-links ul {
    display: flex;
  }

  .footer29 .quick-links li {
    width: 100%;
    text-align: center;
  }

  .footer29 .footer-site-map li {
    padding: 0.25rem 0;
    width: 100%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer29 .footer-return-shipment li {
    padding: 0.25rem 0;
    width: 44%;
    margin-right: 5%;
    margin-bottom: 0.8rem;
  }

  .footer29 h5 {
    position: relative;
    font-size: 24px;
    line-height: 26px;
    font-weight: 700;
  }

  .footer29 .spacer {
    height: 2px;
    width: 80%;
    background-color: var(--primary);
    margin-bottom: 2rem;
    position: relative;
    margin-top: 1rem;
  }

  .footer29 .spacer:before {
    height: 10px;
    width: 10px;
    background-color: var(--primary);
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: -4px;
    content: "";
  }

  .footer29 .bottom-footer {
    justify-content: space-between;
    flex-wrap: wrap;
  }

  @media (max-width: 991px) {
    .footer29 .main-top-left {
      margin-top: 100px;
    }

    .footer29 .main-top-right {
      margin-top: 100px;
    }
  }

  @media (max-width: 567px) {
    .footer29 .footer-brand-name {
      height: auto;
    }

    .footer29 .quick-links ul {
      display: block;
    }

    .footer29 .quick-links li {
      text-align: left;
    }

    .footer29 .copyright p {
      width: 100%;
    }

    .footer29 .corp {
      width: 100%;
    }
  }

  /* ===================================== */
  /*         9.30 Footer Section 30          */
  /* ===================================== */
  .footer30 {
    padding-bottom: 0;
    font-size: 1rem;
    background-color: #0e0e0e;
  }

  .footer30 .contain {
    height: 800px;
  }

  .footer30 .copyright {
    margin-top: 0px;
  }

  .footer30 .copyright p {
    margin: 0;
  }

  .footer30 .footer-brand {
    font-size: 40px;
  }

  .footer30 h5 {
    padding-bottom: 0.75rem;
    position: relative;
  }

  .footer30 .footer-links {
    padding: 20px;
  }

  .footer30 .footer-links h5::after {
    content: "";
    background-color: #fff;
    width: 100%;
    height: 2px;
    position: absolute;
    top: 35px;
    left: 0px;
  }

  .footer30 .quick-links ul li {
    position: relative;
    padding-left: 25px;
    padding-top: 0;
    margin-bottom: 1rem;
  }

  .footer30 .quick-links ul li:before {
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

  .footer30 .corp-main {
    text-align: end;
  }

  @media (max-width: 991px) {
    .footer30 .contain {
      height: auto;
      padding: 40px 0px;
    }

    .footer30 .date-main {
      text-align: center;
    }

    .footer30 .corp-main {
      text-align: center;
    }
  }

  @media (max-width: 576px) {
    .footer30 .footer-brand {
      font-size: 30px;
    }

    .footer30 .footer-links {
      margin: 10px 0px;
    }
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

  /* =================================================== */
  /* =================================================== */
  /* ******           12 Contact Page             ****** */
  /* =================================================== */
  /* =================================================== */

  /* ===================================== */
  /*          12.1 Contact Page 1          */
  /* ===================================== */
  .contact-page1 {
    margin: 30px 0;
  }

  /* ===================================== */
  /*          12.2 Contact Page 2          */
  /* ===================================== */
  .contact-page2 {
    padding: 30px 0;
    position: relative;
    background-color: #f9f9f9;
  }

  .contact-page2 .contact-contain {}

  .contact-page2 .contact-heading {
    margin-left: auto;
    margin-right: auto;
    padding: 40px 40px;
  }

  .contact-page2 .contact-heading h1 {
    font-size: 72px;
    font-weight: 700;
  }

  .contact-page2 .contact-head i {
    font-size: 35px;
    margin: 20px 0px;
    color: var(--primary);
  }

  .contact-page2 .contact-head {
    background-color: #fff;
    display: flex;
    flex-direction: column;
    margin: 10px;
    padding: 20px 40px;
    width: calc(33.333% - 30px);
    border-radius: 20px;
  }

  @media (max-width: 762px) {
    .contact-page2 .contact-heading h1 {
      font-size: 40px;
    }

    .contact-page2 .contact-head {
      width: 100%;
    }
  }

  /* ===================================== */
  /*          12.3 Contact Page 3          */
  /* ===================================== */
  .contact-page3 {
    padding: 50px 0;
    position: relative;
  }

  .contact-page3 .contact-contain {
    background-color: #f9f9f9;
  }

  .contact-page3 .contact-heading {
    margin-left: auto;
    margin-right: auto;
    padding: 40px 40px;
  }

  .contact-page3 .contact-heading h1 {
    font-weight: 700;
  }

  .contact-page3 .contact-head i {
    font-size: 20px;
    text-align: center;
    margin: 20px 0px;
  }

  .contact-page3 .contact-head-1 {
    background-color: #f5f5f5;
  }

  .contact-page3 .contact-head-2 {
    background-color: #f1f1f1;
  }

  .contact-page3 .contact-head-3 {
    background-color: #eaeaea;
  }

  .contact-page3 .contact-mini-heading {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .contact-page3 .contact-head {
    display: flex;
    flex-direction: column;
    padding: 40px 40px;
  }

  /* ===================================== */
  /*          12.4 Contact Page 4          */
  /* ===================================== */
  .contact-page4 {
    margin: 30px 0;
    position: relative;
  }

  .contact-page4 .section4 {
    box-shadow: 0px 0px 15px #c9c9c980;
  }

  .contact-page4 .left {
    padding: 30px;
  }

  .contact-page4 .right {
    padding: 30px;
  }

  .contact-page4 .contact-title {
    font-size: 72px;
    font-weight: 700;
  }

  .contact-page4 .contact-border {
    border-bottom: 20px solid;
  }

  .contact-page4 .contact-heading {
    margin-left: auto;
    margin-right: auto;
    width: 600px;
    padding: 40px 40px;
  }

  .contact-page4 .contact-heading h1 {
    text-align: center;
  }

  .contact-page4 .contact-head i {
    font-size: 20px;
    text-align: center;
    margin: 20px 0px;
  }

  .contact-page4 .contact-mini-heading {
    font-size: 24px;
    margin-left: 20px;
    margin-bottom: 0px;
  }

  .contact-page4 .contact-head {
    display: flex;
    flex-direction: column;
    padding: 20px 0px;
  }

  .contact-page4 .contact-img {
    padding: 0px;
  }

  @media (max-width: 991px) {
    .contact-page4 .contact-heading {
      width: 600px;
      height: 700px;
      padding: 40px 40px;
      width: auto;
      height: auto;
      padding: 40px 20px;
    }

    .contact-page4 .contact-contain {
      position: unset;
    }
  }

  @media (max-width: 576px) {
    .contact-page4 .contact-title {
      font-size: 36px;
    }
  }

  /* ===================================== */
  /*          12.5 Contact Page 5          */
  /* ===================================== */
  .contact-page5 {
    position: relative;
    background-image: url(./img/<?= $pageConfig["contact_section_bg_image"] ?>);
    background-position: center center;
    background-size: cover;
  }

  .contact-page5 .contact-title {
    font-size: 72px;
    font-weight: 700;
  }

  .contact-page5 .contact-heading {
    margin-left: auto;
    margin-right: auto;
    width: 600px;
    padding: 40px 40px;
  }

  .contact-page5 .title-contain {
    background-color: #fff;
    padding-top: 20px;
  }

  .contact-page5 .contact-heading h1 {
    text-align: center;
  }

  .contact-page5 .contact-mini-heading {
    font-size: 24px;
    margin-bottom: 0px;
  }

  .contact-page5 .contact-head {
    display: flex;
    flex-direction: column;
    padding: 20px 50px;
    background-color: #fff;
  }

  .contact-page5 .contact-img {
    padding: 0px;
    width: 100%;
  }

  .contact-page5 .contact-img img {
    width: 100%;
  }

  @media (max-width: 991px) {
    .contact-page5 .contact-heading {
      width: 600px;
      height: 700px;
      padding: 40px 40px;
      width: auto;
      height: auto;
      padding: 40px 20px;
    }

    .contact-page5 .contact-contain {
      position: unset;
    }
  }

  @media (max-width: 576px) {
    .contact-page5 .contact-title {
      font-size: 36px;
    }

    .contact-page5 .contact-head {
      padding: 20px 10px;
    }
  }

  /* ===================================== */
  /*          12.6 Contact Page 6          */
  /* ===================================== */
  .contact-page6 {
    padding: 30px 0;
    position: relative;
    background-color: #f9f9f9;
  }

  .contact-page6 .section6 {
    padding: 20px 0px;
    background-color: #fff;
  }

  .contact-page6 .left {
    padding: 30px;
  }

  .contact-page6 .right {
    padding: 30px;
  }

  .contact-page6 .contact-title {
    font-weight: 700;
  }

  .contact-page6 .contact-border {
    border-bottom: 20px solid;
  }

  .contact-page6 .contact-heading {
    margin-left: auto;
    margin-right: auto;
    width: 600px;
    padding: 40px 40px;
  }

  .contact-page6 .contact-heading h1 {
    text-align: center;
  }

  .contact-page6 .contact-head {
    display: flex;
    flex-direction: column;
  }

  .contact-page6 .contact-head i {
    font-size: 20px;
    text-align: center;
    margin: 20px 0px;
  }

  .contact-page6 .contact-mini-heading {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .contact-page6 .contact-img {
    margin: 60px 0px;
    padding: 0px;
  }

  @media (max-width: 991px) {
    .contact-page6 .contact-head {
      margin-top: 10px;
    }
  }

  /* ===================================== */
  /*          12.7 Contact Page 7          */
  /* ===================================== */
  .contact-page7 {
    position: relative;
  }

  .contact-page7 .contact-img {
    padding: 0px;
    width: 100%;
    background-image: url(./img/<?= $pageConfig["contact_section_bg_image"] ?>);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .contact-page7 .contact-main {
    padding: 40px 40px;
    margin: 60px 0px;
    background-color: #fff;
  }

  .contact-page7 .contact-head i::before {
    background-color: var(--primary);
    color: var(--primary_text_color);
    padding: 16px;
    display: inline-block;
    border-radius: 50px;
    margin-bottom: 10px;
  }

  .contact-page7 .contact-title {
    font-size: 72px;
    font-weight: 700;
  }

  .contact-page7 .contact-para {
    font-size: 18px;
    font-weight: 400;
  }

  .contact-page7 .contact-heading {
    margin-left: auto;
    margin-right: auto;
    width: 600px;
    padding: 40px 40px;
  }

  .contact-page7 .contact-heading h1 {
    text-align: center;
  }

  .contact-page7 .contact-mini-heading {
    font-size: 24px;
    margin-bottom: 0px;
  }

  .contact-page7 .contact-head {
    display: flex;
    flex-direction: column;
    padding: 20px 0px;
  }

  @media (max-width: 991px) {
    .contact-page7 .contact-heading {
      width: 600px;
      height: 700px;
      padding: 40px 40px;
      width: auto;
      height: auto;
      padding: 40px 20px;
    }
  }

  @media (max-width: 576px) {
    .contact-page7 .contact-title {
      font-size: 36px;
    }

    .contact-page7 .contact-head {
      padding: 20px 10px;
    }
  }

  /* ===================================== */
  /*          12.8 Contact Page 8          */
  /* ===================================== */
  .contact-page8 {
    padding: 30px 0;
    position: relative;
    background-color: #f9f9f9;
  }

  .contact-page8 .contact-contain {}

  .contact-page8 .contact-heading {
    margin-left: auto;
    margin-right: auto;
    padding: 40px 40px;
  }

  .contact-page8 .contact-heading h1 {
    font-size: 45px;
    font-weight: 700;
  }

  .contact-page8 .contact-head {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 10px;
    padding: 20px 40px;
    width: calc(33.333% - 30px);
    border-radius: 20px;
  }

  .contact-page8 .contact-head i {
    font-size: 35px;
    margin: 20px 0px;
    color: #000;
    background-color: #fff;
    box-shadow: 10px 10px 15px #c9c9c9;
    padding: 26px;
    border-radius: 50px;
    display: inline-block;
    transition: 0.3s;
  }

  .contact-page8 .contact-head:hover i {
    background-color: var(--primary);
    color: var(--primary_text_color);
    transition: 0.5s;
  }

  @media (max-width: 767px) {
    .contact-page8 .contact-heading h1 {
      font-size: 40px;
    }

    .contact-page8 .contact-head {
      width: 100%;
    }
  }

  /* ===================================== */
  /*          12.9 Contact Page 9          */
  /* ===================================== */
  .contact-page9 {
    padding: 30px 0;
    position: relative;
  }

  .contact-page9 .contact-contain {
    margin: 40px 0px;
  }

  .contact-page9 .contact-heading {
    margin-left: auto;
    margin-right: auto;
    padding: 40px 40px;
  }

  .contact-page9 .contact-heading h1 {
    font-size: 45px;
    font-weight: 700;
  }

  .contact-page9 .contact-head {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    margin: 10px;
    width: calc(33.333% - 50px);
    border-radius: 20px;
  }

  .contact-page9 .contact-head .icon-contain {
    position: relative;
    font-size: 35px;
    margin: 0px 30px 0px 0px;
    box-shadow: 10px 10px 15px #c9c9c960;
    padding: 20px;
    border-radius: 50px;
    display: flex;
    transition: 0.3s;
  }

  .contact-page9 .contact-head .icon-contain:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50px;
    background-color: var(--primary);
    color: #fff;
    opacity: 0.3;
    top: 0;
    left: 0;
  }

  .contact-page9 .contact-head i {
    color: #fff;
    z-index: 9;
  }

  @media (max-width: 767px) {
    .contact-page9 .contact-heading h1 {
      font-size: 40px;
    }

    .contact-page9 .contact-head {
      width: 100%;
    }
  }

  /* ===================================== */
  /*          12.10 Contact Page 10          */
  /* ===================================== */
  .contact-page10 {
    padding: 30px 0;
    position: relative;
    background-color: #f9f9f9;
  }

  .contact-page10 .contact-contain {
    margin: 40px 0px;
  }

  .contact-page10 .contact-heading {
    margin-left: auto;
    margin-right: auto;
    padding: 40px 40px;
  }

  .contact-page10 .contact-heading h1 {
    font-size: 45px;
    font-weight: 700;
  }

  .contact-page10 .contact-head {
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 2px solid #eaeaea;
    padding: 20px;
    margin: 10px;
    width: calc(33.333% - 20px);
    border-radius: 20px;
    transition: 0.3s;
  }

  .contact-page10 .contact-head:hover {
    background-color: #fff;
    box-shadow: 10px 10px 15px #c9c9c960;
    transition: 0.5s;
  }

  .contact-page10 .contact-head i {
    position: relative;
    font-size: 20px;
    margin: 0px 30px 0px 0px;
    box-shadow: 10px 10px 15px #c9c9c960;
    padding: 15px;
    border-radius: 50px;
    display: flex;
    transition: 0.3s;
  }

  .contact-page10 .contact-mini-title {
    margin: 0px;
  }

  @media (max-width: 991px) {
    .contact-page10 .brand-name {
      text-align: center;
    }

    .contact-page10 .corp-name {
      text-align: center !important;
    }
  }

  @media (max-width: 767px) {
    .contact-page10 .contact-heading h1 {
      font-size: 40px;
    }

    .contact-page10 .contact-head {
      width: 100%;
    }

    .contact-page10 .contact-head {
      margin: 10px;
      margin: 10px 0px;
    }
  }

  /* =================================================== */
  /* =================================================== */
  /* ******             13 Cart Page            ****** */
  /* =================================================== */
  /* =================================================== */

  /* ===================================== */
  /*         13.2 Cart Page 2            */
  /* ===================================== */


  .cart-page2 .btn.btn-update {
    border-radius: 50px;
    max-width: 100%;
  }

  .cart-page2 #price-product-2 {
    font-weight: 600;
  }

  .cart-page2 #total-product-2 {
    font-weight: 600;
  }

  .cart-page2 .cart-right-col {
    border: 2px solid var(--primary);
    border-radius: 30px;
    padding: 20px 40px 20px 40px;
    margin-left: 50px;
  }

  .cart-page2 .btn.btn-continue {
    border-radius: 50px;
    color: var(--primary);
    border: 2px solid var(--primary);
  }

  .cart-page2 .sidebar-title-column h2 {
    border: none;
    margin-bottom: 10px;
  }

  @media (max-width: 991px) {
    .cart-page2 .cart-right-col {
      margin-top: 20px;
      margin-left: 0px;
    }
  }

  /* ===================================== */
  /*         13.3 Cart Page 3            */
  /* ===================================== */


  .cart-page3 .btn.btn-update {
    border-radius: 5px;
    max-width: 100%;
    width: auto;
    padding: 20px 20px;
    margin: 10px;
  }

  .cart-page3 .table-header {
    position: relative;
    border: none;
  }

  .cart-page3 .table-header:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: var(--primary);
    opacity: 0.2;
    border-radius: 50px;
  }

  .cart-page3 .table-header tr td {
    border: none;
    padding: 20px;
  }

  .cart-page3 #singlepdt {
    color: var(--primary);
    font-weight: 600;
  }

  .cart-page3 .cart-right-col {
    margin-top: 20px;
    padding: 20px 40px 20px 40px;
  }

  .cart-page3 .sidebar-details-column p {
    padding: 20px 10px;
  }

  .cart-page3 .btn.btn-continue {
    max-width: 100%;
    width: auto;
    border-radius: 5px;
    padding: 20px 20px;
    color: var(--primary);
    border: 2px solid var(--primary);
  }

  .cart-page3 .sidebar-title-column h2 {
    border: none;
    margin-bottom: 10px;
  }

  /* ===================================== */
  /*         13.4 Cart Page 4            */
  /* ===================================== */

  .cart-page4 .cart-left-col {
    position: relative;
    z-index: 9;
    padding: 20px 40px 20px 40px;
  }

  .cart-page4 .cart-left-col * {
    position: relative;
    z-index: 9;
  }

  .cart-page4 .sidebar-details-column {
    background-color: unset;
  }

  .cart-page4 .sidebar-details-column p {
    background-color: unset;
    font-size: 18px;
  }

  .cart-page4 .cart-left-col:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #F7F7F7;
    border: 2px solid #E7E7E7;
  }

  .cart-page4 .btn.btn-update {
    border-radius: 0px;
    max-width: 100%;
  }

  .cart-page4 #price-product-2 {
    font-weight: 600;
  }

  .cart-page4 #total-product-2 {
    font-weight: 600;
  }

  .cart-page4 .cart-right-col {
    border-radius: 30px;
    margin-left: 50px;
  }

  .cart-page4 .sidebar-title-column-2 h2 {
    font-size: 20px;
    text-transform: uppercase;
    font-weight: bold;
    margin-top: 0;
    padding: 10px 0;
  }

  .cart-page4 .cart-pdt-image {
    max-width: 150px;
  }

  .cart-page4 .btn.btn-continue {
    border-radius: 0px;
    color: var(--primary);
    border: 2px solid var(--primary);
  }

  .cart-page4 .sidebar-title-column h2 {
    border-bottom: 2px solid #E1E1E1;
    margin-bottom: 10px;
  }

  @media (max-width: 991px) {
    .cart-page4 .cart-right-col {
      margin-top: 20px;
      margin-left: 0px;
    }

    .cart-page4 .cart-pdt-image {
      max-width: 80px;
    }
  }

  /* ===================================== */
  /*         13.5 Cart Page 5            */
  /* ===================================== */


  .cart-page5 .btn.btn-update {
    border-radius: 50px;
    max-width: 100%;
  }

  .sidebar-details-column {
    background: unset;
  }

  .cart-page5 .sidebar-details-column p {
    border: 2px solid var(--primary);
    border-radius: 50px;
    margin: 10px 0px;
    background-color: unset;
  }

  .cart-page5 .sidebar-details-column p span {
    font-weight: 700;
  }

  .cart-page5 .priceCol {
    font-weight: 600;
  }

  .cart-page5 .totalCol {
    font-weight: 600;
  }

  .cart-page5 .cart-right-col {
    border-radius: 30px;
    padding: 20px 40px 20px 40px;
    margin-left: 50px;
    background-color: #f8f8f8;
  }

  .cart-page5 .btn.btn-continue {
    border-radius: 50px;
    color: var(--primary);
    border: 2px solid var(--primary);
    max-width: 100%;
  }

  .cart-page5 .sidebar-title-column h2 {
    border: none;
    margin-bottom: 10px;
  }

  @media (max-width: 991px) {
    .cart-page5 .cart-right-col {
      margin-top: 20px;
      margin-left: 0px;
    }
  }



  /* ===================================== */
  /*         13.6 Cart Page 6            */
  /* ===================================== */

  .cart-page6 .cart-wrapper {
    border: 2px solid var(--primary);
    padding: 10px;
    border-radius: 30px;
  }

  .cart-page6 .btn.btn-update {
    border-radius: 50px;
    max-width: 100%;
    width: auto;
    padding: 20px 20px;
    margin: 10px;
  }

  .cart-page6 .table-header {
    position: relative;
    border: none;
  }

  .cart-page6 .table-header:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: var(--primary);
    opacity: 0.2;
    border-radius: 50px;
  }

  .cart-page6 .table-header tr td {
    border: none;
    padding: 20px;
  }

  .cart-page6 #singlepdt {
    color: var(--primary);
    font-weight: 600;
  }

  .cart-page6 .cart-right-col {
    margin-top: 20px;
    padding: 20px 40px 20px 40px;
    border-top: 2px solid var(--primary);
  }

  .cart-page6 .sidebar-details-column p {
    padding: 20px 10px;
  }

  .cart-page6 .btn.btn-continue {
    max-width: 100%;
    width: auto;
    border-radius: 50px;
    padding: 20px 20px;
    color: var(--primary);
    border: 2px solid var(--primary);
  }

  .cart-page6 .sidebar-title-column h2 {
    border: none;
    margin-bottom: 10px;
  }



  /* ===================================== */
  /*         13.7 Cart Page 7            */
  /* ===================================== */


  .cart-page7 .btn.btn-update {
    border-radius: 50px;
    max-width: 100%;
    width: auto;
    padding: 20px 20px;
    margin: 10px;
  }

  .cart-page7 .table-header {
    position: relative;
    border: none;
  }

  .cart-page7 .table-header tr td {
    border: none;
    padding: 20px;
  }

  .cart-page7 #singlepdt {
    font-weight: 600;
  }

  .cart-page7 .totalCol {
    color: var(--primary);
    font-weight: 700;
  }

  .cart-page7 .cart-right-col {
    margin-top: 20px;
    padding: 20px 0px;
    border-top: 2px solid var(--primary);
  }

  .cart-page7 .sidebar-details-column p {
    padding: 20px 10px;
  }

  .cart-page7 .btn.btn-continue {
    max-width: 100%;
    width: auto;
    border-radius: 50px;
    color: var(--primary);
    border: none;
    margin: 0px;
  }

  .cart-page7 .sidebar-title-column h2 {
    border: none;
    margin-bottom: 20px;
    display: inline-block;
    position: relative;
    text-decoration: underline;
  }


  /* ===================================== */
  /*         13.8 Cart Page 8            */
  /* ===================================== */

  .cart-page8 .table-cart>thead:nth-child(1)>tr:nth-child(1)>td:nth-child(3) {
    width: 200%;
  }

  .cart-page8 .priceCol {
    font-weight: 600;
  }

  .cart-page8 .totalCol {
    font-weight: 600;
  }

  .cart-page8 #singlepdt {
    width: 200%;
  }

  .cart-page8 .cart-right-col {
    border-radius: 20px;
    padding: 20px 30px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  }

  .cart-page8 .sidebar-details-column {
    padding: 0px;
  }

  .cart-page8 .table-cart thead {
    border: none;
  }

  .cart-page8 .table-cart tr {
    border: none;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    margin: 10px 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    border-radius: 20px;
  }

  .cart-page8 .table-cart td {
    border: none;
    width: 100%;
  }

  .cart-page8 .btn.btn-update {
    max-width: 100%;
    border-radius: 10px;
    border: none !important;
    border: 2px solid var(--primary) !important;
  }

  .cart-page8 .btn.btn-continue {
    max-width: 100%;
    width: 100%;
    border-radius: 10px;
    color: var(--primary);
    border: none;
    border: 2px solid var(--primary);
  }

  .cart-page8 .sidebar-title-column h2 {
    border: none;
    margin-bottom: 10px;
  }

  @media (max-width: 991px) {
    .cart-page8 .cart-right-col {
      margin-top: 20px;
      margin-left: 0px;
    }
  }


  /* ===================================== */
  /*         13.9 Cart Page 9            */
  /* ===================================== */

  .cart-page9 {
    background-color: #F6F6F6;
  }

  .cart-page9 .table-header {
    position: relative;
    border: none;
  }

  .cart-page9 .heading-1 {
    font-size: 30px;
    font-weight: 400;
    margin-bottom: 40px;
    font-style: italic;
    text-transform: capitalize;
  }

  .cart-page9 .table-header tr td {
    border: none;
    padding: 20px;
    margin-bottom: 60px;
  }

  .cart-page9 .table td,
  .cart-page9 .table th {
    border-bottom: 2px solid #dee2e6;
    padding-top: 30px;
    padding-bottom: 30px;
    font-weight: 900;
  }

  .cart-page9 .table-header tr td p {
    text-align: right;
  }

  .cart-page9 tr>td {
    text-align: right;
  }

  .cart-page9 #singlepdt {
    text-align: left;
  }

  .cart-page9 .cart-pdt-image {
    max-width: 140px;
    border-radius: 20px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  }

  .cart-page9 .cart-right-col {
    margin-top: 20px;
    padding: 20px 40px 20px 40px;
  }

  .cart-page9 .sidebar-details-column p {
    padding: 20px 10px;
    font-weight: 900;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    background-color: transparent;
  }

  .cart-page9 .total-col {
    border-top: 2px solid;
    border-bottom: 2px solid;
  }

  .cart-page9 .btn.btn-continue {
    max-width: 100%;
    width: auto;
    border-radius: 10px;
    padding: 14px 12px;
    color: var(--primary);
    border: 2px solid var(--primary);
    margin: 20px 5px;
  }

  .cart-page9 .btn.btn-update {
    border-radius: 10px;
    max-width: 100%;
    width: auto;
    padding: 14px 12px;
    margin: 20px 5px;
  }

  .cart-page9 .sidebar-title-column h2 {
    border: none;
  }

  /* ===================================== */
  /*         13.10 Cart Page 10            */
  /* ===================================== */

  .cart-page10 .top-paragraph {
    position: relative;
    width: 100%;
  }

  .cart-page10 .top-paragraph:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: var(--primary);
    opacity: 0.2;
  }

  .cart-page10 .fa-truck {
    font-size: 20px;
  }

  .cart-page10 #price-product-2 {
    font-weight: 600;
  }

  .cart-page10 #total-product-2 {
    font-weight: 600;
  }

  .cart-page10 .cart-right-col {
    padding: 20px 30px;
    border: 2px solid #ececec;
  }

  .cart-page10 .form-control {
    width: 66.666%;
  }

  .cart-page10 .btn.btn-checkout {
    width: 33.333%;
  }

  .cart-page10 .sidebar-title-column {
    border-bottom: 1px solid #f1f1f1;
  }

  .cart-page10 .sidebar-title-column h2 {
    border: none;
    margin-bottom: 10px;
  }

  .cart-page10 .sidebar-title-column .coupon {
    border: none;
    margin-bottom: 10px;
    font-size: 14px;
  }

  .cart-page10 .sidebar-details-column {
    padding: 0px;
  }

  .cart-page10 .sidebar-details-column .TextLeft {
    font-weight: 600;
  }

  .cart-page10 .sidebar-details-column .total-col span {
    font-size: 22px;
  }

  .cart-page10 .table-cart thead {
    border: none;
  }

  .cart-page10 .table-cart tr {
    border: none;
    margin: 10px 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    position: relative;
    border-bottom: 2px solid #ececec;
  }

  .cart-page10 .close_button {
    position: absolute;
    top: 0px;
    right: 0px;
    background-color: #5d5d5d;
    color: #fff;
    font-size: 12px;
    border: none;
    padding: 3px;
  }

  .cart-page10 .table-cart td {
    border: none;
  }

  .cart-page10 .cart-pdt-image {
    max-width: 120px;
  }

  .cart-page10 .btn.btn-update {
    max-width: 100%;
    border-radius: 0px;
    border: none !important;
    border: 2px solid var(--primary) !important;
  }

  .cart-page10 .btn.btn-continue {
    max-width: 100%;
    width: 100%;
    border-radius: 10px;
    color: var(--primary);
    border: none;
    border: 2px solid var(--primary);
  }

  @media (max-width: 991px) {
    .cart-page10 .cart-right-col {
      margin-top: 20px;
      margin-left: 0px;
    }
  }

  /* =================================================== */
  /* =================================================== */
  /* ******        14 Header Nav Carts            ****** */
  /* =================================================== */
  /* =================================================== */


  /* ===================================== */
  /*         14.2 Cart Page 2            */
  /* ===================================== */

  .navCart_2 .cart_bag {
    width: 350px;
  }

  .navCart_2 .minicart_inner p {
    font-size: 14px;
    font-weight: 500;
    margin-left: 10px;
  }

  .navCart_2 .subtotal_column p {
    color: var(--primary);
    font-weight: 400;
    font-size: 24px;
  }

  .navCart_2 #cartPrice {
    color: var(--primary);
    font-size: 18px;
    font-weight: 300;
  }


  /* ===================================== */
  /*         14.3 Cart Page 3            */
  /* ===================================== */

  .navCart_3 .cart_bag {
    width: 400px;
    border: none !important;
    border-radius: 0px;
  }

  .navCart_3 .navcart-title {
    padding: 0px 20px;
  }

  .navCart_3 .navcart-title h4 {
    text-align: center;
    margin-top: 20px;
    font-size: 18px;
    text-transform: uppercase;
    font-weight: 600;
    border-bottom: 1px solid #C9C9C9;
    padding: 10px;
  }

  .navCart_3 .mini-pdt-image {
    width: 60px;
    border: 2px solid #e9e9e9;
    margin: 10px 0px;
    padding: 5px;
  }

  .navCart_3 .minicart_inner p {
    font-size: 16px;
    font-weight: 600;
    margin-left: 10px;
  }

  .navCart_3 .subtotal_column {
    background-color: #EAEFF5;
    padding: 20px 20px;
    margin-top: 50px;
  }

  .navCart_3 .subtotal_column p {
    font-weight: 600;
    font-size: 18px;
  }

  .navCart_3 #cartPrice {
    color: #919191;
    font-weight: 500;
    font-size: 18px;
  }

  .navCart_3 .minicart_inner {
    padding: 20px 20px 0px 20px;
  }

  .navCart_3 .btn.btn-continue {
    margin: 0px;
    border: none !important;
    border-radius: 0px;
    padding: 20px 5px;
  }

  .navCart_3 .btn.btn-update {
    margin: 0px;
    border: none !important;
    border-radius: 0px;
    padding: 20px 5px;
  }

  /* ===================================== */
  /*         14.4 Cart Page 4            */
  /* ===================================== */

  .navCart_4 .cart_bag {
    width: 450px;
    border: none !important;
    border-radius: 0px;
  }

  .navCart_4 .navcart-title {
    padding: 0px 20px;
  }

  .navCart_4 .navcart-title h4 {
    margin-top: 20px;
    font-size: 24px;
    text-transform: capitalize;
    font-weight: 600;
    border-bottom: 1px solid #C9C9C9;
    padding: 10px;
  }

  .navCart_4 .mini-pdt-image {
    width: 120px;
    margin: 5px 0px;
  }

  .navCart_4 .minicart_inner p {
    font-size: 16px;
    font-weight: 600;
    margin-left: 10px;
  }

  .navCart_4 .subtotal_column {
    padding: 10px 20px;
    margin-top: 10px;
    border-top: 2px solid #EBEBEB;
    border-bottom: 2px solid #EBEBEB;
  }

  .navCart_4 .subtotal_column p {
    font-weight: 600;
    font-size: 18px;
  }

  .navCart_4 #cartPrice {
    color: #919191;
    font-weight: 500;
    font-size: 18px;
  }

  .navCart_4 .minicart_inner {
    padding: 20px 20px 0px 20px;
  }

  .navCart_4 .btn.btn-continue {
    margin: 0px;
    border: none !important;
    border-radius: 6px;
    padding: 14px 5px;
  }

  .navCart_4 .btn.btn-update {
    margin: 0px;
    border: none !important;
    border-radius: 6px;
    padding: 14px 5px;
  }


  /* ===================================== */
  /*         14.5 Cart Page 5            */
  /* ===================================== */

  .navCart_5 .cart_bag {
    width: 400px;
    border: none !important;
    border-radius: 0px;
  }

  .navCart_5 .navcart-title {
    padding: 0px 20px;
  }

  .navCart_5 .navcart-title h4 {
    margin-top: 20px;
    font-size: 18px;
    text-transform: uppercase;
    font-weight: 600;
    border-bottom: 1px solid #C9C9C9;
    padding: 10px;
    text-align: right;
  }

  .navCart_5 #minicartRow tr {
    position: relative;
    margin: 10px 0px;
    display: block;
    width: 100%;
  }

  .navCart_5 #row-product-1>td:nth-child(1) {
    position: relative;
    right: 0px;
  }

  .navCart_5 .mini-pdt-image {
    width: 80px;
    margin: 5px 0px;
  }

  .navCart_5 .minicart_inner p {
    font-size: 16px;
    font-weight: 600;
    margin-left: 10px;
  }

  .navCart_5 .close_button {
    border: unset;
    position: absolute;
    top: -10px;
    left: 5px;
    background-color: #fff;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }

  .navCart_5 .subtotal_column {
    padding: 10px 20px;
    margin-top: 10px;
    border-top: unset;
    border-bottom: unset;
  }

  .navCart_5 .subtotal_column p {
    font-weight: 600;
    font-size: 18px;
  }

  .navCart_5 #cartPrice {
    color: #919191;
    font-weight: 500;
    font-size: 18px;
  }

  .navCart_5 .minicart_inner {
    padding: 30px;
  }

  .navCart_5 .btn.btn-continue {
    margin: 0px;
    border: none !important;
    border-radius: 6px;
    padding: 14px 5px;
  }

  .navCart_5 .btn.btn-update {
    margin: 0px;
    border: none !important;
    border-radius: 3px;
    padding: 14px 5px;
  }


  /* ===================================== */
  /*         14.6 Cart Page 6            */
  /* ===================================== */

  .navCart_6 .cart_bag {
    width: 400px;
    border: none !important;
    border-radius: 0px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
  }

  .navCart_6 .navcart-title {
    padding: 0px 20px;
    margin-top: 30px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .navCart_6 .navcart-title i {
    font-size: 18px;
  }

  .navCart_6 .navcart-title h4 {
    font-size: 18px;
    margin-top: 10px;
    text-transform: uppercase;
    font-weight: 600;
    position: relative;
  }

  .navCart_6 .navcart-title h4:before {
    content: "";
    position: absolute;
    bottom: -5px;
    right: 0;
    width: 100%;
    height: 3px;
    background-color: #000;
  }

  .navCart_6 #minicartRow tr {
    position: relative;
    border: unset;
  }

  .navCart_6 #row-product-1>td:nth-child(1) {
    position: relative;
    right: 0px;
  }

  .navCart_6 .mini-pdt-image {
    width: 80px;
    margin: 10px 0px;
    border: unset;
  }

  .navCart_6 .minicart_inner p {
    font-size: 16px;
    font-weight: 600;
    margin-left: 10px;
  }

  .navCart_6 .close_button {
    border: unset;
    background-color: #fff;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }

  .navCart_6 .subtotal_column {
    margin-top: 10px;
    border-top: unset;
    border-bottom: unset;
  }

  .navCart_6 .subtotal_column p {
    font-weight: 400;
    font-size: 18px;
    text-transform: uppercase;
  }

  .navCart_6 #cartPrice {
    color: #919191;
    font-weight: 500;
    font-size: 18px;
  }

  .navCart_6 .minicart_inner {
    padding: 30px;
  }

  .navCart_6 .btn.btn-continue {
    margin: 0px;
    border: none !important;
    border-radius: 50px;
    padding: 10px 5px;
  }

  .navCart_6 .btn.btn-update {
    margin: 0px;
    border: none !important;
    border-radius: 50px;
    padding: 10px 5px;
  }

  .navCart_6 .shipping-truck {
    background-color: #DDDDDD;
    padding: 20px 5px;
    display: flex;
    justify-content: center;
  }

  .navCart_6 .shipping-truck i {
    font-size: 20px;
    color: #8B8B8B;
  }


  /* ===================================== */
  /*         14.7 Cart Page 7            */
  /* ===================================== */

  .navCart_7 .cart_bag {
    width: 500px;
    border: none !important;
    border-radius: 30px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
  }

  .navCart_7 .navcart-title {
    padding: 0px 20px;
    margin-top: 30px;
    display: flex;
    flex-direction: column;
    align-items: start;
  }

  .navCart_7 .navcart-title i {
    font-size: 18px;
  }

  .navCart_7 .navcart-title h4 {
    font-size: 22px;
    margin-top: 10px;
    text-transform: capitalize;
    font-weight: 600;
    position: relative;
  }

  .navCart_7 .navcart-title p {
    font-size: 14px;
  }

  .navCart_7 .table-responsive {
    padding: 0px 10px;
  }

  .navCart_7 #minicartRow tr {
    position: relative;
    border: unset;
    box-shadow: 0px 0px 15px #C9C9C9;
    width: 100%;
    margin: 20px 0px;
    z-index: 9999;
    position: relative;
    border-radius: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 40px 20px;
  }

  .navCart_7 #row-product-1>td:nth-child(1) {
    position: relative;
    right: 0px;
  }

  .navCart_7 .mini-pdt-image {
    width: 80px;
    margin: 10px 0px;
    border: unset;
  }

  .navCart_7 .minicart_inner p {
    font-size: 16px;
    font-weight: 600;
    margin-left: 10px;
  }

  .navCart_7 .close_button {
    border: unset;
    background-color: #fff;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }

  .navCart_7 .subtotal_column {
    margin-top: 10px;
    border-top: unset;
    border-bottom: unset;
  }

  .navCart_7 .subtotal_column p {
    font-weight: 600;
    font-size: 20px;
    text-transform: uppercase;
  }

  .navCart_7 #cartPrice {
    color: #919191;
    font-weight: 500;
    font-size: 18px;
  }

  .navCart_7 .minicart_inner {
    padding: 30px 20px;
  }

  .navCart_7 .lower-section {
    padding: 30px 20px;
    background-color: #F7F8FC;
  }

  .navCart_7 .btn.btn-continue {
    margin: 0px;
    border: none !important;
    border-radius: 50px;
    padding: 10px 5px;
    background-color: #ECEBF1;
  }

  .navCart_7 .btn.btn-update {
    margin: 0px;
    border: none !important;
    border-radius: 50px;
    padding: 10px 5px;
  }


  /* ===================================== */
  /*         14.8 Cart Page 8            */
  /* ===================================== */

  .navCart_8 .cart_bag {
    width: 400px;
    border: none !important;
    border-radius: 0px;
  }

  .navCart_8 .navcart-title {
    position: relative;
    margin: 0px 20px;
  }

  .navCart_8 .navcart-title:before {
    content: "";
    position: absolute;
    width: 30%;
    height: 4px;
    background-color: var(--primary);
    bottom: -10px;
    left: 0;
    z-index: 9;
  }

  .navCart_8 .navcart-title:after {
    content: "";
    position: absolute;
    width: 100%;
    height: 3px;
    background-color: #cfcfcf;
    bottom: -10px;
    left: 0;
  }

  .navCart_8 .navcart-title h4 {
    margin-top: 20px;
    font-size: 24px;
    text-transform: capitalize;
    font-weight: 500;
  }

  .navCart_8 #minicartRow tr {
    display: flex !important;
    width: 100%;
    justify-content: space-between;
    align-items: center;
  }

  .navCart_8 .mini-pdt-image {
    width: 80px;
    margin: 10px 0px;
  }

  .navCart_8 .minicart_inner p {
    font-size: 16px;
    font-weight: 600;
    margin-left: 10px;
  }

  .navCart_8 .close_button {
    border-radius: 0px;
  }

  .navCart_8 .subtotal_column {
    padding: 0px 5px;
    margin-top: 10px;
    border-top: unset;
    border-bottom: unset;
  }

  .navCart_8 .subtotal_column p {
    font-weight: 600;
    font-size: 18px;
  }

  .navCart_8 #cartPrice {
    color: #919191;
    font-weight: 500;
    font-size: 18px;
  }

  .navCart_8 .minicart_inner {
    padding: 20px 20px 0px 20px;
  }

  .navCart_8 .to-checkout p {
    font-size: 14px;
    font-weight: 400;
    margin: 5px 5px;
    color: #5e5e5e;
  }

  .navCart_8 .btn.btn-update {
    margin: 0px;
    border: none !important;
    border-radius: 0px;
    padding: 10px 5px;
    margin-right: 5px;
  }

  .navCart_8 .btn.btn-continue {
    margin: 0px;
    border-radius: 0px;
    padding: 10px 5px;
    border: 2px solid #151515;
    margin-left: 5px;
  }



  /* ===================================== */
  /*         14.9 Cart Page 9            */
  /* ===================================== */

  .navCart_9 .cart_bag {
    width: 400px;
    border: none !important;
    border-radius: 0px;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;
  }

  .navCart_9 #minicartRow tr {
    display: flex !important;
    width: 100%;
    justify-content: space-between;
    align-items: start;
  }

  .navCart_9 .mini-pdt-image {
    width: 80px;
    margin: 0px 0px;
  }

  .navCart_9 .minicart_inner p {
    font-size: 16px;
    font-weight: 600;
    margin-left: 10px;
    color: #414E4B;
  }

  .navCart_9 .close_button {
    border-radius: 0px;
    margin-top: 0px;
  }

  .navCart_9 .subtotal_column {
    padding: 0px 5px;
    margin-top: 10px;
    border-top: unset;
    border-bottom: unset;
  }

  .navCart_9 .subtotal_column p {
    font-weight: 600;
    font-size: 18px;
    color: #919191;
  }

  .navCart_9 .total_column {
    padding: 0px 5px;
    margin-top: 10px;
    border-top: unset;
    border-bottom: unset;
  }

  .navCart_9 #cartPrice {
    color: #919191;
    font-weight: 500;
    font-size: 18px;
  }

  .navCart_9 .minicart_inner {
    padding: 20px 20px 0px 20px;
  }

  .navCart_9 .btn.btn-update {
    margin: 0px;
    border: none !important;
    border-radius: 50px;
    padding: 10px 5px;
    margin-top: 50px;
    margin-right: 5px;
    font-weight: 500;
    letter-spacing: 1px;
  }

  .navCart_9 .btn.btn-continue {
    margin: 0px;
    border-radius: 0px;
    padding: 10px 5px;
    border: 2px solid #151515;
    margin-left: 5px;
  }



  /* ===================================== */
  /*         14.10 Cart Page 10            */
  /* ===================================== */

  .navCart_10 .cart_bag {
    width: 400px;
    border: none !important;
    border-radius: 0px;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;
  }

  .navCart_10 #minicartRow tr {
    display: flex !important;
    width: 100%;
    justify-content: space-between;
    align-items: start;
  }

  .navCart_10 .mini-pdt-image {
    width: 100px;
    margin: 0px 0px;
    border-radius: 15px;
  }

  .navCart_10 .minicart_inner p {
    font-size: 16px;
    font-weight: 600;
    margin-top: 10px;
    margin-left: 10px;
    color: #414E4B;
  }

  .navCart_10 .close_button {
    border-radius: 0px;
    margin-top: 10px;
    border: unset;
    font-size: 20px;
    font-weight: 900;
  }

  .navCart_10 .subtotal_column {
    padding: 0px 5px;
    margin-top: 10px;
    border-top: unset;
    border-bottom: unset;
  }

  .navCart_10 .subtotal_column p {
    font-weight: 600;
    font-size: 18px;
  }

  .navCart_10 #cartPrice {
    color: var(--primary);
    font-weight: 500;
    font-size: 18px;
  }

  .navCart_10 .minicart_inner {
    padding: 20px 20px 0px 20px;
  }

  .navCart_10 .minicart_buttons {
    background-color: #262D37;
    padding: 40px 20px 40px 20px !important;
  }

  .navCart_10 .btn.btn-continue {
    margin: 0px;
    border: 2px solid #fff !important;
    border-radius: 50px;
    padding: 10px 5px;
    margin-right: 5px;
    font-weight: 500;
    letter-spacing: 1px;
    color: #fff !important;
    background-color: transparent;
  }

  .navCart_10 .btn.btn-update {
    margin: 0px;
    border: 2px solid #fff !important;
    border-radius: 50px;
    padding: 10px 5px;
    margin-left: 5px;
    font-weight: 500;
    letter-spacing: 1px;
    color: #fff;
    background-color: transparent !important;
  }
</style>