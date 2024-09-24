<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header> 
    <nav>
        <ul class="nav">
            <li class="nav-item"><i class="fa-solid fa-user nav-link"></i>
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            <li class="nav-item right">
            <div>
                <?php 
                  if(isset($_SESSION['userid'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                <button class="btn btn-outline-secondary" type="submit" name="logout-submit">Logout</button>
            </form>';
                  }
            
                  else {
                    echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="UserName">
                <input type="password" name="password" placeholder="Password">
                <button class="btn btn-outline-secondary" type="submit" name="login-submit">Login </button>
                <button class="btn btn-outline-secondary"> <a style="color:green" href="signup.php">Signup<a></button>
            </form>';
                  }
                ?>
            
            
            </div>
            </li>
            </ul>
        </nav>
       
    </header>

</body>
</html>
