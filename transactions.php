<?php
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/Transaction.php');

  // instantiate transaction
  $transaction = new Transaction();

  //get transaction
  $transactions = $transaction->getTransactions();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>View Transactions</title>
  </head>
  <body>
    <div class="container mt-4">
      <div class="btn-group" role="group">
        <a href="customers.php" class="btn btn-secondary">Customers</a>
        <a href="transactions.php" class="btn btn-primary">Transactions</a>
      </div>
      <hr>
      <h2>Transactions</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Transaction Id</th>
            <th>Customer</th>
            <th>Product</th>
            <th>Amount</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($transactions as $t): ?>
            <tr>
              <td><?php echo $t->id; ?></td>
              <td><?php echo $t->customer_id ?></td>
              <td><?php echo $t->product; ?></td>
              <td><?php echo sprintf('%.2f', $t->amount / 100); ?> <?php echo strtoupper($t->currency); ?></td>
              <td><?php echo $t->created_at; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <br>
      <p><a href="index.php">Main page</a></p>
    </div>
  </body>
</html>
