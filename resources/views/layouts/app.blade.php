<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Imamsadiq Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Imamsadiq Online" name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <link href="/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="/assets/css/config/modern/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet"/>
    <link href="/assets/css/config/modern/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet"/>

{{--    <link href="/assets/css/config/modern/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet"/>
    <link href="/assets/css/config/modern/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet"/>--}}

    <!-- icons -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- icons -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="/assets/css/dropify.min.css">

    @livewireStyles()


</head>

<!-- body start -->
<body class="loading" data-layout-mode="detached" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

<!-- Begin page -->
<div id="wrapper">

@include('admin.navbar')
@include('admin.sidebar')


<!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <div class="content">
        @yield("content")


        <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="">AliMajidi</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">About Us</a>
                                <a href="javascript:void(0);">Help</a>
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>


<!-- App js -->
<script src="/assets/js/vendor.min.js"></script>

<!-- Select2 js-->
<script src="/assets/libs/select2/js/select2.min.js"></script>
{{--<!-- Dropzone file uploads-->--}}
<script src="/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="../assets/libs/dropify/js/dropify.min.js"></script>

<!-- Quill js -->
<script src="/assets/libs/quill/quill.min.js"></script>

<!-- Init js-->
<script src="/assets/js/pages/form-fileuploads.init.js"></script>

<!-- Init js -->
<script src="/assets/js/pages/add-product.init.js"></script>

<script src="/assets/js/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#ckeditor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


<!-- App js-->
<script src="/assets/js/app.min.js"></script>
<script>

    $("#customCheck1").change(function() {
        if (this.checked) {
            $(".form-check-input").each(function() {
                this.checked=true;
            });
        } else {
            $(".form-check-input").each(function() {
                this.checked=false;
            });
        }
    });
</script>

@livewireScripts()
<script src="{{ mix('js/app.js') }}"></script>

@yield('script')

</body>
</html>
