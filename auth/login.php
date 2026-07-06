<?php
/**
 * Login Page
 * 
 * Renders the login form using Bootstrap 5.
 * Contains placeholders for Firebase Auth credentials verification.
 * 
 * Project: Student Management Portal
 */

$page_title = "Login - Student Management Portal";
$base_path = "../";
include $base_path . 'includes/header.php';
?>

<div class="container-fluid bg-light min-vh-100 d-flex align-items-center justify-content-center">
    <div class="card card-premium shadow p-4" style="width: 100%; max-width: 420px; border-radius: 16px;">
        <div class="card-body">
            <div class="text-center mb-4">
                <h3 class="fw-bold text-primary">Portal Login</h3>
                <p class="text-muted small">Access your student management account</p>
            </div>
            
            <!-- Login Form Placeholder -->
            <form action="<?php echo $base_path; ?>dashboard/dashboard.php" method="POST" id="loginForm">
                <div class="mb-3">
                    <label for="email" class="form-label small fw-semibold">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fa-regular fa-envelope text-muted"></i></span>
                        <input type="email" class="form-control border-start-0 ps-0" id="email" name="email" placeholder="name@school.edu" required autocomplete="email">
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label small fw-semibold">Password</label>
                        <a href="forgot-password.php" class="small text-decoration-none">Forgot Password?</a>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-lock text-muted"></i></span>
                        <input type="password" class="form-control border-start-0 ps-0" id="password" name="password" placeholder="••••••••" required autocomplete="current-password">
                    </div>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label small" for="rememberMe">Remember me</label>
                </div>
                
                <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold" style="border-radius: 8px;">
                    Sign In
                </button>
            </form>
            
            <div class="text-center mt-4">
                <p class="small text-muted mb-0">Don't have an account? <a href="register.php" class="text-decoration-none">Register here</a></p>
            </div>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
