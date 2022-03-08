<?php
    error_reporting(1);
    $error = "";
    include "db/config.php";
    include "rand.php";
    use Utils\RandomStringGenerator;

    if (isset($_POST['submit'])){
        $name=trim($_POST['name']);
        $email=trim($_POST['email']);
        $pass = trim($_POST['password']);
        $cpass = trim($_POST['cpassword']);
        $user_type = trim($_POST['user_type']);

        //sanity check
        if(empty($name) && empty($email) && empty($pass) && empty($cpass)){
            $error = "please fill in the form";
        } else if(empty($name)){
            $error = "name is required";
        } else if(empty($email)){
            $error = "email is required";
        } else if(empty($pass)){
            $error = "password is required";
        } else if(empty($cpass)){
            $error = "you have to confirm your password";
        }else if($pass != $cpass){
            $error = "passwords mismatch!";
        } else {
            //check if user is already registered
            $stmt = $conn->prepare('SELECT Email FROM users WHERE Email=?');
            $stmt->execute([$email]);
            if($stmt->rowCount > 0){
                $error = "Email already in use";
            } else {
                $pass = password_hash($pass, PASSWORD_DEFAULT);

                //generate sessionID userID
                $generator = new RandomStringGenerator;
                $sessionid = $generator->generate(10);
                $generator = new RandomStringGenerator;
                $userid = $generator->generate(8);
               
                echo $sessionid.'    '.$userid;

                //save user data to database
                $stmt = $conn->prepare("INSERT INTO users(Name, Email, Password, User_Type, SessionID, UserID) values(?, ?, ?,?,?,?)");
                $stmt->execute([$name, $email, $pass, $user_type, $sessionid, $userid]);
                $stmt=NULL;

                //redirect user to homepage
                echo '<script>window.location.href="./login.php";</script>';
            }
        }
    } else {
    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="assets/css/style.css?">
</head>
<body>


    <div class="form-container" style="background-image: linear-gradient(rgba(99,112,168,.5),rgba(81,91,233 ,.5));">
        <?php echo $error; ?>
        <form action="register.php" method="POST">
            <h3>Register now</h3>
            <input type="text" name="name" required placeholder="Enter your name">
            <input type="email" name="email" required placeholder="Enter your Email">
            <input type="password" name="password" required placeholder="Enter your Password">
            <input type="password" name="cpassword" required placeholder="Confirm your Password">
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Already have an account? <a href="login.php">Login now</a></p>
        </form>
    </div>
</body>
</html>