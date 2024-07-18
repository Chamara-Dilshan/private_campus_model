<?php
include 'src/service/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Private Campus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="src/styles/style.css">


</head>

<body>

  <div class=" h-100">
    <?php

    if (isset($_GET["page"])) {
      $page = $_GET["page"];
      switch ($page) {
        case 'login':
          include "src/pages/Login.php";
          break;

        case 'home':
          include "src/pages/Home.php";
          break;

        case 'student':

          if (isset($_GET['mode'])) {
            $mode = $_GET['mode'];
            echo '<script>console.log("' . $mode . '")</script>';
            switch ($mode) {
              case 'create':
                include "src/pages/newStudent.php";
                break;
              case 'edit':
                include "src/pages/newStudent.php";
                break;

              case 'view':
                include "src/pages/newStudent.php";
                break;

              case 'delete':
                include "src/php/delete.php";
                break;
              default:
                include "src/pages/students.php";
                break;
            }
          } else {
            include "src/pages/students.php";
          }
          break;

        default:
          include "src/pages/Login.php";
          break;
      }
    } else {
      include "src/pages/Login.php";
    }

    ?>
  </div>


</body>

</html>