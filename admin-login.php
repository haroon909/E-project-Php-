<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />



</head>
<style>
    /* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

    * {
        margin: 0px auto;
        padding: 0px;
        text-align: center;
        font-family: "Open Sans", sans-serif;
    }

    .cotn_principal {
        position: absolute;
        width: 100%;
        display: flex;
        height: 100%;
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#cfd8dc+0,607d8b+100,b0bec5+100 */
        background: #cfd8dc;
        /* Old browsers */
        background: -moz-linear-gradient(-45deg,
                #cfd8dc 0%,
                #607d8b 100%,
                #b0bec5 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(-45deg,
                #cfd8dc 0%,
                #607d8b 100%,
                #b0bec5 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(135deg,
                #cfd8dc 0%,
                #607d8b 100%,
                #b0bec5 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cfd8dc', endColorstr='#b0bec5', GradientType=1);
        /* IE6-9 fallback on horizontal gradient */
    }

    .cont_centrar {
        display: flex;
        align-self: center;
        width: 100%;
    }

    .cont_login {
        position: relative;
        width: 640px;
    }

    .cont_back_info {
        position: relative;
        float: left;
        width: 640px;
        height: 280px;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 1px 10px 30px -10px rgba(0, 0, 0, 0.5);
    }

    .cont_forms {
        position: absolute;
        overflow: hidden;
        top: 0px;
        left: 0px;
        width: 320px;
        height: 280px;
        background-color: #eee;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }

    .cont_forms_active_login {
        box-shadow: 1px 10px 30px -10px rgba(0, 0, 0, 0.5);
        height: 420px;
        top: -60px;
        left: 0px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }

    .cont_forms_active_sign_up {
        box-shadow: 1px 10px 30px -10px rgba(0, 0, 0, 0.5);
        height: 420px;
        top: -60px;
        left: 320px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }

    .cont_img_back_grey {
        position: absolute;
        width: 950px;
        top: -80px;
        left: -116px;
    }

    .cont_img_back_grey>img {
        width: 100%;
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        opacity: 0.2;
        animation-name: animar_fondo;
        animation-duration: 20s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }

    .cont_img_back_ {
        position: absolute;
        width: 950px;
        top: -80px;
        left: -116px;
    }

    .cont_img_back_>img {
        width: 100%;
        opacity: 0.3;
        animation-name: animar_fondo;
        animation-duration: 20s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }

    .cont_forms_active_login>.cont_img_back_ {
        top: -20px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }

    .cont_forms_active_sign_up>.cont_img_back_ {
        top: -20px;
        left: -435px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }

    .cont_info_log_sign_up {
        position: absolute;
        width: 640px;
        height: 280px;
        top: 0px;
        z-index: 1;
    }

    .col_md_login {
        position: relative;
        float: left;
        width: 50%;
    }

    .col_md_login>h2 {
        font-weight: 400;
        margin-top: 70px;
        color: #757575;
    }

    .col_md_login>p {
        font-weight: 400;
        margin-top: 15px;
        width: 80%;
        color: #37474f;
    }

    .btn_login {
        background-color: #26c6da;
        border: none;
        padding: 10px;
        width: 200px;
        border-radius: 3px;
        box-shadow: 1px 5px 20px -5px rgba(0, 0, 0, 0.4);
        color: #fff;
        margin-top: 10px;
        cursor: pointer;
    }

    .col_md_sign_up {
        position: relative;
        float: left;
        width: 50%;
    }

    .cont_ba_opcitiy>h2 {
        font-weight: 400;
        color: #fff;
    }

    .cont_ba_opcitiy>p {
        font-weight: 400;
        margin-top: 15px;
        color: #fff;
    }

    /* ----------------------------------
background text    
------------------------------------
 */
    .cont_ba_opcitiy {
        position: relative;
        background-color: rgba(120, 144, 156, 0.55);
        width: 80%;
        border-radius: 3px;
        margin-top: 60px;
        padding: 15px 0px;
    }

    .btn_sign_up {
        background-color: #ef5350;
        border: none;
        padding: 10px;
        width: 200px;
        border-radius: 3px;
        box-shadow: 1px 5px 20px -5px rgba(0, 0, 0, 0.4);
        color: #fff;
        margin-top: 10px;
        cursor: pointer;
    }

    .cont_forms_active_sign_up {
        z-index: 2;
    }

    @keyframes animar_fondo {
        from {
            -webkit-transform: scale(1) translate(0px);
            -moz-transform: scale(1) translate(0px);
            -ms-transform: scale(1) translate(0px);
            -o-transform: scale(1) translate(0px);
            transform: scale(1) translate(0px);
        }

        to {
            -webkit-transform: scale(1.5) translate(50px);
            -moz-transform: scale(1.5) translate(50px);
            -ms-transform: scale(1.5) translate(50px);
            -o-transform: scale(1.5) translate(50px);
            transform: scale(1.5) translate(50px);
        }
    }

    @-o-keyframes identifier {
        from {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        to {
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5);
        }
    }

    @-moz-keyframes identifier {
        from {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        to {
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5);
        }
    }

    @keyframes identifier {
        from {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        to {
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5);
        }
    }

    .cont_form_login {
        position: absolute;
        opacity: 0;
        display: none;
        width: 320px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }

    .cont_forms_active_login {
        z-index: 2;
    }

    .cont_form_sign_up {
        position: absolute;
        width: 320px;
        float: left;
        opacity: 0;
        display: none;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }

    .cont_form_sign_up>input {
        text-align: left;
        padding: 15px 5px;
        margin-left: 10px;
        margin-top: 20px;
        width: 260px;
        border: none;
        color: #757575;
    }

    .cont_form_sign_up>h2 {
        margin-top: 50px;
        font-weight: 400;
        color: #757575;
    }

    .cont_form_login>input {
        padding: 15px 5px;
        margin-left: 10px;
        margin-top: 20px;
        width: 260px;
        border: none;
        text-align: left;
        color: #757575;
    }

    .cont_form_login>h2 {
        margin-top: 110px;
        font-weight: 400;
        color: #757575;
    }

    .cont_form_login>a,
    .cont_form_sign_up>a {
        color: #757575;
        position: relative;
        float: left;
        margin: 10px;
        margin-left: 30px;
    }
</style>

<body>
    <div class="cotn_principal">
        <div class="cont_centrar">

            <div class="cont_login">
                <div class="cont_info_log_sign_up">
                    <div class="col_md_login">
                        <div class="cont_ba_opcitiy">

                            <h2>Admin Panel</h2>

                            <button class="btn_login" onclick="change_to_login()">Login</button>
                        </div>
                    </div>
                    <div class="col_md_sign_up">
                        <div class="cont_ba_opcitiy">
                            <h2>Doctor Panel</h2>




                            <button class="btn_sign_up" onclick="change_to_sign_up()">Login</button>
                        </div>
                    </div>
                </div>


                <div class="cont_back_info">
                    <div class="cont_img_back_grey">
                        <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
                    </div>

                </div>
                <div class="cont_forms">
                    <div class="cont_img_back_">
                        <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
                    </div>
                    <div class="cont_form_login">
                        <a href="#" onclick="hidden_login_and_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                        <h2>Admin login</h2>
                        <form action="loginfunc.php" method="post">
                            <input type="text" name="email" placeholder="Email" />
                            <input type="password" name="password" placeholder="Password" />
                            <button class="btn_login" name="adlogin" type="submit" onclick="change_to_login()">LOGIN</button>
                        </form>
                    </div>

                    <div class="cont_form_sign_up">
                        <a href="#" onclick="hidden_login_and_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                        <h2>Doctor Login</h2>
                        <form action="loginfunc.php" method="post">
                            <input type="text" name="email" placeholder="Email" />
                            <input type="password" name="password" placeholder="Password" />
                            <button class="btn_login" name="drlogin" type="submit" onclick="change_to_login()">LOGIN</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script>
        /* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

        const time_to_show_login = 400;
        const time_to_hidden_login = 200;

        function change_to_login() {
            document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";
            document.querySelector('.cont_form_login').style.display = "block";
            document.querySelector('.cont_form_sign_up').style.opacity = "0";

            setTimeout(function() {
                document.querySelector('.cont_form_login').style.opacity = "1";
            }, time_to_show_login);

            setTimeout(function() {
                document.querySelector('.cont_form_sign_up').style.display = "none";
            }, time_to_hidden_login);
        }

        const time_to_show_sign_up = 100;
        const time_to_hidden_sign_up = 400;

        function change_to_sign_up(at) {
            document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
            document.querySelector('.cont_form_sign_up').style.display = "block";
            document.querySelector('.cont_form_login').style.opacity = "0";

            setTimeout(function() {
                document.querySelector('.cont_form_sign_up').style.opacity = "1";
            }, time_to_show_sign_up);

            setTimeout(function() {
                document.querySelector('.cont_form_login').style.display = "none";
            }, time_to_hidden_sign_up);


        }

        const time_to_hidden_all = 500;

        function hidden_login_and_sign_up() {

            document.querySelector('.cont_forms').className = "cont_forms";
            document.querySelector('.cont_form_sign_up').style.opacity = "0";
            document.querySelector('.cont_form_login').style.opacity = "0";

            setTimeout(function() {
                document.querySelector('.cont_form_sign_up').style.display = "none";
                document.querySelector('.cont_form_login').style.display = "none";
            }, time_to_hidden_all);

        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>