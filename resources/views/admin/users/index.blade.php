@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_user'))

        <p class="bg-danger">{{session('deleted_user')}}</p>

    @endif

    <h1>users</h1>

    <table class="table table-striped">
        <thead>
           <tr>
              <th>Id</th>
               <th>Photo</th>
              <th>Name</th>
              <th>Email</th>
               <th>Role</th>
               <th>Status</th>
              <th>Created at</th>
              <th>Updated at</th>
            </tr>
        </thead>

        @if($users)

            @foreach($users as $user)

                <tr>
                    <td>{{$user->id}}</td>
                    <td><img height="50" src="{{$user->photo? $user->photo->file : 'No photo'}}"></td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}"> {{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach

        @endif


     </table>


@stop