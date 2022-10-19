

<div class="card" style="width: 30rem;">
    <div class="card-body">
        <h5 class="card-title">Movie Store</h5>
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5>Your Cart</h5>
                <?php if (empty($_SESSION['cartHalloween']) || 
                    count($_SESSION['cartHalloween']) == 0) : ?>
                    <p>There are no items in your cart.</p>
                <?php else: ?>
                    <form action="." method="post">
                    <input type="hidden" name="action" value="update">
                    <table>
                        <tr id="cart_header">
                            <th class="left">Item</th>
                            <th class="right">Item Cost</th>
                            <th class="right">Quantity</th>
                            <th class="right">Item Total</th>
                        </tr>

                    <?php foreach( $_SESSION['cartHalloween'] as $key => $item ) :
                        $cost  = number_format($item['cost'],  2);
                        $total = number_format($item['total'], 2);
                    ?>
                    <tr>
                        <td>
                            <?php echo $item['name']; ?>
                        </td>
                        <td class="right">
                            $<?php echo $cost; ?>
                        </td>
                        <td class="right">
                            <input type="text" class="cart_qty"
                                name="newqty[<?php echo $key; ?>]"
                                value="<?php echo $item['qty']; ?>">
                        </td>
                        <td class="right">
                            $<?php echo $total; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <tr id="cart_footer">
                        <td colspan="3"><b>Subtotal</b></td>
                        <td>$<?php echo get_subtotal(); ?></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="right">
                            <input type="submit" value="Update Cart" class="btn btn-primary">
                        </td>
                    </tr>
                    </table>
                    <p>Click "Update Cart" to update quantities in your
                        cart. Enter a quantity of 0 to remove an item.
                    </p>
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