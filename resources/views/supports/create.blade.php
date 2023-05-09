<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Support') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('supports.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-3 gap-4">
                            <div class="relative w-full mb-2">
                                <label for="nik" class="block uppercase text-xs font-bold mb-2">
                                    NIK
                                </label>
                                <input type="number" id="nik" name="nik" value="{{ old('nik') }}"
                                    class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                                @error('nik')
                                    <small class="alert alert-danger text-red-600">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="relative w-full mb-2">
                                <label for="nama" class="block uppercase text-xs font-bold mb-2">
                                    Nama
                                </label>
                                <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                                    class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                                @error('nama')
                                    <small class="alert alert-danger text-red-600">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="relative w-full mb-2">
                                <label for="nohp" class="block uppercase text-xs font-bold mb-2">
                                    No. Handphone
                                </label>
                                <input type="number" id="nohp" name="nohp" value="{{ old('nohp') }}"
                                    class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                                @error('nohp')
                                    <small class="alert alert-danger text-red-600">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-6 gap-4">
                            <div class="relative w-full mb-2 col-span-5">
                                <label for="alamat" class="block uppercase text-xs font-bold mb-2">
                                    Alamat
                                </label>
                                <input type="text" id="alamat" name="alamat" value="{{ old('alamat') }}"
                                    class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                                @error('alamat')
                                    <small class="alert alert-danger text-red-600">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="relative w-full mb-2">
                                <label for="rt" class="block uppercase text-xs font-bold mb-2">
                                    RT
                                </label>
                                <input type="number" id="rt" name="rt" value="{{ old('rt') }}"
                                    class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                                @error('rt')
                                    <small class="alert alert-danger text-red-600">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4">
                            <div class="relative w-full mb-2">
                                <label for="kabupaten" class="block uppercase text-xs font-bold mb-2">
                                    Kabupaten
                                </label>
                                <select id="kabupaten-dropdown" name="kabupaten"
                                    class="bg-gray-50 px-3 py-3 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">-- Pilih Kabupaten --</option>
                                    @foreach ($kabupatens as $data)
                                        <option value="{{ $data->id }}">
                                            {{ $data->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('kabupaten')
                                    <small class="alert alert-danger text-red-600">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="relative w-full mb-2">
                                <label for="kecamatan" class="block uppercase text-xs font-bold mb-2">
                                    Kecamatan
                                </label>
                                <select id="kecamatan-dropdown" name="kecamatan"
                                    class="bg-gray-50 px-3 py-3 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </select>
                                @error('kecamatan')
                                    <small class="alert alert-danger text-red-600">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="relative w-full mb-2">
                                <label for="kelurahan" class="block uppercase text-xs font-bold mb-2">
                                    Kelurahan / Kampung
                                </label>
                                <select id="kelurahan-dropdown" name="kelurahan"
                                    class="bg-gray-50 px-3 py-3 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </select>
                                @error('kelurahan')
                                    <small class="alert alert-danger text-red-600">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="relative w-full mb-2">
                            <label for="scanktp" class="block uppercase text-xs font-bold mb-2">
                                Upload KTP
                            </label>
                            <input type="file" id="scanktp" name="scanktp"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0 bg-gray-700 text-white">
                            @error('scanktp')
                                <small class="alert alert-danger text-red-600">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="relative w-full mb-2">
                            <label for="keterangan" class="block uppercase text-xs font-bold mb-2">
                                Keterangan
                            </label>
                            <input type="text" id="keterangan" name="keterangan" value="{{ old('keterangan') }}"
                                class="w-full px-3 py-3 rounded shadow focus:outline-none focus:ring-0">
                            @error('keterangan')
                                <small class="alert alert-danger text-red-600">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="relative w-full mb-2">
                            <h3 class="uppercase text-xs font-bold mb-2">Rating Kepercayaan</h3>
                            <ul
                                class="items-center w-96 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="horizontal-list-radio-license" type="radio" value="1"
                                            name="rating" name="list-radio" checked
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-license"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">1</label>
                                    </div>
                                </li>
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="horizontal-list-radio-id" type="radio" value="2"
                                            name="rating" name="list-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-id"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">2</label>
                                    </div>
                                </li>
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="horizontal-list-radio-millitary" type="radio" value="3"
                                            name="rating" name="list-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-millitary"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">3</label>
                                    </div>
                                </li>
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="horizontal-list-radio-passport" type="radio" value="4"
                                            name="rating" name="list-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-passport"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">4</label>
                                    </div>
                                </li>
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="horizontal-list-radio-passport" type="radio" value="5"
                                            name="rating" name="list-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-passport"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">5</label>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class="relative w-full mb-2">
                            <label for="location" class="block uppercase text-xs font-bold mb-2">
                                TPS
                            </label>
                            <select id="location" name="location"
                                class="bg-gray-50 px-3 py-3 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Pilihan</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('location')
                                <small class="alert alert-danger text-red-600">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="relative w-full mb-2">
                            <label for="participant" class="block uppercase text-xs font-bold mb-2">
                                Sumber Data Dari
                            </label>
                            <select id="participant" name="participant"
                                class="bg-gray-50 px-3 py-3 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected>Pilihan</option>
                                @foreach ($participants as $participant)
                                    <option value="{{ $participant->id }}">
                                        {{ $participant->nama }}</option>
                                @endforeach
                            </select>
                            @error('participant')
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
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script type="module">
        $(document).ready(function() {

            // Kabupaten
            $('#kabupaten-dropdown').on('change', function() {
                var idKabupaten = this.value;
                $("#kecamatan-dropdown").html('');
                $.ajax({
                    url: "{{ url('api/fetch-kecamatan') }}",
                    type: "POST",
                    data: {
                        kabupaten_id: idKabupaten,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#kecamatan-dropdown').html(
                            '<option value="">-- Select Kecamatan --</option>');
                        $.each(result.kecamatans, function(key, value) {
                            $("#kecamatan-dropdown").append('<option value="' + value
                                .id + '">' + value.nama + '</option>');
                        });
                        $('#kelurahan-dropdown').html(
                            '<option value="">-- Select Kelurahan --</option>');
                    }
                });
            });

            // Kecamatan
            $('#kecamatan-dropdown').on('change', function() {
                var idKecamatan = this.value;
                $("#kelurahan-dropdown").html('');
                $.ajax({
                    url: "{{ url('api/fetch-kelurahan') }}",
                    type: "POST",
                    data: {
                        kecamatan_id: idKecamatan,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#kelurahan-dropdown').html(
                            '<option value="">-- Select Kelurahan --</option>');
                        $.each(res.kelurahans, function(key, value) {
                            $("#kelurahan-dropdown").append('<option value="' + value
                                .id + '">' + value.nama + '</option>');
                        });
                    }
                });
            });
        });
    </script>
</x-app-layout>
