<?php
    if (isset($_POST["login"])) {
        $username = $_POST["uname"];
        $pass = $_POST["password"];
        include ("../php/connection.php");
        $sql = "SELECT * FROM admin WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
            if ($pass === $user["password"]) {
                session_start();
                $_SESSION["user"] = $user["username"];
                header("Location: admin_home.php");
                die();
            }else{
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        }else{
            echo "<div class='alert alert-danger'>Username does not match</div>";
        }
    }
?>