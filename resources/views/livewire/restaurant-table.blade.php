<div>
    <section class="m-10 lg:py-18 rounded-lg">
        <div class="items-center grid grid-cols-12 gap-y-10 md:gap-y-0 md:gap-x-10 xl:gap-x-20 px-5 md:px-10 lg:px-20">
            <div class="col-span-12 md:col-span-6">
                <div class="w-full overflow-hidden rounded-lg">
                    <img src="{{ asset('src/Morning essential-cuate.svg') }}">
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 md:px-3">
                <div class="w-full lg:max-w-lg ">
                    <h1 class="font-extrabold text-gray-900 text-4xl xl:text-5xl">
                        <span class="inline-block text-reservio">{{ $restaurant->name }}
                            <span class="text-gray-900">{{ $restaurant->category->name }}</span>
                        </span>
                    </h1>
                    <p class="mx-auto text-sm text-gray-500 lg:text-lg md:max-w-3xl pt-5">This place has
                        <span class="text-reservio font-bold">{{ $stands->count() }}</span> tables and
                        <span class="text-reservio font-bold">{{ $foods->count() }}</span> foods available
                        to book, from your favourites restaurants and cafes</p>
                </div>
            </div>

        </div>
    </section>
    @include('livewire.tables.stand')
</div>