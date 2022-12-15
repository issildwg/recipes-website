<!DOCTYPE html> <!-- html type document -->

<!-- head not rendered to the page but browser might use this info -->
<head>
    <title>Recipes - @yield('title')</title>
</head>

<!-- the yield allows this to be a template info can just be passed into -->
<body>
    <h1>Recipes - @yield('title')</h1>

    <div>
        @yield('content')
    </div>
    
//</body> 
    
</html>
