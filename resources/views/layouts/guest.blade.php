<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-pzjw8b+qUCvNpLXRfa8hjQ5NVWv+TtDVBb6TefYDsdmFhA4/+nW6EI5uIUpoT2r8" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        body {
            background-color: #ffffff;
            /* //curiiveSet the background color to white */
        }

        #h1 {
            background-color: #000000;
            width: 100%;
        }

        /* #intro{
            margin-left: -700px;
        } */

        #intro_para {
            color: #000000;
            text-align: center;
            font-family: Fants;
            font-size: 40px;
            text-shadow: 2px 1px;
            /* margin-top: -10x; */
            padding-bottom: 5px;
            margin-top: 60px;
            cursor: pointer;
        }

        /*This is an image*/
        #chef{
            width: 45%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        #sec_para {
            color: #000000;
            font-family: cursive, sans-serif;
        }

        span {
            font-size: 20px;
            font-weight: bold;
        }

        .footer {
            background-color: #000000;
            /* Set the footer background color */
            padding: 1rem;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            color: #edf2f7;
            margin-top: 80px;
        }

        .footer a {
            margin: 0 0.5rem;
            color: #edf2f7;
            /* Set link color */
        }

        .footer i {
            color: #edf2f7;
            /* Set icon color */
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 relative">
        <div id="h1" class="absolute top-0 left-0 p-4 ">
            <h1 class="text-2xl font-bold text-white">STRATHPLUS</h1>
        </div>

        <section id="intro">
            <div class="para">
                <p id="intro_para">Where Every Bite Tells a Story</p>
                <img  id="chef" src="{{URL('images\dish.png')}}" alt="chef">
            </div>
        </section>
        <section>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-grey-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </section>

        <!-- To be adjusted later -->
        <div>
            <!-- <p id="sec_para">
                    Be among the first to savor the extraordinary with StrathPlus! <br>
                    Use code "FLAVORFUL15" for a <span>15%</span> discount on your first order. <br>
                    Don't miss out—this is your ticket to a culinary adventure like no other.
                </p> -->
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} STRATHPLUS. All rights reserved.</p>
        </div>
    </div>
</body>

</html>