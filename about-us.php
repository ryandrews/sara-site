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
<?php $title = "About Us | "; include 'include/head.php';?>
<body>
<?php $selected = 'about'; include 'include/header.php';?>
<div id="main">
<div id="about-us">

    <div class="top">
        <div class="content">
            <div class="not-slide-show" data-pause='4' data-transition="fade">
                <ul class="clearfix">
                    <li class="slide1">
                        <img src="images/about-us/office/new/outside_1024x768.jpg" alt="outside"/>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="content">
            <div class="clearfix">

                <div class="column-left">
                    <h2>About Us:</h2>

                    <ul class="sub-tabs clearfix">
                        <li data-tab="meet-doctor">Meet Dr. Andrews</li>
                        <li data-tab="team">Meet Our Team</li>
                        <li data-tab="office">Our Office</li>
                        <li data-tab="contact">Contact Info</li>
                    </ul>

                    <ul class="window">
                        <li class="meet-doctor">
                            <h3>Meet Dr. Sara Andrews</h3>
                            <div>
                                <img class="doctor" src="images/about-us/headshot.jpg" alt="image of Dr. Andrews"/>
                                <p>
                                    Dr. Andrews is a full-time orthodontist and sole practitioner at Andrews Orthodontics. In addition to
                                    private practice ownership, Dr. Andrews is an assistant clinical professor at University of California,
                                    San Francisco (UCSF) Department of Orthodontics, where she teaches practice of orthodontics to the
                                    specialty program residents.
                                </p>
                                <p>
                                    Dr. Sara Andrews received her D.D.S. degree, Magna Cum Laude, from University of California, Los
                                    Angeles (UCLA) School of Dentistry in 2010. She completed her Orthodontic specialty training at
                                    University of California, San Francisco (UCSF) in 2013. In addition to her orthodontic certificate, Dr. Sara Andrews obtained a Masters of
                                    Science (MS) degree in Oral Biology and Craniofacial Sciences from UCSF. Dr. Sara Andrews is a
                                    diplomate of the American Board of Orthodontics (ABO), which means that she has successfully
                                    completed the ABO examination and certification process.
                                </p>

                                <p>
                                    Dr. Andrews is known by her patients for her gentle and caring demeanor and conservative approach
                                    to orthodontic care. She genuinely cares about every one of her patients, and listens to their needs.
                                    She prides herself on delivering the absolute best results for her patients in the shortest amount of
                                    treatment time, and optimum patient comfort. At your initial consultation, she will be sure to listen
                                    to your concerns and present to you the best treatment options including pros and cons, so you can
                                    be confident in your treatment decision. There is nothing Dr. Sara enjoys more, than to make a
                                    difference in her patients&#39; lives, and to see them smile with confidence.
                                </p>

                            </div>
                            <div>
                                <img class="family" src="images/about-us/family-2019.jpg" alt="family"/>
                            <p>
                                Outside of private practice, Dr. Sara Andrews enjoys community and professional leadership
                                involvement. Dr. Andrews is the 2019 president of the San Mateo County Dental Society (SMCDS), a
                                local component of the California Dental Association (CDA). Along with other board members, Dr.
                                Andrews is involved in strategic planning for the dental society&#39;s operations, and engaging local
                                dentists. Dr. Andrews is also an active member of the
                                San Mateo County Chamber of Commerce, American Dental Association (ADA), California Dental
                                Association (CDA), American Association of Orthodontist (AAO), Pacific Coast Society of Orthodontist (PCSO).
                            </p>

                            <p>
                                Dr. Sara Andrews lives in San Carlos with her husband, Ryan, and their two daughters. They love the
                                Bay Area and all the wonderful activities and cultural diversity that it offers. Outside of smile design,
                                Dr. Andrews enjoys hiking, jogging, dabbling on the keyboard, watching movies, and spending time
                                with family and friends.
                            </p>

                            </div>
                            <?php include "include/member.php"; ?>
                        </li>

                        <li class="team">
                            <h3>Meet the Team</h3>
                            <h4>April <span> - Treatment Coordinator </span></h4>
                            <div>
                                <img src="images/about-us/team/april.png" alt="image of April"/>
                                <p>
                                    April grew up in Belmont and has remained a San Mateo resident thus far.  She brings to us over 20 years of administrative and customer service experience working with both children and adults in a variety of settings.  April loves to see the smiles and confidence that orthodontic treatment brings to all of our patients. She takes pride in her organizational skills as well as her attention to detail and ability to multitask.
                                </p>
                                <p>
                                    Outside of work, April enjoys spending time at the beach & going for walks, watching an array of movies, doing arts & crafts, baking, and finding new restaurants to try.  She also loves cooking and making up new recipes at home with her best friend.  Most of all, April has a son who is her pride and joy.  They are each other's biggest fans!
                                </p>
                            </div>
                            <h4>Eli <span> - Registered Dental Assistant</span></h4>
                            <div>
                                <img src="images/about-us/team/eli.png" alt="image of Eli"/>
                                <p>
                                    Eli is a Redwood City native and has been working in the dental field for 10 years. Since completing her training as a dental assistant she has continued her education to receive her associates in biological sciences and one day become a dental hygienist.
                                </p>
                                <p>
                                    She strives to provide excellent care in a fun and comfortable environment by listening to patients and keeping them informed every step of the way. She loves being part of a team that works hard to help patients of all ages enjoy beautiful, healthy smiles.
                                </p>
                                <p>
                                    Eli enjoys spending her spare time with her family, and is a mother of two boys. She likes to explore new places and try new foods and enjoys being outdoors.
                                </p>
                            </div>

                        </li>

                        <li class="office">
                            <h3>Our Office</h3>

                            <div class="slide-show" data-pause='6' data-transition="slide">
                                <ul class="clearfix">
                                    <li class="slide1">
                                        <img src="images/about-us/office/new/front_desk_1024x768.jpg" alt="front desk"/>
                                    </li>
                                    <li class="slide2">
                                        <img src="images/blank.gif" data-slide-img="images/about-us/office/new/front_desk2_1024x768.jpg"/>
                                    </li>
                                    <li class="slide3">
                                        <img src="images/blank.gif" data-slide-img="images/about-us/office/new/bay2_1024x768.jpg"/>
                                    </li>
                                    <li class="slide4">
                                        <img src="images/blank.gif" data-slide-img="images/about-us/office/new/bay_768x1024.jpg"/>
                                    </li>
                                    <!--<li class="slide5">
                                        <img src="images/blank.gif" data-slide-img="images/about-us/office/new/dr_office_1024x768.jpg"/>
                                    </li>-->
                                    <li class="slide6">
                                        <img src="images/blank.gif" data-slide-img="images/about-us/office/new/exam_room_768x1024.jpg"/>
                                    </li>
                                    <li class="slide7">
                                        <img src="images/blank.gif" data-slide-img="images/about-us/office/new/hall_768x1024.jpg"/>
                                    </li>
                                    <li class="slide8">
                                        <img src="images/blank.gif" data-slide-img="images/about-us/office/new/private_768x1024.jpg"/>
                                    </li>
                                    <li class="slide9">
                                        <img src="images/blank.gif" data-slide-img="images/about-us/office/new/waiting_area_768x1024.jpg"/>
                                    </li>
                                </ul>
                                <!--<div class="pager left"><div class="arrow"></div></div>-->
                                <div class="pager right"><div class="arrow"></div></div>
                            </div>

                            <p><b>High-tech, Clean, Green</b></p>
                            <p>
                                We are proud to offer our patients the highest quality of service in our remodeled 2100
                                square foot office with cutting edge technology. We are compliant
                                with the latest California building codes, and energy conservation. We aim to maximize
                                patient safety and comfort in a feel-good, clean, and energy-efficient environment. Here are some of the
                                top features of our office:
                            </p>
                            <ul>
                                <li>
                                    Welcome to the goop-free world of orthodontics! Our <a href="http://www.itero.com/en/products/itero_element_two">iTero<span class="restrict">&reg;</span> Element 2</a>
                                    intra-oral scanner enhances patient comfort by using digital impression technology.
                                </li>
                                <li>
                                    Our digital X-Ray machine is the latest in dental imaging technology, offering the
                                    highest diagnostic quality at the lowest radiation dosages. We take pride in minimizing
                                    radiation to our patients. To learn more about our machine, click on the link below:
                                    <a href="http://www.sironausa.com/us/products/imaging-systems/orthophos-xg-3dready/?tab=3794" target="_blank">
                                        Sironausa: ORTHOPHOS XG 3D
                                    </a>
                                </li>
                                <li>
                                    We use independent pure filtered water units(Hu-friedy® Water Filter) in our clinical bay which is free of bacteria and
                                    fungi as compliant with the ADA guidelines. To learn more, please visit:
                                    <a href="http://www.ada.org/en/member-center/oral-health-topics/dental-unit-waterlines" target="_blank">
                                        ADA: Dental Unit Waterlines
                                    </a>
                                </li>
                                <li>We use a medical grade disinfectant to wipe down all clinical surfaces after each patient visit.</li>
                                <li>We sterilize our intraoral instruments via autoclave (Midmark® M11), and we spore-test our
                                    machine weekly as required by law.</li>
                                <li>We use only Latex-free gloves.</li>
                                <li>We offer our guests complementary Wi-Fi internet access.</li>
                                <li>We have plenty of patient parking for your convenience.</li>
                            </ul>
                            <p>We look forward to meeting you, and we hope that you'll love our office as much as we do!</p>
                        </li>

                        <li class="contact">
                            <h3>Contact Information</h3>

                            <ul>
                                <li>Location: 1620 San Carlos Ave, San Carlos, CA 94070</li>
                                <li>Phone: (650) 620-9675</li>
                                <li>Fax: (650) 620-9681</li>
                                <li>Email: <a href="info@AndrewsSmiles.com"> info@AndrewsSmiles.com </a></li>
                            </ul>
                        </li>

                    </ul>
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
<div id="modal"> <img class="large"/> <img class="close" src="/images/close.png"/> </div>
<?php include 'include/footer.php';?>
</body>
</html>