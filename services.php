<?php
require_once __DIR__ . '/include/ssl.php';
?>
<!doctype html>
<html lang="en">
<?php $basePath = "";?>
<?php $title = "Services |"; include 'include/head.php';?>
<body>
<?php $selected = 'service'; include 'include/header.php';?>

<div id="main">
<div id="services">

    <div class="top">
        <div class="content">
            <div class="image">
                <img src="images/services/hero-c.jpg" alt="patient in aligners"/>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="content">
            <div class="clearfix">

                <div class="column-left">
                   <h2> Learn about our services: </h2>

                    <ul class="sub-tabs clearfix">
                        <li data-tab="braces">Braces</li>
                        <li data-tab="invisalign">Invisalign<span>&reg;</span></li>
                        <li data-tab="retainers">Retainers</li>
                        <li data-tab="early">Early</li>
                        <li data-tab="teen">Teen</li>
                        <li data-tab="adult">Adult</li>
                        <li data-tab="surgical">Surgical</li>
                    </ul>
                    <ul class="window">

                        <li class="treatment braces">
                            <h3>Braces</h3>
                            <p>
                                <img src="images/services/braces-c.jpg" alt="smiling braces">
                                We use Damon<span class="restrict">&reg;</span> metal and clear braces. Damon<span class="restrict">&reg;</span> braces are a type of passive self-ligating braces, which
                                means that they use low friction, low force, and they have gates that open and close on the wire,
                                eliminating the need for elastic/wire ties. After years of working with many types of braces, Dr. Sara has
                                chosen Damon<span class="restrict">&reg;</span> braces as her primary type of braces for her practice. Dr. Sara has found the following
                                patient benefits of Damon<span class="restrict">&reg;</span> braces:
                            </p>
                            <ul>
                                <li>Faster tie-in means less chair time for the patient and shorter appointments.</li>
                                <li>
                                    Complete tie-in means less frequent patient visits: typically every 2 months instead of every
                                    month.
                                </li>
                                <li>No elastic/wire ties means easier cleaning around the braces.</li>
                                <li>Low friction means faster initial tooth alignment and space closure.</li>
                                <li>Low force means more comfort for the patient and better health for the tooth.</li>
                            </ul>
                            <p>
                                Braces technology has improved largely in the past few decades, and our Damon<span class="restrict">&reg;</span> braces offer the latest
                                advancement in technology which means a better experience for the patient and more efficient
                                treatment results.
                            </p>
                        </li>

                        <li class="treatment invisalign">
                            <h3>Invisalign<span class="restrict">&reg;</span></h3>
                            <p>
                                <img src="images/services/invisalign/example.png" alt="hand with in">
                                Invisalign<span class="restrict">&reg;</span> is a clear, removable orthodontic appliance that is virtually invisible.
                                Tooth movement is achieved by a series of custom-made "aligners" that sequentially straighten teeth until the desired
                                outcome is achieved. Each aligner is typically worn for 2 weeks and about 20 hours a day. While the
                                aligners are worn, you must not eat or drink anything other than water. This removable, clear aligner
                                therapy offers significant advantages that benefit many patients:
                            </p>
                            <ul>
                                <li>Highly esthetic</li>
                                <li>Easy oral hygiene maintenance</li>
                                <li>Fewer and shorter visits</li>
                                <li>Comfortable</li>
                            </ul>
                            <p>
                                Invisalign is a great tool, and most patients are candidates. Dr. Andrews is a Platinum Invisalign provider.
                                Come see us to see if Invisalign is the right option for you.
                            </p>

                        </li>

                        <li class="treatment retainers">
                            <h3>Retainers</h3>
                            <p>
                                You've invested a lot of effort in achieving your beautiful smile. Retainers protect your
                                investment! Without retainers, straightened teeth will shift back to their original crooked
                                position. This is because the gum surrounding each tooth has a remarkable memory of forever
                                wanting to twist teeth back into their crooked position. When you get brand new retainers,
                                they may make your teeth sore for the first day or two, much like a brand new pair of shoes.
                                You have to break them in! Generally, maximum home and night time wear is enough to keep
                                your teeth straight. If your retainers feel tight when you put them on each time, this is
                                a sign that you should wear them more often. To clean, brush them with water daily, and soak
                                them in hydrogen peroxide for 20 minutes once a week or so. Keep them in their case whenever
                                not in your mouth. Keep good care of your retainers and wear them for as long as you want your
                                teeth to stay straight!
                            </p>

                            <p>Dr. Sara Andrews will recommend the best type of retainers for you.  Here are the different types:</p>

                            <h4>Fixed</h4>
                            <ul>
                                <li>A wire bonded to the back of upper or lower front teeth.</li>
                                <li>Requires diligent oral hygiene.</li>
                            </ul>

                            <h4>Removable</h4>
                            <ul>
                                <li>
                                    <h5>Hawley</h5>
                                    <ul>
                                        <li>Has a wire in the front and plastic in the back.</li>
                                        <li>You can pick fun colors and patterns!</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Clear</h5>
                                    <ul>
                                        <li>Plastic covers the teeth</li>
                                        <li>Practically invisible</li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="viewer">
                                <img src="images/services/retainers-c.jpg" alt="image of 2 retainers"/>
                            </div>
                        </li>

                        <?php
                        $class = 'early';
                        $title = 'Early Treatment';
                        $info = "Early treatment or Phase I treatment typically takes place in a growing child who has a significant
                                number of primary teeth present.  Early treatment is indicated when there exist significant orthodontic
                                problems, which if ignored, can lead to more complicated problems in the future.  Phase I treatment
                                may start as early as age 7 depending on the orthodontic problems on hand.  Upon diagnosing the
                                orthodontic problem, Dr. Sara Andrews will discuss with the parents all of the options that are available
                                and together, you can make a decision for what is the best option for giving your child an opportunity
                                for a healthy, beautiful smile.";
                        $problem = "Here are some common orthodontic problems in a growing child that may indicate early treatment:";
                        $problemText = array(
                            "Anterior Crossbite",
                            "Crowding",
                            "Deep bite",
                            "Ectopic Eruption",
                            "Open bite",
                            "Class II or \"Overbite\"",
                            "Posterior Crossbite with a Bite Shift",
                            "Class III or \"Underbite\""
                        );
                        $problemImage = array(
                            "images/services/early/ant-xbite.png",
                            "images/services/early/crowding.png",
                            "images/services/early/deep-bite.png",
                            "images/services/early/ectopic-eruption.png",
                            "images/services/early/open-bite.png",
                            "images/services/early/overbite.png",
                            "images/services/early/post-xbite.png",
                            "images/services/early/underbite.png"
                        );
                        $benefits = array(
                            "Guide jaw growth",
                                    "Lower the risk of trauma to protruded front teeth",
                                    "Correct harmful oral habits",
                                    "Improve appearance",
                                    "Guide permanent teeth into a more favorable position",
                                    "Create a more pleasing arrangement of teeth, lips and face"
                        );
                        include 'include/treatment.php';
                        ?>

                        <li class="treatment teen">
                            <h3>Teen</h3>
                            <p>
                                The typical age for starting full or Phase II orthodontic treatment is 12-14 years old. However, this start
                                age can vary significantly from patient to patient and from boys to girls depending on skeletal and dental
                                development.
                            </p>
                            <p>
                                Generally speaking, the same orthodontic problems that apply to children, apply to teens except that
                                teens have almost a full set of permanent dentition with no baby teeth remaining. This, of course, is a
                                generalization because sometimes baby teeth fail to fall out on their own and need help from us!
                            </p>
                            <p>
                                We treat our teen patients with full Damon<span class="restrict">&reg;</span> braces or
                                Invisalign Teen <span class="restrict">&reg;</span> or a combination of both. The
                                decision as to what is the best option for our teen patient depends on a thorough discussion between
                                Dr. Sara, our teen and the parents. This is a very important decision and it depends on a variety of dental
                                and personal factors. Dr. Sara has treated many teens with braces and Invisalign<span class="restrict">&reg;</span>
                                and knows based on experience what works best for whom.
                            </p>
                            <p>
                                Parents, we guarantee that you will make the right decision for your teen at our office, because Dr. Sara
                                will take the time to explain your options. Together we can make the best treatment decision for your
                                teen.
                            </p>
                        </li>

                        <?php
                        $class = 'adult';
                        $title = 'Adult Treatment';
                        $info = " Whether you've never had orthodontic treatment or you have a history of orthodontic treatment, and
                                have crowding relapse as a result of not wearing your retainers, you may benefit from orthodontic
                                treatment.  Dr. Sara Andrews has extensive experience treating adults of all ages, with Invisalign, braces
                                or a combination, and has achieved remarkable improvements in health and aesthetics of her adult
                                patients' smiles.  It's never too late to improve your smile. The American Association of Orthodontists
                                (AAO) recommends treatment for adults, when appropriate, in conjunction with regular dental care.  At
                                your consultation visit, Dr. Sara Andrews will discuss with you all of your options with pros and cons, and
                                together with you and your dentist, we can decide what is the best option for your treatment. ";
                        $problem = "Here are some common orthodontic problems in adults that may indicate treatment:";
                        $problemText = array(
                            "Crowding",
                            "Deep bite",
                            "Missing/Impact/Tipped Teeth",
                            "Open bite",
                            "Protrusion",
                            "Gum Recession",
                            "Spacing",
                            "Tooth wear",
                            "Underbite"
                        );
                        $problemImage = array(
                            "images/services/adulttx/crowding.png",
                            "images/services/adulttx/deep bite.png",
                            "images/services/adulttx/missing teeth.png",
                            "images/services/adulttx/open bite.png",
                            "images/services/adulttx/protrusion.png",
                            "images/services/adulttx/recession.png",
                            "images/services/adulttx/spacing.png",
                            "images/services/adulttx/tooth wear.png",
                            "images/services/adulttx/underbite.png"
                        );
                        $benefits = array(
                            "Help prevent or improve periodontal problems",
                            "Help prevent or reduce further bone loss around teeth",
                            "Improves ability of the dentist to restore missing teeth",
                            "Improves aesthetics for a better smile and facial appearance",
                            "Improves self-confidence and self-esteem",
                            "Improves oral health"
                        );
                        include 'include/treatment.php';
                        ?>


                        <li class="treatment surgical">
                            <h3>Surgical Orthodontics</h3>

                            <p>
                                The goal of orthodontic treatment is to not only straighten teeth, but to achieve a functional, healthy,
                                and stable bite. In a majority of patients this goal is achieved via orthodontic tooth movement alone,
                                however, in some cases, where the upper and lower jaws housing the teeth are significantly off from
                                each other, this goal is best achieved with a combination of orthodontics and orthognathic surgery. The
                                orthodontic part of treatment is done by an orthodontist, while the surgery is done by an oral and
                                maxillofacial surgeron (OMFS). Dr. Sara has extensive training in treating orthognathic surgery patients,
                                and has the clinical eye to know who will benefit the most from this type of treatment. After reviewing
                                your case, and listening to your concerns, Dr. Sara will determine if you could benefit from orthognathic
                                surgery and will refer to to an OMFS for consultation.
                            </p>
                        </li>
                        <li>
                            <div class="annotation"> * Photos courtesy of the American Association of Orthodontists </div>
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
<?php include 'include/footer.php';?>
</body>
</html>