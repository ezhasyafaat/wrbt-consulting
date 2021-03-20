@extends('layouts._app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('failed'))
                <div class="alert alert-danger" role="alert">
                    <p>{{ session('failed') }}</p>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    {{ __('Add Content About') }}
                    <a class="float-md-right btn btn-primary" href="{{ route('team.manage.index') }}">Back To List</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('team.manage.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="name">Name</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="position">position</label>
                                <input type="text" class="form-control  @error('position') is-invalid @enderror" name="position">
                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="content">About</label>
                                <textarea name="about" class="form-control @error('about') is-invalid @enderror" cols="30" rows="5"></textarea>
                                @error('about')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="content">Short Description</label>
                                <textarea name="short_desc" class="form-control @error('short_desc') is-invalid @enderror" cols="30" rows="3"></textarea>
                                @error('short_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control  @error('facebook_url') is-invalid @enderror" name="facebook_url">
                                @error('facebook_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control  @error('twitter_url') is-invalid @enderror" name="twitter_url">
                                @error('twitter_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control  @error('instagram_url') is-invalid @enderror" name="instagram_url">
                                @error('instagram_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="linkedin">Linked In</label>
                                <input type="text" class="form-control  @error('linkeind_url') is-invalid @enderror" name="linkedin_url">
                                @error('linkedin_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="image">Image</label>
                                <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection