<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

        <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" />
        <link rel="apple-touch-icon" href="{{ asset('logo/apple-touch-icon.png') }}">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="bg-gray-50">
        <x-layouts.navigation-dashboard/>

        <div class="flex pt-16 overflow-hidden bg-gray-50">
            <aside id="sidebar" class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width" aria-label="Sidebar">
                <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200">
                    <div class="flex flex-col flex-1 pt-10 pb-4 overflow-y-auto">
                        <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200">
                            <ul class="pb-2 space-y-2">
                                <li>
                                    <form action="#" method="GET" class="lg:hidden">
                                        <label for="mobile-search" class="sr-only">Search</label>
                                        <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                        </div>
                                        <input type="text" name="email" id="mobile-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5" placeholder="Search">
                                        </div>
                                    </form>
                                </li>

                                <li>
                                    <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 rounded-lg hover:bg-stone-950 hover:text-amber-300 group  ">
                                        

                                        <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-amber-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6.5C3 3.87479 3.02811 3 6.5 3C9.97189 3 10 3.87479 10 6.5C10 9.12521 10.0111 10 6.5 10C2.98893 10 3 9.12521 3 6.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M14 6.5C14 3.87479 14.0281 3 17.5 3C20.9719 3 21 3.87479 21 6.5C21 9.12521 21.0111 10 17.5 10C13.9889 10 14 9.12521 14 6.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 17.5C3 14.8748 3.02811 14 6.5 14C9.97189 14 10 14.8748 10 17.5C10 20.1252 10.0111 21 6.5 21C2.98893 21 3 20.1252 3 17.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14 17.5C14 14.8748 14.0281 14 17.5 14C20.9719 14 21 14.8748 21 17.5C21 20.1252 21.0111 21 17.5 21C13.9889 21 14 20.1252 14 17.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            
                                            
                                        <span class="ml-5" sidebar-toggle-item>Beranda</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 rounded-lg hover:bg-stone-950 hover:text-amber-300 group">
                                        
                                        
                                        <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-amber-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M7.4222 19.8203C7.8442 19.8203 8.1872 20.1633 8.1872 20.5853C8.1872 21.0073 7.8442 21.3493 7.4222 21.3493C7.0002 21.3493 6.6582 21.0073 6.6582 20.5853C6.6582 20.1633 7.0002 19.8203 7.4222 19.8203Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M18.6752 19.8203C19.0972 19.8203 19.4402 20.1633 19.4402 20.5853C19.4402 21.0073 19.0972 21.3493 18.6752 21.3493C18.2532 21.3493 17.9102 21.0073 17.9102 20.5853C17.9102 20.1633 18.2532 19.8203 18.6752 19.8203Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2.75 3.25L4.83 3.61L5.793 15.083C5.871 16.018 6.652 16.736 7.59 16.736H18.502C19.398 16.736 20.158 16.078 20.287 15.19L21.236 8.632C21.353 7.823 20.726 7.099 19.909 7.099H5.164" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path opacity="0.4" d="M14.126 10.7949H16.899" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            
                                          
                                        <span class="ml-5" sidebar-toggle-item>Series</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 rounded-lg hover:bg-stone-950 hover:text-amber-300 group  ">
                                        
                                        <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-amber-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.4">
                                            <path d="M13.8496 4.25V6.67" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M13.8496 17.7598V19.7838" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M13.8496 14.3239V9.50293" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7021 20C20.5242 20 22 18.5426 22 16.7431V14.1506C20.7943 14.1506 19.8233 13.1917 19.8233 12.001C19.8233 10.8104 20.7943 9.85039 22 9.85039L21.999 7.25686C21.999 5.45745 20.5221 4 18.7011 4H5.29892C3.47789 4 2.00104 5.45745 2.00104 7.25686L2 9.93485C3.20567 9.93485 4.17668 10.8104 4.17668 12.001C4.17668 13.1917 3.20567 14.1506 2 14.1506V16.7431C2 18.5426 3.4758 20 5.29787 20H18.7021Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                            
                                            


                                        <span class="ml-5" sidebar-toggle-item>Kategori</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 rounded-lg hover:bg-stone-950 hover:text-amber-300 group  ">
                                        
                                       

                                        <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-amber-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                          </svg>
                                          

                                        <span class="ml-5" sidebar-toggle-item>Resseler</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 rounded-lg hover:bg-stone-950 hover:text-amber-300 group  ">
                                        
                                        
                                        
                                        <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-amber-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                          </svg>
                                          


                                        <span class="ml-5" sidebar-toggle-item>Customer</span>
                                    </a>
                                </li>


                                
                                <li>
                                    <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 rounded-lg hover:bg-stone-950 hover:text-amber-300 group  ">
                                        
                                        
                                        <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-amber-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M15.7161 16.2227H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path opacity="0.4" d="M15.7161 12.0371H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path opacity="0.4" d="M11.2521 7.85938H8.49707" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.909 2.75C15.909 2.75 8.23198 2.754 8.21998 2.754C5.45998 2.771 3.75098 4.587 3.75098 7.357V16.553C3.75098 19.337 5.47298 21.16 8.25698 21.16C8.25698 21.16 15.933 21.157 15.946 21.157C18.706 21.14 20.416 19.323 20.416 16.553V7.357C20.416 4.573 18.693 2.75 15.909 2.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                            


                                        <span class="ml-5" sidebar-toggle-item>Pesanan</span>
                                    </a>
                                </li> 

                                <li>
                                    <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 rounded-lg hover:bg-stone-950 hover:text-amber-300 group  ">
                                        
                                        <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-amber-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.25 20H10.9598C11.0248 20.17 11.0962 20.3367 11.1738 20.5H6.25C4.73122 20.5 3.5 19.2688 3.5 17.75V6.25C3.5 4.73121 4.73121 3.5 6.25 3.5H17.75C19.2688 3.5 20.5 4.73122 20.5 6.25V11.1738C20.3367 11.0962 20.17 11.0248 20 10.9598V8.5V8H19.5H4.5H4V8.5V17.75C4 18.9926 5.00736 20 6.25 20ZM4 7V7.5H4.5H19.5H20V7V6.25C20 5.00736 18.9926 4 17.75 4H6.25C5.00736 4 4 5.00736 4 6.25V7ZM21.2072 14.7929L21.2071 14.7928C20.8165 14.4024 20.1835 14.4024 19.7929 14.7928L19.7928 14.7929L16.5 18.0858L15.2072 16.7929L15.2071 16.7928C14.8165 16.4024 14.1835 16.4024 13.7929 16.7928L13.7928 16.7929C13.4024 17.1835 13.4024 17.8165 13.7928 18.2071L13.7928 18.2072L15.7928 20.2072L15.7929 20.2072C16.1835 20.5976 16.8165 20.5976 17.2071 20.2072L17.2072 20.2072L21.2072 16.2072L21.2072 16.2071C21.5976 15.8165 21.5976 15.1835 21.2072 14.7929ZM22.5 17.5C22.5 20.2615 20.2615 22.5 17.5 22.5C14.7385 22.5 12.5 20.2615 12.5 17.5C12.5 14.7385 14.7385 12.5 17.5 12.5C20.2615 12.5 22.5 14.7385 22.5 17.5Z" fill="#999999" stroke="currentColor"/>
                                        </svg>


                                        <span class="ml-5" sidebar-toggle-item>Moments</span>
                                    </a>
                                </li>

                                    
                                    

                                <li>
                                    <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 rounded-lg hover:bg-stone-950 hover:text-amber-300 group  ">
                                        
                                        <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-amber-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2777 13.8896C17.9524 13.8896 18.5188 14.4465 18.4156 15.1128C17.8103 19.0328 14.4545 21.9433 10.4072 21.9433C5.92928 21.9433 2.2998 18.3138 2.2998 13.837C2.2998 10.1486 5.10191 6.71279 8.25665 5.93595C8.93454 5.76858 9.62928 6.24542 9.62928 6.94332C9.62928 11.6717 9.78823 12.8949 10.6861 13.5602C11.584 14.2254 12.6398 13.8896 17.2777 13.8896Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M21.6921 9.95121C21.7458 6.91331 18.0142 2.01647 13.4669 2.10068C13.1132 2.107 12.83 2.40173 12.8142 2.75437C12.6995 5.25226 12.8542 8.4891 12.9406 9.95647C12.9669 10.4133 13.3258 10.7723 13.7816 10.7986C15.29 10.8849 18.6448 11.0028 21.1069 10.6302C21.4416 10.5796 21.6869 10.2891 21.6921 9.95121Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>


                                        <span class="ml-5" sidebar-toggle-item>Profil Brand</span>
                                    </a>
                                </li>
                                    

                                <li>
                                    <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 rounded-lg hover:bg-stone-950 hover:text-amber-300 group  ">
                                        
                                        <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-amber-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.21 7.899V16.05C21.21 19.07 19.32 21.2 16.3 21.2H7.65C4.63 21.2 2.75 19.07 2.75 16.05V7.899C2.75 4.879 4.64 2.75 7.65 2.75H16.3C19.32 2.75 21.21 4.879 21.21 7.899Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path opacity="0.4" d="M5.28125 16.4303L6.80925 14.8173C7.34025 14.2543 8.22525 14.2273 8.78925 14.7573C8.80625 14.7743 9.72625 15.7093 9.72625 15.7093C10.2812 16.2743 11.1882 16.2833 11.7532 15.7293C11.7902 15.6933 14.0872 12.9073 14.0872 12.9073C14.6792 12.1883 15.7422 12.0853 16.4622 12.6783C16.5102 12.7183 18.6803 14.9453 18.6803 14.9453" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M10.3127 9.13291C10.3127 10.1019 9.52769 10.8869 8.55869 10.8869C7.58969 10.8869 6.80469 10.1019 6.80469 9.13291C6.80469 8.16391 7.58969 7.37891 8.55869 7.37891C9.52769 7.37991 10.3127 8.16391 10.3127 9.13291Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>


                                        <span class="ml-5" sidebar-toggle-item>Galeri</span>
                                    </a>
                                </li>

                                
                                    
                                <li>
                                    <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 rounded-lg hover:bg-stone-950 hover:text-amber-300 group  ">
                                        
                                        <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-amber-300" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.8125 10.0215H0.771484" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.88477 7.10547L12.8128 10.0215L9.88477 12.9375" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path opacity="0.4" d="M5.50391 5.38848V4.45548C5.50391 2.42048 7.15291 0.771484 9.18891 0.771484H14.0729C16.1029 0.771484 17.7479 2.41648 17.7479 4.44648V15.5865C17.7479 17.6215 16.0979 19.2715 14.0629 19.2715H9.17791C7.14891 19.2715 5.50391 17.6255 5.50391 15.5965V14.6545" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>


                                        <span class="ml-5" sidebar-toggle-item>Keluar</span>
                                    </a>
                                </li>

                                    
                                    
                                {{-- <li>
                                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100  " aria-controls="dropdown-layouts" data-collapse-toggle="dropdown-layouts">
                                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900  " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                                        </svg>
                                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Layouts</span>
                                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                    <ul id="dropdown-layouts" class="hidden py-2 space-y-2">
                                        <li>
                                            <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  ">Stacked</a>
                                        </li>
                                        <li>
                                            <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  ">Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100  " aria-controls="dropdown-crud" data-collapse-toggle="dropdown-crud">
                                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900  " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M.99 5.24A2.25 2.25 0 013.25 3h13.5A2.25 2.25 0 0119 5.25l.01 9.5A2.25 2.25 0 0116.76 17H3.26A2.267 2.267 0 011 14.74l-.01-9.5zm8.26 9.52v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.615c0 .414.336.75.75.75h5.373a.75.75 0 00.627-.74zm1.5 0a.75.75 0 00.627.74h5.373a.75.75 0 00.75-.75v-.615a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625zm6.75-3.63v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75zM17.5 7.5v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75z"></path>
                                        </svg>
                                        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>CRUD</span>
                                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                    <ul id="dropdown-crud" class="space-y-2 py-2 hidden">
                                        <li>
                                            <a href="" class="text-base text-gray-900 rounded-lg flex items-center my-4 p-2 group hover:bg-gray-100 transition duration-75 pl-11  ">Products</a>
                                        </li>
                                        <li>
                                            <a href="" class="text-base text-gray-900 rounded-lg flex items-center my-4 p-2 group hover:bg-gray-100 transition duration-75 pl-11  ">Users</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group  ">
                                        <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900  " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M8.34 1.804A1 1 0 019.32 1h1.36a1 1 0 01.98.804l.295 1.473c.497.144.971.342 1.416.587l1.25-.834a1 1 0 011.262.125l.962.962a1 1 0 01.125 1.262l-.834 1.25c.245.445.443.919.587 1.416l1.473.294a1 1 0 01.804.98v1.361a1 1 0 01-.804.98l-1.473.295a6.95 6.95 0 01-.587 1.416l.834 1.25a1 1 0 01-.125 1.262l-.962.962a1 1 0 01-1.262.125l-1.25-.834a6.953 6.953 0 01-1.416.587l-.294 1.473a1 1 0 01-.98.804H9.32a1 1 0 01-.98-.804l-.295-1.473a6.957 6.957 0 01-1.416-.587l-1.25.834a1 1 0 01-1.262-.125l-.962-.962a1 1 0 01-.125-1.262l.834-1.25a6.957 6.957 0 01-.587-1.416l-1.473-.294A1 1 0 011 10.68V9.32a1 1 0 01.804-.98l1.473-.295c.144-.497.342-.971.587-1.416l-.834-1.25a1 1 0 01.125-1.262l.962-.962A1 1 0 015.38 3.03l1.25.834a6.957 6.957 0 011.416-.587l.294-1.473zM13 10a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span class="ml-5" sidebar-toggle-item>Settings</span>
                                    </a>
                                </li>
                                <li>
                                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100  " aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900  " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd"></path></svg>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Pages</span>
                                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                    <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                                        <li>
                                            <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  ">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  ">Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  ">404 not found</a>
                                        </li>
                                        <li>
                                            <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  ">500 server error</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100  " aria-controls="dropdown-auth" data-collapse-toggle="dropdown-auth">
                                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900  " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                                        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Authentication</span>
                                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                    <ul id="dropdown-auth" class="hidden py-2 space-y-2">
                                        <li>
                                            <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  ">Sign in</a>
                                        </li>
                                        <li>
                                            <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  ">Sign up</a>
                                        </li>
                                        <li>
                                            <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  ">Forgot password</a>
                                        </li>
                                        <li>
                                            <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  ">Reset password</a>
                                        </li>
                                        <li>
                                            <a href="" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  ">Profile lock</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100  " aria-controls="dropdown-playground" data-collapse-toggle="dropdown-playground">
                                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900  " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z"></path>
                                        </svg>
                                        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Playground</span>
                                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                    <ul id="dropdown-playground" class="space-y-2 py-2 hidden">
                                        <li>
                                            <a href="" class="text-base text-gray-900 rounded-lg flex items-center my-4 p-2 group hover:bg-gray-100 transition duration-75 pl-11  ">Stacked</a>
                                        </li>
                                        <li>
                                            <a href="" class="text-base text-gray-900 rounded-lg flex items-center my-4 p-2 group hover:bg-gray-100 transition duration-75 pl-11  ">Sidebar</a>
                                        </li>
                                    </ul>
                                </li> --}}
                            </ul>
                        {{-- <div class="pt-2 space-y-2">
                            <a href="" target="_blank" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group  ">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900  " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                                <span class="ml-5" sidebar-toggle-item>GitHub Repository</span>
                            </a>
                            <a href="" target="_blank" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group  ">
                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900  " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                <span class="ml-5" sidebar-toggle-item>Flowbite Docs</span>
                            </a>
                            <a href="" target="_blank" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group  ">
                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900  " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                <span class="ml-5" sidebar-toggle-item>Components</span>
                            </a>
                            <a href="" target="_blank" class="flex items-center my-4 p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group  ">
                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900  " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
                                <span class="ml-5" sidebar-toggle-item>Support</span>
                            </a>
                        </div> --}}
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 justify-center hidden w-full p-4 space-x-4 bg-white lg:flex " sidebar-bottom-menu>
                    <a href="#" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 ">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path></svg>
                    </a>
                    <a href="" data-tooltip-target="tooltip-settings" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100  ">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                    </a>
                    <div id="tooltip-settings" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                        Settings page
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button type="button" data-dropdown-toggle="language-dropdown" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100  ">
                        <svg class="h-5 w-5 rounded-full mt-0.5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900"><path fill="#b22234" d="M0 0h7410v3900H0z"/><path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff" stroke-width="300"/><path fill="#3c3b6e" d="M0 0h2964v2100H0z"/><g fill="#fff"><g id="d"><g id="c"><g id="e"><g id="b"><path id="a" d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"/><use xlink:href="#a" y="420"/><use xlink:href="#a" y="840"/><use xlink:href="#a" y="1260"/></g><use xlink:href="#a" y="1680"/></g><use xlink:href="#b" x="247" y="210"/></g><use xlink:href="#c" x="494"/></g><use xlink:href="#d" x="988"/><use xlink:href="#c" x="1976"/><use xlink:href="#e" x="2470"/></g></svg>
                    </button>
                    <!-- Dropdown -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="language-dropdown">
                        <ul class="py-1" role="none">
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
                                            <g fill-rule="evenodd">
                                            <g stroke-width="1pt">
                                                <path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                                                <path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                                            </g>
                                            <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/>
                                            <path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/>
                                            </g>
                                        </svg>              
                                        English (US)
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512">
                                            <path fill="#ffce00" d="M0 341.3h512V512H0z"/>
                                            <path d="M0 0h512v170.7H0z"/>
                                            <path fill="#d00" d="M0 170.7h512v170.6H0z"/>
                                        </svg>
                                        Deutsch
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512">
                                            <g fill-rule="evenodd" stroke-width="1pt">
                                            <path fill="#fff" d="M0 0h512v512H0z"/>
                                            <path fill="#009246" d="M0 0h170.7v512H0z"/>
                                            <path fill="#ce2b37" d="M341.3 0H512v512H341.3z"/>
                                            </g>
                                        </svg>              
                                        Italiano
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512">
                                            <defs>
                                                <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"/>
                                            </defs>
                                            <path fill="#de2910" d="M0 0h512v512H0z"/>
                                            <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"/>
                                            <use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"/>
                                            <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"/>
                                            <use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"/>
                                            <use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"/>
                                        </svg>
                                        中文 (繁體)
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            
            </aside>

        <div class="fixed inset-0 z-10 hidden bg-gray-900/50" id="sidebarBackdrop"></div>

            <div id="main-content" class="relative w-full h-full overflow-y-auto bg-white lg:ml-64">
                <main>
                    <div class="px-4 pt-6">
                        {{ $slot }}
                    </div>
                
                </main>


                
                {{-- <x-footer/> --}}
            </div>
    
        </div>

        @stack('modals')

        @livewireScripts
        
    </body>
</html>
