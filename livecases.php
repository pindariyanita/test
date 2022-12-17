<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    f
    g
    <?php include 'link/links.php'; ?>
    <?php include 'css/.php'; ?>

</head>

<body>
    <nav class="navbar navbar-expand-lg nav_style navbar-dark bg-dark p-3">
        <a class="navbar-brand pl-5" href="index.php">COV-iNFO</a>
        <button class="navbar-toggler" type="text" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
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
    <section class="corona_update  container_fluid">
        <div class="mb-3">
            <h3 class="text-center">Live Cases in India</h3>

        </div>
        <div class="table-responsive b">
            <table class="table table-bordered table-striped text-center" id="tbval">
                <tr>
                    <th>Last Updated Time</th>
                    <th>State</th>
                    <th>Active cases</th>
                    <th>Recovered</th>
                    <th>Deaths</th>

                </tr>
                <?php
                $data = file_get_contents('https://api.covid19india.org/data.json');
                $coronalive = json_decode($data, true);
                $statescount = count($coronalive['statewise']);
                $i = 1;
                while ($i < $statescount) {
                ?>
                    <tr>
                        <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
                    </tr>
                   
                <?php
                    $i++;
                }


                ?>
            </table>
        </div>

    </section>
    <footer class="footer">
    <div class="footer_style text-white text-center container-fluid">
      <p>Copyright 2021 by Nita. All Rights Reserved.</p>
    </div>
  </footer>
</body>
</html>