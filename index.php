<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Pay Page</title>
  </head>
  <body>
    <div class="container">
      <h2 class="my-4 text-center">Intro To React Course [$50]</h2>
      <form action="./charge.php" method="post" id="payment-form">
        <div class="form-row">
          <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
          <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
          <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
          <!-- we need to add class form-control because without it bootstrap
          messes up with the design of the form provided by Stripe -->
          <div id="card-element" class="form-control">
            <!-- A Stripe Element will be inserted here. -->
          </div>
          <!-- Used to display form errors. -->
          <div id="card-errors" role="alert"></div>
        </div>
        <button>Submit Payment</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="/js/charge.js"></script>
  </body>
</html>
