<?php

namespace Database\Factories;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Support;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Support>
 */
class SupportFactory extends Factory
{
    protected $model = Support::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nik'                   => $this->faker->unique()->numerify('################'),
            'parent_id'             => null,
            'nama'                  => $this->faker->name,
            'alamat'                => $this->faker->address,
            'rt'                    => $this->faker->randomDigit(),
            'kabupaten_id'          => function () {
                return Kabupaten::inRandomOrder()->first()->id;
            },
            'kecamatan_id'          => function (array $attributes) {
                return Kecamatan::where('kabupaten_id', $attributes['kabupaten_id'])->inRandomOrder()->first()->id;
            },
            'kelurahan_id'          => function (array $attributes) {
                return Kelurahan::where('kecamatan_id', $attributes['kecamatan_id'])->inRandomOrder()->first()->id;
            },
            'nohp'                  => $this->faker->numerify('##########'),
            'keterangan'            => $this->faker->sentence(),
            'rating'                => $this->faker->numberBetween(1, 5),
            'participant_id'        => $this->faker->numberBetween(1, 3),
            'location_id'           => null,
            'user_id'               => 1
        ];
    }
}
