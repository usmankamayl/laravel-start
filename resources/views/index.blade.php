@extends('layouts.app')

@section('content')
    <header class="header pt-6 xl:pt-12">
        <div class="container">
            <div class="header-inner flex items-center justify-between lg:justify-start">
                <div class="header-logo shrink-0">
                    <a href="index.html" rel="home">
                        <img alt="CutCode"
                             class="w-[148px] md:w-[201px] h-[36px] md:h-[50px] inline-block"
                             src="{{Vite::asset('resources/images/nav/logo.svg')}}"
                        >
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-menu grow hidden lg:flex items-center ml-8 mr-8 gap-8">
                    <nav class="2xl:flex gap-8">
                        <a href="articles.html"
                           class="ml-4 mr-4 text-white hover:text-pink prose-a:text-blue-600"
                        >
                            Статьи
                        </a>
                    </nav>
                </div><!-- /.header-menu -->

                <div class="header-actions flex items-center gap-3 md:gap-5 z-[9999]">
                    <a href="login.html" class="profile hidden xs:flex items-center">
                        <svg aria-hidden="true" class="profile-icon w-8 h-8 text-purple"
                             height="1em" preserveAspectRatio="xMidYMid meet" role="img" viewBox="0 0 32 32" width="1em"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs/>
                            <path
                                d="M26.749 24.93A13.99 13.99 0 1 0 2 16a13.899 13.899 0 0 0 3.251 8.93l-.02.017c.07.084.15.156.222.239c.09.103.187.2.28.3c.28.304.568.596.87.87c.092.084.187.162.28.242c.32.276.649.538.99.782c.044.03.084.069.128.1v-.012a13.901 13.901 0 0 0 16 0v.012c.044-.031.083-.07.128-.1c.34-.245.67-.506.99-.782c.093-.08.188-.159.28-.242c.302-.275.59-.566.87-.87c.093-.1.189-.197.28-.3c.071-.083.152-.155.222-.24zM16 8a4.5 4.5 0 1 1-4.5 4.5A4.5 4.5 0 0 1 16 8zM8.007 24.93A4.996 4.996 0 0 1 13 20h6a4.996 4.996 0 0 1 4.993 4.93a11.94 11.94 0 0 1-15.986 0z"
                                fill="currentColor"/>
                        </svg>
                        <span class="profile-text relative ml-2 text-white text-xxs md:text-xs font-bold">Войти</span>
                    </a>
                </div><!-- /.header-actions -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </header>
    <main class="py-16 lg:py-20">
        <div class="container">
            <h1 class="text-[26px] sm:text-xl xl:text-[48px] 2xl:text-2xl font-black">
                Лучшие статьи
            </h1>

            <div class="tasks grid gap-4 grid-cols-1 lg:grid-cols-2 gap-x-10 gap-y-14 xl:gap-y-20 mt-12 md:mt-20">

                <div class="tasks-card flex flex-col rounded-3xl md:rounded-[40px] bg-card">
                    <div class="tasks-card-photo overflow-hidden h-40 xs:h-48 sm:h-[280px] rounded-3xl md:rounded-[40px]">
                        <a href="article.html">
                            <img src="{{Vite::asset('resources/images/article_demo.jpg')}}"
                                 class="object-cover w-full h-full"
                                 alt="">
                        </a>
                    </div>
                    <div class="grow flex flex-col pt-6 sm:pt-10 pb-6 sm:pb-10 2xl:pb-14 px-5 sm:px-8 2xl:px-12">
                        <h3 class="text-md md:text-lg 2xl:text-xl font-black">Заголовок статьи</h3>
                        <div class="mt-auto">
                            <div class="flex flex-wrap gap-3 mt-7">
                                <a href="#"
                                   class="grow xs:grow-0 py-2 px-4 rounded-[32px] bg-[#2A2B4E] text-white no-underline text-xxs sm:text-xs font-semibold whitespace-nowrap">
                                    Категория 1
                                </a>
                            </div>
                            <div class="flex flex-wrap sm:items-center justify-center sm:justify-between mt-8 sm:mt-10">
                                <a class="btn btn-pink" href="article.html">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tasks-card flex flex-col rounded-3xl md:rounded-[40px] bg-card">
                    <div class="tasks-card-photo overflow-hidden h-40 xs:h-48 sm:h-[280px] rounded-3xl md:rounded-[40px]">
                        <a href="article.html">
                            <img src="{{Vite::asset('resources/images/article_demo.jpg')}}"
                                 class="object-cover w-full h-full"
                                 alt="">
                        </a>
                    </div>
                    <div class="grow flex flex-col pt-6 sm:pt-10 pb-6 sm:pb-10 2xl:pb-14 px-5 sm:px-8 2xl:px-12">
                        <h3 class="text-md md:text-lg 2xl:text-xl font-black">Заголовок статьи</h3>
                        <div class="mt-auto">
                            <div class="flex flex-wrap gap-3 mt-7">
                                <a href="#"
                                   class="grow xs:grow-0 py-2 px-4 rounded-[32px] bg-[#2A2B4E] text-white no-underline text-xxs sm:text-xs font-semibold whitespace-nowrap">
                                    Категория 1
                                </a>
                            </div>
                            <div class="flex flex-wrap sm:items-center justify-center sm:justify-between mt-8 sm:mt-10">
                                <a class="btn btn-pink" href="article.html">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tasks-card flex flex-col rounded-3xl md:rounded-[40px] bg-card">
                    <div class="tasks-card-photo overflow-hidden h-40 xs:h-48 sm:h-[280px] rounded-3xl md:rounded-[40px]">
                        <a href="article.html">
                            <img src="{{Vite::asset('resources/images/article_demo.jpg')}}"
                                 class="object-cover w-full h-full"
                                 alt="">
                        </a>
                    </div>
                    <div class="grow flex flex-col pt-6 sm:pt-10 pb-6 sm:pb-10 2xl:pb-14 px-5 sm:px-8 2xl:px-12">
                        <h3 class="text-md md:text-lg 2xl:text-xl font-black">Заголовок статьи</h3>
                        <div class="mt-auto">
                            <div class="flex flex-wrap gap-3 mt-7">
                                <a href="#"
                                   class="grow xs:grow-0 py-2 px-4 rounded-[32px] bg-[#2A2B4E] text-white no-underline text-xxs sm:text-xs font-semibold whitespace-nowrap">
                                    Категория 1
                                </a>
                            </div>
                            <div class="flex flex-wrap sm:items-center justify-center sm:justify-between mt-8 sm:mt-10">
                                <a class="btn btn-pink" href="article.html">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tasks-card flex flex-col rounded-3xl md:rounded-[40px] bg-card">
                    <div class="tasks-card-photo overflow-hidden h-40 xs:h-48 sm:h-[280px] rounded-3xl md:rounded-[40px]">
                        <a href="article.html">
                            <img src="{{Vite::asset('resources/images/article_demo.jpg')}}"
                                 class="object-cover w-full h-full"
                                 alt="">
                        </a>
                    </div>
                    <div class="grow flex flex-col pt-6 sm:pt-10 pb-6 sm:pb-10 2xl:pb-14 px-5 sm:px-8 2xl:px-12">
                        <h3 class="text-md md:text-lg 2xl:text-xl font-black">Заголовок статьи</h3>
                        <div class="mt-auto">
                            <div class="flex flex-wrap gap-3 mt-7">
                                <a href="#"
                                   class="grow xs:grow-0 py-2 px-4 rounded-[32px] bg-[#2A2B4E] text-white no-underline text-xxs sm:text-xs font-semibold whitespace-nowrap">
                                    Категория 1
                                </a>
                            </div>
                            <div class="flex flex-wrap sm:items-center justify-center sm:justify-between mt-8 sm:mt-10">
                                <a class="btn btn-pink" href="article.html">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer py-8 sm:py-12 xl:py-16 bg-darkblue text-white">
        <div class="container">
            <div class="flex flex-wrap lg:flex-nowrap items-center">
                <div class="footer-logo order-0 basis-full sm:basis-1/2 lg:basis-1/3 shrink-0 text-center sm:text-left">
                    <a href="index.html" rel="home">
                        <img alt="CutCode"
                             class="w-[148px] md:w-[201px] h-[36px] md:h-[50px] inline-block"
                             src="{{Vite::asset('resources/images/nav/logo.svg')}}"
                        >
                    </a>
                </div><!-- /.footer-logo -->

                <div class="footer-copyright order-2 lg:order-1 basis-full lg:basis-1/3 mt-8 lg:mt-0">
                    <div class="text-[#999] text-xxs xs:text-xs sm:text-sm text-center">
                        CutCode, 2023 © Все права защищены.
                    </div>
                </div><!-- /.footer-copyright -->

                <div class="footer-social order-1 lg:order-2 basis-full sm:basis-1/2 lg:basis-1/3 mt-8 sm:mt-0">
                    <div class="flex flex-wrap items-center justify-center sm:justify-end space-x-6">
                        <a class="inline-flex items-center text-white hover:text-pink"
                           href="#" rel="nofollow noopener"
                           target="_blank">
                            <img alt="YouTube" class="h-5 lg:h-6" src="{{Vite::asset('resources/images/icons/youtube.svg')}}">
                            <span class="ml-2 lg:ml-3 text-xxs font-semibold">YouTube</span>
                        </a>
                        <a href="#" class="inline-flex items-center text-white hover:text-pink"
                           rel="nofollow noopener" target="_blank">
                            <img alt="Telegram" class="h-5 lg:h-6" src="{{Vite::asset('resources/images/icons/telegram.svg')}}">
                            <span class="ml-2 lg:ml-3 text-xxs font-semibold">Telegram</span>
                        </a>
                    </div>
                </div><!-- /.footer-social -->
            </div>
        </div><!-- /.container -->
    </footer>
@endsection
