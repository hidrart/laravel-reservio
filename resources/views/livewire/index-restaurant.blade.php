<div class="item-center">
    <div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
        @foreach ($restaurants as $restaurant)
        <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
            <a href="{{ route('stands.index', $restaurant->id) }}" class="block">
                <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56" alt={{ $restaurant->name }}
                    src="{{ $restaurant->cover }}">
            </a>
            <div class="w-full flex justify-between">
                @php
                $color = ['bg-blue-400', 'bg-red-400', 'bg-green-400', 'bg-yellow-400'];
                $restaurantCategory = ['Cafe', 'Restaurant', 'Bar', 'Lounge'];
                @endphp

                @for ($i = 0; $i < count($color); $i++)
                    @if ($restaurant->type == $restaurantCategory[$i])
                        <div class="{{ $color[$i] }} items-center px-3 py-1.5 rounded text-xs font-medium uppercase text-white">
                            <span>{{ $restaurant->type }}</span>
                        </div>
                        @break                    
                    @endif
                @endfor

                <div class="flex items-center text-xs font-medium uppercase">
                    @for ($i = 0; $i < 5; $i++) 
                        @if ($i < round($restaurant->score))
                            <svg class="mx-x w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                        @else
                            <svg class="mx-x w-4 h-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
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
            <a href="{{ route('stands.index', $restaurant->id) }}" class="block">
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">{{ $restaurant->name }}</h2>
            </a>
            <p class="text-sm text-gray-500 text-justify">{!! \Illuminate\Support\Str::words($restaurant->description,
                25,'...') !!}</p>
            <p class="pt-2 text-xs font-medium"><a href="#" class="mr-1">{{ $restaurant->address }}</a>
        </div>    
        @endforeach     
    </div>
    {!! $restaurants->links() !!}

    @if ($restaurants->isEmpty())
        <p class="text-gray-800 font-bold text-2xl text-center my-10">No Restaurants found!</p>
    @endif 
</div>
