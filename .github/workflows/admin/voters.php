<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Voters List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Voters</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Voters ID</th>
                  <th>Full Name</th>
                  <th>Faculty</th>
                  <th>Year</th>
                  <th>Photo</th>
                  <th>Status</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, voters.id_number FROM voters ORDER BY voters.id_number ASC";
                
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()) {
                      $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                        echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".$row['id_number']."</td>
                          <td>".$row['fullname']."</td>
                          <td>".$row['faculty']."</td>
                          <td>".$row['year']."</td>
                          <td>
                            <img src='".$image."' width='30px' height='30px'>
                          </td>
                          <td>".$row['status']."</td>

                        </tr>";
                      }
                    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
</div>

</body>
</html>
