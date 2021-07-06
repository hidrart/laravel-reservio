<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stands') }}
        </h2>
    </x-slot>

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-10 w-full py-8 flex justify-between">    
                <div>
                    <h1 class="mb-1 text-4xl font-extrabold leading-none text-gray-900"><a href="#_">Stands</a></h1>
                    <p class="text-lg font-medium text-gray-500">Choose your Table.</p>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @livewire('index-stand', ['stands' => $stands])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
