@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', 'Recipe show view')

@section('content')
    {{$recipe}}
    
@endsection <!-- sandwiched like this since there is a lot of content -->
