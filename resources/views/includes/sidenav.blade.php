
{{-- Navbar End --}}

{{-- Sidebar Start --}}
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0"
    aria-label="Sidebar">
    <div class="px-4 py-8 flex justify-center">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/logo-ec.svg') }}" class="h-5" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap">{{ config('app.name') }}</span>
        </a>
    </div>
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('example-page') }}" class="side-menu {{ Request::is('example*') ? 'side-menu-active' : '' }}">
                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-house"></i>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li>
                <button type="button"
                    class="side-menu {{ Request::is('test*') ? 'side-menu-active' : '' }}"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-file-invoice"></i>
                        <span>Dropdown</span>
                    </div>
                    <i class="fa-solid fa-angle-down"></i>
                </button>
                <ul id="dropdown-example" class="{{ Request::is('test*') ? 'flex' : '' }}hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('test-page') }}"
                            class="sub-menu {{ Request::is('test') ? 'sub-menu-active' : '' }}">
                            Test</a>
                    </li>
                    <li>
                        <a href=""
                            class="sub-menu {{ Request::is('') ? 'sub-menu-active' : '' }}">Dropdown
                            2</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="border-b-2 my-4"></div>

        <ul class="space-y-2 font-medium">
            <li>
                <button type="button"
                    class="side-menu {{ Request::is('') ? 'side-menu-active' : '' }}"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-gears"></i>
                        <span>Master</span>
                    </div>
                    <i class="fa-solid fa-angle-down"></i>
                </button>
                <ul id="dropdown-example" class="{{ Request::is('') ? 'flex' : '' }}hidden py-2 space-y-2">
                    <li>
                        <a href=""
                            class="sub-menu {{ Request::is('') ? 'sub-menu-active' : '' }}">
                            Test</a>
                    </li>
                    <li>
                        <a href=""
                            class="sub-menu {{ Request::is('') ? 'sub-menu-active' : '' }}">Dropdown
                            2</a>
                    </li>
                </ul>
            </li>
        </ul>

        {{-- CTA Start --}}
        <div id="dropdown-cta" class="p-4 mt-6 rounded-lg bg-green-100" role="alert">
            <div class="flex items-center mb-3">
                <span
                    class="bg-yellow-100 text-orange-800 text-sm font-semibold me-2 px-2.5 py-0.5 rounded">Announcement</span>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 inline-flex justify-center items-center w-6 h-6 text-green-900 rounded-lg focus:ring-2 focus:ring-green-400 p-1 hover:bg-green-200"
                    data-dismiss-target="#dropdown-cta" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <p class="mb-3 text-sm text-green-800">
                Tamplate Tailwind with Flowbite
            </p>
        </div>
        {{-- CTA End --}}

    </div>
</aside>
{{-- Sidebar End --}}
