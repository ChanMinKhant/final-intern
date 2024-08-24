<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title> {{-- call directive --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('css/site.css') }}">
    <link rel="stylesheet" href="{{ url('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- php --}}
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .nav-link {
            font-size: 1em;
        }

        .container {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .btn {
            padding: 10px 20px;
            cursor: pointer;
        }

        .navbar {
            padding: 0;
            margin: 0;
        }

        li {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .nav-item {
            position: relative;
            display: inline-block;
        }

        .btn-outline-success {
            border: 1px solid #28a745;
            background-color: white;
            color: #28a745;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-outline-success:hover {
            background-color: #28a745;
            color: white;
        }

        .dropdown {
            display: none;
            position: absolute;
            background-color: #343a40;
            min-width: 130px;
            margin: 0;
            padding: 0;
        }

        .dropdown li {
            padding: 10px 14px;
        }

        .dropdown li a {
            color: white;
            text-decoration: none;
            display: block;
        }

        .dropdown li a:hover {
            background-color: #f1f1f1;

        }

        .nav-item:hover .dropdown {
            display: block;
        }

        .nav-item {
            font-size: 0.8em;
        }

        .dropdown-item:hover {
            background-color: #495057;
        }

        .title {
            background-color: #f2f2f2;
            color: #333;
            text-align: center;
            padding: 2px 0;
            /* position: -webkit-sticky; */
            /* For Safari */
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .title-text {
            margin: 0;
            /* padding: 10px; */
        }

        .navbar {
            background-color: #444;
            text-align: center;
            /* position: -webkit-sticky; */
            /* For Safari */
            position: sticky;
            top: 40px;
            /* Height of the title */
            z-index: 100;
        }
    </style>


</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <div class="title">
        <h2 class="title-text" style="text-shadow: 20px;"><strong>Cattle Farming Information Website : Everything You
                Need To
                Know</strong>
        </h2>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand">
                <img src="data:image/jpeg;base64,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"
                    alt="Logo" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/homeMy"><b>ပင်မ</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutMy"><b>အကြောင်းအရာ</b></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="/cattleMy" aria-expanded="false">
                            <b>နွားအမျိုးအစားများ</b>
                        </a>
                        <ul class="dropdown">
                            <li><a class="dropdown-item" href="/dairyMy">နို့စားနွား</a></li>
                            <li><a class="dropdown-item" href="/beefMy">အသားစားနွား</a></li>
                            <li><a class="dropdown-item" href="/draftMy">ခိုင်းနွား</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galleryMy"><b>ဓာတ်ပုံများ</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tipsMy"><b>အကြံပြုချက်များ</b></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link dropdown-toggle" href="/generalMy" aria-expanded="false">
                            <b>အ‌ထွေထွေဗဟုသုတ</b>
                        </a>
                        <ul class="dropdown">
                            <li><a class="dropdown-item" href="/nutritionMy">အခြေခံအာဟာရဗေဒ</a></li>
                            <li><a class="dropdown-item" href="/calfMy">နွားကလေးပြုစုခြင်း</a></li>
                            <li><a class="dropdown-item" href="/cropsMy">နွားစာပင်စိုက်ပျိုးခြင်း</a></li>
                            <li><a class="dropdown-item" href="/breedingMy">မျိုးပွားခြင်း</a></li>
                            <li><a class="dropdown-item" href="/healthMy">ကျန်းမာရေး</a></li>
                            <li><a class="dropdown-item" href="/managementMy">ခြံစီမံခန့်ခွဲမှု</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contactMy"><b>ဆက်သွယ်ရန်</b></a>
                    </li>

                </ul>
                {{-- <button style="font-size: 0.8em;" class="btn "><a href="/"
                        class="text-primary"><b>ဘာသာစကားပြောင်းရန်?</b></a></button> --}}
                        <li class="nav-item ">
                            <a class="nav-link btn  me-2" href="/" aria-expanded="false">
                                <u><b>ဘာသာစကားပြောင်းရန်?</b></u>
                            </a>
                            <ul class="dropdown">
                            <ul class="dropdown">
                                <li><a class="dropdown-item" href="{{ route('lang.change', ['locale' => 'my']) }}">Burmese</a></li>
                                <li><a class="dropdown-item" href="{{ route('lang.change', ['locale' => 'en']) }}">English</a></li>
                            </ul>
                        </li>
            </div>
        </div>
    </nav>


    @yield('content')

    <footer class="footer mt-5">
        <div class="container">
            <p class="text-center mb-0">© 2024 Cattle Farming in Myanmar. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
