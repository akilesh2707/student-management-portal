<?php
/**
 * Profile Management - Edit Form
 * 
 * Form template to edit student info.
 * Includes interactive image upload preview and base64 session storage.
 * 
 * Project: Student Management Portal
 */

$page_title = "Edit Profile - Student Management Portal";
$base_path = "../../";

include $base_path . 'includes/session.php';

// Fallback mock variables if not set in session
if (!isset($_SESSION['user_name'])) $_SESSION['user_name'] = "Student Name";
if (!isset($_SESSION['user_id'])) $_SESSION['user_id'] = "STU12345";
if (!isset($_SESSION['user_dept'])) $_SESSION['user_dept'] = "Computer Science";
if (!isset($_SESSION['user_year'])) $_SESSION['user_year'] = "3rd Year";
if (!isset($_SESSION['user_semester'])) $_SESSION['user_semester'] = "6th Semester";
if (!isset($_SESSION['user_email'])) $_SESSION['user_email'] = "student@school.edu";
if (!isset($_SESSION['user_phone'])) $_SESSION['user_phone'] = "+1 (555) 019-2834";
if (!isset($_SESSION['user_photo'])) $_SESSION['user_photo'] = "";

// Handle POST submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and update session variables
    $_SESSION['user_name'] = filter_input(INPUT_POST, 'fullName', FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION['user_email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $_SESSION['user_phone'] = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION['user_dept'] = filter_input(INPUT_POST, 'department', FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION['user_year'] = filter_input(INPUT_POST, 'year', FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION['user_semester'] = filter_input(INPUT_POST, 'semester', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // Save base64 image data from hidden post if present
    if (!empty($_POST['photoBase64'])) {
        $_SESSION['user_photo'] = $_POST['photoBase64'];
    }

    header("Location: index.php");
    exit();
}

include $base_path . 'includes/header.php';
include $base_path . 'includes/sidebar.php';
?>

<div id="content">
    <?php include $base_path . 'includes/navbar.php'; ?>

    <div class="container-fluid p-4">
        <!-- Module Header -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <h2 class="fw-bold text-dark mb-1 font-outfit">Edit Profile</h2>
                <p class="text-secondary small mb-0">Update your account information and avatar picture</p>
            </div>
            <div>
                <a href="index.php" class="btn btn-outline-secondary px-3 py-2 fw-semibold" style="border-radius: 8px;">
                    <i class="fa-solid fa-xmark me-1"></i> Cancel
                </a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <div class="card card-premium p-4 p-md-5 bg-white border-0">
                    <form action="edit.php" method="POST" class="needs-validation" id="editProfileForm" novalidate>
                        <!-- Change Avatar Picture mockup row -->
                        <div class="row align-items-center mb-5 g-3">
                            <div class="col-auto">
                                <div class="profile-photo-preview-container position-relative">
                                    <?php if (!empty($_SESSION['user_photo'])): ?>
                                        <img src="<?php echo $_SESSION['user_photo']; ?>" id="profileAvatarPreview" class="rounded-circle shadow-sm border border-3 border-white" style="width: 100px; height: 100px; object-fit: cover;" alt="Avatar Preview">
                                    <?php else: ?>
                                        <div id="profileAvatarTextPreview" class="avatar-circle-lg bg-primary text-white rounded-circle shadow-sm d-flex align-items-center justify-content-center fw-bold" style="width: 100px; height: 100px; font-size: 38px;">
                                            <?php echo strtoupper(substr($_SESSION['user_name'], 0, 1)); ?>
                                        </div>
                                        <img src="" id="profileAvatarPreview" class="rounded-circle shadow-sm border border-3 border-white d-none" style="width: 100px; height: 100px; object-fit: cover;" alt="Avatar Preview">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="fw-bold text-dark mb-1">Profile Photo</h6>
                                <p class="text-muted small mb-2">Upload a new square avatar picture (JPG, PNG, max 1MB)</p>
                                <input type="file" class="form-control form-control-sm w-auto d-inline-block" id="photoUploadInput" accept="image/*">
                                <input type="hidden" id="photoBase64" name="photoBase64">
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label for="fullName" class="form-label small fw-bold">Full Name</label>
                                <input type="text" class="form-control py-2" id="fullName" name="fullName" value="<?php echo htmlspecialchars($_SESSION['user_name']); ?>" required>
                                <div class="invalid-feedback">Full name is required.</div>
                            </div>

                            <!-- Roll Number (Read Only mockup) -->
                            <div class="col-md-6">
                                <label for="rollNumber" class="form-label small fw-bold">Roll Number / Student ID</label>
                                <input type="text" class="form-control py-2 bg-light text-muted" id="rollNumber" name="rollNumber" value="<?php echo htmlspecialchars($_SESSION['user_id']); ?>" readonly>
                                <span class="small text-muted" style="font-size: 11px;"><i class="fa-solid fa-lock me-1"></i> Locked for student accounts</span>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <!-- Department Dropdown -->
                            <div class="col-md-4">
                                <label for="department" class="form-label small fw-bold">Department</label>
                                <select class="form-select py-2" id="department" name="department" required>
                                    <option value="Computer Science" <?php echo ($_SESSION['user_dept'] === 'Computer Science') ? 'selected' : ''; ?>>Computer Science & Engineering</option>
                                    <option value="Mechanical Engineering" <?php echo ($_SESSION['user_dept'] === 'Mechanical Engineering') ? 'selected' : ''; ?>>Mechanical Engineering</option>
                                    <option value="Electrical Engineering" <?php echo ($_SESSION['user_dept'] === 'Electrical Engineering') ? 'selected' : ''; ?>>Electrical Engineering</option>
                                    <option value="Civil Engineering" <?php echo ($_SESSION['user_dept'] === 'Civil Engineering') ? 'selected' : ''; ?>>Civil Engineering</option>
                                    <option value="Information Technology" <?php echo ($_SESSION['user_dept'] === 'Information Technology') ? 'selected' : ''; ?>>Information Technology</option>
                                </select>
                            </div>

                            <!-- Academic Year -->
                            <div class="col-md-4">
                                <label for="year" class="form-label small fw-bold">Academic Year</label>
                                <select class="form-select py-2" id="year" name="year" required>
                                    <option value="1st Year" <?php echo ($_SESSION['user_year'] === '1st Year') ? 'selected' : ''; ?>>1st Year</option>
                                    <option value="2nd Year" <?php echo ($_SESSION['user_year'] === '2nd Year') ? 'selected' : ''; ?>>2nd Year</option>
                                    <option value="3rd Year" <?php echo ($_SESSION['user_year'] === '3rd Year') ? 'selected' : ''; ?>>3rd Year</option>
                                    <option value="4th Year" <?php echo ($_SESSION['user_year'] === '4th Year') ? 'selected' : ''; ?>>4th Year</option>
                                </select>
                            </div>

                            <!-- Academic Semester -->
                            <div class="col-md-4">
                                <label for="semester" class="form-label small fw-bold">Current Semester</label>
                                <select class="form-select py-2" id="semester" name="semester" required>
                                    <option value="1st Semester" <?php echo ($_SESSION['user_semester'] === '1st Semester') ? 'selected' : ''; ?>>1st Semester</option>
                                    <option value="2nd Semester" <?php echo ($_SESSION['user_semester'] === '2nd Semester') ? 'selected' : ''; ?>>2nd Semester</option>
                                    <option value="3rd Semester" <?php echo ($_SESSION['user_semester'] === '3rd Semester') ? 'selected' : ''; ?>>3rd Semester</option>
                                    <option value="4th Semester" <?php echo ($_SESSION['user_semester'] === '4th Semester') ? 'selected' : ''; ?>>4th Semester</option>
                                    <option value="5th Semester" <?php echo ($_SESSION['user_semester'] === '5th Semester') ? 'selected' : ''; ?>>5th Semester</option>
                                    <option value="6th Semester" <?php echo ($_SESSION['user_semester'] === '6th Semester') ? 'selected' : ''; ?>>6th Semester</option>
                                    <option value="7th Semester" <?php echo ($_SESSION['user_semester'] === '7th Semester') ? 'selected' : ''; ?>>7th Semester</option>
                                    <option value="8th Semester" <?php echo ($_SESSION['user_semester'] === '8th Semester') ? 'selected' : ''; ?>>8th Semester</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-3 mb-5">
                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label small fw-bold">Primary Email</label>
                                <input type="email" class="form-control py-2" id="email" name="email" value="<?php echo htmlspecialchars($_SESSION['user_email']); ?>" required>
                                <div class="invalid-feedback">Please enter a valid school email.</div>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <label for="phone" class="form-label small fw-bold">Mobile Phone</label>
                                <input type="tel" class="form-control py-2" id="phone" name="phone" value="<?php echo htmlspecialchars($_SESSION['user_phone']); ?>" required>
                                <div class="invalid-feedback">Phone number is required.</div>
                            </div>
                        </div>

                        <!-- Action Submit -->
                        <button type="submit" class="btn btn-primary px-4 py-2.5 fw-bold shadow-primary" style="border-radius: 8px;">
                            Save Profile Changes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Local Javascript for instant photo upload preview & base64 encoding
    document.addEventListener("DOMContentLoaded", function() {
        const photoUpload = document.getElementById("photoUploadInput");
        const photoBase64 = document.getElementById("photoBase64");
        const avatarPreview = document.getElementById("profileAvatarPreview");
        const avatarTextPreview = document.getElementById("profileAvatarTextPreview");

        if (photoUpload) {
            photoUpload.addEventListener("change", function(e) {
                const file = e.target.files[0];
                if (file) {
                    // Check file size (max 1MB)
                    if (file.size > 1024 * 1024) {
                        alert("File is too large. Please select an image under 1MB.");
                        photoUpload.value = "";
                        return;
                    }
                    
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        const base64Data = event.target.result;
                        photoBase64.value = base64Data;
                        
                        if (avatarPreview) {
                            avatarPreview.src = base64Data;
                            avatarPreview.classList.remove("d-none");
                        }
                        if (avatarTextPreview) {
                            avatarTextPreview.classList.add("d-none");
                        }
                    };
                    reader.readAsDataURL(file);
                }
            });
        }
    });
</script>

<?php
include $base_path . 'includes/footer.php';
?>
