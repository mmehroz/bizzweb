<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{!! asset('public/css/faqmain.min.css') !!}">
    <link rel="shortcut icon" href="{!! asset('public/images/favicon.png') !!}" type="image/x-icon">
    <title>Bizz World Communications</title>
</head>

<body>
    <header class="fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand">
                            <img src="{!! asset('public/images/logo.png') !!}" alt="Bizz World Communications">
                        </a>
                        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse"
                            aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span>
                                <i class="fas fa-bars"></i>
                            </span>
                        </button>
                        <div id="my-nav" class="collapse navbar-collapse">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="{{url('/')}}" class="nav-link"><span>Portfolio</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/gallery')}}" class="nav-link"><span>gallery</span></a> </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main id="main">
        <section id="content">
            <div class="container content">
                <div class="row">
                    <div class="col-12">
                        <h1><span>FAQs</span></h1>
                        <hr>
                    </div>
                    <div class="col-12">
                        <h2>General Questions</h2>
                        <div id="accordion1">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            How do i purchase an item from your website?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        Our items are sold exclusively on ThemeForest marketplace. Themeforest is a
                                        marketplace for digital goods, mostly themes and templates for different
                                        platforms and software. Why ThemeForest you may ask? Well, they're certaintly
                                        the biggest marketplaces for such products on the web.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Where can i find a list of the items i purchased from you?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        To see a list of items that you've purchased, login to your ThemeForest account
                                        and go to your Downloads section. You can re-download them from here aswell.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Where do i download my products that i've puchased from you?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        To download an item that you've purchased, login to your ThemeForest account and
                                        go to your Downloads section. You can re-download them from here aswell.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="collapsed" data-toggle="collapse" data-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            I'm being redirected to buy from this website called ThemeForest, is it
                                            normal?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        Yes, no worries! ThemeForest is a marketplace where we exclusively post and sell
                                        our work. Also payments and purchases are made through ThemeForest.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="collapsed" data-toggle="collapse" data-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            What are the payment methods for purchasing?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        As mentioneed before, payments and purchases are made through ThemeForest. The
                                        payment methods are through Paypal and Skrill (MoneyBookers). You can find much
                                        more details here
                                        https://help.market.envato.com/hc/en-us/articles/203269700-How-to-Purchase-Items
                                        . Also keep in mind though that credit card payments will be implemented very
                                        soon.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h5 class="mb-0">
                                        <button class="collapsed" data-toggle="collapse" data-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">
                                            I really like your templates/support. How can i rate it?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        As mentioneed before, payments and purchases are made through ThemeForest. The
                                        payment methods are through Paypal and Skrill (MoneyBookers). You can find much
                                        more details here
                                        https://help.market.envato.com/hc/en-us/articles/203269700-How-to-Purchase-Items
                                        . Also keep in mind though that credit card payments will be implemented very
                                        soon.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-12">
                        <h2>Specific Questions</h2>
                        <div id="accordion2">
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h5 class="mb-0">
                                        <button data-toggle="collapse" data-target="#collapseSeven"
                                            aria-expanded="false" aria-controls="collapseSeven">
                                            Holisticly supply revolutionary action?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                    data-parent="#accordion2">
                                    <div class="card-body">
                                        Authoritatively expedite next-generation action items and worldwide products.
                                        Competently matrix timely synergy via professional infomediaries. Professionally
                                        incubate optimal manufactured products via corporate convergence.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <h5 class="mb-0">
                                        <button data-toggle="collapse" data-target="#collapseEight"
                                            aria-expanded="false" aria-controls="collapseEight">
                                            Competently streamline progressive scenarios
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                    data-parent="#accordion2">
                                    <div class="card-body">
                                        Authoritatively integrate alternative outsourcing vis-a-vis market positioning
                                        quality vectors. Compellingly iterate diverse e-services before
                                        backward-compatible expertise. Dramatically restore global vortals via
                                        resource-leveling ROI. Credibly brand principle-centered innovation vis-a-vis
                                        pandemic e-services.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingNine">
                                    <h5 class="mb-0">
                                        <button class="collapsed" data-toggle="collapse" data-target="#collapseNine"
                                            aria-expanded="false" aria-controls="collapseNine">
                                            Interactively mesh customer directed
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                                    data-parent="#accordion2">
                                    <div class="card-body">
                                        Rapidiously orchestrate one-to-one imperatives with covalent core competencies.
                                        Compellingly procrastinate excellent e-commerce whereas principle-centered
                                        expertise. Progressively brand compelling architectures before optimal ideas.
                                        Dynamically evisculate high-payoff leadership and leading-edge customer service.
                                        Dynamically parallel task enabled materials whereas value-added markets.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTen">
                                    <h5 class="mb-0">
                                        <button class="collapsed" data-toggle="collapse" data-target="#collapseTen"
                                            aria-expanded="false" aria-controls="collapseTen">
                                            Distinctively synergize seamless methods
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen"
                                    data-parent="#accordion2">
                                    <div class="card-body">
                                        Rapidiously orchestrate one-to-one imperatives with covalent core competencies.
                                        Compellingly procrastinate excellent e-commerce whereas principle-centered
                                        expertise. Progressively brand compelling architectures before optimal ideas.
                                        Dynamically evisculate high-payoff leadership and leading-edge customer service.
                                        Dynamically parallel task enabled materials whereas value-added markets.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer></footer>
    <canvas id="canvas2"></canvas>
    <script src="{!! asset('public/faqjs/main.min.js') !!}"></script>
</body>
</html>