<?php require_once('header.php'); ?>
<section class="content-header">
	<h1>Add Ad</h1>
</section>

<section class="content">
<div class="row">

    <div class="col-4 offset-4 " style="padding:50px">
        
    <div class="row">
        <form action="inadd.php" method="post">

    <table  style="width:450px; margin-left:250px;">
    <tr><td width="200" style="text-align:center;"><label for="" class="form-control">Name:</label></td>
        <td style="margin-left:100px;"><input type="text" name="name" id="" class="form-control" placeholder="Enter Name" value=""></td></tr>
    <tr><td width="200" style="text-align:center;"><label for="" class="form-control">Time:</label></td>
        <td style="margin-left:100px;"><input type="number" name="time" id="" class="form-control" placeholder="Enter Time" value=""></td></tr>
    <tr><td width="200" style="text-align:center;"><label for="" class="form-control">Reward:</label></td>
        <td style="margin-left:100px;"><input type="number" name="reward" id="" class="form-control" placeholder="Enter Reward" value=""></td></tr>
        <tr><td width="200" style="text-align:center;"><label for="" class="form-control">Price:</label></td>
        <td style="margin-left:100px;"><input type="number" name="price" id="" class="form-control" placeholder="Enter Price" min="0" value=""></td></tr>
        <tr><td width="200" style="text-align:center;"><label for="" class="form-control">Level:</label></td>
        <td style="margin-left:100px;"><input type="number" name="level" id="" class="form-control" placeholder="Enter Level" min="0" value=""></td></tr>
    
        <tr><td></td><td><input type="submit" value="Save" class="btn-danger btn " style="float:right"></td></tr>
    </table>
    </form>

</div>
    </div>
</div>


		  
</section>

<?php require_once('footer.php'); ?>