@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Social Links</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>icon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    @forelse ($socialLinks as $socialLink)
                        <tr>
                            <td>1</td>
                            <td>{{ $socialLink->name }}</td>
                            <td>{!! $socialLink->icon !!}</td>
                            <td>
                                <a href="#" class="btn btn-default btn-sm btn-icon icon-left">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                    <i class="fas fa-trash-alt"></i>
                                    Delete
                                </a>
                                <a href="{{$socialLink->link}}" target="_blank" class="btn btn-info btn-sm btn-icon icon-left">
                                    <i class="fas fa-id-card-alt"></i>
                                    Profile
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <h3>Don't have any social media link</h3>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
        <a href="{{route('slider.create')}}" class="btn btn-primary">Add Social media link</a>

        <div class="row">
            <div class="col-md-12">
                <h4>Jobs</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    @forelse ($jobs as $job)
                        <tr>
                            <td>1</td>
                            <td>{{ $job->name }}</td>
                            <td>{{$job->created_at}}</td>
                            <td>
                                <a href="#" class="btn btn-default btn-sm btn-icon icon-left">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                    <i class="fas fa-trash-alt"></i>
                                    Delete
                                </a>
                                <a href="{{$socialLink->link}}" target="_blank" class="btn btn-info btn-sm btn-icon icon-left">
                                    <i class="fas fa-id-card-alt"></i>
                                    Profile
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <h3>Don't have any social media link</h3>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
        <a href="{{route('slider.create')}}" class="btn btn-primary">Add new job</a>
    </div>
@endsection
