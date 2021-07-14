<div>
    <section class="m-10 rounded-lg lg:py-18">
        <div class="grid items-center grid-cols-12 px-5 gap-y-10 md:gap-y-0 md:gap-x-10 xl:gap-x-20 md:px-10 lg:px-20">
            <div class="col-span-12 md:col-span-6">
                <div class="w-full overflow-hidden rounded-lg">
                    <img src="{{ asset('src/Morning essential-cuate.svg') }}">
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 md:px-3">
                <div class="w-full lg:max-w-lg ">
                    <h1 class="text-4xl font-extrabold text-gray-900 xl:text-5xl ">
                        <span class="inline-block text-reservio">{{ $restaurant->name }}
                            <span class="text-gray-900">{{ $restaurant->category }}</span>
                        </span>
                    </h1>
                    <div class="flex items-center pt-5 text-xs font-medium uppercase">
                        @for ($i = 0; $i < 5; $i++) @if ($i < round($restaurant->score))
                            <svg class="w-5 h-5 text-yellow-500 fill-current mx-x" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            @else
                            <svg class="w-5 h-5 text-gray-400 fill-current mx-x" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            @endif
                            @endfor
                            <div class="items-center px-3 py-1.5 text-sm font-medium uppercase">
                                <span>{{ $restaurant->score }}</span>
                            </div>
                    </div>
                    <p class="pt-5 mx-auto text-xs leading-loose text-justify text-gray-400 lg:text-sm md:max-w-3xl">
                        {{ $restaurant->description }}
                    </p>
                    <p class="pt-5 mx-auto text-xs text-gray-400 lg:text-sm md:max-w-3xl">This place has
                        <span class="font-bold text-reservio">{{ $restaurant->stand->count() }}</span> tables and
                        <span class="font-bold text-reservio">{{  $restaurant->food->count() }}</span> foods availables
                    </p>
                    <p
                        class="pt-5 mx-auto text-xs font-medium leading-loose text-justify text-gray-900 lg:text-sm md:max-w-3xl">
                        {{ $restaurant->address }}
                    </p>
                </div>
            </div>

        </div>
    </section>
    @include('livewire.tables.stand')
</div>