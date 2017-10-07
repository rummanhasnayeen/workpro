@extends('profile.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name }}</div>

                <div class="panel-body">
                  <div class="row" >
                      <form class="form-horizontal" method="POST" action="{{ url('/addpost') }}">
                        {{ csrf_field() }}




                        


                        <div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
                            <label for="post_title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="post_title" type="text" class="form-control" name="post_title" value="{{ old('post_title') }}" required autofocus>

                                @if ($errors->has('post_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('post_body') ? ' has-error' : '' }}">
                            <label for="post_body" class="col-md-4 control-label">Post</label>

                            <div class="col-md-6">
                                <textarea id="post_body" rows="8" type="text" class="form-control" name="post_body" value="{{ old('post_body') }}" required autofocus></textarea>

                                @if ($errors->has('post_body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('catagory_id') ? ' has-error' : '' }}">
                            <label for="catagory_id" class="col-md-4 control-label">Catagory</label>

                            <div class="col-md-6">
                                <select id="catagory_id" type="catagory_id" class="form-control" name="catagory_id" value="{{ old('catagory_id') }}" required autofocus>
                                    <option value="" >Select</option>
                                   @if(count($catagories)>0)
                                   @foreach($catagories->all() as $catagory)
                                   <option value="{{$catagory->id}}" >{{$catagory->catagory}}</option>
                                   @endforeach
                                   @endif


                                </select>

                                @if ($errors->has('catagory_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('catagory_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-large btn-block">
                                    Publish
                                </button>
                            </div>
                        </div>
                    </form>


                  </div>




                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
