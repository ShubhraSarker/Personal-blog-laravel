@extends('layouts.admin')

@section('content')

    <h1>Create Post</h1>

    <div class="row">


    {!! Form::open(['method'=>'POST', 'action' => 'AdminPostsController@store', 'files'=>true] ) !!}

    <div class="form-group">
        {{ Form::label('title', null, ['class' => 'control-label']), 'required' }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}

    </div>


    <div class="form-group">
        {{ Form::label('category_id', null, ['class' => 'control-label']), 'required' }}
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

    </div>

    <div class="form-group">
        {{ Form::label('photo_id', null, ['class' => 'control-label']), 'required' }}
        {{ Form::file('photo_id', null, ['class' => 'form-control']) }}

    </div>

    <div class="form-group">
        {{ Form::label('body', null, ['class' => 'control-label']), 'required' }}
        {{ Form::textarea('body', null, ['class' => 'form-control']) }}

    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=> 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    </div>

    <div class="row">
        @include('includes.form-error');
    </div>

@stop