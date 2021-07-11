<div>
    {{-- header section --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurant') }}
        </h2>
    </x-slot>
    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-10 w-full py-8 flex flex-col grid grid-cols-3">
                {{-- title --}}
                <div class="lg:col-span-2 col-span-3">
                    <h1 class="mb-1 text-4xl font-extrabold leading-none text-gray-900"><a href="#_">Restaurants</a>
                    </h1>
                    <p class="text-lg font-medium text-gray-500">Find your favourite restaurant here.</p>
                </div>
                {{-- search --}}
                <div class="lg:col-span-1 col-span-3 py-3 my-3 rounded-lg space-x-3 flex items-center w-">
                    <input wire:model="search" type="search"
                        class="w-full rounded-lg bg-white border-0 focus:ring-0 placeholder-gray-400 text-sm"
                        placeholder="Type a restaurant name">
                    <button class="focus:outline-none"><i class="fa fa-search text-gray-500"></i></button>
                </div>
            </div>
            {{-- cards --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="item-center">
                        <div class="flex grid grid-cols-12 pb-12 sm:px-5 gap-x-8 gap-y-16">
                            @foreach ($restaurants as $restaurant)
                            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                                <a href="{{ route('restaurants.table', $restaurant) }}" class="block">
                                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56"
                                        alt={{ $restaurant->name }} src="{{ $restaurant->cover }}">
                                </a>
                                <div class="w-full flex justify-between">
                                    @php
                                    $color = ['bg-blue-400', 'bg-red-400', 'bg-green-400', 'bg-yellow-400'];
                                    $restaurantCategory = ['1', '2', '3', '4'];
                                    @endphp
                                    @for ($i = 0; $i < count($color); $i++) @if ($restaurant->category_id ==
                                        $restaurantCategory[$i])
                                        <div
                                            class="{{ $color[$i] }} items-center px-3 py-1.5 rounded text-xs font-medium uppercase text-white">
                                            <span>{{  $restaurant->category->name }}</span>
                                        </div>
                                        @break
                                        @endif
                                        @endfor

                                        <div class="flex items-center text-xs font-medium uppercase">
                                            @for ($i = 0; $i < 5; $i++) @if ($i < round($restaurant->score))
                                                <svg class="mx-x w-4 h-4 fill-current text-yellow-500"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                                </svg>
                                                @else
                                                <svg class="mx-x w-4 h-4 fill-current text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                                </svg>
                                                @endif
                                                @endfor
                                                <div class="items-center px-3 py-1.5 text-xs font-medium uppercase">
                                                    <span>{{ $restaurant->score }}</span>
                                                </div>
                                        </div>
                                </div>
                                <a href="{{ route('restaurants.table', $restaurant->id) }}" class="block">
                                    <h2 class="text-lg font-bold sm:text-xl md:text-2xl">
                                        {{ $restaurant->name.' '.$restaurant->category->name}}
                                    </h2>
                                </a>
                                <p class="text-sm text-gray-500 text-justify">{{ Str::limit($restaurant->description, 150,'...') }}</p>
                                <p class="pt-2 text-xs font-medium"><a href="#"
                                        class="mr-1">{{ $restaurant->address }}</a>
                            </div>
                            @endforeach                         
                        </div>
                        {!! $restaurants->links() !!}
                        @if ($restaurants->isEmpty())
                            <p class="text-gray-800 font-bold text-2xl text-center mb-10">No Restaurants found!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
