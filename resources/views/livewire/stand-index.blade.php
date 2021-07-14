<div>
    {{-- header --}}
    <section class="m-10 rounded-lg lg:py-18">
        <div class="grid items-center grid-cols-12 px-5 gap-y-10 md:gap-y-0 md:gap-x-10 xl:gap-x-20 md:px-10 lg:px-20">
            <div class="col-span-12 md:col-span-6 md:px-3">
                <div class="w-full lg:max-w-lg">
                    <h1 class="text-4xl font-extrabold text-gray-900 xl:text-5xl">
                        <span class="inline-block">Choose Your Favourite
                            <span class="text-reservio">Tables</span>
                        </span>
                    </h1>
                    <p class="pt-5 mx-auto text-sm text-gray-500 lg:text-lg md:max-w-3xl">Currently we have
                        <span class="font-bold text-reservio">{{ App\Models\Stand::count() }}</span> tables available
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