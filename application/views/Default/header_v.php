<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title><?php echo $title; ?></title>
        <style>
            .mdl-textfield__label:after {
                bottom: 15px;
            }
        </style>
        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="192x192" href="">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Material Design Lite">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() . NAV_ASSETS; ?>images/ios-desktop.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="<?php echo base_url() . NAV_ASSETS; ?>images/touch/ms-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#3372DF">


        <!--Charts Script from HighChart-->
        <!--<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://code.highcharts.com/stock/highstock.js"></script>
        <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
        <!-- <script src="<?php echo base_url() . NAV_ASSETS; ?>js/high.js"></script>   -->
        <link rel="shortcut icon" href="<?php echo base_url() . NAV_ASSETS; ?>images/favicon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
        <!--
        <link rel="canonical" href="http://www.example.com/">
        -->

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
        <link rel="stylesheet" href="<?php echo base_url() . NAV_ASSETS; ?>styles.css">

        <!--Notification of Call-->
        <script src="https://cdn-orig.socket.io/socket.io-1.2.0.js"></script>
        <link rel="stylesheet" href="<?php echo base_url() . NAV_ASSETS; ?>css/toastr.min.css">
        <script src="<?php echo base_url() . NAV_ASSETS; ?>js/toastr.min.js"></script>
        <script src="<?php echo base_url() . NAV_ASSETS; ?>js/toastr.js"></script>

        <!--End of Notification of Call-->



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


        <link rel="stylesheet" href="<?php echo base_url() . NAV_ASSETS; ?>css/style.css">



        <style>



            #view-source {
                position: fixed;
                display: block;
                right: 0;
                bottom: 0;
                margin-right: 40px;
                margin-bottom: 40px;
                z-index: 900;
            }
        </style>


        <script>
            function playSound() {
                var filename = "<?php echo base_url() . NAV_ASSETS; ?>coin";
                document.getElementById("sound").innerHTML = '<audio autoplay="autoplay"><source src="' + filename + '.mp3" type="audio/mpeg" /><source src="' + filename + '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename + '.mp3" /></audio>';
            }
            function td() {
                if ($("#rw1").hasClass("out")) {
                    $("#rw1").addClass("in");
                    $("#rw1").removeClass("out");
                } else {
                    $("#rw1").addClass("out");
                    $("#rw1").removeClass("in");
                }

                if ($("#rw2").hasClass("out")) {
                    $("#rw2").addClass("in");
                    $("#rw2").removeClass("out");
                } else {
                    $("#rw2").addClass("out");
                    $("#rw2").removeClass("in");
                }

                if ($("#rw3").hasClass("out")) {
                    $("#rw3").addClass("in");
                    $("#rw3").removeClass("out");
                } else {
                    $("#rw3").addClass("out");
                    $("#rw3").removeClass("in");
                }
            }
            function subt() {
                if ($("#r1").hasClass("out")) {
                    $("#r1").addClass("in");
                    $("#r1").removeClass("out");
                } else {
                    $("#r1").addClass("out");
                    $("#r1").removeClass("in");
                }
            }

            $('.tb1 > thead > tr').click(function () {
                if ($("#r1").hasClass("out")) {
                    $("#r1").addClass("in");
                    $("#r1").removeClass("out");
                } else {
                    $("#r1").addClass("out");
                    $("#r1").removeClass("in");
                }
                // row was clicked
            });


            function toggle() {
                if (document.getElementById("hidethis").style.display == 'none') {
                    document.getElementById("hidethis").style.display = '';
                } else {
                    document.getElementById("hidethis").style.display = 'none';
                }
            }




            jQuery(document).ready(function ($) {
                $("#clickable-row").click(function () {
                    if ($("#hidethis3").hasClass("out")) {
                        $("#hidethis3").addClass("in");
                        $("#hidethis3").removeClass("out");
                    } else {
                        $("#hidethis3").addClass("out");
                        $("#hidethis3").removeClass("in");
                    }
                });

                $("#clickable-row1").click(function () {
                    if ($("#hidethis").hasClass("out")) {
                        $("#hidethis").addClass("in");
                        $("#hidethis").removeClass("out");
                    } else {
                        $("#hidethis").addClass("out");
                        $("#hidethis").removeClass("in");
                    }
                });

                $("#thd11").click(function () {
                    if ($("#hideme").hasClass("out")) {
                        $("#hideme").addClass("in");
                        $("#hideme").removeClass("out");
                    } else {
                        $("#hideme").addClass("out");
                        $("#hideme").removeClass("in");
                    }
                });

            });
        </script>




        <style>
            #view-source {
                position: fixed;
                display: block;
                right: 0;
                bottom: 0;
                margin-right: 40px;
                margin-bottom: 40px;
                z-index: 900;
            }

            .mdl-card__supporting-text{
                width: 100%!important;
            }

            .full-width {
                width: 100%;
            }
            .demo-card-square.mdl-card {
                height: 320px;
            }
            .demo-card-square > .mdl-card__title {
                color: #fff;
                background:
                    url('<?php echo base_url() . NAV_ASSETS; ?>images/dog.png') bottom right 15% no-repeat #46B6AC;
            }

        </style>

        <script type="text/javascript">
            function home() {

                $('.nav-tabs a[href="#home"]').tab('show');
            }
            function menu1() {

                $('.nav-tabs a[href="#menu1"]').tab('show');
            }
            function menu2() {

                $('.nav-tabs a[href="#menu2"]').tab('show');
            }
            function menu3() {

                $('.nav-tabs a[href="#menu3"]').tab('show');
                abc();
                market();
            }

            $('#A').click(function () {
                // alert($(this).prop('checked'));
                if ($(this).is(':checked') == true) {
                    $('.cb').prop('checked', true);
                } else {
                    $('.cb').prop('checked', false);
                }
            });
//            document.querySelector('#progressbar1').addEventListener('mdl-componentupgraded', function () {
//                this.MaterialProgress.setProgress(25);
//            });

            $('#header').click(function () {
                $(this).nextUntil('tr.header').slideToggle(1000);
            });






            $('#tb1').on('click', 'a', function () {
                $(this).closest('tr').remove();

                //check if no more rows and remove the table
//  if ($('#paper-table tbody tr').length == 0) {
//    $('#paper-table').remove();
//  }
            });
        </script>
    </head>
    <body>

        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                <div class="mdl-layout__header-row">
                    <span class="mdl-layout-title"></span>

                    <div class="mdl-layout-spacer"></div>
                    <i id="menudemo" class="material-icons mdl-badge mdl-badge--overlap" data-badge="">add_alert</i>
                    <style type="text/css">
                        .mymenu{
                            min-height: 300px;
                            max-height: 300px;
                            overflow-y: scroll;
                        }
                        .mymenuitem{
                            min-width: 300px;
                        }
                    </style>
                    <script>
                        $(document).ready(function () {
                            var no = $("#noti_ul li").length;
                            $("#menudemo").attr("data-badge", no);
                            $("#menudemo").click(function () {
                                $("#menudemo").attr("data-badge", "0");
                            });
                        });

                    </script>

                    <script type="text/javascript">
                        
                        $.getJSON('http://<?php echo SERVER_IP;?>/rethinkDB/callAllData_API.php', function (data) {
                            for (var i = data.length-1; i >= 0; i--) {
                                $("#noti_ul").prepend("<li class='mymenuitem mdl-menu__item'>" + data[i]['type'] + " " + data[i]['code'] +  " on rate " +data[i]['rate'] + "</li>");
                            }
                            $("#menudemo").attr("data-badge", "0");
                        });
                        var socket = io.connect('http://<?php echo SERVER_IP;?>:8088');

                        socket.on('message', function (data1) {

                            var badge = $("#menudemo").attr("data-badge");
                            $("#menudemo").attr("data-badge", ++badge);
                            $("#noti_ul").prepend("<li class='mymenuitem mdl-menu__item'>" + data1.type + " " + data1.code +  " on rate " +data1.rate + "</li>");
                            playSound();
                            if (data1.type === "SELL") {
                                toastr.warning('Code : ' + data1.code + ' Price : '+ data1.rate, data1.type , {timeOut: 5000});
                            } else {
                                toastr.success('Code : ' + data1.code + ' Price : '+ data1.rate, data1.type, {timeOut: 5000});

                            }
                        });
                        
                        



                    </script>

                    <ul id="noti_ul" class="mdl-menu mymenu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menudemo">

                    </ul>



                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                        <li class="mdl-menu__item">About</li>
                        <li class="mdl-menu__item">Contact</li>
                        <li class="mdl-menu__item">Legal information</li>
                    </ul>
                    <div id="sound"></div>
                </div>
            </header>



