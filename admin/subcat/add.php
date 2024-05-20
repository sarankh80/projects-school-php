<?php include('../../config/session.php'); ?>
<?php $link_dot = '../..'; ?>
<?php 
  if(!empty($_REQUEST['cat_id']) && !empty($_REQUEST['name'])){
        $cat_id = $_REQUEST ['cat_id'];
        $name = $_REQUEST ['name'];
        $status = $_REQUEST ['status'];
        $ordering = $_REQUEST ['ordering'];
        $sql_add = "INSERT INTO sub_cat (cat_id,name,status,ordering,date) VALUES($cat_id,'$name',$status,$ordering,now())";
        $result_cat_add = $conn->query($sql_add);
        if($result_cat_add === TRUE){
            header("location:index.php");
        }
    }
?>
<?php require_once('../headlink.php'); ?>
    <?php require_once('../header.php'); ?>
    <section class="p-10">
        <div class="container">
            <h2 style="padding: 15px 0 !important;"> Add Data Table Sub Category </h2>
            <div class="col-12 col-md-12 col-xl-12" style="clear: both;margin:0; padding:0;">
              <div class="bd-example" style="margin: 10px 0;">
                <form method="POST" action="add.php">
                  <div class="form-group">
                    <label for="exampleInputId">  Category ID </label>
                    <select name="cat_id" class="form-control">
                      <option value=""> Please Select Category </option>
                      <?php $sql_cat = "SELECT * FROM category WHERE status = 1";
                        $result_cat = $conn->query($sql_cat);
                        if ($result_cat->num_rows > 0) {
                            while($row = $result_cat->fetch_assoc()) {
                                if($row['status']==1){
                                    $status = '<span class="btn-primary"> Active </span>';
                                }else{
                                    $status = '<span class="btn-danger"> Desable </span>';
                                }
                                echo '<option value="'.$row['id'].'"> '.$row['name'].' </option>';
                            }
                        }
                    ?>                    
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName">  Name Sub Category </label>
                    <input type="text" required class="form-control" id="exampleInputName" name="name" aria-describedby="emailHelp" placeholder="Name">
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