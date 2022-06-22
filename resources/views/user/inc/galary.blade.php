<!-- ======= Befor & After Section ======= -->
<section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{ __('sections.gallary') }}</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
          sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
            @if (isset($images) && $images->count() > 0)
                @foreach ($images as $img)
                    <div class="swiper-slide"><a class="gallery-lightbox" href="{{ asset('/assets/admin/images/' . $img->photo)}}"><img
                        src="{{ asset('/assets/admin/images/' . $img->photo)}}" class="img-fluid" alt=""></a>
                    </div>
                @endforeach
            @endif
          <


        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
</section><!-- End Gallery Section -->
