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
        <div class="flex md:w-4/6 w-full bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="md:w-3/6">
                <form action="" method="post">
                    @csrf
                    <div class="w-full md:px-20 px-10 py-5">
                        <div class="md:hidden xl:p-5 overflow-hidden rounded-xl mb-5">
                            <img src="{{ asset('img/search.jpg') }}"
                                class="h-24 w-full object-cover overflow-hidden rounded-xl" />
                        </div>
                        <div class="mb-5 flex items-center space-x-3 rtl:space-x-reverse">
                            <img src="{{ asset('img/logo-ec.svg') }}" class="h-5 xl:h-8" alt="Flowbite Logo">
                            <div class="">
                                <div
                                    class="self-center text-slate-600 text-xl xl:text-3xl font-extrabold whitespace-nowrap">
                                    {{ config('app.name') }}
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 flex items-center space-x-3 rtl:space-x-reverse ">
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
                            <label for="" class="text-sm text-slate-400 font-semibold">Nama Lengkap:</label>
                            <input required placeholder="Nama Lengkap..." name="fullname"
                                class=" text-gray-700 focus:outline-none focus:shadow-outline  border border-gray-300 focus:ring-2 focus:ring-blue-800 rounded-xl focus:bg-blue-50 py-2 px-4 block w-full appearance-none"
                                type="text" />
                        </div>
                        <div class="mt-4">
                            <label for="" class="text-sm text-slate-400 font-semibold">Username:</label>
                            <input required placeholder="Username..." name="username"
                                class=" text-gray-700 focus:outline-none focus:shadow-outline  border border-gray-300 focus:ring-2 focus:ring-blue-800 rounded-xl focus:bg-blue-50 py-2 px-4 block w-full appearance-none"
                                type="text" />
                        </div>
                        <div class="mt-4">
                            <label for="" class="text-sm text-slate-400 font-semibold">Email:</label>
                            <input required placeholder="Email..." name="email"
                                class=" text-gray-700 focus:outline-none focus:shadow-outline  border border-gray-300 focus:ring-2 focus:ring-blue-800 rounded-xl focus:bg-blue-50 py-2 px-4 block w-full appearance-none"
                                type="text" />
                        </div>
                        <div class="mt-4">
                            <label for="input" class="text-sm text-slate-400 font-semibold">Password:</label>
                            <div class="relative">
                                <x-basic-input type="password" name="Password" placeholder="Password . . . "
                                    id="passwordInput1" value="{{ old('inputan') }}" />
                                <button type="button" onclick="togglePassword1()"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500">
                                    <i id="toggleIcon1" class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="input" class="text-sm text-slate-400 font-semibold">Confirm Password:</label>
                            <div class="relative">
                                <x-basic-input type="password" name="confirm-password"
                                    placeholder="Confirm Password . . . " id="passwordInput2"
                                    value="{{ old('inputan') }}" />
                                <button type="button" onclick="togglePassword2()"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500">
                                    <i id="toggleIcon2" class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="mt-8">
                            <button class="btn-primary w-full">
                                Sign Up</button>
                        </div>
                        <div class="mt-8 text-center text-gray-500 whitespace-nowrap">
                            Apakah Anda Sudah Mempunyai Akun? <a href="{{ route('login-page') }}"
                                class="text-gray-500 hover:text-gray-700 font-semibold underline">Sign In</a>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
        function togglePassword1() {
            const passwordInput1 = document.getElementById('passwordInput1');
            const toggleIcon1 = document.getElementById('toggleIcon1');

            if (passwordInput1.type === 'password') {
                passwordInput1.type = 'text';
                toggleIcon1.classList.remove('fa-eye');
                toggleIcon1.classList.add('fa-eye-slash');
            } else {
                passwordInput1.type = 'password';
                toggleIcon1.classList.remove('fa-eye-slash');
                toggleIcon1.classList.add('fa-eye');
            }
        }

        function togglePassword2() {
            const passwordInput2 = document.getElementById('passwordInput2');
            const toggleIcon2 = document.getElementById('toggleIcon2');

            if (passwordInput2.type === 'password') {
                passwordInput2.type = 'text';
                toggleIcon2.classList.remove('fa-eye');
                toggleIcon2.classList.add('fa-eye-slash');
            } else {
                passwordInput2.type = 'password';
                toggleIcon2.classList.remove('fa-eye-slash');
                toggleIcon2.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>
