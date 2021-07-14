<div>
    @php
    $categories = ['Cafe','Restaurant','Bar', 'Lounge'];
    $colors = ['blue', 'red', 'green','yellow'];
    @endphp
    <section class="m-10">
        <div class="flex flex-row flex-wrap lg:p-10">
            <div class="w-full lg:w-1/4 p-3 rounded-lg">
                <h1 class="px-4 py-2 text-lg font-bold text-gray-900">
                    Categories
                </h1>
                <div class="flex flex-col gap-y-2 py-2">
                    <button wire:click="$set('category', null)"
                        class="w-full text-left py-2 px-4 text-sm font-semibold rounded-lg hover:text-gray-900 focus:text-gray-900  hover:bg-gray-200 focus:bg-gray-200 @if($active_category == null) bg-gray-200 text-gray-900 @else text-gray-400 @endif">
                        All Category
                    </button>
                    @foreach ($categories as $index => $category)
                    <button wire:click=" $set('category', {{ $index + 1 }})"
                        class="w-full text-left py-2 px-4 text-sm font-semibold rounded-lg hover:text-gray-900 focus:text-gray-900  hover:bg-gray-200 focus:bg-gray-200  @if($active_category == $index + 1) bg-gray-200 text-gray-900 @else text-gray-400 @endif">
                        {{ $category }}
                    </button>
                    @endforeach
                </div>
            </div>
            <div class="w-full lg:w-3/4 p-3 rounded-lg">
                <div class="flex flex-row flex-wrap lg:justify-between px-4">
                    <h1 class="w-full lg:w-1/2 py-2 text-lg font-bold text-gray-900 bg-transparent">
                        Restaurants List
                    </h1>
                    <div class="w-full lg:w-1/2 flex items-center space-x-4 py-2">
                        <input wire:model="search" type="text"
                            class="w-full rounded-lg bg-gray-100 border-0 focus:ring-0 placeholder-gray-400 text-sm"
                            placeholder="Type a table name">
                        <button class="focus:outline-none"><i class="fa fa-search text-gray-500"></i></button>
                    </div>
                </div>
                <div class="flex flex-row flex-wrap">
                    @foreach ($restaurants as $restaurant)
                    <div class="flex flex-row flex-wrap w-full md:w-1/2 p-4">
                        <a class="w-full relative hover:scale-[102%] transform transition"
                            href="{{ route('restaurants.table', $restaurant)}}">
                            <img class="w-full h-56 object-center object-cover bg-no-repeat overflow-hidden rounded-lg"
                                src="{{ $restaurant->cover }}" alt="">
                            @for ($i = 0; $i < count($colors); $i++) @if ($restaurant->category->name ==
                                $categories[$i])
                                <div
                                    class="bg-{{$colors[$i]}}-400 px-2 py-1 absolute top-0 right-0 m-3 rounded text-xs font-medium text-white">
                                    {{ $restaurant->category->name }}
                                </div>
                                @endif
                                @endfor
                        </a>
                        <div class="div py-4">
                            <div class="w-full flex flex-row justify-between">
                                <h1 class="font-semibold text-base">
                                    {{ $restaurant->name. ' ' . $restaurant->category->name }}
                                </h1>
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
                            <div class="w-full text-sm text-gray-500 pt-2 text-justify">
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
                <p class="text-gray-800 font-bold text-xl text-center py-10">No Restaurants found!</p>
                @endif
            </div>
        </div>
    </section>
</div>