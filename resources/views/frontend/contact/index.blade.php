@extends('layouts.app')

@section('content')
<div class="breadcrumb-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="title">
            <h1>Contact Us</h1>
          </div>
          <ol class="breadcrumb">
            <li> <a href="index.html"> Home </a> </li>
            <li class="active">Contact Us</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--breadcrumb wrapper end --> 
  <!-- Inner page wrapper start -->
  <div class="inner-page-wrapper contact-us">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-8">
          <h2>Get in Touch</h2>
          <div class="row">
            <div class="col-sm-4">
              <div class="address">
                <div class="icon-border">
                  <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                </div>
                <p><strong>Office</strong> <br>
                 {{ $data->office_address }}
              </div>
            </div>
            <div class="col-sm-4">
              <div class="address">
                <div class="icon-border">
                  <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                </div>
                <p><strong>Phone</strong><br>
                  {{ $data->office_phone }}
              </div>
            </div>
            <div class="col-sm-4">
              <div class="address">
                <div class="icon-border">
                  <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                </div>
                <p><strong>Email</strong> <br>
                  <a href="mailto:'.{{ $data->office_email }}.'">{{ $data->office_email }}</a><br>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <h2>Leave a Message</h2>
          <div class="forms">
            <form action="#">
              <input type="text" required placeholder="Full Name" value="" name="name">
              <input type="text" required placeholder="Phone Number" value="" name="phone">
              <textarea placeholder="Type your message here" name="message"></textarea>
              <button type="submit" class="btn">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <div id="googleMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198710.35112897935!2d-98.51489117772236!3d38.904562823631146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471865832140" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <!-- Inner page wrapper end --> 
  <!-- Our counters -->
  <div class="counters">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="counter">
            <div class="counter-icon-box"><i class="lnr lnr-clock"></i></div>
            <div class="number animateNumber" data-num="5325"> <span>5325</span></div>
            <p>Hours of work</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="counter">
            <div class="counter-icon-box"><i class="lnr lnr-users"></i></div>
            <div class="number animateNumber" data-num="160"> <span>160</span></div>
            <p>Satisfied client</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="counter">
            <div class="counter-icon-box"><i class="lnr lnr-laptop"></i></div>
            <div class="number animateNumber" data-num="530"> <span>530</span></div>
            <p>Projects Completed</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="counter">
            <div class="counter-icon-box"><i class="lnr lnr-thumbs-up"></i></div>
            <div class="number animateNumber" data-num="49"> <span>49</span></div>
            <p>Awards Won</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Our counters End --> 
@endsection