<?php require_once('header.php');
include '../conn/conn.php'; ?>
<section class="content-header">
	<h1>Run Links</h1>
    
</section>


<section class="content">
<div class="row">

    <div class="col-4 offset-4 " style="padding:50px">
        
    <div class="row">
        <form action="run1.php" method="post">

    <table  style="width:450px; margin-left:250px;">
    <tr><td width="200" style="text-align:center;"><label for="" class="form-control">Short Link:</label></td>
        <td style="margin-left:100px;"><input type="text" name="slink" id="" class="form-control" placeholder="Enter Link" value=""></td></tr>
       
    
        <tr><td></td><td><input type="submit" value="Run" class="btn-danger btn " style="float:right"></td></tr>
    </table>
    </form>

</div>
    </div>
</div>


		  
</section>

<?php require_once('footer.php'); ?>