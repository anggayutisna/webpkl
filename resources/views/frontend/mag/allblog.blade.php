@extends('layouts.mag')

@section('content')
  <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(frontend/mag/img/bg-img/41.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Semua Blog</h2>
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
                            <li class="breadcrumb-item"><a href="#">Semua blog</a></li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">


                         @foreach ($artikel as $artikels )
                        <!-- Single Catagory Post -->
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <img src="{{ asset('assets/img/artikel/'.$artikels->foto)}}" alt="" width="250px"d >



                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a> {{  date('l, d-m-Y')}}  </a>
                                    <a href="archive.html">{{ $artikels->kategori->nama_kategori}}</a>
                                </div>
                                <a href="{{ route('blogall.blog', $artikels->slug) }}" class="post-title">{{ $artikels->judul }}</a>
                                <!-- Post Meta -->

                                <p>  {!! substr($artikels->konten, 0, 200) !!}</p>
                            </div>
                        </div>

                          @endforeach
                        <!-- Pagination -->

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Social Followers Info -->
                            <div class="social-followers-info">
                                <!-- Facebook -->
                                <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                <!-- Twitter -->
                            </div>
                        </div>

                        <!-- Sidebar Widget -->


                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget">
                            <a href="#" class="add-img"><img src="frontend/mag/img/bg-img/add2.png" alt=""></a>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->


                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Archive Post Area End ##### -->


</body>

</html>
@endsection
