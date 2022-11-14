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
                    <li style="color: #d18b1b"><a href="{{url('/admingallery')}}" style="color: #d18b1b">Gallery</a></li>
                    <li style="color: #d18b1b"><a href="{{url('/logout')}}" style="color: #d18b1b">Logout</a></li>
                </div>
            </div>
        </div>
    </div><br><br><br><br>
    <div class="main">
        <div class="job-form d-flex">
                <div class="container m-auto">
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
                    <div class="row">
                        <div class="col-12">
                            <div class="form">
                                <form class="container" action="{{ URL::to('jobpost')}}" id="frmAdd" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h1 style="color: #d18b1b;"><span>Bizz World Job Post</span></h1>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="full-name" style="color: white">Job Title *</label>
                                                    <input type="text" name="title" id="title" placeholder="Abc Xyz" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email" style="color: white">Job Timing *</label>
                                                    <input type="text" name="timing" id="timing" placeholder="Night Shift (9:00pm till 5:00am)" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="appling-for" style="color: white">Salary *</label>
                                                    <input type="text" name="salary" id="salary" placeholder="Salary: Rs.1000/ - Rs.1000/" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="appling-for" style="color: white">Qualification *</label>
                                                    <input type="text" name="qualification" id="qualification" placeholder="Bachelor" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="contact-number" style="color: white">Skills Required *</label>
                                                    <input type="text" name="skills" id="skills" placeholder="Abc, Efg, Xyz" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="contact-number" style="color: white">Experience Level *</label>
                                                    <input type="text" name="experience" id="experience" placeholder="Fresh" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="contact-number" style="color: white">Location *</label>
                                                    <input type="text" name="location" id="location" placeholder="Karachi, Pakistan" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="" style="color: white">Image *</label>
                                                    <input type="file" class="form-control-file" name="image" accept="image/x-png,image/gif,image/jpeg,image/*" id="image"  required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="" style="color: white">Job Description</label>
                                                    <textarea type="text" name="description" id="description" required class="form-control" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit">Post Job</button>
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