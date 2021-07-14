<!-- Hero Section 2 -->
<section class="p-20">
    <div class="items-center grid grid-cols-12 space-y-20 md:space-y-0 md:space-x-20">
        <div class="col-span-12 md:col-span-7">
            <div class="space-y-6 lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                <h1
                    class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                    <span class="block xl:inline">Reservation made easy</span>
                    <span class="block text-reservio xl:inline">with Reservio!</span>
                </h1>
                <p class="mx-auto text-sm text-gray-500 lg:text-lg md:max-w-3xl">It's never been
                    easier to book a table in your favourite restaurants.</p>
                <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                    <a href="{{ route('home') }}"
                        class="flex items-center w-full px-6 py-2 mb-3 text-sm font-semibold text-white bg-reservio rounded-md sm:mb-0 hover:bg-reservio-darker sm:w-auto">
                        Start Booking
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-5">
            <img src="{{ asset('src/Layer 1.png') }}">
        </div>
    </div>
</section>