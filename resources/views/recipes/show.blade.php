@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', $recipe->title)

@section('content')
    <ul>
        <li>Author: {{$recipe->postable->name}}</li>    <!-- uses the relationship functionality of laravel-->
        <li>Ingredients: {{$recipe->ingredients}}</li>
        <li>Recipe: {{$recipe->recipe}}</li>      
    </ul>    
    
@endsection <!-- sandwiched like this since there is a lot of content -->
