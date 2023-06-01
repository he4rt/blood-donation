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
  @livewireScripts
  @livewireStyles
  @livewire('notifications')
</head>

<body class="antialiased bg-body text-body font-body">
  <div>
    <section class="overflow-hidden"
      style="background: url(https://media.discordapp.net/attachments/606200832517472287/1113664146060357683/MacBook_Air_-_2.png?width=2182&height=1228) no-repeat; background-size: cover;">
      <section>
        <div class="flex items-center justify-between px-4 py-5">
          <div class="w-auto">
            <div class="flex flex-wrap items-center">
              <a href="#">
                <img class="max-w-[200px] max-h-18"
                  src="https://cdn.discordapp.com/attachments/606200832517472287/1113685078241980496/image.png" alt="">
              </a>
            </div>
          </div>
          <div class="w-auto">
            <div class="flex flex-wrap items-center">
              <div class="hidden w-auto lg:block">
                <ul class="flex items-center mr-10">
                  <li
                    class="text-lg text-white transition duration-500 ease-in-out delay-150 font-heading mr-9 hover:-translate-y-1 hover:scale-110">
                    <a href="#">Nossa
                      Campanha</a>
                  </li>
                  <li
                    class="text-lg text-white transition duration-500 ease-in-out delay-150 font-heading mr-9 hover:-translate-y-1 hover:scale-110">
                    <a href="#">Como
                      Doar</a>
                  </li>
                  <li
                    class="text-lg text-white transition duration-500 ease-in-out delay-150 font-heading mr-9 hover:-translate-y-1 hover:scale-110">
                    <a href="#">Doadores</a>
                  </li>
                  <li
                    class="text-lg text-white transition duration-500 ease-in-out delay-150 font-heading hover:-translate-y-1 hover:scale-110">
                    <a href="#">Parceiros</a>
                  </li>
                </ul>
              </div>
              <div class="hidden w-auto lg:block">
                <button
                  class="relative block px-5 py-2 overflow-hidden text-lg text-white border-2 border-white hover:border-white group font-heading rounded-10">
                  <div
                    class="absolute top-0 left-0 w-full h-full transition duration-500 ease-in-out transform -translate-y-full bg-white group-hover:-translate-y-0">
                  </div>
                  <p class="relative z-10 group-hover:text-gray-900">
                    Resgatar
                  </p>
                </button>
              </div>
              <div class="w-auto lg:hidden">
                <a href="#">
                  <svg class="text-gray-800 navbar-burger" width="51" height="51" viewbox="0 0 56 56" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="56" height="56" rx="28" fill="currentColor"></rect>
                    <path d="M37 32H19M37 24H19" stroke="white" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="fixed top-0 bottom-0 left-0 z-50 hidden w-4/6 navbar-menu sm:max-w-xs">
          <div class="fixed inset-0 bg-gray-800 navbar-backdrop opacity-80"></div>
          <nav class="relative z-10 h-full py-8 bg-white px-9">
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
                        <path d="M6 18L18 6M6 6L18 18" stroke="#111827" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="flex flex-col justify-center w-full py-8">
                <ul>
                  <li class="mb-12"><a class="text-lg font-medium text-gray-900 font-heading hover:text-gray-700"
                      href="#">Features</a></li>
                  <li class="mb-12"><a class="text-lg font-medium text-gray-900 font-heading hover:text-gray-700"
                      href="#">Solutions</a></li>
                  <li class="mb-12"><a class="text-lg font-medium text-gray-900 font-heading hover:text-gray-700"
                      href="#">Resources</a></li>
                  <li><a class="text-lg font-medium text-gray-900 font-heading hover:text-gray-700" href="#">Pricing</a>
                  </li>
                </ul>
              </div>
              <div class="flex flex-col justify-end w-full">
                <div class="flex flex-wrap">
                  <div class="w-full">
                    <button class="p-0.5 font-heading block w-full text-lg text-gray-900 font-medium rounded-10">
                      <div class="px-5 py-2 rounded-10">
                        <p>Login</p>
                      </div>
                    </button>
                  </div>
                  <div class="w-full">
                    <button
                      class="group relative p-0.5 font-heading block w-full text-lg text-gray-900 font-medium bg-gradient-cyan overflow-hidden rounded-10">
                      <div
                        class="absolute top-0 left-0 w-full h-full transition duration-500 ease-in-out transform -translate-y-full group-hover:-translate-y-0 bg-gradient-cyan">
                      </div>
                      <div class="px-5 py-2 bg-white rounded-lg">
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
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap justify-between pt-32 pb-40 -m-6">
          <div class="w-full p-6 lg:w-4/12 xl:w-1/3">
            <svg width="221" height="176" viewBox="0 0 221 176" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M20.15 40L24.5 5H31.3L26.95 40H20.15ZM1.85 32.55V26.1H34.95V32.55H1.85ZM7.2 40L11.55 5H18.35L14 40H7.2ZM3.5 18.9V12.45H36.65V18.9H3.5ZM4.5 84V49H21.05C24.9167 49 28.3167 49.7167 31.25 51.15C34.1833 52.5833 36.4667 54.6 38.1 57.2C39.7667 59.8 40.6 62.9 40.6 66.5C40.6 70.0667 39.7667 73.1667 38.1 75.8C36.4667 78.4 34.1833 80.4167 31.25 81.85C28.3167 83.2833 24.9167 84 21.05 84H4.5ZM14.4 76.1H20.65C22.65 76.1 24.3833 75.7333 25.85 75C27.35 74.2333 28.5167 73.1333 29.35 71.7C30.1833 70.2333 30.6 68.5 30.6 66.5C30.6 64.4667 30.1833 62.7333 29.35 61.3C28.5167 59.8667 27.35 58.7833 25.85 58.05C24.3833 57.2833 22.65 56.9 20.65 56.9H14.4V76.1ZM54.9086 62.55H71.1586V69.95H54.9086V62.55ZM55.6086 76.35H73.9086V84H45.8086V49H73.2586V56.65H55.6086V76.35ZM89.6641 84L74.7141 49H85.4141L98.0141 79.3H91.7141L104.614 49H114.414L99.4141 84H89.6641ZM128.763 84.7C125.896 84.7 123.13 84.35 120.463 83.65C117.83 82.9167 115.68 81.9833 114.013 80.85L117.263 73.55C118.83 74.55 120.63 75.3833 122.663 76.05C124.73 76.6833 126.78 77 128.813 77C130.18 77 131.28 76.8833 132.113 76.65C132.946 76.3833 133.546 76.05 133.913 75.65C134.313 75.2167 134.513 74.7167 134.513 74.15C134.513 73.35 134.146 72.7167 133.413 72.25C132.68 71.7833 131.73 71.4 130.563 71.1C129.396 70.8 128.096 70.5 126.663 70.2C125.263 69.9 123.846 69.5167 122.413 69.05C121.013 68.5833 119.73 67.9833 118.563 67.25C117.396 66.4833 116.446 65.5 115.713 64.3C114.98 63.0667 114.613 61.5167 114.613 59.65C114.613 57.55 115.18 55.65 116.313 53.95C117.48 52.25 119.213 50.8833 121.513 49.85C123.813 48.8167 126.68 48.3 130.113 48.3C132.413 48.3 134.663 48.5667 136.863 49.1C139.096 49.6 141.08 50.35 142.813 51.35L139.763 58.7C138.096 57.8 136.446 57.1333 134.813 56.7C133.18 56.2333 131.596 56 130.063 56C128.696 56 127.596 56.15 126.763 56.45C125.93 56.7167 125.33 57.0833 124.963 57.55C124.596 58.0167 124.413 58.55 124.413 59.15C124.413 59.9167 124.763 60.5333 125.463 61C126.196 61.4333 127.146 61.8 128.313 62.1C129.513 62.3667 130.813 62.65 132.213 62.95C133.646 63.25 135.063 63.6333 136.463 64.1C137.896 64.5333 139.196 65.1333 140.363 65.9C141.53 66.6333 142.463 67.6167 143.163 68.85C143.896 70.05 144.263 71.5667 144.263 73.4C144.263 75.4333 143.68 77.3167 142.513 79.05C141.38 80.75 139.663 82.1167 137.363 83.15C135.096 84.1833 132.23 84.7 128.763 84.7ZM4.5 128V93H21.05C24.9167 93 28.3167 93.7167 31.25 95.15C34.1833 96.5833 36.4667 98.6 38.1 101.2C39.7667 103.8 40.6 106.9 40.6 110.5C40.6 114.067 39.7667 117.167 38.1 119.8C36.4667 122.4 34.1833 124.417 31.25 125.85C28.3167 127.283 24.9167 128 21.05 128H4.5ZM14.4 120.1H20.65C22.65 120.1 24.3833 119.733 25.85 119C27.35 118.233 28.5167 117.133 29.35 115.7C30.1833 114.233 30.6 112.5 30.6 110.5C30.6 108.467 30.1833 106.733 29.35 105.3C28.5167 103.867 27.35 102.783 25.85 102.05C24.3833 101.283 22.65 100.9 20.65 100.9H14.4V120.1ZM63.4586 128.7C60.6586 128.7 58.0753 128.25 55.7086 127.35C53.3419 126.45 51.2753 125.183 49.5086 123.55C47.7753 121.883 46.4253 119.95 45.4586 117.75C44.4919 115.55 44.0086 113.133 44.0086 110.5C44.0086 107.867 44.4919 105.45 45.4586 103.25C46.4253 101.05 47.7753 99.1333 49.5086 97.5C51.2753 95.8333 53.3419 94.55 55.7086 93.65C58.0753 92.75 60.6586 92.3 63.4586 92.3C66.2919 92.3 68.8753 92.75 71.2086 93.65C73.5753 94.55 75.6253 95.8333 77.3586 97.5C79.0919 99.1333 80.4419 101.05 81.4086 103.25C82.4086 105.45 82.9086 107.867 82.9086 110.5C82.9086 113.133 82.4086 115.567 81.4086 117.8C80.4419 120 79.0919 121.917 77.3586 123.55C75.6253 125.183 73.5753 126.45 71.2086 127.35C68.8753 128.25 66.2919 128.7 63.4586 128.7ZM63.4586 120.5C64.7919 120.5 66.0253 120.267 67.1586 119.8C68.3253 119.333 69.3253 118.667 70.1586 117.8C71.0253 116.9 71.6919 115.833 72.1586 114.6C72.6586 113.367 72.9086 112 72.9086 110.5C72.9086 108.967 72.6586 107.6 72.1586 106.4C71.6919 105.167 71.0253 104.117 70.1586 103.25C69.3253 102.35 68.3253 101.667 67.1586 101.2C66.0253 100.733 64.7919 100.5 63.4586 100.5C62.1253 100.5 60.8753 100.733 59.7086 101.2C58.5753 101.667 57.5753 102.35 56.7086 103.25C55.8753 104.117 55.2086 105.167 54.7086 106.4C54.2419 107.6 54.0086 108.967 54.0086 110.5C54.0086 112 54.2419 113.367 54.7086 114.6C55.2086 115.833 55.8753 116.9 56.7086 117.8C57.5753 118.667 58.5753 119.333 59.7086 119.8C60.8753 120.267 62.1253 120.5 63.4586 120.5ZM83.4055 128L98.8555 93H108.605L124.105 128H113.805L101.705 97.85H105.605L93.5055 128H83.4055ZM91.8555 121.2L94.4055 113.9H111.505L114.055 121.2H91.8555ZM126.912 128V93H135.062L149.562 116.8H145.262L159.362 93H167.512L167.612 128H158.512L158.412 106.85H159.962L149.412 124.55H145.012L134.162 106.85H136.062V128H126.912ZM15.25 172L0.3 137H11L23.6 167.3H17.3L30.2 137H40L25 172H15.25ZM42.0488 172V137H51.9488V172H42.0488ZM58.9922 172V137H75.5422C79.4089 137 82.8089 137.717 85.7422 139.15C88.6755 140.583 90.9589 142.6 92.5922 145.2C94.2589 147.8 95.0922 150.9 95.0922 154.5C95.0922 158.067 94.2589 161.167 92.5922 163.8C90.9589 166.4 88.6755 168.417 85.7422 169.85C82.8089 171.283 79.4089 172 75.5422 172H58.9922ZM68.8922 164.1H75.1422C77.1422 164.1 78.8755 163.733 80.3422 163C81.8422 162.233 83.0089 161.133 83.8422 159.7C84.6755 158.233 85.0922 156.5 85.0922 154.5C85.0922 152.467 84.6755 150.733 83.8422 149.3C83.0089 147.867 81.8422 146.783 80.3422 146.05C78.8755 145.283 77.1422 144.9 75.1422 144.9H68.8922V164.1ZM95.6125 172L111.063 137H120.813L136.313 172H126.013L113.913 141.85H117.813L105.713 172H95.6125ZM104.063 165.2L106.613 157.9H123.713L126.263 165.2H104.063Z"
                fill="#782BF1" />
              <path
                d="M211.455 93.0498C208.647 89.8018 205.488 86.877 202.034 84.3296C201.728 84.1151 201.364 84 200.991 84C200.618 84 200.253 84.1151 199.948 84.3296C196.501 86.8781 193.347 89.8028 190.545 93.0498C184.298 100.238 181 107.815 181 114.964C181 120.278 183.107 125.374 186.858 129.132C190.609 132.889 195.696 135 201 135C206.304 135 211.391 132.889 215.142 129.132C218.893 125.374 221 120.278 221 114.964C221 107.815 217.702 100.238 211.455 93.0498ZM213.693 117.091C213.222 119.729 211.955 122.159 210.063 124.054C208.171 125.949 205.745 127.217 203.111 127.689C203.014 127.705 202.916 127.713 202.818 127.714C202.362 127.714 201.923 127.542 201.587 127.233C201.252 126.923 201.044 126.499 201.007 126.044C200.969 125.588 201.103 125.135 201.383 124.775C201.663 124.414 202.068 124.172 202.518 124.096C206.284 123.461 209.48 120.26 210.118 116.48C210.199 116.004 210.465 115.579 210.859 115.3C211.252 115.02 211.74 114.908 212.216 114.989C212.691 115.07 213.116 115.337 213.395 115.731C213.674 116.125 213.785 116.614 213.705 117.091H213.693Z"
                fill="#782BF1" />
            </svg>
            <p class="my-5 text-xl font-medium text-gray-900 font-heading">
              A contribuição com a comunidade pode
              ir além dos seus commits.
            </p>
            <div class="flex flex-wrap mb-20 -m-3">
              <div class="w-full p-3 lg:w-auto">
                <button
                  class="w-full px-6 py-2 text-lg text-white bg-purple-600 rounded-xl font-heading hover:bg-purple-500">
                  Conhecer campanha
                </button>
              </div>
            </div>
          </div>
          <div class="hidden w-full p-6 lg:w-7/12 xl:w-1/2 md:block">
            <div class="mx-auto max-w-max">
              <div class="flex flex-wrap justify-center mb-3 -m-3">
                <div class="w-full p-3">
                  <div
                    class="w-64 p-3 mx-auto transition duration-1000 ease-out transform bg-white hover:-translate-y-3 rounded-2xl">
                    <div class="flex flex-wrap -m-2">
                      <div class="w-auto p-2">
                        <img src="gradia-assets/images/hero/avatar-circle.png" alt="">
                      </div>
                      <div class="w-auto p-2">
                        <p class="text-base text-gray-900 font-heading">Aguardando Doador</p>
                        <p class="mb-2 text-sm text-gray-500">Software Engineer</p>
                        <div class="flex items-center justify-center px-2 py-1 bg-purple-100 rounded-full ">
                          <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                              d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                          <p class="text-xs font-medium text-purple-600">São Paulo, BR</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex flex-wrap justify-center mb-3 -m-3 max-w-max">
                <div class="w-full p-3 sm:w-1/2">
                  <div
                    class="w-64 p-3 mx-auto transition duration-1000 ease-out transform bg-white hover:-translate-y-3 rounded-2xl">
                    <div class="flex flex-wrap -m-2">
                      <div class="w-auto p-2">
                        <img src="gradia-assets/images/hero/avatar-circle2.png" alt="">
                      </div>
                      <div class="w-auto p-2">
                        <p class="text-base text-gray-900 font-heading">Aguardando Doador</p>
                        <p class="mb-2 text-sm text-gray-500">Software Tester</p>
                        <div class="flex items-center justify-center px-2 py-1 bg-purple-100 rounded-full ">
                          <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                              d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                          <p class="text-xs font-medium text-purple-600">São Paulo, BR</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-full p-3 sm:w-1/2">
                  <div
                    class="w-64 p-3 mx-auto transition duration-1000 ease-out transform bg-white hover:-translate-y-3 rounded-2xl">
                    <div class="flex flex-wrap -m-2">
                      <div class="w-auto p-2">
                        <img src="gradia-assets/images/hero/avatar-circle3.png" alt="">
                      </div>
                      <div class="w-auto p-2">
                        <p class="text-base text-gray-900 font-heading">Aguardando Doador</p>
                        <p class="mb-2 text-sm text-gray-500">Project Manager</p>
                        <div class="flex items-center justify-center px-2 py-1 bg-purple-100 rounded-full ">
                          <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                              d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                          <p class="text-xs font-medium text-purple-600">São Paulo, BR</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex flex-wrap justify-center mb-3 -m-3 max-w-max xl:-ml-20">
                <div class="w-full p-3 sm:w-1/2">
                  <div
                    class="w-64 p-3 mx-auto transition duration-1000 ease-out transform bg-white hover:-translate-y-3 rounded-2xl">
                    <div class="flex flex-wrap -m-2">
                      <div class="w-auto p-2">
                        <img src="gradia-assets/images/hero/avatar-circle4.png" alt="">
                      </div>
                      <div class="w-auto p-2">
                        <p class="text-base text-gray-900 font-heading">Aguardando Doador</p>
                        <p class="mb-2 text-sm text-gray-500">Scrum Master</p>
                        <div class="flex items-center justify-center px-2 py-1 bg-purple-100 rounded-full ">
                          <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                              d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                          <p class="text-xs font-medium text-purple-600">São Paulo, BR</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-full p-3 sm:w-1/2">
                  <div
                    class="w-64 p-3 mx-auto transition duration-1000 ease-out transform bg-white hover:-translate-y-3 rounded-2xl">
                    <div class="flex flex-wrap -m-2">
                      <div class="w-auto p-2">
                        <img src="gradia-assets/images/hero/avatar-circle5.png" alt="">
                      </div>
                      <div class="w-auto p-2">
                        <p class="text-base text-gray-900 font-heading">Aguardando Doador</p>
                        <p class="mb-2 text-sm text-gray-500">Software Engineer</p>
                        <div class="flex items-center justify-center px-2 py-1 bg-purple-100 rounded-full ">
                          <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                              d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                          <p class="text-xs font-medium text-purple-600">São Paulo, BR</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex flex-wrap justify-center -m-3 max-w-max">
                <div class="w-full p-3 sm:w-1/2">
                  <div
                    class="w-64 p-3 mx-auto transition duration-1000 ease-out transform bg-white hover:-translate-y-3 rounded-2xl">
                    <div class="flex flex-wrap -m-2">
                      <div class="w-auto p-2">
                        <img src="gradia-assets/images/hero/avatar-circle.png" alt="">
                      </div>
                      <div class="w-auto p-2">
                        <p class="text-base text-gray-900 font-heading">Aguardando Doador</p>
                        <p class="mb-2 text-sm text-gray-500">UI/UX Designer</p>
                        <div class="flex items-center justify-center px-2 py-1 bg-purple-100 rounded-full ">
                          <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                              d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                          <p class="text-xs font-medium text-purple-600">São Paulo, BR</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-full p-3 sm:w-1/2">
                  <div
                    class="w-64 p-3 mx-auto transition duration-1000 ease-out transform bg-white hover:-translate-y-3 rounded-2xl">
                    <div class="flex flex-wrap -m-2">
                      <div class="w-auto p-2">
                        <img src="gradia-assets/images/hero/avatar-circle2.png" alt="">
                      </div>
                      <div class="w-auto p-2">
                        <p class="text-base text-gray-900 font-heading">Aguardando Doador</p>
                        <p class="mb-2 text-sm text-gray-500">Ethical Hacker</p>
                        <div class="flex items-center justify-center px-2 py-1 bg-purple-100 rounded-full ">
                          <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                              d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z"
                              stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                          <p class="text-xs font-medium text-purple-600">São Paulo, BR</p>
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

    <section class="relative pt-24 overflow-hidden pb-28">
      <div class="container px-4 mx-auto">
        <div class="max-w-xl mx-auto mb-20">
          <h2 class="mb-5 text-5xl font-semibold text-center text-gray-900 font-heading sm:text-6xl"
            contenteditable="false">Nossa campanha até agora<br>
          </h2>
          <p class="text-base text-center text-gray-600">Confira o progresso da nossa campanha de doação de sangue e os impactos até o momento. Nosso objetivo é cada vez mais.</p>
        </div>
        <div class="max-w-4xl mx-auto">
          <div class="flex flex-wrap justify-center -m-6 divide-y divide-gray-200 md:-m-16 md:divide-y-0 md:divide-x">
            <div class="w-full p-6 md:w-1/3 md:p-16">
              <h2
                class="mb-3 font-bold text-center text-transparent font-heading text-12xl sm:text-13xl md:text-14xl xl:text-15xl bg-clip-text bg-gradient-purple">
                00</h2>
              <h3 class="mb-3 text-lg font-semibold text-center text-gray-900 font-heading">Doadores em espera
              </h3>
              <p class="text-center text-gray-600">Pessoas que se comprometeram em fazer a sua parte até o fim da campanha</p>
            </div>
            <div class="w-full p-6 md:w-1/3 md:p-16">
              <h2
                class="mb-3 font-bold text-center text-transparent font-heading text-12xl sm:text-13xl md:text-14xl xl:text-15xl bg-clip-text bg-gradient-purple">
                00
              </h2>
              <h3 class="mb-3 text-lg font-semibold text-center text-gray-900 font-heading">Doadores
                concluidos
              </h3>
              <p class="text-center text-gray-600">Pessoas que vestiram a camiseta da campanha em pró de salvar vidas</p>
            </div>
            <div class="w-full p-6 md:w-1/3 md:p-16">
              <h2
                class="mb-3 font-bold text-center text-transparent bg-red-500 font-heading text-12xl sm:text-13xl md:text-14xl xl:text-15xl bg-clip-text">
                00L</h2>
              <h3 class="mb-3 text-lg font-semibold text-center text-gray-900 font-heading">Litros Doados
              </h3>
              <p class="text-center text-gray-600">Cada gota importa. De gota em gota, a gente alimenta a vida</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="relative pt-20 overflow-hidden bg-purple-800">
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap mb-12 -m-6">
          <div class="w-full p-6">
            <h2 class="max-w-xl mb-16 text-6xl font-bold text-white font-heading sm:text-7xl">Como participar
            </h2>
            <div class="flex flex-wrap -m-6">
              <div class="w-full p-6 lg:w-1/2">
                <div class="mb-11 lg:max-w-sm">
                  <div class="flex flex-wrap -m-4">
                    <div class="w-auto p-4">
                      <div class="p-px rounded-full max-w-max">
                        <div
                          class="flex items-center justify-center w-12 h-12 text-xl text-white bg-gray-900 rounded-full font-heading">
                          1
                        </div>
                      </div>
                    </div>
                    <div class="flex-1 p-4">
                      <h3 class="mb-4 text-xl font-semibold text-white font-heading">Esteja atento</h3>
                      <p class="text-base text-gray-200">Confira como funciona o sistema de doação de sangue nos postos de coleta da sua cidade e fique atento aos requisitos e impedimentos. Honestidade também salva vidas. Ao doar sangue, seja sincero na entrevista.</p>
                    </div>
                  </div>
                </div>
                <div class="mb-11 lg:max-w-sm">
                  <div class="flex flex-wrap -m-4">
                    <div class="w-auto p-4">
                      <div class="p-px rounded-full max-w-max">
                        <div
                          class="flex items-center justify-center w-12 h-12 text-xl text-white bg-gray-900 rounded-full font-heading">
                          2
                        </div>
                      </div>
                    </div>
                    <div class="flex-1 p-4">
                      <h3 class="mb-4 text-xl font-semibold text-white font-heading">Faça a sua parte</h3>
                      <p class="text-base text-gray-200">Doe sangue! É seguro, rápido e essencial à vida. Não se esqueça de tirar uma foto ou um comprovante de doação para poder participar do movimento.</p>
                    </div>
                  </div>
                </div>
                <div class="mb-11 lg:max-w-sm">
                  <div class="flex flex-wrap -m-4">
                    <div class="w-auto p-4">
                      <div class="p-px rounded-full max-w-max">
                        <div
                          class="flex items-center justify-center w-12 h-12 text-xl text-white bg-gray-900 rounded-full font-heading">
                          3
                        </div>
                      </div>
                    </div>
                    <div class="flex-1 p-4">
                      <h3 class="mb-4 text-xl font-semibold text-white font-heading">Espalhe a campanha!</h3>
                      <p class="text-base text-gray-200 mb-11">Faça no nosso site o processo de confirmação de doação para participar de sorteios e aproveite e poste nas redes sociais a sua colaboração. Seu compartilhamento ajuda a campanha e a solidariedade transforma o mundo.</p>
                      <div class="relative group max-w-max">
                        <div
                          class="absolute top-0 left-0 w-full h-full transition duration-300 ease-out rounded-lg opacity-0 group-hover:opacity-50">
                        </div>
                        <button
                          class="w-full p-1 overflow-hidden text-xs font-semibold text-white uppercase rounded-md hover:text-gray-900 font-heading tracking-px">
                          <div
                            class="relative p-4 overflow-hidden bg-transparent border-2 border-white rounded-md px-11">
                            <div
                              class="absolute top-0 left-0 w-full h-full transition duration-500 ease-in-out transform -translate-y-full bg-white group-hover:-translate-y-0">
                            </div>
                            <p class="relative z-10">Fazer parte</p>
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
      <div class="md:pl-4 lg:absolute lg:bottom-0 lg:right-0 lg:w-1/2">
        <div class="relative ml-auto max-w-max">
          <img class="relative z-10 ml-auto md:rounded-tl-2xl" src="https://i.imgur.com/i7BUfKA.jpeg" alt="">
        </div>
      </div>
    </section>

    <section class="relative pt-24 pb-32 overflow-hidden bg-gray-100">
      <div class="container px-4 mx-auto">
        <h2 class="max-w-2xl mx-auto mb-5 text-6xl font-bold text-center text-gray-900 font-heading sm:text-7xl">
          Doadores da campanha
        </h2>
        <p class="max-w-md mx-auto mb-16 text-base text-center text-gray-600">.</p>
        <div class="flex flex-wrap -m-5">
          @foreach(range(1,5) as $fodase)
          <div class="w-full p-5 md:w-1/5">
            <div
              class="h-full p-0.5 bg-white transform hover:-translate-y-3 rounded-10 transition ease-out duration-1000">
              <div class="flex flex-col h-full gap-2 p-4 text-center bg-white rounded-xl">
                <img class="w-full rounded-lg" src="{{ 'https://github.com/danielhe4rt.png' }}" alt="">
                <div class="flex items-center justify-between md:flex-col">
                  <h3 class="text-lg font-bold text-gray-900">Darrell Steward</h3>
                  <p class="text-sm text-gray-600">Developer</p>
                </div>
                <div class="flex items-center justify-center px-2 py-1 bg-purple-100 rounded-full ">
                  <svg class="mr-1" width="13" height="13" viewbox="0 0 13 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M9.56413 9.02246C9.19416 9.39243 8.5298 10.0568 7.91404 10.6726C7.13299 11.4536 5.867 11.4536 5.08595 10.6725C4.4823 10.0689 3.82786 9.41446 3.43587 9.02246C1.7436 7.33019 1.7436 4.58648 3.43587 2.8942C5.12814 1.20193 7.87185 1.20193 9.56413 2.8942C11.2564 4.58648 11.2564 7.33019 9.56413 9.02246Z"
                      stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                      d="M8.125 5.95833C8.125 6.8558 7.39746 7.58333 6.5 7.58333C5.60253 7.58333 4.875 6.8558 4.875 5.95833C4.875 5.06087 5.60253 4.33333 6.5 4.33333C7.39746 4.33333 8.125 5.06087 8.125 5.95833Z"
                      stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <p class="text-xs font-medium text-purple-600">São Paulo, BR</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="hidden pt-24 overflow-hidden pb-36">
      <div class="container px-4 mx-auto">
        <h2 class="text-6xl font-semibold text-center text-gray-900 mb-14 font-heading sm:text-7xl">Frequently asked
          question</h2>
        <div class="max-w-2xl mx-auto bg-gradient-purple p-0.5">
          <div class="flex flex-wrap">
            <div class="w-full">
              <a href="#">
                <div class="pb-0.5 bg-gradient-purple">
                  <div class="py-3.5 px-5 bg-white">
                    <div class="flex flex-wrap items-center justify-between -m-2">
                      <div class="w-auto p-2">
                        <p class="text-lg font-semibold text-gray-900 font-heading">Is it really
                          unlimited downloads?</p>
                      </div>
                      <div class="w-auto p-2">
                        <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.5 3.75L15.75 9M15.75 9L10.5 14.25M15.75 9L2.25 9" stroke="#6d28d9"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="w-full">
              <a href="#">
                <div class="pb-0.5 bg-gradient-purple">
                  <div class="py-3.5 px-5 bg-white">
                    <div class="flex flex-wrap justify-between -m-2">
                      <div class="flex-1 p-2">
                        <p class="mb-5 text-lg font-semibold text-gray-900 font-heading">Do you
                          offer discounts on annual plans?</p>
                        <p class="text-base text-black">Lorem ipsum dolor sit amet, consectetur
                          adipiscing elit. Sagittis euismod ornare aenean ut justo elit amet.
                          Gravida pulvinar ac elementum praesent vel quis accumsan, proin
                          rhoncus.</p>
                      </div>
                      <div class="w-auto p-2">
                        <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M3.75 7.5L9 2.25M9 2.25L14.25 7.5M9 2.25V15.75" stroke="#6d28d9" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="w-full">
              <a href="#">
                <div class="pb-0.5 bg-gradient-purple">
                  <div class="py-3.5 px-5 bg-white">
                    <div class="flex flex-wrap items-center justify-between -m-2">
                      <div class="w-auto p-2">
                        <p class="text-lg font-semibold text-gray-900 font-heading">What kind of
                          file do you offer with the packages?</p>
                      </div>
                      <div class="w-auto p-2">
                        <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.5 3.75L15.75 9M15.75 9L10.5 14.25M15.75 9L2.25 9" stroke="#6d28d9"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="w-full">
              <a href="#">
                <div class="pb-0.5 bg-gradient-purple">
                  <div class="py-3.5 px-5 bg-white">
                    <div class="flex flex-wrap items-center justify-between -m-2">
                      <div class="w-auto p-2">
                        <p class="text-lg font-semibold text-gray-900 font-heading">Can I invite my
                          team members?</p>
                      </div>
                      <div class="w-auto p-2">
                        <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.5 3.75L15.75 9M15.75 9L10.5 14.25M15.75 9L2.25 9" stroke="#6d28d9"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
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
                        <p class="text-lg font-semibold text-gray-900 font-heading">What is your
                          refund policy?</p>
                      </div>
                      <div class="w-auto p-2">
                        <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10.5 3.75L15.75 9M15.75 9L10.5 14.25M15.75 9L2.25 9" stroke="#6d28d9"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
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

    <section class="overflow-hidden">
      <div class="flex min-h-screen">
        <div class="flex-1 hidden bg-center bg-cover md:block"
          style="background-image: url('https://media.discordapp.net/attachments/606200832517472287/1113681480741298227/image.png?width=678&height=669');">
        </div>
        <div class="flex flex-col items-center justify-center flex-1 px-8 py-16 md:px-0">
          <div>
            <div class="max-w-lg mx-auto text-center mb-14">
              <h2 class="mb-5 text-6xl font-semibold text-gray-900 font-heading sm:text-7xl">Participe Agora!</h2>
              <p class="text-lg text-gray-900">Preencha o formulário com informações de onde você doará sangue e deixe
                seu contato.
              </p>
            </div>

            <div>
              <livewire:donor-form />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 overflow-hidden bg-white">
      <div class="container px-4 mx-auto">
        <div class="py-9">
          <div class="border-b border-gray-800"></div>
        </div>
        <div class="flex flex-wrap items-center justify-between -m-6">
          <div class="w-auto p-6">
            <p class="text-sm text-gray-900">© Copyright 2023. Todos direitos reservados He4rt Developers.</p>
          </div>
          <div class="w-auto p-6">
            <div class="flex flex-wrap -m-6">
              <div class="w-auto p-6"><a class="text-sm text-gray-900 hover:text-gray-500" href="#">Privacy
                  Policy</a></div>
              <div class="w-auto p-6"><a class="text-sm text-gray-900 hover:text-gray-500" href="#">Terms
                  &amp; Conditions</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

</html>
