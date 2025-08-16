<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malik Motors</title>
    <link rel="stylesheet" href="{{ asset('css/manual-styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logo.jpg') }}">
</head>
<body>
  <div class="container">
    <div class="header">
        <img src="{{ asset('images/logo.jpg') }}" alt="Malik Motors Logo" class="logo">
        <a href="{{ url('/') }}" class="header-link"><h1>Malik Motors</h1></a>
        
        <!-- NAVIGATION BAR-->
        <div class="nav-wrapper">
            <nav class="navigation">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/rental-deals') }}">Rental Deals</a>
                <a href="{{ url('/contact-us') }}">Contact Us</a>
                <a href="{{ url('/rent-now') }}">Rent Now</a>
            </nav>
            @if(Auth::check())
                <a href="{{ url('/my-account') }}" class="register">My Account</a>
            @else
                <button class="register" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            @endif
        </div>
    </div>
</div>
  <!-- Registration Modal -->
  <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="registrationModalLabel">Create Your Account</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form>
                      <div class="mb-3">
                          <input type="text" class="form-control" id="registerName" placeholder="Full Name" required>
                      </div>
                      <div class="mb-3">
                          <input type="email" class="form-control" id="registerEmail" placeholder="Email Address" required>
                      </div>
                      <div class="mb-3">
                          <input type="password" class="form-control" id="registerPassword" placeholder="Password" required>
                      </div>
                      <div class="mb-3">
                          <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
                      </div>
                      <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="termsCheck" required>
                          <label class="form-check-label" for="termsCheck">I agree to the Terms & Conditions</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Register</button>
                  </form>
              </div>
              <div class="modal-footer">
                <p class="text-center w-100">Already have an account? 
                    <a href="#" style="color: #3498db;" 
                       data-bs-toggle="modal" 
                       data-bs-target="#loginModal"
                       data-bs-dismiss="modal">Login</a>
                </p>
            </div>
          </div>
      </div>
  </div>
  <!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="loginModalLabel">Login to Your Account</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                        <div class="text-center mt-3">
                            <a href="#" style="color: #3498db;">Forgot password?</a>
                        </div>
                    </form>
                </div>
          <div class="modal-footer">
              <p class="text-center w-100">Don't have an account? <a href="#" style="color: #3498db;" data-bs-toggle="modal" data-bs-target="#registrationModal">Register</a></p>
          </div>
      </div>
  </div>
</div>
  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<div class="section">
  100% trusted car rental platform in Pakistan
</div> 
<div class="subscribe-bar">
  <div class="subscription-container">
      <h2 class="subscription-title">Stay Updated</h2>
      <p class="subscription-description">Subscribe to our newsletter for the latest car rental deals and special offers</p>
      
      <form class="email-subscription">
          <input type="email" class="email-input" placeholder="Enter your email address" required aria-label="Email address">
          <button type="submit" class="subscribe-button">Subscribe</button>
      </form>
      
      <p class="privacy-note">We respect your privacy. Unsubscribe at any time.</p>
  </div>
</div>
<div class="contact">
  <h1>Contact us</h1>
  
  <div class="contact-item">
    <svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
      <path d="M3 2h18a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V6.238zM4.511 5l7.55 6.662L19.502 5H4.511z"/>
    </svg>
    <p>info@malikmotors.com</p>
  </div>
  
  <div class="contact-item">
    <svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
      <path d="M5 2h14a1 1 0 0 1 1 1v19.143a.5.5 0 0 1-.766.424L12 18.03l-7.234 4.536A.5.5 0 0 1 4 22.143V3a1 1 0 0 1 1-1zm13 2H6v15.432l6-3.761 6 3.761V4z"/>
    </svg>
    <p><b>Ph no.</b> +92-324-867000</p>
  </div>
  
  <div class="contact-item">
    <svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
      <path d="M12 20.9l4.95-4.95a7 7 0 1 0-9.9 0L12 20.9zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
    </svg>
    <p>Gujranwala, Pakistan</p>
  </div>
  
  <h3 style="font-family: Arial, Helvetica, sans-serif;">Copyright © 2025 GCG. All rights reserved.</h3>
</div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
      // Close registration modal and open login modal
      document.querySelector('[data-bs-target="#loginModal"]').addEventListener('click', function() {
          var registrationModal = bootstrap.Modal.getInstance(document.getElementById('registrationModal'));
          registrationModal.hide();
      });
      
      // Close login modal and open registration modal
      document.querySelector('[data-bs-target="#registrationModal"]').addEventListener('click', function() {
          var loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
          loginModal.hide();
      });
  });
  </script>
</body>
</html>