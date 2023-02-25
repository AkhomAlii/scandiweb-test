<?php 
    $helper->partial('header',[
        'title' => 'Product List',
        'btn1' => 'type="button" value=" ADD " onclick="window.location.href=\'/add-product\'"',
        'btn2' => 'type="button" value="MASS DELETE" onclick="choose.submit()" id="delete-product-btn"'
 
    ]);
?>


    
        

        <div class="content">
            <form action="/" method="post" id="choose">    
                <?php foreach($products as $product): ?>
                    
                
                    <?php $helper->partial('product-card', ['product' => $product]); ?>

                <?php endforeach; ?>
            </form>
        </div>


<?php $helper->partial('footer');?>
      