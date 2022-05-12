<?php
require($_SERVER['DOCUMENT_ROOT'] . '/cfg/0.php');
// declare vars (maybe temporary)
$_SESSION['site_desc'] = 'Produkt';
$_SESSION['prev_page'] = $_SERVER['PHP_SELF'];
$_SESSION['prev_request'] = $_SERVER['REQUEST_URI'];
if (array_key_exists('prod_id', $_GET)) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/ctrl/product.php');
}
else {
    header('Location: /shop.php');
}
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/header.php');
if (!empty($product)) { ?>
<div class='container'>
    <div class='card'>
        <div class='card-body'>
            <h3 class='card-title'><?php echo $product[0]['ProdName']?></h3>
            <h6 class='card-subtitle'><?php echo $product[0]['ProdName']?></h6>
            <div class='row'>
                <div class='col-lg-5 col-md-5 col-sm-6'>
                    <div class='white-box text-center'><img src='<?php echo $prod_img_main ?>' class='img-responsive'>
                    </div>
                </div>
                <div class='col-lg-7 col-md-7 col-sm-6'>
                    <h4 class='box-title mt-5'>Beschreibung</h4>
                    <p><?php echo $prod_desc ?></p>
                    <h2 class='mt-5'>
                        CHF <?php echo $product[0]['ProdPrice']?>
                    </h2>
                    <form action='/ctrl/cart.php' method='post'>
                        <button name='add_prod_id' type='submit' class='btn btn-primary btn-rounded' data-toggle='tooltip' value='<?php echo $_GET['prod_id']?>'
                            title='Zum Warenkorb hinzuf&uuml;gen' data-original-title='Zum Warenkorb hinzuf&uuml;gen'>
                            <i style='padding-top:4px;font-size: 30px' class='las la-cart-plus'></i>
                        </button>
                    </form>
                    <h3 class='box-title mt-5'>Highlights</h3>
                    <ul class='list-unstyled'>
                        <li><?php echo $prod_desc_short ?></li>
                    </ul>
                </div>
                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <h3 class='box-title mt-5'>Informationen</h3>
                    <div class='table-responsive'>
                        <table class='table table-striped table-product'>
                            <tbody>
                                <?php foreach($prod_prop as $property): ?>
                                <tr>
                                    <td width='390'><?php echo $property['PropDesc']?></td>
                                    <td><?php echo $property['PropVal']?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
else {
echo 'Kein solches Produkt vorhanden';
}
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/footer.php');
?>