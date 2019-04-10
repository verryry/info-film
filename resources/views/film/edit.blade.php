@extends('layouts.app')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

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
          <h2>Movie</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <form class="form-horizontal form-label-left" action="{{ route('film.update',$film->_id) }}" enctype="multipart/form-data"
            method="post" novalidate>
            @csrf
            {{ method_field('PUT') }}
            <span class="section">Movie Info</span>
            <input type="hidden" value="{{ $film->image }}" name="old_image">
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="judul">Judul <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="judul" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                  data-validate-words="2" name="judul" value="{{ $film->judul }}" required="required" type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tayang">Tayang <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class='input-group date' id='myDatepicker4'>
                  <input id="tayang" type='text' class="form-control" readonly="readonly" name="tayang" value="{{ $film->tayang }}"/>
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bioskop">Bioskop <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="bioskop" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                  data-validate-words="2" name="bioskop" value="{{ $film->bioskop }}" required="required" type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga">Harga <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="harga" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                  data-validate-words="2" name="harga" placeholder="ex: Rp." value="{{ $film->harga }}" required="required"
                  type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="trailer">Video Trailer <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="trailer" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                  data-validate-words="2" name="trailer" value="{{ $film->trailer }}" required="required" type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sinopsis">Sinopsis <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="sinopsis" required="required" name="sinopsis" class="form-control col-md-7 col-xs-12">{{ $film->sinopsis }}</textarea>
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="image" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"
                  name="image" required="required" type="file">
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <a href="{{ route('film.show',$film->_id) }}" class="btn btn-primary">Cancel</a>
                <button id="send" type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->
@endsection