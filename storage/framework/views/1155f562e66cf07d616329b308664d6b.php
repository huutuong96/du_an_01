

<?php $__env->startSection('css'); ?>
<style>
  ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
  }

  li {
      position: relative;
  }

  a {
      display: block;
      padding: 10px 20px;
      text-decoration: none;
      color: #333;
  }

  ul ul {
      display: none;
      position: absolute;
      top: 100%;
      right: 0;
      background-color: rgb(255, 255, 255);
      border: 1px solid #33465c;
      z-index: 999;
  }

  li:hover > ul {
      display: block;
  }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
 <!-- Main Container -->
 <div class="main-container col2-left-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-sm-push-3 main-inner">
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme">
                  <div class="item"> <a href="#"><img alt="New Special Collection" src="<?php echo e(asset("/")); ?>public/images/banner/Anh-sale-don-gian-nhung-dep.jpg" height="315px"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      
                    </div>
                  </div>
                  <div class="item"> <a href="#"><img alt="New Fashion" src="<?php echo e(asset("/")); ?>public/images/banner/bannershop.jpg" height="315px"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <article class="col-main">
            <div class="page-title">
              <h2>Danh sách sản phẩm</h2>
            </div>
                <?php if($list_product->isEmpty()): ?>
                <span style=" color: red; font-size: 20px">Không tìm kiếm thấy sản phẩm nào phù hợp</span>
                <?php else: ?>
                <div class="toolbar">
                  <div id="sort-by">
                    <label class="left">Sắp xếp theo: </label>
                    <ul>
                      <li><a href="#">...<span class="right-arrow"></span></a>
                        <ul>
                          <li style="width: 152px;"><a href="<?php echo e(route("shop",["key"=> "price","value" => "asc"])); ?>">Giá tăng dần</a></li>
                          <li style="width: 152px;"><a href="<?php echo e(route("shop",["key"=> "price","value" => "desc"])); ?>">Giá giảm dần</a></li>
                        </ul>
                      </li>
                    </ul>
                    <a class="button-asc left" href="#" title="Set Descending Direction"></a> </div>
                  <div class="pager">
                    <div id="limiter">
                      <label>Số lượng show: </label>
                      <ul>
                        <li><a href="<?php echo e(route("shop",["number"=> count($list_product)])); ?>"><?php echo e(count($list_product)); ?><span class="right-arrow"></span></a>
                          <ul>
                            <li><a href="<?php echo e(route("shop",["number"=> 6])); ?>">9</a></li>
                            <li><a href="<?php echo e(route("shop",["number"=> 6])); ?>">15</a></li>
                            <li><a href="<?php echo e(route("shop",["number"=> 6])); ?>">18</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                </div>
                <div class="category-products">
                  <ul class="products-grid">
                    <?php $__currentLoopData = $list_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                          <div class="item-img">
                              <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="<?php echo e(route("product_detail", ["id"=> $item->id])); ?>"> <img alt="" src="<?php echo e(asset("public/images/product/".$item->list_image[0]->image)); ?>"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="sale-label sale-top-right">sale</div>
                              <div class="new-label new-top-left">new</div>
                              <a href="<?php echo e(route("add_to_wishlist",["id"=>$item->id])); ?>">
                              <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                              </a> <a href="<?php echo e(route("add_to_cart",["id"=>$item->id])); ?>">
                              <div class="mask-right-shop"><i class="fa fa-shopping-cart"></i></div>
                              </a> </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                                <div class="item-title">
                                    <a title="" href="<?php echo e(route("product_detail", ["id"=> $item->id])); ?>">
                                    <?php echo e($item->name); ?>

                                    </a>
                                </div>
                                <div class="item-content">
                                    <div class="item-price" style="height: 60px;">
                                        <div class="price-box">
                                                <p class="regular-price">
                                                    <span class="price" id="displayedPrice">
                                                        <?php echo e(number_format($item->price - ($item->price * $item->promotion / 100))); ?> VNĐ
                                                    </span>
                                                </p><br>
                                                <p class="old-price">
                                                        <?php if($item->promotion > 1): ?>
                                                            <span class="price">
                                                                <span id="originalPrice"><?php echo e(number_format($item->price)); ?> </span> VNĐ
                                                            </span>
                                                        <?php endif; ?>
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                </div>
            
            <div class="toolbar bottom">
              <div class="row">
                <div class="col-sm-2 text-left" style="width: 100%">
                    <?php echo e($list_product->links()); ?>

                </div>
              </div>
            </div>
            <?php endif; ?>
          </article>
        </div>
        <div class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <aside class="sidebar">
            <div class="block block-layered-nav">
              <div class="block-title">
                <h3>Cửa hàng</h3>
              </div>
              <div class="block-content">
                <dl id="narrow-by-list">
                  <dt class="even">Danh mục sản phẩm</dt>
                  <dd class="even">
                    <ul>
                      <li><a href="<?php echo e(route("shop")); ?>">Tất cả sản phẩm</a></li>
                      <?php $__currentLoopData = $list_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($item->parent_id == 0): ?>
                          <li>
                              <a href="<?php echo e(route("shop",["category_id"=> "category_id", "id" => $item->id])); ?>"><?php echo e($item->name); ?></a>
                              <ul>
                                 <?php $__currentLoopData = $list_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <?php if($item2->parent_id == $item->id): ?>
                                          <li><a href="<?php echo e(route("shop",["category_id"=> "category_id", "id" => $item2->id])); ?>"><?php echo e($item2->name); ?></a></li>
                                      <?php endif; ?>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                          </li>
                          <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                  </dd>
                </dl>
              </div>
            </div>
            <div class="block product-price-range ">
              <div class="block-title">
                <h3>Giá Cả</h3>
              </div>
              <div class="block-content">
                <div class="slider-range">
                  <ul class="check-box-list">
                    <li>
                      <div class="pretty p-icon p-smooth">
                        <div class="state p-success"> <i class="icon fa fa-check"></i>
                          <a href="<?php echo e(route("shop",["min"=> 100000, "max" => 1000000])); ?>"> 100,000 - 1,000,000 VN</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="pretty p-icon p-smooth">
                        <div class="state p-success"> <i class="icon fa fa-check"></i>
                          <a href="<?php echo e(route("shop",["min"=> 1000000, "max" => 3000000])); ?>"> 1,000,000 - 3,000,000 VND</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="pretty p-icon p-smooth">
                        <div class="state p-success"> <i class="icon fa fa-check"></i>
                          <a href="<?php echo e(route("shop",["min"=> 3000000, "max" => 5000000])); ?>"> 3,000,000 - 5,000,000 VND</a>
                        </div>
                      </div>
                    </li>
                    <li>
                        <div class="pretty p-icon p-smooth">
                          <div class="state p-success"> <i class="icon fa fa-check"></i>
                            <a href="<?php echo e(route("shop",["min"=> 5000000, "max" => 15000000])); ?>"> 5,000,000 - 15,000,000 VND</a>
                          </div>
                        </div>
                    </li>
                    <li>
                    <div class="pretty p-icon p-smooth">
                        <div class="state p-success"> <i class="icon fa fa-check"></i>
                        <a href="<?php echo e(route("shop",["min"=> 15000000, "max" => 30000000])); ?>"> 15,000,000 - 30,000,000 VND</a>
                        </div>
                    </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Container End --> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\du_an\laravel_web\php_3\asm\example-app\resources\views/FrontEnd/pages/shop.blade.php ENDPATH**/ ?>