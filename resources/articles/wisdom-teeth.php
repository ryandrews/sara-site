<?php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<!doctype html>
<html>
<?php $basePath = "../../";?>
<?php $title = "A Little Wisdom About Wisdom Teeth | ";  include $basePath.'include/head.php'; ?>
<body>
<?php $selected = 'resources'; include $basePath.'include/header.php';?>
<div id="main">
    <div id="blog">

        <?php include '../top.php';?>

        <div class="bottom">
            <div class="content">
                <h2>Resources</h2>
                <div class="clearfix">
                    <?php $articlePath = "";  include '../toc.php'; ?>
                    <div class="column-right wisdom">
                        <h4>A Little Wisdom About Wisdom Teeth</h4>

                        <p class="author">posted by: <a href="<?php echo $basePath?>about-us.php">Sara Andrews DDS MS</a></p>

                        <ul class="social clearfix">
                            <li><div class="fb-share-button" data-href="http://www.andrewssmiles.com/blog/articles/wisdom-teeth.php" data-layout="button"></div></li>
                            <li><div class="g-plusone" data-annotation="none"></div></li>
                        </ul>

                        <p class="question">Why do we have wisdom teeth?</p>

                        <img class="right" src="<?php echo $basePath?>images/blog/wisdom_teeth-opt.jpg" alt="wisdom teeth"/>
                        <p>
                            The answer to this lies somewhere in the grey area of the answer to why do we have an appendix? Or why do we have a little toe?
                            Wisdom teeth are a third set of molars which erupt toward the end of skeletal growth; typically around
                            age 16 to 18; hence, their name. They often do not exist in a complete set of four, and occasionally
                            they're missing all together. They can be thought of as a vestigial organ; meaning at some point in
                            evolutionary history they were functional, and throughout evolution, they lost their functionality. Why
                            you may ask; well, one theory is that diet is the answer. We think our ancestors consumed foods
                            composed of mostly meat which is much harder to chew, requiring larger jaws and stronger jaw
                            muscles. Their large jaws accommodated more teeth including a third set of molars. Can we get those
                            jaws back by changing our diet you may ask? Unfortunately not; because that's not how evolution
                            works.
                        </p>

                        <p class="question">What is the problem with wisdom teeth?</p>

                        <p>
                            One reason wisdom teeth have gotten a bad rap is that we used to think that eruption of wisdom teeth
                            would crowd the rest of the teeth. We now know that this is not the case, and our teeth get crowded
                            over our lifetime whether we have wisdom teeth or not. These third molars are simply too far back in
                            the mouth to cause crowding of the front teeth. Wisdom teeth, however, can cause damage on the
                            second molars if they come in at a flat angle and push on their neighboring second molars. The most
                            significant problem caused by wisdom teeth however, and the most common reason why we
                            recommend their removal is because in most cases there is just not enough space for them. This lack of
                            sufficient space, causes wisdom teeth to only erupt partially; with only part of the tooth out of the gum.
                            This partial eruption forms a deep pocket between the tooth and the gum which becomes a route for
                            bacteria to seep in and cause an infection. This infection can be very serious and painful, causing
                            swelling of the face, and fever. Our recommendation for their removal, is thus, a preventative measure
                            in most cases.
                        </p>

                        <p class="question">Are they always useless?</p>

                        <p>
                            Not always! Sometimes wisdom teeth are fully erupted and in good bite relationship so that they're fully
                            functional in chewing. Sometimes, a wisdom tooth can be used to replace another missing molar, much
                            like a spare tire! There are several cases where I have moved a wisdom tooth forward with braces to
                            close a space for a previously extracted or missing tooth. Wouldn't it be nice to replace your missing
                            tooth with another tooth that you already have? I'll say!
                        </p>

                        <p class="question">When is the right time to have mine or my child's wisdom teeth removed?</p>

                        <p>
                            Consult an Orthodontist. An Orthodontist will monitor the wisdom teeth and make the optimum
                            decision for them based on growth, bite relationship, and space considerations. If the timing is right,
                            your orthodontist will make the appropriate referral to an oral surgeon to have your wisdom teeth
                            removed. This referral is typically made after the completion of orthodontic treatment around age 16-
                            18. The summer before going off to college usually works well!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="push"></div>
</div>
<?php include $basePath.'include/footer.php';?>

<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>