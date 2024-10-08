<?php

if(isset($_POST['login-submit'])){
  require 'dbc.inc.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  if(empty($username) || empty($password)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
}
  else {
    $sql = "SELECT * FROM users WHERE userName=? OR email=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../index.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "ss", $username,$password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            $pwdCheck = password_verify($password,$row['passwrd']);
            if($pwdCheck==false) {
                header("Location:../index.php?error=wrongpwd");
                exit();
            }
            else if ($pwdCheck==true){
                session_start();
                $_SESSION['userid'] = $row['usersId'];
                $_SESSION['userUid'] = $row['userName'];

                header("Location:../index.php?login=success");
                exit();
            }
            else{
                eader("Location:../index.php?error=wrongpwd");
                exit();
            }
        }
        else{
            header("Location:../index.php?error=nouser");
            exit();
        }
    }
  }
}

else {
header("Location: ../index.php");
exit();

}