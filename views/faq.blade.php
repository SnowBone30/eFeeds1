@extends('layouts.navbar')

@section('title', 'Home Page')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eFeeds Home</title>
        <link rel="stylesheet" href="/css/faq.css">
    </head>

    <body>
        

            <div class="content">
                <div class="content_p">
                    <h1>FAQ</h1>
                    <h2> What is the Feeds Inventory Management System?</h2>
                    <p>It’s a digital platform designed to help you track, manage, and monitor animal feed inventory
                        including stock levels, usage logs, expiry dates, and supplier information all in one place.</p>
                </div>
                <div class="content_p2">
                    <h2> Who can use this system?</h2>
                    <p>The system is ideal for farm owners, warehouse managers, feed mill operators, and agricultural
                        businesses of any size that need to manage feed stocks effectively.</p>
                </div>

                <div class="content_p3">
                    <h2> Is there a reporting feature?</h2>
                    <p>Yes. You can generate inventory summaries, usage history, and export reports in PDF or Excel
                        format for review and decision-making.</p>
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