<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">    
    <link rel="stylesheet" href="{{asset('assets/css/main-custom.css')}}?v={{ time() }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/toastify/toastify.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/all.min.css')}}">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/vendors/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/timepicker/jquery.timepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/select2/dist/css/select2.min.css')}}">


    @yield('page-style')
    
</head>
<body>