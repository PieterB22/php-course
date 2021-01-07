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

    $taxRate=0.825;

    echo "<h1>Welcome to ".$name."!</h1>";
    echo "<h2>You have R".$credit." in your wallet.</h2>";

    //Tax calculation function
    function tax_calc($amount,$tax){
      $calculate_tax = $amount*$tax;
      $amountWithTax=round($amount+$calculate_tax,2);
      return $amountWithTax;
    }

    // Show the price of all the products
    foreach($products as $key => $value){
      $costWithTax = tax_calc($value,$taxRate);
      echo "<p>The ".$key." costs R".$costWithTax." with tax</p>";
    }

    //Products the viewer can afford
    echo "<h2>Items you can afford</h2>";

    foreach($products as $key => $value){
      $costWithTax = tax_calc($value,$taxRate);
      if($costWithTax <= $credit ){
        echo "<p>".$key."</p>"; 
      }
    }

    ?>
  </body>
</html>