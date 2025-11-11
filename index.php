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
            clear: both; 
        }
    </style>
</head>
<body>

    <h1>Fashion Catalog (PHP Objects)</h1>

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
                new Product("Cole Haan Modern Essentials Cap Oxford", "Full-grain oiled leather cap-toe shoe for smart-casual or dress wear", 99.99),
                new Product("On Men's Cloud 6 Sneakers", "Lightweight cushioning sneakers with elastic laces, sporty-chic style", 159.99),
                new Product("L.L.Bean Men's Slim Fit Signature Washed Field Shirt", "Rugged herringbone fabric, garment-dyed for a worn-in look, slim fit", 89.00),
                new Product("Michael Kors Men's Classic Fit Stretch Dress Pants", "Tailored dress pants incorporating stretch fabric for comfort and style", 47.50),
                new Product("Urban Outfitters Cotton Jump Shot Hoodie", "Casual hoodie in cotton, versatile for everyday wear", 39.00),
                new Product("Calvin Klein Men's Classic Fit Coleman Overcoat", "Notch-lapel long overcoat, clean tailored look for colder days", 118.50)
            );

            foreach ($products as $product) {
                echo "<div class='product-card'>";
                echo "<h2>" . strtoupper($product->name);
                echo "<span class='price'>" . $product->getFormattedPrice() . "</span></h2>";
                echo "<p class='description'>" . $product->description . "</p>";
                echo "</div>";
            }
        ?>
    </div>

</body>
</html>
