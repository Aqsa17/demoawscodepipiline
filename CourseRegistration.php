<?php 
include("Dbfunctions/Blogfunction.php");
if(isset($_GET["CourseId"]))
{$iCourseId = $_GET["CourseId"];
    $aCourseData = SearchCourse($iCourseId);
    foreach($aCourseData as $key => $value)
    {
        $sCourseName = $value["CourseName"];
        $dCourseStartDate = $value["DurationStartDate"];
        $dCourseEndDate = $value["DurationEndDate"];
    }

}
?>
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
.onlinetrainingsection
{

    background-image: url("img/peopletraining.avif");
    background-repeat: no-repeat;
    background-size:cover;
    opacity: 0.75;
    background-position: center;

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
            <div class="col-md-12">
                <div class="card formdiv">
                    <div class="card-header">
                    <h3 class="textcenter">Enter your details to register for the course</h3>
                        <h3 class="textcenter"><?=$sCourseName; ?></h3>
                        <h4 class="textcenter"><?=$dCourseStartDate . " - " . $dCourseEndDate?></h4>
                    </div>
                    <div class="card-body">
                        <form class="courseform" >
                            <div class="row">                        
                                <div class="col-md-6">   
                                <select class="form-control prefix">
                                <option selected>Prefix * </option>    
                                <option value='Mr.' >Mr.</option>
                                <option value='Mrs.' >Mrs.</option>
                                <option value='Ms.' >Ms.</option>
                                <option value='Miss' >Miss</option>
                                <option value='Eng.' >Eng.</option>
                                <option value='Dr.' >Dr.</option>
                                <option value='Prof.' >Prof.</option>
                                <option value='Sheikh' >Sheikh</option>
                                <option value='Sheikha' >Sheikha</option>
                                </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control firstname" placeholder="First name">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control lastname" placeholder="Last name">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control jobtitle" placeholder="Job Title">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control companyname" placeholder="Company Name">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                <input type="email" class="form-control email" placeholder="Email">
                                </div>
                                <div class="col-md-6">
                                <select class="form-control  countryone">
                                    <option selected>Country Of Residence*</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antarctica">Antarctica</option>
										<option value="Antigua And Barbuda">Antigua And Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Bouvet Island">Bouvet Island</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
										<option value="Brunei">Brunei</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Hong Kong, S.A.R., China">Hong Kong, S.A.R., China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Ivory Coast">Ivory Coast</option>
										<option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Dem Rep of Congo (Zaire)">Dem Rep of Congo (Zaire)</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="East Timor">East Timor</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Territories">French Southern Territories</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-Bissau">Guinea-Bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
										<option value="Honduras">Honduras</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea">Korea</option>
										<option value="Korea (D.P.R.)">Korea (D.P.R.)</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Lao">Lao</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macao">Macao</option>
										<option value="Macau, S.A.R., China">Macau, S.A.R., China</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia">Micronesia</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="Netherlands Antilles">Netherlands Antilles</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Northern Mariana Islands">Northern Mariana Islands</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Panama">Panama</option>
										<option value="Papua new Guinea">Papua new Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Pitcairn">Pitcairn</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russia">Russia</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
										<option value="Saint Lucia">Saint Lucia</option>
										<option value="Saint Vincent &amp; The Grenadines">Saint Vincent &amp; The Grenadines</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome and Principe">Sao Tome and Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia and Montenegro">Serbia and Montenegro</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovak Republic">Slovak Republic</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="S. Georgia, S.Sandwich Islands">S. Georgia, S.Sandwich Islands</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="St Helena">St Helena</option>
										<option value="St Pierre and Miquelon">St Pierre and Miquelon</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Taiwan, China">Taiwan, China</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad And Tobago">Trinidad And Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="Uruguay">Uruguay</option>
										<option value="U.S Minor Outlying Islands">U.S Minor Outlying Islands</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Virgin Islands (British)">Virgin Islands (British)</option>
										<option value="Virgin Islands (US)">Virgin Islands (US)</option>
										<option value="Wallis And Futuna Islands">Wallis And Futuna Islands</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                <label for="field-enroll-phone" class="form-label label-hide"> PHONE NUMBER (+123 123 1234567)</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control countrycode" name="country_code" id="country_code" value="" placeholder="Country(+)"/>
                                </div>
                                <div class="col">
                                <input type="text" class="form-control areacode" name="phone_code" id="phone_code" value="" placeholder="Area Code"/>
                                </div>
                                <div class="col">
                                <input type="text" class="form-control phonenumber" name="phone_number" id="phone_number" value="" placeholder="Phone Number"/>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col">
                                <label for="field-enroll-phone" class="form-label label-hide"> REGISTER ME FOR: * </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control registrationplan" name="country_code" id="country_code" value="" placeholder="Long-term Incentive Plans (LTIPs) & Executive Compensation"/>
                                </div>     
                            </div><br>
                            <div class="row">
                                <div class="col">
                                <label for="field-enroll-phone" class="form-label label-hide"> How Would You Like To Pay ? </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 form-check">
                                <input type="radio" class="form-check-input position-static paymentmethod" placeholder="" name="paymentOption" value="1">Invoice
                                </div>
                                <div class="col-md-2 form-check">
                                <input type="radio" class="form-check-input position-static paymentmethod" placeholder="" name="paymentOption" value="2">Credit Card
                                </div>
                            </div><br>
                            <!-- <div class="row">
                                <div class="col-md-6">
                                <input type="text" class="form-control approvalmanageremail" placeholder="Approval Manager Email">
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control companyname2" placeholder="Company  name">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control billingaddress1" placeholder="Billing Address 1 ">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control billingaddress2" placeholder="Billing Address 2">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control city" placeholder="City">
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control pobox" placeholder="Po Box">
                                </div>
                                <div class="col">
                                <select class="form-control countrytwo">
                                    <option selected>Country Of Residence*</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antarctica">Antarctica</option>
										<option value="Antigua And Barbuda">Antigua And Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Bouvet Island">Bouvet Island</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
										<option value="Brunei">Brunei</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Hong Kong, S.A.R., China">Hong Kong, S.A.R., China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Ivory Coast">Ivory Coast</option>
										<option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Dem Rep of Congo (Zaire)">Dem Rep of Congo (Zaire)</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="East Timor">East Timor</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Territories">French Southern Territories</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-Bissau">Guinea-Bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
										<option value="Honduras">Honduras</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea">Korea</option>
										<option value="Korea (D.P.R.)">Korea (D.P.R.)</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Lao">Lao</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macao">Macao</option>
										<option value="Macau, S.A.R., China">Macau, S.A.R., China</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia">Micronesia</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="Netherlands Antilles">Netherlands Antilles</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Northern Mariana Islands">Northern Mariana Islands</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Panama">Panama</option>
										<option value="Papua new Guinea">Papua new Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Pitcairn">Pitcairn</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russia">Russia</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
										<option value="Saint Lucia">Saint Lucia</option>
										<option value="Saint Vincent &amp; The Grenadines">Saint Vincent &amp; The Grenadines</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome and Principe">Sao Tome and Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia and Montenegro">Serbia and Montenegro</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovak Republic">Slovak Republic</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="S. Georgia, S.Sandwich Islands">S. Georgia, S.Sandwich Islands</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="St Helena">St Helena</option>
										<option value="St Pierre and Miquelon">St Pierre and Miquelon</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Taiwan, China">Taiwan, China</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad And Tobago">Trinidad And Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="Uruguay">Uruguay</option>
										<option value="U.S Minor Outlying Islands">U.S Minor Outlying Islands</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Virgin Islands (British)">Virgin Islands (British)</option>
										<option value="Virgin Islands (US)">Virgin Islands (US)</option>
										<option value="Wallis And Futuna Islands">Wallis And Futuna Islands</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                <input type="text" class="form-control promocode" placeholder="Prmo Code">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6Les_LUUAAAAAOwAecAV2bvGOrePoZVQPLDOJcs_" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                                <div class="help-block with-errors"></div>
                                </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-6">
                                <button type = "button" class="btn btn-primary registerbtn">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                 </div>
           
            </div>
        </div>
    </div>
</div>


 

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
                <a href="index.php#Team" class="nav-item nav-link footer-linkhover">Team</a>
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        $(".registerbtn").on('click',function(){
             var iCourseId = <?=$iCourseId?>;
            var prefix = $('.prefix').val();
            var firstname = $('.firstname').val();
            var lastname = $('.lastname').val();
            var countryone = $('.countryone').val();
            var email = $('.email').val();
            var jobtitle = $('.jobtitle').val();
            var companyname = $('.companyname').val();
            var countrycode = $('.countrycode').val();
            var areacode = $('.areacode').val();
            var phonenumber = $('.phonenumber').val();
            var registrationplan = $('.registrationplan').val();
            var paymentmethod = $('.paymentmethod').val();
            // var approvalmanageremail = $('.approvalmanageremail').val();
            // var companyname2 = $('.companyname2').val();
            // var billingaddress1 = $('.billingaddress1').val();
            // var billingaddress2 = $('.billingaddress2').val();
            // var pobox = $('.pobox').val();
            // var city = $('.city').val();
            // var promocode = $('.promocode').val();
            // var countrytwo = $('.countrytwo').val();

            $.ajax({
            type: "POST",
            url: "Dbfunctions/CourseRegistrationsave.php",
            data:  {iCourseId:iCourseId,prefix,firstname:firstname,lastname:lastname,countryone:countryone,
                    email:email,jobtitle:jobtitle,companyname:companyname,countrycode:countrycode,
                    areacode:areacode,phonenumber:phonenumber,registrationplan:registrationplan,
                    paymentmethod:paymentmethod},
            success :function(data){
                // console.log(data);
                var parseresult = $.parseJSON(data);
                // console.log(parseresult);
                var status = parseresult.status;
                // console.log(status);
                if(status == 1)
                {
                     Swal.fire(
                    'Congratulations!',
                    'You Registered Successfully!',
                    'success'
                    )
                    $(".courseform").trigger("reset");
                }
                else
                {
                    Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    })
                    // $(".courseform").trigger("refresh");

                }


            }
            });

        })
</script>
</body>

</html>
