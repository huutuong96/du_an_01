

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
 <!-- Breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
      <div class="row">
          <div class="col-xs-12">
              <ul>
                  <li class="home"> <a href="index.php" title="Go to Home Page">Trang chủ</a> <span>/</span></li>
                  <li class="cart"> <a href="index.php?option=cart&act=cart-view" title="Go to Home Page">Giỏ hàng</a> <span>/</span></li>
                  <li> <strong>Thanh toán </strong> </li>
              </ul>
          </div>
      </div>
  </div>
</div>
<!-- Breadcrumbs End -->

<section class="main-container col1-layout">
  <div class="main container">
      <div class="row">
          <div class="col-sm-12 col-xs-12">
              <div class="product-area">
                  <div class="content-tab-product-category">
                          <form action="<?php echo e(route("checkout")); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                              <!-- Checkout are start-->
                              <div class="checkout-area">
                                  <div class="">
                                      <div class="row">
                                          <div class="col-md-5 col-sm-12 col-xs-12">
                                              <div class="row">
                                                  <div class="col-md-12 col-xs-12">
                                                      <div class="billing-details">
                                                          <div class="contact-text right-side">
                                                              <h2>Thông tin nhận hàng</h2>
                                                              <div class="row">
                                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="input-box">
                                                                          <label>Họ tên <em>*</em></label>
                                                                          <input type="text" name="fullname" class="info" value="<?php echo e(Auth::user()->fullname ?? ""); ?>">
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="input-box">
                                                                          <label>Địa chỉ email<em>*</em></label>
                                                                          <input type="email" name="email" class="info" value="<?php echo e(Auth::user()->email ?? ""); ?>">
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                                      <div class="input-box">
                                                                          <label>Số điện thoại<em>*</em></label>
                                                                          <input type="text" name="phone" class="info" value="<?php echo e(Auth::user()->phone ?? ""); ?>">
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                                                      <div class="input-box">
                                                                          <label>Địa chỉ <em>*</em></label>
                                                                          <input type="text" name="address" class="info mb-10" value="<?php echo e(Auth::user()->address ?? ""); ?>">
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-12 col-xs-12">
                                                      <div class="billing-details">
                                                          <div class="right-side">
                                                              <div class="ship-acc clearfix">
                                                                  <div class="ship-toggle">
                                                                      <input type="checkbox" id="ship-toggle" name="new_info">
                                                                      <label for="ship-toggle">Bạn muốn giao địa chỉ khác?</label>
                                                                  </div>
                                                                  <div class="ship-acc-body">
                                                                      <div class="row">
                                                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                                                              <div class="input-box">
                                                                                  <label>Họ tên <em>*</em></label>
                                                                                  <input type="text" name="other_fullname" class="info">
                                                                                  <span class="error-message" id="fullname-error"></span>
                                                                              </div>
                                                                          </div>

                                                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                                                              <div class="input-box">
                                                                                  <label>Địa chỉ email<em>*</em></label>
                                                                                  <input type="email" name="other_email" class="info">
                                                                                  <span class="error-message" id="email-error"></span>
                                                                              </div>
                                                                          </div>

                                                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                                                              <div class="input-box">
                                                                                  <label>Số điện thoại <em>*</em></label>
                                                                                  <input type="text" name="other_phone" class="info">
                                                                                  <span class="error-message" id="phone-error"></span>
                                                                              </div>
                                                                          </div>

                                                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                                                              <div class="input-box">
                                                                                  <label>Địa chỉ mới <em>*</em></label>
                                                                                  <input type="text" name="other_address" class="info mb-10">
                                                                                  <span class="error-message" id="address-error"></span>
                                                                              </div>
                                                                          </div>

                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="form">
                                                                  <div class="input-box">
                                                                      <label>Order Notes</label>
                                                                      <textarea name="order_notes" placeholder="Ghi chú về đơn hàng của bạn" class="area-tex"></textarea>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-7 col-sm-12 col-xs-12">
                                              <div class="checkout-payment-area">
                                                  <div class="checkout-total">
                                                      <h3>Giỏ hàng của bạn</h3>
                                                      <div class="table-responsive">
                                                          <table class="checkout-area table">
                                                              <thead>
                                                                  <tr class="cart_item check-heading">
                                                                      <td class="ctg-type"> Sản phẩm</td>
                                                                      <td class="cgt-des"> Giá</td>
                                                                  </tr>
                                                              </thead>
                                                              <tbody>
                                                                  <?php
                                                                      $total = 0 
                                                                  ?>
                                                                  <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                      <tr class="cart_item check-item prd-name">
                                                                          <?php
                                                                          $sub_total = $item_cart->number * $item_cart->price;
                                                                          $total += $sub_total;
                                                                          ?>
                                                                          <td class="ctg-type">
                                                                              <?php echo e($item_cart->name); ?> × <span><?php echo e($item_cart->number); ?><br></span>
                                                                          </td>
                                                                          <td class="cgt-des"> <?php echo e(number_format($sub_total)); ?> </td>
                                                                      </tr>
                                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                  <tr class="cart_item" style="background: #c8dff7">
                                                                      <td class="ctg-type"> Tạm tính</td>
                                                                      <td class="cgt-des"><?php echo e(number_format($total)); ?></td>
                                                                  </tr>
                                                                  <tr class="cart_item">
                                                                      <td class="ctg-type"> Giảm giá thành viên:</td>
                                                                      <td class="cgt-des"><?php echo e($rank->rank_type); ?> - <?php echo e($rank->promotion); ?> %</td>
                                                                  </tr>
                                                                  <tr class="cart_item">
                                                                      <td class="ctg-type">Phương thức thanh toán</td>
                                                                      <td class="cgt-des ship-opt">
                                                                          <div class="shipp">
                                                                              <input type="radio" id="pay-toggle1" name="payment_method" value="1" checked>
                                                                              <label for="pay-toggle1">Tiền mặt</label>
                                                                          </div>
                                                                          
                                                                      </td>
                                                                  </tr>
                                                                  <tr class="cart_item">
                                                                      <td class="ctg-type crt-total"> Thành tiền</td>
                                                                      <td class="cgt-des prc-total"> <span name="total"><?php echo e(number_format( $final = $total - ($total * $rank['promotion'] / 100))); ?> VNĐ</span></td>
                                                                      <input type="hidden" name="total" value="<?= $final ?>">
                                                                  </tr>
                                                              </tbody>
                                                          </table>
                                                            <div class="process-checkout-btn text-right" style="width:50%;">
                                                                <button class="button btn-proceed-checkout" name="PLACEORDER" title="Đặt hàng" type="submit"><span>Thanh toán</span></button>
                                                            </div>
                                                          
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- Checkout are end-->
                          </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\du_an\laravel_web\php_3\asm\example-app\resources\views/FrontEnd/pages/checkout.blade.php ENDPATH**/ ?>