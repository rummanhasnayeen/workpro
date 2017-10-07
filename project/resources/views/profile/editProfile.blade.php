@extends('profile.master')

@section('content')


<div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name }}</div>

                <div class="panel-body">
                    Edit your profile<br>

                    <img src="{{url('../')}}/public/img/{{Auth::user()->pic}}" width="80px" height="80px" class="img-circle" /><br>
                    <a href="{{url('/')}}/changePhoto" >Change Image</a><br>

                    <input type="text" name="city" value="{{Auth::user()->city}}"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
