<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Kecamatan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 rounded bg-slate-200">
                @forelse ($kecamatans as $kecamatan)
                    <div class="grid grid-cols-5 gap-4">
                        <div class="col-span-4 flex justify-between items-center">
                            <h1>{{ $kecamatan->nama }}</h1>
                            @if ($kecamatan->supports_count !== 0)
                                <h1 class="inline-flex items-center gap-2">{{ $kecamatan->supports_count }}
                                    <span class="text-gray-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path
                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                        </svg>
                                    </span>
                                </h1>
                            @endif
                        </div>
                        @foreach ($kecratings as $kecrating)
                            @if ($kecrating->kecamatan_id == $kecamatan->id)
                                {{-- <p>{{ $rating->average_rating }} - {{ $rating->rating_count }}</p> --}}
                                <div class="flex items-center justify-end gap-2">
                                    <h1 class="font-semibold">
                                        {{ number_format(($kecrating->sum_rating / $kecrating->rating_count) * 100) / 5 }}%
                                    </h1>
                                    <div class="text-orange-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
