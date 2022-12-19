@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', 'User Profile')

@section('content')
    <ul>
        <li>Name: {{$user->name}}</li>
        <li>Email: {{$user->email}}</li>
        <li>Password: {{$user->password}}</li>   
        
        <!-- checks if has created recipes and prints accordingly -->

        <li>Recipes:    
            @if ($recipes)
{{--            <li><a href='{{ route('recipes.show', ['id' => $recipe->id])}}'>{{$recipe->title}}</a></li> <!-- lists --> {{-- the <a href...> creates a link--}}
                {{--check lectures from 8-15 nov--}}
                {{$recipes}}
            @else
                None created yet!
            @endif
             
        </li>

    </ul>    
    
@endsection <!-- sandwiched like this since there is a lot of content -->
