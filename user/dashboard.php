<?php require_once('header.php'); 
include '../conn/conn.php';
// session_start();
?>
<section class="content-header">
	<h1>Dashboard</h1>
</section>

<section class="content">
<div class="row">
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?php 
				  	$id = $_SESSION['id'];
				 		$sql = "SELECT * FROM `user` where id='$id'";
						$run = mysqli_query($conn,$sql);
				 		$show = mysqli_fetch_assoc($run);
						echo $show['earning'];
				 //echo $total_product; ?></h3>

                  <p>Earning</p>
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-maroon">
                <div class="inner">
                  <h3><?php //echo $total_order_pending; ?></h3>

                  <p>Withdraw Request</p>
                </div>
                
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php //echo //$total_order_completed; ?></h3>

                  <p>Total Ads</p>
                </div>
               
               
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <!-- <div class="small-box bg-aqua"> -->
                <div class="inner">
                  <!-- <h3>8</h3> -->

                  <!-- <p>Viewd Ads</p> -->
                </div>
               
                
              </div>
            <!-- </div> -->
			<!-- ./col -->
			
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-orange">
				  <div class="inner">


				  <?php  
				  $sum =0;
				  	$sql = "SELECT * FROM `glink` WHERE u_id='$id'";
					$run = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($run))
					{
						$sum = $sum + $row['counts']; 
					}
				 
				 ?>
					<h3><?php echo $sum; ?></h3>
  
					<p>Clicks</p>
				  </div>
				 
				  
				</div>
			  </div>

			  <div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
				  <div class="inner">
					<h3><?php echo $show['level']; ?></h3>
  
					<p>Level</p>
				  </div>
				 
				  
				</div>
			  </div>

			  <div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-yellow">
				  <div class="inner">
					<h3><?php 
					if($show['status']==0)
					{?>
						<p class="text-info" style="font-size:40px;">Pending</p>
						<?php } else if($show['status']==1)
					{?>
						<p class="text-success" style="font-size:40px;">Approved</p>
						
						<?php } else{ ?>
							
							<p class="text-success" style="font-size:40px;">Disabled</p>
					<?php  } ?>
				
				
				</h3>
  
					<p>Account Status</p>
				  </div>
				  
				  
				</div>
			  </div>

			  <div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-teal">
				  <div class="inner">
					<h3><?php //echo //$total_subscriber; ?></h3>
  
					<p>Running Ads </p>
				  </div>
				  
				  
				</div>
			  </div>



			  

		  </div>
		  
</section>

<?php require_once('footer.php'); ?>