// Malik Motors JavaScript - Manual Fix
document.addEventListener('DOMContentLoaded', function() {
    // Close registration modal and open login modal
    const loginModalTrigger = document.querySelector('[data-bs-target="#loginModal"]');
    const registerModalTrigger = document.querySelector('[data-bs-target="#registrationModal"]');
    
    if (loginModalTrigger) {
        loginModalTrigger.addEventListener('click', function() {
            const registrationModal = bootstrap.Modal.getInstance(document.getElementById('registrationModal'));
            if (registrationModal) {
                registrationModal.hide();
            }
        });
    }
    
    if (registerModalTrigger) {
        registerModalTrigger.addEventListener('click', function() {
            const loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
            if (loginModal) {
                loginModal.hide();
            }
        });
    }
});
