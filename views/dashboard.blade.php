@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eFeeds Go - Dashboard</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

        {{-- Google Fonts - Poppins --}}
    </head>

    <body>
        <div class="container">
            <!-- Sidebar -->

            <!-- Main Content -->
            <div class="main-content">
                <div class="header">
                    <h1 class="page-title">DASHBOARD</h1>

                    <div class="admin-avatar"> </div>
                    <span>Admin</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </div>

                <!-- Metrics Cards -->
                <div class="metrics-grid">
                    <div class="metric-card">
                        <div class="metric-icon sales">₱</div>
                        <div style="color: #718096; font-size: 14px; margin-bottom: 8px;">Total Sales</div>
                        <div class="metric-value">₱10,000.00</div>
                        <div class="metric-change">+20% Than last month</div>
                    </div>

                    <div class="metric-card">
                        <div class="metric-icon stock">📦</div>
                        <div style="color: #718096; font-size: 14px; margin-bottom: 8px;">Low Stock Feeds</div>
                        <div class="metric-value">3</div>
                        <div class="metric-change negative">-5% Than last month</div>
                    </div>

                    <div class="metric-card">
                        <div class="metric-icon feeds">🛒</div>
                        <div style="color: #718096; font-size: 14px; margin-bottom: 8px;">Total Feeds Sold</div>
                        <div class="metric-value">743</div>
                        <div class="metric-change">+3% Than last month</div>
                    </div>
                </div>

                <!-- Chart Section -->
                <h2 class="header_salespurchase">Sales & Purchases</h2>
                <div class="chart-section">
                    <div class="chart-container">
                        <canvas id="salesChart" class="chart-canvas"></canvas>
                    </div>
                    <div class="chart-legend">
                        <div class="legend-item">
                            <div class="legend-color legend-target"></div>
                            Sales Target
                        </div>
                        <div class="legend-item">
                            <div class="legend-color legend-sales"></div>
                            Sales
                        </div>
                        <div class="legend-item">
                            <div class="legend-color legend-purchases"></div>
                            Purchases
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const navLinks = document.querySelectorAll('.nav-link');
                const currentPath = window.location.pathname;

                navLinks.forEach(link => {
                    const linkHref = link.getAttribute('href');

                    // Laravel-style URL handling (strip host for comparison)
                    const tempAnchor = document.createElement('a');
                    tempAnchor.href = linkHref;
                    const linkPath = tempAnchor.pathname;

                    if (currentPath === linkPath || currentPath.startsWith(linkPath)) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            });
        </script>


        <script>
            // Chart.js configuration
            const ctx = document.getElementById('salesChart').getContext('2d');
            const salesChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    datasets: [{
                        label: 'Sales Target',
                        data: [3500, 4200, 2800, 3800, 4500, 4200],
                        backgroundColor: '#4299e1',
                        borderRadius: 4,
                        maxBarThickness: 30
                    }, {
                        label: 'Sales',
                        data: [4200, 5200, 2200, 4200, 2800, 3500],
                        backgroundColor: '#e53e3e',
                        borderRadius: 4,
                        maxBarThickness: 30
                    }, {
                        label: 'Purchases',
                        data: [3200, 3000, 3200, 1800, 2500, 4000],
                        backgroundColor: '#9f7aea',
                        borderRadius: 4,
                        maxBarThickness: 30
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 7000,
                            ticks: {
                                stepSize: 1000,
                                callback: function (value) {
                                    return value / 1000 + 'k';
                                }
                            },
                            grid: {
                                color: '#f1f5f9'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    elements: {
                        bar: {
                            borderWidth: 0
                        }
                    }
                }
            });

            // Add hover effects and interactions
            document.querySelectorAll('.metric-card').forEach(card => {
                card.addEventListener('mouseenter', function () {
                    this.style.transform = 'translateY(-2px)';
                    this.style.boxShadow = '0 4px 20px rgba(0,0,0,0.12)';
                });

                card.addEventListener('mouseleave', function () {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '0 2px 12px rgba(0,0,0,0.08)';
                });
            });

            // Simulate real-time data updates
            function updateMetrics() {
                const salesValue = document.querySelector('.metric-value');
                const currentValue = parseInt(salesValue.textContent.replace(/[₱,]/g, ''));
                const variation = Math.floor(Math.random() * 200) - 100;
                const newValue = Math.max(0, currentValue + variation);

                salesValue.textContent = `₱${newValue.toLocaleString()}.00`;
            }

            function toggleSidebar() {
                const sidebar = document.querySelector('.sidebar');
                const overlay = document.querySelector('.mobile-overlay');

                sidebar.classList.toggle('active');
                overlay.classList.toggle('active');
            }

            function closeSidebar() {
                const sidebar = document.querySelector('.sidebar');
                const overlay = document.querySelector('.mobile-overlay');

                sidebar.classList.remove('active');
                overlay.classList.remove('active');
            }

            // Handle navigation clicks and active state
            document.addEventListener('DOMContentLoaded', function () {
                const navLinks = document.querySelectorAll('.nav-link');
                const pageTitle = document.querySelector('.page-title');

                navLinks.forEach(link => {
                    link.addEventListener('click', function (e) {


                        // Remove active class from all links
                        navLinks.forEach(navLink => {
                            navLink.classList.remove('active');
                        });

                        // Add active class to clicked link
                        this.classList.add('active');

                        // Update page title
                        const pageName = this.dataset.page;
                        const linkText = this.querySelector('span').textContent;
                        pageTitle.textContent = linkText;

                        // Close sidebar on mobile after selection
                        if (window.innerWidth <= 768) {
                            closeSidebar();
                        }

                        console.log(`Navigated to: ${pageName}`);
                    });
                });
            });

            // Set initial active state based on current page
            function setActivePage(pageName) {
                const navLinks = document.querySelectorAll('.nav-link');
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.dataset.page === pageName) {
                        link.classList.add('active');
                    }
                });
            }

            // Update metrics every 10 seconds (optional)
            // setInterval(updateMetrics, 10000);
        </script>


    </body>

    </html>
@endsection