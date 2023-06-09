<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Supports') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-[1600px] mx-auto sm:px-6 lg:px-8 flex flex-col gap-4">
            <a href="{{ route('exportSupport') }}"
                class="self-end p-2 text-white text-sm rounded bg-green-600 hover:bg-green-700">Export</a>
            <a href="{{ route('supports.create') }}"
                class="self-end p-2 text-white text-sm rounded bg-green-600 hover:bg-green-700">Tambah Support</a>
            <div>
                <form action="{{ route('supports.search') }}" method="GET">
                    <label for="default-search" class="mb-2 sr-only text-sm font-medium text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="default-search" name="search"
                            class="block w-full p-4 pl-10 text-sm border rounded bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukan NIK atau nama" required>
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 focus:ring-4 focus:outline-none font-medium rounded text-sm px-4 py-2 bg-green-600 hover:bg-green-700 focus:ring-blue-800">
                            <svg aria-hidden="true" class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="relative overflow-x-auto shadow-md rounded">
                <table class="w-full text-sm text-left text-gray-400">
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
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
                                Info
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
                        @forelse ($supports as $support)
                            <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                    @if ($support->rating === 5)
                                        <div class="flex gap-1 mb-1">
                                            @for ($i = 0; $i < $support->rating; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                    class="text-yellow-400" fill="currentColor" class="bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    @elseif ($support->rating === 4)
                                        <div class="flex gap-1 mb-1">
                                            @for ($i = 0; $i < $support->rating; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                    class="text-yellow-400" fill="currentColor" class="bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    @elseif ($support->rating === 3)
                                        <div class="flex gap-1 mb-1">
                                            @for ($i = 0; $i < $support->rating; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                    class="text-yellow-400" fill="currentColor" class="bi bi-star-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    @elseif ($support->rating === 2)
                                        <div class="flex gap-1 mb-1">
                                            @for ($i = 0; $i < $support->rating; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                    class="text-yellow-400" fill="currentColor"
                                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    @elseif ($support->rating === 1)
                                        <div class="flex gap-1 mb-1">
                                            @for ($i = 0; $i < $support->rating; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                    class="text-yellow-400" fill="currentColor"
                                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    @else
                                        <div class="flex gap-1 mb-1"></div>
                                    @endif
                                    {{ $support->nik }}
                                </th>
                                <td class="px-6 py-4 font-semibold">
                                    <h1 class="whitespace-nowrap">{{ $support->nama }}</h1>
                                    <h1 class="whitespace-nowrap">{{ $support->nohp ? $support->nohp : '-' }}</h1>
                                    <h1>{{ $support->alamat }}</h1>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $support->rt }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $support->kabupaten->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $support->kecamatan->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $support->kelurahan->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($support->location === null)
                                        -
                                    @else
                                        {{ $support->location->nama }}
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($support->children->isEmpty())
                                        <h1>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                            </svg>
                                        </h1>
                                    @else
                                        <a class="text-yellow-400 hover:text-yellow-600 inline-flex items-center gap-1"
                                            href="{{ route('supports.showfamily', $support->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                            </svg>
                                            {{ __('- ' . $support->children->count()) }}
                                        </a>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    @if ($support->scanktp === null)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-person-bounding-box"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                            <path
                                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        </svg>
                                    @else
                                        <a href="{{ Storage::url('public/dataktp/') . $support->scanktp }}">
                                            <img src="{{ Storage::url('public/dataktp/') . $support->scanktp }}"
                                                class="object-cover h-10 w-20 rounded border-2 border-gray-600">
                                        </a>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $support->participant->nama }}
                                </td>
                                <td class="px-6 py-4 text-right flex flex-col gap-2">
                                    <a href="{{ route('supports.relation', $support->id) }}"
                                        class="font-medium text-white hover:scale-125 duration-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                            <path
                                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                            <path
                                                d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('supports.show', $support->id) }}"
                                        class="font-medium text-green-400 hover:text-green-600 hover:scale-125 duration-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path
                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('supports.edit', $support->id) }}"
                                        class="font-medium text-yellow-400 hover:text-yellow-600 hover:scale-125 duration-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('supports.destroy', $support->id) }}" method="POST"
                                        onsubmit="return confirm(`Yakin! {{ $support->nama }} Akan Di Hapus? `);"
                                        class="inline-flex items-center">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="font-medium text-red-400 hover:text-red-600 hover:scale-125 duration-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                                <th scope="row" colspan="14"
                                    class="px-6 py-4 font-medium whitespace-nowrap text-white">
                                    Data Kosong! Silahkan lakukan penginputan data dan pastikan data participant
                                    sudah dilakukan penginputan terlebih dahulu.
                                </th>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot class="text-xs uppercase bg-gray-700 text-gray-100 font-semibold">
                        <tr>
                            <th scope="row" colspan="14" class="px-6 py-3">
                                Total Support {{ $totalData->count() }}
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            @if ($totalData->count() > 10)
                <div class="px-4 py-2 bg-gray-200 rounded text-white">{{ $supports->links() }}</div>
            @endif
        </div>
    </div>
</x-app-layout>
