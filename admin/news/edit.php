<?php include('../../config/session.php'); ?>
<?php $link_dot = '../..'; ?>
<?php 
    $row = [];
    $id = 0;
    if(!empty($_REQUEST['id'])){
        $id = $_REQUEST ['id'];
        $sql_selete = "SELECT * FROM news WHERE id = $id";
        $result_selete = $conn->query($sql_selete);
        if ($result_selete->num_rows > 0) {
          $row = $result_selete->fetch_assoc();
        }
    }
?>
<?php require_once('../headlink.php'); ?>
    <?php require_once('../header.php'); ?>
    <section class="p-10">
        <div class="container">
            <h2 style="padding: 15px 0 !important;"> Add Data Table News </h2>
            <div class="col-12 col-md-12 col-xl-12" style="clear: both;margin:0; padding:0;">
              <div class="bd-example" style="margin: 10px 0;">
                <form method="POST" action="add.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleCategory">  Category </label>
                    <select name="cat_id" class="form-control">
                      <option value="0"> Please Select Category </option>
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
                    <label for="exampleSubCat">  Sub Category </label>
                    <select name="sub_id" class="form-control">
                      <option value="0"> Please Select Sub Category </option>
                      <?php $sql_sub_cat = "SELECT * FROM sub_cat WHERE status = 1";
                        $result_sub_cat = $conn->query($sql_sub_cat);
                        if ($result_sub_cat->num_rows > 0) {
                            while($rowsub = $result_sub_cat->fetch_assoc()) {
                                $selected = '';
                                if($rowsub['id']==$id){ $selected ='selected';}
                                echo '<option '.$selected.' value="'.$rowsub['id'].'"> '.$rowsub['name'].' </option>';
                            }
                        }
                    ?>                    
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputTitle"> Title </label>
                    <input type="text" required class="form-control" value="<?php echo $row['title']; ?>" id="exampleTitle" name="title" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputImage"> Image  </label>
                    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" placeholder="Image">
                    <?php 
                      if(!empty($row['image'])){
                        echo '<img src="'.$link_dot.'/images/'.$row['image'].'" height="100px">';
                      }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputStatus">Status</label>
                    <input type="text" class="form-control" id="exampleInputStatus" value="<?php echo $row['status']; ?>" name="status" placeholder="Status">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDescription"> Description  </label>
                    <textarea class="form-control" name="description" placeholder="Description" style="height: 300px;"><?php echo $row['description']; ?></textarea>
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