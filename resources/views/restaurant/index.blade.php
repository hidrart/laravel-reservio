<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurant') }}
        </h2>
    </x-slot>

    <div class="pt-8 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-8 ml-10">
                <h1 class="mb-1 text-4xl font-extrabold leading-none text-gray-900"><a href="#_">Restaurants</a>
                </h1>
                <p class="text-lg font-medium text-gray-500">Choose your favourite Restaurant.</p>
            </div>
            @livewire('index-restaurant')
        </div>
    </div>
</x-app-layout>
