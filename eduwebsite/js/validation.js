$(".registerbtn").on('',function(){
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
   var approvalmanageremail = $('.approvalmanageremail').val();
   var companyname2 = $('.companyname2').val();
   var billingaddress1 = $('.billingaddress1').val();
   var billingaddress2 = $('.billingaddress2').val();
   var pobox = $('.pobox').val();
   var city = $('.city').val();
   var promocode = $('.promocode').val();
   var countrytwo = $('.countrytwo').val();



   var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  var upper_case=/[A-Z]/;
  var normal_letters=/[a-z]/;
  var numbers=/[0-9]/;
  var regularExpression  = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;

  if (firstname == "") {
    $('.firstname').css('border', '1px solid red');
    $('.n_error').text("Please Enter Name *").fadeIn();
  }
  if (jobtitle == "") {
    $('.jobtitle').css('border', '1px solid red');
    $('.j_error').text("Please Enter Job Title  *").fadeIn();
  }
  
  else if (email == "") {
    $('.email').css('border', '1px solid red');
    $('.name').css('border', '1px solid green');

    $('.e_error').text("Please Enter email * ").fadeIn();
    $('.n_error').text("Please Enter Name *").fadeOut();
  }
  else if (!emailReg.test(email)) {
    $('.email').css('border', '1px solid red');
    $('.e_error').text("Please Enter valid Email * ").fadeIn();
    $('.email').val('');
  }

  else if (pwd == "" || pwd.length < 6) {
    $('.name').css('border', '1px solid green');
    $('.email').css('border', '1px solid green');

    $('.e_error').text("Please Enter email * ").fadeOut();
    $('.n_error').text("Please Enter Name *").fadeOut();
    $('.pwd').css('border', '1px solid red');
    $('.p_error').text("Password must be 6-8 characters  long * ").fadeIn();
  }

  else if (!pwd.match(normal_letters)) {
    $('.name').css('border', '1px solid green');
    $('.email').css('border', '1px solid green');

    $('.e_error').text("Please Enter email * ").fadeOut();
    $('.n_error').text("Please Enter Name *").fadeOut();
    $('.pwd').css('border', '1px solid red');
    $('.p_error').text("Password should contian  upper alphabet letters* ").fadeIn();
  }
  else if (!pwd.match(upper_case)) {
    $('.name').css('border', '1px solid green');
    $('.email').css('border', '1px solid green');

    $('.e_error').text("Please Enter email * ").fadeOut();
    $('.n_error').text("Please Enter Name *").fadeOut();
    $('.pwd').css('border', '1px solid red');
    $('.p_error').text("Password should contain atleast one capital  letter* ").fadeIn();
  }  
  else if (!pwd.match(numbers)) {
    $('.name').css('border', '1px solid green');
    $('.email').css('border', '1px solid green');

    $('.e_error').text("Please Enter email * ").fadeOut();
    $('.n_error').text("Please Enter Name *").fadeOut();
    $('.pwd').css('border', '1px solid red');
    $('.p_error').text("Password should contain atleast one numeric letter* ").fadeIn();
  }  

  else if (!pwd.match(numbers)) {
    $('.name').css('border', '1px solid green');
    $('.email').css('border', '1px solid green');

    $('.e_error').text("Please Enter email * ").fadeOut();
    $('.n_error').text("Please Enter Name *").fadeOut();
    $('.pwd').css('border', '1px solid red');
    $('.p_error').text("Password should  contain atleast one special character * ").fadeIn();
  }  

  else if (phone=="") {
    $('.name').css('border', '1px solid green');
    $('.email').css('border', '1px solid green');
    $('.pwd').css('border', '1px solid green');

    $('.ph_error').text("Please Enter Phone Number * ").fadeIn();
    $('.e_error').text("Please Enter email * ").fadeOut();
    $('.n_error').text("Please Enter Name *").fadeOut();
    $('.p_error').text("Password must be 6-8 characters  long * ").fadeOut();
    $('.phone').css('border', '1px solid red');
  }
  
  else if (phone.length>11) {
    $('.name').css('border', '1px solid green');
    $('.email').css('border', '1px solid green');
    $('.pwd').css('border', '1px solid green');

    $('.ph_error').text("Please enter valid phone number * ").fadeIn();
    $('.e_error').text("Please Enter email * ").fadeOut();
    $('.n_error').text("Please Enter Name *").fadeOut();
    $('.p_error').text("Password must be 6-8 characters  long * ").fadeOut();
    $('.phone').css('border', '1px solid red');
  }
  else if (batch == "") {
    $('.name').css('border', '1px solid green');
    $('.email').css('border', '1px solid green');
    $('.pwd').css('border', '1px solid green');

    $('.ph_error').text("Please Enter Phone Number * ").fadeOut();
    $('.e_error').text("Please Enter email * ").fadeOut();
    $('.n_error').text("Please Enter Name *").fadeOut();
    $('.p_error').text("Password must be 6-8 characters  long * ").fadeOut();
    $('.b_error').text("Please select batch * ").fadeIn();

    $('.batch').css('border', '1px solid red');
  }


  else {
    $('.e_error').text("Please Enter email * ").fadeOut();
    $('.ph_error').text("Please Enter Phone Number * ").fadeOut();
    $('.n_error').text("Please Enter Name *").fadeOut();
    $('.p_error').text("Password must be 6-8 characters  long * ").fadeOut();
    $('.b_error').text("Please select batch * ").fadeOut();

    //remov border error //
    $('.name').css('border', '1px solid green');
    $('.email').css('border', '1px solid green');
    $('.phone').css('border', '1px solid green');
    $('.pwd').css('border', '1px solid green');
    $('.batch').css('border', '1px solid green');

  }
   $.ajax({
   type: "POST",
   url: "Dbfunctions/CourseRegistrationsave.php",
   data:  {iCourseId:iCourseId,prefix,firstname:firstname,lastname:lastname,countryone:countryone,
           email:email,jobtitle:jobtitle,companyname:companyname,countrycode:countrycode,
           areacode:areacode,phonenumber:phonenumber,registrationplan:registrationplan,
           paymentmethod:paymentmethod,approvalmanageremail:approvalmanageremail,companyname2:companyname2,
           billingaddress1:billingaddress1,billingaddress2:billingaddress2,pobox:pobox,city:city,
           promocode:promocode,countrytwo:countrytwo},
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