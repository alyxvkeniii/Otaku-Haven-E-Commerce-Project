<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory - Otaku Haven</title>
    <link rel="stylesheet" href="{{ asset('css/admin/inventory.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="dashboard">
    <aside class="sidebar">
        <h2>Otaku Haven</h2>
        <nav>
            <ul>
                <li>📊 Dashboard</li>
                <li>➕ Add Product</li>
                <li>📈 Sales Information</li>
                <li>📋 Inventory</li>
                <li>🚚 Shipment</li>
                <li>🚪 Logout</li>
            </ul>
        </nav>
    </aside>

    <main class="content">
        <header class="top-bar">
            <span>Admin User</span>
            <section class="inventory-form">
            <h2>Inventory</h2>
        </header>
        
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-success">ALL</button>
            <button type="button" class="btn btn-outline-secondary">Keychains</button>
            <button type="button" class="btn btn-outline-secondary">T-Shirts</button>
            <button type="button" class="btn btn-outline-secondary">Hoodies</button>
            <button type="button" class="btn btn-outline-secondary">Plushies</button>
            <button type="button" class="btn btn-outline-secondary">Tote Bags</button>
            <button type="button" class="btn btn-outline-secondary">Playmats</button>
        </div>

        <div class="search">
            <input type="text" class="form-control w-50" placeholder="🔍 Search products...">
            <button class="add-product-btn">+ Add New Product</button>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>CATEGORY</th>
                        <th>PRICE</th>
                        <th>STYLE</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="{{ asset('image/keychain.jpg') }}" class="img-thumbnail" width="50"></td>
                        <td>Genshin Impact design1 Keychain</td>
                        <td><span class="badge text-bg-warning">KEYCHAIN</span></td>
                        <td>₱70.00</td>
                        <td>1.1</td>
                        <td>
                            <a href="#" class="text-primary me-2">✏️</a>
                            <a href="#" class="text-danger">🗑️</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('image/plushie.jpg') }}" class="img-thumbnail" width="50"></td>
                        <td>Anime Genshin Impact Xiao Bird Doll Large Plush Toys</td>
                        <td><span class="badge text-bg-info">PLUSHIE</span></td>
                        <td>₱1900.00</td>
                        <td>1-3</td>
                        <td>
                            <a href="#" class="text-primary me-2">✏️</a>
                            <a href="#" class="text-danger">🗑️</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('image/hoodie.jpg') }}" class="img-thumbnail" width="50"></td>
                        <td>Anime Genshin Impact Cosplay Hoodie</td>
                        <td><span class="badge text-bg-info">HOODIE</span></td>
                        <td>₱590.00</td>
                        <td>H-Blue</td>
                        <td>
                            <a href="#" class="text-primary me-2">✏️</a>
                            <a href="#" class="text-danger">🗑️</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('image/totebag.jpg') }}" class="img-thumbnail" width="50"></td>
                        <td>Genshin Impact Canvas Bag Anime Handbag, Fashion Casual Tote Bags</td>
                        <td><span class="badge text-bg-info">TOTE BAG</span></td>
                        <td>₱350.00</td>
                        <td>TB1.1</td>
                        <td>
                            <a href="#" class="text-primary me-2">✏️</a>
                            <a href="#" class="text-danger">🗑️</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('image/tshirt.jpg') }}" class="img-thumbnail" width="50"></td>
                        <td>Random Fashion unisex T Shirts Assorted Bargain Shirt</td>
                        <td><span class="badge text-bg-info">T-SHIRT</span></td>
                        <td>₱250.00</td>
                        <td>1.1</td>
                        <td>
                            <a href="#" class="text-primary me-2">✏️</a>
                            <a href="#" class="text-danger">🗑️</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('image/playmat.jpg') }}" class="img-thumbnail" width="50"></td>
                        <td>CUSTOM PLAYMAT/GAMING MOUSEPAD</td>
                        <td><span class="badge text-bg-info">PLAYMAT</span></td>
                        <td>₱500.00</td>
                        <td>1-3</td>
                        <td>
                            <a href="#" class="text-primary me-2">✏️</a>
                            <a href="#" class="text-danger">🗑️</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('image/keychain.jpg') }}" class="img-thumbnail" width="50"></td>
                        <td>Genshin Impact design1 Keychain</td>
                        <td><span class="badge text-bg-warning">KEYCHAIN</span></td>
                        <td>₱70.00</td>
                        <td>1.1</td>
                        <td>
                            <a href="#" class="text-primary me-2">✏️</a>
                            <a href="#" class="text-danger">🗑️</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('image/plushie.jpg') }}" class="img-thumbnail" width="50"></td>
                        <td>Anime Genshin Impact Xiao Bird Doll Large Plush Toys</td>
                        <td><span class="badge text-bg-info">PLUSHIE</span></td>
                        <td>₱1900.00</td>
                        <td>1-3</td>
                        <td>
                            <a href="#" class="text-primary me-2">✏️</a>
                            <a href="#" class="text-danger">🗑️</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('image/hoodie.jpg') }}" class="img-thumbnail" width="50"></td>
                        <td>Anime Genshin Impact Cosplay Hoodie</td>
                        <td><span class="badge text-bg-info">HOODIE</span></td>
                        <td>₱590.00</td>
                        <td>H-Blue</td>
                        <td>
                            <a href="#" class="text-primary me-2">✏️</a>
                            <a href="#" class="text-danger">🗑️</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('image/totebag.jpg') }}" class="img-thumbnail" width="50"></td>
                        <td>Genshin Impact Canvas Bag Anime Handbag, Fashion Casual Tote Bags</td>
                        <td><span class="badge text-bg-info">TOTE BAG</span></td>
                        <td>₱350.00</td>
                        <td>TB1.1</td>
                        <td>
                            <a href="#" class="text-primary me-2">✏️</a>
                            <a href="#" class="text-danger">🗑️</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('image/tshirt.jpg') }}" class="img-thumbnail" width="50"></td>
                        <td>Random Fashion unisex T Shirts Assorted Bargain Shirt</td>
                        <td><span class="badge text-bg-info">T-SHIRT</span></td>
                        <td>₱250.00</td>
                        <td>1.1</td>
                        <td>
                            <a href="#" class="text-primary me-2">✏️</a>
                            <a href="#" class="text-danger">🗑️</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('image/playmat.jpg') }}" class="img-thumbnail" width="50"></td>
                        <td>CUSTOM PLAYMAT/GAMING MOUSEPAD</td>
                        <td><span class="badge text-bg-info">PLAYMAT</span></td>
                        <td>₱500.00</td>
                        <td>1-3</td>
                        <td>
                            <a href="#" class="text-primary me-2">✏️</a>
                            <a href="#" class="text-danger">🗑️</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
