<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
    <title>TSUL ADMISSION</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- END META SECTION -->
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" href="{{ asset('admin/js/vendor/dropify/dist/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/styles.css') }}">

</head>
<body>

<!-- APP WRAPPER -->
<div class="app">

    <!-- START APP CONTAINER -->
    <div class="app-container">

        <!-- START APP CONTENT -->
        <div class="app-content">
            @include('site.includes.header')

            <!-- START PAGE CONTAINER -->
            <div class="container container-boxed">
                @yield('content')
            </div>
            <!-- END PAGE CONTAINER -->

        </div>
        <!-- END APP CONTENT -->

    </div>
    <!-- END APP CONTAINER -->

    <!-- START APP FOOTER -->
    @include('site.includes.footer')
    <!-- END APP FOOTER -->
</div>
<!-- END APP WRAPPER -->
<script type="text/javascript" src="{{ asset('admin/js/vendor/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/jquery/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/bootstrap/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js') }}"></script>

<script type="text/javascript" src="{{ asset('admin/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/app_plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/app_demo.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/app_demo_dashboard.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/dropify/dist/js/dropify.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('admin/js/vendor/bootstrap-select/bootstrap-select.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/select2/select2.full.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/bootstrap-daterange/daterangepicker.js')}}"></script>


<script type="text/javascript" src="{{ asset('admin/js/albatross.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#agree1").change(function() {
            if(this.checked) {
                $('#startbutton1').css('display','block');
            }
            else $('#startbutton1').css('display','none');

        });
        $("#agree2").change(function() {
            if(this.checked) {
                $('#startbutton2').css('display','block');
            }
            else $('#startbutton2').css('display','none');

        });
        $("#scholarship_has").click(function() {
            $('.scholarship_div').css('display','block');
            $('#scholarship_title').attr('required','true');
        });
        $("#scholarship_no").click(function() {
            $('.scholarship_div').css('display','none');
            $('#scholarship_title').removeAttr('required');
            $('#scholarship_title').val('');
        });
        $("#experienc_has").click(function() {
            $('.work_experience').css('display','block');
            $('#work_experience').attr('required','true');
            $('#spanjon').css('display','block');
        });
        $("#experience_no").click(function() {
            $('.work_experience').css('display','none');
            $('#work_experience').removeAttr('required');
            $('#work_experience').val('');
            $('#spanjon').css('display','none');
        });
    })
</script>
 @yield('js_last')
</body>
</html>
