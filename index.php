<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daejang_Co</title>
    <link rel="stylesheet" href="css/min.css">
    <style>
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            background: #fff;
            transition: 0.3s;
        }
        .product-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .product-card img {
            max-width: 100%;
            height: 180px;
            object-fit: cover;
            margin-bottom: 10px;
        }
        .product-card h3 {
            margin: 10px 0 5px;
            font-size: 1.2rem;
        }
        .product-card p {
            margin: 0;
            color: #666;
        }
    </style>
</head>
<body>
<?php include 'assets/header.php'; ?>

<div class="container">
    <h1>Our Products</h1>
    <div class="products">
        <?php
        include 'assets/db.php';

        $sql = "SELECT * FROM products LIMIT 12"; // show first 12 products
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="product-card">';
                echo '<img src="uploads/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['name']) . '">';
                echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
                echo '<p>Price: $' . number_format($row['price'], 2) . '</p>';
                echo '<p>' . substr(htmlspecialchars($row['description']), 0, 60) . '...</p>';
                echo '</div>';
            }
        } else {
            echo "<p>No products available yet.</p>";
        }

        $conn->close();
        ?>
    </div>
</div>

<?php include 'assets/footer.php'; ?>
</body>
</html>
