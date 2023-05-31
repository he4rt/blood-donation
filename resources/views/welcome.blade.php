<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
    <link rel="icon" type="image/png" sizes="32x32" href="shuffle-for-tailwind.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-body text-body font-body">
<div class="">

    <section class="overflow-hidden" style="background: url(https://i.imgur.com/5k7teIx.png) no-repeat; background-size: cover;">
        <section>
            <div class="flex items-center justify-between px-8 py-5">
                <div class="w-auto">
                    <div class="flex flex-wrap items-center">
                        <div class="w-auto mr-14">
                            <a href="#">
                                <img src="gradia-assets/logos/gradia-name-white.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-auto">
                    <div class="flex flex-wrap items-center">
                        <div class="w-auto hidden lg:block">
                            <ul class="flex items-center mr-10">
                                <li class="font-heading mr-9 text-white hover:text-gray-200 text-lg"><a href="#">Features</a></li>
                                <li class="font-heading mr-9 text-white hover:text-gray-200 text-lg"><a href="#">Solutions</a></li>
                                <li class="font-heading mr-9 text-white hover:text-gray-200 text-lg"><a href="#">Resources</a></li>
                                <li class="font-heading text-white hover:text-gray-200 text-lg"><a href="#">Pricing</a></li>
                            </ul>
                        </div>
                        <div class="w-auto hidden lg:block">
                            <button class="group relative font-heading block py-2 px-5 text-lg text-white border-2 border-white overflow-hidden rounded-10">
                                <div class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full bg-white transition ease-in-out duration-500"></div>
                                <p class="relative z-10 group-hover:text-gray-800">Start Free Trial</p>
                            </button>
                        </div>
                        <div class="w-auto lg:hidden">
                            <a href="#">
                                <svg class="navbar-burger text-gray-800" width="51" height="51" viewbox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="56" height="56" rx="28" fill="currentColor"></rect>
                                    <path d="M37 32H19M37 24H19" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-4/6 sm:max-w-xs z-50">
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-80"></div>
                <nav class="relative z-10 px-9 py-8 bg-white h-full">
                    <div class="flex flex-wrap justify-between h-full">
                        <div class="w-full">
                            <div class="flex items-center justify-between -m-2">
                                <div class="w-auto p-2">
                                    <a class="inline-block" href="#">
                                        <img src="gradia-assets/logos/gradia-name-black.svg" alt="">
                                    </a>
                                </div>
                                <div class="w-auto p-2">
                                    <a class="navbar-burger" href="#">
                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 18L18 6M6 6L18 18" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center py-8 w-full">
                            <ul>
                                <li class="mb-12"><a class="font-heading font-medium text-lg text-gray-900 hover:text-gray-700" href="#">Features</a></li>
                                <li class="mb-12"><a class="font-heading font-medium text-lg text-gray-900 hover:text-gray-700" href="#">Solutions</a></li>
                                <li class="mb-12"><a class="font-heading font-medium text-lg text-gray-900 hover:text-gray-700" href="#">Resources</a></li>
                                <li><a class="font-heading font-medium text-lg text-gray-900 hover:text-gray-700" href="#">Pricing</a></li>
                            </ul>
                        </div>
                        <div class="flex flex-col justify-end w-full">
                            <div class="flex flex-wrap">
                                <div class="w-full">
                                    <button class="p-0.5 font-heading block w-full text-lg text-gray-900 font-medium rounded-10">
                                        <div class="py-2 px-5 rounded-10">
                                            <p>Login</p>
                                        </div>
                                    </button>
                                </div>
                                <div class="w-full">
                                    <button class="group relative p-0.5 font-heading block w-full text-lg text-gray-900 font-medium bg-gradient-cyan overflow-hidden rounded-10">
                                        <div class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full bg-gradient-cyan transition ease-in-out duration-500"></div>
                                        <div class="py-2 px-5 bg-white rounded-lg">
                                            <p class="relative z-10">Start Free Trial</p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between -m-6 pt-32 pb-40">
                <div class="w-full lg:w-5/12 xl:w-1/2 p-6">
                    <p class="mb-5 font-heading text-gray-400 font-medium text-xl">Grow fast, get things done with ease</p>
                    <h1 class="mb-14 font-heading text-7xl md:text-9xl xl:text-11xl text-white font-bold">Manage remote team, anywhere, anytime.</h1>
                    <div class="flex flex-wrap -m-3 mb-20">
                        <div class="w-full lg:w-auto p-3">
                            <button class="font-heading w-full px-6 py-4 text-base text-gray-900 bg-white hover:bg-gray-100 rounded-md">Start 14 Days Free Trial</button>
                        </div>
                        <div class="w-full lg:w-auto p-3">
                            <button class="font-heading w-full px-6 py-4 text-base text-white bg-transparent border border-gray-500 hover:border-gray-600 rounded-md">How it works</button>
                        </div>
                    </div>
                    <div class="lg:max-w-md">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-auto p-3">
                                <img class="w-14 h-14" src="gradia-assets/images/hero/avatar-man.png" alt="">
                            </div>
                            <div class="flex-1 p-3">
                                <p class="mb-4 text-gray-300 text-base">“You made it so simple. My new team is so much faster and easier to work with than my old site. I just choose the page, make the change.”</p>
                                <p class="font-heading text-white text-base">Denny Jones, founder of Growthio</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-7/12 xl:w-1/2 p-6">
                    <div class="max-w-max mx-auto">
                        <div class="flex flex-wrap justify-center -m-3 mb-3">
                            <div class="w-full p-3">
                                <div class="mx-auto w-64 p-3 bg-white transform hover:-translate-y-3 transition ease-out duration-1000 rounded-2xl">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="w-auto p-2">
                                            <img src="gradia-assets/images/hero/avatar-circle.png" alt="">
                                        </div>
                                        <div class="w-auto p-2">
                                            <p class="font-heading text-base text-gray-900">Albert Flores</p>
                                            <p class="mb-2 text-sm text-gray-500">Software Engineer</p>
                                            <div class="flex items-center px-2 py-1 bg-gray-100 rounded-full">
                                                <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="text-xs text-gray-700 font-medium">Wyoming, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-center max-w-max -m-3 mb-3">
                            <div class="w-full sm:w-1/2 p-3">
                                <div class="mx-auto w-64 p-3 bg-white transform hover:-translate-y-3 transition ease-out duration-1000 rounded-2xl">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="w-auto p-2">
                                            <img src="gradia-assets/images/hero/avatar-circle2.png" alt="">
                                        </div>
                                        <div class="w-auto p-2">
                                            <p class="font-heading text-base text-gray-900">Darlene Robertson</p>
                                            <p class="mb-2 text-sm text-gray-500">Software Tester</p>
                                            <div class="flex items-center px-2 py-1 bg-gray-100 rounded-full">
                                                <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="text-xs text-gray-700 font-medium">New York, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 p-3">
                                <div class="mx-auto w-64 p-3 bg-white transform hover:-translate-y-3 transition ease-out duration-1000 rounded-2xl">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="w-auto p-2">
                                            <img src="gradia-assets/images/hero/avatar-circle3.png" alt="">
                                        </div>
                                        <div class="w-auto p-2">
                                            <p class="font-heading text-base text-gray-900">Kristin Watson</p>
                                            <p class="mb-2 text-sm text-gray-500">Project Manager</p>
                                            <div class="flex items-center px-2 py-1 bg-gray-100 rounded-full">
                                                <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="text-xs text-gray-700 font-medium">Pennsylvania, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-center max-w-max -m-3 mb-3 xl:-ml-20">
                            <div class="w-full sm:w-1/2 p-3">
                                <div class="mx-auto w-64 p-3 bg-white transform hover:-translate-y-3 transition ease-out duration-1000 rounded-2xl">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="w-auto p-2">
                                            <img src="gradia-assets/images/hero/avatar-circle4.png" alt="">
                                        </div>
                                        <div class="w-auto p-2">
                                            <p class="font-heading text-base text-gray-900">Guy Hawkins</p>
                                            <p class="mb-2 text-sm text-gray-500">Scrum Master</p>
                                            <div class="flex items-center px-2 py-1 bg-gray-100 rounded-full">
                                                <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="text-xs text-gray-700 font-medium">North Carolina, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 p-3">
                                <div class="mx-auto w-64 p-3 bg-white transform hover:-translate-y-3 transition ease-out duration-1000 rounded-2xl">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="w-auto p-2">
                                            <img src="gradia-assets/images/hero/avatar-circle5.png" alt="">
                                        </div>
                                        <div class="w-auto p-2">
                                            <p class="font-heading text-base text-gray-900">Annette Black</p>
                                            <p class="mb-2 text-sm text-gray-500">Software Engineer</p>
                                            <div class="flex items-center px-2 py-1 bg-gray-100 rounded-full">
                                                <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="text-xs text-gray-700 font-medium">North Dakota, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-center max-w-max -m-3">
                            <div class="w-full sm:w-1/2 p-3">
                                <div class="mx-auto w-64 p-3 bg-white transform hover:-translate-y-3 transition ease-out duration-1000 rounded-2xl">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="w-auto p-2">
                                            <img src="gradia-assets/images/hero/avatar-circle.png" alt="">
                                        </div>
                                        <div class="w-auto p-2">
                                            <p class="font-heading text-base text-gray-900">Robert Fox</p>
                                            <p class="mb-2 text-sm text-gray-500">UI/UX Designer</p>
                                            <div class="flex items-center px-2 py-1 bg-gray-100 rounded-full">
                                                <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="text-xs text-gray-700 font-medium">Maine, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 p-3">
                                <div class="mx-auto w-64 p-3 bg-white transform hover:-translate-y-3 transition ease-out duration-1000 rounded-2xl">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="w-auto p-2">
                                            <img src="gradia-assets/images/hero/avatar-circle2.png" alt="">
                                        </div>
                                        <div class="w-auto p-2">
                                            <p class="font-heading text-base text-gray-900">Cody Fisher</p>
                                            <p class="mb-2 text-sm text-gray-500">Ethical Hacker</p>
                                            <div class="flex items-center px-2 py-1 bg-gray-100 rounded-full">
                                                <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z" stroke="#71717A" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="text-xs text-gray-700 font-medium">Alaska, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative pt-24 pb-28 overflow-hidden"><div class="container mx-auto px-4">
            <div class="max-w-xl mx-auto mb-20">
                <h2 class="mb-5 font-heading font-semibold text-center text-5xl text-gray-900 sm:text-6xl" contenteditable="false">Nossa campanha até agora<br>
                </h2>
                <p class="text-base text-center text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
            </div>
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-wrap justify-center -m-6 md:-m-16 divide-y md:divide-y-0 md:divide-x divide-gray-200">
                    <div class="w-full md:w-1/3 p-6 md:p-16">
                        <h2 class="mb-3 font-heading font-bold text-12xl sm:text-13xl md:text-14xl xl:text-15xl text-center text-transparent bg-clip-text bg-gradient-blue">10</h2>
                        <h3 class="mb-3 font-heading font-semibold text-center text-gray-900 text-lg">Doadores em espera
                        </h3>
                        <p class="text-center text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor</p>
                    </div>
                    <div class="w-full md:w-1/3 p-6 md:p-16">
                        <h2 class="mb-3 font-heading font-bold text-12xl sm:text-13xl md:text-14xl xl:text-15xl text-center text-transparent bg-clip-text bg-gradient-blue">20
                        </h2>
                        <h3 class="mb-3 font-heading font-semibold text-center text-gray-900 text-lg">Doadores concluidos
                        </h3>
                        <p class="text-center text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor</p>
                    </div>
                    <div class="w-full md:w-1/3 p-6 md:p-16">
                        <h2 class="mb-3 font-heading font-bold text-12xl sm:text-13xl md:text-14xl xl:text-15xl text-center text-transparent bg-clip-text bg-gradient-green">30L</h2>
                        <h3 class="mb-3 font-heading font-semibold text-center text-gray-900 text-lg">Litros Doados
                        </h3>
                        <p class="text-center text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative pt-20 bg-black overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -m-6 mb-12">
                <div class="w-full p-6">
                    <h2 class="mb-16 max-w-xl font-heading font-bold text-6xl sm:text-7xl text-white">Three steps to get started</h2>
                    <div class="flex flex-wrap -m-6">
                        <div class="w-full lg:w-1/2 p-6">
                            <div class="mb-11 lg:max-w-sm">
                                <div class="flex flex-wrap -m-4">
                                    <div class="w-auto p-4">
                                        <div class="p-px max-w-max bg-gradient-cyan2 rounded-full">
                                            <div class="flex justify-center items-center font-heading text-xl bg-gray-900 w-12 h-12 text-white rounded-full">1</div>
                                        </div>
                                    </div>
                                    <div class="flex-1 p-4">
                                        <h3 class="mb-4 font-heading font-medium text-xl text-white">Create A Free Account</h3>
                                        <p class="text-gray-400 text-base">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-11 lg:max-w-sm">
                                <div class="flex flex-wrap -m-4">
                                    <div class="w-auto p-4">
                                        <div class="p-px max-w-max bg-gradient-cyan2 rounded-full">
                                            <div class="flex justify-center items-center font-heading text-xl bg-gray-900 w-12 h-12 text-white rounded-full">2</div>
                                        </div>
                                    </div>
                                    <div class="flex-1 p-4">
                                        <h3 class="mb-4 font-heading font-medium text-xl text-white">Select Your Package</h3>
                                        <p class="text-gray-400 text-base">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-11 lg:max-w-sm">
                                <div class="flex flex-wrap -m-4">
                                    <div class="w-auto p-4">
                                        <div class="p-px max-w-max bg-gradient-cyan2 rounded-full">
                                            <div class="flex justify-center items-center font-heading text-xl bg-gray-900 w-12 h-12 text-white rounded-full">3</div>
                                        </div>
                                    </div>
                                    <div class="flex-1 p-4">
                                        <h3 class="mb-4 font-heading font-medium text-xl text-white">Grow Business Fast</h3>
                                        <p class="mb-11 text-gray-400 text-base">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                                        <div class="group relative max-w-max">
                                            <div class="absolute top-0 left-0 w-full h-full bg-gradient-green opacity-0 group-hover:opacity-50 rounded-lg transition ease-out duration-300"></div>
                                            <button class="p-1 w-full font-heading font-semibold text-xs text-gray-900 uppercase tracking-px overflow-hidden rounded-md">
                                                <div class="relative p-4 px-11 bg-gradient-green overflow-hidden rounded-md">
                                                    <div class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full bg-white transition ease-in-out duration-500"></div>
                                                    <p class="relative z-10">Get Started now</p>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pl-4 lg:absolute lg:bottom-0 lg:right-0 lg:w-1/2">
            <div class="relative max-w-max ml-auto">
                <img class="relative z-10 ml-auto" src="images/pexels-artem-podrez-6823567.jpg" alt="">
                <div class="absolute w-full -top-16 left-32 bg-gradient-cyan h-16 rounded-tl-3xl"></div>
            </div>
        </div>
    </section>

    <section class="relative pt-24 pb-32 overflow-hidden">
        <div class="container mx-auto px-4">
            <h2 class="mb-5 max-w-2xl mx-auto font-heading font-bold text-center text-6xl sm:text-7xl text-gray-900">Doadores da campanha
            </h2>
            <p class="mb-16 text-base max-w-md mx-auto text-center text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
            <div class="flex flex-wrap -m-5">
                <div class="w-full md:w-1/3 p-5">
                    <div class="h-full p-0.5 bg-gradient-cyan transform hover:-translate-y-3 rounded-10 transition ease-out duration-1000">
                        <div class="h-full px-7 py-8 bg-white rounded-lg">
                            <img class="mb-8" src="gradia-assets/images/testimonials/avatar.png" alt="">
                            <p class="mb-8 text-lg text-gray-900">“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change.”</p>
                            <h3 class="mb-1.5 font-heading font-bold text-lg text-gray-900">Darrell Steward</h3>
                            <p class="text-sm text-gray-600">Product Designer</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-5">
                    <div class="h-full p-0.5 bg-gradient-cyan transform hover:-translate-y-3 rounded-10 shadow-5xl transition ease-out duration-1000">
                        <div class="h-full px-7 py-8 bg-white rounded-lg">
                            <img class="mb-8" src="gradia-assets/images/testimonials/avatar2.png" alt="">
                            <p class="mb-8 text-lg text-gray-900">“Simply the best. Better than all the rest. I’d recommend this product to beginners and advanced users.”</p>
                            <h3 class="mb-1.5 font-heading font-bold text-lg text-gray-900">Ronald Richards</h3>
                            <p class="text-sm text-gray-600">Software Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-5">
                    <div class="h-full p-0.5 bg-gradient-cyan transform hover:-translate-y-3 rounded-10 transition ease-out duration-1000">
                        <div class="h-full px-7 py-8 bg-white rounded-lg">
                            <img class="mb-8" src="gradia-assets/images/testimonials/avatar3.png" alt="">
                            <p class="mb-8 text-lg text-gray-900">“I cannot believe that I have got a brand new landing page after getting Omega. It was super easy to edit and publish.”</p>
                            <h3 class="mb-1.5 font-heading font-bold text-lg text-gray-900">Darrell Steward</h3>
                            <p class="text-sm text-gray-600">Product Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-24 pb-36 overflow-hidden">
        <div class="container mx-auto px-4">
            <h2 class="mb-14 font-heading font-semibold text-center text-6xl sm:text-7xl text-gray-900">Frequently asked question</h2>
            <div class="max-w-2xl mx-auto bg-gradient-cyan p-0.5">
                <div class="flex flex-wrap">
                    <div class="w-full">
                        <a href="#">
                            <div class="pb-0.5 bg-gradient-cyan">
                                <div class="py-3.5 px-5 bg-white">
                                    <div class="flex flex-wrap items-center justify-between -m-2">
                                        <div class="w-auto p-2">
                                            <p class="font-heading font-semibold text-lg text-gray-900">Is it really unlimited downloads?</p>
                                        </div>
                                        <div class="w-auto p-2">
                                            <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.5 3.75L15.75 9M15.75 9L10.5 14.25M15.75 9L2.25 9" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="#">
                            <div class="pb-0.5 bg-gradient-cyan">
                                <div class="py-3.5 px-5 bg-white">
                                    <div class="flex flex-wrap justify-between -m-2">
                                        <div class="flex-1 p-2">
                                            <p class="mb-5 font-heading font-semibold text-lg text-gray-900">Do you offer discounts on annual plans?</p>
                                            <p class="text-base text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis euismod ornare aenean ut justo elit amet. Gravida pulvinar ac elementum praesent vel quis accumsan, proin rhoncus.</p>
                                        </div>
                                        <div class="w-auto p-2">
                                            <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.75 7.5L9 2.25M9 2.25L14.25 7.5M9 2.25V15.75" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="#">
                            <div class="pb-0.5 bg-gradient-cyan">
                                <div class="py-3.5 px-5 bg-white">
                                    <div class="flex flex-wrap items-center justify-between -m-2">
                                        <div class="w-auto p-2">
                                            <p class="font-heading font-semibold text-lg text-gray-900">What kind of file do you offer with the packages?</p>
                                        </div>
                                        <div class="w-auto p-2">
                                            <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.5 3.75L15.75 9M15.75 9L10.5 14.25M15.75 9L2.25 9" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="#">
                            <div class="pb-0.5 bg-gradient-cyan">
                                <div class="py-3.5 px-5 bg-white">
                                    <div class="flex flex-wrap items-center justify-between -m-2">
                                        <div class="w-auto p-2">
                                            <p class="font-heading font-semibold text-lg text-gray-900">Can I invite my team members?</p>
                                        </div>
                                        <div class="w-auto p-2">
                                            <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.5 3.75L15.75 9M15.75 9L10.5 14.25M15.75 9L2.25 9" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="#">
                            <div>
                                <div class="py-3.5 px-5 bg-white">
                                    <div class="flex flex-wrap items-center justify-between -m-2">
                                        <div class="w-auto p-2">
                                            <p class="font-heading font-semibold text-lg text-gray-900">What is your refund policy?</p>
                                        </div>
                                        <div class="w-auto p-2">
                                            <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.5 3.75L15.75 9M15.75 9L10.5 14.25M15.75 9L2.25 9" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-28 pb-32 bg-gray-50 overflow-hidden">
        <div class="container mx-auto px-4">
            <p class="mb-16 text-2xl text-gray-900 text-center">Nossos parceiros
            </p>
            <div class="flex flex-wrap justify-center -m-10">
                <div class="w-auto p-10">
                    <img src="gradia-assets/logos/brands/brand1.png" alt="">
                </div>
                <div class="w-auto p-10">
                    <img src="gradia-assets/logos/brands/brand2.png" alt="">
                </div>
                <div class="w-auto p-10">
                    <img src="gradia-assets/logos/brands/brand3.png" alt="">
                </div>
                <div class="w-auto p-10">
                    <img src="gradia-assets/logos/brands/brand4.png" alt="">
                </div>
                <div class="w-auto p-10">
                    <img src="gradia-assets/logos/brands/brand5.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="pt-24 pb-32 bg-black overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="max-w-lg mx-auto text-center mb-14">
                <h2 class="mb-5 font-heading font-semibold text-6xl sm:text-7xl text-white">Participe Agora!
                </h2>
                <p class="text-gray-400 text-lg">Preencha o formulário com informações de onde você doará sangue e deixe seu contato.
                </p>
            </div>
            <div class="flex flex-wrap max-w-xl mx-auto -m-2.5">
                <div class="w-full p-2.5">
                    <input class="w-full px-5 py-4 text-gray-500 text-base bg-transparent border border-gray-800 outline-none focus:ring-4 focus:ring-indigo-500 placeholder-gray-500 rounded" type="text" placeholder="Your full name">
                </div>
                <div class="w-full p-2.5">
                    <input class="w-full px-5 py-4 text-gray-500 text-base bg-transparent border border-gray-800 outline-none focus:ring-4 focus:ring-indigo-500 placeholder-gray-500 rounded" type="text" placeholder="Your email address">
                </div>
                <div class="w-full p-2.5"><textarea class="w-full h-40 px-5 py-4 text-gray-500 text-base bg-transparent border border-gray-800 outline-none focus:ring-4 focus:ring-indigo-500 placeholder-gray-500 resize-none rounded" type="text" placeholder="Write message"></textarea></div>
                <div class="w-full p-2.5">
                    <div class="group relative">
                        <div class="absolute top-0 left-0 w-full h-full bg-gradient-green opacity-0 group-hover:opacity-50 rounded-lg transition ease-out duration-300"></div>
                        <button class="p-1 w-full font-heading font-semibold text-xs text-gray-900 uppercase tracking-px overflow-hidden rounded-md">
                            <div class="relative p-5 px-11 bg-gradient-green overflow-hidden rounded-md">
                                <div class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full bg-white transition ease-in-out duration-500"></div>
                                <p class="relative z-10">Send message</p>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="w-full p-2.5">
                    <p class="text-sm text-gray-500 text-center">
                        <span>By clicking the send button, you agree with our</span>
                        <a class="pb-1 hover:text-gray-400 border-b border-gray-500" href="#">Terms &amp; Conditions</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-black overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap lg:items-center -m-6">
                <div class="w-full md:w-auto p-6">
                    <img src="gradia-assets/logos/gradia-name-white.svg" alt="">
                </div>
                <div class="w-full md:w-1/2 p-6">
                    <ul class="flex flex-wrap -m-5">
                        <li class="p-5"><a class="font-heading text-base text-white hover:text-gray-200" href="#">Features</a></li>
                        <li class="p-5"><a class="font-heading text-base text-white hover:text-gray-200" href="#">Pricing</a></li>
                        <li class="p-5"><a class="font-heading text-base text-white hover:text-gray-200" href="#">Affiliate Program</a></li>
                        <li class="p-5"><a class="font-heading text-base text-white hover:text-gray-200" href="#">Press Kit</a></li>
                    </ul>
                </div>
                <div class="w-auto md:ml-auto p-6">
                    <div class="flex flex-wrap items-center -m-1.5">
                        <div class="w-auto p-1.5">
                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 6.66669L9.0755 11.0504C9.63533 11.4236 10.3647 11.4236 10.9245 11.0504L17.5 6.66669M4.16667 15.8334H15.8333C16.7538 15.8334 17.5 15.0872 17.5 14.1667V5.83335C17.5 4.91288 16.7538 4.16669 15.8333 4.16669H4.16667C3.24619 4.16669 2.5 4.91288 2.5 5.83335V14.1667C2.5 15.0872 3.24619 15.8334 4.16667 15.8334Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="w-auto p-1.5">
                            <h3 class="font-heading font-medium text-base text-white">info@gradia.com</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-9">
                <div class="border-b border-gray-800"></div>
            </div>
            <div class="flex flex-wrap items-center justify-between -m-6">
                <div class="w-auto p-6">
                    <p class="text-sm text-gray-300">© Copyright 2022. All Rights Reserved by Gradia.</p>
                </div>
                <div class="w-auto p-6">
                    <div class="flex flex-wrap -m-6">
                        <div class="w-auto p-6"><a class="text-gray-300 hover:text-gray-400 text-sm" href="#">Privacy Policy</a></div>
                        <div class="w-auto p-6"><a class="text-gray-300 hover:text-gray-400 text-sm" href="#">Terms &amp; Conditions</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>

