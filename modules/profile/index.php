<?php
/**
 * Profile Management - Index View
 * 
 * Displays the logged-in student's profile information card and details.
 * Contains links to edit profile details.
 * 
 * Project: Student Management Portal
 */

$page_title = "Profile Management - Student Management Portal";
$base_path = "../../";
include $base_path . 'includes/session.php';
// checkSession($base_path);

// Define module css/js paths dynamically
$module_css = "assets/css/style.css";
$module_js = "assets/js/main.js";

include $base_path . 'includes/header.php';
include $base_path . 'includes/sidebar.php';
?>

<div id="content">
    <?php include $base_path . 'includes/navbar.php'; ?>

    <div class="container-fluid p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="fw-bold text-dark m-0">Student Profile</h2>
            <div>
                <a href="edit.php" class="btn btn-primary"><i class="fa-solid fa-user-pen me-2"></i> Edit Profile</a>
            </div>
        </div>

        <div class="row g-4">
            <!-- Left Profile Card -->
            <div class="col-12 col-lg-4">
                <div class="card card-premium text-center p-4 bg-white">
                    <div class="my-3">
                        <div class="d-inline-flex justify-content-center align-items-center bg-primary text-white rounded-circle fw-bold" style="width: 100px; height: 100px; font-size: 40px;">
                            S
                        </div>
                    </div>
                    <h4 class="fw-bold text-dark mb-1">Student Name</h4>
                    <p class="text-muted small mb-3">Undergraduate Student</p>
                    <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill fw-semibold">Active</span>
                </div>
            </div>

            <!-- Right Details Card -->
            <div class="col-12 col-lg-8">
                <div class="card card-premium p-4 bg-white">
                    <h5 class="fw-bold mb-4">Academic & Personal Details</h5>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="small text-muted d-block">Student ID</label>
                            <span class="fw-semibold">STU12345</span>
                        </div>
                        <div class="col-sm-6">
                            <label class="small text-muted d-block">Department</label>
                            <span class="fw-semibold">Computer Science & Engineering</span>
                        </div>
                        <div class="col-sm-6">
                            <label class="small text-muted d-block">Email Address</label>
                            <span class="fw-semibold">student@school.edu</span>
                        </div>
                        <div class="col-sm-6">
                            <label class="small text-muted d-block">Phone Number</label>
                            <span class="fw-semibold">+1 (555) 019-2834</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
