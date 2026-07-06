<?php
/**
 * Profile Management - Add Profile
 * 
 * Placeholder page to add a new student profile record (Admin usage).
 * 
 * Project: Student Management Portal
 */

$page_title = "Add Profile - Student Management Portal";
$base_path = "../../";
include $base_path . 'includes/session.php';

include $base_path . 'includes/header.php';
include $base_path . 'includes/sidebar.php';
?>

<div id="content">
    <?php include $base_path . 'includes/navbar.php'; ?>
    <div class="container-fluid p-4">
        <h2 class="fw-bold text-dark mb-4">Add Student Profile</h2>
        <div class="card card-premium p-4 bg-white">
            <form action="index.php" method="POST">
                <!-- Form fields go here -->
                <p class="text-muted">Form fields for adding a student profile will be implemented here.</p>
                <button type="submit" class="btn btn-primary">Save Profile</button>
            </form>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
