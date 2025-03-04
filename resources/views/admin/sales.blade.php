<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory - Otaku Haven</title>
    <link rel="stylesheet" href="{{ asset('css/admin/sales.css') }}">
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
            <section class="sales-form">
            <h2>Sales Information</h2>
        </header>

            <div class="topbar">
                <input type="text" placeholder="🔍 Search">
            </div>
        
            <div class="filters">
                <input type="text" placeholder="Enter Customer Name">
                <input type="text" placeholder="Enter Order ID">
                <input type="date">
                <input type="text" placeholder="Payable Amount">
                <input type="text" placeholder="Status">
            </div>

            <table class="sales-table">
                <thead>
                    <tr>
                        <th>ORDER ID</th>
                        <th>CUSTOMER NAME</th>
                        <th>AMOUNT</th>
                        <th>DATE</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                    <tr>
                        <td><a href="#">#197</a></td>
                        <td>Kalix Jace</td>
                        <td>₱ 1900</td>
                        <td>Feb 24, 2025</td>
                        <td class="status-completed">Completed</td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>
