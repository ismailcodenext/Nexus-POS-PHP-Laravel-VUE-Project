<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NEXUS POS</title>

 <!-- App favicon -->
 <link
 rel="shortcut icon"
 href="{{asset('front-end/assets/icons/favicon.svg')}}"
 type="image/x-icon"
/>


    <!-- Bootstrap Css -->
    <link href="{{asset('front-end/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />


    <!-- Fontawesome link -->
    <link href="{{asset('front-end/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- CSS Link-->
    <link href="{{asset('front-end/assets/css/sign-in.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    <!-- Fonts -->

    @vite('resources/js/app.js')
    <!-- Styles -->

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div id="app"></div>


    @vite('resources/js/app.js')


    <script src="{{asset('front-end/assets/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
