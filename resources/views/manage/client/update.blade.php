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
                    <a class="float-md-right btn btn-primary" href="{{ route('about.manage.index') }}">Back To List</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('about.manage.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="content">Content</label>
                                <textarea name="content" id="" cols="30" rows="5" class="form-control  @error('content') is-invalid @enderror">{{ $data->content }}</textarea>
                                @error('content')
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