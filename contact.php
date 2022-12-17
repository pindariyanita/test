<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include 'link/links.php'; ?>
  <?php include 'css/style.php'; ?>
  <?php include 'dbcon.php';?>
</head>

<body>
  
  <nav class="navbar navbar-expand-lg nav_style navbar-dark bg-dark p-3">
    <a class="navbar-brand pl-5" href="index.php">COV-iNFO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="livecases.php">Live Cases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="symptoms.php">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prevention.php">Prevention</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid sub_section bg pt-5 pb-5">
    <div class="section_header text-center mb-5 mt-4">
      <h1>Feel free to contact</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12 ">
          <form action="" method="POST">
            <div class="form-group">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" name="username" placeholder="Type your name" autocomplete="off" required>
            </div>
            <div class="form-group">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
            </div>
            <div class="form-group">
              <label class="form-label">Contact Number</label>
              <input type="text" class="form-control" name="mobile" placeholder="Type your contact number" required autocomplete="off">
            </div>

            <div class="form-group">
              <label class="form-label">Your age</label>
              <input type="number" class="form-control" name="age" placeholder="Your age" required autocomplete="off">
            </div>
            <div class="mb-3">
              <label class="form-label">What are you feeling?</label>
              <textarea class="form-control" rows="3" placeholder="Describe here" name="feel" autocomplete="off" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
      <p>Copyright 2021 by Nita. All Rights Reserved.</p>
    </div>
  </footer>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $age=$_POST['age'];
  $feel=$_POST['feel'];

  $insertquery="INSERT INTO `coronacase`(`username`, `email`, `mobile`, `age`, `feel`) VALUES ('$username','$email','$mobile','$age','$feel')";
  $query=mysqli_query($con,$insertquery);
  if($con){
    ?>
    <script>
    alert('Submitted succesfully');
    </script>
    <?php
  }

    else{
        ?>
        <script>
        alert('Please try again');
        </script>
        <?php
    }

}
?>