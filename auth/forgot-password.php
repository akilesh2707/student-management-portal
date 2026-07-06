<?php
/**
 * Forgot Password Page
 * 
 * Renders the password recovery form.
 * Implements mock PHP reset request logging.
 * 
 * Project: Student Management Portal
 */

$page_title = "Reset Password - Student Management Portal";
$base_path = "../";

include $base_path . 'includes/session.php';

// If already logged in, redirect to dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: " . $base_path . "dashboard/dashboard.php");
    exit();
}

$success_message = "";

// Handle Password Reset Request (Mockup)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    
    // Set mock success message
    if (!empty($email)) {
        $success_message = "If an account exists for <strong>" . htmlspecialchars($email) . "</strong>, we have sent a recovery email containing instructions to reset your password.";
    }
}

include $base_path . 'includes/header.php';
?>

<div class="auth-wrapper min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="auth-bg-blobs">
        <div class="auth-blob blob-1"></div>
        <div class="auth-blob blob-2"></div>
    </div>
    
    <div class="card card-premium shadow p-4 position-relative z-1" style="width: 100%; max-width: 440px;">
        <div class="card-body">
            <div class="text-center mb-4">
                <a href="<?php echo $base_path; ?>index.php" class="d-inline-flex align-items-center text-decoration-none mb-3">
                    <i class="fa-solid fa-graduation-cap fa-2x text-primary me-2"></i>
                    <span class="fs-4 fw-bold text-dark font-outfit">Student Portal</span>
                </a>
                <h3 class="fw-bold text-dark font-outfit">Recover Password</h3>
                <p class="text-muted small">Enter your email and we'll send you a password recovery link</p>
            </div>

            <!-- Success Alert -->
            <?php if (!empty($success_message)): ?>
                <div class="alert alert-success alert-dismissible fade show small mb-4" role="alert">
                    <i class="fa-solid fa-circle-check me-2"></i> <?php echo $success_message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <!-- Recovery Form -->
            <form action="forgot-password.php" method="POST" class="needs-validation" id="forgotPasswordForm" novalidate>
                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="form-label small fw-bold">Email Address</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-regular fa-envelope"></i></span>
                        <input type="email" class="form-control border-start-0 ps-0" id="email" name="email" placeholder="name@school.edu" required autocomplete="email">
                        <div class="invalid-feedback">Please enter a valid school email address.</div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold shadow-primary mb-3" style="border-radius: 10px;">
                    Send Reset Link
                </button>
            </form>

            <div class="text-center mt-3">
                <p class="small text-muted mb-0"><a href="login.php" class="text-decoration-none fw-semibold"><i class="fa-solid fa-arrow-left me-1"></i> Back to Login</a></p>
            </div>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
