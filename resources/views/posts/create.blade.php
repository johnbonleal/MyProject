@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
  <link href="{!! asset('css/parsley.css') !!}" media="all" rel="stylesheet" type="text/css" />
@endsection

@section('content')
  <div class="row">
    <!--This code creates an error/info message about the status of validation
    <div class="bs-callout bs-callout-warning hidden">
      <h4>Oh snap!</h4>
      <p>
        This form seems to be invalid :(
      </p>
    </div>
    <div class="bs-callout bs-callout-info hidden">
      <h4>Yay</h4>
      <p>
        Everything seems to be ok :)
      </p>
    </div> -->
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New Post</h1>
      <hr>
      <form id="form" method="POST" action="{{ route('posts.store') }}" data-parsley-validate="">
        <div class="form-group">
          <label name="title">Title:</label>
          <input id="title" name="title" class="form-control" maxlength="255" required autofocus>
        </div>
        <div class="form-group">
          <label name="slug">Slug:</label>
          <input id="slug" name="slug" class="form-control" minlength="5" maxlength="255" required>
        </div>
        <div class="form-group">
          <label name="body">Post Body:</label>
          <textarea id="body" name="body" rows="10" class="form-control" required></textarea>
        </div>
        <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    </div>
  </div>﻿
@endsection

@section('scripts')
  <script src="{!! asset('js/parsley.min.js') !!}" type="text/javascript"></script>
@endsection
