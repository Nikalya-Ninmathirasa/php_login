<?php 
require "header.php";
?>

<main class="card text-bg-secondary">
    <?php 
      if(isset($_SESSION['userUid'])) {
        echo '<p>You are logged in!!</p>';
      }

      else {
        echo '<p>You are logged out!!</p>';
      }

    ?>
    
    
</main>