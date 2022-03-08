<?php
    include "db/config.php";
    include "rand.php";
    use Utils\RandomStringGenerator;

    $error = "";
    if(isset($_POST['submit'])){
        $email = trim($_POST['email']);
        $pass = trim($_POST['password']);

        //sanity
        if(empty($email) && empty($pass)){
            $err = "Please fill in the form";
        } else if(empty($email)){
            $err = "please enter your email";
        } else if(empty($pass)){
            $err = "please enter your password";
        } else {
            //check if user exists in the database
            $stmt = $conn->prepare('SELECT Email FROM users WHERE Email=?');
            $stmt->execute([$email]);
            if($stmt->rowCount() > 0){
                //check details if correct
                $query = $conn->prepare( "select Password, User_Type from users where Email=?" );
                $query->execute([$email]);
                $row = $query->fetch(PDO::FETCH_OBJ);
                $password = $row->Password;
                $user_type = $row->User_Type;
                if(password_verify($pass, $password)){
                    session_start();

                    //generate session id
                    $generator = new RandomStringGenerator;
                    $sessionid = $generator->generate(10);

                    //update database
                    $stmt = $conn->prepare('UPDATE users SET SessionID=? WHERE Email=?');
                    $stmt->execute([$sessionid, $email]);
                    $stmt = NULL;

                    //set session
                    $_SESSION['id'] = $sessionid;

                    header('Location:homepage.html');
                } else {
                    $error = "wrong password";
                }
            } else {
                $error = "User does not exist";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="form-container"  style="background-image: linear-gradient(rgba(99,112,168,.5),rgba(81,91,233 ,.5));">
        <?php echo $error; 
        
        ?><br/>
        
        <form action="login.php" method="POST">
            <h3>Login </h3>
            <input type="email" name="email" required placeholder="Enter your Email">
            <input type="password" name="password" required placeholder="Enter your Password">
        </select>
        <input type="submit" name="submit" value="login" class="form-btn">
         <p>Don't have an account? <a href="register.php">Register </a></p>
        </form>
    </div>
</body>
</html>