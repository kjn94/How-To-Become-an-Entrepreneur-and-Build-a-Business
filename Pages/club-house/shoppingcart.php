<?php
    require_once '../../core/init.php';
    include '../../includes/navigationHome.php';
    $sql = "SELECT * FROM ecommerce WHERE featured = 1";
    $featured = $db->query($sql);
    session_start();
?>

<head>
    <title>Shopping Cart</title>
    <link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/menu/Pages/club-house/shoppingcart.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/menu/Pages/club-house/button.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/menu/Pages/club-house/shoppingcart.js" rel="stylesheet" type="text/javascript" />
</head>

  <nav class="nav-aboveslider">
      <br>
      <center><h1>Discover The World Of <br>Entrepreneurship</h1><center>
  </nav>
<div class="form clearfix">
    <div class="header">
      
      <h2>My Shopping Cart</h2>
    </div>
        <table>
        <tr>
            <th width="5%">X</th>
            <th width="35%">Product Name</th>
            <th width="5%">Quantity</th>
            <th width="25%">Unit Price</th>
            <th width="20%">Total</th>
        </tr>

          <?php
            if(!empty($_SESSION["cart"]))
            {
              $total = 0;
              foreach($_SESSION["cart"] as $keys => $values)
              { 
                ?>
                <tr>
                  <th width="5%"><a href="http://localhost/menu/pages/club-house/shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></th>
                  <th width="30%"><?php echo $values["item_name"]; ?></th>
                  <th class="tesp">
                    <?php echo $values["item_quantity"] ?>
                  </th>
                  <th class="tesp">$ <?php echo $values["product_price"]; ?></th>
                  <th class="tesp">$ <?php echo number_format($values["item_quantity"]*$values["product_price"], 2); ?></th>
                </tr>

               <?php 
                $total = $total + ($values["item_quantity"] * $values["product_price"]);
              }

          ?>
         </table>
      <div class="total">
          Total: $ <?php echo number_format($total, 2); ?>
      </div>
      
      <div>
          <a href="http://localhost/menu/pages/club-house/club-house.php">
            <button class="button-two"><span>Continue Shopping</span></button>
          </a>
          <input type="submit" value="Checkout -&gt;" />  </div>
            <?php
        }       
      ?>
  </div>
<?php
    include '../../includes/footer2.php';
?>



   