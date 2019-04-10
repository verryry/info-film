@extends('layouts.home')

@section('content')
<div class="portfolio-wrap">
    <div class="container">
        <div class="row portfolio-container">
            @foreach($films as $film)
            <div class="col-12 col-md-6 col-lg-4 portfolio-item">
                <div class="portfolio-cont">
                    <a href="#"><img src="{{ asset('images/'.$film->image) }}" alt=""></a>

                    <h3 class="entry-title"><a href="{{ route('index.show',$film->_id) }}">{{ $film->judul }}</a></h3>
                    <h4>Rp {{ strrev(implode('.',str_split(strrev(strval($film->harga)),3))) }}</h4>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-72">
                <a href="#" class="btn gradient-bg load-more-btn">Load More</a>
            </div>
        </div>
    </div>
</div>
@endsection