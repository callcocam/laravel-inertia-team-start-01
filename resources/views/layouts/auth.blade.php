<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel-Auth</title>
     @routes
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('_dist/admin/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('_dist/admin/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('_dist/admin/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('_dist/admin/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('_dist/admin/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('_dist/admin/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('_dist/admin/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('_dist/admin/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('_dist/admin/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('_dist/admin/app-assets/css/pages/authentication.css') }}">
    <!-- END: Page CSS-->
    <link rel="stylesheet" href="{{ asset('_dist/admin/css/app.css') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('_dist/admin/images/logo/favicon.png') }}">
</head>
    <body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page">
     @call
     <script src="{{ asset('/_dist/admin/js/app.js') }}" defer></script>
    </body>
</html>
