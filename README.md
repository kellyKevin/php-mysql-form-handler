Feedback Form Web Application
This web application allows users to submit feedback through a form and view all submitted feedback on the same page. The application uses PHP for server-side scripting and MySQL for the database.

Features
Submit feedback with name, email, feedback message, and rating.
View all submitted feedback in a table.
Single-page application with AJAX for seamless user experience.
Technologies Used
HTML
CSS
JavaScript (AJAX)
PHP
MySQL
Prerequisites
Web server with PHP support (e.g., XAMPP, WAMP, or a web hosting provider)
MySQL database
Installation
Local Development Setup (Using XAMPP)
Download and Install XAMPP:

Download XAMPP from the official website and install it.
Start Apache and MySQL:

Open the XAMPP Control Panel.
Start the Apache and MySQL modules.
Set Up the Database:

Open PHPMyAdmin by navigating to http://localhost/phpmyadmin.
Create a new database named campaign_feedback.
Create a table named feedback with the following SQL query:
CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    feedback TEXT NOT NULL,
    rating INT NOT NULL,
    submission_date DATETIME DEFAULT CURRENT_TIMESTAMP
);
Clone the Repository:

Navigate to the htdocs directory of your XAMPP installation (e.g., C:\xampp\htdocs\).
Create a new folder for your project, e.g., feedback_app.
Place the project files (index.php, style.css, script.js, submit_feedback.php, fetch_feedback.php) into this folder.
Update Database Connection Details:

Open submit_feedback.php and fetch_feedback.php.
Update the database connection details:
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campaign_feedback";
Run the Application:

Open your web browser and navigate to http://localhost/feedback_app/index.php.
Hosting on a Live Server
Choose a Hosting Provider:

Select a web hosting provider that supports PHP and MySQL (e.g., Bluehost, HostGator, SiteGround).
Purchase a Hosting Plan:

Sign up for a hosting plan that meets your needs.
Set Up Your Domain:

If you don't already have a domain, you can purchase one through your hosting provider.
Access Your Hosting Control Panel:

Log in to your hosting control panel (e.g., cPanel).
Create a MySQL Database:

Create a new database and user with full privileges.
Upload Your Files:

Use the File Manager in your control panel or an FTP client (e.g., FileZilla) to upload your project files to the public_html directory.
Update Database Connection Details:

Open submit_feedback.php and fetch_feedback.php.
Update the database connection details to match those provided by your hosting provider.
Import Your Database:

Use PHPMyAdmin to import your local database as a .sql file.
Run the Application:

Open your web browser and navigate to your domain (e.g., http://yourdomain.com).
Files Overview
index.php: The main file containing the HTML form and the section for displaying feedback.
style.css: CSS file for styling the page.
script.js: JavaScript file for handling form submission and data retrieval via AJAX.
submit_feedback.php: PHP script for handling form submissions.
fetch_feedback.php: PHP script for retrieving feedback data.
Usage
Submit Feedback:

Fill out the form and click "Submit Feedback".
The form data will be sent to the server and stored in the database.
View Feedback:

Submitted feedback will be displayed in the table below the form.
