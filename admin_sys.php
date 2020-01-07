<?php 


session_start();




if(!isset($_SESSION['admin_id'])){
    header('location:login_Reg_system.php');
     exit;
}



$connect=mysqli_connect("localhost", "root", "", "test1");



if($connect)
{

$admin_query="SELECT `admin_id`, `admin_name` FROM `admin` WHERE  admin_id ='".$_SESSION["admin_id"]."'";
$admin_run=mysqli_query($connect,$admin_query);

    while ($row = mysqli_fetch_object($admin_run)) {
        $admin_name= $row->admin_name;
        $admin_id=$row->admin_id;
        
    }







}else
{

	die("NOT CONNECTED");
}







 ?>