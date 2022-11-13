<!DOCTYPE html>

<html lang="en">
  <head>
  <?php include('meta.php') ?>
    <title>Sky - Whishlist</title>
    <?php include('css-libary.php') ?>
    
  </head>
 
  <body>
    <?php include('navhead.php') ?>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      </div>
    </div>
    <main class="ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing ps-table--whishlist">
            <table class="table ps-cart__table">
              <thead>
                <tr>
                  <th>All Products</th>
                  <th>Price</th>
                  <th>View</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a class="ps-product__preview" href="product-detail.php"><img class="mr-15" src="images/product/cart-preview/1.jpg" alt=""> air jordan One mid</a></td>
                  <td>$150</td>
                  <td><a class="ps-product-link" href="product-detail.php">View Product</a></td>
                  <td>
                    <div class="ps-remove"></div>
                  </td>
                </tr>
                <tr>
                  <td><a class="ps-product__preview" href="product-detail.php"><img class="mr-15" src="images/product/cart-preview/2.jpg" alt=""> The Crusty Croissant</a></td>
                  <td>$150</td>
                  <td><a class="ps-product-link" href="product-detail.php">View Product</a></td>
                  <td>
                    <div class="ps-remove"></div>
                  </td>
                </tr>
                <tr>
                  <td><a class="ps-product__preview" href="product-detail.php"><img class="mr-15" src="images/product/cart-preview/3.jpg" alt="">The Rolling Pin</a></td>
                  <td>$150</td>
                  <td><a class="ps-product-link" href="product-detail.php">View Product</a></td>
                  <td>
                    <div class="ps-remove"></div>
                  </td>
                </tr>
              </tbody>
            </table>
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
    <?php include('js-library.php') ?>
  </body>
</html>