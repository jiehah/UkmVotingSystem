<?php include ('head.php');?>
<?php include("sess.php")?>
<body>
    <div id="wrapper">
        <?php include ('side_bar.php');?>
    </div>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
                            Umum</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidates` WHERE `type` = 'Umum'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
						{
						?>
                           <div id = "type">
							<center><img src = "images/<?php echo $fetch['photo']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							
							<center><button type="button" class="btn btn-primary btn-lg" style = "border-radius:6px;margin-top:2px;"><?php echo $fetch['fullname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['id'] ?>" name = "um_id" class = "umum"></center>
							</div>
	
						<?php
							}
						?>

						</div>
                       
                    </div>
     </div>
				
				
				<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
							Fakulti Pendidikan</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidates` WHERE `type` = 'FPEND'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "type">
			<center><img class = "image-rounded" src = "images/<?php echo $fetch['photo']?>"style ="border-radius:6px;" height = "150px" width = "150px"></center>
		<center><button type="button" class="btn btn-primary btn-lg" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['fullname']?></button></center>
			<center><input type = "checkbox" value = "<?php echo $fetch['id'] ?>" name = "fpend_id" class = "fpend"></center>
		</div>
						<?php
							}
						?>

						</div>
                       
                    </div>
                </div>
	
	
	
	<!--<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Fakulti Pengajian Islam</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					//$query = $conn->query("SELECT * FROM `candidates` WHERE `type` = 'FPI'") or die(mysqli_errno());
					//while($fetch = $query->fetch_array())
					{
				?>
						<div id = "type">
							<center><img src = "admin/images/<?php echo $fetch['photo']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><button type="button" class="btn btn-primary btn-lg" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['fullname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['id'] ?>" name = "fpi_id" class = "fpi"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Fakulti Teknologi dan Sains Maklumat</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					//$query = $conn->query("SELECT * FROM `candidates` WHERE `type` = 'FTSM'") or die(mysqli_errno());
					//while($fetch = $query->fetch_array())
					{
				?>
						<div id = "type">
							<center><img src = "admin/images/<?php echo $fetch['photo']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><button type="button" class="btn btn-primary btn-lg" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['fullname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['id'] ?>" name = "ftsm_id" class = "ftsm"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Fakulti Kejuruteraan dan Alam Bina</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					//$query = $conn->query("SELECT * FROM `candidates` WHERE `type` = 'FKAB'") or die(mysqli_errno());
					//while($fetch = $query->fetch_array())
					{
				?>
						<div id = "type">
							<center><img src = "admin/images/<?php echo $fetch['photo']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><button type="button" class="btn btn-primary btn-lg" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['fullname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['id'] ?>" name = "fkab_id" class = "fkab"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	 <div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Fakulti Ekonomi dan Pengurusan</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					//$query = $conn->query("SELECT * FROM `candidates` WHERE `type` = 'FEP'") or die(mysqli_errno());
					//while($fetch = $query->fetch_array())
					{
				?>
						<div id = "type">
							<center><img src = "admin/images/<?php echo $fetch['photo']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><button type="button" class="btn btn-primary btn-lg" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['fullname']?></button></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['id'] ?>" name = "fep_id" class = "fep"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>-->
	
		
		<center><button class = "btn btn-success ballot" type = "submit" name = "submit">Submit Ballot</button></center>
		</form>
</body>
<?php include ('script.php')?>
  
  <script type = "text/javascript">
		$(document).ready(function(){
			$(".umum").on("change", function(){
				if($(".umum:checked").length == 1)
					{
						$(".umum").attr("disabled", "disabled");
						$(".umum:checked").removeAttr("disabled");
					}
				else
					{
						$(".umum").removeAttr("disabled");
					}
			});
			
			$(".fpend").on("change", function(){
				if($(".fpend:checked").length == 1)
					{
						$(".fpend").attr("disabled", "disabled");
						$(".fpend:checked").removeAttr("disabled");
					}
				else
					{
						$(".fpend").removeAttr("disabled");
					}
			});
			
			//$(".fpi").on("change", function(){
				//if($(".fpi:checked").length == 1)
				//	{
				//		$(".fpi").attr("disabled", "disabled");
				//		$(".fpi:checked").removeAttr("disabled");
				//	}
				//else
				//	{
				//		$(".fpi").removeAttr("disabled");
				//	}
			//});
			
			//$(".ftsm").on("change", function(){
			//	if($(".ftsm:checked").length == 1)
			//		{
			//			$(".ftsm").attr("disabled", "disabled");
			//			$(".ftsm:checked").removeAttr("disabled");
			//		}
			//	else
			//		{
			//			$(".ftsm").removeAttr("disabled");
			//		}
			//});
			
			//$(".fkab").on("change", function(){
			//	if($(".fkab:checked").length == 1)
			//		{
			//			$(".fkab").attr("disabled", "disabled");
			//			$(".fkab:checked").removeAttr("disabled");
			//		}
			//	else
			//		{
			//			$(".fkab").removeAttr("disabled");
			//		}
			//});
			
			//$(".fep").on("change", function(){
			//	if($(".fep:checked").length == 1)
			//		{
			//			$(".fep").attr("disabled", "disabled");
			//			$(".fep:checked").removeAttr("disabled");
			//		}
			//	else
			//		{
			//			$(".fep").removeAttr("disabled");
			//		}
				
			//});
			//$(".pio").on("change", function(){
				//if($(".pio:checked").length == 1)
				//	{
				//		$(".pio").attr("disabled", "disabled");
				//		$(".pio:checked").removeAttr("disabled");
				//	}
				//else
				//	{
				//		$(".pio").removeAttr("disabled");
				//	}
			//});
			//$(".busman").on("change", function(){
			//	if($(".busman:checked").length == 1)
			//	{
			//		$(".busman").attr("disabled", "disabled");
			//		$(".busman:checked").removeAttr("disabled");
			//	}
			//else
			//	{
			//		$(".busman").removeAttr("disabled");
			//	}
			//});
			//$(".sgtarm").on("change", function(){
			//	if($(".sgtarm:checked").length == 1)
			//	{
			//		$(".sgtarm").attr("disabled", "disabled");
			//		$(".sgtarm:checked").removeAttr("disabled");
			///	}
			//else
			//	{
			//		$(".sgtarm").removeAttr("disabled");
			//	}
			//});
			//$(".muse").on("change", function(){
			//	if($(".muse:checked").length == 1)
			//	{
			//		$(".muse").attr("disabled", "disabled");
			//		$(".muse:checked").removeAttr("disabled");
			//	}
			//else
			//	{
		//			$(".muse").removeAttr("disabled");
		//		}
		//	});
		//	$(".escort").on("change", function(){
		//		if($(".escort:checked").length == 1)
		//		{
		//			$(".escort").attr("disabled", "disabled");
		//			$(".escort:checked").removeAttr("disabled");
		//		}
		//	else
		//		{
		//			$(".escort").removeAttr("disabled");
				}
		//	});
	//	});	
	</script>
</html>
