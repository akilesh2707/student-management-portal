<?php
/**
 * Assignment Management - Index View
 * 
 * Displays the main interface and listing for the Assignment Management module.
 * Contains links to add, edit, view, and delete records.
 * 
 * Project: Student Management Portal
 */

$page_title = "Assignment Management - Student Management Portal";
$base_path = "../../";
include $base_path . 'includes/session.php';
// checkSession($base_path);

$module_css = "assets/css/style.css";
$module_js = "assets/js/main.js";

include $base_path . 'includes/header.php';
include $base_path . 'includes/sidebar.php';
?>

<div id="content">
    <?php include $base_path . 'includes/navbar.php'; ?>

    <div class="container-fluid p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="fw-bold text-dark m-0">Assignment Management</h2>
            <div>
                <a href="add.php" class="btn btn-primary"><i class="fa-solid fa-plus me-2"></i> Add Entry</a>
            </div>
        </div>

        <div class="card card-premium p-4 bg-white">
            <p class="text-muted">Welcome to the Assignment Management module. No entries recorded yet. Click "Add Entry" to create one.</p>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
