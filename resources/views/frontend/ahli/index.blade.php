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
    <!-- Our Team Start -->
    <div class="ourteam">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2>Tenaga Ahli <span>WRBT Consulting</span></h2>
                    <span class="title-border-light"><i class="fa fa-area-chart" aria-hidden="true"></i></span> </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="team-cnt">
                    @foreach ($data as $rows)
                        <div class="col-sm-6 col-md-3">
                            <div class="team-box">
                                <div class="team-head"> <img src="{{ url($rows->image) }}" class="img-responsive" alt="">
                                </div>
                                <div class="team-content">
                                    <h3><a href="{{ route('show.ahli', ['id' => $rows->id]) }}">{{ $rows->name }}</a></h3>
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
