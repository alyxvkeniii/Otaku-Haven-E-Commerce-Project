<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Otaku Haven</title>
    <link rel="stylesheet" href="{{ asset('css/db.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        Sale For All Otaku Haven Merch And Free Express Delivery - OFF 50%!
        <a class="underline" href="#">Shop Now</a>
    </div>
    <!-- Header -->
    <header class="header">
        <div class="flex items-center space-x-4">
            <h1>Otaku Haven</h1>
        </div>
        <nav class="hidden md:flex space-x-6">
            <a href="#">Home</a>
            <a href="#">Contact</a>
            <a href="#">About</a>
            <a href="#">Sign Up</a>
            <a href="#">Login</a>
        </nav>
        <div class="flex items-center space-x-4">
            <input class="search-input" placeholder="What are you looking for?" type="text"/>
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="#"><i class="fas fa-heart"></i></a>
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </header>
    <!-- Main Content -->
    <div class="flex">
        <!-- Sidebar -->
        <aside class="sidebar hidden md:block">
            <ul class="space-y-4">
                <li><a href="#">Key chains <i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#">Eyemask <i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#">Acrylic Stand <i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#">Cosplay Costume <i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#">T-Shirts <i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#">Plush Toys <i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#">Hoodies <i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#">Gaming Mousepad <i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#">Footwear <i class="fas fa-chevron-right"></i></a></li>
            </ul>
        </aside>
        <!-- Main Section -->
        <main class="main">
            <div class="bg-black text-white p-6 rounded-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm">Genshin impact figure</p>
                        <h2 class="text-4xl font-bold">Up to 10% off Voucher</h2>
                        <a class="mt-4 inline-block bg-white text-black px-4 py-2 rounded-full" href="#">
                            Shop Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <img alt="Genshin impact figure" class="w-1/3" height="200" src="https://storage.googleapis.com/a1aa/image/AwSd0v974P_dihowtFMvKfBUlB8PPDk8YBBF5Nm2ngg.jpg" width="200"/>
                </div>
            </div>
        </main>
    </div>
    <div class="container mx-auto p-4 bg-[#928dab]">
        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center">
                <div class="bg-[#1f1c2c] w-2 h-8 mr-2"></div>
                <span class="text-[#1f1c2c] font-semibold">This Month</span>
            </div>
            <button class="bg-[#1f1c2c] text-[#928dab] px-4 py-2 rounded">View All</button>
        </div>
        <h1 class="text-2xl font-bold mb-6">Best Selling Products</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Product Cards -->
            <div class="product-card">
                <div class="relative">
                    <img alt="Genshin Impact Canvas Bag" class="w-full h-48 object-cover mb-4" height="300" src="https://storage.googleapis.com/a1aa/image/OfyaPNb5BJQZYNCrUsGB1wjFhcHQws9pVSe1iv6ABRI.jpg" width="300"/>
                    <div class="absolute top-2 right-2"><i class="far fa-heart text-gray-500"></i></div>
                </div>
                <h2 class="text-sm font-semibold mb-2">Genshin Impact Canvas Bag</h2>
                <p class="text-red-500 font-bold mb-1">₱ 350</p>
                <div class="flex items-center">
                    <div class="text-yellow-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="text-gray-500 ml-2">(99)</span>
                </div>
            </div>
            <!-- Repeat for other products -->
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                <div>
                    <h3>Otaku Haven</h3>
                    <p>Subscribe</p>
                    <p>Get 10% off your first order</p>
                    <form class="mt-4">
                        <input class="subscribe-input" placeholder="Enter your email" type="email"/>
                        <button class="subscribe-button">Subscribe</button>
                    </form>
                </div>
                <div>
                    <h3>Support</h3>
                    <p>123 Rizal Street, Barangay 27, Legazpi City, Albay</p>
                    <p>Otaku.Haven@gmail.com</p>
                    <p>+88015-88888-9999</p>
                </div>
                <div>
                    <h3>Account</h3>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Login / Register</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Shop</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Quick Link</h3>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Download App</h3>
                    <div class="flex space-x-2">
                        <a href="#"><img alt="Google Play Store" height="40" src="https://storage.googleapis.com/a1aa/image/HRfyus8tVRYW3EtkqAM7ZFBijbYTDTp60c91b2NOT8U.jpg" width="120"/></a>
                        <a href="#"><img alt="Apple App Store" height="40" src="https://storage.googleapis.com/a1aa/image/gHOczNN9AMch1bLQZ7BeZLh7NXUxUbzv4wiMLw97gyo.jpg" width="120"/></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-sm mt-8">© Copyright Otaku Haven 2025. All right reserved.</div>
    </footer>
    <script src="{{ asset('js/login&signup.js') }}"></script>
</body>
</html>