@extends('layouts.guest')

@section('body')

    <section class="card mt-4">
        <ol class="items-center sm:flex m-4">
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

        <div class="card border-2 border-dashed border-slate-400" id="#input">
            <x-main-header title="Inputan" />
            <div class="my-5">
                <x class="text-lg">default</x>
                <x-basic-input type="text" name="inputan" id="input" value="{{ old('inputan') }}" />
            </div>
            <div class="my-5">
                <p class="text-lg">required</p>
                <x-basic-input type="text" name="inputan" id="input" value="{{ old('inputan') }}" required />
            </div>
            <div class="my-5">
                <p class="text-lg">disabled</p>
                <x-basic-input type="text" name="inputan" id="input" value="{{ old('inputan', 'ini disabled') }}"
                    disabled />
            </div>
            <div class="my-5">
                <p class="text-lg">readonly</p>
                <x-basic-input type="text" name="inputan" id="input" value="{{ old('inputan', 'ini readonly') }}"
                    readonly />
            </div>
            <div class="my-5">
                <p class="text-lg">with logic blade</p>
                <x-basic-input type="text" name="inputan" id="input"
                    value="{{ old('inputan', 'ini dengan logic blade disabled') }}" :disabled="true" />
            </div>
            <div class="flex justify-end my-2">
                <div class="btn-secondary">Cancel</div>
                <div class="btn-primary">Submit</div>
            </div>
        </div>
    </section>
@endsection
