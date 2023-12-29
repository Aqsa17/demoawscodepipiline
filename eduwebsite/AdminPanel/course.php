<?php 
include("../DBfunctions/Blogfunction.php");
session_start();
if(!empty($_SESSION['admin'])){
    $admin=$_SESSION['admin'];
    $admin_name=$admin['UserName'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Probytes - Admin Panel</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
             <!-- HEADER MOBILE-->
             <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="../img/logo1.png" alt="Probytes" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="Teacher.php">
                                <i class="fas fa-chart-bar"></i>Teachers</a>
                        </li>
                        <li>
                            <a href="Blog.php">
                                <i class="fas fa-chart-bar"></i>Blogs</a>
                        </li><li>
                            <a href="Course.php">
                                <i class="fas fa-chart-bar"></i>Courses</a>
                        </li>
                        <li>
                            <a href="EnrolledStudent.php">
                                <i class="fas fa-table"></i>Enrolled Students</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../img/logo1.png" alt="Probytes" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            </ul>
                        </li>
                        <li>
                            <a href="Teacher.php">
                                <i class="fas fa-table"></i>Teachers</a>
                        </li>

                        <li>
                            <a href="Blog.php">
                                <i class="fas fa-table"></i>Blogs</a>
                        </li>

                        <li>
                            <a href="Course.php">
                                <i class="fas fa-table"></i>Courses</a>
                        </li>

                        <li>
                            <a href="EnrolledStudent.php">
                                <i class="fas fa-table"></i>Enrolled Students</a>
                        </li>
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                 
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../img/RGB - Profile.png" alt="Admin" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?= $admin_name ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../img/RGB - Profile.png" alt="Admin" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?= $admin_name ?></a>
                                                    </h5>
                                                    <!-- <span class="email">johndoe@example.com</span> -->
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row">
                        
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Course table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-target="#coursemodal" data-toggle="modal">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Description</th>
                                                <th>Venue</th>
                                                <th>Level</th>
                                                <th>Image</th>
                                                <th>Duration</th>
                                                <th>TrainingType</th>
                                                <th>Education Partner</th>
                                                <th>Teacher</th>
                                                <th>Status</th>
                                                <th>AddedOn</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $aCourseDetail = FetchCourses(); 
                                    
                                        foreach($aCourseDetail as $ikey=>$ivalue)
                                        {
                                            if($ivalue['CourseStatus'] == 1)
                                            {
                                                $color = "green";
                                                $status = "Active";
                                            }
                                            else
                                            {
                                                $color = "red";
                                                $status = "Inactive";

                                            }
                                        ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $ivalue['CourseName'];?></td>
                                                <td><?php echo $ivalue['Category'];?></td>
                                                <td>
                                                    <div class="blogdesc"><?php echo $ivalue['CourseDescription'];?></div>
                                                </td>
                                                <td><?php echo $ivalue['CourseVenue'];?></td>
                                                <td><?php echo $ivalue['CourseLevel'];?></td>
                                                <td><a href ="../img/CourseImg/<?php echo $ivalue['CourseImg'];?>"><img class="blog-tbleimg" src="../img/CourseImg/<?php echo $ivalue['CourseImg'];?>" alt="Course Image"></a></td>
                                                <td><?= $ivalue['DurationStartDate'].'-'.$ivalue['DurationEndDate'];?></td>
                                                <td><?php echo $ivalue['TrainingType'];?></td>
                                                <td><?php echo $ivalue['EducationPartner'];?></td>
                                                <td><?php echo $ivalue['TeacherName'];?></td>
                            
                                                <td>
                                                    <span class="status-process" style="color:<?php echo $color?>"><?php echo $status?></span>
                                                </td>

                                                <td><?php echo $ivalue['CourseAddedOn'];?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                       
                                                        <button class="item Edit_btn" data-toggle="modal" data-target="#editcoursemodal" data-placement="top" title="Edit" data-id="<?= $ivalue["CourseId"]?>">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item course_dlt" data-toggle="tooltip" data-placement="top" title="Delete" data-id = "<?php echo $ivalue['CourseId'];?>" data-img = "<?=$ivalue['CourseImg'];?>">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                       
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->

                            
                            </div>


                            
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
     <!-- course  add modal  -->
     <div class="modal fade" id="coursemodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Add Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="" id="CourseSave">
                                <div class="row form-group ">
                                    <div class="input-group col-6 col-md-6">
                                        <input type="text" id="CourseName" name="CourseName" placeholder="CourseName" class="form-control CourseName" >
                                        <input type="hidden" id="savecourse" placeholder="" class="form-control " name="savecourse" value="savecourse">
                                    
                                    </div>
                                    <div class="input-group col-6 col-md-6">
                                    <select name="Category" id="SelectLm" class="form-control Category">
                                        <option selected>Select a Course  Category</option>    
                                        <option value="1" >Project And Process Management </option>
                                        <option value="2">Digital Marketing</option>
                                        <option value="3" >professionals And  Personal Development</option>
                                        <option value="4">Software Tools And IT</option>
                                        <option value="5" >Finance And Banking</option>
                                        <option value="6">Human Resource Management</option>
                                        <option value="7"> Ledaership And Strategy Management</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6 col-md-6">
                                        <textarea  id="textarea-input" rows="5" placeholder="Course Description..." class="form-control CourseDescription" name ="CourseDescription"></textarea>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <input type="text" id="Coursevenue"  placeholder="Venue" class="form-control Coursevenue" name="Coursevenue">
                                    </div>
                                    
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col-6 col-md-6">
                                        <input type="file" id="file-input"  class="form-control-file CourseFile" name = "CourseFile">

                                    </div>
                                    <div class="input-group col-6 col-md-6">
                                    <select name="CourseLevel" id="SelectLm" class="form-control CourseLevel">
                                        <option selected>Select a Course  Level </option>    
                                        <option value="1">Basic </option>
                                        <option value="2">Intermediate</option>
                                        <option value="3">Advance</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row form-group "> 
                                    <div class="input-group col-6 col-md-6">
                                        <input type="date" id="StartDate" placeholder="StartDate" class="form-control StartDate" name="StartDate">
                                    </div>

                                    <div class="input-group col-6 col-md-6">
                                        <input type="date" id="EndDate" placeholder="EndDate" class="form-control EndDate" name="EndDate">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6 col-md-6">
                                        <input type="text" id="EducationPrtner" placeholder="Education Partner"  class="form-control EducationPrtner" name = "EducationPrtner">
                                    </div>
                                    <div class="input-group col-6 col-md-6">
                                    <select name="TrainingType" id="SelectLm" class="form-control TrainingType">
                                        <option selected >Select a Training Type </option>    
                                        <option value="0">Online </option>
                                        <option value="1">In Person</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row form-group">

                                    <div class="input-group col-6 col-md-6">
                                    <select name="Teacher" id="SelectLm" class="form-control Teacher">
                                        <option value="0">Select Course Teacher</option>
                                        
                                        <?php 
                                        $aCourseTeacher = FetchTeacher(); 
                                        foreach($aCourseTeacher as $ikey=>$ivalue)
                                        {
                                        ?>
                                            <option value="<?=$ivalue["TeacherId"]?>"><?=$ivalue["TeacherName"]?></option>
                                            <?php 
                                        }
                                        ?>
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-6">
                                    <select name="CourseStatus" id="SelectLm" class="form-control CourseStatus">
                                            <option value="2">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">InActive</option>
                                        </select>
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary SaveCourse" name="SaveCourse">Submit</button>
            </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end course Modal -->

       <!-- course  add modal  -->
       <div class="modal fade" id="editcoursemodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Edit Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="" id="CourseEdit">
                                <div class="row form-group ">
                                    <div class="input-group col-6 col-md-6">
                                        <input type="text" id="CourseName" name="CourseName" placeholder="CourseName" class="form-control CourseName" >
                                        <input type="hidden" id="Course_Id" name="Course_Id"  class="form-control Course_Id" >

                                    </div>
                                    <div class="input-group col-6 col-md-6">
                                    <select name="Category" id="SelectLm" class="form-control Category">
                                        <option selected>Select a Course  Category</option>    
                                        <option value="1" >Project And Process Management </option>
                                        <option value="2">Digital Marketing</option>
                                        <option value="3" >professionals And  Personal Development</option>
                                        <option value="4">Software Tools And IT</option>
                                        <option value="5" >Finance And Banking</option>
                                        <option value="6">Human Resource Management</option>
                                        <option value="7"> Ledaership And Strategy Management</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6 col-md-6">
                                        <textarea  id="textarea-input" rows="5" placeholder="Course Description..." class="form-control CourseDescription" name ="CourseDescription"></textarea>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <input type="text" id="Coursevenue"  placeholder="Venue" class="form-control Coursevenue" name="Coursevenue">
                                    </div>
                                    
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col-6 col-md-6">
                                        <input type="file" id="file-input"  class="form-control-file CourseFile" name = "CourseFile"><a href="" class="filelink"></a>
                                        <input type="hidden" name="updatedCourseImg" class="updatedCourseImg">
                                    </div>
                                    <div class="input-group col-6 col-md-6">
                                    <select name="CourseLevel" id="SelectLm" class="form-control CourseLevel">
                                        <option selected>Select a Course  Level </option>    
                                        <option value="1">Basic </option>
                                        <option value="2">Intermediate</option>
                                        <option value="3">Advance</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row form-group "> 
                                    <div class="input-group col-6 col-md-6">
                                        <input type="date" id="StartDate" placeholder="StartDate" class="form-control StartDate" name="StartDate">
                                    </div>

                                    <div class="input-group col-6 col-md-6">
                                        <input type="date" id="EndDate" placeholder="EndDate" class="form-control EndDate" name="EndDate">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6 col-md-6">
                                        <input type="text" id="EducationPrtner" placeholder="Education Partner"  class="form-control EducationPrtner" name = "EducationPrtner">
                                    </div>
                                    <div class="input-group col-6 col-md-6">
                                    <select name="TrainingType" id="SelectLm" class="form-control TrainingType">
                                        <option selected >Select a Training Type </option>    
                                        <option value="0">Online </option>
                                        <option value="1">In Person</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row form-group">

                                    <div class="input-group col-6 col-md-6">
                                    <select name="Teacher" id="SelectLm" class="form-control Teacher">
                                        <option value="0">Select Course Teacher</option>
                                        
                                        <?php 
                                        $aCourseTeacher = FetchTeacher(); 
                                        foreach($aCourseTeacher as $ikey=>$ivalue)
                                        {
                                        ?>
                                            <option value="<?=$ivalue["TeacherId"]?>"><?=$ivalue["TeacherName"]?></option>
                                            <?php 
                                        }
                                        ?>
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-6">
                                    <select name="CourseStatus" id="SelectLm" class="form-control CourseStatus">
                                            <option value="2">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">InActive</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                    <input type="hidden" value="UpdateCourse" name="courseeditaction">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary EditCourse" name="EditCourse">Edit</button>
            </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end course Edit Modal -->

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <script>
         $("#CourseSave").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
            url: "AdminFunction.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
                var parseresult = $.parseJSON(data);
                var status = parseresult.status;
                if(status == 1)
                {
                     Swal.fire(
                    'Success!',
                    'Course Saved Successfully!',
                    'success'
                    )
                    $("#CourseSave").trigger("reset");
                    $("#coursemodal").hide();
                    $(".close").trigger("click");
                }
                else
                {
                    Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    })
                    $("#coursemodal").hide();
                    $(".close").trigger("click");




                }
            }    
        });
    }));


        $(document).on("click",".course_dlt",function(){ 
        var CourseId=$(this).attr('data-id');
        var CourseImg=$(this).attr('data-img');

        var el=this;
    $.ajax({
        url:"AdminFunction.php",
        type:"POST",
        data:{'CourseId':CourseId,'CourseImg':CourseImg},
        success:function(data){
            // alert(data);
            $(el).closest('tr').fadeOut();

        }

    })
    });

    $('.Edit_btn').on('click',function(){
        // var coursefile = document.querySelector("input[type=file]");
        var Course_Id =  $(this).data('id');
        $.ajax({
            url: "AdminFunction.php",
            type: "POST",
            data:  {'Course_Id':Course_Id,'SearchCourseAction':'SearchCourse'},
            success: function(data)
            {
                // console.log(data);

                var parseresult = $.parseJSON(data);
                
            $.each(parseresult, function(index, value) 
            {
                if(value['CourseId'] != "")
                {
                var CourseName = value["CourseName"];
                var CourseCategoryId = value["CourseCategoryId"];
                var CourseDescription = value["CourseDescription"];
                var CourseImg = value["CourseImg"];
                var CourseId = value["CourseId"];
                var CourseVenue = value["CourseVenue"];
                var CourseLevel = value["CourseLevel"];
                var CourseDurationStart = value["CourseDurationStart"];
                var CourseDurationEnd = value["CourseDurationEnd"];
                var EducationPartner = value["EducationPartner"];
                var TrainingType = value["TrainingType"];
                var CourseTeacherId = value["CourseTeacherId"];
                var CourseStatus = value["CourseStatus"];
    
                $(".CourseName").val(CourseName);
                $(".Category").val(CourseCategoryId); 
                $(".CourseDescription").val(CourseDescription); 
                $(".Coursevenue").val(CourseVenue); 
                $(".CourseLevel").val(CourseLevel); 
                $(".CourseStatus").val(CourseStatus); 
                $(".StartDate").val(CourseDurationStart); 
                $(".EndDate").val(CourseDurationEnd); 
                $(".EducationPrtner").val(EducationPartner); 
                $(".TrainingType").val(TrainingType); 
                $(".Teacher").val(CourseTeacherId); 
                $(".CourseStatus").val(CourseStatus); 
                $(".Course_Id").val(CourseId);
                $(".filelink").attr('href','../img/courseimgs/'+CourseImg);
                $(".filelink").text(CourseImg); 
                $(".updatedCourseImg").val(CourseImg);
                }     
                else
                {
                    Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    })
                    $("#editcoursemodal").hide();
                    $(".close").trigger("click");
                }
            });
        }    
        }); 

    });

    $("#CourseEdit").on('submit',(function(e){
        e.preventDefault();
        $.ajax({
            url: "AdminFunction.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
                // console.log(data);
                var parseresult = $.parseJSON(data);
                // console.log(parseresult);
                var status = parseresult.status;
                console.log(status);
                if(status == 1)
                {
                    Swal.fire(
                    'Success!',
                    'Course Updated Successfully!',
                    'success'
                    )
                    $("#CourseEdit").trigger("reset");
                    $("#editcoursemodal").hide();
                    $(".close").trigger("click");
                }
                else
                {
                    Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    })
                    $("#editcoursemodal").hide();
                    $(".close").trigger("click");
                }
            }    
            }); 

        
        }));

    </script>

</body>

</html>
<!-- end document-->
