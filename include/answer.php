<?php
$question = $question ?? '';
$answer = $answer ?? '';
?>
<li>
    <h4>
        <span class="arrow"></span>
        <?php echo $question; ?>
    </h4>
    <p>
        <?php echo $answer; ?>
    </p>
</li>