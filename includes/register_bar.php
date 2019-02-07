
<nav class="nav-register">
    <?php
      if(!isset($_SESSION ['uid'])){
    ?>
        <p class="haha">You are currently viewing a preview of the Academy. To unlock all features and video episodes of the Secret Academy
        <a href="../login.php"><button class="button8 button9">Login</button></a>
        or
        <a href="../join-us/join-us.php">
        <button class="button8 button9">Register</button></a></p>

    <?php
    }
    
      else{
          echo "<p class='haha'>You are logged in as ".$_SESSION['username']." &bull; <a href='../logout_parse.php'>
          <button class='button8 button9'>Logout</button></a>";
      }
    ?>
</nav>