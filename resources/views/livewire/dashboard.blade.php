<div>
    <div class="pt-8 pb-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" flex justify-between py-8 mx-10 align-bottom">
                <div>
                    <h1 class="mb-1 text-4xl font-extrabold leading-none text-gray-900"><a href="#_">Popular Restaurants</a>
                    </h1>
                    <p class="text-lg font-medium text-gray-500">Here's List of Our Popular Restaurant.</p>
                    
                </div>
                <div class="my-auto">
                    <button class="px-3 py-1.5 text-xs font-medium uppercase underline">
                    Explore All</button>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="item-center">
                        <div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
                            @foreach ($restaurants as $restaurant)
                            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                                <a href="{{ route('restaurants.table', $restaurant->id) }}" class="block">
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
                                            <span>{{ \App\Models\Category::firstWhere('id', $restaurant->category_id)->name }}</span>
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
                                        {{ $restaurant->name. ' '. \App\Models\Category::firstWhere('id', $restaurant->category_id)->name }}
                                    </h2>
                                </a>
                                <p class="text-sm text-gray-500 text-justify">{!!
                                    \Illuminate\Support\Str::limit($restaurant->description,
                                    150,'...') !!}</p>
                                <p class="pt-2 text-xs font-medium"><a href="#"
                                        class="mr-1">{{ $restaurant->address }}</a>
                            </div>
                            @endforeach
                        </div>
                        @if ($restaurants->isEmpty())
                        <p class="text-gray-800 font-bold text-2xl text-center my-10">No Restaurants found!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-8 ml-10">
                <h1 class="mb-1 text-4xl font-extrabold leading-none text-gray-900"><a href="#_">Popular Tables</a></h1>
                <p class="text-lg font-medium text-gray-500">Here's List of Our Popular Tables.</p>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="item-center">
                        <div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
                            @foreach ($stands as $stand)
                            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                                <a href="#" class="block">
                                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56"
                                        src="{{ $stand->cover }}">
                                </a>
                                <div class="w-full flex justify-between">
                                    @php
                                    $color = ['border-blue-400', 'border-red-400', 'border-green-400',
                                    'border-yellow-400'];
                                    $standCategory = ['vip', 'regular', 'private', 'bussiness'];
                                    @endphp

                                    @for ($i = 0; $i < count($color); $i++) @if ($stand->type == $standCategory[$i])
                                        <div
                                            class=" border-2 {{ $color[$i] }} items-center px-3 py-1.5 rounded text-xs font-medium uppercase text-gray-500">
                                            <span>{{ $stand->type }}</span>
                                        </div>
                                        @break
                                        @endif
                                        @endfor

                                        <div class="flex items-center text-xs font-medium uppercase">
                                            <svg class="h-6 fill-current text-grey-400"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                x="0px" y="0px" viewBox="0 0 512 512"
                                                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M437,268.152h-50.118c-6.821,0-13.425,0.932-19.71,2.646c-12.398-24.372-37.71-41.118-66.877-41.118h-88.59    c-29.167,0-54.479,16.746-66.877,41.118c-6.285-1.714-12.889-2.646-19.71-2.646H75c-41.355,0-75,33.645-75,75v80.118    c0,24.813,20.187,45,45,45h422c24.813,0,45-20.187,45-45v-80.118C512,301.797,478.355,268.152,437,268.152z M136.705,304.682    v133.589H45c-8.271,0-15-6.729-15-15v-80.118c0-24.813,20.187-45,45-45h50.118c4.072,0,8.015,0.553,11.769,1.572    C136.779,301.366,136.705,303.016,136.705,304.682z M345.295,438.271h-178.59V304.681c0-24.813,20.187-45,45-45h88.59    c24.813,0,45,20.187,45,45V438.271z M482,423.271c0,8.271-6.729,15-15,15h-91.705v-133.59c0-1.667-0.074-3.317-0.182-4.957    c3.754-1.018,7.697-1.572,11.769-1.572H437c24.813,0,45,20.187,45,45V423.271z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M100.06,126.504c-36.749,0-66.646,29.897-66.646,66.646c-0.001,36.749,29.897,66.646,66.646,66.646    c36.748,0,66.646-29.897,66.646-66.646C166.706,156.401,136.809,126.504,100.06,126.504z M100.059,229.796    c-20.207,0-36.646-16.439-36.646-36.646c0-20.207,16.439-36.646,36.646-36.646c20.207,0,36.646,16.439,36.646,36.646    C136.705,213.357,120.266,229.796,100.059,229.796z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M256,43.729c-49.096,0-89.038,39.942-89.038,89.038c0,49.096,39.942,89.038,89.038,89.038s89.038-39.942,89.038-89.038    C345.038,83.672,305.096,43.729,256,43.729z M256,191.805c-32.554,0-59.038-26.484-59.038-59.038    c0-32.553,26.484-59.038,59.038-59.038s59.038,26.484,59.038,59.038C315.038,165.321,288.554,191.805,256,191.805z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M411.94,126.504c-36.748,0-66.646,29.897-66.646,66.646c0.001,36.749,29.898,66.646,66.646,66.646    c36.749,0,66.646-29.897,66.646-66.646C478.586,156.401,448.689,126.504,411.94,126.504z M411.94,229.796    c-20.206,0-36.646-16.439-36.646-36.646c0.001-20.207,16.44-36.646,36.646-36.646c20.207,0,36.646,16.439,36.646,36.646    C448.586,213.357,432.147,229.796,411.94,229.796z" />
                                                    </g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                            </svg>
                                            <div class="items-center px-3 py-1.5 text-md font-medium uppercase">
                                                <span>{{ $stand->seat }}</span>
                                            </div>
                                        </div>
                                </div>
                                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">{{ $stand->name }}</h2>
                                <p class="text-sm text-gray-500 text-justify">{!!
                                    \Illuminate\Support\Str::limit($stand->description,
                                    150,'...') !!}</p>
                                @php
                                $restaurant = \App\Models\Restaurant::where('id', $stand->restaurant_id)->first();
                                @endphp
                                <p class="pt-2 text-xs font-medium underline"><a href="{{ route('restaurants.index') }}"
                                        class="mr-1">{{ $restaurant->name }}</a>
                            </div>
                            @endforeach
                        </div>
                        {{-- {!! $stands->links() !!} --}}

                        @if ($stands->isEmpty())
                        <p class="text-gray-800 font-bold text-2xl text-center my-10">No stand found!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
