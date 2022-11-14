<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bizz World Communications</title>
    <link rel="shortcut icon" href="{!! asset('public/images/favicon.png') !!}" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('public/css/main.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="front-panel">
        <div class="container">
            <div class="row">
                <div class="col-6 logo">
                    <a href="{{url('/')}}"><img src="{!! asset('public/images/logo.png') !!}" alt="Bizz World Communications"></a>
                </div>
                <div class="col-6 text-right">
                    <button id='menu-drow' class="manu-btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- main-menu -->
    <div class="main-menu">
        <div class="menu-body">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-7 col-12 d-md-block d-none">
                        <div class="description">
                            <div class="details" id="menu-home-detail">
                                <p>Return to our Home Page and get an overview of our company, its services and
                                    employees testimonials or better yet contact us and let us know your thoughts about
                                    us </p>
                            </div>
                            <div class="details" id="menu-services-detail">
                                <p>We are offering outsourcing solutions to the clients with our years of sophistication
                                    in numerous information & technology services</p>
                            </div>
                            <div class="details" id="menu-videos-detail">
                                <p>Get a quick glimpse of our created short-videos regarding our services that we
                                    currently offer under the banner of Bizz World Communications </p>
                            </div>
                            <div class="details" id="menu-our-leaders-detail">
                                <p> Meet our esteemed, dedicated and benevolent founders of this auspicious company,
                                    Bizz World Communications
                                </p>
                            </div>
                            <div class="details" id="menu-job-detail">
                                <p>Join our team to help shape the future.
                                    <br> We're building a culture at Bizz World Communications where amazing people like
                                    you can do their best work.</p>
                            </div>
                            <div class="details" id="menu-contact-detail">
                                <ul>
                                    <li>info@bizzworldcommunications.com : <span>Email</span></li>
                                    <li>+92 320 9999021 : <span>Phone</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <button id="menu-close"><i class="fa fa-times"></i></button>
                        <div class="links">
                            <div class="link" id="menu-home-link">
                                <h6>01</h6>
                                <h3>home</h3>
                            </div>
                            <div class="link" id="menu-services-link">
                                <h6>02</h6>
                                <h3>Services</h3>
                            </div>
                            <div class="link" id="menu-videos-link">
                                <h6>03</h6>
                                <h3>Our Videos</h3>
                            </div>
                            <div class="link" id="menu-our-leaders-link">
                                <h6>04</h6>
                                <h3>Our Leaders</h3>
                            </div>
                            <div class="link" id="menu-job-link">
                                <h6>05</h6>
                                <h3>Career</h3>
                            </div>
                            <div class="link" id="menu-contact-link">
                                <h6>06</h6>
                                <h3>Contact</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- body -->
    <div class="main">
        <!-- home page -->
        <section class="section-1">
            <div id="mainHomeLanding" class="mainSplashMain homeSplash">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-12 d-md-none d-block">
                            <div class="three-d-image-container">
                                <model-viewer src="{!! asset('public/images/bizzworldlogo.glb') !!}" alt="Bizz World Communications"
                                    background-color="null" shadow-intensity="1" camera-controls auto-rotate>
                                </model-viewer>
                            </div>
                        </div>
                        <div class="col-md-8 col-12 text-md-left text-center">
                            <h1 class="s-1-h1-animate animate">Bizz World <span>Communications</span></h1>
                            <p class="s-1-h2-animate animate">
                                We Lead Your Business To The Next Level. We Are Enablers, Providers of Business
                                Solutions. We Can Drive Your Business By Providing Strategic Customer Support Wherever
                                You Require. Share Your Idea With Us, Work With Us, Let’s Create A Great Project
                                Together
                            </p>
                            <span>
                                <a class="s-1-a-animate animate" href="#">
                                    <i class="fas fa-angle-double-down"></i>
                                </a>
                            </span>
                        </div>
                        <div class="col-md-4 col-12 d-md-block d-none">
                            <div class="three-d-image-container">
                                <model-viewer src="{!! asset('public/images/bizzworldlogo.glb') !!}" alt="Bizz World Communications"
                                    background-color="null" shadow-intensity="1" camera-controls auto-rotate>
                                </model-viewer>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" section-1-border-bottom"></div>
            </div>
        </section>
        <!-- services -->
        <section class="section-3 d-flex">
            <div class="container m-auto">
                <div class="row">
                    <div class="col-12 heading text-center">
                        <h1>Our <span>Services</span></h1>
                        <p>At Bizz World Communications, we set provision level by taking after inbound measurements
                            that are most basic in evaluating and securing consumer loyalty, faithfulness, and contact
                            focus adequacy. <br class="d-md-none d-black">
                            <span class="d-md-inline d-none">We guarantee you the best client benefits by shortening
                                normal call
                                times, expanding consumer loyalty and enhancing call steadfastness.</span>
                        </p>
                    </div>
                    <div class="col-12 text-md-left text-center">
                        <div class="owl-carousel owl-theme services-carousel">
                            <div class="item">
                                <h4>Mobile <br> Development</h4>
                                <h5>React Native ,Android</h5>
                                <p>We at Bizz World Communications take proud in creating and continuously updating our
                                    developed mobile applications irrespective of their platform.</p>
                                <a href="{{url('/services')}}"><button>Read More </button></a>
                            </div>
                            <div class="item">
                                <h4>Web <br> Development</h4>
                                <h5>Wordpress, Laravel</h5>
                                <p>We offer a varying degree of business solutions to new startups and already
                                    established business by providing website development services.</p>
                                <a href="{{url('/services')}}"><button>Read More </button></a>
                            </div>
                            <div class="item">
                                <h4>Digital <br> Marketing</h4>
                                <h5>Social Media</h5>
                                <p>We offer tried and tested digital marketing strategies to our clients which has
                                    resulted stable and steep growth over time. </p>
                                <a href="{{url('/services')}}"><button>Read More </button></a>
                            </div>
                            <div class="item">
                                <h4>Call <br> Center</h4>
                                <h5>Inbound, Outbound</h5>
                                <p>Bizz World Communications provides customer support, dispatch services,
                                    appointment management, sales marketing and order taking</p>
                                <a href="{{url('/services')}}"><button>Read More </button></a>
                            </div>
                            <div class="item">
                                <h4>Video <br> Animation</h4>
                                <h5>2D Animation, Motion Graphic</h5>
                                <p>Bizz World Communications have been leading the way in video animation with our
                                    persistent work experience throughout years.</p>
                                <a href="{{url('/services')}}"><button>Read More </button></a>
                            </div>
                            <div class="item">
                                <h4>Embroidery <br> Digitizing</h4>
                                <h5>2D Animation, Motion Graphic</h5>
                                <p>Bizz World Communications have kept up with modern trends of digitizing. Technology
                                    has allowed people to express flexibly in what they wear and how they want to look.
                                </p>
                                <a href="{{url('/services')}}"><button>Read More </button></a>
                            </div>
                            <div class="item">
                                <h4>Branding And <br> Promotion</h4>
                                <h5>Logo, Business Startionary</h5>
                                <p>We provide branding and promotions services. We offer unrivaled approach and we
                                    follow closely all the modern design trends in providing branding and promotion
                                    solutions</p>
                                <a href="{{url('/services')}}"><button>Read More </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video -->
        <section class="section-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel owl-theme video-carousel">
                            <div class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <h1><span>Digital Marketing Experts</span></h1>
                                            <p>
                                                Social media marketing strategy allows you to build new audience and
                                                retain old ones by creating engaging posts about your products on social
                                                media platforms. It is the most convenient way to generate high traffic
                                                about your product. Our experience in social media marketing strategy
                                                has enabled our clients to create a direct channel linking their
                                                products with target audience.
                                            </p>
                                            <p class="d-md-block d-none">Facebook, Twitter, YouTube, Reddit, Linkedin,
                                                Pinterest and Google+ are few platforms where our expertise in social
                                                media marketing lies. </p>

                                            <a class="d-md-inline d-none" target="_blank"
                                                href="https://www.youtube.com/channel/UCzRihC2qJ66bThXXHeR3MqA?sub_confirmation=1">Subscribe</a>
                                        </div>
                                        <div class="col-md-6 col-12 first-video">!</div>
                                        <div class="col-12 d-md-none d-block mt-4 text-center">
                                            <a target="_blank"
                                                href="https://www.youtube.com/channel/UCzRihC2qJ66bThXXHeR3MqA?sub_confirmation=1">Subscribe</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <h1><span>Small Online Business</span></h1>
                                            <p>
                                                Small online business strategy allows you to save your initial
                                                investment by spending in setting shop. With our support and strategy,
                                                we allow business to set footprint first in digital world and make an
                                                appearance and impression towards their target audience.
                                            </p>
                                            <p class="d-md-block d-none">Bizz World Communications have enabled many
                                                businesses in setting small online business and we continuously polish
                                                our methods to bring in new innovative ways in easing the setup for
                                                small online businesses. What are you waiting for it then, start today
                                                with us and make your first move in digital market tomorrow! </p>
                                            <a class="d-md-inline d-none" target="_blank"
                                                href="https://www.youtube.com/channel/UCzRihC2qJ66bThXXHeR3MqA?sub_confirmation=1">Subscribe</a>
                                        </div>
                                        <div class="col-md-6 col-12 second-video">!</div>
                                        <div class="col-12 d-md-none d-block mt-4 text-center">
                                            <a target="_blank"
                                                href="https://www.youtube.com/channel/UCzRihC2qJ66bThXXHeR3MqA?sub_confirmation=1">Subscribe</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- leaders -->
        <section class="section-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2>our <span>leaders</span></h2>
                            <p class="mb-4">Right leadership ignites transformational change in teams, organizations,
                                communities and individuals.
                            </p>
                        </div>
                        <div class="leaders d-md-block d-none">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <div class="item">
                                            <img src="{!! asset('public/images/leaders/salman.jpg') !!}" alt="">
                                            <div class="detail-container">
                                                <p>Salman Nadir Khairi</p>
                                                <p><span>Director & Co-founder</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="item">
                                            <img src="{!! asset('public/images/leaders/nadir.jpg') !!}" alt="">
                                            <div class="detail-container">
                                                <p>Syed Nadir Shah</p>
                                                <p><span>Director & Co-founder</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="item">
                                            <img src="{!! asset('public/images/leaders/sameel.jpg') !!}" alt="">
                                            <div class="detail-container">
                                                <p>Syed Sameel Naqvi</a>
                                                </p>
                                                <p><span>Director & Co-founder</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 d-md-block d-none"></div>
                                    <div class="col-md-4 col-6">
                                        <div class="item mt-4">
                                            <img src="{!! asset('public/images/leaders/own.jpg') !!}" alt="">
                                            <div class="detail-container">
                                                <p>Syed Aun Bukhari</p>
                                                <p><span>Director & Co-founder</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="item mt-4">
                                            <img src="{!! asset('public/images/leaders/zain.jpg') !!}" alt="">
                                            <div class="detail-container">
                                                <p>Zain Zafar (Late)</p>
                                                <p><span>Director & Co-founder</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 d-md-block d-none"></div>
                                </div>
                            </div>
                        </div>
                        <div class="leaders-slider d-md-none d-block">
                            <div class="owl-carousel owl-theme leaders-carousel">
                                <div class="item">
                                    <img src="{!! asset('public/images/leaders/salman.jpg') !!}" alt="">
                                    <div class="detail-container text-center">
                                        <p>Salman Nadir Khairi</p>
                                        <p><span>Director & <br> Co-founder</span></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{!! asset('public/images/leaders/nadir.jpg') !!}" alt="">
                                    <div class="detail-container text-center">
                                        <p>Syed Nadir Shah</p>
                                        <p><span>Director & <br> Co-founder</span></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{!! asset('public/images/leaders/sameel.jpg') !!}" alt="">
                                    <div class="detail-container text-center">
                                        <p>Syed Sameel Naqvi</a>
                                        </p>
                                        <p><span>Director & <br> Co-founder</span></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{!! asset('public/images/leaders/own.jpg') !!}" alt="">
                                    <div class="detail-container text-center">
                                        <p>Syed Aun Bukhari</p>
                                        <p><span>Director & <br> Co-founder</span></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{!! asset('public/images/leaders/zain.jpg') !!}" alt="">
                                    <div class="detail-container text-center">
                                        <p>Zain Zafar (Late)</p>
                                        <p><span>Director & <br> Co-founder</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- job -->
        <section class="section-6 d-flex">
            <div class="jobs d-md-block d-none m-auto">
                <div class="container m-auto">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h2><span>work</span> with us</h2>
                                <p>Join our team to help shape the future.
                                    <br> We're building a culture at Bizz World Communications where amazing people like
                                    you can do their best work.</p>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="job-container container p-0">
                                            <?php
                                            $data = DB::table('job')
                                            ->where('status_id','=',1)
                                            ->select('job.*')
                                            ->get();
                                            if (isset($data)) {
                                            $uniqueindex = 1;
                                            foreach ($data as $val) {
                                            ?>
                                           <div class="job job-{{$uniqueindex}}">
                                               <h3>{{$val->job_title}}</h3>
                                                    <ul style="color:white;">
                                                    <li>{{$val->job_timing}}</li>
                                                    <li>{{$val->job_salary}}</li>
                                                    <li>{{$val->job_qualification}}</li>
                                                    <li>{{$val->job_skills}}</li>
                                                    <li>{{$val->job_experience}}</li>
                                                    <li>{{$val->job_location}}</li>
                                                    </ul>
                                                    <p>{{$val->job_description}}</p>
                                                    <button class="button-1">apply more</button>
                                            </div>
                                            <?php
                                            $uniqueindex++;
                                            }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="job-icons">
                                            <?php
                                            if (isset($data)) {
                                            $index = 1;
                                            foreach ($data as $val) {
                                            ?>
                                            <div class="job-icon job-icon-{{$index}} d-flex">
                                                <img class="mt-auto mb-auto" src="{{ URL::to('public/jobpost/')}}/{{$val->job_image}}" alt="" style="height: 300px">
                                            </div>
                                            <?php
                                            $index++;
                                            }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="job-mobile d-md-none d-block m-auto">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h2><span>work</span> with us</h2>
                                <p>Join our team to help shape the future.
                                    <br> We're building a culture at Bizz World Communications where amazing people like
                                    you can do their best work.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job-container">
                    <div class="owl-carousel owl-theme job-carousel">
                           <?php
                            $data = DB::table('job')
                            ->where('status_id','=',1)
                            ->select('job.*')
                            ->get();
                            // print_r($data);die;
                            if (isset($data)) {
                            $uniqueindex = 1;
                            foreach ($data as $val) {
                            ?>
                            <div class="item">
                            <div class="job job-{{$uniqueindex}}">
                               <h3>{{$val->job_title}}</h3>
                                    <ul style="color:white;">
                                    <li>{{$val->job_timing}}</li>
                                    <li>{{$val->job_salary}}</li>
                                    <li>{{$val->job_qualification}}</li>
                                    <li>{{$val->job_skills}}</li>
                                    <li>{{$val->job_experience}}</li>
                                    <li>{{$val->job_location}}</li>
                                    </ul>
                                    <p>{{$val->job_description}}</p>
                                    <button class="button-1">apply more</button>
                            </div>
                            </div>
                            <?php
                            $uniqueindex++;
                            }
                            }
                            ?>
                    </div>
                </div>
            </div>
            <div class="job-form d-flex">
                <div class="container m-auto">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading text-md-left text-center">
                                <h2><span>Join Our </span>Team</h2>
                                <p class="d-md-none d-none">Join our team to help shape the future.
                                    <br> We're building a culture at Bizz World Communications where amazing people like
                                    you can do their best work.</p>
                                <button class="close-form">X</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form">
                                <form class="container" action="{{ URL::to('applynow')}}" id="frmAdd" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="full-name">Full Name *</label>
                                                    <input type="text" name="fullName" id="full-name"
                                                        class="form-control" placeholder="Your Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email">Email Address *</label>
                                                    <input type="email" name="email" id="email" class="form-control"
                                                        placeholder="Email Address" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="appling-for">Appling for Position *</label>
                                                    <input type="text" name="applingfor" id="appling-for"
                                                        class="form-control" placeholder="" value="" required readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Job Type *</label><br>
                                                    <label class="form-check-label mr-4 ml-4">
                                                        <input type="radio" class="form-check-input" name="jobtype"
                                                            id="job-type-1" value="Full Time" checked required>
                                                        Full Time
                                                    </label>
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="jobtype"
                                                            id="job-type-2" value="Part Time" required>
                                                        Part Time
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="contact-number">Contact Number *</label>
                                                    <input type="text" name="contactnumber" id="contactnumber"
                                                        class="form-control" placeholder="Contact Number" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Uplaod Resume/CV *</label>
                                                    <input type="file" class="form-control-file" name="file" accept=".pdf,.docx" id=""
                                                        placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Message</label>
                                                    <textarea type="text" name="message" id="" required class="form-control" rows="4"
                                                        placeholder="Write Your Message Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial -->
        <section class="section-7">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="heading-h1"><span>Testimonial</span></h1>
                        <div class="owl-carousel owl-theme video-carousel">
                            <div class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 order-lg-0 order-1">
                                            <h1>Yasir <span>Khairi</span></h1>
                                            <h2>Floor Supervisor <span>- International Sales</span></h2>
                                            <p>
                                                <span class="d-sm-inline d-none">It’s an insurmountable pleasure to be a
                                                    part of Bizz World
                                                    Communications.</span> I joined the firm just after its
                                                establishment as an
                                                executive in sales department. The amount of effort I have put into my
                                                work since joining and the synergy with which the company acknowledged
                                                my struggles is applauding. I went all out and achieved my targets one
                                                after another and became a Floor Supervisor. Where I stand now is all
                                                because of my dauntless endeavors and the equal reciprocation from the
                                                company’s end.
                                            </p>
                                            <button class="read-more-button d-md-none d-block">read more</button>
                                        </div>
                                        <div class="col-lg-6 col-12 order-lg-1 order-0 text-center">
                                            <div class="img-conainer  text-center m-auto">
                                                <img src="{!! asset('public/images/testimonial/Yasir.jpg') !!}" alt="Yasir">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 order-lg-1 order-1">
                                            <h1>Emmad <span>Zaheer</span></h1>
                                            <h2>Senior Digitizer <span>- Digitize Department</span></h2>
                                            <p>
                                                It is heartwarming and a pleasant feeling whenever a company
                                                acknowledges your work enthusiasm. I became the part of the company as a
                                                digitizer. The entire team of digitizers was diligent for their work yet
                                                quite humble in nature. <span class="d-sm-inline d-none">They created an
                                                    environment where work ethics
                                                    and team work was prioritized.</span> The core essence of training
                                                the
                                                employees in the company has always been to focus more on meeting the
                                                needs of clients and providing them adequate solutions. With this agenda
                                                from company’s end, I have polished my skills as a digitizer and built a
                                                solid corporate character as whole for the company. <span
                                                    class="d-sm-inline d-none">I dedicate my
                                                    success to the staunching efforts of Bizz World
                                                    Communications.</span>
                                            </p>
                                            <button class="read-more-button d-md-none d-block">read more</button>
                                        </div>
                                        <div class="col-lg-6 col-12 order-lg-0 order-0 text-center">
                                            <div class="img-conainer  text-center m-auto even">
                                                <img src="{!! asset('public/images/testimonial/Emmad.jpg') !!}" alt="Yasir">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 order-lg-0 order-1">
                                            <h1>Hamdan <span>Nasir Khairi</span></h1>
                                            <h2>SQA Manager <span>- Software Quality Assurance Department</span></h2>
                                            <p>
                                                It is bliss to find and work in an environment that resonates with your
                                                energy and dedication levels, fortunately I found Bizz World
                                                Communications a true fit. <span class="d-sm-inline d-none">The company
                                                    is home to technically sound
                                                    minded people who always prioritize clientele satisfaction above
                                                    all.</span> I
                                                joined the firm as an executive in quality assurance department<span
                                                    class="d-sm-inline d-none"> and
                                                    started climbing up with steady and steeping learning curve</span>.
                                                No sooner,
                                                after series of back to back successes in ensuring quality assurance to
                                                my clients, I jumped in ranks and became a manager in the said
                                                department.<span class="d-sm-inline d-none"> The company is a precious
                                                    gem; one that shines bright yet
                                                    hard to find.</span>
                                            </p>
                                            <button class="read-more-button d-md-none d-block">read more</button>
                                        </div>
                                        <div class="col-lg-6 col-12 order-lg-1 order-0 text-center">
                                            <div class="img-conainer text-center m-auto">
                                                <img src="{!! asset('public/images/testimonial/hamdan.jpg') !!}" alt="Yasir">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 order-lg-1 order-1">
                                            <h1>Rafia <span>Naz</span></h1>
                                            <h2>Billing Executive <span>- Finance</span></h2>
                                            <p>
                                                It is a profound achievement in one’s life when they land a career
                                                defining job after facing tough decisions and hardships. Fortunately,
                                                for me; Bizz World Communications was the one place of work where I
                                                found solace. The overall work ethic and companionship of co-workers has
                                                been tremendously invigorating and benevolent from the get-go. I am
                                                currently an international billing executive in finance department of
                                                the company. <span class="d-sm-inline d-none">With the support of
                                                    employees and never quitting approach
                                                    of the bosses of the company, I am overwhelmingly positive that Bizz
                                                    World Communications will reach new heights of success.</span>
                                            </p>
                                            <button class="read-more-button d-md-none d-block">read more</button>
                                        </div>
                                        <div class="col-lg-6 col-12 order-lg-0 order-0 text-center">
                                            <div class="img-conainer  text-center m-auto even">
                                                <img src="{!! asset('public/images/testimonial/Rafia.jpg') !!}" alt="Yasir">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 order-lg-0 order-1">
                                            <h1>Salman <span>Shahid</span></h1>
                                            <h2>Manager <span>- International Sales</span></h2>
                                            <p>
                                                It is always a monumental experience in life when the company for which
                                                you work hard for day in day out, puts you in charge to make tough
                                                choices and in-turn believes that every decision you make will lead to a
                                                collective success. This is how I envisaged Bizz World Communications. I
                                                joined the company as international sales manager. <span
                                                    class="d-sm-inline d-none">My experience so far
                                                    has been thrilling and challenging at the same time. I am always
                                                    expected to outdo my efforts while at the same time reap a better
                                                    outcome. This challenge excites me the most and keeps me pushing my
                                                    limit.</span> I express my sincere gratitude to the bosses for the
                                                trust they
                                                have put in me.
                                            </p>
                                            <button class="read-more-button d-md-none d-block">read more</button>
                                        </div>
                                        <div class="col-lg-6 col-12 order-lg-1 order-0 text-center">
                                            <div class="img-conainer  text-center m-auto">
                                                <img src="{!! asset('public/images/testimonial/Salman.jpg') !!}" alt="Yasir">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 order-lg-1 order-1">
                                            <h1>Amir <span>Shahzad</span></h1>
                                            <h2>Accountant <span>- Finance</span></h2>
                                            <p>
                                                Bizz World Communications has been one of my recent greatest work
                                                experiences. <span class="d-sm-inline d-none">I feel a sense of warmth
                                                    and pride myself to work for a
                                                    place that treats me as an equal member.</span> Everyone works as a
                                                team and
                                                the support is always there whenever and whoever needs it. I enjoy the
                                                inclusivity & professional diversity of the people I work with and the
                                                friendly cooperative feeling that is shown by employees to one another.
                                                The company gatherings, which I always enjoy, are also a great way to
                                                meet and see each other. <span class="d-sm-inline d-none">I am currently
                                                    an accountant in finance
                                                    department of the company.</span> Without a doubt, I would recommend
                                                anyone to
                                                work for this company
                                            </p>
                                            <button class="read-more-button d-md-none d-block">read more</button>
                                        </div>
                                        <div class="col-lg-6 col-12 order-lg-0 order-0 text-center">
                                            <div class="img-conainer  text-center m-auto even">
                                                <img src="{!! asset('public/images/testimonial/Amir.jpg') !!}" alt="Yasir">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact -->
        <section class="section-2 d-flex">
            <div class="contact d-md-block d-none m-auto">
                <div class="contact-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-12">
                                <h1>About Us</h1>
                                <p>Established in 2015, Bizz World Communications is a business solution provider
                                    company situated in Karachi, Pakistan. With a staff of 90+ employees and a diversity
                                    of it ranging from website & mobile app developers, animators, digitizers, call
                                    center operators, and content writers, Bizz World Communications is a one-stop
                                    solution provider to any and all types of digital businesses.</p>
                                <div class="social-media">
                                    <a class="social-media-tw" target="_blank"
                                        href="https://twitter.com/bizzworldians/">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a class="social-media-fb" target="_blank"
                                        href="https://www.facebook.com/bizzworldcommunications/">
                                        <i class="fab fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a class="social-media-li" target="_blank"
                                        href="https://www.linkedin.com/organization-guest/company/bizzworldcommunications">
                                        <i class="fab fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="contact-links">
                                    <h3>Contact Us</h3>
                                    <ul class="contact-links">
                                        <li>
                                            <span><i class="fa fa-phone"></i></span>
                                            <a class="link" href="tel:+923209999021">Call: +92 320 9999021</a>
                                        </li>
                                        <li>
                                            <span><i class="fa fa-tty"></i></span>
                                            <a class="link" href="#">Number: 021-3-497459</a>
                                        </li>
                                        <li>
                                            <span><i class="fa fa-envelope"></i></span>
                                            <a class="link" href="mailto:info@bizzworldcommunications.com">Email:
                                                info@bizzworldcommunications.com</a>
                                        </li>
                                        <li>
                                            <span><i class="fa fa-map-marker"></i></span>
                                            <a class="link" target="_black"
                                                href="https://goo.gl/maps/vJCKT9VUuJEXK5VC9">Location: Bizz
                                                World Communications plot-2 street-5, BL-6 Gulshan-e-Iqbal.</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="quick-links">
                                    <h3>Quick Links</h3>
                                    <ul class="left">
                                        <li><a class="link" href="{{url('/')}}">Portfolio</a></li>
                                        <li><a class="link" href="{{url('/gallery')}}">Gallery</a></li>
                                    </ul>
                                    <ul class="right">
                                        <li><a class="link" href="{{url('/faq')}}">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5 col-12">
                                <div class="form">
                                    <h2><span><i class="fa fa-id-card"></i></span> Get in touch</h2>
                                    <form class="container" action="{{ URL::to('getintouch')}}" id="frmAdd" method="post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <input type="text" name="firstName" name="firstName" required id="firstName" class="form-control"
                                                    placeholder="First Name">
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <input type="text" name="lastName" name="lastName" required id="lastName" class="form-control"
                                                    placeholder="Last Name">
                                            </div>
                                            <div class="form-group col-12">
                                                <input type="email" name="email" name="email" required id="email" class="form-control"
                                                    placeholder="Email">
                                            </div>
                                            <div class="form-group col-12">
                                                <input type="text" name="subject" name="subject" required id="subject" class="form-control"
                                                    placeholder="Subject">
                                            </div>
                                            <div class="form-group col-12">
                                                <textarea name="message" name="message" required id="message" class="form-control" cols="30"
                                                    placeholder="Message" rows="5"></textarea>
                                            </div>
                                            <div class="form-group col-12">
                                                <button type="submit" class="btn"><span><i
                                                            ></i></span>
                                                    Submit</button>
                                            </div>
                                            <div class="col-12">
                                                <p>For urgent response contact us on info@bizzworldcommunication.com</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-mobile d-md-none d-block m-auto">
                <div class="owl-carousel owl-theme contact-carousel">
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h1>Follow Us</h1>
                                    <div class="social-media">
                                        <a class="social-media-tw"
                                            href="https://www.twitter.com/bizzworldcommunications/">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                        <a class="social-media-fb"
                                            href="https://www.facebook.com/bizzworldcommunications/">
                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                        </a>
                                        <a class="social-media-li"
                                            href="https://www.linkedin.com/organization-guest/company/bizzworldcommunications">
                                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                        <a class="social-media-be"
                                            href="https://www.behance.net/bizzworldcommunications/">
                                            <i class="fab fa-behance"></i>
                                        </a>
                                    </div>
                                    <div class="contact-links">
                                        <h3>Contact Us</h3>
                                        <ul class="contact-links">
                                            <li>
                                                <span><i class="fa fa-phone"></i></span>
                                                <a class="link" href="tel:+923209999021">Call: +92 320 9999021</a>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-tty"></i></span>
                                                <a class="link" href="#">Number: 021-3-497459</a>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-envelope"></i></span>
                                                <a class="link" href="mailto:info@bizzworldcommunications.com">Email:
                                                    info@bizzworldcommunications.com</a>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-map-marker"></i></span>
                                                <a class="link" target="_black"
                                                    href="https://goo.gl/maps/vJCKT9VUuJEXK5VC9">Location: Bizz
                                                    World Communications plot-2 street-5, BL-6 Gulshan-e-Iqbal.</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="quick-links">
                                        <h3>Quick Links</h3>
                                        <ul>
                                            <li><a class="link" href="{{url('/')}}">Portfolio</a></li>
                                            <li><a class="link" href="{{url('/gallery')}}">Gallery</a></li>
                                            <li><a class="link" href="{{url('/faq')}}">FAQs</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form">
                                        <h2><span><i class="fa fa-id-card"></i></span> Get in touch</h2>
                                        <form class="container" action="{{ URL::to('getintouch')}}" id="frmAdd" method="post">
                                        {{ csrf_field() }}
                                            <div class="row">
                                                <div class="form-group col-md-6 col-12">
                                                    <input type="text" name="firstName" required id="firstName"
                                                        class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-6 col-12">
                                                    <input type="text" name="lastName" required id="lastName"
                                                        class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="email" name="email" required id="email" class="form-control"
                                                        placeholder="Email">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="text" name="subject" required id="subject" class="form-control"
                                                        placeholder="Subject">
                                                </div>
                                                <div class="form-group col-12">
                                                    <textarea name="message" id="message" required class="form-control" cols="30"
                                                        placeholder="Message" rows="2"></textarea>
                                                </div>
                                                <div class="form-group col-12">
                                                    <button type="submit" class="btn"><span><i
                                                                class="fa fa-paper-plane"></i></span>
                                                        Submit</button>
                                                </div>
                                                <div class="col-12">
                                                    <p>For urgent response contact us on info@bizzworldcommunication.com
                                                    </p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <canvas id="canvas3"></canvas>
    <canvas id="canvas1"></canvas>
    <canvas id="canvas2"></canvas>
    <script type="module" src="{!! asset('public/js/model.min.js') !!}"></script>
    <script src="{!! asset('public/script/jquery-3.5.1.js') !!}"></script>
    <script src="{!! asset('public/script/jquery.onepage-scroll.js') !!}"></script>
    <script src="{!! asset('public/script/polygon1.js') !!}"></script>
    <script src="{!! asset('public/script/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset('public/script/main.js') !!}"></script>
    <script src="{!! asset('public/script/font-awewome.js') !!}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>