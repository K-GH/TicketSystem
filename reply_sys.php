<?php 



session_start();




if(!isset($_SESSION['user_id'])){
    header('location:login_Reg_system.php');
     exit;
}


$connect=mysqli_connect("localhost", "root", "", "test1");



if($connect)
{

$user_query="SELECT Username ,id FROM user WHERE  id ='".$_SESSION["user_id"]."'";
$user_run=mysqli_query($connect,$user_query);

    while ($row = mysqli_fetch_object($user_run)) {
        $username= $row->Username;
        $user_id=$row->id;
        
    }


    $Search_user="SELECT  `user_id` , `Project_id` FROM `order` WHERE user_id='".$user_id."'";


     $Search_user_run =  mysqli_query($connect, $Search_user);
     $found_user = mysqli_num_rows($Search_user_run);

    $Project_id=mysqli_fetch_object($Search_user_run)->Project_id;

    $search_appro_reg="SELECT  `Project_id` FROM `replay` WHERE  Project_id ='".$Project_id."' AND ( appro_reg='Approve' OR appro_reg='Reject')";

    $Search_appro_reg_run =  mysqli_query($connect, $search_appro_reg);
     $found_appro_reg = mysqli_num_rows($Search_appro_reg_run);

     if($found_appro_reg > 0){

         header('location:waiting.php');
       
     }else{
        if($found_user > 0 ){

                   $Search_reply="SELECT order.Project_name  ,`total_time`, `price` FROM `replay` , `order`  WHERE  replay.Project_id ='".$Project_id."' AND order.Project_id ='".$Project_id."' ";


                  $Search_reply_run =  mysqli_query($connect, $Search_reply);


                     while ($row = mysqli_fetch_object($Search_reply_run)) {
                    $Project_name= $row->Project_name;
                    $total_time= $row->total_time;
                    $price= $row->price;
            
                  }

         }


         @$Approve_btn=$_POST['Approve_btn'];
         @$Reject_btn=$_POST['Reject_btn'];

         if (isset($Approve_btn)) {

           $update_reply="UPDATE `replay` SET `appro_reg`='Approve' WHERE Project_id='".$Project_id."' ";
           $update_reply_run=mysqli_query($connect,$update_reply);
           if ($update_reply) {

             header('location:index.php');
           }

           

         }

         if (isset($Reject_btn)) {

           $update_reply="UPDATE `replay` SET `appro_reg`='Reject' WHERE Project_id='".$Project_id."' ";
           $update_reply_run=mysqli_query($connect,$update_reply);
           if ($update_reply) {
            
             header('location:index.php');
           }

         }

     }



               

        





}else
{

	die("NOT CONNECTED");
}




 ?>