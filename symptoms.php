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
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="livecases.php">Live Cases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item active">
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
  <div class="container-fluid bg  pt-2 pb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Symptoms of CORONA</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/fever.jpg" class="img-fluid bg-info" width="500" height="500" alt="">
                    <figcaption>Fever</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/headache.jpg" class="img-fluid bg-info" width="500" height="500" alt="">
                    <figcaption>Headache</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/difficulty.jpg" class="img-fluid bg-info" width="500" height="500" alt="">
                    <figcaption>Difficulty in breath</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/conjuctivities.jpg" class="img-fluid bg-info" width="500" height="500" alt="">
                    <figcaption>Conjuctivities</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/drycought.jpg" class="img-fluid bg-info" width="500" height="500" alt="">
                    <figcaption>Cought</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/loss.jpg" class="img-fluid bg-info" width="500" height="500" alt="">
                    <figcaption>Loss of speech</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/losssmell.jpg" class="img-fluid bg-info" width="500" height="500" alt="">
                    <figcaption>Loss of Smell</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/pressure.webp" class="img-fluid bg-info" width="500" height="500" alt="">
                    <figcaption>Pressure</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/tiredness.jpg" class="img-fluid bg-info" width="500" height="500" alt="">
                    <figcaption>Tiredness</figcaption>
                    </figure>
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
