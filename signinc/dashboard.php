<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
<?php 
session_start();
$cust_id = $_SESSION['cid'];
$password = $_SESSION['pid'];
$con=mysqli_connect('localhost','root','','pharmacy');
  $query="select first_name from signup where cust_id=$cust_id";
  $res=mysqli_query($con,$query);
  while($showname=mysqli_fetch_array($res))
  {
    $name=$showname['first_name'];
  }
  $dol=date("Y-m-j");
  $tol=date("h:i:s");
if(isset($_POST['book_now']))
{
$fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $age=$_POST['age'];
  $doctor=$_POST['doctor'];
  $reason=$_POST['reason'];
  $query2="insert into appointment(cust_id,doc,toc,fname,lname,email,age,doctor,reason) values ('$cust_id','$dol','$tol','$fname','$lname','$email','$age','$doctor','$reason')";
  mysqli_query($con,$query2);
  echo "<script>
                alert('Your Appointment has been booked.');
                </script>";
}
 ?>
 <script type="text/javascript">
  function loadnow() {
  document.getElementById("appointment").style.display = "block";
    document.getElementById("table1").style.display = "none";
     document.getElementById("applist").style.display = "none";
}
  function appointment() 
       {
    document.getElementById("appointment").style.display = "block";
    document.getElementById("table1").style.display = "none";
     document.getElementById("applist").style.display = "none";
    }
  function order() 
       {
    document.getElementById("appointment").style.display = "none";
    document.getElementById("table1").style.display = "block";
     document.getElementById("applist").style.display = "none";
    }
  
    
function myapp() {
  document.getElementById("applist").style.display = "block";
  document.getElementById("appointment").style.display = "none";
  document.getElementById("table1").style.display = "none";
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

  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-dark  active" href="#" >East-West Pharmacy</a>
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
              <big>Dashboard</big> <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  onclick="appointment()" href="#">
              <span data-feather="activity"></span>
            Book Appointment's
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="myapp()" href="#">
              <span data-feather="clipboard"></span>
              My Appointments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="order()" href="#">
              <span data-feather="file"></span>
              Orders History
            </a>
          </li>
        </ul>
      </div>
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="dashboard">
      <font size=20 class="text-light col-lg-10"><b>Dashboard</b></font>
    </main>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="appointment">

      <form class="needs-validation" action="" method="POST" >
        <h2>Book a Appointment</h2><hr class="mb-4">
        <div class="row w-50">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" name="fname" class="form-control" id="firstName" placeholder="Brian" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" name="lname" class="form-control" id="lastName" placeholder="O'Conor" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
      
        <div class="col-md-6 mb-3">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>

        <div class="col-md-2 mb-3">
          <label for="age">Age</label>
          <input type="text" name="age" class="form-control" id="address" placeholder="21" required>
          <div class="invalid-feedback">
            Please enter your age.
          </div>
        </div>
          <div class="col-md-6 mb-3">
            <label for="doctor">Doctor</label>
            <select name="doctor" class="custom-select d-block w-100" id="state" required>
              <option value="">Select Doctor</option>
              <option>Dr. Himalaya Puri Goswami</option>
              <option>Dr. Ashish Jacob</option>
              <option>Dr. Anurav Mathur</option>
              <option>Dr. Ankit Bohra</option>
            </select>
            <div class="invalid-feedback">
              Please select a Doctor.
            </div>
          </div>
          <div class="col-md-6 mb-3">
          <label for="reason">Reason</label>
          <textarea class="form-control" id="textarea" name="reason" rows="2" placeholder="Any Specific Reason ..." required></textarea>
          <div class="invalid-feedback">
            Please enter your age.
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" name="book_now" id="book_now" type="submit">Book Now</button>
        </div>
      </form>
    </main>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="table1">
      <form action="" method="POST">
      <h2>Order History</h2>
      <div class="table-responsive">
        <table class="table table-striped table-lg">
         <?php
         $sql="SELECT dop,fname,lname,email,state,address,card_type,amt_paid FROM payment where cust_id='$cust_id'";
         if($res2=mysqli_query($con,$sql))
          {
          if(mysqli_num_rows($res2)>0)
          {
          echo "<thead><tr>";
          echo "<th>Date Of Purchase</th>";
          echo "<th>First Name</th>";
          echo "<th>last Name</th>";
          echo "<th>E-Mail</th>";
          echo "<th>Address</th>";
          echo "<th>State</th>";
          echo "<th>Card Type</th>";
          echo "<th>Amount Paid</th>";
          echo "</tr></thead>";
          while($row=mysqli_fetch_array($res2))
          {
          echo "<tbody><tr>";
          echo "<td>".$row['dop']."</td>";
          echo "<td>".$row['fname']."</td>";
          echo "<td>".$row['lname']."</td>";
          echo "<td>".$row['email']."</td>";
          echo "<td>".$row['address']."</td>";
          echo "<td>".$row['state']."</td>";
          echo "<td>".$row['card_type']."</td>";
          echo "<td>".$row['amt_paid']."</td>";
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
      </div>
    </table>
    </main>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="applist">
      <form class="needs-validation" action="" method="POST">
        <h2>My Appointment's</h2>
      <div class="table-responsive">
        <table class="table table-striped table-lg">
          <?php
          $con=mysqli_connect('localhost','root','','pharmacy');
         $sql="SELECT cust_id,doc,toc,fname,lname,email,age,doctor,reason FROM appointment where cust_id='$cust_id'";
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
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../js/vendor/jquery.slim.min.js"><\/script>')</script>
      <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="../js/dashboard.js"></script></body>
</html> 
