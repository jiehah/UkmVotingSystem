<?p<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>

    <div id="row">
        <?php 
			include ('side_bar.php');
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['um_id']))
					{
						$_SESSION['um_id'] = "";
					}
					else
					{
						$_SESSION['um_id'] = $_POST['um_id'];
					}
					if(!ISSET($_POST['fpend_id']))
					{
						$_SESSION['fpend_id'] = "";
					}
					else
					{
						$_SESSION['fpend_id'] = $_POST['fpend_id'];
					}
					//if(!ISSET($_POST['fpi_id']))
					//{
					//	$_SESSION['fpi_id'] = "";
					//}
					//else
					//{
					//	$_SESSION['fpi_id'] = $_POST['fpi_id'];
					//}
					//if(!ISSET($_POST['ftsm_id']))
					//{
					//	$_SESSION['ftsm_id'] = "";
					//}
					//else
					//{
					//	$_SESSION['ftsm_id'] = $_POST['ftsm_id'];
					//}
					//if(!ISSET($_POST['fkab_id']))
					//{
					//	$_SESSION['fkab_id'] = "";
					//}
					//else
					//{
					//	$_SESSION['fkab_id'] = $_POST['fkab_id'];
					//}
					//if(!ISSET($_POST['fep_id']))
					//{
					//	$_SESSION['fep_id'] = "";
					//}
					//else
					//{
					//	$_SESSION['fep_id'] = $_POST['fep_id'];
					//}
					//if(!ISSET($_POST['pio_id']))
					//{
					//	$_SESSION['pio_id'] = "";
					//}
					//else
					//{
					//	$_SESSION['pio_id'] = $_POST['pio_id'];
					//}
					//if(!ISSET($_POST['busman_id']))
					//{
					//	$_SESSION['busman_id'] = "";
					//}
					//else
					//{
					//	$_SESSION['busman_id'] = $_POST['busman_id'];
					//}
					//if(!ISSET($_POST['sgtarm_id']))
					//{
					//	$_SESSION['sgtarm_id'] = "";
					//}
					//else
					//{
					//	$_SESSION['sgtarm_id'] = $_POST['sgtarm_id'];
					//}
					//if(!ISSET($_POST['muse_id']))
					//{
					//	$_SESSION['muse_id'] = "";
					//}
					//else
					//{
					//	$_SESSION['muse_id'] = $_POST['muse_id'];
					//}
					//if(!ISSET($_POST['escort_id']))
					//{
					//	$_SESSION['escort_id'] = "";
					//}
					//else
					//{
					//	$_SESSION['escort_id'] = $_POST['escort_id'];
					//}
				}
		?>
    </div>
			<center>
		  <div class="col-lg-8" style = "margin-left:240px;" >
		  <div class = "alert alert-info">
			<label>UMUM</label>
			<br />
			<?php
				if(!$_SESSION['um_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidates` WHERE `id` = '$_SESSION[um_id]'")->fetch_array();
						echo $fetch['fullname']." "."<img src = 'images/".$fetch['photo']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success" >
			<label>Fakulti Pendidikan</label>
			<br />
			<?php
				if(!$_SESSION['fpend_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidates` WHERE `id` = '$_SESSION[fpend_id]'")->fetch_array();
						echo $fetch['fullname']." "."<img src = 'images/".$fetch['photo']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			<!--</div>
			<div class = "alert alert-info">
			<label>Fakulti Pengajian Islam</label>
			<br/>
			<?php
				//if(!$_SESSION['fpi_id'])
					{
						
					}
				//else
					{
						//$fetch = $conn->query("SELECT * FROM `candidates` WHERE `id` = '$_SESSION[fpi_id]'")->fetch_array();
						//echo $fetch['fullname']."  "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>-->
				
			<!--</div>
			<div class = "alert alert-success" >
			<label>Fakulti Teknologi Dan Sains Maklumat</label>
			<br />
			<?php
				//if(!$_SESSION['ftsm_id'])
					{
						
					}
				//else
					{
						//$fetch = $conn->query("SELECT * FROM `candidates` WHERE `id` = '$_SESSION[ftsm_id]'")->fetch_array();
						//echo $fetch['fullname']."  "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			
			<label>Fakulti Kejuruteraan Alam Bina</label>
			<br />
			<?php
				//if(!$_SESSION['fkab_id'])
					{
						
					}
				//else
					{
						//$fetch = $conn->query("SELECT * FROM `candidates` WHERE `id` = '$_SESSION[fkab_id]'")->fetch_array();
						//echo $fetch['fullname']."  "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<label>Fakulti Ekonomi dan Pengurusan</label>
			<br />
			<?php
				//if(!$_SESSION['fep_id'])
					{
						
					}
				//else
					{
						//$fetch = $conn->query("SELECT * FROM `candidates` WHERE `id` = '$_SESSION[fep_id]'")->fetch_array();
						//echo $fetch['fullname']."  "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >-->
			<!--<label>PIO</label>
			<br />
			<?php
				//if(!$_SESSION['pio_id'])
					{
						
					}
				//else
					{
						//$fetch = $conn->query("SELECT * FROM `candidates` WHERE `id` = '$_SESSION[pio_id]'")->fetch_array();
						//echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>-->
			<!--</div>
			<div class = "alert alert-success">
			<label>BUSINESS MANAGER</label>
			<br />
			<?php
				//if(!$_SESSION['busman_id'])
					{
						
					}
				//else
					{
						//$fetch = $conn->query("SELECT * FROM `candidates` WHERE `id` = '$_SESSION[busman_id]'")->fetch_array();
						//echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>-->
				
			<!--</div>
			<div class = "alert alert-info">
			<label>SGT @ ARMS</label>
			<br />
			<?php
				//if(!$_SESSION['sgtarm_id'])
					{
						
					}
				//else
					{
						//$fetch = $conn->query("SELECT * FROM `candidates` WHERE `id` = '$_SESSION[sgtarm_id]'")->fetch_array();
						//echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>-->
			
			<!--</div>
			<div class = "alert alert-success">
			<label>MUSE</label>
			<br />
			<?php
				//if(!$_SESSION['muse_id'])
					{
						
					}
				//else
					{
						//$fetch = $conn->query("SELECT * FROM `candidates` WHERE `id` = '$_SESSION[muse_id]'")->fetch_array();
						//echo $fetch['fulltname']."  "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			<label>ESCORT</label>
			<br />
			<?php
				//if(!$_SESSION['escort_id'])
					{
						
					}
				//else
					{
						//$fetch = $conn->query("SELECT * FROM `candidates` WHERE `id` = '$_SESSION[escort_id]'")->fetch_array();
					//	echo $fetch['fullname']."  "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>-->
			
			</div>
			<br />
			<button type = "submit" data-toggle = "modal" data-target = "#result" class = "btn btn-success" >Submit Final Vote</button>
		</div>
	</center>
	<div class="modal fade" id = "result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												
											</h4>
										</div>
										
										
                                        <div class="modal-body">
										<p class = "alert alert-danger">Are you sure you want to submit your Votes? </p>
                                    </div>
									
									<div class="modal-footer">
								<a href = "submit_vote.php"><button type = "submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</div>
									</div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
</body>
<?php include ('script.php')?>
</html>