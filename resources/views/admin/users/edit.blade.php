@extends('layouts.admin')

@section('content')

    <h1>Edit Users</h1>

    <div class="col-sm-9">

        <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/250x250'}}" alt="" class="img-responsive img-rounded">

    </div>


    <div class="col-sm-9">


        {!! Form::model($user,['method'=>'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files'=>true] ) !!}

        <div class="form-group">
            {{ Form::label('name', null, ['class' => 'control-label']), 'required' }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', null, ['class' => 'control-label']), 'required' }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('role_id', null, ['class' => 'control-label']), 'required' }}
            {{ Form::select('role_id',$roles, null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('status', null, ['class' => 'control-label'], 'required') }}
            {{ Form::select('status',array(1=> 'active', 0=>'Not active'), null , ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('photo_id', null, ['class' => 'control-label']), 'required' }}
            {{ Form::file('photo_id',null, ['class' => 'form-control']) }}
        </div>


        <div class="form-group">
            {{ Form::label('password', null, ['class' => 'control-label'],'required') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>

        <div class="form-group">

            {!! Form::submit('Update User', ['class'=> 'btn btn-primary col-sm-6']) !!}

        </div>

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action' => ['AdminUsersController@destroy',$user->id]]) !!}

        <div class="form-group">

            {!! Form::submit('Delete User', ['class'=> 'btn btn-danger col-sm-6']) !!}

        </div>


        {!! Form::close() !!}


        @include('includes.form-error');

    </div>


@stop