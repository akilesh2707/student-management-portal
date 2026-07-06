<?php
/**
 * Top Navbar component
 * Includes logo/branding, sidebar toggle, search bar, and user profile dropdown.
 * 
 * Project: Student Management Portal
 */
?>
<nav class="navbar navbar-expand-lg navbar-custom w-100 py-3 px-4">
    <div class="container-fluid p-0">
        <!-- Sidebar Toggle Button -->
        <button type="button" id="sidebarCollapse" class="btn btn-primary me-3">
            <i class="fa fa-bars"></i>
        </button>

        <a class="navbar-brand fw-bold text-primary" href="<?php echo isset($base_path) ? $base_path : ''; ?>dashboard/dashboard.php">
            Student Portal
        </a>

        <!-- Right Side Nav Elements -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="nav navbar-nav ms-auto align-items-center">
                <!-- Notifications Dropdown -->
                <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle text-dark position-relative" href="#" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="navbarDropdownNotification">
                        <li><a class="dropdown-item py-2" href="#">New assignment uploaded</a></li>
                        <li><a class="dropdown-item py-2" href="#">Bus Route 4 delay alert</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-center text-primary" href="#">View all notifications</a></li>
                    </ul>
                </li>

                <!-- User Account Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark d-flex align-items-center" href="#" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar me-2 d-inline-flex justify-content-center align-items-center bg-primary text-white rounded-circle" style="width: 32px; height: 32px; font-size: 14px;">
                            S
                        </div>
                        <span class="d-none d-md-inline fw-semibold">Student Name</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="navbarDropdownUser">
                        <li><a class="dropdown-item py-2" href="<?php echo isset($base_path) ? $base_path : ''; ?>modules/profile/index.php"><i class="fa-regular fa-user me-2 text-muted"></i> My Profile</a></li>
                        <li><a class="dropdown-item py-2" href="#"><i class="fa-solid fa-gear me-2 text-muted"></i> Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item py-2 text-danger" href="<?php echo isset($base_path) ? $base_path : ''; ?>auth/logout.php"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
