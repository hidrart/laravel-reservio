<div>
    @php
    $categories = ['Cafe','Restaurant','Bar', 'Lounge'];
    $colors = ['blue-400', 'red-400', 'green-400','yellow-400'];
    @endphp
    <section class="m-10">
        <div class="flex flex-row flex-wrap lg:p-10">
            <div class="w-full p-3 rounded-lg lg:w-1/4">
                <h1 class="px-4 py-2 text-lg font-bold text-gray-900">
                    Categories
                </h1>
                <div class="flex flex-col py-5 gap-y-2">
                    <button wire:click="$set('category', null)"
                        class="w-full text-left py-2 px-4 text-sm font-semibold rounded-lg hover:text-gray-900 focus:text-gray-900  hover:bg-gray-200 focus:bg-gray-200 @if($active_category == null) bg-gray-200 text-gray-900 @else text-gray-400 @endif">
                        All Category
                    </button>
                    @foreach ($categories as $category)
                    <button wire:click=" $set('category', '{{ $category }}')"
                        class="w-full text-left py-2 px-4 text-sm font-semibold rounded-lg hover:text-gray-900 focus:text-gray-900  hover:bg-gray-200 focus:bg-gray-200  @if($active_category == $category) bg-gray-200 text-gray-900 @else text-gray-400 @endif">
                        {{ $category }}
                    </button>
                    @endforeach
                </div>
            </div>
            <div class="w-full p-3 rounded-lg lg:w-3/4">
                <div class="flex flex-row flex-wrap px-4 lg:justify-between">
                    <h1 class="w-full py-2 text-lg font-bold text-gray-900 bg-transparent lg:w-1/2">
                        Restaurants List
                    </h1>
                    <div class="flex items-center w-full py-2 space-x-4 lg:w-1/2">
                        <input wire:model="search" type="text"
                            class="w-full text-sm placeholder-gray-400 bg-gray-100 border-0 rounded-lg focus:ring-0"
                            placeholder="Type a table name">
                        <button class="focus:outline-none"><i class="text-gray-500 fa fa-search"></i></button>
                    </div>
                </div>
                <div class="flex flex-row flex-wrap">
                    @foreach ($restaurants as $restaurant)
                    <div class="flex flex-row flex-wrap w-full p-4 md:w-1/2">
                        <a class="w-full relative hover:scale-[102%] transform transition"
                            href="{{ route('restaurants.table', $restaurant)}}">
                            <img class="object-cover object-center w-full h-56 overflow-hidden bg-no-repeat rounded-lg"
                                src="{{ $restaurant->cover }}" alt="">
                            @for ($i = 0; $i < count($colors); $i++) @if ($restaurant->category ==
                                $categories[$i])
                                <div
                                    class="bg-{{$colors[$i]}} px-2 py-1 absolute top-0 right-0 m-3 rounded text-xs font-medium text-white">
                                    {{ $restaurant->category }}
                                </div>
                                @endif
                                @endfor
                        </a>
                        <div class="py-4 div">
                            <div class="flex flex-row justify-between w-full">
                                <h1 class="text-base font-semibold">
                                    {{ $restaurant->name. ' ' . $restaurant->category }}
                                </h1>
                                <div class="flex items-center text-xs font-medium uppercase">
                                    @for ($i = 0; $i < 5; $i++) @if ($i < round($restaurant->score))
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
                                            <span>{{ $restaurant->score }}</span>
                                        </div>
                                </div>
                            </div>
                            <div class="w-full pt-2 text-sm text-justify text-gray-500">
                                {{ Str::limit( $restaurant->description,  150)}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pt-10">
                    {{ $restaurants->links() }}
                </div>
                @if ($restaurants->isEmpty())
                <p class="py-10 text-xl font-bold text-center text-gray-800">No Restaurants found!</p>
                @endif
            </div>
        </div>
    </section>
</div>