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
        
        <p>  </p>

    
        @if($recipe->image != null)

            <img src="{{ ($recipe->image) }}" class="card-img-top">
        @endif

        <p>Recipe: </p>     
        {{-- numbers for method  -> write this as while loop? (-> first etc)--}}
        <OL>
            <LI>{{$recipe->recipe}}</LI>
        </OL>        
    </ul>    


    @if(Auth::check())
        <p><a href='{{ route('recipes.edit', [$recipe->id]) }}'>Edit recipe</a></p>

        <form method="POST"
            action="{{ route('recipes.destroy', ['id'=> $recipe->id] ) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endif


  
    



    @section('comment section', 'Comments')

    <h3>Comments:</h3>
    <ul>
    @foreach ($comments as $comment)
        <li>{{$comment->commentableUser->name}} - {{$comment->comment}}</a></li>
    @endforeach
    </ul>   
     
    <p><a href='{{ route('comment.create') }}'>New Comment</a></p>



    
@endsection <!-- sandwiched like this since there is a lot of content -->
