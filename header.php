
<?php
  if (isset($_SESSION['login'])) {
    echo "<a href='index.php?status=logout' style='color:black;'><div class='phone-number'>Log Out</div></a>";
  }else {

    echo "<a href='register.php' style='color:black;'><div class='phone-number'>SIGN UP</div></a>";
    echo "<a href='login.php' style='color:black;'><div class='phone-number'>LOG IN</div></a>";
  }
 ?>
