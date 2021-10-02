<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Sales Dashboard | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ url('./assets/css/dashlite.css?ver=2.6.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{ url('./assets/css/theme.css?ver=2.6.0')}}">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('backend.include.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('backend.include.header')
                <!-- main header @e -->
                <!-- content @s -->
                @yield('content')
                <!-- content @e -->
                <!-- footer @s -->
                @include('backend.include.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ url('./assets/js/bundle.js?ver=2.6.0')}}"></script>
    <script src="{{url('./assets/js/scripts.js?ver=2.6.0')}}"></script>
    <script src="{{url('./assets/js/charts/gd-default.js?ver=2.6.0')}}"></script>
</body>

</html>