<?php
require($_SERVER['DOCUMENT_ROOT'] . '/cfg/0.php');
function handleCart(int $action, $item) {
    $item = intval($item);
    switch ($action) {
        case 0:
            // delete cart
            if (!empty($_SESSION['cart']["$item"])) {
                unset($_SESSION['cart']);
            }
            break;
        case 1:
            // check if item is in cart
            if (!empty($_SESSION['cart']["$item"])) {
                // remove item from cart
                $_SESSION['cart']["$item"] = 0;
            }
            break;
        case 2:
            // check if item is in cart
            if (!empty($_SESSION['cart']["$item"]) && $_SESSION['cart']["$item"] >= 1) {
                // remove one item from cart
                $_SESSION['cart']["$item"] -= 1;
            }
            break;
        case 3:
            // add $item to cart
            if (empty($_SESSION['cart'])) {
                // create cart
                $_SESSION['cart'] = array();
            }
            // add to cart
            $_SESSION['cart']["$item"] += 1;
            break;
    }
    if ($_SESSION['cart']["$item"] < 1) {
        unset($_SESSION['cart']["$item"]);
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['rm_prod_id'])) {
    handleCart(1, $_POST['rm_prod_id']);
    header('Location: ' . $_SESSION['prev_request']);
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['sub_prod_id'])) {
    handleCart(2, $_POST['sub_prod_id']);
    header('Location: ' . $_SESSION['prev_request']);
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['add_prod_id'])) {
    handleCart(3, $_POST['add_prod_id']);
    header('Location: ' . $_SESSION['prev_request']);
}
?>