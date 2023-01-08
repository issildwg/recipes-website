@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', 'Users Index')

@section('content')
    <p>Users:</p>
        <ul>
            @foreach ($users as $user)
                <li><a href='/users/{{$user->id}}/posts'>{{$user->name}}</a></li>

            @endforeach

        </ul>
        
@endsection 
