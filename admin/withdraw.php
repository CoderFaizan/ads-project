<?php require_once('header.php');
include '../conn/conn.php'; ?>
<section class="content-header">
	<h1>Withdraw Requests</h1>
    <?php  
       
       if(isset($_GET['status']))
       {?>
       <?php if($_GET['status']=='approve'){ ?>
           <div class="alert alert-success">
               <?php
               echo  'Payment Approved';
               ?>

           </div>

       <?php }else{?>
        <div class="alert alert-danger">
               <?php
               echo  'Payment Rejected';
               ?>

           </div>
    
   <?php } }
       
       ?>
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
              <th  style="text-align:center;">Amount</th>
             
              <th  style="text-align:center;">Method</th>
              <th  style="text-align:center;">Date</th>
              <th  style="text-align:center;">Status</th>
          </tr>
      </thead>
      <tbody>
          <?php
          $i=0;
          $sql = "SELECT * FROM widthdraw  ORDER by id DESC";
          $run = mysqli_query($conn,$sql);
          $i=0;
         while($row = mysqli_fetch_assoc($run)){
              $i++;?>
              <tr class="">
                  <td><?php echo $i; ?></td>
                  <td>
                      
                      <b><?php 
                      
                      $id =  $row['user'];

                      
          $sqlw = "SELECT * FROM user where id='$id'";
          $runw = mysqli_query($conn,$sqlw);
                  $d = mysqli_fetch_assoc($runw);
                     echo $d['First Name'];
                     
                       ?></b>
                      
                     
                  </td>
                  <td>
                  <?php echo $row['amount']; ?>
                  </td>
                  <td>
                  <?php echo $row['method']; ?>
                  </td>
                  <td>
                  <?php echo $row['date']; ?>
                  </td>
                  
                  <td>
                  <?php if($row['status']==0)
                  {?>
                    <p class="text-danger">Pending</p>
                  <?php } else if($row['status']==1) {?>
                    <p class="text-success">Approved</p>
                    <?php } else {?>
                        
                        <p class="text-success">Rejected</p>
                    <?php }  ?>
                  </td>
                 
                 
                  <td style="display:flex;">
                      <?php if($row['status']==0)
                  {?>
                    <a href="approve.php?id=<?php echo $row['id']; ?>&user=<?php echo $row['user']; ?>" class="btn btn-success btn-xs"   style="width:50%;">Approve</a>
                    <a href="reject.php?id=<?php echo $row['id']; ?>&user=<?php echo $row['user']; ?>&amount=<?php echo $row['amount']; ?>" class="btn btn-danger btn-xs"   style="width:50%;">Reject</a>
                  <?php } 
                  else
                  {?>
                  <?php } 
                  
                  ?>
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