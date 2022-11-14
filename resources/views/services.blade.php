<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{!! asset('public/images/favicon.png') !!}" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" id="ajax-css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    />
    <link rel="stylesheet" href="{!! asset('public/css/servicesmain.min.css') !!}" />
    <title>Bizz World Communications</title>
  </head>

  <body>
    <header class="fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="../">
                <img src="{!! asset('public/images/logo.png') !!}" alt="Bizz World Communications" />
              </a>
              <button
                class="navbar-toggler"
                data-target="#my-nav"
                data-toggle="collapse"
                aria-controls="my-nav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span><i class="fa fa-bars"></i></span>
              </button>
              <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a
                      class="nav-link nav-link-0 nav-link-active"
                      id="nav-link-0"
                      ><span>Mobile Development</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-1" id="nav-link-1"
                      ><span>Web Development</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-2" id="nav-link-2"
                      ><span>Digital Marketing</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-3" id="nav-link-3"
                      ><span>Call Center</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-4" id="nav-link-4"
                      ><span>Animation</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-5" id="nav-link-5"
                      ><span>Branding</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-6" id="nav-link-6"
                      ><span>Digitizing</span></a
                    >
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <main>
      <section id="slider">
        <div class="slider">
          <div class="slider-overlay d-flex">
            <div class="owl-carousel owl-theme slider-carousel m-auto">
              <!-- Mobile app development -->
              <div class="item">
                <div class="container">
                  <div class="row d-flex">
                    <div
                      class="col-md-6 m-md-auto mb-0 mt-auto text-md-left text-center"
                    >
                      <div class="content">
                        <h1>Mobile App Development</h1>
                        <p>
                          We at Bizz World Communications take proud in creating
                          and continuously updating our developed mobile
                          applications irrespective of their platform. Our
                          resolute and certified team of application developers
                          at the company is dedicated to use multifarious modern
                          and leading methods when it comes down to designing,
                          developing and evolving the mobile applications over
                          time.
                        </p>
                        <!-- <a class="read-more-link" href="mobile-development/index.html">Read More</a> -->
                        <div
                          href="mobile-development/index.html"
                          class="read-more-box-link"
                        >
                          <div class="read-more-box">
                            <ul>
                              <li>iPhone Application</li>
                              <li>Android Application</li>
                              <li>Hybrid Application</li>
                              <li>Native Application</li>
                              <li>UI/UX Design for Mobile Applications</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 parallex parallex-0 m-auto"
                      id="parallex-0"
                    >
                      <img
                        style="z-index: 50"
                        src="{!! asset('public/images/slider/mobile-model/1.png') !!}"
                        data-depth="-2.0"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 45"
                        src="{!! asset('public/images/slider/mobile-model/2.png') !!}"
                        data-depth="-1.7"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 40"
                        src="{!! asset('public/images/slider/mobile-model/3.png') !!}"
                        data-depth="-1.4"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 35"
                        src="{!! asset('public/images/slider/mobile-model/4.png') !!}"
                        data-depth="-1.1"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 30"
                        src="{!! asset('public/images/slider/mobile-model/5.png') !!}"
                        data-depth="-0.8"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 25"
                        src="{!! asset('public/images/slider/mobile-model/6.png') !!}"
                        data-depth="-0.5"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 20"
                        src="{!! asset('public/images/slider/mobile-model/7.png') !!}"
                        data-depth="-0.2"
                        alt="mobile"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- web app development -->
              <div class="item">
                <div class="container">
                  <div class="row d-flex">
                    <div
                      class="col-md-6 m-md-auto mb-0 mt-auto text-md-left text-center"
                    >
                      <div class="content">
                        <h1>Website Development</h1>
                        <p>
                          We at Bizz World Communications offer a varying degree
                          of business solutions to new startups with our website
                          development services. With our aid, we ensure your
                          business grows vigorously and smartly while reaching
                          your set target audience.
                        </p>
                        <p>
                          Our services in website development department are
                          stretched into following key factors:
                        </p>
                        <!-- <a class="read-more-link" href="web-development/index.html">Read More</a> -->
                        <div
                          href="web-development/index.html"
                          class="read-more-box-link"
                        >
                          <div class="read-more-box">
                            <ul>
                              <li>Website</li>
                              <li>Payroll Management System</li>
                              <li>CRM,CMS,HMS AND More</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 parallex parallex-1 m-auto"
                      id="parallex-1"
                    >
                      <img
                        style="z-index: 50"
                        src="{!! asset('public/images/slider/web/1.png') !!}"
                        data-depth="-2.0"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 45"
                        src="{!! asset('public/images/slider/web/2.png') !!}"
                        data-depth="-1.7"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 40"
                        src="{!! asset('public/images/slider/web/3.png') !!}"
                        data-depth="-1.4"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 35"
                        src="{!! asset('public/images/slider/web/4.png') !!}"
                        data-depth="-1.1"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 30"
                        src="{!! asset('public/images/slider/web/5.png') !!}"
                        data-depth="-0.8"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 25"
                        src="{!! asset('public/images/slider/web/6.png') !!}"
                        data-depth="-0.5"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 20"
                        src="{!! asset('public/images/slider/web/7.png') !!}"
                        data-depth="-0.2"
                        alt="mobile"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- Digital Marketing -->
              <div class="item">
                <div class="container">
                  <div class="row d-flex">
                    <div
                      class="col-md-6 m-md-auto mb-0 mt-auto text-md-left text-center"
                    >
                      <div class="content">
                        <h1>Digital Marketing</h1>
                        <p>
                          Is your business lacking traction due to less traffic?
                          Do you want to reach maximum audience? Then look no
                          further! We at Bizz World Communications offer tried
                          and tested digital marketing strategies to our clients
                          which has resulted stable and steep growth over time.
                          It is through our digital marketing platform that many
                          new and settled businesses found a solution to reach a
                          pool of audience, one they couldn’t reach previously.
                        </p>
                        <!-- <a class="read-more-link" href="digital-marketing">Read More</a> -->
                        <div
                          href="digital-marketing"
                          class="read-more-box-link"
                        >
                          <div class="read-more-box">
                            <ul>
                              <li>Social Media Marketing</li>
                              <li>Search Engine Optimization</li>
                              <li>Pay Per Click</li>
                              <li>Email Marketing</li>
                              <li>SMS Marketing</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 parallex parallex-2 m-auto"
                      id="parallex-2"
                    >
                      <img
                        class="img-alter-size"
                        style="z-index: 50"
                        src="{!! asset('public/images/slider/digital-marketing/1.png') !!}"
                        data-depth="-2.0"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 45"
                        src="{!! asset('public/images/slider/digital-marketing/2.png') !!}"
                        data-depth="-1.7"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 40"
                        src="{!! asset('public/images/slider/digital-marketing/3.png') !!}"
                        data-depth="-1.4"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 35"
                        src="{!! asset('public/images/slider/digital-marketing/4.png') !!}"
                        data-depth="-1.1"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 30"
                        src="{!! asset('public/images/slider/digital-marketing/5.png') !!}"
                        data-depth="-0.8"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 25"
                        src="{!! asset('public/images/slider/digital-marketing/6.png') !!}"
                        data-depth="-0.5"
                        alt="mobile"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- Call Center -->
              <div class="item">
                <div class="container">
                  <div class="row d-flex">
                    <div
                      class="col-md-6 m-md-auto mb-0 mt-auto text-md-left text-center"
                    >
                      <div class="content">
                        <h1>Call Center</h1>
                        <p>
                          If your business model heavily relies on customer
                          support, dispatch services, appointment management,
                          sales marketing, order taking and business process
                          outsourcing then look no further; we at Bizz World
                          Communications provide stable and succinct call center
                          services to our clientele. Here are five basic
                          categories where our expertise in call center services
                          lies:
                        </p>
                        <!-- <a class="read-more-link" href="call-center">Read More</a> -->
                        <div href="call-center" class="read-more-box-link">
                          <div class="read-more-box">
                            <ul>
                              <li>Inbound</li>
                              <li>Outbound</li>
                              <li>Chat Support</li>
                              <li>Dialing Technology</li>
                              <li>Back Office Solutins</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 parallex parallex-3 m-auto"
                      id="parallex-3"
                    >
                      <img
                        class="img-alter-size"
                        style="z-index: 50"
                        src="{!! asset('public/images/slider/call-center/1.png') !!}"
                        data-depth="-2.0"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 45"
                        src="{!! asset('public/images/slider/call-center/2.png') !!}"
                        data-depth="-1.7"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 40"
                        src="{!! asset('public/images/slider/call-center/3.png') !!}"
                        data-depth="-1.4"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 35"
                        src="{!! asset('public/images/slider/call-center/4.png') !!}"
                        data-depth="-1.1"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 30"
                        src="{!! asset('public/images/slider/call-center/5.png') !!}"
                        data-depth="-0.8"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 25"
                        src="{!! asset('public/images/slider/call-center/6.png') !!}"
                        data-depth="-0.5"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 20"
                        src="{!! asset('public/images/slider/call-center/7.png') !!}"
                        data-depth="-0.2"
                        alt="mobile"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- Video Animation -->
              <div class="item">
                <div class="container">
                  <div class="row d-flex">
                    <div
                      class="col-md-6 m-md-auto mb-0 mt-auto text-md-left text-center"
                    >
                      <div class="content">
                        <h1>Video Animation</h1>

                        <p>
                          Do you want to reach out maximum audience without
                          having to spend an enormous sum on advertisement? Are
                          you looking for a one stop solution which can
                          conveniently express your ideas and thoughts into a
                          single video content of your set target audience? If
                          yes, then we at Bizz World Communications have been
                          leading the way in video animation with our persistent
                          work experience throughout years. Video animation is a
                          gateway portal for your audience to understand your
                          business model in minutes and reach out to you.
                        </p>
                        <p>
                          Our services of video animation mainly fall under
                          three categories as mentioned here:
                        </p>
                        <!-- <a class="read-more-link" href="video-animation">Read More</a> -->
                        <div href="video-animation" class="read-more-box-link">
                          <div class="read-more-box">
                            <ul>
                              <li>2D Animations</li>
                              <li>Motion Graphics</li>
                              <li>Promotional Videos</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 parallex parallex-4 m-auto"
                      id="parallex-4"
                    >
                      <img
                        class="img-alter-size"
                        style="z-index: 50"
                        src="{!! asset('public/images/slider/animation/1.png') !!}"
                        data-depth="-2.0"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 45"
                        src="{!! asset('public/images/slider/animation/2.png') !!}"
                        data-depth="-1.7"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 40"
                        src="{!! asset('public/images/slider/animation/3.png') !!}"
                        data-depth="-1.4"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 35"
                        src="{!! asset('public/images/slider/animation/4.png') !!}"
                        data-depth="-1.1"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 30"
                        src="{!! asset('public/images/slider/animation/5.png') !!}"
                        data-depth="-0.8"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 25"
                        src="{!! asset('public/images/slider/animation/6.png') !!}"
                        data-depth="-0.5"
                        alt="mobile"
                      />
                      <img
                        class="img-alter-size"
                        style="z-index: 20"
                        src="{!! asset('public/images/slider/animation/7.png') !!}"
                        data-depth="-0.2"
                        alt="mobile"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- Branding And Promotion -->
              <div class="item">
                <div class="container">
                  <div class="row d-flex">
                    <div
                      class="col-md-6 m-md-auto mb-0 mt-auto text-md-left text-center"
                    >
                      <div class="content">
                        <h1>Branding And Promotion</h1>
                        <p>
                          Are you a start-up who needs a face to be recognized?
                          Or you a business entity which needs to go digital?
                          Stop right here! We at Bizz World Communications
                          provide branding and promotions services. We offer
                          unrivaled approach and we follow closely all the
                          modern design trends in providing branding and
                          promotion solutions. Here are few branches under
                          branding and promotions tree:
                        </p>
                        <!-- <a class="read-more-link" href="branding-promotion">Read More</a> -->
                        <div
                          href="branding-promotion"
                          class="read-more-box-link"
                        >
                          <div class="read-more-box">
                            <ul>
                              <li>Logo and Branding</li>
                              <li>Web Design Services</li>
                              <li>Print Design Services</li>
                              <li>Graphic Design Services</li>
                              <li>Product and Merchandize Services</li>
                              <li>Art and Illustration</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 parallex parallex-5 m-auto"
                      id="parallex-5"
                    >
                      <img
                        style="z-index: 50"
                        src="{!! asset('public/images/slider/branding/1.png') !!}"
                        data-depth="-2.0"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 45"
                        src="{!! asset('public/images/slider/branding/2.png') !!}"
                        data-depth="-1.7"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 40"
                        src="{!! asset('public/images/slider/branding/3.png') !!}"
                        data-depth="-1.4"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 35"
                        src="{!! asset('public/images/slider/branding/4.png') !!}"
                        data-depth="-1.1"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 30"
                        src="{!! asset('public/images/slider/branding/5.png') !!}"
                        data-depth="-0.8"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 25"
                        src="{!! asset('public/images/slider/branding/6.png') !!}"
                        data-depth="-0.5"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 20"
                        src="{!! asset('public/images/slider/branding/7.png') !!}"
                        data-depth="-0.2"
                        alt="mobile"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- Digitizing -->
              <div class="item">
                <div class="container">
                  <div class="row d-flex">
                    <div
                      class="col-md-6 m-md-auto mb-0 mt-auto text-md-left text-center"
                    >
                      <div class="content">
                        <h1>Digitizing</h1>
                        <p>
                          People are redefining fashion at the behest of
                          digitizing. Technology has allowed people to express
                          flexibly in what they wear and how they want to look.
                          Bizz World Communications have kept up with modern
                          trends of digitizing and we have following product
                          digitizing formats:
                        </p>
                        <!-- <a class="read-more-link" href="branding-promotion">Read More</a> -->
                        <div
                          href="branding-promotion"
                          class="read-more-box-link"
                        >
                          <div class="read-more-box">
                            <ul>
                              <li>Cap Digitizing</li>
                              <li>Custom Embroidery Digitizing</li>
                              <li>Left / Right Shirt Chest Logo Digitizing</li>
                              <li>Jacket front / Back Digitizing</li>
                              <li>Raster to Vector (R2V) Digitizing</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 parallex parallex-6 m-auto"
                      id="parallex-6"
                    >
                      <img
                        style="z-index: 50"
                        src="{!! asset('public/images/slider/digitizing/1.png') !!}"
                        data-depth="-2.0"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 45"
                        src="{!! asset('public/images/slider/digitizing/2.png') !!}"
                        data-depth="-1.7"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 40"
                        src="{!! asset('public/images/slider/digitizing/3.png') !!}"
                        data-depth="-1.4"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 35"
                        src="{!! asset('public/images/slider/digitizing/4.png') !!}"
                        data-depth="-1.1"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 30"
                        src="{!! asset('public/images/slider/digitizing/5.png') !!}"
                        data-depth="-0.8"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 25"
                        src="{!! asset('public/images/slider/digitizing/6.png') !!}"
                        data-depth="-0.5"
                        alt="mobile"
                      />
                      <img
                        style="z-index: 20"
                        src="{!! asset('public/images/slider/digitizing/7.png') !!}"
                        data-depth="-0.2"
                        alt="mobile"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="ajax-services"></section>
    </main>
    <canvas id="canvas1"></canvas>

    <!-- <script src="js/main.min.js"></script> -->

    <script src="{!! asset('public/script/servicesjquery-3.5.1.min.js') !!}"></script>
    <script src="{!! asset('public/script/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('public/script/owl.carousel.min.js') !!}"></script>
    <!-- <script src="script/font-awewome.js"></script>
    <script src="vendor/fontawesome-free-5.14.0-web/js/all.js"></script> -->
    <script src="{!! asset('public/script/polygonservices.js') !!}"></script>
    <script src="{!! asset('public/script/parallax.min.js') !!}"></script>
    <script src="{!! asset('public/script/mainservices.js') !!}"></script>

    <!-- mobile -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  </body>
</html>
