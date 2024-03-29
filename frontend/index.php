
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jobplanet - Responsive Job Board HTML Template </title>

    <!--favicon-->
    <link rel="apple-touch-icon" href="assets/theme/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/theme/images/favicon.ico" type="image/x-icon">

    <!-- bootstrap -->
    <link href="assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- lightbox -->
    <link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">


    <!-- Themes styles-->
    <link href="assets/theme/css/theme.css" rel="stylesheet">
    <!-- Your custom css -->
    <link href="assets/theme/css/theme-custom.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- wrapper page -->
    <div class="wrapper">
      <!-- main-header -->
      <header class="main-header">


        <!-- main navbar -->
        <nav class="navbar navbar-default main-navbar hidden-sm hidden-xs">
          <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <ul class="nav navbar-nav">
                <li class=""><a href="job_list.html"><strong>Find a Job</strong></a></li>
                <li class=""><a href="resume_list.html"><strong>Find Resumes</strong></a></li>
                <li  class=""><a href="job_post_1.html"><strong>Post a Job</strong></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Articles &amp; Blog</a></li>
                    <li><a href="terms_privacy.html">Terms &amp; Privacy</a></li>
                    <li><a href="error_404.html">Error 404</a></li>
                    <li><a href="shortcode.html">Short Code</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Features <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="job_list.html">Find a Job</a></li>
                    <li><a href="job_details.html">Job Details</a></li>
                    <li><a href="resume_list.html">Find Resumes</a></li>
                    <li><a href="resume_details.html">Resume Details</a></li>
                    <li><a href="job_post_2.html">Post a Job</a></li>
                    <li><a href="company_page.html">Company Profile</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="link-btn"><a href="login.html"><span class="btn btn-theme btn-pill btn-xs btn-line">Login</span></a></li>
                <li class="link-btn"><a href="register.html"><span class="btn btn-theme  btn-pill btn-xs btn-line">Register</span></a></li>
              </ul>
            </div>
          </div>
        </nav><!-- end main navbar -->

        <!-- mobile navbar -->
        <div class="container">
          <nav class="mobile-nav hidden-md hidden-lg">
            <a href="#" class="btn-nav-toogle first">
              <span class="bars"></span>
              Menu
            </a>
            <div class="mobile-nav-block">
              <h4>Navigation</h4>
              <a href="#" class="btn-nav-toogle">
                <span class="barsclose"></span>
                Close
              </a>

              <ul class="nav navbar-nav">
                <li class=""><a href="job_list.html"><strong>Find a Job</strong></a></li>
                <li class=""><a href="resume_list.html"><strong>Find Resumes</strong></a></li>
                <li  class=""><a href="job_post_1.html"><strong>Post a Job</strong></a></li>
                <li><a href="login.html"><strong>Login</strong></a></li>
                <li><a href="register.html"><strong>Register</strong></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Articles &amp; Blog</a></li>
                    <li><a href="terms_privacy.html">Terms &amp; Privacy</a></li>
                    <li><a href="error_404.html">Error 404</a></li>
                    <li><a href="shortcode.html">Short Code</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Features <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="job_list.html">Find a Job</a></li>
                    <li><a href="job_details.html">Job Details</a></li>
                    <li><a href="resume_list.html">Find Resumes</a></li>
                    <li><a href="resume_details.html">Resume Details</a></li>
                    <li><a href="job_post_2.html">Post a Job</a></li>
                    <li><a href="company_page.html">Company Profile</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </div><!-- mobile navbar -->

        <div class="hero-header">
          <div class="inner-hero-header">
            <div class="container">
              <div class="text-center logo"> <a href="index.html"><img src="assets/theme/images/logo.png" alt=""></a></div>
              <div class="relative">
                <i class="fa fa-globe ic-fade-globe"></i>
                <!-- form search -->
                <form class="form-search-home" method="post" action="job_list.html">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>What</label>
                        <input class="form-control  input-lg" placeholder="job title, keywords or company name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Where</label>
                        <input class="form-control input-lg" placeholder="city, province, or region">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-t-primary btn-lg btn-theme btn-pill btn-block">Find a Jobs</button>
                  </div>
                  <div class="text-center">
                    <a href="#modal-advanced" data-toggle="modal">Advanced Job Search</a>
                  </div>
                </form> <!-- end form search -->
              </div>
            </div>
          </div>


          <!-- modal Advanced search -->
          <div class="modal fade" id="modal-advanced" >
            <div class="modal-dialog ">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Advanced Job Search</h4>
                  </div>
                  <div class="modal-body">
                    <h5>Find Jobs</h5>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>With all of these words</label>
                          <input type="text" class="form-control " name="text" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>With the exact phrase</label>
                          <input type="text" class="form-control " name="text" >
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Show jobs of type</label>
                      <select class="form-control">
                        <option value="all">All job types</option>
                        <option value="fulltime">Full-time</option>
                        <option value="parttime">Part-time</option>
                        <option value="contract">Contract</option>
                        <option value="internship">Internship</option>
                        <option value="temporary">Temporary</option>
                      </select>
                    </div>
                    <div class="white-space-10"></div>
                    <h5>Where and When</h5>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Radius  </label>
                          <select id="radius" class="form-control">
                            <option value="0">only in</option>
                            <option value="5">within 5 kilometers </option>
                            <option value="10">within 10 kilometers </option>
                            <option value="15">within 15 kilometers </option>
                            <option selected="" value="25">within 25 kilometers </option>
                            <option value="50">within 50 kilometers </option>
                            <option value="100">within 100 kilometers </option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Of  </label>
                          <input type="text" class="form-control" maxlength="250" value="United States">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Age - Jobs published  </label>
                          <select class="form-control">
                            <option value="any">anytime</option>
                            <option value="15">within 15 days</option>
                            <option value="7">within 7 days</option>
                            <option value="3">within 3 days</option>
                            <option value="1">since yesterday</option>
                            <option value="last">since my last visit</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Display</label>
                          <select class="form-control">
                            <option selected="" value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-theme">Find Jobs</button>
                  </div>
                </form>
              </div>
            </div>
          </div><!-- end modal forgot password -->




        </div>
      </header><!-- end main-header -->


      <!-- body-content -->
      <div class="body-content clearfix" >

        <!-- box simple static -->
        <div class="block-section bg-color1">
          <div class="container">
            <div class="row text-center">
              <div class="col-md-4">
                <h3 class="font-2x ">203,285</h3>
                <h4 class="color-text">Registered Member</h4>
              </div>
              <div class="col-md-4">
                <h3 class="font-2x ">3,603,945</h3>
                <h4 class="color-text">Joblist Posted</h4>
              </div>
              <div class="col-md-4">
                <h3 class="font-2x ">53,945</h3>
                <h4 class="color-text">Awesome Company</h4>
              </div>
            </div>
          </div>
        </div><!-- end box simple static -->

      </div><!--end body-content -->


      <!-- main-footer -->
      <footer class="main-footer">


        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <ul class="list-inline link-footer text-center-xs">
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-sm-6 ">
              <p class="text-center-xs hidden-lg hidden-md hidden-sm">Stay Connect</p>
              <div class="socials text-right text-center-xs">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer><!-- end main-footer -->

    </div><!-- end wrapper page -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/plugins/jquery.js"></script>
    <script src="assets/plugins/jquery.easing-1.3.pack.js"></script>
    <!-- jQuery Bootstrap -->
    <script src="assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"></script>
    <!-- Lightbox -->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Theme JS -->
    <script src="assets/theme/js/theme.js"></script>

    <!-- maps -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script src="assets/plugins/gmap3.min.js"></script>
    <!-- maps single marker -->
    <script src="assets/theme/js/map-detail.js"></script>

  </body>
</html>
