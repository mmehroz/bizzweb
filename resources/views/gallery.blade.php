<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{!! asset('public/gallerycss/main.css') !!}">
    <link rel="shortcut icon" href="{!! asset('public/images/favicon.png') !!}" type="image/x-icon">
    <title>Bizz World Communications</title>
</head>

<body>
    <header class="fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="../../">
                            <img src="{!! asset('public/images/logo.png') !!}" alt="Bizz World Communications">
                        </a>
                        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse"
                            aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div id="my-nav" class="collapse navbar-collapse">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="{{url('/')}}" class="nav-link"><span>Portfolio</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/faq')}}" class="nav-link"><span>FAQs</span></a>
                                </li>
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
                        <h1><span>Gallery</span></h1>
                        <hr>
                    </div>
                    <?php
                    $data = DB::table('gallery')
                    ->where('status_id','=',1)
                    ->select('gallery.gallery_image')
                    ->get();
                    if (isset($data)) {
                    foreach ($data as $val) {
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <a href="{!! asset('public/gallery/')!!}/{{$val->gallery_image}}" class="gallery-entry"
                            style="background-image: url({!! asset('public/gallery/')!!}/{{$val->gallery_image}});">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3>Bizz World <br> Communications</h3>
                            </div>
                        </a>
                    </div>
                  <?php
                    }
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <footer></footer>
    <canvas id="canvas2"></canvas>
    <script src="{!! asset('public/galleryjs/main.min.js') !!}"></script>
</body>

</html>