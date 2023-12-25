<?php require_once('header.php');
include '../conn/conn.php'; ?>
<section class="content-header">
	<h1>Ads</h1>

    <a href="addadds.php" class="btn-info btn ">Add New</a>
</section>

<section class="content">
<div class="row">
<div class="col-md-12">


<div class="box box-info">
  
  <div class="box-body table-responsive">
    <table  style="text-align:center;" id="example1" class="table table-bordered table-hover table-striped">
      <thead>
          <tr>
              <th  style="text-align:center;">#</th>
              <th  style="text-align:center;">Name</th>
              <th  style="text-align:center;">Price</th>
             
              <th  style="text-align:center;">Time</th>
              <th  style="text-align:center;">Reward</th>
              <th  style="text-align:center;">Level</th>
              <th  style="text-align:center;">Status</th>
              <th  style="text-align:center;">Action</th>
          </tr>
      </thead>
      <tbody>
          <?php
          $i=0;
          $sql = "SELECT * FROM ads  ORDER by id DESC";
          $run = mysqli_query($conn,$sql);
          $i=0;
         while($row = mysqli_fetch_assoc($run)){
              $i++;?>
              <tr class="">
                  <td><?php echo $i; ?></td>
                  <td>
                      
                      <b><?php echo $row['name']; ?></b>
                      
                     
                  </td>
                  <td>
                  <?php echo $row['price']; ?>
                  </td>
                  <td>
                  <?php echo $row['time']; ?>
                  </td>
                  <td>
                  <?php echo $row['reward']; ?>
                  </td>
                  <td>
                  <?php echo $row['level']; ?>
                  </td>
                  <td>
                  <?php if($row['status']==0)
                  {?>
                    <p class="text-danger">Deactive</p>
                  <?php } 
                  else
                  {?>
                    <p class="text-success">Active</p>
                  <?php } 
                  
                  ?>
                  </td>
                 
                 
                  <td style="display:flex;">
                      <a href="#" class="btn btn-info btn-xs"   style="width:50%;">Edit</a>
                      <?php if($row['status']==0)
                  {?>
                    <a href="#" class="btn btn-success btn-xs"   style="width:50%;">Active</a>
                  <?php } 
                  else
                  {?>
                    <a href="#" class="btn btn-primary btn-xs"   style="width:50%;">Deactive</a>
                  <?php } 
                  
                  ?>
                      <a href="#" class="btn btn-danger btn-xs "   style="width:50%;">Delete</a>
                  </td>
              </tr>
              <?php
          }
          ?>
      </tbody>
    </table>
  </div>
</div>


		  
</section>

<?php require_once('footer.php'); ?>