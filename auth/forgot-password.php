<?php
/**
 * Forgot Password Page
 * 
 * Renders the password recovery form.
 * Contains placeholders for triggering Firebase Auth password reset emails.
 * 
 * Project: Student Management Portal
 */

$page_title = "Reset Password - Student Management Portal";
$base_path = "../";
include $base_path . 'includes/header.php';
?>

<div class="container-fluid bg-light min-vh-100 d-flex align-items-center justify-content-center">
    <div class="card card-premium shadow p-4" style="width: 100%; max-width: 420px; border-radius: 16px;">
        <div class="card-body">
            <div class="text-center mb-4">
                <h3 class="fw-bold text-primary">Recover Password</h3>
                <p class="text-muted small">We'll send you an email with password reset instructions.</p>
            </div>
            
            <!-- Reset Form Placeholder -->
            <form action="login.php" method="POST" id="resetPasswordForm">
                <div class="mb-4">
                    <label for="email" class="form-label small fw-semibold">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fa-regular fa-envelope text-muted"></i></span>
                        <input type="email" class="form-control border-start-0 ps-0" id="email" name="email" placeholder="name@school.edu" required autocomplete="email">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold" style="border-radius: 8px;">
                    Send Reset Link
                </button>
            </form>
            
            <div class="text-center mt-4">
                <p class="small text-muted mb-0">Remembered your password? <a href="login.php" class="text-decoration-none">Back to Login</a></p>
            </div>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
