<!-- top navbar -->
  <div class="top-bar">
    <div class="container d-flex justify-content-end align-items-center">
      <form id="siteSearchForm" class="search-form d-inline-flex" action="https://www.google.com/search" onsubmit="performSiteSearch(event)">
        <input type="text" id="siteSearchInput" name="q" class="form-control me-2" placeholder="Search...">
        <button type="submit" class="btn btn-light" style="background-color: #ebebeb;">
          <i class="bi bi-search search-icon color-gold"></i>
        </button>
      </form>
      <a href="/apply" class="btn btn-apply me-2">APPLY NOW </a>
    </div>
  </div>
  
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand py-3" href="/">
        <img src="/images/LOGO_US_Hospitality_Landscape-01.png" alt="Unity Skills College of Hospitality Logo" height="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="/index">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/whyus">Why Us</a></li>
          <li class="nav-item dropdown">
            <!-- 1-2 layer -->
            <a class="nav-link dropdown-toggle" href="/allcourses" >Courses</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/allcourses">All Courses</a></li>
              
              <li><hr class="dropdown-divider"></li>


              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#" role="button" >Cookery</a>
                <ul class="dropdown-menu">
                  <li>
                    @foreach ( $allCourses as $course)
                      @if ($course->class == 'Cookery' )
                        <a class="dropdown-item" href="/course/{{ $course->kname }}">{{ $course->code }} {{ $course->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#" role="button" >Hospitality</a>
                <ul class="dropdown-menu">
                  <li>
                    @foreach ( $allCourses as $course)
                      @if ($course->class == 'Hospitality' )
                        <a class="dropdown-item" href="/course/{{ $course->kname }}">{{ $course->code }} {{ $course->name }}</a>
                      @endif
                    @endforeach

                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#" role="button" >Aged Care and Community Services</a>
                <ul class="dropdown-menu">
                  <li>
                    @foreach ( $allCourses as $course)
                      @if ($course->class == 'Aged Care and Community Services' && $course->college == 'health,hospitality' )
                        <a class="dropdown-item" href="/course/{{ $course->kname }}">{{ $course->code }} {{ $course->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#" role="button" >Business and Management</a>
                <ul class="dropdown-menu">
                  <li>
                    @foreach ( $allCourses as $course)
                      @if ($course->class == 'Business and Management' && $course->college == 'health,hospitality' )
                        <a class="dropdown-item" href="/course/{{ $course->kname }}">{{ $course->code }} {{ $course->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>



              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/intakedates">Intake Dates</a></li>
              <li><a class="dropdown-item" href="/promotion">Promotional Prices</a></li>


            </ul>
  
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="/colleges">Colleges</a></li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Education Agents</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/agentlist">Agents</a></li>
              <li><a class="dropdown-item" href="/findagent">Find An Agent</a></li>
              <li><a class="dropdown-item" href="https://form.jotform.com/252581213016043">Become an Agent</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Student Experience</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/enrolment-and-orientation">Enrollment and Orientation</a></li>
              <li><a class="dropdown-item" href="/student-services">Student Services</a></li>
              <li><a class="dropdown-item" href="/policies">Polices, Procudures and Forms</a></li>
              <li><a class="dropdown-item" href="/esos-framework-and-tps-information">ESOS Framework & TPS Information</a></li>
              <li><a class="dropdown-item" href="https://penfold.edu.au/wp-content/uploads/2025/10/Unity-Skills-Colleg-of-Health-International-Student-Prospectus_V3.0.pdf">Student Handbook</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="/apply">Apply Now</a></li>
        </ul>
      </div>
    </div>
  </nav>

