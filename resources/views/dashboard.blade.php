<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-\10">
                <div class="p-4 rounded bg-slate-200">
                    <h1 class="font-semibold rounded mb-2">Kalkulasi Kecamatan</h1>
                    @forelse ($kecamatans as $kecamatan)
                        <div class="flex justify-between items-center">
                            <div class="flex flex-1 w-full">
                                <h1>{{ $kecamatan->nama }}</h1>
                                <h1>{{ $kecamatan->supports_count }}</h1>
                            </div>
                            @foreach ($ratings as $rating)
                                @if ($rating->kecamatan_id == $kecamatan->id)
                                    <p>Kepuasan: {{ number_format(($rating->average_rating * 100) / 10, 0) }}%</p>
                                @endif
                            @endforeach
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
            {{ $ratings }}
            <div class="grid grid-cols-3 gap-4">
                <div class="p-4 rounded bg-slate-200">
                    <h1 class="font-semibold rounded mb-2">Kalkulasi Kecamatan</h1>
                    @forelse ($kecamatans as $kecamatan)
                        <div class="flex justify-between items-center">
                            <h1>{{ $kecamatan->nama }}</h1>
                            <h1>{{ $kecamatan->supports_count }}</h1>
                        </div>
                    @empty
                    @endforelse
                </div>
                <div class="p-4 rounded bg-slate-200">
                    <h1 class="font-semibold rounded mb-2">Kalkulasi Kelurahan</h1>
                    @forelse ($kelurahans as $kelurahan)
                        <div class="flex justify-between items-center">
                            <h1>{{ $kelurahan->nama }}</h1>
                            <h1>{{ $kelurahan->supports_count }}</h1>
                        </div>
                    @empty
                    @endforelse
                </div>
                <div class="p-4 rounded bg-slate-200">
                    <h1 class="font-semibold rounded mb-2">Kalkulasi Sumber Data</h1>
                    @forelse ($participants as $participant)
                        <div class="flex justify-between items-center">
                            <h1>{{ $participant->nama }}</h1>
                            <h1>{{ $participant->supports_count }}</h1>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>

        </div>
    </div>
    </div>
</x-app-layout>
