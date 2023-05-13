<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'kabupaten_id'
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
     * Get all of the kelurahans for the Kecamatan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kelurahans()
    {
        return $this->hasMany(Kelurahan::class);
    }

    /**
     * Get the kabupaten that owns the Kecamatan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function averageRating()
    {
        return $this->supports()->select(DB::raw('AVG(rating) as average_rating'))->groupBy('kecamatan_id');
    }
}
