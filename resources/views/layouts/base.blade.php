<!DOCTYPE html>
<html lang="en" xmlns:livewire="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8" />
        <title>Imamsadiq Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">
        <!-- App css -->
        <link href="/assets/css/config/modern/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="/assets/css/config/modern/app-rtl.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
        <!-- icons -->
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        @livewireStyles()
    </head>
    <body class="loading auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <div class="auth-logo">
                                <a href="index.html" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="../assets/images/logo-dark.png" alt="" height="22">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="../assets/images/logo-light.png" alt="" height="22">
                                    </span>
                                </a>
                            </div>
                        </div>

                        {{ $slot }}



                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3 text-white">Imam Sadiq Online Seminary -Hawzah Seminary</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i> The Website of Imam Sadiq (peace be upon him) seminary offers virtual and distance learning of seminary courses in Persian, English and Urdu.
A free seminary institution with all the necessary resources (specialized professors, educational semesters, exercises, exams, questions and answers, etc.) <i class="mdi mdi-format-quote-close"></i>
                </p>
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->

    <!-- Vendor js -->
    <script src="/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.min.js"></script>
    @livewireScripts()
    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
