<?php include('../../config/session.php'); ?>
<?php 
	if(!empty($_REQUEST['name'])){
        $name = $_REQUEST ['name'];
        $status = $_REQUEST ['status'];
        $ordering = $_REQUEST ['ordering'];
        $sql_add = "INSERT INTO category (name,status,ordering,date) VALUES('$name',$status,$ordering,now())";
        $result_cat_add = $conn->query($sql_add);
        if($result_cat_add === TRUE){
            header("location:index.php");
        }
    }
?>
<?php $link_dot = '../..'; ?>
<?php require_once('../headlink.php'); ?>
    <?php require_once('../header.php'); ?>
    <section class="p-10">
        <div class="container">
            <h2 style="padding: 15px 0 !important;"> Add Data Table Category </h2>
            <div class="col-12 col-md-12 col-xl-12" style="clear: both;margin:0; padding:0;">
            	<div class="bd-example" style="margin: 10px 0;">
            		<form method="POST" action="add.php">
					  <div class="form-group">
					    <label for="exampleInputName"> Name Category </label>
					    <input type="text" required class="form-control" id="exampleInputName" name="name" placeholder="Name">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputStatus">Status</label>
					    <input type="text" class="form-control" id="exampleInputStatus" name="status" placeholder="Status">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputOrdering">Ordering </label>
					    <input type="text" class="form-control" id="exampleInputOrdering" name="ordering" placeholder="Ordering">
					  </div>
					  <button type="submit" class="btn btn-primary" style="float: right;"> <i class="fa fa-save"></i> Submit </button>
					  <div style="clear: both;"></div>
					</form>
            	</div>                
            </div>
        </div>
    </section>
    <!-- Start Footer -->
    <?php require_once('../footer.php'); ?>
    <!-- End Footer --> 
    <?php require_once('../footerlink.php'); ?>
<?php $conn->close(); ?>