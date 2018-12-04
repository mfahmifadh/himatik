@extends('layouts.app')

@section('content')
<hr>
<div class="container">
	<h2 align="center"><label>Grand Desain</label></h2>
	<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


	<!--==========================
      Visi & Mission
    ============================-->
	<section id="services">	
		<div class="row">  
		  <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">VISI</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
            </div>
          </div>	

			
          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="">MISI</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
            </div>
          </div>
      </div>
    </section>

    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
        <div class="section-header">
          <h2>Struktur Organisasi</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
    </section><!-- #testimonials -->


	<!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="{{ asset('img/makna_logo.png') }}" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>MAKNA LOGO HIMATIK</h2>
            <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              	
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->


	<!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
        <div class="section-header">
          <h2>Departemen & Biro</h2>
        </div>

        <div class="owl-carousel clients-carousel">
          <a data-toggle="modal" data-target=".kreatif">
            <img src="{{ asset('img/logo_himatik/kreatif.jpg') }}" alt=""></a>
          <a data-toggle="modal" data-target=".kestari">
            <img src="{{ asset('img/logo_himatik/kestari.jpg') }}" alt=""></a>
          <a data-toggle="modal" data-target=".danlog">
            <img src="{{ asset('img/logo_himatik/danlog.jpg') }}" alt=""></a>
          <a data-toggle="modal" data-target=".sosma">
            <img src="{{ asset('img/logo_himatik/sosma.jpg') }}" alt=""></a>
          <a data-toggle="modal" data-target=".kesma">
            <img src="{{ asset('img/logo_himatik/kesma.jpg') }}" alt=""></a>
          <a data-toggle="modal" data-target=".keroh">
            <img src="{{ asset('img/logo_himatik/keroh.jpg') }}" alt=""></a>
          <a data-toggle="modal" data-target=".kominfo">
            <img src="{{ asset('img/logo_himatik/kominfo.jpg') }}" alt=""></a>
          <a data-toggle="modal" data-target=".diktek">
            <img src="{{ asset('img/logo_himatik/diktek.jpg') }}" alt=""></a>
          <a data-toggle="modal" data-target=".sospol">
            <img src="{{ asset('img/logo_himatik/sospol.jpg') }}" alt=""></a>
        </div>

    </section><!-- #clients -->

</div>

@yield('modal')
@endsection