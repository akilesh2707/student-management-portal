<?php
/**
 * Registration Page
 * 
 * Renders the signup form with local mock PHP session database seeding.
 * 
 * Project: Student Management Portal
 */

$page_title = "Register - Student Management Portal";
$base_path = "../";

include $base_path . 'includes/session.php';

// If already logged in, redirect to dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: " . $base_path . "dashboard/dashboard.php");
    exit();
}

$error_message = "";

// Handle registration request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = filter_input(INPUT_POST, 'fullName', FILTER_SANITIZE_SPECIAL_CHARS);
    $roll_number = filter_input(INPUT_POST, 'rollNumber', FILTER_SANITIZE_SPECIAL_CHARS);
    $department = filter_input(INPUT_POST, 'department', FILTER_SANITIZE_SPECIAL_CHARS);
    $year = filter_input(INPUT_POST, 'year', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmPassword'];

    // Verify passwords match
    if ($password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } elseif (strlen($password) < 6) {
        $error_message = "Password must be at least 6 characters long.";
    } else {
        // Save mock registration credentials in session
        $_SESSION['mock_email'] = $email;
        $_SESSION['mock_password'] = $password;
        $_SESSION['mock_name'] = $full_name;
        $_SESSION['mock_roll_number'] = $roll_number;
        $_SESSION['mock_department'] = $department;
        $_SESSION['mock_year'] = $year;

        // Redirect to login page with success flag
        header("Location: login.php?registered=success");
        exit();
    }
}

include $base_path . 'includes/header.php';
?>

<div class="auth-wrapper min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="auth-bg-blobs">
        <div class="auth-blob blob-1"></div>
        <div class="auth-blob blob-2"></div>
    </div>
    
    <div class="card card-premium shadow p-4 position-relative z-1 my-4" style="width: 100%; max-width: 520px;">
        <div class="card-body">
            <div class="text-center mb-4">
                <a href="<?php echo $base_path; ?>index.php" class="d-inline-flex align-items-center text-decoration-none mb-3">
                    <i class="fa-solid fa-graduation-cap fa-2x text-primary me-2"></i>
                    <span class="fs-4 fw-bold text-dark font-outfit">Student Portal</span>
                </a>
                <h3 class="fw-bold text-dark font-outfit">Create Account</h3>
                <p class="text-muted small">Fill out the form below to register your account</p>
            </div>

            <!-- Error message alert -->
            <?php if (!empty($error_message)): ?>
                <div class="alert alert-danger alert-dismissible fade show small" role="alert">
                    <i class="fa-solid fa-circle-exclamation me-2"></i> <?php echo $error_message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <!-- Registration Form -->
            <form action="register.php" method="POST" class="needs-validation" id="registerForm" novalidate>
                <!-- Full Name & Roll Number row -->
                <div class="row g-3 mb-3">
                    <div class="col-sm-6">
                        <label for="fullName" class="form-label small fw-bold">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="John Doe" required>
                        <div class="invalid-feedback">Please enter your full name.</div>
                    </div>
                    <div class="col-sm-6">
                        <label for="rollNumber" class="form-label small fw-bold">Roll Number</label>
                        <input type="text" class="form-control" id="rollNumber" name="rollNumber" placeholder="STU12345" required>
                        <div class="invalid-feedback">Please enter your Roll/Student ID.</div>
                    </div>
                </div>

                <!-- Department & Year row -->
                <div class="row g-3 mb-3">
                    <div class="col-sm-6">
                        <label for="department" class="form-label small fw-bold">Department</label>
                        <select class="form-select" id="department" name="department" required>
                            <option value="" disabled selected>Select Department</option>
                            <option value="Computer Science">Computer Science & Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Electrical Engineering">Electrical Engineering</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Information Technology">Information Technology</option>
                        </select>
                        <div class="invalid-feedback">Please select your department.</div>
                    </div>
                    <div class="col-sm-6">
                        <label for="year" class="form-label small fw-bold">Academic Year</label>
                        <select class="form-select" id="year" name="year" required>
                            <option value="" disabled selected>Select Year</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                        <div class="invalid-feedback">Please select your academic year.</div>
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label small fw-bold">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@school.edu" required autocomplete="email">
                    <div class="invalid-feedback">Please enter a valid school email address.</div>
                </div>

                <!-- Password & Confirm Password row -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <label for="password" class="form-label small fw-bold">Password</label>
                        <div class="input-group has-validation">
                            <input type="password" class="form-control border-end-0" id="password" name="password" placeholder="Min. 6 chars" required autocomplete="new-password" minlength="6">
                            <button class="btn btn-outline-secondary border-start-0 text-muted bg-white toggle-password" type="button" data-target="password">
                                <i class="fa-regular fa-eye-slash"></i>
                            </button>
                            <div class="invalid-feedback">Min. 6 characters required.</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="confirmPassword" class="form-label small fw-bold">Confirm Password</label>
                        <div class="input-group has-validation">
                            <input type="password" class="form-control border-end-0" id="confirmPassword" name="confirmPassword" placeholder="Repeat password" required autocomplete="new-password">
                            <button class="btn btn-outline-secondary border-start-0 text-muted bg-white toggle-password" type="button" data-target="confirmPassword">
                                <i class="fa-regular fa-eye-slash"></i>
                            </button>
                            <div class="invalid-feedback">Passwords must match.</div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold shadow-primary mb-3" style="border-radius: 10px;">
                    Create Account
                </button>
            </form>

            <div class="text-center mt-3">
                <p class="small text-muted mb-0">Already have an account? <a href="login.php" class="text-decoration-none fw-semibold">Sign in</a></p>
            </div>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
