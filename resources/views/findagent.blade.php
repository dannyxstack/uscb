<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<style>
.section-bg-findagent {
  background-image: url('/images/bg-header-agent.png');
  background-size: cover; /* 覆盖整个区域 */
  background-position: center; /* 居中显示 */
  width: 100%;
  height: 800px;
}

</style>

<body>

  <!-- top navbar -->
  @include('layouts.topbar')

  <!-- main content -->

  <section class="hero text-center section-bg-banner2">
    <div class="container">
      <div class="row">
        <div class="col-md-5 color-white">

          <h1 class="color-white" style="margin-top: 120px;">
            Find An Agent <br>
          </h1>
        </div>
        <div class="col-md-7">
          <img src="/images/Find-an-agent.png" alt="Courses Banner" class="img-fluid rounded-5">
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white">
    <div class="py-5 bg-lightgold-round-left-bottom color-white">

      <div class="container">
        <div class="row text-center" style="padding-top: 80px;">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <h5 class="fs-4">Representative agents</h5>
            <h1>Find An Agent</h1>
            <p class="pt-3"></p>
            <p class="fs-3">Leverage our extensive network of accredited education agents who have been instrumental 
              in guiding thousands of students toward success. 
              These seasoned professionals possess deep insights into both our programs and international 
              education landscapes, offering personalized advice that aligns perfectly with your academic 
              goals and visa requirements. 
              With decades of collective experience and our strong institutional 
              partnerships, you gain access to reliable, expert guidance—ensuring a smooth, 
              well-informed journey to studying with us.</p>
            <p></p>
            <a href="/agentlist" class="btn btn-lg footer-start-here-btn fs-4 mt-3 bg-darkpurple color-white">View List</a>
          </div>
          <div class="col-md-2"></div>
        </div>

      </div>
    </div>
  </section>

  <section class="">
    <div class="">

    <div class="container">
      <div class="row pb-5">
        <div class="col-md-6">
          <div class="" style="max-height: 500px;align-items: center;padding-top: 70px;">
            <img src="/images/pic1.png" alt="" class="img-fluid rounded-5">
          </div>

        </div>
        <div class="col-md-6" style="padding-top: 70px;">
          <h5 class="color-lightgold fs-4">Find An Agent</h5>
          <h2 class="color-gold fs-1">Become An Agent <br> Representative!</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="fs-5 mt-3">We are always looking to establish new relationships with representatives. If you would like to apply to become an authorised agent with us, please complete the below enquiry form to register and include the following documentation.</p>
          <p class="mt-5"></p>
          <a href="https://form.jotform.com/252581213016043" class="btn btn-lg footer-start-here-btn fs-4 mt-3 bg-darkpurple color-white">View Form</a>
          <p></p>
        </div>
      </div>
      </div>

    </div>
  </section>




 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

