<head>
    <?php
        $basePath = $basePath ?? '';
        $title = $title ?? '';
        $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? strtolower($_SERVER['HTTP_USER_AGENT']) : '';
        if ($user_agent !== '' && preg_match("/phone|iphone|itouch|ipod|symbian|android|htc_|htc-|palmos|blackberry|opera mini|iemobile|windows ce|nokia|fennec|hiptop|kindle|mot |mot-|webos\/|samsung|sonyericsson|^sie-|nintendo/", $user_agent)) {
            echo "<meta name=viewport content='width=620px'>";
        }
    ?>

    <title><?php echo $title; ?> Andrews Orthodontics | Orthodontist | San Carlos, CA</title>
    <meta property="description" content="Welcome to Andrews Orthodontics. Board-certified orthodontist providing the highest quality of orthodontic care for children, teens, and adults in San Carlos and the surrounding San Francisco Peninsula area." />


    <meta property="og:title" content="<?php echo $title; ?> Andrews Orthodontics" />
    <meta property="og:image" content="http://www.andrewssmiles.com/images/logos/andrews.png" />
    <meta property="og:description" content="Board-certified orthodontist providing the highest quality of orthodontic care for children, teens, and adults in San Carlos and the surrounding San Francisco Peninsula area." />
    <meta content="en_US" property="og:locale">
    <meta content="website" property="og:type">

    <link rel="icon" href="<?php echo $basePath;?>images/fav.png">

    <link href="<?php echo $basePath;?>css/sara.css?v=7" rel="stylesheet"/>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8HNyfvFNvnTsgaRvxIw2sJkIzwswdEBo"></script>
    <script src="<?php echo $basePath;?>js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo $basePath;?>js/sara.js" type="text/javascript"></script>
</head>
