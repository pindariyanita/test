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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
          <a class="nav-link" href="livecases.php">Live Cases</a>
        </li>
                <li class="nav-item active">
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
    <div class="container-fluid sub_section bg pt-2 pb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>What is COVID-19?</h1>
        </div>
        <div class="row pt-5">
            <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
                <img src="images/corona.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</h2>
                <p class="font">Coronaviruses are a large family of viruses that are actually common throughout the world and can cause respiratory illness in people and animals. There are several known coronaviruses that infect people and usually only cause mild respiratory disease, such as the common cold. However, at least two previously identified coronaviruses have caused severe illness — Severe Acute Respiratory Syndrome (SARS) coronavirus and Middle East Respiratory Syndrome (MERS) coronavirus. </p>
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