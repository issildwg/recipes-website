@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', 'Edit profile')

@section('content')

    <form method='POST' action="{{ route('users.update', [$user->id]) }}">

        @csrf   {{--security precuation (this is a key) - people cant create their own forms, can only come from this site--}}

        
        <p>Name: <input type='text' name='name' 
            value='{{old('name')}}'></p>
        <p>Email: <input type='text' name='email' 
            value='{{old('email')}}'></p>
        <p>Password: <input type='text' name='password' 
            value='{{old('password')}}'></p>
               
        <input type='submit' value='Submit'>

        <a href="{{ route('users.index') }}"">Cancel</a>
   
    </form>

@endsection
