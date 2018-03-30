<title>1</title>
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a New Post <a href="{{ route('posts.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('posts.insert') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Email</label>
                        <div class="col-sm-10">
                         <input type="text" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Mobile</label>
                        <div class="col-sm-10">
                         <input type="text" name="mobile" id="mobile" class="form-control">
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label class="control-label col-sm-2" >Upload</label>
                        <div class="col-sm-10">
                         <input type="file" name="file" id="file">
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                  <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Add Post" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection