
@extends('profile.master')

@section('content')


<div class="container">
    <div class="row">
    
    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <?php if((Auth::user()->status)=='1'){  ?>
                <div class="panel-heading">{{Auth::user()->company_code}}</div>
                <?php }
                else{

                  ?>
                  <div class="panel-heading">Please Verify Your Account</div>
                  <?php }?>

                <div class="panel-body">
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


                    //    foreach ($users as $item) {
                    //     echo "Employee ID: ".$item->user_id."<br>";
                    //     echo "Employee Name: ".$item->name."<br>";
                    //     echo "Project ID: ".$item->project_id."<br>";
                    //     echo "Project Name: ".$item->project_name."<br>";
                    //     echo "Project Client: ".$item->project_client."<br>";
                    //     echo "Project Leader: ".$item->project_leader."<br>";
                    //     echo "Project Deadline: ".$item->project_deadline."<br>"."<br>";
                        

                    // }




                    ?>
                    <?php if ((Auth::user()->status)=='1') {
                        
                    
                    ?>
                    <b><font size=300%>All Assigned Projects</font></b><br><br>
                    <table>
                        <tr>
                        <th>Sl no.</th>
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            <th>Project ID</th>
                            <th>Project Name</th>
                            <th>Client</th>
                            <th>Project Leader</th>
                            <th>Deadline</th>
                            
                        </tr>
                        
                        <?php
                        $i=1;
                        foreach ($users as $item){
                            
                        

                        ?>
                    

                    <tr>
                    <td>
                        
                        <?php echo $i++; ?>
                    </td>
                    <td>
                        
                        <?php echo $item->user_id; ?>
                    </td>
                    <td>
                        
                        <?php echo $item->name; ?>
                    </td>
                    <td>
                        
                        <?php echo $item->project_id; ?>
                    </td>
                    <td>
                        
                        <?php echo $item->project_name; ?>
                    </td>
                    <td>
                        
                        <?php echo $item->project_client; ?>
                    </td>
                    <td>
                        
                        <?php echo $item->project_leader; ?>
                    </td>
                    <td>
                        
                        <?php echo $item->project_deadline; ?>
                    </td>
                        
                            

                        </tr>
<?php } }?>

                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
