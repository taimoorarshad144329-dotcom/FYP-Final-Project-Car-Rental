{{-- Centralized Login and Registration Modals Component --}}

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
                        <a href="#">Forgot password?</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p class="text-center w-100">Don't have an account? 
                    <a href="#" data-bs-toggle="modal" data-bs-target="#registrationModal" data-bs-dismiss="modal">Register</a>
                </p>
            </div>
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
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="registerName" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="registerEmail" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="termsCheck" name="terms" required>
                        <label class="form-check-label" for="termsCheck">I agree to the Terms & Conditions</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
            <div class="modal-footer">
                <p class="text-center w-100">Already have an account? 
                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Login</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Scripts -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle modal switching
        const loginModalTrigger = document.querySelector('[data-bs-target="#loginModal"]');
        const registerModalTrigger = document.querySelector('[data-bs-target="#registrationModal"]');
        
        // Close registration modal and open login modal
        document.addEventListener('click', function(e) {
            if (e.target.matches('[data-bs-target="#loginModal"][data-bs-dismiss="modal"]')) {
                const registrationModal = bootstrap.Modal.getInstance(document.getElementById('registrationModal'));
                if (registrationModal) registrationModal.hide();
            }
            
            // Close login modal and open registration modal
            if (e.target.matches('[data-bs-target="#registrationModal"][data-bs-dismiss="modal"]')) {
                const loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
                if (loginModal) loginModal.hide();
            }
        });
    });
</script>
