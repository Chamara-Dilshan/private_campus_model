<?php

include ("../service/connection.php");


if (isset($_POST["submit"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $ini_name = $_POST["ini_name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $nic = $_POST["nic"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $faculty = $_POST["faculty"];
    $course = $_POST["course"];
    $enroll_date = $_POST["enroll_date"];

    $sql = "INSERT INTO students  (fname, lname, ini_name, email, contact, nic, address, gender, dob, faculty, course, enroll_date) 
    VALUES ('$fname', '$lname', '$ini_name', '$email', '$contact', '$nic', '$address', '$gender', '$dob', '$faculty', '$course', '$enroll_date')";

    $Result = mysqli_query($conn, $sql);

    if ($Result) {
        echo '<script>';
        echo 'window.location.href = "../../index.php?page=student&status=created";';
        echo '</script>';
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


} elseif (isset($_POST["update"])) {

    $id = $_GET["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $ini_name = $_POST["ini_name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $nic = $_POST["nic"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $faculty = $_POST["faculty"];
    $course = $_POST["course"];
    $enroll_date = $_POST["enroll_date"];


    $sql = "UPDATE students SET 
    fname = '$fname',
    lname = '$lname',
    ini_name = '$ini_name',
    email = '$email',
    contact = '$contact',
    nic = '$nic',
    address = '$address',
    gender = '$gender',
    dob = '$dob',
    faculty = '$faculty',
    course = '$course',
    enroll_date = '$enroll_date'
    WHERE id = '$id'";

$Result = mysqli_query($conn, $sql);

if ($Result) {
    echo '<script>';
    echo 'window.location.href = "../../index.php?page=student&status=updated";';
    echo '</script>';
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
} else {
    echo "Error: Form not submitted.";
}

?>