@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', $recipe->title)


@section('content')

    <form method='POST' action="{{ route('recipes.update', [$recipe->id]) }}">

        @csrf   {{--security precuation (this is a key) - people cant create their own forms, can only come from this site--}}

        <h2>Edit Recipe:</h2>
        
        <p>Title: <input type='text' name='title' 
            value='{{old('title')}}'></p>
        <p>Ingredients: <input type='text' name='ingredients' 
            value='{{old('ingredients')}}'></p>
        <p>Recipe: <input type='text' name='recipe' 
            value='{{old('recipe')}}'></p>
               
        <input type='submit' value='Submit'>

        <a href="{{ route('recipes.index') }}"">Cancel</a>


        <h3>Current Recipe:</h3>
        
        <p>Title: {{$recipe->title}}</p>    <!-- uses the relationship functionality of laravel-->
        <p>Ingredients: </p>
        <UL>
            <LI>{{$recipe->ingredients}}</LI>
        </UL>       

        <p>Recipe: </p>     
        <OL>
            <LI>{{$recipe->recipe}}</LI>
        </OL>        
    </ul>    
   
    </form>

@endsection
