<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malik Motors</title>
    <link rel="stylesheet" href="{{ asset('css/manual-styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logo.jpg') }}">
      <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
   
    <div class="container">
        <div class="header">
            <img src="{{ asset('images/logo.jpg') }}" alt="Malik Motors Logo" class="logo">
            <a href="{{ url('/') }}" class="header-link"><h1>Malik Motors</h1></a>
            
            <!-- NAVIGATION BAR INSIDE HEADER -->
            <div class="nav-wrapper">
                <nav class="navigation">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/about') }}">About</a>
                    <a href="{{ url('/rental-deals') }}">Rental Deals</a>
                    <a href="{{ url('/contact-us') }}">Contact Us</a>
                    <a href="{{ url('/rent-now') }}">Rent Now</a>
                </nav>
                <button class="register" data-bs-toggle="modal" data-bs-target="#registrationModal">Register</button>
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
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="loginEmail" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="loginPassword" placeholder="Password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
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
<!-- <div class="search-container">
    <h2>Search for Cars</h2>
    <p>Find the best and most affordable cars</p>
  
    <h3 style="color: #c1121f;">Rent a Car</h3>
    
    <div class="radio-options">
        <div class="radio-option">
            <input type="radio" id="with-driver" name="rental-type" checked>
            <label for="with-driver">Rent with driver</label>
        </div>
        <div class="radio-option">
            <input type="radio" id="within-city" name="rental-type">
            <label for="within-city">Within City</label>
        </div>
        <div class="radio-option">
            <input type="radio" id="out-of-city" name="rental-type">
            <label for="out-of-city">Out of City</label>
        </div>
    </div>
  
    <hr class="divider">
  
    <div class="form-group">
        <label for="city">City</label>
        <select id="city" name="city">
            <option value="">Select your city</option>
            <option value="gujranwala">Gujranwala</option>
            <option value="lahore">Lahore</option>
            <option value="islamabad">Islamabad</option>
            <option value="rawalpindi">Rawalpindi</option>
        </select>
    </div>
    <div class="form-group">
        <label for="name">Your Name</label>
        <input type="name" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="phone">Your Phone no.</label>
        <input type="tel" id="name" name="phone">
    </div>
    <div class="form-group">
        <label class="question-label">Do you have a driving license?</label>
        <div class="option-container">
          <div class="option-item">
            <input type="radio" id="driver-yes" name="driver-required" value="yes" checked>
            <label for="driver-yes" class="option-label">Yes</label>
          </div>
          <div class="option-item">
            <input type="radio" id="driver-no" name="driver-required" value="no">
            <label for="driver-no" class="option-label">No</label>
          </div>
        </div>
      </div>
    <div class="form-group">
        <label for="pickup-date">Pickup Date</label>
        <input type="date" id="pickup-date" name="pickup-date">
    </div>
  
    <div class="form-group">
        <label for="pickup-time">Pick-up Time</label>
        <input type="time" id="pickup-time" name="pickup-time">
    </div>
  
    <div class="form-group">
        <label for="dropoff-date">Dropoff Date</label>
        <input type="date" id="dropoff-date" name="dropoff-date">
    </div>
  
    <div class="form-group">
        <label for="dropoff-time">Drop-off Time</label>
        <input type="time" id="dropoff-time" name="dropoff-time">
    </div>
    <button type="submit" class="search-button" style="background-color: #c1121f;">Book a Car</button>
  </div>
  <input type="checkbox" id="driver-yes" name="driver-option" value="yes"> -->
  
  <style>
    /* Malik Motors Custom Styles */
    .mm-booking-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .mm-step-indicator {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
    }
    
    .mm-step {
        text-align: center;
        padding: 0 20px;
        position: relative;
    }
    
    .mm-step-number {
        width: 30px;
        height: 30px;
        background-color: #e9ecef;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 5px;
        font-weight: bold;
        color: #6c757d;
    }
    
    .mm-step.active .mm-step-number {
        background-color: #c1121f;
        color: white;
    }
    
    .mm-step-title {
        font-size: 14px;
        color: #6c757d;
        text-transform: uppercase;
        font-weight: 500;
    }
    
    .mm-step.active .mm-step-title {
        color: #c1121f;
    }
    
    .mm-vehicle-section {
        margin-bottom: 40px;
    }
    
    .mm-section-title {
        font-size: 24px;
        margin-bottom: 20px;
        color: #212529;
        font-weight: 600;
    }
    
    .mm-vehicle-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }
    
    .mm-vehicle-card {
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 20px;
        transition: all 0.3s ease;
    }
    
    .mm-vehicle-card:hover {
        border-color: #c1121f;
        box-shadow: 0 5px 15px rgba(193, 18, 31, 0.1);
    }
    
    .mm-vehicle-name {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 5px;
    }
    
    .mm-vehicle-type {
        color: #6c757d;
        font-size: 14px;
        margin-bottom: 10px;
    }
    
    .mm-vehicle-price {
        font-size: 16px;
        font-weight: 600;
        color: #c1121f;
        margin: 10px 0;
    }
    
    .mm-btn-select {
        background-color: #c1121f;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 8px 20px;
        font-weight: 500;
        transition: all 0.3s;
        width: 100%;
    }
    
    .mm-btn-select:hover {
        background-color: #a10e1a;
        transform: translateY(-2px);
    }
    
    .mm-features-section {
        margin: 40px 0;
    }
    
    .mm-features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }
    
    .mm-feature-item {
        margin-bottom: 15px;
    }
    
    .mm-feature-title {
        font-weight: 600;
        margin-bottom: 5px;
    }
    
    .mm-feature-desc {
        color: #6c757d;
        font-size: 14px;
    }
    
    .mm-divider {
        height: 1px;
        background-color: #dee2e6;
        margin: 30px 0;
    }
    
    .mm-help-section {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
    }
</style>
</head>
<body>
<!-- Navigation bar removed - keeping only the first one -->

<!-- Booking Section -->
<div class="mm-booking-container">
    <h1 class="text-center mb-4">Select a Vehicle</h1>
    
    <div class="mm-step-indicator">
        <div class="mm-step active">
            <div class="mm-step-number">1</div>
            <div class="mm-step-title">Choose Car</div>
        </div>
        <div class="mm-step">
            <div class="mm-step-number">2</div>
            <div class="mm-step-title">Trip Details</div>
        </div>
        <div class="mm-step">
            <div class="mm-step-number">3</div>
            <div class="mm-step-title">Personal info</div>
        </div>
        <div class="mm-step">
            <div class="mm-step-number">4</div>
            <div class="mm-step-title">Confirmation</div>
        </div>
    </div>

    <div class="mm-vehicle-section">
        <div class="mm-vehicle-grid">
            <div class="mm-vehicle-card">
                <h3 class="mm-vehicle-name">Toyota Corolla</h3>
                <div class="mm-vehicle-type">Sedan • 5 seats</div>
                <div class="mm-vehicle-price">Rs5000/day</div>
                <button class="mm-btn-select">Select This Car</button>
            </div>
            
            <div class="mm-vehicle-card">
                <h3 class="mm-vehicle-name">Suzuki Swift</h3>
                <div class="mm-vehicle-type">Hatchback • 5 seats</div>
                <div class="mm-vehicle-price">Rs3500/day</div>
                <button class="mm-btn-select">Select This Car</button>
            </div>
            
            <div class="mm-vehicle-card">
                <h3 class="mm-vehicle-name">Honda Civic</h3>
                <div class="mm-vehicle-type">Sedan • 5 seats</div>
                <div class="mm-vehicle-price">Rs4500/day</div>
                <button class="mm-btn-select">Select This Car</button>
            </div>
            
            <div class="mm-vehicle-card">
                <h3 class="mm-vehicle-name">Toyota Fortuner</h3>
                <div class="mm-vehicle-type">SUV • 7 seats</div>
                <div class="mm-vehicle-price">Rs15000/day</div>
                <button class="mm-btn-select">Select This Car</button>
            </div>
        </div>
    </div>

    <div class="mm-features-section">
        <h2 class="mm-section-title">Why Choose Us</h2>
        
        <div class="mm-features-grid">
            <div class="mm-feature-item">
                <h5 class="mm-feature-title">Flexible Rental Options</h5>
                <p class="mm-feature-desc">Choose from hourly, daily, or weekly rentals to fit your needs.</p>
            </div>
            
            <div class="mm-feature-item">
                <h5 class="mm-feature-title">No Hidden Fees</h5>
                <p class="mm-feature-desc">Transparent pricing with no surprise charges.</p>
            </div>
            
            <div class="mm-feature-item">
                <h5 class="mm-feature-title">24/7 Customer Support</h5>
                <p class="mm-feature-desc">Our customer service team is available around the clock.</p>
            </div>
            
            <div class="mm-feature-item">
                <h5 class="mm-feature-title">Free Cancellation</h5>
                <p class="mm-feature-desc">Cancel up to 24 hours before pickup with no penalty.</p>
            </div>
        </div>
    </div>

    <div class="mm-divider"></div>

    <div class="mm-help-section">
        <h5 class="mb-3">Need Help?</h5>
        <div class="d-flex align-items-center">
            <i class="fas fa-phone-alt me-3" style="color: #c1121f;"></i>
            <div>
                <p class="mb-0">Call Us</p>
                <h6 class="mb-0">+92-324-867000</h6>
            </div>
        </div>
    </div>
</div>

<!-- Your existing modals and scripts -->
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
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="loginEmail" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="loginPassword" placeholder="Password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
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