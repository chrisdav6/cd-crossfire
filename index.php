<?php
  $title = "CD Crossfire Travel Softball";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description"
    content="<?php echo "CD Crossfire is an elite softball organization located in New York's Capital District"; ?>">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,600,700,900" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="public/css/bootstrap.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="public/css/style.css">
  <!--Favicon-->
  <link rel="icon" type="image/png" href="public/img/favicon.png">
  <title><?php echo $title; ?></title>
</head>

<body class="d-flex flex-column">
  <?php include_once "includes/navbar.php"?>

  <section id="logos" class="py-4">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-8 mr-auto">
          <a href="/">
            <img class="img-fluid" src="public/img/hompageLogo.png" alt="CD Crossfire Travel Softball Logo">
          </a>
        </div>
        <div class="col-md-2 d-none d-md-block">
          <a href="http://www.niskysoftball.com" target="_blank">
            <img class="img-fluid d-block ml-auto niskyLogo" src="public/img/niskyOrgLogo.png"
              alt="Nisky Rec Softball Logo">
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="hero" class="d-none d-md-block">
    <div class="container h-100 ">
      <div class="row h-100 d-flex align-items-center justify-content-center">
        <div class="col text-center">
          <h1 class="motivate">Teamwork.</h1>
        </div>
      </div>
    </div>
  </section>

  <section id="weather" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col d-flex align-items-center justify-content-center">
          <canvas id="clear-day" class="weatherIcons pr-3" width="50" height="50"></canvas>
          <p class="lead mb-0 text-light text-center">Current weather in Niskayuna is <span class="summary"></span> and
            <span class="deg"></span>&deg;
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="intro" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <p><strong>CD Crossfire Softball</strong> is an organization committed to providing all players with an
            experience that fosters positive self-esteem, team spirit, and individual growth through personal
            achievement and as a team member</p>
          <p class="mb-0">League Goals - Teach fundamentals of the game. Encourage development and good sportsmanship of
            all players through participation in a team environment. Have fun, make new friends, and grow as a member of
            a team. Win enough games to feel good about the team and the season. The league will make every effort to
            create balanced teams, allowing for the highest level of fair competition, and ensuring that players feel
            good about their teams and the season.</p>
        </div>
      </div>
    </div>
  </section>

  <?php include_once "includes/footer.php" ?>

  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/skycons.js"></script>
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/scripts.js"></script>
</body>

</html>