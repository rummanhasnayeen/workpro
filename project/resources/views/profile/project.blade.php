@extends('profile.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name }}</div>

                <div class="panel-body">
                    Set Project for a Employee<br>

                    <!-- <img src="{{url('../')}}/public/img/{{Auth::user()->pic}}" width="80px" height="80px"/><br> -->
                    <!-- <a href="{{url('/')}}/changePhoto" >Change Image</a><br><br><br> -->
                     <center>Set a Project:</center>
                     <br>
                     <br>


                    <form action="{{url('/')}}/projectinsert" method="post" >
                    
                    {{csrf_field() }}
                    
                    Project ID :
                    <input type="text" name="project_id">
                        <br>
                    <br>
                    

                    <!-- <tr>
                    <td>
                    Project ID:
                    <input type="text" name="project_id"><br>
                    <br>
                        
                    </td>
                    </tr>
                     -->
                    
                    Project Name:
                    <input type="text" name="project_name"><br>
                    <br>
                        
                    

                    
                    Deadline:
                    <input type="date" name="Dline"><br>
                    <br>
                        
                    
                    

                    

                    
                    Project Client:
                    <input type="text" name="project_client"><br>
                    <br>
                        
                    
                    Project Leader:
                    <input type="text" name="project_leader"><br>
                    <br>
                        
                    
                        <input type="submit" name="submit" value="Proceed">
                    

                    

                   </form>
                    
                    



                    
                    


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
