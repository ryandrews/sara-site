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
<?php $title = "Braces or Clear Aligners: Which One is Right for Me? | ";  include $basePath.'include/head.php'; ?>
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
                    <div class="column-right aligners">
                        <h4>Braces or Clear Aligners: Which One is Right for Me? </h4>

                        <p class="author">posted by: <a href="<?php echo $basePath?>about-us.php">Sara Andrews DDS MS</a></p>

                        <ul class="social clearfix">
                            <li><div class="fb-share-button" data-href="http://www.andrewssmiles.com/blog/articles/braces-vs-clear.php" data-layout="button"></div></li>
                            <li><div class="g-plusone" data-annotation="none"></div></li>
                        </ul>

                        <img class="right" src="<?php echo $basePath?>images/blog/aligner.jpg" alt="aligner"/>
                        <p>
                            When considering improving your smile, you may be wondering if you should go with braces or clear
                            aligners. In this article, I've put together a series of factors that you should strongly consider before
                            making this decision.
                        </p>

                        <p class="question">Choosing an Orthodontist</p>

                        <p>
                            If you want to have the best treatment options to improve your smile, you must choose your
                            orthodontist wisely. You may be surprised to know that not all orthodontists use clear aligners, and even
                            the ones that do, vary greatly in the amount of experience they have treating patients with clear
                            aligners. Also, keep in mind that only 1 out 3 orthodontists are certified by the American Board of
                            Orthodontics (ABO). So if you want your smile to be in good hands, see an ABO-certified orthodontist
                            who is an expert in treating patients with braces and clear aligners. Most importantly, remember that
                            braces and clear aligners are only tools, and achievement of ideal orthodontic results are in the hands
                            and eyes of the operator. So, just because someone "does" braces or clear aligners, does not mean that
                            they can treat to the highest standard of quality.
                        </p>

                        <p class="question">Knowing all of your options</p>

                        <p>
                            At the consultation appointment, if you are found to be a good candidate for orthodontic treatment,
                            your orthodontist will present to you the options for braces and clear aligners, and a tentative treatment
                            plan. While presenting you with options, however, a good doctor will let you know which option will
                            work best for you and why. A skilled doctor with knowledge and experience, will be able to get a good
                            feel for your needs and concerns within the first few minutes of meeting you, and will guide you toward
                            the right treatment option. An expert orthodontist will treat YOU and not just your teeth.
                        </p>

                        <p class="question">Being honest with yourself</p>

                        <p>
                            How motivated are you to improve your smile? How disciplined are you? Do you stick to a routine
                            schedule? Do you have scheduled meals or do you snack throughout the day? Do you meet with clients
                            frequently who may judge you on your appearance? Do you see yourself wearing removable aligners in
                            your mouth for 20 hours a day? Do you drink multiple cups of coffee a day? Did you have braces in the
                            past? Do you wear contact lenses?
                        </p>

                        <p>
                            If you are a responsible adult who cares about his/her oral health, is highly motivated to improve his/her
                            smile, sticks to a pretty routine schedule, and is esthetically-conscious, chances are that clear aligners
                            are a good option for you.
                        </p>

                        <p>
                            In summary, when it comes to improving your smile, the decision to have braces or clear aligners is one
                            made by you and your orthodontist together. The best method for treating your teeth, may not be the
                            best method for treating you as a whole person. The decision to go with braces or clear aligners is partly
                            dependent on the complexity of your case, but it's largely a personal choice.
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