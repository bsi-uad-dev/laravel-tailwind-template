@extends('layouts.app')

@push('styles')
    {{-- costume style here, in head tag --}}
@endpush

@section('body')
    <header class="md:flex justify-between">
        <x-main-header title="Test page" />
        <div id="#breadcrumb">
            <div class="my-5">
                <x-breadcrumb :datas="[
                    route('home') => 'Home',
                ]" last="Test Page" />
            </div>
        </div>
    </header>


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
