@extends('layouts.app')

@section('content')
<!-- page content -->
<div class="right_col" role="main">

  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Movie Information</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="col-md-7 col-sm-7 col-xs-12">
              <div class="product-image">
                <img src="{{ asset('images/'.$film->image) }}"/>
              </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

              <h3 class="prod_title">{{ $film->judul }}</h3>

              <p>{{ $film->sinopsis }}</p>
              <br />
              <br />

              <div class="">
                <label for="">Tayang: </label>
                <h2>{{ $film->tayang }}</h2><br />
                <label for="">Bioskop: </label>
                <h2>{{ $film->bioskop }}</small></h2>
              </div>
              <br />

              <div class="">
                <div class="product_price">
                  <h1 class="price">Rp {{ strrev(implode('.',str_split(strrev(strval($film->harga)),3))) }}</h1>
                  <br>
                </div>
              </div>

              <div id="action_bar">
                <a href="{{ route('film.edit', $film->_id) }}" class="btn btn-warning btn-lg">Edit</a>
                <!-- <a class="btn btn-danger btn-lg">Delete</a> -->
                <form action="{{ route('film.destroy', $film->_id) }}" method="POST" style="display:inline-block !important;">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" class="btn btn-danger" value="Delete" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection