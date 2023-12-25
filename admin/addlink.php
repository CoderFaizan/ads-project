<?php require_once('header.php'); ?>
<section class="content-header">
	<h1>Add Link</h1>
    <?php 
        if(isset($_GET['status']))
        {?>
            <div class="alert-success alert" style="margin-top:10px;">
           <?php $status = $_GET['status'];
            if($status=='inserted')
            {
                echo "Link Inserted Successfully";
            }else{
            echo "Link Already Exits";
            

        }
        
        
        ?>
        </div>
  <?php  }
    ?>
</section>

<section class="content">
<div class="row">

    <div class="col-4 offset-4 " style="padding:50px">
        
    <div class="row">
        <form action="inlink.php" method="post">

    <table  style="width:450px; margin-left:250px;">
    <tr><td width="200" style="text-align:center;"><label for="" class="form-control">Name:</label></td>
        <td style="margin-left:100px;"><input type="text" name="name" id="" class="form-control" placeholder="Enter Name" value=""></td></tr>
    <tr><td width="200" style="text-align:center;"><label for="" class="form-control">Link:</label></td>
        <td style="margin-left:100px;"><input type="text" name="link" id="" class="form-control" placeholder="Enter Time" value=""></td></tr>
    <tr><td width="200" style="text-align:center;"><label for="" class="form-control">Short Link:</label></td>
        <td style="margin-left:100px;"><input type="text" name="slink" id="" class="form-control" placeholder="Enter Reward" value=""></td></tr>
       
    
        <tr><td></td><td><input type="submit" value="Save" class="btn-danger btn " style="float:right"></td></tr>
    </table>
    </form>

</div>
    </div>
</div>


		  
</section>

<?php require_once('footer.php'); ?>