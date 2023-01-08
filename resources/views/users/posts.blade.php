@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', $user->name)

@section('content')
        
        <!-- checks if has created recipes and prints accordingly -->
        <p>Recipes posted: 
            <ul>   {{--adding this makes the list cascade--}}
            @if ($recipes)
                @foreach ($recipes as $recipe)
                    <li><a href='/recipes/{{$recipe->id}}'>{{$recipe->title}}</a></li>
                @endforeach

            @endif
            </ul>
        </p>

        <p>Comments posted: 
            <ul>  
            @if ($comments)

                @foreach ($comments as $comment)
                    <li>{{$comment->commentableRecipe->title}} - {{$comment->comment}}</li>
                @endforeach

            @endif   
    
@endsection 
