<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

#sidebar{position:relative;margin-top:-20px}
#content{position:relative;margin-left:210px}
@media screen and (max-width: 600px) {
  #content {
    position:relative;margin-left:auto;margin-right:auto;
  }
}
    .custom-button {
        background-color: #f7cac9;
        border: none;
        color: #000000; /* Text color */
        box-shadow: none; /* Remove the 3D effect */
        padding: 5px 10px; 
        border-radius: 10%;
    }

    .custom-button:hover {
        background-color: #e6b3a6; /* Change color on hover if needed */
    }
</style>
</head>

<body style="color:black;" >

  <?php
  include 'conn.php';
    include 'session.php';
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    ?>

<div id="header">
<?php include 'header.php';
?>
</div>
<div id="sidebar">
<?php
$active="dashboard";
include 'sidebar.php'; ?>

</div>
<div id="content">

  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">
          <h1 class="page-title">Dashboard</h1>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#B3CEE5; border-radius:50px">
                  <div class="stat-panel text-center">
                    <?php
                      $sql =" SELECT * from donor_details ";
                      $result=mysqli_query($conn,$sql) or die("query failed.");
                      $row=mysqli_num_rows($result);

                    ?>

                    <div class="stat-panel-number h1"><?php echo $row?></div>
                    <div class="stat-panel-title text-uppercase">Donors List</div>
                    <br>
                      <button class="custom-button" onclick="window.location.href = 'donor_list.php';">
                        Show <i class="fa fa-arrow-right"></i>
                      </button>

                  </div>
                </div>

              </div>
            </div>

            <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#B3CEE5;border-radius:50px;">
                  <div class="stat-panel text-center">
                    <?php
                      $sql1 =" SELECT * from contact_query ";
                      $result1=mysqli_query($conn,$sql1) or die("query failed.");
                      $row1=mysqli_num_rows($result1);

                    ?>

                    <div class="stat-panel-number h1 "><?php echo $row1?></div>
                    <div class="stat-panel-title text-uppercase"> User Queries </div>
                    <br>
                    <button class="custom-button" onclick="window.location.href = 'query.php';">
                      Show <i class="fa fa-arrow-right"></i>
                    </button>
                    
                  </div>
                </div>

              </div>
            </div>

            
            <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#B3CEE5;border-radius:50px;">
                  <div class="stat-panel text-center">
                    <?php
                      $sql1 =" SELECT * from blood_requests ";
                      $result1=mysqli_query($conn,$sql1) or die("query failed.");
                      $row1=mysqli_num_rows($result1);

                    ?>

                    <div class="stat-panel-number h1 "><?php echo $row1?></div>
                    <div class="stat-panel-title text-uppercase"> Blood Requests </div>
                    <br>
                    <button class="custom-button" onclick="window.location.href = 'requests.php';">
                      Show <i class="fa fa-arrow-right"></i>
                    </button>
                    
                  </div>
                </div>

              </div>
            </div>


        </div>
      </div>
    </div>
  <?php
 } else {
     echo '<div class="alert alert-danger"><b> Please Login First To Access Admin Portal.</b></div>';
     ?>
     <form method="post" name="" action="login.php" class="form-horizontal">
       <div class="form-group">
         <div class="col-sm-8 col-sm-offset-4" style="float:left">

           <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
         </div>
       </div>
     </form>
 <?php }
  ?>

</body>
</html>
