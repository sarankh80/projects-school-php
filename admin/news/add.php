<?php include('../../config/session.php'); ?>
<?php $link_dot = '../..'; ?>
<?php require_once('../headlink.php'); ?>
    <?php require_once('../header.php'); ?>
  <?php
    if(!empty($_REQUEST["title"])) {
        if(!empty($_FILES["fileToUpload"]["name"])){          
          $photo = $_FILES["fileToUpload"]["name"]; 
        }else{
          $photo = ''; 
        }       
        $cat_id = $_REQUEST['cat_id'];
        $sub_id = $_REQUEST['sub_id'];
        $image = $photo;
        $title = $_REQUEST['title'];
        $description = $_REQUEST['description'];
        $status = $_REQUEST['status'];    
        $sql_add = "INSERT INTO news (cat_id,image,title,description,status,date,sub_id) VALUES($cat_id,'$image','$title','$description',$status,now(),$sub_id)";
        $result = $conn->query($sql_add);
        if($result === TRUE){
            if(!empty($photo)){
              uploadFile(addslashes("fileToUpload"));
            }            
            header("location:index.php");
            ob_end_flush();
        }
    }  
    ?>
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
                    <label for="exampleSubCat">  Sub Category </label>
                    <select name="sub_id" class="form-control">
                      <option value="0"> Please Select Sub Category </option>
                      <?php $sql_sub_cat = "SELECT * FROM sub_cat WHERE status = 1";
                        $result_sub_cat = $conn->query($sql_sub_cat);
                        if ($result_sub_cat->num_rows > 0) {
                            while($rowsub = $result_sub_cat->fetch_assoc()) {
                                if($rowsub['status']==1){
                                    $status = '<span class="btn-primary"> Active </span>';
                                }else{
                                    $status = '<span class="btn-danger"> Desable </span>';
                                }
                                echo '<option value="'.$rowsub['id'].'"> '.$rowsub['name'].' </option>';
                            }
                        }
                    ?>                    
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputTitle"> Title </label>
                    <input type="text" required class="form-control" id="exampleTitle" name="title" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputImage"> Image  </label>
                    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" placeholder="Image">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputStatus">Status</label>
                    <input type="text" class="form-control" id="exampleInputStatus" value="1" name="status" placeholder="Status">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDescription"> Description  </label>
                    <textarea class="form-control" name="description" placeholder="Description" style="height: 300px;"></textarea>
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