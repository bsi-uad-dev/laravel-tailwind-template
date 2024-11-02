@extends('layouts.guest')

@section('body')
    <header>
        <div class="card bg-primary flex justify-between items-center relative">
            <div class="py-10 px-8">
                <div class="text-3xl font-bold text-white">
                    Selamat Datang <span class="font-normal">Nama Lengkap User...</span>
                </div>
                <div class="text-md font-sans text-white font-normal">
                    di Sistem Pengajuan (EC) Ethical Clearance
                </div>
            </div>
            <div class="absolute bottom-0 right-0 flex justify-end px-8">
                <div class="w-[200px]">
                    <img src="{{ asset('img/doc.png') }}" alt="Dokumen" class="w-full h-auto">
                </div>
            </div>
        </div>
    </header>


    <section class="mt-4">
        <div class="w-full">
            <button
                class="w-full font-bold border-dashed border-2 border-primary text-primary rounded-lg py-5 px-10 text-sm duration-150">
                + Pengajuan Ethical Clearance
            </button>
        </div>
    </section>

    <section class="card mt-4">
        <ol class="items-center sm:flex">
            <li class="relative mb-6 sm:mb-0">
                <div class="flex items-center text-primary">
                    <span
                        class="flex items-center sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                        <i class="fa-solid fa-circle-check me-2"></i>
                        Step1
                    </span>
                    <div class="mx-4 flex w-full bg-primary h-0.5 dark:bg-gray-700"></div>
                </div>
                <div class="mt-3 sm:pe-8">
                    <div class="badge-blue">Menunggu</div>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                        December 2, 2021</time>
                </div>
            </li>
            <li class="relative mb-6 sm:mb-0">
                <div class="flex items-center text-primary">
                    <span
                        class="flex items-center sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                        <i class="fa-solid fa-circle-check me-2"></i>
                        step2
                    </span>
                    <div class="mx-4 flex w-full bg-gray-200 h-0.5"></div>
                </div>
                <div class="mt-3 sm:pe-8">
                    <div class="badge-blue">Menunggu</div>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                        December 2, 2021</time>
                </div>
            </li>
            <li class="relative mb-6 sm:mb-0">
                <div class="flex items-center text-slate-400">
                    <span
                        class="flex items-center sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                        <span class="me-2 bg-slate-100 rounded-full p-1 w-5 h-5 flex justify-center items-center">3</span>
                        step3
                    </span>
                    <div class="mx-4 flex w-full bg-gray-200 h-0.5"></div>
                </div>
                <div class="mt-3 sm:pe-8">
                    <div class="badge-blue">Menunggu</div>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                        December 2, 2021</time>
                </div>
            </li>
        </ol>
    </section>
@endsection
