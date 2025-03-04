<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Otaku Haven</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .heart-icon {
            color: #faccd0;
        }
        .heart-icon:hover {
            color: #ff6b6b;
        }
        .search-input {
            border-color: #ff6b6b;
        }
        .view-all-btn {
            background-color: #ff6b6b;
            border-color: #faccd0;
        }
        .view-all-btn:hover, .view-all-btn:active {
            background-color: #ff8b8b;
        }
        .icon-red {
            color: #ff6b6b;
        }
        .icon-red:hover, .icon-red:active {
            color: #e60000;
        }
        .cart-icon {
            color: #ff6b6b;
        }
        .cart-icon:hover, .cart-icon:active {
            color: #ff8b8b;
        }
        .nav-link:hover {
            color: #ff6b6b;
        }
        .sidebar-item:hover span {
            color: #ff6b6b;
        }
        .category-item {
            transition: background-color 0.3s, color 0.3s;
        }
        .category-item:active {
            background-color: #ff6b6b;
            color: white;
        }
    </style>
</head>
<body class="bg-white">
    <!-- Top Banner -->
    <div class="bg-[#ff6b6b] text-center py-2 text-sm text-white">
        Sale For All Otaku Haven Merch And Free Express Delivery – OFF 50%!
        <a class="text-red-600 font-bold" href="#">Shop Now</a>
    </div>
    <!-- Header -->
    <header class="flex items-center justify-between py-4 px-8 border-b">
        <div class="text-2xl font-bold text-red-600">Otaku Haven</div>
        <nav class="space-x-6">
            <a class="text-gray-700 nav-link" href="#">Home</a>
            <a class="text-gray-700 nav-link" href="#">Contact</a>
            <a class="text-gray-700 nav-link" href="#">About</a>
            <a class="text-gray-700 nav-link" href="#">Sign Up</a>
            <a class="text-gray-700 nav-link" href="#">Login</a>
        </nav>
        <div class="flex items-center space-x-4">
            <input class="border search-input rounded-full px-4 py-2 text-sm w-64" placeholder="What are you looking for?" type="text"/>
            <i class="far fa-heart icon-red"></i>
            <i class="fas fa-shopping-cart cart-icon"></i>
        </div>
    </header>
    <!-- Main Content -->
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-1/5 border-r p-4">
            <ul class="space-y-4">
                <li class="flex justify-between items-center sidebar-item ml-8">
                    <span>Key chains</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex justify-between items-center sidebar-item ml-8">
                    <span>Eyemask</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex justify-between items-center sidebar-item ml-8">
                    <span>Acrylic Stand</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex justify-between items-center sidebar-item ml-8">
                    <span>Cosplay Costume</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex justify-between items-center sidebar-item ml-8">
                    <span>T-Shirts</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex justify-between items-center sidebar-item ml-8">
                    <span>Plush Toys</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex justify-between items-center sidebar-item ml-8">
                    <span>Hoodies</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex justify-between items-center sidebar-item ml-8">
                    <span>Gaming Mousepad</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex justify-between items-center sidebar-item ml-8">
                    <span>Footwear</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
            </ul>
        </aside>
        <!-- Main Section -->
        <main class="w-4/5 p-8">
            <div class="flex items-center justify-between mb-4 pt-0">
                <h2 class="text-2xl font-bold">Best Selling Products</h2>
                <div class="ml-4">
                    <button class="view-all-btn text-white px-4 py-2 rounded-full">View All</button>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-6">
                <!-- Product 1 -->
                <div class="p-4 rounded-lg relative flex flex-col justify-between">
                    <div>
                        <img alt="Genshin Impact Canvas Bag Anime Handbag Student Bags Fashion Casual Tote Bags" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/__HYftUV_z0C1IdRCSEZf9u9Qws1z66htCWUjysVbWI.jpg" width="200"/>
                        <h3 class="text-sm font-medium">Genshin Impact Canvas Bag Anime Handbag Student Bags Fashion Casual Tote Bags</h3>
                        <div class="text-red-600 font-bold mt-2">₱ 350</div>
                        <div class="flex items-center mt-2">
                            <div class="flex text-yellow-500">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(99)</span>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4">
                        <i class="far fa-heart heart-icon"></i>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="p-4 rounded-lg relative flex flex-col justify-between">
                    <div>
                        <img alt="Genshin Impact design2 Keychain" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/Qo-DkVEag409Pg_kUpA_Pc3aFnYTFmAEjgVk_qVDgkI.jpg" width="200"/>
                        <h3 class="text-sm font-medium">Genshin Impact design2 Keychain</h3>
                        <div class="text-red-600 font-bold mt-2">₱ 70</div>
                        <div class="flex items-center mt-2">
                            <div class="flex text-yellow-500">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(199)</span>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4">
                        <i class="far fa-heart heart-icon"></i>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="p-4 rounded-lg relative flex flex-col justify-between">
                    <div>
                        <img alt="CUSTOM PLAY MAT / GAMING MOUSE PAD" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/SolcTAFaEDt0YALaihkYPzIxIeZXOWzMHe8rV8g0680.jpg" width="200"/>
                        <h3 class="text-sm font-medium">CUSTOM PLAY MAT / GAMING MOUSE PAD</h3>
                        <div class="text-red-600 font-bold mt-2">₱ 500</div>
                        <div class="flex items-center mt-2">
                            <div class="flex text-yellow-500">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(65)</span>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4">
                        <i class="far fa-heart heart-icon"></i>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="p-4 rounded-lg relative flex flex-col justify-between">
                    <div>
                        <img alt="Anime Genshin Impact Cosplay Hoodie" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/1Ck5shauMLI8oPqi-BnkybiXNA27H1iieYsM0dFg4fg.jpg" width="200"/>
                        <h3 class="text-sm font-medium">Anime Genshin Impact Cosplay Hoodie</h3>
                        <div class="text-red-600 font-bold mt-2">₱ 590</div>
                        <div class="flex items-center mt-2">
                            <div class="flex text-yellow-500">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(5)</span>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4">
                        <i class="far fa-heart heart-icon"></i>
                    </div>
                </div>
            </div>
        </main>
    </div>
<hr>
  <div class="container mx-auto p-4 bg-white text-gray-900 ml-8 mt-10 mb-10 ">
   <div class="flex items-center mb-4">
    <div class="w-4 h-4 bg-red-500 mr-2">
    </div>
    <span class="text-red-500 font-semibold">
     Categories
    </span>
   </div>
   <h1 class="text-2xl font-bold mb-6">
    Browse By Category
   </h1>
   <div class="flex items-center justify-center">
    <div class="grid grid-cols-6 gap-4">
     <div class="flex flex-col items-center border p-4 flex-1 category-item bg-gray-100">
      <img alt="Keychain icon" class="mb-2" height="50" src="https://storage.googleapis.com/a1aa/image/ijcIIbjvjSSzsFxJjWCUCSwzumCna9vwupowT3KtYJ0.jpg" width="50"/>
      <span>
       Keychain
      </span>
     </div>
     <div class="flex flex-col items-center border p-4 flex-1 bg-gray-100">
      <img alt="Tote Bags icon" class="mb-2" height="50" src="https://storage.googleapis.com/a1aa/image/mZS-3T90h5NaAF-a0oLqKoy59WyLmhMnMXMnU2pP7u0.jpg" width="50"/>
      <span>
       Tote Bags
      </span>
     </div>
     <div class="flex flex-col items-center border p-4 flex-1 bg-gray-100">
      <img alt="Acrylic Stand icon" class="mb-2" height="50" src="https://storage.googleapis.com/a1aa/image/iFNd6x-p3bRkNts9EhuAisCWj76LJDHU6J8rP5W67eE.jpg" width="50"/>
      <span>
       Acrylic Stand
      </span>
     </div>
     <div class="flex flex-col items-center border p-4 bg-gray-100 text-red-500 flex-1">
      <img alt="Eyemask icon" class="mb-2" height="50" src="https://storage.googleapis.com/a1aa/image/owqpu0XkAxl8TFkgQ67o-TpXKPpZ9L3vTNlfE0S1QRo.jpg" width="50"/>
      <span class="text-black">
       Eyemask
      </span>
     </div>
     <div class="flex flex-col items-center border p-4 bg-gray-100 flex-1">
      <img alt="Plush Toys icon" class="mb-2" height="50" src="https://storage.googleapis.com/a1aa/image/JSb9_bZ6JTN3HeluNfs61VsTFU5jcRQ6v9BXpAwSEys.jpg" width="50"/>
      <span>
       Plush Toys
      </span>
     </div>
     <div class="flex flex-col items-center border p-4 flex-1 justify-center bg-gray-100">
      <img alt="Gamepad icon" class="mb-2" height="50" src="https://storage.googleapis.com/a1aa/image/vYpQLo0ML7LbnI0dETI2vfKAoddL2zipSla53Qczz8U.jpg" width="50"/>
      <span>
       Gamepad
      </span>
     </div>
    </div>
   </div>
  </div>
<hr>
    <!-- Services Section -->
    <div class="flex flex-col md:flex-row justify-around items-center py-12 bg-white mt-10 mb-10">
        <div class="text-center mb-8 md:mb-0 ">
            <div class="flex justify-center mb-4">
                <i class="fas fa-truck fa-2x"></i>
            </div>
            <h3 class="font-bold text-lg text-pink">FREE AND FAST DELIVERY</h3>
            <p class="text-sm">Free delivery for all orders over $140</p>
        </div>
        <div class="text-center mb-8 md:mb-0">
            <div class="flex justify-center mb-4">
                <i class="fas fa-headset fa-2x text-black"></i>
            </div>
            <h3 class="font-bold text-lg">24/7 CUSTOMER SERVICE</h3>
            <p class="text-sm">Friendly 24/7 customer support</p>
        </div>
        <div class="text-center">
            <div class="flex justify-center mb-4">
                <i class="fas fa-check-circle fa-2x text-black"></i>
            </div>
            <h3 class="font-bold text-lg">MONEY BACK GUARANTEE</h3>
            <p class="text-sm">We return money within 30 days</p>
        </div>
    </div>

    <!-- Footer -->
    
  <footer class="py-6">
   <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8 text-center bg-black text-white">
    <div>
     <h2 class="text-lg font-bold mb-2 mt-3">
      Otaku Haven
     </h2>
     <p class="mb-1">
      Subscribe
     </p>
     <p class="mb-2">
      Get 10% off your first order
     </p>
     <form class="flex justify-center">
      <input class="p-2 rounded-l bg-gray-800 text-white focus:outline-none" placeholder="Enter your email" type="email"/>
      <button class="p-2 bg-gray-700 rounded-r" type="submit">
       <i class="fas fa-arrow-right">
       </i>
      </button>
     </form>
    </div>
    <div class="text-center">
     <h2 class="text-lg font-bold mb-2 mt-3">
      Support
     </h2>
     <p>
      123 Rizal Street, Barangay 27, Legazpi City, Albay
     </p>
     <p>
      OtakuHaven@gmail.com
     </p>
     <p>
      +88015-88888-9999
     </p>
    </div>
    <div>
     <h2 class="text-lg font-bold mb-2 mt-3">
      Account
     </h2>
     <ul>
      <li class="mb-1">
       <a class="hover:underline" href="#">
        My Account
       </a>
      </li>
      <li class="mb-1">
       <a class="hover:underline" href="#">
        Login / Register
       </a>
      </li>
      <li class="mb-1">
       <a class="hover:underline" href="#">
        Cart
       </a>
      </li>
      <li class="mb-1">
       <a class="hover:underline" href="#">
        Wishlist
       </a>
      </li>
      <li class="mb-1">
       <a class="hover:underline" href="#">
        Shop
       </a>
      </li>
     </ul>
    </div>
    <div>
     <h2 class="text-lg font-bold mb-2 mt-3">
      Quick Link
     </h2>
     <ul>
      <li class="mb-1">
       <a class="hover:underline" href="#">
        Privacy Policy
       </a>
      </li>
      <li class="mb-1">
       <a class="hover:underline" href="#">
        Terms Of Use
       </a>
      </li>
      <li class="mb-1">
       <a class="hover:underline" href="#">
        FAQ
       </a>
      </li>
      <li class="mb-1">
       <a class="hover:underline" href="#">
        Contact
       </a>
      </li>
     </ul>
    </div>
   </div>
   <div class="text-center mt-6 bg-black text-gray-100 mb-auto">
    <p>© Copyright Otaku Haven 2025. All right reserved</p>
   </div>
  </footer>
 </body>
</html>