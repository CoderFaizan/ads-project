<?php require_once('header.php');
include '../conn/conn.php'; ?>
<section class="content-header">
	<h1>Users</h1>
  
    <?php if(isset($_GET['status'])) {?>
    <div class="alert-success alert" style="margin-top:10px;">
        <?php 
        $status = $_GET['status'];
        if($status=='active')
        {
            echo "User Activated Successfully";
        }
        else if($status=='block'){
          echo "User Blocked Successfully";
      } else if($status=='unblock'){
        echo "User UnBlocked Successfully";
    }
        else if($status=='delete'){
            echo "User Deleted Successfully";
        }
        else if($status=='update'){
            echo "User Updated Successfully";
        }
        ?>
    </div>
    <?php } ?>
</section>

<section class="content">
<div class="row">



			  
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
              <th  style="text-align:center;">City</th>
             
              <th  style="text-align:center;">Earning</th>
              <th  style="text-align:center;">Status</th>
          </tr>
      </thead>
      <tbody>
          <?php
          $i=0;
          $sql = "SELECT * FROM user  ORDER by id DESC";
          $run = mysqli_query($conn,$sql);
          $i=0;
         while($row = mysqli_fetch_assoc($run)){
              $i++;?>
              <tr class="">
                  <td><?php echo $i; ?></td>
                  <td>
                      
                      <b><?php echo $row['First Name']; ?></b>
                      
                     
                  </td>
                  <td>
                  <?php echo $row['city']; ?>
                  </td>
                  <td>
                  <?php echo $row['earning']; ?>
                  </td>
                  <td>
                  <?php if($row['status']==0)
                  {?>
                    <p class="text-danger">Pending</p>
                    <?php } 
                  else if($row['status']==1)
                  {?>
                    <p class="text-success">Active</p>
                    <?php } 
                  else if ($row['status']==2)
                  {?>
                    <p class="text-danger">Blocked</p>
                  <?php }
                  ?>
                  </td>
                 
                 
                  <td style="display:flex; align-items:center;">
                
                    
                    <?php if($row['status']==2)
                  {?>
                    <a href="unblockuser.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-xs"   style="width:50%;">UnBlock</a>
                  <?php } 
                  else
                  {?>
                    <a href="blockuser.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-xs"   style="width:50%;">Block</a>
                  <?php } 
                  
                  ?>

                  <a href="#" class="btn btn-info btn-xs"   style="width:50%;">Edit</a>
                      <?php if($row['status']==0)
                  {?>
                    <a href="activeuser.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-xs"   style="width:50%;">Active</a>
                  <?php } 
                  else
                  {?>
                    <a href="deactiveuser.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-xs"   style="width:50%;">Deactive</a>
                  <?php } 
                  
                  ?>
                      <a href="deleteuser.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs "   style="width:50%;">Delete</a>
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
