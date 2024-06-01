<?php
include("connection.php"); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);

    // Update data in the database
    $query = "UPDATE form SET name='$name', number='$number' WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    // Check if the update was successful
    if ($result) {
        echo "Data Updated Successfully";
    } else {
        echo "Failed to Update Data: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
