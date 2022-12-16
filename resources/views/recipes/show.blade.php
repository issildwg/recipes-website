@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', 'Recipe show view')

@section('content')
    <ul>
        <li>Dish: {{$recipe->title}}</li>
        <li>Author: {{$recipe->postable->name}}</li>   
        <li>Ingredients: {{$recipe->ingredients}}</li>
        <li>Recipe: {{$recipe->recipe}}</li>      
    </ul>    
    
@endsection <!-- sandwiched like this since there is a lot of content -->
