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
                     <center>Assign Employees:</center>
                     <br>
                     <br>


                    <form action="{{url('/')}}/insert" method="post" >
                    
                    
                    {{csrf_field() }}
                    
                    Employee ID :
                    <input type="number" name="Eid">
                        <br>
                    <br>
                    
                    Project ID:
                    <input type="text" name="project_id"><br>
                    <br>
          <!--               <select name="color" onchange='CheckColors(this.value);'> 
    <option>Team</option>  
    <option value="one">1</option>
    <option value="two">2</option>
    <option value="three">3</option>
    <option value="four">4</option>
    <option value="five">5</option>
  </select>
<input type="text" name="color" id="color" style='display:none;'/><br> -->
                    

                    <!-- <tr>
                    <td>
                    Deadline:
                    <input type="date" name="Dline"><br>
                    <br>
                        
                    </td>
                    </tr>
                    

                    <tr>
                    <td>
                    Project Name:
                    <input type="text" name="project_name"><br>
                    <br>
                        
                    </td>
                    </tr>

                    <tr>
                    <td>
                    Project Client:
                    <input type="text" name="project_client"><br>
                    <br>
                        
                    </td>
                    </tr>

                    <tr>
                    <td>
                    Project Leader:
                    <input type="text" name="project_leader"><br>
                    <br>
                        
                    </td>
                    </tr>
                     -->
                    <input type="submit" name="submit" value="Proceed">

                    

                   </form>
                    
                    



                    
                    


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
