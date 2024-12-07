<?php 

require __DIR__ . "/vendor/autoload.php";

// copy secret api key from your stripe account and paste it below. 

$stripe_secret_key = "paste secret-api-key here";
\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/PaymentGateway/success.php",
    "cancel_url" => "http://localhost/PaymentGateway/index.php", // Optional but recommended
    
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 15000, // Fixed the typo
                "product_data" => [
                    "name" => "Shoes"
                ]
            ]
         ],
        
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url); // Added the missing colon
?>
