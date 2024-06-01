<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Records</title>
    <style>
        /* Define table styles */
        table {
            width: 60%; /* Adjust width as needed */
            margin: 0 auto; /* Center the table horizontally */
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php 
include("connection.php"); 
error_reporting(0);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);

    // Insert data into the database
    $query = "INSERT INTO form (name, email, number) VALUES ('$name', '$email', '$number')";
    $result = mysqli_query($conn, $query);

    // Check if the insertion was successful
    if ($result) {
        echo "Data Inserted Successfully";
    } else {
        echo "Failed to Insert Data: " . mysqli_error($conn);
    }
}

// Fetch data from the form table
$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

// Check if the query was successful
if (!$data) {
    die("Query failed: " . mysqli_error($conn));
}

// Check if there are records in the result set
if (mysqli_num_rows($data) > 0) {
    // Start the table
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Number</th><th>Action</th></tr>";

    // Loop through all records
    while ($result = mysqli_fetch_assoc($data)) {
        // Display each record in a table row
        echo "<tr>";
        echo "<td>" . htmlspecialchars($result['name']) . "</td>";
        echo "<td>" . htmlspecialchars($result['email']) . "</td>";
        echo "<td>" . htmlspecialchars($result['number']) . "</td>";
        echo "<td><a href='edit.php?name=" . urlencode($result['name']) . "&email=" . urlencode($result['email']) . "&number=" . urlencode($result['number']) . "'>Edit</a> | <a href='delete.php?name=" . urlencode($result['name']) . "&email=" . urlencode($result['email']) . "&number=" . urlencode($result['number']) . "'>Delete</a></td>";
        echo "</tr>";
    }

    // Close the table
    echo "</table>";
} else {
    echo "Table is empty";
}

// Free the result set
mysqli_free_result($data);

// Close the database connection
mysqli_close($conn);
?>

</body>
</html>
