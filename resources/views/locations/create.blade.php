<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah TPS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('locations.store') }}" method="POST">
                        @csrf
                        <div class="relative w-full mb-2">
                            <label for="nik" class="block uppercase text-xs font-bold mb-2">
                                Nama
                            </label>
                            <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                            @error('nama')
                                <small class="alert alert-danger text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="relative w-full mb-2">
                            <label for="alamat" class="block uppercase text-xs font-bold mb-2">
                                Alamat
                            </label>
                            <input type="text" id="alamat" name="alamat" value="{{ old('alamat') }}"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                            @error('alamat')
                                <small class="alert alert-danger text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit"
                            class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-sm px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="button">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
