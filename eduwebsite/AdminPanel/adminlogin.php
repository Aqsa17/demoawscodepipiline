<?php
include('../Dbfunctions/Blogfunction.php');
session_start();
$con=connect();
if($con){
    $UserName=$_POST['UserName'];
    $UserPassword=$_POST['UserPassword'];

  
   
        $query="SELECT * FROM `users` WHERE UserStatus = '1' ";
        $result=mysqli_query($con,$query);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                if($row['UserName']==$UserName && $row['UserPassword']==$UserPassword){
                  
                    $_SESSION['admin']=$row;
                    // header('Location:admin_dashboard.php');
                     echo json_encode(array('statuscode'=>200,'status'=>'Active'));

                }
                else{
                    // // echo "<script>document.getElementById('err').innerText</script>";
                    // header('Location:index.php');
                    
                     echo json_encode(array('statuscode'=>201,'status'=>'not active'));
                  
                }
            }
        }
    }
?>