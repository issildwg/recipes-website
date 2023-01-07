@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', 'Create comment')

@section('content')

    <form method='POST' action="{{ route('comment.store') }}">

        @csrf   {{--security precuation (this is a key) - people cant create their own forms, can only come from this site--}}

        <p>Recipe: 
            <select name="recipe">
                @foreach ($recipes as $recipe)
                    <option value="{{$recipe->id}}"
                        @if ($recipe->id == old('recipe'))
                            selected="selected"
                        @endif>
                        {{$recipe->title}}
                    </option>
                @endforeach
            </select>
        </p>
        
        <p>Comment: <input type='text' name='comment' 
            value='{{old('comment')}}'></p>
               
        <input type='submit' value='Submit'>

        <a href="{{ route('recipes.index') }}"">Cancel</a>
   
    </form>

@endsection
