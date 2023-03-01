<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('front/index.php', $context);
        }
    ),

    new Route(
        '/home',
        function ($context) {
            return Viewer::view('front/index.php', $context);
        }
    ),

    new Route(
        '/about',
        function ($context) {
            return Viewer::view('front/about.php', $context);
        }
    ),

    new Route(
        '/contact',
        function ($context) {
            return Viewer::view('front/contact.php', $context);
        }
    ),

    new Route(
        '/gallery',
        function ($context) {
            return Viewer::view('front/gallery.php', $context);
        }
    ),

    new Route(
        '/track',
        function ($context) {
            return Viewer::view('front/track.php', $context);
        }
    ),

    new Route(
        '/services',
        function ($context) {
            return Viewer::view('front/services.php', $context);
        }
    ),

    // admin side

    new Route(
        '/manager',
        function ($context) {
            return Viewer::view('back/index.php', $context);
        }
    ),

    new Route(
        '/newpackage',
        function ($context) {
            return Viewer::view('back/addpackage.php', $context);
        }
    ),

    new Route(
        '/depositgold',
        function ($context) {
            return Viewer::view('back/addgold.php', $context);
        }
    ),

    new Route(
        '/gold',
        function ($context) {
            return Viewer::view('back/viewgold.php', $context);
        }
    ),
    new Route(
        '/packages',
        function ($context) {
            return Viewer::view('back/viewpackage.php', $context);
        }
    ),

    new Route(
        '/editpackage',
        function ($context) {
            return Viewer::view('back/editp.php', $context);
        }
    ),

    new Route(
        '/editgold',
        function ($context) {
            return Viewer::view('back/editg.php', $context);
        }
    ),

    new Route(
        '/vaultauthenticator',
        function ($context) {
            return Viewer::view('back/login2.php', $context);
        }
    ),

    new Route(
        '/vault',
        function ($context) {
            return Viewer::view('back/vault.php', $context);
        }
    ),

    new Route(
        '/chnagepassword',
        function ($context) {
            return Viewer::view('back/password.php', $context);
        }
    ),

    new Route(
        '/login',
        function ($context) {
            return Viewer::view('back/auth.php', $context);
        }
    ),
    new Route(
        '/logout',
        function ($context) {
            return Viewer::view('back/logout.php', $context);
        }
    ),

    new Route(
        '/appsettings',
        function ($context) {
            return Viewer::view('back/app.php', $context);
        }
    ),

    new Route(
        '/addstatus',
        function ($context) {
            return Viewer::view('back/addstatus.php', $context);
        }
    ),

    new Route(
        '/viewstatus',
        function ($context) {
            return Viewer::view('back/viewstatus.php', $context);
        }
    ),
]);
$router->launch();
