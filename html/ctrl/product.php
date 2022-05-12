<?php
require($_SERVER['DOCUMENT_ROOT'] . '/cfg/0.php');
// get products
if ($_SESSION['prev_page'] === '/shop.php') {
    require($_SERVER['DOCUMENT_ROOT'] . '/cfg/1.php');
    if ($stmt = $cnct_db->prepare("SELECT Prod_ID,ProdName,ProdPrice,PropVal from prod_view WHERE PropName='img_main'")) {
        $stmt->execute();
        // check if more then zero products
        if ($stmt->rowCount() > 0) {
            $_SESSION['products'] = $stmt->fetchAll();
        } else {
            echo "Keine Produkte gefunden";
        }
    }
}
if ($_SESSION['prev_page'] === '/product.php') {
    require($_SERVER['DOCUMENT_ROOT'] . '/cfg/1.php');
    // instead of multiple db queries, the results are filtered here, alternative would be for each property a new query "[...] WHERE PropName=?"
    if ($stmt = $cnct_db->prepare("SELECT Prod_ID,ProdName,ProdPrice,PropName,PropVal,PropDesc from prod_view WHERE Prod_ID=?")) {
        $stmt->execute([$_GET['prod_id']]);
        // check if more then zero properties
        if ($stmt->rowCount() > 0) {
            $product = $stmt->fetchAll();
            $prod_prop = array();
            foreach($product as $property):
                switch ($property['PropName']) {
                    case 'img_main':
                        $prod_img_main = $property['PropVal'];
                        break;
                    case 'desc':
                        $prod_desc = $property['PropVal'];
                        break;
                    case 'desc_short':
                        $prod_desc_short = $property['PropVal'];
                        break;
                    default:
                        $prod_prop[] = $property;
                }
            endforeach;
        } else {
            $product = NULL;
        }
    }
}
if ($_SESSION['prev_page'] === '/shop/cart.php') {
    require($_SERVER['DOCUMENT_ROOT'] . '/cfg/1.php');
    if (empty($_SESSION['cart'])) {
        return;
    }
    // with little work, this code could be combined with the product property query from above
    $cart_entries = implode("', '", array_keys($_SESSION['cart']));
    if ($stmt = $cnct_db->prepare("SELECT Prod_ID,ProdName,ProdPrice,PropName,PropVal,PropDesc from prod_view WHERE Prod_ID in ('$cart_entries')")) {
        $stmt->execute();
        // check if more then zero properties
        if ($stmt->rowCount() > 0) {
            $product = $stmt->fetchAll();
            $prod_prop = array();
            foreach($product as $property):
                switch ($property['PropName']) {
                    case 'img_main':
                        $prod_img_main = $property['PropVal'];
                        break;
                    case 'desc':
                        $prod_desc = $property['PropVal'];
                        break;
                    case 'desc_short':
                        $prod_desc_short = $property['PropVal'];
                        break;
                    default:
                        $prod_prop[] = $property;
                }
            endforeach;
        } else {
            $product = NULL;
        }
    }
}
?>