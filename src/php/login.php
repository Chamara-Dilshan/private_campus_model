<?php

include ("../service/connection.php");
if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $pass = $_POST["password"];

    $Query = "SELECT * FROM user WHERE email = '$email'";
    $Result = mysqli_query($conn, $Query);
    $Row = mysqli_fetch_array($Result, MYSQLI_ASSOC);
    $Count = mysqli_num_rows($Result);

    if ($Count > 0) {
        if ($Row["password"] == $pass) {
            $username = $Row["fname"] . " " . $Row["lname"];
            echo '<script>';
            echo 'localStorage.setItem("email", "' . $email . '");';
            echo 'localStorage.setItem("username", "' . $username . '");';
            echo 'window.location.href = "../../index.php?page=home&status=success";';
            echo '</script>';
            exit();

        } else {
            echo '<script>';
            echo 'window.location.href = "../../index.php?page=login&status=invalid";';
            echo '</script>';

        }
    } else {
        echo '<script>';
            echo 'window.location.href = "../../index.php?page=login&status=invalid";';
            echo '</script>';
    }

} else {
    echo '<script>';
    echo 'window.location.href = "../../index.php?page=login&status=error";';
    echo '</script>';
}


?>