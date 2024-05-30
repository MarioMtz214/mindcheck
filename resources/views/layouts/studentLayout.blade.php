@extends('layouts.main')

@section('content')

    <div class="flex flex-col w-full">
        <div class="flex flex-row">
            <x-banner />
            <div class="w-1/6 flex pl-2 justify-start items-center bg-gray-50">
                <img class="w-36" src="../../images/MindCheck.png" alt="">
            </div>

            <div class="w-5/6 ">
                @livewire('navigation-menu')
            </div>
        </div>

        <div class="w-full">
            
            @yield('body')
        </div>
        

    </div>
    

        {{-- <div class="p-4 flex flex-1">  
            @yield('body')
        </div> --}}

@endsection
