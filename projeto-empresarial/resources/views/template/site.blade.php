<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
        extend: {
            fontFamily: {
            sans: ['Inter', 'sans-serif'],
            },
        }
        }
    }
    </script>
</head>
<body class="bg-dark-50">
    <div class="container mx-auto px-60 py-8">
        <nav class="
            relative
            w-full
            flex flex-wrap
            items-center
            justify-between
            py-4
            bg-gray-100
            text-gray-500
            hover:text-gray-700
            focus:text-gray-700
            shadow-lg
            navbar navbar-expand-lg navbar-light
            ">
            <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
                <button class="
                    navbar-toggler
                    text-gray-500
                    border-0
                    hover:shadow-none hover:no-underline
                    py-2
                    px-2.5
                    bg-transparent
                    focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline
                    " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars"
                    class="w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor"
                    d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                    </path>
                </svg>
                </button>
                <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent">
                    <a class="
                            flex
                            items-center
                            text-gray-900
                            hover:text-gray-900
                            focus:text-gray-900
                            mt-2
                            lg:mt-0
                            mr-1
                        " href="/">
                        <img src="{{url('/logo/logo.png')}}" class="sm:h-16" alt=""
                        loading="lazy" />
                    </a>
                </div>
                <!-- Collapsible wrapper -->
                @if(Auth::user())
                <!-- Right elements -->
                <div class="flex items-center relative">
                    <!-- Icon -->
                    <a class="text-gray-500 hover:text-gray-700 focus:text-gray-700 mr-4" href="{{ route('cart.index') }}">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart"
                        class="w-4" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512">
                        <path fill="currentColor"
                            d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z">
                        </path>
                        </svg>
                    </a>

                    @if(session()->get('cart'))
                        <span class="text-white bg-red-700 absolute rounded-full text-xs -mt-4 ml-3 py-0 px-1.5">{{count(session()->get('cart'))}}</span>
                    @endif
                    <div class="dropdown relative">
                        <a class="dropdown-toggle flex items-center hidden-arrow" href="#" id="dropdownMenuButton2" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="
                        dropdown-menu
                        min-w-max
                        absolute
                        hidden
                        bg-white
                        text-base
                        z-50
                        float-left
                        py-2
                        list-none
                        text-left
                        rounded-lg
                        shadow-lg
                        mt-1
                        hidden
                        m-0
                        bg-clip-padding
                        border-none
                        left-auto
                        right-0
                    " aria-labelledby="dropdownMenuButton2">
                        <li>
                            <a class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                        " href="#"></a>
                        </li>
                            @if(Auth::user()->is_admin == 1)
                            <li>
                                <a class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                        " href="{{ route('admin.index') }}">Painel Admin</a>
                            </li>
                            @endif
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Sair') }}
                                </x-responsive-nav-link>
                            </form>
                        </li>
                     </ul>
                </div>
                </div>
                @else
                <div class="dropdown relative">
                    <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="{{route('login')}}">Entrar</a>
                </div>
                @endif
            </div>
            <!-- Right elements -->
            </div>
        </nav>

        @yield('content')

        <div class="container mx-auto px-60 py-8">
            <footer class="text-center text-white" style="background-color: #f1f1f1;">
                <div class="text-center text-gray-700 p-4" style="background-color: rgba(0, 0, 0, 0.2);">
                 © 2022 Copyright: Be-Academy & PayLivre<br>
                    Desenvolvido por
                    <a class="text-gray-800 font-bold" href="https://github.com/victorpessoa1/beacademy-devstart-agua-marinha" target="blank">Squad Água Marinha</a>
                </div>
            </footer>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</html>
