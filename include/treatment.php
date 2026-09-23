<li class="treatment <?php echo $class; ?>">
    <h3><?php echo $title; ?></h3>
    <p><?php echo $info; ?></p>

    <div class="clearfix">
        <div class="problems">
            <h4><?php echo $problem; ?></h4>

            <?php
            if(count($problemImage) > 0){
                echo "<div class='slide-show' data-pause='4'> <ul>";
                $i = 0;
                foreach ($problemText as $value){
                    echo "<li> <div>". $value . " *</div>";
                    if($i == 0){
                        echo "<img src='". $problemImage[$i] ."' alt='".$value." image'/> </li>";
                    } else {
                        echo "<img src='images/blank.gif' data-slide-img='". $problemImage[$i] ."' alt='".$value." image'/> </li>";
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