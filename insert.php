<?php
$servername = "localhost";
$username = "root";  // Default XAMPP username
$password = "";      // Default XAMPP password
$database = "product_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$short_description = $_POST['short_description'];
$long_description = $_POST['long_description'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$purchase_date = $_POST['purchase_date'];
$vendor = $_POST['vendor'];

// Insert into database
$sql = "INSERT INTO products (name, short_description, long_description, price, quantity, purchase_date, vendor) 
        VALUES ('$name', '$short_description', '$long_description', '$price', '$quantity', '$purchase_date', '$vendor')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Product added successfully'); window.location.href='form.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
