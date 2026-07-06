<?php
/**
 * Landing Page (Root Index)
 * 
 * Renders a premium landing page introducing the Student Management Portal.
 * Includes interactive navigation, modern hero section with animated CSS illustration,
 * visual cards for each module, about description, contact form, and full-width footer.
 * 
 * Project: Student Management Portal
 */

$page_title = "Welcome - Student Management Portal";
$base_path = "";
$wrapper_class = "flex-column"; // Stack content vertically for the landing layout
$is_landing = true; // Use the sticky top navbar

include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section id="hero" class="hero-section d-flex align-items-center position-relative overflow-hidden py-5">
    <div class="hero-bg-gradients">
        <div class="gradient-blob blob-1"></div>
        <div class="gradient-blob blob-2"></div>
    </div>
    <div class="container position-relative z-1 py-md-5">
        <div class="row align-items-center g-5">
            <!-- Hero Text -->
            <div class="col-12 col-lg-6 text-center text-lg-start animate-fade-in-up">
                <span class="badge bg-primary-subtle text-primary mb-3 px-3 py-2 rounded-pill fw-bold text-uppercase tracking-wider">
                    Next-Gen Student Hub
                </span>
                <h1 class="display-3 fw-extrabold text-dark mb-4 lh-sm font-outfit">
                    Simplify Your <span class="text-gradient">Campus Life</span> In One Click
                </h1>
                <p class="lead text-secondary-emphasis mb-5 fs-5">
                    Welcome to the central platform where you can easily track attendance, submit assignments, report lost items, share feedback, and monitor school transits in real-time.
                </p>
                <div class="d-flex justify-content-center justify-content-lg-start gap-3">
                    <a href="auth/login.php" class="btn btn-primary btn-lg px-4 py-3 fw-bold shadow-primary hover-lift" style="border-radius: 10px;">
                        <i class="fa-solid fa-arrow-right-to-bracket me-2"></i> Access Portal
                    </a>
                    <a href="auth/register.php" class="btn btn-outline-dark btn-lg px-4 py-3 fw-bold hover-lift" style="border-radius: 10px;">
                        <i class="fa-solid fa-user-plus me-2"></i> Join as Student
                    </a>
                </div>
            </div>
            
            <!-- Hero CSS Illustration -->
            <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-end animate-fade-in">
                <div class="illustration-container">
                    <!-- Main Dashboard Frame Mockup -->
                    <div class="illustration-card main-mockup shadow-lg">
                        <div class="mockup-header border-bottom d-flex align-items-center justify-content-between p-3">
                            <div class="d-flex gap-2">
                                <span class="dot bg-danger"></span>
                                <span class="dot bg-warning"></span>
                                <span class="dot bg-success"></span>
                            </div>
                            <span class="small text-muted fw-semibold">student-portal.edu</span>
                        </div>
                        <div class="mockup-body p-3">
                            <div class="rect-line bg-secondary-subtle mb-3" style="width: 40%; height: 16px;"></div>
                            <div class="rect-line bg-light mb-2" style="width: 90%; height: 10px;"></div>
                            <div class="rect-line bg-light mb-4" style="width: 75%; height: 10px;"></div>
                            <div class="row g-2">
                                <div class="col-6"><div class="mockup-widget bg-light p-3 rounded" style="height: 60px;"></div></div>
                                <div class="col-6"><div class="mockup-widget bg-light p-3 rounded" style="height: 60px;"></div></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Widget: Attendance -->
                    <div class="illustration-card float-widget widget-attendance shadow-lg p-3 bg-white d-flex align-items-center gap-3">
                        <div class="icon-circle bg-success text-white">
                            <i class="fa-solid fa-calendar-check fa-lg"></i>
                        </div>
                        <div>
                            <span class="small text-muted d-block fw-semibold">Attendance</span>
                            <span class="fw-bold text-dark fs-5">94.2%</span>
                        </div>
                    </div>

                    <!-- Floating Widget: Assignments -->
                    <div class="illustration-card float-widget widget-assignments shadow-lg p-3 bg-white d-flex align-items-center gap-3">
                        <div class="icon-circle bg-primary text-white">
                            <i class="fa-solid fa-file-signature fa-lg"></i>
                        </div>
                        <div>
                            <span class="small text-muted d-block fw-semibold">Assignments</span>
                            <span class="fw-bold text-dark fs-5">3 Pending</span>
                        </div>
                    </div>

                    <!-- Floating Widget: Bus Tracker -->
                    <div class="illustration-card float-widget widget-bus shadow-lg p-3 bg-white d-flex align-items-center gap-3">
                        <div class="icon-circle bg-warning text-dark">
                            <i class="fa-solid fa-bus fa-lg"></i>
                        </div>
                        <div>
                            <span class="small text-muted d-block fw-semibold">Route 4B</span>
                            <span class="fw-bold text-dark fs-6 text-success">On Time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="features-section py-5 bg-white border-top border-bottom">
    <div class="container py-md-5">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-7">
                <span class="badge bg-primary-subtle text-primary mb-2 px-3 py-2 rounded-pill fw-bold text-uppercase">Modules</span>
                <h2 class="fw-bold text-dark display-5 font-outfit">Core Portal Features</h2>
                <p class="text-secondary fs-5">Designed specifically to give students quick access to everything they need on campus.</p>
            </div>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Card: Attendance -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-premium bg-light border-0 p-4 h-100 hover-lift hover-shadow">
                    <div class="feature-icon bg-success-subtle text-success p-3 rounded-3 mb-4">
                        <i class="fa-solid fa-calendar-days fa-2x"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">Attendance</h4>
                    <p class="text-secondary mb-0">
                        Check class attendance percentages dynamically, request leaves of absence, and monitor active class sessions easily.
                    </p>
                </div>
            </div>

            <!-- Card: Assignments -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-premium bg-light border-0 p-4 h-100 hover-lift hover-shadow">
                    <div class="feature-icon bg-primary-subtle text-primary p-3 rounded-3 mb-4">
                        <i class="fa-solid fa-file-invoice fa-2x"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">Assignments</h4>
                    <p class="text-secondary mb-0">
                        Track school projects and homework, review deadlines, and upload your coursework directly to teachers.
                    </p>
                </div>
            </div>

            <!-- Card: Lost & Found -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-premium bg-light border-0 p-4 h-100 hover-lift hover-shadow">
                    <div class="feature-icon bg-warning-subtle text-warning p-3 rounded-3 mb-4">
                        <i class="fa-solid fa-magnifying-glass-location fa-2x"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">Lost & Found</h4>
                    <p class="text-secondary mb-0">
                        Easily list lost belongings, browse items reported by other students, and coordinate safely to retrieve lost items.
                    </p>
                </div>
            </div>

            <!-- Card: Complaint & Feedback -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-premium bg-light border-0 p-4 h-100 hover-lift hover-shadow">
                    <div class="feature-icon bg-danger-subtle text-danger p-3 rounded-3 mb-4">
                        <i class="fa-regular fa-comment-dots fa-2x"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">Complaint & Feedback</h4>
                    <p class="text-secondary mb-0">
                        Report campus problems, voice your complaints securely, and submit constructive reviews directly to the administration.
                    </p>
                </div>
            </div>

            <!-- Card: Bus Tracker -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-premium bg-light border-0 p-4 h-100 hover-lift hover-shadow">
                    <div class="feature-icon bg-dark-subtle text-dark p-3 rounded-3 mb-4">
                        <i class="fa-solid fa-bus-simple fa-2x"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">Bus Tracker</h4>
                    <p class="text-secondary mb-0">
                        Track live bus routes, view departure timetables, search transit stops, and receive timely delayed bus notices.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Portal Section -->
<section id="about" class="about-section py-5 bg-light position-relative">
    <div class="container py-md-5">
        <div class="row align-items-center g-5">
            <div class="col-12 col-lg-6">
                <h4 class="text-primary fw-bold mb-2">About The Portal</h4>
                <h2 class="fw-bold text-dark display-6 mb-4 font-outfit">Empowering Campus Communities</h2>
                <p class="text-secondary fs-5 mb-4">
                    The Student Management Portal is an integration platform built to digitize day-to-day student experiences, replacing legacy papers and notices with a dashboard.
                </p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="fa-solid fa-circle-check text-primary"></i>
                            <span class="fw-bold text-dark">Real-Time Sync</span>
                        </div>
                        <span class="text-muted small">Stay up to date with updates instantly.</span>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="fa-solid fa-circle-check text-primary"></i>
                            <span class="fw-bold text-dark">Unified Framework</span>
                        </div>
                        <span class="text-muted small">Everything you need inside a single dashboard.</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center">
                <div class="about-graphic shadow-lg rounded-4 p-4 bg-white" style="max-width: 480px;">
                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                        <h6 class="fw-bold text-dark mb-0">Centralized Database</h6>
                        <span class="badge bg-primary">Connected</span>
                    </div>
                    <p class="small text-muted mb-3">
                        Utilizing the performance of Google Cloud's Firebase (Auth & Cloud Firestore), the system acts as a reliable ledger.
                    </p>
                    <div class="progress mb-2" style="height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between small text-muted">
                        <span>Database Uptime</span>
                        <span>99.98%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section py-5 bg-white border-top">
    <div class="container py-md-5">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6">
                <span class="badge bg-primary-subtle text-primary mb-2 px-3 py-2 rounded-pill fw-bold text-uppercase">Contact</span>
                <h2 class="fw-bold text-dark display-6 font-outfit">Get In Touch</h2>
                <p class="text-secondary">Have inquiries or feedback? We are here to listen.</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card card-premium p-4 p-md-5 bg-white border">
                    <form id="contactForm" onsubmit="event.preventDefault(); alert('Feedback recorded locally.');">
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="contactName" class="form-label small fw-bold">Name</label>
                                <input type="text" class="form-control py-2.5" id="contactName" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contactEmail" class="form-label small fw-bold">Email</label>
                                <input type="email" class="form-control py-2.5" id="contactEmail" placeholder="you@school.edu" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="contactSubject" class="form-label small fw-bold">Subject</label>
                            <input type="text" class="form-control py-2.5" id="contactSubject" placeholder="General Inquiry" required>
                        </div>
                        <div class="mb-4">
                            <label for="contactMessage" class="form-label small fw-bold">Message</label>
                            <textarea class="form-control" id="contactMessage" rows="5" placeholder="Write your comments here..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-3 fw-bold shadow-primary" style="border-radius: 8px;">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-5 bg-dark text-light border-top">
    <div class="container">
        <div class="row g-4 justify-content-between mb-4">
            <div class="col-12 col-md-5">
                <h5 class="fw-bold text-white mb-3 d-flex align-items-center">
                    <i class="fa-solid fa-graduation-cap me-2 text-primary"></i>
                    Student Management Portal
                </h5>
                <p class="text-light-emphasis small" style="max-width: 380px;">
                    A modernized portal built for responsive management of campus updates. Powered by PHP 8 and Firebase infrastructure.
                </p>
            </div>
            
            <div class="col-12 col-md-3">
                <h6 class="fw-bold text-white mb-3">Links</h6>
                <ul class="list-unstyled mb-0 d-flex flex-column gap-2 small">
                    <li><a href="#hero" class="text-light-emphasis text-decoration-none hover-white">Home</a></li>
                    <li><a href="#features" class="text-light-emphasis text-decoration-none hover-white">Features</a></li>
                    <li><a href="#about" class="text-light-emphasis text-decoration-none hover-white">About</a></li>
                    <li><a href="#contact" class="text-light-emphasis text-decoration-none hover-white">Contact</a></li>
                </ul>
            </div>
            
            <div class="col-12 col-md-3">
                <h6 class="fw-bold text-white mb-3">Development Team</h6>
                <p class="text-light-emphasis small mb-0">Built by **Team DevSix**</p>
                <div class="d-flex gap-3 mt-3">
                    <a href="#" class="text-light-emphasis hover-primary"><i class="fa-brands fa-github fa-lg"></i></a>
                    <a href="#" class="text-light-emphasis hover-primary"><i class="fa-brands fa-linkedin fa-lg"></i></a>
                    <a href="#" class="text-light-emphasis hover-primary"><i class="fa-brands fa-twitter fa-lg"></i></a>
                </div>
            </div>
        </div>
        
        <hr class="border-secondary my-4">
        
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center small text-light-emphasis">
            <p class="mb-0">&copy; 2026 Student Management Portal. All rights reserved.</p>
            <p class="mb-0">Designed & engineered by Team DevSix.</p>
        </div>
    </div>
</footer>

<?php
include 'includes/footer.php';
?>
