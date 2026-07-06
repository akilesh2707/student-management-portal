<?php
/**
 * Lost & Found - View Details
 * 
 * Page template containing detailed display of a single Lost & Found record.
 * 
 * Project: Student Management Portal
 */

$page_title = "View Lost & Found - Student Management Portal";
$base_path = "../../";
include $base_path . 'includes/session.php';

include $base_path . 'includes/header.php';
include $base_path . 'includes/sidebar.php';
?>

<div id="content">
    <?php include $base_path . 'includes/navbar.php'; ?>
    <div class="container-fluid p-4">
        <h2 class="fw-bold text-dark mb-4">Lost & Found Details</h2>
        <div class="card card-premium p-4 bg-white">
            <p class="text-muted">Detailed view of the Lost & Found record will be implemented here.</p>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
