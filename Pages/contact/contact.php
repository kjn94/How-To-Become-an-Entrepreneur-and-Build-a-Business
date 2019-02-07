<?php
  require_once '../../core/init.php';
  include '../../includes/navigationHome.php';
 session_start();
?>

<?php include('form_process.php'); ?>
<link rel="stylesheet" href="form.css" type="text/css">
<link href="http://localhost/menu/css/mainmenu.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/menu/css/sidebar.css" rel="stylesheet" type="text/css" />

  <nav class="nav-aboveslider">
      <center><h1>Discover The World Of <br>Entrepreneurship</h1><center>
  </nav>
<div class="main">
  <div class="content">
    <div class="wrapper">
      <div class="main-content">
  <center><form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h3>Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" name="url" value="<?= $url ?>" tabindex="4" >
      <span class="error"><?= $url_error ?></span>
    </fieldset>
    <fieldset>
      <textarea value="<?= $message ?>" name="message" tabindex="5">
      </textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success ?></div>
  </form></center>
</div>
</div>
    <center><div class="sidebar">

    <img src="../../images/blog/sidebar-tct.jpg"></img><br><br><br>
    <img src="../../images/blog/sidebar-snapchat.jpg"></img><br><br><br>
    <img src="../../images/blog/sidebar-ig.jpg"></img>
  </div></center>
</div>
</div>

<!--------FOOTER-------->
<?php

  include '../../includes/footer2.php';

?>