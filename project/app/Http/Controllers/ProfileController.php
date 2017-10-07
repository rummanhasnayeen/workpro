<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;

class ProfileController extends Controller
{
    public function index($slug){

       return view('profile.index');

   }


// public function task($slug){

//      return view('profile.task');

//  }


   public function insert(Request $req){
    $Eid=$req->input('Eid');
    $project_id=$req->input('project_id');
    // $Dline=$req->input('Dline');
    // $project_name=$req->input('project_name');
    // $project_client=$req->input('project_client');
    // $project_leader=$req->input('project_leader');

    // $Pof=$req->input('Pof');
    $user_id = Auth::user()->emp;
    $id=Auth::user()->id;
    // $data = array('Eid'=>$Eid,"Atask"=>$Atask,"Dline"=>$Dline,"Pof"=$Pof);
    if($user_id=='employeer'){
        DB::table('user_project')->insert(
        ['user_id' => $Eid, 'project_id' => $project_id]
        );
        // DB::table('project_time')->insert(
        // ['task_id' => $task_id,'task_deadline'=> $Dline]
        // );
        // DB::table('project_leader')->insert(
        // ['task_id' => $task_id,'project_leader'=> $project_leader]
        // );
     return redirect('/');
 }
 else{

    return view('profile.author');
}



}


   public function projectinsert(Request $req){
    // $project_id=$req->input('Pid');
    $project_id=$req->input('project_id');
     $project_deadline=$req->input('Dline');
     $project_name=$req->input('project_name');
     $project_client=$req->input('project_client');
     $project_leader=$req->input('project_leader');

    // $Pof=$req->input('Pof');
    $user_id = Auth::user()->emp;
    $id=Auth::user()->id;
    // $data = array('Eid'=>$Eid,"Atask"=>$Atask,"Dline"=>$Dline,"Pof"=$Pof);
    if($user_id=='employeer'){
        DB::table('project')->insert(
        [ 'project_id' => $project_id,'project_name' => $project_name,'project_client' => $project_client,'project_leader' => $project_leader,'project_deadline' => $project_deadline]
        );
        // DB::table('project_time')->insert(
        // ['task_id' => $task_id,'task_deadline'=> $Dline]
        // );
        // DB::table('project_leader')->insert(
        // ['task_id' => $task_id,'project_leader'=> $project_leader]
        // );
     return redirect('/');
 }
 else{

    return view('profile.author');
}



}


public function uploadPhoto(Request $request) {

    $file = $request->file('pic');
    $filename = $file->getClientOriginalName();


    $path = 'public/img';

    $file->move($path, $filename);
    $user_id = Auth::user()->id;

    DB::table('users')->where('id', $user_id)->update(['pic' => $filename]);
         //return view('profile.index');
    return back();
}

public function store()
{
        // dd(request()->all());
        // if ($data['gender'] == 'male') {

        //     $pic_path='male.ico';

        //  }
        //  else
        //  {
        //      $pic_path='female.ico';

        //  }
    User::create([
        'name' => request('name'),
        'email' => request('email'),
            // 'pic' => $pic_path,
        'password' => bcrypt(request('password'))
        ]);

    return redirect('/');

}
}
