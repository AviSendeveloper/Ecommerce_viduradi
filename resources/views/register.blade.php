<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="user/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="user/assets/css/banner.css">

    <link rel="stylesheet" href="user/assets/css/style.css">
    <link rel="stylesheet" href="user/header/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="user/header/assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="user/header/assets/css/style.min.css">
    <link rel="stylesheet" href="user/header/assets/css/responsive.min.css">
    <link rel="stylesheet" href="user/assets/css/header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/smooth-scrollbar.js"></script>
    <style>
    #success_message {
        display: none;
    }
    </style>
    <style>
    .loginBtn {
        box-sizing: border-box;
        position: relative;
        /* width: 13em;  - apply for fixed size */
        margin: 0.2em;
        padding: 0 15px 0 46px;
        border: none;
        text-align: left;
        line-height: 34px;
        white-space: nowrap;
        border-radius: 0.2em;
        font-size: 16px;
        color: #FFF;
    }

    .loginBtn:before {
        content: "";
        box-sizing: border-box;
        position: absolute;
        top: 0;
        left: 0;
        width: 34px;
        height: 100%;
    }

    .loginBtn:focus {
        outline: none;
    }

    .loginBtn:active {
        box-shadow: inset 0 0 0 32px rgba(0, 0, 0, 0.1);
    }


    /* Facebook */
    .loginBtn--facebook {
        background-color: #4C69BA;
        background-image: linear-gradient(#4C69BA, #3B55A0);
        /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
        text-shadow: 0 -1px 0 #354C8C;
    }

    .loginBtn--facebook:before {
        border-right: #364e92 1px solid;
        background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
    }

    .loginBtn--facebook:hover,
    .loginBtn--facebook:focus {
        background-color: #5B7BD5;
        background-image: linear-gradient(#5B7BD5, #4864B1);
    }


    /* Google */
    .loginBtn--google {
        /*font-family: "Roboto", Roboto, arial, sans-serif;*/
        background: #DD4B39;
    }

    .loginBtn--google:before {
        border-right: #BB3F30 1px solid;
        background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
    }

    .loginBtn--google:hover,
    .loginBtn--google:focus {
        background: #E74B37;
    }
    </style>
</head>

<body>


    @include('section/header')
    <br>
    <div class="container">
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif



        <form class="well form-horizontal" action="/signup" method="post" id="contact_form">
            @csrf
            <fieldset>

                <!-- Form Name -->
                <legend>
                    <center>
                        <h2><b>Registration Form</b></h2>
                    </center>
                </legend><br>


                <div class="form-group logjyb">
                    <div class="cl" style="text-align: center;"><a href="{{ url('auth/facebook') }}"
                            class="loginBtn loginBtn--facebook" style="-webkit-appearance: button;
    cursor: pointer;">
                            Login with Facebook
                        </a></div>
                    <div class="cl" style="text-align: center;"><a href="{{ url('auth/google') }}" class="loginBtn loginBtn--google"
                            style="-webkit-appearance: button;
    cursor: pointer;">
                            Login with Google</a>
                    </div>
                </div>


                <div class="form-group">
                    <!-- <label class="col-md-4 control-label">Department / Office</label> -->

                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Username</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="name" placeholder="Username" class="form-control" type="text" required="">
                        </div>
                    </div>
                </div>

                <!-- Text input-->



                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="E-Mail Address" class="form-control" type="text"
                                required="">
                        </div>
                    </div>
                </div>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Contact No.</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="phone" placeholder="(+91)" class="form-control" type="text" required="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="password" placeholder="Password" class="form-control" type="password"
                                required="">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="cpassword" placeholder="Confirm Password" class="form-control" type="password"
                                required="">
                        </div>
                    </div>
                </div>

                <!-- recaptcha -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">

                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                                <strong style="color: red;">{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="row">
                    <div class="col-md-4 control-label">

                    </div>
                    <div class="col-md-3 control-label">
                        <p>Are you already registered user?<a href="/login">Go login page</a> </p>
                    </div>
                </div>

                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Success <i
                        class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit"
                            class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span
                                class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    </div><!-- /.container -->

    @include('section/footer')




    <script>
    $(document).ready(function() {
        $('#contact_form').bootstrapValidator({
                // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    first_name: {
                        validators: {
                            stringLength: {
                                min: 2,
                            },
                            notEmpty: {
                                message: 'Please enter your First Name'
                            }
                        }
                    },
                    last_name: {
                        validators: {
                            stringLength: {
                                min: 2,
                            },
                            notEmpty: {
                                message: 'Please enter your Last Name'
                            }
                        }
                    },
                    user_name: {
                        validators: {
                            stringLength: {
                                min: 8,
                            },
                            notEmpty: {
                                message: 'Please enter your Username'
                            }
                        }
                    },
                    user_password: {
                        validators: {
                            stringLength: {
                                min: 8,
                            },
                            notEmpty: {
                                message: 'Please enter your Password'
                            }
                        }
                    },
                    confirm_password: {
                        validators: {
                            stringLength: {
                                min: 8,
                            },
                            notEmpty: {
                                message: 'Please confirm your Password'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Please enter your Email Address'
                            },
                            emailAddress: {
                                message: 'Please enter a valid Email Address'
                            }
                        }
                    },
                    contact_no: {
                        validators: {
                            stringLength: {
                                min: 12,
                                max: 12,
                                notEmpty: {
                                    message: 'Please enter your Contact No.'
                                }
                            }
                        },
                        department: {
                            validators: {
                                notEmpty: {
                                    message: 'Please select your Department/Office'
                                }
                            }
                        },
                    }
                }
            })
            .on('success.form.bv', function(e) {
                $('#success_message').slideDown({
                    opacity: "show"
                }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

                // Prevent form submission
                e.preventDefault();

                // Get the form instance
                var $form = $(e.target);

                // Get the BootstrapValidator instance
                var bv = $form.data('bootstrapValidator');

                // Use Ajax to submit form data
                $.post($form.attr('action'), $form.serialize(), function(result) {
                    console.log(result);
                }, 'json');
            });
    });
    </script>

    <script>
    $(function() {

        $('.carousel').carousel({
            interval: 4000
        });

    });


    $(document).ready(function() {
        $('.carousel .carousel-caption').css('zoom', $('.carousel').width() / 1250);
    });

    $(window).resize(function() {
        $('.carousel .carousel-caption').css('zoom', $('.carousel').width() / 1250);
    });
    </script>
    <script>
    $(document).ready(function() {
        $(".SlickCarousel").slick({
            rtl: false, // If RTL Make it true & .slick-slide{float:right;}
            autoplay: true,
            autoplaySpeed: 5000, //  Slide Delay
            speed: 800, // Transition Speed
            slidesToShow: 3, // Number Of Carousel
            slidesToScroll: 1, // Slide To Move 
            pauseOnHover: false,
            appendArrows: $(".Container .Head .Arrows"), // Class For Arrows Buttons
            prevArrow: '<span class="Slick-Prev"></span>',
            nextArrow: '<span class="Slick-Next"></span>',
            easing: "linear",
            responsive: [{
                    breakpoint: 801,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 641,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                    }
                },
            ],
        })
    })
    </script>
    <script>
    jQuery('.card-slider').slick({
        slidesToShow: 5,
        autoplay: true,
        slidesToScroll: 1,
        dots: false,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    let cards = document.querySelectorAll('.card');
    let card;
    let modal = document.querySelector('.modal');
    let closeButton = document.querySelector('.modal__close-button');
    let page = document.querySelector('.page');
    const cardBorderRadius = 20;
    const openingDuration = 600; //ms
    const closingDuration = 600; //ms
    const timingFunction = 'cubic-bezier(.76,.01,.65,1.38)';

    var Scrollbar = window.Scrollbar;
    Scrollbar.init(document.querySelector('.modal__scroll-area'));


    function flipAnimation(first, last, options) {
        let firstRect = first.getBoundingClientRect();
        let lastRect = last.getBoundingClientRect();

        let deltas = {
            top: firstRect.top - lastRect.top,
            left: firstRect.left - lastRect.left,
            width: firstRect.width / lastRect.width,
            height: firstRect.height / lastRect.height
        };

        return last.animate([{
            transformOrigin: 'top left',
            borderRadius: `
    ${cardBorderRadius/deltas.width}px / ${cardBorderRadius/deltas.height}px`,
            transform: `
      translate(${deltas.left}px, ${deltas.top}px) 
      scale(${deltas.width}, ${deltas.height})
    `
        }, {
            transformOrigin: 'top left',
            transform: 'none',
            borderRadius: `${cardBorderRadius}px`
        }], options);
    }

    cards.forEach((item) => {
        item.addEventListener('click', (e) => {
            jQuery('.card-slider').slick('slickPause');
            card = e.currentTarget;
            page.dataset.modalState = 'opening';
            card.classList.add('card--opened');
            card.style.opacity = 0;
            document.querySelector('body').classList.add('no-scroll');

            let animation = flipAnimation(card, modal, {
                duration: openingDuration,
                easing: timingFunction,
                fill: 'both'
            });

            animation.onfinish = () => {
                page.dataset.modalState = 'open';
                animation.cancel();
            };
        });
    });

    closeButton.addEventListener('click', (e) => {
        page.dataset.modalState = 'closing';
        document.querySelector('body').classList.remove('no-scroll');

        let animation = flipAnimation(card, modal, {
            duration: closingDuration,
            easing: timingFunction,
            direction: 'reverse',
            fill: 'both'
        });

        animation.onfinish = () => {
            page.dataset.modalState = 'closed';
            card.style.opacity = 1;
            card.classList.remove('card--opened');
            jQuery('.card-slider').slick('slickPlay');
            animation.cancel();
        };
    });
    </script>

    <!-- <script src="user/assets/js/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="user/assets/js/popper.min.js"></script> -->
    <!-- <script src="user/assets/js/bootstrap.min.js"></script> -->

    <script src="user/assets/js/jquery.superslides.min.js"></script>
    <script src="user/assets/js/bootstrap-select.js"></script>
    <script src="user/assets/js/inewsticker.js"></script>
    <script src="user/assets/js/bootsnav.js"></script>
    <script src="user/assets/js/images-loded.min.js"></script>
    <script src="user/assets/js/isotope.min.js"></script>
    <script src="user/assets/js/owl.carousel.min.js"></script>
    <script src="user/assets/js/baguetteBox.min.js"></script>
    <script src="user/assets/js/form-validator.min.js"></script>
    <script src="user/assets/js/contact-form-script.js"></script>
    <script src="user/assets/js/custom.js"></script>

</body>

</html>