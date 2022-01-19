@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>topics</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($topics as $topic)
                            <tr>
                                <td>1</td>
                                <td>{{ $topic->name }}</td>
                                <td>
                                    <a href="#" class="btn btn-default btn-sm btn-icon icon-left">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                        <i class="fas fa-trash-alt"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                Don't have any Topics
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-primary" href="{{ route('topic.create') }}">create topic</a>
    </div>
@endsection
