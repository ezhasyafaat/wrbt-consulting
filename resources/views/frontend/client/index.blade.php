@extends('layouts.app')

@section('content')
    <!-- breadcrumb wrapper start -->
<div class="breadcrumb-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="title">
            <h1>Client List</h1>
          </div>
          <ol class="breadcrumb">
            <li> <a href="index.html"> Home </a> </li>
            <li> <a href="javascript:void(0)">Pages</a> </li>
            <li class="active">Client List</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--breadcrumb wrapper end --> 
  <!-- Inner page wrapper start -->
  <div class="inner-page-wrapper about-us-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="about-text-container">
            <h2>Daftar Klien Kami</h2>
            <ul class="list">
                @foreach ($data as $row)
                    <li><a href="{{ $row->url }}">{{ $row->name }}</a></li>
                @endforeach
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="about-img"> <img src="https://placeholdit.imgix.net/~text?txtsize=80&bg=333&txtclr=cccccc&txt=600%C3%97400&w=600&h=400" alt=""> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner page wrapper end --> 
@endsection