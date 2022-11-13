<!DOCTYPE html>

<html lang="en">

<head>
<?php include('meta.php') ?>
  <title>Sky - Homepage</title>
  
  <?php include('css-libary.php') ?>
  
</head>

<body>
 <?php include('navhead.php') ?>
 <?php include('header-service.php') ?>
  <main class="ps-main">
  <?php include('silder.php') ?>
    <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100" style="margin-top: -100px;">
      <div class="ps-container">
        <!-- <div class="ps-section__header mb-50">
          <h3 class="ps-section__title">Sản Phẩm Mới</h3>
        </div> -->
        <h3 class="ps-section__title">Sản Phẩm Mới</h3>
        <div class="ps-section__content pb-50">
          <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
            <div class="ps-masonry" id="grid-item">
              <div class="grid-sizer"></div>
              <?php include('./process/new_product.php') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ps-section--offer">
      <div class="ps-column"><a class="ps-offer" href="product-listing.php"><img src="images/banner4.webp"
            alt=""></a></div>
      <div class="ps-column"><a class="ps-offer" href="product-listing.php"><img src="images/banner5.webp"
            alt=""></a></div>
    </div>
    <div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
      <div class="ps-container">
        <div class="ps-section__header">
          <div class="row" style="margin-top: -80px;">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
              <h3 class="ps-section__title">Top Sale</h3>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
              <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a
                  class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
            </div>
          </div>
        </div>
        <div class="ps-section__content">
          <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000"
            data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1"
            data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000"
            data-owl-mousedrag="on">
            <div class="ps-shoes--carousel">
              <div class="ps-shoe">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i
                      class="ps-icon-heart"></i></a><img src="images/shoe/1.jpg" alt=""><a class="ps-shoe__overlay"
                    href="product-detail.php"></a>
                </div>
                <div class="ps-shoe__content">
                  <div class="ps-shoe__variants">
                    <!-- <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img
                        src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg"
                        alt=""></div> -->
                    <select class="ps-rating ps-shoe__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.php">Air Jordan 7 Retro</a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#">
                        Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-shoes--carousel">
              <div class="ps-shoe">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a class="ps-shoe__favorite"
                    href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/2.jpg" alt=""><a
                    class="ps-shoe__overlay" href="product-detail.php"></a>
                </div>
                <div class="ps-shoe__content">
                  <div class="ps-shoe__variants">
                    <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img
                        src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg"
                        alt=""></div>
                    <select class="ps-rating ps-shoe__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.php">Air Jordan 7 Retro</a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#">
                        Jordan</a></p><span class="ps-shoe__price">
                      <del>£220</del> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-shoes--carousel">
              <div class="ps-shoe">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i
                      class="ps-icon-heart"></i></a><img src="images/shoe/3.jpg" alt=""><a class="ps-shoe__overlay"
                    href="product-detail.php"></a>
                </div>
                <div class="ps-shoe__content">
                  <div class="ps-shoe__variants">
                    <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img
                        src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg"
                        alt=""></div>
                    <select class="ps-rating ps-shoe__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.php">Air Jordan 7 Retro</a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#">
                        Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-shoes--carousel">
              <div class="ps-shoe">
                <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i
                      class="ps-icon-heart"></i></a><img src="images/shoe/4.jpg" alt=""><a class="ps-shoe__overlay"
                    href="product-detail.php"></a>
                </div>
                <div class="ps-shoe__content">
                  <div class="ps-shoe__variants">
                    <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img
                        src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg"
                        alt=""></div>
                    <select class="ps-rating ps-shoe__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.php">Air Jordan 7 Retro</a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#">
                        Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-shoes--carousel">
              <div class="ps-shoe">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i
                      class="ps-icon-heart"></i></a><img src="images/shoe/5.jpg" alt=""><a class="ps-shoe__overlay"
                    href="product-detail.php"></a>
                </div>
                <div class="ps-shoe__content">
                  <div class="ps-shoe__variants">
                    <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img
                        src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg"
                        alt=""></div>
                    <select class="ps-rating ps-shoe__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.php">Air Jordan 7 Retro</a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#">
                        Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-shoes--carousel">
              <div class="ps-shoe">
                <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i
                      class="ps-icon-heart"></i></a><img src="images/shoe/6.jpg" alt=""><a class="ps-shoe__overlay"
                    href="product-detail.php"></a>
                </div>
                <div class="ps-shoe__content">
                  <div class="ps-shoe__variants">
                    <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img
                        src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg"
                        alt=""></div>
                    <select class="ps-rating ps-shoe__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.php">Air Jordan 7 Retro</a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#">
                        Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ps-home-contact">
      <div id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" data-zoom="17"></div>
      <div class="ps-home-contact__form">
        <header>
          <h3>Contact Us</h3>
          <p>Learn about our company profile, communityimpact, sustainable motivation, and more.</p>
        </header>
        <footer>
          <form action="product-listing.php" method="post">
            <div class="form-group">
              <label>Name<span>*</span></label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group">
              <label>Email<span>*</span></label>
              <input class="form-control" type="email">
            </div>
            <div class="form-group">
              <label>Your message<span>*</span></label>
              <textarea class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group text-center">
              <button class="ps-btn">Send Message<i class="fa fa-angle-right"></i></button>
            </div>
          </form>
        </footer>
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
            <p>...and receive <span>$20</span> coupon for first shopping.</p>
          </div>
        </div>
      </div>
    </div>
    <?php include('footer.php') ?>
  </main>
  <?php include('js-library.php')?>
</body>

</html>