<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form by Tooplate</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">
    <style type="text/css">
        .subpage {
        padding-top: 44px;
    }

        .subpage #header {
            background: #6cc091;
            top: 0;
            height: 44px;
            line-height: 44px;
            position: fixed;
        }

    #header {
        color: #fff;
        cursor: default;
        height: 3.25em;
        left: 0;
        line-height: 3.25em;
        position: absolute;
        text-align: right;
        top: 2em;
        width: 100%;
        z-index: 10001;

    }

        #header .inner {
            margin: 0 auto;
            position: relative;
                width: 90%;
        }

        #header .logo {
            color: #ffffff;
            display: inline-block;
            font-weight: 400;
            height: inherit;
            left: 0;
            line-height: inherit;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 0;
            font-size: 1em;
        }

            #header .logo strong {
                color: #6cc091;
                font-weight: 200;
                font-size: 2em;


            }

        #header a {
            -moz-transition: color 0.2s ease-in-out;
            -webkit-transition: color 0.2s ease-in-out;
            -ms-transition: color 0.2s ease-in-out;
            transition: color 0.2s ease-in-out;
            display: inline-block;
            padding: 0 0.75em;
            color: inherit;
            text-decoration: none;
            font-size: 1em;
        }

            #header a:hover {
                color: #ffffff;
            }

            #header a:last-child {
                padding-right: 0;
            }

            #header a.navPanelToggle {
                display: none;
                text-decoration: none;
                height: 4em;
                width: 4em;
                z-index: 10003;
            }

                #header a.navPanelToggle .fa {
                    font-size: 1.25em;
                }

                @media screen and (max-width: 980px) {

                    #header a.navPanelToggle {
                        display: inline-block;
                    }

                }

            @media screen and (max-width: 736px) {

                #header a {
                    padding: 0 0.5em;
                }

            }

    @media screen and (max-width: 980px) {

        #header {
            top: 1em;
        }

    }

    @media screen and (max-width: 736px) {

        #header {
            top: .5em;
        }

    }

    @media screen and (max-width: 480px) {

        #header {
            font-size: .9em;
        }

    }

/* Nav */

    @media screen and (max-width: 980px) {

        #nav {
            display: none;
        }

    }

    #navPanel {
        -moz-transform: translatex(20em);
        -webkit-transform: translatex(20em);
        -ms-transform: translatex(20em);
        transform: translatex(20em);
        -moz-transition: -moz-transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
        -webkit-transition: -webkit-transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
        -ms-transition: -ms-transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
        transition: transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
        -webkit-overflow-scrolling: touch;
        visibility: hidden;
        overflow-y: auto;
        position: fixed;
        right: 0;
        top: 0;
        background: #6cc091;
        color: #daefe3;
        height: 100%;
        max-width: 80%;
        width: 20em;
        padding: 0.5em 1.25em;
        z-index: 10010;
    }

        #navPanel.visible {
            -moz-transform: translatex(0);
            -webkit-transform: translatex(0);
            -ms-transform: translatex(0);
            transform: translatex(0);
            box-shadow: 0 0 1.5em 0 rgba(0, 0, 0, 0.2);
            visibility: visible;
        }

        #navPanel a:not(.close) {
            border-top: solid 1px #8dcca9;
            color: #daefe3;
            font-weight: 600;
            display: block;
            padding: 0.75em 0;
            text-decoration: none;
            font-weight: 400;
        }

            #navPanel a:not(.close):first-child {
                border: none;
            }

        #navPanel .close {
            text-decoration: none;
            -moz-transition: color 0.2s ease-in-out;
            -webkit-transition: color 0.2s ease-in-out;
            -ms-transition: color 0.2s ease-in-out;
            transition: color 0.2s ease-in-out;
            -webkit-tap-highlight-color: transparent;
            border: 0;
            color: #daefe3;
            cursor: pointer;
            display: block;
            height: 4em;
            padding-right: 1.25em;
            position: absolute;
            right: 0;
            text-align: right;
            top: 0;
            vertical-align: middle;
            width: 5em;
        }

            #navPanel .close:before {
                -moz-osx-font-smoothing: grayscale;
                -webkit-font-smoothing: antialiased;
                font-family: FontAwesome;
                font-style: normal;
                font-weight: normal;
                text-transform: none !important;
                content: '\f00d';
                width: 3em;
                height: 3em;
                line-height: 3em;
                display: block;
                position: absolute;
                right: 0;
                top: 0;
                text-align: center;
            }

            #navPanel .close:hover {
                color: inherit;
            }
            #nav {
    
    background-color: transparent !important;}

    </style>

</head>

<body id="login">
    <header id="header">
                <div class="inner">
                    <a href="index.php" class="logo"><strong>HostelBillingSystem</strong> by ULAB</a>
                    <nav id="nav">
                        <a href="register.php">Registration</a>
                        <a href="about.php">About us</a>
                        <a href="login.php">Log in</a>
                        <a href="index.php">Contact us</a>

                    </nav>
                    <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
                </div>
            </header>

    <div class="container">
        <div class="row tm-register-row tm-mb-35">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-l">
                <form action="loggedin.php" method="post" class="tm-bg-black p-5 h-100">
                    <div class="input-field">
                        <input placeholder="Username" id="username" name="username" type="text" class="validate">
                    </div>
                    <div class="input-field mb-5">
                        <input placeholder="Password" id="password" name="password" type="password" class="validate">
                    </div>
                    <div class="tm-flex-lr">
                        <a href="#" class="white-text small">Forgot Password?</a>
                        <button type="submit" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-r">
                <header class="font-weight-light tm-bg-black p-5 h-100">
                    <h3 class="mt-0 text-white font-weight-light">Your Login</h3>
                    <p>Put the Username and Password to get into the system</p>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ml-auto mr-0 text-center">
                <a href="register.php" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Create New Account</a>
            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12 text-center">
                <p class="d-inline-block tm-bg-black white-text py-2 tm-px-5">
                    
                    
                &copy; Department of CSE, <a href="https://sse.ulab.edu.bd/cse/">ULAB</a>. Images: <a href="https://google.com"> Google</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>