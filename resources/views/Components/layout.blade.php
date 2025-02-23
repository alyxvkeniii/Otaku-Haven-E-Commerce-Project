<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibimeow Otaku Haven</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <button id="close-sidebar" class="close-btn">✖</button>
        <div class="logo">
            <img src="{{ asset('css/bibimeow.jpg') }}" alt="Bibimeow Logo">
        </div>
        <a href="#"><i class="fas fa-home"></i> Home</a>
        <a href="#"><i class="fas fa-store"></i> Shop</a>
        <a href="#"><i class="fas fa-th-large"></i> Categories</a>
        <a href="#"><i class="fas fa-info-circle"></i> About</a>
        <a href="#"><i class="fas fa-envelope"></i> Contact</a>
        <a href="#"><i class="fas fa-cog"></i> Settings</a>
    </div>

    <!-- Header -->
    <header class="header">
        <button class="nav-toggle"><i class="fas fa-bars"></i></button>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search...">
            <button class="search-button"><i class="fas fa-search"></i></button>
        </div>
        <div class="header-buttons">
            <button class="button"><i class="fas fa-box"></i> Track Order</button>
            <span class="cart-icon" id="cart-btn"><i class="fas fa-shopping-cart"></i></span>
            <button class="login-btn" id="user-btn">Login & Signup</button>
        </div>
    </header>

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        © 2025 Bibimeow Otaku Haven. All Rights Reserved.
        <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </footer>

    <script src="{{ asset('js/layout.js') }}"></script>
</body>
</html>
