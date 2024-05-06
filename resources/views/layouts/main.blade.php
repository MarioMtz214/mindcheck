<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> 
        <title>Mindcheck</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap');
            
            h1{
                font-family: 'League Spartan', sans-serif;
            }

            #fondo{
                background-image: url('/images/fondostudent.png');
                background-size: cover;
                background-repeat: no-repeat;
                /* background-attachment: fixed; */
            }
        </style>
        
        @vite(['resources/css/app.css', 'resources/js/app.js']) 
        @livewireStyles
    </head>

    <body x-data="{ open: false }"  class="flex flex-row w-full">
        @yield('content')

        @livewireScripts
    </body>
</html>