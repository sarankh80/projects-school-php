<?php include('../../config/session.php'); ?>
<?php $link_dot = '../..'; ?>
<?php 
    if(!empty($_REQUEST['delete'])){
        $id = $_REQUEST ['delete'];
        $sql_delete = "DELETE FROM news WHERE id = $id";
        $result_cat = $conn->query($sql_delete);
        if($result_cat){
            header("location:index.php");
        }
    }
?>
<?php require_once('../headlink.php'); ?>
    <?php require_once('../header.php'); ?>
    <section class="p-10">
        <div class="container">
            <h2 style="padding: 15px 0 !important;"> List Table News </h2>
            <div style="float: right;margin-top: -55px;"><a href="<?php echo BASE_URL_ADMIN; ?>news/add.php" class="btn"> Add News </a></div>
            <div class="col-12 col-md-12 col-xl-12" style="clear: both;margin:0; padding:0;">
                <table class="table table-bordered tableTextAlginCenter">
                  <thead style="background: #2e5f85">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Image</th>
                      <th scope="col">Status</th>
                      <th scope="col">Update</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $sql_news = "SELECT * FROM news WHERE status = 1";
                        $result_news = $conn->query($sql_news);
                        if ($result_news->num_rows > 0) {
                            while($row = $result_news->fetch_assoc()) {
                                if($row['status']==1){
                                    $status = '<span class="btn-primary"> Active </span>';
                                }else{
                                    $status = '<span class="btn-danger"> Desable </span>';
                                }
                                echo '<tr>
                                  <th scope="row">'.$row['id'].'</th>
                                  <td>'.$row['title'].'</td>                                  
                                  <td>'.$row['image'].'</td>
                                  <td>'.$status.'</td>
                                  <td> <a href="'.BASE_URL_ADMIN.'news/edit.php?id='.$row['id'].'" style="padding:2px 10px !important;" class="btn-primary"> Edit </a></td>
                                  <td><a href="'.BASE_URL_ADMIN.'news/index.php?delete='.$row['id'].'"style="padding:2px 10px !important;" class="btn-danger"> Delete </a></td>
                                </tr>';
                            }
                        }
                    ?>                    
                  </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Start Footer -->
    <?php require_once('../footer.php'); ?>
    <!-- End Footer --> 
    <?php require_once('../footerlink.php'); ?>
<?php $conn->close(); ?>