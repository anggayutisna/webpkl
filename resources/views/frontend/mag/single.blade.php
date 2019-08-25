@extends('layouts.mag')

@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(frontend/mag/img/bg-img/49.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Single Post</h2>
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
                            <li class="breadcrumb-item"><a href="#">Features</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Single Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area">
        <div class="container">
            <div class="row justify-content-left">
                <!-- Post Details Content Area -->

                @foreach ($artikel as $artikels)

                <div class="col-12 col-xl-8">
                    <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                        <div class="blog-content">
                            <div class="post-meta">
                                <a href="#">{{  date('l, d-m-Y')}}</a>
                                <a href="#">{{ $artikels->kategori->nama_kategori}}</a>
                            </div>
                            <h4 class="post-title">{{ $artikels->judul }}</h4>
                                                    <div class="blog-thumb mb-30">
                            <img src="{{ asset('assets/img/artikel/'.$artikels->foto)}}"  alt="">
                        </div>
                            <!-- Post Meta -->


                            <p>{!! $artikels->konten !!}</p><br>
                          <iframe src="{{ $artikels->map }}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                            @endforeach
                             @foreach ($artikel->tag as $tags) <a href="">{{ $tags->nama_tag }}</a> @endforeach





                            <!-- Like Dislike Share -->

                            <!-- Post Author -->
                            <div class="post-author d-flex align-items-center">


                            </div>
                        </div>
                    </div>

                    <!-- Related Post Area -->
                </div></div></div>
    </section>
    <!-- ##### Post Details Area End ##### -->


</body>

</html>
@endsection
