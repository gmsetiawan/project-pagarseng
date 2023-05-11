<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah User Login') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="relative w-full mb-2">
                            <label for="nik" class="block uppercase text-xs font-bold mb-2">
                                Nama
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                            @error('name')
                                <small class="alert alert-danger text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="relative w-full mb-2">
                            <label for="email" class="block uppercase text-xs font-bold mb-2">
                                Email
                            </label>
                            <input type="text" id="email" name="email" value="{{ old('email') }}"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                            @error('email')
                                <small class="alert alert-danger text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="relative w-full mb-2">
                            <label for="password" class="block uppercase text-xs font-bold mb-2">
                                Password
                            </label>
                            <input type="password" id="password" name="password" value="{{ old('password') }}" required
                                autocomplete="new-password"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                            @error('password')
                                <small class="alert alert-danger text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="relative w-full mb-2">
                            <label for="password_confirmation" class="block uppercase text-xs font-bold mb-2">
                                Password Confirmation
                            </label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                value="{{ old('password_confirmation') }}" required autocomplete="new-password"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                            @error('password_confirmation')
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
