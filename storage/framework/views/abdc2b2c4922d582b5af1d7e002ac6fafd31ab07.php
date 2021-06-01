<?php $__env->startSection('content'); ?>

<style>
  .bg-overlay {
    background: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, .6)), url(https://wallpapercave.com/wp/wp2024150.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    height: 70vh;
    padding-top: 50px;
}
  .extra-spacing {
    padding-top: 35px;
    padding-bottom: 35px;
  }

  @media (min-width: 768px) {
    .extra-spacing {
      padding-top: 75px;
      padding-bottom: 75px;
    }
  }
</style>
<div class="bg-overlay">
  <div class="container">
    <div class="d-flex align-items-center" style="min-height: 70vh;">
      <div class="row">
        <div class="col-12">
          <h1 class="display-2 animate__animated animate__bounce animate__delay-1s animate__infinite">
            Digitalizing Farming
          </h1>
        </div>
        <div class="col-12">
          <h2 class="text-primary display-4 animate__animated animate__fadeInDown animate__bounce animate__delay-1s">
             Helping farmer in Digitalizing
          </h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background:#fff" class="extra-spacing">
  <div class="container pt-4">
    <div class="row featurette d-flex align-items-center">
      <div class="col-md-7 mb-2 order-md-2">
        <h2 class="featurette-heading text-danger">
          
          <span class="text-muted">Area Weather </span> Details
          <br>
        </h2>
        <p class="lead">
          Get weather and more details of any city and start farming
        </p>
        <br>
        <a href="weather" class="btn btn-dark btn-lg">
          See Weather
        </a>
      </div>
      <div class="col-md-5">
        <img src="https://cdn4.vectorstock.com/i/1000x1000/71/78/hot-and-cold-weather-temperature-symbols-vector-20437178.jpg" style="width:100%" alt="publish article">
      </div>
    </div>
  </div>
</div>
<div class="extra-spacing">
  <div class="container mt-4">
    <div class="row featurette d-flex align-items-center">
      <div class="col-md-7 mb-2 ">
        <h2 class="featurette-heading text-danger">
          <span class="text-muted">Goverment  </span> Scheme
          <br>
        </h2>
        <p class="lead">
          We will update the governement scheme and how to get benefits of that.
        </p>
        <br>
        <a href="scheme" class="btn btn-dark btn-lg">
          See Scheme
        </a>
      </div>
      <div class="col-md-5 order-md-2">
        <img src="https://img.etimg.com/thumb/msid-69647639,width-1200,height-900,imgsize-703726,overlay-economictimes/photo.jpg" style="width:100%" alt="publish article">
      </div>
    </div>
  </div>
</div>

<div style="background:#fff" class="extra-spacing">
  <div class="container pt-4">
    <div class="row featurette d-flex align-items-center">
      <div class="col-md-7 mb-2 order-md-2">
        <h2 class="featurette-heading text-danger">
          
          <span class="text-muted">Blog by Real </span> farmer
          <br>
        </h2>
        <p class="lead">
          Get how farmer around the country doing and how was their experience
        </p>
        <br>
        <a href="/blog" class="btn btn-dark btn-lg">
          See Blog
        </a>
      </div>
      <div class="col-md-5">
        <img src="https://blog.feedspot.com/wp-content/uploads/2017/06/Farming-Blogs.jpg" style="width:100%" alt="publish article">
      </div>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/welcome.blade.php ENDPATH**/ ?>