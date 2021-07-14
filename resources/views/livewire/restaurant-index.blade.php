<div>
    {{-- Header --}}
    <section class="m-10 py-10 lg:py-18 rounded-lg">
        <div class="items-center grid grid-cols-12 gap-y-10 md:gap-y-0 md:gap-x-10 xl:gap-x-20 px-5 md:px-10 lg:px-20">
            <div class="col-span-12 md:col-span-6">
                <div class="w-full overflow-hidden rounded-lg">
                    <img src="{{ asset('src/Shops re-opening soon-pana.svg') }}">
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 md:px-3">
                <div class="w-full gap-y-6 lg:max-w-lg md:gap-y-4 lg:gap-y-8 xl:gap-y-9">
                    <h1 class="font-extrabold tracking-tight text-gray-900 text-4xl xl:text-5xl">
                        <span class="inline-block">Choose Your Favourite
                            <span class="text-reservio">Restaurant</span>
                        </span>
                    </h1>
                    <p class="mx-auto text-sm text-gray-500 lg:text-lg md:max-w-3xl">we partnered with
                        <span class="text-reservio font-bold">{{ App\Models\Restaurant::count() }}</span> restaurants,
                        ready to serve wherever you are</p>
                </div>
            </div>
        </div>
    </section>
    @include('livewire.tables.restaurant')
</div>