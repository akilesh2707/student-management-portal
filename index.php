<?php
/**
 * Landing Page (Root Index)
 * 
 * Renders a premium landing page introducing the Student Management Portal.
 * Includes features summary cards and CTA links to login/register.
 * 
 * Project: Student Management Portal
 */

$page_title = "Welcome - Student Management Portal";
$base_path = "";
include 'includes/header.php';
?>

<!-- Landing Page Outer Container -->
<div class="container-fluid p-0 bg-light min-vh-100 d-flex flex-column justify-content-between">
    <!-- Top Header / Branding Nav -->
    <header class="py-3 px-4 bg-white border-bottom shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">
            <span class="fs-4 fw-bold text-primary">Student Management Portal</span>
            <div>
                <a href="auth/login.php" class="btn btn-outline-primary me-2 px-4 fw-semibold">Login</a>
                <a href="auth/register.php" class="btn btn-primary px-4 fw-semibold">Register</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="py-5 my-auto">
        <div class="container text-center py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <span class="badge bg-primary-subtle text-primary mb-3 px-3 py-2 rounded-pill fw-bold text-uppercase tracking-wider">Complete Student Suite</span>
                    <h1 class="display-4 fw-extrabold text-dark mb-3" style="font-family: 'Outfit', sans-serif;">Manage Your Campus Life Effortlessly</h1>
                    <p class="lead text-muted mb-5">Access your schedules, profile updates, assignment tracking, lost & found claims, bus routes, and campus feedback all in one single, modern portal.</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="auth/login.php" class="btn btn-primary btn-lg px-5 py-3 fw-bold shadow-lg" style="border-radius: 12px;">Get Started</a>
                        <a href="#features" class="btn btn-outline-secondary btn-lg px-5 py-3 fw-bold" style="border-radius: 12px;">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modules Features Section -->
    <section id="features" class="bg-white py-5 border-top">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">Portal Modules</h2>
                <p class="text-muted">A streamlined experience built specifically for modern students.</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Profile -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-premium p-4 border-0 bg-light text-center h-100">
                        <div class="d-inline-flex bg-primary-subtle text-primary p-3 rounded-circle mx-auto mb-3" style="width: fit-content;">
                            <i class="fa-solid fa-user-graduate fa-2x"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Profile Management</h5>
                        <p class="text-muted small mb-0">Update and manage student information cards, contact details, and academic registrations.</p>
                    </div>
                </div>
                
                <!-- Attendance -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-premium p-4 border-0 bg-light text-center h-100">
                        <div class="d-inline-flex bg-success-subtle text-success p-3 rounded-circle mx-auto mb-3" style="width: fit-content;">
                            <i class="fa-solid fa-calendar-check fa-2x"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Attendance Tracking</h5>
                        <p class="text-muted small mb-0">Keep tabs on class-wise attendance rates, request leaves, and view monthly logs.</p>
                    </div>
                </div>
                
                <!-- Assignments -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-premium p-4 border-0 bg-light text-center h-100">
                        <div class="d-inline-flex bg-info-subtle text-info p-3 rounded-circle mx-auto mb-3" style="width: fit-content;">
                            <i class="fa-solid fa-file-signature fa-2x"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Assignment Management</h5>
                        <p class="text-muted small mb-0">Check upcoming assignment details, deadlines, and upload submissions directly.</p>
                    </div>
                </div>
                
                <!-- Lost & Found -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-premium p-4 border-0 bg-light text-center h-100">
                        <div class="d-inline-flex bg-warning-subtle text-warning p-3 rounded-circle mx-auto mb-3" style="width: fit-content;">
                            <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Lost & Found</h5>
                        <p class="text-muted small mb-0">Report lost personal items or list items found across campus zones.</p>
                    </div>
                </div>
                
                <!-- Complaints & Feedback -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-premium p-4 border-0 bg-light text-center h-100">
                        <div class="d-inline-flex bg-danger-subtle text-danger p-3 rounded-circle mx-auto mb-3" style="width: fit-content;">
                            <i class="fa-solid fa-comment-dots fa-2x"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Complaints & Feedback</h5>
                        <p class="text-muted small mb-0">Log grievances or offer feedback directly to administrative departments.</p>
                    </div>
                </div>
                
                <!-- Bus Tracker -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-premium p-4 border-0 bg-light text-center h-100">
                        <div class="d-inline-flex bg-dark-subtle text-dark p-3 rounded-circle mx-auto mb-3" style="width: fit-content;">
                            <i class="fa-solid fa-bus fa-2x"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Bus Tracker & Schedule</h5>
                        <p class="text-muted small mb-0">Track transit buses, view schedules, routes, and departure times live.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 text-center border-top bg-white">
        <p class="text-muted small mb-0">&copy; 2026 Student Management Portal. All rights reserved.</p>
    </footer>
</div>

<?php
// Since wrapper is opened in header.php, we close it with footer.php
include 'includes/footer.php';
?>
