<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Otaku Haven</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    @yield('additional-styles')
</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container-fluid">
            <!-- Logo / Brand -->
            <a class="navbar-brand fw-bold" href="#">Otaku Haven</a>

            <!-- Right-Aligned Navigation Links -->
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">  <!-- Changed ms-3 to ms-auto -->
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                </ul>
            </div>

            <!-- Search Box -->
            <form class="d-flex mx-3">
                <input class="form-control search-box" type="search" placeholder="What are you looking for?">
                <button class="btn icon-btn" type="submit"><i class="bi bi-search"></i></button>
            </form>

            <!-- Icons (Wishlist, Cart, Profile) -->
            <button class="btn icon-btn"><i class="bi bi-heart"></i></button>
            <button class="btn icon-btn"><i class="bi bi-cart"></i></button>

            <!-- Profile Icon (Red Circle) -->
            <button class="btn profile-btn"><i class="bi bi-person"></i></button>
        </div>
    </nav>
    <!-- End of Header -->

    <!-- CONTENT -->
        <div class="content">
            <!-- Page content goes here -->
            @yield ('content')   
        </div>
    <!-- END OF CONTENT -->

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Company Info -->
                <div class="col-md-3">
                    <h5>Otaku Haven</h5>
                    <p>Get 10% off your first order</p>
                    <div class="email-subscribe">
                        <input type="email" class="email-input" placeholder="Enter your email">
                        <button class="send-btn"><i class="bi bi-send"></i></button>
                    </div>
                </div>
                
                <!-- Support -->
                <div class="col-md-3">
                    <h5>Support</h5>
                    <p>123 Rizal Street, Barangay 27, Legazpi City, Albay</p>
                    <p>Email: OtakuHaven@gmail.com</p>
                    <p>Phone: +88015-88888-9999</p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <p><a href="#">Privacy Policy</a></p>
                    <p><a href="#">Terms of Use</a></p>
                    <p><a href="#">FAQ</a></p>
                    <p><a href="#">Contact</a></p>
                </div>

                <!-- Download App -->
                <div class="col-md-3">
                    <h5>Download App</h5>
                    <p>Save 5% with App New User Only</p>
                    <img src="{{ asset('images/googleplay-logo.png') }}" alt="Google Play">
                    <img src="{{ asset('images/apple-logo.png') }}" alt="App Store">
                </div>
            </div>
        </div>
        <hr class="bg-light">
        <p class="mb-0">&copy; Copyright Otaku Haven 2025. All rights reserved</p>
    </footer>

</body>
</html>
