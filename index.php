<?php
// Start session management with a persistent cookie
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();

// Create a cart array if needed
if (empty($_SESSION['cartHalloween'])) { $_SESSION['cartHalloween'] = array(); }

// Create a table of products
$products = array();
$products['movie-1'] = array('name' => 'movie1', 'cost' => '60.00');
$products['movie-2'] = array('name' => 'movie2', 'cost' => '59.99');
$products['movie-3'] = array('name' => 'movie3', 'cost' => '30.00');

?>



<!doctype html>
<html lang="en">

<head>
  <title>Halloween Shop</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <?php
        include "./view/navigation.php";

    ?>
  </header>
  <main>

    <?php
        include "cart.php";

        $action = filter_input(INPUT_POST, 'action');
        if ($action === NULL) {
            $action = filter_input(INPUT_GET, 'action');
            if ($action === NULL) {
                $action = 'show_add_item';
            }
        }

        // Add or update cart as needed
        switch($action) {
            case 'add':
                $product_key = filter_input(INPUT_POST, 'productkey');
                $item_qty = filter_input(INPUT_POST, 'itemqty');
                add_item($product_key, $item_qty);
                include('cart_view.php');
                break;
            case 'update':
                $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, 
                                            FILTER_REQUIRE_ARRAY);
                foreach($new_qty_list as $key => $qty) {
                    if ($_SESSION['cartHalloween'][$key]['qty'] != $qty) {
                        update_item($key, $qty);
                    }
                }
                include('cart_view.php');
                break;
            case 'show_cart':
                include('cart_view.php');
                break;
            case 'show_add_item':
                include('add_item_view.php');
                break;
            case 'empty_cart':
                unset($_SESSION['cartHalloween']);
                include('cart_view.php');
                break;
        }
    ?>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>