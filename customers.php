<?php
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/Customer.php');

  // instantiate customer
  $customer = new Customer();

  //get Customer
  $customers = $customer->getCustomers();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>View Customers</title>
  </head>
  <body>
    <div class="container mt-4">
      <div class="btn-group" role="group">
        <a href="customers.php" class="btn btn-primary">Customers</a>
        <a href="transactions.php" class="btn btn-secondary">Transactions</a>
      </div>
      <hr>
      <h2>Customers</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Customer Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($customers as $c): ?>
            <tr>
              <td><?php echo $c->id; ?></td>
              <td><?php echo $c->first_name.' '.$c->last_name; ?></td>
              <td><?php echo $c->email; ?></td>
              <td><?php echo $c->created_at; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <br>
      <p><a href="index.php">Main page</a></p>
    </div>
  </body>
</html>
