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


    $Search_user="SELECT  `user_id` FROM `order` WHERE user_id='".$user_id."'";


     $Search_user_run =  mysqli_query($connect, $Search_user);
     $found_user = mysqli_num_rows($Search_user_run);


        if($found_user > 0 ){


                        header("Location: reply.php");



         }else
         {




    @$Project_name=$_POST['Project_name'];
    @$Details=$_POST['Details'];

    @$btn_go=$_POST['btn_go'];





   if(isset($btn_go))
   {

    if($Project_name !='' && $Details !='')
    {
      if (strlen($Details)< 30) 
      {

                  echo "
                              <script>
                                              alert(' you reach the minimum lenght of fields');
                              </script>
                          ";
        
      }else
      {

        $query="INSERT INTO `order`(`Project_name`, `details`, `user_id`) VALUES ('$Project_name','$Details','$user_id')";

        $query_run=mysqli_query($connect,$query);

         if ($query_run) {


                              echo "
                                     <script>
                                                     alert('Thank you , We send our Details after 48 hours ');
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


         }





}else
{

	die("NOT CONNECTED");
}




 ?>