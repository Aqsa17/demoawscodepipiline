<?php 
include("AdminFunction.php");
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
                                            <select  id ="coursefilter">
                                            <!-- <option selected="selected">Select Course</option> -->

                                            <?php 
                                                $aCourse = FetchCourse(); 
                                                foreach($aCourse as $ikey=>$ivalue)
                                                {
                                                ?>
                                                    <option value="<?=$ivalue["CourseId"]?>"><?=$ivalue["CourseName"]?></option>
                                                    <?php 
                                                }
                                                ?>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
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
                                                <th>Email</th>
                                                <th>JobTitle</th>
                                                <th>Company</th>
                                                <th>Country</th>
                                                <th>CountryCode</th>
                                                <th>AreaCode</th>
                                                <th>PhoneNumber</th>
                                                <th>RegistrationPlan</th>
                                                <th>PaymentMethod</th>
                                                <th>Status</th>
                                                <th>AddedOn</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="EnrolledData">
                                        <?php
                                         
                                        $aFetchEnrolledStudentDetail = FetchEnrolledStudent($iCourseId = ""); 
                                        foreach($aFetchEnrolledStudentDetail as $ikey=>$ivalue)
                                        {
                                            if($ivalue['Status'] == 1)
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
                                                <td><?php echo $ivalue['FirstName'] . $ivalue['LastName'];?></td>
                                                <td><?php echo $ivalue['Email'];?></td>
                                                <td><?php echo $ivalue['JobTitle'];?></td>
                                                <td><?php echo $ivalue['CompanyName'];?></td>
                                                <td><?php echo $ivalue['Country'];?></td>
                                                <td><?php echo $ivalue['CountryCode'];?></td>
                                                <td><?php echo $ivalue['AreaCode'];?></td>
                                                <td><?php echo $ivalue['PhoneNumber'];?></td>
                                                <td><?php echo $ivalue['registrationPlan'];?></td>
                                                <td><?php echo $ivalue['PaymentMethod'];?></td>
                                                <td><span class="status-process" style="color:<?php echo $color?>"><?php echo $status?></span></td>

                                                <td><?php echo $ivalue['AddedOn'];?></td>
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


 // course by level wise 

 $(document).on('change', '#coursefilter', function () {
        var iCourseId = $(this).val();
        $.ajax({
        type: "POST",
        url: "AdminFunction.php",
        data:  {'CourseID':iCourseId ,'FetchEnrolledBy':'Course'},
        success :function(data){
            var aenrolleddata = $.parseJSON(data);
            if(aenrolleddata!=null || aenrolleddata!="")
            {

                console.log(aenrolleddata);
             const EnrolledData =  $(".EnrolledData").html("");
                $.each(aenrolleddata, function(index, value) 
                {
                 if(value["Status"] == 1)
                 {
                    color = 'green';
                 }
                 else
                 {
                    color = 'red';
                 }
                //  <td><span class='status-process' style='color':color'>value['Status']</span></td>

                    $(".EnrolledData").append("<tr class='tr-shadow'><td>" +value['FirstName'] + value['LastName']  +"</td> <td>" +value['Email'] + "</td><td>"+ value['JobTitle']  +"</td><td>" +value['CompanyName']  + "</td><td>" + value['Country']  +"</td> <td>" +value['CountryCode'] + "</td><td>" +value['AreaCode']  +"</td><td>"  +value['PhoneNumber'] + "</td><td>" + value['registrationPlan']  +"</td><td>" +value['PaymentMethod'] +"</td><td><span class='status-process' style='color':\'color\'>" +value['Status']+"</span></td><td>" +value['AddedOn'] +"<td><div class='table-data-feature'><button class='item Edit_btn' data-toggle='modal' data-target='#editcoursemodal' data-placement='top' title='Edit' data-id='value['CourseId']'> <i class='zmdi zmdi-edit'></i></button><button class='item course_dlt' data-toggle='tooltip' data-placement='top' title='Delete'><i class='zmdi zmdi-delete'></i></button></div></td></tr>");

                });
            }
            // console.log(coursedata);
            
        }
    });
});
</script>

</body>

</html>
<!-- end document-->
