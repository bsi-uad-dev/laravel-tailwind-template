<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/logo-ec.svg') }}" type="image/x-icon">

    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="px-4 bg-blue-950">
    <div class="relative -z-10">
        <div class="fixed">
            <div class="fixed -top-48 -left-48 w-[500px] h-[500px] rounded-full"
                style="background: radial-gradient(circle, rgba(66, 158, 250, 0.474) 0%, rgba(0, 57, 115, 0) 70%);">
            </div>
            <div class="fixed -bottom-48 -right-48 w-[500px] h-[500px] rounded-full"
                style="background: radial-gradient(circle, rgba(86, 129, 171, 0.474) 0%, rgba(0, 57, 115, 0) 70%);">
            </div>
        </div>
    </div>

    <div class="min-h-screen flex items-center justify-center">
        <div class="flex md:w-4/6 w-full bg-gray-200 rounded-xl shadow-lg overflow-hidden">
            <div class="md:w-3/6">
                <form action="" method="post">
                    @csrf
                    <div class="w-full md:px-20 px-5 py-5 xl:py-16">
                        <div class="md:hidden xl:p-5 overflow-hidden rounded-xl mb-5">
                            <img src="{{ asset('img/search.jpg') }}"
                                class="h-24 w-full object-cover overflow-hidden rounded-xl" />
                        </div>
                        <div class="mb-5 flex items-center space-x-3 rtl:space-x-reverse">
                            <img src="{{ asset('img/logo-ec.svg') }}" class="h-5 xl:h-8" alt="Flowbite Logo">
                            <div class="">
                                <div
                                    class="self-center text-slate-600 text-xl xl:text-3xl whitespace-nowrap font-extrabold">
                                    {{ config('app.name') }}
                                </div>
                            </div>
                        </div>
                        <div class="mb-10 flex items-center space-x-3 rtl:space-x-reverse ">
                            <div class="">
                                <div class="self-center text-slate-600 text-xl font-sans font-bold">
                                    Welcome Back 👋.</div>
                                <div class="self-center text-slate-600 text-sm font-sans font-semibold">Hari ini adalah
                                    kesempatan
                                    Anda untuk
                                    maju. Masuk dan mulai kelola proyek akademik Anda.</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="" class="text-sm text-slate-400 font-semibold">Username:</label>
                            <input required placeholder="Username..." name="username"
                                class=" text-gray-700 focus:outline-none focus:shadow-outline  border border-gray-300 focus:ring-2 focus:ring-blue-800 rounded-xl focus:bg-blue-50 py-2 px-4 block w-full appearance-none"
                                type="text" />
                        </div>
                        <div class="mt-4">
                            <label for="" class="text-sm text-slate-400 font-semibold">Password:</label>
                            <input required placeholder="Password..." name="password"
                                class=" text-gray-700 focus:outline-none focus:shadow-outline  border border-gray-300 focus:ring-2 focus:ring-blue-800 rounded-xl focus:bg-blue-50 py-2 px-4 block w-full appearance-none"
                                type="password" />
                        </div>
                        <div class="mt-4 flex justify-end w-full">
                            <a href="#"
                                class="text-sm text-gray-500 underline hover:text-gray-700 font-semibold">Lupa
                                Password?</a>
                        </div>
                        <div class="mt-8">
                            <button class="btn-primary w-full">
                                Sign In</button>
                        </div>
                        <div class="mt-8 text-center text-gray-500 whitespace-nowrap">
                            Apakah Anda Belum Mempunyai Akun? <a href="{{ route('register-page') }}"
                                class="text-gray-500 hover:text-gray-700 font-semibold underline">Sign Up</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="md:w-3/6 hidden md:block xl:p-5 overflow-hidden rounded-xl">
                <img src="{{ asset('img/search.jpg') }}"
                    class="h-full w-full object-cover overflow-hidden rounded-xl" />
            </div>
        </div>
    </div>
    </div>
</body>

</html>
