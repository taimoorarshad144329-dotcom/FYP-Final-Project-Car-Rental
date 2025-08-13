<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malik Motors</title>
    <link rel="stylesheet" href="C:\Users\sb\Desktop\Malik Motors FYP Project FrontEnd\Malik Motors Css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="c:\Users\sb\Desktop\Malik Motors FYP Project FrontEnd\WhatsApp Image 2025-05-06 at 17.07.38_6db52132.jpg">
</head>
<body>
    <!-- <div class="container">
        <div class="header">
            <img src="c:\Users\sb\Desktop\Malik Motors FYP Project FrontEnd\WhatsApp Image 2025-05-06 at 17.07.38_6db52132.jpg" alt="Malik Motors Logo" class="logo">
            <a href="file:///C:/Users/sb/Desktop/Malik%20Motors%20FYP%20Project%20FrontEnd/Malik%20Motors.html" class="header-link"><h1>Malik Motors</h1></a>
        </div>
    </div>
  
  <div class="nav-wrapper">
      <nav class="navigation">
          <a href="C:\Users\sb\Desktop\Malik Motors FYP Project FrontEnd\Malik Motors.html">Home</a>
          <a href="C:\Users\sb\Desktop\Malik Motors FYP Project FrontEnd\about.html">About</a>
          <a href="C:\Users\sb\Desktop\Malik Motors FYP Project FrontEnd\vehicles.html">Rental Deals</a>
          <a href="C:\Users\sb\Desktop\Malik Motors FYP Project FrontEnd\contact.html">Contact Us</a>
          <a href="C:\Users\sb\Desktop\Malik Motors FYP Project FrontEnd\rentnow.html">Rent Now</a>
      </nav>
      
      <div class="register" data-bs-toggle="modal" data-bs-target="#registrationModal">Register</div>
  </div>
</div> -->

<div class="container">
    <div class="header">
        <img src="c:\Users\sb\Desktop\Malik Motors FYP Project FrontEnd\WhatsApp Image 2025-05-06 at 17.07.38_6db52132.jpg" alt="Malik Motors Logo" class="logo">
        <a href="Malik Motors.html" class="header-link"><h1>Malik Motors</h1></a>
        
        <!-- NAVIGATION BAR INSIDE HEADER -->
        <div class="nav-wrapper">
            <nav class="navigation">
                <a href="Malik Motors.html">Home</a>
                <a href="about.html">About</a>
                <a href="vehicles.html">Rental Deals</a>
                <a href="contact.html">Contact Us</a>
                <a href="rentnow.html">Rent Now</a>
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
<div class="custom-container">
  <div class="left-rectangle">
    <h3>Our Premium Garage</h3>
    <p>Experience luxury with our latest models featuring advanced comfort and technology.</p>
    <a href="{{ url('/rental-deals') }}"><button>View Vehicles</button></a>
  </div>
  <div class="right-rectangle">
    <img src="c:\Users\sb\Desktop\Malik Motors FYP Project FrontEnd\header car.jpg" alt="Premium Rental Vehicle">
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