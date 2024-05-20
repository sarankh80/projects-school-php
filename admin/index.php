<?php include('../config/session.php'); ?>
<?php require_once('headlink.php'); ?>
  	<?php require_once('header.php'); ?>
    <!-- End Header --> 
    <section class="about" style="padding: 10px; margin:0; clear: both;">
        <div class="container">
            <ul class="row our-links m-0" style="margin-top: 0 !important;">
                <li class="col-sm-4 apply-online clearfix equal-hight">
                    <a href="<?php echo BASE_URL_ADMIN;?>cat">
                        <div class="icon"><img src="<?php echo BASE_URL;?>/images/apply-online-ico.png" class="img-responsive" alt=""></div>
                        <div class="detail">
                            <h3>Category </h3>
                            <p style="color: #fff;"> Category Website School </p>
                            <a href="#" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                        </div>
                    </a>
                </li>
                <li class="col-sm-4 prospects clearfix equal-hight">
                    <a href="<?php echo BASE_URL_ADMIN;?>news">
                        <div class="icon"><img src="../images/prospects-ico.png" class="img-responsive" alt=""></div>
                        <div class="detail">
                            <h3>News</h3>
                            <p style="color: #fff;"> News Website School </p>
                            <a href="#" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                        </div>
                    </a>
                </li>
                <li class="col-sm-4 certification clearfix equal-hight">
                    <a href="<?php echo BASE_URL_ADMIN;?>article">
                        <div class="icon"><img src="../images/certification-ico.png" class="img-responsive" alt=""></div>
                        <div class="detail">
                            <h3> Article </h3>
                           <p style="color: #fff;"> Article Website School </p>
                            <a href="#" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                        </div>
                    </a>
                </li>
                <li class="col-sm-4 apply-online clearfix equal-hight">
                    <a href="<?php echo BASE_URL_ADMIN;?>student">
                        <div class="icon"><img src="../images/apply-online-ico.png" class="img-responsive" alt=""></div>
                        <div class="detail">
                            <h3> Student </h3>
                            <p style="color: #fff;"> Student Website School </p>
                            <a href="apply-online.html" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                        </div>
                    </a>
                </li>
                <li class="col-sm-4 prospects clearfix equal-hight">
                    <a href="<?php echo BASE_URL_ADMIN;?>cat">
                        <div class="icon"><img src="../images/prospects-ico.png" class="img-responsive" alt=""></div>
                        <div class="detail">
                            <h3> Picture </h3>
                            <p style="color: #fff;"> Picture Website School </p>
                            <a href="#" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                        </div>
                    </a>
                </li>
                <li class="col-sm-4 certification clearfix equal-hight">
                    <a href="<?php echo BASE_URL_ADMIN;?>setting/slide">
                        <div class="icon"><img src="../images/certification-ico.png" class="img-responsive" alt=""></div>
                        <div class="detail">
                            <h3> Slide </h3>
                            <p style="color: #fff;"> Slide Website School </p>
                            <a href="#" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- Start Footer -->
    <?php require_once('footer.php'); ?>
    <!-- End Footer --> 
    <?php require_once('footerlink.php'); ?>
    <script type="text/javascript">
        $('body').removeClass('fill-bg');
    </script>
<?php $conn->close(); ?>