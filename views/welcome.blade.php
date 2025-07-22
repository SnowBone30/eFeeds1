<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eFeeds Home</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="hero">
        <div class="hero-bg-card"></div>
        <nav>
            <img src="image/logo.png" class="logo">
            <ul>
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            <div class="btn-signup">
                <a href="{{ url('register') }}" class="btn">Sing Up</a>
            </div>
        </nav>
        <div class="content">
            <div class="content_p">
            <h1>Fueling Livestock,<br>Powered by Data.</h1>
            <p>Optimize feed management with real-time tracking,<br>smart alerts, and data-driven insights,<br>ensuring healthier livestock and more efficient operations.</p>
            <a href="{{ url('login') }}" class="btn btn-getstarted">Get Started</a>
            </div>
        </div>
        <img src="image/image.png" class="image-feature">
    </div>
</body>
</html>
