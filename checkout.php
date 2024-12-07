<?php 

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51QTID0DkLr7pUtUcIZt4qFaVsdw7x4cj6F64QzTnbdNqD7NQKHCVP07nqtit0bajrHs9M1vtsB37LfFD8Z913mgu00DZfHlxIn";
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
