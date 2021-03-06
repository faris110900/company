@extends('layouts.app')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="{{ asset('imperial/assets/img/logo.png')}}" width="400px" alt="">
        </div>

        <h1>Welcome to Agenprops</h1>
        <h2>Kita membantu and dalam mencari properti yang cocok buat anda</h2>
        <div class="actions">
          <a href="#about" class="btn-services">Get Started</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href=""><img src="{{ asset('imperial/assets/img/logo.png')}}" width="200px" alt=""></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#properties">Properties</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#blogs">Blogs</a></li>
          <li><a href="#agents">Agent</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">About Us</h3>
            <div class="section-title-divider"></div><br>
          </div>
        </div>
      </div>
      <div class="container about-container wow fadeInUp">
        <div class="row">

          <div class="col-lg-6 about-img">
            <img src="{{ asset('imperial/assets/img/about-img.jpg')}}" alt="">
          </div>

          <div class="col-md-6 about-content">
            <h2 class="about-title">We provide great services and ideass</h2>
            <p class="about-text">
             {{$profiles->about}}
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

        <!-- ======= Properties Section ======= -->
        <section id="properties">
          <div class="container wow fadeInUp">
            <div class="row">
              <div class="col-md-12">
                <h3>Properties</h3>
                <div class="section-title-divider"></div><br>
              </div>
            </div>
    
            <div class="row">
              @foreach ($properties as $property)
                  
              <div class="col-md-3">
                <a class="properties-item venobox" style="background-image: url({{ asset('storage/'.$property->image) }});" href="{{ asset('storage/'.$property->image) }}" data-gall="portfolioGallery">
                  <div class="details">
                    <h4>{{ str_limit($property->title, 40) }}</h4>
                  <span>{{ $property->type->name }}</span>
                  </div>
                </a>
              </div>
              
              @endforeach
    
              <div class="loadMore ml-auto">
                <a href=""><i class="fa fa-arrow-right fa-2x"></i></a>
              </div>
            </div>
          </div>
        </section><!-- End Properties Section -->

         <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Our Services</h3>
            <div class="section-title-divider"></div><br>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-desktop"></i></div>
            <h4 class="service-title"><a href="">FREE REGISTRATION NO HIDDEN FEES</a></h4>
            <p class="service-description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
            <h4 class="service-title"><a href="">OFFICES IN 4 LOCATIONS</a></h4>
            <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
            <h4 class="service-title"><a href="">Free Property Valuation</a></h4>
            <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>

        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Blogs Section ======= -->
    <section id="blogs">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Blogs</h3>
            <div class="section-title-divider"></div><br>
          </div>
        </div>

        <div class="row">
          @foreach ($blogs as $blog)

          <div class="col-md-3">
            <div class="blog-item">
              <div class="pic"><img src="{{ asset('storage/'.$blog->image) }}" alt=""></div>
              <h4>{{ str_limit($blog->title, 30) }}</h4>
              <span>Category</span>
            </div>
          </div>
          
          @endforeach

          <div class="loadMore mx-auto" style="margin-top: 20px;">
            <a href="" class="text-dark"><i class="fa fa-angle-double-down fa-3x"></i></a>
          </div>
        </div>
      </div>
    </section><!-- End Blogs Section -->

    <!-- ======= Subscrbe Section ======= -->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-8">
            <h3 class="subscribe-title">Buy On Us</h3>
            <p class="subscribe-text">Buy your properties all you need on Agentprops, and more properties contact  us.</p>
          </div>
          <div class="col-md-4 subscribe-btn-container">
            <a class="subscribe-btn" href="#contact">Subscribe Now</a>
          </div>
        </div>
      </div>
    </section><!-- End Subscrbe Section -->

        <!-- ======= Agents Section ======= -->
        <section id="agents">
          <div class="container wow fadeInUp">
            <div class="row">
              
              <div class="col-md-12">
                <h3 class="section-title">Agents</h3>
                <div class="section-title-divider"></div><br>
              </div>
            </div>
            
            <div class="row">
              @foreach ($agents as $agent)
              <div class="col-md-3">
                <div class="member">
                  <div class="pic"><img src="{{ asset('storage/'.$agent->image) }}" alt=""></div>
                <h4>{{ $agent->name }}</h4>
                <span>{{ $agent->jabatan }}</span>
                <span>{{ $agent->email }}</span>
                  <div class="social">
                    <a href="https://wa.me/{{ $agent->telp }}"><i class="fa fa-phone"></i></a>
                  </div>
                </div>
              </div>
              @endforeach
              
            </div>
          </div>
        </section><!-- End Agents Section -->
        
    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Contact Us</h3>
            <div class="section-title-divider"></div><br>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
              <p>{{ $profiles->alamat }}</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>{{$profiles->email}}</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+{{$profiles->telp}}</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Agentprops</strong>. All Rights Reserved
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
@endsection
{{-- <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif --}}