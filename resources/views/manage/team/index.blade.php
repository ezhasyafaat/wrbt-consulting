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
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    {{ __('Manage About') }}
                    <a class="float-md-right btn btn-primary" href="{{ route('team.manage.create') }}">Add Team</a>
                </div>
               
                <div class="card-body">
                    @if (count($data))
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>About</th>
                                    <th>Facebook</th>
                                    <th>Twitter</th>
                                    <th>Instagram</th>
                                    <th>Linked In</th>
                                    <th>Image</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->position }}</td>
                                            <td>{{ $row->about }}</td>
                                            <td>{{ $row->facebook_url }}</td>
                                            <td>{{ $row->twitter_url }}</td>
                                            <td>{{ $row->instagram_url }}</td>
                                            <td>{{ $row->linkedin_url }}</td>
                                            <td><img style="vertical-align: middle;width: 200px;height: 200;" src="{{ $row->image ? url($row->image) : null }}" alt=""></td>
                                            <td>{{ $row->created_at }}</td>
                                            <td>{{ $row->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('team.manage.edit', ['id' => $row->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('team.manage.destroy', ['id' => $row->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        <tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }}
                        </div>
                    @else
                    <div class="alert alert-warning text-center" role="alert">
                        <span>{{ __('No Data To Display') }}</span>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection