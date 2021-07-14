<div>
    {{-- header --}}
    <section class="m-10 lg:py-18 rounded-lg">
        <div class="items-center grid grid-cols-12 gap-y-10 md:gap-y-0 md:gap-x-10 xl:gap-x-20 px-5 md:px-10 lg:px-20">
            <div class="col-span-12 md:col-span-6 md:px-3">
                <div class="w-full lg:max-w-lg">
                    <h1 class="font-extrabold text-gray-900 text-4xl xl:text-5xl">
                        <span class="inline-block">Choose Your Favourite
                            <span class="text-reservio">Tables</span>
                        </span>
                    </h1>
                    <p class="mx-auto text-sm text-gray-500 lg:text-lg md:max-w-3xl pt-5">Currently we have
                        <span class="text-reservio font-bold">{{ App\Models\Stand::count() }}</span> tables availabale
                        to book, from your favourites restaurants and cafes</p>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6">
                <div class="w-full overflow-hidden rounded-lg">
                    <img src="{{ asset('src/Conversation-cuate.svg') }}">
                </div>
            </div>
        </div>
    </section>
    @include('livewire.tables.stand')
</div>