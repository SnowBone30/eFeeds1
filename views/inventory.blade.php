@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eFeeds Go - Inventory</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/inventory.css') }}">

        {{-- Google Fonts - Poppins --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

        {{-- Font Awesome for Icons --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            body {
                opacity: 0;
                transform: translateY(20px);
                transition: opacity 0.5s ease-out, transform 0.5s ease-out;
            }

            body.page-loaded {
                opacity: 1;
                transform: translateY(0);
            }
        </style>

    </head>

    <body>
        <div class="container">
            <!-- Sidebar -->


            <!-- Main Content -->
            <div class="main-content">
                <div class="header">
                    <span>Admin</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </div>

                <!-- Controls -->
                <div class="controls">
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Search inventory..." id="searchInput">
                    </div>
                    <button class="add-btn" onclick="showAddModal()">
                        <i class="fas fa-plus"></i>
                        Add Feed
                    </button>
                </div>

                <!-- Table -->
                <div class="table-container">
                    <table class="table">
                        <thead class="table-header">
                            <tr>
                                <th>Feed ID</th>
                                <th>Feed Name</th>
                                <th>Feed Type</th>
                                <th>Unit</th>
                                <th>Quantity</th>
                                <th>Reorder Level</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <tr>
                                <td>001</td>
                                <td>NutriGrow Premium</td>
                                <td>Grain</td>
                                <td>Sack</td>
                                <td>
                                    <span class="status-indicator status-high"></span>
                                    150
                                </td>
                                <td>50</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit-btn" onclick="showEditModal()">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="action-btn delete-btn" onclick="showDeleteModal()">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>ProGrain Elite</td>
                                <td>Pellet</td>
                                <td>Bag</td>
                                <td>
                                    <span class="status-indicator status-medium"></span>
                                    35
                                </td>
                                <td>30</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit-btn" onclick="showEditModal()">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="action-btn delete-btn" onclick="showDeleteModal()">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>ChickStart Plus</td>
                                <td>Crumble</td>
                                <td>Sack</td>
                                <td>
                                    <span class="status-indicator status-low"></span>
                                    12
                                </td>
                                <td>25</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit-btn" onclick="showEditModal()">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="action-btn delete-btn" onclick="showDeleteModal()">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>LayerMax Pro</td>
                                <td>Mash</td>
                                <td>Kg</td>
                                <td>
                                    <span class="status-indicator status-high"></span>
                                    280
                                </td>
                                <td>100</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit-btn" onclick="showEditModal()">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="action-btn delete-btn" onclick="showDeleteModal()">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>005</td>
                                <td>VitaBoost Supplement</td>
                                <td>Supplement</td>
                                <td>Bottle</td>
                                <td>
                                    <span class="status-indicator status-medium"></span>
                                    18
                                </td>
                                <td>15</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit-btn" onclick="showEditModal()">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="action-btn delete-btn" onclick="showDeleteModal()">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add/Edit Feed Modal -->
        <div id="feedModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Add New Feed</h2>
                    <button class="close-btn" onclick="closeModal('feedModal')">&times;</button>
                </div>
                <div class="modal-body">
                    <div id="alertContainer"></div>
                    <form id="feedForm">
                        <div class="form-group">
                            <label for="feedName" class="form-label">Feed Name *</label>
                            <input type="text" id="feedName" class="form-input" placeholder="Enter feed name" required>
                        </div>

                        <div class="form-group">
                            <label for="feedType" class="form-label">Feed Type *</label>
                            <select id="feedType" class="form-select" required>
                                <option value="">Select Type</option>
                                <option value="Grain">Grain</option>
                                <option value="Pellet">Pellet</option>
                                <option value="Crumble">Crumble</option>
                                <option value="Mash">Mash</option>
                                <option value="Supplement">Supplement</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="feedUnit" class="form-label">Unit *</label>
                            <select id="feedUnit" class="form-select" required>
                                <option value="">Select Unit</option>
                                <option value="Sack">Sack</option>
                                <option value="Bag">Bag</option>
                                <option value="Kg">Kg</option>
                                <option value="Bottle">Bottle</option>
                                <option value="Lbs">Lbs</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="feedQty" class="form-label">Quantity *</label>
                            <input type="number" id="feedQty" class="form-input" placeholder="Enter quantity" min="0"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="reorderLevel" class="form-label">Reorder Level *</label>
                            <input type="number" id="reorderLevel" class="form-input" placeholder="Enter reorder level"
                                min="0" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel" onclick="closeModal('feedModal')">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Feed</button>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div id="deleteModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Confirm Delete</h2>
                    <button class="close-btn" onclick="closeModal('deleteModal')">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this feed item? This action cannot be undone.</p>
                    <p><strong>Feed: NutriGrow Premium</strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel" onclick="closeModal('deleteModal')">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
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
            // Search functionality (UI only)
            document.getElementById('searchInput').addEventListener('input', function (e) {
                const searchTerm = e.target.value.toLowerCase();
                const rows = document.querySelectorAll('.table-body tr');

                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });

            // Modal Functions
            function showModal(modalId) {
                const modal = document.getElementById(modalId);
                modal.style.display = 'flex';
                setTimeout(() => modal.classList.add('show'), 10);
            }

            function closeModal(modalId) {
                const modal = document.getElementById(modalId);
                modal.classList.remove('show');
                setTimeout(() => modal.style.display = 'none', 300);
            }

            function showAddModal() {
                document.getElementById('feedForm').reset();
                document.querySelector('.modal-title').textContent = 'Add New Feed';
                showModal('feedModal');
            }

            function showEditModal() {
                // Pre-fill form with sample data for demonstration
                document.getElementById('feedName').value = 'NutriGrow Premium';
                document.getElementById('feedType').value = 'Grain';
                document.getElementById('feedUnit').value = 'Sack';
                document.getElementById('feedQty').value = '150';
                document.getElementById('reorderLevel').value = '50';
                document.querySelector('.modal-title').textContent = 'Edit Feed';
                showModal('feedModal');
            }

            function showDeleteModal() {
                showModal('deleteModal');
            }

            // Close modals when clicking outside
            window.onclick = function (event) {
                const modals = document.querySelectorAll('.modal');
                modals.forEach(modal => {
                    if (event.target === modal) {
                        closeModal(modal.id);
                    }
                });
            }

            // Close modals with Escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    const modals = document.querySelectorAll('.modal');
                    modals.forEach(modal => {
                        if (modal.classList.contains('show')) {
                            closeModal(modal.id);
                        }
                    });
                }
            });

            // Navigation hover effects
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('mouseenter', function () {
                    this.style.transform = 'translateX(8px)';
                });

                link.addEventListener('mouseleave', function () {
                    if (!this.classList.contains('active')) {
                        this.style.transform = 'translateX(0)';
                    }
                });
            });

            // Button click animations
            document.querySelectorAll('.btn').forEach(button => {
                button.addEventListener('click', function () {
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                });
            });

            // Initialize page
            document.addEventListener('DOMContentLoaded', function () {
                console.log('eFeeds Go Inventory - Design Mode Loaded');
            });
        </script>
        <script>
            window.addEventListener('load', () => {
                document.body.classList.add('page-loaded');
            });
        </script>

    </body>

    </html>
@endsection