<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otaku Haven - Our Story</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>

    <section class="otaku-story">
        <div class="otaku-content">
            <h2>Our Story</h2>
            <p>Launched in [year], Otaku Haven is Albay’s premier online shop for anime merchandise, catering to passionate fans across the region. We bring anime lovers closer to their favorite series with a wide selection of high-quality collectibles, apparel, accessories, and more.</p>
            <p>With a growing community of dedicated customers, Otaku Haven partners with trusted suppliers to ensure authenticity and variety. Our shop offers thousands of products, from exclusive figures to stylish anime-inspired fashion, making it the ultimate haven for every otaku.</p>
        </div>
        <div class="otaku-image">
            <img src="{{ asset('images/bibimeow.jpg') }}" alt="Anime girl shopping with a cart full of cute items">
        </div>
    </section>

    <div class="stats-container">
        <div class="stat-card">
            <img src="{{ asset('images/icon-shop.png') }}" alt="Icon Shop">
            <h2>1.5k</h2>
            <p>Sellers active on our site</p>
        </div>
        <div class="stat-card highlight">
            <img src="{{ asset('images/icon-sale.png') }}" alt="Sale Icon">
            <h2>5.2k</h2>
            <p>Monthly Product Sale</p>
        </div>
        <div class="stat-card">
            <img src="{{ asset('images/icon-customer.png') }}" alt="Customer Icon">
            <h2>6.9k</h2>
            <p>Customers active on our site</p>
        </div>
        <div class="stat-card">
            <img src="{{ asset('images/icon-moneybag.png') }}"alt="Moneybag Icon">
            <h2>21k</h2>
            <p>Annual gross sale on our site</p>
        </div>
    </div>

    <section class="unique-team-section">
        <div class="team-member">
            <img src="tom-cruise.jpg" alt="Tom Cruise">
            <h3>Tom Cruise</h3>
            <p>Founder & Chairman</p>
        </div>
        <div class="team-member">
            <img src="emma-watson.jpg" alt="Emma Watson">
            <h3>Emma Watson</h3>
            <p>Managing Director</p>
        </div>
        <div class="team-member">
            <img src="will-smith.jpg" alt="Will Smith">
            <h3>Will Smith</h3>
            <p>Product Designer</p>
        </div>
    </section>

<div class="full-services">
  <div class="frame-701">
    <div class="services">
      <div class="group-1000005938">
        <div class="ellipse-6"></div>
        <div class="ellipse-5"></div>
      </div>
        <img class="icon-delivery" src="{{ asset('images/fast-delivery.png') }}" alt="FREE AND FAST DELIVERY">
    </div>
    <div class="frame-695">
      <div class="free-and-fast-delivery">FREE AND FAST DELIVERY</div>
      <div class="free-delivery-for-all-orders-over-140">
        Free delivery for all orders over $140
      </div>
    </div>
  </div>
  <div class="frame-702">
    <div class="services">
      <div class="group-1000005938">
        <div class="ellipse-6"></div>
        <div class="ellipse-5"></div>
      </div>
      <img class="icon-customer-service" src="{{ asset('images/customer-service.png') }}" alt="24/7 CUSTOMER SERVICE">
    </div>
    <div class="frame-696">
      <div class="_24-7-customer-service">24/7 CUSTOMER SERVICE</div>
      <div class="friendly-24-7-customer-support">
        Friendly 24/7 customer support
      </div>
    </div>
  </div>
  <div class="frame-703">
    <div class="services">
      <div class="group-1000005938">
        <div class="ellipse-6"></div>
        <div class="ellipse-5"></div>
      </div>
      <div class="icon-secure">
        <img
          class="vuesax-outline-shield-tick" src="{{ asset('images/protect.png') }}" alt="MONEY BACK GUARANTEE">
      </div>
    </div>
    <div class="frame-697">
      <div class="money-back-guarantee">MONEY BACK GUARANTEE</div>
      <div class="we-reurn-money-within-30-days">
        We reurn money within 30 days
      </div>
    </div>
  </div>
</div>


</body>
</html>
