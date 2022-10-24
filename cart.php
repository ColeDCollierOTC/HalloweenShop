<?php
// Add an item to the cart
function add_item($key, $quantity) {
    global $products;
    if ($quantity < 1) return;

    // If item already exists in cart, update quantity
    if (isset($_SESSION['cartHalloween'][$key])) {
        $quantity += $_SESSION['cartHalloween'][$key]['qty'];
        update_item($key, $quantity);
        return;
    }

    // Add item
    $cost = $products[$key]['moviePrice'];
    $total = $cost * $quantity;
    $item = array(
        'name' => $products[$key]['movieTitle'],
        'cost' => $cost,
        'qty'  => $quantity,
        'total' => $total
    );
    $_SESSION['cartHalloween'][$key] = $item;
}

// Update an item in the cart
function update_item($key, $quantity) {
    $quantity = (int) $quantity;
    if (isset($_SESSION['cartHalloween'][$key])) {
        if ($quantity <= 0) {
            unset($_SESSION['cartHalloween'][$key]);
        } else {
            $_SESSION['cartHalloween'][$key]['qty'] = $quantity;
            $total = $_SESSION['cartHalloween'][$key]['cost'] *
                     $_SESSION['cartHalloween'][$key]['qty'];
            $_SESSION['cartHalloween'][$key]['total'] = $total;
        }
    }
}

// Get cart subtotal
function get_subtotal() {
    $subtotal = 0;
    foreach ($_SESSION['cartHalloween'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal_f = number_format($subtotal, 2);
    return $subtotal_f;
}
?>