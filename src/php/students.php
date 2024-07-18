<?php

$programs = [
    ["faculty" => ["id" => "it", "name" => "Information Technology"], "courses" => ["Web Development", "Database Management", "Network Security"]],
    ["faculty" => ["id" => "bs", "name" => "Business Studies"], "courses" => ["Accounting", "Marketing", "Finance"]],
    ["faculty" => ["id" => "eng", "name" => "Engineering"], "courses" => ["Mechanical Engineering", "Electrical Engineering", "Civil Engineering"]],
    ["faculty" => ["id" => "med", "name" => "Medicine"], "courses" => ["General Medicine", "Pediatrics", "Surgery"]],
    ["faculty" => ["id" => "art", "name" => "Arts"], "courses" => ["Literature", "History", "Fine Arts"]]
];

function getFacultyName($facultyID, $programs) {
    foreach ($programs as $program) {
        if ($program['faculty']['id'] === $facultyID) {
            return $program['faculty']['name'];
        }
    }
    return null;
}

if (isset($_POST["search"])) {

} else {
    $Query = "SELECT * FROM students ORDER BY id DESC";
    $Result = mysqli_query($conn, $Query);
    $Count = mysqli_num_rows($Result);
    if ($Count > 0) {
        while ($Row = mysqli_fetch_array($Result, MYSQLI_ASSOC)) {

            $id = $Row["id"];
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

            $indexNo = date("Y", strtotime($enroll_date)) . $id .strtoupper($faculty);
            $profile = $gender =="male"?"profile-male.png":"profile-female.png";
            $name = $fname . " " . $lname;
            $facultyName = getFacultyName($faculty, $programs);

            

            echo '
            <div class="row d-flex align-items-center pt-2">
            <div class="col-md-1 d-flex align-items-center justify-content-center"><img src="src/assets/images/'.$profile.'" width="30" class="img-fluid"></div>
            <div class="col-md-1">'.$indexNo.'</div>
            <div class="col-md-2 table-student-name-container">
            <span class="name-with-init">'.$ini_name.'</span>
            <span class="name">'.$name.'</span>
            </div>
            <div class="col-md-2">'.$email.'</div>
            <div class="col-md-1">'.$contact.'</div>
            <div class="col-md-2">'.$nic.'</div>
            <div class="col-md-2 table-student-course-container">
              <span class="course-name">'.$course.'</span>
              <span class="faculty-name">'.$facultyName.'</span>
            </div>
            <div class="col-md-1 table-student-action-container">
            
            <a href="index.php?page=student&mode=view&id='.$id.'" ><i class="bi bi-eye-fill" title="View"></i></a>
            <a href="index.php?page=student&mode=edit&id='.$id.'" ><i class="bi bi-pencil-fill" title="Edit"></i></a>
            <a onclick="deleteStudent('.$id.')"><i class="bi bi-archive-fill" title="Delete"></i></a>
        </div>

      </div>
        <script>
        function deleteStudent(id) {
            console.log(id);
            Swal.fire({
                title: "Are you sure?",
                text: "Do you want to delete student details of '.$name.'?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
              }).then((result) => {
                if (result.isConfirmed) {

                    Swal.showLoading();
                    window.location.href = `index.php?page=student&mode=delete&id=${id}`;
                }
              });
        }
        </script>
        ';
        }
    }else{
        echo "";
    }


}

?>