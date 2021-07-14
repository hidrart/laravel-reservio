<div>
    @php
    $types = ['vip', 'regular', 'private', 'bussiness'];
    $colors = ['blue', 'red', 'green','yellow'];
    @endphp
    <section class="m-10">
        <div class="flex flex-row flex-wrap lg:p-10">
            <div class="w-full lg:w-1/4 p-3 rounded-lg">
                <h1 class="px-4 py-2 text-lg font-bold text-gray-900">
                    Categories
                </h1>
                <div class="flex flex-col gap-y-2 py-2">
                    <button wire:click="$set('type', null)"
                        class="w-full text-left py-2 px-4  text-sm font-semibold rounded-lg hover:text-gray-900 focus:text-gray-900  hover:bg-gray-200 focus:bg-gray-200 @if($active_type == null) bg-gray-200 text-gray-900 @else text-gray-400 @endif">
                        All Type
                    </button>
                    @foreach ($types as $index => $type)
                    <button wire:click="$set('type', '{{ $type }}')"
                        class="w-full text-left py-2 px-4  text-sm font-semibold rounded-lg hover:text-gray-900 focus:text-gray-900   hover:bg-gray-200 focus:bg-gray-200  @if($active_type == $type) bg-gray-200 text-gray-900 @else text-gray-400 @endif">
                        {{ $type }}
                    </button>
                    @endforeach
                </div>
            </div>
            <div class="w-full lg:w-3/4 p-3 rounded-lg">
                <div class="flex flex-row flex-wrap lg:justify-between px-4">
                    <h1 class="w-full lg:w-1/2 py-2 text-lg font-bold text-gray-900 bg-transparent">
                        Tables List
                    </h1>
                    <div class="w-full lg:w-1/2 flex items-center space-x-4 py-2">
                        <input wire:model="search" type="text"
                            class="w-full rounded-lg bg-gray-100 border-0 focus:ring-0 placeholder-gray-400 text-sm"
                            placeholder="Type a table name">
                        <button class="focus:outline-none"><i class="fa fa-search text-gray-500"></i></button>
                    </div>
                </div>
                <div class="flex flex-row flex-wrap">
                    @foreach ($stands as $stand)
                    <div class="flex flex-row flex-wrap w-full md:w-1/2 p-4">
                        <a class="w-full relative hover:scale-[102%] transform transition" href="#">
                            <img class="w-full h-56 object-center object-cover bg-no-repeat overflow-hidden rounded-lg"
                                src="{{ $stand->cover }}" alt="">
                            @for ($i = 0; $i < count($colors); $i++) @if ($stand->type == $types[$i])
                                <div
                                    class="bg-{{$colors[$i]}}-400 px-2 py-1 absolute top-0 right-0 m-3 rounded text-xs font-medium text-white">
                                    {{ $stand->type }}
                                </div>
                                @endif
                                @endfor
                        </a>
                        <div class="flex flex-wrap py-4 gap-y-4">
                            <h1 class="font-semibold text-base">
                                {{ $stand->name }}
                            </h1>
                            <div class="w-full text-sm text-gray-500 text-justify">
                                {{ Str::limit( $stand->description,  150)}}
                            </div>
                            <a class="px-3 py-1.5 text-xs font-semibold rounded-lg bg-reservio text-white dark-mode:bg-transparent hover:bg-reservio-darker focus:bg-reservio-darker"
                                href="{{ route('restaurants.table', $stand->restaurant) }}">Add to Cart</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pt-10">
                    {{ $stands->links() }}
                </div>
                @if ($stands->isEmpty())
                <p class="text-gray-800 font-bold text-xl text-center py-10">No Table found!</p>
                @endif
            </div>
        </div>
    </section>
</div>