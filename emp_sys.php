<?php 


session_start();




if(!isset($_SESSION['emp_id'])){
    header('location:login_Reg_system.php');
     exit;
}



$connect=mysqli_connect("localhost", "root", "", "test1");



if($connect)
{

$emp_query="SELECT `emp_id`, `emp_name` FROM `emp` WHERE  emp_id ='".$_SESSION["emp_id"]."'";
$emp_run=mysqli_query($connect,$emp_query);

    while ($row = mysqli_fetch_object($emp_run)) {
        $emp_name= $row->emp_name;
        $emp_id=$row->emp_id;
        
    }




    @$Project_id=$_POST['project_id'];
    @$total_time=$_POST['total_time'];
    @$price=$_POST['price'];

    @$btn_submit=$_POST['btn_submit'];





   if(isset($btn_submit))
   {

   	if($Project_id !='' && $total_time !='' && $price !='')
   	{


   		$search_project="SELECT  `Project_id` FROM `order` WHERE `confirm` = 'yes' AND `Project_id`='".$Project_id."'";


       $Search_project_run =  mysqli_query($connect, $search_project);
       $found_project = mysqli_num_rows($Search_project_run);


        if($found_project > 0 ){


                              echo "
                                     <script>
                                                     alert('Sorry , You Reply This Project Before ');
                                     </script>
                                 ";



         }else
         {

          $insert_replay="INSERT INTO `replay`(`Project_id`, `total_time`, `price`,`emp_id`) VALUES ('$Project_id','$total_time','$price' , '$emp_id')";
          $update_order="UPDATE `order` SET `confirm`='Yes' WHERE Project_id='".$Project_id."' ";

          $insert_replay_run=mysqli_query($connect,$insert_replay);
          $update_order_run=mysqli_query($connect,$update_order);


          if ($insert_replay_run && $update_order_run) {


                              echo "
                                     <script>
                                                     alert('Sent ');
                                     </script>
                                 ";

                          } 


         }

   			

   		





   	}else
   	{


   		  echo "
                      <script>
                                      alert('Empty fields.');
                      </script>
                  ";

   	}

   }





}else
{

	die("NOT CONNECTED");
}







 ?>