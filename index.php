<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog (Objects)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: beige;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap; 
            gap: 20px; 
            max-width: 900px;
            margin: 0 auto;
        }
        .product-card {
            width: calc(50% - 10px); 
            box-sizing: border-box;
            border: 1px solid #ccc;
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .product-card h2 {
            margin-top: 0;
            margin-bottom: 5px;
            color: blueviolet;
            font-size: 1.2em;
        }
        .product-card .price {
            font-weight: bold;
            color: limegreen;
            float: right;
        }
        .product-card .description {
            margin-top: 10px;
            color: #555;
            font-style: italic;
        }
    </style>
</head>
<body>

    <h1>🛠️ Our Tools Catalog (PHP Objects)</h1>

    <div class="product-list">
        <?php
            class Product {
                public $name;
                public $description;
                public $price;

                public function __construct($name, $description, $price) {
                    $this->name = $name;
                    $this->description = $description;
                    $this->price = $price;
                }

                public function getFormattedPrice() {
                    return "$" . number_format($this->price, 2);
                }
            }

            $products = array(
                new Product("HAMMER", "This is a great hammer for all of your nails.", 13.55),
                new Product("SCREWDRIVER", "A sturdy Phillips head for all your fastening needs.", 8.99),
                new Product("MEASURING TAPE", "25-foot tape with metric and imperial markings.", 18.75),
                new Product("LEVEL", "A 12-inch magnetic level for accurate horizontal and vertical lines.", 22.49)
            );
            foreach ($products as $product) {
                echo "<div class='product-card'>";
                echo "<h2>";
                echo strtoupper($product->name);
                echo " <span class='price'>" . $product->getFormattedPrice() . "</span>";
                echo "</h2>";
                echo "<p class='description'>" . $product->description . "</p>";
                echo "</div>";
            }
        ?>
    </div>

</body>
</html>