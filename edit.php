<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <style>
        /* Define form styles */
        form {
            width: 60%; /* Adjust width as needed */
            margin: 0 auto; /* Center the form horizontally */
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
include("connection.php"); // Include your database connection file

// Check if email parameter is provided in the URL
if (isset($_GET['email'])) {
    $email = mysqli_real_escape_string($conn, $_GET['email']);

    // Fetch the record from the database based on the provided email
    $query = "SELECT * FROM form WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful and if a record was found
    if ($result && mysqli_num_rows($result) > 0) {
        $record = mysqli_fetch_assoc($result); // Fetch the record details
?>
        <form action="update.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $record['name']; ?>" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $record['email']; ?>" readonly>

            <label for="number">Number:</label>
            <input type="text" id="number" name="number" value="<?php echo $record['number']; ?>" required>

            <input type="submit" value="Update Record">
        </form>
<?php
    } else {
        echo "No record found with the provided email.";
    }
} else {
    echo "Email parameter is missing.";
}

// Close the database connection
mysqli_close($conn);
?>

</body>
</html>
