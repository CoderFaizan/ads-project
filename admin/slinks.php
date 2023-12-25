<?php require_once('header.php');
include '../conn/conn.php'; 

$sql = "SELECT * FROM links  ORDER by id DESC";
$run = mysqli_query($conn,$sql);

$q = mysqli_num_rows($run);
?>
<section class="content-header">
	<h1>Short Links(<?php echo $q; ?>)</h1>
  
    <a href="addlink.php" class="btn-info btn ">Add New</a>
    <a href="run.php" class="btn-info btn ">Run</a>
    <?php if(isset($_GET['status'])) {?>
    <div class="alert-success alert" style="margin-top:10px;">
        <?php 
        $status = $_GET['status'];
        if($status=='active')
        {
            echo "Link Activated Successfully";
        }
        else if($status=='deactive'){
            echo "Link Deactivated Successfully";
        }
        else if($status=='delete'){
            echo "Link Deleted Successfully";
        }
        else if($status=='update'){
            echo "Link Updated Successfully";
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
              <th  style="text-align:center;">Link</th>
             
              <th  style="text-align:center;">Short link</th>
              <th  style="text-align:center;">Counts</th>
              <th  style="text-align:center;">Status</th>
          </tr>
      </thead>
      <tbody>
          <?php
          $i=0;
          $i=0;
         while($row = mysqli_fetch_assoc($run)){
              $i++;?>
              <tr class="">
                  <td><?php echo $i; ?></td>
                  <td>
                      
                      <b><?php echo $row['name']; ?></b>
                      
                     
                  </td>
                  <td>
                  <?php echo $row['link']; ?>
                  </td>
                  <td>
                  <?php echo $row['slink']; ?>
                  </td>
                  <td>
                  <?php echo $row['count']; ?>
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
                 
                 
                  <td style="display:flex; align-items:center;">
                
                  <a href="#" class="btn btn-info btn-xs"   style="width:50%;">Edit</a>
                      <?php if($row['status']==0)
                  {?>
                    <a href="activelink.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-xs"   style="width:50%;">Active</a>
                  <?php } 
                  else
                  {?>
                    <a href="deactivelink.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-xs"   style="width:50%;">Deactive</a>
                  <?php } 
                  
                  ?>
                      <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs "   style="width:50%;">Delete</a>
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
