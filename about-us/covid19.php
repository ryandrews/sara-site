<?php
if ($_SERVER['HTTPS'] != "on") {
$url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
header("Location: $url");
exit;
}
?>
<!doctype html>
<html lang="en">
<?php $basePath = "../";?>
<?php $title = "Covid-19 Precautions  | ";  include $basePath.'include/head.php'; ?>
<body>
<?php include $basePath.'include/header.php';?>
<div id="main">
    <div id="about-us">

        <div class="top">
            <div class="content">
                <div class="slide-show" data-pause='4' data-transition="fade">
                    <ul class="clearfix">
                        <li class="slide5">
                            <img src="../images/about-us/office/front-desk.jpg"/>
                        </li>
                        <li class="slide1">
                            <img src="../images/blank.gif" data-slide-img="images/about-us/office/front1-c.jpg"/>
                        </li>
                        <li class="slide2">
                            <img src="../images/blank.gif" data-slide-img="images/about-us/office/back-c.jpg"/>
                        </li>
                        <li class="slide3">
                            <img src="../images/blank.gif" data-slide-img="images/about-us/office/front2-c.jpg"/>
                        </li>
                        <li class="slide4">
                            <img src="../images/blank.gif" data-slide-img="images/about-us/office/street-sign-c.jpg"/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bottom">
        <div class="content covid">
            <h2>COVID-19 Precautions:</h2>
            <p>
                Infection control has always been a top priority for our practice and you may have seen this during your visits to our office. Our infection control processes are made so that when you receive care, it's both safe and comfortable. We want to tell you about the infection control procedures we follow in our practice to keep patients and staff safe.
            </p>
            <p>
                Our office follows infection control recommendations made by the American Dental Association (ADA), the U.S. Centers for Disease Control and Prevention (CDC) and the Occupational Safety and Health Administration (OSHA). We follow the activities of these agencies so that we are up-to-date on any new rulings or guidance that may be issued. We do this to make sure that our infection control procedures are current and adhere to each agencies' recommendations.
            </p>
            <p>
                In addition to our standard infection control precautions, we're taking the following measures:
            </p>

            <ul>
                <li>In order to maximize air flow, HEPA filter air purifiers in each clinical, and reception areas.</li>
                <li>We have hand sanitizer that we will ask you to use when you enter the office. You will also find some in the reception area and other places in the office for you to use as needed.</li>
                <li>We will do our best to allow greater time between patients to reduce waiting times for you, as well as to reduce the number of patients in the reception area at any one time. You are welcome to wait outside if you prefer.</li>
            </ul>

            <p>We are asking you to please do the following:</p>
            <ul>
                <li>Wearing a mask upon entering our office is currently optional. Limit the number of family members waiting in the reception room to one if possible.</li>
                <li>Avoid coming in if you have in 14-21 days prior to your appointment experienced any flu-like symptoms such as cough, fever, shortness of breath, or have been in contact with someone confirmed to have COVID-19. We will be happy to reschedule your appointment.</li>
                <li>Brush your teeth at home prior to your visit in order to minimize use of our brushing station.</li>

            </ul>
        </div>
        </div>
    </div>
    <div id="push"></div>
</div>
<?php include $basePath.'include/footer.php';?>

</body>
</html>