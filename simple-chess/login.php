<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: chessking.php");
  exit;
}
 

require_once "connect.php";
 
$username = $password = "";
$username_err = $password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Ju lutemi shkruani emrin e perdoruesit!";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Ju lutem vendosni fjalekalimin tuaj!";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){

        $sql = "SELECT id, username, password FROM signup WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = $username;
            
            if(mysqli_stmt_execute($stmt)){
                
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){    
                
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);

                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){

                            session_start();
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            header("location: chessking.php");
                        } else{
							
                            $password_err = "Fjalekalimi qe shenuat nuk ishte i vlefshem!";
                        }
                    }
                } else{

                    $username_err = "Nuk u gjet asnje llogari me ate emer perdoruesi!";
                }
            } else{
                echo "Gabim ju lutem provoni perseri me vone.";
            }
        }
        
        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($link);
}
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Login Form</title>
            <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1">    
            <link rel="stylesheet" href="login.css">
        </head>
            <body>  
 <header >
 <nav>

 </nav>
<div class="logo">
<img src="img/logo.png" alt="LOGO">
 <h1>CH<span>essKi</span>NG</h1>
</div>
      
</header>
              
                <div class="login-box">
                    <h2>Login</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="user-box <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <input type="text" name="username" value="<?php echo $username; ?>">
                            <label>Username</label>
                            <span class="help-block"><?php echo $username_err; ?></span>
                        </div>
                        <div class="user-box <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <input type="password" name="password" class="form-control">
                            <label>Password</label>
                            <span class="help-block"><?php echo $password_err; ?></span>
                        </div>
                     
                        <input type="submit" value="Log in">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                           
                        </input>

                        <a href="signup.php">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Sign Up
                        </a>
                    </form>
                </div>
            </body>
    </html>