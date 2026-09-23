<?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<!doctype html>
<html>
<?php $basePath = "";?>
<?php $title = ""; include 'include/head.php';?>
<body>

<?php $selected = ''; include 'include/header.php';?>
<div id="main">
    <div id="home">

        <div class="top">
            <div class="content">
                <div class="slide-show" data-pause='6'>
                    <ul class="clearfix">
                        <li class="slide1">
                            <div> Welcome to Andrews Orthodontics!</div>
                            <img src="images/home/sara-logo3-min.JPG"/>
                        </li>
                        <li class="slide2">
                            <div> Helping kids find their golden smiles</div>
                            <img src="images/blank.gif" data-slide-img="images/home/group-c.jpg"/>
                        </li>
                        <li class="slide3">
                            <div> Check out our <a href="smile-gallery.php">Smile Gallery!</a></div>
                            <img src="images/blank.gif" data-slide-img="images/home/Jill-c.jpg"/>
                        </li>
                        <li class="slide4">
                            <div>We specialize in smiles for all ages! Take a look at all of our <a href="services.php">services</a>.</div>
                            <img src="images/blank.gif" data-slide-img="images/home/home1-c.jpg"/>
                        </li>
                        <li class="slide5">
                            <div><a href="services.php">Braces and Invisalign<span>&reg;</span> for teens</a></div>
                            <img src="images/blank.gif" data-slide-img="images/home/group2-c.jpg"/>
                        </li>
                        <li class="slide6">
                            <div>A golden experience for your whole family!</div>
                            <img src="images/blank.gif" data-slide-img="images/home/family-c.jpg"/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bottom">
            <div class="content">
                <div class="clearfix">

                    <div class="column-left">
                        <div class="rewards-link">
                            Check out our
                            <a target="_blank" href="https://andrewssmiles.patientrewardshub.com/">Smile Rewards</a>
                            and
                            <a target="_blank" href="https://andrewssmiles.patientrewardshub.com/about/reviews/andrews-orthodontics-990-laurel-st-ste-a-san-carlos-california">Reviews</a>
                             on our Reward Hub!
                        </div>
                        <h2>Our Philosophy</h2>
                        <p>
                            Welcome to the orthodontic practice of Dr. Sara Andrews.  We are committed to clinical excellence and
                            providing our patients with the highest level of care and service.  Our orthodontic philosophy is that
                            every smile is as unique as its individual owner, and that one approach does not fit all.  Dr. Sara Andrews
                            understands the individual variations in smile, and aims to achieve the optimum aesthetics and function
                            unique to every patient.  Our goal is not to just straighten your teeth, but to deliver the best smile
                            aesthetic and function possible for you, while giving you that unique individualized experience from the
                            moment you step into our office.  We know what a difference a confident smile can make in the quality
                            of life, and we want every single one of our patients to experience that difference in an environment
                            that truly understands and cares for them.
                        </p>

                        <h2>What Sets Us Apart</h2>
                        <p>
                            Our focus is treatment efficiency with the best possible patient experience.
                            Dr. Andrews uses the latest technological advances in orthodontics with a conservative, yet
                            sophisticated approach. Dr. Andrews guarantees the optimum results for you or
                            your child in the shortest amount of treatment time. We pride ourselves in putting patient
                            experience at the top of our priority list.
                        </p>
                        <p>
                            For more information about our COVID-19 Precautions please visit
                            <a class="covid-link" href="/about-us/covid19.php">here</a>.
                        </p>

                        <div class="logos clearfix">
                            <ul>
                                <li class="rewards-card"><a href="https://andrewssmiles.patientrewardshub.com/" target="_blank">
                                        <img src="images/home/Card_1_Visual_Website.png" alt="Smile Reward 1">
                                    </a>
                                </li>
                                <li><a href="http://www.americanboardortho.com" target="_blank">
                                        <img src="images/logos/abo-seal.jpg" alt="American Board Of Othordontics">
                                    </a>
                                </li>
                                <li><a href="https://www.aaoinfo.org/" target="_blank">
                                        <img src="images/logos/aao-logo.jpg" alt="American Association of Othordintics">
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li class="rewards-card"><a href="https://andrewssmiles.patientrewardshub.com/" target="_blank">
                                        <img src="images/home/Card_2_Visual_Website.png" alt="Smile Reward 2">
                                    </a>
                                </li>
                                <li><a href="http://www.invisalign.com">
                                        <img src="images/logos/invisalign_platinum.jpg" alt="Invisalign Platinum Provider">
                                    </a>
                                </li>
                                <li><a href="http://www.ada.org/" target="_blank">
                                        <img src="images/logos/ADA%20Member.jpg" alt="American Dental Association">
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>


                    <div class="column-right">
                        <?php $title = "Message us to book an appointment:"; include 'include/message-module.php';?>

                        <?php include 'include/hours.php';?>

                        <?php include 'include/map.php';?>

                        <?php include "include/social.php"; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="push"></div>
</div>
<?php include 'include/footer.php';?>
</body>
</html>