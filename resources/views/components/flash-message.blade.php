@if ($message = Session::get('success'))
    <div class="relative z-10" x-data="{ open: true }" x-show="open" x-init="setTimeout(() => open = false, 3000)">
        <div class="absolute top-4 right-4 bg-gray-700 text-white p-2 rounded shadow">
            <div class="flex items-center w-72 lg:w-96 max-w-xs justify-between gap-2 p-4">
                <div class="flex items-center">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </span>
                    <h1 class="font-semibold">{{ Session::get('success') }}</h1>
                </div>
                <button @click="open = false" type="button">
                    <span class="sr-only">Dismiss</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="relative z-10" x-data="{ open: true }" x-show="open" x-init="setTimeout(() => open = false, 3000)">
        <div class="absolute top-4 right-4 bg-yellow-500 text-white p-2 rounded shadow">
            <div class="flex items-center w-72 lg:w-96 max-w-xs justify-between gap-2 p-4">
                <div class="flex items-center">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                    </span>
                    <h1 class="font-semibold">{{ Session::get('info') }}</h1>
                </div>
                <button @click="open = false" type="button">
                    <span class="sr-only">Dismiss</span>
                    <!-- Heroicon name: outline/x-mark -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="relative z-10" x-data="{ open: true }" x-show="open" x-init="setTimeout(() => open = false, 3000)">
        <div class="absolute top-4 right-4 bg-red-500 text-white p-2 rounded shadow">
            <div class="flex items-center w-72 lg:w-96 max-w-xs justify-between gap-2 p-4">
                <div class="flex items-center">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </span>
                    <h1 class="font-semibold">{{ Session::get('error') }}</h1>
                </div>
                <button @click="open = false" type="button">
                    <span class="sr-only">Dismiss</span>
                    <!-- Heroicon name: outline/x-mark -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endif
