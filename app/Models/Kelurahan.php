<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'kecamatan_id'
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
     * Get the kecamatan that owns the Kelurahan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
}
