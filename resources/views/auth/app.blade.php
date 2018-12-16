<!DOCTYPE html >
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>HIMATIK - PNJ</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">

      <!-- Favicons -->
      <link href="{{ asset('img/himatik.png ') }}" rel="icon">


      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- Bootstrap CSS File -->
      <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Libraries CSS Files -->
      <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
      <link href="{{ asset('lib/animate/animate.min.css ') }}" rel="stylesheet">
      <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
      <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
      <link href="{{ asset('lib/bootstrap/css/main.css') }}" rel="stylesheet">
      <link href="{{ asset('lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    </head>

    <body id="body">

      <!--==========================
        Top Bar
      ============================-->
      <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
          <div class="contact-info float-left">
            <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">himatik@gmail.com</a>
            <i class="fa fa-phone"></i> +1 5589 55488 55
          </div>
          <div class="social-links float-right">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="wwww.instagram.com/himatik" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
      </section>

      <!--==========================
        Header
      ============================-->
  <header>

      <div class="container">
        <nav class="navbar navbar-light bg-white">
          <a class="navbar-brand" href="/"><img src="{{ asset('img/Logo_Politeknik_Negeri_Jakarta.png')}}" alt="responsive" class="img-fluid"><span><img src="{{ asset('img/himatik.png')}}" alt="responsive" class="img-fluid"></span></a>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
                <li><a href="{{ url('m_profile_kepengurusan') }}">Profil Kepengurusan</a></li>
                <li><a href="{{ url('m_profile_jtik') }}">Profil JTIK</a></li>
                <li><a href="#">Dokomentasi</a></li>
                <li><a href="{{ url('m_minatbakat')}} ">Minat Bakart</a></li>
                <li><a href="#portfolio">Barnaby</a></li>
                <li><a href="#portfolio">Alumni</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->

        </nav>
    </div>

    </header>

    <main>
        @yield('content')
    </main>
    
        <!-- Modal -->
      <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- JavaScript Libraries -->
      <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
      <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
      <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('lib/sticky/sticky.js') }}"></script>
      <script src="{{ asset('lib/magnific-popup/magnific-popup.min.js') }}"></script>
      <!-- Template Main Javascript File -->
      <script src="{{ asset('js/main.js') }}"></script>
      <!-- untuk load jumlah mahasiswa -->
      <script src="{{ asset('js/counter.js') }}"></script>
    </body>
    </html>
