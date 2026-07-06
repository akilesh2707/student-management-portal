<?php
/**
 * Dashboard View
 * 
 * Provides a comprehensive dashboard summary for students.
 * Displays interactive cards for Attendance, Assignments, Lost & Found,
 * Complaints/Feedback, and Bus tracking. Features a Quick Actions panel
 * and a Recent Activity feed.
 * 
 * Project: Student Management Portal
 */

$page_title = "Student Dashboard - Student Management Portal";
$base_path = "../";

include $base_path . 'includes/session.php';
// checkSession($base_path); // Enforces session check if active

include $base_path . 'includes/header.php';
include $base_path . 'includes/sidebar.php';

// Fetch dynamic user session details or default fallback
$display_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Student Name';
$display_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 'STU12345';
$display_dept = isset($_SESSION['user_dept']) ? $_SESSION['user_dept'] : 'Computer Science';
?>

<!-- Main Content Area -->
<div id="content">
    <?php include $base_path . 'includes/navbar.php'; ?>

    <div class="container-fluid p-4">
        <!-- Welcoming Feed Header -->
        <div class="row align-items-center justify-content-between mb-4 g-3">
            <div class="col-12 col-sm-auto">
                <h2 class="fw-bold text-dark mb-1 font-outfit">Dashboard</h2>
                <p class="text-secondary small mb-0">Overview of your academic activity and school utilities</p>
            </div>
            <div class="col-12 col-sm-auto">
                <div class="d-flex align-items-center gap-3">
                    <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold">Spring Semester 2026</span>
                    <span class="text-secondary small fw-medium"><i class="fa-regular fa-calendar-days me-1"></i> <?php echo date("F d, Y"); ?></span>
                </div>
            </div>
        </div>

        <!-- 5 Summary Module Cards Grid -->
        <div class="row g-4 mb-4">
            <!-- 1. Attendance Card -->
            <div class="col-12 col-md-6 col-xl">
                <div class="card card-premium bg-white p-3 border-0 h-100">
                    <div class="card-body p-0 d-flex align-items-center">
                        <div class="icon-circle bg-success-subtle text-success p-3 rounded-3 me-3">
                            <i class="fa-solid fa-calendar-check fa-lg"></i>
                        </div>
                        <div>
                            <span class="text-muted d-block small fw-bold">Attendance</span>
                            <h4 class="fw-extrabold mb-1 font-outfit">94.2%</h4>
                            <span class="text-success small fw-semibold"><i class="fa-solid fa-arrow-trend-up"></i> Excellent</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Assignments Card -->
            <div class="col-12 col-md-6 col-xl">
                <div class="card card-premium bg-white p-3 border-0 h-100">
                    <div class="card-body p-0 d-flex align-items-center">
                        <div class="icon-circle bg-primary-subtle text-primary p-3 rounded-3 me-3">
                            <i class="fa-solid fa-file-signature fa-lg"></i>
                        </div>
                        <div>
                            <span class="text-muted d-block small fw-bold">Assignments</span>
                            <h4 class="fw-extrabold mb-1 font-outfit">3 Pending</h4>
                            <span class="text-danger small fw-semibold"><i class="fa-solid fa-clock"></i> Due in 4 days</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Lost Items Card -->
            <div class="col-12 col-md-6 col-xl">
                <div class="card card-premium bg-white p-3 border-0 h-100">
                    <div class="card-body p-0 d-flex align-items-center">
                        <div class="icon-circle bg-warning-subtle text-warning p-3 rounded-3 me-3">
                            <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                        </div>
                        <div>
                            <span class="text-muted d-block small fw-bold">Lost Items</span>
                            <h4 class="fw-extrabold mb-1 font-outfit">2 Claims</h4>
                            <span class="text-muted small fw-semibold"><i class="fa-solid fa-bullhorn"></i> 1 match found</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Complaints Card -->
            <div class="col-12 col-md-6 col-xl">
                <div class="card card-premium bg-white p-3 border-0 h-100">
                    <div class="card-body p-0 d-flex align-items-center">
                        <div class="icon-circle bg-danger-subtle text-danger p-3 rounded-3 me-3">
                            <i class="fa-solid fa-circle-exclamation fa-lg"></i>
                        </div>
                        <div>
                            <span class="text-muted d-block small fw-bold">Complaints</span>
                            <h4 class="fw-extrabold mb-1 font-outfit">0 Active</h4>
                            <span class="text-success small fw-semibold"><i class="fa-solid fa-check"></i> All resolved</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. Bus Schedule Card -->
            <div class="col-12 col-md-6 col-xl">
                <div class="card card-premium bg-white p-3 border-0 h-100">
                    <div class="card-body p-0 d-flex align-items-center">
                        <div class="icon-circle bg-info-subtle text-info p-3 rounded-3 me-3">
                            <i class="fa-solid fa-bus-simple fa-lg"></i>
                        </div>
                        <div>
                            <span class="text-muted d-block small fw-bold">Bus Tracker</span>
                            <h4 class="fw-extrabold mb-1 font-outfit">Route 4B</h4>
                            <span class="text-success small fw-semibold"><i class="fa-solid fa-circle-dot"></i> Live: On Time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Recent Activity Widget -->
            <div class="col-12 col-lg-8">
                <div class="card card-premium border-0 bg-white p-4 h-100">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h5 class="fw-bold text-dark mb-0 font-outfit">Recent Activity</h5>
                        <button class="btn btn-sm btn-link text-decoration-none">Mark all read</button>
                    </div>

                    <div class="activity-timeline">
                        <!-- Activity 1 -->
                        <div class="d-flex gap-3 mb-4">
                            <div class="timeline-badge bg-primary text-white d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; border-radius: 50%; flex-shrink:0;">
                                <i class="fa-solid fa-upload fa-sm"></i>
                            </div>
                            <div class="border-bottom pb-3 w-100">
                                <div class="d-flex justify-content-between mb-1">
                                    <h6 class="fw-bold text-dark mb-0 small">Assignment Submitted</h6>
                                    <span class="text-muted small">2 hours ago</span>
                                </div>
                                <p class="text-secondary small mb-0">You submitted the assignment <strong>Database Schema Design</strong> for evaluation.</p>
                            </div>
                        </div>

                        <!-- Activity 2 -->
                        <div class="d-flex gap-3 mb-4">
                            <div class="timeline-badge bg-success text-white d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; border-radius: 50%; flex-shrink:0;">
                                <i class="fa-solid fa-calendar-check fa-sm"></i>
                            </div>
                            <div class="border-bottom pb-3 w-100">
                                <div class="d-flex justify-content-between mb-1">
                                    <h6 class="fw-bold text-dark mb-0 small">Attendance Recorded</h6>
                                    <span class="text-muted small">Today, 9:00 AM</span>
                                </div>
                                <p class="text-secondary small mb-0">Your attendance was marked as <span class="text-success fw-bold">Present</span> for Web Technology class.</p>
                            </div>
                        </div>

                        <!-- Activity 3 -->
                        <div class="d-flex gap-3 mb-4">
                            <div class="timeline-badge bg-warning text-dark d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; border-radius: 50%; flex-shrink:0;">
                                <i class="fa-solid fa-magnifying-glass fa-sm"></i>
                            </div>
                            <div class="border-bottom pb-3 w-100">
                                <div class="d-flex justify-content-between mb-1">
                                    <h6 class="fw-bold text-dark mb-0 small">New Lost Item Listed</h6>
                                    <span class="text-muted small">Yesterday</span>
                                </div>
                                <p class="text-secondary small mb-0">A <strong>Wireless Earbud Case</strong> was reported found in the Science Laboratory.</p>
                            </div>
                        </div>

                        <!-- Activity 4 -->
                        <div class="d-flex gap-3">
                            <div class="timeline-badge bg-info text-dark d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; border-radius: 50%; flex-shrink:0;">
                                <i class="fa-solid fa-bus-simple fa-sm"></i>
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between mb-1">
                                    <h6 class="fw-bold text-dark mb-0 small">Bus Alert Delay</h6>
                                    <span class="text-muted small">July 04</span>
                                </div>
                                <p class="text-secondary small mb-0">Route 12A delayed by 15 minutes due to downtown traffic conditions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions Panel -->
            <div class="col-12 col-lg-4">
                <div class="card card-premium border-0 bg-white p-4 h-100">
                    <h5 class="fw-bold text-dark mb-4 font-outfit">Quick Actions</h5>
                    
                    <div class="d-grid gap-3">
                        <!-- Action 1 -->
                        <a href="<?php echo $base_path; ?>modules/attendance/index.php" class="btn btn-outline-success text-start py-3 px-3 d-flex align-items-center gap-3 border-1 border-success-subtle bg-success-subtle bg-opacity-10 hover-lift">
                            <i class="fa-solid fa-calendar-check fa-lg text-success"></i>
                            <div>
                                <h6 class="fw-bold text-dark mb-0 small">Record Attendance</h6>
                                <span class="text-muted small" style="font-size: 11px;">Check-in your daily lecture slots</span>
                            </div>
                        </a>

                        <!-- Action 2 -->
                        <a href="<?php echo $base_path; ?>modules/assignment/index.php" class="btn btn-outline-primary text-start py-3 px-3 d-flex align-items-center gap-3 border-1 border-primary-subtle bg-primary-subtle bg-opacity-10 hover-lift">
                            <i class="fa-solid fa-file-signature fa-lg text-primary"></i>
                            <div>
                                <h6 class="fw-bold text-dark mb-0 small">Upload Assignment</h6>
                                <span class="text-muted small" style="font-size: 11px;">Submit coursework before deadlines</span>
                            </div>
                        </a>

                        <!-- Action 3 -->
                        <a href="<?php echo $base_path; ?>modules/lost-found/index.php" class="btn btn-outline-warning text-start py-3 px-3 d-flex align-items-center gap-3 border-1 border-warning-subtle bg-warning-subtle bg-opacity-10 hover-lift">
                            <i class="fa-solid fa-magnifying-glass fa-lg text-warning"></i>
                            <div>
                                <h6 class="fw-bold text-dark mb-0 small">Report Lost Item</h6>
                                <span class="text-muted small" style="font-size: 11px;">File claim for misplaced items</span>
                            </div>
                        </a>

                        <!-- Action 4 -->
                        <a href="<?php echo $base_path; ?>modules/complaint-feedback/index.php" class="btn btn-outline-danger text-start py-3 px-3 d-flex align-items-center gap-3 border-1 border-danger-subtle bg-danger-subtle bg-opacity-10 hover-lift">
                            <i class="fa-solid fa-circle-exclamation fa-lg text-danger"></i>
                            <div>
                                <h6 class="fw-bold text-dark mb-0 small">File Feedback</h6>
                                <span class="text-muted small" style="font-size: 11px;">Log grievance or review report</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
