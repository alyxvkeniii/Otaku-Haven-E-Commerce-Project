@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}"> 
@endsection

@section('content')
<div class="contact-container">
    <div class="contact-info">
        <div class="info-box">
            <i class="icon1">📞</i>
            <h3>Call To Us</h3>
            <p>We are available 24/7, 7 days a week.</p>
            <p>Phone: +88011112222</p>
        </div>
        <div class="info-box">
            <i class="icon">📧</i>
            <h3>Write To Us</h3>
            <p>Fill out our form and we will contact you within 24 hours.</p>
            <p>Emails: customer@gmail.com</p>
            <p>Emails: support@gmail.com</p>
        </div>
    </div>
    
    <div class="contact-form">
        <form action="#" method="POST">
            @csrf
            <div class="input-group">
                <input type="text" name="name" placeholder="Your Name *" required>
                <input type="email" name="email" placeholder="Your Email *" required>
                <input type="tel" name="phone" placeholder="Your Phone *" required>
            </div>
            <textarea name="message" placeholder="Your Message"></textarea>
            <button type="submit" class="submit-btn1">Send Message</button>
        </form>
    </div>
</div>
@endsection
