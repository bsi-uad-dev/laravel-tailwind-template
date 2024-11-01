@extends('layouts.app')

@push('styles')
    {{-- costume style here, in head tag --}}
@endpush

@section('body')
    <header>
        <x-main-header title="Ini Example Page" />
    </header>

    <section class="card" id="#breadcrumb">
        <x-main-header title="Penggunaan Breadcrumb" />
        <p class="text-sm">breadcrum menggunakan <span class="text-blue-500 font-medium">array named key</span>, <span
                class="text-red-500 font-medium">key tidak boleh sama</span></p>
        <div class="my-5">
            <p class="text-lg">Jika kurang dari 3</p>
            <x-breadcrumb :datas="[
                route('home') => 'Home',
            ]" last="Example Page" />
        </div>
        <div class="my-5">
            <p class="text-lg">Jika lebih dari 3</p>
            <x-breadcrumb :datas="[
                route('home') => 'Home',
                '/pertama' => 'pertama',
                '/kedua' => 'kedua',
                '/ketiga' => 'ketiga',
                '/keempat' => 'keempat',
            ]" last="Example Page" />
        </div>
    </section>

    <section class="card" id="#input">
        <x-main-header title="Inputan" />
        <div class="my-5">
            <p class="text-lg">default</p>
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
            <div class="btn-primary">Submit</div>
        </div>
    </section>

    <section class="card">
        <div class="flex justify-end my-2">
            <div class="btn-primary">+ Tambah</div>
        </div>
        <div class="wrap-table">
            <table class="table">
                <thead class="thead">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr">
                        <th scope="row" class="th">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="">
                                <i class="fa-solid fa-eye icon-detail"></i>
                            </a>
                            <a href="">
                                <i class="fa-solid fa-pencil icon-edit"></i>
                            </a>
                            <a href="">
                                <i class="fa-solid fa-trash-can icon-hapus"></i>
                            </a>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>

    </section>
@endsection

@push('scripts')
    <script>
        // costume script here, last body tag
    </script>
@endpush
