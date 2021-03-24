@extends('layouts.app')

@section('content')
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
                <div class="col-md-7 about-text">
                    <h3>{{ $data->name }}</h3>
                    <p align="justify">{{ $data->about }}</p>
                </div>
                <div class="col-md-5 about-image"> <img src="{{ url($data->image) }}" alt=""> </div>
            </div>
        </div>
    </div>
@endsection
