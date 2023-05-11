<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Participant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 rounded bg-slate-200 mb-2">
                @forelse ($participants as $participant)
                    <div class="flex justify-between items-center">
                        <h1>{{ $participant->nama }}</h1>
                        <h1 class="inline-flex items-center gap-2">{{ $participant->supports_count }}
                            <span class="text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>
                            </span>
                        </h1>
                    </div>
                @empty
                @endforelse
            </div>
            {{-- <div class="p-2 rounded bg-slate-200">
                <h1 class="text-sm font-semibold">Total Participant {{ $participants->count() }}</h1>
            </div> --}}
        </div>
    </div>
    </div>
</x-app-layout>
