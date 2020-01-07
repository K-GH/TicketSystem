<<?php
    include "emp_sys.php";
  ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from template.themespond.com/suiren/hotel-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2016 20:45:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ticket System</title>
    <link href="https://fonts.googleapis.com/css?family=Patua+One%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRoboto+Slab:100,300,400,700Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendors/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/vendors/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendors/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/vendors/owl.theme.green.min.css">
    <link rel="stylesheet" href="assets/css/vendors/animate.min.css">
    <link rel="stylesheet" href="assets/css/vendors/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/common/main.css">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js"></script>


</head>

<body>

<div  align="right">

  <a href="Logout.php" class="btn btn-info btn-lg" >
       <span class="glyphicon glyphicon-log-out" ></span> Log out
   </a>
    
</div>


                <h1 align="center" >Welcome  <?php echo $emp_name; ?>  </h1>
                <h1> </h1>

   <br />

   <h1 align="center">Orders</h1>
   <br />


   <div class="table-responsive">
    <table id="Order_data" class="table table-bordered table-striped">
     <thead>
         <tr>
             <th data-column-id="Username"  > Username </th>
             <th data-column-id="Project_id">Project ID  </th>
             <th data-column-id="Project_name">Project Name  </th>
             <th data-column-id="details" > Details </th>
             <th data-column-id="confirm"> Employee Confirm </th>
             <th data-column-id="date"> Order Date </th>



         </tr>
     </thead>
 </table>
</div>



   <h1 align="center">Replay</h1>
   <br />


<div align="center">
    


    <form method="POST">

    <div class="form-group">

       <input type="text" name="project_id" placeholder="Project ID...">


   </div>
   <div class="form-group">

       <input type="text" name="total_time" placeholder="total time...">


   </div>
   <div class="form-group">

       <input type="text" name="price" placeholder="Price...">


   </div>





<button type="submit" name="btn_submit" > Submit</button>




</form>
</div>

   <br />


<!-- Footer -->


<!-- Javascript -->

<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>

            <!--[if lt IE 10]>
                <script src="assets/js/placeholder.js"></script>
                <![endif]-->

            </body>

            </html>


            <script type="text/javascript" language="javascript" >





                var OrderTable = $('#Order_data').bootgrid({
                    ajax: true,
                    rowSelect: true,
                    post: function()
                    {
                        return{
                            id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
                        };
                    },
                    url: "emp_order_fetch.php",
                    formatters: {
                        "commands": function(column, row)
                        {
                            return "<button type='button' class='btn btn-warning btn-xs update' data-row-id='"+row.id+
                            "'>Edit</button>" +
                            "&nbsp; <button type='button' class='btn btn-danger btn-xs delete' data-row-id='"+row.id+"'>Delete</button>";
                        }
                    }
                });

       // document.getElementById( '#id' ).style.display = 'none';


       


       window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}


</script>






