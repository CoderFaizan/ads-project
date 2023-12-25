<?php require_once('header.php');
include '../conn/conn.php';
//session_start(); ?>
<section class="content-header">
	<h1>Dashboard</h1>
</section>

<section class="content">
<div class="row">
<div class="col-md-12">


<div class="box box-info">
  
  <div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-hover table-striped">
      <thead>
          <tr>
              <th>#</th>
              <th>Name</th>
              <th>Price</th>
             
              <th>Time</th>
              <th>Reward</th>
              <th>Status</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
      <?php
      $id = $_SESSION['id'];
      $level = $_SESSION['level'];
          $i=0;
          $sql = "SELECT * FROM ads where status ='1' and level='$level' ORDER by id DESC ";
          $run = mysqli_query($conn,$sql);
          $i=0;
         while($row = mysqli_fetch_assoc($run)){
              $i++;?>
              <tr class="" style="background-color:;">
                  <td><?php echo $i; ?></td>
                  <td>
                      
                  <b><?php echo $row['name']; ?></b>
                      
                      
                     
                  </td>
                  <td>
                  <?php echo $row['price']; ?>
                  </td>
                  <td>
                  <?php echo $row['time']; ?>
                  </td><td>
                  <?php echo $row['reward']; ?>
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
                  <?php
 $date = date("d"); 
                    $adid = $row['id'];
                 $sqll = "SELECT * FROM view where user='$id' and ad='$adid' and date='$date'";
                        $runn = mysqli_query($conn,$sqll);
                       $numm = mysqli_num_rows($runn);
                        if($numm>0)
                        {
                          echo "";
                        }
                        else{?>

<a href="viewad.php?id=<?php echo $row['id']?>&time=<?php echo  $row['time']?>&price=<?php echo  $row['price']?>&reward=<?php echo $row['reward']; ?>" class="btn btn-success btn-xs"   style="width:50%;">View</a>
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