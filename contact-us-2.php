<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
  <?php include('meta.php') ?>
    <title>Sky - Contact Us 2</title>
    <?php include('css-libary.php') ?>
    
  </head>
  
  <body>
    <?php include('navhead.php') ?>
    <?php include('header-service.php') ?>
    <main class="ps-main">
      <div class="ps-contact ps-contact--2 ps-section pt-80 pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="ps-section__header pt-50">
                    <h2 class="ps-section__title" data-mask="Contact">- Get in touch</h2>
                    <form class="ps-contact__form" action="do_action" method="post">
                      <div class="form-group">
                        <label>Name <sub>*</sub></label>
                        <input class="form-control" type="text" placeholder="">
                      </div>
                      <div class="form-group">
                        <label>Email <sub>*</sub></label>
                        <input class="form-control" type="email" placeholder="">
                      </div>
                      <div class="form-group mb-25">
                        <label>Your Message <sub>*</sub></label>
                        <textarea class="form-control" rows="6"></textarea>
                      </div>
                      <div class="form-group">
                        <button class="ps-btn">Send Message<i class="ps-icon-next"></i></button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div id="contact-map" data-address="New York, NY" data-title="Sky Store!" data-zoom="17"></div>
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