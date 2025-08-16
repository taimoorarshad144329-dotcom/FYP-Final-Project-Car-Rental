<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malik Motors</title>
    <link rel="stylesheet" href="{{ asset('css/manual-styles.css') }}">
    <script src="{{ asset('js/manual-script.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
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
                    <a href="{{ url('/vehicles') }}">Rental Deals</a>
                    <a href="{{ url('/contact') }}">Contact Us</a>
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
    <div class="section">
        100% trusted car rental platform in Pakistan
    </div>  
    <div class="custom-container">
        <div class="left-rectangle">
            <h3>Our Premium Garage</h3>
            <p>Experience luxury with our latest models featuring advanced comfort and technology.</p>
            <a href="{{ url('/rental-deals') }}"><button>View Vehicles</button></a>
        </div>
        <div class="right-rectangle">
            <img src="{{ asset('images/header-car.jpg') }}" alt="Premium Rental Vehicle">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
