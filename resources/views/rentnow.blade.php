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
  <style>
    /* Malik Motors Rent now Custom Styles */
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

    .mm-vehicle-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 15px;x   
    }

    .mm-vehicle-content {
        padding: 0;
    }

    .mm-vehicle-details {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin: 10px 0;
    }

    .mm-detail-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 14px;
        color: #6c757d;
    }

    .mm-detail-item i {
        color: #c1121f;
    }

    .mm-vehicle-features {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
        margin: 10px 0;
    }

    .mm-feature-badge {
        background-color: #f8f9fa;
        color: #495057;
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 500;
    }

    /* Consistent styling for all primary action buttons */
    .btn-primary {
        background-color: #c1121f !important;
        border-color: #c1121f !important;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #a10e1a !important;
        border-color: #a10e1a !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(193, 18, 31, 0.3);
    }

    /* Ensure consistent styling for continue buttons */
    .continue-confirmation-btn {
        background-color: #c1121f !important;
        border-color: #c1121f !important;
    }
</style>
</head>
<body>

<!-- Booking Section -->
<div class="mm-booking-container">
    <h1 class="text-center mb-4">Select a Vehicle</h1>
    
    <div class="mm-step-indicator">
        <div class="mm-step active" id="step1">
            <div class="mm-step-number">1</div>
            <div class="mm-step-title">Choose Car</div>
        </div>
        <div class="mm-step" id="step2">
            <div class="mm-step-number">2</div>
            <div class="mm-step-title">Trip Details</div>
        </div>
        <div class="mm-step" id="step3">
            <div class="mm-step-number">3</div>
            <div class="mm-step-title">Personal info</div>
        </div>
        <div class="mm-step" id="step4">
            <div class="mm-step-number">4</div>
            <div class="mm-step-title">Confirmation</div>
        </div>
    </div>

    <div class="mm-vehicle-section">
        <div class="mm-vehicle-grid">
            <div class="mm-vehicle-card">
                <img src="{{ asset('images/corolla.jpg') }}" alt="Toyota Corolla" class="mm-vehicle-image">
                <div class="mm-vehicle-content">
                    <h3 class="mm-vehicle-name">Toyota Corolla</h3>
                    <div class="mm-vehicle-type">Sedan • 5 seats • Automatic</div>
                    <div class="mm-vehicle-details">
                        <div class="mm-detail-item">
                            <i class="fas fa-gas-pump"></i> Petrol
                        </div>
                        <div class="mm-detail-item">
                            <i class="fas fa-snowflake"></i> AC
                        </div>
                        <div class="mm-detail-item">
                            <i class="fas fa-bluetooth"></i> Bluetooth
                        </div>
                        <div class="mm-detail-item">
                            <i class="fas fa-shield-alt"></i> Airbags
                        </div>
                    </div>
                    <div class="mm-vehicle-price">Rs5,000/day</div>
                    <div class="mm-vehicle-features">
                        <span class="mm-feature-badge">GPS</span>
                        <span class="mm-feature-badge">Insurance</span>
                        <span class="mm-feature-badge">24/7 Support</span>
                    </div>
                    <button class="mm-btn-select">Select This Car</button>
                </div>
            </div>
            
            <div class="mm-vehicle-card">
                <img src="{{ asset('images/Swift.jpg') }}" alt="Suzuki Swift" class="mm-vehicle-image">
                <div class="mm-vehicle-content">
                    <h3 class="mm-vehicle-name">Suzuki Swift</h3>
                    <div class="mm-vehicle-type">Hatchback • 5 seats • Manual</div>
                    <div class="mm-vehicle-details">
                        <div class="mm-detail-item">
                            <i class="fas fa-gas-pump"></i> Petrol
                        </div>
                        <div class="mm-detail-item">
                            <i class="fas fa-snowflake"></i> AC
                        </div>
                        <div class="mm-detail-item">
                            <i class="fas fa-bluetooth"></i> Bluetooth
                        </div>
                        <div class="mm-detail-item">
                            <i class="fas fa-shield-alt"></i> Airbags
                        </div>
                    </div>
                    <div class="mm-vehicle-price">Rs3,500/day</div>
                    <div class="mm-vehicle-features">
                        <span class="mm-feature-badge">GPS</span>
                        <span class="mm-feature-badge">Insurance</span>
                        <span class="mm-feature-badge">24/7 Support</span>
                    </div>
                    <button class="mm-btn-select">Select This Car</button>
                </div>
            </div>
            
            <div class="mm-vehicle-card">
                <img src="{{ asset('images/Civic.jpg') }}" alt="Honda Civic" class="mm-vehicle-image">
                <div class="mm-vehicle-content">
                    <h3 class="mm-vehicle-name">Honda Civic</h3>
                    <div class="mm-vehicle-type">Sedan • 5 seats • Automatic</div>
                    <div class="mm-vehicle-details">
                        <div class="mm-detail-item">
                            <i class="fas fa-gas-pump"></i> Petrol
                        </div>
                        <div class="mm-detail-item">
                            <i class="fas fa-snowflake"></i> AC
                        </div>
                        <div class="mm-detail-item">
                            <i class="fas fa-bluetooth"></i> Bluetooth
                        </div>
                        <div class="mm-detail-item">
                            <i class="fas fa-shield-alt"></i> Airbags
                        </div>
                    </div>
                    <div class="mm-vehicle-price">Rs4,500/day</div>
                    <div class="mm-vehicle-features">
                        <span class="mm-feature-badge">GPS</span>
                        <span class="mm-feature-badge">Insurance</span>
                        <span class="mm-feature-badge">24/7 Support</span>
                    </div>
                    <button class="mm-btn-select">Select This Car</button>
                </div>
            </div>
            
            <div class="mm-vehicle-card">
                <img src="{{ asset('images/Fortuner.jpg') }}" alt="Toyota Fortuner" class="mm-vehicle-image">
                <div class="mm-vehicle-content">
                    <h3 class="mm-vehicle-name">Toyota Fortuner</h3>
                    <div class="mm-vehicle-type">SUV • 7 seats • Automatic</div>
                    <div class="mm-vehicle-details">
                        <div class="mm-detail-item">
                            <i class="fas fa-gas-pump"></i> Diesel
                        </div>
                        <div class="mm-detail-item">
                            <i class="fas fa-snowflake"></i> Dual AC
                        </div>
                        <div class="mm-detail-item">
                            <i class="fas fa-bluetooth"></i> Bluetooth
                        </div>
                        <div class="mm-detail-item">
                            <i class="fas fa-shield-alt"></i> Airbags
                        </div>
                    </div>
                    <div class="mm-vehicle-price">Rs15,000/day</div>
                    <div class="mm-vehicle-features">
                        <span class="mm-feature-badge">GPS</span>
                        <span class="mm-feature-badge">Insurance</span>
                        <span class="mm-feature-badge">24/7 Support</span>
                        <span class="mm-feature-badge">4WD</span>
                    </div>
                    <button class="mm-btn-select">Select This Car</button>
                </div>
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

<!-- Trip Details Section -->
<div class="mm-trip-details" id="tripDetailsSection" style="display: none;">
    <div class="mm-booking-container">
        <h2 class="mm-section-title">Trip Details</h2>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Pickup Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="pickupLocation" class="form-label">Pickup Location</label>
                            <input type="text" class="form-control" id="pickupLocation" placeholder="Enter pickup location">
                        </div>
                        <div class="mb-3">
                            <label for="pickupDate" class="form-label">Pickup Date</label>
                            <input type="date" class="form-control" id="pickupDate">
                        </div>
                        <div class="mb-3">
                            <label for="pickupTime" class="form-label">Pickup Time</label>
                            <input type="time" class="form-control" id="pickupTime">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Return Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="returnLocation" class="form-label">Return Location</label>
                            <input type="text" class="form-control" id="returnLocation" placeholder="Enter return location">
                        </div>
                        <div class="mb-3">
                            <label for="returnDate" class="form-label">Return Date</label>
                            <input type="date" class="form-control" id="returnDate">
                        </div>
                        <div class="mb-3">
                            <label for="returnTime" class="form-label">Return Time</label>
                            <input type="time" class="form-control" id="returnTime">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Selected Vehicle</h5>
                    </div>
                    <div class="card-body">
                        <div id="selectedVehicleDetails">
                            <!-- Vehicle details will be populated here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-12 text-center">
                <button class="btn btn-secondary me-2" onclick="goBackToVehicles()">Back to Vehicles</button>
                <button class="btn btn-primary" style="background-color: #c1121f; border-color: #c1121f;" onclick="proceedToPersonalInfo()">Continue to Personal Info</button>
            </div>
        </div>
    </div>
</div>

<!-- Personal Details Section -->
<div class="mm-personal-info" id="personalInfoSection" style="display: none;">
    <div class="mm-booking-container">
        <h2 class="mm-section-title">Personal Details</h2>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5>Contact Information</h5>
                    </div>
                    <div class="card-body">
                        <form id="personalDetailsForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="fullName" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cnic" class="form-label">CNIC Number *</label>
                                    <input type="text" class="form-control" id="cnic" name="cnic" placeholder="XXXXX-XXXXXXX-X" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="address" class="form-label">Address *</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="city" class="form-label">City *</label>
                                    <input type="text" class="form-control" id="city" name="city" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="zipCode" class="form-label">ZIP Code *</label>
                                    <input type="text" class="form-control" id="zipCode" name="zipCode" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="drivingLicense" class="form-label">Driving License Number *</label>
                                <input type="text" class="form-control" id="drivingLicense" name="drivingLicense" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="licenseExpiry" class="form-label">License Expiry Date *</label>
                                <input type="date" class="form-control" id="licenseExpiry" name="licenseExpiry" required>
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="termsAgreement" required>
                                    <label class="form-check-label" for="termsAgreement">
                                        I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms and Conditions</a>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="ageConfirmation" required>
                                    <label class="form-check-label" for="ageConfirmation">
                                        I confirm that I am 21 years or older and have a valid driving license
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="card mt-4">
                    <div class="card-header">
                        <h5>Additional Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="specialRequests" class="form-label">Special Requests or Notes</label>
                            <textarea class="form-control" id="specialRequests" name="specialRequests" rows="3" placeholder="Any special requirements or notes..."></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <button class="btn btn-secondary me-2" onclick="goBackToTripDetails()">Back to Trip Details</button>
                    <button class="btn btn-primary continue-confirmation-btn" style="background-color: #c1121f; border-color: #c1121f;" onclick="proceedToConfirmation()">Continue to Confirmation</button>
                </div>
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

            // Set today's date as minimum for date inputs
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('pickupDate').setAttribute('min', today);
            document.getElementById('returnDate').setAttribute('min', today);
        });

        // Function to select a car and show trip details
        function selectCar(carName, carType, carPrice, carImage) {
            // Hide vehicle selection section
            document.querySelector('.mm-vehicle-section').style.display = 'none';
            document.querySelector('.mm-features-section').style.display = 'none';
            document.querySelector('.mm-divider').style.display = 'none';
            document.querySelector('.mm-help-section').style.display = 'none';
            
            // Update step indicators
            document.getElementById('step1').classList.remove('active');
            document.getElementById('step2').classList.add('active');
            
            // Show trip details section
            document.getElementById('tripDetailsSection').style.display = 'block';
            
            // Populate selected vehicle details
            const vehicleDetails = document.getElementById('selectedVehicleDetails');
            vehicleDetails.innerHTML = `
                <div class="row">
                    <div class="col-md-4">
                        <img src="${carImage}" alt="${carName}" class="mm-vehicle-image" style="height: 150px;">
                    </div>
                    <div class="col-md-8">
                        <h4>${carName}</h4>
                        <p class="text-muted">${carType}</p>
                        <h5 class="text-danger">${carPrice}</h5>
                    </div>
                </div>
            `;
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Function to go back to vehicle selection
        function goBackToVehicles() {
            // Hide trip details section
            document.getElementById('tripDetailsSection').style.display = 'none';
            
            // Update step indicators
            document.getElementById('step2').classList.remove('active');
            document.getElementById('step1').classList.add('active');
            
            // Show vehicle selection section
            document.querySelector('.mm-vehicle-section').style.display = 'block';
            document.querySelector('.mm-features-section').style.display = 'block';
            document.querySelector('.mm-divider').style.display = 'block';
            document.querySelector('.mm-help-section').style.display = 'block';
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Function to proceed to personal info
        function proceedToPersonalInfo() {
            // Validate trip details
            const pickupLocation = document.getElementById('pickupLocation').value;
            const pickupDate = document.getElementById('pickupDate').value;
            const pickupTime = document.getElementById('pickupTime').value;
            const returnLocation = document.getElementById('returnLocation').value;
            const returnDate = document.getElementById('returnDate').value;
            const returnTime = document.getElementById('returnTime').value;

            if (!pickupLocation || !pickupDate || !pickupTime || !returnLocation || !returnDate || !returnTime) {
                alert('Please fill in all required fields before proceeding.');
                return;
            }

            // Validate dates
            const pickup = new Date(pickupDate + 'T' + pickupTime);
            const returnD = new Date(returnDate + 'T' + returnTime);
            
            if (returnD <= pickup) {
                alert('Return date and time must be after pickup date and time.');
                return;
            }

            // Hide trip details section
            document.getElementById('tripDetailsSection').style.display = 'none';
            
            // Update step indicators
            document.getElementById('step2').classList.remove('active');
            document.getElementById('step3').classList.add('active');
            
            // Show personal info section
            document.getElementById('personalInfoSection').style.display = 'block';
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Function to go back to trip details
        function goBackToTripDetails() {
            // Hide personal info section
            document.getElementById('personalInfoSection').style.display = 'none';
            
            // Update step indicators
            document.getElementById('step3').classList.remove('active');
            document.getElementById('step2').classList.add('active');
            
            // Show trip details section
            document.getElementById('tripDetailsSection').style.display = 'block';
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Function to proceed to confirmation
        function proceedToConfirmation() {
            // Validate personal info
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const address = document.getElementById('address').value;

            if (!fullName || !email || !phone || !address) {
                alert('Please fill in all required fields before proceeding.');
                return;
            }

            // Hide personal info section
            document.getElementById('personalInfoSection').style.display = 'none';
            
            // Update step indicators
            document.getElementById('step3').classList.remove('active');
            document.getElementById('step4').classList.add('active');
            
            // Show confirmation section
            document.getElementById('confirmationSection').style.display = 'block';
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Add click event listeners to all select buttons
        document.addEventListener('DOMContentLoaded', function() {
            const selectButtons = document.querySelectorAll('.mm-btn-select');
            selectButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const card = this.closest('.mm-vehicle-card');
                    const carName = card.querySelector('.mm-vehicle-name').textContent;
                    const carType = card.querySelector('.mm-vehicle-type').textContent;
                    const carPrice = card.querySelector('.mm-vehicle-price').textContent;
                    const carImage = card.querySelector('.mm-vehicle-image').src;
                    
                    selectCar(carName, carType, carPrice, carImage);
                });
            });
        });
    </script>

  </body>
  </html>  