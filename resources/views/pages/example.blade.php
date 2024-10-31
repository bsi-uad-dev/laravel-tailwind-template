@extends('layouts.app')

@push('styles')
    {{-- costume style here, in head tag --}}
@endpush

@section('body')
    <header>
        <x-main-header title="Ini Example Page" />
    </header>

    <section class="w-full p-4 border border-gray-50 shadow rounded-lg mb-5" id="#breadcrumb">
        <x-main-header title="Penggunaan Breadcrumb" />
        <p class="text-sm">breadcrum menggunakan <span class="text-blue-500 font-medium">array named key</span>, <span class="text-red-500 font-medium">key tidak boleh sama</span></p>
        <div class="my-5">
            <p class="text-lg">Jika kurang dari 3</p>
            <x-breadcrumb :datas="[
                route('home') => 'Home'
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

    <section class="w-full p-4 border border-gray-50 shadow rounded-lg" id="#input">
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
            <x-basic-input type="text" name="inputan" id="input" value="{{ old('inputan', 'ini disabled') }}" disabled />
        </div>
        <div class="my-5">
            <p class="text-lg">readonly</p>
            <x-basic-input type="text" name="inputan" id="input" value="{{ old('inputan', 'ini readonly') }}" readonly />
        </div>
        <div class="my-5">
            <p class="text-lg">with logic blade</p>
            <x-basic-input type="text" name="inputan" id="input" value="{{ old('inputan', 'ini dengan logic blade disabled') }}" :disabled="true" />
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // costume script here, last body tag
</script>
@endpush