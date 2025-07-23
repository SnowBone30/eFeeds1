@extends('layouts.navbar')
@section('title', 'Home Page')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/about.css">
    </head>

    <body>
        <div class="about_h2"><h2>About Us</h2></div>
        <div class="section">
            <p class="about-text">
                At Feeds Inventory Management, we believe that efficiency in agriculture starts with control
                over your resources. We are dedicated to helping farmers, warehouse managers, and
                agribusinesses manage their animal feed supplies with precision and ease.
            </p>
            <p class="about-text">
                Our platform is designed to simplify the way you track, store, and monitor various types
                of feed — ensuring that your livestock are always well-fed and your operations run smoothly.
                With real-time inventory monitoring, smart alerts, and detailed reporting, our system empowers
                you to make informed decisions, reduce waste, and improve productivity. Whether you're
                managing a small farm or a large-scale feed facility, we're here to support your growth
                one grain at a time.
            </p>
        </div>

        <!-- Footer Card with Contact Section -->
         <div class="contact"><h2>Contact Us</h2></div>
        <div class="footer-card">
            
            <div class="contact-grid">
                <div class="contact-item">
                    <img src="{{ asset('icons/email.png') }}" alt="eFeeds Go Logo" class="contact-icon">
                    <div class="contact-info">

                        <p>support@eFeedsinventory.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <img src="{{ asset('icons/clock.png') }}" alt="eFeeds Go Logo" class="contact-icon">
                    <div class="contact-info">
                        <p>Monday – Friday | 8:00 AM – 5:00 PM</p>

                    </div>
                </div>
                <div class="contact-item">
                    <img src="{{ asset('icons/phone.png') }}" alt="eFeeds Go Logo" class="contact-icon">
                    <div class="contact-info">
                        <p>+63 912 345 6789</p>

                    </div>
                </div>
                <div class="contact-item">
                    <img src="{{ asset('icons/location.png') }}" alt="eFeeds Go Logo" class="contact-icon">
                    <div class="contact-info">

                        <p>eFeeds,Inc<br>Mount Olympus, Biringan City<br>Samar, Philippines</p>
                    </div>
                </div>
            </div>

            <div class="social-links">
                 <img src="{{ asset('icons/facebook.png') }}" class="social-icon">
                <img src="{{ asset('icons/instagram.png') }}" class="social-icon">
                <img src="{{ asset('icons/x.png') }}" class="social-icon">
            </div>
        </div>
        <script>
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
    
    // Handle navigation clicks
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Remove active class from all navigation links
            navLinks.forEach(navLink => {
                navLink.classList.remove('active');
            });
            
            // Add active class to clicked link
            this.classList.add('active');
            
            // Optional: Update page title if you have one
            const pageTitle = document.querySelector('.page-title');
            if (pageTitle) {
                // Extract page name from the link text
                const linkText = this.textContent.trim();
                pageTitle.textContent = linkText.toUpperCase();
            }
            
            // Store active navigation in sessionStorage for persistence
            const linkHref = this.getAttribute('href');
            sessionStorage.setItem('activeNavigation', linkHref);
            
            console.log(`Navigation clicked: ${linkText}`);
        });
    });
    
    // Restore active state from sessionStorage if available
    const storedActiveNav = sessionStorage.getItem('activeNavigation');
    if (storedActiveNav) {
        navLinks.forEach(link => {
            if (link.getAttribute('href') === storedActiveNav) {
                link.classList.add('active');
            }
        });
    }
});

// Additional function to manually set active navigation (useful for dynamic content)
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
    const currentURL = window.location.href;
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
                // Remove active from all
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                // Add active to current
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