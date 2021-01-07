<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
    $name = "PHP Test Store";
    $credit = 10000;

    // Product variables with keys
    $products['Computer']=7500;
    $products['Car']=150000;
    $products['iPhone']=10000;
    $products['Toaster']=750;

    echo "<h1>Welcome to ".$name."!</h1>";
    echo "<h2>You have R".$credit." in your wallet.</h2>";

    foreach($products as $key => $value){
      echo "<p>The ".$key." costs R".$value."</p>";
    }
    ?>
  </body>
</html>