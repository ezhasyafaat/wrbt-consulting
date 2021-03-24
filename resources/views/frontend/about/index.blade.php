@extends('layouts.app')

@section('content')
    <!-- breadcrumb wrapper start -->
<div class="breadcrumb-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="title">
            <h1>Profil Kami</h1>
          </div>
          <ol class="breadcrumb">
            <li> <a href="index.html"> Home </a> </li>
            <li> <a href="javascript:void(0)">Pages</a> </li>
            <li class="active">Profil Kami</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--breadcrumb wrapper end --> 
  <!--about wrapper  start -->
  <div class="home-about-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12 about-text">
          <h3>About WRBT Consulting</h3>
          @if ($data['about']->image)
          <div class="col-md-12 about-image"> <img src="{{ url($data['about']->image) }}" alt=""> </div><br>
          @endif
          <p class="justify-align">{!! nl2br($data['about']->content) !!}</p>
        </div>
      </div>
    </div>
  </div>
  <!--about wrapper end --> 
  <!-- Our Team Start -->
<div class="ourteam">
  <div class="container">
    <div class="row">
      <div class="title">
        <h2>Team <span>WRBT Consulting</span></h2>
        <span class="title-border-light"><i class="fa fa-area-chart" aria-hidden="true"></i></span> </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="team-cnt">
       @foreach ($data['team'] as $rows)
       <div class="col-sm-6 col-md-3">
        <div class="team-box">
          <div class="team-head"> <img src="{{ url($rows->image) }}" class="img-responsive" alt="">
            <div class="social">
              <ul>
                <li class="facebook-icon"> <a href="{{ $rows->facebook_url }}"> <span class="fa fa-facebook"></span> </a> </li>
                <li class="twitter-icon"> <a href="{{ $rows->twitter_url }}"> <span class="fa fa-twitter"></span> </a> </li>
                <li class="linkedin-icon"> <a href="{{ $rows->instagram_url }}"> <span class="fa fa-linkedin"></span> </a> </li>
                <li class="dribbble-icon"> <a href="{{ $rows->linkedin_url }}"> <span class="fa fa-dribbble"></span> </a> </li>
              </ul>
            </div>
          </div>
          <div class="team-content">
            <h3><a href="{{ route('page.team', ['id' => $rows->id]) }}">{{ $rows->name }}</a></h3>
            <b>{{ $rows->position }}</b>
            <p>{{ $rows->short_desc }}</p>
            <p>&nbsp;</p>
            <!-- end team-social --> 
          </div>
          <!-- end team-content --> 
        </div>
      </div>
       @endforeach
      </div>
    </div>
</div>
<!-- Our Team End --> 
@endsection