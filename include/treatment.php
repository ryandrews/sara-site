<?php
$class = $class ?? '';
$title = $title ?? '';
$info = $info ?? '';
$problem = $problem ?? '';
$problemText = (isset($problemText) && is_array($problemText)) ? $problemText : [];
$problemImage = (isset($problemImage) && is_array($problemImage)) ? $problemImage : [];
$benefits = (isset($benefits) && is_array($benefits)) ? $benefits : [];
?>
<li class="treatment <?php echo $class; ?>">
    <h3><?php echo $title; ?></h3>
    <p><?php echo $info; ?></p>

    <div class="clearfix">
        <div class="problems">
            <h4><?php echo $problem; ?></h4>

            <?php
            if (!empty($problemImage)) {
                echo "<div class='slide-show' data-pause='4'> <ul>";
                $i = 0;
                foreach ($problemText as $value){
                    $img = $problemImage[$i] ?? '';
                    echo "<li> <div>". $value . " *</div>";
                    if($i == 0){
                        echo "<img src='". $img ."' alt='".$value." image'/> </li>";
                    } else {
                        echo "<img src='images/blank.gif' data-slide-img='". $img ."' alt='".$value." image'/> </li>";
                    }
                    $i++;
                }
                echo "</ul></div>";
            }
            ?>
        </div>
        <div class="benefits">
            <h4>Benefits of <?php echo $title; ?>:</h4>
            <ul>
                <?php
                foreach ($benefits as $value){
                    echo "<li> ". $value . "</li>";
                }
                ?>
            </ul>
        </div>

    </div>
</li>