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
                  <div class="col-md-3" style="margin-left: 20px">
                    <div class="box wow fadeInLeft">
                      <div class="section-header">
                        <h2>Info Penting</h2>
                       </div>
                  @foreach($information as $data)
                  <p class="description">
                      <div class="post" data-postid="{{ $data->id }}">
                         <div class="article">
                            <a href="#" class="create-comment" style="color: #39DCE2;" data-toggle="modal"><b>
                            <center>{{ $data->heading_infor}}</center></a><hr></b>
                         </div>
                         <div hidden>
                          <div class="detail">
                            <a href="#">{{ $data->detail_infor }}</a>
                          </div>
                         </div>
                      </div>
                  </p>
                  @endforeach
                        </p>
                    </div>
                  </div>
                <div class="container">
                  <div class="row">
                  <div class="col-lg-12">
                      <div class="box wow fadeInLeft">
                         <div class="section-header">
                          <h2>POSTS</h2>
                         </div>
                      <p class="description">
                        <div class="row">
                          @foreach($post as $row)
                             <div class="col-md-4"><br>
                              <div class="card" style="width: 18rem;">
                               <div class="portfolio-item wow fadeInUp">
                                <a href="{{ asset('images/posts/' . $row->filename) }}" class="portfolio-popup">
                                  <img src="{{ asset('images/posts/' . $row->filename) }}" width="200" height="150">
                                </a>
                               </div>
                              </div>
                             <div class="card-body">
                                <center><a href="{{ $row->konten}}" class="btn btn-primary"><b>DETAIL POST</b></a></center>
                              </div>
                            </div>
                          @endforeach
                      </p>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section><!-- #portfolio -->

@endsection
