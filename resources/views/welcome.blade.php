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

    <!-- CSS Link-->
    <link
      href="{{asset('front-end/assets/css/navbar-sidebar.css')}}"
      id="app-style"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="{{asset('front-end/assets/css/style.css')}}"
      id="app-style"
      rel="stylesheet"
      type="text/css"
    />

    <link href="{{asset('front-end/assets/css/modals.css')}}" rel="stylesheet" />
    <link href="{{asset('front-end/assets/css/finance-popup-modal.css')}}" rel="stylesheet" />


       <!-- Include DataTables CSS -->
       <link
       rel="stylesheet"
       href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"
     />
     <!-- Include DataTables Buttons CSS -->
     <link
       rel="stylesheet"
       href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css"
     />



    @vite('resources/js/app.js')
    <!-- Styles -->

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div id="app"></div>


    @vite('resources/js/app.js')


    <script src="{{asset('front-end/assets/js/fontawesome.js')}}"></script>
    <script src="{{asset('front-end/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front-end/assets/js/metismenujs.min.js')}}"></script>
    <script src="{{asset('front-end/assets/js/simplebar.min.js')}}"></script>
    <script src="{{asset('front-end/assets/js/feather.min.js')}}"></script>
    <script src="{{asset('front-end/assets/js/full-screen-toggle.js')}}"></script>
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>
    <script src="{{asset('front-end/assets/js/finance-popup-modal.js')}}"></script>
    <script src="{{asset('front-end/assets/js/datatables.js')}}"></script>


        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Include DataTables JS -->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <!-- Include DataTables Buttons JS -->
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <!-- Include JSZip for Excel export -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <!-- Include pdfmake for PDF export -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <!-- Include HTML5 export buttons -->
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <!-- Include Print button -->
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

        <!-- Deathpicker js -->
        <script src="{{asset('front-end/assets/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('front-end/assets/js/dethpicker.js')}}" type="text/javascript"></script>

</body>
</html>
