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


function search_Teacher($id){
    $con=connect();
    if($con){
        $query="SELECT * FROM `Teachers` WHERE `TeacherId`=$id";
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
            return null;
        }
    }
}

?>