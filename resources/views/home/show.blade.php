@extends('layouts.home')

@section('content')
<div class="home-page-welcome">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">{{ $film->judul }}</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5">
                            <p>{{ $film->sinopsis }}</p><br />
                            <p>Tanggal Tayang:<br><span style="font-size:20px;">{{ $film->tayang }}</span></p><br />
                            <p>Tempat Bioskop:<br><span style="font-size:30px;">{{ $film->bioskop }}</span></p><br />
                            <b style="font-size:50px;">Rp {{ strrev(implode('.',str_split(strrev(strval($film->harga)),3))) }}</b>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <a href="{{ route('index.index') }}" class="btn gradient-bg mr-2">Back</a>
                            <a href="javascript:void(0);" class="btn mymodal-btn">Trailer</a>
                            <div class="mymodal-overlay">
                                <div class="mymodal">
                                    <a href="javascript:void" class="mybtn-close"><i class="fa fa-times"></i></a>
                                    <iframe src="{{ $film->trailer }}" class="col-12" style="height: 100%;padding: 0 !important;" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                <img src="{{ asset('images/'.$film->image)}}" alt="welcome">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .home-page-icon-boxes -->
@endsection