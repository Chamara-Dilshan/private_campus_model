<?php
include "src/components/navbar.php";

$fname = "";
$lname = "";
$ini_name = "";
$email = "";
$contact = "";
$nic = "";
$address = "";
$gender = "";
$dob = "";
$faculty = "";
$course = "";
$enroll_date = "";

if (isset($_GET['mode'])) {
  $mode = $_GET['mode'];
  $readOnly = false;

  if ($mode == "view") {
    $readOnly = true;
  }

  if (($mode == "edit" || $mode == "view") && isset($_GET['id'])) {
    $studentId = $_GET['id'];
    include "src/php/edit.php";
  }
}
?>

<div class="student-register-container">
  <form action="src/php/register.php<?php if ($mode == 'edit')
    echo '?id=' . $studentId; ?>" method="POST" class="container registration-form-container">

    <div class="col-md-6">

      <div class="form-category">Student Details</div>
      <div class="row">
        <div class="form-group col-6 d-flex flex-column align-items-start justify-content-center gap-1 mt-4">
          <label for="fname">First Name</label>
          <input type="text" name="fname" class="form-control" value="<?php echo $fname ?>" formControlName="fname" required
            <?php echo $readOnly ? "disabled" : "" ?> id="fname" placeholder="First Name">
        </div>

        <div class="form-group col-6 d-flex flex-column align-items-start justify-content-center gap-1 mt-4">
          <label for="lname">Last Name</label>
          <input type="text" name="lname" class="form-control" value="<?php echo $lname ?>" formControlName="lname" required
            <?php echo $readOnly ? "disabled" : "" ?> id="lname" placeholder="Last Name">
        </div>
      </div>

      <div class="form-group  d-flex flex-column align-items-start justify-content-center gap-1 mt-3">
        <label for="ini_name">Name with Initials</label>
        <input type="text" name="ini_name" class="form-control" required value="<?php echo $ini_name ?>" <?php echo $readOnly ? "disabled" : "" ?> formControlName="ini_name" id="ini_name" placeholder="Name with Initials">
      </div>

      <div class="form-group  d-flex flex-column align-items-start justify-content-center gap-1 mt-3">
        <label for="email">Email</label>
        <input type="email" required name="email" class="form-control" value="<?php echo $email ?>" formControlName="email"
          id="email" placeholder="Email Address" <?php echo $readOnly ? "disabled" : "" ?>>
      </div>

      <div class="form-group  d-flex flex-column align-items-start justify-content-center gap-1 mt-3">
        <label for="contact">Contact No.</label>
        <input type="tel" pattern="07[0-9]{8}" required name="contact" class="form-control" value="<?php echo $contact ?>" <?php echo $readOnly ? "disabled" : "" ?> formControlName="contact" id="contact" placeholder="Contact Number" autocomplete="tel">
      </div>

      <div class="form-group  d-flex flex-column align-items-start justify-content-center gap-1 mt-3">
        <label for="nic">NIC</label>
        <input type="text" required name="nic" class="form-control" value="<?php echo $nic ?>" formControlName="nic" id="nic"
          placeholder="NIC No." autocomplete="national-id" <?php echo $readOnly ? "disabled" : "" ?>>
      </div>

      <div class="form-group  d-flex flex-column align-items-start justify-content-center gap-1 mt-3">
        <label for="address">Address</label>
        <input type="text" required name="address" class="form-control" value="<?php echo $address ?>" <?php echo $readOnly ? "disabled" : "" ?> formControlName="address" id="address" placeholder="Address">
      </div>

      <div class="row">
        <div class="form-group col-6 d-flex flex-column align-items-start justify-content-center gap-1 mt-4">
          <label for="gender">Select Gender</label>
          <select id="gender" required name="gender" class="form-select" value="<?php echo $gender ?>" <?php echo $readOnly ? "disabled" : "" ?> aria-label="Default select example">
            <option <?php if ($gender === 'male')
              echo 'selected' ?> <?php if ($mode !== 'edit')
              echo 'selected' ?>
                value="male">Male</option>
              <option <?php if ($gender === 'female')
              echo 'selected' ?> value="female">Female</option>

            </select>
          </div>

          <div class="form-group col-6 d-flex flex-column align-items-start justify-content-center gap-1 mt-4">
            <label for="dob">Date of Birth</label>
            <input type="date" required name="dob" class="form-control" value="<?php echo $dob ?>" <?php echo $readOnly ? "disabled" : "" ?> formControlName="dob" id="dob" placeholder="Date of Birth" autocomplete="bday">
        </div>
      </div>

    </div>
    <div class="col-md-6">
      <div class="form-category">Course Details</div>

      <div class="form-group col-6 d-flex flex-column align-items-start justify-content-center gap-1 mt-4">
        <label for="fac">Select faculty</label>
        <select id="fac" required name="faculty" class="form-select" value="<?php echo $faculty ?>" <?php echo $readOnly ? "disabled" : "" ?> aria-label="Default select example">


        </select>
      </div>

      <div class="form-group col-6 d-flex flex-column align-items-start justify-content-center gap-1 mt-3">
        <label for="course">Select course</label>
        <select id="course" required name="course" class="form-select" value="<?php echo $course ?>" <?php echo $readOnly ? "disabled" : "" ?> aria-label="Default select example">


        </select>
      </div>

      <div class="form-group col-6 d-flex flex-column align-items-start justify-content-center gap-1 mt-3">
        <label for="enroll_date">Course Enroll Date</label>
        <input type="date" required name="enroll_date" class="form-control" value="<?php echo $enroll_date ?>" <?php echo $readOnly ? "disabled" : "" ?> formControlName="enroll_date" id="enroll_date"
          placeholder="Course Enroll date">
      </div>

      <div class="form-group col-6 d-flex flex-row align-items-start justify-content-between gap-1 mt-3">
        <div></div>
        <?php
        if ($mode == "edit") {
          echo '<button class="btn btn-primary" name="update" type="submit">Update</button>';
        } elseif ($mode == "create") {
          echo '<button class="btn btn-primary" name="submit" type="submit">Add Student</button>';
        } else {

          echo '
            <div class="d-flex flex-row align-items-center justify-content-between px-4 w-100 mt-2">
            <a class="btn btn-danger" href="index.php?page=student" name="back" type="submit">Back</a>
            <a class="btn btn-primary" href="index.php?page=student&mode=edit&id=' . $studentId . '" name="edit" type="submit">Edit</a>
            </div>';
        }
        ?>

      </div>
    </div>
  </form>
</div>

<script>
  function switchToProfileTab(event) {
    event.preventDefault();
    document.getElementById('profile-tab').click();
  }

  const programs = [
    { faculty: { id: "it", name: "Information Technology" }, courses: ["Web Development", "Database Management", "Network Security"] },
    { faculty: { id: "bs", name: "Business Studies" }, courses: ["Accounting", "Marketing", "Finance"] },
    { faculty: { id: "eng", name: "Engineering" }, courses: ["Mechanical Engineering", "Electrical Engineering", "Civil Engineering"] },
    { faculty: { id: "med", name: "Medicine" }, courses: ["General Medicine", "Pediatrics", "Surgery"] },
    { faculty: { id: "art", name: "Arts" }, courses: ["Literature", "History", "Fine Arts"] }
  ]

  function populateCourses() {
    const facultySelect = document.getElementById("fac");
    const courseSelect = document.getElementById("course");

    for (let i = 0; i < programs.length; i++) {
      const faculty = programs[i].faculty;
      const courses = programs[i].courses;

      const option = document.createElement("option");
      option.value = faculty.id;
      option.textContent = faculty.name;
      facultySelect.appendChild(option);

      console.log('<?php if ($mode == "edit")
        echo $faculty ?>')
        const isSelected = '<?php if ($mode == "edit")
        echo $faculty ?>' == faculty.id;
          option.selected = isSelected;
      }
      const selectedFaculty = facultySelect.value;
      const selectedProgram = programs.find(program => program.faculty.id === selectedFaculty);
      const courses = selectedProgram.courses;
      courseSelect.innerHTML = "";

      courses.forEach(course => {
        const option = document.createElement("option");
        option.value = course;
        option.textContent = course;
        courseSelect.appendChild(option);
        option.selected = '<?php if ($mode == "edit")
        echo $course ?>' == course;

      });
    }

    function handleCourseChanges() {
      const facultySelect = document.getElementById("fac");
      const courseSelect = document.getElementById("course");

      for (let i = 0; i < programs.length; i++) {
        const faculty = programs[i].faculty;
        const courses = programs[i].courses;

        const option = document.createElement("option");
        option.value = faculty.id;
        option.textContent = faculty.name;
        facultySelect.appendChild(option);


      }

      const selectedFaculty = facultySelect.value;
      const selectedProgram = programs.find(program => program.faculty.id === selectedFaculty);
      const courses = selectedProgram.courses;
      courseSelect.innerHTML = "";

      courses.forEach(course => {
        const option = document.createElement("option");
        option.value = course;
        option.textContent = course;
        courseSelect.appendChild(option);

      });
    }
    

      document.getElementById("fac").addEventListener("change", handleCourseChanges);

      window.onload = function () {
        populateCourses();
    };

    </script>

<style>
    .student-register-banner {
      width: 100%;
      background: linear-gradient(to bottom, #6544db, #4453db);
      padding: 1rem 0;
    }

    .student-register-banner .register-banner-title {
      display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
            font-size: 2.2rem;
            font-weight: 600;
    }

    .student-register-banner .register-banner-title span {
            margin: -0.2rem;
        }

    .student-register-banner .register-banner-description{
            color: white;
            font-size: 1rem;
            font-weight: 500;
            text-align: center;
            margin-top: 1rem;
            padding: 0 2.2rem;
            line-height: 1.2rem;
            width: auto;
    }

    .student-register-banner  .register-banner-btn-group{
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
    }

    .register-banner-btn-group .btn-student {
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            background: linear-gradient(to bottom, #3DAF5C, #0F7939);
            color: white;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        .register-banner-btn-group .btn-teacher {
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            background: linear-gradient(to bottom, #D63030, #A62222);
            color: white;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        .register-banner-btn-group .btn-student:hover {
            background: linear-gradient(to bottom, #2B9D4C, #06752B);
        }

        .register-banner-btn-group .btn-teacher:hover {
            background: linear-gradient(to bottom, #B32424, #8C1A1A);
        }


    .student-register-container{
      background-color: #fcf9ff;
      height: auto;
      padding: 1rem 2rem;
    }

    .col-md-6 {
    margin-left: 10rem; /* Adjust the value as needed */
    }

    .registration-form-container{
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: flex-start;
      gap: 2rem;
    }

    .form-category{
      font-size: 1.4rem;
      font-weight: 700;
      color: #6544db;
      margin-top: 1rem;
    }
  </style>