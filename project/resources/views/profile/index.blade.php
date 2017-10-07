@extends('profile.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name }}</div>

                <div class="panel-body">
                 <h2> Welcome to your profile!</h2><br>

                 <img src="{{url('../')}}/public/img/{{Auth::user()->pic}}" width="150px" height="150px"/><br><br><br>

                 <!-- <a href="{{url('/')}}/changePhoto" >Change Image</a> -->


                 <b>Acoount ID:</b> {{Auth::user()->id}}<br>
                 <b>User Name:</b> {{Auth::user()->name}}<br>
                 <b>E-mail ID:</b> {{Auth::user()->email}}<br>
                 <b>Company ID:</b> {{Auth::user()->company_code}}<br><br><br> 
                 <form action="{{url('/')}}/changePhoto" method="post" >
                    {{csrf_field() }}
                    <button type="submit" class="btn btn-primary">
                        Change Image<br>
                    </button>
                    <br><br>
                </form>

                <?php if (Auth::user()->emp=='employeer'): ?>
                    <form action="{{url('/')}}/task" method="get" >
                        {{csrf_field() }}
                        <button type="submit" class="btn btn-primary">
                            Assign task for Employees<br>
                        </button>
                        <br>                    <!-- Assign task for Employees --><br>
                    </form>
                    <form action="{{url('/')}}/allemp" method="get" >
                        {{csrf_field() }}
                        <button type="submit" class="btn btn-primary">

                            See all Employee projects<br>
                        </button>
                        <br><br>
                    </form>
                    <form action="{{url('/')}}/project" method="get" >
                        {{csrf_field() }}
                        <button type="submit" class="btn btn-primary">
                            Set a project<br>
                        </button>
                        <br><br>
                    </form>


                 <?php endif;  ?>
                    <!--Your Assignments:<br>
                    <table>
                    <tr><td>
                    <u> Project for <font color="blue">{{Auth::user()->name}}</font></u>:<br><br></td></tr>
                    <tr><td>Project name: {{Auth::user()->Atask}} <br></td></tr>
                    <tr><td>Client: {{Auth::user()->Pof}} <br></td></tr>
                    <tr><td>Deadline: {{Auth::user()->Dline}} <br></td></tr>
                    <tr><td>Current date and time:
                    <?php use Carbon\Carbon;

                    $date=Carbon::now();
                    echo $date;

                    ?></td></tr>
                     </table>
                 -->
                 <!-- <div class="boxed"> -->


                 <?php
                 $reg=Auth::user()->id ;
                 $users = DB::table('users')
                 ->join('user_project', 'users.id', '=', 'user_project.user_id')
                 ->join('project', 'user_project.project_id', '=', 'project.project_id')
                       // ->join('project_leader', 'task.task_id', '=', 'project_leader.task_id')

                       // ->select('users.reg', 'course_id.course_code','course_id.session')
                 ->where('users.id','=', $reg )
                       // ->where('course_time.day','=',$datum[0])
                 ->get();
                       // echo $users;

$datum=Carbon::now();


            
              // foreach ($datum as $key ) {
              //     echo $key;
              // }
                 $i=0;

                 foreach ($users as $item) { ?>
                 <div class="boxed">
                 <table>
                     <tr>
                         <td colspan="2">
                             <boxed>Deadline in</boxed>
                         </td>
                     </tr>

                     <tr>
                         <td id="days">4</td>
                         <td id="hours">5</td>
                         <td id="minutes">50</td>
                         <td id="seconds">24</td>


                     </tr>

                     <tr>
                         
                         <td>Days</td>
                         <td>Hours</td>
                         <td>Minutes</td>
                         <td>Seconds</td>
                     </tr>

                 </table>
                   <?php
                   $datum=$item->project_id;

                        // echo "Employee ID: ".$item->user_id."<br>";
                        // echo "Employee Name: ".$item->name."<br>";
                   echo "Project ID: ".$item->project_id."<br>";
                    //      echo $reg."<br>";
                    //  echo $project."<br>";
                    //      $user=DB::table('user_project')
                    // ->where('user_id','!=', $reg )
                    // ->where('project_id','=',$project)
                    // ->get();
                   echo "Project Name: ".$item->project_name."<br>";
                   echo "Project Client: ".$item->project_client."<br>";
                   echo "Project Leader: ".$item->project_leader."<br>";
                   echo "Project Deadline: ".$item->project_deadline."<br>";
                   $user=DB::table('user_project')
                   ->where('user_id','!=', $reg )
                   ->where('project_id','=',$datum)
                   ->get();
                   $a=0;
                   foreach ($user as $item) {
                    $imon=$item->user_id;
                        // echo $imon."<br>";
                    $use=DB::table('users')->where('id','=',$imon)->get();
                    foreach ($use as $key) {
                        $hc=$key->name;
                        if ($a==0)echo "Project Partner: ".$hc;
                        else echo ", ".$hc;
                    }
                    $a++;

                }
                echo "<br><br>";
                ?>
            </div>

            <?php          }



            ?>









        </div>
    </div>
</div>
</div>
</div>
@endsection
