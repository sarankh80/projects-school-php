<?php include('../../config/session.php'); ?>
<?php 
  $row = [];
  $id = 0;
  if(!empty($_REQUEST['id'])){
        $id = $_REQUEST ['id'];
        $sql_selete = "SELECT * FROM sub_cat WHERE id = $id";
        $result_cat_selete = $conn->query($sql_selete);
        if ($result_cat_selete->num_rows > 0) {
          $row = $result_cat_selete->fetch_assoc();
        }
    }
  if(!empty($_REQUEST['name'])){
        $name = $_REQUEST ['name'];
        $status = $_REQUEST ['status'];
        $ordering = $_REQUEST ['ordering'];
        $sql_update = "UPDATE sub_cat SET name='$name',status=$status,ordering=$ordering WHERE id = $id";
        $result_cat_update = $conn->query($sql_update);
        if($result_cat_update === TRUE){
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
                <form method="POST" action="edit.php?id=<?php echo $id;?>">
                  <div class="form-group">
                    <label for="exampleInputId">  Category ID </label>
                    <select name="cat_id" class="form-control">
                      <option value=""> Please Select Category </option>
                      <?php $sql_cat = "SELECT * FROM category WHERE status = 1";
                        $result_cat = $conn->query($sql_cat);
                        if ($result_cat->num_rows > 0) {
                            while($row_cat = $result_cat->fetch_assoc()) {
                                $selected = '';
                                if($row_cat['id']==$id){ $selected ='selected';}
                                echo '<option '.$selected.' value="'.$row_cat['id'].'"> '.$row_cat['name'].' </option>';
                            }
                        }
                    ?>                    
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName"> Name Category </label>
                    <input type="text" required class="form-control" id="exampleInputName" name="name" value="<?php echo !empty($row)?$row['name']:''; ?>" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputSataus">Status</label>
                    <input type="text" class="form-control" id="exampleInputStatus" name="status" value="<?php echo !empty($row)?$row['status']:''; ?>" placeholder="Status">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputOrdering">Ordering </label>
                    <input type="text" class="form-control" id="exampleInputOrdering" name="ordering" value="<?php echo !empty($row)?$row['ordering']:''; ?>" placeholder="Ordering">
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