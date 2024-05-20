<?php include('../../../config/session.php'); ?>
<?php $link_dot = '../../..'; ?>
<?php require_once('../../headlink.php'); ?>
    <?php require_once('../../header.php'); ?>
    <section class="p-10">
        <div class="container">
            <h2 style="padding: 15px 0 !important;"> List Table Category </h2>
            <div style="float: right;margin-top: -55px;"><a href="<?php echo BASE_URL_ADMIN; ?>cat/add.php" class="btn"> Add Category </a></div>
            <div class="col-12 col-md-12 col-xl-12" style="clear: both;margin:0; padding:0;">
                <table class="table table-bordered">
                  <thead style="background: #2e5f85; text-align: center;" >
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Status</th>
                      <th scope="col">Update</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $sql_cat = "SELECT * FROM category WHERE status = 1";
                        $result_cat = $conn->query($sql_cat);
                        if ($result_cat->num_rows > 0) {
                            while($row = $result_cat->fetch_assoc()) {
                                echo '<tr>
                                  <th scope="row">'.$row['id'].'</th>
                                  <td>'.$row['name'].'</td>
                                  <td>'.$row['status'].'</td>
                                  <td> <a style="padding:2px 10px !important;" class="btn-primary" href="#"> Edit </a></td>
                                  <td><a style="padding:2px 10px !important;" class="btn-danger" href="#"> Delete </a></td>
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
    <?php require_once('../../footer.php'); ?>
    <!-- End Footer --> 
    <?php require_once('../../footerlink.php'); ?>
<?php $conn->close(); ?>