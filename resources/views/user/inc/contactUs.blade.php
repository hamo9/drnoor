<!-- ======= Contact Section ======= -->

    <div class="container">

        <div class="section-title">
            <h2>{{ __('sections.contact') }}</h2>
        </div>

    </div>

    <div class="container">

        <div class="row mt-5">

            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12">

                        <div class="row col-12 info-box m-auto">
                            <div class="col-md-6 mb-4">
                                <i class="bx bx-map"></i>
                                <h3>{{ __('about.branch 1') }}</h3>
                                <p>102 Mousslas St. From Ahmrd Al Zomor St - El Hay El Asher - Nasr city - Cairo - Egypt
                                </p>
                            </div>

                            <div class="col-md-6 mb-4">
                                <i class="bx bx-map"></i>
                                <h3>{{ __('about.branch 2') }}</h3>
                                <p>113 El Nozha Street - Triumph Square - Heliopolis - Cairo - Egypt</p>
                            </div>
                        </div>



                    </div>

                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>{{ __('sections.contact mail') }}</h3>
                            <p>care.dental.cdc@gmail.com<br>swiss.dental.original@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>{{ __('sections.call us') }}</h3>

                            <div class="row">
                                <div class="col-sm-6">
                                    <h6>{{ __('about.branch 1') }}</h6>
                                    <p>+20 1020036341</p>
                                </div>
                                <div class="col-sm-6">
                                    <h6>{{ __('about.branch 2') }}</h6>
                                    <p>+20 1007175878</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col form-group mt-3">
                            <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('sections.name') }}"
                                required>
                        </div>
                        <div class="col form-group mt-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('sections.email') }}"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('sections.title') }}"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="{{ __('sections.send message') }}"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">{{ __('sections.send message') }}</button></div>
                </form>
            </div>

        </div>

    </div>



