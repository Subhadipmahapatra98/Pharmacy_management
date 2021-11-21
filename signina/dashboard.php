<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
<?php 
session_start();
$staff_id = $_SESSION['staff_id'];
$password = $_SESSION['password'];
$con=mysqli_connect('localhost','root','','pharmacy');
  $query="select last_name from verify where id='$staff_id'";
  $res=mysqli_query($con,$query);
  while($row = mysqli_fetch_array($res)) {
    $name = $row['last_name'];
  }
  $dol=date("Y-m-j");
  $tol=date("h:i:s");
  $query1="insert into signina(staff_id,password,dol,tol) values ('$staff_id','$password','$dol','$tol')";
  mysqli_query($con,$query1);
 
 ?>
 <script type="text/javascript">
  function order() 
       {
    document.getElementById("appointment").style.display = "none";
    document.getElementById("table1").style.display = "block";
    document.getElementById("signinc").style.display = "none";
    document.getElementById("signins").style.display = "none";
    document.getElementById("signup").style.display = "none";
    document.getElementById("verify").style.display = "none";

    }
  function appointment() 
       {
    document.getElementById("appointment").style.display = "block";
    document.getElementById("table1").style.display = "none";
    document.getElementById("signinc").style.display = "none";
    document.getElementById("signins").style.display = "none";
    document.getElementById("signup").style.display = "none";
    document.getElementById("verify").style.display = "none";

    }
    function loadnow() {
    document.getElementById("dashboard").style.display = "block";
    document.getElementById("appointment").style.display = "none";
    document.getElementById("table1").style.display = "none";
    document.getElementById("signinc").style.display = "none";
    document.getElementById("signins").style.display = "none";
    document.getElementById("signup").style.display = "none";
    document.getElementById("verify").style.display = "none";

    }
    function signinc()
    {
    document.getElementById("appointment").style.display = "none";
    document.getElementById("table1").style.display = "none";
    document.getElementById("signinc").style.display = "block";
    document.getElementById("signins").style.display = "none";
    document.getElementById("signup").style.display = "none";
    document.getElementById("verify").style.display = "none";
    }
    function signins()
    {
    document.getElementById("appointment").style.display = "none";
    document.getElementById("table1").style.display = "none";
    document.getElementById("signinc").style.display = "none";
    document.getElementById("signins").style.display = "block";
    document.getElementById("signup").style.display = "none";
    document.getElementById("verify").style.display = "none";
    }
    function signup()
    {
    document.getElementById("appointment").style.display = "none";
    document.getElementById("table1").style.display = "none";
    document.getElementById("signinc").style.display = "none";
    document.getElementById("signins").style.display = "none";
    document.getElementById("signup").style.display = "block";
    document.getElementById("verify").style.display = "none";
    }
    function verify()
    {
    document.getElementById("appointment").style.display = "none";
    document.getElementById("table1").style.display = "none";
    document.getElementById("signinc").style.display = "none";
    document.getElementById("signins").style.display = "none";
    document.getElementById("signup").style.display = "none";
    document.getElementById("verify").style.display = "block";
    }


 </script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
   
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>
  <body onload="loadnow()">
     <nav class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-dark active" href="#" >East-West Pharmacy</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <img class="d-block mx-auto mb-2" src="../images/logo.png" alt="" width="72" height="72">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <span class="lead"><big>Hi,<?php echo $name; ?></big></span>
      <a class="nav-link text-dark" href="../homepage.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-5">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              <big>Dashboard </big><span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="appointment()" href="#">
              <span data-feather="activity"></span>
              Appointment's History
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link t" onclick="order()" href="#">
              <span data-feather="dollar-sign"></span>
              Order's History
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link t" onclick="signinc()" href="#">
              <span data-feather="users"></span>
              Customer Sign-in History
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link t" onclick="signins()" href="#">
              <span data-feather="user-plus"></span>
              Staff Sign-in History
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link t" onclick="signup()" href="#">
              <span data-feather="log-in"></span>
              Signed-up Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link t" onclick="verify()" href="#">
              <span data-feather="user-check"></span>
              Staff Credentials
            </a>
          </li>
          
        </ul>
      </div>
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="dashboard">
      <font size=20 class="text-light col-lg-10"><b>Dashboard</b></font>
    </main>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="appointment">
     <form class="needs-validation" action="" method="POST">
        <h2>Appointment's List</h2>
      <div class="table-responsive">
        <table class="table table-striped table-lg">
          <?php
          $con=mysqli_connect('localhost','root','','pharmacy');
         $sql="SELECT cust_id,doc,toc,fname,lname,email,age,doctor,reason FROM appointment";
         if($res2=mysqli_query($con,$sql))
          {
          if(mysqli_num_rows($res2)>0)
          {
          echo "<thead><tr>";
          echo "<th>Customer ID</th>";
          echo "<th>Date Of Chech-Up</th>";
          echo "<th>Time of Check-Up</th>";
          echo "<th>First Name</th>";
          echo "<th>last Name</th>";
          echo "<th>E-Mail</th>";
          echo "<th>Age</th>";
          echo "<th>Doctor's Name</th>";
          echo "<th>Reason</th>";
          while($row=mysqli_fetch_array($res2))
          {
          echo "<tbody><tr>";
          echo "<td>".$row['cust_id']."</td>";
          echo "<td>".$row['doc']."</td>";
          echo "<td>".$row['toc']."</td>";
          echo "<td>".$row['fname']."</td>";
          echo "<td>".$row['lname']."</td>";
          echo "<td>".$row['email']."</td>";
          echo "<td>".$row['age']."</td>";
          echo "<td>".$row['doctor']."</td>";
          echo "<td>".$row['reason']."</td>";
          echo "</tr>";
          }
          echo "</tbody></table>";
          mysqli_free_result($res2);
          }
          else
          {
          echo "No record Found";
          }
          }
         ?>
     </form>
    </main>


   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="table1">
    <form class="needs-validation" action="" method="POST">
      <h2>Order's History</h2>
      <div class="table-responsive">
        <table class="table table-striped table-lg">
          <?php
          $con=mysqli_connect('localhost','root','','pharmacy');
         $sql1="SELECT cust_id,dop,top,fname,lname,email,address,state,country,zip,card_type,card_name,card_num,card_exp,card_cvv,amt_paid FROM payment";
         if($res3=mysqli_query($con,$sql1))
          {
          if(mysqli_num_rows($res3)>0)
          {
          echo "<thead><tr>";
          echo "<th>Customer ID</th>";
          echo "<th>Date Of Purchase</th>";
          echo "<th>Time of Purchase</th>";
          echo "<th>First Name</th>";
          echo "<th>last Name</th>";
          echo "<th>E-Mail</th>";
          echo "<th>Address</th>";
          echo "<th>State</th>";
          echo "<th>Country</th>";
          echo "<th>ZIP</th>";
          echo "<th>Card Type</th>";
          echo "<th>Card Name</th>";
          echo "<th>Card Number</th>";
          echo "<th>Card Expiry</th>";
          echo "<th>Card CVV</th>";
          echo "<th>Amount Paid</th>";
          echo "</tr></thead>";
          while($row=mysqli_fetch_array($res3))
          {
          echo "<tbody><tr>";
          echo "<td>".$row['cust_id']."</td>";
          echo "<td>".$row['dop']."</td>";
          echo "<td>".$row['top']."</td>";
          echo "<td>".$row['fname']."</td>";
          echo "<td>".$row['lname']."</td>";
          echo "<td>".$row['email']."</td>";
          echo "<td>".$row['address']."</td>";
          echo "<td>".$row['state']."</td>";
          echo "<td>".$row['country']."</td>";
          echo "<td>".$row['zip']."</td>";
          echo "<td>".$row['card_type']."</td>";
          echo "<td>".$row['card_name']."</td>";
          echo "<td>".$row['card_num']."</td>";
          echo "<td>".$row['card_exp']."</td>";
          echo "<td>".$row['card_cvv']."</td>";
          echo "<td>".$row['amt_paid']."</td>";
          echo "</tr>";
          }
          echo "</tbody></table>";
          mysqli_free_result($res3);
          }
          else
          {
          echo "No record Found";
          }
          }
         ?>
    </form>
  </main>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="signinc">
     <form class="needs-validation" action="" method="POST">
        <h2>Customer Sign-in History</h2>
      <div class="table-responsive">
        <table class="table table-striped table-lg">
          <?php
          $con=mysqli_connect('localhost','root','','pharmacy');
         $sql="SELECT id,cust_id,password,dol,tol FROM signinc";
         if($res2=mysqli_query($con,$sql))
          {
          if(mysqli_num_rows($res2)>0)
          {
          echo "<thead><tr>";
          echo "<th>ID</th>";
          echo "<th>Customer ID</th>";
          echo "<th>Password</th>";
          echo "<th>Date of Login</th>";
          echo "<th>Time of Login</th>";
          echo "</tr></thead>";
          while($row=mysqli_fetch_array($res2))
          {
          echo "<tbody><tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['cust_id']."</td>";
          echo "<td>".$row['password']."</td>";
          echo "<td>".$row['dol']."</td>";
          echo "<td>".$row['tol']."</td>";
          echo "</tr></tbody>";
          }
          echo "</table>";
          mysqli_free_result($res2);
          }
          else
          {
          echo "No record Found";
          }
          }
         ?>
     </form>
    </main>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="signins">
     <form class="needs-validation" action="" method="POST">
        <h2>Staff Sign-in History</h2>
      <div class="table-responsive">
        <table class="table table-striped table-lg">
          <?php
          $con=mysqli_connect('localhost','root','','pharmacy');
         $sql="SELECT id,staff_id,password,dol,tol FROM signins";
         if($res2=mysqli_query($con,$sql))
          {
          if(mysqli_num_rows($res2)>0)
          {
          echo "<thead><tr>";
          echo "<th>ID</th>";
          echo "<th>Staff ID</th>";
          echo "<th>Password</th>";
          echo "<th>Date of Login</th>";
          echo "<th>Time of Login</th>";
          echo "</tr></thead>";
          while($row=mysqli_fetch_array($res2))
          {
          echo "<tbody><tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['staff_id']."</td>";
          echo "<td>".$row['password']."</td>";
          echo "<td>".$row['dol']."</td>";
          echo "<td>".$row['tol']."</td>";
          echo "</tr></tbody>";
          }
          echo "</table>";
          mysqli_free_result($res2);
          }
          else
          {
          echo "No record Found";
          }
          }
         ?>
     </form>
    </main>


      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="signup">
           <form class="needs-validation" action="" method="POST">
              <h2>Signed-in Customer's List</h2>
            <div class="table-responsive">
              <table class="table table-striped table-lg">
                <?php
                $con=mysqli_connect('localhost','root','','pharmacy');
               $sql="SELECT cust_id,password,first_name,last_name,mobile_num,email,address,state,country,zip FROM signup";
               if($res2=mysqli_query($con,$sql))
                {
                if(mysqli_num_rows($res2)>0)
                {
                echo "<thead><tr>";
                echo "<th>Customer ID</th>";
                echo "<th>Password</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Mobile Number</th>";
                echo "<th>E-Mail</th>";
                echo "<th>Address</th>";
                echo "<th>State</th>";
                echo "<th>Country</th>";
                echo "<th>ZIP Code</th>";
                echo "</tr></thead>";
                while($row=mysqli_fetch_array($res2))
                {
                echo "<tbody><tr>";
                echo "<td>".$row['cust_id']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['first_name']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "<td>".$row['mobile_num']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['state']."</td>";
                echo "<td>".$row['country']."</td>";
                echo "<td>".$row['zip']."</td>";
                echo "</tr></tbody>";
                }
                echo "</table>";
                mysqli_free_result($res2);
                }
                else
                {
                echo "No record Found";
                }
                }
               ?>
           </form>
          </main>


          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="verify">
           <form class="needs-validation" action="" method="POST">
              <h2>Staff Credential's</h2>
            <div class="table-responsive">
              <table class="table table-striped table-lg">
                <?php
                $con=mysqli_connect('localhost','root','','pharmacy');
               $sql="SELECT no,last_name,id,password,user_type FROM verify";
               if($res2=mysqli_query($con,$sql))
                {
                if(mysqli_num_rows($res2)>0)
                {
                echo "<thead><tr>";
                echo "<th>ID</th>";
                echo "<th>Last Name</th>";
                echo "<th>Staff Login ID</th>";
                echo "<th>Password</th>";
                echo "<th>User Type</th>";
                echo "</tr></thead>";
                while($row=mysqli_fetch_array($res2))
                {
                echo "<tbody><tr>";
                echo "<td>".$row['no']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['user_type']."</td>";
                echo "</tr></tbody>";
                }
                echo "</table>";
                mysqli_free_result($res2);
                }
                else
                {
                echo "No record Found";
                }
                }
               ?>
           </form>
          </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
      <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="../js/dashboard.js"></script></body>
</html>
