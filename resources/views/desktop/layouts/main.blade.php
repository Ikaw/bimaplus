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

    <!-- FANCY -->
    <link href="https://gitcdn.xyz/repo/fancyapps/fancybox/master/dist/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://gitcdn.xyz/repo/fancyapps/fancybox/master/dist/jquery.fancybox.js" type="application/javascript"></script>

    <style type="text/css">
        body{
            background-color: #9A3C70;
            font-size: 0.8rem;
            font-family: "HelveticaNeueLTStdLt";
            width: 100vw;
            height: auto;
            /*margin: auto;*/
            /*min-width: 600px;*/
            /*max-width: 2000px;*/
            /*background-position: center center;*/
            background-image: url(@yield('background'));
            background-repeat: no-repeat;
            /*background-size: 100vh;*/
            /*background-position: center center;*/
            position: absolute;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            overflow-x: hidden;
            /*overflow-y: hidden;*/
            @yield('background_1')
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

        .bg{
            /*background-image: url(@yield('background'));
            background-repeat: no-repeat;
            /*background-size: 100vh;*/
            /*background-position: center center;
            position: fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;*/
            /*max-width: 100%;*/
            /*max-height: 100%;*/
            /*overflow-x: hidden;*/
            /*background-attachment: fixed;*/
            /*background-position: 50% 0%;*/
            /*overflow-y: hidden;*/
            /*position: fixed;*/
           /* min-height: 100%;
            min-width: 1024px;
            width: 100%;
            height: auto;*/
            /*top: 0;*/
            /*left: 0;*/
            /*height: auto;*/
            /*width: auto;*/
            /*box-sizing: border-box;
            padding: 10px 20px;*/

        }

        h5{
            font-family: "HelveticaNeueLTStdLt";
        }

        .font-black{
            color:  #000000 !important;
        }

        .navbar-desktop{
            padding: 30px;
        }

        .nav-link {
            /*display: block;*/
            padding: .5em .5em !important;
        }

        a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer-desktop {
            /*padding-bottom: 80px;*/
            padding: 30px;
            /*position: relative;*/
            bottom: 0px;
        }

        .home-desktop{
            /*position: absolute;*/
            height: 70vh;
            /*width: 100vw;*/
            padding:30px;
        }

        .btn-play{
            position: relative;
            left: 570px;
            top: 70px;
        }

        #btn-plus-1{
            position: absolute;
            left: 320px;
            top: 80px;
        }

        #btn-plus-2{
            position: absolute;
            left: 360px;
            top: 200px;
        }

        #btn-plus-3{
            position: absolute;
            left: 630px;
            top: 180px;
        }

        #btn-plus-4{
            position: absolute;
            left: 920px;
            top: 170px;
        }

        .font-white{
            color: #ffffff;
        }

        .title{
            font-size: 70px;
            font-family: "HelveticaNeueLTStdLtBold";
        }

        .about{
            height: 70vh;
            padding-top: 80px;
        }

        .dass{
            height: 70vh;
            padding-top: 70px;
            padding-left: 50px;
        }

        .fitur{
            height: 70vh;
            padding-left: 70px;
            padding-bottom: 70px;
        }

        .font-12{
            padding-left: 20px;
        }

        .faq{
            /*position: relative;*/
            padding-left: 350px;
            height: auto;
        }

        .faq-content{
            padding-left: 100px;
            padding-right: 60px;
        }

        .dent{
            height: 70vh;
            padding-top: 70px;
            padding-left: 200px;
        }

        .cncdesk{
            height: 70vh;
            padding-top: 100px;
            padding-left: 210px;
        }

        .ncodesk{
            height: 70vh;
            padding-top: 50px;
            padding-left: 150px;
        }

        .form-nco{
            background-color: #ffffff;
            margin-left: 250px;
            margin-right: 250px;
            padding: 30px;
            border : 1px solid #ffffff;
            border-radius: 1rem;
        }

        /*.carousel-indicators{
            position: fixed !important;
            bottom:10;
        }*/

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

        .navbar-landing{
            padding-top: 20px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .icon-bima{
             padding-right: 30px;

        }

        .footer-desktop {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
        }

        .list-icon-black{
            padding-left: 40px;
        }

        .list-icon-black-door{
            padding-left: 40px;
            padding-top: 40px;
        }

        .moto{
           padding-right: 170px;
            padding-top: 10px;
        }

        .enter-here{
           padding-top: 20px;
           padding-right: 20px;
        }


        .landing{
           height: 100vh;
           width: 100vw;
        }

         .door{
           height: 100vh;
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
            padding-left: 10px;
            padding-bottom: 5px;
            width: 100px;
            height: 100px;
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

        .custom-control-input:checked~.custom-control-indicator {
            color: #fff;
            background-color: #B43A74;
        }

        .custom-checkbox .custom-control-indicator {
            border-radius: 1rem;
        }

        .font-red{
            color: red;
        }
    </style>

</head>

<body>
<div class="bg" id="bg">
        <!-- @include('desktop.layouts.partials.navbar') -->
        @yield('navbar')
        @yield('content')
        @yield('footer')

        <!-- @include('desktop.layouts.partials.footer') -->
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

    <script>
        var dw = document.getElementById('btn-plus-1');
        var dass = document.getElementById('btn-plus-2');
        var dcc = document.getElementById('btn-plus-3');
        var nco = document.getElementById('btn-plus-4');
        var tvc = document.getElementById('btn-play');

        $("#btn-plus-1").mouseover(function(){
            // $("#btn-plus-2").hide();
            // $("#btn-plus-3").hide();
            // $("#btn-plus-4").hide();
            // $("#btn-play").hide();
            $("#btn-plus-1").css("left", "230px");
            dw.src = 'images/desktop/d-btn-dw.png';
            dass.src = 'images/desktop/d-btn-plus-bw.png';
            dcc.src = 'images/desktop/d-btn-plus-bw.png';
            nco.src = 'images/desktop/d-btn-plus-bw.png';
            tvc.src = 'images/desktop/d-btn-play-bw.png';

            $("body").css("background-image", "url('images/desktop/d-dw-bw.png')");
        });
        $("#btn-plus-1").mouseout(function(){
            // $("#btn-plus-2").show();
            // $("#btn-plus-3").show();
            // $("#btn-plus-4").show();
            // $("#btn-play").show();
            $("#btn-plus-1").css("left", "320px");
            dw.src = 'images/desktop/d-btn-plus.png';
            dass.src = 'images/desktop/d-btn-plus.png';
            dcc.src = 'images/desktop/d-btn-plus.png';
            nco.src = 'images/desktop/d-btn-plus.png';
            tvc.src = 'images/desktop/d-btn-play.png';
            $("body").css("background-image", "url('images/desktop/d-home.png')");
        });

        $("#btn-plus-2").mouseover(function(){
            // $("#btn-plus-1").hide();
            // $("#btn-plus-3").hide();
            // $("#btn-plus-4").hide();
            // $("#btn-play").hide();
            // dw.background-image = 'images/desktop/d-dw-bw.png';
            dass.src = 'images/desktop/d-btn-dass.png';
            dw.src = 'images/desktop/d-btn-plus-bw.png';
            // dass.src = 'images/desktop/d-btn-plus-bw.png';
            dcc.src = 'images/desktop/d-btn-plus-bw.png';
            nco.src = 'images/desktop/d-btn-plus-bw.png';
            tvc.src = 'images/desktop/d-btn-play-bw.png';
            $("body").css("background-image", "url('images/desktop/d-dass-bw.png')");
        });
        $("#btn-plus-2").mouseout(function(){
            // $("#btn-plus-1").show();
            // $("#btn-plus-3").show();
            // $("#btn-plus-4").show();
            // $("#btn-play").show();
            dass.src = 'images/desktop/d-btn-plus.png';
            dw.src = 'images/desktop/d-btn-plus.png';
            // dass.src = 'images/desktop/d-btn-plus.png';
            dcc.src = 'images/desktop/d-btn-plus.png';
            nco.src = 'images/desktop/d-btn-plus.png';
            tvc.src = 'images/desktop/d-btn-play.png';
            $("body").css("background-image", "url('images/desktop/d-home.png')");
        });

        $("#btn-plus-3").mouseover(function(){
            // $("#btn-plus-2").hide();
            // $("#btn-plus-1").hide();
            // $("#btn-plus-4").hide();
            // $("#btn-play").hide();
            dcc.src = 'images/desktop/d-btn-dcc.png';
            dw.src = 'images/desktop/d-btn-plus-bw.png';
            dass.src = 'images/desktop/d-btn-plus-bw.png';
            // dcc.src = 'images/desktop/d-btn-plus-bw.png';
            nco.src = 'images/desktop/d-btn-plus-bw.png';
            tvc.src = 'images/desktop/d-btn-play-bw.png';
            // dw.background-image = 'images/desktop/d-dw-bw.png';
            $("body").css("background-image", "url('images/desktop/d-dcc-bw.png')");
        });
        $("#btn-plus-3").mouseout(function(){
            // $("#btn-plus-2").show();
            // $("#btn-plus-1").show();
            // $("#btn-plus-4").show();
            // $("#btn-play").show();
            dcc.src = 'images/desktop/d-btn-plus.png';
            dw.src = 'images/desktop/d-btn-plus.png';
            dass.src = 'images/desktop/d-btn-plus.png';
            // dcc.src = 'images/desktop/d-btn-plus.png';
            nco.src = 'images/desktop/d-btn-plus.png';
            tvc.src = 'images/desktop/d-btn-play.png';
            $("body").css("background-image", "url('images/desktop/d-home.png')");
        });

        $("#btn-plus-4").mouseover(function(){
            // $("#btn-plus-2").hide();
            // $("#btn-plus-3").hide();
            // $("#btn-plus-1").hide();
            // $("#btn-play").hide();
            nco.src = 'images/desktop/d-btn-nco.png';
            dw.src = 'images/desktop/d-btn-plus-bw.png';
            dass.src = 'images/desktop/d-btn-plus-bw.png';
            dcc.src = 'images/desktop/d-btn-plus-bw.png';
            // nco.src = 'images/desktop/d-btn-plus-bw.png';
            tvc.src = 'images/desktop/d-btn-play-bw.png';
            // dw.background-image = 'images/desktop/d-dw-bw.png';
            $("body").css("background-image", "url('images/desktop/d-nco-bw.png')");
        });
        $("#btn-plus-4").mouseout(function(){
            // $("#btn-plus-2").show();
            // $("#btn-plus-3").show();
            // $("#btn-plus-1").show();
            // $("#btn-play").show();
            nco.src = 'images/desktop/d-btn-plus.png';
            dw.src = 'images/desktop/d-btn-plus.png';
            dass.src = 'images/desktop/d-btn-plus.png';
            dcc.src = 'images/desktop/d-btn-plus.png';
            // nco.src = 'images/desktop/d-btn-plus.png';
            tvc.src = 'images/desktop/d-btn-play.png';
            $("body").css("background-image", "url('images/desktop/d-home.png')");
        });

        $("#btn-play").mouseover(function(){
            // $("#btn-plus-2").hide();
            // $("#btn-plus-3").hide();
            // $("#btn-plus-1").hide();
            // $("#btn-plus-4").hide();
            // dw.background-image = 'images/desktop/d-dw-bw.png';
            dw.src = 'images/desktop/d-btn-plus-bw.png';
            dass.src = 'images/desktop/d-btn-plus-bw.png';
            dcc.src = 'images/desktop/d-btn-plus-bw.png';
            nco.src = 'images/desktop/d-btn-plus-bw.png';
            // tvc.src = 'images/desktop/d-btn-play-bw.png';
            $("body").css("background-image", "url('images/desktop/d-tvc.png')");
        });
        $("#btn-play").mouseout(function(){
            // $("#btn-plus-2").show();
            // $("#btn-plus-3").show();
            // $("#btn-plus-1").show();
            // $("#btn-plus-4").show();
            dw.src = 'images/desktop/d-btn-plus.png';
            dass.src = 'images/desktop/d-btn-plus.png';
            dcc.src = 'images/desktop/d-btn-plus.png';
            nco.src = 'images/desktop/d-btn-plus.png';
            // tvc.src = 'images/desktop/d-btn-play.png';
            $("body").css("background-image", "url('images/desktop/d-home.png')");
        });

    </script>

</body>

</html>
