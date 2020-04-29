<?php
 
  include("includes/conn.php");
 
  $query=mysqli_query($conn,"select count(id) from candidates");
  $row = mysqli_fetch_row($query);
 
  $rows = $row[0];
 
  $page_rows = 8;
 
  $last = ceil($rows/$page_rows);
  
 
  if($last < 1){
    $last = 1;
  }
 
  $pagenum = 1;
 
  if(isset($_GET['pn'])){
    $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
  }
 
  if ($pagenum < 1) { 
    $pagenum = 1; 
  } 
  else if ($pagenum > $last) { 
    $pagenum = $last; 
  }
 
  $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
 
  $nquery=mysqli_query($conn,"select * from candidates $limit");
 
  $paginationCtrls = '';
 
  if($last != 1){
 
  if ($pagenum > 1) {
        $previous = $pagenum - 1;
    $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-default">Previous</a> &nbsp; &nbsp; ';
 
    for($i = $pagenum-4; $i < $pagenum; $i++){
      if($i > 0){
            $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
      }
      }
    }
 
  $paginationCtrls .= ''.$pagenum.' &nbsp; ';
 
  for($i = $pagenum+1; $i <= $last; $i++){
    $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
    if($i >= $pagenum+4){
      break;
    }
  }
 
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-default">Next</a> ';
    }
  }
 
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>UKMES</title>
      <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="dist/css/animate.css"/>
      <style media="screen">
         body {
            background-color: #85C1E9;
            color:#fff;
         }
         .img {
            height: 200px;
            width: 196px;
         }

         .button.success {
           background-color: #059f3e;
           color: #ebebeb;
         }

         .button.success:hover, .button.success:focus {
            background-color: #22bb5b;
            color: #fefefe;
         }
         .name {
           position:absolute;
           background: rgba(35, 35, 35, 0.624);
           width: 196px;
           top: 178px;
           font-size:16px;
           padding:3px 0px;
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
      
         <?php

            echo '<div class="text-center" style="padding-top:20px; color:#FFFFFF;">
                     <h2>Candidates Information 2019/2020</h2>
                  </div>
                  <hr />';

            echo '<div class="row">';

            echo '<div class="col-md-10 col-md-offset-1">';

              while($row = mysqli_fetch_array($nquery)){
         ?>
                  <div class="col-md-3 col-xs-6">
                    <section class="wow fadeInDown" data-wow-delay="<?php echo $i; ?>s">
                      <div class="thumbnail">  
                        <div class="text-center">
                           <img src="images/<?php echo $row['photo']; ?>" class="img">
                           <p class="name"><?php echo $row['fullname']; ?></p>
                           <div class="caption">
                              <a href="candidates_details.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-block">Details</a>
                              
                           </div>
                          </div>
                        </div>
                     </section>
                  </div>

         <?php
               }

         echo '</div>';
         ?>
      </div>
      <div id="pagination_controls" align="center"  ><?php echo $paginationCtrls; ?></div>

      
      <script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
      <script type="text/javascript" src="dist/js/wow.js"></script>
      <script type="text/javascript">
         wow = new WOW(
            {
               animateClass: 'animated',
               offset:100,
               callback:function(box) {
                  console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
               }
            }
         );
         wow.init();
      </script>
   </body>
</html>
