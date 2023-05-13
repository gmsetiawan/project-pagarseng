<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama'
    ];

    /**
     * Get all of the supports for the Kabupaten
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supports()
    {
        return $this->hasMany(Support::class);
    }

    /**
     * Get all of the kecamatans for the Kabupaten
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kecamatans()
    {
        return $this->hasMany(Kecamatan::class);
    }
}
