<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Posts;
use App\Comments;
use Auth;
use Image;

class HomePostController extends Controller
{
	public function post_posts(Request $request){
		$file=$request->all();
		$file['user_id'] = Auth::id();
		if($file['text'] == null and $file['image'] == null and $file['video'] == null){
			return response(['status'=>'error','title'=>'Error','body'=>'Enter any post']);
		}
		$validator1=Validator::make($file,[
			'text' => 'max:1000',
		]);
		if($validator1->fails()){
			return response(['status'=>'error','title'=>'Error','body'=>'Maximum character length is 1000']);
		}
		if(isset($file["image"])){
			$validator2=Validator::make($file,[
				'image' => 'mimes:jpg,jpeg,png,gif',
			]);
			if($validator2->fails()){
				return response(['status'=>'error','title'=>'Error','body'=>'Your image format is wrong']);
			}else{
				$image=$file['image'];
				$image_name=substr(md5(time()),25).$image->getClientOriginalName();
				Image::make($image->getRealPath())->save(public_path('frontend/images/post-images/'.$image_name));
				$file['image']=$image_name;
			}
		}
		if(isset($file["video"])){
			$validator3=Validator::make($file,[
				'video' => 'mimes:mp4,mov,ogg,avi | max:20000',
			]);
			if($validator3->fails()){
				return response(['status'=>'error','title'=>'Error','body'=>'Your video format is wrong']);
			}else{
				$video=$file['video'];
				$video_name=substr(md5(time()),25).$video->getClientOriginalName();
				$video->move(public_path("frontend/images/post-videos/"),$video_name);
				$file['video']=$video_name;
			}
		}
		try{
			unset($file['_token']);
			Posts::create($file);
			return response(['status'=>'success','title'=>'Success','body'=>'Your post successfully saved']);
		}
		catch(\Exception $e){
			return response(['status'=>'error','title'=>'Error','body'=>"Your post can't saved"]);
		}
	}
	public function post_comments(Request $request){
		$file=$request->all();
		$file['user_id'] = Auth::id();
		if(!isset($file['comment_id'])){
			$file['comment_id'] = "0";
		}
		$validator=Validator::make($file,[
			'comment' => 'required',
		]);
		if($validator->fails()){
			return response(['status'=>'error','title'=>'Error','body'=>'Write something']);
		}
		try{
			unset($file['_token']);
			Comments::create($file);
			return response(['status'=>'success','title'=>'Success','body'=>'Your comment successfully saved', 'comment_id' => $file['comment_id'],'post_id' => $file['post_id'],'image' => Auth::user()->image, 'name' => Auth::user()->name, 'user_id' => Auth::id(), 'comment' => $file['comment']]);
		}
		catch(\Exception $e){
			return response(['status'=>'error','title'=>'Error','body'=>"Your comment can't saved"]);
		}
	}
}
