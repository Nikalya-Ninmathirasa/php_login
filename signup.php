<?php 
require "header.php";
?>

<main>
    <div>
        <section>
           <h1>Signup</h1>
           <form action="includes/signup.inc.php" method="post">
              <input type="text" name="username" placeholder="UserName">
              <input type="email" name="email" placeholder="Email">
              <input type="password" name="password" placeholder="Password">
              <input type="password" name="password-repeat" placeholder="Repeat Password">
              <button type="submit" name="signup-submit">Signup</button>
           </form> 
        </section>
    </div>
</main>