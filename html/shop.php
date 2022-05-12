<?php
require($_SERVER['DOCUMENT_ROOT'] . '/cfg/0.php');
// declare vars (maybe temporary)
$_SESSION['site_desc'] = "Shop";
$_SESSION['prev_page'] = $_SERVER['PHP_SELF'];
$_SESSION['prev_request'] = $_SERVER['REQUEST_URI'];
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/header.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/ctrl/product.php');
?>
<h1>Shop</h1>
<div class="album py-5">
    <div class="container">
        <div class="row">
            <?php
            foreach($_SESSION['products'] as $product): ?>
            <div class="col-md-4">
                <a href='/product.php?prod_id=<?php echo $product['Prod_ID'] ?>'>
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="<?php echo $product['PropVal']?>"
                            alt="Bild Produkt <?php echo $product['ProdName']?>">
                        <div class="card-body">
                            <form action='/ctrl/cart.php' method='post'>
                                <button name='add_prod_id' type='submit' class='btn btn-primary btn-rounded' data-toggle='tooltip' value='<?php echo $product['Prod_ID']?>'
                                    title='Zum Warenkorb hinzuf&uuml;gen' data-original-title='Zum Warenkorb hinzuf&uuml;gen'>
                                    <i style='padding-top:4px;font-size: 30px' class='las la-cart-plus'></i>
                                </button>
                            </form>
                            <p class="card-text"><?php echo $product['ProdName']?></p>
                            <div class="align-items-center">
                                <div>CHF <?php echo $product['ProdPrice']?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/footer.php');
?>