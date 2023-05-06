<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dropdown Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4">
            <h1>Hello</h1>
            <form>
                <div class="form-group mb-3">
                    <select id="kabupaten-dropdown" class="form-control">
                        <option value="">-- Select Kabupaten --</option>
                        @foreach ($kabupatens as $data)
                            <option value="{{ $data->id }}">
                                {{ $data->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <select id="kecamatan-dropdown" class="form-control">
                    </select>
                </div>
                <div class="form-group">
                    <select id="kelurahan-dropdown" class="form-control">
                    </select>
                </div>
            </form>
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
