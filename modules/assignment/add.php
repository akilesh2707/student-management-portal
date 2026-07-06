<?php
/**
 * Assignment Management - Add Entry
 * 
 * Page template with a form to create a new Assignment Management record.
 * 
 * Project: Student Management Portal
 */

$page_title = "Add Assignment Management - Student Management Portal";
$base_path = "../../";
include $base_path . 'includes/session.php';

include $base_path . 'includes/header.php';
include $base_path . 'includes/sidebar.php';
?>

<div id="content">
    <?php include $base_path . 'includes/navbar.php'; ?>
    <div class="container-fluid p-4">
        <h2 class="fw-bold text-dark mb-4">Add Assignment Management Entry</h2>
        <div class="card card-premium p-4 bg-white">
            <form action="index.php" method="POST">
                <p class="text-muted">Form fields for adding a Assignment Management record will be implemented here.</p>
                <button type="submit" class="btn btn-primary">Save Entry</button>
            </form>
        </div>
    </div>
</div>

<?php
include $base_path . 'includes/footer.php';
?>
