<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Malik Motors</title>
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

    <div class="section">
        100% trusted car rental platform in Pakistan
    </div>  
    <div class="car-rental-section">
        <div class="content-container">
            <div class="text-content">
                <h1>How it works</h1>
                <p>Renting a car with us is simple! Choose your vehicle, pick your dates, and complete your booking. We'll handle the rest, ensuring a smooth start to your journey.</p>
                
                <div class="step">
                    <h2>Choose Location</h2>
                    <p>Select from a variety of pick-up locations that best suit your needs, whether it's close to home, work, or airport.</p>
                </div>
                
                <div class="step">
                    <h2>Pick-up Date</h2>
                    <p>Choose the exact date and time for your car pick-up, ensuring that your vehicle is ready when you need it.</p>
                </div>
                
                <div class="step">
                    <h2>Book your Car</h2>
                    <p>Complete your booking with just a few clicks, and we'll prepare your vehicle to ensure a hassle-free pick-up.</p>
                </div>
                
                <div class="popular-deals">
                    <h2>Brands we got at Malik Motors!</h2>
                    <p>Explore our top Malik Motors deals, handpicked to give you the best value and experience. Book now and drive your favorite ride at an incredible rate!</p>
                    
                    <div class="popular-brands">
                        <div class="brand"><a href="{{ url('/rental-deals') }}">Toyota</a></div>
                        <div class="brand"><a href="{{ url('/rental-deals') }}">Honda</a></div>
                        <div class="brand"><a href="{{ url('/rental-deals') }}">Suzuki</a></div>
                        <div class="brand"><a href="{{ url('/rental-deals') }}">KIA</a></div>
                        <div class="brand"><a href="{{ url('/rental-deals') }}">Hyundai</a></div>
                    </div>
                </div>
            </div>
            
            <div class="image-content">
                <img src="{{ asset('images/red-edition-audi-luxury-car-jdc.png') }}" alt="Luxury Car for Rent" class="floating-image">
                <div class="image-overlay">
                    <h3>Premium Selection</h3>
                    <p>Experience the finest vehicles in our fleet</p>
                </div>
            </div>
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
