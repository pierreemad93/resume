@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        Social Media links
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post" action="{{route('slider.store')}}" role="form" class="form-horizontal form-groups-bordered">
                       @csrf
                        <div class="form-group"> 
                            <label  class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-5"> 
                                <input type="text" class="form-control"  placeholder="name of social media platform" name="name"> 
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label  class="col-sm-3 control-label">icon</label>
                            <div class="col-sm-5"> 
                                <input type="text" class="form-control"  placeholder="icon of social media platform" name="icon"> 
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label  class="col-sm-3 control-label">social media link</label>
                            <div class="col-sm-5"> 
                                <input type="text" class="form-control"  placeholder="Profile link of social media platform" name="link"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                 <button type="submit" class="btn btn-primary">Sign in</button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        I'm  (add your Job)
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post" action="{{route('slider.store')}}" role="form" class="form-horizontal form-groups-bordered">
                       @csrf
                        <div class="form-group"> 
                            <label  class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-5"> 
                                <input type="text" class="form-control"  placeholder="name of Your Job" name="name"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                 <button type="submit" class="btn btn-primary">Add</button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
