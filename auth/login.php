<?php
/**
 * Login Page
 * 
 * Renders the login form using Bootstrap 5.
 * Implements mock PHP session authentication.
 * 
 * Project: Student Management Portal
 */

$page_title = "Login - Student Management Portal";
$base_path = "../";

include $base_path . 'includes/session.php';

// If already logged in, redirect to dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: " . $base_path . "dashboard/dashboard.php");
    exit();
}

$error_message = "";
$success_message = "";

// Check for redirect from registration
if (isset($_GET['registered']) && $_GET['registered'] === 'success') {
    $success_message = "Registration successful! You can now log in using your credentials.";
}

// Handle Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Check credentials against session mock database or fallback defaults
    $mock_email = isset($_SESSION['mock_email']) ? $_SESSION['mock_email'] : 'student@school.edu';
    $mock_password = isset($_SESSION['mock_password']) ? $_SESSION['mock_password'] : 'password123';
    $mock_name = isset($_SESSION['mock_name']) ? $_SESSION['mock_name'] : 'Student Name';
    $mock_roll = isset($_SESSION['mock_roll_number']) ? $_SESSION['mock_roll_number'] : 'STU12345';
    $mock_dept = isset($_SESSION['mock_department']) ? $_SESSION['mock_department'] : 'Computer Science';

    if ($email === $mock_email && $password === $mock_password) {
        // Initialize Session Variables
        $_SESSION['user_id'] = $mock_roll;
        $_SESSION['user_name'] = $mock_name;
        $_SESSION['user_email'] = $mock_email;
        $_SESSION['user_dept'] = $mock_dept;
        $_SESSION['user_year'] = isset($_SESSION['mock_year']) ? $_SESSION['mock_year'] : '3rd Year';
        $_SESSION['user_semester'] = isset($_SESSION['mock_semester']) ? $_SESSION['mock_semester'] : '6th Semester';
        
        // Handle "Remember Me" mockup
        if (isset($_POST['remember'])) {
            setcookie("portal_user_email", $email, time() + (86400 * 30), "/"); // 30 days
        } else {
            if (isset($_COOKIE['portal_user_email'])) {
                setcookie("portal_user_email", "", time() - 3600, "/");
            }
        }

        header("Location: " . $base_path . "dashboard/dashboard.php");
        exit();
    } else {
        $error_message = "Invalid email or password. Hint: Try <strong>student@school.edu</strong> with password <strong>password123</strong>";
    }
}

// Check for stored cookies
$saved_email = isset($_COOKIE['portal_user_email']) ? $_COOKIE['portal_user_email'] : '';

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
                <h3 class="fw-bold text-dark font-outfit">Welcome Back</h3>
                <p class="text-muted small">Please sign in to access your dashboard</p>
            </div>

            <!-- Alerts -->
            <?php if (!empty($success_message)): ?>
                <div class="alert alert-success alert-dismissible fade show small" role="alert">
                    <i class="fa-solid fa-circle-check me-2"></i> <?php echo $success_message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if (!empty($error_message)): ?>
                <div class="alert alert-danger alert-dismissible fade show small" role="alert">
                    <i class="fa-solid fa-circle-exclamation me-2"></i> <?php echo $error_message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form action="login.php" method="POST" class="needs-validation" id="loginForm" novalidate>
                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label small fw-bold">Email Address</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-regular fa-envelope"></i></span>
                        <input type="email" class="form-control border-start-0 ps-0" id="email" name="email" value="<?php echo htmlspecialchars($saved_email); ?>" placeholder="name@school.edu" required autocomplete="email">
                        <div class="invalid-feedback">Please enter a valid school email address.</div>
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label small fw-bold">Password</label>
                        <a href="forgot-password.php" class="small text-decoration-none">Forgot Password?</a>
                    </div>
                    <div class="input-group has-validation">
                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" class="form-control border-start-0 border-end-0 ps-0" id="password" name="password" placeholder="••••••••" required autocomplete="current-password">
                        <button class="btn btn-outline-secondary border-start-0 text-muted bg-white toggle-password" type="button" id="togglePasswordBtn">
                            <i class="fa-regular fa-eye-slash" id="togglePasswordIcon"></i>
                        </button>
                        <div class="invalid-feedback">Password is required.</div>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember" <?php echo !empty($saved_email) ? 'checked' : ''; ?>>
                        <label class="form-check-label small text-muted" for="remember">Remember me</label>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold shadow-primary mb-3" style="border-radius: 10px;">
                    Sign In
                </button>
            </form>

            <div class="text-center mt-3">
                <p class="small text-muted mb-0">Don't have an account? <a href="register.php" class="text-decoration-none fw-semibold">Create account</a></p>
            </div>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
