/**
 * Global JavaScript file for Student Management Portal
 * Handles general page interactions, sidebar toggling, and UI behaviors.
 * 
 * Project: Student Management Portal
 */

document.addEventListener("DOMContentLoaded", function() {
    console.log("Student Management Portal Initialized.");
    
    // Sidebar toggle functionality (if toggle button is present)
    const sidebarCollapse = document.getElementById("sidebarCollapse");
    const sidebar = document.getElementById("sidebar");
    const content = document.getElementById("content");
    
    if (sidebarCollapse && sidebar && content) {
        sidebarCollapse.addEventListener("click", function() {
            sidebar.classList.toggle("active");
            content.classList.toggle("active");
        });
    }

    // Initialize Bootstrap Tooltips if any
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    // Initialize Bootstrap Popovers if any
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    });
});
