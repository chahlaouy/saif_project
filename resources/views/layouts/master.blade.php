<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/app.css">
    <title>
        @yield('title')
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos offres</title>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>
<body>
	<!-- 
    *****************************
    *       Section Header      *
    *****************************
	-->
    <header class="container mx-auto">
        <nav class="flex items-center justify-between py-4">
            <h1 class="text-2xl">
                SCANLOB
            </h1>
            <ul class="flex items-center">
                <li class="px-3">
                    <a href="/">
                        Acceuil
                    </a>
                </li>
                <li class="px-3">
                    <a href="nos-offres">
                        Nos Offres
                    </a>
                </li>
                <li class="px-3">
                    <a href="apropos">
                        A propos
                    </a>
                </li>
                <li class="px-3">
                    <a href="contact">
                        Contact
                    </a>
                </li>
                <li class="px-3">
                    <a href="actualités">
                        Actualités
                    </a>
                </li>
            </ul>
            {{-- <div class="w-96 text-gray-600 text-sm px-4" style="background: #e7eeed;">
                <div class="relative text-sm flex items-center">
                     <input type="text" class="px-4 py-2 bg-gray-200 w-full rounded border border-gray-300" placeholder="chercher un profile">
                     <button class="-ml-12 py-2 bg-indigo-600 text-white px-4 rounded-r border border-indigo-600">
                         <ion-icon name="search" class="text-sm"></ion-icon>
                     </button>
                 </div>
             </div> --}}
            <div class="flex text-center">
                @if (isset($loggedUserInfo))    
                    <button class="bg-indigo-600 px-4 py-2 text-gray-100 rounded-lg shadow-xl text-center">
                        <ion-icon name="person" class="text-3xl"></ion-icon>
                        <div class="flex items-center">
                            <p class="text-sm mr-2">{{ $loggedUserInfo->username }}</p>
                            <ion-icon name="chevron-down-circle-outline" class="text-lg"></ion-icon>
                        </div>
                    </button>
                @else   
                    <a href="qr-code" class="bg-indigo-600 mr-2 px-4 py-2 text-gray-100 rounded-lg shadow-xl block">
                        <ion-icon name="qr-code-outline" class="text-3xl"></ion-icon>
                        <span class="block text-sm">premier connexion</span>
                    </a>
                    <a href="connexion" class="bg-gray-100 px-4 py-2 rounded-lg shadow-xl text-gray-700 text-center block">
                        <ion-icon name="person-outline" class="text-3xl"></ion-icon>
                        <span class="block text-sm">Inscription/Connexion</span>
                    </a>
                @endif
                
                
            </div>
        </nav>
    </header>

	@yield('content')
	<!-- 
		*****************************
		*       Section footer      *
		*****************************
	-->
    <footer class="h-auto">
        <div
            class="bg-indigo-100 mt-24 mx-12 lg:mx-56 -mb-8 lg:-mb-16 py-4 lg:py-16 text-gray-100 font-bold px-8 lg:px-24 relative z-40 shadow-2xl rounded-xl">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-sm lg:text-4xl text-purple-500">Prêt à commencer ?!</h1>
                    <h1 class="text-sm lg:text-4xl text-blue-500"> Parle-nous aujourd'hui</h1>
                </div>
                <button class="text-xs bg-indigo-600 text-white rounded-lg px-4 py-2 w-24 lg:w-48">Get Started</button>
            </div>
        </div>
        <div class="bg-indigo-600 text-gray-200 p-8 md:px-24 xl:px-48 relative z-30">
    
            <div class="text-center mt-10 sm:px-12 md:px-24 xl:px-48">
                <h1 class="text-2xl pt-10">SCANLOB</h1>
                <div class="flex items-center justify-around py-5">
                    <div class="h-8 w-8 border border-gray-200 rounded-full flex justify-center items-center">
                        <ion-icon name="logo-github" class="text-gray-100"></ion-icon>
                    </div>
                    <div class="h-8 w-8 border border-gray-200 rounded-full flex justify-center items-center">
                        <ion-icon name="logo-facebook" class="text-gray-100"></ion-icon>
                    </div>
                    <div class="h-8 w-8 border border-gray-200 rounded-full flex justify-center items-center">
                        <ion-icon name="logo-youtube" class="text-gray-100"></ion-icon>
                    </div>
                    <div class="h-8 w-8 border border-gray-200 rounded-full flex justify-center items-center">
                        <ion-icon name="logo-linkedin" class="text-gray-100"></ion-icon>
                    </div>
                    <div class="h-8 w-8 border border-gray-200 rounded-full flex justify-center items-center">
                        <ion-icon name="logo-pinterest" class="text-gray-100"></ion-icon>
                    </div>
                    <div class="h-8 w-8 border border-gray-200 rounded-full flex justify-center items-center">
                        <ion-icon name="logo-behance" class="text-gray-100"></ion-icon>
                    </div>
                </div>
                <p class="text-sm">© 2021 SCANLOB, all rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="./assets/js/app.js"></script>
</body>