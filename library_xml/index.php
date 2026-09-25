<!DOCTYPE html>
<html>

<head>

    <title>Library Book Details</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #eef2ff, #dbeafe);
            padding: 50px 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        .card {
            background: white;
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #1e293b;
            font-size: 30px;
            margin-bottom: 8px;
        }

        .header p {
            color: #64748b;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 10px;
        }

        th {
            background: #4f46e5;
            color: white;
            padding: 15px;
            text-align: left;
            font-size: 15px;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }

        tr:nth-child(even) {
            background: #f8fafc;
        }

        tr:hover {
            background: #eef2ff;
        }

        .price {
            font-weight: bold;
            color: #16a34a;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #94a3b8;
            font-size: 13px;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="card">

        <div class="header">
            <h1>Library Book Details</h1>
            <p>Books loaded from XML using PHP</p>
        </div>

        <?php

        // Load the XML file
        $xml = simplexml_load_file("books.xml");

        if ($xml === false) {

            echo "<p>Unable to load XML file.</p>";

        } else {

            echo "<table>";

            echo "<tr>";
            echo "<th>Title</th>";
            echo "<th>Author</th>";
            echo "<th>Year</th>";
            echo "<th>Price</th>";
            echo "</tr>";

            // Display each book
            foreach ($xml->book as $book) {

                echo "<tr>";

                echo "<td>" . htmlspecialchars($book->title) . "</td>";

                echo "<td>" . htmlspecialchars($book->author) . "</td>";

                echo "<td>" . htmlspecialchars($book->year) . "</td>";

                echo "<td class='price'>$" .
                     htmlspecialchars($book->price) .
                     "</td>";

                echo "</tr>";
            }

            echo "</table>";
        }

        ?>

        <div class="footer">
            PHP XML File Reading Experiment
        </div>

    </div>

</div>

</body>

</html>