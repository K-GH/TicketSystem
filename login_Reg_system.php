<?php
session_start();
  

$connect = mysqli_connect("localhost", "root", "", "test1");



    if($connect) {


        @$Username = $_POST['Username'];
        @$Password = $_POST['Password'];

          @$username_reg = $_POST['username_reg'];
         @$password_reg = $_POST['password_reg'];
        @$repassword_reg = $_POST['repassword_reg'];
         @$email_reg = $_POST['email_reg'];




        @$btn_log =$_POST['Login_button'];
        @$btn_reg=$_POST['register_button'];

        if(isset($btn_log)){

            if($Username != '' && $Password != ''){

                $user_query = "SELECT id FROM User WHERE `Username`='$Username' AND `Password`='$Password'";
                $emp_query= "SELECT `emp_id` FROM `emp` WHERE emp_name='$Username' AND password='$Password'";
                $admin_query= "SELECT admin_id FROM admin WHERE `admin_name`='$Username' AND `password`='$Password'";

                $query_user_run =        mysqli_query($connect, $user_query);
                $query_emp_run =        mysqli_query($connect, $emp_query);
                 $query_admin_run =        mysqli_query($connect, $admin_query);

                if($query_user_run  || $query_emp_run || $query_admin_run ){


                    $found_user = mysqli_num_rows($query_user_run);
                    $found_emp = mysqli_num_rows($query_emp_run);
                    $found_admin = mysqli_num_rows($query_admin_run);


                    if($found_user > 0 ){



                     echo "
                            <script>
                                            alert('Logged in successfully.');
                            </script>
                        ";

                          



                       $_SESSION["user_id"] = mysqli_fetch_object($query_user_run)->id;




                        header("Location: order.php");





                    } elseif ($found_emp > 0 ) {




                     echo "
                            <script>
                                            alert('Logged in successfully.');
                            </script>
                        ";



                       $_SESSION["emp_id"] = mysqli_fetch_object($query_emp_run)->emp_id;



                        header("Location: emp.php");




                       
                    }elseif ($found_admin > 0 ) {




                     echo "
                            <script>
                                            alert('Logged in successfully.');
                            </script>
                        ";



                       $_SESSION["admin_id"] = mysqli_fetch_object($query_admin_run)->admin_id;



                        header("Location: admin.php");




                       
                    }else{
                        echo "
                            <script>
                                            alert('Wrong username or password.');
                            </script>
                        ";
                    }
                }

            }else{
                echo "
                    <script>
                                    alert('Empty fields.');
                    </script>
                ";
            }
        }


        
    if (isset($btn_reg)) {

          if ($username_reg != '' && $password_reg != '' && $repassword_reg != '' && $email_reg != '' ) {


              if(strlen($username_reg)>15 || strlen($password_reg)>12 || strlen($email_reg)>25 )
              {


                  echo "
                              <script>
                                              alert(' you reach the maximum lenght of fields');
                              </script>
                          ";

              }else {

                  if ($password_reg === $repassword_reg) {

                      $search = "SELECT `username` FROM `user` WHERE `username`='$username_reg' OR  `Email`='$email_reg' ";

                      $search_run = mysqli_query($connect, $search);


                      if (mysqli_num_rows($search_run) > 0) {


                          echo "
                              <script>
                                              alert(' Username OR E-mail already exists');
                              </script>
                          ";

                      } else {


                          $query = "INSERT INTO user (Username,Email,Password) VALUES ('$username_reg','$email_reg','$password_reg')";

                          $query_run = mysqli_query($connect, $query);

                          if ($query_run) {


                              

                              //header("Location: index.php");


                              echo "
                                     <script>
                                                     alert('YOUR REGISTRATION IS COMPLETEDs...' + 'PLEASE SIGN IN');
                                     </script>
                                 ";

                          } else {
                              echo "
                                     <script>
                                                     alert('YOUR  not REGISTRATION IS COMPLETED...');
                                     </script>
                                 ";

                          }


                      }


                  } else {

                      echo "
                              <script>
                                              alert('password wrong ');
                              </script>
                          ";


                  }


              }
              } else {
              echo "
                      <script>
                                      alert('Empty fields.');
                      </script>
                  ";
          }
      }







    }else
        die("NOT CONNECTED");
?>