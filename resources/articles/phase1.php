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
<?php $title = "Early Orthodontic Treatment: Is it Really Necessary? | ";  include $basePath.'include/head.php'; ?>
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
                    <div class="column-right phase1">
                        <h4>Early Orthodontic Treatment: Is it Really Necessary? </h4>

                        <p class="author">posted by: <a href="<?php echo $basePath?>about-us.php">Sara Andrews DDS MS</a></p>

                        <ul class="social clearfix">
                            <li><div class="fb-share-button" data-href="http://www.andrewssmiles.com/blog/articles/phase1.php" data-layout="button"></div></li>
                            <li><div class="g-plusone" data-annotation="none"></div></li>
                        </ul>


                        <img class="right" src="<?php echo $basePath?>images/blog/damon-girl.jpg" style="height:255px;width:250px;margin-left:10px;float:right;" alt="phase 1 patient"/>
                        <p>
                            Early or phase I orthodontic treatment has gained popularity in the recent decades in the U.S., especially
                            on the West Coast. Early treatment is nothing new for European orthodontists, as they've been mainly
                            using removable appliances to do bite corrections in children since 1900. Early treatment is a rather
                            controversial topic in the professional orthodontic community, and opinions vary when it comes to its
                            indications and benefits.
                        </p>

                        <p>
                            Early treatment remains controversial, because many orthodontic problems can wait until teenage years
                            to be corrected. Furthermore, many dental correction achieved in phase I, will have to be corrected
                            again in phase II when all the permanent teeth are erupted, and skeletal growth is at its peak. For this
                            reason, the orthodontist must have clear objectives when recommending phase I treatment, and these
                            objectives must be backed by scientific research, and communicated to parents.
                        </p>

                        <p>
                            I have heard so many parents tell me the story of having had their child treated in phase I by an
                            orthodontist, and once the child was ready for phase II, the parents were shocked that they had to “do it
                            all over again,” and pay the hefty costs.
                        </p>

                        <p>
                            My practice philosophy is to offer phase I treatment only when I know the child will receive significant
                            benefits from early treatment. I keep my phase I treatment conservative and short, correcting problems
                            which studies indicate, if left alone, can become bigger problems by the time the child is a teenager. I
                            make sure that my patient's parents are fully educated on the objectives of phase I treatment and the
                            future need for phase II treatment.
                        </p>

                        <p>
                            As a board-certified orthodontist, when recommending phase I treatment, I take many factors into
                            account. Phase I treatment not only has to make sense from a dental standpoint, but it also has to make
                            sense for the parents and the child being treated. A certain level of maturity is required of the child to
                            achieve treatment success. Some children are mature enough to welcome orthodontic treatment at age
                            7, others may not have that maturity until age 11 or 12. The decision to receive early treatment has to
                            be an educated decision between the orthodontist, parents and the child.
                        </p>

                        <p class="question">Early Treatment Timing</p>

                        <p>
                            Early or phase I orthodontic treatment takes place in the mixed dentition stage; meaning there are still
                            quite a few baby teeth present along with some permanent teeth. The typical age for phase I treatment
                            is between 8 to 9 years old. At this stage, the child typically has 4 upper and lower permanent incisors
                            and all first molars.
                        </p>

                        <p class="question">Appliances</p>

                        <p>
                            Phase I treatment can be done with a combination of fixed brackets and wires (braces), and appliances
                            such as bite correctors and expanders or with appliances only. The appliances used can be fixed
                            (cemented to the teeth) or removable.
                        </p>

                        <p class="question">Indication of Early Treatment</p>

                        <p>
                            Phase I treatment should be recommended where there is an immediate orthodontic problem in a child,
                            and delaying of correction will increase the risks for further problems in the future. These problems
                            include, but are not limited to: cross-bite, under-bite, severe overbite, growth discrepancies of the jaws,
                            severe crowding, etc.
                        </p>

                        <p class="question">Benefits of Early Treatment</p>

                        <p>
                            Phase I treatment can prevent damage to the teeth and the surrounding tissues. For example, studies
                            have shown that a child with severely protruding front teeth is more likely to damage those teeth in
                            case of fall injuries. Or a child with a single front tooth in cross-bite, is more likely to wear down the
                            enamel of the tooth in cross-bite over time. Another significant benefit may be the psychosocial
                            implications; children who are self-conscious about their appearance experience improved self-
                            perception after orthodontic treatment.
                        </p>

                        <p class="question">Can phase II treatment be avoided if phase I treatment is received?</p>

                        <p>
                            The short and quick answer to this question in a majority of cases is: No. The reason is that phase I is
                            generally designed to address immediate problems at hand. Only a few permanent teeth are treated in
                            phase I, therefore, phase II is required to treat the rest of the permanent teeth, and achieve the best
                            orthodontic results and the most stable bite possible for that individual.
                        </p>

                        <p class="question">Caveats of Early Treatment</p>

                        <p>
                            Generally speaking, children who receive phase I and phase II treatment, are in orthodontic treatment
                            for a longer total amount of time than ones who receive treatment in one phase. This added treatment
                            time also means added cost. Doing phase I and phase II treatment ultimately costs more money for the
                            parents than doing one round of orthodontic treatment. Having said that, the benefits of phase I
                            treatment in a majority of cases, outweigh these caveats.
                        </p>

                        <p>
                            When the right decision is made for the child, early orthodontic treatment can bring remarkable
                            changes through a pleasant experience making for delighted parents, a happy child, and a proud
                            orthodontist.
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