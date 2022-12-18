@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', 'Recipes Index')

@section('content')
    <p>Recipes:</p>
        <ul>
            @foreach ($recipes as $recipe)
                <li><a href='{{ route('recipes.show', ['id' => $recipe->id])}}'>{{$recipe->title}}</a></li> <!-- lists --> {{-- the <a href...> creates a link--}}
            @endforeach

        </ul>                  <!-- unordered list -->

@endsection <!-- sandwiched like this since there is a lot of content -->
