@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', 'User Profile')

@section('content')
    <ul>
        <li>Name: {{$user->name}}</li>
        <li>Email: {{$user->email}}</li>
        <li>Password: {{$user->password}}</li>   
        
        <!-- checks if has created recipes and prints accordingly -->
        {{-- <li>Recipes:    
            @if ($user->recipe_id)
                {{$user->recipe_id->get()}}
            @else
                None created yet!
            @endif
             --}}
        </li>

    </ul>    
    
@endsection <!-- sandwiched like this since there is a lot of content -->
