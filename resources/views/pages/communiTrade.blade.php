    @extends('header.header')

    @section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

        <link rel="stylesheet" href="{{ asset ('assets/css/RPP/index.css') }}">
        <link rel="stylesheet" href="{{ asset ('assets/css/CT/landing-section.css') }}">
        <link rel="stylesheet" href="{{ asset ('assets/css/CT/second-section.css') }}">
        <link rel="stylesheet" href="{{ asset ('assets/css/CT/third-section.css') }}">
        <link rel="stylesheet" href="{{ asset ('assets/css/RPP/fifth-section.css') }}">
        <link rel="stylesheet" href="{{ asset ('assets/css/CT/fifth-section.css') }}">
        <link rel="stylesheet" href="{{ asset ('assets/css/CT/sixth-section.css') }}">
        <link rel="stylesheet" href="{{ asset ('assets/css/RPP/seventh-section.css') }}">

    <div class="main">
    <!-- Fourth Section Start -->
    <section id="ct-landing-section" class="ct-landing-section">
        <div class="ct-landing-section-container row mx-auto">
        <div class="ct-landing-section-first-div row">
            <div
            class="ct-landing-section-first-content d-flex col-12 col-xl-6"
            >
            <div class="m-auto">
                <div class="ct-landing-section-first-content-title">
                CommuniTrade
                </div>
                <div class="ct-landing-section-first-content-description">
                    TRU Connections, Real Traders
                </div>
                <div class="ct-landing-section-Btn-div">
                    <a class="Be-a-TRU-btn">Be a TRU member</a>
                </div>
                
            </div>
            </div>
            <div
            class="ct-landing-section-second-content d-flex col-12 col-xl-6"
            >
            <div class="mx-auto my-auto">
                <div class="ct-landing-section-first-content-img">
                <img
                    src="{{ asset ('assets/images/CT-images/landing-section/picture.png') }}"
                    alt=""
                    style="width: 100%"
                />
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    
    <section id="ct-second-section" class="ct-second-section">
        <div class="ct-second-section-container row mx-auto">
        <div class="ct-second-section-first-div row">
            <div class="ct-second-section-first-content d-flex col-12 col-xl-6 order-2 order-xl-1">
            <div class="mx-auto">
                <div class="ct-second-section-first-content-img">
                <img
                    src="{{ asset ('assets/images/CT-images/second-section/second-section-img.png') }}"
                    alt=""
                    style="width: 100%"
                />
                </div>
            </div>
            </div>
            <div class="ct-second-section-second-content d-flex col-12 col-xl-6 order-1 order-xl-2">
            <div class="m-auto">
                <div class="ct-second-section-first-content-title">
                A home for <span>80 Million Online Traders</span>
                </div>
                <div class="ct-second-section-first-content-description">
                    Interact and grow with the rest of the online trading community. Experience genuine connections and gain valuable trading insights for success in the financial market.
                </div>
                <div>
                    <a class="Be-a-TRU-btn">Be a TRU member</a>
                </div>
            </div>
            </div>  
        </div>
        </div>
    </section>

    
    <section id="ct-third-section" class="ct-third-section">
        <div class="ct-third-section-container row mx-auto">


        <div class="ct-third-section-first-content-title text-center mx-auto">
        Connecting you <br> to <span>TRU insights and trading knowledge</span>   
        </div>

        <div class="ct-third-section-first-div row">
            <div class="ct-third-section-third-content d-flex col-12 col-xl-6">
                <div class="accordion accordion-flush w-100" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Enjoy insightful interactions
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Learn to be successful
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Share knowledge and expertise
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">CommuniTrade is more than just a place for learning, it gives you opportunities to share your knowledge, insights, and expertise to foster shared growth among the community.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-4" aria-expanded="false" aria-controls="flush-collapseThree">
                            Resolve trading issues and concerns
                        </button>
                        </h2>
                        <div id="flush-4" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-5" aria-expanded="false" aria-controls="flush-collapseThree">
                            Thought-provoking educational discussion
                        </button>
                        </h2>
                        <div id="flush-5" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-6" aria-expanded="false" aria-controls="flush-collapseThree">
                            Safe space for all TRU members
                        </button>
                        </h2>
                        <div id="flush-6" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="ct-third-section-first-content d-flex col-12 col-xl-6">
            <div class="mx-auto">
                <div class="ct-third-section-first-content-img">
                <img
                    src="{{ asset ('assets/images/CT-images/third-section/third-section-img.png') }}"
                    alt=""
                    style="width: 100%"
                />
                </div>
            </div>
            </div> 
        </div>
        </div>
    </section>
   
    <!-- <section id="rpp-fifth-section" class="rpp-fifth-section" style="overflow: hidden">
        <div class="rpp-fifth-section-container row mx-auto">
        <div class="rpp-section-fifth-first-div row">
            <div class="rpp-section-first-content row col-12 col-xl-6">
            <div>
                <div class="rpp-fifth-section-first-content-title">
                Recent <br />Claims Update
                </div>
                <div class="rpp-fifth-section-second-content-1">
                    <div class="rpp-fifth-section-first-content-description">
                    Do you have a claim due to possible unscrupulous activities of
                    your broker/service provider?
                </div>
                <a class="Be-a-TRU-btn">File an Claim Now</a>
                <div class="rpp-fifth-section-first-content-sub-description">
                    *All posted claims were publicized with the consent of the
                    members who filed them. TRU updates these posts as soon as
                    they are addressed and resolved.
                </div>
                </div>

            </div>
            </div>
            <div class="rpp-section-fifth-content d-flex col-12 col-xl-6">
            <div class="mx-auto" style="position: relative">
                <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide my-auto">
                    <div class="row">

                        <div class="col-12 col-xl-6 order-xl-1 order-1">
                            <div class="rrp-slider-descriptions">
                                Name: <span class="rrp-slider-info name">W****** A******</span>
                            </div>
                            <div class="rrp-slider-descriptions">
                                Broker: <span class="rrp-slider-info broker">Tickmill</span>
                            </div>
                            <div class="rrp-slider-descriptions">
                                Claim Amount: <span class="rrp-slider-info claim">$13,000</span>
                            </div>
                            <div class="rrp-slider-descriptions">
                                Case Severity: <span class="rrp-slider-info severity">Misquotes - Major</span>
                            </div>
                            <div class="rrp-slider-descriptions">
                                Case Description: 
                            </div>
                        </div>
                        <div class="rrp-slider-date_time col-12 col-xl-6 d-flex ms-auto order-xl-2 order-3">
                            <div class="mb-auto rrp-slider-date_time-div" style="align-items: center;display: flex;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.89474 9C1.89474 5.07587 5.07587 1.89474 9 1.89474C12.9241 1.89474 16.1053 5.07587 16.1053 9C16.1053 12.9241 12.9241 16.1053 9 16.1053C5.07587 16.1053 1.89474 12.9241 1.89474 9ZM9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0ZM9.47368 6.63157C9.47368 6.10836 9.04953 5.6842 8.52632 5.6842C8.0031 5.6842 7.57895 6.10836 7.57895 6.63157V9.71052C7.57895 10.0246 7.70371 10.3258 7.92579 10.5479C8.14788 10.77 8.44909 10.8947 8.76316 10.8947H12.7895C13.3127 10.8947 13.7368 10.4706 13.7368 9.94736C13.7368 9.42414 13.3127 8.99999 12.7895 8.99999H9.47368V6.63157Z" fill="#1681C2"/>
                                </svg>

                                <div class="rrp-slider-date_time">2024/01/23. 09:39 PM</div>
                            </div>
                        </div>  

                        <div class="rrp-slider-description col-12 order-xl-3 order-2" >
                        Tickmill gave me the wrong market price of Apple and I
                        lost $13,000 because of Tickmill’s misqoute. Earlier
                        today (5 PM), I was closely monitoring the market and
                        I noticed the unusual drop of Apple’s price.
                        Immediately, I decided to go short to avoid losing
                        profits. But then, I crossed check the news and saw
                        that the Apple’s stock continue to rise until now!
                        Tickmill made me lose my potential profit because I
                        would never sell my position if the market is in my
                        favor. I think I lost almost $13,000 of potential
                        profit bacuase of it.
                        </div>
                    </div>
                    </div>

                    <div class="swiper-slide my-auto">
                    <div class="row">

                        <div class="col-12 col-xl-6 order-xl-1 order-1">
                            <div class="rrp-slider-descriptions">
                                Name: <span class="rrp-slider-info name">W****** A******</span>
                            </div>
                            <div class="rrp-slider-descriptions">
                                Broker: <span class="rrp-slider-info broker">Tickmill</span>
                            </div>
                            <div class="rrp-slider-descriptions">
                                Claim Amount: <span class="rrp-slider-info claim">$13,000</span>
                            </div>
                            <div class="rrp-slider-descriptions">
                                Case Severity: <span class="rrp-slider-info severity">Misquotes - Major</span>
                            </div>
                            <div class="rrp-slider-descriptions">
                                Case Description: 
                            </div>
                        </div>
                        <div class="rrp-slider-date_time col-12 col-xl-6 d-flex ms-auto order-xl-2 order-3">
                            <div class="mb-auto rrp-slider-date_time-div" style="align-items: center;display: flex;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.89474 9C1.89474 5.07587 5.07587 1.89474 9 1.89474C12.9241 1.89474 16.1053 5.07587 16.1053 9C16.1053 12.9241 12.9241 16.1053 9 16.1053C5.07587 16.1053 1.89474 12.9241 1.89474 9ZM9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0ZM9.47368 6.63157C9.47368 6.10836 9.04953 5.6842 8.52632 5.6842C8.0031 5.6842 7.57895 6.10836 7.57895 6.63157V9.71052C7.57895 10.0246 7.70371 10.3258 7.92579 10.5479C8.14788 10.77 8.44909 10.8947 8.76316 10.8947H12.7895C13.3127 10.8947 13.7368 10.4706 13.7368 9.94736C13.7368 9.42414 13.3127 8.99999 12.7895 8.99999H9.47368V6.63157Z" fill="#1681C2"/>
                                </svg>

                                <div class="rrp-slider-date_time">2024/01/23. 09:39 PM</div>
                            </div>
                        </div>  

                        <div class="rrp-slider-description col-12 order-xl-3 order-2" >
                        Tickmill gave me the wrong market price of Apple and I
                        lost $13,000 because of Tickmill’s misqoute. Earlier
                        today (5 PM), I was closely monitoring the market and
                        I noticed the unusual drop of Apple’s price.
                        Immediately, I decided to go short to avoid losing
                        profits. But then, I crossed check the news and saw
                        that the Apple’s stock continue to rise until now!
                        Tickmill made me lose my potential profit because I
                        would never sell my position if the market is in my
                        favor. I think I lost almost $13,000 of potential
                        profit bacuase of it.
                        </div>
                    </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                </div>
            </div>
            </div>
            <div class="rpp-fifth-section-second-content-2 col-12">
                    <div class="rpp-fifth-section-first-content-description">
                    Do you have a claim due to possible unscrupulous activities of
                    your broker/service provider?
                </div>
                <div class="rpp-landing-section-Btn-div">
                    <a class="Be-a-TRU-btn">Be a TRU member</a>
                </div>
                <div class="rpp-fifth-section-first-content-sub-description">
                    *All posted claims were publicized with the consent of the
                    members who filed them. TRU updates these posts as soon as
                    they are addressed and resolved.
                </div>
                </div>
        </div>
        </div>
    </section> -->
    
    <section id="ct-fifth-section" class="ct-fifth-section">
        <div class="ct-fifth-section-title text-center mx-auto">
            The <span>Better</span> and <span>Safer</span> Place for Traders
        </div>
        <div class="ct-section-container row mx-auto">
        <div class="col-12 col-lg-6 ct-section-card">
            <div class="ct-section-card-1">
                <div class="ct-section-card-1-title">
                    General Discussion Board
                </div>
                <div class="ct-section-card-content">
                Engage with fellow traders, build network, and tap into the collective knowledge of online traders worldwide – all in a single, safe space! 
                Through the General Discussion Board, TRU members can seek advice on a wide range of topics, share personal trading anecdotes, or explore emerging market trends together.
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 ct-section-card">
            <div class="ct-section-card-2">
                <div class="ct-section-card-2-title">
                    TRU Forum
                </div>
                <div class="ct-section-card-content">
                    Say goodbye to spammers, aggressive self-promoters, and discriminatory or helpful behavior with TRU’s CommuniTrade Guidelines. 
                    CommuniTrade is guarded by expert and dedicated moderators who actively monitor members and ensure adherence to the community standard.
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 ct-section-card">
            <div class="ct-section-card-3">
                <div class="ct-section-card-3-title">
                    Badge system
                </div>
                <div class="ct-section-card-content">
                    Say goodbye to spammers, aggressive self-promoters, and discriminatory or helpful behavior with TRU’s CommuniTrade Guidelines. 
                    CommuniTrade is guarded by expert and dedicated moderators who actively monitor members and ensure adherence to the community standard.
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 ct-section-card">
            <div class="ct-section-card-4">
                <div class="ct-section-card-4-title">
                    Healthy Community Guidelines
                </div>
                <div class="ct-section-card-content">
                    Say goodbye to spammers, aggressive self-promoters, and discriminatory or helpful behavior with TRU’s CommuniTrade Guidelines. 
                    CommuniTrade is guarded by expert and dedicated moderators who actively monitor members and ensure adherence to the community standard.
                </div>
            </div>
        </div>

        </div>
    </section>

    <section id="ct-sixth-section" class="ct-sixth-section">
        <div class="ct-sixth-section-title text-center mx-auto">
        You may also be asking…
        </div>
        <div class="ct-section-container row mx-auto">
        <div class="ct-section-first-div">

            <div class="accordion accordion-flush mx-auto" id="accordionFlushExample">

                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-1"aria-expanded="false" aria-controls="flush-1">
                        <img src="{{ asset ('assets/images/RPP-images/sixth-section/Vector.png') }}" alt=""/>
                        <div class="faq-send">
                            <div class="faq-name">
                                <span>Zara Al-Farsi</span>, United States
                            </div>
                            <div class="faq-comment">
                                Just wondering, is TRU giving away money? What’s the
                                reason for RPP?
                            </div>
                        </div>
                    </button>
                    <div id="flush-1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="faq-response faq-response-lg" style="">
                                <div class="faq-response-name"> 
                                    <span>Traders United</span>
                                </div>
                                <div class="faq-respponse-comment">
                                    No, you only have to pay for the membership fee. All TRU members can access our services and programs, including the CommuniTrade, without additional financial commitments.
                                </div>
                            </div>
                            <img class="faq-response-img" src="{{ asset ('assets/images/RPP-images/sixth-section/logo.png') }}" alt="" style="height: 60px; width: 60px"/>

                            <div class="faq-response faq-response-sm">
                                <div class="faq-response-name"> 
                                    <span>Traders United</span>
                                </div>
                                <div class="faq-respponse-comment">
                                    No, you only have to pay for the membership fee. All TRU members can access our services and programs, including the CommuniTrade, without additional financial commitments.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ct-sixth-section-show-more text-center mx-auto">
            Show more
        </div>
        </div>
    </section>

      
        <section id="rpp-seventh-section" class="rpp-seventh-section">
        <div class="rpp-section-container row mx-auto">
            <div class="rpp-section-first-div row">
            <div
                class="rpp-seventh-section-first-content d-flex col-12 col-xl-6"
            >
                <div class="m-auto">
                <div class="rpp-seventh-section-first-content-title">
                    Engage. <br>
                    Collaborate. <br>
                    Succeed. <br>
                </div>
                <div class="rpp-section-Btn-div">
                    <a class="Be-a-TRU-btn">Be a TRU member</a>
                </div>
                
                </div>
            </div>
            <div
                class="rpp-seventh-section-second-content d-flex col-12 col-xl-6"
            >
                <div class="m-auto">
                <div class="rpp-seventh-section-first-content-img">
                    <img
                    src="{{ asset ('assets/images/CT-images/seventh-section/picture.png') }}"
                    alt=""
                    style="width: 100%"
                    />
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

    
    

    </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
            },
            /* pagination: {
                el: ".swiper-pagination",
            }, */
            // Add navigation buttons
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
            // Set initial slide index to the last one
            initialSlide: 1,
            spaceBetween: -477, // Adjust this value to decrease/increase the gap between slides
        });
        </script>

    @endsection