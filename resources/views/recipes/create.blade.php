@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', 'Create Recipe')

@section('content')

    <form method='POST' action="{{ route('recipes.store') }}">

        @csrf   {{--security precuation (this is a key) - people cant create their own forms, can only come from this site--}}

        <p>Title: <input type='text' name='title' ></p>
            {{--find a way to autofill this {$recipe->postable->name}
        <p>Author: <input type='text' name='name' ></p> --}}
        <p>Ingredients: <input type='text' name='ingredients' ></p>
        <p>Recipe: <input type='text' name='recipe' ></p>

        <input type='submit' value='Submit'>

        <a href="{{ route('recipes.index') }}"">Cancel</a>

    </form>

@endsection
