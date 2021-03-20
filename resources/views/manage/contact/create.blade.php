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
                    {{ __('Add Contact') }}
                    <a class="float-md-right btn btn-primary" href="{{ route('contact.manage.index') }}">Back To List</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('contact.manage.store') }}">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="address">Office Address</label>
                                <input type="text" class="form-control @error('office_address') is-invalid @enderror" name="office_address" autofocus>
                                @error('office_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="phone">Office Phone</label>
                                <input type="text" class="form-control  @error('office_phone') is-invalid @enderror" name="office_phone">
                                @error('office_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group-row">
                                <label for="email">Office Email</label>
                                <input type="text" class="form-control  @error('office_email') is-invalid @enderror" name="office_email">
                                @error('office_email')
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