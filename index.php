<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include 'link/links.php'; ?>
  <?php include 'css/style.php'; ?>

</head>

<body>
  <nav class="navbar navbar-expand-lg nav_style navbar-dark bg-dark p-3">
    <a class="navbar-brand pl-5" href="index.php">COV-iNFO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5">
        <li class="nav-item active">
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
        
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="main_header">
    <div class="row w-100 h-100">
      <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
          <img src="images/b.jpg" width="300" height="300" alt="">
        </div>
      </div>
      <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center pt-5">
          <h1 class="ab">We are in this together-and we will get through this,together</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="corona_update">
    <div class="mb-3">
      <h3 class="text-center abc">CORONA UPDATES</h3>
    </div>
    <div class="d-flex justify-content-around align-items-center count_style">
      <div>
        <h1 class="count">25,228,996</h1>
        <p>Active cases</p>
      </div>
      <div>
        <h1 class="count">21,596,512</h1>
        <p>Discharged</p>
      </div>
      <div>
        <h1 class="count">278,751</h1>
        <p>Deaths</p>
      </div>
      <div>
        <h1 class="count">18200000
        </h1>
        <p>Vaccinated</p>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="footer_style text-white text-center container-fluid">
      <p>Copyright 2021 by Nita. All Rights Reserved.</p>
    </div>
  </footer>
  <script type="text/javascript">
  $('.count').counterUp({
    delay:10,
    time:3000
  })
    
  
    
    
    </script>
</body>

</html>