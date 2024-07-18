<?php

if (isset($_GET['id'])) {
    $studentId = $_GET['id'];

    $confirmSql = "SELECT * FROM students WHERE id = $studentId";
    $confirmResult = mysqli_query($conn, $confirmSql);
    $confirmRow = mysqli_fetch_array($confirmResult, MYSQLI_ASSOC);
    $confirmCount = mysqli_num_rows($confirmResult);
    if ($confirmCount > 0) {
        $sql = "DELETE FROM students WHERE id = $studentId";
        $Result = mysqli_query($conn, $sql);
        echo $Result;
        if ($Result) {
            echo '<script>';
            echo ' Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
              }).then((result) => {
                if (result.isConfirmed) {

                    window.location.href = "index.php?page=student";
                }
              });';
            echo '</script>';
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }else{
        echo '<script>';
        echo 'window.location.href = "index.php?page=student";';
        echo '</script>';

    }
    
}else{
    echo"Error: ID not found.";
}
?>