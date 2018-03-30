<title>edit</title>
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
                Edit Post <a href="{{ route('posts.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('posts.update', $post->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="name" class="form-control" value="{{ $post->name }}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" class="form-control" value="{{ $post->email }}">
                        </div>
                    </div>
                    
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Mobile</label>
                        <div class="col-sm-10">
                            <input type="text" name="mobile" id="mobile" class="form-control" value="{{ $post->mobile }}">
                        </div>
                    </div>
                    
                    
                    
                    
                  <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Update Post" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection