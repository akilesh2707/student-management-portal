# Student Management Portal

A comprehensive, lightweight web portal designed for students to manage campus life. Built using a robust architecture featuring vanilla PHP 8, Bootstrap 5, JavaScript (ES6), and Firebase integration.

## Technologies Used

*   **Frontend UI:** HTML5, CSS3, Bootstrap 5 (CDN)
*   **Interactivity:** JavaScript (ES6) + Firebase Web SDK (v10)
*   **Backend Controller & Router:** PHP 8
*   **Database & Auth:** Firebase (Authentication + Cloud Firestore)

---

## Team Members & Roles

This project is built and maintained by a team of 6 students:

1.  **Lead Architect & Backend Dev:** Student 1 (Responsible for system design and PHP sessions/routing)
2.  **Frontend Specialist:** Student 2 (Responsible for Bootstrap layout templates & global styles)
3.  **Firebase Integrator:** Student 3 (Responsible for client-side Auth and Firestore connections)
4.  **Database & Admin Panel:** Student 4 (Responsible for Profile and Attendance modules)
5.  **Transit & Academic Dev:** Student 5 (Responsible for Assignment and Bus Tracker modules)
6.  **Q&A and Grievance Dev:** Student 6 (Responsible for Lost & Found and Complaint modules)

---

## Folder Structure

```text
student-management-portal
│
├── assets/                     # Shared web assets
│   ├── css/                    # Custom global CSS styles
│   ├── js/                     # Custom global JS scripts
│   ├── images/                 # Graphics and assets
│   └── icons/                  # SVG icons
│
├── config/                     # Configuration and environment setup
│   ├── database.php            # PDO local database connection helper
│   ├── firebase.php            # PHP Firebase API credentials
│   └── firebase.js             # Firebase Web SDK initialization config
│
├── includes/                   # Reusable template sections
│   ├── header.php              # Global page header and CSS imports
│   ├── footer.php              # Global page footer and JS imports
│   ├── navbar.php              # Responsive top navigation bar
│   ├── sidebar.php             # Main vertical sidebar menu
│   └── session.php             # PHP session checking and route guards
│
├── auth/                       # Authentication pages
│   ├── login.php               # Login interface
│   ├── register.php            # Sign-up interface
│   ├── forgot-password.php     # Password reset email trigger
│   └── logout.php              # Controller to invalidate session
│
├── dashboard/
│   └── dashboard.php           # Portal central feed page
│
├── modules/                    # Distinct features modules
│   ├── profile/                # Personal and academic details
│   ├── attendance/             # Daily logs and leaves status
│   ├── assignment/             # Pending tasks and grading submissions
│   ├── lost-found/             # Lost and found listings bulletin
│   ├── complaint-feedback/     # Support tickets and reviews
│   └── bus-tracker/            # Campus routes and live timetable
│
├── index.php                   # Portal landing page
├── README.md                   # Project documentation
└── .gitignore                  # Git untracked pattern manager
```

> [!NOTE]
> For each folder inside `modules/`, the sub-layout includes CRUD operations: `index.php`, `add.php`, `edit.php`, `view.php`, `delete.php` and its own local subfolder `assets/css` and `assets/js`.

---

## Git Workflow & Branching Strategy

To maintain a healthy, conflict-free codebase, the team follows this branching workflow:

*   `main`: Production-ready branch. Only merges from `develop` via Pull Request (PR) after QA check.
*   `develop`: Integration branch. All features merge into `develop` for review.
*   `feature/<name>`: Dedicated branch for specific features. Always branch off `develop`.
    *   `feature/profile-dashboard`
    *   `feature/assignment`
    *   `feature/attendance`
    *   `feature/lost-found`
    *   `feature/complaint-feedback`
    *   `feature/bus-tracker`

### Git Command Flow

1. **Clone the repository:**
   ```bash
   git clone <repo-url>
   cd student-management-portal
   ```

2. **Create a local feature branch:**
   ```bash
   git checkout develop
   git checkout -b feature/assignment
   ```

3. **Commit changes:**
   ```bash
   git add .
   git commit -m "feat(assignment): implement assignment index template"
   ```

4. **Push changes and open Pull Request:**
   ```bash
   git push origin feature/assignment
   # Open PR on GitHub/GitLab to merge into develop
   ```

---

## Installation & Setup

1.  **Configure local PHP environment:**
    *   Ensure you have **PHP 8.0+** installed locally (e.g. via XAMPP, MAMP, or native CLI).
2.  **Clone or Copy files** into your web server document root directory (e.g. `htdocs` or `/var/www/html`).
3.  **Firebase Setup:**
    *   Create a Firebase project at [Firebase Console](https://console.firebase.google.com).
    *   Register a Web App, obtain configuration keys, and paste them into [firebase.js](file:///Users/akilesh/Documents/student-management-portal/config/firebase.js).
    *   Enable Firebase Authentication (Email/Password) and Cloud Firestore Database.
4.  **Run Server:**
    *   Start Apache server, or run PHP CLI dev server from the project root:
        ```bash
        php -S localhost:8000
        ```
    *   Open `http://localhost:8000` in your web browser.
