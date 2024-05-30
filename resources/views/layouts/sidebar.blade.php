@extends('layouts.main')

@section('content')
    {{-- side bar --}}
    <div class="w-1/5  transition duration-500" :class="{ 'block': open, 'hidden': !open }">
        <x-adminSidebar></x-adminSidebar>

    </div>

    <div class="w-1/12 h-screen bg-red-500 rounded-br-3xl" :class="{ 'block': !open, 'hidden': open }">
        <div class="flex relative justify-end items-end ">
            <div class="w-full flex flex-row pl-3 justify-center 2xl:justify-center items-start pt-10">
                <h1 class="font-extralight sm:text-sm xl:text-lg 2xl:text-2xl text-white">MindCheck</h1>
            </div>
            <button @click="open = !open"
                class="relative w-5 h-5 left-2 xl:-top-1 2xl:-top-2 bg-red-500 border-2 border-white hover:cursor-pointer hover:-translate-x-1 active:translate-x-1 transition duration-300">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" d="M9 18L15 12L9 6" stroke="white"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <div class="flex flex-col mt-4 2xl:mt-9">
            
            <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <div class="h-10 2xl:h-16 flex justify-center items-center hover:translate-x-1 active:translate-x-0 hover:cursor-pointer hover:drop-shadow-xl transition duration-300">
                    <svg width="26" class="w-8 h-8 2xl:w-10 2xl:h-10 hover:drop-shadow-xl" height="26" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 17.25L23 3.83331L40.25 17.25V38.3333C40.25 39.35 39.8461 40.325 39.1272 41.0439C38.4084 41.7628 37.4333 42.1666 36.4167 42.1666H9.58333C8.56667 42.1666 7.59165 41.7628 6.87276 41.0439C6.15387 40.325 5.75 39.35 5.75 38.3333V17.25Z" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17.25 42.1667V23H28.75V42.1667" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </a>
            <a href="{{ route('admin.users.index') }}">
                <div
                class="h-10 2xl:h-16 flex justify-center items-center hover:translate-x-1 active:translate-x-0 hover:cursor-pointer hover:drop-shadow-xl transition duration-300">
                <svg width="26" class="w-8 h-8 2xl:w-10 2xl:h-10 hover:drop-shadow-xl" height="26"
                    viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M32.5834 40.25V36.4167C32.5834 34.3833 31.7757 32.4333 30.3379 30.9955C28.9001 29.5577 26.9501 28.75 24.9167 28.75H9.58341C7.55009 28.75 5.60004 29.5577 4.16226 30.9955C2.72448 32.4333 1.91675 34.3833 1.91675 36.4167V40.25"
                        stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M17.2499 21.0833C21.4841 21.0833 24.9166 17.6508 24.9166 13.4167C24.9166 9.18248 21.4841 5.75 17.2499 5.75C13.0157 5.75 9.58325 9.18248 9.58325 13.4167C9.58325 17.6508 13.0157 21.0833 17.2499 21.0833Z"
                        stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M44.0833 40.25V36.4166C44.082 34.718 43.5166 33.0678 42.4759 31.7252C41.4351 30.3827 39.978 29.4238 38.3333 28.9991"
                        stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M30.6667 5.99915C32.3159 6.42139 33.7776 7.38049 34.8214 8.72524C35.8652 10.07 36.4318 11.7239 36.4318 13.4262C36.4318 15.1286 35.8652 16.7825 34.8214 18.1272C33.7776 19.472 32.3159 20.4311 30.6667 20.8533"
                        stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                </div>
            </a>
            <div
                class="h-10 2xl:h-16 flex justify-center items-center hover:translate-x-1 active:translate-x-0 hover:cursor-pointer  hover:drop-shadow-xl transition duration-300">
                <svg width="26" class="w-8 h-8 2xl:w-10 2xl:h-10 hover:drop-shadow-xl" height="26"
                    viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.66675 40.25V26.8333" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M7.66675 19.1667V5.75" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M23 40.25V23" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M23 15.3333V5.75" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M38.3333 40.25V30.6667" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M38.3333 23V5.75" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1.91675 26.8333H13.4167" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M17.25 15.3333H28.75" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M32.5833 30.6667H44.0833" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div
                class="h-10 2xl:h-16 flex justify-center items-center hover:translate-x-1 active:translate-x-0 hover:cursor-pointer hover:drop-shadow-xl transition duration-300">
                <svg width="26" class="w-8 h-8 2xl:w-10 2xl:h-10 hover:drop-shadow-xl" height="26"
                    viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M40.25 30.6667V15.3333C40.2493 14.6611 40.0719 14.0009 39.7354 13.4189C39.399 12.8369 38.9155 12.3536 38.3333 12.0175L24.9167 4.35085C24.3339 4.0144 23.6729 3.83728 23 3.83728C22.3271 3.83728 21.6661 4.0144 21.0833 4.35085L7.66667 12.0175C7.0845 12.3536 6.60096 12.8369 6.26455 13.4189C5.92814 14.0009 5.75069 14.6611 5.75 15.3333V30.6667C5.75069 31.3389 5.92814 31.9991 6.26455 32.5811C6.60096 33.1631 7.0845 33.6464 7.66667 33.9825L21.0833 41.6492C21.6661 41.9856 22.3271 42.1628 23 42.1628C23.6729 42.1628 24.3339 41.9856 24.9167 41.6492L38.3333 33.9825C38.9155 33.6464 39.399 33.1631 39.7354 32.5811C40.0719 31.9991 40.2493 31.3389 40.25 30.6667Z"
                        stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M14.375 8.06915L23 13.0525L31.625 8.06915" stroke="#FAFAFA" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M14.375 37.9308V27.9833L5.75 23" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M40.25 23L31.625 27.9833V37.9308" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M6.26758 13.34L23.0001 23.0192L39.7326 13.34" stroke="#FAFAFA" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M23 42.32V23" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div
                class="h-10 2xl:h-16 flex justify-center items-center hover:translate-x-1 active:translate-x-0 hover:cursor-pointer hover:drop-shadow-xl transition duration-300">
                <svg width="25" class="w-8 h-8 2xl:w-10 2xl:h-10 hover:drop-shadow-xl" height="25"
                    viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19 24C21.7614 24 24 21.7614 24 19C24 16.2386 21.7614 14 19 14C16.2386 14 14 16.2386 14 19C14 21.7614 16.2386 24 19 24Z"
                        stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M31.1091 23.9091C30.8913 24.4026 30.8263 24.9501 30.9225 25.481C31.0188 26.0118 31.2718 26.5016 31.6491 26.8873L31.7473 26.9855C32.0516 27.2894 32.293 27.6503 32.4576 28.0476C32.6223 28.445 32.7071 28.8708 32.7071 29.3009C32.7071 29.731 32.6223 30.1569 32.4576 30.5542C32.293 30.9515 32.0516 31.3124 31.7473 31.6164C31.4433 31.9206 31.0824 32.162 30.6851 32.3267C30.2878 32.4914 29.8619 32.5762 29.4318 32.5762C29.0017 32.5762 28.5759 32.4914 28.1786 32.3267C27.7813 32.162 27.4203 31.9206 27.1164 31.6164L27.0182 31.5182C26.6325 31.1409 26.1427 30.8879 25.6119 30.7916C25.081 30.6954 24.5336 30.7604 24.04 30.9782C23.556 31.1856 23.1432 31.53 22.8525 31.9691C22.5618 32.4081 22.4057 32.9225 22.4036 33.4491V33.7273C22.4036 34.5953 22.0588 35.4277 21.4451 36.0414C20.8313 36.6552 19.9989 37 19.1309 37C18.2629 37 17.4305 36.6552 16.8167 36.0414C16.203 35.4277 15.8582 34.5953 15.8582 33.7273V33.58C15.8455 33.0384 15.6702 32.5131 15.355 32.0724C15.0398 31.6318 14.5994 31.2961 14.0909 31.1091C13.5974 30.8913 13.0499 30.8263 12.519 30.9225C11.9882 31.0188 11.4984 31.2718 11.1127 31.6491L11.0145 31.7473C10.7106 32.0516 10.3497 32.293 9.95235 32.4576C9.55505 32.6223 9.12918 32.7071 8.69909 32.7071C8.269 32.7071 7.84313 32.6223 7.44583 32.4576C7.04853 32.293 6.68758 32.0516 6.38364 31.7473C6.07935 31.4433 5.83796 31.0824 5.67326 30.6851C5.50856 30.2878 5.42379 29.8619 5.42379 29.4318C5.42379 29.0017 5.50856 28.5759 5.67326 28.1786C5.83796 27.7813 6.07935 27.4203 6.38364 27.1164L6.48182 27.0182C6.85906 26.6325 7.11212 26.1427 7.20837 25.6119C7.30462 25.081 7.23964 24.5336 7.02182 24.04C6.81439 23.556 6.46996 23.1432 6.03094 22.8525C5.59192 22.5618 5.07747 22.4057 4.55091 22.4036H4.27273C3.40475 22.4036 2.57232 22.0588 1.95856 21.4451C1.3448 20.8313 1 19.9989 1 19.1309C1 18.2629 1.3448 17.4305 1.95856 16.8167C2.57232 16.203 3.40475 15.8582 4.27273 15.8582H4.42C4.96163 15.8455 5.48692 15.6702 5.92758 15.355C6.36824 15.0398 6.7039 14.5994 6.89091 14.0909C7.10873 13.5974 7.17371 13.0499 7.07746 12.519C6.98121 11.9882 6.72815 11.4984 6.35091 11.1127L6.25273 11.0145C5.94844 10.7106 5.70705 10.3497 5.54235 9.95235C5.37765 9.55505 5.29288 9.12918 5.29288 8.69909C5.29288 8.269 5.37765 7.84313 5.54235 7.44583C5.70705 7.04853 5.94844 6.68758 6.25273 6.38364C6.55668 6.07935 6.91762 5.83796 7.31492 5.67326C7.71223 5.50856 8.13809 5.42379 8.56818 5.42379C8.99827 5.42379 9.42414 5.50856 9.82144 5.67326C10.2187 5.83796 10.5797 6.07935 10.8836 6.38364L10.9818 6.48182C11.3675 6.85906 11.8573 7.11212 12.3881 7.20837C12.919 7.30462 13.4664 7.23964 13.96 7.02182H14.0909C14.5749 6.81439 14.9877 6.46996 15.2784 6.03094C15.5691 5.59192 15.7252 5.07747 15.7273 4.55091V4.27273C15.7273 3.40475 16.0721 2.57232 16.6858 1.95856C17.2996 1.3448 18.132 1 19 1C19.868 1 20.7004 1.3448 21.3142 1.95856C21.9279 2.57232 22.2727 3.40475 22.2727 4.27273V4.42C22.2748 4.94656 22.4309 5.46101 22.7216 5.90003C23.0123 6.33905 23.4251 6.68348 23.9091 6.89091C24.4026 7.10873 24.9501 7.17371 25.481 7.07746C26.0118 6.98121 26.5016 6.72815 26.8873 6.35091L26.9855 6.25273C27.2894 5.94844 27.6503 5.70705 28.0476 5.54235C28.445 5.37765 28.8708 5.29288 29.3009 5.29288C29.731 5.29288 30.1569 5.37765 30.5542 5.54235C30.9515 5.70705 31.3124 5.94844 31.6164 6.25273C31.9206 6.55668 32.162 6.91762 32.3267 7.31492C32.4914 7.71223 32.5762 8.13809 32.5762 8.56818C32.5762 8.99827 32.4914 9.42414 32.3267 9.82144C32.162 10.2187 31.9206 10.5797 31.6164 10.8836L31.5182 10.9818C31.1409 11.3675 30.8879 11.8573 30.7916 12.3881C30.6954 12.919 30.7604 13.4664 30.9782 13.96V14.0909C31.1856 14.5749 31.53 14.9877 31.9691 15.2784C32.4081 15.5691 32.9225 15.7252 33.4491 15.7273H33.7273C34.5953 15.7273 35.4277 16.0721 36.0414 16.6858C36.6552 17.2996 37 18.132 37 19C37 19.868 36.6552 20.7004 36.0414 21.3142C35.4277 21.9279 34.5953 22.2727 33.7273 22.2727H33.58C33.0534 22.2748 32.539 22.4309 32.1 22.7216C31.6609 23.0123 31.3165 23.4251 31.1091 23.9091Z"
                        stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

        </div>

    </div>


    <div class="flex flex-1 flex-col bg-gray-100">
        <x-banner />

        @livewire('navigation-menu')

        <div class="p-4 flex flex-1">
            @yield('body')
        </div>
    </div>
@endsection
