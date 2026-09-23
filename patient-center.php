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
<?php $title = "Patient Center | "; include 'include/head.php';?>
<body>

<?php $selected = 'center'; include 'include/header.php';?>
<div id="main">
<div id="patient-center">

    <div class="top">
        <div class="content">
            <div class="image">
                <img src="images/patent%20center/hero-c.jpg"/>
            </div>
        </div>
    </div>

    <div class="bottom">
    <div class="content clearfix">
        <div class="column-left">
        <h2>Patient Center:</h2>
        <ul class="sub-tabs clearfix">
            <li data-tab="first-visit">First Visit</li>
            <li data-tab="forms">Forms</li>
            <li data-tab="faq">FAQ's</li>
            <li data-tab="care">Care for Braces</li>
            <li data-tab="emergency">Emergencies</li>
        </ul>

        <ul class="window">
            <li class="first-visit">
                <h3>First Visit</h3>
                <p>
                    At your first visit, you will meet our friendly smile team, and we will give you a tour of our office!
                </p>
                <p>
                    We will take some photos of you, so that we can carefully diagnose your smile and talk about your
                    options.  You will then talk to Dr. Sara about your concerns, and she will do a thorough examination and
                    then discuss with you her findings. She will let you know if you'll benefit from orthodontic treatment
                    and your treatment options. Dr. Sara is known for listening to her patients and putting their desires and
                    concerns first. So you can be sure that she will take the time to listen to you and patiently go over all of
                    your options and risks, benefits and alternatives of each option. Dr. Sara will let you know what she
                    thinks is the best option for you, and together you can decide on treatment. Dr. Sara Also will be also let
                    you know approximately how long your treatment will take, and how much it will cost. We will then go
                    over your payment options and insurance benefits.
                </p>
                <p>
                    Our goal is to help you achieve the beautiful and healthy smile you've always wanted, so you can be
                    sure that we'll customize a financial plan that suites your needs!
                </p>
                <h4>Perks</h4>
                <ul>
                    <li>Your first visit consultation is complementary.</li>
                    <li>Unlike many offices, we don't do routine credit checks because we trust our patients.</li>
                    <li>You can get started with little and sometimes no down payment.</li>
                </ul>
            </li>
            <li class="forms">
                <h3>Patient Forms</h3>
                <p>
                    Please complete the new patient forms at your convenience prior to your first visit. You may email the completed documents to us prior to your visit, or print and bring them to your first visit. If you choose to email us the forms, please be sure to sign the Patient Authorization for Communication via Email form.
                </p>
                <p>
                    Included in the new patient packet are: Patient Information form, Insurance Registration form,  Patient Authorization for Communication via Email, Notice of Privacy Practices, and Acknowledgement of Receipt of  Notice of Privacy Practices.
                </p>

                <h4>Downloads</h4>
                <ul class="clearfix">
                    <li>
                        <a target="_blank" href="forms/New%20Patient%20Packet%20Adult.pdf">
                            <img src="images/patent%20center/form.png"/>
                            New Patient Packet Adult
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="forms/New%20Patient%20Packet%20Child.pdf">
                            <img src="images/patent%20center/form.png"/>
                            New Patient Packet Child
                        </a>
                    </li>
                </ul>
            </li>
            <li class="faq">
                <h3>FAQ's</h3>

                <ul class="answers">
                    <?php
                    $question = "Why should I go to a board-certified orthodontist?";
                    $answer = "Because your smile will be in good hands!  In addition to completing dental school and becoming a
                        dentist, a <a href='https://www.americanboardortho.com/general-public/what-is-a-board-certified-orthodontist/why-choose-a-board-certified-orthodontist/' target='_blank'>
                        board-certified orthodontist</a> has graduated from an accredited orthodontic specialty program,
                        and has successfully passed the written and practical portions of the ABO (American Board of
                        Orthodontics) exam.  This rigorous exam requires presentation of orthodontically-treated cases by the
                        candidate to the board.  The candidate passes the exam, only if the board members grade the cases as
                        treated to the board's standards. Only about 30% of Orthodontists are board-certified. Click
                        <a href='https://www.americanboardortho.com/general-public/what-is-a-board-certified-orthodontist/' target='_blank'>here</a>
                        to leaen even more about board-certified orthodontists.";
                    include 'include/answer.php';
                    ?>

                    <?php
                    $question = "What is the appropriate age for my child to be seen by an orthodontist?";
                    $answer = "The AAO (American Association of Orthodontists) recommends an orthodontic evaluation by no later
                        than age 7.  The reason for this early evaluation is that by this age four permanent molars and eight
                        permanent incisors have usually fully erupted, and <a href='services.php'>orthodontic problems</a> can be diagnosed.  Depending
                        on what these problems are, orthodontic treatment may or may not be recommended.  The idea is to
                        address certain problems at an early age and prevent more serious problems from arising in the future
                        when treatment may be much more complicated.";
                    include 'include/answer.php';
                    ?>

                    <?php
                    $question = "My child has already had early treatment. Does he/she need to have braces again?";
                    $answer = "Most likely yes.  It really depends on how the remaining permanent teeth erupt, and they almost never
                        erupt perfectly in the right place in the mouth.  At the end of early treatment or phase I, usually there
                        are 12 permanent teeth that haven't yet erupted, and proper alignment and interdigitation of these 12
                        teeth requires a second round of treatment called Phase II.  Once in a while, we do get lucky and a
                        second round is not required.";
                    include 'include/answer.php';
                    ?>

                    <?php
                    $question = "Do braces hurt?";
                    $answer = "Once braces are placed for the first time, a few hours later, teeth will begin to get slightly sore.  This
                        soreness is due to the physiological process of remodeling of bone surrounding the roots of the teeth,
                        and the initiation of tooth movement.   We like to compare this feeling to muscle soreness following
                        exercise or playing sports.  The truth is that in the old days, braces were more uncomfortable, and now
                        with the new technology of light archwires, braces have become much gentler while tooth movement
                        has become much more efficient.  Still, there is mild discomfort in the beginning which is very well
                        tolerated by patients of all ages.  Bottom line is that after the first one or two weeks, the mouth will get
                        \"used\" to the braces, and the discomfort will be minimal to none.";
                    include 'include/answer.php';
                    ?>

                    <?php
                    $question = "Am I too old for orthodontic treatment?";
                    $answer = "It's never too late to have the smile you've always wanted!  As long as you are healthy and functioning
                        well, regardless of age, if indicated, you will most likely respond well to orthodontic treatment.  Contrary
                        to popular belief, there is no age barrier to tooth movement.";
                    include 'include/answer.php';
                    ?>

                    <?php
                    $question = "What is the best kind of braces?";
                    $answer = "There probably is no \"best\" kind of braces, but some techniques are more comfortable and efficient
                        than others. Doctors vary in their preferences. Having experienced treating with many types of braces,
                        Dr. Andrews prefers <a href='services.php'>self-ligating braces</a> for she has found them to give the best results in her hands.
                        These braces have benefits such as being more efficient at straightening teeth, proven by studies.";
                    include 'include/answer.php';
                    ?>

                    <?php
                    $question = "Is Invisalign treatment for me?";
                    $answer = "You will need an evaluation by Dr. Andrews to determine if you are a good candidate for Invisalign. Dr.
                        Andrews has treated many complicated cases with Invisalign. The complexity of your case, and your
                        lifestyle will determine if Invisalign is for you.";
                    include 'include/answer.php';
                    ?>

                    <?php
                    $question = "How long does orthodontic treatment take?";
                    $answer = "It depends on the problem. Minor corrections can be done in 4-6 months, while more complicated
                        cases can take up to 24-30 months. Dr. Andrews is very efficient at orthodontic treatment because she
                        uses treatment plans and techniques that will give you the best results in the shortest amount of time.";
                    include 'include/answer.php';
                    ?>

                    <?php
                    $question = "How often do I come in for appointments?";
                    $answer = "Typically every 8-10 weeks in the beginning stages of treatment, and as we get closer to the end of
                        treatment, about every 4-6 weeks. Throughout treatment, you may also need to come in for a couple of
                        comfort visits to take care of a poky wire or a broken bracket, etc.";
                    include 'include/answer.php';
                    ?>

                </ul>

        </li>

        <li class="care">
            <h3>Care for Braces</h3>
            <p>
                Having good oral hygiene with braces is very important because poor oral hygiene can lead to
                permanent white scars, gingivitis and prolonged treatment time.  While braces do not cause these
                problems, they increase their risk by making it more difficult to clean your teeth and gums.
            </p>
            <p>
                <b>Brushing</b>: When brushing with braces, you must spend more time than you do when brushing without
                braces.  We recommend brushing for 4 minutes twice a day in the morning when you wake up and at
                night before going to bed.  An electric tooth brush, while not necessary, can make it easier to clean
                between the braces and the gums.
            </p>
            <p>
                <b>Flossing</b>: Use the special type of floss to get under the archwire and floss between your gums. Special
                types of floss for braces are available at all major drug stores.  We recommend flossing at least once a
                day at night time.
            </p>
            <p>
                <b>Mouth Rinse</b>: To reduce the risk of white spots, we recommend rinsing with a Fluoridated mouth rinse
                once a day at night time before going to bed and after brushing/flossing. For best results, do not
                rinse/drink with water for at least 30 minutes after to allow the Fluoride to get absorbed by your teeth.
            </p>
            <p>
                <b>Foods to eat/avoid</b>:  You should generally avoid eating hard foods that could break your brackets.
                Having frequent broken brackets can prolong your treatment time by a few months. We will give you a
                list of dos and don'ts when you first get your braces put on.  For the first 2 days after you get your
                braces, and after each adjustment visit, you should stick to soft foods.
            </p>
            <p>
                <b>Dental Visits</b>:  We recommend that you see your dentist for routine check-ups and cleanings at least
                every six months.  Communication between your orthodontist and general dentist is important in your
                treatment's success and efficiency.
            </p>
        </li>

        <li class=" emergency">
            <h3>Emergencies</h3>
            <h4>Poky Wire</h4>
            <p>
                As your teeth move, the wire can become "longer" and poke out the back.  Chewing can also
                cause the wire to bend and come out the very back bracket.  Poky wires tend to be more common in the
                beginning of treatment because the initial wires are much more flexible and bend and shift more easily.
                If you have a poky wire, call our office right away, and we'll bring you in to fix it.
            </p>

            <h4>Loose Bracket</h4>
            <p>
                A loose bracket is caused by failure of the bond between the base of the bracket and the tooth's
                surface.  Having one or two loose or "broken" brackets in the beginning of treatment is not uncommon.
                The most common cause for a loose bracket is chewing hard foods.  Be careful with what you chew and
                how you chew to avoid breaking your brackets.  This is important because having frequent broken
                brackets, can delay your treatment progress, and add to your time in braces, and no one wants that!
                Call our office as soon as you have a loose bracket to avoid delaying your treatment.
            </p>
            <h4>Mouth Sores</h4>
            <p>
                Some patients are susceptible to episodes of mouth sores. While braces do not cause them,
                they may be precipitated or exacerbated by an irritation from braces.  Sores can appear on the cheeks,
                lips or tongue.  This is not an emergency, but may be very uncomfortable.  Prompt relief may be
                achieved by applying a small amount of topical anesthetic (such as Orabase or Ora-Gel) directly to the
                sore using a cotton swab.  Placing a piece of the wax provided by us over the part of the braces that's
                causing the sore will help.  Rinsing the mouth with warm salt-water 3 to 5 times a day will help heal the
                sore faster, and is highly recommended.  Call our office, and we'll see you ASAP for a comfort visit.
            </p>
            <h4>Discomfort</h4>
            <p>
                Tooth soreness is common in the first 2 days (48 hours) after your braces or retainers are
                adjusted.  This discomfort is normal, and it should get better or go away by day 3.  We encourage eating
                soft foods in this period and rinsing the mouth with warm salt-water a few times a day.
            </p>
            <h4>Injury</h4>
            <p>
                If you injure your mouth, and have your tooth get loose or a part of it chips, call your family
                dentist or our office immediately!  If hurt your jaw, you may also be seen by an oral surgeon to make
                sure you don't have a jaw fracture.
            </p>
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