@extends('layouts.admin')



@section('content')

    <h1>Categories</h1>

    <div class="col-sm-6">

        {!! Form::open(['method'=>'POST', 'action' => 'AdminCategoriesController@store'] ) !!}

        <div class="form-group">
            {{ Form::label('name', null, ['class' => 'control-label']), 'required' }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}

        </div>


        <div class="form-group">

            {!! Form::submit('Create Categories', ['class'=> 'btn btn-primary col-sm-6']) !!}

        </div>

        {!! Form::close() !!}


    </div>

    <div class="col-sm-6">

        @if($categories)
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Updated at</th>
                </tr>
                </thead>

                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('admin.categories.edit',$category->id)}}">{{$category->name}}</a> </td>
                        <td>{{$category->created_at ? $category->created_at-> diffForHumans() : 'no date'}}</td>
                    </tr>
                @endforeach
            </table>
        @endif

    </div>



@stop