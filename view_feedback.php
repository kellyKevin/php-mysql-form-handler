<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // If you have set a password for MySQL, enter it here
$dbname = "campaign_feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the database
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    echo "<h2>Feedback Data</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Feedback</th><th>Rating</th><th>Date</th></tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["feedback"]."</td>";
        echo "<td>".$row["rating"]."</td>";
        echo "<td>".$row["submission_date"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No feedback data available";
}

// Close connection
$conn->close();
?>
