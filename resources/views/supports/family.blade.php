<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Relasi Keluarga') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8 flex flex-col gap-4">
            <div class="relative overflow-x-auto shadow-md rounded">
                <table class="w-full text-sm text-left text-gray-400">
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                NO
                            </th>
                            <th scope="col" class="px-6 py-3">
                                NIK
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama & Alamat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                RT
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kabupaten
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kecamatan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kelurahan / Kampung
                            </th>
                            <th scope="col" class="px-6 py-3">
                                TPS
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image KTP
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Asal Data
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($families as $family)
                            <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                    @if ($family->rating === 5)
                                        <div class="flex gap-1 mb-1">
                                            @for ($i = 0; $i < $family->rating; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                    class="text-yellow-400" fill="currentColor" class="bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    @elseif ($family->rating === 4)
                                        <div class="flex gap-1 mb-1">
                                            @for ($i = 0; $i < $family->rating; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                    class="text-yellow-400" fill="currentColor" class="bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    @elseif ($family->rating === 3)
                                        <div class="flex gap-1 mb-1">
                                            @for ($i = 0; $i < $family->rating; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                    class="text-yellow-400" fill="currentColor" class="bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    @elseif ($family->rating === 2)
                                        <div class="flex gap-1 mb-1">
                                            @for ($i = 0; $i < $family->rating; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                    class="text-yellow-400" fill="currentColor" class="bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    @elseif ($family->rating === 1)
                                        <div class="flex gap-1 mb-1">
                                            @for ($i = 0; $i < $family->rating; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                    class="text-yellow-400" fill="currentColor" class="bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    @else
                                        <div class="flex gap-1 mb-1"></div>
                                    @endif
                                    {{ $family->nik }}
                                </th>
                                <td class="px-6 py-4 font-semibold">
                                    <h1 class="whitespace-nowrap">{{ $family->nama }}</h1>
                                    <h1>{{ $family->nohp ? $family->nohp : '-' }}</h1>
                                    <h1>{{ $family->alamat }}</h1>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $family->rt }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $family->kabupaten->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $family->kelurahan->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $family->kecamatan->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($family->location === null)
                                        -
                                    @else
                                        {{ $family->location->nama }}
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    @if ($family->scanktp === null)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                            <path
                                                d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                            <path
                                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        </svg>
                                    @else
                                        <a href="{{ Storage::url('public/dataktp/') . $family->scanktp }}">
                                            <img src="{{ Storage::url('public/dataktp/') . $family->scanktp }}"
                                                class="object-cover h-10 w-20 rounded border-2 border-gray-600">
                                        </a>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $family->participant->nama }}
                                </td>
                                <td class="px-6 py-4 text-right flex flex-col gap-2">
                                    <a href="{{ route('supports.show', $family->id) }}"
                                        class="font-medium text-green-400 hover:text-green-600 hover:scale-125 duration-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path
                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('supports.edit', $family->id) }}"
                                        class="font-medium text-yellow-400 hover:text-yellow-600 hover:scale-125 duration-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </a>
                                    @if ($family->parent_id !== null)
                                        <form action="{{ route('supports.removerelation', $family->id) }}"
                                            method="POST" onsubmit="return confirm('Are you sure?');"
                                            class="inline-flex items-center">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="font-medium text-red-400 hover:text-red-600 hover:scale-125 duration-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                                <th scope="row" colspan="14"
                                    class="px-6 py-4 font-medium whitespace-nowrap text-white">
                                    Data tidak ditemukan
                                </th>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th scope="row" colspan="14" class="px-6 py-3">
                                Total Data {{ $families->count() }}
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
