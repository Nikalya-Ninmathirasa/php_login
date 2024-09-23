<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
    <header> 
        <nav>
            <img src="" alt="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
            <div>
                <?php 
                  if(isset($_SESSION['userid'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>';
                  }
            
                  else {
                    echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="UserName">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" name="login-submit">Login </button>
            </form>
            <a href="signup.php">Signup</a>';
                  }
                ?>
            
            
            </div>
       
    </header>

</body>
</html>
