@extends('layouts.admin')
@section('content')
    <div class="row">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        Resume topic
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post" action="{{ route('topic.store') }}" role="form"
                        class="form-horizontal form-groups-bordered">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" placeholder="name of resume topic" name="name">
                            </div>
                            @error('name')
                                <p class="text-denger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-primary">Add Topic</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
