@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', $recipe->title)

@section('content')
    <ul>
        <p>Author: {{$recipe->postable->name}}</p>    <!-- uses the relationship functionality of laravel-->
        <p>Ingredients: </p>
        {{-- bullet points for ingredients -> write this as while loop? (-> first etc)--}}
        <UL>
            <LI>{{$recipe->ingredients}}</LI>
            <LI>ingredient two</LI>
            <LI>ingredient three</LI>
        </UL>       
        
        <p>Recipe: </p>     
        {{-- numbers for method  -> write this as while loop? (-> first etc)--}}
        <OL>
            <LI>{{$recipe->recipe}}</LI>
            <LI>step two</LI>
            <LI>step three</LI>
        </OL>        
    </ul>    
    
@endsection <!-- sandwiched like this since there is a lot of content -->
