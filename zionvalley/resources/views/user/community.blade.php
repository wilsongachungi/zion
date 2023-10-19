<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>zion valley </title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>


    @if(session()->has('message'))
    <div class="alert alert-success">

        {{session()->get('message')}}
        <button type="button" class="close" data-dismiss="alert">
            X
        </button>


    </div>


    @endif

  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +254 792 668219</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> zionvalley@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-whatsapp"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Zion</span>-Valley</a>
{{--
        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form> --}}

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Community Environment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Accomodations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Harambee's Structure</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>


            @if(Route::has('login'))



            <li class="nav-item">
                <a class="nav-link" style="background-color: greenyellow" href="{{ route('message')}}">Message</a>
              </li>
            @auth

            @else
                <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                </li>

              @endauth

              @endif
          </ul>
        </div>

    </nav>
  </header>

  <div class="page-hero bg-image " style="background-image: url(../assets/img/Capture19.JPG);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead" style="color:  rgb(47, 255, 137); text-size:25px">Nature Preservation at</span>
        <h1 class="display-4"><strong style="color:  rgb(47, 255, 137)">zion valley</strong></h1>

      </div>
    </div>
  </div>


    <div class="container">

        <div class="row" style="padding: 20px">
            <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title" style="color:  rgb(28, 30, 26); ">Nature Preservation</h5>
                <p class="card-text">Community-based organizations (CBOs) will play role in dealing
                     with significantly benefit nature preservation. This organization
                      have a vested interest in
                     preserving  natural surroundings. CBOs will act as powerful advocate for
                     sustainable resort development and responsible land use practices. They will help
                      ensure that resort is designed and operated in a way that minimizes
                      impact on the environment, such as by promoting eco-friendly construction, waste
                      reduction, and energy efficiency.</p>
                </div>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title" style="color:  rgb(28, 30, 26);">Opportunity for the Community</h5>
                <p class="card-text">The involvement of this community-based organization (CBO) promises
                     numerous benefits for the local community. Firstly, the CBO will serve as a valuable
                      platform for community members to come together, collaborate, and address their
                      shared concerns. It will empower individuals by providing them with a collective
                      voice, ensuring their needs and aspirations are heard and acted upon.
                       .</p>
                </div>
            </div>
            </div>
        </div>

        <div class="row" style="padding: 20px">
            <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title" style="color:  rgb(28, 30, 26);">Nature Preservation</h5>
                <p class="card-text">Community-based organizations (CBOs) will play role in dealing
                     with significantly benefit nature preservation. This organization
                      have a vested interest in
                     preserving  natural surroundings. CBOs will act as powerful advocate for
                     sustainable resort development and responsible land use practices. They will help
                      ensure that resort is designed and operated in a way that minimizes
                      impact on the environment, such as by promoting eco-friendly construction, waste
                      reduction, and energy efficiency.</p>
                </div>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title" style="color:  rgb(28, 30, 26);">Opportunity for the Community</h5>
                <p class="card-text">
                    Additionally, will play a pivotal role in community development and
                        capacity-building, offering essential services, training programs, and
                        educational resources that can enhance the skills and knowledge of community
                         members. Moreover, through initiatives that address social, economic, and
                          environmental challenges, CBOs can improve the overall quality of life
                           in the community. These organizations can also serve as a bridge between
                            the community and government agencies, helping residents access essential
                            resources, services, and opportunities. In essence, the CBO's presence
                            brings about a stronger, more resilient, and interconnected community
                            that thrives on mutual support, shared goals, and an improved quality
                            of life for its members.</p>
                </div>
            </div>
            </div>
        </div>
    </div>

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#"> Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Member</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">Nyeri,Mathari behind outspan college</p>
          <a href="#" class="footer-link">+254 792 668219</a>
          <a href="#" class="footer-link">zionvalley@gmail.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2023 <a href="https://macodeid.com/" target="_blank">wigitech</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>

