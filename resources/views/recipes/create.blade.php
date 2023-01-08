@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', 'Create Recipe')

@section('content')

    <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf   {{--security precuation (this is a key) - people cant create their own forms, can only come from this site--}}

        <p>Title: <input type='text' name='title' 
            value='{{old('title')}}'></p>
            {{--find a way to autofill this {$recipe->postable->name}
        <p>Author: <input type='text' name='name' ></p> --}}
        <p>Ingredients: <input type='text' name='ingredients' 
            value='{{old('ingredients')}}'></p>
        <p>Recipe: <input type='text' name='recipe' 
            value='{{old('recipe')}}'></p>
        </div>
    

        <div class="mb-3">
            <label class="form-label" for="inputImage">Select Image:</label>
            <input 
                type="file" 
                name="image" 
                id="inputImage"
                class="form-control @error('image') is-invalid @enderror">

            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
       
       


        <p> </p>


        <input type='submit' value='Submit'>

        <a href="{{ route('recipes.index') }}"">Cancel</a>

    </form>

@endsection
