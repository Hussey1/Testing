<?php
require('config.php');


/*----Login----Register Section-------*/

if(isset($_POST['btn-register'])){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $query="INSERT INTO `people`(`name`,`username`,`password`) VALUES ('$name','$username','$password')";
    $result=mysqli_query($conn,$query);
    if($result){
        header('Location:login.php');
    }
}






/*----View Section----*/

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $studentid=$_POST['studentid'];
    $name=$_POST['name'];
    $bio=$_POST['bio'];
    $phy=$_POST['phy'];
    $chem=$_POST['chem'];
    
    if($id==""){
        $query="INSERT INTO `marks`(`studentid`,`name`,`bio`,`phy`,`chem`) VALUES('$studentid','$name','$bio','$phy','$chem')";
        $result=mysqli_query($conn,$query);
    
        if($result){
            header('Location:view.php');
        }
        
    }else{
        $query="UPDATE `marks` SET `studentid`='$studentid',`name`='$name',`bio`='$bio',`phy`='$phy',`chem`='$chem' WHERE `id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result){
            header('Location:view.php');
        }
    }
    
   
    
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $query="DELETE FROM `marks` WHERE `id`='$id'";
    $result=mysqli_query($conn,$query);
    if($result){
        header('Location:view.php');
    }
}




?>