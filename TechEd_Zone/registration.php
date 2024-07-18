<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name_S = stripslashes($_POST['name_S']);
        $name_S = mysqli_real_escape_string($con, $name_S);

        $branch = stripslashes($_POST['branch']);
        $branch = mysqli_real_escape_string($con, $branch);

        $year_S = stripslashes($_POST['year_S']);
        $year_S = mysqli_real_escape_string($con, $year_S);

        $inst = stripslashes($_POST['inst']);
        $inst = mysqli_real_escape_string($con, $inst);

        $email = stripslashes($_POST['email']);
        $email = mysqli_real_escape_string($con, $email);

        $username = stripslashes($_POST['username']);
        $username = mysqli_real_escape_string($con, $username);

        $password_S = stripslashes($_POST['password_S']);
        $password_S = mysqli_real_escape_string($con, $password_S);

        $create_datetime = date("Y-m-d H:i:s");

        if (!empty($name_S) && !empty($branch) && !empty($year_S) && !empty($inst) && !empty($email) && !empty($username) && !empty($password_S)) {
            $query = "INSERT INTO users (name_S, branch, year_S, inst, email, username, password_S, create_datetime)
                      VALUES ('$name_S', '$branch', '$year_S', '$inst', '$email', '$username', '" . md5($password_S) . "', '$create_datetime')";
            
            $result = mysqli_query($con, $query);

            if ($result) {
                echo "<div class='form'>
                      <h3>You are registered successfully.</h3><br/>
                      <p class='link'>Click here to <a href='login.php'>Login</a></p>
                      </div>";
            } else {
                echo "<div class='form'>
                      <h3>Something went wrong. Please try again.</h3><br/>
                      <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                      </div>";
            }
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="name_S" placeholder="Full Name" required />
        <input type="text" class="login-input" name="branch" placeholder="Branch" required />
        <input type="text" class="login-input" name="year_S" placeholder="Year Of Study" required />
        <input type="text" class="login-input" name="inst" placeholder="Institute name" required />
        <input type="email" class="login-input" name="email" placeholder="Email Address" required />
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="password" class="login-input" name="password_S" placeholder="Password" required />
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
