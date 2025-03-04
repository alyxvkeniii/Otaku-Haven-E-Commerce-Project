@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
@endsection

@section('content')
<div class="checkout-container">
    <div class="checkout-wrapper">
        <div class="checkout-billing">
            <h4>Billing Details</h4>
            <label for="fname">First Name*</label>
            <input type="text" id="fname" placeholder="Enter first name">
            
            <label for="company">Company Name</label>
            <input type="text" id="company" placeholder="Enter company name">
            
            <label for="street">Street Address*</label>
            <input type="text" id="street" placeholder="Enter street address">
            
            <label for="apartment">Apartment, floor, etc. (optional)</label>
            <input type="text" id="apartment" placeholder="Enter apartment details">
            
            <label for="city">Town/City*</label>
            <input type="text" id="city" placeholder="Enter city">
            
            <label for="phone">Phone Number*</label>
            <input type="text" id="phone" placeholder="Enter phone number">
            
            <label for="email">Email Address*</label>
            <input type="email" id="email" placeholder="Enter email">
            
            <div class="checkout-checkbox">
                <input type="checkbox" id="save-info">
                <label for="save-info">Save this information for faster check-out next time</label>
            </div>
        </div>
        
        <div class="checkout-summary">
            <h6>Order Summary</h6>
            <div class="checkout-item">
                <span>2.2 Keychain Design 2</span>
                <span>&#8369; 70</span>
            </div>
            <div class="checkout-item">
                <span>TB1.8 Anime Casual Tote Bags</span>
                <span>&#8369; 350</span>
            </div>
            <hr>
            <div class="checkout-item">
                <span>Subtotal:</span>
                <span>&#8369; 420</span>
            </div>
            <div class="checkout-item">
                <span>Shipping:</span>
                <span>Free</span>
            </div>
            <hr>
            <div class="checkout-item checkout-total">
                <span>Total:</span>
                <span>&#8369; 420</span>
            </div>
            
            <div class="checkout-payment">
                <input type="radio" id="online-payment" name="payment-method">
                <label for="online-payment">Online Payment</label>
                <img src="paypal-logo.png" alt="PayPal">
                <img src="gcash-logo.png" alt="GCash">
            </div>
            <div class="checkout-payment">
                <input type="radio" id="cod" name="payment-method" checked>
                <label for="cod">Cash on delivery</label>
            </div>
            
            <div class="checkout-coupon">
                <input type="text" placeholder="Coupon Code">
                <button>Apply Coupon</button>
            </div>
            
            <button class="checkout-place-order">Place Order</button>
        </div>
    </div>
</div>
@endsection