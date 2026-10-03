<?php
$selected = $selected ?? '';
$basePath = $basePath ?? '';
?>
<div id="header">
    <div class="content">
        <div class="pull-left">
            <ul class="tabs clearfix">
                <li <?php if($selected == 'about'){ echo 'class=\'selected\'';}?> ><a href="<?php echo $basePath;?>about-us.php">About Us</a></li>
                <li <?php if($selected == 'service'){ echo 'class=\'selected\'';}?> ><a href="<?php echo $basePath;?>services.php">Services</a></li>
                <li <?php if($selected == 'gallery'){ echo 'class=\'selected\'';}?> ><a href="<?php echo $basePath;?>smile-gallery.php"><span class="d-only">Smile</span> Gallery</a></li>
                <li <?php if($selected == 'center'){ echo 'class=\'selected\'';}?> ><a href="<?php echo $basePath;?>patient-center.php">Patient<span class="m-only">s</span> <span class="d-only">Center</span></a></li>
               <li <?php if($selected == 'resources'){ echo 'class=\'selected\'';}?> ><a href="<?php echo $basePath;?>resources">Resources</a></li>
            </ul>
        </div>

        <ul class="info pull-right">
            <li>1620 San Carlos Ave<br/> San Carlos, CA 94070</li>
            <li>P: (650) 620-9675</li>
            <li class="fax">F: (650) 620-9681</li>
            <li>
                <ul class="social-top">
                    <li>
                        <a href="mailto:info@AndrewsSmiles.com">
                            <img src="<?php echo $basePath;?>images/logos/email.png" alt="email address"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.google.com/maps/place/1620+San+Carlos+Ave,+San+Carlos,+CA+94070/@37.503620,-122.265594,17z" target="_blank" title="See us on Google Maps">
                            <img src="<?php echo $basePath;?>images/logos/google-map.png" alt="See us on Google Maps"/>
                        </a>
                    </li>
                    <li><a href="https://plus.google.com/+AndrewsOrthodonticsSanCarlos" target="_blank" title="See us on Google Plus">
                            <img src="<?php echo $basePath;?>images/logos/googleP3.png" alt="See us on Google Plus"/>
                        </a>
                    </li>
                    <li><a href="http://www.yelp.com/biz/andrews-orthodontics-san-carlos" target="_blank" title="See us on Yelp">
                            <img src="<?php echo $basePath;?>images/logos/yelp-bw.jpg" alt="See us on Yelp"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/andrewsorthosancarlos" target="_blank">
                            <img src="<?php echo $basePath;?>images/logos/facebook.png" alt="go to facebook"/>
                        </a>
                    </li>

                    <!--<li><a href="/instagram" target="_blank"><img src="images/logos/instagram.png" alt="go to instagram"/></a></li>
                        <li><a href="https://twitter.com/drsara_dds" target="_blank"><img src="images/logos/twitter.png" alt="go to dr sara on twitter"/></a></li>
                    -->
                </ul>
            </li>
        </ul>

        <h1 id="main-logo">
            <a href="<?php echo $basePath;?>home.php">
                <img src="<?php echo $basePath;?>images/logos/andrews.png" alt="Andrews Orthodontics"/>
            </a>
        </h1>
    </div>
</div>
<div id="header-size"></div>