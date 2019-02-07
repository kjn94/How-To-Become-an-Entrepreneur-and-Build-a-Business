   
    <?php
        include_once("../../core/init.php");
        $sql = "SELECT * FROM interviewscat WHERE parent=1 ORDER BY category ASC";
        $res = mysqli_query($db,$sql) or die(mysqli_error($db));
        $categories = "";
        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
              $id = $row['id'];
              $category = $row['category'];
              $categories .= "<a href='view_category.php?cid=".$id."' class='cat_links'>".$category."</a>";
            }
            
        }else{
          echo "<p> There are no categories available yet.</p>";
        }
    ?>

    </div>

<ul class="nav">

  <li class="button-dropdown">
    <a href="javascript:void(0)" class="dropdown-toggle">
      All Episodes <span>▼</span>
    </a>
    
    <ul class="dropdown-menu">
      <li>
    <nav class="papa">
 <?php echo $categories; ?>
    </nav>
      </li>

    </ul>
    
  </li>
</ul>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>




<script type="text/javascript">
jQuery(document).ready(function (e) {
    function t(t) {
        e(t).bind("click", function (t) {
            t.preventDefault();
            e(this).parent().fadeOut()
        })
    }
    e(".dropdown-toggle").click(function () {
        var t = e(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
        e(".button-dropdown .dropdown-menu").hide();
        e(".button-dropdown .dropdown-toggle").removeClass("active");
        if (t) {
            e(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(".button-dropdown").children(".dropdown-toggle").addClass("active")
        }
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-menu").hide();
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-toggle").removeClass("active");
    })
});
</script>