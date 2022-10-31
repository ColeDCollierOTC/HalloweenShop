

<div class="card" style="width: 55rem;">
    <div class="card-body">
        <h5 class="card-title">Movie Store</h5>
        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <h5>Your Cart</h5>
                print_r
                <!-- Checks for a session cart is empty -->
                <?php if (empty($_SESSION['cartHalloween']) || 
                    count($_SESSION['cartHalloween']) == 0) : ?>
                    <p>There are no items in your cart.</p>
                <?php else: ?>
                    <!-- used bootstrap container to keep the organization of the cart -->
                    <form action="." method="post">
                    <input type="hidden" name="action" value="update">
                    <table class="container text-center">
                        <tr class="row">
                            <th class="form-text col">Item</th>
                            <th class="form-text col">Item Cost</th>
                            <th class="form-text col">Quantity</th>
                            <th class="form-text col">Item Total</th>
                        </tr>

                    <?php foreach( $_SESSION['cartHalloween'] as $key => $item ) :
                        $cost  = number_format($item['cost'],  2);
                        $total = number_format($item['total'], 2);
                    ?>
                    <tr  class="row">
                        <td class="col">
                            <?php echo $item['name']; ?>
                        </td>
                        <td class="col">
                            $<?php echo $cost; ?>
                        </td>
                        <td class="col">
                            <input type="text" class="form-control"
                                name="newqty[<?php echo $key; ?>]"
                                value="<?php echo $item['qty']; ?>">
                        </td>
                        <td class="col">
                            $<?php echo $total; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <tr class="row"">
                        
                        <td class="col"><b>Subtotal</b></td>
                        <td class="col">$<?php echo get_subtotal(); ?></td>
                        <td class="col"><b></b></td>
                        <td class="col"><b></b></td>
                    </tr>
                    <tr class="row">
                        <td class="col">
                            <input type="submit" value="Update Cart" class="btn btn-primary">
                        </td>
                        <td class="col"><b></b></td>
                        <td class="col"><b></b></td>
                        <td class="col"><b></b></td>
                    </tr>
                    <tr class="row">
                        <td class="col">
                            <p>Click "Update Cart" to update quantities in your
                            cart. Enter a quantity of 0 to remove an item.
                            </p>
                        </td>
                    </td>
                    <tr class="row"">
                    
                        <td class="col"><b>Total</b></td>
                        <td class="col">$<?php echo (get_subtotal()+ (get_subtotal()*0.04225)); ?></td>
                        <td class="col"><b>with Tax</b></td>
                        <td class="col"><b></b></td>
                    </tr>
                    </table>
                    
                    </form>
                    <?php endif; ?>
            </div>
        </div>
        <div class="container text-center" >
            <div class="row">
                <div class="col">
                    <p><a href=".?action=show_add_item" class="btn btn-primary">Add Item</a></p>
                </div>
                <div class="col">
                    <p><a href=".?action=empty_cart" class="btn btn-primary">Empty Cart</a></p>
                </div>
                </div>
            </div>
    </div>
</div>