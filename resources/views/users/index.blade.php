@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', 'Users Index')

@section('content')
    <p>Users:</p>
        <ul>
            @foreach ($users as $user)
                <li>{{$user->name}}</li> <!-- lists -->
            @endforeach

        </ul>                  <!-- unordered list -->
        
@endsection <!-- sandwiched like this since there is a lot of content -->
