<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Deals - Malik Motors</title>
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
                <button class="register" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
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
    <div class="cars-section">
        <h2 class="section-title">Our Fleet</h2>
        <div class="cars-container">
            <div class="car-card">
                <img src="{{ asset('images/corolla.jpg') }}" alt="Toyota Corolla">
                <h3>Toyota Corolla</h3>
                <p>Automatic | 2022 Model</p>
                <p class="price">Rs5000/day</p>
                <button class="rent-btn" data-car="Toyota Corolla" data-price="5000">Rent Now</button>
            </div>
            <div class="car-card">
                <img src="{{ asset('images/Civic.jpg') }}" alt="Honda Civic">
                <h3>Honda Civic</h3>
                <p>Automatic | 2021 Model</p>
                <p class="price">Rs4500/day</p>
                <button class="rent-btn" data-car="Honda Civic" data-price="4500">Rent Now</button>
            </div>
            <div class="car-card">
                <img src="{{ asset('images/Swift.jpg') }}" alt="Suzuki Swift">
                <h3>Suzuki Swift</h3>
                <p>Manual | 2020 Model</p>
                <p class="price">Rs3500/day</p>
                <button class="rent-btn" data-car="Suzuki Swift" data-price="3500">Rent Now</button>
            </div>
            <div class="car-card">
                <img src="{{ asset('images/Fortuner.jpg') }}" alt="Toyota Fortuner">
                <h3>Toyota Fortuner</h3>
                <p>Automatic | 2021 Model</p>
                <p class="price">Rs15000/day</p>
                <button class="rent-btn" data-car="Toyota Fortuner" data-price="15000">Rent Now</button>
            </div>
        </div>
    </div>

    <!-- Rent Form Popup -->
    <div id="rentPopup" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h2>Rent <span id="selectedCar"></span></h2>
            <p>Price: Rs<span id="carPrice"></span>/day</p>
            <form id="rentForm">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" required>
                </div>
                <div class="form-group">
                    <label for="pickup">Pickup Date & Time:</label>
                    <input type="datetime-local" id="pickup" required>
                </div>
                <div class="form-group">
                    <label for="dropoff">Drop-off Date & Time:</label>
                    <input type="datetime-local" id="dropoff" required>
                </div>
                <div class="form-group">
                    <label for="address">Delivery Address (if needed):</label>
                    <textarea id="address" rows="3"></textarea>
                </div>
                <button type="submit" class="submit-btn">Confirm Rental</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all rent buttons
            const rentButtons = document.querySelectorAll('.rent-btn');
            const popup = document.getElementById('rentPopup');
            const closeBtn = document.querySelector('.close-btn');
            const selectedCarSpan = document.getElementById('selectedCar');
            const carPriceSpan = document.getElementById('carPrice');
            const rentForm = document.getElementById('rentForm');
            
            // Add click event to each rent button
            rentButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const carName = this.getAttribute('data-car');
                    const carPrice = this.getAttribute('data-price');
                    
                    selectedCarSpan.textContent = carName;
                    carPriceSpan.textContent = carPrice;
                    
                    // Show popup and disable body scroll
                    popup.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                });
            });
            
            // Close popup when clicking X
            closeBtn.addEventListener('click', function() {
                popup.style.display = 'none';
                document.body.style.overflow = 'auto';
            });
            
            // Close popup when clicking outside
            popup.addEventListener('click', function(event) {
                if (event.target === popup) {
                    popup.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });
            
            // Form submission
            rentForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const pickup = document.getElementById('pickup').value;
                const dropoff = document.getElementById('dropoff').value;
                const address = document.getElementById('address').value;
                const car = selectedCarSpan.textContent;
                const price = carPriceSpan.textContent;
                
                // Here you would typically send this data to your server
                console.log('Rental Details:', {
                    car,
                    price,
                    name,
                    email,
                    phone,
                    pickup,
                    dropoff,
                    address
                });
                
                // Show confirmation (you can replace with actual submission logic)
                alert(`Thank you, ${name}! Your rental for ${car} has been requested. We'll contact you shortly.`);
                
                // Close popup and reset form
                popup.style.display = 'none';
                document.body.style.overflow = 'auto';
                rentForm.reset();
            });
            
            // Prevent form submission when pressing Enter key outside inputs
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' && e.target.tagName !== 'INPUT' && e.target.tagName !== 'TEXTAREA') {
                    e.preventDefault();
                }
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
