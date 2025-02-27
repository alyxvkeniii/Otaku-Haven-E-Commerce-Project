@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')
<div class="cart-container">
    <h2 class="cart-title">Shopping Cart</h2>
    <div class="cart-table">
        <table>
            <thead>
                <tr>
                    <th><input type="checkbox"></th>
                    <th>Product</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td class="product-details">
                        <img src="/images/product1.png" alt="Product Image">
                        <span>Keychain Design 2</span>
                    </td>
                    <td>₱70</td>
                    <td>
                        <div class="quantity-control">
                            <button>-</button>
                            <input type="text" value="1">
                            <button>+</button>
                        </div>
                    </td>
                    <td>₱70</td>
                    <td><button class="delete-btn">Delete</button></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td class="product-details">
                        <img src="/images/product2.png" alt="Product Image">
                        <span>Anime Tote Bag</span>
                    </td>
                    <td>₱350</td>
                    <td>
                        <div class="quantity-control">
                            <button>-</button>
                            <input type="text" value="1">
                            <button>+</button>
                        </div>
                    </td>
                    <td>₱350</td>
                    <td><button class="delete-btn">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="cart-footer">
        <div class="left">
            <input type="checkbox"> Select All
            <button class="delete-selected">Delete Selected</button>
        </div>
        <div class="right">
            <span>Total (2 item): <strong>₱420</strong></span>
            <button class="checkout-btn">Check Out</button>
        </div>
    </div>
</div>
@endsection