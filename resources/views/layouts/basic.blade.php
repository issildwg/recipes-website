<!DOCTYPE html> <!-- html type document -->

<!-- head not rendered to the page but browser might use this info -->
<head>
    <title>@yield('title')</title>
    {{--add page buttons here--}}
    <a href='{{ route('recipes.index') }}'>Recipes</a>
    <a href='{{ route('users.index') }}'>Users</a>

    @if(Auth::check())
        <a href='{{ route('users.show', ['id'=> Auth::getUser()->id ]) }}'>My Profile</a>    
        <a href='{{ route('logout') }}'>Logout</a>
    @else
        <a href='{{ route('login') }}'>Login</a>
    @endif
    
    

</head>

<!-- the yield allows this to be a template info can just be passed into -->
<body>
    <h1>@yield('title')</h1>

    <div>
        @yield('content')
        
        @if (session('message'))
            <p><b>{{session('message')}}</b></p>
        @endif

        @if ($errors->any())
            <div>
                Errors:
                <ul>
                    @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>  
        @endif

        

    </div>
    
</body> 
    
</html>
