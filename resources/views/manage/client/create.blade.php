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
                    {{ __('Add Client') }}
                    <a class="float-md-right btn btn-primary" href="{{ route('client.manage.index') }}">Back To List</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('client.manage.store') }}">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="content">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Input client name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="image">Url</label>
                                <input type="text" class="form-control  @error('url') is-invalid @enderror" name="url">
                                @error('url')
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