<?php

include "db_connect.php";

$product_name = $_POST['product_name'];
$category = $_POST['category'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$sql = "INSERT INTO products
        (product_name, category, quantity, price)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "ssid",
    $product_name,
    $category,
    $quantity,
    $price
);

if ($stmt->execute()) {

    echo "<h2>Product Added Successfully!</h2>";

    echo "<a href='index.php'>Add Another Product</a>";
    echo "<br><br>";
    echo "<a href='view_products.php'>View All Products</a>";

} else {

    echo "Error: " . $stmt->error;

}

$stmt->close();
$conn->close();

?>