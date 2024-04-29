<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/landingStyle">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap');
        
        .bg-mindcheck{
            background-image: url("../../images/bg-mindCheckH.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top;
        }

        h1{
            font-family: 'League Spartan', sans-serif;
        }
    </style>

    <title>MindCheck</title>
</head>
<body class="bg-mindcheck w-screen h-screen flex justify-center items-center bg-gray-100">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen  selection:bg-red-500 selection:text-white bg-mindcheck">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    {{-- <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a> --}}

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-100 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <div class="flex flex-row justify-center items-center w-5/6 space-x-12 ">
        <div class="flex flex-col place-items-center w-5/12  h-5/6 "> 

                {{-- logo --}}
            <div class=" flex justify-center items-center ">
                <img class="w-36" src="../../images/MindCheck.png" alt="">
            </div>
                
                {{-- slogan --}}
            <div class="pt-2 ">
                <h1 class="text-4xl font-extralight">Explora, aprende y crece con MindCheck.</h1>
                <h1 class="text-4xl font-extralight mt-6 text-red-500">Tu aula virtual de diversión inteligente.</h1>
            </div>

        </div>
            
            {{-- login --}}
        <div class="h-5/6 w-5/12"> 
            <div class="flex justify-center items-center">
                <h1 class="text-4xl font-thin">Bienvenidos</h1>
            </div>
             {{-- login form --}}
            <div class=" flex flex-row justify-center m-auto px-4 w-5/6 pt-2">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
        
                    <div>
                        <x-label for="email" value="{{ __('Usuario') }}" />
                        <x-input id="email" class="block mt-1 w-full focus:border-red-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>
        
                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>
        
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
        
                        <x-button class="ms-4 bg-red-500 hover:bg-red-400 active:bg-red-600">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>