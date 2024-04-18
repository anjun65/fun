<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" />
        <link rel="apple-touch-icon" href="{{ asset('logo/apple-touch-icon.png') }}">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


        <style>
            html {
                scroll-behavior: smooth;
            }
        </style>
        
        
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')
            
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white mt-4 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div class="bg-white relative overflow-hidden min-h-screen">
                    <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        
                      <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-12 sm:px-6 lg:px-8">
                          <div class="mx-auto max-w-2xl lg:max-w-none border-b-2 border-gray-800 w-full">
                            <div class="flex justify-center mb-5">
                              <svg width="77" height="77" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <rect x="0.5" y="0.5" width="76" height="76" rx="8.5" stroke="black"/>
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M38.9683 45.9707C30.9107 45.9707 24.0298 47.189 24.0298 52.0679C24.0298 56.9469 30.8671 58.2088 38.9683 58.2088C47.0258 58.2088 53.9048 56.9886 53.9048 52.1116C53.9048 47.2346 47.0695 45.9707 38.9683 45.9707Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M38.9683 39.0121C44.256 39.0121 48.5417 34.7244 48.5417 29.4367C48.5417 24.149 44.256 19.8633 38.9683 19.8633C33.6806 19.8633 29.3929 24.149 29.3929 29.4367C29.3751 34.7065 33.633 38.9942 38.9009 39.0121H38.9683Z" stroke="black" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </div>
                            <h2 class="font-base tracking-tight text-gray-900 text-2xl text-center mb-20">Altafunnisa account</h2>
                          </div>
              
                          <div class="grid grid-cols-1 md:grid-cols-4 w-full mt-4">
                              <div>
                                  <ul>
                                      <li>
                                          <a href="" class="flex items-center my-4 p-2 text-base text-gray-500 rounded-lg hover:text-gray-900 group ">
                                              <svg class="w-6 h-6 text-gray-500 rounded-lg group-hover:text-gray-900 transition duration-75 focus:text-gray-900" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5137 21.5003H8.16592C5.09955 21.5003 2.74715 20.3927 3.41534 15.9351L4.19338 9.89387C4.60528 7.66962 6.02404 6.81836 7.26889 6.81836H17.4474C18.7105 6.81836 20.0469 7.73369 20.5229 9.89387L21.3009 15.9351C21.8684 19.8893 19.5801 21.5003 16.5137 21.5003Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                  <path d="M16.651 6.59779C16.651 4.21171 14.7167 2.27738 12.3306 2.27738C11.1816 2.27255 10.078 2.72558 9.26381 3.53634C8.44962 4.34709 7.99194 5.44878 7.99194 6.59779" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                  <path d="M15.2964 11.1016H15.2506" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                  <path d="M9.46569 11.1016H9.41992" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                                  
                                              <span class="ml-5" sidebar-toggle-item>Orderan saya</span>
                                          </a>
                                      </li>
              
                                      <li>
                                          <a href="" class="flex items-center my-4 p-2 text-base text-gray-500 rounded-lg hover:text-gray-900 group ">
                                              
                                              <svg class="w-6 h-6 text-gray-500 rounded-lg group-hover:text-gray-900 transition duration-75 focus:text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                                </svg>
                                                
                                                  
                                              <span class="ml-5" sidebar-toggle-item>Whislist</span>
                                          </a>
                                      </li>
              
                                      <li>
                                          <a href="" class="flex items-center my-4 p-2 text-base text-gray-500 rounded-lg hover:text-gray-900 group ">
                                              
                                              <svg class="w-6 h-6 text-gray-500 rounded-lg group-hover:text-gray-900 transition duration-75 focus:text-gray-900" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2C19.723 2 22 4.378 22 7.916V16.084C22 19.622 19.723 22 16.332 22H7.664C4.276 22 2 19.622 2 16.084V7.916C2 4.378 4.276 2 7.664 2H16.334ZM16.334 3.5H7.664C5.135 3.5 3.5 5.233 3.5 7.916V16.084C3.5 18.767 5.135 20.5 7.664 20.5H16.332C18.864 20.5 20.5 18.767 20.5 16.084V7.916C20.5 5.233 18.864 3.5 16.334 3.5ZM8.8368 9.3984C10.0121 9.39922 11.0054 10.18 11.3283 11.2489L17.0097 11.2495C17.4237 11.2495 17.7597 11.5855 17.7597 11.9995V13.8525C17.7597 14.2665 17.4237 14.6025 17.0097 14.6025C16.5957 14.6025 16.2597 14.2665 16.2597 13.8525V12.7495L14.931 12.749L14.9315 13.8525C14.9315 14.2665 14.5955 14.6025 14.1815 14.6025C13.7675 14.6025 13.4315 14.2665 13.4315 13.8525L13.431 12.749L11.3287 12.75C11.0061 13.8201 10.0112 14.6024 8.8368 14.6024C7.4018 14.6024 6.2348 13.4344 6.2348 12.0004C6.2348 10.5654 7.4018 9.3984 8.8368 9.3984ZM8.8388 10.8984C8.2288 10.8984 7.7348 11.3924 7.7348 12.0004C7.7348 12.6084 8.2288 13.1024 8.8368 13.1024C9.4438 13.1024 9.9388 12.6084 9.9388 12.0004C9.9388 11.3934 9.4448 10.8994 8.8388 10.8984Z" fill="currentColor"/>
                                              </svg>
                                                  
                                                  
                                              <span class="ml-5" sidebar-toggle-item>Info Akun</span>
                                          </a>
                                      </li>
              
                                      <li>
                                          <a href="" class="flex items-center my-4 p-2 text-base text-gray-500 rounded-lg hover:text-gray-900 group ">
                                              <svg class="w-6 h-6 text-gray-500 rounded-lg group-hover:text-gray-900 transition duration-75 focus:text-gray-900" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.169 14.898C20.169 18.476 18.06 20.585 14.482 20.585H6.7C3.113 20.585 1 18.476 1 14.898V7.09802C1 3.52502 2.314 1.41602 5.893 1.41602H7.893C8.611 1.41702 9.287 1.75402 9.717 2.32902L10.63 3.54302C11.062 4.11702 11.738 4.45502 12.456 4.45602H15.286C18.873 4.45602 20.197 6.28202 20.197 9.93302L20.169 14.898Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                  <path d="M6.23108 13.6289H14.9661" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                                  
                                                  
                                              <span class="ml-5" sidebar-toggle-item>Riwayat Order</span>
                                          </a>
                                      </li>
              
                                      <li>
                                          <a href="" class="flex items-center my-4 p-2 text-base text-gray-500 rounded-lg hover:text-gray-900 group ">
                                              <svg class="w-6 h-6 text-gray-500 rounded-lg group-hover:text-gray-900 transition duration-75 focus:text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                </svg>
                                                
                                                  
                                              <span class="ml-5" sidebar-toggle-item>Alamat</span>
                                          </a>
                                      </li>
              
                                      <li>
                                          <a href="" class="flex items-center my-4 p-2 text-base text-gray-500 rounded-lg hover:text-gray-900 group ">
                                              
                                              <svg class="w-6 h-6 text-gray-500 rounded-lg group-hover:text-gray-900 transition duration-75 focus:text-gray-900" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M17.053 2C19.492 2 21.478 3.985 21.478 6.425V17.564C21.478 20.01 19.487 22 17.042 22H12.157C9.718 22 7.733 20.015 7.733 17.575V16.633C7.733 16.219 8.069 15.883 8.483 15.883C8.897 15.883 9.233 16.219 9.233 16.633V17.575C9.233 19.187 10.545 20.5 12.157 20.5H17.042C18.661 20.5 19.978 19.184 19.978 17.564V6.425C19.978 4.813 18.665 3.5 17.053 3.5H12.168C10.55 3.5 9.233 4.816 9.233 6.434V7.367C9.233 7.781 8.897 8.117 8.483 8.117C8.069 8.117 7.733 7.781 7.733 7.367V6.434C7.733 3.989 9.723 2 12.168 2H17.053ZM13.3923 8.553L16.3212 11.4698C16.345 11.4935 16.3672 11.5188 16.3876 11.5456L16.3212 11.4698C16.3612 11.5091 16.3962 11.5518 16.4258 11.5984C16.4318 11.6101 16.4387 11.6215 16.4452 11.6331C16.4566 11.651 16.4663 11.67 16.4751 11.6894C16.4801 11.7032 16.4858 11.7169 16.4912 11.7308C16.4997 11.7498 16.5063 11.7693 16.5121 11.7891C16.5155 11.8047 16.5195 11.8203 16.523 11.836C16.5285 11.8551 16.532 11.8743 16.5347 11.8936C16.5348 11.9024 16.5359 11.9116 16.5369 11.9209C16.5409 11.9473 16.5423 11.9736 16.5423 12L16.535 12.079L16.5341 12.1017C16.5339 12.1034 16.5337 12.1051 16.5334 12.1068L16.5423 12C16.5423 12.0555 16.5362 12.1105 16.5242 12.1639C16.5195 12.1797 16.5155 12.1953 16.511 12.2107C16.5063 12.2307 16.4997 12.2502 16.4923 12.2695C16.4858 12.2831 16.4801 12.2968 16.4739 12.3103C16.4663 12.33 16.4566 12.349 16.4461 12.3676C16.4387 12.3785 16.4318 12.3899 16.4247 12.4011C16.414 12.4202 16.4013 12.4383 16.3878 12.4558C16.3786 12.4662 16.37 12.4768 16.3611 12.4872C16.3491 12.5025 16.3355 12.517 16.3213 12.531L13.3923 15.446C13.2463 15.592 13.0543 15.665 12.8633 15.665C12.6713 15.665 12.4783 15.592 12.3323 15.444C12.0393 15.15 12.0413 14.676 12.3343 14.384L13.975 12.75H3.75C3.336 12.75 3 12.414 3 12C3 11.586 3.336 11.25 3.75 11.25H13.975L12.3343 9.615C12.0413 9.323 12.0393 8.849 12.3323 8.555C12.6253 8.261 13.0993 8.261 13.3923 8.553Z" fill="currentColor"/>
                                              </svg>
                                                  
                                                  
                                              <span class="ml-5" sidebar-toggle-item>Keluar</span>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="col-span-3 mt-4 w-full">
                                    {{ $slot }}
                              </div>
                          </div>
                          
                          
                         
                        </div>
                          
                      </section>
                
                    </div>
                  </div>
                
            </main>
        </div>

        <x-footer/>

        @stack('modals')

        @livewireScripts

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>
    </body>

    
    
</html>
