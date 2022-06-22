<section id="videos" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{ __('sections.VIDEOS') }}</h2>

      </div>

      <div class="video-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

        @if (isset($videos))
            @foreach ($videos as $video)
              <div class="swiper-slide">
                <div class="testimonial-item">
                        <iframe class="col-12" width="100%" height="350px" src="https://www.youtube.com/embed/{{ $video->url }}" allowfullscreen></iframe>
                </div>
              </div><!-- End testimonial item -->
            @endforeach
          @endif
         

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>
