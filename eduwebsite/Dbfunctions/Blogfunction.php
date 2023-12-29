<?php
//Database connection //
function connect(){
    //local connection//
    $con=mysqli_connect('localhost','root','','Probytes',3306);
      //live connection//
      //$con=mysqli_connect('wordpressdb-l.hosting.stackcp.net','','','SCWORDPRESS-313633781d');
    if($con){
        return $con;

    }
    else {
        return null;

    }
}
//fetch all cpurse to show student dashboard //

function FetchBlog(){
    $con=connect();
    if($con){
        $query="SELECT * FROM `Blogs` WHERE BlogStatus =1 ";
        $result=mysqli_query($con,$query);
        if($result){
            $arr1=array();
            $index=0;
            while($row=mysqli_fetch_assoc($result)){
            $arr1[$index]=$row;
            $index++;
         
            }
            return $arr1;
        }
        else{
            echo "Blog Not Found";
            return null;
        }

    }
}

function search_Blog($id){
    $con=connect();
    if($con){
        $query="SELECT * FROM `Blogs` WHERE `BlogId`=$id";
        $result=mysqli_query($con,$query);
        if($result){
       $aBlogs=array();
       $index=0;
           while($row=mysqli_fetch_assoc($result)){
            $aBlogs[$index]=$row;
            $index++;   
           }
           return $aBlogs; 
         
        }
        else{
            echo "Data not Found ";

        }
    }
}



function FetchTeacher(){
    $con=connect();
    if($con){
        $query="SELECT * FROM `Teachers` WHERE TeacherStatus =1 ";
        $result=mysqli_query($con,$query);
        if($result){
            $arr1=array();
            $index=0;
            while($row=mysqli_fetch_assoc($result)){
            $arr1[$index]=$row;
            $index++;
         
            }
            return $arr1;
        }
        else{
            echo "Teacher Not Found";
            return null;
        }

    }
}


function FetchCourses($iCategoryId = ""){
    $CourseCondition = "";
    if($iCategoryId != "")
    {
        $CourseCondition ="AND CourseCategoryId = '$iCategoryId'";
    }
    $con=connect();
    if($con){
        $query="SELECT C.CourseId,C.CourseName,
        CASE C.CourseCategoryId 
        WHEN 1 THEN 'Project And  Process Management'
        WHEN 2 THEN 'Digital Marketing'
        WHEN 3 THEN 'Professional And Personal Development'
        WHEN 4 THEN 'Software Tools And IT'
        WHEN 5 THEN 'Finaance And Banking'
        WHEN 6 THEN 'Human Resource Management'
        WHEN 7 THEN 'Leadership And Strategy Management'
        END AS Category,
        C.CourseStatus,
        C.CourseImg,C.CourseDescription,C.CourseVenue, 
        CASE C.CourseLevel WHEN 0 THEN 'Basic' WHEN 1 THEN 'Intermediate' WHEN 2 THEN  'Advance' END AS CourseLevel,
        DATE_FORMAT(C.CourseDurationStart, '%e %M %Y') AS DurationStartDate,
       DATE_FORMAT(C.CourseDurationEnd, '%e %M %Y') AS DurationEndDate,
        C.EducationPartner,
        CASE C.TrainingType WHEN 0 THEN 'In Person' WHEN 1 THEN 'Online' END AS TrainingType,
        T.TeacherName,T.TeacherId,C.CourseAddedBy,C.CourseAddedOn,C.CourseUpdatedBy,C.CourseUpdatedOn
      FROM courses AS C 
       INNER JOIN teachers AS T ON  C.CourseTeacherId = T.TeacherId
       WHERE C.CourseStatus = '1' $CourseCondition  "  ;
        $result=mysqli_query($con,$query);
        if($result){
            $arr1=array();
            $index=0;
            while($row=mysqli_fetch_assoc($result)){
            $arr1[$index]=$row;
            $index++;
         
            }
            return $arr1;
        }
        else{
            echo "Course Not Found";
            return null;
        }

    }
}

function FetchCoursesByCategory($iCategoryId){
    if($iCategoryId == "All")
    {
        $courseCond = "AND  C.CourseCategoryId IN(1,2,3,4,5,6,7)";
    }
    else
    {
       $courseCond = "AND  C.CourseCategoryId = '$iCategoryId'";
    }
    $con=connect();
    if($con){
        $query="SELECT C.CourseId,C.CourseName,
        CASE C.CourseCategoryId 
        WHEN 1 THEN 'Project And  Process Management'
        WHEN 2 THEN 'Digital Marketing'
        WHEN 3 THEN 'Professional And Personal Development'
        WHEN 4 THEN 'Software Tools And IT'
        WHEN 5 THEN 'Finaance And Banking'
        WHEN 6 THEN 'Human Resource Management'
        WHEN 7 THEN 'Leadership And Strategy Management'
        END AS Category,
        C.CourseImg,C.CourseDescription,C.CourseVenue, 
        CASE C.CourseLevel WHEN 0 THEN 'Basic' WHEN 1 THEN 'Intermediate' WHEN 2 THEN  'Advance' END AS CourseLevel,
        DATE_FORMAT(C.CourseDurationStart, '%e %M %Y') AS DurationStartDate,
       DATE_FORMAT(C.CourseDurationEnd, '%e %M %Y') AS DurationEndDate,
        C.EducationPartner,
        CASE C.TrainingType WHEN 0 THEN 'In Person' WHEN 1 THEN 'Online' END AS TrainingType,
        T.TeacherName,C.CourseAddedBy,C.CourseAddedOn,C.CourseUpdatedBy,C.CourseUpdatedOn
      FROM courses AS C 
       INNER JOIN teachers AS T ON  C.CourseTeacherId = T.TeacherId
       WHERE C.CourseStatus = '1'  $courseCond";
        $result=mysqli_query($con,$query);
        if($result){
            $arr1=array();
            $index=0;
            while($row=mysqli_fetch_assoc($result)){
            $arr1[$index]=$row;
            $index++;
         
            }
           
            echo  (json_encode($arr1));
        }
        else{
            echo "Course Not Found";
        }

    }
}


if(isset($_POST['iCategoryId']))
{
    $iCategoryId =  $_POST['iCategoryId'];
    if($iCategoryId != "" )
    {
        FetchCoursesByCategory($iCategoryId);
    }
}

function FetchCoursesByLevel($iCourseLevelId){
    if($iCourseLevelId == "All")
    {
        $CourseLevelCond = "AND  C.CourseLevel IN(1,2,3)";
    }
    else
    {
        $CourseLevelCond = "AND  C.CourseLevel = '$iCourseLevelId'";
    }
    $con=connect();
    if($con){
        $query="SELECT C.CourseId,C.CourseName,
        CASE C.CourseCategoryId 
        WHEN 1 THEN 'Project And  Process Management'
        WHEN 2 THEN 'Digital Marketing'
        WHEN 3 THEN 'Professional And Personal Development'
        WHEN 4 THEN 'Software Tools And IT'
        WHEN 5 THEN 'Finaance And Banking'
        WHEN 6 THEN 'Human Resource Management'
        WHEN 7 THEN 'Leadership And Strategy Management'
        END AS Category,
        C.CourseImg,C.CourseDescription,C.CourseVenue, 
        CASE C.CourseLevel WHEN 0 THEN 'Basic' WHEN 1 THEN 'Intermediate' WHEN 2 THEN  'Advance' END AS CourseLevel,
        DATE_FORMAT(C.CourseDurationStart, '%e %M %Y') AS DurationStartDate,
       DATE_FORMAT(C.CourseDurationEnd, '%e %M %Y') AS DurationEndDate,
        C.EducationPartner,
        CASE C.TrainingType WHEN 0 THEN 'In Person' WHEN 1 THEN 'Online' END AS TrainingType,
        T.TeacherName,C.CourseAddedBy,C.CourseAddedOn,C.CourseUpdatedBy,C.CourseUpdatedOn
      FROM courses AS C 
       INNER JOIN teachers AS T ON  C.CourseTeacherId = T.TeacherId
       WHERE C.CourseStatus = '1' $CourseLevelCond  ";
        $result=mysqli_query($con,$query);
        if($result){
            $arr1=array();
            $index=0;
            while($row=mysqli_fetch_assoc($result)){
            $arr1[$index]=$row;
            $index++;
         
            }
           
            echo  (json_encode($arr1));
        }
        else{
            echo "Course Not Found For This Level";
        }

    }
}
if(isset($_POST['iCourseLevelId']))
{
    $iCourseLevelId =  $_POST['iCourseLevelId'];
    if($iCourseLevelId != "")
    {
        FetchCoursesByLevel($iCourseLevelId);
    }
}


function FetchCoursesByTrainingType($iTrainingTypeId){
    if($iTrainingTypeId == "All")
    {
        $TrainingTypeCond = "AND  C.TrainingType IN(0,1)";
    }
    else
    {
        $TrainingTypeCond = "AND  C.TrainingType = '$iTrainingTypeId'";
    }
    $con=connect();
    if($con){
        $query="SELECT C.CourseId,C.CourseName,
        CASE C.CourseCategoryId 
        WHEN 1 THEN 'Project And  Process Management'
        WHEN 2 THEN 'Digital Marketing'
        WHEN 3 THEN 'Professional And Personal Development'
        WHEN 4 THEN 'Software Tools And IT'
        WHEN 5 THEN 'Finaance And Banking'
        WHEN 6 THEN 'Human Resource Management'
        WHEN 7 THEN 'Leadership And Strategy Management'
        END AS Category,
        C.CourseImg,C.CourseDescription,C.CourseVenue, 
        CASE C.CourseLevel WHEN 0 THEN 'Basic' WHEN 1 THEN 'Intermediate' WHEN 2 THEN  'Advance' END AS CourseLevel,
        DATE_FORMAT(C.CourseDurationStart, '%e %M %Y') AS DurationStartDate,
       DATE_FORMAT(C.CourseDurationEnd, '%e %M %Y') AS DurationEndDate,
        C.EducationPartner,
        CASE C.TrainingType WHEN 0 THEN 'In Person' WHEN 1 THEN 'Online' END AS TrainingType,
        T.TeacherName,C.CourseAddedBy,C.CourseAddedOn,C.CourseUpdatedBy,C.CourseUpdatedOn
      FROM courses AS C 
       INNER JOIN teachers AS T ON  C.CourseTeacherId = T.TeacherId
       WHERE C.CourseStatus = '1' $TrainingTypeCond ";
        $result=mysqli_query($con,$query);
        if($result){
            $arr1=array();
            $index=0;
            while($row=mysqli_fetch_assoc($result)){
            $arr1[$index]=$row;
            $index++;
         
            }
           
            echo  (json_encode($arr1));
        }
        else{
            echo "Course Not Found For This Level";
        }

    }
}
if(isset($_POST['iTrainingTypeId']))
{
    $iTrainingTypeId =  $_POST['iTrainingTypeId'];
    if($iTrainingTypeId != "")
    {
        FetchCoursesByTrainingType($iTrainingTypeId);
    }
}



function SearchCourse($iCourseId){
    $con=connect();
    if($con){
        $query="SELECT C.CourseId,C.CourseName,
        CASE C.CourseCategoryId 
        WHEN 1 THEN 'Project And  Process Management'
        WHEN 2 THEN 'Digital Marketing'
        WHEN 3 THEN 'Professional And Personal Development'
        WHEN 4 THEN 'Software Tools And IT'
        WHEN 5 THEN 'Finaance And Banking'
        WHEN 6 THEN 'Human Resource Management'
        WHEN 7 THEN 'Leadership And Strategy Management'
        END AS Category,
        C.CourseImg,C.CourseDescription,C.CourseVenue, 
        CASE C.CourseLevel WHEN 0 THEN 'Basic' WHEN 1 THEN 'Intermediate' WHEN 2 THEN  'Advance' END AS CourseLevel,
        DATE_FORMAT(C.CourseDurationStart, '%e %M %Y') AS DurationStartDate,
       DATE_FORMAT(C.CourseDurationEnd, '%e %M %Y') AS DurationEndDate,
        C.EducationPartner,
        CASE C.TrainingType WHEN 0 THEN 'In Person' WHEN 1 THEN 'Online' END AS TrainingType,
        T.TeacherName,T.TeacherImg,C.CourseAddedBy,C.CourseAddedOn,C.CourseUpdatedBy,C.CourseUpdatedOn
      FROM courses AS C 
       INNER JOIN teachers AS T ON  C.CourseTeacherId = T.TeacherId
       WHERE C.CourseStatus = '1' AND  C.CourseId = '$iCourseId' ";
        $result=mysqli_query($con,$query);
        if($result){
            $arr1=array();
            $index=0;
            while($row=mysqli_fetch_assoc($result)){
            $arr1[$index]=$row;
            $index++;
         
            }
           
            return ($arr1);
        }
        else{
            echo "Course Not Found";
            return null;
        }

    }
}



function CourseResgistration($CourseId,$StudentPrefix,$FirstName,$LastName,$Email,$JobTitle,$CompanyName,$Country,$CountryCode,$AreaCode,$PhoneNumber,$registrationPlan,$PaymentMethod){
    $con=connect();
    if($con){

        $query = "INSERT INTO `courseenrolled` (
            `CourseId`,`StudentPrefix`,`FirstName`,`LastName`,`Email`,`JobTitle`,`CompanyName`,`Country`,`CountryCode`,`AreaCode`,
            `PhoneNumber`,`registrationPlan`,`PaymentMethod`,`Status`,`AddedBy`,`AddedOn`
          )
          VALUES
            (
              '$CourseId','$StudentPrefix','$FirstName','$LastName','$Email','$JobTitle','$CompanyName',
              '$Country','$CountryCode','$AreaCode','$PhoneNumber','$registrationPlan','$PaymentMethod','1','Admin',CURDATE()
            )";
           
        $result=mysqli_query($con,$query);
        if($result)
        {
            // echo '1';
            echo json_encode(array('status'=>1));
        }
        else
        {
            // echo '0';
            echo json_encode(array('status'=>0));
        }
    }

}


?>