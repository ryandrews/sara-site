<?php
require_once __DIR__ . '/../../include/ssl.php';
?>
<!doctype html>
<html>
<?php $basePath = "../../";?>
<?php $title = "Why this Blog? | ";  include $basePath.'include/head.php'; ?>
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
                    <div class="column-right why">
                        <h4>Why this Blog</h4>

                        <p class="author">posted by: <a href="<?php echo $basePath?>about-us.php">Sara Andrews DDS MS</a></p>

                        <ul class="social clearfix">
                            <li><div class="fb-share-button" data-href="http://www.andrewssmiles.com/blog/articles/why-blog.php" data-layout="button"></div></li>
                            <li><div class="g-plusone" data-annotation="none"></div></li>
                        </ul>

                        <img class="right" src="<?php echo $basePath?>images/blog/question-opt.jpg" alt="wisdom teeth"/>
                        <p>
                            I decided to start this blog, because I wanted an easily accessible, and easy to understand way of letting
                            the people around me know the truth about some basic orthodontic and dental concepts. I get asked an
                            orthodontic or dental question on a daily basis at work or in social circles. I also hear dental myths being
                            spoken around me all the time, and I feel that it is my responsibility as a professional to shed light on
                            some of these myths. I am passionate about my profession, I really enjoy answering questions, and
                            spreading knowledge about the dental field. Of course the knowledge is out there, embedded in tons
                            and tons of research, but unless you are in academia, you’re not going to have the time or the
                            motivation to go digging through scientific journals for some basic dental knowledge. I hope that my
                            friends, family, colleagues and current and prospective patients will find this blog useful. I hope that this
                            blog will help you add to your dental knowledge, and make better decisions regarding your oral care.
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