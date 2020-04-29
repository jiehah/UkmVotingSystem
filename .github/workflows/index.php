<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Title -->
  <title>UKM ELECTION SYSTEM</title>
  <!-- Place favicon.ico in the root directory -->
    <link rel="logo_ukm" href="images/logo_ukm.png">
    <link rel="shortcut icon" type="image/ico" href="images/logo.ico" />
  <!-- Plugin-CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <!-- Main-Stylesheets -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="style2.css">

  <script>
  .column {
  float: left;
  width: 50%;
}
</script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed top">
      <div class="container">
        <a class= "navbar-brand">
         
          <img src="images/logo-mpp.png" alt="Logo" style="width:50px;"> 
          <img src="images/ukm.png" alt="Logo" style="width:120px;">
        </a>
        <a class="navbar-brand" href="#">UKM ELECTION SYSTEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#team">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         PRU
        </a>
          <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
          <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#news">History</a>
            <a class="dropdown-item" href="view_candidate.php">Candidates 19/20</a>
     
            <a class="dropdown-item" href="try.php">Result</a>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">LogIn</a>
      </li>
    </ul>
  </div>
</div>
</nav>
  
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('images/01.png')">
        <div class="carousel-caption d-none d-md-block">
          <!--<h2 class="display-4">First Slide</h2>-->
          <!--<p class="lead">This is a description for the first slide.</p>-->
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('images/02.jpg')">
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('images/04.jpeg')">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<!--news-->
<section class="news" id="news">
  <br>
  <div class="container">
    <h1 class="row text-left">Past Results</h1>
    <div class="row">
    <div class="column left">
      <div id="piechart" style="width: 900px; height: 500px;"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart(){
            var data = google.visualization.arrayToDataTable([
                ['Party Involved' , 'Numbers of Seats Votes'],
                ['Kongres Siswa' , 18],
                ['Inspirasi Varsiti' , 11],
                ['Wawasan' , 7],
                ['Student Unity Front' , 0],
                ['Bebas' , 1],
            ]);

            var options = {
                title: 'PARTY RESULTS UKM 2019'

            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }

            </script>
          </div>
   <div class="column right">
      <div id="barchart" style="width: 900px; height: 500px;"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Candidates', 'FSSK', 'FPER', 'FEP', 'FPI', 'FST', 'FPEND', 'FUU', 'FKAB', 'FSK', 'FTSM', 'FGG', 'FF', 'CITRA'],
          ['1/2', 2,1,1,1,3,1,1,1,1,1,1,1,0],
          ['3/4', 1,0,1,1,1,0,0,1,1,1,0,0,1]
          
        ]);

        var options = {
          chart: {
            title: 'FACULTY CHAIRS UKM 2019',
          },

        width: 350,
        height: 400,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%'},
        isStacked: true
        };

        var chart = new google.charts.Bar(document.getElementById('barchart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

            </script>
          </div>
        </div>
   </div>
</section>

<!--team-->
<section class="team" id="team">
    <br>
<!-- Page Content -->
<div class="container">
  <!-- Page Heading -->
  <h1 class="my-4">We <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Heart_coraz%C3%B3n.svg/800px-Heart_coraz%C3%B3n.svg.png" style="width:50px;">
    <small>TEAM MILO!</small>
  </h1>

  <div class="row">

    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="col-12 mb-4">
        <img src="images/afifah1.png" alt="Avatar" class="image">
          <h6 style="text-align: center;"><br>Afifah<br>Database Master</h6>
          </div>
    </div>

     <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="col-12 mb-4">
        <img src="images/razita.jpeg" alt="Avatar" class="image">
          <h6 style="text-align: center;"><br>Razita<br>Admin Master</h6>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="col-12 mb-4">
          <img src="images/najihah1.png" alt="Avatar" class="image">
          <h6 style="text-align: center;"><br>Najihah<br>Scrum Master</h6>
        </div>
    </div>

     <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="col-12 mb-4">
          <img src="images/azim.jpeg" alt="Avatar" class="image">
          <h6 style="text-align: center;"><br>Azim<br>Voters Master</h6>
        </div>
    </div>
</div>
  <!-- /.row -->
</div>
<!-- /.container -->
</section>

<!--contact-->
  <section class="contact" style="background-color:#e2fbf5" id="contact">
    <br>
  <div class="container">
    <h3 class=" row text-left">Contact Us</h3>
      <div class="row text-center">
        <div class="col-sm-3 col-xs-12">
              <br><img src="images/phone.png" alt="Phone" style="width:50px;"> 
              <h3>Phone</h3>
              <p>+6013-3337007</p><br>
        </div>
        <div class="col-sm-3 col-xs-12">
              <br><img src="images/location.png" alt="Location" style="width:50px;"> 
              <h3>Location</h3>
              <p>Universiti Kebangsaan Malaysia
              43600 UKM Bangi, Selangor
              Malaysia</p><br>
        </div>
        <div class="col-sm-3 col-xs-12">
              <br><img src="images/email.png" alt="Phone" style="width:50px;"> 
              <h3>E-mail</h3>
              <p>ukmelection@gmail.com</p><br>
        </div>
        <div class="col-sm-3 col-xs-12">
              <br><img src="images/web.png" alt="Phone" style="width:50px;"> 
              <h3>Web</h3>
              <p>https://www.ukm.my</p><br>
        </div>
    </div>
  </div>
</section>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>

</body>
<footer class="main-footer">
    <div class="container">
      <div class="small text-center text-muted">
        <b><br>Copyright © 2019 Brought To You By Team Milo
    </div>
    <!-- /   .container -->
  </div>
</footer>
</html>
