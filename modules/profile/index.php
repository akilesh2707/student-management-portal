<?php
/**
 * Profile Management - Index View
 * 
 * Displays the main student profile summary card, active details,
 * and academic information. Integrates with PHP sessions.
 * 
 * Project: Student Management Portal
 */

$page_title = "Profile Summary - Student Management Portal";
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
                <h2 class="fw-bold text-dark mb-1 font-outfit">My Profile</h2>
                <p class="text-secondary small mb-0">Overview of your student profile and academic status</p>
            </div>
            <div class="d-flex gap-2">
                <a href="view.php" class="btn btn-outline-primary px-3 py-2 fw-semibold" style="border-radius: 8px;">
                    <i class="fa-regular fa-id-card me-1"></i> Full Details
                </a>
                <a href="edit.php" class="btn btn-primary px-3 py-2 fw-semibold" style="border-radius: 8px;">
                    <i class="fa-solid fa-user-pen me-1"></i> Edit Profile
                </a>
            </div>
        </div>

        <div class="row g-4">
            <!-- Left Side: Profile Summary Card -->
            <div class="col-12 col-lg-4">
                <div class="card card-premium text-center p-4 bg-white border-0">
                    <div class="card-body">
                        <!-- Profile Photo -->
                        <div class="profile-photo-container mb-4 position-relative d-inline-block">
                            <?php if (!empty($_SESSION['user_photo'])): ?>
                                <img src="<?php echo $_SESSION['user_photo']; ?>" class="rounded-circle shadow-sm border border-3 border-white" style="width: 120px; height: 120px; object-fit: cover;" alt="Profile Picture">
                            <?php else: ?>
                                <div class="avatar-circle-lg bg-primary text-white rounded-circle shadow-sm mx-auto d-flex align-items-center justify-content-center fw-bold" style="width: 120px; height: 120px; font-size: 48px;">
                                    <?php echo strtoupper(substr($_SESSION['user_name'], 0, 1)); ?>
                                </div>
                            <?php endif; ?>
                            <span class="position-absolute bottom-0 end-0 bg-success border border-white border-2 rounded-circle p-2" title="Active Status"></span>
                        </div>
                        
                        <h4 class="fw-bold text-dark mb-1 font-outfit"><?php echo htmlspecialchars($_SESSION['user_name']); ?></h4>
                        <p class="text-secondary small mb-3"><?php echo htmlspecialchars($_SESSION['user_id']); ?></p>
                        
                        <div class="mb-3">
                            <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold"><?php echo htmlspecialchars($_SESSION['user_year']); ?></span>
                            <span class="badge bg-secondary-subtle text-secondary px-3 py-2 rounded-pill fw-bold ms-1"><?php echo htmlspecialchars($_SESSION['user_semester']); ?></span>
                        </div>
                        
                        <hr class="my-4 border-light-subtle">
                        
                        <ul class="list-unstyled text-start mb-0 small">
                            <li class="mb-2 d-flex justify-content-between">
                                <span class="text-muted">Department:</span>
                                <span class="fw-semibold text-dark text-end" style="max-width: 60%;"><?php echo htmlspecialchars($_SESSION['user_dept']); ?></span>
                            </li>
                            <li class="mb-2 d-flex justify-content-between">
                                <span class="text-muted">Email:</span>
                                <span class="fw-semibold text-dark text-truncate" style="max-width: 60%;"><?php echo htmlspecialchars($_SESSION['user_email']); ?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="text-muted">Phone:</span>
                                <span class="fw-semibold text-dark"><?php echo htmlspecialchars($_SESSION['user_phone']); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right Side: Academic & Statistics Card -->
            <div class="col-12 col-lg-8">
                <div class="card card-premium p-4 bg-white border-0 mb-4">
                    <h5 class="fw-bold mb-4 text-dark font-outfit">Academic Record Summary</h5>
                    <div class="row g-3 text-center mb-4">
                        <div class="col-6 col-sm-3">
                            <div class="p-3 bg-light rounded-3">
                                <span class="text-muted d-block small mb-1">Current CGPA</span>
                                <h3 class="fw-extrabold text-primary mb-0 font-outfit">3.85</h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="p-3 bg-light rounded-3">
                                <span class="text-muted d-block small mb-1">Credits Earned</span>
                                <h3 class="fw-extrabold text-success mb-0 font-outfit">94</h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="p-3 bg-light rounded-3">
                                <span class="text-muted d-block small mb-1">Passed Courses</span>
                                <h3 class="fw-extrabold text-info mb-0 font-outfit">28</h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="p-3 bg-light rounded-3">
                                <span class="text-muted d-block small mb-1">Backlogs</span>
                                <h3 class="fw-extrabold text-danger mb-0 font-outfit">0</h3>
                            </div>
                        </div>
                    </div>

                    <h6 class="fw-bold mb-3 text-dark">Registered Courses (Current Term)</h6>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0 small">
                            <thead class="table-light">
                                <tr>
                                    <th>Code</th>
                                    <th>Title</th>
                                    <th>Instructor</th>
                                    <th class="text-center">Credits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>CS301</strong></td>
                                    <td>Software Engineering</td>
                                    <td>Dr. Emily Watson</td>
                                    <td class="text-center">3</td>
                                </tr>
                                <tr>
                                    <td><strong>CS302</strong></td>
                                    <td>Web Technologies</td>
                                    <td>Prof. Andrew NG</td>
                                    <td class="text-center">4</td>
                                </tr>
                                <tr>
                                    <td><strong>CS303</strong></td>
                                    <td>Database Systems</td>
                                    <td>Dr. Robert Downey</td>
                                    <td class="text-center">3</td>
                                </tr>
                                <tr>
                                    <td><strong>CS304</strong></td>
                                    <td>Cloud Infrastructure</td>
                                    <td>Prof. Tony Stark</td>
                                    <td class="text-center">3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
