@extends('profile.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name }}</div>

                <div class="panel-body">
                    You are not Authorized.Please contact your project leader.
                    



                    
                    


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
