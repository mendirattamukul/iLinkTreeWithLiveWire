<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>iLinkTree-stores all your links</title>
        <link rel="icon" href="{{asset('linktreeicon.png')}}"/>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex  justify-center">

                <img src="{{asset('linktreeicon.png')}}"/>
               
                </div>
                <div class="flex mt-2 justify-center">
                <h1 class="font-semibold">Welcome To Link Tree</h1>
               </div>
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a target="_blank" href="https://www.youtube.com/watch?v=P50B48BJj4s&t=2s" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-green-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <img src="{{asset('snapchat.png')}}"/>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">About Link Tree</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                  Know more about link tree
                                </p>
                            </div>

                        
                        </a>

                        <a href="/" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-green-500">
                        <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <img src="{{asset('facebook.png')}}"/>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white"></h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. At, distinctio nemo. Dolores optio excepturi expedita architecto eveniet facere tempora. In minus sint eaque vitae.
                                </p>
                            </div>

                        
                        </a>

                       

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <img src="{{asset('twitter.png')}}"/>
                          </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">

                                </h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque praesentium dicta suscipit quae quo impedit minima id fugit? Quisquam voluptate repudiandae expedita placeat adipisci!
                                </p>
                            </div>
                        </div>
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <img src="{{asset('instagram.png')}}"/>
                          </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">

                                </h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque praesentium dicta suscipit quae quo impedit minima id fugit? Quisquam voluptate repudiandae expedita placeat adipisci!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </body>
</html>
