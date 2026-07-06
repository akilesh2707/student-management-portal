    </div> <!-- End of #wrapper -->

    <!-- Bootstrap 5 Bundle JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Firebase App and Services (v10 CDN) -->
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
        import { getAuth } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-auth.js";
        import { getFirestore } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-firestore.js";
        
        // Import firebase configuration from central config path
        // For standard ES6 modules we can load from config/firebase.js
    </script>
    
    <!-- Central Firebase Init Script -->
    <script src="<?php echo isset($base_path) ? $base_path : ''; ?>config/firebase.js"></script>

    <!-- Global main.js -->
    <script src="<?php echo isset($base_path) ? $base_path : ''; ?>assets/js/main.js"></script>

    <!-- Module-specific JS (loaded dynamically if defined) -->
    <?php if (isset($module_js)): ?>
        <script src="<?php echo $module_js; ?>"></script>
    <?php endif; ?>
</body>
</html>
