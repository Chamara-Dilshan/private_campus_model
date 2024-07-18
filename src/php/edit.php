<?php

if (isset($_GET['id'])) {
    $studentId = $_GET['id'];

    $sql = "SELECT * FROM students WHERE id = '$studentId'";
    $Result = mysqli_query($conn, $sql);
    $Row = mysqli_fetch_array($Result, MYSQLI_ASSOC);

    if ($Result) {
        if ($Row) {
            $fname = $Row["fname"];
            $lname = $Row["lname"];
            $ini_name = $Row["ini_name"];
            $email = $Row["email"];
            $contact = $Row["contact"];
            $nic = $Row["nic"];
            $address = $Row["address"];
            $gender = $Row["gender"];
            $dob = $Row["dob"];
            $faculty = $Row["faculty"];
            $course = $Row["course"];
            $enroll_date = $Row["enroll_date"];

        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

