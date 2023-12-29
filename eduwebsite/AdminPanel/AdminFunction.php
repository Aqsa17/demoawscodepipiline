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

function AddBlog($BlogName,$BlogDescription,$BlogImg,$BlogStatus){
    $con=connect();
    if($con){

        $query = "INSERT INTO `blogs` (`BlogName`,`BlogDescription`,`BlogImg`,`BlogStatus`)
          VALUES('$BlogName','$BlogDescription','$BlogImg','$BlogStatus')"; 
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


if(isset($_POST["saveblog"]) == "saveblog")
{
if(!empty($_POST['BlogTitle'] || $_POST['BlogDescription'] || $_FILES["BlogFile"] || $_POST['BlogStatus'] ))
{
    $BlogTitle = $_POST['BlogTitle'];
    $BlogDescription = $_POST['BlogDescription'];
    $BlogFilename= $_FILES["BlogFile"]["name"];
    $BlogFileTmpname = $_FILES["BlogFile"]["tmp_name"];
    $BlogStatus = $_POST['BlogStatus'];
    $fileuploadstatus = move_uploaded_file( $BlogFileTmpname, "../img/BlogsImg/" . $BlogFilename);
    if($fileuploadstatus)
    {
        AddBlog($BlogTitle,$BlogDescription,$BlogFilename,$BlogStatus);
    }
}
}

function RemoveBlog($BlogId){
    $con=connect();
    if($con){
        $query="DELETE FROM `Blogs` WHERE `BlogId`=$BlogId";
        $result=mysqli_query($con,$query);
        if($result){
            echo json_encode(array('status'=>200));
        }
        else{
            echo json_encode(array('status'=>201));
        }
    }
}

if(isset($_POST['BlogId']))
{
    $BlogId=$_POST['BlogId'];
    $BlogImg=$_POST['BlogImg'];
    $folderPath = '../img/BlogsImg/';
    if (file_exists($folderPath . $BlogImg)) 
    {
    unlink($folderPath . $BlogImg);
    }
    RemoveBlog($BlogId); 
}
  


function RemoveTeacher($TeacherId){
    $con=connect();
    if($con){
        $query="DELETE FROM `teachers` WHERE `TeacherId`=$TeacherId";
        $result=mysqli_query($con,$query);
        if($result){
            echo json_encode(array('status'=>200));
        }
        else{
            echo json_encode(array('status'=>201));
        }
    }
}

if(isset($_POST['Teacherid']))
{
    $TeacherId=$_POST['Teacherid'];
    $teacherImg=$_POST['Teacherimg'];
    $folderPath = '../img/TeachersImg/';
    if (file_exists($folderPath . $teacherImg)) 
    {
    unlink($folderPath . $teacherImg);
    }
    RemoveTeacher($TeacherId); 
}



function AddTeacher($TeacherName,$TeacherSummary,$TeacherAddress,$TeacherImg,$TeacherEmail,$TeacherPhone,$TeacherFax,$TeacherStatus){
    $con=connect();
    if($con){

        $query ="INSERT INTO `teachers` (`TeacherName`,`TeacherSummary`,`TeacherAddress`,`TeacherImg`,`TeacherEmail`,
            `TeacherPhone`,`TeacherFax`,`TeacherStatus`,`AddedBy`, `AddedOn`)
          VALUES('$TeacherName','$TeacherSummary','$TeacherAddress','$TeacherImg',
            '$TeacherEmail','$TeacherPhone','$TeacherFax','$TeacherStatus','Admin',CURDATE()
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
if(isset($_POST["saveteacher"]) == "saveteacher")
{
    if(!empty($_POST['TeacherName'] || $_POST['TeacherSummarry'] || $_FILES["TeacherAddress"] || $_POST['TeacherEmail']  || $_POST['TeacherFile'] || $_POST['TeacherFax'] || $_POST['TeacherPhone'] || $_POST['TeacherStatus'] ))
    {
        $TeacherName = $_POST['TeacherName'];
        $TeacherSummarry = $_POST['TeacherSummarry'];
        $TeacherAddress = $_POST['TeacherAddress'];
        $TeacherEmail = $_POST['TeacherEmail'];
        $TeacherPhone = $_POST['TeacherPhone'];
        $TeacherFax = $_POST['TeacherFax'];
        $TeacherFilename= $_FILES["TeacherFile"]["name"];
        $TeacherFiletmpname = $_FILES["TeacherFile"]["tmp_name"];
        $TeacherStatus = $_POST['TeacherStatus'];
        $fileuploadstatus = move_uploaded_file( $TeacherFiletmpname, "../img/TeachersImg/" . $TeacherFilename);
        if($fileuploadstatus)
        {
            AddTeacher($TeacherName,$TeacherSummarry,$TeacherAddress,$TeacherFilename,$TeacherEmail,$TeacherPhone,$TeacherFax,$TeacherStatus);
    
        }
    }
}
function RemoveCourse($CourseId){
    $con=connect();
    if($con){
        $query="DELETE FROM `courses` WHERE `CourseId`=$CourseId";
        $result=mysqli_query($con,$query);
        if($result){
            echo json_encode(array('status'=>200));
        }
        else{
            echo json_encode(array('status'=>201));
        }
    }
}

if(isset($_POST['CourseId']))
{
    $CourseId=$_POST['CourseId'];
    $CourseImg=$_POST['CourseImg'];
    $folderPath = '../img/CourseImg/';
    if (file_exists($folderPath . $CourseImg)) 
    {
    unlink($folderPath . $CourseImg);
    }
    RemoveCourse($CourseId); 
}




function AddCourse($CourseName,$CourseCategoryId,$CourseImg,$CourseDescription,$CourseVenue,$CourseLevel,$CourseDurationStart,$CourseDurationEnd,$EducationPartner,$TrainingType,$CourseTeacherId,$CourseStatus){
    $con=connect();
    if($con){
        // CURDATE()

        $query ="INSERT INTO `courses` (`CourseName`,`CourseCategoryId`, `CourseImg`,`CourseDescription`,`CourseVenue`, `CourseLevel`,`CourseDurationStart`,
            `CourseDurationEnd`,`EducationPartner`,`TrainingType`, `CourseTeacherId`, `CourseStatus`,`CourseAddedBy`,`CourseAddedOn`
          )
          VALUES
            ('$CourseName','$CourseCategoryId','$CourseImg','$CourseDescription','$CourseVenue','$CourseLevel','$CourseDurationStart',
              '$CourseDurationEnd', '$EducationPartner','$TrainingType','$CourseTeacherId','$CourseStatus','Admin',CURDATE()   
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
if(isset($_POST["savecourse"]) == "savecourse")
{
    if(!empty($_POST['CourseName'] || $_POST['Category'] || $_FILES["CourseDescription"] || $_POST['Coursevenue']  || $_POST['CourseFile'] || $_POST['CourseLevel'] || $_POST['StartDate'] || $_POST['EndDate']|| $_POST['EducationPrtner'] || $_POST['TrainingType']|| $_POST['CourseStatus']))
    {
        $CourseName = $_POST['CourseName'];
        $CourseCategoryId = $_POST['Category'];
        $CourseDescription = $_POST['CourseDescription'];
        $CourseVenue = $_POST['Coursevenue'];
        $CourseLevel = $_POST['CourseLevel'];
        $CourseDurationStart = $_POST['StartDate'];
        $CourseDurationEnd = $_POST['EndDate'];
        $EducationPartner = $_POST['EducationPrtner'];
        $TrainingType = $_POST['TrainingType'];
        $CourseTeacherId = $_POST['Teacher'];
        $CourseImg = $_FILES["CourseFile"]["name"];
        $CourseImgTmpName = $_FILES["CourseFile"]["tmp_name"];
        $CourseStatus = $_POST['CourseStatus'];
        $fileuploadstatus = move_uploaded_file( $CourseImgTmpName, "../img/CourseImg/" . $CourseImg);
        if($fileuploadstatus)
        {
        AddCourse($CourseName,$CourseCategoryId,$CourseImg,$CourseDescription,$CourseVenue,$CourseLevel,$CourseDurationStart,$CourseDurationEnd,$EducationPartner,$TrainingType,$CourseTeacherId,$CourseStatus);
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

        //    echo json_encode(array('status',1));
           echo json_encode($aBlogs); 

        }
        else{
           echo json_encode(array('status',0)); 
        }
    }
}


if(isset($_POST['Action'])=="SearchBlog" && $_POST['blog_Id']!="" )
{
   $BlogId = $_POST['blog_Id'];
search_Blog($BlogId);
}


function UpdateBlog($BlogName,$BlogDescription,$BlogImg,$BlogStatus,$BlogId){
    $con=connect();
    if($con){

        $query = "UPDATE `blogs`SET  `BlogName` = '$BlogName',
        `BlogDescription` = '$BlogDescription',`BlogImg` = '$BlogImg',`BlogStatus` = '$BlogStatus',
        `BlogUpdatedOn` = CURDATE() WHERE `BlogId` = '$BlogId' "; 
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
if(isset($_POST['EditAction']) == "blogsEdit")
{
    if(!empty($_POST['BlogTitle'] || $_POST['BlogDescription'] || $_FILES["BlogFile"] || $_POST['BlogStatus'] ))
    {
        $Blog_Id = $_POST['Blog_Id'];
        $BlogTitle = $_POST['BlogTitle'];
        $BlogDescription = $_POST['BlogDescription'];
        $BlogFilename= $_FILES["BlogFile"]["name"];
        $BlogFileTmpname = $_FILES["BlogFile"]["tmp_name"];
        $BlogStatus = $_POST['BlogStatus'];
        
        if($BlogFilename=='')
        {
            $BlogFilename = $_POST['updatedBlogImg'];
        }
        else if($BlogFilename !="")
        {
            $BlogFilename = $_POST['updatedBlogImg'];
            $newFilePath = "../img/BlogsImg/" . $BlogFilename;


            if(file_exists($newFilePath))
            {
                unlink($newFilePath);
            }
        }
        $fileuploadstatus = move_uploaded_file( $BlogFileTmpname, "../img/BlogsImg/" . $BlogFilename);
        UpdateBlog($BlogTitle,$BlogDescription,$BlogFilename,$BlogStatus,$Blog_Id);
        
    }
}




function search_Teacher($Teacher_Id){
    $con=connect();
    if($con){
        $query="SELECT * FROM `Teachers` WHERE `TeacherId`= $Teacher_Id";
        $result=mysqli_query($con,$query);
        if($result){
       $aTeacherDate=array();
       $index=0;
           while($row=mysqli_fetch_assoc($result)){
            $aTeacherDate[$index]=$row;
            $index++;   
           }

        //    echo json_encode(array('status',1));
           echo json_encode($aTeacherDate); 

        }
        else{
           echo json_encode(array('status',0)); 
        }
    }
}


if(isset($_POST['SearchTeacherAction'])=="SearchTeacher" && $_POST['Teacher_Id']!="" )
{
   $Teacher_Id = $_POST['Teacher_Id'];
    search_Teacher($Teacher_Id);
}

function UpdateTeacher($TeacherName,$TeacherSummary,$TeacherAddress,$TeacherImg,$TeacherEmail,$TeacherPhone,$TeacherFax,$TeacherStatus,$TeacherId){
    $con=connect();
    if($con){

        $query ="UPDATE `teachers` SET  `TeacherName` = '$TeacherName',
        `TeacherSummary` = '$TeacherSummary',`TeacherAddress` = '$TeacherAddress',`TeacherImg` = '$TeacherImg',
        `TeacherEmail` = '$TeacherEmail',`TeacherPhone` = '$TeacherPhone',`TeacherFax` = '$TeacherFax',
        `TeacherStatus` = '$TeacherStatus',`UpdatedBy` = 'Admin',`UpdatedOn` = CURDATE()
        WHERE `TeacherId` = '$TeacherId'"; 
            
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

if(isset($_POST['EditTeacheraction']) == "UpdateTeacher")
{
    if(!empty($_POST['Teacher_Id'] || $_POST['TeacherName'] || $_POST['TeacherSummarry'] || $_FILES["TeacherAddress"] || $_POST['TeacherEmail']  || $_POST['TeacherFile'] || $_POST['TeacherFax'] || $_POST['TeacherPhone'] || $_POST['TeacherStatus'] ))
    {
        $TeacherName = $_POST['TeacherName'];
        $Teacher_Id = $_POST['Teacher_Id'];
        $TeacherSummarry = $_POST['TeacherSummarry'];
        $TeacherAddress = $_POST['TeacherAddress'];
        $TeacherEmail = $_POST['TeacherEmail'];
        $TeacherPhone = $_POST['TeacherPhone'];
        $TeacherFax = $_POST['TeacherFax'];
        $TeacherFilename= $_FILES["TeacherFile"]["name"];
        $TeacherFiletmpname = $_FILES["TeacherFile"]["tmp_name"];
        $TeacherStatus = $_POST['TeacherStatus'];
        if($TeacherFilename=='')
        {
            $TeacherFilename = $_POST['updatedTeacherImg'];
        }
        else if($TeacherFilename !="")
        {
            $TeacherFilename = $_POST['updatedTeacherImg'];
            $newFilePath = "../img/TeachersImg/" . $TeacherFilename;


            if(file_exists($newFilePath))
            {
                unlink($newFilePath);
            }
        }
        $fileuploadstatus = move_uploaded_file( $TeacherFiletmpname, "../img/TeachersImg/" . $TeacherFilename);
        UpdateTeacher($TeacherName,$TeacherSummarry,$TeacherAddress,$TeacherFilename,$TeacherEmail,$TeacherPhone,$TeacherFax,$TeacherStatus,$Teacher_Id );
    
        
    } 
}



function search_course($Course_Id){
    $con=connect();
    if($con){
        $query="SELECT * FROM `courses` WHERE `CourseId`= $Course_Id";
        $result=mysqli_query($con,$query);
        if($result){
       $aCourseDate=array();
       $index=0;
           while($row=mysqli_fetch_assoc($result)){
            $aCourseDate[$index]=$row;
            $index++;   
           }

        //    echo json_encode(array('status',1));
           echo json_encode($aCourseDate); 

        }
        else{
           echo json_encode(array('status',0)); 
        }
    }
}


if(isset($_POST['SearchCourseAction'])=="SearchCourse" && $_POST['Course_Id']!="" )
{
   $Course_Id = $_POST['Course_Id'];
    search_course($Course_Id);
}


function UpdateCourse($CourseName,$CourseCategoryId,$CourseImg,$CourseDescription,$CourseVenue,$CourseLevel,$CourseDurationStart,$CourseDurationEnd,$EducationPartner,$TrainingType,$CourseTeacherId,$CourseStatus,$CourseId){
    $con=connect();
    if($con){

        $query = "UPDATE `courses` SET `CourseName` = '$CourseName',
        `CourseCategoryId` = '$CourseCategoryId',`CourseImg` = '$CourseImg',`CourseDescription` = \"$CourseDescription\",
        `CourseVenue` = '$CourseVenue',`CourseLevel` = '$CourseLevel',`CourseDurationStart` = '$CourseDurationStart',
        `CourseDurationEnd` = '$CourseDurationEnd', `EducationPartner` = '$EducationPartner',`TrainingType` = '$TrainingType',
        `CourseTeacherId` = '$CourseTeacherId',`CourseStatus` = '$CourseStatus',`CourseUpdatedBy` = 'Admin',
        `CourseUpdatedOn` = CURDATE() WHERE `CourseId` = '$CourseId' ";            
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

if(isset($_POST['courseeditaction']) == "UpdateCourse")
{
   

    if(!empty($_POST['Course_Id'] || $_POST['CourseName'] || $_POST['Category'] || $_FILES["CourseDescription"] || $_POST['Coursevenue']  || $_POST['CourseFile'] || $_POST['CourseLevel'] || $_POST['StartDate'] || $_POST['EndDate']|| $_POST['EducationPrtner'] || $_POST['TrainingType']|| $_POST['CourseStatus']))
    {
       
        $CourseName = $_POST['CourseName'];
        $Course_Id = $_POST['Course_Id'];
        $CourseCategoryId = $_POST['Category'];
        $CourseDescription = $_POST['CourseDescription'];
        $CourseVenue = $_POST['Coursevenue'];
        $CourseLevel = $_POST['CourseLevel'];
        $CourseDurationStart = $_POST['StartDate'];
        $CourseDurationEnd = $_POST['EndDate'];
        $EducationPartner = $_POST['EducationPrtner'];
        $TrainingType = $_POST['TrainingType'];
        $CourseTeacherId = $_POST['Teacher'];
        $CourseImg = $_FILES["CourseFile"]["name"];
        $CourseImgTmpName = $_FILES["CourseFile"]["tmp_name"];
        $CourseStatus = $_POST['CourseStatus'];
        if($CourseImg=='')
        {
            $CourseImg=$_POST['updatedCourseImg'];
        }
        else if($CourseImg !="")
        {
            $CourseImg = $_POST['updatedCourseImg'];
            $newFilePath = "../img/CourseImg/" . $CourseImg;
            if(file_exists($newFilePath))
            {
                unlink($newFilePath);
            }
        }
      
        $fileuploadstatus = move_uploaded_file( $CourseImgTmpName, "../img/CourseImg/" . $CourseImg);
        UpdateCourse($CourseName,$CourseCategoryId,$CourseImg,$CourseDescription,$CourseVenue,$CourseLevel,$CourseDurationStart,$CourseDurationEnd,$EducationPartner,$TrainingType,$CourseTeacherId,$CourseStatus,$Course_Id);  
    
    } 
}



function FetchEnrolledStudent($iCourseId){
    $CourseCondition = "";
   
    if($iCourseId != "")
    {
        $CourseCondition = "WHERE CE.CourseId = '$iCourseId'";
        $josnencode = "json_encode";
    }
    $con=connect();
    if($con){
        $query="SELECT CE.*,CASE PaymentMethod WHEN 1 THEN 'Invoice' WHEN 2 THEN 'Credit Card' END AS PaymentMethod , C.CourseId,C.CourseName
        FROM courseenrolled AS CE  
        INNER JOIN courses AS C ON  CE.CourseId = C.CourseId  $CourseCondition";
            $result=mysqli_query($con,$query);
            if($result){
                $arr1=array();
                $index=0;
                while($row=mysqli_fetch_assoc($result)){
                $arr1[$index]=$row;
                $index++;
            
                }
                if($iCourseId !="")
                {
                    echo json_encode($arr1);

                }
                    return($arr1);
            
            }
            else{
                echo "Enrolled Not Found";
                // return null;
            }

    }
}



function FetchCourse(){

    $con=connect();
    if($con){
        $query="SELECT C.CourseId,C.CourseName FROM courses AS C
         WHERE C.CourseStatus = '1'"  ;
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
if(isset($_POST['FetchEnrolledBy'])=='Course')
{
    $iCourseId = $_POST['CourseID']; 
     FetchEnrolledStudent($iCourseId);
}

?>