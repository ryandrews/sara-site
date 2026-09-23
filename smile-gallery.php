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
<?php $title = "Smile Gallery | "; include 'include/head.php';?>
<body>
<?php $selected = 'gallery'; include 'include/header.php';?>

<div id="main">
<div id="smile-gallery">

    <div class="top">
        <div class="content">
            <div class="image">
                <img src="images/smiles/hero-c.jpg"/>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="content">
            <div class="clearfix">

                <div class="column-left">
                    <h2> Smile Gallery: </h2>
                    <div id="gallery">
                        <ul class="sub-tabs clearfix">
                            <li data-tab="teen">Teen</li>
                            <li data-tab="adult">Adult</li>
                            <li data-tab="early">Early</li>
                        </ul>
                        <ul class="window">
                            <?php
                            $class = 'teen';
                            $title = 'Teen';
                            $image = "images/smiles/case1.jpg";
                            $info = "Julia didn't like to smile because of her crooked teeth.  Her severe crowding and
                                narrow arches were treated with full braces and some rubber band wear, and without
                                extractions.  She now has a beautiful, broad smile that she loves to show off!";
                            include 'include/smile.php';
                            ?>

                            <?php
                            $class = 'teen';
                            $title = 'Teen';
                            $image = "images/smiles/case2.jpg";
                            $info = "Jane was embarrassed about her underbite, and had difficulty chewing foods.
                            Her narrow maxilla, underbite, posterior crossbite, and crowding were corrected with full
                            braces, upper expander and rubber band wear.  Jane is very proud of her broad new smile,
                            and has no problems chewing foods any more.";
                            include 'include/smile.php';
                            ?>

                            <?php
                            $class = 'teen';
                            $title = 'Teen';
                            $image = "images/smiles/case3.jpg";
                            $info = "James had a tooth that stuck out by 9 mm!  His severe crowding and severe overjet
                            were corrected with full braces and extraction of 2 premolars.  James is ecstatic about his
                            new smile, great bite, and facial harmony.";
                            include 'include/smile.php';
                            ?>

                            <?php
                            $class = 'teen';
                            $title = 'Teen';
                            $image = "images/smiles/case4.jpg";
                            $info = "Mary hated how her crooked teeth would stick out.  Her severe crowding, severe overjet,
                             and narrow arches were corrected with full braces, extraction of 4 premolars, and rubber
                              band wear.  She loves her new smile and her teeth don't stick out any more, allowing her
                              to close her lips together more easily.";
                            include 'include/smile.php';
                            ?>

                            <?php
                            $class = 'teen';
                            $title = 'Teen';
                            $image = "images/smiles/case5.jpg";
                            $info = "Sue didn't like her twisted teeth and her overbite. Her severe overbite and crowding
                             were corrected with full braces, and rubber band wear. She now loves to show off her
                             award-winning smile!";
                            include 'include/smile.php';
                            ?>

                            <?php
                            $class = 'teen';
                            $title = 'Teen, Surgical';
                            $image = "images/smiles/case6.jpg";
                            $info = "Ken was very shy and didn't like to smile because of his severe crowding.  It was
                             very hard for him to floss between his crooked teeth, and he was embarrassed by his underbite.
                             His was treated with full braces, extraction of 4 premolars, and maxillary jaw surgery.
                             His transformation was quite remarkable!  He is a much more confident person now, and loves
                             his healthy new smile.";
                            include 'include/smile.php';
                            ?>

                            <?php
                            $class = 'teen';
                            $title = 'Teen';
                            $image = "images/smiles/case7.jpg";
                            $info = "Jenny had a tooth stuck in her jaw, and pushing on her front tooth causing it to
                            go sideways.  She also had a sever overbite.  Her impacted tooth was removed and overbite
                            was corrected with full braces.  Jenny smiles all the time now!";
                            include 'include/smile.php';
                            ?>

                            <?php
                            $class = 'teen';
                            $title = 'Teen';
                            $image = "images/smiles/case8.jpg";
                            $info = "Ashley was very shy and embarrassed by her open bite caused by years of thumb-sucking.
                            We helped her stop her habit and corrected her bite by using full braces, extraction of 4 premolars
                            and rubber band wear.  She has transformed into a confident young lady with a vibrant smile!";
                            include 'include/smile.php';
                            ?>

                            <?php
                            $class = 'teen';
                            $title = 'Teen';
                            $image = "images/smiles/case9.jpg";
                            $info = "Kimberly hated how her front teeth looked. She didn't like to smile very much.
                            Her severe crowding and overbite were treated with full braces and rubber bands,
                             without extractions. She couldn't be happier with her new smile.";
                            include 'include/smile.php';
                            ?>

                            <?php
                            $class = 'adult';
                            $title = 'Adult';
                            $image = "images/smiles/case10.jpg";
                            $info = "Doug had a hard time chewing foods because of his posterior crossbite.
                            His narrow upper arch and crowding were corrected with an upper expander and full braces.
                            He loves his new smile and how he can chew foods without biting his cheeks!";
                            include 'include/smile.php';
                            ?>

                            <?php
                            $class = 'adult';
                            $title = 'Adult';
                            $image = "images/smiles/case11.jpg";
                            $info = "Brian didn't like his one front \"snagle\" tooth and his severe overbite.
                            Full braces and rubber band wear gave him a fantastic smile.
                            He can't stop showing off his awesome smile!";
                            include 'include/smile.php';
                            ?>

                            <?php
                            $class = 'early';
                            $title = 'Early';
                            $image = "images/smiles/case12.jpg";
                            $info = "Maya's front teeth stuck out so far that she couldn't close her lips over them.
                            After partial braces and some head gear wear, she was able to comfortable close her lips
                            over her teeth. Her smile is now as awesome as she is!";
                            include 'include/smile.php';
                            ?>

                            <?php
                            $class = 'early';
                            $title = 'Early';
                            $image = "images/smiles/case13.jpg";
                            $info = "Cindy was self-conscious about her protruding front teeth.  Her severely crowded lower
                            teeth had caused gum recession. She was treated with partial braces, and the results were straight
                            front teeth and improvement of gum recession.  She is very proud of her beautiful and healthy smile!";
                            include 'include/smile.php';
                            ?>

                            <?php
                            $class = 'early';
                            $title = 'Early';
                            $image = "images/smiles/case14.jpg";
                            $info = "Timmy had an upper front tooth in crossbite which was causing gum recession of his
                            lower front tooth.  His crossbite was corrected with braces, and his gum recession got much better!";
                            include 'include/smile.php';
                            ?>

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