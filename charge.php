<?php
  require_once('vendor/autoload.php'); // so Composer can use stripe-php bindings

  \Stripe\Stripe::setApiKey('sk_test_BQokikJOvBiI2HlWgH4olfQ2');

  // sanitize POST Array
  $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

  $first_name = $POST['first_name'];
  $last_name = $POST['last_name'];
  $email = $POST['email'];
  $token = $POST['stripeToken'];

  // Create Customer In Stripe
  $customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
  ));

  // Charge the Customer
  $charge = \Stripe\Charge::create(array(
    "amount" => 5000,
    "currency" => "usd",
    "description" => "Intro To React Course",
    "customer" => $customer->id
  ));

  //print_r($charge);

  // Redirect to success
  header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);

?>
