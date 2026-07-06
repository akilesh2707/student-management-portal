<?php
/**
 * Attendance Management - View Details
 * 
 * Page template containing detailed display of a single Attendance Management record.
 * 
 * Project: Student Management Portal
 */

$page_title = "View Attendance Management - Student Management Portal";
$base_path = "../../";
include $base_path . 'includes/session.php';

include $base_path . 'includes/header.php';
include $base_path . 'includes/sidebar.php';
?>

<div id="content">
    <?php include $base_path . 'includes/navbar.php'; ?>
    <div class="container-fluid p-4">
        <h2 class="fw-bold text-dark mb-4">Attendance Management Details</h2>
        <div class="card card-premium p-4 bg-white">
            <p class="text-muted">Detailed view of the Attendance Management record will be implemented here.</p>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
