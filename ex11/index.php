
<!DOCTYPE html>
<html>

<head>

    <title>Online Shopping Application</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 450px;
            margin: 60px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: #222;
            margin-bottom: 10px;
        }

        h2 {
            text-align: center;
            color: #555;
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 12px;
            margin-top: 7px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 15px;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        .view-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .view-link:hover {
            text-decoration: underline;
        }

    </style>

</head>

<body>

    <div class="container">

        <h1>Online Shopping Application</h1>

        <h2>Add Product</h2>

        <form action="add_product.php" method="POST">

            <label>Product Name:</label>
            <input type="text" name="product_name" required>

            <br><br>

            <label>Category:</label>
            <select name="category" required>

                <option value="">Select Category</option>
                <option value="Electronics">Electronics</option>
                <option value="Clothing">Clothing</option>
                <option value="Books">Books</option>
                <option value="Accessories">Accessories</option>

            </select>

            <br><br>

            <label>Quantity:</label>
            <input type="number" name="quantity" min="1" required>

            <br><br>

            <label>Price:</label>
            <input type="number" name="price" step="0.01" min="0" required>

            <br><br>

            <input type="submit" value="Add Product">

        </form>

        <a href="view_products.php" class="view-link">
            View All Products
        </a>

    </div>

</body>

</html>

