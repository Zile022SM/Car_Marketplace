@props(['bodyClass' => null, 'title' => ''])

<x-base-layout :title :bodyClass>

    @include('layouts.partials.header')

    {{ $slot }}

</x-base-layout>
 