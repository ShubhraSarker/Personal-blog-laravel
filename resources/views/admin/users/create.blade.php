@extends('layouts.admin')

@section('content')

    <h1>Create Users</h1>

    {!! Form::open(['method'=>'POST', 'action' => 'AdminUsersController@store', 'files'=>true] ) !!}

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
            {{ Form::select('role_id',[''=>'Choose Option']+$roles, null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('status', null, ['class' => 'control-label'], 'required') }}
            {!!Form::select('is_active', array(1 => 'Active', 0=> 'Not Active'), 0 , ['class'=>'form-control'])!!}
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

            {!! Form::submit('Create User', ['class'=> 'btn btn-primary']) !!}

        </div>

    {!! Form::close() !!}


    @include('includes.form-error');
@stop