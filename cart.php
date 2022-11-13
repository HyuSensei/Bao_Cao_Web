<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
  <?php include('meta.php') ?>
    <title>Sky - Cart</title>
   
    <?php include('css-libary.php') ?>
    
  </head>
  
  <body>
    <?php include('navhead.php') ?>
    <?php include('header-service.php') ?>
    <main class="ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <table class="table ps-cart__table">
              <thead>
                <tr>
                  <th>All Products</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a class="ps-product__preview" href="product-detail.php"><img class="mr-15" src="images/product/cart-preview/1.jpg" alt=""> air jordan One mid</a></td>
                  <td>$150</td>
                  <td>
                    <div class="form-group--number">
                      <button class="minus"><span>-</span></button>
                      <input class="form-control" type="text" value="2">
                      <button class="plus"><span>+</span></button>
                    </div>
                  </td>
                  <td>$300</td>
                  <td>
                    <div class="ps-remove"></div>
                  </td>
                </tr>
                <tr>
                  <td><a class="ps-product__preview" href="product-detail.php"><img class="mr-15" src="images/product/cart-preview/2.jpg" alt=""> The Crusty Croissant</a></td>
                  <td>$150</td>
                  <td>
                    <div class="form-group--number">
                      <button class="minus"><span>-</span></button>
                      <input class="form-control" type="text" value="2">
                      <button class="plus"><span>+</span></button>
                    </div>
                  </td>
                  <td>$300</td>
                  <td>
                    <div class="ps-remove"></div>
                  </td>
                </tr>
                <tr>
                  <td><a class="ps-product__preview" href="product-detail.php"><img class="mr-15" src="images/product/cart-preview/3.jpg" alt="">The Rolling Pin</a></td>
                  <td>$150</td>
                  <td>
                    <div class="form-group--number">
                      <button class="minus"><span>-</span></button>
                      <input class="form-control" type="text" value="2">
                      <button class="plus"><span>+</span></button>
                    </div>
                  </td>
                  <td>$300</td>
                  <td>
                    <div class="ps-remove"></div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="ps-cart__actions">
              <div class="ps-cart__promotion">
                <div class="form-group">
                  <div class="ps-form--icon"><i class="fa fa-angle-right"></i>
                    <input class="form-control" type="text" placeholder="Promo Code">
                  </div>
                </div>
                <div class="form-group">
                  <button class="ps-btn ps-btn--gray">Continue Shopping</button>
                </div>
              </div>
              <div class="ps-cart__total">
                <h3>Total Price: <span> 2599.00 $</span></h3><a class="ps-btn" href="checkout.php">Process to checkout<i class="ps-icon-next"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button>Sign up now</button>
                  </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <p>...and receive  <span>$20</span>  coupon for first shopping.</p>
                </div>
          </div>
        </div>
      </div>
      <?php include('footer.php') ?>
    </main>
    <?php include('js-library.php')?>
  </body>
</html>