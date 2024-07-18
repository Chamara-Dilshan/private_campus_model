<?php
include "src/components/navbar.php";

if (isset($_GET['status'])) {
  $status = $_GET['status'];

  if ($status == "updated") {
    echo '<script>';
    echo 'console.log("' . $status . '");
      Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Student details updated successfully!",
        showConfirmButton: false,
        timer: 1500
      }).then((result) => {
            window.location.href = "index.php?page=student";
      });';
    echo '</script>';
  } elseif ($status == "created") {
    echo '<script>';
    echo 'console.log("' . $status . '");
      Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Student added successfully!",
        showConfirmButton: false,
        timer: 1500
      }).then((result) => {
            window.location.href = "index.php?page=student";
      });';
    echo '</script>';
  }
}

?>

<div class="d-flex flex-row students-bg">
  <div class=" d-flex flex-column gap-4">
    <div class="row d-flex align-items-center">

      <div class="col-md-6">
        <div class="students-widget">
          <div class="students-widget-header">
            <div class="header-name">Student Progress</div>
            <i class="bi bi-three-dots-vertical"></i>

          </div>

          <div class="students-widget-body students-progress-body">
            <img src="src/assets/images/line-chart.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>


      <div class="col-md-3">
        <div class=" students-widget">
          <div class="students-widget-header">
            <div class="header-name">Student Expenses</div>
            <i class="bi bi-three-dots-vertical"></i>

          </div>

          <div class="students-widget-body students-expenses-body">
            <img src="src/assets/images/pie-chart.jpg" width="200" class="img-fluid" alt="">
            <div class="expenses"><span>Total Expenses: </span><span>$ 1350</span></div>
          </div>
        </div>
      </div>


      <div class="col-md-3">

        <div class=" students-widget">
          <div class="students-widget-header">
            <div class="header-name">Student Achivements</div>
            <i class="bi bi-three-dots-vertical"></i>

          </div>

          <div class="students-widget-body students-achivement-body">

            <div class="achivement-card">
              <i class="bi bi-trophy-fill"></i>
              <div class="achivement-info">
                <div class="achivement-title">Best Student</div>
                <div class="achivement-desc">Lorem ipsum dolor sit amet</div>
              </div>
            </div>

            <div class="achivement-card">
              <i class="bi bi-trophy-fill"></i>
              <div class="achivement-info">
                <div class="achivement-title">Best Student</div>
                <div class="achivement-desc">Lorem ipsum dolor sit amet</div>
              </div>
            </div>


            <div class="achivement-card">
              <i class="bi bi-trophy-fill"></i>
              <div class="achivement-info">
                <div class="achivement-title">Best Student</div>
                <div class="achivement-desc">Lorem ipsum dolor sit amet</div>
              </div>
            </div>


          </div>
        </div>

      </div>

    </div>

    <div class="row">

      <div class="col-md-12 students-widget">
        <div class="students-widget-header">
          <div class="header-name">Students</div>
          <a class="btn btn-primary my-3" href="index.php?page=student&mode=create">Add Student</a>

        </div>

        <div class="students-widget-body students-view-body" id="view-container">
          <div class="table-header">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-1">ID</div>
              <div class="col-md-2">Name</div>
              <div class="col-md-2">Email</div>
              <div class="col-md-1">Phone</div>
              <div class="col-md-2">NIC</div>
              <div class="col-md-2">Course</div>
              <div class="col-md-1">Action</div>
            </div>
          </div>

          <div class="table-content" id="table-content">
            <?php include "src/php/students.php"; ?>
          </div>

        </div>
      </div>

    </div>
    <script>
      const programs = [
        { faculty: { id: "it", name: "Information Technology" }, courses: ["Web Development", "Database Management", "Network Security"] },
        { faculty: { id: "bs", name: "Business Studies" }, courses: ["Accounting", "Marketing", "Finance"] },
        { faculty: { id: "eng", name: "Engineering" }, courses: ["Mechanical Engineering", "Electrical Engineering", "Civil Engineering"] },
        { faculty: { id: "med", name: "Medicine" }, courses: ["General Medicine", "Pediatrics", "Surgery"] },
        { faculty: { id: "art", name: "Arts" }, courses: ["Literature", "History", "Fine Arts"] }
      ]

      const tableBody = document.getElementById("table-content");
      const table = document.getElementById("view-container");

      function handleEmptyTable() {
        const childNodes = tableBody.childNodes.length;
        console.log(childNodes);
        if (childNodes == 1) {
          const childDivs = table.querySelectorAll('div');
          childDivs.forEach(childDiv => {
            childDiv.remove();
          });

          const emptyView = document.createElement('div');
          emptyView.classList.add("d-flex", "flex-column", "align-items-center", "justify-content-center");
          emptyView.innerHTML = '<img src ="src/assets/images/no-data.png" width="200"> <span class="h2">No data available!</span>';
          table.appendChild(emptyView);

        }
      }
      handleEmptyTable();

    </script>

    <style>

      .students-bg {
        height: auto;
        background-color: #efdcf3;
        padding: 1rem 2rem;
      }

      .students-widget {
        background-color: white;
        border-radius: 10px;
        padding: 0.4rem;
        padding: 0.4rem;
        margin-left: 15px; /* Add margin to left */
      }

      .students-widget .students-widget-header {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        padding: 0.5rem 1rem;
      }

      .students-widget .students-widget-header .header-name {
        font-size: 1.1rem;
        font-weight: 500;
      }

      .students-widget .students-widget-body {
        padding: 1rem;
      }

      .students-widget .students-widget.students-progress-body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .students-widget .students-expenses-body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .students-widget .students-expenses-body .expenses {
        text-align: center;
        font-weight: 600;
        font-size: 1.2rem;
        background: linear-gradient(to bottom, #6544db, #4453db);
        color: white;
        border-radius: 20px;
        padding: 0.2rem 2.4rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: background 0.3s ease-in-out;

      }

      .students-widget .students-progress-body .expenses:hover {
        background: linear-gradient(to bottom, #4453db, #6544db);
      }

      .students-widget .students-achivement-body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 1rem;
      }

      .students-widget .students-achivement-body .achivement-card {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: space-between;
        background-color: #eef;
        border-radius: 10px;
        padding: 1rem;
        width: 100%;
      }

      .students-widget .students-achivement-body .achivement-card i {
        font-size: 1.8rem;
        color: white;
        background-color: #44db88;
        border-radius: 20px;
        padding: 0.3rem 0.7rem;
      }

      .students-widget .students-achivement-body .achivement-card .achivement-info {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        line-height: 1.5rem;
        width: 100%;
        margin: 0 1rem;
      }

      .students-widget .students-achivement-body .achivement-card .achivement-info .achivement-title {
        font-size: 1.2rem;
        font-weight: 600;
      }

      .students-widget .students-achivement-body .achivement-card .achivement-info .achivement-desc {
        font-size: 0.8rem;
        font-weight: 400;
      }

      .students-view-body {
        padding: 1rem;
        background-color: #eef;
        border-radius: 10px;
      }

      .table-header {
        border-bottom: 1px solid #ddd;
        padding-bottom: 0.5rem;
      }

      .table-content{
        display: flex;
        flex-direction: column;
        gap: 1rem;
        background-color: #eef;
        font-size: 0.9rem;
      }

      .table-content .table-student-name-container,
      .table-content .table-student-course-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        line-height: 1.3rem;
      }

      .table-content .table-student-name-container .name-with-init,
      .table-content .table-student-course-container .course-name {
        font-size: 1rem;
        font-weight: 500;
      }

      .table-content .table-student-name-container .name,
      .table-content .table-student-course-container .faculty-name {
        font-size: 0.8rem;
        font-weight: 400;
      }

      .table-content .table-student-action-container {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: space-evenly;
        color: #444;


      }

      .table-content .table-student-action-container a {
        text-decoration: none;
        color: inherit;
        cursor: pointer;
      }

      .table-content .table-student-action-container a:hover {
        color: #6544db;
      }

      .table-content .row {
        padding: 0.5rem 0;
        background-color: #f0e6fb;
        cursor: default;

      }


    </style>