<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;

class PostController extends Controller
{
    public function post(){

$catagories=Catagory::all();
return view('posts.pic',['catagories'=>$catagories]);


    }

    public function addpost(Request $request){

$this-> validate($request,[
    		'post_title'=>'required',
    		'post_body'=>'required',
    		'catagory_id'=>'required'

    	]);


 $post_title=$request->input('post_title');
     $post_body=$request->input('post_body');
     $catagory_id=$request->input('catagory_id');
     $user_id=Auth::user()->id;
    

    // $Pof=$req->input('Pof');
    
    
    // $data = array('Eid'=>$Eid,"Atask"=>$Atask,"Dline"=>$Dline,"Pof"=$Pof);
 
        DB::table('posts')->insert(
        [ 'user_id' => $user_id,'post_title' => $post_title,'post_body' => $post_body,'catagory_id' => $catagory_id]
        );
        // DB::table('project_time')->insert(
        // ['task_id' => $task_id,'task_deadline'=> $Dline]
        // );
        // DB::table('project_leader')->insert(
        // ['task_id' => $task_id,'project_leader'=> $project_leader]
        // );
     return redirect('/');
 

    }
}
