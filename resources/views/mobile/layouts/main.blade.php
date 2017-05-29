<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="mozila">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">

    <link href="../css/full-slider.css" rel="stylesheet">
    <style type="text/css">

        body{
            background-color: #9A3C70;
            font-family: "HelveticaNeueLTStdLt";
        }

        @font-face {
            font-family: "HelveticaNeueLTStdLt";
            src: url('../assets/font/HelveticaNeueLTStdLt.otf') format('otf'),
                url('../assets/font/HelveticaNeueLTStdLt.eot#') format('eot'),
                url('../assets/font/HelveticaNeueLTStdLt.ttf') format('truetype'),
                url('../assets/font/HelveticaNeueLTStdLt.woff') format('woff');
        }

        @font-face {
            font-family: "HelveticaNeueLTStdLtBold";
            src: url('../assets/font/HelveticaNeue-Bold.ttf') format('truetype');
        }

        .carousel-indicators{
            position: fixed !important;
            bottom:10;
        }

        .carousel-indicators li {
            max-width: 10px !important;
            height: 10px !important;
            background-color: gray !important;
            border-radius: 10px;
        }

        .carousel-indicators .active {
            background-color: #464A4C !important;
        }

        .carousel-control-next, .carousel-control-prev {
            align-items: center;
            height: 0px;
            margin-top: 190px;
        }

        .custom-control-input:checked~.custom-control-indicator {
            color: #fff;
            background-color: #B43A74;
        }

        .custom-checkbox .custom-control-indicator {
            border-radius: 1rem;
        }

        h1{
            font-family: "HelveticaNeueLTStdLtBold";
        }

        h2{
            font-family: "HelveticaNeueLTStdLtBold";
        }

        h3{
            font-family: "HelveticaNeueLTStdLtBold";
        }

        h6{
            font-family: "HelveticaNeueLTStdLtBold";
        }

        .white{
            background-color: #FFFFFF;
        }

        .font-white{
            color: #FFFFFF;
        }

        .footer{
            position: relative;
            /*bottom: 0px;*/
            padding-left: 20px;
            padding-right: 20px;
        }

        .footer-index{
            position: relative;
            bottom: 0px;
            padding-bottom: 20px;
            padding-right: 50px;
        }

        .navbar-toggler {
            z-index: 1;
        }

        .font-12{
            font-size: 12px;
            padding-right: 10px;
            padding-left: 10px;
        }
        p > .font-12{
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .font-14{
            font-size: 14px;
        }


        .form-control-sm, .input-group-sm>.form-control, .input-group-sm>.input-group-addon, .input-group-sm>.input-group-btn>.btn {
            padding: .25rem 1rem;
            border-radius: 2rem;
            -webkit-border-radius: 2rem;
        }

        select {
            /*-webkit-appearance: none;*/
            -webkit-border-radius: 2rem;
        }

        .form-control {
            color: #292b2c;
            border: 1px solid #292b2c;
        }

        .form-group {
            margin-bottom: .1rem;
        }

        label {
            margin-bottom: 0px;
            font-size: .9rem;
            font-family: "HelveticaNeueLTStdLtBold";
        }

        input[type=file]{
            width : 100%;
            color : transparent;
            /*background-color: #9A3C70;*/
            font-size: .7rem;
        }

        .file-nco{
            padding-top: 5px;
            margin-bottom: .1rem;
            border : 1px solid #292b2c;
            border-radius: 1rem;
            padding-left: 2px;
            padding-bottom: 5px;
            width: 80px;
            height: 80px;
        }

        .btn-primary {
            color: #FFFFFF;
            background-color: #B23972;
            border-color: #B23972;
        }

        .btn-group-sm>.btn, .btn-sm {
            padding: .25rem 1.5rem;
            font-size: 1.3rem;
            border-radius: 1rem;
        }

        @media (max-width: 767px) {
            .door{
                height: 100vh;
                width: 100vw;
            }

            .home{
                /*font-family: "HelveticaNeueLTStdLt";*/
                padding-top: 40px;
                padding-bottom: 30px;
                /*z-index:3;*/
                text-shadow: 3px 3px 6px gray;
                height: 100vh;
                /*overflow-x: scroll;*/
            }

            /*.home::-webkit-scrollbar {*/
            /*    width: 12px;*/
            /*}*/

            /*.home::-webkit-scrollbar-track {*/
            /*    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); */
            /*    border-radius: 10px;*/
            /*}*/

            /*.home::-webkit-scrollbar-thumb {*/
            /*    border-radius: 10px;*/
            /*    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); */
            /*}*/

            .fitur{
                height: 100vh;
                padding-top: 10px;
                padding-left: 10px;
                padding-right: 10px;
            }

            .reg-nco{
                height: 100vh;
                padding-top: 20px;
                padding-bottom: 20px;
                padding-left: 40px;
                padding-right: 40px;
            }

            .utama{
                padding-top: 60px;
                /*padding-bottom: 10px;*/
                height: 100vh;
                /*width:100vw;*/
            }

            .home{
                /*font-family: "HelveticaNeueLTStdLt";*/
                /*padding-top: 100px;*/
                /*padding-bottom: 30px;*/
                /*z-index:3;*/
                /*text-shadow: 3px 3px 6px gray;*/
            }

            .about{
                /*font-family: "HelveticaNeueLTStdLt";*/
                padding-top: 15px;
                /*padding-bottom: 100%;*/
                /*position: relative;*/

            }

            .dsc{
                height:100vh;
                /*font-family: "HelveticaNeueLTStdLt";*/
                padding-top: 50px;
                padding-left: 30px;
                padding-right: 30px;
            }

            .dent{
                height:100vh;
                /*font-family: "HelveticaNeueLTStdLt";*/
                padding-top: 50px;
                padding-left: 30px;
                padding-right: 30px;

            }

            .nco{
                height:100vh;
                /*font-family: "HelveticaNeueLTStdLt";*/
                padding-top: 50px;
                padding-left: 30px;
                padding-right: 30px;
            }

            .cnc{
                height:100vh;
                /*font-family: "HelveticaNeueLTStdLt";*/
                padding-top: 50px;
                padding-left: 30px;
                padding-right: 30px;
            }

            .faq{
                height:100vh;
                /*font-family: "HelveticaNeueLTStdLt";*/
                padding-top: 140px;
                padding-left: 35px;
                padding-right: 35px;
            }

            .arrow{
                padding-top:70px;
            }

            .about{
                height:100vh;
                /*font-family: "HelveticaNeueLTStdLt";*/
                /*padding-top: 50px;*/
            }

            .bg{
                background-image: url(@yield('background'));
                background-repeat: no-repeat;
                /*background-size: 100vh;*/
                background-position: center center;
                position: relative;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                max-width: 100%;
                overflow-x: hidden;
                overflow-y: hidden;

            }

            .bg-gray{
                background-image: url(@yield('background-grayscale'));
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
                position: relative;
            }

            .floating{
                position: absolute;
                top: 0px;
                background-color: #9A3C70;
                width: 100%;
                margin-left: 0px;
                padding-top: 5px;
                z-index:4;
            }

            .menu-mobile{
                padding-left: 5px;
                padding-right: 25px;
                padding-bottom: 10px;
                /*font-family: "HelveticaNeueLTStdLt";*/
                font-size: 100%;
            }

            ul {
                list-style-type: none !important;
            }

            .navbar1{
                padding-top: 15px;
                padding-left: 15px;
                /*padding-left: -10px;*/
                width: 100%;
            }

            .navbar2{
                padding-top: 15px;
                padding-right: 15px;
                /*padding-left: -10px;*/
                width: 100%;
            }

            .close{
                padding-top: 10px;
                padding-right: 30px;
                width: 100%;
            }
        }

        /*@media (max-width: 575px) {
            .about{
                padding-top: 70px;
            }
        }*/

        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
                z-index: 3;
            }
        }
    </style>


</head>

<body>
<div class="bg">
    @yield('navbar')
    @yield('content')
</div>



    <!-- Bootstrap core JavaScript -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/tether/tether.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../assets/vendor/chart.js/Chart.min.js"></script>
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../assets/js/sb-admin.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script type="text/javascript">
        $("#navbar-mobile").on('click', function() {
           $("#navbar-content-mobile").fadeIn();
           $("#navbar-mobile").hide();
        });

        $("#close").on('click', function() {
           $("#navbar-content-mobile").fadeOut();
           $("#navbar-mobile").show();
        });
    </script>
    @yield('scripts')
</body>

</html>
