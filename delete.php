<?php
include("connection.php");

// Check if parameters are provided
if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['number'])) {
    // Retrieve parameters
    $name = mysqli_real_escape_string($conn, $_GET['name']);
    $email = mysqli_real_escape_string($conn, $_GET['email']);
    $number = mysqli_real_escape_string($conn, $_GET['number']);

    // Delete the record from the database
    $query = "DELETE FROM form WHERE name='$name' AND email='$email' AND number='$number'";
    $result = mysqli_query($conn, $query);

    if($result) {
        echo "Record deleted successfully";
    } else {
        echo "Failed to delete record: " . mysqli_error($conn);
    }
} else {
    echo "Name, email, and number parameters not provided.";
}

// Close the database connection
mysqli_close($conn);
?>
