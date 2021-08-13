<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/png" href="frontend/assets/img/cu.png" />
    <title>Hello-Hapo</title>
    <link rel="stylesheet" href="frontend/scss/style.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
</head>

<body>

    <div id="draggable" class="ui-widget-content mess-facebook">
        <img class="messfb" src="frontend/assets/img/message.png" onclick="show()">
        <div id="hide" class="hide">
            <div class="frame-mess">
                <div class="frame-hapo">
                    <p>HapoLearn</p>
                    <img onclick="hide()" src="frontend/assets/img/close-mess.png">
                </div>
                <div class="hello">
                    <img src="frontend/assets/img/cu.png">
                    <p>HapoLearn xin chào bạn.<br>
                        Bạn có cần chúng tôi hỗ trợ gì không? </p>
                </div>
                <div class="login-mess">
                    <img src="frontend/assets/img/iconmess.png">
                    <a href=""> <span style="margin-left: 2px;"> Đăng nhập
                            vào Messenger</span></a>
                </div>
                <div class="chat-hapo">
                    <a href="">
                        <p>Chat với HapoLearn trong Messenger</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <header class="header fixed">
        <div class="containerr">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-expand-md
                        navbar-light">
                    <a class="navbar-brand" href="#">
                        <div class="img-logo">
                            <p class="text-center">
                                <img src="frontend/assets/img/logo.png" alt="fail
                                        image" />
                            </p>
                        </div>
                    </a>
                    <button class="navbar-toggler btn-menu" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
                        <span class="navbar-toggler-icon" onclick="showheader()" id="showheader"></span>
                        <span class="my-1
                                mx-1 close fa
                                fa-times" onclick="hideheader()" id="hideheader"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar-menu-div" id="navbarNav">
                        <ul class="navbar-nav nav" role="tablist">
                            <li class="nav-item item-menu">
                                <a class="nav-link text-center active" role="tab" data-toggle="pill"
                                    aria-selected="true" href="#" onclick="hidenav()">HOME</a>
                            </li>
                            <li class="nav-item item-menu">
                                <a class="nav-link text-center" aria-selected="false" data-toggle="pill" role="tab"
                                    href="#" onclick="hidenav()">ALL
                                    COURSES</a>
                            </li>
                            <li class="nav-item item-menu list-courses">
                                <a class="nav-link text-center" aria-selected="false" data-toggle="pill" role="tab"
                                    href="#" onclick="hidenav()">LIST lESSON</a>
                            </li>
                            <li class="nav-item item-menu list-courses">
                                <a class="nav-link text-center" aria-selected="false" data-toggle="pill" role="tab"
                                    href="#" onclick="hidenav()">LESSON
                                    DETAIL</a>
                            </li>
                            <li class="nav-item item-menu">
                                <a class="nav-link text-center" role="tab" aria-selected="false" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-toggle="pill" href="#">LOGIN/REGISTER
                                </a>
                            </li>
                            <li class="nav-item item-menu">
                                <a class="nav-link text-center" role="tab" aria-selected="false" data-toggle="pill"
                                    href="#" onclick="hidenav()">PROFILE</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="frame-login modal fade modal-dialog modal-dialog-centered" id="exampleModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:none">
        <div class="frame-loginn">
            <div class="modal-dialog">
                <div class="modal-content content">
                    <div class="login-register">
                        <div id="tabs" class="tabs">
                            <img class="btn btn-secondary button-close" data-bs-dismiss="modal"
                                src="frontend/assets/img/close.png" alt="close">
                            <ul>
                                <li class="login"><a href="#tabs-login">
                                        <p class="active-tab" id="login-change" onclick="login()">LOGIN</p>
                                    </a></li>
                                <li class="register"><a href="#tabs-register">
                                        <p id="register-change" onclick="register()">REGISTER</p>
                                    </a></li>
                            </ul>
                            <div class="container tabs-container">
                                <div id="tabs-login"><br>
                                    <div class="input">
                                        <label>Username:</label><br>
                                        <input type="text"> <br>
                                    </div>
                                    <div class="input">
                                        <label>Password:</label><br>
                                        <input type="password"><br>
                                    </div>
                                    <div class="login-check">
                                        <input type="checkbox" class="form-check-input
                                                remember-me-login-checkbox" id="remember-me-login-checkbox">
                                        <label class="form-check-label
                                                remember-me-label rememberme" for="remember-me-login-checkbox">
                                            Remember me</label>


                                        <label><a class="forgot" href="">Forgot
                                                password</a></label><br>
                                    </div>
                                    <div>
                                        <p class="text-center">
                                            <button type="button" class="btn
                                                    btn-primary login-hapo">LOGIN</button>
                                        </p>
                                    </div>
                                    <div class="line-login">
                                        <span class="login-with">Login
                                            with</span>
                                    </div>
                                    <p class="text-center">
                                        <button type="button" class="btn
                                                btn-primary facebook"><img class="img-gg"
                                                src="frontend/assets/img/google.png" alt="facebook"><img class="img-gg"
                                                src="frontend/assets/img/vectort.png" alt="google">
                                            Google</button>
                                    </p>
                                    <p class="text-center">
                                        <button type="button" class="btn
                                                btn-primary google"><img class="img-fb"
                                                src=frontend/assets/img/facebook.png alt="button-facebook">
                                            Facebook</button>
                                    </p>
                                </div>
                                <div id="tabs-register">
                                    <br><br>
                                    <form method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="input user-input"> <label>Username:</label><br>
                                            <input type="text" name="name"><br>
                                        </div>
                                        <span>
                                            @if ($errors->has('name'))
                                                {{ $errors->first('name') }}
                                            @endif
                                        </span>
                                        <div class="input"> <label>Email:</label><br>
                                            <input type="email" php="email"><br>
                                        </div>
                                        <div class="input"> <label>Password:</label><br>
                                            <input type="password" name="password"><br>
                                        </div>
                                        <div class="input"> <label>Repeat
                                                Password:</label><br>
                                            <input type="password" name="confirm_password"><br>
                                        </div>
                                        <p class="text-center">
                                            <button type="button" class="btn
                                                    btn-primary login-hapo
                                                    login-registers">Register</button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fix-fixed">&nbsp;</div>

    <div class="banner-hapo">
        <div class="banner">
            <div class="info-banner">
                <p>Learn Anytime, Anywhere</p>
                <p>
                    at HapoLearn<span> <img src="frontend/assets/img/logo-1.PNG" />
                    </span>!
                </p>
                <p>
                    Interactive lessons, "on-the-go"<br />
                    practice, peer support.
                </p>
                <p><button>Start Learning Now!</button></p>
            </div>
        </div>
    </div>

    <div class="bg-banner"></div>

    <div class="tutorial-hapo">
        <div class="container-card">
            <div class="row">
                <div class="col-xl-4 col-md-4 d-flex
                        justify-content-center">
                    <div class="card-hapo">
                        <img src="frontend/assets/img/hjs.PNG" class="card-img-top" alt="hjs" />
                        <div class="card-body">
                            <p class="card-title text-center">
                                HTML/CSS/js <span>Tutorial</span>
                            </p>
                            <p class="card-text text-center text-title">
                                I knew hardly anything about HTML, JS, and
                                CSS before entering
                                New Media. I had coded quite a bit, but
                                never touched anything
                                in regards to web development.
                            </p>
                            <div class="text-center take-course">
                                <a href="#" class="btn btn-primary">Take
                                    This Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 d-flex
                        justify-content-center">
                    <div class="card-hapo">
                        <img src="frontend/assets/img/laravel.PNG" class="card-img-top" alt="laravel" />
                        <div class="card-body">
                            <p class="card-title text-center">LARAVEL
                                Tutorial</p>
                            <p class="card-text text-center text-title">
                                I knew hardly anything about HTML, JS, and
                                CSS before entering
                                New Media. I had coded quite a bit, but
                                never touched anything
                                in regards to web development.
                            </p>
                            <div class="text-center take-course">
                                <a href="#" class="btn btn-primary">Take
                                    This Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 d-flex
                        justify-content-center">
                    <div class="card-hapo">
                        <img src="frontend/assets/img/php.PNG" class="card-img-top" alt="php" />
                        <div class="card-body">
                            <p class="card-title text-center">PHP Tutorial</p>
                            <p class="card-text text-center text-title">
                                I knew hardly anything about HTML, JS, and
                                CSS before entering
                                New Media. I had coded quite a bit, but
                                never touched anything
                                in regards to web development.
                            </p>
                            <div class="text-center take-course">
                                <a href="#" class="btn btn-primary">Take
                                    This Course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="other-courses">
            <p class="text-center courses">Other courses</p>
            <div class="container-card">
                <div class="row">
                    <div class="col-xl-4 col-md-4 d-flex
                            justify-content-center">
                        <div class="card-hapo">
                            <img src="frontend/assets/img/css.PNG" class="card-img-top" alt="css" />
                            <div class="card-body">
                                <p class="card-title text-center
                                        text-center">
                                    CSS Tutorial
                                </p>
                                <p class="card-text text-center
                                        text-title-frist">
                                    I knew hardly anything about HTML, JS,
                                    and CSS before
                                    entering New Media,...
                                </p>
                                <div class="text-center take-course">
                                    <a href="#" class="btn btn-primary">Take
                                        This Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 d-flex
                            justify-content-center">
                        <div class="card-hapo">
                            <img src="frontend/assets/img/rails.PNG" class="card-img-top" alt="rails" />
                            <div class="card-body">
                                <p class="card-title text-center">
                                    Ruby on rails <span>Tutorial</span>
                                </p>
                                <p class="card-text text-center
                                        text-title-frist">
                                    I knew hardly anything about HTML, JS,
                                    and CSS before
                                    entering New Media,...
                                </p>
                                <div class="text-center take-course">
                                    <a href="#" class="btn btn-primary">Take
                                        This Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 d-flex
                            justify-content-center">
                        <div class="card-hapo">
                            <img src="frontend/assets/img/java.PNG" class="card-img-top" alt="java" />
                            <div class="card-body">
                                <p class="card-title text-center">Java
                                    Tutorial</p>
                                <p class="card-text text-center
                                        text-title-frist">
                                    I knew hardly anything about HTML, JS,
                                    and CSS before
                                    entering New Media,...
                                </p>
                                <div class="text-center take-course">
                                    <a href="#" class="btn btn-primary">Take
                                        This Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-courses">
            <p class="text-center">View All Our Courses <img class="arrow" src="frontend/assets/img/arrow.png"
                    alt="arrow"></p>
        </div>
    </div>

    <div class="why-hapo" style="background-image:
            url('frontend/assets/img/bg.PNG');">
        <div class="container-fuild">

            <div class="laptop"><img src="frontend/assets/img/laptop.PNG" alt="laptp"></div>

            <div class="info-laptop">
                <div class="info-why">
                    <div class="">
                        <p>Why HapoLearn?</p>
                    </div>
                    <div class="list-whyhapo">
                        <ul>
                            <li class="fas fa-check-circle mr-2"><span>
                                    Interactive
                                    lessons, "on-the-go" practice, peer
                                    support.</span></li>
                            <li class="fas fa-check-circle mr-2"><span>
                                    Interactive
                                    lessons, "on-the-go" practice, peer
                                    support.</span></li>
                            <li class="fas fa-check-circle mr-2"> <span>
                                    Interactive
                                    lessons, "on-the-go" practice, peer
                                    support.</span></li>
                            <li class="fas fa-check-circle mr-2"><span>
                                    Interactive
                                    lessons, "on-the-go" practice, peer
                                    support.</span></li>
                            <li class="fas fa-check-circle mr-2"> <span>
                                    Interactive
                                    lessons, "on-the-go" practice, peer
                                    support.</span></li>

                        </ul>
                    </div>
                </div>
                <div class="laptop-phone"><img src="frontend/assets/img/lap-ipone.png" alt="laptop-ipone">
                </div>
            </div>
        </div>
    </div>

    <div class="feedback">
        <p class="feedback-title">Feedback</p>
        <p class="feedback-info text-center">What other students turned
            professionals have to say about us after learning with
            us
            and reaching their
            goals</p>
        <div class="fellback-all">
            <div class="feelbacks slick">
                <div class="feelback-card">
                    <div class="feelback-info">
                        <div class="feelback-border">
                            <p>“A wonderful course on how to start. Eddie
                                beautifully conveys all essentials of a
                                becoming
                                a good Angular developer. Very glad to have
                                taken this course. Thank you Eddie Bryan.”</p>
                        </div>
                        <div class="triangle"></div>
                    </div>
                    <div class="user">
                        <div class="image-user">
                            <img src="frontend/assets/img/meo.PNG" alt="avatar">
                        </div>
                        <div class="user-info">
                            <p class="name-user">Tuan Tran Hoang</p>
                            <p class="name-courses">Python</p>
                            <div class="star">
                                <p class="fas fa-star"></p>
                                <p class="fas fa-star"></p>
                                <p class="fas fa-star"></p>
                                <p class="fas fa-star"></p>
                                <p class="fas fa-star"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feelback-card">
                    <div class="feelback-info">
                        <div class="feelback-border">
                            <p>“A wonderful course on how to start. Eddie
                                beautifully conveys all essentials of a
                                becoming
                                a good Angular developer. Very glad to have
                                taken this course. Thank you Eddie Bryan.”</p>
                        </div>
                        <div class="triangle"></div>
                    </div>
                    <div class="user">
                        <div class="image-user">
                            <img src="frontend/assets/img/meo.PNG" alt="avatar">
                        </div>
                        <div class="user-info">
                            <p class="name-user">Hồ Đức Tuân</p>
                            <p class="name-courses">PHP & Laravel</p>
                            <div class="star">
                                <p class="fas fa-star"></p>
                                <p class="fas fa-star"></p>
                                <p class="fas fa-star"></p>
                                <p class="fas fa-star"></p>
                                <p class="fas fa-star"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feelback-card">
                    <div class="feelback-info">
                        <div class="feelback-border">
                            <p>“A wonderful course on how to start. Eddie
                                beautifully conveys all essentials of a
                                becoming
                                a good Angular developer. Very glad to have
                                taken this course. Thank you Eddie Bryan.”</p>
                        </div>
                        <div class="triangle"></div>
                    </div>
                    <div class="user">
                        <div class="image-user">
                            <img src="frontend/assets/img/meo.PNG" alt="avatar">
                        </div>
                        <div class="user-info">
                            <p class="name-user">Hồ Đức Tuân</p>
                            <p class="name-courses">PHP & Laravel</p>
                            <div class="star">
                                <p class="fas fa-star"></p>
                                <p class="fas fa-star"></p>
                                <p class="fas fa-star"></p>
                                <p class="fas fa-star"></p>
                                <p class="fas fa-star"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="become-member">
        <div class="info-become">
            <p class="text-center">Become a member of our<br>
                growing community!</p>
            <p class="text-center"><button>Start Learning Now!</button></p>
        </div>
    </div>

    <div class="statistic">
        <p class="text-center statis">Statistic</p>
        <div class="div-statistic">
            <div class="row">
                <div class="card text-center card-statistic">
                    <div class="card-body">
                        <p class="card-title">Courses</p>
                        <p class="card-text">1,586</p>
                    </div>
                </div>
                <div class="card text-center card-statistic">
                    <div class="card-body">
                        <p class="card-title">Lessons</p>
                        <p class="card-text">2,689</p>
                    </div>
                </div>
                <div class="card text-center card-statistic">
                    <div class="card-body">
                        <p class="card-title">Learners</p>
                        <p class="card-text">16,882</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="footer-image order-md-1">
                    <img src="frontend/assets/img/hapo-white.png">
                    <p>Interactive lessons, "on-the-go"<br>
                        practice, peer support.</p>
                </div>
                <div class="home col-6 order-first order-md-2">
                    <p><a href="">Home</a></p>
                    <p><a href="">Features</a></p>
                    <p><a href="">Courses</a></p>
                    <p><a href="">Blog</a></p>
                </div>
                <div class="contact col-6 order-first order-md-3">
                    <p><a href="">Contact</a></p>
                    <p><a href="">Terms of Use</a></p>
                    <p><a href="">FAQ</a></p>
                </div>
                <div class="footer-icon order-md-4">
                    <div class="icon-footer">
                        <a href="" class="data-toggle" tooltip data-placement="right"
                            title="facebook.com/tuyen.dung.haposoft"><img src="frontend/assets/img/fb.png"
                                alt="facebook"></a>
                        <a href="" class="data-toggle" tooltip data-placement="right" title="+84-85-645-9898"><img
                                src="frontend/assets/img/phone.png" alt="phone"></a>
                        <a href="" class="data-toggle" tooltip data-placement="right" title="info@haposoft.com"><img
                                src="frontend/assets/img/email.png" alt="email"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-end">
        <p>© 2020 HapoLearn, Inc. All rights
            reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="frontend/assets/js/slicks.js"></script>
</body>

</html>
