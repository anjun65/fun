<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@buildwithangga" />
        <meta name="description" content="Gunakan jasa pembuatan website kami! Gratis Hosting & Domain 1 tahun hanya 500.000an. Profil perusahaan, toko online, sistem informasi, blog dan lain-lain">
        <meta name="keywords" content="Belajar, UI/UX Design, Web Development, Data Science, Freelancer, Kelas Online, BuildWithAngga">
        <meta name="author" content="BuildWithAngga" />
        <meta image="https://buildwithangga.com/themes/front/images/meta/kelas-online-belajar-ui-ux-design-dan-web-development-build-with-angga.png">
        <meta property="og:type" content="article">
        <meta property="og:image" content="https://buildwithangga.com/themes/front/images/meta/kelas-online-belajar-ui-ux-design-dan-web-development-build-with-angga.png">
        <meta property="og:title" content="Kelas Belajar Design & Web Development BuildWithAngga">
        <meta property="og:site_name" content="BuildWithAngga">
        <meta property="og:url" content="https://buildwithangga.com/">
        <meta property="og:description" content="BuildWithAngga menyediakan kelas online terpercaya untuk belajar UI/UX Design, Web/Mobile Development, Data Science, dan Freelancer dari tingkat pemula ke mahir.">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="icon" type="image/png" href="https://buildwithangga.com/themes/front/images/favicon.ico" />
        <link rel="apple-touch-icon" href="https://buildwithangga.com/themes/front/images/favicon.ico">
        <link rel="canonical" href="https://buildwithangga.com">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
