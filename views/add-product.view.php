<?php $helper->partial('header', [
    'title' => 'PRODUCT ADD',
    'btn1' => 'type="button" value=" Save " onclick="product_form.submit()"',
    'btn2' => 'type="button" value="Cancel" onclick="window.location.href=\'/\'"'
 
]); ?>




    <div class="content">
        <form action="/add-product" method="post" id="product_form">    

        <label for="sku">SKU</label>
            <input class="form-inputs" type="text" name="sku" id="sku" value="<?= $data['sku'] ?? '';?>" required> 
            <span style="font-size: small; color:#f95959;"> <?= $errors['sku'] ?? '' ; ?></span>
        
        
        <br>
        <label for="name">Name</label>
            <input class="form-inputs" type="text" name="name" id="name" value="<?= $data['name'] ?? '';?>" required>
            <span style="font-size: small; color:#f95959;"> <?= $errors['name'] ?? '' ; ?></span>

        
        
        <br>
        <label for="price">Price ($)</label>
            <input class="form-inputs" type="number" name="price" id="price" value="<?= $data['price'] ?? '';?>" required>
            <span style="font-size: small; color:#f95959;"> <?= $errors['price'] ?? '' ; ?></span>

                

        <br>
        <label for="type" style="width: 200px; " >Type Switcher</label>
            <select style="height: 20px;" class="form-inputs" name="type" id="productType" onselect="if (this.selectedIndex) changeType();" onchange="if (this.selectedIndex) changeType();" required >
                <option value="" selected disabled> Type Switcher</option>
                <option value="Dvd" id="DVD" >DVD</option>
                <option value="Furniture" id="Furniture" >Furniture</option>
                <option value="Book" id="Book">Book</option>
            </select>
            <span style="font-size: small; color:#f95959;"> <?= $errors['type'] ?? '' ; ?></span>

            
            <div id="appended">
                
            </div>
                            
        </form>
    </div>


    <script src="js/addProduct.js"></script>


    <?php $helper->partial('footer'); ?>