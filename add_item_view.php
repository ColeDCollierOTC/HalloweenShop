
    <main>
          
    </main>

    <div class="card" style="width: 30rem;">
<div class="card-body">
    <h5 class="card-title">Movie Store</h5>
    <h5>Add Item</h5>
        <form action="." method="post">
            <div class="mb-3">
                <input type="hidden" name="action" value="add">

                <label class="form-label">Name:</label>
                <select name="productkey" class="form-select">
                <?php foreach($products as $key => $product) :
                    $cost = number_format($product['cost'], 2);
                    $name = $product['name'];
                    $item = $name . ' ($' . $cost . ')';
                ?>
                    <option value="<?php echo $key; ?>">
                        <?php echo $item; ?>
                    </option>
                <?php endforeach; ?>
                </select><br>
            </div>
            <div class="mb-3">
            <label class="form-label">Quantity:</label>
            <select name="itemqty" class="form-select">
            <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select><br>

            <label>&nbsp;</label>
            </div>
            <div class="mb-3">
            <input type="submit" value="Add Item" class="btn btn-primary">
            </div>
            
        </form>
        <div class="mb-3">
        <p><a href=".?action=show_cart" class="btn btn-primary">View Cart</a></p>  
        </div>
  </div>
</div>