<?php include("Dbfunctions/Blogfunction.php"); $iCourseId = $_GET["CourseId"];  $aSelectiveCourse = SearchCourse($iCourseId);?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ProBytes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<style>
.consultingsection
{

    background-image: url("img/peopletraining.avif");
    background-repeat: no-repeat;
    background-size:contain;
    opacity: 0.75;
    background-position: right;

    /* border-radius: 50%; */
    /* border-top-right-radius: 40px; */
}
</style>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status">

        </div>
    </div>
    <!-- Spinner End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-grey navbar-light  sticky-top p-0">
   
    <a href="index.php" class="navbar-brand bg-light d-flex align-items-center border-end px-4 px-lg-5">
          <img src="img/logo1.png" alt="" class="logo-img">  
        </a>
 
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
               
                <a href="index.php" class="nav-item nav-link nav-linkhover home">Home</a>
                <a href="training.php" class="nav-item nav-link nav-linkhover">Training</a>
                <a href="consulting.php" class="nav-item nav-link nav-linkhover">Consulting</a>
                <a href="Courses.php" class="nav-item nav-link nav-linkhover">Courses</a>
                <a href="#Team" class="nav-item nav-link nav-linkhover">Team</a>
                <a href="TotalBlogs.php" class="nav-item nav-link nav-linkhover">Blog</a>
                <a href="contact.php" class="nav-item nav-link nav-linkhover">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->
<div class="container-xxl py-6">
    <div class="container "> 
       
        <div class="row">
       
        
            <tbody>
            <?php
            
            foreach($aSelectiveCourse as $ikey=>$ivalue)
            {            
            ?>  
            <div class="col-lg-4 col-md-4 CourseDate">
                <h3 class="CourseDetailHeading"><?php echo $ivalue['CourseName'];?></h3>
                <img class="CourseDetailimg" src="img/CourseImg/<?php echo $ivalue['CourseImg'];?>">
              
            </div>
            <div class="col-lg-4 col-md-4 CourseDate">
                <table class="table table-striped CourseDateTable ">
                    <thead>
                        <tr>
                        <th scope="col">TrainingType</th>
                        <th scope="col">DurationDate </th>
                        <th scope="col">CourseLevel</th>
                        <th scope="col">CourseVenue</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td ><p class="CourseDetail"><?php echo $ivalue['TrainingType'];?></p></td>
                            <td ><p class="CourseDetail"><?php echo $ivalue['DurationStartDate'];?> To <?php echo $ivalue['DurationEndDate'];?></p></td>
                            <td ><p class="CourseDetail"><?php echo $ivalue['CourseLevel'];?></p></td>
                            <td ><p class="CourseDetail"><?php echo $ivalue['CourseVenue'];?></p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4 col-md-4">
                    <div class="card TeacherData" style="width: 18rem;">
                        <div class="card-body">
                        <h4 class="TeacherDatehaeding">Course Director ______</h4>
                        
                        <img class="TeacherDetailImg" src="img/TeachersImg/<?php echo $ivalue['TeacherImg'];?>"><span class="TeacherName"><?php echo $ivalue['TeacherName'];?></span>
                        <span class="EducationPartner">Education Partner :</span><span class="EducationPartner"><?php echo $ivalue['EducationPartner'];?></span>
    
                        </div>
                    </div>
                
            </div>
            
        </div>
    </div>
</div>
<hr/>

<div class="container-xxl py-6">
    <div class="container "> 
        <div class="row g-5">
        <div class="col-lg-9">
            <h5>Overview</h5>
            <p class="courseoverview"><?php echo $ivalue['CourseDescription']?></p>
        </div>
        <?php } ?>
        <div class="col-lg-3">
            <div class="card CourseExtraInfo" style="width: 18rem;">
                <img class="card-img-top courseimg" src="img/CourseImg/coursedeatilsideimg.avif" alt="Card image cap">
                <div class="card-body">

               <p>Conduct group trainings for this course in your company.</p><a href="CourseDetail.php" class="btn btn-primary Incomoanytrainingbtn">In-Company Training</a><hr/>
               
               <p>For more information and group discounts, call +971 4 408 2864 or email </p><span><a href="">meenquiries@informa.com</a></span>
               <hr/>
               <h4>CALL ME BACK</h4>
                </div>
            </div>

        </div>
    </div>
</div>


<hr>
    <!-- Footer Start -->
    <div class="container-fluid  bg-light text-light footer my-6  wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 footer-divider">
                    <img src="img/logo1.png" alt="" class="logo-img ">
                </div>

                <div class="col-lg-4 col-md-6 footer-divider">
                    <div class="row">
                    <h4 class="text-dark mb-4">Course Categories</h4>
                    <div class="col-lg-6 col-md-6">
                <a href="index.php" class="nav-item nav-link footer-linkhover">Project and Process Management</a>
                <a href="#about" class="nav-item nav-link footer-linkhover">Digital Marketing</a>
                <a href="TotalBlogs.php" class="nav-item nav-link footer-linkhover">professionals & Personal Development</a>
                <a href="contact.php" class="nav-item nav-link footer-linkhover">Software Tools & IT</a>    
                    </div>
                    <div class="col-lg-6 col-md-6">
                <a href="index.php" class="nav-item nav-link footer-linkhover">Finance & Banking</a>
                <a href="#about" class="nav-item nav-link footer-linkhover">Human Resource Management</a>
                <a href="#Blog" class="nav-item nav-link footer-linkhover">Ledaership & Strategy Management</a>
                    </div>
                    </div>
                
                
                </div>
                <div class="col-lg-4 col-md-6">
                <h4 class="text-dark mb-4">Quick Links</h4>
                <a href="index.php" class="nav-item nav-link footer-linkhover">Home</a>
                <a href="training.php" class="nav-item nav-link footer-linkhover">Training</a>
                <a href="consulting.php" class="nav-item nav-link footer-linkhover">Consulting</a>
                <a href="Courses.php" class="nav-item nav-link footer-linkhover">Courses</a>
                <a href="#Team" class="nav-item nav-link footer-linkhover">Team</a>
                <a href="TotalBlogs.php" class="nav-item nav-link footer-linkhover">Blog</a>
                <a href="contact.php" class="nav-item nav-link footer-linkhover">Contact</a> 
                </div>
              
               
            </div>
        </div>
    </div>
    <hr>
     <!-- Copyright Start -->
     <div class="container-fluid bg-white text-white p-0">
        <div class="row gx-0  d-lg-flex">
      
                <div class="col-lg-6 text-center text-dark">
                    <div class="d-inline-flex align-items-center me-4" style="height:30px">
                    Copyright ©2023 All Rights are Reserved
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-dark me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-dark me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-dark me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-dark me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div  
                </div>
        </div>
    </div>
    <!-- Copyright End -->
    <!-- Footer End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
//     $('#blogCarousel').function({
//     interval: 5000
// });

// $('#blog2Carousel').function({
//     interval: 5000
// });
</script>
</body>

</html>
