<header> 
<!-- Start Navigation -->
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li> <a href="<?php echo BASE_URL_ADMIN; ?>index.php"> <i class="fa fa-home"></i> Home Admin </a></li>
                <li class="dropdown"> <a data-toggle="dropdown" href="#"> <i class="fa fa-table"></i> Category <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>cat/add.php"> <i class="fa fa-plus-circle"></i> Add Category </a></li>
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>cat/index.php">  <i class="fa fa-list"></i> List Category </a></li>
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>subcat/add.php">  <i class="fa fa-plus-circle"></i>  Add Sub Category </a></li>
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>subcat/index.php"> <i class="fa fa-list"></i> List Category </a></li>
                    </ul>
                </li>
                <li class="dropdown"> <a data-toggle="dropdown" href="#"> <i class="fa fa-table"></i> News <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>news/add.php"> <i class="fa fa-plus-circle"></i> Add News </a></li>
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>news/index.php">  <i class="fa fa-list"></i> List News </a></li>
                    </ul>
                </li>
                <li class="dropdown"> <a data-toggle="dropdown" href="#"> <i class="fa fa-table"></i> Article <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>article/add.php"> <i class="fa fa-plus-circle"></i> Add Article </a></li>
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>article/index.php">  <i class="fa fa-list"></i> List Article </a></li>
                    </ul>
                </li> 
                <li class="dropdown"> <a data-toggle="dropdown" href="#"> <i class="fa fa-table"></i> Student <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>student/add.php"> <i class="fa fa-plus-circle"></i> Add Student </a></li>
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>student/index.php">  <i class="fa fa-list"></i> List Student </a></li>
                    </ul>
                </li> 
                <li class="dropdown"> <a data-toggle="dropdown" href="#"> <i class="fa fa-table"></i> Picture <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>picture/add.php"> <i class="fa fa-plus-circle"></i> Add Picture </a></li>
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>picture/index.php">  <i class="fa fa-list"></i> List Picture </a></li>
                    </ul>
                </li>
                <li class="dropdown"> <a data-toggle="dropdown" href="#"> <i class="fa fa-table"></i> Setting <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>setting/position/index.php"> <i class="fa fa-list"></i> Position  </a></li>
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>setting/slide/index.php">  <i class="fa fa-list"></i> Slide </a></li>
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>setting/year/index.php">  <i class="fa fa-list"></i> Year </a></li>
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>setting/user/index.php">  <i class="fa fa-list"></i> User </a></li>
                        <li><a href="<?php echo BASE_URL_ADMIN; ?>logout.php">  <i class="fa fa-user"></i> Loguot </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navigation --> 
</header>