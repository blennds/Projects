<?php

require_once "connect.php";
 
$username = $email = $password = $confirm_password = $phone = "";
$username_err = $email_err = $password_err = $confirm_password_err = $phone_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Ju lutem shkruani emrin e perdoruesit.";
    } else{
        $sql = "SELECT id FROM signup WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = trim($_POST["username"]);
            
            if(mysqli_stmt_execute($stmt)){
				
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Ky emer perdoruesi egziston tashme!";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Dicka shkoi keq. Ju lutem provoni perseri me vone!";
            }
        }
         
        mysqli_stmt_close($stmt);
    }

    if(empty(trim($_POST["email"]))){
        $email_err = "Ju lutem shkruani emailin e perdoruesit.";
    } else{
        
        $sql = "SELECT id FROM signup WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = trim($_POST["email"]);
            
            if(mysqli_stmt_execute($stmt)){
				
                mysqli_stmt_store_result($stmt);
                
                $email = trim($_POST["email"]);
                
            } else{
                echo "Oops! Dicka shkoi keq. Ju lutem provoni perseri me vone!";
            }
        }

        mysqli_stmt_close($stmt);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Shenoni nje fjalekalim.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Fjalekalimi duhet te kete min. 6 karaktere !";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Ju lutem konfirmoni fjalekalimin !";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Fjalekalimi nuk perputhet.";
        }
    }

    if(empty(trim($_POST["phone"]))){
        $phone_err = "Ju lutem shkruani numrin e telefonit te perdoruesit.";
    } else{
        
        $sql = "SELECT id FROM signup WHERE phone = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "i", $param_phone);
            
            $param_phone = trim($_POST["phone"]);
            
            if(mysqli_stmt_execute($stmt)){
				
                mysqli_stmt_store_result($stmt);
                
                $phone = trim($_POST["phone"]);
                
            } else{
                echo "Oops! Dicka shkoi keq. Ju lutem provoni perseri me vone!";
            }
        }

        mysqli_stmt_close($stmt);

    }
    
    if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($phone_err)){
        
        $sql = "INSERT INTO signup (username, email, password, phone) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "sssi", $param_username, $param_email, $param_password, $param_phone);
            
            $param_username = $username;

            $param_email = $email;
			
            $param_password = password_hash($password, PASSWORD_DEFAULT); 

            $param_phone = $phone;
            	
            if(mysqli_stmt_execute($stmt)){
				
                header("location: login.php");
            } else{
                echo "Dicka shkoi keq. Ju lutem provoni perseri me vone !!!";
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
            <link rel="stylesheet" href="signup.css">
        </head>


<header >
 <nav>

 </nav>
<div class="logo">
<img src="img/logo.png" alt="LOGO">
 <h1>CH<span>essKi</span>NG</h1>
</div>
      
</header><br>
      
      
            <body>  
                <div class="login-box">
                    <h2>Sign Up</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="user-box <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <input type="text" name="username" value="<?php echo $username; ?>">
                            <label>Username</label>
                        </div>
                             <div class="user-box <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <input type="text" name="email" value="<?php echo $email; ?>">
                            <label>Email</label>
                        </div>
                      
                      
                            <div class="user-box <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <input type="password" id="password"  name="password"  value="<?php echo $password; ?>"> 
                            <label> Password</label>
                            <span class="help-block"><?php echo $password_err; ?></span>
                            </div>
                       <div class="user-box <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                            <input type="password" class='password2' id="password2"  name="confirm_password"  value="<?php echo $confirm_password; ?>"> 
                            <label>Confirm Password</label>
                            <span class="help-block"><?php echo $confirm_password_err; ?></span>
                            </div>
                         <div class="user-box <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                            <input type="number" name="phone" value="<?php echo $phone; ?>">
                            <label> Phone</label>    
                         </div>
                       <input type="submit" >
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </input>

                    </form>
                </div>

  <script src="confirmpassword.js"></script>
            </body>
    </html>