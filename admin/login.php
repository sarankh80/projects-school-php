<?php
   include("../config/config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myemail = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']);       
      $sql = "SELECT id,email,name FROM user WHERE email = '$myemail' AND password = '$mypassword'";
      $result_login = $conn->query($sql);  
      $error ='';     
      if(!empty($result_login->num_rows) == 1) {
         $row = $result_login->fetch_assoc();
         $_SESSION['user_id'] = $row['id'];         
         $_SESSION['user_email'] = $row['email'];         
         $_SESSION['user_user'] = $row['user'];         
         header("location: index.php");
      }else {
         $error = "Your Login Email or Password is invalid";         
      }
   }
   if(!empty($_SESSION['user_id'])){
      header("location: index.php");
   }
?>
<?php require_once('headlink.php'); ?>
      <section class="login-wrapper">
            <div class="inner">
                <div class="login">
                    <div class="login-logo"> <a href="index.html"><img src="<?php echo BASE_URL;?>/images/login-logo.png" class="img-responsive" alt=""></a> </div>
                    <div class="head-block">
                        <h1>LOGIN  Now</h1>
                    </div>                    
                    <div class="cnt-block">
                        <div class="col-12" style="text-align: center;color: red;"><label> <?php echo !empty($error)?$error:'';?></label></div>
                        <form action="login.php" method="POST" class="form-outer">
                           
                            <input name="email" type="email" placeholder="Emal" required>
                            <input name="password" type="password" placeholder="password" required>
                            <div class="button-outer" style="text-align: center;">
                                <button class="btn">Login now <span class="icon-more-icon"></span></button>
                                <!-- <div class="or hidden-xs">or</div>
                                <button class="btn register">Register now <span class="icon-more-icon"></span></button> -->
                            </div>
         <!--                    <div class="remember">
                                <div class="check">
                                    <input type="checkbox" id="test1" />
                                    <label for="test1">Remember me</label>
                                </div>
                                <a href="#" class="forgot"><span>?</span>Forgot password</a> </div> -->
                        </form>
                    </div>
                    <div class="login-footer">
                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
<?php require_once('footerlink.php'); ?>
<script type="text/javascript">
   $('body').addClass('fill-bg');
</script>
<?php $conn->close(); ?>