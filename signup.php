<?php 
require "header.php";
?>

<main>
    <div>
        <section class="card">
           <h1>Signup</h1>
           <form action="includes/signup.inc.php" method="post">
              <input type="text" class="form-control" name="username" placeholder="UserName">
              <input type="email" class="form-control" name="email" placeholder="Email">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <input type="password" class="form-control" name="password-repeat" placeholder="Repeat Password">
              <button type="submit" class="btn btn-outline-secondary" name="signup-submit">Signup</button>
           </form> 
        </section>
    </div>
</main>