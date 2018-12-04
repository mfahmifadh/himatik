@extends('layouts.app')


@section('content')




<!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">LATAR BELAKANG</h3>
            <p class="cta-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3">
            <a class="cta-btn align-middle"><img src="{{ asset('img/himatik.jpg')}}"></a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <div class="container">


    <!--==========================
	      Our Portfolio Section
	    ============================-->
	    <section id="portfolio" class="wow fadeInUp">
	      <div class="container">
	        <div class="section-header">
	          <h2>FASILITAS</h2>
	          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
	        </div>


	      <div class="container-fluid">
	        <div class="row no-gutters">

	          <div class="col-lg-3 col-md-4">
	            <div class="portfolio-item wow fadeInUp">
	              <a href="{{ asset('images/portfolio/1.jpg') }}" class="portfolio-popup">
	                <img src="{{ asset('images/portfolio/1.jpg') }}" alt="">
	                <div class="portfolio-overlay">
	                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
	                </div>
	              </a>
	            </div>
	          </div>

	          <div class="col-lg-3 col-md-4">
	            <div class="portfolio-item wow fadeInUp">
	              <a href="{{ asset('images/portfolio/2.jpg') }}" class="portfolio-popup">
	                <img src="{{ asset('images/portfolio/2.jpg') }}" alt="">
	                <div class="portfolio-overlay">
	                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>
	                </div>
	              </a>
	            </div>
	          </div>

	          <div class="col-lg-3 col-md-4">
	            <div class="portfolio-item wow fadeInUp">
	              <a href="{{ asset('images/portfolio/3.jpg') }}" class="portfolio-popup">
	                <img src="{{ asset('images/portfolio/3.jpg') }}" alt="">
	                <div class="portfolio-overlay">
	                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>
	                </div>
	              </a>
	            </div>
	          </div>

	          <div class="col-lg-3 col-md-4">
	            <div class="portfolio-item wow fadeInUp">
	              <a href="{{ asset('images/portfolio/4.jpg') }}" class="portfolio-popup">
	                <img src="{{ asset('images/portfolio/4.jpg') }}" alt="">
	                <div class="portfolio-overlay">
	                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>
	                </div>
	              </a>
	            </div>
	          </div>

	          <div class="col-lg-3 col-md-4">
	            <div class="portfolio-item wow fadeInUp">
	              <a href="{{ asset('images/portfolio/5.jpg') }}" class="portfolio-popup">
	                <img src="{{ asset('images/portfolio/5.jpg') }}" alt="">
	                <div class="portfolio-overlay">
	                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>
	                </div>
	              </a>
	            </div>
	          </div>

	          <div class="col-lg-3 col-md-4">
	            <div class="portfolio-item wow fadeInUp">
	              <a href="{{ asset('images/portfolio/6.jpg') }}" class="portfolio-popup">
	                <img src="{{ asset('images/portfolio/6.jpg') }}" alt="">
	                <div class="portfolio-overlay">
	                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>
	                </div>
	              </a>
	            </div>
	          </div>

	          <div class="col-lg-3 col-md-4">
	            <div class="portfolio-item wow fadeInUp">
	              <a href="{{ asset('images/portfolio/7.jpg') }}" class="portfolio-popup">
	                <img src="{{ asset('images/portfolio/7.jpg') }}" alt="">
	                <div class="portfolio-overlay">
	                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>
	                </div>
	              </a>
	            </div>
	          </div>

	          <div class="col-lg-3 col-md-4">
	            <div class="portfolio-item wow fadeInUp">
	              <a href="{{ asset('images/portfolio/8.jpg') }}" class="portfolio-popup">
	                <img src="{{ asset('images/portfolio/8.jpg') }}" alt="">
	                <div class="portfolio-overlay">
	                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>
	                </div>
	              </a>
	            </div>
	          </div>
	         </div>
	        </div>

	      </div>
	    </section><!-- #portfolio -->

	    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Daftar Prestasi</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('images/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <img src="{{ asset('img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
              </p>
              <img src="{{ asset('images/testimonial-1.jpg') }}" class="testimonial-img" alt="">
              <h3>Muhammad Fahmi F</h3>
              <h4>TI 1A</h4>
              <h6>Juara I Lomba Makan Jantung Tingkat Internasional</h6>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('images/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="{{ asset('images/testimonial-2.jpg') }}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('images/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <img src="{{ asset('images/quote-sign-right.png') }}" class="quote-sign-right" alt="">
              </p>
              <img src="{{ asset('images/testimonial-3.jpg') }}" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('images/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <img src="{{ asset('images/quote-sign-right.png') }}" class="quote-sign-right" alt="">
              </p>
              <img src="{{ asset('images/testimonial-4.jpg') }}" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('images/quote-sign-left.png') }}') }}" class="quote-sign-left" alt="">
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <img src="{{ asset('images/quote-sign-right.png') }}') }}" class="quote-sign-right" alt="">
              </p>
              <img src="{{ asset('images/testimonial-5.jpg') }}" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>

        </div>

      </div>
    </section><!-- #testimonials -->


    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
        <div class="section-header">
          <h2>Kerja Sama</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="{{ asset('images/clients/client-1.png') }}" alt="">
          <img src="{{ asset('images/clients/client-2.png') }}" alt="">
          <img src="{{ asset('images/clients/client-3.png') }}" alt="">
          <img src="{{ asset('images/clients/client-4.png') }}" alt="">
          <img src="{{ asset('images/clients/client-5.png') }}" alt="">
          <img src="{{ asset('images/clients/client-6.png') }}" alt="">
          <img src="{{ asset('images/clients/client-7.png') }}" alt="">
          <img src="{{ asset('images/clients/client-8.png') }}" alt="">
        </div>

    </section><!-- #clients -->

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Staff Pengajar</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('images/team-1.jpg') }}" alt=""></div>
              <div class="details">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('images/team-2.jpg') }}" alt=""></div>
              <div class="details">
                <h4>Sarah Jhinson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('images/team-3.jpg') }}" alt=""></div>
              <div class="details">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('images/team-4.jpg') }}" alt=""></div>
              <div class="details">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

</div>


@endsection