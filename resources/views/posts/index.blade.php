<title>3</title>
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($posts))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Posts List </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('posts.add') }}"> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="25%">Name</th>
                       
                        <th width="15%">Email</th>
                        
                        <th width="15%">Mobile</th>
                        
                        <th width="15%">Image</th>
                        
                          
                        <th width="15%">Created</th>
                         
                        <th width="20%">Action</th>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td class="table-text">
                                <div>{{$post->name}}</div>
                            </td>
                            <td class="table-text">
                              <div>{{$post->email}}</div>
                            </td>
                            
                               <td class="table-text">
                              <div>{{$post->mobile}}</div>
                            </td>
                               
                            
                          <td class="table-text">
                                <div>{{$post->created_at}}</div>
                            </td>
                            
                         
                            
                            
                            
                            <td>
                                <a href="{{ route('posts.details', $post->id) }}" class="label label-success">Details</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('posts.delete', $post->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
</div>
@endsection