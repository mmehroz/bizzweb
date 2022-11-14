<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bizz World Communications</title>
    <link rel="shortcut icon" href="{!! asset('public/images/favicon.png') !!}" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('public/css/main.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="front-panel">
        <div class="container">
            <div class="row">
                <div class="col-6 logo">
                    <a href="{{url('/')}}"><img src="{!! asset('public/images/logo.png') !!}" alt="Bizz World Communications"></a>
                </div>
                <div class="col-6 logo">
                    <li style="color: #d18b1b"><a href="{{url('/bizzadmin')}}" style="color: #d18b1b">Job Post</a></li>
                    <li style="color: #d18b1b"><a href="{{url('/logout')}}" style="color: #d18b1b">Logout</a></li>
                </div>
                <div class="col-6 logo">
                 @if(session('message'))
                    <div class="account-title">
                        <p class="alert alert-success" style="color: #d18b1b">{{session('message')}}</p>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <div><h4><li style="color: #d18b1b">{{ $error }}</li></h4> </div>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            </div>
        </div>
    </div><br><br><br><br><br>
    <div class="main">
        <div class="job-form d-flex">
                <div class="container m-auto">
                 <div class="row">
                        <div class="col-12">
                            <h1 style="color: #d18b1b; margin-left: 30px;"><span>Bizz World Gallery</span></h1>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-12">
                            <div class="form">
                                <form class="container" action="{{ URL::to('uploadgallery')}}" id="frmAdd" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="" style="color: white">Upload Image *</label>
                                                    <input type="file" class="form-control-file" name="image[]" accept="image/x-png,image/gif,image/jpeg,image/*" id="image" required multiple>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit">Upload Images</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
        <div class="main">
        <div class="job-form d-flex">
                <div class="container m-auto">
                    <div class="row">
                        
                    </div>
                </div>
            </div>
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