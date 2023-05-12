<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-2 mb-4">
                <div class="p-4 rounded bg-slate-200">
                    <div class="flex justify-between items-center gap-2">
                        <h1 class="font-semibold rounded mb-2">Kalkulasi Kecamatan</h1>
                        <a href="{{ route('data.kecamatans') }}"
                            class="font-semibold rounded mb-2 text-blue-400 hover:text-blue-600 text-sm">Lihat
                            Semua</a>
                    </div>
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
                <div class="p-4 rounded bg-slate-200">
                    <div class="flex justify-between items-center gap-2">
                        <h1 class="font-semibold rounded mb-2">Kalkulasi Kelurahan</h1>
                        <a href="{{ route('data.kelurahans') }}"
                            class="font-semibold rounded mb-2 text-blue-400 hover:text-blue-600 text-sm">Lihat
                            Semua</a>
                    </div>
                    @forelse ($kelurahans as $kelurahan)
                        <div class="grid grid-cols-5 gap-4">
                            <div class="col-span-4 flex justify-between items-center">
                                <h1>{{ $kelurahan->nama }}</h1>
                                @if ($kelurahan->supports_count !== 0)
                                    <h1 class="inline-flex items-center gap-2">{{ $kelurahan->supports_count }}
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
                            @foreach ($kelratings as $kelrating)
                                @if ($kelrating->kelurahan_id == $kelurahan->id)
                                    <div class="flex items-center justify-end gap-2">
                                        <h1 class="font-semibold">
                                            {{ number_format(($kelrating->sum_rating / $kelrating->rating_count) * 100) / 5 }}%
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
            <div class="grid grid-cols-2 gap-4">
                <div class="p-4 rounded bg-slate-200">
                    <div class="flex justify-between items-center gap-2">
                        <h1 class="font-semibold rounded mb-2">Jumlah terdaftar berdasarkan kalkulasi sumber data</h1>
                        <a href="{{ route('data.participants') }}"
                            class="font-semibold rounded mb-2 text-blue-400 hover:text-blue-600 text-sm">Lihat
                            Semua</a>
                    </div>
                    @forelse ($participants as $participant)
                        <div class="flex justify-between items-center">
                            <h1>{{ $participant->nama }}</h1>
                            @if ($participant->supports_count !== 0)
                                <h1 class="inline-flex items-center gap-2">{{ $participant->supports_count }}
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
                    @empty
                    @endforelse
                </div>
            </div>

        </div>
    </div>
    </div>
</x-app-layout>
