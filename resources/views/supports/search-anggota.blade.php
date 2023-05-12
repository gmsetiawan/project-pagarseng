<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Support Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4">
            <div class="grid grid-cols-4 gap-2">
                <div class="col-span-3">
                    @if ($support->scanktp === null)
                        <img src="{{ Storage::url('public/noimage/') . 'no_image_available.jpeg' }}"
                            class="object-fill h-48 w-72 rounded border-2 border-gray-600 mb-2">
                    @else
                        <img src="{{ Storage::url('public/dataktp/') . $support->scanktp }}"
                            class="object-fill h-48 w-72 rounded border-2 border-gray-600 mb-2">
                    @endif

                    <ul class="max-w-full divide-y divide-gray-700">
                        <li class="pb-3 sm:pb-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                        <path
                                            d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        NIK
                                    </p>

                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                    {{ $support->nik }}
                                </div>
                            </div>
                        </li>

                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                        <path
                                            d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        Nama
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                    {{ $support->nama }}
                                </div>
                            </div>
                        </li>

                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                        <path
                                            d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-max">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        Alamat
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                    {{ $support->alamat }}
                                </div>
                            </div>
                        </li>

                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                        <path
                                            d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        No. Handphone
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                    {{ $support->nohp }}
                                </div>
                            </div>
                        </li>

                        <li class="pt-3 pb-0 sm:pt-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                        <path
                                            d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-max">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        Keterangan
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                    {{ $support->keterangan }}
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                @if ($support->parent_id)
                    <div class="mb-2 p-4 bg-red-300 rounded h-min">NIK ini telah bergabung di Grup Keluarga
                        <span class="font-semibold">
                            <a href="{{ route('supports.showfamily', $support->parent_id) }}">{{ $family->nama }}</a>
                        </span>
                    </div>
                @endif
                @if (!$support->parent_id)
                    <div class="rounded bg-gray-200">
                        <div class="p-2">
                            <div class="flex flex-col gap-2 mb-2">
                                <h1 class="text-2xl text-gray-600 font-semibold mb-2 border-b-2 border-gray-600">
                                    Keluarga</h1>
                                <div>
                                    <h1 class="mb-2 text-sm">Tambah Anggota Keluarga</h1>
                                    <div class="mb-2">
                                        <form action="{{ route('supports.searchanggota', $support->id) }}"
                                            method="GET">
                                            <div class="flex">
                                                <label for="location-search"
                                                    class="mb-2 text-sm font-medium sr-only text-white">Your
                                                    NIK</label>
                                                <div class="relative w-full">
                                                    <input type="number" id=location-search" name="search"
                                                        class="block p-2.5 w-full z-20 text-sm rounded border-l-2 border focus:ring-blue-500 bg-gray-700 border-l-gray-700  border-gray-600 placeholder-gray-400 text-white focus:border-blue-500"
                                                        placeholder="Masukan NIK" required>
                                                    <button type="submit"
                                                        class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white rounded-r border border-blue-700 focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                        </svg>
                                                        <span class="sr-only">Search</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @if ($anggota)
                                        @if ($anggota->parent_id)
                                            <p class="text-red-600 font-semibold text-sm">NIK ini sudah bergabung di
                                                Group <span
                                                    class="underline underline-offset-4 italic uppercase">{{ $anggota->parent->nama }}</span>
                                            </p>
                                        @else
                                            @if ($anggota->parent_id === $support->id)
                                                <p class="text-red-600 font-semibold text-sm">NIK ini sudah bergabung
                                                    di
                                                    Group
                                                    ....</p>
                                            @elseif ($checkGroupHead)
                                                @if ($anggota)
                                                    <p class="text-red-600 font-semibold text-sm">NIK sudah sebagai
                                                        group
                                                        head
                                                    </p>
                                                @endif
                                            @elseif ($support->id === $anggota->id)
                                                <p class="text-red-600 font-semibold text-sm">Tambah anggota tidak
                                                    diperbolehkan dari sumber NIK yang sama</p>
                                            @else
                                                <div class="text-sm">
                                                    <form
                                                        action="{{ route('supports.addanggota', [$support->id, $anggota->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="hidden relative w-full mb-2">
                                                            <input type="text" id="id" name="id"
                                                                value="{{ old('id', $anggota->id) }}"
                                                                class="w-full rounded" disabled>
                                                        </div>
                                                        <div class="flex justify-between items-center">
                                                            <h1>NIK</h1>
                                                            <h1>{{ $anggota->nik }}</h1>
                                                        </div>
                                                        <div class="flex justify-between items-center">
                                                            <h1>Nama</h1>
                                                            <h1>{{ $anggota->nama }}</h1>
                                                        </div>
                                                        <button
                                                            class="p-1.5 bg-gray-600 text-white rounded px-4 text-sm float-right my-2">Tambah</button>
                                                    </form>
                                                </div>
                                            @endif
                                        @endif
                                    @else
                                        <h1 class="text-red-600 font-semibold text-sm">Data tidak ditemukan</h1>
                                    @endif
                                </div>
                            </div>

                            <div class="flex flex-col gap-2">
                                @foreach ($families as $family)
                                    <a href="{{ route('supports.show', $family->id) }}">
                                        <div class="flex items-center gap-2">
                                            <div class="h-12 w-12 rounded bg-gray-400"></div>
                                            <div class="text-sm">
                                                <h1>{{ $family->nik }}</h1>
                                                <h1>{{ $family->nama }}</h1>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
