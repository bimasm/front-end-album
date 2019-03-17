


<div class="container-fluid" data-aos="fade" data-aos-delay="500">
  <div class="swiper-container images-carousel">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="image-wrap">
          <div class="image-info">
            <h2 class="mb-3">Nature</h2>
            <a href="<?php echo base_url('Category/category_detail'); ?>" class="btn btn-outline-white py-2 px-4">More Photos</a>
          </div>
          <img src="<?php echo base_url(); ?>assets/images/img_1.jpg" alt="Image">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="image-wrap">
          <div class="image-info">
            <h2 class="mb-3">Portrait</h2>
            <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
          </div>
          <img src="<?php echo base_url(); ?>assets/images/img_2.jpg" alt="Image">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="image-wrap">
          <div class="image-info">
            <h2 class="mb-3">People</h2>
            <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
          </div>
          <img src="<?php echo base_url(); ?>assets/images/img_3.jpg" alt="Image">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="image-wrap">
          <div class="image-info">
            <h2 class="mb-3">Architecture</h2>
            <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
          </div>
          <img src="<?php echo base_url(); ?>assets/images/img_4.jpg" alt="Image">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="image-wrap">
          <div class="image-info">
            <h2 class="mb-3">Animals</h2>
            <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
          </div>
          <img src="<?php echo base_url(); ?>assets/images/img_5.jpg" alt="Image">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="image-wrap">
          <div class="image-info">
            <h2 class="mb-3">Sports</h2>
            <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
          </div>
          <img src="<?php echo base_url(); ?>assets/images/img_6.jpg" alt="Image">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="image-wrap">
          <div class="image-info">
            <h2 class="mb-3">Travel</h2>
            <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
          </div>
          <img src="<?php echo base_url(); ?>assets/images/img_7.jpg" alt="Image">
        </div>
      </div>
    </div>

    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-scrollbar"></div>
  </div>
</div>


<!-- Modal -->
<div id="modal_add" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form action="" method = "POST" >
        <div class="modal-body">  
          <div class="col-md-12">
            <div class="form-group">
              <label class="form-control-label" for="input-address">Name</label>
              <input type="text" class="form-control" name="termpayment_name" required="">
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="btn text-white btn-secondary" >Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

