<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<style>
.section-bg-apply {
  background-image: url('/images/bg-header-apply.png');
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

  <section class="hero text-center section-bg-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-5 color-white">

          <h1 class="color-white" style="margin-top: 100px;">
            Policies, Procedures and Forms <br>
          </h1>
        </div>
        <div class="col-md-7">
          <img src="/images/banner8.png" alt="Courses Banner" class="img-fluid rounded-5">
        </div>
      </div>
    </div>
  </section>

  <section class="pt-5 bg-white">
    <div class="container">
      <div class="row pt-5 pb-3">
        <div class="col-md-6">
          <h1 class="color-gold">Policies, Procedures and Forms</h1>
        </div>
        <div class="col-md-6 text-end">
          <!-- <a href="" class="btn color-white bg-darkblue rounded-5 fs-4">Become an Agent</a> -->
        </div>
      </div>
      <div class="row">
        <!-- <p class="fs-4">We look forward to the possibility of collaborating with you and becoming a trusted partner agent of our college.</p> -->
        <p class="fs-5">At United Skills College of Hospitality, we uphold the highest standards of educational integrity and regulatory compliance. 
          Our comprehensive policies, procedures, and forms framework ensures full adherence to Australian education laws, 
          CRICOS requirements, and industry best practices, providing transparent governance for all stakeholders.</p>
      </div>
      <hr>

    </div>
  </section>

  <section class="">
    <div class="container" >
      <div class="row fs-4">

        <h3 class="color-gold py-2 fs-2">Policies and Procedures</h3>
        <p>
        <a href="/docs/Fees and Refunds Policies and Procedures">Fees and Refund Policies and Procedures</a><br>
        <a href="/docs/Academic Integrity Policies and Procedures.pdf">Plagiarism and AI Policies and Procedures</a><br>
        <a href="/docs/Bullying, Discrimination and Harassment Policies and Procedures.pdf">Discrimination and Harassment Policies and Procedures</a><br>
        <a href="/docs/Complaints and Appeals  Policies and Procedures.pdf">Complaints and Appeal Policies and Procedures</a><br>
        <a href="/docs/Enrolments Policies and Procedures.pdf">Enrolment Policies and Procedures</a>
        </p>
        <p></p>
        <hr>
        <h3 class="color-gold py-2 fs-2">Forms</h3>
        <p><a href="https://form.jotform.com/252850455284865">International and Domestic Student Application form</a><br>
        <a href="https://form.jotform.com/253346837646064">Student Request Form</a><br>
        <a href="https://form.jotform.com/253346889519070">Leave Request Form</a><br>
        <a href="https://form.jotform.com/253340129089053">Deferral, Suspension, and Cancellation form</a><br>
        <a href="https://form.jotform.com/253270430535854">Withdrawal Form </a><br>
        <a href="https://form.jotform.com/253167700372858">Fees Refund Request Form</a></p>
        <p></p>
      </div>
      <div class="row"> 
        <p></p>
      </div>

    </div>
  </section>





 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

