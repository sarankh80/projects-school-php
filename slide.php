<div class="banner-outer">
    <div class="banner-slider">
    <?php 
    	$sql_slide = "SELECT * FROM slide"; 
    	$result_slid = $conn->query($sql_slide);
    	if($result_slid->num_rows > 0){
    		while ($row = $result_slid->fetch_assoc()) {
                $button = '';
                if($row['button']=='no'){
                    $button='<a href="about.html" class="btn animated fadeInRight">
                    Know More <span class="icon-more-icon"></span></a> ';
                }
    		echo '<div class="slide'.$row['id'].'" style="background:url(./images/'.$row['image'].') 
            no-repeat center top / cover">
                    <div class="container">
                        <div class="content animated fadeInRight">
                            <div class="fl-right">
                                <h1 class="animated fadeInRight">
                                    <span class="animated fadeInRight">'.$row['title'].'</span> 
                                </h1>
                                <p class="animated fadeInRight">
                                    '.$row['description'].' </p>
                                '.$button.'
                            </div>
                        </div>
                    </div>
                </div>';
    		}
    	}
    ?>
            
            <!-- <div class="slide2">
                <div class="container">
                    <div class="content">
                        <h1 class="animated fadeInUp">MBA Marketing</h1>
                        <p class="animated fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="about.html" class="btn animated fadeInUp">Know More <span class="icon-more-icon"></span></a> <a href="gallery.html" class="btn white animated fadeInUp hidden-xs">Take a Tour <span class="icon-more-icon"></span></a> </div>
                </div>
            </div>
            <div class="slide3">
                <div class="container">
                    <div class="content animated fadeInLeft">
                        <h1 class="animated fadeInLeft">Online MBA</h1>
                        <p class="animated fadeInLeft">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="about.html" class="btn animated fadeInLeft">Know More <span class="icon-more-icon"></span></a> </div>
                </div>
            </div> -->
    </div>
</div>