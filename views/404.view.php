<?php 
    $helper->partial('header', [
        'title' => 'you know what! it\'s Okay, we got you =>>',
        'btn1' => 'type="button" value=" HOME " onclick="window.location.href=\'/\'"',
        'btn2' => 'type="button" value=" ADD PRODUCT " onclick="window.location.href=\'/add-product\'"',
    ]);
?>

<div class="content">

    <p style="text-align: center; font-size: xxx-large; font-weight: bold; position: relative; top: 5rem;">Oops... <br><br> 404</p>
</div>





<?php $helper->partial('footer'); ?>