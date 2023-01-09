@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', 'User Profile')

@section('content')
        <p><a href='{{ route('users.edit', [$user->id]) }}'>Edit profile</a></p>

    
        <p>Name: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
        <p>Password: {{$user->password}}</p>   
        
        <!-- checks if has created recipes and prints accordingly -->
        <p>Recipes: 
            <ul>   {{--adding this makes the list cascade--}}
            @if ($recipes)

                @foreach ($recipes as $recipe)
                    <li><a href='/recipes/{{$recipe->id}}'>{{$recipe->title}}</a></li>
                @endforeach

{{--            this line isnt implemented yet - user 4 --}}
            @else
                None created yet!
            @endif
            </ul>
            
        </p>

        <p><a href='{{ route('recipes.create') }}'>New Recipe</a></p>

    
@endsection <!-- sandwiched like this since there is a lot of content -->
