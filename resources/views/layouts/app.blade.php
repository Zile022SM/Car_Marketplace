<x-base-layout title="Home" bodyClass="page-home">
    @include('layouts.partials.header')

    {{ $slot }}

    @include('layouts.partials.footer')
</x-base-layout>
 