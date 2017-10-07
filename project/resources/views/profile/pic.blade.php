@extends('profile.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name }}</div>

                <div class="panel-body">
                   <!--  Welcome to your profile! --><br>

                    <img src="{{url('../')}}/public/img/{{Auth::user()->pic}}" width="110px" height="110px"/><br>
                    <br>
                    <hr>
                    <form action="{{url('/')}}/uploadPhoto" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="file" name="pic" class="form-control"/>
                        <input type="submit" class="btn btn-success" name="btn"/>

                    </form>




                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
