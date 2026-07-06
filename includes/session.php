<?php
/**
 * Session Management & Route Guard
 * 
 * This file controls PHP session initialization. It contains utility functions
 * to check whether a user is logged in, redirect users to login screens when
 * accessing protected pages, and manage user role checks.
 * 
 * Project: Student Management Portal
 */

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Checks if the user is authenticated.
 * If not, redirects to the login page.
 * 
 * @param string $basePath Path back to root directory
 */
function checkSession($basePath = "") {
    if (!isset($_SESSION['user_id'])) {
        header("Location: " . $basePath . "auth/login.php");
        exit();
    }
}

/**
 * Check if current user has admin privileges (placeholder)
 */
function isAdmin() {
    return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
}
