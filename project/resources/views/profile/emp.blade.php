@extends('profile.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name }}</div>

                <div class="panel-body">
                    Welcome to your profile!<br>

                    <img src="{{url('../')}}/public/img/{{Auth::user()->pic}}" width="150px" height="150px"/><br>
                    <!-- <a href="{{url('/')}}/changePhoto" >Change Image</a><br> --><br><br>
                   <?php
                   $users = DB::table('users')
                       ->join('user_project', 'users.id', '=', 'user_project.user_id')
                        ->join('project', 'user_project.project_id', '=', 'project.project_id')
                       // ->join('project_leader', 'task.task_id', '=', 'project_leader.task_id')

                       // ->select('users.reg', 'course_id.course_code','course_id.session')
                       // ->where('course_time.teacher_id','=', $reg )
                       // ->where('course_time.day','=',$datum[0])
                       ->get();
                       // echo $users;

                       foreach ($users as $item) {
                        echo "Employee ID: ".$item->user_id."<br>";
                        echo "Employee Name: ".$item->name."<br>";
                        echo "Project ID: ".$item->project_id."<br>";
                        echo "Project Name: ".$item->project_name."<br>";
                        echo "Project Client: ".$item->project_client."<br>";
                        echo "Project Leader: ".$item->project_leader."<br>";
                        echo "Project Deadline: ".$item->project_deadline."<br>"."<br>";
                        

                    }






                   ?>
                    



                    
                    


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
