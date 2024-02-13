<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        
        $valid_username = 'admin';
        $valid_password = 'password';

        
        $username = $_POST['username'];
        $password = $_POST['password'];

        
        if ($username === $valid_username && $password === $valid_password) {
    
            $_SESSION['username'] = $username;
            
        
            header("Location: index.html");
            exit();
        } else {
    
            $error_message = "Invalid username or password.";
        }
    } else {
        
        $error_message = "Please enter both username and password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
  

        .login-form {
            width: 360px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            background: #fff;
            margin-right: 50px;

        }
        .login-form_1{
            width: 360px;
            margin: 50px auto;
            padding: 90px;
            border-radius: 5px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            background: lightblue;
            text-align: center;
            margin-left: 60px;
        }

        .login-form h2 {
            margin-bottom: 30px;
            color: #333;
            font-weight: bold;
            text-align: center;
        }

        .form-control {
            min-height: 20px;
            box-shadow: none;
            border-color: #ddd;
            border-radius: 20px;
        }

        .form-control:focus {
            border-color: #7a77ff;
            box-shadow: 0 0 8px rgba(122, 119, 255, 0.4);
        }

        .login-btn {
            font-size: 16px;
            font-weight: bold;
            background: #7a99ff;
            border-color: #7a77ff;
            padding: 12px 10px;
            border-radius: 20px;
        }

        .login-btn:hover {
            background: #665dff;
            border-color: #665dff;
        }

        .error-message {
            color: #ff4444;
            font-size: 14px;
            text-align: center;
            margin-top: 15px;
        }
        .container {
      display: flex;
      margin: 10px;
      padding: 10px;
    }
    .sign{
        border-radius: 20px;
        background: #7a99ff;
       
        color: black;
    }

    </style>
</head>
<body>
    <div class="container">
    <div class="login-form">
        <h2>Login</h2>
        <?php
         if(isset($error_message)) { 
            ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php
         } 
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" name="username" placeholder="username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block login-btn"><a href="index.html">Login</button>
             <br>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
                <a href="#" style="padding-left:50px;">Forgot password</a>
            </div>
        </form>
    </div>
    <div class="login-form_1">
        <h4>Welcome to Login</h4>
        <p>Don't have an account?</p>
        <button type="submit" class="sign"><a href="signup.html">Sign Up</a></button>

    </div>
    </div>
</body>
</html>
