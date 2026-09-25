<?php

include "db_connect.php";

$sql = "SELECT * FROM products ORDER BY added_date DESC";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Products</title>

</head>

<body>

    <h1>Online Shopping - Product List</h1>

    <table border="1" cellpadding="8">

        <tr>

            <th>Product ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Added Date</th>

        </tr>

        <?php

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

        ?>

        <tr>

            <td><?php echo $row['product_id']; ?></td>

            <td><?php echo $row['product_name']; ?></td>

            <td><?php echo $row['category']; ?></td>

            <td><?php echo $row['quantity']; ?></td>

            <td>₹<?php echo $row['price']; ?></td>

            <td><?php echo $row['added_date']; ?></td>

        </tr>

        <?php

            }

        } else {

        ?>

        <tr>

            <td colspan="6">
                No products available.
            </td>

        </tr>

        <?php

        }

        ?>

    </table>

    <br>

    <a href="index.php">Add New Product</a>

</body>

</html>

<?php

$conn->close();

?>