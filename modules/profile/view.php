<?php
/**
 * Profile Management - Detailed View
 * 
 * Displays the complete set of student information (Personal, Contact, Academic, Emergency).
 * 
 * Project: Student Management Portal
 */

$page_title = "Full Profile Details - Student Management Portal";
$base_path = "../../";

include $base_path . 'includes/session.php';

// Fallback mock variables if not set in session
if (!isset($_SESSION['user_name'])) $_SESSION['user_name'] = "Student Name";
if (!isset($_SESSION['user_id'])) $_SESSION['user_id'] = "STU12345";
if (!isset($_SESSION['user_dept'])) $_SESSION['user_dept'] = "Computer Science";
if (!isset($_SESSION['user_year'])) $_SESSION['user_year'] = "3rd Year";
if (!isset($_SESSION['user_semester'])) $_SESSION['user_semester'] = "6th Semester";
if (!isset($_SESSION['user_email'])) $_SESSION['user_email'] = "student@school.edu";
if (!isset($_SESSION['user_phone'])) $_SESSION['user_phone'] = "+1 (555) 019-2834";
if (!isset($_SESSION['user_photo'])) $_SESSION['user_photo'] = "";

include $base_path . 'includes/header.php';
include $base_path . 'includes/sidebar.php';
?>

<div id="content">
    <?php include $base_path . 'includes/navbar.php'; ?>

    <div class="container-fluid p-4">
        <!-- Module Header -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <h2 class="fw-bold text-dark mb-1 font-outfit">Profile Details</h2>
                <p class="text-secondary small mb-0">Full record overview of personal and academic archives</p>
            </div>
            <div class="d-flex gap-2">
                <a href="index.php" class="btn btn-outline-secondary px-3 py-2 fw-semibold" style="border-radius: 8px;">
                    <i class="fa-solid fa-arrow-left me-1"></i> Back
                </a>
                <a href="edit.php" class="btn btn-primary px-3 py-2 fw-semibold" style="border-radius: 8px;">
                    <i class="fa-solid fa-user-pen me-1"></i> Edit Profile
                </a>
            </div>
        </div>

        <div class="row g-4">
            <!-- Full details column -->
            <div class="col-12">
                <!-- Academic Information -->
                <div class="card card-premium p-4 bg-white border-0 mb-4 animate-fade-in-up">
                    <h5 class="fw-bold mb-4 text-dark font-outfit"><i class="fa-solid fa-graduation-cap text-primary me-2"></i> Academic Information</h5>
                    <div class="row g-3">
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Student ID</span>
                            <span class="fw-bold text-dark"><?php echo htmlspecialchars($_SESSION['user_id']); ?></span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Department</span>
                            <span class="fw-bold text-dark"><?php echo htmlspecialchars($_SESSION['user_dept']); ?></span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Academic Year</span>
                            <span class="fw-bold text-dark"><?php echo htmlspecialchars($_SESSION['user_year']); ?></span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Current Semester</span>
                            <span class="fw-bold text-dark"><?php echo htmlspecialchars($_SESSION['user_semester']); ?></span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Admission Category</span>
                            <span class="fw-bold text-dark">Merit Scholarship</span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Batch</span>
                            <span class="fw-bold text-dark">2023 - 2027</span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Advisor</span>
                            <span class="fw-bold text-dark">Dr. Emily Watson</span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Portal Status</span>
                            <span class="badge bg-success-subtle text-success py-1.5 px-3 rounded-pill fw-bold">Active</span>
                        </div>
                    </div>
                </div>

                <!-- Personal Information -->
                <div class="card card-premium p-4 bg-white border-0 mb-4 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <h5 class="fw-bold mb-4 text-dark font-outfit"><i class="fa-solid fa-user text-primary me-2"></i> Personal Information</h5>
                    <div class="row g-3">
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Full Name</span>
                            <span class="fw-bold text-dark"><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Date of Birth</span>
                            <span class="fw-bold text-dark">October 14, 2004</span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Gender</span>
                            <span class="fw-bold text-dark">Male</span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Blood Group</span>
                            <span class="fw-bold text-dark">O-positive (O+)</span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Nationality</span>
                            <span class="fw-bold text-dark">American</span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Father's Name</span>
                            <span class="fw-bold text-dark">Arthur Pendelton</span>
                        </div>
                    </div>
                </div>

                <!-- Contact details -->
                <div class="card card-premium p-4 bg-white border-0 mb-4 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <h5 class="fw-bold mb-4 text-dark font-outfit"><i class="fa-solid fa-address-book text-primary me-2"></i> Contact Details</h5>
                    <div class="row g-3">
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Primary Email</span>
                            <span class="fw-bold text-dark"><?php echo htmlspecialchars($_SESSION['user_email']); ?></span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Mobile Phone</span>
                            <span class="fw-bold text-dark"><?php echo htmlspecialchars($_SESSION['user_phone']); ?></span>
                        </div>
                        <div class="col-12 col-md-6">
                            <span class="text-muted d-block small">Current Address</span>
                            <span class="fw-bold text-dark">742 Evergreen Terrace, Sector 4, Springfield</span>
                        </div>
                        <div class="col-12 col-md-6">
                            <span class="text-muted d-block small">Permanent Address</span>
                            <span class="fw-bold text-dark">742 Evergreen Terrace, Sector 4, Springfield</span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Emergency Contact Name</span>
                            <span class="fw-bold text-dark">Sarah Pendelton</span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Relationship</span>
                            <span class="fw-bold text-dark">Mother</span>
                        </div>
                        <div class="col-12 col-md-3">
                            <span class="text-muted d-block small">Emergency Contact Phone</span>
                            <span class="fw-bold text-dark">+1 (555) 018-9275</span>
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
