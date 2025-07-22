<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'eFeeds Go')</title>
    
    <!-- Base CSS files -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    
    <!-- Page-specific CSS -->
    @stack('styles')
</head>
<body>
    <div class="container">
        @include('layouts.sidebar')
        
        <div class="main-content">
            @yield('content')
        </div>
    </div>

    <!-- Base JavaScript files -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    <!-- Page-specific JavaScript -->
    @stack('scripts')
</body>
</html>