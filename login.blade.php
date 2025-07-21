<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eFeeds Go - Login</title>
    {{-- Google Fonts - Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    {{-- Font Awesome for Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- Custom Login CSS --}}
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-page-container">
        <div class="login-card">
            <div class="login-header">
                <img src="{{ asset('image/logo.png') }}" alt="eFeeds Go Logo" class="logo">
                <div>
                    <h1>eFeeds Go.</h1>
                    <p>Ready. Set. Feed.</p>
                </div>
            </div>

            <form class="login-form">
                <div class="input-group">
                    <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="Enter Username">
                </div>
                <div class="input-group">
                    <i class="fas fa-lock icon"></i>
                    <input type="password" placeholder="Enter Password">
                </div>
                <button type="submit" class="login-button">Login</button>
            </form>

            <p class="signup-link">Don't have account? <a href="{{ url('register') }}">Sign Up</a></p>
        </div>
    </div>
</body>
</html>