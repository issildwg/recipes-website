{{--<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


@extends('layouts.basic')   <!-- going into layout folder and gets migrations -->

@section('title', 'Dashboard')

@section('content')
    <p>Users:</p>
        <ul>
            @foreach ($users as $user)
                <li>{{$user->name}}</li> <!-- lists -->
            @endforeach

        </ul>                  <!-- unordered list -->
        
@endsection <!-- sandwiched like this since there is a lot of content -->

