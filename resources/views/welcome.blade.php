<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <nav class="fixed z-30 w-full bg-white border-b-2 border-indigo-600">
        <div class="px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button class="p-2 text-gray-600 rounded cursor-pointer lg:hidden ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <a href="#" class="flex items-center text-xl font-bold">
                        <span class="text-blue-800">Perpustakaan</span>
                    </a>

                </div>
                <div class="flex items-center">

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </div>

                    <div class="relative inline-block ">
                        <!-- Dropdown toggle button -->
                        <button
                            class="relative flex items-center p-2 text-sm text-gray-600 bg-white border border-transparent rounded-md focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring dark:text-white dark:bg-gray-800 focus:outline-none">
                            <span class="mx-1">Jane Doe</span>
                            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div class="absolute right-0 z-20 w-56 mt-2 overflow-hidden bg-white rounded-md">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="pt-12 lg:flex">
        <div class="flex flex-col w-full px-4 py-0 overflow-y-auto border-b lg:border-r lg:h-screen lg:w-64">
            <div class="flex flex-col justify-between mt-6">
                <aside>
                    <ul class="menu bg-base-100 w-56 p-2 rounded-box">
                        <li><a>Dashboard</a></li>
                        <li class="menu-title">
                            <span>Master</span>
                        </li>
                        <li x-data="{ open: false }">
                            <a href="#" @click="open = ! open">Master Buku</a>
                            <div x-show="open" @click.outside="open = false">
                                <ul>
                                    <li><a href="">Pengarang</a></li>
                                    <li><a href="">Penerbit</a></li>
                                    <li><a href="">Rak</a></li>
                                    <li><a href="">Tahun Terbit</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a>Buku</a></li>
                        <li><a>Anggota</a></li>
                        <li class="menu-title">
                            <span>Transaksi</span>
                        </li>
                        <li><a>Peminjaman</a></li>
                        <li><a>Pengembalian</a></li>
                        <li class="menu-title">
                            <span>Report</span>
                        </li>
                        <li><a>Report</a></li>
                    </ul>




                </aside>

            </div>
        </div>


        <div class="w-full h-full p-4 m-8 overflow-y-auto">
            <div class="flex items-center justify-center p-16 mr-8 border-4 border-dotted lg:p-40">
                Content...
            </div>

            <div class="w-1/2">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic omnis cumque assumenda esse aut optio
                laudantium officia, necessitatibus vero amet eaque ipsa et maiores inventore expedita commodi corporis
                obcaecati quibusdam.
            </div>


        </div>

        {{-- <script>

        </script> --}}

</body>

</html>
