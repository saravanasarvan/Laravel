<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Http\Controllers\Controller;
use App\Test;


class TestController extends Controller
{
   
    public function index()
    {
        $posts=Test::orderBy('id','desc')->get();
		return view('posts.index',['posts'=>$posts]);
		
    }

   
    public function add()
    {
        return view('posts.add');
		
    }
	
	public function insert(Request $request)
	{
		
			
			
			
		$this->validate($request,[
		'name'=>'required',
		'email'=>'required',
		'mobile'=>'required',
		'file'=>'required'
		]);
		$file = Input::file('file');
		$file->move('uploads', $file->getClientOriginalName());
		$postData=$request->all();
		Test::create($postData);
		session::flash('success_msg','Insert Successfully');
		return redirect()->route('posts.index');
		
	}
	
	
	public function details($id)
	{
		$post=Test::find($id);
		return view('posts.details',['post'=>$post]);
		
	}
	
	public function edit($id)
	{
		$post=Test::find($id);
		return view('posts.edit',['post'=>$post]);
		
	}
	
	
	public function update($id, Request $request)
	{
		$this->validate($request,[
		'name'=>'required',
		'email'=>'required',
		'mobile'=>'required'
		]);
		$postData=$request->all();
		Test::find($id)->update($postData);
		session::flash('success_msg','Updated Successfully');
		return redirect()->route('posts.index');
		
		
		
	}
	
	
	public function delete($id)
	{
		Test::find($id)->delete();
		session::flash('success_msg','Deleted Successfully');
		return redirect()->route('posts.index');
		
	}
	
	
	
	
	

   
}
