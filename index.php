<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Buy Your Favourite Shoes</h1>
    <form method="post" action="checkout.php">
        
        <div class="product-card">
                <div class="product-image">
                    <img src="Shoes1.jpg" alt="Running Shoes">
                </div>
                <div class="product-details">
                    <p>Shoes</p>
                    <p><strong>US$150.00</strong></p>
                    <p>Lightweight and comfortable, perfect for jogging and workouts. Available in multiple sizes.</p>
                    
                    <input type="hidden" name="product" value="Running Shoes">
                    
                    <button>Pay</button>
                </div>
            </div>
        </form>
</body>
</html>