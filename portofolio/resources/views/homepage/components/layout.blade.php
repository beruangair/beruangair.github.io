<!DOCTYPE html>
<html lang="en">
<head>
  {{-- Meta --}}
  @section('meta')
  <title>Arif Lutfhansah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content="Arif Lutfhansah">
  <meta name="description" content="This is my story">
  @show
  {{-- Icon --}}
  @section('icon')
  <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon-192x192.png') }}" sizes="192x192">
  <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon-160x160.png') }}" sizes="160x160">
  <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon-96x96.png') }}" sizes="96x96">
  <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon-32x32.png') }}" sizes="32x32">
  <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon-16x16.png') }}" sizes="16x16">
  @show
  {{-- CSS --}}
  @section('css')
  <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}"> <!-- Styles -->
  <link rel="stylesheet" href="{{ URL::asset('css/mediaquery-HDPI.css') }}" media="screen and (min-width: 1083px) and (max-width: 1290px)"> <!-- HDPI Screen -->
  <link rel="stylesheet" href="{{ URL::asset('css/mediaquery-MDPI.css') }}" media="screen and (min-width: 993px) and (max-width: 1082px)"> <!-- MDPI Screen -->
  <link rel="stylesheet" href="{{ URL::asset('css/mediaquery-SDPI.css') }}" media="screen and (min-width: 769px) and (max-width: 992px)"> <!-- SDPI Screen -->
  <link rel="stylesheet" href="{{ URL::asset('css/mediaquery-mobile.css') }}" media="screen and (max-width: 768px)"> <!-- Mobile Screen -->
  <link rel="stylesheet" href="{{ URL::asset('css/mediaquery-mobile450.css') }}" media="screen and (max-width: 450px)"> <!-- Mobile Screen 450px -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet"> <!-- Font QuickSand -->
  @show
</head>
<body>
  {{-- Header --}}
  @section('header')
  <header>
    <div class="inner clearfix">
      <div class="logo pull-left">
        <a href="https://beruangair.github.io./"><h1>{{ $logo[0]->logo }}</h1></a>
      </div>
      <nav class="navigation pull-right">
        <ul>
          @for ($i = 0; $i < count($navigation); $i++)
          <li class="btn-profile active"><a href="/{{ strtolower($navigation[$i]->title)}}">{{ $navigation[$i]->title }}</a></li>
          @endfor
        </ul>
      </nav>
      <a href="#" data-activates="mobile-demo" class="button-collapse navbar-toggle">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </a>
    </div>
  </header>
  @show
  {{-- Navigation Mobile --}}
  @section('navigation_mobile')
  <nav class="mobile">
    <ul class="side-nav" id="mobile-demo">
      <li class="sidebar-header">
        <div class="header-cover">
              <!-- Top bar -->
              <div class="top-bar"></div>
              <!-- Sidebar toggle button -->
              <button type="button" class="sidebar-toggle" style="display: none;">
                  <i class="icon-material-sidebar-arrow"></i>
              </button>
              <!-- Sidebar brand image -->
              <div class="avatar">
                  <img src="{{ URL::asset('images/avatar.jpg') }}">
              </div>
              <!-- Sidebar brand name -->
              <a data-toggle="dropdown" class="email" href="#settings-dropdown">
                  pesan.arif@gmail.com
              </a>
          </div>
      </li>
      <li><a href="#profile" class="waves-effect waves-teal">Profile</a></li>
      <li><a href="#portofolio" class="waves-effect waves-teal">Portofolio</a></li>
      <li><a href="#sitemap" class="waves-effect waves-teal">Sitemap</a></li>
    </ul>
  </nav>
  @show
  {{-- Main --}}
  @section('main')
  <main>
    <div class="leftbar">
      <ul>
        <li class="active"><a href="#" class="timeline-views">Timeline</a></li>
        <li><a href="#" class="grid-views">Grid</a></li>
      </ul>
    </div>
    <div class="content">
      <div class="inner">
        <section id="profile">
          <div class="section-title no-mobile">{{ $navigation[1]->title }}</div>
          <div class="profile-inner clearfix">
            <div class="photo col-md-6 pull-left">
              <img src="{{ URL::asset('images/avatar.jpg') }}" alt="">
            </div>
            <div class="caption col-md-6 pull-right">
              <div class="name">
                <h2>{{ $logo[0]->logo }}</h2>
                <ul class="sosmed">
                  <li><a href="https://www.facebook.com/{{ $sosmed[0]->facebook }}" target="_blank"><svg class="facebook" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="35px" id="Layer_1" style="enable-background:new 0 0 67 67;" version="1.1" viewBox="0 0 67 67" width="35px" xml:space="preserve"><path d="M28.765,50.32h6.744V33.998h4.499l0.596-5.624h-5.095  l0.007-2.816c0-1.466,0.14-2.253,2.244-2.253h2.812V17.68h-4.5c-5.405,0-7.307,2.729-7.307,7.317v3.377h-3.369v5.625h3.369V50.32z   M33,64C16.432,64,3,50.568,3,34C3,17.431,16.432,4,33,4s30,13.431,30,30C63,50.568,49.568,64,33,64z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#010101;"/></svg></a></li>
                  <li><a href="https://twitter.com/{{ $sosmed[0]->twitter }}" target="_blank"><svg class="twitter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="35px" id="Layer_1" style="enable-background:new 0 0 67 67;" version="1.1" viewBox="0 0 67 67" width="35px" xml:space="preserve"><path d="M38.167,22.283c-2.619,0.953-4.274,3.411-4.086,6.101  l0.063,1.038l-1.048-0.127c-3.813-0.487-7.145-2.139-9.974-4.915l-1.383-1.377l-0.356,1.017c-0.754,2.267-0.272,4.661,1.299,6.271  c0.838,0.89,0.649,1.017-0.796,0.487c-0.503-0.169-0.943-0.296-0.985-0.233c-0.146,0.149,0.356,2.076,0.754,2.839  c0.545,1.06,1.655,2.097,2.871,2.712l1.027,0.487l-1.215,0.021c-1.173,0-1.215,0.021-1.089,0.467  c0.419,1.377,2.074,2.839,3.918,3.475l1.299,0.444l-1.131,0.678c-1.676,0.976-3.646,1.526-5.616,1.567  C20.775,43.256,20,43.341,20,43.405c0,0.211,2.557,1.397,4.044,1.864c4.463,1.377,9.765,0.783,13.746-1.568  c2.829-1.674,5.657-5,6.978-8.221c0.713-1.715,1.425-4.851,1.425-6.354c0-0.975,0.063-1.102,1.236-2.267  c0.692-0.678,1.341-1.419,1.467-1.631c0.21-0.403,0.188-0.403-0.88-0.043c-1.781,0.636-2.033,0.551-1.152-0.402  c0.649-0.678,1.425-1.907,1.425-2.267c0-0.063-0.314,0.042-0.671,0.233c-0.377,0.212-1.215,0.53-1.844,0.72l-1.131,0.361l-1.027-0.7  c-0.566-0.381-1.361-0.805-1.781-0.932C40.766,21.902,39.131,21.944,38.167,22.283z M34,64C17.432,64,4,50.568,4,34  C4,17.431,17.432,4,34,4s30,13.431,30,30C64,50.568,50.568,64,34,64z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#010101;"/></svg></a></li>
                  <li><a href="https://www.instagram.com/{{ $sosmed[0]->instagram }}" target="_blank"><svg class="instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="35px" id="Layer_1" style="enable-background:new 0 0 67 67;" version="1.1" viewBox="0 0 67 67" width="35px" xml:space="preserve"><path d="M42.271,26.578v-0.006c0.502,0,1.005,0.01,1.508-0.002  c0.646-0.016,1.172-0.57,1.172-1.217c0-0.963,0-1.927,0-2.89c0-0.691-0.547-1.24-1.236-1.241c-0.961,0-1.922-0.001-2.883,0  c-0.688,0.001-1.236,0.552-1.236,1.243c-0.001,0.955-0.004,1.91,0.003,2.865c0.001,0.143,0.028,0.291,0.073,0.426  c0.173,0.508,0.639,0.82,1.209,0.823C41.344,26.579,41.808,26.578,42.271,26.578z M33,27.817c-3.384-0.002-6.135,2.721-6.182,6.089  c-0.049,3.46,2.72,6.201,6.04,6.272c3.454,0.074,6.248-2.686,6.321-6.043C39.254,30.675,36.462,27.815,33,27.817z M21.046,31.116  v0.082c0,4.515-0.001,9.03,0,13.545c0,0.649,0.562,1.208,1.212,1.208c7.16,0.001,14.319,0.001,21.479,0  c0.656,0,1.215-0.557,1.215-1.212c0.001-4.509,0-9.02,0-13.528v-0.094h-2.912c0.411,1.314,0.537,2.651,0.376,4.014  c-0.161,1.363-0.601,2.631-1.316,3.803s-1.644,2.145-2.779,2.918c-2.944,2.006-6.821,2.182-9.946,0.428  c-1.579-0.885-2.819-2.12-3.685-3.713c-1.289-2.373-1.495-4.865-0.739-7.451C22.983,31.116,22.021,31.116,21.046,31.116z   M45.205,49.255c0.159-0.026,0.318-0.049,0.475-0.083c1.246-0.265,2.264-1.304,2.508-2.557c0.025-0.137,0.045-0.273,0.067-0.409  V21.794c-0.021-0.133-0.04-0.268-0.065-0.401c-0.268-1.367-1.396-2.428-2.78-2.618c-0.058-0.007-0.113-0.02-0.17-0.03H20.761  c-0.147,0.027-0.296,0.047-0.441,0.08c-1.352,0.308-2.352,1.396-2.545,2.766c-0.008,0.057-0.02,0.114-0.029,0.171V46.24  c0.028,0.154,0.05,0.311,0.085,0.465c0.299,1.322,1.427,2.347,2.77,2.52c0.064,0.008,0.13,0.021,0.195,0.03H45.205z M33,64  C16.432,64,3,50.568,3,34C3,17.431,16.432,4,33,4s30,13.431,30,30C63,50.568,49.568,64,33,64z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#010101;"/></svg></a></li>
                </ul>
              </div>
              <div class="count">
                <ul>
                  <li>30+<span>project</span></li>
                  <li>3th<span>pengalaman</span></li>
                  <li>100+<span>diikuti</span></li>
                </ul>
              </div>
              <div class="bio">Menguasai bidang Web Design dan Front-End developer. Selain itu mempunyai dasar pemrograman PHP, dan Java(Android), Swift(IOS), dan video editing After Effects yang dipelajari secara otodidak. Tipe orang yang cepat belajar dan selalu ingin tahu hal-hal baru. :)</div>
              <div class="web">
                <a href="https://beruangair.github.io./">www.beruangair.github.io</a>
              </div>
            </div>
          </div>
        </section>
        <section id="portofolio">
          <div class="section-title">{{ $navigation[2]->title }}</div>
          <div class="project-inner clearfix">
            <div class="project left clearfix">
              <div class="image col-md-6">
                <img src="{{ URL::asset('images/bandara.jpg') }}" alt="">
              </div>
              <div class="caption col-md-6">
                <div class="subtitle">Infografis</div>
                <div class="title">Bandara</div>
                <p class="text">Website infografis tentang arsitektur indah bandara-bandara di dunia.</p>
                <div class="date">March 2017</div>
                <a href="project/infografis/bandara/index.html" class="more" target="Bandara">Visit Page</a>
              </div>
            </div>
            <div class="project right clearfix">
              <div class="image col-md-6">
                <img src="{{ URL::asset('images/kereta.jpg') }}" alt="">
              </div>
              <div class="caption col-md-6">
                <div class="subtitle">Infografis</div>
                <div class="title">Stasiun Kereta</div>
                <p class="text">Website infografis tentang stasiun kereta ternyaman di Jabodetabek.</p>
                <div class="date">June 2017</div>
                <a href="project/infografis/kereta/index.html" class="more" target="Kereta">Visit Page</a>
              </div>
            </div>
            <div class="project left clearfix">
              <div class="image col-md-6">
                <img src="{{ URL::asset('images/koran-sindo.jpg') }}" alt="">
              </div>
              <div class="caption col-md-6">
                <div class="subtitle">Infografis</div>
                <div class="title">Koran Sindo</div>
                <p class="text">Website infografis tentang perjalanan 12 tahun Koran Sindo.</p>
                <div class="date">August 2017</div>
                <a href="project/infografis/sejarahkoran/index.html" class="more" target="Koran">Visit Page</a>
              </div>
            </div>
          </div>
        </section>
        <section id="sitemap">
          <div class="column clearfix">
            <div class="help col-md-4">
              <div class="title">Feedback</div>
              <p>
              We hope you have enjoyed my profile and if you feel like it has helped you out and want to support the me you can help us by donating me. Any amount would help support and continue development on this project and is greatly appreciated.
              </p>
              <a href="mailto:pesan.arif@gmail.com?Subject=Hello%20Arif" target="_top" class="btn">Email me</a>
            </div>
            <div class="sitemap col-md-4">
              <div class="title">Sitemap</div>
              <div class="column clearfix">
                @for ($i = 0; $i < count($navigation); $i++)
                <div class="col-md-6 pull-left"><a href="/{{ strtolower($navigation[$i]->title)}}"><span class="right-caret"></span>{{ $navigation[$i]->title }}</a></div>
                @endfor
              </div>
            </div>
            <div class="sosmed col-md-4">
              <div class="title">Follow Me</div>
              <ul>
                <li><a href="https://www.facebook.com/{{ $sosmed[0]->facebook }}" target="_blank"><svg class="facebook" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="67px" id="Layer_1" style="enable-background:new 0 0 67 67;" version="1.1" viewBox="0 0 67 67" width="67px" xml:space="preserve"><path d="M28.765,50.32h6.744V33.998h4.499l0.596-5.624h-5.095  l0.007-2.816c0-1.466,0.14-2.253,2.244-2.253h2.812V17.68h-4.5c-5.405,0-7.307,2.729-7.307,7.317v3.377h-3.369v5.625h3.369V50.32z   M33,64C16.432,64,3,50.568,3,34C3,17.431,16.432,4,33,4s30,13.431,30,30C63,50.568,49.568,64,33,64z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#010101;"/></svg></a></li>
                <li><a href="https://twitter.com/{{ $sosmed[0]->twitter }}" target="_blank"><svg class="twitter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="67px" id="Layer_1" style="enable-background:new 0 0 67 67;" version="1.1" viewBox="0 0 67 67" width="67px" xml:space="preserve"><path d="M38.167,22.283c-2.619,0.953-4.274,3.411-4.086,6.101  l0.063,1.038l-1.048-0.127c-3.813-0.487-7.145-2.139-9.974-4.915l-1.383-1.377l-0.356,1.017c-0.754,2.267-0.272,4.661,1.299,6.271  c0.838,0.89,0.649,1.017-0.796,0.487c-0.503-0.169-0.943-0.296-0.985-0.233c-0.146,0.149,0.356,2.076,0.754,2.839  c0.545,1.06,1.655,2.097,2.871,2.712l1.027,0.487l-1.215,0.021c-1.173,0-1.215,0.021-1.089,0.467  c0.419,1.377,2.074,2.839,3.918,3.475l1.299,0.444l-1.131,0.678c-1.676,0.976-3.646,1.526-5.616,1.567  C20.775,43.256,20,43.341,20,43.405c0,0.211,2.557,1.397,4.044,1.864c4.463,1.377,9.765,0.783,13.746-1.568  c2.829-1.674,5.657-5,6.978-8.221c0.713-1.715,1.425-4.851,1.425-6.354c0-0.975,0.063-1.102,1.236-2.267  c0.692-0.678,1.341-1.419,1.467-1.631c0.21-0.403,0.188-0.403-0.88-0.043c-1.781,0.636-2.033,0.551-1.152-0.402  c0.649-0.678,1.425-1.907,1.425-2.267c0-0.063-0.314,0.042-0.671,0.233c-0.377,0.212-1.215,0.53-1.844,0.72l-1.131,0.361l-1.027-0.7  c-0.566-0.381-1.361-0.805-1.781-0.932C40.766,21.902,39.131,21.944,38.167,22.283z M34,64C17.432,64,4,50.568,4,34  C4,17.431,17.432,4,34,4s30,13.431,30,30C64,50.568,50.568,64,34,64z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#010101;"/></svg></a></li>
                <li><a href="https://www.instagram.com/{{ $sosmed[0]->instagram }}" target="_blank"><svg class="instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="67px" id="Layer_1" style="enable-background:new 0 0 67 67;" version="1.1" viewBox="0 0 67 67" width="67px" xml:space="preserve"><path d="M42.271,26.578v-0.006c0.502,0,1.005,0.01,1.508-0.002  c0.646-0.016,1.172-0.57,1.172-1.217c0-0.963,0-1.927,0-2.89c0-0.691-0.547-1.24-1.236-1.241c-0.961,0-1.922-0.001-2.883,0  c-0.688,0.001-1.236,0.552-1.236,1.243c-0.001,0.955-0.004,1.91,0.003,2.865c0.001,0.143,0.028,0.291,0.073,0.426  c0.173,0.508,0.639,0.82,1.209,0.823C41.344,26.579,41.808,26.578,42.271,26.578z M33,27.817c-3.384-0.002-6.135,2.721-6.182,6.089  c-0.049,3.46,2.72,6.201,6.04,6.272c3.454,0.074,6.248-2.686,6.321-6.043C39.254,30.675,36.462,27.815,33,27.817z M21.046,31.116  v0.082c0,4.515-0.001,9.03,0,13.545c0,0.649,0.562,1.208,1.212,1.208c7.16,0.001,14.319,0.001,21.479,0  c0.656,0,1.215-0.557,1.215-1.212c0.001-4.509,0-9.02,0-13.528v-0.094h-2.912c0.411,1.314,0.537,2.651,0.376,4.014  c-0.161,1.363-0.601,2.631-1.316,3.803s-1.644,2.145-2.779,2.918c-2.944,2.006-6.821,2.182-9.946,0.428  c-1.579-0.885-2.819-2.12-3.685-3.713c-1.289-2.373-1.495-4.865-0.739-7.451C22.983,31.116,22.021,31.116,21.046,31.116z   M45.205,49.255c0.159-0.026,0.318-0.049,0.475-0.083c1.246-0.265,2.264-1.304,2.508-2.557c0.025-0.137,0.045-0.273,0.067-0.409  V21.794c-0.021-0.133-0.04-0.268-0.065-0.401c-0.268-1.367-1.396-2.428-2.78-2.618c-0.058-0.007-0.113-0.02-0.17-0.03H20.761  c-0.147,0.027-0.296,0.047-0.441,0.08c-1.352,0.308-2.352,1.396-2.545,2.766c-0.008,0.057-0.02,0.114-0.029,0.171V46.24  c0.028,0.154,0.05,0.311,0.085,0.465c0.299,1.322,1.427,2.347,2.77,2.52c0.064,0.008,0.13,0.021,0.195,0.03H45.205z M33,64  C16.432,64,3,50.568,3,34C3,17.431,16.432,4,33,4s30,13.431,30,30C63,50.568,49.568,64,33,64z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#010101;"/></svg></a></li>
              </ul>
            </div>
          </div>
        </section>
        <section id="copyright">
          <div class="column clearfix">
            <div class="copyright pull-left">© 2016-2018 Arif Lutfhansah, All rights reserved.</div>
            <div class="lisence pull-right">MIT License</div>
          </div>
        </section>
      </div>
    </div>
  </main>
  @show
  {{-- Footer --}}
  @section('footer')
  <footer>
  </footer>
  @show
  <!-- Javascript -->
  @section('javascript')
  <script src="{{ URL::asset('js/jquery-1.10.2.min.js') }}"></script> <!-- jQuery -->
  <script src="{{ URL::asset('js/materialize.min.js') }}"></script> <!-- Materialize -->
  <script>
    $(document).ready(function(){
      /* ------- Slide Toogle Mobile Navigation ------- */
      $(".button-collapse").sideNav();
      /* ------- Navigation Active ------- */
      $('.btn-profile').addClass('active');
      $(".btn-profile").click(function(){
        $('.btn-portofolio').removeClass('active');
        $('.btn-profile').addClass('active');
        $('.btn-sitemap').removeClass('active');
      });
      $(".btn-portofolio").click(function(){
        $('.btn-portofolio').addClass('active');
        $('.btn-profile').removeClass('active');
        $('.btn-sitemap').removeClass('active');
      });
      $(".btn-sitemap").click(function(){
        $('.btn-portofolio').removeClass('active');
        $('.btn-profile').removeClass('active');
        $('.btn-sitemap').addClass('active');
      });
      $(window).scroll(function() {
        if ($(this).scrollTop() < 440){ 
          $('.btn-portofolio').removeClass('active');
          $('.btn-profile').addClass('active');
          $('.btn-sitemap').removeClass('active');
        }
        else if ($(this).scrollTop() > 441 && $(this).scrollTop() < 5135){ 
          $('.btn-portofolio').addClass('active');
          $('.btn-profile').removeClass('active');
          $('.btn-sitemap').removeClass('active'); 
        }
        else if ($(this).scrollTop() > 5100){ 
          $('.btn-portofolio').removeClass('active');
          $('.btn-profile').removeClass('active');
          $('.btn-sitemap').addClass('active');
        }
        else{
        }
      });
      $(".grid-views").click(function(){
        $('.project').addClass('column');
        $('.leftbar li:first-of-type').removeClass('active');
        $('.leftbar li:last-of-type').addClass('active');
        $('html, body').animate({
              scrollTop: $("#portofolio").offset().top
          }, 1000);
      });
      $(".timeline-views").click(function(){
        $('.project').removeClass('column');
        $('.leftbar li:first-of-type').addClass('active');
        $('.leftbar li:last-of-type').removeClass('active');
        $('html, body').animate({
              scrollTop: $("#portofolio").offset().top
          }, 1000);
      });
    });
  </script>
  @show
</body>
</html>