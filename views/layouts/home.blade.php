<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'eFeeds Go')</title>
    
    <!-- Base CSS files -->
    <link rel="stylesheet" href="{{ asset('css/navbar_home.css') }}">
    
    <!-- Page-specific CSS -->
    @stack('styles')
</head>
<body>
    <div class="hero">
        @include('layouts.navbar_child')
        
        <div class="">
            @yield('content')
        </div>
    </div>

    <!-- Base JavaScript files -->
</body>
</html>