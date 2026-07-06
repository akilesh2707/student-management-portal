<?php
/**
 * Dashboard View
 * 
 * Provides a summary view of the Student Management Portal.
 * Includes widgets for attendance, assignments, lost & found, complaints, and bus routes.
 * 
 * Project: Student Management Portal
 */

$page_title = "Dashboard - Student Management Portal";
$base_path = "../";
include $base_path . 'includes/session.php';
// checkSession($base_path); // Uncomment to enforce login session check

include $base_path . 'includes/header.php';
include $base_path . 'includes/sidebar.php';
?>

<!-- Main Content Area -->
<div id="content">
    <?php include $base_path . 'includes/navbar.php'; ?>

    <div class="container-fluid p-4">
        <!-- Welcome header -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <h2 class="fw-bold text-dark mb-1">Welcome back, Student!</h2>
                <p class="text-muted mb-0">Here is what's happening with your portal today.</p>
            </div>
            <div>
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-semibold">Term: Spring 2026</span>
            </div>
        </div>

        <!-- Stat Cards Grid -->
        <div class="row g-4 mb-4">
            <!-- Attendance Stat -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-premium p-3 border-0 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 bg-success-subtle text-success p-3 rounded-3 me-3">
                            <i class="fa-solid fa-calendar-check fa-xl"></i>
                        </div>
                        <div>
                            <p class="text-muted mb-0 small fw-semibold">Attendance Rate</p>
                            <h3 class="fw-bold mb-0">94.2%</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Assignments Stat -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-premium p-3 border-0 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 bg-primary-subtle text-primary p-3 rounded-3 me-3">
                            <i class="fa-solid fa-file-signature fa-xl"></i>
                        </div>
                        <div>
                            <p class="text-muted mb-0 small fw-semibold">Pending Assignments</p>
                            <h3 class="fw-bold mb-0">3</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lost & Found Stat -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-premium p-3 border-0 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 bg-warning-subtle text-warning p-3 rounded-3 me-3">
                            <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                        </div>
                        <div>
                            <p class="text-muted mb-0 small fw-semibold">Lost Items Claims</p>
                            <h3 class="fw-bold mb-0">2 Active</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feedback Stat -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-premium p-3 border-0 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 bg-danger-subtle text-danger p-3 rounded-3 me-3">
                            <i class="fa-solid fa-comment-dots fa-xl"></i>
                        </div>
                        <div>
                            <p class="text-muted mb-0 small fw-semibold">Filed Complaints</p>
                            <h3 class="fw-bold mb-0">0</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Left Column: Tasks & Assignments -->
            <div class="col-12 col-lg-8">
                <div class="card card-premium border-0 bg-white p-4 h-100">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h5 class="fw-bold text-dark mb-0">Recent Assignments</h5>
                        <a href="<?php echo $base_path; ?>modules/assignment/index.php" class="btn btn-sm btn-link text-decoration-none">View All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Title</th>
                                    <th>Subject</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="fw-semibold">Database Schema Design</span></td>
                                    <td>Software Engineering</td>
                                    <td>July 10, 2026</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                </tr>
                                <tr>
                                    <td><span class="fw-semibold">PHP CRUD Application</span></td>
                                    <td>Web Technologies</td>
                                    <td>July 15, 2026</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                </tr>
                                <tr>
                                    <td><span class="fw-semibold">Firebase Authentication Lab</span></td>
                                    <td>Cloud Computing</td>
                                    <td>July 04, 2026</td>
                                    <td><span class="badge bg-success">Submitted</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Right Column: Bus Tracker & Schedule Widget -->
            <div class="col-12 col-lg-4">
                <div class="card card-premium border-0 bg-white p-4 h-100">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h5 class="fw-bold text-dark mb-0">Bus Tracker</h5>
                        <a href="<?php echo $base_path; ?>modules/bus-tracker/index.php" class="btn btn-sm btn-link text-decoration-none">Details</a>
                    </div>
                    
                    <div class="mb-3 p-3 bg-light rounded-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fw-bold mb-1">Route 4B</h6>
                                <p class="text-muted small mb-0">Status: <span class="text-success fw-semibold">On Time</span></p>
                            </div>
                            <span class="badge bg-success-subtle text-success p-2 rounded-circle"><i class="fa-solid fa-bus"></i></span>
                        </div>
                        <hr class="my-2">
                        <p class="small text-muted mb-0">Next Stop: **Main Campus Gate** (ETA: 5 mins)</p>
                    </div>

                    <div class="p-3 bg-light rounded-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fw-bold mb-1">Route 12A</h6>
                                <p class="text-muted small mb-0">Status: <span class="text-danger fw-semibold">10m Delay</span></p>
                            </div>
                            <span class="badge bg-danger-subtle text-danger p-2 rounded-circle"><i class="fa-solid fa-bus"></i></span>
                        </div>
                        <hr class="my-2">
                        <p class="small text-muted mb-0">Next Stop: **Downtown Terminal** (ETA: 15 mins)</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
