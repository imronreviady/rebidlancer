<?php
$system_name    = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_title   = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
$text_align     = $this->db->get_where('settings', array('type' => 'text_align'))->row()->description;
$account_type   = $this->session->userdata('login_type');
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title><?php echo $system_title; ?></title>

    <meta name="author" content="rebidlancer.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets-public/stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets-public/stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets-public/stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets-public/stylesheets/colors/color1.css" id="colors">
    
     <!-- FullPage -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets-public/stylesheets/jquery.fullpage.css">
    
    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets-public/stylesheets/animate.css">
    
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets-public/stylesheets/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets-public/stylesheets/slick.css">

    <!-- Favicon and touch icons  -->
    <link href="<?= base_url(); ?>assets-public/icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="<?= base_url(); ?>assets-public/icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="<?= base_url(); ?>assets-public/icon/favicon.png" rel="shortcut icon">
    
</head>                                 
<body class="header_sticky page-loading"> 
    <!-- Preloader -->
    <section class="loading-overlay">
        <div class="preload-inner">
            <div class="wBall" id="wBall_1">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_2">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_3">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_4">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_5">
                <div class="wInnerBall"></div>
            </div>
        </div>
    </section>     

    <!-- Boxed -->
    <div class="boxed">
        <!-- Header --> 
        <div class="site-header">
            <header id="header" class="header header-style2 header-absolute header-btn header-reponsive header-design clearfix">
            <div class="container-fluid">    
                <div class="header-wrap clearfix">
                    <div class="logo-wrap">
                        <div id="logo" class="logo">
                            <a href="index.html" rel="home" title="Podes">
                                <img src="<?= base_url(); ?>assets-public/images/logo.png" alt="image">
                            </a>
                        </div><!-- /.logo -->
                    </div>
                    <div class="btn-menu">
                        <i class="ti-align-right"></i>
                    </div><!-- //mobile menu button --> 
                    <div class="wrap-menu-extra">
                        <div class="menu-extra text-right">
                            <ul>
                                <li id="s" class="search-box show-search">
                                    <a href="#search" class="flat-search active"><i class="ti-search"></i></a>
                                </li>
                                <li class="shopping-cart">
                                    <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                        <span class="shopping-cart-items-count">2</span>
                                    </a>
                                    <div class="subcart">
                                        <div class="widget_shopping_cart_content">
                                            <ul class="cart_list product_list_widget margin-bottom-20">      
                                                <li class="mini_cart_item margin-bottom-20">
                                                    <div class="product-img">
                                                        <a href="#"><img src="<?= base_url(); ?>assets-public/images/products/p1.jpg" alt="image"></a>
                                                    </div>
                                                    <div class="cart-details margin-top-5">
                                                        <p><span class="quantity"><span class="amount">$460.00</span> x 1</span></p>
                                                        <a class="name-product" href="#">Kabino Bedside Table</a>
                                                        <a href="#" class="remove"></a>
                                                    </div>
                                                </li> 
                                                <li class="mini_cart_item margin-bottom-20">
                                                    <div class="product-img">
                                                        <a href="#"><img src="<?= base_url(); ?>assets-public/images/products/p2.jpg" alt="image"></a>
                                                    </div>
                                                    <div class="cart-details margin-top-5">
                                                        <p><span class="quantity"><span class="amount">$460.00</span> x 1</span></p>
                                                        <a class="name-product" href="#">Kabino Bedside Table</a>
                                                        <a href="#" class="remove"></a>
                                                    </div>
                                                </li>
                                                <li class="mini_cart_item margin-bottom-20">
                                                    <div class="product-img">
                                                        <a href="#"><img src="<?= base_url(); ?>assets-public/images/products/p3.jpg" alt="image"></a>
                                                    </div>
                                                    <div class="cart-details margin-top-5">
                                                        <p><span class="quantity"><span class="amount">$460.00</span> x 1</span></p>
                                                        <a class="name-product" href="#">Kabino Bedside Table</a>
                                                        <a href="#" class="remove"></a>
                                                    </div>
                                                </li>    
                                            </ul>
                                            <p class="total clearfix">
                                                <span>TOTAL:</span><span class="amount">$460.00</span>
                                            </p>
                                            <div class="btn-cart">
                                                <button class="flat-button bg-white">View card</button>
                                            </div>
                                            <div class="btn-cart">
                                                <button class="flat-button bg-white">Checkout</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="top-search" class="top-search">
                            <form action="#" method="get" class="form-search">
                                <input type="text" name="q" id="ss" class="form-control" value="" placeholder="Enter Your Search...">
                            </form>
                        </div>                        
                    </div> 
                    <div class="nav-flat-wrap">
                        <div class="nav-wrap">                            
                            <nav id="mainnav" class="mainnav" role="navigation">
                                <ul class="menu"> 
                                        <li class=" has-mega-menu home">
                                            <a class="has-mega" href="home-consulting.html">Demos</a> 
                                            <div class="submenu mega-menu">
                                                <div class="flat-mega-memu">
                                                    <ul class="mega-menu-sub list-style"> 
                                                        <li><a href="home-digital-agency.html">Digital Agency</a></li>
                                                        <li><a href="home-creative-studio.html">Creative Studio</a></li>
                                                        <li><a href="home-consulting.html">Business Consulting</a></li>
                                                        <li><a href="home-business-finance.html">Business Finance</a></li>
                                                        <li><a href="home-business_simple.html">Business Simple</a></li>
                                                        <li><a href="home-creative-agency.html">Creatie Agency</a></li>
                                                        <li><a href="home-bright-agency.html">Bright Agency</a></li>
                                                        <li><a href="home-basic-agency.html">Basic Agency</a></li>
                                                    </ul>
                                                    <ul class="mega-menu-sub list-style"> 
                                                        <li><a href="home-minimal-agency.html">Minimal Agency</a></li>
                                                        <li><a href="home-creative-designer.html">Creative Designer</a></li>
                                                        <li class="active"><a href="home-white-designer.html">White Designer</a></li>
                                                        <li><a href="home-creative-freelancer.html">Creative Freelancer</a></li>
                                                        <li><a href="home-interior-design.html">Interior Design</a></li>
                                                        <li><a href="home-construction.html">Construction</a></li>
                                                        <li><a href="home-law-firm.html">Law Firm</a></li>
                                                        <li><a href="home-architecture.html">Architecture</a></li>
                                                    </ul>
                                                    <ul class="mega-menu-sub list-style"> 
                                                        <li><a href="home-photography.html">Photography</a></li>
                                                        <li><a href="home-photography-minimal.html">Photography Minimal</a></li>
                                                        <li><a href="home-photography-sidebar.html">Photography Sidebar</a></li>
                                                        <li><a href="home-portfolio-lightbox.html">Portfolio Lightbox Popup</a></li>
                                                        <li><a href="home-portfolio-fullwidth.html">Portfolio FullWidth</a></li>
                                                        <li><a href="home-portfolio-creative.html">Portfolio Creative</a></li>
                                                        <li><a href="home-portfolio-sidebar.html">Portfolio Sidebar</a></li>
                                                        <li><a href="home-video-agency.html">Video Agency</a></li>
                                                    </ul>
                                                    <ul class="mega-menu-sub list-style"> 
                                                        <li><a href="home-video-creative.html">Video Creative</a></li>
                                                        <li><a href="home-shop-furniture.html">Shop Furniture</a></li>
                                                        <li><a href="home-shop-classic.html">Shop Furniture Classic</a></li>
                                                        <li><a href="home-shop-fashion.html">Shop Fashion</a></li>
                                                        <li><a href="home-magazine-blog.html">Magazine Blog</a></li>
                                                        <li><a href="home-blog-masonry.html">Blog Masonry</a></li>
                                                        <li><a href="home-blog-timeline.html">Blog Timeline</a></li>
                                                        <li><a href="page-comming-soon.html">Comming Soon</a></li>
                                                    </ul>
                                                </div><!-- /.wrap-mega-memu -->
                                            </div>
                                        </li>
                                        <li><a href="page-about-me.html">About</a>
                                            <ul class="submenu list-style">
                                                <li class="list-sub"><a href="page-about-me.html">About Me</a>
                                                    <ul class="submenu list-style">
                                                        <li><a href="page-company-history.html">Company History</a></li>
                                                        <li><a href="page-caeers.html">Caeers</a></li>
                                                        <li><a href="page-parners.html">Parners</a></li>
                                                        <li><a href="page-our-teams.html">Our Teams</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="page-about-us.html">About Us</a></li>
                                                <li><a href="page-about-modern.html">About Modern</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="page-services-icon.html">Pages</a>
                                            <ul class="submenu list-style"> 
                                                <li class="list-sub"><a href="page-services-icon.html">Services Icon</a>
                                                    <ul class="submenu list-style">
                                                        <li><a href="page-services-single.html">Services Single</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="page-services-img.html">Services IMG</a></li>
                                                <li><a href="page-contact-classic.html">Contact Classic</a></li>
                                                <li><a href="page-contact-minimal.html">Contact Minimal</a></li>
                                                <li><a href="page-contact-creative.html">Contact Creative</a></li>
                                                <li class="list-sub"><a href="#">Miscellaneous</a>
                                                    <ul class="submenu list-style"> 
                                                        <li><a href="page-faq.html">FAQ</a></li>
                                                        <li><a href="page-404.html">Errors 404</a></li>
                                                        <li><a href="page-comming-soon.html">Comming Soon</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-mega-menu">
                                            <a class="has-mega" href="element-button.html">Elements</a>
                                            <div class="submenu mega-menu left-style2">
                                                <div class="flat-mega-memu">
                                                    <ul class="mega-menu-sub list-style"> 
                                                        <li><a href="#">Header</a></li>
                                                        <li><a href="element-header-sidebar.html">Header_Sidebar</a></li>
                                                        <li><a href="element-footer.html">Footer</a></li>
                                                        <li><a href="element-typographys.html">Typographys</a></li>
                                                        <li><a href="element-columns.html">Columns</a></li>
                                                    </ul>
                                                    <ul class="mega-menu-sub list-style"> 
                                                        <li><a href="element-contact-form.html">Contact Form</a></li>
                                                        <li><a href="element-google-map.html">Google Map</a></li>
                                                        <li><a href="element-list-styles.html">List Styles</a></li>
                                                        <li><a href="element-countdowns.html">Count Downs</a></li>
                                                        <li><a href="element-counters.html">Counters</a></li>
                                                    </ul>
                                                    <ul class="mega-menu-sub list-style"> 
                                                        <li><a href="element-dividers.html">Dividers</a></li>
                                                        <li><a href="element-call-actions.html">Call To Actions</a></li>
                                                        <li><a href="element-processbar.html">Process Bar</a></li>
                                                        <li><a href="element-spricings.html">Spricings</a></li>
                                                        <li><a href="element-teams.html">Teams</a></li>
                                                    </ul>
                                                    <ul class="mega-menu-sub list-style">
                                                        <li><a href="element-iconboxes.html">Icon Boxes</a></li>
                                                        <li><a href="element-Testimonials.html">Testimonials</a></li>
                                                        <li><a href="element-button.html">Button</a></li>
                                                        <li><a href="element-accordions.html">Tabs Accordions</a></li>
                                                    </ul>
                                                </div><!-- /.flat-mega-memu -->
                                            </div><!-- /.mega-menu -->
                                        </li>
                                        <li><a href="portfolio-fullwidth.html">Portfolio</a>
                                            <ul class="submenu list-style"> 
                                                <li class="list-sub list-sub-right"><a href="portfolio-fullwidth.html">Portfolio FullWidth</a>
                                                    <ul class="submenu list-style right-sub-menu">
                                                        <li><a href="portfolio-classic.html">Portfolio Single Classic</a></li>
                                                        <li><a href="portfolio-scroll.html">Portfolio Single Scroll</a></li>
                                                        <li><a href="portfolio-single-creative.html">Portfolio Single Creative</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="portfolio-fourcolumns.html">Portfolio Four Columns</a></li>
                                                <li><a href="portfolio-threecolumns.html">Portfolio Three Columns</a></li>
                                                <li><a href="portfolio-twocolumns.html">Portfolio Two Columns</a></li>
                                                <li><a href="portfolio-creative.html">Portfolio Creative</a></li>
                                                <li><a href="portfolio-sidebar.html">Portfolio Sidebar</a></li>
                                                <li><a href="portfolio-carousel.html">Portfolio Carousel</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-fullwidth.html">Blog</a>
                                            <ul class="submenu list-style">
                                                <li class="list-sub list-sub-right"><a href="blog-fullwidth.html">Blog Full Width</a>
                                                    <ul class="submenu list-style right-sub-menu">
                                                        <li><a href="blog-single.html">Blog Single</a></li>
                                                        <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-sidebar.html">Blog Grid Sidebar</a></li>
                                                <li><a href="blog-twocolumns.html">Blog Grid Two Columns</a></li>
                                                <li><a href="blog-threecolumns.html">Blog Grid Three Columns</a></li>
                                                <li><a href="blog-fourcolumns.html">Blog Grid Four Columns</a></li>
                                                <li><a href="blog-timeline.html">Blog Timeline</a></li>
                                                <li><a href="blog-metro.html">Blog Metro</a></li>
                                                <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                                <li><a href="blog-textBox.html">Blog TextBox</a></li>
                                                <li><a href="blog-columnist.html">Blog Columnist</a></li>
                                            </ul>
                                        </li> 
                                        <li><a href="shop-fullwidth.html">Shop</a>
                                            <ul class="submenu list-style right-sub-menu3">
                                                <li class="list-sub list-sub-right"><a href="shop-fullwidth.html">Shop FullWidth</a>
                                                    <ul class="submenu list-style right-sub-menu">
                                                        <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                        <li><a href="shop-pagination.html">Shop Pagination</a></li>
                                                        <li><a href="#">Shop Single PopUp</a></li>
                                                        <li><a href="#">Shop Sidebar Single</a></li>
                                                        <li><a href="#">Shop Single Fullwidth</a></li>
                                                        
                                                    </ul>
                                                </li>
                                                <li><a href="shop-twocolumns.html">Shop Two Columns</a></li>
                                                <li><a href="shop-threecolumns.html">Shop Three Columns</a></li>
                                                <li><a href="shop-fourcolumns.html">Shop Four Columns</a></li>
                                                <li><a href="shop-mywishlist.html">MyWishlist</a></li>
                                                <li><a href="#">Shopping Cart</a></li>
                                                <li><a href="#">Check Out</a></li>
                                                <li><a href="#">Completed</a></li>
                                            </ul>
                                        </li>                       
                                    </ul><!-- /.menu -->
                            </nav><!-- /.mainnav --> 
                        </div><!-- /.nav-wrap -->
                        
                    </div>             
                </div><!-- /.header-inner -->     
            </div>
        </header><!-- /.header -->
        </div>  
        <section id="fullpage" class="main-slider" >
            <div id="section1" class="section active section-slider1 bg-gray3">
                <div class="container-fluid">
                    <div class="info-wrap text-center">
                        <div class="title-section">
                            <h1 class="title">Hello, I'm Tuan, a<br>self-taught UI/UX designer<br>living in San Francisco. </h1>
                        </div>
                        <div class="flat-socials">
                            <a href="#" class="dribbble"><i class="ti-dribbble"></i><i class="ti-dribbble"></i></a>
                            <a href="#" class="twitter"><i class="ti-twitter"></i><i class="ti-twitter"></i></a>
                            <a href="#" class="skype"><i class="ti-skype"></i><i class="ti-skype"></i></a>
                            <a href="#" class="instagram"><i class="ti-instagram"></i><i class="ti-instagram"></i></a>
                        </div>
                        <div class="divider h79"></div>
                        <div class="btn-my-profile margin-left_19">
                            <button class="flat-button border-2px bg-white">MY PROFILE</button>
                        </div>
                    </div>
                </div>
                <span class="step style2">01</span>
            </div>
            <div id="section2" class="section section-slider2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-timeline center slick-slider color-black">
                               
                                <div class="flat-timeline text-center">
                                    <h3><span>2012</span> -Education</h3>
                                    <p>Modern Art University 2015</p>
                                </div>
                                <div class="flat-timeline text-center">
                                    <h3><span>2015</span> -Experience</h3>
                                    <p>Envato Inc - 2016 - Current</p>
                                </div>
                                <div class="flat-timeline text-center">
                                    <h3><span>2017</span> -Adward</h3>
                                    <p>18th Inforgraphic Summit</p>
                                </div>
                                <div class="flat-timeline text-center">
                                    <h3><span>2010 </span>-Adward</h3>
                                    <p>18th Inforgraphic Summit</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider h50"></div>
                <div class="container">
                    <div class="progess">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="flat-progress ">
                                    <div class="name">PHOTHOSHOP</div>
                                    <div class="perc">90%</div>
                                    <div class="progress-bar" data-percent="86" data-waypoint-active="yes">
                                        <div class="progress-animate" data-duration="1000"></div>
                                    </div>
                                </div>
                                <div class="flat-progress">
                                    <div class="name">ADOBE ILLUSTRATOR</div>
                                    <div class="perc">95%</div>
                                    <div class="progress-bar" data-percent="92.5" data-waypoint-active="yes">
                                        <div class="progress-animate" data-duration="1000"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="flat-progress">
                                    <div class="name">HTML & CSS</div>
                                    <div class="perc">85%</div>
                                    <div class="progress-bar" data-percent="80" data-waypoint-active="yes">
                                        <div class="progress-animate" data-duration="1000"></div>
                                    </div>
                                </div>
                                <div class="flat-progress">
                                    <div class="name">PHOTOGRAPHY</div>
                                    <div class="perc">85%</div>
                                    <div class="progress-bar" data-percent="80" data-waypoint-active="yes">
                                        <div class="progress-animate" data-duration="1000"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <span class="step style2">02</span>
            </div>
            <div id="section3" class="section section-slider3 bg-gray3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="btn-filter-wrap style2">
                                <li class="active"><a class="btn-filter" data-filter="*">All</a></li>
                                <li><a class="btn-filter" data-filter=".branding">Branding</a></li>
                                <li><a class="btn-filter" data-filter=".web">Web</a></li>
                                <li><a class="btn-filter" data-filter=".photo">Photography</a></li>
                                <li><a class="btn-filter" data-filter=".game">Game Design</a></li>
                            </ul> 
                            <div class="wrap-blog-filter grid-metro blog_column_metro">
                                <ul class=" flat-blog-filter owl-carousel" data-nav="false" data-auto="true">
                                    <li class="item-filter web photo">
                                       <article class="post clearfix">
                                            <div class="featured-post">
                                                <a href="blog-single-sidebar.html"><img src="<?= base_url(); ?>assets-public/images/blog/filter1.jpg" alt="image"></a>
                                            </div><!-- /.feature-post -->
                                            <div class="content-post">
                                                <h2 class="title-post"><a href="blog-single-sidebar.html" title="">Bols Food</a></h2>
                                                <ul class="meta-post style2 clearfix">
                                                    <li class="life">
                                                        <a href="#">Photography</a>
                                                    </li>
                                                </ul><!-- /.meta-post -->
                                            </div><!-- /.content-post -->
                                        </article>
                                        <div class="divider"></div>
                                        <article class="post clearfix">
                                            <div class="featured-post">
                                                <a href="blog-single-sidebar.html"><img src="<?= base_url(); ?>assets-public/images/blog/filter2.jpg" alt="image"></a>
                                            </div><!-- /.feature-post -->
                                            <div class="content-post">
                                                <h2 class="title-post"><a href="blog-single-sidebar.html" title="">Bols Food</a></h2>
                                                <ul class="meta-post style2 clearfix">
                                                    <li class="life">
                                                        <a href="#">Photography</a>
                                                    </li>
                                                </ul><!-- /.meta-post -->
                                            </div><!-- /.content-post -->
                                        </article>
                                    </li>
                                    <li class="item-filter branding game">
                                        <article class="post clearfix">
                                            <div class="featured-post">
                                                <a href="blog-single-sidebar.html"><img src="<?= base_url(); ?>assets-public/images/blog/filter3.jpg" alt="image"></a>
                                            </div><!-- /.feature-post -->
                                            <div class="content-post">
                                                <h2 class="title-post"><a href="blog-single-sidebar.html" title="">Bols Food</a></h2>
                                                <ul class="meta-post style2 clearfix">
                                                    <li class="life">
                                                        <a href="#">Photography</a>
                                                    </li>
                                                </ul><!-- /.meta-post -->
                                            </div><!-- /.content-post -->
                                        </article>
                                        <div class="divider"></div>
                                        <article class="post clearfix">
                                            <div class="featured-post">
                                                <a href="blog-single-sidebar.html"><img src="<?= base_url(); ?>assets-public/images/blog/filter4.jpg" alt="image"></a>
                                            </div><!-- /.feature-post -->
                                            <div class="content-post">
                                                <h2 class="title-post"><a href="blog-single-sidebar.html" title="">Bols Food</a></h2>
                                                <ul class="meta-post style2 clearfix">
                                                    <li class="life">
                                                        <a href="#">Photography</a>
                                                    </li>
                                                </ul><!-- /.meta-post -->
                                            </div><!-- /.content-post -->
                                        </article>
                                    </li>
                                    <li class="item-filter branding game">
                                        <article class="post clearfix">
                                            <div class="featured-post">
                                                <a href="blog-single-sidebar.html"><img src="<?= base_url(); ?>assets-public/images/blog/filter5.jpg" alt="image"></a>
                                            </div><!-- /.feature-post -->
                                            <div class="content-post">
                                                <h2 class="title-post"><a href="blog-single-sidebar.html" title="">Bols Food</a></h2>
                                                <ul class="meta-post style2 clearfix">
                                                    <li class="life">
                                                        <a href="#">Photography</a>
                                                    </li>
                                                </ul><!-- /.meta-post -->
                                            </div><!-- /.content-post -->
                                        </article>
                                        <div class="divider"></div>
                                        <article class="post clearfix">
                                            <div class="featured-post">
                                                <a href="blog-single-sidebar.html"><img src="<?= base_url(); ?>assets-public/images/blog/filter6.jpg" alt="image"></a>
                                            </div><!-- /.feature-post -->
                                            <div class="content-post">
                                                <h2 class="title-post"><a href="blog-single-sidebar.html" title="">Bols Food</a></h2>
                                                <ul class="meta-post style2 clearfix">
                                                    <li class="life">
                                                        <a href="#">Photography</a>
                                                    </li>
                                                </ul><!-- /.meta-post -->
                                            </div><!-- /.content-post -->
                                        </article>
                                    </li>
                                    <li class="item-filter web photo">
                                        <article class="post clearfix">
                                            <div class="featured-post">
                                                <a href="blog-single-sidebar.html"><img src="<?= base_url(); ?>assets-public/images/blog/filter7.jpg" alt="image"></a>
                                            </div><!-- /.feature-post -->
                                            <div class="content-post">
                                                <h2 class="title-post"><a href="blog-single-sidebar.html" title="">Bols Food</a></h2>
                                                <ul class="meta-post style2 clearfix">
                                                    <li class="life">
                                                        <a href="#">Photography</a>
                                                    </li>
                                                </ul><!-- /.meta-post -->
                                            </div><!-- /.content-post -->
                                        </article>
                                        <div class="divider"></div>
                                        <article class="post clearfix">
                                            <div class="featured-post">
                                                <a href="blog-single-sidebar.html"><img src="<?= base_url(); ?>assets-public/images/blog/filter8.jpg" alt="image"></a>
                                            </div><!-- /.feature-post -->
                                            <div class="content-post">
                                                <h2 class="title-post"><a href="blog-single-sidebar.html" title="">Bols Food</a></h2>
                                                <ul class="meta-post style2 clearfix">
                                                    <li class="life">
                                                        <a href="#">Photography</a>
                                                    </li>
                                                </ul><!-- /.meta-post -->
                                            </div><!-- /.content-post -->
                                        </article>
                                    </li>

                                    <li class="item-filter web photo game">

                                       <article class="post clearfix">
                                            <div class="featured-post">
                                                <a href="blog-single-sidebar.html"><img src="<?= base_url(); ?>assets-public/images/blog/filter1.jpg" alt="image"></a>
                                            </div><!-- /.feature-post -->
                                            <div class="content-post">
                                                <h2 class="title-post"><a href="blog-single-sidebar.html" title="">Bols Food</a></h2>
                                                <ul class="meta-post style2 clearfix">
                                                    <li class="life">
                                                        <a href="#">Photography</a>
                                                    </li>
                                                </ul><!-- /.meta-post -->
                                            </div><!-- /.content-post -->
                                        </article>
                                        <div class="divider"></div>
                                        <article class="post clearfix">
                                            <div class="featured-post">
                                                <a href="blog-single-sidebar.html"><img src="<?= base_url(); ?>assets-public/images/blog/filter2.jpg" alt="image"></a>
                                            </div><!-- /.feature-post -->
                                            <div class="content-post">
                                                <h2 class="title-post"><a href="blog-single-sidebar.html" title="">Bols Food</a></h2>
                                                <ul class="meta-post style2 clearfix">
                                                    <li class="life">
                                                        <a href="#">Photography</a>
                                                    </li>
                                                </ul><!-- /.meta-post -->
                                            </div><!-- /.content-post -->
                                        </article>
                                    </li>
                                    <li class="item-filter branding photo">
                                        <article class="post clearfix">
                                            <div class="featured-post">
                                                <a href="blog-single-sidebar.html"><img src="<?= base_url(); ?>assets-public/images/blog/filter3.jpg" alt="image"></a>
                                            </div><!-- /.feature-post -->
                                            <div class="content-post">
                                                <h2 class="title-post"><a href="blog-single-sidebar.html" title="">Bols Food</a></h2>
                                                <ul class="meta-post style2 clearfix">
                                                    <li class="life">
                                                        <a href="#">Photography</a>
                                                    </li>
                                                </ul><!-- /.meta-post -->
                                            </div><!-- /.content-post -->
                                        </article>
                                        <div class="divider"></div>
                                        <article class="post clearfix">
                                            <div class="featured-post">
                                                <a href="blog-single-sidebar.html"><img src="<?= base_url(); ?>assets-public/images/blog/filter4.jpg" alt="image"></a>
                                            </div><!-- /.feature-post -->
                                            <div class="content-post">
                                                <h2 class="title-post"><a href="blog-single-sidebar.html" title="">Bols Food</a></h2>
                                                <ul class="meta-post style2 clearfix">
                                                    <li class="life">
                                                        <a href="#">Photography</a>
                                                    </li>
                                                </ul><!-- /.meta-post -->
                                            </div><!-- /.content-post -->
                                        </article>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="step style2">03</span>
            </div>
            <div id="section4" class="section section-slider4">
                <div class="container">
                    <div class="info-wrap text-center">
                        <div class="title-section ">
                            <h1 class="title">Our Process</h1>
                            <div class="sub-title">
                                Your project is discussed, refinded, perfected, and purchased.
                            </div>
                        </div>
                        <div class="divider h111"></div>
                        <ul class="list-step clearfix">
                            <li><i class="ti-search"></i><p class="color-black">1-Research</p></li>
                            <li><p class="color-black">2-Idea & Draft</p><i class="ti-pencil-alt"></i></li>
                            <li><i class="ti-vector"></i><p class="color-black">3-Design</p></li>
                            <li><p class="color-black">4-Launch</p><i class="ti-rocket"></i></li>
                        </ul>
                    </div>
                </div>
                <span class="step style2">04</span>
            </div>
            <div id="section5" class="section section-slider5 bg-gray3">
                <div class="container">
                    <div class="info-wrap text-center">
                        <div class="title-section">
                            <h1 class="title">Contact Me</h1>
                            <div class="sub-title">
                                Please feel free to contact me if you have any further questions or just to say hello!
                            </div>
                        </div>
                        <div class="divider h90"></div>
                        <ul class="contact-info color-black">
                            <li class="email">info.contact@gmail.com</li>
                            <li class="phone">537-375-4420</li>
                        </ul>
                        <div class="divider h50"></div>
                        <div class="flat-socials">
                            <a href="#" class="dribbble"><i class="ti-dribbble"></i><i class="ti-dribbble"></i></a>
                            <a href="#" class="twitter"><i class="ti-twitter"></i><i class="ti-twitter"></i></a>
                            <a href="#" class="skype"><i class="ti-skype"></i><i class="ti-skype"></i></a>
                            <a href="#" class="instagram"><i class="ti-instagram"></i><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <span class="step style2">05</span>
            </div>
        </section>
        <div class="footer-slider">
            <div class="container-fluid">
                <div class="copyright text-right">
                    <p>Copyright @2016 <a href="https://themeforest.net/user/themesflat" title="Podes">Podes</a> Inc.</p>             
                </div>         
            </div>
        </div>
        <div id="menu-slider" class="after-black">
            <ul>
                <li data-menuanchor="firstPage" class="active"><a href="#firstPage">About Me</a></li>
                <li data-menuanchor="secondPage"><a href="#secondPage">Resume</a></li>
                <li data-menuanchor="3rdPage"><a href="#3rdPage">Portfolio</a></li>
                <li data-menuanchor="4rdPage"><a href="#4rdPage">Work Flow</a></li>
                <li data-menuanchor="5rdPage"><a href="#5rdPage">Contact Me</a></li>
            </ul>
        </div>
    </div>
    
    <!-- Javascript -->
    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/jquery.easing.js"></script>      
    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/jquery-validate.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/imagesloaded.min.js"></script>

    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/jquery.owl-filter.js"></script>

    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/jquery-countTo.js"></script>

    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/jquery.cookie.js"></script>

    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/jquery.magnific-popup.min.js"></script>

    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/jquery.fullPage.js"></script>

    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/slick.js"></script>   
     

    <script type="text/javascript" src="<?= base_url(); ?>assets-public/javascript/main.js"></script>

</body>
</html>