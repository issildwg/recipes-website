@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', $recipe->title)

@section('content')
    <ul>
        <p>Author: {{$recipe->postable->name}}</p>    <!-- uses the relationship functionality of laravel-->
        <p>Ingredients: </p>
        {{-- bullet points for ingredients -> write this as while loop? (-> first etc)--}}
        <UL>
            <LI>{{$recipe->ingredients}}</LI>
        </UL>       
        
        <p>Recipe: </p>     
        {{-- numbers for method  -> write this as while loop? (-> first etc)--}}
        <OL>
            <LI>{{$recipe->recipe}}</LI>
        </OL>        
    </ul>    

    <form action="{{ route('recipes.destroy', ['id'=> $recipe->id] ) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>


    @section('comment section', 'Comments')

    <p>Comments:</p>
    <ul>
    @foreach ($comments as $comment)
        <li>{{$comment->commentableUser->name}} - {{$comment->comment}}</a></li>
    @endforeach
    </ul>   
     
    <p><a href='{{ route('comment.create') }}'>New Comment</a></p>


    
@endsection <!-- sandwiched like this since there is a lot of content -->
