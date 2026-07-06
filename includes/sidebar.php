<?php
/**
 * Vertical Sidebar Component
 * Provides navigation links to all main feature modules of the portal.
 * 
 * Project: Student Management Portal
 */

// Simple helper to mark active links
$current_page = basename($_SERVER['PHP_SELF']);
$current_dir = basename(dirname($_SERVER['PHP_SELF']));

function isActiveModule($moduleDir, $current_dir) {
    return ($current_dir === $moduleDir) ? 'active' : '';
}
?>

<!-- Sidebar -->
<nav id="sidebar">
    <div class="sidebar-header d-flex align-items-center justify-content-between">
        <h4 class="m-0 text-white fw-bold">SMP Portal</h4>
    </div>

    <ul class="list-unstyled components">
        <li class="<?php echo ($current_page === 'dashboard.php') ? 'active' : ''; ?>">
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>dashboard/dashboard.php">
                <i class="fa-solid fa-gauge me-3"></i> Dashboard
            </a>
        </li>
        <li class="<?php echo isActiveModule('profile', $current_dir); ?>">
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>modules/profile/index.php">
                <i class="fa-solid fa-user-graduate me-3"></i> Profile
            </a>
        </li>
        <li class="<?php echo isActiveModule('attendance', $current_dir); ?>">
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>modules/attendance/index.php">
                <i class="fa-solid fa-calendar-check me-3"></i> Attendance
            </a>
        </li>
        <li class="<?php echo isActiveModule('assignment', $current_dir); ?>">
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>modules/assignment/index.php">
                <i class="fa-solid fa-file-signature me-3"></i> Assignments
            </a>
        </li>
        <li class="<?php echo isActiveModule('lost-found', $current_dir); ?>">
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>modules/lost-found/index.php">
                <i class="fa-solid fa-magnifying-glass me-3"></i> Lost & Found
            </a>
        </li>
        <li class="<?php echo isActiveModule('complaint-feedback', $current_dir); ?>">
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>modules/complaint-feedback/index.php">
                <i class="fa-solid fa-comment-dots me-3"></i> Complaints/Feedback
            </a>
        </li>
        <li class="<?php echo isActiveModule('bus-tracker', $current_dir); ?>">
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>modules/bus-tracker/index.php">
                <i class="fa-solid fa-bus me-3"></i> Bus Tracker
            </a>
        </li>
        
        <hr class="border-secondary mx-3">
        
        <li>
            <a href="<?php echo isset($base_path) ? $base_path : ''; ?>auth/logout.php" class="text-danger">
                <i class="fa-solid fa-arrow-right-from-bracket me-3"></i> Logout
            </a>
        </li>
    </ul>
</nav>
