    @extends('layouts/app')

    @section('content')

 <section id="intro">

    <div class="intro-content">
      <div>
        <a href="#about" class="btn-get-started scrollto">
          <b>MAHASISWA<br>AKTIF</b>
          <h1><b class="counter-count">500</b></h1></a>
        <a href="#portfolio" class="btn-projects scrollto">
          <b>MAHASISWA<br>NON AKTIF</b>
          <h1><b class="counter-count">200</b></h1></a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('images/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('images/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('images/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('images/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('images/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

      <hr>

            <!--==========================
              Info Penting
            ============================-->
            

        <!--==========================
          Our Portfolio Section
        ============================-->
        <section id="portfolio" class="wow fadeInUp">
            <section id="services"> 
                <div class="row">  
                  <div class="col-md-3">
                    <div class="box wow fadeInLeft">
                      <center>
                      <div class="section">
                        <h2>INFO PENTING</h2><hr>
                        </div>
                      </center>
                  @foreach($information as $data)
                    <p class="description">
                      <center>
                        <i class="ion-android-checkmark-circle"></i> 
                        <a href="#myModal" style="color: #39DCE2;" data-toggle="modal"><b>
                        {{ $data['heading_infor']}} | {{ $data['date']}}</b></a><hr>
                      </center>
                    </p>
                  @endforeach 
                 </div>
                </div>
                <div class="container">
                <div class="col-md-12">
                    <div class="box wow fadeInLeft">
                      <center>
                      <div class="section">
                        <h2>BERITA</h2><hr>
                        </div>
                      </center>
                    <p class="description">
                      <div class="row">
                        @foreach($information as $data)
                           <div class="col-md-4"><br>
                            <div class="card" style="width: 18rem;">
                             <div class="portfolio-item wow fadeInUp">   
                              <a href="{{ asset('img/berita1.png') }}" class="portfolio-popup">
                                <img src="{{ asset('img/berita1.png') }}" alt="">
                                <div class="portfolio-overlay">
                                  <div class="portfolio-info"><h2 class="wow fadeInUp">{{ $data['heading_infor']}}</h2></div>
                                </div>
                              </a>
                             </div>
                            </div>
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    @endforeach
                        <hr>
                    </p>
                 </div>
                </div>
                </div>
            </section>
            </div>
          </div>
        </section><!-- #portfolio -->
        </div>
      </div>
    </section><!-- #about -->
@endsection




