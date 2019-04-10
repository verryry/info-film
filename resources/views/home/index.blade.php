@extends('layouts.home')

@section('content')
<div class="swiper-container hero-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide hero-content-wrap">
            <img src="{{ asset('front/images/slider1.jpg')}}" alt="">

            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>CGV Blitz</h1>
                                <h4></h4>
                            </header><!-- .entry-header -->

                            <div class="entry-content mt-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum
                                    mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                            </div><!-- .entry-content -->

                            <!-- <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                    <a href="#" class="btn orange-border">Read More</a>
                                </footer>.entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->

        <div class="swiper-slide hero-content-wrap">
            <img src="{{ asset('front/images/slider2.jpg')}}" alt="">

            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>Cinema XXI</h1>
                                <h4></h4>
                            </header><!-- .entry-header -->

                            <div class="entry-content mt-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum
                                    mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                            </div><!-- .entry-content -->

                            <!-- <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                    <a href="#" class="btn orange-border">Read More</a>
                                </footer>.entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->

        <div class="swiper-slide hero-content-wrap">
            <img src="{{ asset('front/images/slider3.jpg')}}" alt="">

            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>Cinemaxx</h1>
                                <h4></h4>
                            </header><!-- .entry-header -->

                            <div class="entry-content mt-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum
                                    mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                            </div><!-- .entry-content -->

                            <!-- <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                    <a href="#" class="btn orange-border">Read More</a>
                                </footer>.entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->
    </div><!-- .swiper-wrapper -->

    <div class="pagination-wrap position-absolute w-100">
        <div class="container">
            <div class="swiper-pagination"></div>
        </div><!-- .container -->
    </div><!-- .pagination-wrap -->

    <!-- Add Arrows -->
    <div class="swiper-button-next flex justify-content-center align-items-center">
        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z" /></svg></span>
    </div>

    <div class="swiper-button-prev flex justify-content-center align-items-center">
        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z" /></svg></span>
    </div>
</div><!-- .hero-slider -->

<div class="home-page-icon-boxes">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                <div class="icon-box">
                    <figure class="d-flex justify-content-center">
                        <!-- <img src="{{ asset('front/images/hands-gray.png')}}" alt="">
                            <img src="{{ asset('front/images/hands-white.png')}}" alt=""> -->
                        <i class="fa fa-book" style="font-size:50px"></i>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Fitur</h3>
                    </header>

                    <div class="entry-content">
                        <p>Terdapat fitur harga, jam penayangan, dan bioskop tempat menonton.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                <div class="icon-box">
                    <figure class="d-flex justify-content-center">
                        <!-- <img src="{{ asset('front/images/donation-gray.png')}}" alt="">
                            <img src="{{ asset('front/images/donation-white.png')}}" alt=""> -->
                        <i class="fa fa-film" style="font-size:50px"></i>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Film</h3>
                    </header>

                    <div class="entry-content">
                        <p>Menyajikan berbagai macam film di seluruh bioskop di Indonesia.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                <div class="icon-box">
                    <figure class="d-flex justify-content-center">
                        <!-- <img src="{{ asset('front/images/charity-gray.png')}}" alt="">
                            <img src="{{ asset('front/images/charity-white.png')}}" alt=""> -->
                        <i class="fa fa-tv" style="font-size:50px"></i>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Bioskop</h3>
                    </header>

                    <div class="entry-content">
                        <p>Menyajikan daftar bioskop di seluruh Indonesia. </p>
                    </div>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .home-page-icon-boxes -->

<div class="home-page-welcome">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="welcome-content">
                    <header class="entry-header">
                        <h2 class="entry-title">Sejarah Film Pertama</h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content mt-5">
                        <p>Film komersial pertama di dunia diputar di Grand Cafe, Paris, pada 28 Desember 1895. Film tersebut dibuat oleh Louis
                        dan Auguste Lumiere, yakni kakak beradik asal Prancis pembuat kamera sekaligus proyektor yang disebut Cinematographe.
                        
                        Kakak beradik yang dikenal dengan Lumiere Brothers itu meluncurkan penemuannya ke publik pada Maret 1895, dengan
                        menampilkan film singkat berisi cuplikan pekerja yang meninggalkan pabrik Lumiere.
                        
                        Pada 28 Desember, kedua bersaudara itu menampilkan serangkaian adegan singkat kehidupan Prancis dan mengenakan biaya
                        masuk untuk pertama kalinya, yang kemudian disebut sebagai bioskop pertama di dunia.</p>
                    </div><!-- .entry-content -->
                </div><!-- .welcome-content -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                <img src="{{ asset('front/images/film.jpg')}}" alt="welcome">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .home-page-icon-boxes -->

<div class="our-causes">
    <div class="container">
        <div class="row">
            <div class="coL-12">
                <div class="section-heading">
                    <h2 class="entry-title">Film</h2>
                </div><!-- .section-heading -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-12">
                <div class="swiper-container causes-slider">
                    <div class="swiper-wrapper">
                        @foreach($films as $film)
                        <div class="swiper-slide">
                            <div class="cause-wrap">
                                <figure class="m-0">
                                    <img src="{{ asset('images/'.$film->image) }}" height="350" alt="">
                                </figure>

                                <div class="cause-content-wrap">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3 class="entry-title w-100 m-0"><a href="{{ route('index.show',$film->_id) }}">{{ $film->judul }}</a></h3>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <p class="m-0">{{ str_limit($film->sinopsis,130) }}</p>
                                    </div><!-- .entry-content -->

                                    <div class="fund-raised w-100">
                                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="fund-raised-goal mt-4">
                                                Rp {{ strrev(implode('.',str_split(strrev(strval($film->harga)),3))) }}
                                            </div><!-- .fund-raised-goal -->
                                        </div><!-- .fund-raised-details -->
                                    </div><!-- .fund-raised -->
                                </div><!-- .cause-content-wrap -->
                            </div><!-- .cause-wrap -->
                        </div><!-- .swiper-slide -->
                        @endforeach
                    </div><!-- .swiper-wrapper -->

                </div><!-- .swiper-container -->

                <!-- Add Arrows -->
                <div class="swiper-button-next flex justify-content-center align-items-center">
                    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z" /></svg></span>
                </div>

                <div class="swiper-button-prev flex justify-content-center align-items-center">
                    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z" /></svg></span>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .our-causes -->
@endsection