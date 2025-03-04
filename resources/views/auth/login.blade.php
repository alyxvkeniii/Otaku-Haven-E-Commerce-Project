<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
   
</head>
<body>
    <div class="container">
        <div class="left-section">
            <div class="logo">
                <img src="{{ asset('images/bibimeow.jpg') }}" alt="Logo">
            </div>
            <h2>Welcome Back Senpai</h2>
            <div class="circle">
                <img src="{{ asset('images/OIP.jpg') }}" alt="Mascot">
            </div>
        </div>
        <div class="right-section">
            <h2>Login</h2>
            <form>
                <input type="email" placeholder="Email" required>
                <div class="password-field">
                    <input type="password" id="password" placeholder="Password" required>
                    <span class="toggle-password" id="togglePassword" onclick="togglePassword()">
                        <i class="fa fa-eye"></i>
                    </span>
                </div>
                <div class="forgot-password">
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <p>Don't have an account? <a href="#">Sign Up</a></p>
            </form>
            <div class="divider">or</div>
            <div class="social-buttons">
                <button class="fb-btn">
                    <i class="fa-brands fa-facebook"></i> Sign Up with Facebook
                </button>
                <button class="google-btn">
                    <i class="fa-brands fa-google"></i> Sign Up with Google
                </button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/login&signup.js') }}"></script>
</body>
</html>