<?php include("DBfunctions/Blogfunction.php");?>
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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
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
                <a href="index.php#Team" class="nav-item nav-link nav-linkhover">Team</a>
                <a href="#" class="nav-item nav-link nav-linkhover">Blog</a>
                <a href="contact.php" class="nav-item nav-link nav-linkhover">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
 
<!-- blog Start -->
<div class="container">
        <div class="row" id= "Blog">
            <div class="col-md-12">
            <div class="text-center mx-auto mb-5"  style="max-width: 500px;">
            <h6 class="text-primary text-uppercase section-heading">Our Blog</h6>
            </div>
            </div>
        </div>
        <div class="row g-5 BLOG">
            <?php
            $aBlogsDetail = FetchBlog(); 
            foreach($aBlogsDetail as $ikey=>$ivalue)
            {
            
            ?>
        
            <div class="col-md-3 ">
                <div class="card  blogcols">
                    <img class="card-img-top" src="img/BlogsImg/<?php echo $ivalue['BlogImg'];?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $ivalue['BlogName'];?></h5>
                        <p class="card-text truncateText"><?php echo $ivalue['BlogDescription'];?></p>
                        <a href="BlogDetail.php?id=<?php echo $ivalue["BlogId"]?>" class="btn btn-primary readmorebtn">Read More</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
            </br>
       
        
        
</div>
</div>
   
    <!-- blog End -->
    <hr/>
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
                    <a href="Courses.php?CategoryId=1" class="nav-item nav-link footer-linkhover">Project and Process Management</a>
                    <a href="Courses.php?CategoryId=2" class="nav-item nav-link footer-linkhover">Digital Marketing</a>
                    <a href="Courses.php?CategoryId=3" class="nav-item nav-link footer-linkhover">professionals & Personal Development</a>
                    <a href="Courses.php?CategoryId=4" class="nav-item nav-link footer-linkhover">Software Tools & IT</a>    
                    </div>
                    <div class="col-lg-6 col-md-6">
                    <a href="Courses.php?CategoryId=5" class="nav-item nav-link footer-linkhover">Finance & Banking</a>
                    <a href="Courses.php?CategoryId=6" class="nav-item nav-link footer-linkhover">Human Resource Management</a>
                    <a href="Courses.php?CategoryId=7" class="nav-item nav-link footer-linkhover">Ledaership & Strategy Management</a> 
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
                <a href="#Blog" class="nav-item nav-link footer-linkhover">Blog</a>
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
                    <div class="d-flex pt-2 footerbtn">
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
