<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Candidates Details</title>
      <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
      <style type="text/css">
         body {
            background-color:  #85C1E9;
         }

         .img {
            max-height: 250px;
            max-width: 250px;
            height:100%
         }
      </style>
   </head>
   <body>
       <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">UKM ELECTION SYSTEM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="view_candidate.php"><span class="glyphicon glyphicon-user"></span> PRU</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
      <div class="container">
         <div class="text-center" style="padding-top:20px; color:#FFFFFF;">
            <h2>Candidates Details</h2>
         </div>
         <hr />

         <?php
         
         if(isset($_GET['id'])) {

            include("includes/conn.php");

            $sql = $conn->prepare("SELECT * FROM candidates WHERE id = ?") or die($conn->error);
            $sql->bind_param('i', $_GET['id']);
            $sql->execute();
            $sql->store_result();
            $sql->bind_result($id, $fullname, $party, $photo, $type, $manifesto, $proposer, $proponent);
            $sql->fetch();
            ?>
            <div class="row">
               <div class="col-md-10 col-md-offset-1">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="text-center">
                           <img src="images/<?php echo $photo; ?>" class="img-responsive">
                        </div>
                     </div>

                     <div class="col-md-8">
                        <h3 style="color:#FFFFFF">Candidates Details</h3>
                        <table class="table table-striped" style="background:  #fff;">
                           <tr>
                              <td width="200px">Candidate ID</td>
                              <td>: <?php echo $id; ?></td>
                           </tr>
                           <tr>
                              <td width="200px">Full name</td>
                              <td>: <?php echo $fullname; ?></td>
                           </tr>
                           <tr>
                              <td>Party</td>
                              <td>: <?php echo nl2br($party); ?></td>
                           </tr>
                           <tr>
                              <td>Type</td>
                              <td>: <?php echo nl2br($type); ?></td>
                           </tr>
                           <tr>
                              <td>Manifesto</td>
                              <td>: <?php echo nl2br($manifesto); ?></td>
                           </tr>
                           <tr>
                              <td>Proposer</td>
                              <td>: <?php echo $proposer; ?></td>
                           </tr>
                           <tr>
                              <td>Proponent</td>
                              <td>: <?php echo $proponent; ?></td>
                           </tr>
                        </table>
                        <div>
                           <button onclick="window.history.go(-1)" class="btn btn-success">Back</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <?php

         } else {

            header('location: ./');

         }
         ?>
      </div>
   </body>
</html>
