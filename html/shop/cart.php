<?php
require($_SERVER['DOCUMENT_ROOT'] . '/cfg/0.php');
// declare vars (maybe temporary)
$_SESSION['site_desc'] = "Warenkorb";
$_SESSION['prev_page'] = $_SERVER['PHP_SELF'];
$_SESSION['prev_request'] = $_SERVER['REQUEST_URI'];
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/header.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/ctrl/product.php');
?>
<h1>Warenkorb</h1>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <?php if (!empty($_SESSION['cart'])) { 
                    foreach($_SESSION['cart'] as $prod_id => $amount): ?>
            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                <div class="mr-1"><img class="rounded" src='<?php echo $prod_img_main ?>' width="70"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold"><?php echo $product[0]['ProdName']?></span>
                    <div class="d-flex flex-row product-desc">
                        <div><?php echo $prod_desc_short ?></div>
                        <!--<div class="color"><span class="text-grey">Color:</span><span
                                class="font-weight-bold">&nbsp;Grey</span></div>-->
                    </div>
                </div>
                <form action='/ctrl/cart.php' method='post'>
                    <div class="d-flex flex-row align-items-center">
                        <button name='sub_prod_id' class='btn btn-secondary btn-rounded' type='submit'
                            value='<?php echo "$prod_id" ?>'><i class="las la-minus"></i></button>
                        <h5 class="mt-1 mr-1 ml-1" style="padding-left:20px;padding-right:20px"><?php echo "$amount" ?>
                        </h5>
                        <button name='add_prod_id' class='btn btn-primary btn-rounded' type='submit'
                            value='<?php echo "$prod_id" ?>'><i class="las la-plus"></i></button>
                    </div>
                    <div>
                        <h5 style="padding:10px">CHF <?php echo $product[0]['ProdPrice'] * $amount ?></h5>
                    </div>
                    <div>
                        <button name='rm_prod_id' class='btn btn-rounded' type='submit'
                            value='<?php echo "$prod_id" ?>'><i style="font-size:20pt"
                                class="las la-trash mb-1 text-danger"></i></button>
                    </div>
                </form>
            </div>
            <?php endforeach; ?>
            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><button
                    class="btn btn-warning btn-block btn-lg ml-2 pay-button" disabled type="button">Zur Kasse</button>
            </div>
            <?php
            }
            else {
                echo 'Keine Produkte im Warenkorb';?>
            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
                <a href="/shop.php">
                    <button class="btn btn-warning btn-block btn-lg ml-2 pay-button" type="button">Zur&uuml;ck zum Shop</button>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/footer.php');
?>