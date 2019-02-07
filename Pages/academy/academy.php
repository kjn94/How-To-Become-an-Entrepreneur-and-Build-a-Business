<?php
    require_once '../../core/init.php';
    include '../../includes/navigationHome.php';
    include '../../includes/navigation_sub.php';
?>
<!DOCTYPE html>
<html>
  <head>
      <title>Academy</title>
      <link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
      <link href="http://localhost/menu/css/mainmenu2.css" rel="stylesheet" type="text/css" />
      <link href="http://localhost/menu/css/buttons.css" rel="stylesheet" type="text/css" />
      <link href="http://localhost/menu/css/academy.css" rel="stylesheet" type="text/css" />
      <link href="http://localhost/menu/css/interviews.css" rel="stylesheet" type="text/css" />
  </head>
<body>
<br><br><br>
<div id="wrapper">
<hr>
  <?php
      include_once("../../includes/dropdown.php");
  ?>
</div>
<br><br>


 <div class="container">
    <table class="rwd-table">
        <tbody>
          <br><br>
            <tr>
              <?php 
              $interviews = "";
                      $sql2 = "SELECT * FROM interviews ORDER by id DESC";
                      $res2 = mysqli_query($db,$sql2) or die(mysqli_error($db));
                      if(mysqli_num_rows($res2) > 0){
                       
                        $counter = 0;
                        while($row2 = mysqli_fetch_assoc($res2)){
                           $cid = $row2['categories'];
                           $tid = $row2['id'];
                           $title = $row2['title'];
                           $image = $row2['image'];
                           $description = $row2['description'];

                      if($counter % 3 == 0){
                          $interviews .= "</tr><tr>";
                      }
                    ++$counter;
                    $interviews .= "
                    <td>
                            <div id='element1'></div>
                            <div id='content1'>
                                        <img src=".$image." alt=".$title.">
                                        <h3>".$title."</h3>
                                        <hr>
                                        <h4>".$description."</h4>
                            <div id='hovers'>
                              <a href='view_interview.php?cid=".$cid."&tid=".$tid."' class='button' target='_blank'>
                                <span class='contentbut'> Read More</span>
                              </a>
                            </div>
                    </td>";           
                  }
      
              echo $interviews; 
            }
          ?>              
      </tr>
    </tbody>
  </table>
</div>  
<?php
    include '../../includes/footer2.php';
?>
</body>
</html>