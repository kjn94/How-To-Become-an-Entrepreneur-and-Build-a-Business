<?php
    require_once '../../core/init.php';
    include '../../includes/navigationEcommerce.php';
    $sql = "SELECT * FROM ecommerce WHERE featured = 1";
    $featured = $db->query($sql);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Club House</title>
        <!-- Latest compiled and minified CSS -->
        <link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/menu/css/ecommerce2.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/menu/css/interviewsecommerce.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/menu/css/sidebar.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/menu/css/dropdownnew.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/menu/pages/club-house/button.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/menu/css/footer.css" rel="stylesheet" type="text/css" />
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
<body>

<div class="header">
    <div class="welcome">
        
    </div>
</div>
<div class="main">
    <div class="content">
        <div class="wrapper">
            <div class="main-content">
                <div class="container">

                <table class="rwd-table">
                    <tbody>
                      <tr>
                    <?php 
                    if(!empty($_SESSION["cart"]))
            		{
            			$total = 0;
            			$count = count($_SESSION["cart"]);
            			foreach($_SESSION["cart"] as $keys => $values)
              			{ 
	                    	$total = $total + ($values["item_quantity"] * $values["product_price"]);
              			}
	                        if($count == 1){
		                        echo "
		                        <a href='http://localhost/menu/pages/club-house/shoppingcart.php' target='_blank'>
		                       <button class='buttoncart buttoncart2'>".$count." product - $".number_format($total, 2)."</button>
		                        </a>";
	                    	}
	                    	else{
		                        echo "
		                        <a href='http://localhost/menu/pages/club-house/shoppingcart.php' target='_blank'>
		                      <button class='buttoncart buttoncart2'>".$count." products - $".number_format($total, 2)."</button>
		                        </a>";
	                    	}
                    }
                    
                    $counter = 0;
                    if(mysqli_num_rows($featured) > 0)
                    {
                        while($row = mysqli_fetch_array($featured))
                        {
                            if($counter % 2 == 0){
                                echo '</tr><tr>';
                            }
                            ++$counter;
                        ?>
                                <td>

                                <hr>
                            <div class="col-md-3">
                            <form method="post" action="http://localhost/menu/pages/club-house/shop.php?action=add&id=<?php echo $row["id"]; ?>">
                            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
                            <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                            <h2 class="text-info"><?php echo $row["title"]; ?></h2>
                            <h3 class="text-danger">$ <?php echo $row["price"]; ?></h3>
                            <h3>Quantity:  <input type="text" name="quantity" class="form-control" value="1"></h3>
                            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                             <input type="submit" name="add" class="button8 button9" value="Add To Bag">
                  
                            </div>
                            </form>
                            </div>
                            </td>
                            <?php
                        }
                    }
                    ?>
                      </tr>
                    </tbody>
                  </table>
                </div>   
            </div>
        </div>
        <div class="sidebar">
        <br><br><br>
        <img src="../../images/blog/sidebar-tct.jpg"></img><br><br><br>
        <img src="../../images/blog/sidebar-snapchat.jpg"></img><br><br><br>
        <img src="../../images/blog/sidebar-ig.jpg"></img>
        </div>
    </div>
</div>

    <!--------FOOTER-------->
<?php
    include '../../includes/footer2.php';
?>
 </body>
</html>
