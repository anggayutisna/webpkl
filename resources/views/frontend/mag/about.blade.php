@extends('layouts.mag')

@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(frontend/mag/img/bg-img/40.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>ABOUT US</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <!-- About Us Content -->
                    <div class="about-us-content bg-white mb-30 p-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>About Us</h5>
                        </div>
                        <p>Untuk memulai sebuah usaha diperlukan kerja keras dan kerja sama yang efektif untuk membangun sebuah perusahaan atau organisasi untuk memulai karir. maka dari itu kami berusaha untuk mencapai tujuan tersebut dengan membentuk sebuah tim</p>
                        <img class="mt-15" src="frontend/mag/img/jjd.jpg" alt="">

                        <!-- Team Member Area -->
                        <div class="section-heading mt-30">
                            <h5>Our Team</h5>
                        </div>

                        <!-- Single Team Member -->
                        <div class="single-team-member d-flex align-items-center">
                            <div class="team-member-thumbnail">
                                <img src="frontend/mag/img/my.jpg" alt="">
                                <div class="social-btn">
                                    <a href="https://web.facebook.com/angga.nakspk"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                     <a href="https://instagram.com/_angga_s21_" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
                                    <img src="frontend/mag/img/indonesian.png" alt="">
                                    </div>

                            </div>
                            <div class="team-member-content">
                                <h6>Angga Yustina</h6>
                                <span>Reporter</span>
                                <p>No time to sit, i must do what i do before !</p>
                            </div>
                        </div>

                        <!-- Single Team Member -->
                        <div class="single-team-member d-flex align-items-center">
                            <div class="team-member-thumbnail">
                                <img src="frontend/mag/img/bg-img/37.jpg" alt="">
                                <div class="social-btn">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="team-member-content">
                                <h6>Mr. Luke Garner</h6>
                                <span>Editor in Chief</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur mauris id scelerisque eleifend. Nunc vestibulum cursea quam at scelerisque.</p>
                            </div>
                        </div>

                        <!-- Single Team Member -->
                        <div class="single-team-member d-flex align-items-center">
                            <div class="team-member-thumbnail">
                                <img src="frontend/mag/img/bg-img/38.jpg" alt="">
                                <div class="social-btn">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="team-member-content">
                                <h6>Ms. Elena Korikova</h6>
                                <span>Marketer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur mauris id scelerisque eleifend. Nunc vestibulum cursea quam at scelerisque.</p>
                            </div>
                        </div>

                        <!-- Single Team Member -->

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Social Followers Info -->
                            <div class="social-followers-info">
                                <!-- Facebook -->
                                <a href="https://web.facebook.com/angga.nakspk" class="facebook-fans"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
                                <!-- Twitter -->
                                </div>
                        </div>

                        <!-- Sidebar Widget -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

 @endsection
