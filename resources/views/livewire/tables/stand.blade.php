<div>
    @php
    $types = ['VIP', 'Regular', 'Private', 'Bussiness'];
    $colors = ['blue-400', 'red-400', 'green-400','yellow-400'];
    @endphp
    <section class="m-10">
        <div class="flex flex-row flex-wrap lg:p-10">
            <div class="w-full p-3 rounded-lg lg:w-1/4">
                <h1 class="px-4 py-2 text-lg font-bold text-gray-900">
                    Categories
                </h1>
                <div class="flex flex-col py-5 gap-y-2">
                    <button wire:click="$set('type', null)"
                        class="w-full text-left py-2 px-4  text-sm font-semibold rounded-lg hover:text-gray-900 focus:text-gray-900  hover:bg-gray-200 focus:bg-gray-200 @if($active_type == null) bg-gray-200 text-gray-900 @else text-gray-400 @endif">
                        All Type
                    </button>
                    @foreach ($types as $type)
                    <button wire:click="$set('type', '{{ $type }}')"
                        class="w-full text-left py-2 px-4  text-sm font-semibold rounded-lg hover:text-gray-900 focus:text-gray-900   hover:bg-gray-200 focus:bg-gray-200  @if($active_type == $type) bg-gray-200 text-gray-900 @else text-gray-400 @endif">
                        {{ $type }}
                    </button>
                    @endforeach
                </div>
            </div>
            <div class="w-full p-3 rounded-lg lg:w-3/4">
                <div class="flex flex-row flex-wrap px-4 lg:justify-between">
                    <h1 class="w-full py-2 text-lg font-bold text-gray-900 bg-transparent lg:w-1/2">
                        Tables List
                    </h1>
                    <div class="flex items-center w-full py-2 space-x-4 lg:w-1/2">
                        <input wire:model="search" type="text"
                            class="w-full text-sm placeholder-gray-400 bg-gray-100 border-0 rounded-lg focus:ring-0"
                            placeholder="Type a table name">
                        <button class="focus:outline-none"><i class="text-gray-500 fa fa-search"></i></button>
                    </div>
                </div>
                <div class="flex flex-row flex-wrap">
                    @foreach ($stands as $stand)
                    <div class="flex flex-row flex-wrap w-full p-4 md:w-1/2">
                        <a class="w-full rounded-lg relative hover:scale-[102%] transform transition" href="#">
                            <img class="object-cover object-center w-full h-56 overflow-hidden bg-no-repeat rounded-lg"
                                src="{{ $stand->cover }}" alt="">
                            @for ($i = 0; $i < count($colors); $i++) @if ($stand->type == $types[$i])
                                <div
                                    class="bg-{{$colors[$i]}} px-2 py-1 absolute top-0 right-0 m-3 rounded text-xs font-medium text-white">
                                    {{ $stand->type }}
                                </div>
                                @endif
                                @endfor
                                <div
                                    class="absolute bottom-0 left-0 px-2 py-1 m-3 text-sm font-medium text-white rounded">
                                    {{ $stand->restaurant->name. ' ' .$stand->restaurant->category }}
                                </div>
                                <div
                                    class="absolute bottom-0 right-0 px-2 py-1 m-3 text-xs font-medium text-white rounded">
                                    <div class="flex items-center text-xs font-medium uppercase">
                                        @for ($i = 0; $i < 5; $i++) @if ($i < round($stand->restaurant->score))
                                            <svg class="w-4 h-4 text-yellow-500 fill-current mx-x"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                            </svg>
                                            @else
                                            <svg class="w-4 h-4 text-gray-400 fill-current mx-x"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                            </svg>
                                            @endif
                                            @endfor
                                            <div class="items-center px-3 py-1.5 text-xs font-medium uppercase">
                                                <span>{{ $stand->restaurant->score }}</span>
                                            </div>
                                    </div>
                                </div>
                        </a>
                        <div class="flex flex-wrap py-4 gap-y-4">
                            <h1 class="text-base font-semibold">
                                {{ $stand->name }}
                            </h1>
                            <div class="w-full text-sm text-justify text-gray-500">
                                {{ Str::limit( $stand->description,  150)}}
                            </div>
                            <a class="inline-flex px-3 py-1.5 text-xs font-semibold rounded-lg bg-reservio text-white dark-mode:bg-transparent hover:bg-reservio-darker focus:bg-reservio-darker"
                                href="{{ route('restaurants.table', $stand->restaurant) }}">Add to Cart
                                <span class="pl-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                    </svg>
                                </span>
                            </a>

                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pt-10">
                    {{ $stands->links() }}
                </div>
                @if ($stands->isEmpty())
                <p class="py-10 text-xl font-bold text-center text-gray-800">No Table found!</p>
                @endif
            </div>
        </div>
    </section>
</div>