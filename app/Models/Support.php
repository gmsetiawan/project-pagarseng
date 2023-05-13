<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'nik',
        'nama',
        'alamat',
        'rt',
        'kabupaten_id',
        'kecamatan_id',
        'kelurahan_id',
        'scanktp',
        'nohp',
        'keterangan',
        'rating',
        'location_id',
        'participant_id',
        'user_id'
    ];

    /**
     * Get the user that owns the Support
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the location that owns the Support
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    /**
     * Get the mem that owns the Support
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    /**
     * Get the kabupaten that owns the Support
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }

    /**
     * Get the kecamatan that owns the Support
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    /**
     * Get the kelurahan that owns the Support
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function children()
    {
        return $this->hasMany(Support::class, 'parent_id');
    }

    public function parent()
    {
        return $this->hasOne(Support::class, 'id', 'parent_id');
    }
}
