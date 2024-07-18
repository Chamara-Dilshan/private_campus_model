<?php
include "src/components/navbar.php";
?>
<div class="">

    <div class="home-body">

        <div class="col-md-3">
            <div class="widget-header">
                <div class="widget-title">Courses</div>
                <div class="widget-subtitle">All Courses</div>
            </div>

            <div class="widget-body home-courses">

                <div class="home-course">
                    <div class="course-logo">
                        SE
                    </div>

                    <div class="course-info">
                        <div class="course-name">Software Engineering</div>
                        <div class="course-enrollments">30k+ enrollments</div>
                    </div>

                    <i class="bi bi-three-dots-vertical"></i>
                </div>


                <div class="home-course">
                    <div class="course-logo">
                        ME
                    </div>

                    <div class="course-info">
                        <div class="course-name">Mechanical Engineering</div>
                        <div class="course-enrollments">15k+ enrollments</div>
                    </div>

                    <i class="bi bi-three-dots-vertical"></i>
                </div>

                <div class="home-course">
                    <div class="course-logo">
                        CS
                    </div>

                    <div class="course-info">
                        <div class="course-name">Cyber Security</div>
                        <div class="course-enrollments">10k+ enrollments</div>
                    </div>

                    <i class="bi bi-three-dots-vertical"></i>
                </div>

                <div class="home-course">
                    <div class="course-logo">
                        CE
                    </div>

                    <div class="course-info">
                        <div class="course-name">Civil Engineering</div>
                        <div class="course-enrollments">10k+ enrollments</div>
                    </div>

                    <i class="bi bi-three-dots-vertical"></i>
                </div>

                

            </div>
        </div>


        <div class="col-md-3">
            <div class="widget-header">
                <div class="widget-title">Instructors</div>
                <div class="widget-subtitle">All Instructors</div>
            </div>

            <div class="widget-body home-instructor">

                <div class="instructor-card">
                    <img src="src/assets/images/profile-1.png" width="50" alt="Instructor" class="img-fluid">
                    <div class="instructor-info">
                        <div class="instructor-name">Dr. Sara Clerk</div>
                        <div class="instructor-department">Information and Technology</div>
                    </div>
                    <i class="bi bi-three-dots-vertical"></i>

                </div>

                <div class="instructor-card">
                    <img src="src/assets/images/profile-2.png" width="50" alt="Instructor" class="img-fluid">
                    <div class="instructor-info">
                        <div class="instructor-name">Dr. Johnson Alexa</div>
                        <div class="instructor-department">Mathamatics</div>
                    </div>
                    <i class="bi bi-three-dots-vertical"></i>

                </div>

                <div class="instructor-card">
                    <img src="src/assets/images/profile-3.png" width="50" alt="Instructor" class="img-fluid">
                    <div class="instructor-info">
                        <div class="instructor-name">Dr. Niclo Anderson</div>
                        <div class="instructor-department">Information and Technology</div>
                    </div>
                    <i class="bi bi-three-dots-vertical"></i>

                </div>

                <div class="instructor-card">
                    <img src="src/assets/images/profile-2.png" width="50" alt="Instructor" class="img-fluid">
                    <div class="instructor-info">
                        <div class="instructor-name">Dr. Gojo Toja</div>
                        <div class="instructor-department">Mathamatics</div>
                    </div>
                    <i class="bi bi-three-dots-vertical"></i>

                </div>

            </div>
        </div>
    </div>

    <style>
    .col-md-3 {
        flex: 1;
        max-width:600px; /* Adjust the max width as needed */
    }

.home-header {

width: 100%;
background: linear-gradient(to bottom, #6544db, #4453db);
padding: 1rem 0;

}

.home-title {
display: flex;
flex-direction: column;
align-items: center;
color: white;
font-size: 2.2rem;
font-weight: 600;
}

.home-title span {
margin: -0.2rem;
}

.home-description {
color: white;
font-size: 1rem;
font-weight: 500;
text-align: center;
margin-top: 1rem;
padding: 0 2.2rem;
line-height: 1.2rem;
width: auto;
}

.home-btn-group {
display: flex;
flex-direction: row;
justify-content: center;
gap: 1rem;
margin-top: 1rem;
}

.home-btn-group .btn-student {
text-decoration: none;
padding: 0.8rem 1.5rem;
background: linear-gradient(to bottom, #3DAF5C, #0F7939);
color: white;
font-weight: 600;
border-radius: 5px;
cursor: pointer;
}

.home-btn-group .btn-teacher {
text-decoration: none;
padding: 0.8rem 1.5rem;
background: linear-gradient(to bottom, #D63030, #A62222);
color: white;
font-weight: 600;
border-radius: 5px;
cursor: pointer;
}

.home-btn-group .btn-student:hover {
background: linear-gradient(to bottom, #2B9D4C, #06752B);
}

.home-btn-group .btn-teacher:hover {
background: linear-gradient(to bottom, #B32424, #8C1A1A);
}

.home-body {
padding: 2rem 4rem;
display: flex;
flex-direction: row;
justify-content: space-between;
gap: 2rem;

}

.home-body .widget-header {
display: flex;
flex-direction: row;
justify-content: space-between;
align-items: center;
}

.home-body .widget-header .widget-title {
font-size: 1.2rem;
font-weight: 600;
cursor: default;
}

.home-body .widget-header .widget-subtitle {
font-size: 0.8rem;
font-weight: 400;
cursor: pointer;
}

.home-body .widget-body {
background-color: white;
border-radius: 10px;
margin-top: 1rem;
width: 100%;
}

.home-body .home-courses,
.home-body .home-instructor {
display: flex;
flex-direction: column;
gap: 1rem;

}

.home-body .home-course,
.home-body .instructor-card {
display: flex;
flex-direction: row;
justify-content: space-between;
gap: 1rem;
align-items: center;
background-color: #eef;
padding: 0.8rem 1rem;
border-radius: 10px;
width: 100%;
}

.home-body .home-courses .course-logo {
width: 55px;
height: 55px;
border-radius: 5px;
background-color: #4453db;
display: flex;
justify-content: center;
align-items: center;
font-size: 1.2rem;
font-weight: 600;
color: white;
}

.home-body .home-course:nth-child(1) .course-logo {
background-color: #4453db;
}

.home-body .home-course:nth-child(2) .course-logo {
background-color: #ff6b6b;
}

.home-body .home-course:nth-child(3) .course-logo {
background-color: #f39c12;
}

.home-body .home-courses .course-info,
.home-body .home-instructor .instructor-info {
display: flex;
flex-direction: column;
align-items: flex-start;
justify-content: flex-start;
text-align: start;
width: 70%;
}

.home-body .home-courses .course-name,
.home-body .home-instructor .instructor-name {
font-size: 1rem;
font-weight: 600;
color: black;

}

.home-body .home-courses .course-enrollments,
.home-body .home-instructor .instructor-department {
font-size: 0.8rem;
font-weight: 400;
color: gray;
}

.home-revenue {
display: flex;
flex-direction: column;
border-radius: 10px;
background-color: #eef;

}

.home-body .revenue-header {
display: flex;
flex-direction: row;
justify-content: space-between;
width: 100%;
padding: 1rem 1rem;
background-color: #eef;
border-radius: 10px 10px 0 0;

}

.revenue-card {
background-color: #4453db;
border-radius: 10px;
color: white;
width: 100%;

}

.home-body .revenue-header .card-header {
display: flex;
flex-direction: row;
justify-content: space-between;
align-items: center;
gap: 1rem;
padding: 0.5rem 0.3rem;
color: white;
}

.home-body .revenue-header .card-header i {
font-size: 1.2rem;
display: flex;
justify-content: center;
align-items: center;
flex-direction: row;
}

.home-body .revenue-header .card-body {
font-size: 1.2rem;
font-weight: 600;
padding: 0 0.6rem;
padding-bottom: 0.5rem;
display: flex;
justify-content: center;
align-items: center;
width: 100%;
}

.revenue-body {
width: 100%;
border-radius: 0 0 10px 10px;
padding: 0.4rem 1rem;
padding-top: 0;
background-color: #eef;


}
    max-width: 600px; /* Adjust the max width as needed */
}

.home-header {

width: 100%;
background: linear-gradient(to bottom, #6544db, #4453db);
padding: 1rem 0;

}

.home-title {
display: flex;
flex-direction: column;
align-items: center;
color: white;
font-size: 2.2rem;
font-weight: 600;
}

.home-title span {
margin: -0.2rem;
}

.home-description {
color: white;
font-size: 1rem;
font-weight: 500;
text-align: center;
margin-top: 1rem;
padding: 0 2.2rem;
line-height: 1.2rem;
width: auto;
}

.home-btn-group {
display: flex;
flex-direction: row;
justify-content: center;
gap: 1rem;
margin-top: 1rem;
}

.home-btn-group .btn-student {
text-decoration: none;
padding: 0.8rem 1.5rem;
background: linear-gradient(to bottom, #3DAF5C, #0F7939);
color: white;
font-weight: 600;
border-radius: 5px;
cursor: pointer;
}

.home-btn-group .btn-teacher {
text-decoration: none;
padding: 0.8rem 1.5rem;
background: linear-gradient(to bottom, #D63030, #A62222);
color: white;
font-weight: 600;
border-radius: 5px;
cursor: pointer;
}

.home-btn-group .btn-student:hover {
background: linear-gradient(to bottom, #2B9D4C, #06752B);
}

.home-btn-group .btn-teacher:hover {
background: linear-gradient(to bottom, #B32424, #8C1A1A);
}

.home-body {
padding: 2rem 4rem;
display: flex;
flex-direction: row;
justify-content: space-between;
gap: 2rem;

}

.home-body .widget-header {
display: flex;
flex-direction: row;
justify-content: space-between;
align-items: center;
}

.home-body .widget-header .widget-title {
font-size: 1.2rem;
font-weight: 600;
cursor: default;
}

.home-body .widget-header .widget-subtitle {
font-size: 0.8rem;
font-weight: 400;
cursor: pointer;
}

.home-body .widget-body {
background-color: white;
border-radius: 10px;
margin-top: 1rem;
width: 100%;
}

.home-body .home-courses,
.home-body .home-instructor {
display: flex;
flex-direction: column;
gap: 1rem;

}

.home-body .home-course,
.home-body .instructor-card {
display: flex;
flex-direction: row;
justify-content: space-between;
gap: 1rem;
align-items: center;
background-color: #eef;
padding: 0.8rem 1rem;
border-radius: 10px;
width: 100%;
}

.home-body .home-courses .course-logo {
width: 55px;
height: 55px;
border-radius: 5px;
background-color: #4453db;
display: flex;
justify-content: center;
align-items: center;
font-size: 1.2rem;
font-weight: 600;
color: white;
}

.home-body .home-course:nth-child(1) .course-logo {
background-color: #4453db;
}

.home-body .home-course:nth-child(2) .course-logo {
background-color: #ff6b6b;
}

.home-body .home-course:nth-child(3) .course-logo {
background-color: #f39c12;
}

.home-body .home-courses .course-info,
.home-body .home-instructor .instructor-info {
display: flex;
flex-direction: column;
align-items: flex-start;
justify-content: flex-start;
text-align: start;
width: 70%;
}

.home-body .home-courses .course-name,
.home-body .home-instructor .instructor-name {
font-size: 1rem;
font-weight: 600;
color: black;

}

.home-body .home-courses .course-enrollments,
.home-body .home-instructor .instructor-department {
font-size: 0.8rem;
font-weight: 400;
color: gray;
}

.home-revenue {
display: flex;
flex-direction: column;
border-radius: 10px;
background-color: #eef;

}

.home-body .revenue-header {
display: flex;
flex-direction: row;
justify-content: space-between;
width: 100%;
padding: 1rem 1rem;
background-color: #eef;
border-radius: 10px 10px 0 0;

}

.revenue-card {
background-color: #4453db;
border-radius: 10px;
color: white;
width: 100%;

}

.home-body .revenue-header .card-header {
display: flex;
flex-direction: row;
justify-content: space-between;
align-items: center;
gap: 1rem;
padding: 0.5rem 0.3rem;
color: white;
}

.home-body .revenue-header .card-header i {
font-size: 1.2rem;
display: flex;
justify-content: center;
align-items: center;
flex-direction: row;
}

.home-body .revenue-header .card-body {
font-size: 1.2rem;
font-weight: 600;
padding: 0 0.6rem;
padding-bottom: 0.5rem;
display: flex;
justify-content: center;
align-items: center;
width: 100%;
}

.revenue-body {
width: 100%;
border-radius: 0 0 10px 10px;
padding: 0.4rem 1rem;
padding-top: 0;
background-color: #eef;


}
    </style>