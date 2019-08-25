<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>PariwisataIndo</title>

    <!-- Favicon -->
    <link rel="icon" href="frontend/mag/img/logoind.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="frontend/mag/style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="index.html" class="nav-brand"><img src="frontend/mag/img/logoind.png" width="100px" height="100px" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('blogpariwisata') }}">Semua blog</a></li>
                                    <li><a href="{{ url('about') }}">About</a></li>
                                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="index.html" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <a href="{{ route('login') }}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <!-- Submit Video -->
                              </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area owl-carousel">
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(frontend/mag/img/bali.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">{{ date('l, d-m-Y')}}</a>
                            </div>
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Nikmati keindahan alam nusantara</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(frontend/mag/img/bg-img/2.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">{{ date('l, d-m-Y')}}</a>
                            </div>
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Kunjungi tempat wisata terbaik</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(frontend/mag/img/bg-img/3.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">{{ date('l, d-m-Y')}}</a>
                            </div>
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Isi liburan dengan berpariwisata di indonesia</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->

        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Most Popular</h5>
                </div>

                <!-- Single Blog Post -->
              @foreach ($artikel as $artikels)
                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{ asset('assets/img/artikel/'.$artikels->foto)}}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="{{ route('blogall.blog', $artikels->slug) }}" class="post-title">{{ $artikels->judul }}</a>

                    </div>
                </div>@endforeach

            </div>

                <img src="frontend/mag/img/indonesian.png" alt="">



            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            <div class="trending-now-posts mb-30">
                <!-- Section Title -->
                 <div class="section-heading">
                    <h5>Trending Places</h5>
                </div>

                <div class="trending-post-slides owl-carousel">
                @foreach ($artikel as $a)
                    <div class="single-trending-post">
                        <img src="{{ asset('assets/img/artikel/'.$a->foto)}}" alt="">
                        <div class="post-content">
                            <a href="{{ route('cat.blog', $a->kategori->slug) }}" class="post-cata">{{ $a->kategori->nama_kategori }}</a>
                            <a href="{{ route('blogall.blog', $a->slug) }}" class="post-title">{{ $a->judul }}</a>

                </div>
            </div>@endforeach


                </div>
            </div>
            <div class="feature-video-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Bali Is Most Touris</h5>
                </div>

                <div class="featured-video-posts">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <!-- Single Featured Post -->
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                    <img src="frontend/mag/img/bali.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=2b9txcAt4e0" class="video-play"><i class="fa fa-play"></i></a>
                                </div>
                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">{{ date('l, d-m-Y')}}</a>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=2b9txcAt4e0" class="post-title">Bali tempat paling banyak dikunjungi oleh touris</a>
                                    <p>DeskripsiBali adalah sebuah pulau di Indonesia yang dikenal karena memiliki pegunungan berapi yang hijau, terasering sawah yang unik, pantai, dan terumbu karang yang cantik.</p>
                                </div>
                                <!-- Post Share Area -->

                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Featured Video Posts Slide -->
                            <div class="featured-video-posts-slide owl-carousel">

                                 @foreach ($artikel as $a)

                                    <!-- Single Blog Post -->


                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('assets/img/artikel/'.$a->foto)}}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="{{ route('blogall.blog', $a->slug) }}" class="post-title">{{ $a->judul }}</a>

                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <br>
                            <center><h3><a href={{ url('about') }}"">About Us</a></h3></center>
                            Untuk memulai sebuah usaha diperlukan kerja keras dan kerja sama yang efektif untuk membangun sebuah perusahaan atau organisasi untuk memulai karir. maka dari itu kami berusaha untuk mencapai tujuan tersebut dengan membentuk sebuah tim
                       <div class="social-followers-info"><br>
                        <center><a href="{{ url('about') }}" class="facebook-fans"><span>Detail About Us</span></a>
                    </center>
                       </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Social Followers Info -->
                <div class="section-heading">
                    <h5>Sosial media</h5>
                </div>
                <div class="social-followers-info">
                    <!-- Facebook -->
                    <a href="https://web.facebook.com/angga.nakspk" class="facebook-fans"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                    <a href="https://instagram.com/_angga_s21_" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>

                </div>
            </div>
             <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Kategori</h5>
                </div>

                <!-- Catagory Widget -->
                @foreach ($artikel as $ar)
                <ul class="catagory-widgets">
                    <a href="{{ route('cat.blog', $ar->kategori->slug) }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{ $ar->kategori->nama_kategori }}</span></a>
                </ul>
                @endforeach
            </div>
             <img src="frontend/mag/img/indonesian.png" alt="">

         </div>


                        </div>
                    </div>



    </section>
    <!-- ##### Mag Posts Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo"><img src="frontend/mag/img/logoind.png" width="100px" height="100px" alt=""></a>

                        <div class="footer-social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>

                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Categories</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tech</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Music</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Foods</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fashion</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Football</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> TV Show</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Sport Videos</h6>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="frontend/mag/img/bg-img/12.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Take A Romantic Break In A Boutique Hotel</a>

                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="frontend/mag/img/bg-img/13.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Travel Prudently Luggage And Carry On</a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
            </div></div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="frontend/mag/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="frontend/mag/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="frontend/mag/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="frontend/mag/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="frontend/mag/js/active.js"></script>
</body>

</html>
