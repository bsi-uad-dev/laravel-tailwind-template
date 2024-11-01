@extends('layouts.guest')

@section('body')
    @include('includes.alert')
    <header>
        <x-main-header title="Ini Dashboard" />
    </header>
    <div class="mt-10">
        <a href="{{ route('example-page') }}" class="underline">Example Page</a>
    </div>
@endsection