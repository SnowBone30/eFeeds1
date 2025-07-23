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
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="login-page-container">
        <div class="login-card">
            <div class="login-header">
                <div>
                    <h1>Create Account</h1>

                </div>
            </div>

            <form class="login-form">
                <div class="input-group">
                    <input type="text" placeholder="Enter Username">
                    <i class="fas fa-user icon"></i>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Enter Password">
                    <i class="fas fa-lock icon"></i>
                </div>
                <a href="{{ url('/welcome') }}" class="login-button">Login</a>
            </form>

        </div>
    </div>
</body>
</html>