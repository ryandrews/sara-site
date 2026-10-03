<?php $title = $title ?? ''; ?>
<div class="message-module">
    <h3><?php echo $title; ?></h3>
    <div class="message"></div>
    <form>
        <input type="text" name="name" placeholder="Name"/>
        <input type="text" name="phone" placeholder="Phone Number"/>
        <input type="text" name="email" placeholder="Email Address"/>
        <textarea placeholder="Happy to schedule in-person consultation..."></textarea>
        <input type="submit" value="Send">
    </form>
</div>
