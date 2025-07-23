@extends('layouts.home')

@section('title', 'Home Page')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eFeeds Home</title>
        <link rel="stylesheet" href="/css/style.css">
        <style>
            /* Page Load Animations */
            .page-fade-in {
                opacity: 0;
                animation: fadeInPage 1s ease-out forwards;
            }

            @keyframes fadeInPage {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }

            /* Hero Background Animation */
            .hero-bg-card {
                opacity: 0;
                transform: scale(0.95);
                animation: heroSlideIn 1.2s ease-out 0.3s forwards;
            }

            @keyframes heroSlideIn {
                from {
                    opacity: 0;
                    transform: scale(0.95);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            /* Navigation Animation */
            nav {
                opacity: 0;
                transform: translateY(-30px);
                animation: navSlideDown 0.8s ease-out 0.5s forwards;
            }

            @keyframes navSlideDown {
                from {
                    opacity: 0;
                    transform: translateY(-30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* Content Animation */
            .content_p {
                opacity: 0;
                transform: translateX(-50px);
                animation: contentSlideIn 1s ease-out 0.7s forwards;
            }

            @keyframes contentSlideIn {
                from {
                    opacity: 0;
                    transform: translateX(-50px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            /* Title Animation */
            .content_p h1 {
                opacity: 0;
                transform: translateY(30px);
                animation: titleSlideUp 1s ease-out 1s forwards;
            }

            @keyframes titleSlideUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* Paragraph Animation */
            .content_p p {
                opacity: 0;
                transform: translateY(20px);
                animation: paragraphSlideUp 0.8s ease-out 1.3s forwards;
            }

            @keyframes paragraphSlideUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* Button Animation */
            .btn-getstarted {
                opacity: 0;
                transform: translateY(20px) scale(0.95);
                animation: buttonSlideUp 0.8s ease-out 1.6s forwards;
                transition: all 0.3s ease;
            }

            .btn-getstarted:hover {
                transform: translateY(-2px) scale(1.05);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            }

            @keyframes buttonSlideUp {
                from {
                    opacity: 0;
                    transform: translateY(20px) scale(0.95);
                }
                to {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }

            /* Signup Button Animation */
            .btn-signup {
                opacity: 0;
                transform: translateX(30px);
                animation: signupSlideIn 0.8s ease-out 0.8s forwards;
            }

            .btn-signup .btn {
                transition: all 0.3s ease;
            }

            .btn-signup .btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            }

            @keyframes signupSlideIn {
                from {
                    opacity: 0;
                    transform: translateX(30px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            /* Image Animation */
            .image-feature {
                opacity: 0;
                transform: translateX(50px) scale(0.95);
                animation: imageSlideIn 1.2s ease-out 0.9s forwards;
            }

            @keyframes imageSlideIn {
                from {
                    opacity: 0;
                    transform: translateX(50px) scale(0.95);
                }
                to {
                    opacity: 1;
                    transform: translateX(0) scale(1);
                }
            }

            /* Floating Animation for Image */
            .image-feature.loaded {
                animation: imageSlideIn 1.2s ease-out 0.9s forwards, 
                          floatAnimation 6s ease-in-out 2.5s infinite;
            }

            @keyframes floatAnimation {
                0%, 100% {
                    transform: translateY(0) translateX(0) scale(1);
                }
                50% {
                    transform: translateY(-10px) translateX(0) scale(1);
                }
            }

            /* Card Animation */
            .card {
                opacity: 0;
                transform: scale(0.9);
                animation: cardExpand 1s ease-out 0.2s forwards;
            }

            @keyframes cardExpand {
                from {
                    opacity: 0;
                    transform: scale(0.9);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            /* Stagger Animation for Multiple Elements */
            .animate-stagger {
                opacity: 0;
                transform: translateY(30px);
            }

            .animate-stagger.animate {
                animation: staggerSlideUp 0.8s ease-out forwards;
            }

            @keyframes staggerSlideUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* Loading state prevention */
            .preload * {
                animation-duration: 0s !important;
                animation-delay: 0s !important;
                transition-duration: 0s !important;
                transition-delay: 0s !important;
            }
        </style>
    </head>

    <body class="page-fade-in">
        <div class="card"></div>
            <div class="hero-bg-card"></div>
            <nav>
                <div class="btn-signup">
                    <a href="{{ url('register') }}" class="btn">Sign Up</a>
                </div>
            </nav>
            <div class="content">
                <div class="content_p">
                    <h1>Fueling Livestock,<br>Powered by Data.</h1>
                    <p>Optimize feed management with real-time tracking,<br>smart alerts, and data-driven
                        insights,<br>ensuring healthier livestock and more efficient operations.</p>
                    <a href="{{ url('login') }}" class="btn-getstarted">Get Started</a>
                </div>
            </div>
            <img src="image/image.png" class="image-feature">

            <script>
// Page Load Animation Controller
document.addEventListener('DOMContentLoaded', function() {
    // Remove preload class to enable animations
    document.body.classList.remove('preload');
    
    // Add loaded class to image for floating animation
    setTimeout(function() {
        const image = document.querySelector('.image-feature');
        if (image) {
            image.classList.add('loaded');
        }
    }, 2500);

    // Intersection Observer for scroll-triggered animations (if you add more content later)
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, observerOptions);

    // Observe elements for stagger animation
    document.querySelectorAll('.animate-stagger').forEach(el => {
        observer.observe(el);
    });

    // Enhanced hover effects for interactive elements
    const interactiveElements = document.querySelectorAll('.btn, .btn-getstarted');
    
    interactiveElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) scale(1.05)';
        });
        
        element.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
});

// Preloader prevention for faster loading
document.documentElement.classList.add('preload');
window.addEventListener('load', function() {
    document.documentElement.classList.remove('preload');
});

// Navigation Active State Handler for eFeeds Go
document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.nav-link');
    const currentPath = window.location.pathname;
    
    // Function to set active navigation item
    function setActiveNavigation() {
        navLinks.forEach(link => {
            const linkHref = link.getAttribute('href');
            
            // Handle Laravel-style URLs and extract pathname
            const tempAnchor = document.createElement('a');
            tempAnchor.href = linkHref;
            const linkPath = tempAnchor.pathname;
            
            // Remove active class from all links first
            link.classList.remove('active');
            
            // Check if current path matches the link path
            if (currentPath === linkPath || 
                (linkPath !== '/' && currentPath.startsWith(linkPath))) {
                link.classList.add('active');
            }
        });
    }
    
    // Set initial active state when page loads
    setActiveNavigation();
    
    // Handle navigation clicks with enhanced animation
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Remove active class from all navigation links
            navLinks.forEach(navLink => {
                navLink.classList.remove('active');
            });
            
            // Add active class to clicked link with animation
            this.classList.add('active');
            
            // Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
            
            // Optional: Update page title if you have one
            const pageTitle = document.querySelector('.page-title');
            if (pageTitle) {
                const linkText = this.textContent.trim();
                pageTitle.textContent = linkText.toUpperCase();
            }
            
            const linkHref = this.getAttribute('href');
            console.log(`Navigation clicked: ${this.textContent.trim()}`);
        });
    });
});

// Additional function to manually set active navigation
function setActiveNavigationItem(href) {
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        
        if (link.getAttribute('href') === href) {
            link.classList.add('active');
        }
    });
}

// Function to handle active state for different page types
function handlePageNavigation() {
    const currentPath = window.location.pathname;
    
    // Define page mappings for your application
    const pageMapping = {
        '/': 'Home',
        '/dashboard': 'Dashboard',
        '/inventory': 'Inventory',
        '/user_management': 'User Management',
        '/reports': 'Reports',
        '/faq': 'FAQ',
        '/about': 'About Us',
        '/help': 'Help'
    };
    
    // Set active navigation based on current path
    Object.keys(pageMapping).forEach(path => {
        if (currentPath === path || 
            (path !== '/' && currentPath.startsWith(path))) {
            const navLink = document.querySelector(`a[href*="${path}"]`);
            if (navLink) {
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                navLink.classList.add('active');
            }
        }
    });
}

// Enhanced version with hover effects and smooth transitions
function initializeNavigationEffects() {
    const navItems = document.querySelectorAll('.nav-item');
    
    navItems.forEach(item => {
        const link = item.querySelector('.nav-link');
        
        if (link) {
            // Add smooth hover effects
            item.addEventListener('mouseenter', function() {
                if (!link.classList.contains('active')) {
                    link.style.transform = 'translateX(5px)';
                    link.style.transition = 'all 0.3s ease';
                }
            });
            
            item.addEventListener('mouseleave', function() {
                if (!link.classList.contains('active')) {
                    link.style.transform = 'translateX(0)';
                }
            });
        }
    });
}

// Initialize all navigation effects when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    handlePageNavigation();
    initializeNavigationEffects();
});

// For single-page applications or AJAX navigation
function updateActiveNavigation(newPath) {
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        const linkHref = link.getAttribute('href');
        const tempAnchor = document.createElement('a');
        tempAnchor.href = linkHref;
        const linkPath = tempAnchor.pathname;
        
        link.classList.remove('active');
        
        if (newPath === linkPath || 
            (linkPath !== '/' && newPath.startsWith(linkPath))) {
            link.classList.add('active');
        }
    });
}
            </script>
    </body>

    </html>
@endsection