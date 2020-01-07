    <?php 

    include "reply_sys.php";
     ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ticket System</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->

                <!-- Favicon and touch icons -->
                <link rel="shortcut icon" href="assets/ico/favicon.png">
                <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
                <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
                <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

            </head>

            <body>


<div  align="right">

  <a href="Logout.php" class="btn btn-info btn-lg" >
       <span class="glyphicon glyphicon-log-out" ></span> Log out
   </a>
    
</div>

                  <h1 >Welcome Back <strong><?php echo $username; ?> </strong> </h1>
                  <br> 
                  <br> 


              <div align="left">
                 

                   <h1 ><strong>We</strong>  hope , this  <strong>Deal</strong> is matched with <strong>You</strong> :  </h1>

                   <br> 

                  <h1 ><strong>1-</strong> Project Name : <strong><?php echo $Project_name; ?> </strong> </h1>
                    <h1 ><strong>2-</strong> Total Time Of Project :  <strong><?php echo $total_time; ?> </strong> </h1>
                      <h1 > <strong>3-</strong> Price :  <strong><?php echo $price; ?> </strong> </h1>
                      <h1 >   <strong>4-</strong>Sample   <strong>Design : </strong>   <img src="design.jpg" alt="HTML5 Icon" style="width:250px;height:200px;"> </h1>
                      
 

              </div>

                 <form method="POST">
                    <div align="centre">
         
                       <button  style="padding: 50px 20px;" type="submit" name="Approve_btn" > Approve</button>
                        <button style="padding: 50px 20px;" type="submit" name="Reject_btn" > Reject</button>
       

                 </div>
                     

                 </form>

                 <br> 



            <!-- Footer -->


            <!-- Javascript -->
            <script src="assets/js/jquery-1.11.1.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/js/jquery.backstretch.min.js"></script>
            <script src="assets/js/scripts.js"></script>
            
            <!--[if lt IE 10]>
                <script src="assets/js/placeholder.js"></script>
                <![endif]-->

            </body>

            </html>