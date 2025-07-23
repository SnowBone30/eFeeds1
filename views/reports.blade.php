@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eFeeds Go - Reports</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/reports.css') }}">

        {{-- Font Awesome for Icons --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    </head>

    <body>
        <div class="container">


            <div class="main-content">

                <div class="header">
                    <h1 class="page-title">Reports</h1>

                    <div class="admin-avatar"> </div>
                    <span>Admin</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </div>
                <div class="reports-section">
                    <div class="filters-container">
                        <div class="date-range">
                            <label>Date Range:</label>
                            <input type="date" class="date-input" placeholder="from:">
                            <input type="date" class="date-input" placeholder="to:">
                        </div>
                        <button class="print-btn">
                            🖨️ Print Report
                        </button>
                    </div>

                    <div class="table-container">
                        <table class="data-table">
                            <thead class="table-header">
                                <tr>
                                    <th>Feed ID</th>
                                    <th>Feed Name</th>
                                    <th>Feed Type</th>
                                    <th>Unit</th>
                                    <th>Quantity</th>
                                    <th>Reorder Level</th>
                                    <th>Date Ordered</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-row">
                                    <td class="table-cell">1</td>
                                    <td class="table-cell">NutriE</td>
                                    <td class="table-cell">Grain</td>
                                    <td class="table-cell">Sack</td>
                                    <td class="table-cell">100</td>
                                    <td class="table-cell">50</td>
                                    <td class="table-cell">9/9/1999</td>
                                </tr>
                                <tr class="table-row">
                                    <td colspan="7" class="empty-state">
                                        <div class="empty-icon">📊</div>
                                        <div class="empty-message">No additional feed records</div>
                                        <div class="empty-submessage">Add more feed inventory to see additional entries here
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
            // Navigation functionality
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', function (e) {
                    const page = this.getAttribute('data-page');

                    // Handle logout separately
                    if (page === 'logout') {
                        if (confirm('Are you sure you want to logout?')) {
                            // In a real application, you would redirect to your logout route
                            alert('Logging out... (In real app, this would redirect to login page)');
                            // window.location.href = '/logout'; // Uncomment for real app
                        }
                        return;
                    }

                    // Update active states
                    document.querySelectorAll('.nav-link').forEach(nav => nav.classList.remove('active'));
                    this.classList.add('active');

                    // Update page title
                    const pageTitle = document.querySelector('.page-title');
                    switch (page) {
                        case 'dashboard':
                            pageTitle.textContent = 'DASHBOARD';
                            // In a real app: window.location.href = '/dashboard';
                            alert('Navigating to Dashboard... (In real app, this would redirect)');
                            break;
                        case 'inventory':
                            pageTitle.textContent = 'INVENTORY';
                            // In a real app: window.location.href = '/inventory';
                            alert('Navigating to Inventory... (In real app, this would redirect)');
                            break;
                        case 'users':
                            pageTitle.textContent = 'USER MANAGEMENT';
                            // In a real app: window.location.href = '/users';
                            alert('Navigating to User Management... (In real app, this would redirect)');
                            break;
                        case 'reports':
                            pageTitle.textContent = 'REPORTS';
                            // Already on reports page
                            break;
                    }
                });
            });

            // Print functionality
            document.querySelector('.print-btn').addEventListener('click', function () {
                // Create print-friendly version
                const printContent = document.querySelector('.table-container').cloneNode(true);
                const printWindow = window.open('', '_blank');
                printWindow.document.write(`
                    <html>
                        <head>
                            <title>eFeeds Go - Reports</title>
                            <style>
                                body { font-family: Inter, sans-serif; margin: 20px; }
                                table { width: 100%; border-collapse: collapse; }
                                th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
                                th { background: #7C9185; color: white; }
                                .empty-state { text-align: center; font-style: italic; color: #666; }
                            </style>
                        </head>
                        <body>
                            <h1>eFeeds Go - Feed Inventory Report</h1>
                            <p>Generated on: ${new Date().toLocaleDateString()}</p>
                            ${printContent.innerHTML}
                        </body>
                    </html>
                `);
                printWindow.document.close();
                printWindow.print();
            });

            // Date filtering functionality
            const dateInputs = document.querySelectorAll('.date-input');
            dateInputs.forEach(input => {
                input.addEventListener('change', function () {
                    console.log('Date filter updated:', this.value);
                    // Add actual filtering logic here
                    // This would typically filter the table data based on the selected date range
                });
            });

            // Table row interactions
            document.querySelectorAll('.table-row').forEach(row => {
                row.addEventListener('click', function () {
                    if (!this.querySelector('.empty-state')) {
                        document.querySelectorAll('.table-row').forEach(r => r.classList.remove('selected'));
                        this.classList.add('selected');
                        console.log('Selected row:', this.cells[0].textContent);
                    }
                });
            });

            // Sample data for demonstration
            const sampleData = [
                { id: 2, name: 'ProGrain Plus', type: 'Pellets', unit: 'Kg', qty: 250, reorder: 100, date: '10/15/2024' },
                { id: 3, name: 'VitaFeed', type: 'Mash', unit: 'Sack', qty: 75, reorder: 30, date: '11/01/2024' },
                { id: 4, name: 'SuperNutri', type: 'Grain', unit: 'Ton', qty: 5, reorder: 2, date: '11/10/2024' }
            ];

            // Function to add more sample data (for demo purposes)
            function loadMoreData() {
                const tbody = document.querySelector('tbody');
                const emptyRow = tbody.querySelector('.empty-state').parentElement;

                sampleData.forEach(feed => {
                    const row = document.createElement('tr');
                    row.className = 'table-row';
                    row.innerHTML = `
                        <td class="table-cell">${feed.id}</td>
                        <td class="table-cell">${feed.name}</td>
                        <td class="table-cell">${feed.type}</td>
                        <td class="table-cell">${feed.unit}</td>
                        <td class="table-cell">${feed.qty}</td>
                        <td class="table-cell">${feed.reorder}</td>
                        <td class="table-cell">${feed.date}</td>
                    `;
                    tbody.insertBefore(row, emptyRow);
                });
            }

            // Uncomment to load sample data
            // setTimeout(loadMoreData, 2000);
        </script>

    </body>

    </html>

@endsection