<nav class="fixed w-full z-20 top-0 start-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/logo-ec.svg') }}" class="h-5" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap">{{ config('app.name') }}</span>
        </a>
        <div class="flex items-center">
            <div class="flex items-center ms-3">
                <button type="button" aria-expanded="false" data-dropdown-toggle="dropdown-user"
                    onclick="toggleDropdown()">
                    <div class="px-4 py-3 flex items-center text-slate-500" role="none">
                        <p class="text-sm text-gray-900 w-36 truncate" role="none">
                            Username User Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsa.
                        </p>
                        <div class="mx-2">
                            <i class="fa-solid fa-angle-down transform transition-transform duration-300 ease-in-out"
                                id="dropdown-icon"></i>
                        </div>
                    </div>
                </button>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                    id="dropdown-user">
                    <div class="px-4 py-3" role="none">
                        <p class="text-sm text-gray-900" role="none">
                            Username User
                        </p>
                        <p class="text-sm font-medium text-gray-900 truncate" role="none">
                            alex@gmail.com
                        </p>
                    </div>
                    <ul class="py-1" role="none">
                        <li>
                            <a href="{{ route('guest') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Guest</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Customer</a>
                        </li>
                        <li>
                            <a href="{{ route('example-page') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('login-page') }}"
                                class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100" role="menuitem">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</nav>

<script>
    // transparanrt topbar saat scrolling
    window.addEventListener('scroll', function() {
        const header = document.querySelector('nav');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>
