<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User Login') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-2">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="font-semibold mb-2">Edit User Profile</h1>
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="relative w-full mb-2">
                            <label for="name" class="block uppercase text-xs font-bold mb-2">
                                Nama
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                            @error('name')
                                <small class="alert alert-danger text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="relative w-full mb-2">
                            <label for="email" class="block uppercase text-xs font-bold mb-2">
                                Email
                            </label>
                            <input type="text" id="email" name="email" value="{{ old('email', $user->email) }}"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0" disabled>
                            @error('email')
                                <small class="alert alert-danger text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="relative w-full mb-2">
                            <label for="bio" class="block uppercase text-xs font-bold mb-2">
                                Bio
                            </label>
                            <input type="text" id="bio" name="bio" value="{{ old('bio', $user->bio) }}"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                            @error('bio')
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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="font-semibold mb-2">Change User Password</h1>
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="relative w-full mb-2">
                            <label for="current_password" class="block uppercase text-xs font-bold mb-2">
                                Current Password
                            </label>
                            <input type="password" id="current_password" name="current_password"
                                autocomplete="current-password" autocomplete="new-password"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                            @error('current_password')
                                <small class="alert alert-danger text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="relative w-full mb-2">
                            <label for="password" class="block uppercase text-xs font-bold mb-2">
                                New Password
                            </label>
                            <input type="password" id="password" name="password" autocomplete="new-password"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                            @error('password_confirmation')
                                <small class="alert alert-danger text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="relative w-full mb-2">
                            <label for="password_confirmation" class="block uppercase text-xs font-bold mb-2">
                                Password Confirmation
                            </label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                value="{{ old('password_confirmation') }}" autocomplete="new-password"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                            @error('password_confirmation')
                                <small class="alert alert-danger text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit"
                            class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-sm px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="button">
                            Simpan Password Baru
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
