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
<?php $title = "Sleep Apnea: How Orthodontics Can Help | ";  include $basePath.'include/head.php'; ?>
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
                        <h4>Sleep Apnea: How Orthodontics Can Help </h4>

                        <p class="author">posted by: <a href="<?php echo $basePath?>about-us.php">Sara Andrews DDS MS</a></p>

                        <ul class="social clearfix">
                            <li><div class="fb-share-button" data-href="http://www.andrewssmiles.com/blog/articles/sleep-apnea.php" data-layout="button"></div></li>
                            <li><div class="g-plusone" data-annotation="none"></div></li>
                        </ul>


                        <img class="right" src="<?php echo $basePath?>images/blog/apnea.jpg" style="margin:40px 0 0 10px;float:right;" alt="sleeping with apnea"/>

                        <p class="question">Background</p>
                        <p>
                            Obstructive Sleep Apnea (OSA) involves partial or complete blockage of airway followed by a reduction
                            of blood oxygen level while sleeping, and arousal from sleep. OSA has large negative health, behavioral,
                            and social implications. Many of health complications of OSA have been recently discovered. Poor
                            oxygen flow as a result of OSA has been linked to heart disease, stroke, and diabetes. Poor night time
                            sleep quality affects cognitive function during the day, leading to reduced productivity, and motor
                            vehicle accidents. As much as 90% of OSA patients in the US remain undiagnosed.
                        </p>

                        <p class="question">Signs to Watch for</p>
                        <p>
                            The most easily-recognized sign is snoring while sleeping. The loudness of snoring is particularly
                            alarming. One of the reasons OSA goes undiagnosed, is that most snorers are unaware of their snoring
                            unless told by a bed partner. OSA patients also frequently stop breathing while sleeping for a short while
                            and abruptly wake up and start breathing again. In children, symptoms may show up as poor
                            performance in school, and hyperactive behavior. Children with OSA could be misdiagnosed as having
                            ADHD.
                        </p>

                        <p class="question">Diagnosis</p>
                        <p>
                            The golden standard for diagnosis of OSA is a sleep study, known as polysomnogram. The study can be
                            done in a sleep lab or at home. The sleep study measures the number of episodes of complete and
                            partial cessation of airflow (AHI index) as well as blood's oxygen levels. The results of sleep study must
                            be interpreted by a medical doctor and the diagnosis is arrived at via analysis of the indices.
                        </p>

                        <p class="question">Background</p>
                        <p>
                            My practice philosophy is to offer phase I treatment only when I know the child will receive significant
                            benefits from early treatment. I keep my phase I treatment conservative and short, correcting problems
                            which studies indicate, if left alone, can become bigger problems by the time the child is a teenager. I
                            make sure that my patient's parents are fully educated on the objectives of phase I treatment and the
                            future need for phase II treatment.
                        </p>

                        <p class="question">Causes</p>
                        <p>
                            The most common cause of a crowded airway is obesity. The increased fatty tissue around the throat
                            narrows the airway, making it more likely to get blocked in a supine sleeping position. However, many
                            slender individuals may have OSA. In children, enlarged tonsils can be the cause of airway blockage. The
                            biggest culprit in crowding the airway, however, is the tongue. When we sleep, the muscles relax, and
                            the tongue falls back, partially or completely blocking the airway.
                        </p>

                        <p class="question">Treatment</p>

                        <p>
                            The first line of treatment in mild-moderate OSA is lifestyle change such as weight loss, and reduction of
                            alcohol intake before bedtime. Positional changes such as sleeping elevated with multiple pillows can
                            help. In cases of diagnosed OSA, a cPAP (continuous Positive Air Pressure) is to be worn at night. The
                            cPAP is very effective in reducing OSA symptoms, however, can be difficult to tolerate. In children,
                            removal of enlarged tonsils may be indicated to open the airway. In moderate OSA cases, oral
                            appliances have been effective as a substitute for cPAP. Oral appliances are worn at night and position
                            the lower jaw forward which moves the tongue forward out of the airway. In severe adult OSA cases,
                            surgical treatment may be recommended. Surgical advancement of jaws in a forward direction has been
                            shown to be the most effective surgical treatment for OSA. Forward repositioning of the lower jaw,
                            positions the tongue in a more forward position, and clears the airway.
                        </p>

                        <p class="question">Orthodontics</p>

                        <p>
                            Since the cause of OSA is a blocked oropharyngeal airway, treatment is directed toward increasing the

                            airway volume. Maxillary expansion has been shown to be effective by widening the floor of the nasal

                            cavity. Maxillary expansion is particularly effective in children because of the patency of the palatal

                            sutures. Expansion is done via a custom expander appliance which is typically cemented on two

                            maxillary molars. The appliance has an expansion screw in the center which is activated by a key. The

                            orthodontist will give parents instructions on how to activate the expander at home by turning the key.

                            The expander is designed to be easily tolerated by children with minimal discomfort.

                            In addition to expansion, bite corrector (functional) appliances can be used in children to not only

                            correct the bite, but also help with OSA by positioning the lower jaw forward. These custom appliances

                            can be fixed (cemented), or removable.
                        </p>

                        <p>
                            In adults with OSA who cannot tolerate the cPAP, oral appliances may be a good option. The

                            orthodontist can take the steps for appliance fabrication and delivery. Long-term use of oral appliances

                            can cause changes in the bite. Thus, orthodontic monitoring is an important aspect of oral appliance

                            therapy.
                        </p>

                        <p>
                            In severe adult cases, where orthognathic (jaw corrective) surgery is indicated, the pre-surgical

                            preparation requires orthodontic treatment. The pre-surgical stage is typically about 1 year of full

                            orthodontic treatment to align the teeth, and set up the bite for surgery. Post-surgical analyses of the

                            airway have shown significant increase in airway volume, and reduction of OSA symptoms. Surgical

                            treatment can bring life-altering changes for certain patients.

                        </p>
                        <p>
                            In all sleep apnea cases, close monitoring by a sleep specialist medical doctor should accompany

                            orthodontic treatment.
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