<?php
include("Blogfunction.php");
$iCourseId =$_POST['iCourseId'];
$prefix = $_POST['prefix'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$countryone = $_POST['countryone'];
$email = $_POST['email'];
$jobtitle = $_POST['jobtitle'];
$companyname = $_POST['companyname'];
$countrycode = $_POST['countrycode'];
$areacode = $_POST['areacode'];
$phonenumber = $_POST['phonenumber'];
$registrationplan = $_POST['registrationplan'];
$paymentmethod = $_POST['paymentmethod'];
// $approvalmanageremail = $_POST['approvalmanageremail'];
// $companyname2 = $_POST['companyname2'];
// $billingaddress1 = $_POST['billingaddress1'];
// $billingaddress2 = $_POST['billingaddress2'];
// $pobox = $_POST['pobox'];
// $city = $_POST['city'];
// $promocode = $_POST['promocode'];
// $countrytwo = $_POST['countrytwo'];

CourseResgistration($iCourseId,$prefix,$firstname,$lastname,$email,$jobtitle,$companyname,$countryone,$countrycode,$areacode,$phonenumber,$registrationplan,$paymentmethod);
?>