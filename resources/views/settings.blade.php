@extends('layouts.master_backend')
@section('title', 'Settings')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
    <img src="/images/uploads/avatars/{{  $user->avatar }}" style="width:150px; height: 150px; float:left; border-radius: 50%; margin-right:25px">
    <h2>{{ $user->name}}'s Profile</h2>
    <form enctype="multipart/form-data" action="{{route('avatar_upload')}}" method="post">
          <label> Update Profile Image </label>
          <input type="file" name="avatar">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" class="btn btn-sm btn-primary">
    </form>
    </div>
</div>

<div class="row" style="padding-top: 30px">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header no-border">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">Change Your Password</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="position-relative mb-4">
                    <p><strong>*Enter your normal text password*</strong></p>
                    {!! Form::model($user, ['method'=>'PATCH','route'=>['change_password'], 'autocomplete' => 'off']) !!}
                    {{Form::label('password','Password')}}
                    {{Form::text('password', $user->password,['class'=>'form-control'])}}<br>
                    {{Form::submit('Save Changes', ['class' => 'form-control btn btn-success']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection