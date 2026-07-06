<?php
/**
 * Registration Page
 * 
 * Renders the student signup/registration form using Bootstrap 5.
 * Contains placeholders for Firebase Auth signup and user collection seeding.
 * 
 * Project: Student Management Portal
 */

$page_title = "Register - Student Management Portal";
$base_path = "../";
include $base_path . 'includes/header.php';
?>

<div class="container-fluid bg-light min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="card card-premium shadow p-4" style="width: 100%; max-width: 480px; border-radius: 16px;">
        <div class="card-body">
            <div class="text-center mb-4">
                <h3 class="fw-bold text-primary">Student Registration</h3>
                <p class="text-muted small">Create your portal access account</p>
            </div>
            
            <!-- Registration Form Placeholder -->
            <form action="login.php" method="POST" id="registerForm">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label small fw-semibold">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="first_name" placeholder="John" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label small fw-semibold">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Doe" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="studentId" class="form-label small fw-semibold">Student ID / Roll Number</label>
                    <input type="text" class="form-control" id="studentId" name="student_id" placeholder="STU12345" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label small fw-semibold">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@school.edu" required autocomplete="email">
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label small fw-semibold">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Min. 8 characters" required autocomplete="new-password">
                </div>

                <div class="mb-3">
                    <label for="confirmPassword" class="form-label small fw-semibold">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirm_password" placeholder="Confirm your password" required autocomplete="new-password">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="terms" required>
                    <label class="form-check-label small" for="terms">I agree to the portal privacy policy</label>
                </div>
                
                <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold" style="border-radius: 8px;">
                    Register
                </button>
            </form>
            
            <div class="text-center mt-4">
                <p class="small text-muted mb-0">Already have an account? <a href="login.php" class="text-decoration-none">Login here</a></p>
            </div>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
