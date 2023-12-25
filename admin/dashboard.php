<?php require_once('header.php');
include '../conn/conn.php';
?>
<section class="content-header">
	<h1>Dashboard</h1>
</section>

<section class="content">
<div class="row">
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?php //echo $total_product; ?></h3>

                  <p>Earning</p>
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-maroon">
                <div class="inner">
				<h3><?php 
						$users_sql = "SELECT * FROM widthdraw";
						$users_sql_run = mysqli_query($conn,$users_sql);
						$n =  mysqli_num_rows($users_sql_run);
							if($n<1)
							{
								echo "0";
							}
							else{
								echo $n;
							}
					?></h3>

                  <p>Withdraw Request</p>
                </div>
                
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
				<h3><?php 
						$users_sql = "SELECT * FROM ads";
						$users_sql_run = mysqli_query($conn,$users_sql);
						echo mysqli_num_rows($users_sql_run);
					
					?></h3>

                  <p>Total Ads</p>
                </div>
               
               
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php 
						$links_sql = "SELECT * FROM links";
						$links_sql_run = mysqli_query($conn,$links_sql);
						echo mysqli_num_rows($links_sql_run);
					
					?></h3>

                  <p>Total Links</p>
                </div>
               
                
              </div>
            </div>
			<!-- ./col -->
			
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-orange">
				  <div class="inner">
					<h3><?php 
						$users_sql = "SELECT * FROM user";
						$users_sql_run = mysqli_query($conn,$users_sql);
						echo mysqli_num_rows($users_sql_run);
					
					?></h3>
  
					<p>Total Users</p>
				  </div>
				 
				  
				</div>
			  </div>

			  <div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
				  <div class="inner">
				  <h3><?php 
						$users_sql = "SELECT * FROM user where status='2'";
						$users_sql_run = mysqli_query($conn,$users_sql);
						echo mysqli_num_rows($users_sql_run);
					
					?></h3>
  
					<p>Blocked Users</p>
				  </div>
				 
				  
				</div>
			  </div>

			  <div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-yellow">
				  <div class="inner">
				  <h3><?php 
						$users_sql = "SELECT * FROM user where status='1'";
						$users_sql_run = mysqli_query($conn,$users_sql);
						echo mysqli_num_rows($users_sql_run);
					
					?></h3>
  
					<p>Active Users</p>
				  </div>
				  
				  
				</div>
			  </div><div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-teal">
				  <div class="inner">
				  <h3><?php 
						$users_sql = "SELECT * FROM user where status='0'";
						$users_sql_run = mysqli_query($conn,$users_sql);
						echo mysqli_num_rows($users_sql_run);
					
					?></h3>
  
					<p>Pending Users</p>
				  </div>
				  
				  
				</div>
			  </div>



			  

		  </div>
		  
</section>

<?php require_once('footer.php'); ?>