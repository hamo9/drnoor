    <!-- ======= Doctors Section ======= -->

        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>{{ __('sections.doctors') }}</h2>
            <p>
            {{ __('sections.doctors p1') }}
            </p>
          </div>

          <div class="row">

            @if (isset($doctors) && $doctors->count() > 0)
            @foreach ($doctors as $doctor)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="{{ asset('/assets/admin/images/' . $doctor->photo)}}" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>{{ $doctor->name }}</h4>
                        <span>{{ $doctor->position }}</span>
                    </div>
                    </div>
                </div>
            @endforeach
        @endif


          </div>

        </div>

