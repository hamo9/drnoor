  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex align-items-center ">

      <div class="float-start box_logo">
        <a href="index.html" class="logo text-center">
          <img src="assets/user/img/logo.jpeg" alt="" class="img-fluid img_logo" width="200px" height="50px">
        </a>
      </div>


      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto hCostum" href="#hero">{{ __('navbar.home') }}</a></li>
          <li><a class="nav-link scrollto" href="#about">{{ __('navbar.about us') }}</a></li>
          <li class="dropdown"><a href="#Our_Services"><span>{{ __('navbar.Services') }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                @if (isset($categories) && $categories->count() > 0)
                    @foreach ($categories as $category)
                        <li><a href="#{{ $category->id }}">{{ $category->name }}</a></li>
                    @endforeach
                @endif

            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#videos">{{ __('navbar.videos') }}</a></li>
          <li><a class="nav-link scrollto" href="#review">{{ __('navbar.reviews') }}</a></li>

          <li><a class="nav-link scrollto" href="#doctors">{{ __('navbar.Doctors') }}</a></li>
          <li><a class="nav-link scrollto" href="#gallery">{{ __('navbar.images') }}</a></li>

          <li><a class="nav-link scrollto" href="#contact">{{ __('navbar.contact us') }}</a></li>
          <li><a class="nav-link scrollto" href="#Location">{{ __('navbar.location') }}</a></li>
          <li><a class="nav-link scrollto d-md-none" href="#appointment">{{ __('navbar.Reserve') }}</a></li>


          <li class="dropdown"><a href="#"><span>{{ App::getLocale() }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a id="appointment0"  href="#appointment" class="appointment-btn scrollto d-none d-md-block"><span class="">{{__('sections.reserve')}}</a>

    </div>
  </header><!-- End Header -->
