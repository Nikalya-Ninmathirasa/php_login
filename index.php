<?php 
require "header.php";
?>

<main>
    <?php 
      if(isset($_SESSION['userid'])) {
        echo '<p>You are logged in!!</p>';
      }

      else {
        echo '<p>You are logged out!!</p>';
      }

    ?>
    
    
</main>