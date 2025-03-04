<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product - Otaku Haven</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin/addproduct.css') }}">
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
        </header>

        <section class="add-product-form">
            <h2>Add New Product</h2>

            <div class="form-container">
                <div class="general-info">
                    <h3>General Information</h3>
                    <label>Product Name</label>
                    <input type="text" placeholder="Enter product name">

                    <label>Category</label>
                    <select>
                        <option>ALL</option>
                    </select>

                    <label>Description</label>
                    <textarea placeholder="Enter description"></textarea>

                    <div class="row">
                        <div>
                            <label>Base Price (₱)</label>
                            <input type="number" placeholder="₱ 0.00">
                        </div>
                        <div>
                            <label>Style</label>
                            <input type="text" placeholder="Style version">
                        </div>
                    </div>
                </div>

                <div class="product-images">
                    <h3>Product Images</h3>
                    <div class="image-upload">
                        <p>Main Image</p>
                        <div class="upload-box">Click to upload main image</div>
                    </div>
                    <div class="image-upload">
                        <p>Additional Images</p>
                        <div class="upload-box">Click to upload additional images</div>
                    </div>
                    <button class="add-product-btn">Add Product</button>
                </div>
            </div>

            <div class="product-variants">
                <h3>Product Variants</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Size</th>
                            <th>Price (₱)</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" placeholder="Size"></td>
                            <td><input type="number" placeholder="Price"></td>
                            <td><input type="number" placeholder="Stock"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>
    </main>

</div>

</body>
</html>
